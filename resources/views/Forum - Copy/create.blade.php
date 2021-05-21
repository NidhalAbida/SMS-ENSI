@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div  class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Ajouter Question
        </h1>
    </div>
</div>
@if ($errors->any())
<div class="w-4/5 m-auto">
<ul>
@foreach($errors->all() as $error)
<li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
{{$error}}</li>
@endforeach
</ul></div> 
@endif

<div class="w-4/5 m-auto pt-20">
    <form action="/Forum"
          method="Post"
          enctype="multipart/form-data">
          @csrf
    <input type="text"
            name="titre"
            placeholder="Titre..."
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">
    <textarea name="description"
              placeholder="Details..."
              class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>
    <textarea name="MOTS"
              placeholder="mots clefs....."
              class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>
    
    

    <button type ="submit"
    class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
    Confirmer</button>
    </form>
</div>

@endsection