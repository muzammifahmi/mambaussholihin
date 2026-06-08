<x-guest-layout>
    <X-slot class="header">
        <h2 class="font-semibold bg-white shadow text-xl text-gray-800 leading-tight rounded-lg px-4 py-2">
            {{ __('Pendaftaran Santri Baru') }}
        </h2>
    </X-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Form Pendaftaran Santri Baru') }}
                </div>
                <!-- Tombol Tab -->
                <div class="flex border-b px-6">
                    <button
                        class="tab-btn active mr-4 py-2 px-4 text-green-600 border-b-2 border-green-600 font-semibold"
                        onclick="switchContent('persyaratan', this)">
                        Persyaratan
                    </button>
                    <button class="tab-btn mr-4 py-2 px-4 text-gray-600 hover:text-green-600"
                        onclick="switchContent('pendaftaran', this)">
                        Formulir Pendaftaran
                    </button>
                </div>

                <!-- Konten Persyaratan -->
                <div id="persyaratan" class="tab-content p-6 ">
                    <h3 class="font-semibold text-lg text-gray-800 leading-tight rounded-lg px-4 py-2 text-center">
                        {{ __('Biaya Bulanan') }}
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        {{-- Komplek Pesantren --}}
                        <div
                            class="w-full max-w-xl p-6 bg-neutral-primary-soft border border-default rounded-base shadow-xs m-2">
                            <h5 class="mb-4 text-xl font-medium text-body">Komplek Pesantren</h5>
                            <table class="w-full">
                                <thead>
                                    <tr>
                                        <th class="border px-4 py-2">Deskripsi</th>
                                        <th class="border px-4 py-2">Biaya</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border px-4 py-2">Makan 2x sehari, listrik, kemaslahatan pesantrn
                                        </td>
                                        <td class="border px-4 py-2">Rp 560.000/bulan</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Wi-Fi, air galon, kemaslahatan santri</td>
                                        <td class="border px-4 py-2">Rp 60.000/bulan</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Parkir Motor (Opsional)</td>
                                        <td class="border px-4 py-2">Rp 2.000/hari</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Infaq Wajib <button
                                                data-tooltip-target="tooltip-pesantren"
                                                class="text-blue-500 hover:text-blue-700">ⓘ</button></td>
                                        <div id="tooltip-pesantren" role="tooltip"
                                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-black bg-white border-b rounded-lg shadow-sm opacity-0 tooltip">
                                            Hanya membayar sekali diawal
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <td class="border px-4 py-2">Rp 1.000.000</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h5 class="mb-2 text-xl font-medium text-body mt-4">Fasilitas</h5>

                            <ul role="list" class="space-y-4 my-6">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">Lemari Pendidikan</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">Kamar Mandi</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">Wi-Fi 300 Mbps</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">Rooftop & Gym</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">Kantin Kejujuran</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">Aula & Ruang Belajar</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">Jemuran & Gantungan</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">P3K</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">Rak Sepatu & Sandal</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">Dispenser Air Panas</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">Makan 2x Sehari</span>
                                </li>

                            </ul>
                        </div>
                        {{-- Komplek Muhajirin --}}
                        <div
                            class="w-full max-w-xl p-6 bg-neutral-primary-soft border border-default rounded-base shadow-xs m-2">
                            <h5 class="mb-4 text-xl font-medium text-body">Komplek Muhajirin</h5>
                            <table class="w-full">
                                <thead>
                                    <tr>
                                        <th class="border px-4 py-2">Deskripsi</th>
                                        <th class="border px-4 py-2">Biaya</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border px-4 py-2">Kamar (tidak termasuk makan)
                                        </td>
                                        <td class="border px-4 py-2">Rp 560.000/bulan</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Wi-Fi, air, listrik, kemaslahatan pesantren</td>
                                        <td class="border px-4 py-2">Rp 100.000/bulan</td>
                                    </tr>
                                    <tr>
                                        <td class="border px-4 py-2">Infaq Wajib <button
                                                data-tooltip-target="tooltip-muhajirin"
                                                class="text-blue-500 hover:text-blue-700">ⓘ</button></td>
                                        <div id="tooltip-muhajirin" role="tooltip"
                                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-black bg-white border-b rounded-lg shadow-sm opacity-0 tooltip">
                                            Hanya membayar sekali diawal
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                        <td class="border px-4 py-2">Rp 1.000.000</td>

                                    </tr>
                                </tbody>
                            </table>

                            <h5 class="mb-2 text-xl font-medium text-body my-4">Fasilitas</h5>

                            <ul role="list" class="space-y-4 my-6">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">Kasur & Lemari</span>
                                </li>
                            </ul>
                            <ul role="list" class="space-y-4 my-6">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">Kamar Mandi Dalam</span>
                                </li>
                            </ul>
                            <ul role="list" class="space-y-4 my-6">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">Wi-Fi 50 Mbps</span>
                                </li>
                            </ul>
                            <ul role="list" class="space-y-4 my-6">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">Halaman Parkir Luas</span>
                                </li>
                            </ul>
                            <ul role="list" class="space-y-4 my-6">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">Aula & Ruang Belajar</span>
                                </li>
                            </ul>
                            <ul role="list" class="space-y-4 my-6">
                                <li class="flex items-center">
                                    <svg class="w-5 h-5 shrink-0 text-fg-brand me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="text-body">Kulkas & Dapur Bersama</span>
                                </li>
                            </ul>

                        </div>

                    </div>

                </div>







                <!-- Konten Formulir Pendaftaran -->
                <div id="pendaftaran" class="tab-content p-6 hidden">
                    <h3 class="font-semibold text-lg text-gray-800 leading-tight rounded-lg px-4 py-2 text-center">
                        {{ __('Formulir Pendaftaran') }}
                    </h3>


                    <form action="{{ route('pendaftaran.store') }}" method="POST" class="mt-4 space-y-4">
                        @csrf
                        <h2 class="">A. Data Santri</h2>
                        <div class="border border-b-green-500"></div>
                        {{-- Pengisian data santri --}}
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" placeholder="Masukkan Alamat Email" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap"
                                    placeholder="Masukkan Nama Lengkap sesuai KTP/KK" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">NIK</label>
                                <input type="text" name="NIK" placeholder="Masukkan NIK" required
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16);"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">NISN</label>
                                <input type="text" name="nisn" placeholder="Masukkan NISN" required
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                            </div>
                            <div>
                                <div class="flex items-center gap-2">
                                    <label class="block text-sm font-medium text-gray-700">Pendidikan</label>
                                    <div class="relative inline-block group">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4 text-gray-400 cursor-help hover:text-green-600 transition-colors"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>

                                        <!-- Tooltip Content -->
                                        <div
                                            class="absolute left-full ml-2 top-1/2 -translate-y-1/2 w-96 bg-gray-900 text-white text-xs rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 pointer-events-none">
                                            <div class="p-4">
                                                <div class="space-y-3">
                                                    <div>
                                                        <p class="font-semibold text-green-300 mb-2">Tuliskan
                                                            jenjang pendidikan anda pada saat masuk pesantren, contoh
                                                        </p>
                                                        <div class="bg-gray-800 rounded-md p-2 space-y-1">
                                                            <p class="text-gray-300">• IPA / MAN 1 Kota Malang</p>
                                                            <p class="text-gray-300">• S1 - Kimia / Universitas
                                                                Brawijaya</p>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <p class="font-semibold text-green-300 mb-2">Bagi yang murni
                                                            pendidikan di PPMBSM saja tulis jenjang pendidikan terakhir, contoh</p>

                                                        <div class="bg-gray-800 rounded-md p-2 space-y-1">
                                                            <p class="text-gray-300">• KMI - Pondok Modern Darussalam
                                                                Gontor Ponorogo</p>
                                                            <p class="text-gray-300">• Aliyah - Pondok Pesantren
                                                                Sidogiri Pasuruan</p>
                                                            <p class="text-gray-300">• Aliyah - Pondok Pesantren
                                                                Mambaus Sholihin Gresik</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Arrow -->
                                            <div
                                                class="absolute right-full top-1/2 -translate-y-1/2 border-4 border-transparent border-r-gray-900">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="pendidikan" placeholder="Contoh: SMA / MAN 1 Kota Malang"
                                    required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">No WhatsApp</label>
                                <input type="number" name="no_wa" placeholder="Masukkan No WhatsApp" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                            </div>


                            <div>
                                <div class="flex items-center gap-2">
                                    <label class="block text-sm font-medium text-gray-700">Tanggal Masuk</label>
                                    <div class="relative inline-block" data-tooltip-target="tooltip-tanggal-masuk">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4 text-gray-400 cursor-help" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div id="tooltip-tanggal-masuk" role="tooltip"
                                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                                        Bila lupa kapan masuknya, bisa dikira-kira saja
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>
                                <input type="date" name="tanggal_masuk" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                            </div>

                            <div class="md:col-span-3">
                                <label class="block text-sm font-medium text-gray-700">Alamat</label>
                                <textarea name="alamat" rows="3" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500"></textarea>
                            </div>





                        </div>




                        <h2 class="">B. Data Orang Tua/Wali</h2>
                        <div class="border border-b-green-500"></div>
                        {{-- Pengisian data wali santri / wali --}}
                        <div class="grid grid-col-1 md:grid-cols-3 gap-4">
                            <div class="md:col-span-3">
                                <label class="block text-sm font-medium text-gray-700">No Kartu Keluarga</label>
                                <input type="text" name="no_kk" required
                                    placeholder="Masukkan No Kartu Keluarga"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16);"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500">
                            </div>
                            {{-- Data Ayah --}}
                            <div class="md:col-span-3">
                                <h1>a) Data Ayah</h1>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Nama Ayah</label>
                                <input type="text" name="nama_ayah" required placeholder="Masukkan Nama Ayah"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="">No NIK
                                    Ayah</label>
                                <input type="text" name="no_nik_ayah" required placeholder="Masukkan No NIK Ayah"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16);"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="">Tempat
                                    Lahir</label>
                                <input type="text" name="tempat_lahir_ayah" required
                                    placeholder="Masukkan Tempat Lahir"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="">Tanggal
                                    Lahir</label>
                                <input type="date" name="tanggal_lahir_ayah" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700"
                                    for="">Pendidikan</label>
                                <select name="pendidikan_ayah" id="pendidikan_ayah"
                                    class="my-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500">\
                                    <option value="">Pilih Pekerjaan</option>
                                    <option value="SD/MI/Sederajat"
                                        {{ old('pendidikan_ayah') == 'SD/MI/Sederajat' ? 'selected' : '' }}>
                                        SD/MI/Sederajat</option>
                                    <option value="SMP/MTS/Sederajat"
                                        {{ old('pendidikan_ayah') == 'SMP/MTS/Sederajat' ? 'selected' : '' }}>
                                        SMP/MTS/Sederajat</option>
                                    <option value="SMA/SMK/MA/KMI/Sederajat"
                                        {{ old('pendidikan_ayah') == 'SMA/SMK/MA/KMI/Sederajat' ? 'selected' : '' }}>
                                        SMA/SMK/MA/KMI/Sederajat</option>
                                    <option value="Diploma/S1"
                                        {{ old('pendidikan_ayah') == 'Diploma/S1' ? 'selected' : '' }}>Diploma/S1
                                    </option>
                                    <option value="S2" {{ old('pendidikan_ayah') == 'S2' ? 'selected' : '' }}>S2
                                    </option>
                                    <option value="S3" {{ old('pendidikan_ayah') == 'S3' ? 'selected' : '' }}>S3
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="">Pekerjaan
                                    Ayah</label>
                                <input type="text" name="pekerjaan_ayah" id="" required
                                    placeholder="Masukkan Pekerjaan"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500">
                            </div>

                            {{-- Data Ibu --}}
                            <div class="md:col-span-3">
                                <h1>b) Data Ibu</h1>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Nama Ibu</label>
                                <input type="text" name="nama_ibu" required placeholder="Masukkan Nama Ibu"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="">No NIK
                                    Ibu</label>
                                <input type="text" name="no_nik_ibu" required placeholder="Masukkan No NIK Ibu"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16);"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="">Tempat
                                    Lahir</label>
                                <input type="text" name="tempat_lahir_ibu" required
                                    placeholder="Masukkan Tempat Lahir"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="">Tanggal
                                    Lahir</label>
                                <input type="date" name="tanggal_lahir_ibu" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700"
                                    for="">Pendidikan</label>
                                <select name="pendidikan_ibu" id="pendidikan_ibu"
                                    class="my-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500">\
                                    <option value="">Pilih Pekerjaan</option>
                                    <option value="SD/MI/Sederajat"
                                        {{ old('pendidikan_ibu') == 'SD/MI/Sederajat' ? 'selected' : '' }}>
                                        SD/MI/Sederajat</option>
                                    <option value="SMP/MTS/Sederajat"
                                        {{ old('pendidikan_ibu') == 'SMP/MTS/Sederajat' ? 'selected' : '' }}>
                                        SMP/MTS/Sederajat</option>
                                    <option value="SMA/SMK/MA/KMI/Sederajat"
                                        {{ old('pendidikan_ibu') == 'SMA/SMK/MA/KMI/Sederajat' ? 'selected' : '' }}>
                                        SMA/SMK/MA/KMI/Sederajat</option>
                                    <option value="Diploma/S1"
                                        {{ old('pendidikan_ibu') == 'Diploma/S1' ? 'selected' : '' }}>Diploma/S1
                                    </option>
                                    <option value="S2" {{ old('pendidikan_ibu') == 'S2' ? 'selected' : '' }}>S2
                                    </option>
                                    <option value="S3" {{ old('pendidikan_ibu') == 'S3' ? 'selected' : '' }}>S3
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="">Pekerjaan
                                    Ibu</label>
                                <input type="text" name="pekerjaan_ibu" id="" required
                                    placeholder="Masukkan Pekerjaan"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="">Pendapatan Orang
                                    Tua Perbulan</label>
                                <select name="pendapatan_ortu" id=""
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500">
                                    <option value="Rp. 500.000 - Rp.1.000.000">Rp. 500.000 - Rp.1.000.000</option>
                                    <option value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000
                                    </option>
                                    <option value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000
                                    </option>
                                    <option value="Rp. 3.000.000 - Rp. 4.000.000">Rp. 3.000.000 - Rp. 4.000.000
                                    </option>
                                    <option value="> Rp. 5.000.000">> Rp. 5.000.000</option>
                                </select>
                            </div>
                            <div>
                                <label
                                    class="block text-sm font-medium border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500"
                                    for="">No WatsApp</label>
                                <input type="number" name="no_wa_ortu" id=""
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500">
                            </div>

                            <div class="flex justify-end">
                                <button type="submit"
                                    class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg">
                                    Kirim Pendaftaran
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    </div>
    </div>
    </div>

</x-guest-layout>

<script>
    function switchContent(contentId, button) {
        // Sembunyikan semua konten
        document.getElementById('persyaratan').classList.add('hidden');
        document.getElementById('pendaftaran').classList.add('hidden');

        // Tampilkan konten yang dipilih
        document.getElementById(contentId).classList.remove('hidden');

        // Update style tombol
        const buttons = document.querySelectorAll('.tab-btn');
        buttons.forEach(btn => {
            btn.classList.remove('active', 'text-green-600', 'border-b-2', 'border-green-600', 'font-semibold');
            btn.classList.add('text-gray-600');
        });

        button.classList.remove('text-gray-600');
        button.classList.add('active', 'text-green-600', 'border-b-2', 'border-green-600', 'font-semibold');
    }

    // Pastikan persyaratan tampil pertama kali
    document.addEventListener('DOMContentLoaded', function() {
        // Sembunyikan pendaftaran, tampilkan persyaratan
        document.getElementById('pendaftaran').classList.add('hidden');
        document.getElementById('persyaratan').classList.remove('hidden');
    });
</script>
