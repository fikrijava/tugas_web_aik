<?php // Tag pembuka PHP untuk menuliskan kode PHP.

use Illuminate\Database\Migrations\Migration; // Mengimpor class Migration dari framework Laravel.
use Illuminate\Database\Schema\Blueprint; // Mengimpor Blueprint untuk konfigurasi skema kolom database.
use Illuminate\Support\Facades\Schema; // Mengimpor facade Schema untuk memanipulasi database.

return new class extends Migration // Membuat anonymous class turunan dari class Migration untuk mendefinisikan tabel.
{ // Kurung kurawal pembuka class migrasi.
    /**
     * Jalankan migrasi.
     */
    public function up(): void // Metode up untuk membuat tabel syarat_sahs.
    { // Kurung kurawal pembuka metode up.
        Schema::create('syarat_sahs', function (Blueprint $table) { // Memanggil Schema::create untuk membuat tabel syarat_sahs.
            $table->id(); // Membuat kolom id sebagai primary key bertipe big integer auto-increment.
            $table->string('title'); // Membuat kolom title bertipe string untuk menyimpan judul syarat sah sholat.
            $table->text('description'); // Membuat kolom description bertipe text untuk penjelasan detail syarat sah sholat.
            $table->string('icon'); // Membuat kolom icon bertipe string untuk menyimpan emoji simbol visual syarat sah sholat.
            $table->timestamps(); // Membuat kolom created_at dan updated_at secara otomatis.
        }); // Penutup blueprint tabel.
    } // Kurung kurawal penutup metode up.

    /**
     * Batalkan migrasi.
     */
    public function down(): void // Metode down untuk melakukan rollback dan menghapus tabel.
    { // Kurung kurawal pembuka metode down.
        Schema::dropIfExists('syarat_sahs'); // Menghapus tabel syarat_sahs dari database jika tabel tersebut ada.
    } // Kurung kurawal penutup metode down.
}; // Penutup class migrasi.
