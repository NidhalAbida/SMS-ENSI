<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ressource;
use App\Models\devoirmaison;
use Response;



class PagesController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function downloadcours($id)
    {
        $file= public_path()."/files/".ressource::where('ID_RESSOURCE',$id)->first()->fichier;
        $header=array('Content_Type :application/pdf');
        return Response::download($file,ressource::where('ID_RESSOURCE',$id)->first()->fichier,$header);
        
    }
    public function viewcours($id)
    {
        $file= public_path()."/files/".ressource::where('ID_RESSOURCE',$id)->first()->fichier;
        $header=array('Content_Type :application/pdf');
        return Response()->file($file,$header);
        
    }
    public function downloaddevoirs($id)
    {
        $file=public_path()."/files/".devoirmaison::where('ID_DEVOIR',$id)->first()->fichier;
        $header=array('Content_Type :application/pdf');
        return Response::download($file,devoirmaison::where('ID_DEVOIR',$id)->first()->fichier,$header);
        
    }
    public function viewdevoirs($id)
    {
        $file=public_path()."/files/".devoirmaison::where('ID_DEVOIR',$id)->first()->fichier;
        $header=array('Content_Type :application/pdf');
        return Response()->file($file,$header);

    }
}
