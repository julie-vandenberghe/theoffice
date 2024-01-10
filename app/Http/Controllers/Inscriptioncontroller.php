<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class Inscriptioncontroller extends Controller
{
    public function inscription()
    {
        return view('inscription');
    }

    public function create(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'passeword'=>'required|min:8',
            'passeword_confirm'=>'required|min8',
        ]);

        $client = new client();
        $client->email = $request->email;
        $client->passeword = $request->passeword;
    }


}
