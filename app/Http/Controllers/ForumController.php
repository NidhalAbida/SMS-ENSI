<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\forumquestion;
use App\Models\forumreponse;
use App\Models\compte;


class ForumController extends Controller
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
        return view('Forum.index')
        ->with('posts',forumquestion::orderBy('id','DESC')->get());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Forum.create');
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
            'MOTS'=>'required',
        ]);
       
        forumquestion::create([
           
            'LOGIN'=> compte::where('user_id',auth()->user()->id)->first()->LOGIN,
            'INTITULE'=>$request->input('titre'),
            'DETAILS'=>$request->input('description'),
            'MOTS'=>$request->input('MOTS'),
           

        ]);
        return redirect('/Forum')->with('message','Question Ajouté!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return view('Forum.show')
        ->with('post',forumquestion::where('id',$id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Forum.edit')
        ->with('post',forumquestion::where('id',$id)->first());
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
            'titre'=>'required',
            'description'=>'required',
            'MOTS'=>'required',
        ]);
      
        forumquestion::where('id',$id)
        ->update([
            
            'LOGIN'=> compte::where('user_id',auth()->user()->id)->first()->LOGIN,
            'INTITULE'=>$request->input('titre'),
            'DETAILS'=>$request->input('description'),
            'MOTS'=>$request->input('MOTS'),
            
        ]);
        return redirect('/Forum')->with('message','Question Edité!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question= forumquestion::where('id',$id);
        $question->delete();
        return redirect('/Forum')
        ->with('message','Question Supprimé!');
    }
    
    public function reponses($id){

        return view('Forum.reponses') ->with('posts',forumreponse::where('id_forumquestion',$id)->get(  ));

    }
}
