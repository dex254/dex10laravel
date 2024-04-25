<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChartData; // Assuming you have a model named ChartData to interact with your database

class ChartController extends Controller
{
    public function index()
    {
        // Fetch chart data from the database
        $chartData = ChartData::all(); // This is just an example, you may need to adjust this query based on your data structure

        // Format the data as needed for your chart library
        $labels = $chartData->pluck('label')->toArray();
        $data = $chartData->pluck('value')->toArray();

        // Pass the data to the view
        return view('chart.index', [
            'chartData' => [
                'labels' => $labels,
                'data' => $data,
            ]
        ]);
    }
}
