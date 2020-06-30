<?php

namespace App\Http\Controllers;
use App\Annonce;
use Illuminate\Http\Request;

use App\Http\Requests\annonceRequest;
use Illuminate\Support\Facades\Auth;

class Annoncecontroller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
   
    public function index() {
        if(Auth::user()->role_id===3) {
            $listeannonce = Annonce::all();
        }else{
            $listeannonce = Auth::user()->annonces; 
        }
        return view('annonce.index', ['annonces' => $listeannonce]);
        

    }
    public function create() {
        
        $this->authorize('create', 'App\Annonce');  

        return view('annonce.create');
    }

    public function store(annonceRequest $request) {
        $annonce = new Annonce();
        $annonce->titre = $request->input('titre');
        $annonce->description = $request->input('description');
        $annonce->user_id = Auth::user()->id;

        if( $request->hasFile('photo') ) {

            $annonce->photo=$request->photo->store('image');
        }
        
        $annonce->save();
        session()->flash('success' , 'l annonce à été bien enregistré !!');
        return redirect('annonces');
     
    }

    public function edit ($id) {
        $annonce = Annonce::find ($id);
        $this->authorize('update',$annonce);
        return view('annonce.edit', [ 'annonce' => $annonce ]);

     
        
    }
    public function update(annonceRequest $request , $id) {
        $annonce = Annonce::find($id);
        $annonce->titre = $request->input('titre');
        $annonce->description = $request->input('description');

        if( $request->hasFile('photo') ) {

            $annonce->photo=$request->photo->store('image');
        }
        $annonce->save();
        return redirect('annonces');
   
    }

    public function destroy(Request $request ,$id) {
        $annonce = Annonce::find($id);
        $annonce->delete();
        $this->authorize('delete',$annonce);
        return redirect ('annonces');
        
    }



    public function show($id) {
        $annonce = Annonce::find($id);
        return view('annonce.show', ['annonce' => $annonce]);
    }


}