<style>
    .gallery-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
                margin-top: 40px;
            }
            .gallery-item {
                background: var(--white);
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 4px 6px rgba(0,0,0,0.05);
                transition: transform 0.3s ease;
            }
            .gallery-item:hover {
                transform: translateY(-5px);
            }
            .gallery-item img {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }
            .gallery-caption {
                padding: 15px;
                text-align: center;
                font-weight: 500;
                color: var(--text-color);
            }
            <style>
        :root {
            --primary-color: #B49B57;
            --primary-hover: #D6BB72;
            --dark-color: #1a1a1a;
            --light-color: #f4f4f4;
            --white: #ffffff;
        }
        
        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
            font-family: 'Poppins', sans-serif; 
        }
        
        body { 
            background-color: var(--light-color); 
            color: #333; 
            line-height: 1.6; 
            padding: 20px;
        }

        /* STYLE KHUSUS SECTION PROFILE */
        section#profile { 
            padding: 40px 20px; 
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .section-title { 
            text-align: center; 
            font-size: 32px; 
            color: var(--dark-color); 
            margin-bottom: 40px; 
            text-transform: uppercase; 
        }
        
        .section-title::after { 
            content: ''; 
            display: block; 
            width: 80px; 
            height: 4px; 
            background: var(--primary-color); 
            margin: 10px auto 0; 
        }

        #profile .profile-content { 
            display: flex; 
            gap: 40px; 
            background: var(--white); 
            padding: 40px; 
            border-radius: 10px; 
            box-shadow: 0 5px 15px rgba(0,0,0,0.05); 
        }
        
        .profile-text { 
            flex: 1; 
        }
        
        .profile-image-rpl { 
            flex: 1; 
            background: url('img/test.png') center/cover; 
            border-radius: 10px; 
            min-height: 300px; 
        }
        .profile-image-gim { 
            flex: 1; 
            background: url('img/gim.png') center/cover; 
            border-radius: 10px; 
            min-height: 300px; 
        }
        
        .btn { 
            background-color: var(--primary-color); 
            color: var(--white); 
            padding: 10px 25px; 
            text-decoration: none; 
            font-weight: bold; 
            border-radius: 5px; 
            transition: 0.3s; 
            border: none; 
            cursor: pointer; 
            display: inline-block; 
            margin-top: 10px;
        }
        
        .btn:hover { 
            background-color: var(--primary-hover); 
        }

        .fasilitas-list { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); 
            gap: 10px; 
            margin-top: 10px; 
        }
        
        .fasilitas-item { 
            background: var(--light-color); 
            padding: 10px; 
            border-radius: 5px; 
            border-left: 4px solid var(--primary-color); 
            font-size: 14px; 
            font-weight: bold; 
        }

        /* MODAL POP UP GURU */
        .modal { 
            display: none; 
            position: fixed; 
            z-index: 2000; 
            left: 0; 
            top: 0; 
            width: 100%; 
            height: 100%; 
            background-color: rgba(0,0,0,0.7); 
            justify-content: center; 
            align-items: center; 
        }
        
        .modal-content { 
            background-color: #fff; 
            padding: 30px; 
            border-radius: 10px; 
            width: 90%; 
            max-width: 500px; 
            text-align: center; 
            position: relative; 
        }
        
        .close-modal { 
            position: absolute; 
            right: 20px; 
            top: 15px; 
            font-size: 28px; 
            cursor: pointer; 
            color: #333; 
        }
        
        .guru-list { 
            text-align: left; 
            margin-top: 20px; 
        }
        
        .guru-item { 
            padding: 10px; 
            border-bottom: 1px solid #ddd; 
        }
        
        .guru-item strong { 
            color: var(--primary-color); 
            display: block;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            #profile .profile-content { 
                flex-direction: column; 
            }
        }
    </style>
<?php
// 1. Panggil desain header dan menu atas
include 'header.php';

