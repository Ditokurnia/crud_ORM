<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.index', ['products' => $products]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'berat' => 'required|numeric',
            'gambar' => 'required|url',
            'kondisi' => 'required',
            'deskripsi' => 'required',
        ]);

        Product::create($validatedData);

        return redirect('/admin')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Product $product)
    {
        return view('admin.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'berat' => 'required|numeric',
            'gambar' => 'required|url',
            'kondisi' => 'required',
            'deskripsi' => 'required',
        ]);

        $product->update($validatedData);

        return redirect('/admin')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/admin')->with('success', 'Produk berhasil dihapus');
    }
}
