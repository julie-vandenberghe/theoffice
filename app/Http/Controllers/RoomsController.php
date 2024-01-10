<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomsController extends Controller
{

    public function create()
    {
        return view('create', [
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'nullable|numeric|between:1,9999',
            'number' => 'nullable|numeric',
        ]);

        $room = new Room();
        $room->name = $request->name;
        $room->price = $request->price;
        $room->number = $request->number;
        $room->save();
    
        return redirect('/')->with('message', 'La salle a été ajoutée.');
    }

}
