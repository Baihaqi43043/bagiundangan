<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Msproduk;

class AdminController extends Controller
{
    public function index()
    {
        $dataproduk = Msproduk::all();
        return view('admin.produk',['dataproduk'=>$dataproduk]);
    }

    public function createproduk()
    {
        return view('admin.produk.tambahproduk');
    }

    public function storeproduk(Request $request)
    {
        $validatedData = $request->validate([
            'produkName' => 'required',
            'jenisProduk' => 'required',
            'demoProduk' => '',
            'file_path' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $filename = time() . $request->file('file_path')->getClientOriginalName();
        $path = $request->file('file_path')->storeAs('aploads/produks', $filename);
        $validatedData['file_path'] = $path;

        $Msproduk = new Msproduk;
        $Msproduk->produkName = $validatedData['produkName'];
        $Msproduk->file_path = $validatedData['file_path'];
        $Msproduk->jenisProduk = $validatedData['jenisProduk'];
        $Msproduk->demoProduk = $validatedData['demoProduk'];

        //menyimpan data ke database
        $Msproduk->save();

        //kembali ke halaman sebelumnya

        return redirect('/admin/produk')->with('success', ' Data Berhasil Disimpan ');
    }

    public function edit($id)
    {
        $edit = Msproduk::where('produkID', $id)->first();
        return view('admin.produk.editproduk',['edit'=>$edit]);
    }

    public function produkedit(Request $request, $id){

        $filename = time() . $request->file('file_path')->getClientOriginalName();
        $path = $request->file('file_path')->storeAs('aploads/produks', $filename);
        $request['file_path']=$path;
        Msproduk::where('produkID', $id)->update([
            'produkName'=>$request->produkName,
            'file_path'=>$request->file_path,
            'jenisProduk'=>$request->jenisProduk,
            'demoProduk'=>$request->demoProduk
        ]);

        return redirect('/admin/produk');
    }

    public function destroy($id )
    {
        Msproduk::where('produkID', $id)->delete();
        return redirect('/admin/produk');
    }
}
