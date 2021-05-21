@extends('layouts.parentlayout')
@section('content')
<div class="container">
<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Devoirs</h3>
                            <p class="text-subtitle text-muted">Gérer vos devoirs</p>
                        </div>
                    </div>
                </div>
                <section class="section">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Devoirs mis en ligne</h4>
                                </div>
                                <div class="card-body">
                                    <form class="relative">
                                    <input type="text" class="form-control" id="basicInput"
                                            placeholder="Chercher question">
            </form>
 
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
                <h4>Devoirs mis en ligne</h4>
            </div>
            <div class="card-body">
                <form class="relative">
                <input type="text" class="form-control" id="basicInput"
                        placeholder="Chercher question">
</form>

@if(Auth::check())

    @if(App\Models\compte::where('user_id',auth()->user()->id)->first()!=null)

        @if(App\Models\compte::where('user_id',auth()->user()->id)->first()->TYPE_COMPTE=="enseignant")
<div class="pt+15 w-4/5 m-auto text-center">
    <a href="/devoirs/ChoixDevoir"
       class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font extra-bold py-4 px-3 rounded-3xl">
       Ajouter Devoir
    </a>
</div>
        @endif
    @endif
@endif
<br><br><br>
@foreach($posts as $post)

<div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                    {{$post->INTITULE}}
                </h2>
                <span class="text-gray-500">
                by<span class="font-bold italic text-gray-800">{{App\Models\compte::where('LOGIN',$post->LOGIN)->first()->INTITULE}}</span>de type {{$post->TYPEDEVOIR}},crée le  {{$post->created_at}}, date limite  {{$post->DATE_LIMITE}}
                </span>

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{$post->ENNONCE}}
                </p>
                <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 ">
                @if( $post-> TYPEDEVOIR==0)
                <div>
                <a href="/devoirEnclasse/{{$post->ID_DEVOIR}}" class="btn btn-primary rounded-pill">
                    consulter
                </a>
                </div>
              
                
                @endif
                @if($post->TYPEDEVOIR ==1)
                <div>
                <a href="/devoirEnligne/{{$post->ID_DEVOIR}}" class="btn btn-primary rounded-pill">
                    consulter
                </a>
                     
              
                </div>
                @endif
                @if($post->TYPEDEVOIR==2)
                <div>
                <a href="/QCM/{{$post->ID_DEVOIR}}" class="btn btn-primary rounded-pill">
                    consulter
                </a>
                </div>
                @endif
              
                <div>
                <a href="" class="btn btn-secondary rounded-pill">
                    rendre
                </a>
                </div>
                </div>
                @if(isset(Auth::user()->id) && ((App\Models\compte::where('user_id',Auth::user()->id)->first()->LOGIN)==$post->LOGIN))
                
                @if($post->TYPEDEVOIR==1)

                <span class="float-right">
               
                <form action="/devoirEnligne/{{$post->ID_DEVOIR}}"
                      method="POST"  >
                      @csrf 
                      @method('delete')
                    
                       <button class="btn btn-info rounded-pill"
                               type="submit">
                               Supprimer
                       </button>
               </form>
               </span>
               <span class="float-right pr-2">
                   <a href="/devoirEnligne/{{$post->ID_DEVOIR}}/edit"
                      class="btn btn-warning rounded-pill"> Editer </a> 
                      <a href="/downloaddevoirs/{{$post->ID_DEVOIR}}"
                    class="btn btn-danger rounded-pill"> Telecharger </a>
                    
                    <a href="/viewdevoirs/{{$post->ID_DEVOIR}}"
                       class="btn btn-success rounded-pill">afficher fichier</a>                
                </span>
               @endif
               
               @if($post->TYPEDEVOIR==0)
              
                <span class="float-right">

                <form action="/devoirEnclasse/{{$post->ID_DEVOIR}}"
                      method="POST"  >
                      @csrf 
                      @method('delete')
    
                <button class="btn btn-info rounded-pill"
                    type="submit">
                    Supprimer
                </button>
                </form>
                </span>
                <span class="float-right pr-2">
                <a href="/devoirEnclasse/{{$post->ID_DEVOIR}}/edit"
                class="btn btn-warning rounded-pill"> Editer </a>
                <a href="/downloaddevoirs/{{$post->ID_DEVOIR}}"
                    class="btn btn-danger rounded-pill"> Telecharger </a>
                    
                    <a href="/viewdevoirs/{{$post->ID_DEVOIR}}"
                       class="btn btn-success rounded-pill">afficher fichier</a>                 
                </span>
                @endif
               
                @if($post->TYPEDEVOIR==2)

                <span class="float-right">

                <form action="/QCM/{{$post->ID_DEVOIR}}"
                      method="POST"  >
                      @csrf 
                      @method('delete')
    
                <button class="btn btn-info rounded-pill"
                        type="submit">
                            Supprimer
                </button>
                </form>
                </span>
                <span class="float-right pr-2">
                <a href="/QCM/{{$post->ID_DEVOIR}}/edit"
                   class="btn btn-warning rounded-pill"> Editer </a>                 
                </span>
                @endif
           
               @endif
   </div>
   <br><br><br>
   @endforeach
<br><br><br>
@endsection