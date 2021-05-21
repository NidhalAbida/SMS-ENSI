@extends('layouts.parentlayout')
@section('content')
<div class="container">
<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Forum</h3>
                            <p class="text-subtitle text-muted">Espace de discussion</p>
                        </div>
                    </div>
                </div>
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
                                    <h4>Questions</h4>
                                </div>
                                <div class="card-body">
                                    <form class="relative">
                                    <input type="text" class="form-control" id="basicInput"
                                            placeholder="Chercher question">
            </form>
 
                                    <div class="buttons">
                                        <a href="/Forum/create" class="btn btn-primary">Ajouter question</a>
                                    </div>
@foreach($posts as $post)

<div class=" w-4/5 mx-auto py-15 border-b border-gray-200 ">

   <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{$post->INTITULE}}
                </h2>
                <span class="text-gray-500">
                by<span class="font-bold italic text-gray-800">  {{App\Models\compte::where('LOGIN',$post->LOGIN)->first()->INTITULE}}</span>  created  at {{date('jS M Y'   ),strtotime($post->created_at)}}
                </span>

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{$post->DETAILS}}
                </p>
                <div class="sm:grid grid-cols-2 gap-10 w-4/5 mx-auto py-5 border-b border-gray-200 ">
                <div>
                <div class="buttons">
                <a href="/reponses/{{$post->id}}" class="btn btn-primary rounded-pill">
                    Consulter reponses
                </a>
                </div>
                <div>
                <a href="/Forumreponse/create/{{$post->id}}" class="btn btn-secondary rounded-pill">
                    repondre
                </a>
                </div>
                </div>
                </div>

   </div>
</div>
@endforeach
@endsection