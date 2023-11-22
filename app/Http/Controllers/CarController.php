<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car = Car::all()->toArray();
        return view('car.index', compact('car'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.create');
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
            'nomor_plat'  =>  'required',
            'brand'       =>  'required',
            'nama'        =>  'required',
            'warna'       =>  'required',
            'masalah'     =>  'required'
        ]);
        $car = new Car([
            'nomor_plat'      => $request->get('nomor_plat'),
            'brand'           => $request->get('brand'),
            'nama'            => $request->get('nama'),
            'warna'           => $request->get('warna'),
            'masalah'         => $request->get('masalah'),
        ]);
        $car->save();
        return redirect()->route('car')->with('success', 'Data berhasil ditambahkan');
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
        $car = Car::find($id);
        return view('car.edit', compact('car', 'id'));
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
            'nomor_plat'  =>  'required',
            'brand'       =>  'required',
            'nama'        =>  'required',
            'warna'       =>  'required',
            'masalah'     =>  'required'
        ]);
        $car = Car::find($id);
        $car->nomor_plat      = $request->get('nomor_plat');
        $car->brand           = $request->get('brand');
        $car->nama            = $request->get('nama');
        $car->warna           = $request->get('warna');
        $car->masalah         = $request->get('masalah');
        $car->save();
        return redirect()->route('car')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect()->route('car')->with('success', 'Data berhasil Dihapus');
    }
}
