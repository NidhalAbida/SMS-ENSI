@extends('layouts.app')

@section('content')
<br><br><br>
@foreach($posts as $post)

<div class=" w-4/5 mx-auto py-15 border-b border-gray-200 ">

   <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                        {{$post->INTITULE}}
                </h2>
                <span class="text-gray-500">
                by<span class="font-bold italic text-gray-800"> {{App\Models\compte::where('LOGIN',$post->LOGIN)->first()->INTITULE}} </span>  created  at {{date('jS M Y'   ),strtotime($post->created_at)}}
                </span>

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{$post->DETAILS}}

                </p>
               
   </div>
</div>
@endforeach
<br><br><br>
@endsection