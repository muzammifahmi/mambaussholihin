<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Pondok Pesantren Mambaus Sholihin Litahfidz Al-Qur'an Malang. Program tahfidz 30 juz, kajian kitab, dan pembentukan karakter. Didirikan oleh Prof. Dr. KH. Nasrulloh, Lc., M.Th.I sejak 2018 di Landungsari, Dau, Malang.">
    <meta name="keywords"
        content="pesantren tahfidz malang, pondok pesantren malang, hafidz quran malang, pesantren mambaus sholihin, ppmbsmalang, pesantren landungsari">
    <meta name="author" content="PP. Mambaus Sholihin Litahfidz Al-Qur'an Malang">
    <title>PP. Mambaus Sholihin Litahfidz Al-Qur'an Malang</title>

    <!-- Favicon (Logo Tab Browser) -->
    <link rel="icon"
        href="https://raw.githubusercontent.com/alfianafriansyah-commits/ppmbsmalang/main/logo-transparan.png"
        type="image/png">
    <link rel="stylesheet" href="style/style-welcome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Playfair+Display:ital,wght@0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="/src/style.css" rel="stylesheet">

</head>

<body>

    <!-- NAVBAR -->


    <!-- HERO -->
    <section class="hero" id="beranda">
        <div class="hero-bg-shape"></div>
        <div class="hero-left">
            <div class="hero-badge">Selamat Datang di Pesantren</div>
            <h1 class="hero-title">
                Mambaus Sholihin<br>
                <em>Litahfidz Al-Qur'an</em><br>
                Malang
            </h1>
            <p class="hero-tagline">
                Membentuk generasi penghafal Al-Qur'an yang berilmu, berakhlaqul karimah, dan berdaya saing.
                <span style="display: block; margin-top: 12px; font-weight: 700; color: var(--gray-900);">Hafidz
                    Al-Qur'an · Alim · Sholih · Kafi.</span>
            </p>
            <div class="hero-actions">
                <a href="{{ route('pendaftaran') }}" target="_blank" class="btn-primary">
                    Daftar Sekarang
                    <span class="arrow"><i class="fas fa-arrow-right"></i></span>
                </a>
                <a href="#profil" class="btn-ghost">
                    <span class="play-icon"><i class="fas fa-play"></i></span>
                    Info Selengkapnya
                </a>
            </div>
            <div class="hero-stats">
                <div class="hero-stat-item">
                    <div class="hero-stat-num"><span class="counter-hero" data-target="41">0</span></div>
                    <div class="hero-stat-label">Santri Aktif</div>
                </div>
                <div class="hero-stat-item">
                    <div class="hero-stat-num"><span class="counter-hero" data-target="35">0</span><span>+</span>
                    </div>
                    <div class="hero-stat-label">Alumni</div>
                </div>
                <div class="hero-stat-item">
                    <div class="hero-stat-num"><span class="counter-hero" data-target="15">0</span></div>
                    <div class="hero-stat-label">Hafidz 30 Juz</div>
                </div>
            </div>
        </div>
        <div class="hero-right">
            <div class="hero-img-wrap">
                <div class="hero-img-main">
                    <img src="{{ asset('photos/Gemini_Generated_Image_dd4hhidd4hhidd4h.png') }}"
                        alt="Santri PP Mambaus Sholihin" onerror="this.style.display='none'">
                </div>
                <div class="hero-card-float top-left">
                    <div class="card-icon"><i class="fas fa-book-open"></i></div>
                    <div class="card-text-wrap">
                        <div class="card-label">Program Unggulan</div>
                        <div class="card-value">Tahsin dan Tahfidz Al-Qur'an</div>
                    </div>
                </div>
                <div class="hero-card-float bottom-right">
                    <div class="card-icon"><i class="fas fa-star"></i></div>
                    <div class="card-text-wrap">
                        <div class="card-label">Pesantren Berdiri</div>
                        <div class="card-value">Sejak 2018</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MARQUEE -->
    <div class="marquee-section" aria-hidden="true">
        <div class="marquee-track">
            <div class="marquee-item"><span class="marquee-dot"></span>Tahfidz Al-Qur'an 30 Juz</div>
            <div class="marquee-item"><span class="marquee-dot"></span>Kajian Kitab Turots</div>
            <div class="marquee-item"><span class="marquee-dot"></span>Wirid & Dzikir Harian</div>
            <div class="marquee-item"><span class="marquee-dot"></span>Khotmil Qur'an Rutin</div>
            <div class="marquee-item"><span class="marquee-dot"></span>Sedekah Shubuh</div>
            <div class="marquee-item"><span class="marquee-dot"></span>Sholat Berjamaah</div>
            <div class="marquee-item"><span class="marquee-dot"></span>Khidmah</div>
            <div class="marquee-item"><span class="marquee-dot"></span>Tahsin Al-Qur'an</div>
            <div class="marquee-item"><span class="marquee-dot"></span>Tahfidz Al-Qur'an 30 Juz</div>
            <div class="marquee-item"><span class="marquee-dot"></span>Kajian Kitab Turots</div>
            <div class="marquee-item"><span class="marquee-dot"></span>Wirid & Dzikir Harian</div>
            <div class="marquee-item"><span class="marquee-dot"></span>Khotmil Qur'an Rutin</div>
            <div class="marquee-item"><span class="marquee-dot"></span>Sedekah Shubuh</div>
            <div class="marquee-item"><span class="marquee-dot"></span>Sholat Berjamaah</div>
            <div class="marquee-item"><span class="marquee-dot"></span>Khidmah</div>
            <div class="marquee-item"><span class="marquee-dot"></span>Tahsin Al-Qur'an</div>
        </div>
    </div>

    <!-- STATS -->
    <section class="stats-section">
        <div class="stats-grid">
            <div class="stat-card reveal">
                <div class="stat-num"><span class="counter" data-target="25">0</span></div>
                <div class="stat-label">Santri Pesantren</div>
            </div>
            <div class="stat-card reveal delay-1">
                <div class="stat-num"><span class="counter" data-target="16">0</span></div>
                <div class="stat-label">Santri Muhajirin</div>
            </div>
            <div class="stat-card reveal delay-2">
                <div class="stat-num"><span class="counter" data-target="35">0</span><span
                        style="color:var(--green)">+</span></div>
                <div class="stat-label">Alumni</div>
            </div>
            <div class="stat-card reveal delay-3">
                <div class="stat-num"><span class="counter" data-target="15">0</span></div>
                <div class="stat-label">Hafidz 30 Juz</div>
            </div>
        </div>
    </section>

    <!-- PROFIL / ABOUT -->
    <section class="section" id="profil">
        <div class="section-inner">
            <div class="about-grid">
                <div class="about-img-wrap reveal-left">
                    <div class="about-img">
                        <img src="{{ asset('photos/40e33768-c076-4b29-8ff5-e9cdcf3a4485 2.jpg') }}"
                            alt="Santri PP Mambaus Sholihin" onerror="this.style.display='none'">
                    </div>
                    <div class="about-badge">
                        <div class="about-badge-ring"></div>
                        <div class="about-badge-inner">
                            <div class="about-badge-text" style="margin-bottom: 4px;">SEJAK</div>
                            <div class="about-badge-year" style="margin-bottom: 0;">2018</div>
                        </div>
                    </div>
                </div>
                <div class="reveal">
                    <p class="section-label">Tentang Kami</p>
                    <h2 class="section-title">Profil<br><em>Pesantren</em></h2>
                    <div class="visi-block">
                        <p>"Mencetak generasi santri penghafal Al-Quran yang alim, sholih, dan kafi"</p>
                    </div>
                    <p class="section-body" style="text-align: justify; hyphens: auto;">Pondok Pesantren Mambaus
                        Sholihin Litahfidz Al-Qur'an Malang adalah pesantren semi modern yang berfokus pada hafalan
                        Al-Qur'an dan penanaman karakter melalui kajian-kajian kitab, wirid harian, khidmah, dan sholat
                        berjamaah. Pesantren ini idirikan oleh Prof. Dr. KH. Nasrulloh, Lc., M.Th.I pada tahun 2018.</p>
                    <div class="about-features">
                        <div class="feature-tag"><span class="dot"></span>Talaqqi Al-Qur'an bilghoib bersanad
                            kepada Prof. Dr. Nasrulloh, Lc., M.Th.I</div>
                        <div class="feature-tag"><span class="dot"></span>Pengajaran kitab turots dan kajian Islam
                            kontemporer</div>
                        <div class="feature-tag"><span class="dot"></span>Pembentukan karakter melalui wirid,
                            dzikir, dan khidmah</div>
                    </div>

                    <!-- REVISI 2: TOMBOL YOUTUBE PROFIL PESANTREN DI ATAS DAFTAR SEKARANG -->
                    <div
                        style="margin-top:32px; display: flex; flex-direction: column; gap: 16px; align-items: flex-start;">
                        <a href="https://youtu.be/5T1MO9mIROs?si=6Vh9nQrrv6jXcK5R" target="_blank"
                            class="btn-profil-youtube">
                            <i class="fab fa-youtube"></i> Tonton Profil Lengkap
                        </a>
                        <a href="https://forms.gle/6f588NJ7qScJtDXp6" target="_blank" class="btn-primary">
                            Daftar Sekarang <span class="arrow"><i class="fas fa-arrow-right"></i></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- PENGASUH -->
    <section class="pengasuh-section" id="pengasuh">
        <div class="pengasuh-inner">
            <div class="reveal">
                <p class="section-label">Pengasuh Pesantren</p>
                <h2 class="section-title">Profil <em
                        style="font-family:'Playfair Display',serif;font-style:italic;">Pengasuh</em></h2>
                <h3 class="pengasuh-name-title">Prof. Dr. KH. Nasrulloh, Lc., M.Th.I</h3>
                <div class="quote-block">
                    <div class="quote-mark">"</div>
                    <p class="quote-text">Mencari ilmu adalah syarat utama untuk bisa sampai kepada Allah SWT</p>
                </div>

                <h4 class="sub-heading-pengasuh" style="margin-top: 32px; margin-bottom: 4px;">Riwayat Pendidikan</h4>
                <div class="edu-list">
                    <div class="edu-item">PP. Mambaus Sholihin, Gresik (1995–2001)</div>
                    <div class="edu-item">Dirasah Islamiyah, Mujamma' Syaikh Ahmad Kaftaru, Suriah (2001–2005)</div>
                    <div class="edu-item">Sanad Al-Qur'an 30 Juz bil Hifdzi dari Syaikh Mahir al-Munajjid</div>
                    <div class="edu-item">Magister Tafsir Hadis, UIN Sunan Ampel Surabaya (2007–2009)</div>
                    <div class="edu-item">Doktor Dirasah Islamiyah, UIN Sunan Ampel Surabaya (2010–2014)</div>
                    <div class="edu-item">Guru Besar Bidang Ilmu Hadis (2025)</div>
                </div>

                <h4 class="sub-heading-pengasuh" style="margin-top: 24px; margin-bottom: 4px;">Guru Beliau</h4>
                <div class="guru-tags">
                    <a href="https://www.google.com/search?q=Romo+KH.+Masbuhin+Faqih" target="_blank"
                        class="guru-tag">Romo KH. Masbuhin Faqih</a>
                    <a href="https://www.google.com/search?q=Syekh+Mahir+Al-Munajjid" target="_blank"
                        class="guru-tag">Syaikh Mahir Al-Munajjid</a>
                </div>
            </div>
            <div class="pengasuh-img-col reveal delay-2">
                <div class="pengasuh-img-frame" id="pengasuhSlideshow">

                    <!-- Gambar Slideshow Pengasuh -->
                    <img src="{{ asset('photos/buya-ori.jpg') }}"
                        alt="Prof. Dr. KH. Nasrulloh, Lc., M.Th.I" class="slide-img active">
                    <img src="{{ asset('photos/DSC09054.jpg') }}"
                        alt="Foto Pengasuh 2" class="slide-img">
                    <img src="{{ asset('photos/IMG_6136.JPG') }}"
                        alt="Foto Pengasuh 3" class="slide-img">

                    <div class="pengasuh-img-overlay">
                        <div class="pengasuh-name">Prof. Dr. KH. Nasrulloh, Lc., M.Th.I.</div>
                        <div class="pengasuh-title">Pengasuh & Pendiri</div>
                    </div>
                </div>

                <!-- REVISI 1: TOMBOL PROFIL UTK AKUN PENGASUH (VERSI HIJAU IKON PUTIH DARI CSS) -->
                <a href="https://youtu.be/TlAGBwM3pMc?si=EAyAxS62aHBQU3yr" target="_blank"
                    class="btn-profil-youtube">
                    <i class="fab fa-youtube"></i> Tonton Profil Lengkap
                </a>

            </div>
        </div>
    </section>

    <!-- PROGRAM -->
    <section class="section programs-section" id="program">
        <div class="section-inner">
            <div class="programs-header">
                <div class="reveal">
                    <p class="section-label">Program Kami</p>
                    <h2 class="section-title">Program<br><em>Unggulan</em></h2>
                </div>
            </div>
            <div class="programs-grid">
                <div class="prog-card reveal delay-1">
                    <div class="prog-num">01</div>
                    <div class="prog-icon"><i class="fas fa-book-open"></i></div>
                    <div class="prog-title">Tahfidz Al-Qur'an</div>
                    <div class="prog-desc">Hafalan 30 Juz secara talaqqi dengan tartil bersanad kepada Syaikh Mahir
                        al-Munajjid.</div>
                </div>
                <div class="prog-card reveal delay-2">
                    <div class="prog-num">02</div>
                    <div class="prog-icon"><i class="fas fa-book"></i></div>
                    <div class="prog-title">Kajian Kitab</div>
                    <div class="prog-desc">Pembelajaran kitab-kitab turots dan kajian Islam kontemporer yang
                        komprehensif.</div>
                </div>
                <div class="prog-card reveal delay-3">
                    <div class="prog-num">03</div>
                    <div class="prog-icon"><i class="fas fa-hands-praying"></i></div>
                    <div class="prog-title">Wirid & Dzikir</div>
                    <div class="prog-desc">Pembiasaan wirid dan amalan dzikir harian untuk menguatkan hubungan dengan
                        Allah.</div>
                </div>
                <div class="prog-card reveal delay-1">
                    <div class="prog-num">04</div>
                    <div class="prog-icon"><i class="fas fa-star-and-crescent"></i></div>
                    <div class="prog-title">Khotmil Qur'an & Maulid</div>
                    <div class="prog-desc">Khataman Al-Qur'an dan peringatan Maulid Nabi rutin setiap bulan bersama.
                    </div>
                </div>
                <div class="prog-card reveal delay-2">
                    <div class="prog-num">05</div>
                    <div class="prog-icon"><i class="fas fa-hand-holding-heart"></i></div>
                    <div class="prog-title">Sedekah & Sholat Jamaah</div>
                    <div class="prog-desc">Sedekah shubuh dan pembiasaan sholat berjamaah sebagai landasan spiritual
                        harian.</div>
                </div>
                <div class="prog-card reveal delay-3">
                    <div class="prog-num">06</div>
                    <div class="prog-icon"><i class="fas fa-users"></i></div>
                    <div class="prog-title">Khidmah</div>
                    <div class="prog-desc">Pengabdian kepada pesantren dan masyarakat sekitar sebagai wujud ilmu yang
                        bermanfaat.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY -->
    <section class="section gallery-section" id="kegiatan">
        <div class="section-inner">
            <div class="gallery-header reveal">
                <p class="section-label" style="justify-content:center">Galeri</p>
                <h2 class="section-title">Kegiatan <em>Santri</em></h2>
            </div>
        </div>
        <div class="gallery-slider" id="gallerySlider">
            <div class="gallery-item"><img
                    src="{{ asset('photos/kegiatan1.jpg') }}"
                    alt="Kegiatan 1"></div>
            <div class="gallery-item"><img
                    src="{{asset('photos/kegiatan2.jpg') }}"
                    alt="Kegiatan 2"></div>
            <div class="gallery-item"><img
                    src="{{ asset('photos/kegiatan3.jpg') }}"
                    alt="Kegiatan 3"></div>
            <div class="gallery-item"><img
                    src="{{ asset('photos/kegiatan4.jpg') }}"
                    alt="Kegiatan 4"></div>
            <div class="gallery-item"><img
                    src="{{ asset('photos/kegiatan5.jpg') }}"
                    alt="Kegiatan 5"></div>
            <div class="gallery-item"><img
                    src="{{ asset('photos/kegiatan6.jpg') }}"
                    alt="Kegiatan 6"></div>
            <div class="gallery-item"><img
                    src="{{ asset('photos/kegiatan7.JPG') }}"
                    alt="Kegiatan 7"></div>
            <div class="gallery-item"><img
                    src="{{ asset('photos/kegiatan8.jpg') }}"
                    alt="Kegiatan 8"></div>
            <div class="gallery-item"><img
                    src="{{ asset('photos/kegiatan9.jpg') }}"
                    alt="Kegiatan 9"></div>
            <div class="gallery-item"><img
                    src="{{ asset('photos/kegiatan10.JPG') }}"
                    alt="Kegiatan 10"></div>
        </div>

        <button class="btn btn-primary">lihat selengkapnya</button>
    </section>

    <!-- FASILITAS -->
    <section class="section fac-section" id="fasilitas">
        <div class="section-inner">
            <div style="text-align:center;margin-bottom:48px" class="reveal">
                <p class="section-label" style="justify-content:center">Fasilitas</p>
                <h2 class="section-title">Fasilitas untuk <em>Santri</em></h2>
            </div>
            <div class="fac-tabs reveal">
                <button class="fac-tab active" onclick="switchFacTab('komplek', this)">Komplek Pesantren</button>
                <button class="fac-tab" onclick="switchFacTab('muhajirin', this)">Komplek Muhajirin</button>
            </div>
            <div id="fac-komplek" class="fac-content active">
                <div class="fac-layout">
                    <div class="fac-img">
                        <img src="https://raw.githubusercontent.com/alfianafriansyah-commits/ppmbsmalang/main/IMG_3233.JPG"
                            alt="Komplek Pesantren" onerror="this.style.display='none'">
                    </div>
                    <div class="fac-grid">
                        <div class="fac-item"><i class="fas fa-box-archive"></i><span>Lemari Pendidikan</span></div>
                        <div class="fac-item"><i class="fas fa-kitchen-set"></i><span>Dapur Bersama</span></div>
                        <div class="fac-item"><i class="fas fa-shower"></i><span>Kamar Mandi</span></div>
                        <div class="fac-item"><i class="fas fa-wifi"></i><span>Wi-Fi 300 Mbps</span></div>
                        <div class="fac-item"><i class="fas fa-dumbbell"></i><span>Rooftop & Gym</span></div>
                        <div class="fac-item"><i class="fas fa-bowl-food"></i><span>Kantin Kejujuran</span></div>
                        <div class="fac-item"><i class="fas fa-building-columns"></i><span>Aula & Ruang Belajar</span>
                        </div>
                        <div class="fac-item"><i class="fas fa-shirt"></i><span>Jemuran & Gantungan</span></div>
                        <div class="fac-item"><i class="fas fa-kit-medical"></i><span>P3K</span></div>
                        <div class="fac-item"><i class="fas fa-shoe-prints"></i><span>Rak Sepatu & Sandal</span></div>
                        <div class="fac-item"><i class="fas fa-droplet"></i><span>Dispenser Air Panas</span></div>
                        <div class="fac-item"><i class="fas fa-utensils"></i><span>Makan 2x Sehari</span></div>
                    </div>
                </div>
            </div>
            <div id="fac-muhajirin" class="fac-content">
                <div class="fac-layout">
                    <div class="fac-img">
                        <img src="https://raw.githubusercontent.com/alfianafriansyah-commits/ppmbsmalang/main/muhajirin.jpg"
                            alt="Komplek Muhajirin" onerror="this.style.display='none'">
                    </div>
                    <div class="fac-grid">
                        <div class="fac-item"><i class="fas fa-bed"></i><span>Kasur & Lemari</span></div>
                        <div class="fac-item"><i class="fas fa-bath"></i><span>Kamar Mandi Dalam</span></div>
                        <div class="fac-item"><i class="fas fa-wifi"></i><span>Wi-Fi 50 Mbps</span></div>
                        <div class="fac-item"><i class="fas fa-square-parking"></i><span>Halaman Parkir Luas</span>
                        </div>
                        <div class="fac-item"><i class="fas fa-building-columns"></i><span>Aula & Ruang Belajar</span>
                        </div>
                        <div class="fac-item"><i class="fas fa-kitchen-set"></i><span>Kulkas & Dapur Bersama</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SANTRI SECTION -->
    <section class="section santri-section" id="santri">
        <div class="section-inner">
            <div style="text-align:center;margin-bottom:48px" class="reveal">
                <p class="section-label" style="justify-content:center">Pojok Santri</p>
                <h2 class="section-title">Layanan & <em>Buku Santri</em></h2>
            </div>
            <div class="santri-grid">
                <div class="santri-card reveal delay-1">
                    <div class="santri-icon"><i class="fas fa-book-quran"></i></div>
                    <h3>Buku Santri</h3>
                    <p>Kumpulan wirid harian dan sholawat santri dalam format PDF yang dapat dibaca dan diunduh kapan
                        saja.</p>
                    <div class="santri-btns">
                        <a href="https://drive.google.com/file/d/1z1ltiG5kAOhKqkSz3eopDspvjJyFtxTm/view?usp=sharing"
                            target="_blank" class="santri-btn santri-btn-primary"><i class="fas fa-file-pdf"></i>
                            Wirid Harian Santri</a>
                        <a href="https://drive.google.com/file/d/1f0FEHCSENWCT4SwY9MQFX8wvSsg8eCKd/view?usp=sharing"
                            target="_blank" class="santri-btn santri-btn-primary"><i class="fas fa-file-pdf"></i>
                            Buku Sholawat Santri</a>
                    </div>
                </div>
                <div class="santri-card reveal delay-2">
                    <div class="santri-icon" style="background:var(--gold-light);color:var(--gold)"><i
                            class="fas fa-hand-holding-dollar"></i></div>
                    <h3>Sedekah Shubuh</h3>
                    <p>Salurkan sedekah shubuh Anda dengan mudah untuk mendukung program dan kemaslahatan pesantren.</p>
                    <div class="santri-btns">
                        <button class="santri-btn santri-btn-gold" onclick="openQris()"><i class="fas fa-qrcode"></i>
                            Scan QRIS Pembayaran</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QRIS MODAL -->
    <div class="modal-overlay" id="qrisModal" onclick="closeQris(event)">
        <div class="modal-box">
            <button class="modal-close" onclick="closeQris(null, true)">✕</button>
            <h3>QRIS Sedekah Shubuh</h3>
            <p>Silakan scan kode QR di bawah menggunakan aplikasi M-Banking atau e-Wallet Anda.</p>
            <div class="qris-img">
                <img src="https://raw.githubusercontent.com/alfianafriansyah-commits/ppmbsmalang/main/QRIS.jpeg"
                    alt="QRIS Sedekah">
            </div>
        </div>
    </div>

    <!-- BIAYA -->
    <section class="section biaya-section" id="biaya">
        <div class="section-inner">
            <div class="biaya-header reveal">
                <p class="section-label" style="justify-content:center">Biaya</p>
                <h2 class="section-title">Syahriyah <em>Pesantren</em></h2>
            </div>
            <div class="biaya-intro reveal">
                <div class="biaya-intro-text">
                    <h4>Infaq Wajib Pendaftaran</h4>
                    <p>Dibayarkan satu kali saat pendaftaran</p>
                </div>
                <div class="biaya-price-big">Rp1.000.000 <small>/sekali</small></div>
            </div>
            <div class="biaya-grid">
                <div class="biaya-card reveal delay-1">
                    <div class="biaya-card-header">
                        <h3>Komplek Pesantren</h3>
                    </div>
                    <div class="biaya-card-body">
                        <div class="biaya-row">
                            <span class="biaya-desc">Makan 2x sehari, listrik, kemaslahatan pesantren</span>
                            <span class="biaya-price">Rp560.000/bulan</span>
                        </div>
                        <div class="biaya-row">
                            <span class="biaya-desc">Wi-Fi, air galon, kemaslahatan santri</span>
                            <span class="biaya-price">Rp60.000/bulan</span>
                        </div>
                        <div class="biaya-row">
                            <span class="biaya-desc">Parkir motor (opsional)</span>
                            <span class="biaya-price">Rp2.000/hari</span>
                        </div>
                    </div>
                </div>
                <div class="biaya-card reveal delay-2">
                    <div class="biaya-card-header">
                        <h3>Komplek Muhajirin</h3>
                    </div>
                    <div class="biaya-card-body">
                        <div class="biaya-row">
                            <span class="biaya-desc">Kamar (tidak termasuk makan)</span>
                            <span class="biaya-price">Rp560.000/bulan</span>
                        </div>
                        <div class="biaya-row">
                            <span class="biaya-desc">Wi-Fi, air, listrik, kemaslahatan pesantren</span>
                            <span class="biaya-price">Rp100.000/bulan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <div class="cta-inner reveal">
            <div class="cta-badge">Penerimaan Santri Baru</div>
            <div class="cta-title">Siap Menjadi<br><em>Hafidz Al-Qur'an?</em></div>
            <p class="cta-desc">Bergabunglah bersama kami dan wujudkan impian menjadi hafidz Al-Qur'an yang alim,
                sholih, dan kafi.</p>
            <a href="https://forms.gle/6f588NJ7qScJtDXp6" target="_blank" class="btn-gold">Daftar Sekarang →</a>
        </div>
    </section>

    <!-- KONTAK -->
    <section class="section kontak-section" id="kontak">
        <div class="section-inner">
            <div style="text-align:center;margin-bottom:48px" class="reveal">
                <p class="section-label" style="justify-content:center">Kontak</p>
                <h2 class="section-title">Hubungi <em>Kami</em></h2>
            </div>
            <div class="kontak-grid">
                <div class="kontak-cards reveal">
                    <div class="kontak-card">
                        <div class="kontak-icon"><i class="fas fa-location-dot"></i></div>
                        <div>
                            <div class="kontak-label">Alamat</div>
                            <div class="kontak-value">Jl. Tirto Praloyo, Gang Kramat No.1, Landungsari, Dau, Malang
                            </div>
                        </div>
                    </div>
                    <a href="https://wa.me/6282257508018" target="_blank" class="kontak-card">
                        <div class="kontak-icon" style="background:#e8f5e9;color:#25D366"><i
                                class="fab fa-whatsapp"></i></div>
                        <div>
                            <div class="kontak-label">WhatsApp</div>
                            <div class="kontak-value">0822-5750-8018 (Syafiq)</div>
                        </div>
                    </a>
                    <a href="https://instagram.com/ppmbsmalang" target="_blank" class="kontak-card">
                        <div class="kontak-icon" style="background:#fce4ec;color:#e91e8c"><i
                                class="fab fa-instagram"></i></div>
                        <div>
                            <div class="kontak-label">Instagram</div>
                            <div class="kontak-value">@ppmbsmalang</div>
                        </div>
                    </a>
                    <a href="https://youtube.com/@Ppmbsm" target="_blank" class="kontak-card">
                        <div class="kontak-icon" style="background:#ffebee;color:#f44336"><i
                                class="fab fa-youtube"></i></div>
                        <div>
                            <div class="kontak-label">YouTube</div>
                            <div class="kontak-value">@Ppmbsm</div>
                        </div>
                    </a>
                    <a href="https://tiktok.com/@mediambsmalang" target="_blank" class="kontak-card">
                        <div class="kontak-icon" style="background:#f3e8ff;color:#7c3aed"><i
                                class="fab fa-tiktok"></i></div>
                        <div>
                            <div class="kontak-label">TikTok</div>
                            <div class="kontak-value">@mediambsmalang</div>
                        </div>
                    </a>
                </div>
                <div class="kontak-map reveal delay-2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3951.482!2d112.58972222222222!3d-7.933027777777778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2z-7.933027777777778%2C%20112.58972222222222!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
                        allowfullscreen loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-top">
                <div>
                    <div class="footer-logo">
                        <img src="https://raw.githubusercontent.com/alfianafriansyah-commits/ppmbsmalang/main/logo-pondok-png%20(3).png"
                            alt="Logo PP Mambaus Sholihin" class="footer-logo-img">
                        <div class="footer-logo-text">PP. Mambaus Sholihin<br><span
                                style="font-size:10px;opacity:.6;font-weight:400">Litahfidz Al-Qur'an Malang</span>
                        </div>
                    </div>
                    <p class="footer-tagline">Hafidz Al-Qur'an · Alim<br>Sholih · Kafi</p>
                    <div class="footer-socials">
                        <a href="https://instagram.com/ppmbsmalang" target="_blank" class="footer-social"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://youtube.com/@Ppmbsm" target="_blank" class="footer-social"><i
                                class="fab fa-youtube"></i></a>
                        <a href="https://tiktok.com/@mediambsmalang" target="_blank" class="footer-social"><i
                                class="fab fa-tiktok"></i></a>
                        <a href="https://wa.me/6282257508018" target="_blank" class="footer-social"><i
                                class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div>
                    <p class="footer-nav-title">Navigasi</p>
                    <ul class="footer-nav-list">
                        <li><a href="#beranda">Beranda</a></li>
                        <li><a href="#profil">Profil</a></li>
                        <li><a href="#pengasuh">Pengasuh</a></li>
                        <li><a href="#program">Program</a></li>
                        <li><a href="#fasilitas">Fasilitas</a></li>
                    </ul>
                </div>
                <div>
                    <p class="footer-nav-title">Lainnya</p>
                    <ul class="footer-nav-list">
                        <li><a href="#santri">Santri</a></li>
                        <li><a href="#biaya">Biaya</a></li>
                        <li><a href="#kontak">Kontak</a></li>
                        <li><a href="https://forms.gle/6f588NJ7qScJtDXp6" target="_blank">Pendaftaran</a></li>
                    </ul>
                </div>
                <div>
                    <p class="footer-nav-title">Video Profil</p>
                    <ul class="footer-nav-list">
                        <li><a href="https://youtu.be/5T1MO9mIROs?si=6Vh9nQrrv6jXcK5R" target="_blank">▶ Profil
                                Pesantren</a></li>
                        <li><a href="https://youtu.be/TlAGBwM3pMc?si=EAyAxS62aHBQU3yr" target="_blank">▶ Profil
                                Pengasuh</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 PP. Mambaus Sholihin Litahfidz Al-Qur'an Malang. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- WA FLOAT -->
    <a href="https://wa.me/6282257508018" target="_blank" class="wa-float" id="waFloat" title="Chat WhatsApp">
        <div class="pulse"></div>
        <i class="fab fa-whatsapp"></i>
    </a>

    <script>
        // ── Navbar scroll
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 40);
            document.getElementById('waFloat').classList.toggle('show', window.scrollY > 300);
        });

        // ── Mobile nav
        const hamburger = document.getElementById('hamburger');
        const mobileNav = document.getElementById('mobileNav');
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('open');
            mobileNav.classList.toggle('open');
        });
        mobileNav.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
            hamburger.classList.remove('open');
            mobileNav.classList.remove('open');
        }));

        // ── Scrollspy
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('section[id]');
        window.addEventListener('scroll', () => {
            let cur = '';
            sections.forEach(s => {
                if (window.scrollY >= s.offsetTop - 100) cur = s.id;
            });
            navLinks.forEach(l => {
                l.classList.remove('active');
                if (l.getAttribute('href') === '#' + cur) l.classList.add('active');
            });
        }, {
            passive: true
        });

        // ── Reveal on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) e.target.classList.add('visible');
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -40px 0px'
        });
        document.querySelectorAll('.reveal, .reveal-left, .reveal-scale').forEach(el => observer.observe(el));

        // ── Counter animation
        function animateCounter(el) {
            const target = +el.dataset.target;
            const dur = 1800;
            const fps = 1000 / 60;
            const frames = Math.round(dur / fps);
            let frame = 0;
            const iv = setInterval(() => {
                frame++;
                const p = frame / frames;
                el.textContent = Math.round(target * (1 - Math.pow(1 - p, 3)));
                if (frame >= frames) {
                    clearInterval(iv);
                    el.textContent = target;
                }
            }, fps);
        }
        const counterObs = new IntersectionObserver((entries, obs) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    animateCounter(e.target);
                    obs.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.5
        });
        document.querySelectorAll('.counter, .counter-hero').forEach(el => counterObs.observe(el));

        // ── Facilities tab
        function switchFacTab(id, btn) {
            document.querySelectorAll('.fac-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.fac-content').forEach(c => c.classList.remove('active'));
            btn.classList.add('active');
            document.getElementById('fac-' + id).classList.add('active');
        }

        // ── QRIS modal
        function openQris() {
            document.getElementById('qrisModal').classList.add('open');
        }

        function closeQris(e, force) {
            if (force || e.target === document.getElementById('qrisModal'))
                document.getElementById('qrisModal').classList.remove('open');
        }
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') document.getElementById('qrisModal').classList.remove('open');
        });

        // ── Gallery slider drag & Auto Scroll Kiri (Smooth)
        const slider = document.getElementById('gallerySlider');
        let isDragging = false,
            startX = 0,
            scrollStart = 0;
        let autoScrollId;

        slider.addEventListener('mousedown', e => {
            isDragging = true;
            startX = e.pageX - slider.offsetLeft;
            scrollStart = slider.scrollLeft;
            slider.style.cursor = 'grabbing';
        });
        slider.addEventListener('mouseleave', () => {
            isDragging = false;
            slider.style.cursor = 'grab';
            startAutoScroll();
        });
        slider.addEventListener('mouseup', () => {
            isDragging = false;
            slider.style.cursor = 'grab';
            startAutoScroll();
        });
        slider.addEventListener('mousemove', e => {
            if (!isDragging) return;
            e.preventDefault();
            slider.scrollLeft = scrollStart - (e.pageX - slider.offsetLeft - startX) * 1.5;
        });

        function startAutoScroll() {
            stopAutoScroll(); // Cegah duplikasi
            autoScrollId = requestAnimationFrame(function step() {
                // Scroll ke arah kiri (scrollRight / menambah nilai scrollLeft)
                if (slider.scrollLeft >= slider.scrollWidth - slider.clientWidth - 1) {
                    slider.scrollLeft = 0; // Kembali ke awal jika mentok
                } else {
                    slider.scrollLeft += 1; // Kecepatan smooth
                }
                autoScrollId = requestAnimationFrame(step);
            });
        }

        function stopAutoScroll() {
            cancelAnimationFrame(autoScrollId);
        }

        slider.addEventListener('mouseenter', stopAutoScroll);
        slider.addEventListener('touchstart', stopAutoScroll, {
            passive: true
        });
        slider.addEventListener('touchend', startAutoScroll);

        // Mulai scroll pertama kali
        startAutoScroll();

        // ── Pengasuh Slideshow (Fade)
        const pengasuhSlides = document.querySelectorAll('#pengasuhSlideshow .slide-img');
        let currentPengasuhSlide = 0;

        if (pengasuhSlides.length > 1) {
            setInterval(() => {
                // Hilangkan class active dari gambar saat ini
                pengasuhSlides[currentPengasuhSlide].classList.remove('active');

                // Pindah ke gambar selanjutnya (kembali ke 0 jika sudah di gambar terakhir)
                currentPengasuhSlide = (currentPengasuhSlide + 1) % pengasuhSlides.length;

                // Tambahkan class active ke gambar baru
                pengasuhSlides[currentPengasuhSlide].classList.add('active');
            }, 3000); // Ganti gambar setiap 3 detik
        }
    </script>
</body>

</html>
