    <nav class="navbar" id="navbar">
        <div class="nav-inner">
            @if (request()->routeIs('formulir'))
                <div class="nav-logo">
                    <img src="{{ asset('photos/logo-pondok-png (3).png') }}" alt="Logo PP Mambaus Sholihin"
                        class="nav-logo-img">
                    <div class="logo-text">
                        <span class="logo-title">PP. Mambaus Sholihin</span>
                        <span class="logo-sub">Litahfidz Al-Qur'an Malang</span>
                    </div>
                    <div class="h-10 w-px bg-blue-500"></div>
                    <div class="with-20">
                        <span class="logo-title">Pendaftaran Santri</span>
                    </div>

                </div>
            @else
                <a href="#" class="nav-logo">
                    <img src="{{ asset('photos/logo-pondok-png (3).png') }}" alt="Logo PP Mambaus Sholihin"
                        class="nav-logo-img">
                    <div class="logo-text">
                        <span class="logo-title">PP. Mambaus Sholihin</span>
                        <span class="logo-sub">Litahfidz Al-Qur'an Malang</span>
                    </div>
                </a>
            @endif

            @if (request()->routeIs('formulir', 'login', 'register', 'password.request'))
                <a href="{{ route('home') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Kembali
                </a>
            @else
                <ul class="nav-links">
                    <li><a href="#beranda" class="nav-link">Beranda</a></li>
                    <li><a href="#profil" class="nav-link">Profil</a></li>
                    <li><a href="#pengasuh" class="nav-link">Pengasuh</a></li>
                    <li><a href="#program" class="nav-link">Program</a></li>
                    <li><a href="#fasilitas" class="nav-link">Fasilitas</a></li>
                    <li><a href="#santri" class="nav-link">Santri</a></li>
                    <li><a href="#biaya" class="nav-link">Biaya</a></li>
                    <li><a href="#kontak" class="nav-link">Kontak</a></li>
                </ul>
                <a href="{{ route('formulir') }}" target="_blank" class="nav-cta">Daftar Sekarang →</a>
                <div class="hamburger" id="hamburger">
                    <span></span><span></span><span></span>
                </div>
        </div>
        <div class="mobile-nav" id="mobileNav">
            <a href="#beranda">Beranda</a>
            <a href="#profil">Profil</a>
            <a href="#pengasuh">Pengasuh</a>
            <a href="#program">Program</a>
            <a href="#fasilitas">Fasilitas</a>
            <a href="#santri">Santri</a>
            <a href="#biaya">Biaya</a>
            <a href="#kontak">Kontak</a>
            <a href="{{ route('formulir') }}" target="_blank" class="nav-cta">Daftar Sekarang →</a>
        </div>
        @endif

    </nav>
