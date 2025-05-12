<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $mhs = [
         [
            'id' => 1,
            'nama' => 'Nadia Permata Sari ',
            'gambar' => 'ml1.jpeg',
            'NPM' => '2428240077',
        ],
        [
            'id' => 2,
            'nama' => 'Rizky Aditya Pratama',
            'gambar' => 'ml1.jpeg',
            'NPM' => '2428250070',
        ],
        [
            'id' => 3,
            'nama' => 'Alif Nugroho Santosa',
            'gambar' => 'ml1.jpeg',
            'NPM' => '2226260086',
        ],
        [
            'id' => 4,
            'nama' => 'Intan Maharani Putri',
            'gambar' => 'result_mp1.jpeg',
            'NPM' => '2327210099',
        ],
        [
            'id' => 5,
            'nama' => 'Dimas Fajar Wicaksono',
            'gambar' => 'ml1.jpeg',
            'NPM' => '2327200069',
        ],
        [
            'id' => 6,
            'nama' => 'Salsabila Ayu Ramadhani',
            'gambar' => 'result_mp1.jpeg',
            'NPM' => '2024190079',
        ],
        [
            'id' => 7,
            'nama' => 'Fahmi Reza Mahendra',
            'gambar' => 'ml1.jpeg',
            'NPM' => '2024180041',
        ]
    ];
    

    public function index()
{
    $mhs = [
       [
            'id' => 1, 
            'nama' => 'Mahasiswa Program Studi Sistem Informasi', 
            'gambar' => 'result_mhs.jpg', 
        ],
        [
            'id' => 2, 
            'nama' => 'Mahasiswa Program Studi Informatika', 
            'gambar' => 'result_mhs.jpg',
        ],
         [
            'id' => 3, 
            'nama' => 'Mahasiswa Program Studi Teknik Elektro', 
            'gambar' => 'result_mhs.jpg',
        ],
        [
            'id' => 4, 
            'nama' => 'Mahasiswa Program Studi Manajemen', 
            'gambar' => 'result_mhs.jpg',
        ],
        [
            'id' => 5, 
            'nama' => 'Mahasiswa Program Studi Akuntansi', 
            'gambar' => 'result_mhs.jpg',
        ],
        [
            'id' => 6, 
            'nama' => 'Mahasiswa Program Studi Magister Sistem Informasi', 
            'gambar' => 'result_mhs.jpg',
        ],
        [
            'id' => 7, 
            'nama' => 'Mahasiswa Program Studi Manajemen Informatika', 
            'gambar' => 'result_mhs.jpg',
        ],
    ];

    return view('mhs.index', compact('mhs'));
}

    /**
     * Show the form for creating a new resource.
     */

     public function createForm()
     {
         return view('mhs.create');
     }

    public function create(Request $request)
    {
        $newMahasiswa = [
            'id' => count($this->mhs) + 1,
            'nama' => $request->input('nama')
        ];

        array_push($this->mhs, $newMahasiwa);

        return redirect()->route('mhs.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function detail($id)
    {
        $mhs = null;
        foreach ($this->mhs as $mhsItem) {
            if ($mhsItem['id'] == $id) {
                $mhs = $mhsItem;
                break;
            }
        }
    
        if (!$mhs) {
            return redirect()->route('mhs.index')->with('error', 'Mahasiswa tidak ditemukan');
        }
    
        return view('mhs.detail', ['mhs' => $mhs]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Cari data berdasarkan ID dan hapus dari array
        foreach ($this->mhs as $key => $mhs) {
            if ($mhs['id'] == $id) {
                unset($this->mhs[$key]);
                break;
            }
        }
    
        // Redirect ke halaman Mahasiswa dengan pesan sukses
        return redirect()->route('mhs.index')->with('success', 'Mahasiswa berhasil dihapus');
    }
}
