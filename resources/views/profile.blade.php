@extends('layouts.main')

@section('content')
<div class="w-3/4 m-auto">
    <div class="flex">
        <div class="flex flex-col items-center w-1/3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
            </svg>
            <p class="my-3">Annonces actives</p>
            <p>3</p>
        </div>
        <div class="border-l-2 border-r-blue-900 flex flex-col items-center w-1/3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
            </svg>
            <p class="my-3">Messages reçus</p>
            <p>0</p>
        </div>
        <div class="border-l-2 border-r-blue-900 flex flex-col items-center w-1/3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z"/>
            </svg>
            <p class="my-3">Annonces enregistrées</p>
            <p>0</p>
        </div>
    </div>
    <div class="bg-gray-300 w-[720px] m-auto mt-5">
        <h2 class="text-center font-semibold text-2xl pt-3 pb-5">Mes informations</h2>
        <div>
            <div class="w-1/2 m-auto text-center">
                <p class="mb-3"><span class="font-semibold">Nom d'utilisateur : </span>{{ $user->name }}</p>
                <p class="mb-3"><span class="font-semibold">Email :</span>{{ $user->email }} </p>
            </div>
            <div class="flex justify-around"
            <a href="">
                <button
                    class="bg-gray-50 border-1 border-black/50 rounded-xl flex items-center justify-center px-3 py-1 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>
                    </svg>
                    <span>&nbsp;&nbsp;Modifier mes informations</span></button>
            </a>
            <a href="">
                <button
                    class="bg-gray-50 border-1 border-black/50 rounded-xl flex items-center justify-center px-3 py-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                    </svg>

                    <span>&nbsp;&nbsp;Supprimer mon compte</span></button>
            </a>
        </div>
    </div>

</div>
@stop



