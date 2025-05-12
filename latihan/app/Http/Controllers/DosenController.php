<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $dosen = [
        [
            'id' => 1,
            'nama' => 'Ahmad Farisi, M.Kom',
            'gambar' => 'DsnSI1.jpg',
            'jabatan' => 'Ketua Program Studi Sistem Informasi (S1).',
        ],
        [
            'id' => 2,
            'nama' => 'Dr. M. Rizky Pribadi, M.Kom',
            'gambar' => 'DsnIf.jpg',
            'jabatan' => 'Ketua Program Studi Informatika (S1).',
        ],
        [
            'id' => 3,
            'nama' => 'Eka Puji Widiyanto, S.T., M.Kom',
            'gambar' => 'DsnTe.jpg',
            'jabatan' => 'Ketua Program Studi Teknik Elektro (S1).',
        ],
        [
            'id' => 4,
            'nama' => 'Idham Cholid, S.E., M.E',
            'gambar' => 'DsnM.jpg',
            'jabatan' => 'Ketua Program Studi Manajemen.',
        ],
        [
            'id' => 5,
            'nama' => 'Dr. Siti Khairani, S.E.Ak., M.Si.',
            'gambar' => 'DsnA.jpg',
            'jabatan' => 'Ketua Program Studi Akuntansi (S1).',
        ],
        [
            'id' => 6,
            'nama' => 'Dr. Antonius Wahyu Sudrajat, S.Kom, M.T.I',
            'gambar' => 'DsnMSI.jpg',
            'jabatan' => 'Ketua Program Studi Magister Sistem Informasi (S2)..',
        ],
        [
            'id' => 7,
            'nama' => 'Dicky Pratama, S.Kom., M.T.I',
            'gambar' => 'DsnMI.jpg',
            'jabatan' => 'Ketua Program Studi Manajemen Informatika (D3).',
        ]
    ];
    

    public function index()
{
    $dosen = [
        [
            'id' => 1, 
            'nama' => 'Dosen Program Studi Sistem Informasi', 
            'gambar' => 'dsnp.jpeg', 
        ],
        [
            'id' => 2, 
            'nama' => 'Dosen Program Studi Informatika', 
            'gambar' => 'dsnp.jpeg',
        ],
         [
            'id' => 3, 
            'nama' => 'Dosen Program Studi Teknik Elektro', 
            'gambar' => 'dsnp.jpeg',
        ],
        [
            'id' => 4, 
            'nama' => 'Dosen Program Studi Manajemen', 
            'gambar' => 'dsnp.jpeg',
        ],
        [
            'id' => 5, 
            'nama' => 'Dosen Program Studi Akuntansi', 
            'gambar' => 'dsnw.jpeg',
        ],
        [
            'id' => 6, 
            'nama' => 'Dosen Program Studi Magister Sistem Informasi', 
            'gambar' => 'dsnp.jpeg',
        ],
        [
            'id' => 7, 
            'nama' => 'Dosen Program Studi Manajemen Informatika', 
            'gambar' => 'dsnp.jpeg',
        ],
    ];

    return view('dosen.index', compact('dosen'));
}

    /**
     * Show the form for creating a new resource.
     */

     public function createForm()
     {
         return view('dosen.create');
     }

    public function create(Request $request)
    {
        $newDosen = [
            'id' => count($this->dosen) + 1,
            'nama' => $request->input('nama')
        ];

        array_push($this->dosen, $newDosen);

        return redirect()->route('dosen.index');
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
        $dosen = null;
        foreach ($this->dosen as $dosenItem) {
            if ($dosenItem['id'] == $id) {
                $dosen = $dosenItem;
                break;
            }
        }
    
        if (!$dosen) {
            return redirect()->route('dosen.index')->with('error', 'Dosen tidak ditemukan');
        }
    
        return view('dosen.detail', ['dosen' => $dosen]);
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
        foreach ($this->dosen as $key => $dosen) {
            if ($dosen['id'] == $id) {
                unset($this->dosen[$key]);
                break;
            }
        }
    
        // Redirect ke halaman dosen dengan pesan sukses
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil dihapus');
    }
}
