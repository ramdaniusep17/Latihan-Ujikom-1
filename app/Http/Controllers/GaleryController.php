<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Galery;

class GaleryController extends Controller
{
    public function index()
    {
        $galerys = Galery::all(); // Ambil semua data galery dari database
        return view('admin.galery.galery', compact('galerys'));
    }

    public function create()
    {
        // Tampilkan form tambah glery
        return view('admin.galery.create'); // Sesuaikan dengan nama file view
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'gambar' => 'required|max:2048' // Validasi gambar
        ]);

        // Simpan gambar ke dalam storage
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('galery', 'public'); // Simpan ke storage/app/public/galery
        } else {
            $gambarPath = null;
        }


        // Simpan data galery ke database
        Galery::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath, // Simpan path gambar
        ]);

        // Redirect ke halaman galeri dengan pesan sukses
        return redirect()->route('admin.galery')->with('success', 'Galery berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $galerys = Galery::findOrFail($id); // Cari data berdasarkan ID
        return view('admin.galery.edit', compact('galerys')); // Return ke view edit
    }

    public function update(Request $request, $id)
    {
        $galerys = Galery::findOrFail($id);

        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required|string|max:225',
            'deskripsi' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar (opsional)
        ]);

        // Cek apakah ada file gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($galerys->gambar) {
                Storage::disk('public')->delete($galerys->gambar);
            }

            // Simpan gambar baru ke storage
            $gambarPath = $request->file('gambar')->store('galery', 'public');

            // Update path gambar di database
            $validatedData['gambar'] = $gambarPath;
        }

        // Update data di database
        $galerys->update($validatedData);

        return redirect()->route('admin.galery')
            ->with('success', 'Data berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $galerys = Galery::findOrFail($id);


        // Hapus data dari database
        $galerys->delete();

        return redirect()->route('admin.galery')
            ->with('success', 'Data berhasil dihapus!');
    }
}

