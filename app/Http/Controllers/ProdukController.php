<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Produk::all();
        return view('produk',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ktgr = Kategori::all();
        return view('tambahproduk',compact('ktgr'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|integer',
            'kategori_id' => 'required|',
            'image' => 'required|max:2000|mimes:jpg,png',
        ]);
        $validator['image'] = $request->file('image')->store('img');
        Produk::create($validator);
        return redirect('produk')->with('success', 'Data Berhasil Diinput!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        Produk::find($id)->delete();
        return redirect('produk')->with('success', 'Data berhasil dihapus!');
    }
}
