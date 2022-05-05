<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function trainsList()
    {

        $myTrain = new Train();
        $myTrain->azienda = 'Italo';
        $myTrain->stazione_di_partenza = 'Roma';
        $myTrain->stazione_di_arrivo = 'Firenze';
        $myTrain->orario_di_partenza = '11:00';
        $myTrain->orario_di_arrivo = '13:00';
        $myTrain->codice_treno = '43583987';
        $myTrain->numero_carrozze = '11';
        $myTrain->in_orario = 'SI';
        $myTrain->cancellato = 'NO';
        $myTrain->prezzo_biglietto = '18.00';

        $myTrain->save();


        $myTrains = Train::all();
        $data = [
            'myTrains' => $myTrains,
        ];
        return view('trainsPage', $data);
    }
}
