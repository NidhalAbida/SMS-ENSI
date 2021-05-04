@extends('Layouts.app')

@section('content')
   
    


    
    <div class="background-image grid grid-colis-l m-auto">

        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1  class="sm:text-white text-5xl uppercase front-bold text-shadow-md pb-14">
                    Si vous avez des questions accedez aux Forum                    
                </h1>
                <a 
                    href="/Forum"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xt uppercase">
                    Consuler Forum
                </a>
            </div>
        </div>
        
    </div>
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdF2XiUNq3ye5HTznnAhV_wmy_RAZg8U9GKg&usqp=CAU" width="400" alt="Shrimp">   
            </div> 
            <div class="m-auto sm:m-auto text-left text-black w-4/5  block">
                <h2 class="text-3xl font-extrabold ">
                        Devoirs    
                 </h2>
                <p class ="py-8  text-l">
                    Consulter vos devoirs.
                </p>
                <p class="font-extrabold  text-s pb-9">
                    Faites attention a la date limite.Tout retard  sera sanctionné.
                </p>
                <a   href="/devoirs"
                     class="uppercase bg-blue-500  text-s text-white  font-extrabold py-3 px-8 rounded-3xl">
                     Accedez aux devoirs
                </a>
            </div>
            </div>

            

            <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div>
                <img src="https://cdn.pixabay.com/photo/2017/04/06/11/25/study-2208047__340.jpg" width="400" alt="Shrimp">   
            </div> 
            <div class="m-auto sm:m-auto text-left text-black w-4/5  block">
                <h2 class="text-3xl font-extrabold ">
                        Cours    
                 </h2>
                <p class ="py-8  text-l">
                    Consulter l espace des cours.
                </p>
                <p class="font-extrabold  text-s pb-9"> 
                     Priere de consulter les resumes.
                 </p>
                <a   href="/cours"
                     class="uppercase bg-blue-500  text-s  text-white font-extrabold py-3 px-8 rounded-3xl">
                     Accedez aux cours
                </a>
            </div>
            </div>
            
            
            </div>
            <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div>
                <img src="https://www.francesoir.fr/sites/francesoir/files/note-eleves-francesoir_field_image_de_base_field_mise_en_avant_principale.jpg" width="400" alt="Shrimp">   
            </div> 
            <div class="m-auto sm:m-auto text-left text-black w-4/5  block">
                <h2 class="text-3xl font-extrabold ">
                        Evaluation
                 </h2>
                <p class ="py-8  text-l">
                    consulter vos notes
                </p>
                <p class="font-extrabold  text-s pb-9"> 
                     Priere de verifier vos notes
                 </p>
                <a   href="/Evaluation"
                     class="uppercase bg-blue-500  text-s  text-white font-extrabold py-3 px-8 rounded-3xl">
                     Accedez à l'evaluation
                </a>
            </div>
            </div>
            
            
            </div>

    
@endsection    