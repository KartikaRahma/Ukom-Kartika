<?php


class HomeController extends Controller {
    public function index() {
        $berita = [
            [
                'id' => 1,
                'title' => 'Penerimaan Siswa Baru 2025',
                'description' => 'SPMB SMA Negeri 16 Semarang Dibuka. Segera daftarkan dirimu dan raih kesempatan untuk belajar di sekolah terbaik.',
                'content' => 'Sistem Penerimaan Murid Baru (SPMB) tahun 2025 secara resmi diluncurkan oleh Guberunur Jawa Tengah pada tanggal Senin 19 Mei 2025 di Stadion Jatidiri Semarang dalam raingkaian peresmian SMA Negeri Keberbakatan Olahraga (SKO). SPMB tahun 2025 ini merupakan SPMB pertama yang di inisiasi oleh Dinas Pendidikan Provinsi Jawa Tengah dengan mengusung kemandirian dalam pembuatan program aplikasinya.',
                'content' => 'Universitas Widya Husada Semarang membuka pendaftaran mahasiswa baru untuk tahun akademik 2023. Segera daftarkan dirimu dan raih kesempatan untuk belajar di kampus terbaik. Kami menyediakan berbagai program studi yang berkualitas dan didukung oleh tenaga pengajar yang berpengalaman. Jangan lewatkan kesempatan ini untuk menjadi bagian dari komunitas akademik kami.',
                'image' => 'https://sman16smg.sch.id/media_library/posts/large/8dffe1acb886c6a1dcc85e9b8c5045f2.png',
                'created_at' => '2025-07-04 10:00:00'
            ],
            [
                'id' => 2,
                'title' => 'IHT SMAN 16 Semarang: Penguatan Pembelajaran Mendalam dan Revisi Kurikulum Satuan Pendidikan Tahun Ajaran 2025/2026',
                'description' => 'Semarang, 24 Juni 2025 — Dalam rangka peningkatan kualitas proses pembelajaran dan penyesuaian kurikulum, SMAN 16 Semarang menggelar kegiatan In House Training (IHT) dengan tema “Pembelajaran Mendalam pada Pendidikan Dasar dan Menengah serta Review dan Revisi Kurikulum Satuan Pendidikan Tahun Ajaran 2025/2026”. Kegiatan ini berlangsung selama dua hari, yakni pada hari Senin dan Selasa, tanggal 23-24 Juni 2025, bertempat di lingkungan SMAN 16 Semarang.',
                'content' => 'Kegiatan ini diikuti oleh seluruh guru dan tenaga kependidikan SMAN 16 Semarang sebagai bagian dari upaya sekolah dalam mengimplementasikan Kurikulum Merdeka dengan pendekatan Deep learning secara lebih efektif dan bermakna. IHT ini bertujuan untuk memperkuat pemahaman guru terhadap konsep pembelajaran mendalam (deep learning) yang menekankan pada kemampuan berpikir kritis, pemecahan masalah, kolaborasi, dan kreativitas peserta didik.
        
                Kegiatan IHT ini dihadiri berbagai Narasumber hebat yang berpengalaman dalam bidang Pendidikan, seperti :
                
                Dra. Suminarsih, M.Si., yang membawakan materi tentang pembelajaran mendalam/ Deep Learning.
                Dra. Galuh Wijayanti, M.Pd., yang menyampaikan tentang review dan revisi ktsp SMA Negeri 16 Semarang tahun Pelajaran 2025/2026 dengan penekanan berdasarkan kebutuhan peserta didik dan nilai raport Pendidikan satuan pendidikan.
                Dan Bapak Kustrisaptono, S.Si., M.Pd., yang memberikan motivasi dan semangat bagi bapak/ibu guru serta karyawan SMAN 16 Semarang untuk mendidik siswa-siswi SMAN 16 Semarang dengan sepenuh hati dan memberikan pembelajaran yang bermakna serta mendalam bagi mereka.
                Kepala Sekolah SMAN 16 Semarang menyampaikan dalam sambutanya bahwa kegiatan ini merupakan bagian penting dari proses refleksi dan evaluasi kurikulum sekolah guna menyambut Tahun Ajaran 2025/2026 dengan lebih siap dan adaptif. “Revisi kurikulum harus menjadi langkah strategis agar pembelajaran yang kita lakukan semakin relevan, bermakna, dan mendorong peserta didik untuk berpikir kritis dan kreatif sesuai tantangan zaman,” ujarnya.
                
                Dr. Sri Wahyuni, M.Pd. juga menyampaikan pembelajaran mendalam ini penting karena tidak hanya membentuk siswa yang cerdas secara akademis, tetapi juga kompeten, kritis, kolaboratif, dan siap menghadapi dunia yang kompleks dan terus berubah. Oleh karena itu, pendidik perlu bertransformasi dari sekadar pengajar menjadi fasilitator yang menuntun siswa untuk berpikir mendalam.
                
                Selama dua hari pelaksanaan, peserta IHT tidak hanya mengikuti paparan materi, tetapi juga aktif dalam sesi diskusi kelompok, praktik penyusunan modul ajar, serta penyusunan dokumen revisi kurikulum yang disesuaikan dengan kebutuhan dan potensi sekolah. Kegiatan ditutup dengan pemaparan hasil review kurikulum dan rencana tindak lanjut implementasi pembelajaran mendalam di SMAN 16 Semarang. Diharapkan melalui IHT ini, seluruh pendidik mampu menjadi fasilitator pembelajaran yang menginspirasi dan mendukung terwujudnya profil pelajar Pancasila.',
                'image' => 'https://sman16smg.sch.id/media_library/posts/large/40f75f2870832de0d1f73d45e62d28b7.jpeg',
                'created_at' => '2025-04-04 10:00:00'
            ]
        ];
        $galeri = [
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
            ];
        // Load the home view
        $this->layout('home/index', 'default',[
            'title' => 'Home',
            'description' => 'Selamat datang di Sistem Informasi Sekolah',
            'berita' => $berita,
            'galeri' => $galeri,
        ]);
    }

    
}
