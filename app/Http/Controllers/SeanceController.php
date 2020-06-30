<?php

namespace App\Http\Controllers;

use App\Module;
use App\Seance;
use Illuminate\Http\Request;

class SeanceController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =Seance::latest()->paginate(5);
        return view('seance.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Module::all();

        return view('seance.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Seance();

         $data->nom_module=$request->nom_module;
         $data->date=$request->date;
         $data->date_debut=$request->date_debut;
         $data->date_fin=$request->date_fin;
         $data->type=$request->type;
         $data->save();
        
      
        return redirect('seance')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =Seance::findOrFail($id);
        return view('seance.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =Seance::findOrFail($id);
        return view('seance.edit', compact('data'));
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

        $data = new Seance;

        $data->date=$request->date;
        $data->date_debut=$request->date_debut;
        $data->date_fin=$request->date_fin;
        $data->type=$request->type;
        $data->nom_module=$request->nom_module;
      
       
    
        $form_data = array(
            'date'    =>  $request->date,
            'date_debut'     =>  $request->date_debut,
            'date_fin'    => $request->date_fin,
            'type'    =>$request->type,
            'nom_module'    =>$request->nom_module
        );
        Seance::whereId($id)->update($form_data);

                return redirect('seance')->with('success', 'Data is successfully updated');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =Seance::findOrFail($id);
        $data->delete();
        return redirect('seance')->with('success', 'Data is successfully deleted');
    }
  
}
