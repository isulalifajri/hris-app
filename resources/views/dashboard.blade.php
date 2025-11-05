@extends('layouts.app')

@section('content')
<div>
    <h2 class="text-2xl font-bold mb-6 text-gray-700">📊 Dashboard Utama</h2>

    {{-- Statistik Utama --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-4 rounded-lg shadow text-center">
            <h3 class="font-semibold text-gray-600 mb-1">👨‍💼 Total Karyawan</h3>
            <p class="text-3xl font-bold text-blue-600">120</p>
        </div>

        <div class="bg-white p-4 rounded-lg shadow text-center">
            <h3 class="font-semibold text-gray-600 mb-1">🕒 Hadir Hari Ini</h3>
            <p class="text-3xl font-bold text-green-600">98</p>
        </div>

        <div class="bg-white p-4 rounded-lg shadow text-center">
            <h3 class="font-semibold text-gray-600 mb-1">📅 Cuti / Izin</h3>
            <p class="text-3xl font-bold text-yellow-600">7</p>
        </div>

        <div class="bg-white p-4 rounded-lg shadow text-center">
            <h3 class="font-semibold text-gray-600 mb-1">💰 Payroll Bulan Ini</h3>
            <p class="text-3xl font-bold text-indigo-600">Rp 214.500.000</p>
        </div>
    </div>

    {{-- Ringkasan Data --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        {{-- Karyawan Baru --}}
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="font-semibold text-gray-700 mb-3">🧍 Karyawan Baru Bergabung</h3>
            <table class="min-w-full text-sm">
                <thead>
                    <tr class="border-b bg-gray-50 text-gray-600">
                        <th class="text-left py-2 px-2">Nama</th>
                        <th class="text-left py-2 px-2">Jabatan</th>
                        <th class="text-left py-2 px-2">Tanggal Masuk</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-2 px-2">Rina Kusuma</td>
                        <td>Staff HR</td>
                        <td>1 Nov 2025</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-2">Budi Santoso</td>
                        <td>Kasir</td>
                        <td>30 Okt 2025</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2">Andi Setiawan</td>
                        <td>Supervisor</td>
                        <td>28 Okt 2025</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Pengingat / Reminder --}}
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="font-semibold text-gray-700 mb-3">🔔 Pengingat Hari Ini</h3>
            <ul class="space-y-2 text-gray-600 text-sm">
                <li>⚠️ 3 Karyawan belum mengisi absensi</li>
                <li>📌 Payroll bulan ini belum dikunci</li>
                <li>🧾 2 Karyawan belum menyerahkan slip BPJS</li>
                <li>🧍 1 posisi rekrutmen masih terbuka</li>
            </ul>
        </div>
    </div>
</div>
@endsection
