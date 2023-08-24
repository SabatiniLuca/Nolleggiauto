<?php

namespace App\Http\Controllers;

use App\Models\Resources\Auto;

class PublicController extends Controller
{
    public function showAuto(){
        $autos = Auto::paginate(3); // Retrieve all records from the Auto table

        return view('showAuto', ['autos' => $autos]);
    }

}
