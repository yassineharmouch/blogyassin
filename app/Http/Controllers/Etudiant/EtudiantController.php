<?php

namespace App\Http\Controllers\Etudiant;
use App\Etudiant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
 
    public function __construct(){
        $this->middleware(['auth','isEtudiant']);   
     }
    
    public function index()
    {return view('etudiant.home');
    }

}
