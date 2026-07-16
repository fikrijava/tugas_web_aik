@extends('layouts.app') {{-- Mewarisi kerangka layout master layouts/app.blade.php --}}

@section('title', 'Beranda - Tuntunan Sholat Muhammadiyah') {{-- Mengisi bagian title tab browser --}}

@section('content') {{-- Membuka bagian utama untuk menaruh konten halaman beranda --}}
<div id="page-home-flag" class="hidden"></div> {{-- Penanda (flag) berupa elemen tersembunyi agar file layout tahu ini adalah halaman Beranda --}}

<div class="max-w-6xl mx-auto px-4 py-8"> {{-- Kontainer pembungkus utama beranda dengan batas lebar maksimal 6xl dan padding atas-bawah --}}
    
    <!-- ======================================================== -->
    <!-- ── HERO SECTION: PENJELASAN WEBSITE & CARA KERJA ── -->
    <!-- ======================================================== -->
    <section id="hero-banner" class="relative rounded-3xl bg-gradient-to-br from-primary via-indigo-900 to-purple-950 text-white p-8 md:p-16 overflow-hidden mb-12 shadow-2xl transition-all duration-500"> {{-- Banner hero dengan gradien warna biru-indigo-ungu gelap --}}
        
        <!-- Floating Stars Decor -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden" id="stars-container"></div> {{-- Latar belakang dekorasi bintang-bintang bersinar melayang --}}

        <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center"> {{-- Layout grid 12 kolom untuk menata teks dan gambar masjid --}}
            
            <div class="lg:col-span-8 space-y-6"> {{-- Area konten teks hero (mengambil 8 kolom di layar besar) --}}
                <span class="inline-block px-3 py-1 bg-white/20 rounded-full text-xs font-bold tracking-widest uppercase">Media Belajar AIK</span> {{-- Badge kategori kecil --}}
                
                {{-- Judul Hero Utama --}}
                <h1 class="text-4xl md:text-5xl font-extrabold font-cinzel leading-tight animate-float">
                    Panduan Tata Cara Sholat Digital
                </h1> {{-- Penutup Judul --}}
                
                {{-- Pengenalan Aplikasi (Penjelasan tentang website ini) --}}
                <p id="hero-introduction" class="text-white/80 text-base leading-relaxed font-sans max-w-2xl">
                    Selamat datang di platform pembelajaran ibadah sholat interaktif. Website ini dirancang khusus untuk mempermudah umat Islam, baik dewasa maupun anak-anak, dalam mempelajari gerakan dan bacaan sholat yang shahih berdasarkan Tuntunan Himpunan Putusan Tarjih (HPT) Muhammadiyah. Melalui integrasi visual, audio pelafalan, dan video peraga, belajar sholat kini menjadi lebih mudah, menyenangkan, dan terstruktur.
                </p> {{-- Penutup paragraf penjelasan --}}

                <!-- CARA KERJA WEBSITE (How it works section) -->
                <div class="pt-4 border-t border-white/20 space-y-4"> {{-- Pembungkus cara kerja dengan garis batas atas tipis --}}
                    <h3 class="text-lg font-bold font-cinzel text-amber-300">Cara Kerja Website :</h3> {{-- Subtitle cara kerja --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-white/90"> {{-- Grid 2 kolom cara kerja untuk tampilan kompak --}}
                        <div class="flex gap-3"> {{-- Langkah ke-1 --}}
                            <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center font-bold text-amber-300 flex-shrink-0">1</div> {{-- Lingkaran angka --}}
                            <div> {{-- Penjelasan langkah --}}
                                <h4 class="font-bold">Pilih Mode Belajar</h4> {{-- Judul langkah --}}
                                <p class="text-white/70 text-xs">Pilih mode tampilan di bawah ini (Dewasa atau Anak-anak) untuk menyesuaikan nuansa visual website secara instan.</p> {{-- Deskripsi --}}
                            </div> {{-- Penutup langkah --}}
                        </div> {{-- Penutup langkah ke-1 --}}
                        
                        <div class="flex gap-3"> {{-- Langkah ke-2 --}}
                            <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center font-bold text-amber-300 flex-shrink-0">2</div> {{-- Lingkaran angka --}}
                            <div> {{-- Penjelasan langkah --}}
                                <h4 class="font-bold">Pelajari Dasar Sholat</h4> {{-- Judul langkah --}}
                                <p class="text-white/70 text-xs">Pahami dalil Al-Qur'an, syarat-syarat sah, waktu pelaksanaan sholat fardhu, serta hadits-hadits keutamaan ibadah.</p> {{-- Deskripsi --}}
                            </div> {{-- Penutup langkah --}}
                        </div> {{-- Penutup langkah ke-2 --}}

                        <div class="flex gap-3"> {{-- Langkah ke-3 --}}
                            <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center font-bold text-amber-300 flex-shrink-0">3</div> {{-- Lingkaran angka --}}
                            <div> {{-- Penjelasan --}}
                                <h4 class="font-bold">Masuk ke Panduan Sholat</h4> {{-- Judul langkah --}}
                                <p class="text-white/70 text-xs">Scroll ke bawah dan klik tombol mulai panduan sholat. Tampilan halaman panduan akan disesuaikan dengan mode belajar aktif.</p> {{-- Deskripsi --}}
                            </div> {{-- Penutup langkah --}}
                        </div> {{-- Penutup langkah ke-3 --}}

                        <div class="flex gap-3"> {{-- Langkah ke-4 --}}
                            <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center font-bold text-amber-300 flex-shrink-0">4</div> {{-- Lingkaran angka --}}
                            <div> {{-- Penjelasan --}}
                                <h4 class="font-bold">Sinkronisasi Video & Audio</h4> {{-- Judul langkah --}}
                                <p class="text-white/70 text-xs">Langkah sholat otomatis berganti mengikuti menit video peraga yang diputar, dilengkapi suara panduan audio bacaan doa.</p> {{-- Deskripsi --}}
                            </div> {{-- Penutup langkah --}}
                        </div> {{-- Penutup langkah ke-4 --}}
                    </div> {{-- Penutup grid cara kerja --}}
                </div> {{-- Penutup pembungkus cara kerja --}}
            </div> {{-- Penutup area konten teks hero --}}

            <!-- Siluet Masjid Ilustrasi 3D -->
            <div class="lg:col-span-4 hidden lg:flex justify-center select-none"> {{-- Area gambar ilustrasi masjid di kanan (hanya muncul di layar besar) --}}
                <svg viewBox="0 0 400 220" class="w-full h-auto text-amber-400 drop-shadow-3xl" fill="currentColor"> {{-- SVG masjid dengan bayangan oranye terang --}}
                    <rect x="0" y="160" width="400" height="60" opacity="0.3" rx="2" /> {{-- Dasar fondasi bawah --}}
                    <rect x="20" y="120" width="60" height="100" rx="4" /> {{-- Pilar masjid kiri --}}
                    <ellipse cx="50" cy="120" rx="30" ry="20" /> {{-- Kubah pilar kiri --}}
                    <rect x="35" y="80" width="30" height="45" rx="15" /> {{-- Menara pilar kiri tingkat 1 --}}
                    <rect x="43" y="50" width="14" height="35" rx="7" /> {{-- Menara pilar kiri tingkat 2 --}}
                    <ellipse cx="50" cy="38" rx="5" ry="5" /> {{-- Ujung puncak menara kiri --}}
                    <rect x="320" y="120" width="60" height="100" rx="4" /> {{-- Pilar masjid kanan --}}
                    <ellipse cx="350" cy="120" rx="30" ry="20" /> {{-- Kubah pilar kanan --}}
                    <rect x="335" y="80" width="30" height="45" rx="15" /> {{-- Menara pilar kanan tingkat 1 --}}
                    <rect x="343" y="50" width="14" height="35" rx="7" /> {{-- Menara pilar kanan tingkat 2 --}}
                    <ellipse cx="350" cy="38" rx="5" ry="5" /> {{-- Ujung menara kanan --}}
                    <rect x="90" y="100" width="220" height="120" rx="6" /> {{-- Dinding utama kubah tengah --}}
                    <ellipse cx="200" cy="100" rx="110" ry="50" /> {{-- Kubah besar tengah bagian bawah --}}
                    <rect x="160" y="30" width="80" height="75" rx="40" /> {{-- Kubah besar tengah utama --}}
                    <rect x="178" y="5" width="44" height="30" rx="22" /> {{-- Puncak kubah tengah --}}
                    <ellipse cx="200" cy="0" rx="8" ry="8" /> {{-- Simbol bulan sabit di puncak kubah --}}
                </svg> {{-- Penutup SVG --}}
            </div> {{-- Penutup area gambar --}}
        </div> {{-- Penutup layout grid hero --}}
    </section> {{-- Penutup section hero --}}

    <!-- ======================================================== -->
    <!-- ── SELEKSI MODE BELAJAR INTERAKTIF (IN-PLACE SWITCH) ── -->
    <!-- ======================================================== -->
    <section class="mb-16"> {{-- Section pembungkus kartu pemilihan mode belajar --}}
        <div class="text-center mb-10"> {{-- Header bagian judul seksi --}}
            <h2 id="mode-section-title" class="text-3xl font-bold font-cinzel transition-all">Pilih Mode Belajar</h2> {{-- Judul seksi --}}
            <p id="mode-section-desc" class="text-muted-foreground mt-2">Pilih mode di bawah untuk merombak tema dan animasi website secara instan</p> {{-- Sub-deskripsi --}}
        </div> {{-- Penutup header --}}
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8"> {{-- Grid 2 kolom kartu pilihan mode (Dewasa vs Anak) --}}
            
            <!-- Kartu Mode Dewasa -->
            <div id="card-mode-dewasa" onclick="setPageMode('dewasa')" class="tilt-card-dewasa cursor-pointer relative group overflow-hidden rounded-3xl border p-8 shadow-xl hover:shadow-2xl transition-all duration-300 bg-card border-border"> {{-- Kartu 3D mode dewasa, klik akan memicu fungsi setPageMode --}}
                <div class="gloss-overlay"></div> {{-- Lapisan kilauan kaca (gloss) saat disorot hover --}}
                <div class="absolute top-0 right-0 w-32 h-32 bg-primary/10 rounded-bl-full flex items-center justify-end p-6"> {{-- Dekorasi lengkungan di sudut kanan atas kartu --}}
                    <span class="text-4xl group-hover:scale-110 transition-transform">🕌</span> {{-- Emoji masjid yang membesar saat hover --}}
                </div> {{-- Penutup dekorasi --}}
                <h3 class="text-2xl font-bold font-cinzel text-foreground group-hover:text-primary transition-colors">Mode Dewasa</h3> {{-- Judul kartu --}}
                <p class="text-muted-foreground mt-4 leading-relaxed font-sans max-w-sm">
                    Panduan formal dan serius dengan palet warna indigo/emerald yang elegan, teks bacaan Arab lengkap, dalil rujukan shahih HPT, video peraga, serta visualisasi 3D yang modern, rapi, dan profesional.
                </p> {{-- Deskripsi isi mode dewasa --}}
                <div class="mt-6 inline-flex items-center gap-2 text-primary font-bold text-sm"> {{-- Indikator tombol aksi visual --}}
                    Aktifkan Tema Dewasa ➔
                </div> {{-- Penutup tombol aksi --}}
            </div> {{-- Penutup kartu mode dewasa --}}

            <!-- Kartu Mode Anak-Anak -->
            <div id="card-mode-kids" onclick="setPageMode('kids')" class="tilt-card-anak cursor-pointer relative group overflow-hidden rounded-3xl border p-8 shadow-xl hover:shadow-2xl transition-all duration-300 bg-card border-border"> {{-- Kartu 3D mode anak-anak, dengan border terpisah --}}
                <div class="absolute top-0 right-0 w-32 h-32 bg-orange-500/10 rounded-bl-full flex items-center justify-end p-6"> {{-- Dekorasi sudut kanan atas --}}
                    <span class="text-4xl group-hover:scale-110 transition-transform">⭐</span> {{-- Emoji bintang kuning yang membesar saat hover --}}
                </div> {{-- Penutup dekorasi --}}
                <h3 class="text-2xl font-bold font-cinzel text-foreground group-hover:text-orange-500 transition-colors">Mode Anak-Anak</h3> {{-- Judul kartu --}}
                <p class="text-muted-foreground mt-4 leading-relaxed font-sans max-w-sm">
                    Tampilan ceria dan bersahabat dengan warna-warni jingga hangat, ilustrasi visual yang cerah, penjelasan gerakan yang disederhanakan, dan efek animasi bouncy (membal) yang interaktif untuk menarik minat belajar anak-anak.
                </p> {{-- Deskripsi isi mode anak --}}
                <div class="mt-6 inline-flex items-center gap-2 text-orange-500 font-bold text-sm"> {{-- Indikator aksi visual anak --}}
                    Ayo Coba Tema Ceria! ➔
                </div> {{-- Penutup indikator aksi --}}
            </div> {{-- Penutup kartu mode anak-anak --}}
        </div> {{-- Penutup grid kartu pilihan mode --}}
    </section> {{-- Penutup section pilihan mode --}}

    <!-- ======================================================== -->
    <!-- ── SLIDER AYAT AL-QUR'AN (DILAYOUT KHUSUS) ── -->
    <!-- ======================================================== -->
    <section class="mb-16 transition-all duration-500"> {{-- Section slider ayat Quran --}}
        <div id="quran-panel-card" class="bg-card border border-border rounded-3xl p-8 shadow-xl relative overflow-hidden transition-all duration-500"> {{-- Kontainer card ayat Quran --}}
            <div id="quran-badge" class="text-xs font-semibold uppercase tracking-widest text-accent mb-4 font-cinzel">Firman Allah ﷻ</div> {{-- Label panel firman --}}
            <div id="quran-slide-container" class="min-h-[140px] flex flex-col justify-between"> {{-- Kontainer flex vertikal untuk ayat, arti, dan rujukan --}}
                <p id="quran-arabic" class="text-2xl md:text-3xl leading-loose text-right font-amiri mb-4" dir="rtl"></p> {{-- Teks Arab ayat Quran yang diisi lewat Javascript --}}
                <p id="quran-translation" class="text-base italic text-muted-foreground leading-relaxed"></p> {{-- Terjemahan ayat Quran --}}
                <div class="mt-4 flex items-center gap-2"> {{-- Bagian info rujukan surat dan ayat --}}
                    <span id="quran-surah" class="text-xs bg-primary/10 text-primary px-3 py-1 rounded-full font-semibold font-cinzel"></span> {{-- Nama surat --}}
                    <span id="quran-ayat" class="text-xs bg-accent/10 text-accent px-3 py-1 rounded-full font-semibold"></span> {{-- Nomor ayat --}}
                </div> {{-- Penutup info rujukan --}}
            </div> {{-- Penutup kontainer slide --}}
        </div> {{-- Penutup card --}}
    </section> {{-- Penutup section slider ayat --}}

    <!-- ======================================================== -->
    <!-- ── GRID PERSYARATAN SAH SHOLAT (DARI DATABASE) ── -->
    <!-- ======================================================== -->
    <section class="mb-16"> {{-- Section syarat sah sholat --}}
        <div class="text-center mb-12"> {{-- Header judul --}}
            <h2 id="syarat-title" class="text-3xl font-bold font-cinzel">Syarat Sah Sholat</h2> {{-- Judul --}}
            <p id="syarat-desc" class="text-muted-foreground mt-2 max-w-xl mx-auto">Wajib dipenuhi dan dipersiapkan dengan baik sebelum memulai menghadap Allah SWT</p> {{-- Deskripsi --}}
        </div> {{-- Penutup header --}}
        
        <div id="syarat-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6"> {{-- Grid responsif 4 kolom syarat sah --}}
            @foreach($syarat as $s) {{-- Looping data syarat sah dari database --}}
                <div class="syarat-card bg-card rounded-2xl p-6 border border-border shadow-md hover:shadow-lg transition-all duration-300"> {{-- Card syarat sah sholat --}}
                    <div class="text-3xl mb-4 text-accent">{{ $s->icon }}</div> {{-- Emoji representatif syarat sah --}}
                    <h3 class="font-bold text-foreground mb-2">{{ $s->title }}</h3> {{-- Judul syarat sah --}}
                    <p class="text-muted-foreground text-sm leading-relaxed">{{ $s->description }}</p> {{-- Penjelasan syarat sah --}}
                </div> {{-- Penutup card --}}
            @endforeach {{-- Penutup looping --}}
        </div> {{-- Penutup grid --}}
    </section> {{-- Penutup section syarat sah --}}

    <!-- ======================================================== -->
    <!-- ── GRID JADWAL & RAKAAT SHOLAT FARDHU (DARI DATABASE) ── -->
    <!-- ======================================================== -->
    <section class="mb-16"> {{-- Section waktu & rakaat sholat --}}
        <div class="text-center mb-12"> {{-- Header judul --}}
            <h2 id="waktu-title" class="text-3xl font-bold font-cinzel">Waktu & Rakaat Sholat</h2> {{-- Judul --}}
            <p id="waktu-desc" class="text-muted-foreground mt-2">Lima waktu sholat fardhu wajib dalam sehari semalam bagi kaum Muslimin</p> {{-- Deskripsi --}}
        </div> {{-- Penutup header --}}
        
        <div id="waktu-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4"> {{-- Grid responsif 5 kolom (1 kolom per waktu sholat) --}}
            @foreach($prayerTimes as $pt) {{-- Looping data waktu sholat dari database --}}
                <div class="waktu-card rounded-2xl overflow-hidden shadow-lg border border-border bg-gradient-to-br {{ $pt->color }} p-6 text-white flex flex-col justify-between min-h-[220px] transition-all duration-300"> {{-- Card sholat fardhu --}}
                    <div class="flex justify-between items-start"> {{-- Bagian atas card --}}
                        <span class="text-3xl">{{ $pt->icon }}</span> {{-- Emoji representatif waktu sholat --}}
                        <span class="text-xs bg-white/20 px-3 py-1 rounded-full font-bold">{{ $pt->rakaat }}</span> {{-- Badge jumlah rakaat --}}
                    </div> {{-- Penutup bagian atas --}}
                    <div> {{-- Bagian bawah card --}}
                        <p class="text-2xl font-amiri text-right mb-1" dir="rtl">{{ $pt->arabic }}</p> {{-- Nama sholat aksara Arab --}}
                        <h3 class="font-bold text-xl font-cinzel">{{ $pt->name }}</h3> {{-- Nama sholat fardhu --}}
                        <p class="text-white/70 text-xs mt-1">{{ $pt->time }}</p> {{-- Keterangan waktu pelaksanaan --}}
                    </div> {{-- Penutup bagian bawah --}}
                </div> {{-- Penutup card --}}
            @endforeach {{-- Penutup looping --}}
        </div> {{-- Penutup grid --}}
    </section> {{-- Penutup section waktu sholat --}}

    <!-- ======================================================== -->
    <!-- ── DAFTAR HADITS KEUTAMAAN SHOLAT (DARI DATABASE) ── -->
    <!-- ======================================================== -->
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16"> {{-- Grid 2 kolom hadits --}}
        @foreach($hadiths as $h) {{-- Looping data hadits dari database --}}
            <div class="hadits-card relative bg-card rounded-3xl border border-border p-6 shadow-lg overflow-hidden transition-all duration-300"> {{-- Card hadits --}}
                <div class="hadits-indicator absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-amber-500 to-orange-600 rounded-l-2xl"></div> {{-- Garis indikator gradien di samping kiri --}}
                <div class="pl-4 space-y-4"> {{-- Margin kiri dan spasi antar konten --}}
                    <span class="text-xs font-bold uppercase text-amber-500 tracking-wider font-cinzel">Hadits Keutamaan</span> {{-- Kategori --}}
                    <p class="text-2xl leading-loose font-amiri text-right" dir="rtl">{{ $h->arabic }}</p> {{-- Redaksi hadits teks Arab --}}
                    <p class="text-sm italic text-muted-foreground leading-relaxed">{{ $h->translation }}</p> {{-- Terjemahan hadits --}}
                    <div class="flex items-center gap-2 pt-3 border-t border-border text-xs text-muted-foreground"> {{-- Detail perawi dan sumber hadits --}}
                        <span>{{ $h->narrator }}</span> {{-- Sahabat perawi --}}
                        <span>•</span> {{-- Pemisah --}}
                        <span class="font-semibold text-primary">{{ $h->source }}</span> {{-- Sumber kitab --}}
                    </div> {{-- Penutup detail --}}
                </div> {{-- Penutup margin --}}
            </div> {{-- Penutup card --}}
        @endforeach {{-- Penutup looping --}}
    </section> {{-- Penutup section hadits --}}

    <!-- ======================================================== -->
    <!-- ── BOTTOM CTA SECTION: TOMBOL PINDAH KE PANDUAN SHOLAT ── -->
    <!-- ======================================================== -->
    <section id="cta-section" class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-primary to-indigo-900 text-white p-8 md:p-12 shadow-2xl text-center transition-all duration-500"> {{-- Section CTA dengan gradien horizontal --}}
        <div class="absolute inset-0 bg-islamic-pattern opacity-10 pointer-events-none"></div> {{-- Dekorasi pola islami tipis --}}
        <div class="relative z-10 space-y-6 max-w-2xl mx-auto"> {{-- Kontainer z-index di atas pola, spasi vertikal sedang --}}
            <h2 id="cta-title" class="text-2xl md:text-3xl font-extrabold font-cinzel leading-snug">
                Mulai Belajar Tata Cara Sholat Lengkap Sekarang!
            </h2> {{-- Judul ajakan --}}
            <p id="cta-desc" class="text-white/80 text-sm md:text-base leading-relaxed">
                Anda telah memilih preferensi belajar Anda. Sekarang, mari lanjutkan ke halaman tata cara gerakan dan bacaan sholat interaktif yang disesuaikan secara khusus.
            </p> {{-- Deskripsi ajakan --}}
            <div class="pt-2"> {{-- Pembungkus tombol --}}
                <a href="{{ route('guide') }}?mode=dewasa" id="btn-start-guide" class="inline-flex items-center gap-3 px-8 py-4 bg-accent hover:bg-accent/90 text-white font-bold rounded-2xl shadow-xl shadow-accent/20 transition-all hover:scale-105 decoration-none cursor-pointer"> {{-- Tombol navigasi link halaman panduan --}}
                    <span>Mulai Panduan Sholat</span> {{-- Teks tombol --}}
                    <span class="text-lg">➔</span> {{-- Panah kanan --}}
                </a> {{-- Penutup tombol --}}
            </div> {{-- Penutup pembungkus tombol --}}
        </div> {{-- Penutup kontainer z-index --}}
    </section> {{-- Penutup section cta --}}

</div> {{-- Penutup kontainer utama beranda --}}

<!-- ── JAVASCRIPT LOCAL LOGIC BERANDA ── -->
<script> {{-- Penulisan skrip lokal beranda --}}
    // Variabel list ayat Quran yang dilemparkan dari database PHP ke format JSON Javascript
    const quranVerses = @json($quranVerses); // Data ayat Al-Quran.
    let quranIdx = 0; // State index ayat Quran aktif untuk carousel.

    // Fungsi melakukan transisi carousel ayat Quran secara otomatis
    function initQuranCarousel() { // Deklarasi fungsi initQuranCarousel.
        const updateQuranCard = () => { // Fungsi lokal memperbarui teks di card.
            if (quranVerses.length === 0) return; // Mencegah error jika data kosong.
            const verse = quranVerses[quranIdx]; // Mengambil objek ayat berdasarkan index aktif.
            const ar = document.getElementById('quran-arabic'); // Mendapatkan elemen teks Arab.
            const trans = document.getElementById('quran-translation'); // Mendapatkan elemen terjemahan.
            const surah = document.getElementById('quran-surah'); // Mendapatkan elemen nama surat.
            const ayat = document.getElementById('quran-ayat'); // Mendapatkan elemen nomor ayat.
            
            if (ar) { // Jika elemen teks Arab terdeteksi di DOM.
                ar.textContent = verse.arabic; // Mengisi teks Arab.
                trans.textContent = verse.translation; // Mengisi teks terjemahan.
                surah.textContent = verse.surah; // Mengisi nama surat.
                ayat.textContent = `Ayat ${verse.ayat}`; // Mengisi nomor ayat.
            } // Penutup cek elemen.
            quranIdx = (quranIdx + 1) % quranVerses.length; // Bergeser ke index berikutnya secara melingkar (modulus).
        }; // Penutup fungsi lokal.
        updateQuranCard(); // Memanggil langsung pertama kali saat loading selesai.
        setInterval(updateQuranCard, 6000); // Mengatur perulangan berjalan otomatis setiap 6 detik.
    } // Penutup fungsi initQuranCarousel.

    // Fungsi menggambar efek bintang berkelap-kelip melayang di banner Hero
    function createHeroStars() { // Deklarasi fungsi.
        const starsContainer = document.getElementById('stars-container'); // Mendapatkan kontainer bintang.
        if (!starsContainer) return; // Mencegah error jika kontainer tidak ditemukan.
        starsContainer.innerHTML = ''; // Mengosongkan sisa bintang sebelumnya.
        for (let i = 0; i < 20; i++) { // Melakukan looping sebanyak 20 kali untuk membuat 20 bintang.
            const star = document.createElement('div'); // Membuat tag div baru.
            star.className = 'absolute text-amber-400/40 select-none pointer-events-none text-sm'; // Class style absolute, warna kuning transparan, tidak bisa diseleksi/diklik.
            star.style.left = `${Math.random() * 95}%`; // Mengatur koordinat horizontal acak (0-95%).
            star.style.top = `${Math.random() * 80}%`; // Mengatur koordinat vertikal acak (0-80%).
            star.style.fontSize = `${10 + Math.random() * 16}px`; // Mengatur ukuran font bintang acak (10px - 26px).
            star.innerHTML = '✦'; // Menulis simbol bintang.
            
            // Memberi efek animasi float (melayang naik turun dan membesar) menggunakan Javascript Web Animations API
            star.animate([ // Kumpulan frame animasi.
                { transform: 'translateY(0) scale(1)', opacity: 0.3 }, // Awal: posisi diam, skala normal, transparan.
                { transform: `translateY(-${15 + Math.random() * 10}px) scale(1.3)`, opacity: 0.8 }, // Tengah: naik 15-25px, membesar, lebih terlihat.
                { transform: 'translateY(0) scale(1)', opacity: 0.3 } // Akhir: kembali ke posisi semula.
            ], { // Aturan animasi.
                duration: 3000 + Math.random() * 2000, // Durasi acak berkisar 3-5 detik.
                iterations: Infinity, // Berjalan selamanya tanpa henti.
                easing: 'ease-in-out', // Kecepatan kurva melambat di awal dan akhir.
                delay: Math.random() * 3000 // Jeda acak sebelum mulai bergerak (0-3 detik) agar tidak bergerak serempak.
            }); // Penutup pemanggilan animasi.
            
            starsContainer.appendChild(star); // Menaruh tag bintang ke dalam kontainer.
        } // Penutup looping bintang.
    } // Penutup fungsi.

    // Fungsi utama pengubah mode belajar secara in-place di beranda (tanpa reload halaman)
    function updatePageThemeInPlace(mode) { // Deklarasi fungsi dengan parameter mode.
        const body = document.body; // Mendapatkan elemen body.
        const hero = document.getElementById('hero-banner'); // Mendapatkan elemen banner hero.
        const cta = document.getElementById('cta-section'); // Mendapatkan elemen section CTA bawah.
        const btnStart = document.getElementById('btn-start-guide'); // Mendapatkan tombol CTA bawah.
        const cardDewasa = document.getElementById('card-mode-dewasa'); // Mendapatkan kartu pilihan dewasa.
        const cardKids = document.getElementById('card-mode-kids'); // Mendapatkan kartu pilihan anak.
        
        // Memperbarui url parameter tombol CTA bawah mengikuti mode aktif
        if (btnStart) { // Memastikan tombol CTA ada.
            btnStart.href = `{{ route('guide') }}?mode=${mode}`; // Mengubah tautan target tujuan sholat.
        } // Penutup cek.

        // Menerapkan penyesuaian visual berdasarkan mode terpilih
        if (mode === 'kids') { // JIKA TEMA ANAK-ANAK DIKLIK
            body.classList.add('theme-kids'); // Pasang class theme-kids di body untuk mengaktifkan warna latar belakang hangat & dot pattern.
            
            // Rombak warna banner Hero menjadi warna gradien hangat khas anak-anak (oranye ke kuning)
            if (hero) { // Cek hero.
                hero.className = "relative rounded-3xl bg-gradient-to-br from-amber-500 via-orange-500 to-amber-600 text-white p-8 md:p-16 overflow-hidden mb-12 shadow-2xl transition-all duration-500 border-2 border-orange-300"; // Class gradien oranye.
            } // Penutup cek.
            
            // Rombak warna section CTA bawah menjadi warna senada (jingga ke merah oranye)
            if (cta) { // Cek cta.
                cta.className = "relative overflow-hidden rounded-3xl bg-gradient-to-r from-orange-500 to-amber-500 text-white p-8 md:p-12 shadow-2xl text-center transition-all duration-500 border-2 border-orange-300"; // Class cta jingga.
            } // Penutup cek.

            // Rombak gaya tombol CTA agar menarik minat anak-anak (oranye pekat, membal)
            if (btnStart) { // Cek tombol.
                btnStart.className = "inline-flex items-center gap-3 px-8 py-4 bg-orange-600 hover:bg-orange-700 text-white font-bold rounded-2xl shadow-xl shadow-orange-600/30 transition-all hover:scale-110 decoration-none cursor-pointer border-0"; // Tombol bouncy oranye pekat.
            } // Penutup cek.

            // Menandai kartu pilihan mode anak-anak sebagai kartu aktif yang disorot (border tebal)
            if (cardKids) { // Cek kartu anak.
                cardKids.className = "tilt-card-anak cursor-pointer relative group overflow-hidden rounded-3xl border-4 p-8 shadow-xl bg-card border-orange-400 scale-[1.02] transition-all duration-300"; // Kelas aktif dengan border oranye tebal.
            } // Penutup cek.
            if (cardDewasa) { // Cek kartu dewasa.
                cardDewasa.className = "tilt-card-dewasa cursor-pointer relative group overflow-hidden rounded-3xl border p-8 shadow-md bg-card border-border opacity-70 transition-all duration-300"; // Kelas pasif buram.
            } // Penutup cek.
            
            // Mengubah teks judul header bagian seleksi mode
            const headerTitle = document.getElementById('mode-section-title'); // Judul seleksi.
            if (headerTitle) headerTitle.innerHTML = "⭐ Pilihan Mode Belajar Ceria ⭐"; // Menambah ornamen emoji bintang ceria.
            const headerDesc = document.getElementById('mode-section-desc'); // Deskripsi seleksi.
            if (headerDesc) headerDesc.textContent = "Wah hebat! Kamu sedang menggunakan Mode Belajar Anak-anak yang seru dan ceria!"; // Kalimat ramah anak.

        } else { // JIKA TEMA DEWASA DIKLIK (DEFAULT/ELEGAN)
            body.classList.remove('theme-kids'); // Hapus class kids agar body bertransisi ke warna latar gelap/terang bawaan (indigo/violet).
            
            // Kembalikan warna banner Hero ke gradien indigo gelap yang elegan
            if (hero) { // Cek hero.
                hero.className = "relative rounded-3xl bg-gradient-to-br from-primary via-indigo-900 to-purple-950 text-white p-8 md:p-16 overflow-hidden mb-12 shadow-2xl transition-all duration-500 border-0"; // Kelas elegan.
            } // Penutup cek.
            
            // Kembalikan warna section CTA bawah ke gradien indigo-biru tua
            if (cta) { // Cek cta.
                cta.className = "relative overflow-hidden rounded-3xl bg-gradient-to-r from-primary to-indigo-900 text-white p-8 md:p-12 shadow-2xl text-center transition-all duration-500 border-0"; // Kelas CTA elegan.
            } // Penutup cek.

            // Kembalikan tombol CTA ke desain elegan berkelas warna emas/kecoklatan (accent)
            if (btnStart) { // Cek tombol.
                btnStart.className = "inline-flex items-center gap-3 px-8 py-4 bg-accent hover:bg-accent/90 text-white font-bold rounded-2xl shadow-xl shadow-accent/20 transition-all hover:scale-105 decoration-none cursor-pointer border-0"; // Kelas tombol semula.
            } // Penutup cek.

            // Menandai kartu mode dewasa sebagai kartu aktif
            if (cardDewasa) { // Cek kartu dewasa.
                cardDewasa.className = "tilt-card-dewasa cursor-pointer relative group overflow-hidden rounded-3xl border-2 p-8 shadow-xl bg-card border-primary scale-[1.02] transition-all duration-300"; // Kelas aktif border biru.
            } // Penutup cek.
            if (cardKids) { // Cek kartu anak.
                cardKids.className = "tilt-card-anak cursor-pointer relative group overflow-hidden rounded-3xl border p-8 shadow-md bg-card border-border opacity-70 transition-all duration-300"; // Kelas pasif anak buram.
            } // Penutup cek.

            // Kembalikan teks judul seleksi mode ke teks normal
            const headerTitle = document.getElementById('mode-section-title'); // Judul.
            if (headerTitle) headerTitle.innerHTML = "Pilih Mode Belajar"; // Teks normal.
            const headerDesc = document.getElementById('mode-section-desc'); // Deskripsi.
            if (headerDesc) headerDesc.textContent = "Dapatkan visualisasi dan interaksi yang disesuaikan dengan kebutuhan Anda"; // Kalimat formal.
        } // Penutup blok percabangan mode.

        // Perbarui highlight tombol di navbar utama agar sinkron
        if (typeof updateNavbarActiveStyles === 'function') { // Memastikan fungsi di layouts/app.blade.php tersedia.
            updateNavbarActiveStyles(); // Memanggil fungsi sinkronisasi tombol navbar.
        } // Penutup cek fungsi.
    } // Penutup fungsi updatePageThemeInPlace.

    // Fungsi wrapper dipanggil saat user mengklik kartu di halaman beranda
    function setPageMode(mode) { // Deklarasi fungsi.
        localStorage.setItem('prayer_mode', mode); // Menyimpan mode terpilih di penyimpanan lokal browser.
        currentMode = mode; // Mengubah variabel state global.
        updatePageThemeInPlace(mode); // Memicu perombakan visual halaman secara real-time.
    } // Penutup fungsi.

    // ==========================================
    // ── 3D TILT EFEK JS DAN HOVER DYNAMIC ──
    // ==========================================
    function init3DTiltEffect() { // Deklarasi fungsi efek tilt 3D.
        const handleMouseMove = (e, card, mode) => { // Fungsi menghitung sudut rotasi 3D mengikuti kursor tikus.
            const rect = card.getBoundingClientRect(); // Mengambil koordinat batas fisik kartu di layar.
            const x = e.clientX - rect.left; // Posisi horizontal kursor relatif di dalam kartu.
            const y = e.clientY - rect.top; // Posisi vertikal kursor relatif di dalam kartu.
            
            const width = rect.width; // Lebar total kartu.
            const height = rect.height; // Tinggi total kartu.
            
            const normalizedX = (x / width) - 0.5; // Mengubah koordinat horizontal ke rentang -0.5 hingga 0.5.
            const normalizedY = (y / height) - 0.5; // Mengubah koordinat vertikal ke rentang -0.5 hingga 0.5.
            
            if (mode === 'dewasa') { // JIKA KARTU ADALAH MODE DEWASA (Kaku, halus, profesional)
                const rotateY = normalizedX * 16; // Rotasi sumbu Y maksimal 16 derajat.
                const rotateX = -normalizedY * 16; // Rotasi sumbu X maksimal 16 derajat.
                card.style.transform = `perspective(800px) rotateY(${rotateY}deg) rotateX(${rotateX}deg) scale(1.025)`; // Menerapkan perspektif, rotasi 3D, dan pembesaran tipis 1.025x.
                
                const gloss = card.querySelector('.gloss-overlay'); // Mendapatkan overlay gloss.
                if (gloss) { // Jika overlay gloss ada.
                    // Membuat pantulan cahaya melingkar dinamis mengikuti letak kursor tikus
                    gloss.style.background = `radial-gradient(circle at ${x}px ${y}px, rgba(255,255,255,0.18) 0%, rgba(255,255,255,0) 60%)`; // Efek radial gradient.
                } // Penutup cek.
            } else if (mode === 'anak') { // JIKA KARTU ADALAH MODE ANAK (Membal, sudut putar besar, bayangan bergeser)
                const rotateY = normalizedX * 24; // Rotasi sumbu Y maksimal 24 derajat (lebih leluasa/heboh).
                const rotateX = -normalizedY * 24; // Rotasi sumbu X maksimal 24 derajat.
                card.style.transform = `perspective(800px) rotateY(${rotateY}deg) rotateX(${rotateX}deg) scale(1.06)`; // Skala pembesaran lebih kentara (1.06x).
                card.style.boxShadow = `${-normalizedX * 15}px ${-normalizedY * 15}px 0px rgba(251, 146, 60, 0.4)`; // Menggeser bayangan padat jingga berlawanan arah kursor untuk memperkuat kesan kartun 3D.
            } // Penutup cek mode.
        }; // Penutup fungsi handleMouseMove.
        
        const handleMouseLeave = (card, mode) => { // Fungsi merestorasi kartu saat kursor meninggalkan area kartu.
            card.style.transform = `perspective(800px) rotateY(0deg) rotateX(0deg) scale(1)`; // Mengembalikan rotasi ke 0 derajat dan skala ke semula (1x).
            if (mode === 'dewasa') { // Jika dewasa.
                const gloss = card.querySelector('.gloss-overlay'); // Ambil overlay gloss.
                if (gloss) { // Kembalikan ke gradien sudut default.
                    gloss.style.background = `linear-gradient(135deg, rgba(255,255,255,0.15) 0%, rgba(255,255,255,0) 50%, rgba(255,255,255,0) 100%)`; // Gradien linear semula.
                } // Penutup cek.
            } else if (mode === 'anak') { // Jika anak-anak.
                card.style.boxShadow = `0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1)`; // Kembalikan bayangan halus bawaan.
            } // Penutup cek.
        }; // Penutup fungsi.

        // Mendaftarkan event listener mousemove dan mouseleave pada seluruh kartu
        const registerListeners = () => { // Deklarasi fungsi pendaftaran.
            document.querySelectorAll('.tilt-card-dewasa').forEach(card => { // Melingkari kartu dewasa.
                if (!card.dataset.tiltRegistered) { // Jika event belum terdaftar di kartu ini.
                    card.dataset.tiltRegistered = 'true'; // Set bendera terdaftar agar tidak terjadi penumpukan listener.
                    card.addEventListener('mousemove', (e) => handleMouseMove(e, card, 'dewasa')); // Tambah event mousemove.
                    card.addEventListener('mouseleave', () => handleMouseLeave(card, 'dewasa')); // Tambah event mouseleave.
                } // Penutup cek.
            }); // Penutup perulangan.

            document.querySelectorAll('.tilt-card-anak').forEach(card => { // Melingkari kartu anak-anak.
                if (!card.dataset.tiltRegistered) { // Cek bendera.
                    card.dataset.tiltRegistered = 'true'; // Tandai terdaftar.
                    card.addEventListener('mousemove', (e) => handleMouseMove(e, card, 'anak')); // Mousemove.
                    card.addEventListener('mouseleave', () => handleMouseLeave(card, 'anak')); // Mouseleave.
                } // Penutup cek.
            }); // Penutup perulangan.
        }; // Penutup registerListeners.

        registerListeners(); // Jalankan pendaftaran.
    } // Penutup fungsi init3DTiltEffect.

    // Menjalankan inisialisasi seluruh komponen saat dokumen selesai dimuat
    window.addEventListener('DOMContentLoaded', () => { // Event listener pemuatan DOM.
        initQuranCarousel(); // Mengaktifkan carousel ayat Quran otomatis.
        createHeroStars(); // Menggambar dekorasi bintang bersinar di hero.
        init3DTiltEffect(); // Mengaktifkan efek 3D tilt pada kartu mode belajar.
        
        // Menerapkan tema awal secara langsung menyesuaikan preferensi memori penyimpanan
        updatePageThemeInPlace(currentMode); // Memanggil sinkronisasi visual beranda.
    }); // Penutup event listener.
</script> {{-- Penutup tag script --}}
@endsection {{-- Menutup bagian konten --}}
