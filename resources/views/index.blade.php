@extends('layouts.parentlayout')
@section('content')
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>
<div id="app">
        
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
                        <div class="col-4 col-md-6 order-md-12 order-last">
                            <h3>Welcome</h3>
                        </div>
                    </div>
                </div>
                <section id="content-types">
                    <div class="row">
@if(Auth::check())
    @if(App\Models\compte::where('user_id',auth()->user()->id)->first()!=null)
    @if(App\Models\compte::where('user_id',auth()->user()->id)->first()->TYPE_COMPTE=="eleve")
        <div class="text-gray-200 m-auto text-center text-xl">
        <br><br><br>i m a student <br><br><br>
        </div>
        @endif
    @endif

    @if(App\Models\compte::where('user_id',auth()->user()->id)->first()!=null)
       @if(App\Models\compte::where('user_id',auth()->user()->id)->first()->TYPE_COMPTE!="parent")
       <div class="col-xl-5 col-md-5 col-sm-5">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Forum</h4>
                                        <p class="card-text">
                                        Si vous avez des questions accedez aux Forum
                                        </p>
                                    </div>
                                    <img class="img-fluid w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdF2XiUNq3ye5HTznnAhV_wmy_RAZg8U9GKg&usqp=CAU"
                                        alt="Shrimp">
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <button href="/Forum" class="btn btn-light-primary">Consulter Forum</button>
                                </div>
                            </div>
                        </div>  
        @endif
        @endif
        
        <div class="col-xl-5 col-md-5 col-sm-5">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Devoirs</h4>
                                        <p class="card-text">
                                        Consulter vos devoirs
                                        </p>
                                    </div>
                                    <img class="img-fluid w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdF2XiUNq3ye5HTznnAhV_wmy_RAZg8U9GKg&usqp=CAU"
                                        alt="Shrimp">
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <span>Faites attention a la date limite.<br>Tout retard  sera sanctionné.</span>
                                    <button href="/devoirs" class="btn btn-light-primary">Accedez aux devoirs</button>
                                </div>
                            </div>
                        </div>  
                </section>     
                <section id="content-types">
                    <div class="row">
                        <div class="col-xl-5 col-md-5 col-sm-5">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Cours</h4>
                                        <p class="card-text">
                                        Consulter l espace des cours.
                                        </p>
                                    </div>
                                    <img class="img-fluid w-100" src="https://cdn.pixabay.com/photo/2017/04/06/11/25/study-2208047__340.jpg"
                                        alt="Shrimp">
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                <span>Priere de consulter les resumes.</span>
                                    <button href="/cours" class="btn btn-light-primary">Accedez aux cours</button>
                                </div>
                            </div>
                        </div>  
                        <div class="col-xl-5 col-md-5 col-sm-5">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Evaluation</h4>
                                        <p class="card-text">
                                        consulter vos notes
                                        </p>
                                    </div>
                                    <img class="img-fluid w-100" src="https://www.francesoir.fr/sites/francesoir/files/note-eleves-francesoir_field_image_de_base_field_mise_en_avant_principale.jpg"
                                        alt="Shrimp">
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <span>Priere de verifier vos notes</span>
                                    <button href="/Evaluation" class="btn btn-light-primary">Accedez à l'evaluation</button>
                                </div>
                            </div>
                        </div>  
                </section>     
            </div>
        </div>
        </div>
    </div>
            @else
        <div class="background-image1 grid grid-colis-l m-auto">

        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1  class="sm:text-white text-5xl uppercase front-bold text-shadow-md pb-14">
                        Bienvenue                </h1>
                <a 
                    href="/login"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xt uppercase">
                    Login
                </a>
            </div>
        </div>
        </div>
        @endif
           

    
@endsection    