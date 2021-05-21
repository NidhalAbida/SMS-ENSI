@extends('layouts.app1')

@section('content')







<div class='m-15'>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                    {{$post->INTITULE}}
                </h2>
                <span class="text-gray-500">
                by<span class="font-bold italic text-gray-800">{{App\Models\compte::where('LOGIN',$post->LOGIN)->first()->INTITULE}}</span>,{{$post->TYPEDEVOIR}} and created  at {{date('jS M Y'   ),strtotime($post->created_at)}}
                </span>

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{$post->ENNONCE}}
                </p>
                <button onClick="window.print()" onmouseover="style.color='transparent'" onmouseout="style.color='black'">Imprimer</button>`
    
</div>           
<br><br><br>

@endsection