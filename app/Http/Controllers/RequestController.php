<?php

namespace App\Http\Controllers;


use App\Models\Request;

class RequestController extends Controller
{
    public function create()
    {
        return view('requests.create');
    }
    
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $requestData = $request->validate([
                'sender_id' => 'required',
                'theme' => 'required',
                'colors' => 'required',
                'due_date' => 'required',
                'usage' => 'required',
            ]);

            // Save the request data to the database
            $requestModel = Request::create($requestData);

            // Optionally, you can redirect back with a success message
            return redirect()->route('requests.create')->with('success', 'Request submitted successfully');
        }
    }
}

