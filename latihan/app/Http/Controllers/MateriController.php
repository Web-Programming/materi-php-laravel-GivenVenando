<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $materi = [
        [
            'id' => 1, 
            'nama' => 'Pemogaman Web', 
            'gambar' => 'Mif.jpg', 
            'deskripsi' => 'Pemrograman web adalah proses membuat dan mengembangkan situs atau aplikasi berbasis web menggunakan bahasa pemrograman seperti HTML, CSS, JavaScript, dan lainnya. Fokus utamanya adalah membangun tampilan antarmuka dan fungsionalitas yang interaktif dan responsif.'
        ],
        [
            'id' => 2, 
            'nama' => 'Basis Data', 
            'gambar' => 'Msi.jpg',
            'deskripsi' => 'Basis data adalah sistem yang digunakan untuk menyimpan, mengelola, dan mengakses data secara terstruktur agar mudah diolah dan diambil kembali. Pemahaman basis data penting untuk membangun aplikasi yang efisien dan handal.'
        ],
        [
            'id' => 3, 
            'nama' => 'Ekonomi Manajemen', 
            'gambar' => 'Mm.jpg',
            'deskripsi' => 'Ekonomi Manajemen mempelajari prinsip-prinsip ekonomi dan keterampilan manajerial untuk mengelola sumber daya secara efektif dalam dunia bisnis. Cocok untuk kamu yang ingin memahami pasar, merancang strategi, dan mengambil keputusan bisnis yang tepat.'
        ],
        [
            'id' => 4, 
            'nama' => 'Akuntansi Keuangan', 
            'gambar' => 'Makun.jpg',
            'deskripsi' => 'Akuntansi Keuangan mempelajari cara mencatat, menyusun, dan melaporkan informasi keuangan perusahaan secara sistematis dan sesuai standar akuntansi. Fokus utamanya adalah menghasilkan laporan keuangan yang akurat untuk pengambilan keputusan bisnis.'
        ],
        [
            'id' => 5, 
            'nama' => 'Inovasi dan Perubahan Organisasi', 
            'gambar' => 'Mmsi.jpg',
            'deskripsi' => 'Inovasi dan Perubahan Organisasi membahas bagaimana organisasi beradaptasi dan berkembang melalui penerapan ide baru, teknologi, dan strategi. Fokus utamanya adalah menciptakan perubahan positif yang meningkatkan efektivitas, daya saing, dan kelangsungan organisasi di tengah dinamika lingkungan bisnis.'
        ],
        [
            'id' => 6, 
            'nama' => 'Technopreneurship ', 
            'gambar' => 'Mmi.jpg',
            'deskripsi' => 'Technopreneurship adalah perpaduan antara teknologi dan kewirausahaan, yang fokus pada pemanfaatan inovasi teknologi untuk menciptakan produk, layanan, atau bisnis baru. Tujuannya adalah menghasilkan solusi kreatif yang bernilai ekonomi dan mampu bersaing di era digital.'
        ],
        [
            'id' => 7, 
            'nama' => 'Rangkaian Listrik', 
            'gambar' => 'Mte.jpg',
            'deskripsi' => 'Rangkaian Listrik mempelajari hubungan antara komponen listrik seperti resistor, kapasitor, dan induktor yang disusun untuk menghantarkan arus listrik. Materi ini mencakup analisis arus, tegangan, daya, serta hukum-hukum dasar seperti Hukum Ohm dan Hukum Kirchoff.'
        ]
    ];
    

    public function index()
{
    $materi = [
        [
            'id' => 1, 
            'nama' => 'Materi Program Studi Informatika', 
            'gambar' => 'informatika.jpg', 
        ],
        [
            'id' => 2, 
            'nama' => 'Materi Program Studi Sistem Informasi', 
            'gambar' => 'si.jpg',
        ],
        [
            'id' => 3, 
            'nama' => 'Materi Program Studi Manajemen', 
            'gambar' => 'manajemn.jpg',
        ],
        [
            'id' => 4, 
            'nama' => 'Materi Program Studi Akuntansi', 
            'gambar' => 'akuntansi.jpg',
        ],
        [
            'id' => 5, 
            'nama' => 'Materi Program Studi Magister Sistem Informasi', 
            'gambar' => 'si.jpg',
        ],
        [
            'id' => 6, 
            'nama' => 'Materi Program Studi Manajeman Informatika', 
            'gambar' => 'manajemnIf.jpg',
        ],
        [
            'id' => 7, 
            'nama' => 'Materi Program Studi Teknik Elektro', 
            'gambar' => 'elektro.jpg',
        ]
    ];

    return view('materi.index', compact('materi'));
}

    /**
     * Show the form for creating a new resource.
     */

     public function createForm()
     {
         return view('materi.create');
     }

    public function create(Request $request)
    {
        $newMateri = [
            'id' => count($this->materi) + 1,
            'nama' => $request->input('nama')
        ];

        array_push($this->materi, $newMateri);

        return redirect()->route('materi.index');
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
        $materi = null;
        foreach ($this->materi as $materiItem) {
            if ($materiItem['id'] == $id) {
                $materi = $materiItem;
                break;
            }
        }
    
        if (!$materi) {
            return redirect()->route('materi.index')->with('error', 'Materi tidak ditemukan');
        }
    
        return view('materi.detail', ['materi' => $materi]);
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
        foreach ($this->materi as $key => $materi) {
            if ($materi['id'] == $id) {
                unset($this->materi[$key]);
                break;
            }
        }
    
        // Redirect ke halaman materi dengan pesan sukses
        return redirect()->route('materi.index')->with('success', 'Materi berhasil dihapus');
    }
}
