<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama: Hakan Alif P <br> NIM: 2141720218';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id ' .$id;
    }
}
