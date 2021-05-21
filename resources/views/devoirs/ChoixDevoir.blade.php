@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div  class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Choisir Le type de devoir
        </h1>
    </div>
</div>
<br><br><br>

<div class="pt+15 w-4/5 m-auto text-left">
    <a href="/QCM/create"
       class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font extra-bold py-4 px-10  rounded-3xl">
       QCM
    </a>
</div>
<div class="pt+15 w-4/5 m-auto text-center">
    <a href="/devoirEnligne/create"
       class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font extra-bold py-4 px-3 rounded-3xl">
        Devoir a rendre en ligne
    </a>
</div>
<div class="pt+15 w-4/5 m-auto text-right">
    <a href="/devoirEnclasse/create"
       class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font extra-bold py-4 px-3 rounded-3xl">
       Devoir a rendre en classe
    </a>
</div>
<br><br><br>
@endsection    