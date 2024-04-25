<?php

namespace App\Http\Controllers;


use App\Models\Patao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use Dompdf\Options;


class PataoController extends Controller
{
    public function index()
    {
        return view('patao.index');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'document' => 'required|file',
            'sender_id' => 'required|exists:users,id',
            'sender_email' => 'required|exists:users,email',
            'nameing' => 'required',
            'description' => 'required',
            'explain' => 'required',
            'due_date' => 'required|date',
            'users' => 'required',
            'amount' => 'required',
            'comun' => 'required',
        ]);
    
        // Ensure document file exists
        if ($request->hasFile('document')) {
            $documentName = time() . '.' . $request->document->getClientOriginalExtension();
            $request->document->move(public_path('uploads/folders'), $documentName);
    
            // Save the form data to the database
            patao::create([
                'document_name' => $documentName,
                'sender_id' => $request->sender_id,
                'sender_email' => $request->sender_email,
                'nameing' => $request->nameing,
                'description' => $request->description,
                'explain' => $request->explain,
                'due_date' => $request->due_date,
                'users' => $request->users,
                'amount' => $request->amount,
                'comun' => $request->comun,
                // Add other fields if needed
            ]);
    
            // Redirect back with success message
            return redirect()->back()->with('success', 'Dociument uploaded successfully.');
        } else {
            // Handle the case when no file is uploaded
            return redirect()->back()->with('error', 'No file uploaded.');
        }
    }
    public function veiw(Request $request)
    {
        // Access filtered patao data from the request
        $patao = $request->patao;

        // Return a response or pass the data to the view
        return view('patao.veiw', compact('patao'));
    }
    public function detail($id)
    
    {  
        $patao = patao::where('id', $id)
        ->where('sender_id', Auth::id())
        ->firstOrFail(); 
        
    return view('patao.detail', ['patao' => $patao]);
        
    }
    public function showRequestForm()

    {     
        $pataos = patao::where('sender_id', Auth::id())->get();
        return view('patao.request');
    }
    public function delete($id)
    {
        // Find the Yetu entry by id and sender_id of authenticated user
        $patao = patao::where('id', $id)
                    ->where('sender_id', Auth::id())
                    ->firstOrFail();

        // Delete the Yetu entry
        $patao->delete();

        session()->flash('success', 'Item deleted successfully.');

        return redirect()->back();
    }
    public function downloadPDF($id)
    {
        $patao = patao::where('id', $id)
                    ->where('sender_id', Auth::id())
                    ->firstOrFail();

        // Create a new PDF instance
        $pdf = new Dompdf();

        // HTML content for the PDF
        $html = view('patao.pdf', compact('patao'))->render();

        // Load HTML content into Dompdf
        $pdf->loadHtml($html);

        // Set paper size and orientation
        $pdf->setPaper('A4', 'portrait');

        // Render PDF (generate)
        $pdf->render();

        // Output the generated PDF (force download)
        return $pdf->stream('patao_details.pdf');
    }
    
  
}
    