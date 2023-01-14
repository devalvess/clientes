<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function clients()
    {
        $names = ['Edilson' , 'Raiane', 'Edson', 'Quiteria', 'João', 'nike', 'Rabito'];

        return view('clients', compact('names'));
    }
}
