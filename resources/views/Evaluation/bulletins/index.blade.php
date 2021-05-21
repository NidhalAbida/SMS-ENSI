@extends('layouts.app')


@section('content')
<div class="w-4/5 m-auto text-center p-5">
    <div  class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Bulletins
        </h1>
    </div>
</div>
<br><br><br>
<div class="w-4/5 m-auto text-center p-10">
<div class="pt+15 w-4/5 m-auto text-left">
    <a href="/bulletins/create"
       class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font extra-bold py-4 px-3 rounded-3xl text-center float-left">
       ajouter bulletin
    </a>
</div>
<div class="pt+15 w-4/5 m-auto text-left">
    <a href="/bulletins"
       class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font extra-bold py-4 px-3 rounded-3xl text-center float-right">
       consulter bulletins
    </a>
</div>
</div>
<br><br><br>
                
@endsection