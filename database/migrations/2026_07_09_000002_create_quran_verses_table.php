<?php // Tag pembuka PHP untuk memulai script program.

use Illuminate\Database\Migrations\Migration; // Mengimpor class utama Migration dari Laravel.
use Illuminate\Database\Schema\Blueprint; // Mengimpor Blueprint untuk mendefinisikan tipe kolom tabel database.
use Illuminate\Support\Facades\Schema; // Mengimpor facade Schema untuk memanipulasi skema tabel database.

return new class extends Migration // Membuat class migrasi anonim sebagai cetakan tabel baru di database.
{ // Kurung kurawal pembuka untuk class migrasi.
    /**
     * Jalankan migrasi.
     */
    public function up(): void // Fungsi up untuk mengeksekusi pembuatan tabel.
    { // Kurung kurawal pembuka fungsi up.
        Schema::create('quran_verses', function (Blueprint $table) { // Memanggil Schema::create untuk membuat tabel bernama quran_verses.
            $table->id(); // Membuat kolom id sebagai primary key auto-increment.
            $table->text('arabic'); // Membuat kolom arabic dengan tipe data text untuk memuat tulisan Arab ayat.
            $table->text('translation'); // Membuat kolom translation dengan tipe data text untuk memuat terjemahan ayat.
            $table->string('surah'); // Membuat kolom surah dengan tipe data string untuk menyimpan nama surat (misal: QS. Al-Baqarah).
            $table->string('ayat'); // Membuat kolom ayat dengan tipe data string untuk menyimpan nomor ayat (misal: 2:43).
            $table->timestamps(); // Membuat kolom created_at dan updated_at secara otomatis.
        }); // Penutup blueprint tabel.
    } // Kurung kurawal penutup fungsi up.

    /**
     * Batalkan migrasi.
     */
    public function down(): void // Fungsi down untuk melakukan rollback/penghapusan tabel.
    { // Kurung kurawal pembuka fungsi down.
        Schema::dropIfExists('quran_verses'); // Menghapus tabel quran_verses jika terdeteksi ada di database.
    } // Kurung kurawal penutup fungsi down.
}; // Penutup class migrasi.
