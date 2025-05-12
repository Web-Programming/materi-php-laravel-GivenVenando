<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $prodi = [
        [
            'id' => 1, 
            'nama' => 'Program Studi Informatika', 
            'gambar' => 'informatika.jpg', 
            'deskripsi' => 'Program Studi Informatika membekali mahasiswa dengan keahlian di bidang teknologi dan pengembangan software untuk menciptakan solusi digital inovatif. Siap bersaing di era digital dan jadi profesional IT masa depan!.'
        ],
        [
            'id' => 2, 
            'nama' => 'Program Studi Sistem Informasi', 
            'gambar' => 'si.jpg',
            'deskripsi' => 'Program Studi Sistem Informasi menggabungkan ilmu komputer dan manajemen untuk menciptakan solusi teknologi yang mendukung kebutuhan bisnis. Cocok untuk kamu yang ingin jadi penghubung antara teknologi dan strategi perusahaan di era digital!.'
        ],
        [
            'id' => 3, 
            'nama' => 'Program Studi Manajemen', 
            'gambar' => 'manajemn.jpg',
            'deskripsi' => 'Program Studi Manajemen membekali mahasiswa dengan pengetahuan dan keterampilan dalam mengelola bisnis, mulai dari keuangan, pemasaran, hingga sumber daya manusia. Pilihan tepat bagi calon pemimpin dan pengusaha sukses di masa depan!.'
        ],
        [
            'id' => 4, 
            'nama' => 'Program Studi Akuntansi', 
            'gambar' => 'akuntansi.jpg',
            'deskripsi' => 'Program Studi Akuntansi mengajarkan keterampilan mencatat, menganalisis, dan melaporkan informasi keuangan secara akurat. Cocok untuk kamu yang ingin berkarier sebagai akuntan profesional, auditor, atau analis keuangan di berbagai sektor bisnis!.'
        ],
        [
            'id' => 5, 
            'nama' => 'Program Studi Magister Sistem Informasi', 
            'gambar' => 'si.jpg',
            'deskripsi' => 'Magister Sistem Informasi mempersiapkan profesional untuk mengelola dan mengembangkan sistem informasi yang mendukung kesuksesan organisasi di era digital. Fokus pada penguasaan teknologi dan strategi untuk solusi bisnis yang lebih efektif!.'
        ],
        [
            'id' => 6, 
            'nama' => 'Program Studi Manajeman Informatika', 
            'gambar' => 'manajemnIf.jpg',
            'deskripsi' => 'Program Studi Manajemen Informatika mengintegrasikan pengetahuan tentang manajemen bisnis dengan teknologi informasi. Mahasiswa akan belajar bagaimana merancang, mengelola, dan mengoptimalkan sistem informasi yang mendukung pengambilan keputusan dan efisiensi operasional di perusahaan. Program ini cocok untuk kamu yang ingin menjadi pemimpin dalam transformasi digital dan manajemen teknologi di dunia bisnis!.'
        ],
        [
            'id' => 7, 
            'nama' => 'Program Studi Teknik Elektro', 
            'gambar' => 'elektro.jpg',
            'deskripsi' => 'Program Studi Teknik Elektro mempelajari penerapan ilmu fisika dan teknologi untuk merancang, mengembangkan, dan mengelola sistem elektronik, kelistrikan, serta perangkat cerdas. Lulusan program ini siap berkarier di berbagai industri, mulai dari telekomunikasi, energi, hingga otomasi industri, dengan fokus pada inovasi dan solusi teknologi!.'
        ]
    ];
    

    public function index()
{
    $prodi = [
        [
            'id' => 1, 
            'nama' => 'Program Studi Informatika', 
            'gambar' => 'informatika.jpg', 
        ],
        [
            'id' => 2, 
            'nama' => 'Program Studi Sistem Informasi', 
            'gambar' => 'si.jpg',
        ],
        [
            'id' => 3, 
            'nama' => 'Program Studi Manajemen', 
            'gambar' => 'manajemn.jpg',
        ],
        [
            'id' => 4, 
            'nama' => 'Program Studi Akuntansi', 
            'gambar' => 'akuntansi.jpg',
        ],
        [
            'id' => 5, 
            'nama' => 'Program Studi Magister Sistem Informasi', 
            'gambar' => 'si.jpg',
        ],
        [
            'id' => 6, 
            'nama' => 'Program Studi Manajeman Informatika', 
            'gambar' => 'manajemnIf.jpg',
        ],
        [
            'id' => 7, 
            'nama' => 'Program Studi Teknik Elektro', 
            'gambar' => 'elektro.jpg',
        ]
    ];

    return view('prodi.index', compact('prodi'));
}

    /**
     * Show the form for creating a new resource.
     */

     public function createForm()
     {
         return view('prodi.create');
     }

    public function create(Request $request)
    {
        $newProdi = [
            'id' => count($this->prodi) + 1,
            'nama' => $request->input('nama')
        ];

        array_push($this->prodi, $newProdi);

        return redirect()->route('prodi.index');
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
        $prodi = null;
        foreach ($this->prodi as $prodiItem) {
            if ($prodiItem['id'] == $id) {
                $prodi = $prodiItem;
                break;
            }
        }
    
        if (!$prodi) {
            return redirect()->route('prodi.index')->with('error', 'Program studi tidak ditemukan');
        }
    
        return view('prodi.detail', ['prodi' => $prodi]);
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
        foreach ($this->prodi as $key => $prodi) {
            if ($prodi['id'] == $id) {
                unset($this->prodi[$key]);
                break;
            }
        }
    
        // Redirect ke halaman prodi dengan pesan sukses
        return redirect()->route('prodi.index')->with('success', 'Program studi berhasil dihapus');
    }
}
