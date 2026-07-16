<?php // Baris pembuka tag PHP untuk memulai penulisan kode PHP.

namespace App\Models; // Menetapkan namespace dari file model ini agar berada di folder App\Models.

use Illuminate\Database\Eloquent\Factories\HasFactory; // Mengimpor trait HasFactory untuk membantu seeding testing.
use Illuminate\Database\Eloquent\Model; // Mengimpor class Model utama dari Eloquent ORM.

class SyaratSah extends Model // Mendefinisikan class model SyaratSah untuk merepresentasikan tabel syarat_sahs.
{ // Kurung kurawal pembuka untuk blok kelas.
    use HasFactory; // Memasang trait HasFactory di kelas model ini.

    protected $table = 'syarat_sahs'; // Menentukan nama tabel terkait secara manual, yaitu syarat_sahs.

    protected $fillable = [ // Mendefinisikan kolom database yang diizinkan untuk diisi menggunakan mass-assignment.
        'title', // Kolom untuk judul persyaratan sah sholat (misal: Islam, Menutup Aurat).
        'description', // Kolom untuk teks penjelasan singkat dari setiap persyaratan sah.
        'icon', // Kolom untuk emoji atau kode ikon representatif (misal: ☪️, 💧).
    ]; // Penutup array kolom fillable.
} // Kurung kurawal penutup kelas model.
