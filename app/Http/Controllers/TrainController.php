<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Carbon;

class TrainController extends Controller
{
    public function index()
{
    $currentDate = Carbon::now()->toDateString(); // Ottieni la data odierna
    $allTrains = Train::all();
    $trains = Train::whereDate('Data_di_partenza', $currentDate)->get();
    // dd($trains);
    return view('home', ['trains' => $trains, 'allTrains' => $allTrains]);

    
   
}

}


