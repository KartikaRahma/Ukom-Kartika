<?php

class GaleriController extends Controller {
    protected $galeri = [
        [
            'id' => 1,
            'title' => 'Uji Coba SPMB 2025',
            'description' => 'Kegiatan Uji coba SPMB (Sistem Penerimaan Murid Baru)',
            'image' => 'https://sman16smg.sch.id/media_library/albums/bd62acacb392637b23ae1201c8fdb643.jpeg',
            'created_at' => '2025-07-04 10:00:00'
        ],
        [
            'id' => 2,
            'title' => 'Refleksi Kurikulum',
            'description' => 'Kegiatan Refleksi Kurikulum 2024 / 2025',
            'image' => 'https://sman16smg.sch.id/media_library/albums/e1b31fa2f784f6d0f46a6f8db53f843c.jpeg',
            'created_at' => '2023-01-02 10:00:00'
        ],
        [
            'id' => 3,
            'title' => 'Ujian Praktik',
            'description' => 'Kegiatan Ujian Praktik Yang di laksanakan Oleh Siswa - Siswa Kelas XII',
            'image' => 'https://sman16smg.sch.id/media_library/albums/9a87c6d56b7cedb97025e899674c0fb4.jpeg',
            'created_at' => '2023-01-02 10:00:00'
        ],
        [
            'id' => 4,
            'title' => 'Jumat Berbudaya',
            'description' => 'Jumat Berbudaya di SMAN 16 Semarang',
            'image' => 'https://cabdindikwil1.com/wp-content/uploads/2022/07/1.jpg',
            'created_at' => '2023-01-02 10:00:00'
        ],
        ];
    public function index() {
        // Load the galeri view
        $this->layout('galeri/index', 'default', [
            'title' => 'Galeri',
            'description' => 'Galeri foto kegiatan dan acara di Universitas Widya Husada Semarang',
            'galeri' => $this->galeri
        ]);
    }

    public function detail($id) {
        // Load the galeri detail view
        $this->layout('galeri/detail', 'default', [
            'title' => 'Detail Galeri',
            'description' => 'Detail galeri dengan ID: ' . $id
        ]);
    }
}
