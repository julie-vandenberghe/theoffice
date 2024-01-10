@extends('layouts.app')

@section('content')
    <div class="flex items-center gap-10 mb-6">
        <h1 class="font-bold text-3xl">Nos Utilisateurs</h1>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-m text-gray-700 uppercase bg-yellow-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class=" px-6 py-3">Nom</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-yellow-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $user->name }}</td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
