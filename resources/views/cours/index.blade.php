@extends('layouts.parentlayout')
@section('content')
<div class="container">
<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Cours</h3>
                            <p class="text-subtitle text-muted">Gérer vos cours</p>
                        </div>
                    </div>
                </div>
<!--{{$posts}}-->
@if(session()->has('message'))
    <div class='w-4/5 m-auto mt-10 pl-2'>
    <p class='w-1/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4'>
    {{session()->get('message')}}
    </p>
    </div>
@endif

            
<section class="section">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Cours mis en ligne</h4>
            </div>
            <div class="card-body">
                <form class="relative">
                <input type="text" class="form-control" id="basicInput"
                        placeholder="Chercher Cours">
</form>

@if(Auth::check())
    @if(App\Models\compte::where('user_id',auth()->user()->id)->first()!=null)

        @if(App\Models\compte::where('user_id',auth()->user()->id)->first()->TYPE_COMPTE=="enseignant")


 
        <div class="buttons">
                                        <a href="/devoirs/ChoixDevoir" class="btn btn-primary">Ajouter Cours</a>
                                    </div>

        @endif
    @endif
@endif

<br><br><br>

@foreach($posts as $post)
<div class='m-15'>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                    {{$post->INTITULE}}
                </h2>
                <span class="text-gray-500">
                by<span class="font-bold italic text-gray-800">{{App\Models\compte::where('LOGIN',$post->LOGIN)->first()->INTITULE}}</span>,{{$post->TYPE}} and created  at {{date('jS M Y'   ),strtotime($post->created_at)}}
                </span>

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{$post->DETAILS}}
                </p>
                <div class="buttons">
                <a href="/cours/{{$post->ID_RESSOURCE}}" class="btn btn-primary rounded-pill">
                    consulter
                </a>
                </div>
              
                @if(isset(Auth::user()->id) && ((App\Models\compte::where('user_id',Auth::user()->id)->first()->LOGIN)==$post->LOGIN))
                
                 <span class="float-right">
                 <form action="/cours/{{$post->ID_RESSOURCE}}"
                       method="POST"  >
                       @csrf 
                       @method('delete')
                       <div class="buttons">
                        <button class="btn btn-primary rounded-pill"
                                type="submit">
                                Supprimer
                        </button>
                        </div>
                </form>
                </span>
                <span class="float-right pr-2">
                    <a href="/cours/{{$post->ID_RESSOURCE}}/edit"
                       class="btn btn-primary rounded-pill"> Editer </a>  
                       <a href="/downloadcours/{{$post->ID_RESSOURCE}}"
                    class="btn btn-primary rounded-pill"> Telecharger </a>
                <a href="/viewcours/{{$post->ID_RESSOURCE}}"
                    class="btn btn-primary rounded-pill"> Afficher cours </a>               
                 </span>
                @endif
</div>
<br><br><br>
@endforeach
</div></div>
@endsection