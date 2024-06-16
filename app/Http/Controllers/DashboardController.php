<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('dashboard',compact('data'));
    }
}
