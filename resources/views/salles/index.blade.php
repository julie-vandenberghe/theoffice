@extends('layouts.app')

@section('content')
    <div class="flex items-center gap-10 mb-6">
        <h1 class="text-3xl">Nos Salles</h1>
        <a href="/salle/nouvelle" class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Ajouter une salle</a>
    </div>

    <div  class="flex flex-wrap -mx-3 ">
        @foreach ($rooms as $room)
        {{-- <div class="flex border p-4 shadow gap-10 items-center"> --}}
            <div class="w-2/5">
                <img class="w-full" src="{{ $room->picture }}" alt="{{ $room->name }}">
            </div>
            <div class="w-2/5">
                <div class="">
                    <h1 class="text-3xl">Salle N°{{ $room->roomNumber }}</h1>
                        <p class="text-sm mb-3">
                            {{ $room->name }}
                    </p>
                </div>   
            </div> 
            <div class="w-2/5 ">
                <div class="flex place-content-around place-content-stretch">
                <h1 class="text-2xl line-through text-red-600 ">{{ $room->price }}€</h1>               
                </div> 
        </div>
            @endforeach
    </div>

@endsection