// 2. Cek halaman apa yang sedang diminta di URL. Jika kosong, arahkan ke 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// 3. Menampilkan konten berdasarkan halaman yang dipilih
switch ($page) {
    
    case 'home':
        // Halaman Home dari kode Anda
?>
        <section id="home" class="hero">
            <div class="container">
                <h1>Selamat Datang di PPLG SMKN 1 Kawali</h1>
                <p>Portal resmi jurusan Pengembangan Perangkat Lunak dan Gim (PPLG). Temukan informasi seputar dunia programming, pengembangan aplikasi berbasis web, desain gim, dan karya-karya inovatif siswa kami.</p>
                <a href="index.php?page=PROFIL RPL" class="btn">Kenali Program Keahlian RPL</a>
                <a href="index.php?page=PROFIL GIM" class="btn">Kenali Program Keahlian GIM</a>
            </div>
        </section>
<?php
        break;

    case 'PROFIL RPL':
        // Halaman RPL dari kode Anda
?>
        <section id="profile">
        <h2 class="section-title">Profile RPL</h2>
        <div class="profile-content">
            <div class="profile-image-rpl"></div>
            <div class="profile-text">
                <h3 style="color: var(--primary-color);">Tentang RPL</h3>
                <p>Program keahlian Pengembangan Perangkat Lunak di SMKN 1 Kawali dinaungi oleh unit Teaching Factory (Tefa) yang bernama QD-TECH (Qualy Digital Technology). Berdiri sejak bulan Juli 2022, layanan ini didedikasikan untuk menghadirkan jasa pembuatan website dan aplikasi berbasis kebutuhan klien.</p>
                <br>
                
                <h3 style="color: var(--primary-color);">Daftar Guru Pengajar</h3>
                <p>Berikut adalah daftar guru pengajar di program keahlian RPL SMKN 1 Kawali:</p>
                <p>
                <button onclick="bukaModal()" class="btn">Lihat Daftar Guru</button>
                <br><br>
                
                <h3 style="color: var(--primary-color);">Fasilitas Praktik</h3>
                <!-- DIREKAYASA DARI LOOP PHP MENJADI HTML STATIS -->
                <div class="fasilitas-list">
                    <div class="fasilitas-item">Wifi Lab<br><span style="font-weight:normal; font-size:12px;">4 Unit</span></div>
                    <div class="fasilitas-item">Komputer<br><span style="font-weight:normal; font-size:12px;">80 Unit</span></div>
                    <div class="fasilitas-item">Lab Komputer <br><span style="font-weight:normal; font-size:12px;">4 Ruangan</span></div>
                    <div class="fasilitas-item">Laptop<br><span style="font-weight:normal; font-size:12px;">14 Unit</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL POP UP DAFTAR GURU -->
    <!-- DIREKAYASA DARI LOOP PHP MENJADI HTML STATIS -->
    <div id="modalGuru" class="modal">
        <div class="modal-content">
            <span class="close-modal" onclick="tutupModal()">&times;</span>
            <h2 style="color: var(--primary-color);">Daftar Guru Pengajar</h2>
            <div class="guru-list">
                <div class="guru-item">
                    <strong>Yanto Supriyanto, S.Kom., M.M.</strong>
                    <span>Kepala Program</span>
                </div>
                <div class="guru-item">
                    <strong>Ade Popon Nurlela, ST.</strong>
                    <span>Pengajar Website</span>
                </div>
                <div class="guru-item">
                    <strong>Aceng Taofik, S.Kom.</strong>
                    <span>Pengajar Pengembangan GIM</span>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT UNTUK MODAL -->
    <script>
        function bukaModal() { 
            document.getElementById('modalGuru').style.display = 'flex'; 
        }
        
        function tutupModal() { 
            document.getElementById('modalGuru').style.display = 'none'; 
        }
        
        window.onclick = function(event) {
            let modal = document.getElementById('modalGuru');
            if (event.target == modal) { 
                modal.style.display = "none"; 
            }
        }
    </script>
    </section>
<?php
        break;

    case 'PROFIL GIM':
        // Halaman GIM dari kode Anda
?>
       <section id="profile">
        <h2 class="section-title">Profile GIM</h2>
        <div class="profile-content">
            <div class="profile-image-gim"></div>
            <div class="profile-text">
                <h3 style="color: var(--primary-color);">Tentang GIM</h3>
                <p>Selain berfokus pada aplikasi, QD-TECH SMKN 1 Kawali juga menghadirkan layanan unggulan di bidang Pengembangan Gim. Program ini dirancang untuk menciptakan produk gim yang kreatif, interaktif, dan fungsional dengan memanfaatkan perkembangan teknologi informasi terkini.</p>
                <br>
                
                <h3 style="color: var(--primary-color);">Daftar Guru Pengajar</h3>
                <p>Berikut adalah daftar guru pengajar di program keahlian GIM SMKN 1 Kawali:</p>
                <button onclick="bukaModal()" class="btn">Lihat Daftar Guru</button>
                <br><br>
                
                <h3 style="color: var(--primary-color);">Fasilitas Praktik</h3>
                <!-- DIREKAYASA DARI LOOP PHP MENJADI HTML STATIS -->
                <div class="fasilitas-list">
                    <div class="fasilitas-item">Wifi Lab<br><span style="font-weight:normal; font-size:12px;">4 Unit</span></div>
                    <div class="fasilitas-item">Komputer<br><span style="font-weight:normal; font-size:12px;">80 Unit</span></div>
                    <div class="fasilitas-item">Lab Komputer <br><span style="font-weight:normal; font-size:12px;">4 Ruangan</span></div>
                    <div class="fasilitas-item">Laptop<br><span style="font-weight:normal; font-size:12px;">14 Unit</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL POP UP DAFTAR GURU -->
    <!-- DIREKAYASA DARI LOOP PHP MENJADI HTML STATIS -->
    <div id="modalGuru" class="modal">
        <div class="modal-content">
            <span class="close-modal" onclick="tutupModal()">&times;</span>
            <h2 style="color: var(--primary-color);">Daftar Guru Pengajar</h2>
            <div class="guru-list">
                <div class="guru-item">
                    <strong>Yanto Supriyanto, S.Kom., M.M.</strong>
                    <span>Kepala Program</span>
                </div>
                <div class="guru-item">
                    <strong>Ade Popon Nurlela, ST.</strong>
                    <span>Pengajar Website</span>
                </div>
                <div class="guru-item">
                    <strong>Aceng Taofik, S.Kom.</strong>
                    <span>Pengajar Pengembangan GIM</span>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT UNTUK MODAL -->
    <script>
        function bukaModal() { 
            document.getElementById('modalGuru').style.display = 'flex'; 
        }
        
        function tutupModal() { 
            document.getElementById('modalGuru').style.display = 'none'; 
        }
        
        window.onclick = function(event) {
            let modal = document.getElementById('modalGuru');
            if (event.target == modal) { 
                modal.style.display = "none"; 
            }
        }
    </script>
    </section>
<?php
        break;

    case 'artikel':
?>
        <section class="container">
            <h2 class="section-title">Artikel</h2>
            <p style="text-align: center;">Ini adalah halaman Artikel. Anda bisa menambahkan daftar berita atau artikel di sini nanti.</p>
        </section>
<?php
        break;

    case 'galeri':
?>
        <section class="container">
            <h2 class="section-title">Galeri Kegiatan PPLG</h2>
            <p style="text-align: center; max-width: 700px; margin: 0 auto;">
                Dokumentasi aktivitas pembelajaran, praktikum coding, pembuatan game, dan suasana lab di jurusan PPLG SMKN 1 Kawali.
            </p>

            <!-- Grid 4 Gambar -->
            <div class="gallery-grid">
                <!-- Gambar 1 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=500&q=80" alt="Praktikum Coding">
                    <div class="gallery-caption">Praktikum Pemrograman Web</div>
                </div>

                <!-- Gambar 2 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?auto=format&fit=crop&w=500&q=80" alt="Pembuatan Game">
                    <div class="gallery-caption">Pengembangan Game Interaktif</div>
                </div>

                <!-- Gambar 3 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=500&q=80" alt="Kerja Kelompok">
                    <div class="gallery-caption">Kolaborasi & Diskusi Siswa</div>
                </div>

                <!-- Gambar 4 -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=500&q=80" alt="Lab Komputer">
                    <div class="gallery-caption">Suasana Lab Komputer PPLG</div>
                </div>
            </div>
        </section>
<?php
        break;

    case 'kontak':
?>
        <section class="container">
            <h2 class="section-title">Kontak Kami</h2>
            <p style="text-align: center;">Halaman Kontak. Anda bisa menambahkan formulir kontak, email, atau nomor telepon sekolah di sini.</p>
        </section>
<?php
        break;

    default:
        // Halaman jika URL tidak ditemukan (404 Error)
?>
        <section class="container">
            <h2 class="section-title">404 - Tidak Ditemukan</h2>
            <p style="text-align: center;">Maaf, halaman yang Anda cari tidak tersedia.</p>
        </section>
<?php
        break;
}

// 4. Panggil desain footer dan javascript bawah
include 'footer.php';
?>