<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Principal;
use App\Imagen;
use App\Http\Requests;
use App\Http\Requests\PrincipalRequest;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $principal = Principal::orderBy('id','ASC')->paginate(5);
        return view('admin.principales.index')->with('principales',$principal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.principales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrincipalRequest $request)
    {
        
        $file = $request->file('imagen');
        $name = 'principal_' . time(). '.'. $file->getClientOriginalExtension();
        $path = public_path() . '/images/principales/';
        $file->move($path, $name);
        
        $image = new Imagen();
        $image->imagen = $name;
        $image->save();
        
        $principal = new Principal($request->all());
        $principal->imagen()->associate($image);
       
        $principal->save();
        
        flash('El principal se ha creado con exito','success');
        return redirect()->route('principal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
