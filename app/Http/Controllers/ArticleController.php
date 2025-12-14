<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all(); // Ambil semua data article dari database
        return view('admin.article.article', compact('articles'));
    }

    public function create()
    {
        // Tampilkan form tambah glery
        return view('admin.article.create'); // Sesuaikan dengan nama file view
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|max:2048' // Validasi gambar
        ]);

        // Simpan gambar ke dalam storage
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('gambararticle', 'public'); // Simpan ke storage/app/public/galery
        } else {
            $gambarPath = null;
        }


        // Simpan data article ke database
        Article::create([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath, // Simpan path gambar
        ]);

        // Redirect ke halaman galeri dengan pesan sukses
        return redirect()->route('admin.article')->with('success', 'Article berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $articles = Article::findOrFail($id); // Cari data berdasarkan ID
        return view('admin.article.edit', compact('articles')); // Return ke view edit
    }

    public function update(Request $request, $id)
    {
        $articles = Article::findOrFail($id);

        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:225',
            'tanggal' => 'required|string|max:225',
            'judul' => 'required|string|max:225',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar (opsional)
        ]);

        // Cek apakah ada file gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($articles->gambar) {
                Storage::disk('public')->delete($articles->gambar);
            }

            // Simpan gambar baru ke storage
            $gambarPath = $request->file('gambar')->store('gambararticle', 'public');

            // Update path gambar di database
            $validatedData['gambar'] = $gambarPath;
        }

        // Update data di database
        $articles->update($validatedData);

        return redirect()->route('admin.article')
            ->with('success', 'Data berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $articles = Article::findOrFail($id);


        // Hapus data dari database
        $articles->delete();

        return redirect()->route('admin.article')
            ->with('success', 'Data berhasil dihapus!');
    }
}


