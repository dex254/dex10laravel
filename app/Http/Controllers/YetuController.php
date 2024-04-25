<?php

namespace App\Http\Controllers;

use App\Models\Yetu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use Dompdf\Options;

class YetuController extends Controller
{     
    public function index()
    {
        return view('yetu.index');
    }
    public function store(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'image' =>  'required|file|mimes:jpeg,png,jpg,gif,pdf,docx,sql|max:2048',
            'sender_id' => 'required|exists:users,id',
            'sender_email' => 'required|exists:users,email',
            'description' => 'required',
            'nameing' =>'required' ,
            'links' => 'required',
            'purpose' => 'required',
            'explain' => 'required',
            'due_date' => 'required|date',
            'users' => 'required',
            'amount' => 'required',
            'comun' => 'required',
        ]);

        // Store the image in the public/uploads folder
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/image'), $imageName);

        // Save the image details to the database
        Yetu::create([
            'image_name' => $imageName,
            'sender_id' => $request->sender_id,
            'sender_email' => $request->sender_email,
            'description' => $request->description,
            'nameing' => $request->nameing,
            'links' => $request->links,
            'purpose' => $request->purpose,
            'explain' => $request->explain,
            'due_date' => $request->due_date,
            'users' => $request->users,
            'amount' => $request->amount,
            'comun' => $request->comun,
        ]);
        session()->flash('success', 'Item saved successfully.');

        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }
   
 
  



    public function veiw(Request $request)

    {
        $yetu = $request->yetu;

        // Return a response or pass the data to the view
        return view('yetu.veiw', compact('yetu'));

        // Return the view with products data
        
    }
    public function detail($id)
    
    {  
        $yetu = Yetu::where('id', $id)
        ->where('sender_id', Auth::id())
        ->firstOrFail(); 
        
    return view('yetu.detail', ['yetu' => $yetu]);
        
    }
    public function downloadPDF($id)
    {
        $yetu = Yetu::where('id', $id)
                    ->where('sender_id', Auth::id())
                    ->firstOrFail();

        // Create a new PDF instance
        $pdf = new Dompdf();

        // HTML content for the PDF
        $html = view('yetu.pdf', compact('yetu'))->render();

        // Load HTML content into Dompdf
        $pdf->loadHtml($html);

        // Set paper size and orientation
        $pdf->setPaper('A4', 'portrait');

        // Render PDF (generate)
        $pdf->render();

        // Output the generated PDF (force download)
        return $pdf->stream('yetu_details.pdf');
    }
    public function showRequestForm()

    {     
        $yetus = Yetu::where('sender_id', Auth::id())->get();
        return view('yetu.request');
    }
    public function delete($id)
    {
        // Find the Yetu entry by id and sender_id of authenticated user
        $yetu = Yetu::where('id', $id)
                    ->where('sender_id', Auth::id())
                    ->firstOrFail();

        // Delete the Yetu entry
        $yetu->delete();

        session()->flash('success', 'Item deleted successfully.');

        return redirect()->back();
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        // Perform the search query
        $yetus = yetu::where('nameing', 'like', "%{$searchTerm}%")
                           ->orWhere('description', 'like', "%{$searchTerm}%")
                           ->get();

        return view('yetu.veiw', compact('yetu'));
    }

}
