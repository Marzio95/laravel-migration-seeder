<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
use Hamcrest\Type\IsNumeric;

class TrainController extends Controller
{
    public function trainsList()
    {

        $myTrains = Train::where('prezzo_biglietto', '<', 1000)
            ->paginate(20);
        // ->get();
        $data = [
            'myTrains' => $myTrains,
        ];
        return view('trainsPage', $data);
    }
}

// $myTrain = new Train();
        // $myTrain->azienda = 'FrecciaArgento';
        // $myTrain->stazione_di_partenza = 'Roma';
        // $myTrain->stazione_di_arrivo = 'Bergamo';
        // $myTrain->orario_di_partenza = '11:00';
        // $myTrain->orario_di_arrivo = '16:00';
        // $myTrain->codice_treno = '456747862345';
        // $myTrain->numero_carrozze = '4';
        // $myTrain->in_orario = 'NO';
        // $myTrain->cancellato = 'SI';
        // $myTrain->prezzo_biglietto = '13.00';

        // $myTrain->save();
