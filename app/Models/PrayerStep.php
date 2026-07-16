<?php // Baris pembuka tag PHP untuk memulai penulisan kode PHP.

namespace App\Models; // Menentukan namespace dari file model ini agar berada dalam folder App\Models.

use Illuminate\Database\Eloquent\Factories\HasFactory; // Mengimpor trait HasFactory untuk mendukung pembuatan factory data dummy.
use Illuminate\Database\Eloquent\Model; // Mengimpor base class Model dari Eloquent ORM Laravel.

class PrayerStep extends Model // Mendefinisikan kelas model PrayerStep yang mewarisi sifat-sifat dasar Model Eloquent.
{ // Kurung kurawal pembuka untuk blok kelas.
    use HasFactory; // Menggunakan trait HasFactory di dalam kelas model untuk mengaktifkan fitur factory.

    protected $table = 'prayer_steps'; // Menentukan secara eksplisit nama tabel di database yang direpresentasikan oleh model ini.

    protected $fillable = [ // Mendefinisikan array properti fillable untuk menentukan kolom mana saja yang dapat diisi secara massal (mass assignment).
        'title', // Kolom untuk menyimpan judul dari setiap gerakan sholat (misal: Ruku', Sujud).
        'subtitle', // Kolom untuk menyimpan subjudul gerakan sholat (misal: Duduk Iftirasy).
        'arabic', // Kolom untuk menyimpan bacaan doa dalam huruf Arab.
        'transliteration', // Kolom untuk menyimpan ejaan bacaan Latin (transliterasi).
        'translation', // Kolom untuk menyimpan arti atau terjemahan bacaan ke bahasa Indonesia.
        'description', // Kolom untuk menyimpan keterangan atau penjelasan tata cara dan makna gerakan.
        'position', // Kolom untuk menyimpan petunjuk visual mengenai posisi dan gerakan fisik tubuh.
        'gradient', // Kolom untuk menyimpan kode kelas gradien warna CSS (khusus tema dewasa).
        'num', // Kolom untuk menyimpan nomor langkah dalam bentuk simbol angka Arab (misal: ١, ٢).
        'source', // Kolom untuk menyimpan sumber dalil shahih dari gerakan sholat (misal: HR. Bukhari).
        'video_start', // Kolom untuk menyimpan timestamp detik awal gerakan di dalam pemutar video peraga.
        'audio_url', // Kolom untuk menyimpan lokasi file audio bacaan doa Arab (jika ada).
        'audio_translation_url', // Kolom untuk menyimpan lokasi file audio terjemahan bahasa Indonesia (jika ada).
        'image_path', // Kolom untuk menyimpan nama file gambar gerakan sholat yang baru ditambahkan.
    ]; // Penutup array properti fillable.
} // Kurung kurawal penutup untuk kelas model.
