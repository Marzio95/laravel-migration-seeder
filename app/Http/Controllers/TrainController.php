<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function trainsList()
    {
        $myTrains = Train::all();
        $data = [
            'myTrains' => $myTrains,
        ];
        return view('trainsPage', $data);
    }
}
