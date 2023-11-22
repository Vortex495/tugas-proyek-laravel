<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all()->toArray();
        return view('customer.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
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
            'nomor_hp'           =>  'required',
            'alamat'             =>  'required',
            'biaya_mechanic'     =>  'required'
        ]);
        $customer = new Customer([
            'nama'               =>  $request->get('nama'),
            'nomor_hp'           =>  $request->get('nomor_hp'),
            'alamat'             =>  $request->get('alamat'),
            'biaya_mechanic'     =>  $request->get('biaya_mechanic'),
        ]);
        $customer->save();
        return redirect()->route('customer')->with('success', 'Data berhasil ditambahkan');
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
        $customer = Customer::find($id);
        return view('customer.edit', compact('customer', 'id'));
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
            'nomor_hp'           =>  'required',
            'alamat'             =>  'required',
            'biaya_mechanic'     =>  'required'
        ]);
        $customer = Customer::find($id);
        $customer->nama           = $request->get('nama');
        $customer->nomor_hp       = $request->get('nomor_hp');
        $customer->alamat         = $request->get('alamat');
        $customer->biaya_mechanic = $request->get('biaya_mechanic');
        $customer->save();
        return redirect()->route('customer')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customer')->with('success', 'Data berhasil Dihapus');
    }
}
