<?php // Tag pembuka PHP untuk menandai mulainya baris kode program PHP.

namespace App\Http\Controllers; // Menentukan namespace agar file controller ini berada dalam folder App\Http\Controllers.

use Illuminate\Http\Request; // Mengimpor class Request untuk menangani parameter inputan HTTP.
use App\Models\PrayerStep; // Mengimpor model PrayerStep untuk berinteraksi dengan tabel prayer_steps.
use App\Models\QuranVerse; // Mengimpor model QuranVerse untuk berinteraksi dengan tabel quran_verses.
use App\Models\Hadith; // Mengimpor model Hadith untuk berinteraksi dengan tabel hadiths.
use App\Models\PrayerTime; // Mengimpor model PrayerTime untuk berinteraksi dengan tabel prayer_times.
use App\Models\SyaratSah; // Mengimpor model SyaratSah untuk berinteraksi dengan tabel syarat_sahs.

class HomeController extends Controller // Mendefinisikan class HomeController yang merupakan turunan dari Controller.
{ // Kurung kurawal pembuka class controller.
    /**
     * Menampilkan halaman utama (Beranda) website.
     */
    public function index() // Membuat fungsi index untuk memuat halaman utama.
    { // Kurung kurawal pembuka fungsi index.
        $quranVerses = QuranVerse::all(); // Mengambil seluruh data ayat Quran dari database menggunakan model QuranVerse.
        $hadiths = Hadith::all(); // Mengambil seluruh data hadits keutamaan sholat dari database menggunakan model Hadith.
        $prayerTimes = PrayerTime::all(); // Mengambil seluruh data jadwal & rakaat sholat dari database menggunakan model PrayerTime.
        $syarat = SyaratSah::all(); // Mengambil seluruh data syarat sah sholat dari database menggunakan model SyaratSah.

        return view('pages.home', compact('quranVerses', 'hadiths', 'prayerTimes', 'syarat')); // Mengembalikan view halaman home dan meneruskan variabel-variabel data di atas.
    } // Kurung kurawal penutup fungsi index.

    /**
     * Menampilkan halaman panduan tata cara sholat berdasarkan mode terpilih.
     */
    public function guide(Request $request) // Membuat fungsi guide untuk memuat halaman tata cara sholat dengan dependency injection Request.
    { // Kurung kurawal pembuka fungsi guide.
        $mode = $request->query('mode', 'dewasa'); // Mengambil query parameter 'mode' dari URL, dengan default nilai 'dewasa' jika tidak diisi.
        
        if (!in_array($mode, ['dewasa', 'kids'])) { // Memeriksa jika parameter mode yang dimasukkan bukan 'dewasa' maupun 'kids'.
            $mode = 'dewasa'; // Mengembalikan paksa nilai mode ke 'dewasa' demi keamanan dan kevalidan rute.
        } // Penutup blok pengecekan mode.

        $steps = PrayerStep::orderBy('id', 'asc')->get(); // Mengambil seluruh langkah sholat dari database diurutkan terkecil ke terbesar berdasarkan id.

        return view("pages.guide.{$mode}", compact('steps', 'mode')); // Merender view dinamis: pages/guide/dewasa atau pages/guide/kids sesuai isi variabel mode, serta meneruskan data steps.
    } // Kurung kurawal penutup fungsi guide.

    /**
     * Mengalirkan file video peraga gerakan sholat dengan dukungan HTTP Range (206 Partial Content) untuk skippable playback.
     */
    public function streamVideo() // Membuat fungsi streamVideo untuk menangani streaming video.
    { // Kurung kurawal pembuka fungsi streamVideo.
        $path = public_path('tata cara sholat sesuai panduan muhammadiyah.mp4'); // Mendapatkan path file video asli di folder public secara dinamis.
        
        if (!file_exists($path)) { // Mengecek jika file video tidak ditemukan di server.
            abort(404, 'File video tidak ditemukan.'); // Mengembalikan status response HTTP 404 jika file absen.
        } // Penutup blok pengecekan file.

        return response()->file($path, [ // Mengirimkan file langsung melalui Symfony BinaryFileResponse.
            'Content-Type' => 'video/mp4', // Menetapkan HTTP header Content-Type sebagai video mp4 agar browser tahu format berkas.
            'Accept-Ranges' => 'bytes', // Menetapkan HTTP header Accept-Ranges sebagai bytes agar browser diizinkan melakukan pemotongan bytes (range requests).
        ]); // Penutup response file.
    } // Kurung kurawal penutup fungsi streamVideo.
} // Kurung kurawal penutup class controller.
