<!DOCTYPE html>
<div class="container-fluid">
  <div class="container pt-5 px-2 pb-2">
    <div class="row justify-content-between">
      <div class="col-5">
        <h1 class="text-left">SMA NEGERI<span class="text-primary"> 16</span> SEMARANG</h1>
        <p class="text-left">SMA Negeri 16 Semarang adalah lembaga pendidikan unggulan yang berkomitmen mencetak generasi penerus 
          bangsa yang cerdas, berkarakter, dan berprestasi. 
          Dengan dukungan tenaga pendidik profesional dan lingkungan belajar yang inspiratif, SMA Negeri 16 Semarang 
          siap membekali siswa untuk bersaing di tingkat nasional maupun internasional.</p>
        <div class="mt-2">
          <button class="btn btn-primary">Daftar Sekarang</button>
        </div>
      </div>
      <div class="col-5">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBB35JS5qF7ChQSg6dsZgQ_Dvu5JfwcUw36Q&s" alt="uwhs" class="rounded" widht="300" height="280">
      </div>
    </div>
  </div>
</div>
<!-- Card Info -->
 <div class="my-2">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Guru</h5>
              <p class="card-text h2 text-center">35 <i class="fa-solid fa-user"></i></p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Siswa</h5>
              <p class="card-text h2 text-center">350 <i class="fa-solid fa-user-graduate"></i></p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kelas</h5>
              <p class="card-text h2 text-center">12<i class="fa-solid fa-building-columns"></i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div> 
 <!-- Card WHY -->
<div class="container py-3">
  <div class="text-center justify-content-center align-items-center d-flex flex-column my-5">
    <div class="w-50">
      <h1>Kenapa Harus SMA<span class="text-primary"> NEGERI 16</span>  Semarang?</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="card bg-info text-white">
        <div class="card-body text-center">
          <img src="https://cdn-icons-png.flaticon.com/128/16105/16105437.png" alt="komputer" class="" width="50" height="50">
          <div class="card-text mt-3">
            <h4>Fasilitas Lengkap</h4>
            <p>Penunjang belajar dengan kualitas terbaik</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-info text-white">
      <div class="card-body text-center">
          <img src="https://cdn-icons-png.flaticon.com/128/3914/3914851.png" alt="komputer" class="" width="50" height="50">
          <div class="card-text mt-3">
            <h4>Lingkungan Nyaman</h4>
            <p>Penunjang belajar dengan kualitas terbaik</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-info text-white">
      <div class="card-body text-center">
          <img src="https://cdn-icons-png.flaticon.com/128/5069/5069169.png" alt="komputer" class="" width="50" height="50">
          <div class="card-text mt-3">
            <h4>Pengajar Kompeten</h4>
            <p>Penunjang belajar dengan kualitas terbaik</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-info text-white">
      <div class="card-body text-center">
          <img src="https://cdn-icons-png.flaticon.com/128/7653/7653582.png" alt="komputer" class="" width="50" height="50">
          <div class="card-text mt-3">
            <h4>Kerja Sama Luas</h4>
            <p>Penunjang belajar dengan kualitas terbaik</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Section Who -->
<div class="container py-4">
  <div class="text-center justify-content-center align-items-center d-flex flex-column my-5">
    <div class="col-5">
    <h1 class="text-left">Kata Kepala Sekolah<span class="text-primary"> SMA Negeri 16</span> Semarang</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
    <img src="https://sman16smg.sch.id/media_library/images/ab560947b68026dbefa5a4a6c67bf45d.JPG" alt="SMA" class="rounded" widht="400" height="300">
    </div>
    <div class="col-md-8">
    <p>Sebagai sekolah yang berkomitmen pada pendidikan yang berwawasan lingkungan, SMA Negeri 16 Semarang bangga menjadi bagian dari program Sekolah Adiwiyata. Kami percaya bahwa pendidikan bukan hanya tentang ilmu pengetahuan di dalam kelas, tetapi juga tentang membentuk karakter peserta didik agar peduli terhadap lingkungan sekitar. Oleh karena itu, kami senantiasa mendorong berbagai kegiatan ramah lingkungan, seperti pengelolaan sampah, penghijauan, konservasi air, serta penggunaan energi secara bijak.</p>
    <p>Dr. Sri Wahyuni, S.Pd., M.Pd.</p>
    <p>Kepala Sekolah SMA Negeri 16 Semarang</p>
    </div>
  </div>
</div>
<!-- End of Section Who --> 
 <!-- Section News -->
  <div class="continer-fluid bg-success-subtle py-4">
    <div class="container">
      <div class="text-center justify-content-center align-items-center d-flex flex-column my-5">
        <div class="w-50">
          <h1>Berita Terbaru</h1>
        </div>
      </div>
      <div class="row">
        <?php foreach ($data['berita'] as $news) { ?>
        <div class="col-md-4">
          <div class="card">
            <img src="<?= $news['image'] ?>" class="card-img-top" height="200" alt="Berita 1">
            <div class="card-body">
              <h5 class="card-title"><?= $news['title']; ?></h5>
              <p class="card-text"><?= substr($news['description'], 0, 70); ?>...</p>
              <a href="<?= BASE_URL.'artikel/detail/'. $news['id'] ?>" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
<!-- End of Section News -->
<!-- Section Galery -->
<div class="container py-4">
  <div class="text-center justify-content-center align-items-center d-flex flex-column my-5">
    <div class="w-50">
      <h1>Galeri Kegiatan Kami</h1>
    </div>
  </div>
  <div class="row">
    <?php foreach ($data['galeri'] as $galeri) { ?>
    <div class="col-md-4">
      <img src="<?= $galeri['image'] ?>" alt="<?= $galeri['title'] ?>" class="img-fluid rounded mb-3" width="250" height="250">
    </div>
    <?php } ?>
  </div>
</div>
<!-- End of Section Galery -->
