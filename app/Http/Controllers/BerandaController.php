<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    public function berandaBackend()
    {
        // Pastikan user sudah login
        if (!Auth::check()) {
            return redirect()->route('backend.login');
        }
        
        // Ambil data user yang sudah login
        $user = Auth::user();
        
        // Pass user ke view
        return view('backend.v_beranda.index', [
            'judul' => 'Dashboard Admin',
            'user' => $user,
        ]);
    }
}
