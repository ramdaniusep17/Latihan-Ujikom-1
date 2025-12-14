<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Article;
use App\Models\Galery;
use App\Models\Product;

class UserController extends Controller
{
    public function index()
    {
        // Ambil semua data artikel dan galeri dari database
        $articles = Article::latest()->get();
        $galerys = Galery::latest()->get();
        $products = Product::latest()->get();

        // Kirim data ke welcome.blade.php
        return view('welcome', compact('articles', 'galerys' , 'products'));
    }

    public function sendEmail(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Kirim email langsung tanpa view tambahan
        Mail::raw("Name: {$request->name}\nEmail: {$request->email}\n\nMessage:\n{$request->message}", function ($message) use ($request) {
            $message->to('vioakiraa17@gmail.com') // Ganti dengan email tujuan
                ->subject($request->subject)
                ->replyTo($request->email, $request->name);
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
