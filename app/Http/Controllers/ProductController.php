<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $data = Product::all();
        return view('admin.product.viewbarang', compact('data'));
    }

    public function addbarang() {
        return view('admin.product.addbarang');
    }

    public function store(Request $request){
        $data = new Product();
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        if ($request->hasFile('image')) {
            $productImage = $request->file('image')->store('image');
            $data->image = $productImage;
        }
        $data->save();
        return redirect()->route('product.view');
    }

    public function editbarang($id) {
        $editdata=Product::find($id);
        return view('admin.product.editbarang', compact('editdata'));
    }

    public function updatebarang(Request $request, $id){
        $data = Product::find($id);
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        
        $data->save();
        return redirect()->route('product.view');
    }

    public function deletebarang(Request $request, $id){
        $deletedata = Product::find($id);
        $deletedata->delete();
        return redirect()->route('product.view');
    }


}
