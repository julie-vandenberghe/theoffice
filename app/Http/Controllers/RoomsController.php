<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;


class RoomsController extends Controller
{
    public function index()
    {
        return view('salles/index', [
            // Movie::all() fonctionne mais moins optimisé
            'rooms' => Room::all(),
        ]);
    }
}
