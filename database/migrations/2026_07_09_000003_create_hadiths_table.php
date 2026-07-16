<?php // Tag pembuka PHP untuk memulai program.

use Illuminate\Database\Migrations\Migration; // Mengimpor class Migration dari framework Laravel.
use Illuminate\Database\Schema\Blueprint; // Mengimpor Blueprint untuk mendefinisikan kolom tabel database.
use Illuminate\Support\Facades\Schema; // Mengimpor facade Schema untuk memodifikasi database.

return new class extends Migration // Membuat anonym class untuk migrasi pembuatan tabel baru.
{ // Kurung kurawal pembuka class migrasi.
    /**
     * Jalankan migrasi.
     */
    public function up(): void // Metode up untuk membuat tabel.
    { // Kurung kurawal pembuka metode up.
        Schema::create('hadiths', function (Blueprint $table) { // Memanggil Schema::create untuk membuat tabel bernama hadiths.
            $table->id(); // Membuat kolom id primary key auto-increment.
            $table->text('arabic'); // Membuat kolom arabic dengan tipe data text untuk memuat redaksi Arab hadits.
            $table->text('translation'); // Membuat kolom translation dengan tipe data text untuk memuat arti/terjemahan hadits.
            $table->string('source'); // Membuat kolom source dengan tipe data string untuk menyimpan nama kitab perawi (misal: HR. Muslim).
            $table->string('narrator'); // Membuat kolom narrator dengan tipe data string untuk penyampai hadits (misal: Dari Abu Hurairah RA).
            $table->string('grade'); // Membuat kolom grade dengan tipe data string untuk tingkatan hadits (misal: Shahih).
            $table->timestamps(); // Membuat kolom timestamp otomatis created_at dan updated_at.
        }); // Penutup definisi blueprint tabel.
    } // Kurung kurawal penutup metode up.

    /**
     * Batalkan migrasi.
     */
    public function down(): void // Metode down untuk membatalkan proses migrasi.
    { // Kurung kurawal pembuka metode down.
        Schema::dropIfExists('hadiths'); // Menghapus tabel hadiths dari database apabila terdeteksi ada.
    } // Kurung kurawal penutup metode down.
}; // Penutup class migrasi.
