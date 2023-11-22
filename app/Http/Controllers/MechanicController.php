<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mechanic;


class MechanicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mechanic = Mechanic::all()->toArray();
        return view('mechanic.index', compact('mechanic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mechanic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'               =>  'required',
            'bagian_pekerjaan'   =>  'required',
            'nomor_hp'           =>  'required',
            'alamat'             =>  'required',
            
        ]);
        $mechanic = new Mechanic([
            'nama'               =>  $request->get('nama'),
            'bagian_pekerjaan'   =>  $request->get('bagian_pekerjaan'),
            'nomor_hp'           =>  $request->get('nomor_hp'),
            'alamat'             =>  $request->get('alamat'),
        ]);
        $mechanic->save();
        return redirect()->route('mechanic')->with('success', 'Data berhasil ditambahkan');
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
        $mechanic = Mechanic::find($id);
        return view('mechanic.edit', compact('mechanic', 'id'));
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
        $this->validate($request, [
            'nama'               =>  'required',
            'bagian_pekerjaan'   =>  'required',
            'nomor_hp'           =>  'required',
            'alamat'             =>  'required'
        ]);
        $mechanic = Mechanic::find($id);
        $mechanic->nama               =  $request->get('nama');
        $mechanic->bagian_pekerjaan   =  $request->get('bagian_pekerjaan');
        $mechanic->nomor_hp           =  $request->get('nomor_hp');
        $mechanic->alamat             =  $request->get('alamat');
        $mechanic->save();
        return redirect()->route('mechanic')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mechanic = Mechanic::find($id);
        $mechanic->delete();
        return redirect()->route('mechanic')->with('success', 'Data berhasil Dihapus');
    }
}

