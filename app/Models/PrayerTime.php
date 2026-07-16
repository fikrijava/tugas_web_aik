<?php // Baris pembuka tag PHP untuk memulai penulisan kode PHP.

namespace App\Models; // Menentukan namespace agar file model ini berada dalam direktori App\Models.

use Illuminate\Database\Eloquent\Factories\HasFactory; // Mengimpor trait HasFactory untuk memfasilitasi pembuatan data dummy.
use Illuminate\Database\Eloquent\Model; // Mengimpor kelas Model utama milik Eloquent ORM.

class PrayerTime extends Model // Membuat kelas model bernama PrayerTime yang merupakan turunan dari class Model.
{ // Kurung kurawal pembuka untuk blok kelas.
    use HasFactory; // Memuat trait HasFactory agar dapat digunakan pada model ini.

    protected $table = 'prayer_times'; // Menghubungkan model ini secara eksplisit ke tabel bernama prayer_times di database.

    protected $fillable = [ // Mendeklarasikan kolom tabel mana saja yang diperbolehkan menerima mass-assignment.
        'name', // Kolom untuk nama sholat fardhu (misal: Subuh, Dzuhur, Ashar).
        'arabic', // Kolom untuk tulisan nama sholat dalam bahasa Arab.
        'time', // Kolom penjelasan rentang waktu pelaksanaan (misal: Fajar — Sebelum Terbit Matahari).
        'rakaat', // Kolom jumlah rakaat sholat terkait (misal: 2 Rakaat, 4 Rakaat).
        'icon', // Kolom untuk karakter emoji sebagai simbol visual (misal: 🌙, ☀️).
        'color', // Kolom untuk menyimpan nama kelas gradien warna Tailwind (misal: from-indigo-800 to-blue-900).
    ]; // Penutup array kolom fillable.
} // Kurung kurawal penutup kelas model.
