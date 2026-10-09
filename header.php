<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPLG SMKN 1 Kawali - Portal Jurusan</title>
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* === RESET & VARIABEL === */
        :root {
            --primary-color: #1e3a8a; /* Biru Tua */
            --secondary-color: #ede31f; /* Biru Muda */
            --text-color: #333333;
            --bg-light: #f8fafc;
            --white: #fafafa;
        }
        .biru {
         color: blue;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            color: var(--text-color);
            background-color: var(--bg-light);
            line-height: 1.6;
        }

        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }

        /* === HEADER & NAVIGASI === */
        header {
            background-color: var(--white);
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }

        /* === PENGATURAN LOGO BARU === */
        .logo {
            display: flex;
            align-items: center;
            gap: 12px; /* Jarak antara gambar dan teks */
        }

        .logo img {
            height: 50px; /* Menjaga agar logo tidak melewati batas navbar */
            width: auto;
        }

        .logo span {
            font-size: 20px;
            font-weight: 700;
            color: var(--primary-color);
        }

        /* === MENU LINK === */
        .nav-links {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        .nav-links li a {
            font-weight: 500;
            color: var(--text-color);
            transition: color 0.3s;
        }

        .nav-links li a:hover {
            color: var(--secondary-color);
        }

        /* === TAMBAHAN DROPDOWN PROFIL === */
        .dropdown {
            position: relative;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: var(--white);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-radius: 6px;
            padding: 10px 0;
            min-width: 160px;
            z-index: 1100;
            flex-direction: column;
            gap: 0;
        }

        .dropdown-menu li a {
            padding: 8px 20px;
            display: block;
            white-space: nowrap;
        }

        .dropdown-menu li a:hover {
            background-color: var(--bg-light);
            color: var(--secondary-color);
        }

        .dropdown:hover .dropdown-menu {
            display: flex;
        }
        /* ============================== */

        /* Menu Mobile Toggle */
        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 5px;
        }

        .menu-toggle span {
            width: 25px;
            height: 3px;
            background-color: var(--primary-color);
            border-radius: 2px;
        }

        /* === HERO SECTION === */
        .hero {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            padding: 100px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            background-color: var(--white);
            color: var(--primary-color);
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn:hover {
            background-color: #f1f5f9;
            transform: translateY(-2px);
        }

        /* === SECTIONS UMUM === */
        section {
            padding: 80px 20px;
            min-height: 60vh;
        }

        .section-title {
            text-align: center;
            font-size: 32px;
            color: var(--primary-color);
            margin-bottom: 40px;
            margin-top: 40px;
        }

        /* === FOOTER === */
        footer {
            background-color: #0f172a;
            color: var(--white);
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        /* === RESPONSIVE (MOBILE) === */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background-color: var(--white);
                box-shadow: 0 4px 6px rgba(0,0,0,0.05);
                padding: 20px 0;
                text-align: center;
            }
            .nav-links.active {
                display: flex;
            }
            .menu-toggle {
                display: flex;
            }
            .hero h1 { font-size: 32px; }
            .logo span { font-size: 16px; /* Mengecilkan teks logo di HP */ }
            
            /* Penyesuaian Dropdown Mobile */
            .dropdown-menu {
                position: static;
                box-shadow: none;
                background-color: transparent;
                display: none;
            }
            .dropdown:hover .dropdown-menu {
                display: flex;
            }
        }
    </style>
</head>
<body>

    <!-- Header & Navigasi -->
    <header>
        <div class="container navbar">
            <!-- Menambahkan tag img untuk menampilkan logo smknnn.jpg -->
            <a href="index.php?page=home" class="logo">
                <img src="img/smknnn.png" alt="Logo SMKN 1 Kawali">
                <span class="biru">PPLG SMKN 1 KAWALI</span>
            </a>
            
            <div class="menu-toggle" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!-- Navigasi menggunakan URL Parameter PHP -->
            <ul class="nav-links" id="navLinks">
                <li><a href="index.php?page=home">Home</a></li>
                <li class="dropdown">
                    <a href="">Profil</a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php?page=PROFIL RPL">RPL</a></li>
                        <li><a href="index.php?page=PROFIL GIM">Pengembangan GIM</a></li>
                    </ul>
                </li>
                <li><a href="index.php?page=artikel">Artikel</a></li>
                <li><a href="index.php?page=galeri">Galeri</a></li>
                <li><a href="index.php?page=kontak">Kontak kami</a></li>
            </ul>
        </div>
    </header>

</body>
</html>