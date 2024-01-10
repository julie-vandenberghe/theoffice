<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Inscriptioncontroller extends Controller
{
    public function inscription()
    {
        return view('inscription');
    }

    public function client()
    {
        return view('inscription', [
            'users' => User::all(),
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|confirmed',
            // 'password_confirm'=>'required|min:8',
        ]);

        $client = new User();
        $client->email = $request->email;
        $client->password = $request->password;
        $client->save();
    
        return redirect('/inscription')->with('message', 'Le client a été créé.');
    }

    


}
