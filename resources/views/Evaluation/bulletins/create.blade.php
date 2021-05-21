@extends('layouts.app')

@section('content')
<div class = "text-center">
<form action="/Evaluation/bulletins"
          method="Post"
          enctype="multipart/form-data">
          @csrf
<div class="bg-grey-lighter    p-15 text-center ">
       
 <label class="w-44 flex flex-col items-center px-2py-3
    bg-white-rounded-lg shadow-lg tracking-wide uppercaseborder border-blue cursor-pointer">
        <span class="mt-2 text-base leading-normal ">
                Selectioner un ficher</span>
                <input  type="file"
                        name="fichier"
                        class="hidden">
 </label>
</div>
                        <button type ="submit"
                                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                        Confirmer</button>
    </form>
</div>
<br><br><br>
@endsection