@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div  class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Questions
        </h1>
    </div>
</div>

<div class="pt+15 w-4/5 m-auto text-center">
    <a href="/Forum/create"
       class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font extra-bold py-4 px-3 rounded-3xl">
       Ajouter Question
    </a>
    <br>
    <br>
    <br>
    <form class="relative">
    <input class="focus:border-light-blue-500 focus:ring-1 focus:ring-light-blue-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-10" type="text" aria-label="Chercher Question" placeholder="Chercher Question" />
    </form>
</div>
<div class=" w-4/5 mx-auto py-15 border-b border-gray-200 ">

   <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                        Titre Question
                </h2>
                <span class="text-gray-500">
                by<span class="font-bold italic text-gray-800">  user </span>  1 day ago
                </span>

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    details
                </p>
                <div class="sm:grid grid-cols-2 gap-10 w-4/5 mx-auto py-5 border-b border-gray-200 ">
                <div>
                <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-6 rounded-3xl">
                    Consulter reponses
                </a>
                </div>
                <div>
                <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-6 rounded-3xl text-left">
                    repondre
                </a>
                </div>
                </div>
   </div>
</div>
@endsection