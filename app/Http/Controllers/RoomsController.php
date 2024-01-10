<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function create()
    {
        return view('salle/create', [
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'nullable|numeric|between:1,9999',
            'number' => 'nullable|numeric',
        ]);

        $matelas = new Room();
        $matelas->name = $request->name;
        $matelas->price = $request->price;
        $matelas->number = $request->number;
        $matelas->save();
    
        return redirect('/')->with('message', 'Le matelas a été ajouté.');
    }
}
