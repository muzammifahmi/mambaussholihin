<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Data Pendaftaran</h1>
            </div>
        </div>
    </x-slot>

    <div class="py-12 bg-slate-50 min-h-screen">


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm border border-slate-800 rounded-lg overflow-hidden">
                <div class="bg-slate-50 px-6 py-4 border-b border-slate-200 flex gap-2">
                    <h3 class="text-lg font-semibold text-slate-800">Informasi Kelas</h3>
                </div>
                <div class="p-8">
                    <h3 class="text-lg font-semibold text-green-700 border-b border-green-200 pb-2 mb-4">A. Data Santri
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                        {{-- kolom 1 --}}
                        <div class="space-y-4">

                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">Email</dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->email }}
                                </dd>
                            </div>

                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Lengkap</dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->nama_lengkap }}
                                </dd>
                            </div>

                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">NIK</dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->NIK }}
                                </dd>
                            </div>


                        </div>

                        <div class="space-y-4">
                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">NISN</dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->nisn }}
                                </dd>
                            </div>
                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">Tempat, Tanggal
                                    Lahir</dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->tempat_lahir }},
                                    {{ \Carbon\Carbon::parse($pendaftaran->tanggal_lahir)->format('d/m/Y') }}
                                </dd>
                            </div>

                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">Pendidikan
                                    Terakhir</dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->pendidikan }}
                                </dd>
                            </div>

                            </div>







                            <div class="space-y-4">
                                <div>
                                    <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">No WhatsApp
                                    </dt>
                                    <dd class="mt-1 text-sm text-slate-900">
                                        {{ $pendaftaran->no_wa }}
                                    </dd>
                                </div>
                                <div>
                                    <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">Alamat</dt>
                                    <dd class="mt-1 text-sm text-slate-900">
                                        {{ $pendaftaran->alamat }}
                                    </dd>
                                </div>


                                <div>
                                    <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">Tanggal Masuk
                                    </dt>
                                    <dd class="mt-1 text-sm text-slate-900">
                                        {{ \Carbon\Carbon::parse($pendaftaran->tanggal_masuk)->format('d/m/Y') }}
                                    </dd>
                                </div>
                            </div>

                    </div>

                    <h3 class="text-lg font-semibold text-green-700 border-b border-green-200 pb-2 mb-4 mt-4">B. Data
                        Orang Tua
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                        {{-- data ayah --}}
                        <div class="space-y-4">

                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Ayah</dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->nama_ayah }}
                                </dd>
                            </div>

                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">NIK</dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->no_nik_ayah }}
                                </dd>
                            </div>

                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">Tempat, Tanggal Lahir</dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->tempat_lahir_ayah }},
                                    {{ \Carbon\Carbon::parse($pendaftaran->tanggal_lahir_ayah)->format('d/m/Y') }}                                </dd>
                            </div>

                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">Pendidikan</dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->pendidikan_ayah }}
                                </dd>
                            </div>

                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">Pekerjaan</dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->pekerjaan_ayah }}
                                </dd>
                            </div>
                        </div>
{{-- kolom ibu --}}
                        <div class="space-y-4">

                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">Nama Ibu</dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->nama_ibu }}
                                </dd>
                            </div>

                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">NIK</dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->no_nik_ibu }}
                                </dd>
                            </div>

                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">Tempat, Tanggal Lahir</dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->tempat_lahir_ibu }},
                                    {{ \Carbon\Carbon::parse($pendaftaran->tanggal_lahir_ibu)->format('d/m/Y') }}                                </dd>
                            </div>

                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">Pendidikan</dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->pendidikan_ibu }}
                                </dd>
                            </div>

                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">Pekerjaan</dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->pekerjaan_ibu }}
                                </dd>
                            </div>
                        </div>

                        <div class="space-y-4">


                            <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">No Kartu Keluarga
                                </dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->no_kk ?? '-' }}
                                </dd>
                            </div>
                                                        <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">Pendapatan Orang Tua
                                </dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->pendapatan_ortu }}
                                </dd>
                            </div>
                                                        <div>
                                <dt class="text-xs font-bold text-slate-400 uppercase tracking-widest">No WhatsApp Orang Tua
                                </dt>
                                <dd class="mt-1 text-sm text-slate-900">
                                    {{ $pendaftaran->no_wa_ortu }}
                                </dd>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>


    </div>
</x-app-layout>
