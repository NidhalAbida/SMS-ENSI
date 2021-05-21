@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto pt-20">
    <form action="/devoirs"
        method="Post"
        enctype="multipart/form-data">
        @csrf
        <textarea name="classe"
              placeholder="classe..."
              class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>
        <textarea name="question"
            placeholder="question"
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>
        <textarea name="réponse"
            placeholder="réponse..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>
        <textarea name="note"
            placeholder="note..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>
        <br><br><br>
        <button type ="button"
        class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
        ajouter autre question</button>
        <button type ="submit"
        class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
        publier QCM</button>
    </form>
    <br><br><br>
</div>

@endsection