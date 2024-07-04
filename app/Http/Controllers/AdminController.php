<?php
namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index(){
        $barangs = Barang::all();
        return view('admin',compact('barangs'));
     
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request){
        $name = $request->name;
        $harga = $request->harga;
        $stok = $request->stok;

        $barang = new Barang();
        $barang->name =$name;
        $barang->harga = $harga;
        $barang->stok = $stok;

        $barang->save();

        return redirect('admin')->with('status', 'Data Berhasil Disimpan');

    }

    public function formEdit($id){
        $barang = Barang::find($id);
        return view('edit', compact('barang'));
        
    }
    public function update(Request $request){
        $id = $request->id;
        $name = $request->name;
        $harga = $request->harga;
        $stok = $request->stok;

        $barang = Barang::find($id);
        $barang->name = $name;
        $barang->harga = $harga;
        $barang->stok = $stok;
        $barang->update();

        return redirect('admin')->with('status', 'Data Berhasil Diupdate');
    }

    public function hapus(Request $request){
        $id = $request->id;
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('admin')->with('status', 'Data Berhasil Diupdate');
        
        
    }
}