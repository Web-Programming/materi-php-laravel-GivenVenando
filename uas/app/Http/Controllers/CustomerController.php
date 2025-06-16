<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Untuk halaman /customer
    public function index()
    {
        return view('customer.index'); // Sesuaikan dengan view customer kamu
    }

    // Untuk halaman /struk (daftar semua struk/menu)
    

    // Untuk halaman /struk/{menu}
    public function struk($menu)
{
    $menus = [
        'fire-chicken' => [
            'nama' => 'Fire Chicken',
            'harga' => 'Rp 32.000',
            'deskripsi' => 'Spicy grilled chicken with Richeese sauce'
        ],
        'fire-float' => [
            'nama' => 'Fire Float',
            'harga' => 'Rp 35.000',
            'deskripsi' => 'Spicy fried chicken with a cheesy float'
        ]
    ];

    if (!array_key_exists($menu, $menus)) {
        abort(404);
    }

    $data = $menus[$menu];
    $tanggal = now()->format('d-m-Y');

    // GANTI view-nya jadi folder menu
    return view('menu.struk', compact('data', 'tanggal'));
}
}
