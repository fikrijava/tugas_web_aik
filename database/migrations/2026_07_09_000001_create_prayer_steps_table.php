<?php // Tag pembuka PHP untuk memulai script program.

use Illuminate\Database\Migrations\Migration; // Mengimpor base class Migration dari framework Laravel.
use Illuminate\Database\Schema\Blueprint; // Mengimpor Blueprint untuk mendefinisikan tipe kolom dan skema tabel.
use Illuminate\Support\Facades\Schema; // Mengimpor facade Schema untuk memanipulasi skema database.

return new class extends Migration // Membuat anonym class turunan dari class Migration sebagai representasi migrasi database.
{ // Kurung kurawal pembuka untuk class migrasi.
    /**
     * Jalankan migrasi untuk membuat tabel.
     */
    public function up(): void // Metode up yang dipanggil saat migrasi dijalankan (migrating).
    { // Kurung kurawal pembuka metode up.
        Schema::create('prayer_steps', function (Blueprint $table) { // Memanggil Schema::create untuk membuat tabel bernama 'prayer_steps'.
            $table->id(); // Membuat kolom 'id' sebagai primary key bertipe big integer auto-increment.
            $table->string('title'); // Membuat kolom 'title' dengan tipe data string (varchar) untuk judul gerakan.
            $table->string('subtitle'); // Membuat kolom 'subtitle' dengan tipe data string (varchar) untuk subjudul gerakan.
            $table->text('arabic'); // Membuat kolom 'arabic' dengan tipe data text untuk memuat tulisan Arab yang panjang.
            $table->text('transliteration'); // Membuat kolom 'transliteration' dengan tipe data text untuk memuat transliterasi Latin.
            $table->text('translation'); // Membuat kolom 'translation' dengan tipe data text untuk memuat terjemahan doa.
            $table->text('description'); // Membuat kolom 'description' dengan tipe data text untuk memuat keterangan gerakan sholat.
            $table->text('position'); // Membuat kolom 'position' dengan tipe data text untuk memuat deskripsi gerakan fisik.
            $table->string('gradient'); // Membuat kolom 'gradient' dengan tipe data string untuk menyimpan nama kelas gradient warna CSS.
            $table->string('num'); // Membuat kolom 'num' dengan tipe data string untuk menyimpan simbol urutan angka Arab.
            $table->string('source'); // Membuat kolom 'source' dengan tipe data string untuk sumber/referensi dalil gerakan.
            $table->integer('video_start'); // Membuat kolom 'video_start' dengan tipe data integer untuk menyimpan detik awal gerakan pada video.
            $table->string('audio_url')->nullable(); // Membuat kolom 'audio_url' dengan tipe data string yang boleh kosong (nullable) untuk audio Arab.
            $table->string('audio_translation_url')->nullable(); // Membuat kolom 'audio_translation_url' tipe string yang boleh kosong untuk audio terjemahan.
            $table->string('image_path'); // Membuat kolom 'image_path' dengan tipe data string untuk menyimpan nama file gambar gerakan baru.
            $table->timestamps(); // Membuat kolom otomatis 'created_at' dan 'updated_at' untuk pencatatan waktu pembuatan & pembaruan data.
        }); // Penutup definisi blueprint tabel.
    } // Kurung kurawal penutup metode up.

    /**
     * Batalkan migrasi dengan menghapus tabel.
     */
    public function down(): void // Metode down yang dipanggil saat migrasi dibatalkan (rollback).
    { // Kurung kurawal pembuka metode down.
        Schema::dropIfExists('prayer_steps'); // Menghapus tabel 'prayer_steps' dari database jika tabel tersebut ada.
    } // Kurung kurawal penutup metode down.
}; // Penutup class migrasi.
