<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Data Pendaftaran</h1>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div
                    class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
                    <table class="w-full text-sm text-left rtl:text-right text-body">
                        <thead class="bg-neutral-secondary-soft border-b border-default">
                            <tr>
                                <th scope="col" class="px-6 py-3 font-medium text-center">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium text-center">
                                    Nama Lengkap
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium text-center">
                                    NIK
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium text-center">
                                    Pendidikan
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium text-center">
                                    No WatsApp
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium text-center">
                                    Alamat
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium text-center">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pendaftaran as $index => $daftar)
                                <tr
                                    class="odd:bg-neutral-primary even:bg-neutral-secondary-soft border-b border-default">
                                    <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                        {{ $index + 1 }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                        {{ $daftar->nama_lengkap }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $daftar->NIK }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $daftar->pendidikan }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $daftar->no_wa }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $daftar->alamat }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-center gap-2">
                                            <a href="{{ route('pendaftaran.show', $daftar->id) }}"
                                                class="inline-flex items-center px-3 py-1.5 bg-sky-50 text-sky-700 border border-sky-200 rounded-md hover:bg-sky-100 transition shadow-sm text-xs font-bold uppercase">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                    </path>
                                                </svg>
                                                Detail
                                            </a>

                                            <a href=""
                                                class="inline-flex items-center px-3 py-1.5 bg-amber-50 text-amber-700 border border-amber-200 rounded-md hover:bg-amber-100 transition shadow-sm text-xs font-bold uppercase">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                    </path>
                                                </svg>
                                                Edit
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                            @endforelse


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>




</x-app-layout>
