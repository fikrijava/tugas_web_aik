<!DOCTYPE html> {{-- Mendeklarasikan tipe dokumen sebagai HTML5. --}}
<html lang="id"> {{-- Menentukan bahasa utama dokumen yaitu Bahasa Indonesia. --}}
<head> {{-- Awal tag head untuk konfigurasi metadata halaman. --}}
    <meta charset="utf-8"> {{-- Menentukan enkoding karakter halaman menggunakan UTF-8. --}}
    <meta name="viewport" content="width=device-width, initial-scale=1"> {{-- Mengatur viewport agar halaman bersifat responsif di berbagai ukuran perangkat. --}}
    
    {{-- Tag Title Dinamis, mengambil dari parameter view atau default ke judul umum. --}}
    <title>@yield('title', 'Tuntunan Sholat Muhammadiyah - Media Pembelajaran Digital AIK')</title> {{-- Placeholder judul halaman. --}}
    
    {{-- Memuat aset CSS dan JS melalui compiler Vite Laravel. --}}
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Menyertakan file CSS utama dan file JS utama proyek. --}}
</head> {{-- Penutup tag head. --}}
<body class="bg-background text-foreground transition-colors duration-500 bg-islamic-pattern min-h-screen flex flex-col"> {{-- Tag body dengan kelas transisi warna, latar pola Islam, tinggi penuh, dan tata letak flexbox. --}}

    <!-- ── NAVIGATION BAR UTAMA ── -->
    <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 bg-background/95 backdrop-blur-xl border-b border-border shadow-sm"> {{-- Navigasi melayang di atas (fixed), memiliki filter blur, garis batas bawah, dan bayangan tipis. --}}
        <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between"> {{-- Kontainer tengah navigasi dengan tinggi 16 (64px) dan spasi rata kiri-kanan. --}}
            
            {{-- Logo / Link Beranda utama --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2 text-foreground hover:text-accent transition-colors decoration-none"> {{-- Elemen link dekorasi mati, berubah warna saat hover. --}}
                <span class="text-2xl">🕌</span> {{-- Emoji Masjid sebagai logo ikonik. --}}
                <span class="font-black text-lg font-cinzel tracking-wider uppercase"> {{-- Judul dengan font Cinzel tebal dan huruf kapital. --}}
                    Tuntunan Sholat
                </span> {{-- Penutup teks judul. --}}
            </a> {{-- Penutup link logo. --}}

            <!-- Navigasi Desktop -->
            <div class="hidden md:flex items-center gap-2"> {{-- Navigasi menu desktop, tersembunyi di mobile (hidden) dan tampil flex di layar sedang ke atas (md). --}}
                
                {{-- Link Beranda --}}
                <a href="{{ route('home') }}" id="nav-btn-home" class="px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200 decoration-none hover:bg-secondary"> {{-- Tombol navigasi home. --}}
                    Beranda
                </a> {{-- Penutup link. --}}
                
                {{-- Tombol Mode Dewasa --}}
                <button id="nav-btn-dewasa" onclick="setNavbarMode('dewasa')" class="px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200 hover:bg-secondary cursor-pointer"> {{-- Tombol pengubah ke Mode Dewasa. --}}
                    🕌 Mode Dewasa
                </button> {{-- Penutup tombol. --}}
                
                {{-- Tombol Mode Anak-anak --}}
                <button id="nav-btn-kids" onclick="setNavbarMode('kids')" class="px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200 hover:bg-secondary cursor-pointer"> {{-- Tombol pengubah ke Mode Anak-anak. --}}
                    ⭐ Mode Anak-Anak
                </button> {{-- Penutup tombol. --}}
            </div> {{-- Penutup navigasi desktop. --}}

            <!-- Theme Toggle & Hamburger Mobile -->
            <div class="flex items-center gap-2"> {{-- Bagian tombol aksi kanan. --}}
                
                {{-- Tombol toggle gelap/terang --}}
                <button onclick="toggleTheme()" class="w-10 h-10 rounded-xl border border-border bg-secondary flex items-center justify-center hover:border-accent transition-all hover:scale-105 cursor-pointer" aria-label="Toggle Tema"> {{-- Tombol tema dengan efek membesar tipis saat hover. --}}
                    <span id="theme-icon-sun" class="hidden">☀️</span> {{-- Ikon matahari (muncul jika mode gelap aktif). --}}
                    <span id="theme-icon-moon">🌙</span> {{-- Ikon bulan (muncul jika mode terang aktif). --}}
                </button> {{-- Penutup tombol tema. --}}
                
                {{-- Tombol menu hamburger mobile --}}
                <button onclick="toggleMobileMenu()" class="md:hidden w-10 h-10 rounded-xl border border-border bg-secondary flex items-center justify-center cursor-pointer" aria-label="Toggle Menu"> {{-- Hanya tampil di mobile. --}}
                    ☰ {{-- Simbol menu hamburger. --}}
                </button> {{-- Penutup tombol hamburger. --}}
            </div> {{-- Penutup tombol aksi kanan. --}}
        </div> {{-- Penutup kontainer tengah navigasi. --}}

        <!-- Menu Drawer Mobile -->
        <div id="mobile-menu" class="hidden md:hidden bg-background/98 backdrop-blur-xl border-b border-border px-4 pb-4 transition-all duration-300"> {{-- Menu mobile dropdown. --}}
            <a href="{{ route('home') }}" class="block w-full text-left px-4 py-3 rounded-xl text-sm font-semibold mb-1 hover:bg-secondary decoration-none text-foreground">🏠 Beranda</a> {{-- Link home mobile. --}}
            <button onclick="setNavbarMode('dewasa'); toggleMobileMenu();" class="w-full text-left px-4 py-3 rounded-xl text-sm font-semibold mb-1 hover:bg-secondary cursor-pointer text-foreground block bg-transparent border-0">🕌 Mode Dewasa</button> {{-- Tombol dewasa mobile. --}}
            <button onclick="setNavbarMode('kids'); toggleMobileMenu();" class="w-full text-left px-4 py-3 rounded-xl text-sm font-semibold mb-1 hover:bg-secondary cursor-pointer text-foreground block bg-transparent border-0">⭐ Mode Anak-anak</button> {{-- Tombol anak mobile. --}}
        </div> {{-- Penutup menu drawer mobile. --}}
    </nav> {{-- Penutup navigasi utama. --}}

    <!-- Main Content Wrapper -->
    <main class="pt-20 flex-grow"> {{-- Tag main dengan padding atas 20 (80px) agar konten tidak tertutup navbar melayang, serta flex-grow untuk mengisi tinggi sisa. --}}
        @yield('content') {{-- Bagian dinamis tempat konten halaman spesifik dimasukkan. --}}
    </main> {{-- Penutup main content wrapper. --}}

    <!-- Footer Global -->
    <footer class="relative overflow-hidden bg-card border-t border-border pt-12 pb-8 px-4 mt-16"> {{-- Footer dengan garis pembatas atas, warna kartu, dan padding yang cukup. --}}
        <div class="max-w-5xl mx-auto text-center space-y-6"> {{-- Kontainer konten footer dengan spasi vertikal antar elemen. --}}
            <p class="text-3xl text-accent font-amiri" dir="rtl">وَأَقِيمُوا الصَّلَاةَ</p> {{-- Kalimat potongan ayat Arab (Dan laksanakanlah sholat). --}}
            <p class="text-muted-foreground text-sm font-sans"> {{-- Terjemahan ayat. --}}
                Dan laksanakanlah sholat — QS. Al-Baqarah: 43 {{-- Sumber kutipan. --}}
            </p> {{-- Penutup terjemahan. --}}
            <div class="flex justify-center gap-6 text-sm text-muted-foreground font-semibold"> {{-- Navigasi tautan footer. --}}
                <a href="{{ route('home') }}" class="hover:text-accent transition-colors decoration-none">Beranda</a> {{-- Link ke beranda. --}}
                <button onclick="setNavbarMode('dewasa')" class="hover:text-accent transition-colors bg-transparent border-0 cursor-pointer font-semibold text-muted-foreground">Mode Dewasa</button> {{-- Aksi mode dewasa. --}}
                <button onclick="setNavbarMode('kids')" class="hover:text-accent transition-colors bg-transparent border-0 cursor-pointer font-semibold text-muted-foreground">Mode Anak-anak</button> {{-- Aksi mode anak. --}}
            </div> {{-- Penutup navigasi footer. --}}
            <div class="border-t border-border pt-6 flex flex-col sm:flex-row justify-between items-center text-xs text-muted-foreground/60 gap-4"> {{-- Catatan kaki bawah. --}}
                <p>Panduan Tata Cara Sholat — Berdasarkan Al-Quran & Hadits Shahih HPT Muhammadiyah</p> {{-- Hak cipta / klaim konten. --}}
                <p>Dibuat untuk kebaikan umat ♥</p> {{-- Pesan pembuat. --}}
            </div> {{-- Penutup catatan kaki. --}}
        </div> {{-- Penutup kontainer konten footer. --}}
    </footer> {{-- Penutup footer global. --}}

    <!-- ── JAVASCRIPT GLOBAL LOGIC ── -->
    <script> {{-- Blok penulisan Javascript internal global. --}}
        // Inisialisasi State Awal Halaman
        let activeTheme = localStorage.getItem('theme') || 'dark'; // Mengambil tema gelap/terang tersimpan dari localStorage atau default ke 'dark'.
        let currentMode = '{{ $mode ?? '' }}' || localStorage.getItem('prayer_mode') || 'dewasa'; // Menggunakan mode dari server (PHP) jika tersedia, atau mengambil preferensi dari localStorage.

        // Fungsi menerapkan kelas tema terang/gelap pada dokumen root HTML
        function applyTheme() { // Deklarasi fungsi applyTheme.
            const root = document.documentElement; // Mendapatkan elemen root <html>.
            const sunIcon = document.getElementById('theme-icon-sun'); // Mendapatkan elemen ikon matahari.
            const moonIcon = document.getElementById('theme-icon-moon'); // Mendapatkan elemen ikon bulan.
            
            if (activeTheme === 'dark') { // Jika tema yang aktif adalah 'dark'.
                root.classList.add('dark'); // Menambahkan kelas 'dark' ke elemen <html>.
                if (sunIcon) sunIcon.classList.remove('hidden'); // Menampilkan ikon matahari jika ada.
                if (moonIcon) moonIcon.classList.add('hidden'); // Menyembunyikan ikon bulan jika ada.
            } else { // Jika tema yang aktif adalah 'light'.
                root.classList.remove('dark'); // Menghapus kelas 'dark' dari elemen <html>.
                if (sunIcon) sunIcon.classList.add('hidden'); // Menyembunyikan ikon matahari jika ada.
                if (moonIcon) moonIcon.classList.remove('hidden'); // Menampilkan ikon bulan jika ada.
            } // Penutup blok percabangan tema.
            localStorage.setItem('theme', activeTheme); // Menyimpan state tema terbaru ke localStorage.
        } // Penutup fungsi applyTheme.

        // Fungsi toggle pergantian tema
        function toggleTheme() { // Deklarasi fungsi toggleTheme.
            activeTheme = activeTheme === 'dark' ? 'light' : 'dark'; // Mengubah tema ke sebaliknya (gelap ke terang atau terang ke gelap).
            applyTheme(); // Menerapkan tema yang baru saja diubah.
        } // Penutup fungsi toggleTheme.

        // Fungsi toggle menu hamburger di tampilan layar seluler (mobile)
        function toggleMobileMenu() { // Deklarasi fungsi toggleMobileMenu.
            const menu = document.getElementById('mobile-menu'); // Mendapatkan kontainer menu mobile.
            if (menu) { // Memastikan elemen menu mobile ditemukan.
                menu.classList.toggle('hidden'); // Mengaktifkan/menonaktifkan kelas 'hidden' untuk menyembunyikan/menampilkan menu.
            } // Penutup blok pengecekan menu.
        } // Penutup fungsi toggleMobileMenu.

        // Fungsi merespon pemilihan mode belajar dari navbar desktop maupun mobile
        function setNavbarMode(mode) { // Deklarasi fungsi setNavbarMode dengan parameter mode.
            currentMode = mode; // Mengubah state mode belajar aktif secara global di halaman.
            localStorage.setItem('prayer_mode', mode); // Menyimpan preferensi mode belajar ke localStorage.

            // Memeriksa jika pengguna saat ini sedang berada di halaman Beranda (mengidentifikasi lewat keberadaan elemen homepage)
            const isHomePage = document.getElementById('page-home-flag') !== null; // Bernilai true jika elemen flag home page ada.

            if (isHomePage) { // Jika berada di halaman Beranda.
                // Panggil fungsi lokal pada halaman home untuk memperbarui tema styling di tempat tanpa berpindah halaman
                if (typeof updatePageThemeInPlace === 'function') { // Memeriksa jika fungsi updatePageThemeInPlace dideklarasikan di home.blade.php.
                    updatePageThemeInPlace(mode); // Menjalankan fungsi tersebut untuk merombak warna dan struktur secara instan.
                } // Penutup blok pengecekan fungsi.
            } else { // Jika pengguna sedang berada di halaman panduan sholat (/tata-cara-sholat).
                // Alihkan halaman secara langsung dengan parameter query mode yang baru agar controller merender halaman mode yang sesuai
                window.location.href = `{{ route('guide') }}?mode=${mode}`; // Redirect ke halaman panduan dengan mode terintegrasi.
            } // Penutup blok percabangan lokasi halaman.
        } // Penutup fungsi setNavbarMode.

        // Fungsi memperbarui highlight tombol navigasi aktif
        function updateNavbarActiveStyles() { // Deklarasi fungsi updateNavbarActiveStyles.
            const homeBtn = document.getElementById('nav-btn-home'); // Mendapatkan tombol beranda.
            const dewasaBtn = document.getElementById('nav-btn-dewasa'); // Mendapatkan tombol mode dewasa.
            const kidsBtn = document.getElementById('nav-btn-kids'); // Mendapatkan tombol mode anak-anak.
            
            // Mereset class style seluruh tombol ke bentuk pasif
            const passiveClass = "px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200 text-muted-foreground hover:text-foreground hover:bg-secondary decoration-none"; // String class pasif.
            if (homeBtn) homeBtn.className = passiveClass; // Menerapkan ke tombol home.
            if (dewasaBtn) dewasaBtn.className = passiveClass + " cursor-pointer bg-transparent border-0"; // Menerapkan ke tombol dewasa.
            if (kidsBtn) kidsBtn.className = passiveClass + " cursor-pointer bg-transparent border-0"; // Menerapkan ke tombol anak-anak.

            const isHomePage = document.getElementById('page-home-flag') !== null; // Memeriksa apakah berada di beranda.
            
            if (isHomePage) { // Jika di beranda.
                if (homeBtn) { // Memastikan tombol home ada.
                    // Beri warna latar belakang utama aktif (primary) pada tombol Beranda
                    homeBtn.className = "px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200 bg-primary text-primary-foreground shadow-md shadow-primary/20 decoration-none"; // String class aktif beranda.
                } // Penutup cek tombol.
                
                // Menyoroti tombol mode aktif di navbar
                if (currentMode === 'dewasa' && dewasaBtn) { // Jika mode dewasa.
                    dewasaBtn.className = "px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200 bg-secondary text-foreground cursor-pointer border-0"; // Sorotan ringan.
                } else if (currentMode === 'kids' && kidsBtn) { // Jika mode anak.
                    kidsBtn.className = "px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200 bg-orange-100 text-orange-600 dark:bg-orange-950/40 dark:text-orange-400 cursor-pointer border-0"; // Sorotan oranye.
                } // Penutup pengecekan sorot mode.
            } else { // Jika sedang berada di halaman tata cara sholat.
                if (currentMode === 'dewasa' && dewasaBtn) { // Jika panduan mode dewasa aktif.
                    dewasaBtn.className = "px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200 bg-primary text-primary-foreground shadow-md shadow-primary/20 cursor-pointer border-0"; // Kelas tombol aktif utama.
                } else if (currentMode === 'kids' && kidsBtn) { // Jika panduan mode anak-anak aktif.
                    kidsBtn.className = "px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-200 bg-orange-500 text-white shadow-md shadow-orange-500/20 cursor-pointer border-0"; // Kelas tombol aktif oranye.
                } // Penutup pengecekan mode.
            } // Penutup blok pengecekan lokasi.
        } // Penutup fungsi updateNavbarActiveStyles.

        // Menjalankan fungsi penataan tema saat halaman dimuat pertama kali
        window.addEventListener('DOMContentLoaded', () => { // Event listener saat DOM selesai dirender.
            applyTheme(); // Menerapkan tema gelap/terang.
            updateNavbarActiveStyles(); // Memperbarui style active navbar.
            
            // Sinkronkan tema body kelas mode anak jika halaman dimuat dengan mode kids aktif
            if (currentMode === 'kids') { // Jika preferensi mode sholat adalah anak-anak.
                document.body.classList.add('theme-kids'); // Menambahkan kelas theme-kids ke tag body.
            } // Penutup cek.
        }); // Penutup event listener.
    </script> {{-- Penutup tag script. --}}

    <!-- ── FLOTASI NAVIGASI POJOK KANAN BAWAH (FLOATING ACTIONS) ── -->
    <div class="fixed bottom-6 right-6 z-50 flex flex-col gap-3 items-end"> {{-- Kontainer melayang di kanan bawah --}}
        
        {{-- Slot widget floating tambahan khusus halaman panduan (seperti drawer pemilih langkah) --}}
        @yield('floating_widgets') {{-- Menyediakan slot yields untuk diisi view anak --}}

        {{-- Tombol Kembali Ke Atas (Back To Top) --}}
        <button id="btn-back-to-top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" class="w-12 h-12 rounded-full bg-primary text-primary-foreground shadow-2xl flex items-center justify-center cursor-pointer hover:scale-110 hover:rotate-12 transition-all border-0 text-lg" aria-label="Kembali ke atas"> {{-- Tombol bundar --}}
            ⬆️ {{-- Ikon panah atas --}}
        </button> {{-- Penutup tombol --}}
        
    </div> {{-- Penutup kontainer fixed --}}

</body> {{-- Penutup tag body. --}}
</html> {{-- Penutup tag html. --}}
