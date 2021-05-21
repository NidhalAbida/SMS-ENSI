<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\forumquestion;
use App\Models\forumreponse;
use App\Models\compte;

class ForumreponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
         return view('Forumreponse.create')->with('id',$id);
    
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
           
        ]);
       
        forumreponse::create([
           
            'LOGIN'=> compte::where('user_id',auth()->user()->id)->first()->LOGIN,
            'INTITULE'=>$request->input('titre'),
            'DETAILS'=>$request->input('description'),
            'id_forumquestion'=>$request->input('id_question'),
      

        ]);
        return redirect('/Forum')->with('message','Reponse Ajouté!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          
        return view('Forumreponse.show')
        ->with('post',forumreponse::where('id',$id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Forumreponse.edit')
        ->with('post',forumreponse::where('id',$id)->first());
        
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
        ]);
      
        forumreponse::where('id',$id)
        ->update([
            
            'LOGIN'=> compte::where('user_id',auth()->user()->id)->first()->LOGIN,
            'INTITULE'=>$request->input('titre'),
            'DETAILS'=>$request->input('description'),
         
            
        ]);
        return redirect('/Forum')->with('message','Reponse Edité!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reponse= forumreponse::where('id',$id);
        $reponse->delete();
        return redirect('/Forum')
        ->with('message','Reponse Supprimé!');
    }
}
