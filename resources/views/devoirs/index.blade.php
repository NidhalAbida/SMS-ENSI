@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div  class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Devoirs
        </h1>
    </div>
</div>
<div class="pt+15 w-4/5 m-auto text-center">
    <a href="/devoirs/ChoixDevoir"
       class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font extra-bold py-4 px-3 rounded-3xl">
       Ajouter Devoir
    </a>
</div>
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 ">
    <div>
         <img src="https://www.telegraph.co.uk/content/dam/news/2018/09/01/TELEMMGLPICT000171262693_trans_NvBQzQNjv4BqeK8ehqBZJSTiVTgumtathbH8AD1LYTdJsoz8pklmEgw.jpeg"  alt="devoirs">   
    </div> 
   <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                        Titre Devoir
                </h2>
                <span class="text-gray-500">
                by<span class="font-bold italic text-gray-800">teacher</span>,1 day ago, limit date
                </span>

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    description 
                </p>
                <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 ">
                <div>
                <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-6 rounded-3xl">
                    consulter
                </a>
                </div>
                <div>
                <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-6 rounded-3xl">
                    rendre
                </a>
                </div>
                </div>
   </div>
</div>
@endsection