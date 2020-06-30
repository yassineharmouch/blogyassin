<?php

namespace App\Http\Controllers;

use App\Module;
use App\Absence;
use App\Seance;
use App\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   /*$data= DB::table('absences')
        ->join('etudiants', 'etudiants.id', '=', 'absences.etudiant_id')
        ->join('sceances', 'sceances.id', '=', 'absences.sceance_id')
        ->select('sceances.date','etudiants.image','etudiants.cne','etudiants.nom','etudiants.prenom',   'absences.justifie')
        ->get();*/
       //$data = Absence::find(1);
       $data = new Etudiant();
       $data = Etudiant::all();

       $seance = Seance::first();
       
       $absence = Absence::first();
       
      return view('absence.index', compact(['data', 'seance', 'absence']));
       
        
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Etudiant::all();

        $seance = Seance::all();
        
        $absence = Absence::first();
        return view('absence.create', compact(['data', 'seance', 'absence']));
    }
    public function affecter($id)
    { 
        $etudiant = Etudiant::find($id);
        $data = new Absence;

        
        return view('absence.create', compact(['data', 'etudiant']));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Absence();
       
         $data->justifie=$request->justifie;
         $data->commentaire=$request->commentaire;
         $data->seance_id=$request->seance_id;
         $data->etudiant_id=$request->etudiant_id;
         $data->save();
        
      
        return redirect('absence')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =Absence::findOrFail($id);
        return view('absence.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =Absence::findOrFail($id);
        return view('absence.edit', compact('data'));
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

        $data = new Absence;

        $data->justifie=$request->justifie;
        $data->commentaire=$request->commentaire;
        $data->seance_id=$request->seance_id;
        $data->etudiant_id=$request->etudiant_id;
    
       
    
        $form_data = array(
            'justifie'    =>  $request->justifie,
            'commentaire'     =>  $request->commentaire,
            'seance_id'    => $request->seance_id,
            'etudiant_id'    =>$request->etudiant_id
        );
        Absence::whereId($id)->update($form_data);

                return redirect('absence')->with('success', 'Data is successfully updated');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =Absence::findOrFail($id);
        $data->delete();
        return redirect('absence')->with('success', 'Data is successfully deleted');
    }
}
