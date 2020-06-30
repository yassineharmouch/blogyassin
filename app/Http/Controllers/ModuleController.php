<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModuleController extends Controller
{
    public function __construct(){
        $this->middleware(['auth','isAdmin']);    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =Module::latest()->paginate(5);
        return view('module.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('module.create');
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
            'nom'    =>  'required',
            'code'     =>  'required',
        
        ]);
        $form_data = array(
            'nom'       =>   $request->nom,
            'code'        =>   $request->code,
          
        );

       Module::create($form_data);

        return redirect('module')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =Module::findOrFail($id);
        return view('module.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =Module::findOrFail($id);
        return view('module.edit', compact('data'));
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
                'nom'    =>  'required',
                'code'     =>  'required',
           
            ]);
        

        $form_data = array(
            'nom'    =>  $request->nom,
            'code'     =>  $request->code,
           
        );

       Module::whereId($id)->update($form_data);
        return redirect('module')->with('success', 'Data is successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =Module::findOrFail($id);
        $data->delete();
        return redirect('module')->with('success', 'Data is successfully deleted');
    }
}
