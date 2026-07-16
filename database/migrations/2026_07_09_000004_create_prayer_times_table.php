<?php // Tag pembuka PHP untuk memulai program.

use Illuminate\Database\Migrations\Migration; // Mengimpor class utama Migration dari Laravel.
use Illuminate\Database\Schema\Blueprint; // Mengimpor Blueprint untuk konfigurasi kolom tabel.
use Illuminate\Support\Facades\Schema; // Mengimpor facade Schema untuk eksekusi perintah database.

return new class extends Migration // Membuat anonymous class turunan Migration untuk migrasi tabel prayer_times.
{ // Kurung kurawal pembuka class migrasi.
    /**
     * Jalankan migrasi.
     */
    public function up(): void // Metode up untuk mengeksekusi migrasi (membuat tabel).
    { // Kurung kurawal pembuka metode up.
        Schema::create('prayer_times', function (Blueprint $table) { // Membuat tabel baru dengan nama 'prayer_times'.
            $table->id(); // Membuat kolom id primary key auto-increment.
            $table->string('name'); // Membuat kolom name bertipe string untuk nama sholat fardhu.
            $table->string('arabic'); // Membuat kolom arabic bertipe string untuk lafal Arab nama sholat.
            $table->string('time'); // Membuat kolom time bertipe string untuk deskripsi rentang waktu sholat.
            $table->string('rakaat'); // Membuat kolom rakaat bertipe string untuk jumlah rakaat sholat.
            $table->string('icon'); // Membuat kolom icon bertipe string untuk menyimpan emoji simbol sholat.
            $table->string('color'); // Membuat kolom color bertipe string untuk menyimpan gradien Tailwind CSS.
            $table->timestamps(); // Membuat kolom created_at dan updated_at secara otomatis.
        }); // Penutup blueprint tabel.
    } // Kurung kurawal penutup metode up.

    /**
     * Batalkan migrasi.
     */
    public function down(): void // Metode down untuk membatalkan proses migrasi (menghapus tabel).
    { // Kurung kurawal pembuka metode down.
        Schema::dropIfExists('prayer_times'); // Menghapus tabel 'prayer_times' dari database jika tabel tersebut ada.
    } // Kurung kurawal penutup metode down.
}; // Penutup class migrasi.
