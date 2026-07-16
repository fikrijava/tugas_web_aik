<?php // Baris pembuka tag PHP untuk memulai penulisan kode PHP.

namespace App\Models; // Mengatur namespace dari file model ini agar berada di folder App\Models.

use Illuminate\Database\Eloquent\Factories\HasFactory; // Mengimpor trait HasFactory untuk membuat factory data testing.
use Illuminate\Database\Eloquent\Model; // Mengimpor base class Model dari Eloquent ORM.

class Hadith extends Model // Mendefinisikan class model Hadith sebagai representasi tabel hadiths.
{ // Kurung kurawal pembuka untuk blok kelas.
    use HasFactory; // Memasang trait HasFactory di kelas model.

    protected $table = 'hadiths'; // Menentukan nama tabel terkait di database, yaitu hadiths.

    protected $fillable = [ // Mendefinisikan kolom-kolom yang dapat diisi secara aman melalui operasi massal.
        'arabic', // Kolom untuk menyimpan redaksi hadits asli dalam aksara Arab.
        'translation', // Kolom untuk menyimpan terjemahan hadits dalam bahasa Indonesia.
        'source', // Kolom untuk menyimpan kitab sumber hadits (misal: HR. Bukhari).
        'narrator', // Kolom untuk menyimpan perawi hadits (misal: Dari Umar bin Khattab RA).
        'grade', // Kolom untuk menyimpan derajat keabsahan hadits (misal: Shahih).
    ]; // Penutup array kolom fillable.
} // Kurung kurawal penutup kelas model.
