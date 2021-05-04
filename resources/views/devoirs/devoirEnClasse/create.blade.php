@extends('layouts.app')
@section('content')


<!--<div class="w-4/5 m-auto pt-20">
<h1>indiquer la date de la séance</h1>
<iframe name="InlineFrame1" id="InlineFrame1" style="width:180px;height:220px;" src="https://www.mathieuweb.fr/calendrier/calendrier-des-semaines.php?nb_mois=1&nb_mois_ligne=4&mois=&an=&langue=fr&texte_color=B9CBDD&week_color=DAE9F8&week_end_color=C7DAED&police_color=453413&sel=true" scrolling="no" frameborder="0" allowtransparency="true">
</iframe>
</div>
-->
<div class="w-4/5 m-auto pt-20">
<form action="/devoirs"
          method="Post"
          enctype="multipart/form-data">
          @csrf
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <div class="container">
    <h1>Indiquer La date limite</h1>
    <input class="date form-control bg-transparent block border-b-2 w-full h-60 text-xl outline-none" name="date" type="text" placeholder="dd-mm-yyyy">
    <script type="text/javascript">
    $('.date').datepicker({  
       format: 'dd-mm-yyyy'
     });  
</script> 
<br><br><br>
   
    <input type="text"
            name="titre"
            placeholder="Titre..."
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">
    <textarea name="classe"
              placeholder="classe"
              class="py-20 bg-transparent block border-b-2 w-full h-30 text-xl outline-none"></textarea>    
    <textarea name="description"
              placeholder="Description..."
              class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>
    <div class="bg-grey-lighter pt-15">
    <label class="w-44 flex flex-col items-center px-2py-3
    bg-white-rounded-lg shadow-lg tracking-wide uppercaseborder border-blue cursor-pointer">
    <span class="mt-2 text-base leading-normal ">
    Selectioner un ficher</span>
    <input type="file"
    name="fichier"
    class="hidden"></label></div>
    <button type ="submit"
    class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
    Confirmer</button>
    </form>
</div>

@endsection
