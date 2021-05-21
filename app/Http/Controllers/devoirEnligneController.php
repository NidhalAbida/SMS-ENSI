<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\devoirmaison;
use App\Models\compte;
use App\Models\classe;


class devoirEnligneController extends Controller
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
        
        return view('devoirs.index')        
        ->with('posts',devoirmaison::where('TYPEDEVOIR',1)->orderBy('ID_DEVOIR','DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('devoirs.devoirEnligne.create');
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
            'date'=>'required',
            'titre'=>'required',
            'matiere'=>'required',
            'classe'=>'required',
            'description'=>'required',
             'fichier'=>'required|mimes:jpg,png,jpeg,pdf'
        ]);
        $newFileName = uniqid().'-'.$request->titre.'.'.$request->fichier->extension();
        $request->fichier->move(public_path('files'),$newFileName);
        devoirmaison::create([
            'ID_DEVOIR'=>(devoirmaison::orderBy('ID_DEVOIR','DESC')->first()->ID_DEVOIR) +1,
            'NIVEAU'=>classe::where('NOMCLASSE',$request->input('classe'))->first()->NIVEAU,
            'IDMATIERE'=>matiere::where('INTITULE',$request->input('matiere'))->first()->IDMATIERE,
            'IDFILIERE'=>classe::where('NOMCLASSE',$request->input('classe'))->first()->IDFILIERE,
            'NOMCLASSE'=>$request->input('classe'),
            'LOGIN'=> compte::where('user_id',auth()->user()->id)->first()->LOGIN,
            'INTITULE'=>$request->input('titre'),
            'DATE_LIMITE'=>date('Y-m-d',strtotime($request->input('date'))),
            'TYPEDEVOIR'=>1,
            'ENNONCE'=>$request->input('description'),
            'ADRESSEMAIL'=> compte::where('user_id',auth()->user()->id)->first()->EMAIL,
            'fichier'=>$newFileName
            ]);
        return redirect('/devoirEnligne')->with('message','DevoirEnligne Ajouté!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('devoirs.devoirEnligne.show')
        ->with('post',devoirmaison::where('ID_DEVOIR',$id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('devoirs.devoirEnligne.edit')
        ->with('post',devoirmaison::where('ID_DEVOIR',$id)->first());
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
        $request->validate([
            'date'=>'required',
            'titre'=>'required',
            'matiere'=>'required',
            'classe'=>'required',
            'description'=>'required',
        ]);
        $newFileName=devoirmaison::where('ID_DEVOIR',$id)->first()->fichier;
        if ($request->fichier != null)
      {  $newFileName = uniqid().'-'.$request->titre.'.'.$request->fichier->extension();
        $request->fichier->move(public_path('files'),$newFileName);
       } 
        devoirmaison::where('ID_DEVOIR',$id)
        ->update([
            'NIVEAU'=>classe::where('NOMCLASSE',$request->input('classe'))->first()->NIVEAU,
            
            'IDMATIERE'=>matiere::where('INTITULE',$request->input('matiere'))->first()->IDMATIERE,

            'IDFILIERE'=>classe::where('NOMCLASSE',$request->input('classe'))->first()->IDFILIERE,
            
            'NOMCLASSE'=>$request->input('classe'),

            'INTITULE'=>$request->input('titre'),
           
            'ENNONCE'=>$request->input('description'),

            'DATE_LIMITE'=>date('Y-m-d',strtotime($request->input('date'))),

           
            'fichier'=>$newFileName
            
        ]);
        return redirect('/devoirs')->with('message','DevoirEnligne Edité!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $devoir= devoirmaison::where('ID_DEVOIR',$id);
        $devoir->delete();
        return redirect('/devoirs')
        ->with('message','DevoirEnligne Supprimé!');
    }
}
