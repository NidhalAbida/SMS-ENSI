<?php

namespace App\Http\Controllers;
use App\Models\ressource;
use App\Models\compte;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('cours.index')
        ->with('posts',ressource::orderBy('TYPE','DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
    {
        $request->validate([
            'titre'=>'required',
            'description'=>'required',
             'fichier'=>'required|mimes:jpg,png,jpeg,pdf'
        ]);
        $newFileName = uniqid().'-'.$request->titre.'.'.$request->fichier->extension();
        $request->fichier->move(public_path('files'),$newFileName);
        ressource::create([
            'ID_RESSOURCE'=>(ressource::orderBy('ID_RESSOURCE','DESC')->first()->ID_RESSOURCE) +1,
            'LOGIN'=> compte::where('user_id',auth()->user()->id)->first()->LOGIN,
            'INTITULE'=>$request->input('titre'),
            'TYPE'=>'cours',
            'DETAILS'=>$request->input('description'),
            'fichier'=>$newFileName
           

        ]);
        return redirect('/cours')->with('message','Cours Ajouté!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cours.show')
        ->with('post',ressource::where('ID_RESSOURCE',$id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('cours.edit')
        ->with('post',ressource::where('ID_RESSOURCE',$id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
        $newFileName=ressource::where('ID_RESSOURCE',$id)->first()->fichier;
        if ($request->fichier != null)
      {  $newFileName = uniqid().'-'.$request->titre.'.'.$request->fichier->extension();
        $request->fichier->move(public_path('files'),$newFileName);
       } 
        ressource::where('ID_RESSOURCE',$id)
        ->update([
  
            'INTITULE'=>$request->input('titre'),
           
            'DETAILS'=>$request->input('description'),
           
            'fichier'=>$newFileName
            
        ]);
        return redirect('/cours')->with('message','Cours Edité!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $cours= ressource::where('ID_RESSOURCE',$id);
        $cours->delete();
        return redirect('/cours')
        ->with('message','cours supprimé!');
  
        
    }
}
