<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class DashboardController extends Controller
{
       public function dashboard()
        {
            return view('dashboard');
        }
        
       public function index()
        {
            $menus = Menu::all(); // ambil semua menu dari database
            return view('dashboard', compact('menus')); // kirim ke view
        } 
}