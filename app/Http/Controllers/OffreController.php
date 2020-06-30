<?php

namespace App\Http\Controllers;
use App\Offre;
use Illuminate\Http\Request;

use Illuminate\Http\UploadedFile;
use App\Http\Requests\offreRequest;
use Illuminate\Support\Facades\Auth;

class Offrecontroller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
   
    public function index() {
        if(Auth::user()->role_id===3) {
            $listeoffre = Offre::all();
        }else{
            $listeoffre = Auth::user()->offres; 
        }
        return view('offre.index', ['offres' => $listeoffre]);
        

    }
    public function create() {
        
        $this->authorize('create', 'App\Offre');  

        return view('offre.create');
    }

    public function store(offreRequest $request) {
        $offre = new Offre();
        $offre->titre = $request->input('titre');
        $offre->description = $request->input('description');
        $offre->user_id = Auth::user()->id;

        if( $request->hasFile('photo') ) {

            $offre->photo=$request->photo->store('image');
        }
        
        $offre->save();
        session()->flash('success' , 'le offre à été bien enregistré !!');
        return redirect('offres');
     
    }

    public function edit ($id) {
        $offre = Offre::find ($id);
        $this->authorize('update',$offre);
        return view('offre.edit', [ 'offre' => $offre ]);

     
        
    }
    public function update(offreRequest $request , $id) {
        $offre = Offre::find($id);
        $offre->titre = $request->input('titre');
        $offre->description = $request->input('description');

        if( $request->hasFile('photo') ) {

            $offre->photo=$request->photo->store('image');
        }
        $offre->save();
        return redirect('offres');
   
    }

    public function destroy(Request $request ,$id) {
        $offre = Offre::find($id);
        $offre->delete();
        $this->authorize('delete',$offre);
        return redirect ('offres');
        
    }



    public function show($id) {
        $offre = Offre::find($id);
        return view('offre.show', ['offre' => $offre]);
    }


}