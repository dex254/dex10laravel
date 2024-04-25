<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Omba;

class OmbaController extends Controller
{
    public function index()
    {
        return view('omba.index');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sender_id' => 'required|exists:users,id',
            'sender_email' => 'required|exists:users,email',
            
            'themes' => 'required',
            'colors' => 'required',
            'due_date' => 'required|date',
            'usage' => 'required',
        ]);
        
        Omba::create($validatedData);
        
        return redirect()->route('ombas.index')->with('success', 'Omba request submitted successfully!');
    }
}

