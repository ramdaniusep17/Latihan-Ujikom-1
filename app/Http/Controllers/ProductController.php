<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Ambil semua data product dari database
        return view('admin.product.product', compact('products'));
    }

    public function create()
    {
        // Tampilkan form tambah product
        return view('admin.product.create'); // Sesuaikan dengan nama file view
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'keterangan' => 'required|string',
        ]);

        // Simpan data product ke database
        Product::create([
            'judul' => $request->judul,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
        ]);

        // Redirect ke halaman product dengan pesan sukses
        return redirect()->route('admin.product')->with('success', 'Product berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $products = Product::findOrFail($id); // Cari data berdasarkan ID
        return view('admin.product.edit', compact('products')); // Return ke view edit
    }

    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);

        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required|string|max:225',
            'harga' => 'required|string|max:225',
            'keterangan' => 'required|string',
        ]);

        // Update data di database
        $products->update($validatedData);

        return redirect()->route('admin.product')
            ->with('success', 'Data berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $products = Product::findOrFail($id);


        // Hapus data dari database
        $products->delete();

        return redirect()->route('admin.product')
            ->with('success', 'Data berhasil dihapus!');
    }
}


