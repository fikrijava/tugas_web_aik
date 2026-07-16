<?php // Baris pembuka tag PHP untuk memulai penulisan kode PHP.

namespace App\Models; // Menentukan namespace agar file model ini berada di folder App\Models.

use Illuminate\Database\Eloquent\Factories\HasFactory; // Mengimpor trait HasFactory untuk memudahkan generate dummy data.
use Illuminate\Database\Eloquent\Model; // Mengimpor class utama Model Eloquent.

class QuranVerse extends Model // Mendefinisikan class model QuranVerse yang mewarisi fungsi dasar Model Laravel.
{ // Kurung kurawal pembuka untuk blok kelas.
    use HasFactory; // Mengaktifkan penggunaan trait HasFactory dalam model ini.

    protected $table = 'quran_verses'; // Menentukan nama tabel di database secara manual yaitu quran_verses.

    protected $fillable = [ // Mendefinisikan daftar kolom tabel yang diizinkan untuk pengisian data massal.
        'arabic', // Kolom untuk menyimpan teks ayat Al-Qur'an dalam bahasa Arab asli.
        'translation', // Kolom untuk menyimpan terjemahan ayat dalam bahasa Indonesia.
        'surah', // Kolom untuk menyimpan nama surat Al-Qur'an (misal: QS. Al-Baqarah).
        'ayat', // Kolom untuk menyimpan nomor ayat terkait (misal: 2:43).
    ]; // Penutup array fillable.
} // Kurung kurawal penutup untuk kelas model.
