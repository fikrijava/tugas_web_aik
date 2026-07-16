@extends('layouts.app') {{-- Mewarisi struktur layout dasar dari layouts/app.blade.php --}}

@section('title', 'Ayo Belajar Sholat! - Mode Anak-Anak Ceria') {{-- Mengisi judul tab browser yang ramah anak --}}

@section('content') {{-- Membuka seksi konten utama --}}
<div class="max-w-6xl mx-auto px-4 py-8 theme-kids"> {{-- Kontainer utama dengan padding tambahan dan pemaksaan tema anak-anak --}}

    <!-- Header Ceria Ramah Anak -->
    <div class="text-center mb-10 space-y-2"> {{-- Penataan teks di tengah dengan spasi antar elemen --}}
        <h1 class="text-4xl md:text-5xl font-extrabold font-cinzel text-orange-600 dark:text-orange-400 flex items-center justify-center gap-3 animate-bounce"> {{-- Judul halaman yang membal-mbal (bounce) untuk menarik perhatian anak --}}
            <span>⭐</span> <span>Ayo Belajar Sholat!</span> <span>⭐</span> {{-- Judul ceria menggunakan emoji --}}
        </h1> {{-- Penutup judul --}}
        <p class="text-amber-700 dark:text-amber-500 font-bold text-base max-w-xl mx-auto"> {{-- Sub-deskripsi bersahabat --}}
            Halo adik-adik! Mari belajar gerakan dan bacaan sholat dengan cara yang asyik dan menyenangkan! 🎉 {{-- Kalimat ramah anak --}}
        </p> {{-- Penutup sub-deskripsi --}}
    </div> {{-- Penutup header --}}

    <!-- Tab Langkah Sholat Berbentuk Bintang Ceria (1 sampai 12) -->
    <div class="flex flex-wrap justify-center gap-3 mb-10" id="steps-tabs-container"> {{-- Pembungkus tab tombol langkah --}}
        @foreach($steps as $index => $step) {{-- Looping data langkah sholat --}}
            <button id="step-tab-{{ $index }}" onclick="clickStepTab({{ $index }})" class="w-14 h-14 rounded-2xl text-base font-black transition-all duration-300 border-4 cursor-pointer scale-100 hover:scale-110 {{ $index === 0 ? 'bg-orange-500 border-orange-500 text-white shadow-lg shadow-orange-500/40' : 'border-orange-200 text-orange-400 bg-amber-50 hover:border-orange-500 hover:text-orange-500' }}"> {{-- Tombol tab langkah berukuran besar dan tebal --}}
                🌟{{ $step->id }} {{-- Angka langkah sholat dihiasi emoji bintang kecil --}}
            </button> {{-- Penutup tombol --}}
        @endforeach {{-- Penutup looping --}}
    </div> {{-- Penutup tab --}}

    <!-- Grid Konten Utama (Kiri & Kanan) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8"> {{-- Grid tata letak halaman --}}
        
        <!-- ========================================== -->
        <!-- ── PANEL KIRI: VISUAL KARTUN & PEMUTAR MAINAN ── -->
        <!-- ========================================== -->
        <div class="lg:col-span-5 flex flex-col gap-6"> {{-- Sisi kiri mengambil 5 kolom grid --}}
            
            <!-- 🎬 Pemutar Video Mainan Oranye & Pintasan Menit Ceria -->
            <div class="rounded-3xl border-4 border-orange-300 bg-card p-6 shadow-xl flex flex-col gap-4 relative overflow-hidden"> {{-- Card pemutar video --}}
                <div class="flex items-center justify-between"> {{-- Baris atas --}}
                    <span class="font-black text-sm flex items-center gap-2 text-orange-600"> {{-- Label --}}
                        <span>🎬</span> Tonton Video Peraga {{-- Judul video --}}
                    </span> {{-- Penutup label --}}
                    <span class="text-xs bg-orange-100 text-orange-600 font-bold px-3 py-1 rounded-full"> {{-- Penanda --}}
                        Ayo Tonton! 🎥 {{-- Teks penanda --}}
                    </span> {{-- Penutup penanda --}}
                </div> {{-- Penutup baris --}}

                {{-- Pemutar Video Dengan Frame Kartun Tebal --}}
                <div class="relative rounded-2xl overflow-hidden bg-black aspect-video shadow-md border-4 border-orange-400"> {{-- Frame luar video --}}
                    <video id="guide-local-video" src="{{ route('video.stream') }}" class="w-full h-full object-cover" controls playsinline preload="auto"></video> {{-- Elemen video yang memanggil stream Partial Content --}}
                </div> {{-- Penutup piala video --}}
                
                <div class="flex items-center justify-between text-xs text-amber-800 font-bold pt-1"> {{-- Status video tanpa garis bawah --}}
                    <p>Gerakan Sekarang: <span id="video-step-name" class="text-orange-600">Niat</span></p> {{-- Langkah saat ini --}}
                    <a id="video-youtube-link" href="#" target="_blank" class="text-orange-600 hover:underline font-bold decoration-none">Nonton di YouTube ↗</a> {{-- Link alternatif --}}
                </div> {{-- Penutup status --}}
            </div> {{-- Penutup card video --}}

            <!-- 📸 Frame Gambar Gerakan Sholat Ceria -->
            <div id="image-frame-card" class="rounded-3xl border-4 border-orange-300 bg-card p-6 shadow-xl relative overflow-hidden transition-all duration-500 kids-doodle"> {{-- Bingkai dengan border oranye tebal khas kartun dan ornamen doodle --}}
                <div class="flex items-center justify-between mb-4"> {{-- Baris atas --}}
                    <span class="font-black text-sm flex items-center gap-2 text-orange-600"> {{-- Label judul --}}
                        <span>👶</span> Foto Gerakan Sholat {{-- Judul --}}
                    </span> {{-- Penutup label --}}
                    <span class="text-xs bg-orange-100 text-orange-600 font-bold px-3 py-1 rounded-full uppercase"> {{-- Badge mode --}}
                        Mode Ceria 🎈 {{-- Teks --}}
                    </span> {{-- Penutup badge --}}
                </div> {{-- Penutup baris --}}
                
                {{-- Box Gambar Gerakan Sholat --}}
                <div class="relative w-full min-h-[400px] md:min-h-[480px] rounded-2xl bg-amber-50/50 border-4 border-dashed border-orange-300 flex items-center justify-center overflow-hidden"> {{-- Box penampil gambar lebih tinggi --}}
                    <img id="prayer-movement-image" src="" alt="Gerakan Sholat" class="max-h-[400px] md:max-h-[480px] w-auto h-auto object-contain transition-all duration-300 transform scale-95 hover:scale-100"> {{-- Gambar utuh tanpa terpotong (object-contain) --}}
                </div> {{-- Penutup box gambar --}}
                <p class="text-center text-xs text-amber-800 font-bold mt-3 animate-pulse">Ayo adik-adik, ikuti gerakan foto di atas ya! 🙋‍♂️</p> {{-- Pesan motivasi --}}
            </div> {{-- Penutup card gambar --}}

            <!-- 📍 Posisi & Gerakan Fisik Deskripsi (Bahasa Sederhana) -->
            <div class="rounded-3xl border-4 border-orange-300 bg-card p-6 shadow-xl relative overflow-hidden"> {{-- Card posisi tubuh anak --}}
                <h4 class="font-black text-orange-600 mb-3 flex items-center gap-2"> {{-- Judul --}}
                    <span>📍</span> Cara Berdiri & Bergerak : {{-- Label --}}
                </h4> {{-- Penutup judul --}}
                <p id="guide-physical-position" class="text-sm text-amber-900 font-medium leading-relaxed"></p> {{-- Teks deskripsi gerakan fisik yang disederhanakan --}}
            </div> {{-- Penutup card posisi --}}
        </div> {{-- Penutup panel kiri --}}

        <!-- ========================================== -->
        <!-- ── PANEL KANAN: BACAAN BESAR & MAINAN AUDIO ── -->
        <!-- ========================================== -->
        <div class="lg:col-span-7 flex flex-col gap-6"> {{-- Sisi kanan mengambil 7 kolom grid --}}
            
            <!-- Card Bacaan Sholat Warna Ceria (Yellow-Orange Gradient) -->
            <div id="guide-content-card" class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-orange-300 bg-gradient-to-br from-amber-500 to-orange-500 text-white p-6 md:p-8 transition-all duration-500"> {{-- Card utama bacaan --}}
                <div class="relative z-10 space-y-6"> {{-- Pembungkus di atas gradien --}}
                    
                    <!-- Header Langkah Sholat Ceria -->
                    <div class="flex items-center justify-between border-b border-white/20 pb-4"> {{-- Baris atas --}}
                        <div class="flex items-center gap-3"> {{-- Urutan dan judul --}}
                            <span id="arabic-step-num" class="text-4xl font-extrabold text-white/40 font-amiri">١</span> {{-- Angka arab besar --}}
                            <div> {{-- Judul --}}
                                <p id="guide-step-counter-label" class="text-white/80 text-xs font-bold uppercase tracking-wider">Langkah Kecil {{ $steps[0]->id }}</p> {{-- Urutan langkah --}}
                                <h3 id="guide-step-title" class="text-2xl md:text-3xl font-black">Niat</h3> {{-- Judul gerakan --}}
                            </div> {{-- Penutup judul --}}
                        </div> {{-- Penutup --}}
                        <span id="guide-step-subtitle" class="text-xs bg-white/30 text-white px-4 py-1.5 rounded-full font-bold">Niat dalam Hati</span> {{-- Subjudul --}}
                    </div> {{-- Penutup header --}}

                    <!-- Bacaan Arab (Teks Sangat Besar untuk Anak) -->
                    <div class="bg-white/15 rounded-2xl p-5 border border-white/10 text-center"> {{-- Box bacaan Arab --}}
                        <p class="text-xs font-black uppercase tracking-widest text-amber-200 mb-2">Yuk Baca Tulisan Arab Ini :</p> {{-- Label ajakan --}}
                        <p id="guide-step-arabic" class="text-3xl md:text-4xl leading-loose font-extrabold whitespace-pre-line font-amiri" dir="rtl"></p> {{-- Teks Arab besar --}}
                    </div> {{-- Penutup box bacaan --}}

                    <!-- Transliterasi Latin Mudah Dibaca -->
                    <div class="bg-white/10 rounded-xl p-4 border border-white/5"> {{-- Box Latin --}}
                        <p class="text-xs font-black uppercase tracking-widest text-amber-200 mb-2">Cara Membacanya :</p> {{-- Label --}}
                        <p id="guide-step-transliteration" class="text-base font-bold text-white leading-relaxed whitespace-pre-line"></p> {{-- Latin dengan font bold --}}
                    </div> {{-- Penutup box --}}

                    <!-- Arti Doa Sederhana -->
                    <div class="bg-white/10 rounded-xl p-4 border border-white/5"> {{-- Box terjemahan --}}
                        <p class="text-xs font-black uppercase tracking-widest text-white/70 mb-2">Artinya Adalah :</p> {{-- Label --}}
                        <p id="guide-step-translation" class="text-sm font-semibold text-white/90 leading-relaxed whitespace-pre-line"></p> {{-- Teks terjemahan --}}
                    </div> {{-- Penutup box --}}

                    <!-- Penjelasan Gerakan Ramah Anak -->
                    <div class="text-sm text-white/80 leading-relaxed border-t border-white/10 pt-4"> {{-- Box penjelasan --}}
                        <p class="text-xs font-black uppercase tracking-widest text-white/60 mb-2">Keterangan Gerakan :</p> {{-- Label --}}
                        <p id="guide-step-description" class="whitespace-pre-line font-medium"></p> {{-- Teks penjelasan syariat yang ramah anak --}}
                    </div> {{-- Penutup box --}}
                    
                    {{-- Informasi Rujukan --}}
                    <div class="text-xs text-white/60 pt-2 flex items-center gap-1.5 font-bold flex-wrap"> {{-- Rujukan --}}
                        <span>📚</span><span>Berdasarkan Tuntunan:</span><span id="guide-step-source" class="text-white underline">HPT Muhammadiyah</span> {{-- Sumber --}}
                    </div> {{-- Penutup rujukan --}}
                </div> {{-- Penutup pembungkus konten --}}
            </div> {{-- Penutup card bacaan --}}

            <!-- 🔊 Panel Pengontrol Audio Bergaya Mainan Retro (Toy Player Style) -->
            <div class="rounded-3xl border-4 border-orange-300 bg-card p-6 shadow-xl relative overflow-hidden"> {{-- Card audio mainan --}}
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4"> {{-- Tata letak flex --}}
                    <div class="flex items-center gap-3"> {{-- Info status audio --}}
                        <div class="w-14 h-14 rounded-3xl bg-orange-100 flex items-center justify-center text-2xl animate-bounce">📻</div> {{-- Ikon radio mainan --}}
                        <div> {{-- Status --}}
                            <h4 class="font-black text-orange-600">Dengarkan Suara Doa!</h4> {{-- Judul --}}
                            <p id="audio-status-text" class="text-xs text-amber-800 font-bold">Ayo klik tombol bulat di kanan untuk bunyi suara!</p> {{-- Status ramah anak --}}
                        </div> {{-- Penutup status --}}
                    </div> {{-- Penutup info --}}
                    
                    {{-- Tombol Play Bulat Besar Berwarna Oranye Terang --}}
                    <button id="btn-play-audio" onclick="toggleAudio()" class="w-14 h-14 rounded-full flex items-center justify-center text-white bg-orange-500 hover:bg-orange-600 shadow-lg shadow-orange-500/40 transition-all hover:scale-110 cursor-pointer border-0"> {{-- Tombol play bouncy --}}
                        <svg id="audio-play-icon" class="w-6 h-6 translate-x-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg> {{-- Play --}}
                        <svg id="audio-pause-icon" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 24 24"><rect x="6" y="6" width="12" height="12" rx="1.5"/></svg> {{-- Pause --}}
                    </button> {{-- Penutup tombol --}}
                </div> {{-- Penutup flex --}}

                {{-- Pengaturan Bahasa & Kecepatan Mainan --}}
                <div class="grid grid-cols-2 gap-4 mt-6 pt-4 border-t-2 border-orange-100"> {{-- Grid dropdown --}}
                    <div> {{-- Kolom bahasa --}}
                        <label class="block text-xs font-black text-amber-800 mb-1.5 uppercase tracking-wider">Suara Bahasa</label> {{-- Label --}}
                        <select id="audio-type-select" onchange="changeAudioSetting()" class="w-full text-xs font-bold bg-amber-50 text-amber-900 border-2 border-orange-200 rounded-2xl px-3 py-2.5 outline-none focus:border-orange-400"> {{-- Dropdown --}}
                            <option value="arab">Bahasa Arab (Doa)</option> {{-- Arab --}}
                            <option value="arti">Bahasa Indonesia (Arti)</option> {{-- Indonesia --}}
                        </select> {{-- Penutup dropdown --}}
                    </div> {{-- Penutup kolom bahasa --}}
                    <div> {{-- Kolom kecepatan --}}
                        <label class="block text-xs font-black text-amber-800 mb-1.5 uppercase tracking-wider">Kecepatan Suara</label> {{-- Label --}}
                        <select id="audio-speed-select" onchange="changeAudioSetting()" class="w-full text-xs font-bold bg-amber-50 text-amber-900 border-2 border-orange-200 rounded-2xl px-3 py-2.5 outline-none focus:border-orange-400"> {{-- Dropdown --}}
                            <option value="0.75">Sangat Lambat🐢</option> {{-- Lambat --}}
                            <option value="1" selected>Suara Normal biasa🧍</option> {{-- Normal --}}
                            <option value="1.25">Agak Cepat🐇</option> {{-- Sedang --}}
                            <option value="1.5">Sangat Cepat⚡</option> {{-- Cepat --}}
                        </select> {{-- Penutup dropdown --}}
                    </div> {{-- Penutup kolom kecepatan --}}
                </div> {{-- Penutup grid --}}

                {{-- Visualizer Audio Mainan (Lebih Lebar dan Membal Cepat) --}}
                <div id="audio-visualizer" class="hidden flex justify-center items-end gap-2 h-12 mt-5 overflow-hidden"> {{-- Visualizer --}}
                    <div class="w-2 bg-orange-400 rounded-full animate-bounce h-2/5"></div> {{-- Batang 1 --}}
                    <div class="w-2 bg-orange-500 rounded-full animate-bounce h-4/5" style="animation-delay: 0.08s"></div> {{-- Batang 2 --}}
                    <div class="w-2 bg-amber-400 rounded-full animate-bounce h-3/5" style="animation-delay: 0.16s"></div> {{-- Batang 3 --}}
                    <div class="w-2 bg-orange-600 rounded-full animate-bounce h-5/5" style="animation-delay: 0.24s"></div> {{-- Batang 4 --}}
                    <div class="w-2 bg-amber-500 rounded-full animate-bounce h-3/5" style="animation-delay: 0.32s"></div> {{-- Batang 5 --}}
                    <div class="w-2 bg-orange-500 rounded-full animate-bounce h-4/5" style="animation-delay: 0.4s"></div> {{-- Batang 6 --}}
                    <div class="w-2 bg-orange-400 rounded-full animate-bounce h-2/5" style="animation-delay: 0.48s"></div> {{-- Batang 7 --}}
                </div> {{-- Penutup visualizer --}}
            </div> {{-- Penutup card audio --}}

        </div> {{-- Penutup panel kanan --}}

    </div> {{-- Penutup grid konten --}}

</div> {{-- Penutup kontainer utama --}}

<!-- ── JAVASCRIPT LOGIC PANDUAN ANAK-ANAK (BOUNCY TILT & SYNC) ── -->
<script> {{-- Penulisan Javascript local panduan anak-anak --}}
    // Parsing data langkah sholat dari PHP ke format JSON
    const steps = @json($steps); // Array langkah.
    
    // State Halaman
    let activeStep = 0; // Index langkah aktif (0-11).
    let isPlaying = false; // Status pemutaran audio.
    let audioType = 'arab'; // Tipe audio.
    let audioSpeed = 1; // Kecepatan putar audio.
    let currentAudio = null; // Instansi audio.
    let isSyncingFromVideo = false; // Flag status loop pengontrol.

    // Fungsi memuat detail data langkah sholat bergaya ceria anak-anak
    function loadStepDetails(idx) { // Deklarasi fungsi.
        activeStep = idx; // Update index aktif.
        const step = steps[idx]; // Ambil data langkah.

        // Memperbarui highlight tombol tab langkah aktif (1-12) dengan model bouncy oranye
        steps.forEach((s, bidx) => { // Loop tab.
            const btn = document.getElementById(`step-tab-${bidx}`); // Dapatkan tombol.
            if (btn) { // Pengecekan elemen.
                btn.className = `w-14 h-14 rounded-2xl text-base font-black transition-all duration-300 border-4 cursor-pointer scale-100 ${bidx === activeStep ? 'bg-orange-500 border-orange-500 text-white scale-110 shadow-lg shadow-orange-500/40' : 'border-orange-200 text-orange-400 bg-amber-50 hover:border-orange-500 hover:text-orange-500 hover:scale-105'}`; // Terapkan style bouncy aktif.
            } // Penutup cek.

            // Memperbarui highlight tombol di panel melayang langkah sholat anak-anak
            const floatBtn = document.getElementById(`floating-step-btn-${bidx}`); // Dapatkan tombol melayang.
            if (floatBtn) { // Memastikan elemen tombol melayang ada.
                if (bidx === activeStep) { // Jika langkah ini aktif.
                    floatBtn.className = "w-11 h-11 rounded-xl border-4 border-orange-500 text-xs font-black flex items-center justify-center transition-all bg-orange-500 text-white scale-110 shadow-lg shadow-orange-450 cursor-pointer border-0"; // Terapkan highlight aktif ceria.
                } else { // Jika pasif.
                    floatBtn.className = "w-11 h-11 rounded-xl border-2 border-orange-200 text-xs font-black flex items-center justify-center transition-all bg-amber-50 hover:bg-orange-500 hover:text-white cursor-pointer text-orange-500"; // Reset ke bentuk default.
                } // Penutup cek.
            } // Penutup cek tombol.
        }); // Penutup loop.

        // Memperbarui teks dinamis di halaman dengan bahasa sederhana ramah anak
        document.getElementById('arabic-step-num').textContent = step.num; // Angka arab.
        document.getElementById('guide-step-counter-label').textContent = `Langkah Kecil ke-${step.id}`; // Urutan langkah anak.
        document.getElementById('guide-step-title').textContent = step.title; // Judul gerakan.
        document.getElementById('guide-step-subtitle').textContent = step.subtitle; // Subjudul.
        document.getElementById('guide-step-arabic').textContent = step.arabic; // Bacaan Arab.
        document.getElementById('guide-step-transliteration').textContent = step.transliteration; // Latin.
        document.getElementById('guide-step-translation').textContent = step.translation; // Arti terjemahan.
        
        // Menyederhanakan deskripsi syariat dan posisi fisik agar mudah dibaca anak-anak
        let childDescription = step.description; // Mengambil deskripsi syariat asli.
        let childPosition = step.position; // Mengambil petunjuk fisik asli.
        
        // Penggantian istilah teknis syariat berat ke kata-kata sederhana anak secara langsung (hard replacement)
        childDescription = childDescription
            .replace(/Himpunan Putusan Tarjih/g, "Buku Panduan")
            .replace(/HPT/g, "Panduan")
            .replace(/shahih/g, "benar dan dicontohkan nabi")
            .replace(/fardhu 'ain/g, "wajib bagi kita")
            .replace(/sunnah mu'akkadah/g, "sangat dianjurkan")
            .replace(/tuma'ninah/g, "tenang tidak terburu-buru")
            .replace(/rukun sholat/g, "gerakan wajib")
            .replace(/rukun qauliy/g, "bacaan wajib");

        childPosition = childPosition
            .replace(/tuma'ninah/g, "diam tenang sejenak")
            .replace(/bersedekap/g, "melipat tangan di dada")
            .replace(/iftirasy/g, "duduk santai di atas piringan kaki")
            .replace(/tawarruk/g, "duduk menyilang ke kanan");

        document.getElementById('guide-step-description').textContent = childDescription; // Pasang deskripsi anak.
        document.getElementById('guide-physical-position').textContent = childPosition; // Pasang posisi anak.

        document.getElementById('video-step-name').textContent = step.title; // Nama langkah video.
        document.getElementById('guide-step-source').textContent = "HPT Muhammadiyah"; // Sumber ringkas.

        // Memperbarui tautan alternatif YouTube
        document.getElementById('video-youtube-link').href = `https://www.youtube.com/watch?v=7u7a2P1d5tM&t=${step.video_start}s`; // Tautan alternatif.

        // Menghapus baris pembaruan footer navigasi karena sudah digantikan oleh widget melayang

        // Memperbarui file gambar gerakan sholat dengan transisi fade-in membal
        const imgEl = document.getElementById('prayer-movement-image'); // Dapatkan gambar.
        if (imgEl) { // Cek.
            imgEl.style.transform = "scale(0.8)"; // Kecilkan gambar sesaat.
            imgEl.style.opacity = 0; // Transparan.
            setTimeout(() => { // Jeda 150ms.
                imgEl.src = `/images/${step.image_path}`; // Ganti sumber gambar baru.
                imgEl.style.opacity = 1; // Tampilkan kembali.
                imgEl.style.transform = "scale(0.95)"; // Kembalikan ke skala normal anak.
            }, 150); // Akhir jeda.
        } // Penutup cek.
    } // Penutup fungsi.

    // Aksi memicu pergantian langkah saat tab diklik langsung
    function clickStepTab(idx) { // Deklarasi fungsi.
        stopAudio(); // Hentikan audio.
        loadStepDetails(idx); // Muat data langkah.
        
        // Arahkan pemutar video ke detik target sholat
        const video = document.getElementById('guide-local-video'); // Dapatkan video player.
        if (video) { // Cek.
            isSyncingFromVideo = false; // Matikan bendera sinkronisasi video.
            // Memastikan video sudah termuat (readyState >= 1) sebelum melakukan seek untuk menghindari error
            if (video.readyState >= 1) { // Jika metadata video sudah siap.
                video.currentTime = steps[idx].video_start; // Set detik pemutar video ke detik mulai gerakan.
                video.play().catch(() => {}); // Mainkan video otomatis.
            } else { // Jika metadata video belum siap.
                const seekOnLoad = () => { // Fungsi callback sekali jalan.
                    video.currentTime = steps[idx].video_start; // Set detik pemutar video.
                    video.play().catch(() => {}); // Mainkan video.
                    video.removeEventListener('loadedmetadata', seekOnLoad); // Hapus event listener agar tidak terpicu berulang.
                }; // Penutup callback.
                video.addEventListener('loadedmetadata', seekOnLoad); // Dengarkan event saat metadata selesai dimuat.
            } // Penutup cek readyState.
        } // Penutup cek.
    } // Penutup fungsi.

    // ========================================================
    // ── LOGIKA SINKRONISASI BERSILANGAN (BIDIRECTIONAL SYNC) ──
    // ========================================================
    function initVideoSync() { // Deklarasi fungsi.
        const video = document.getElementById('guide-local-video'); // Dapatkan pemutar video.
        if (!video) return; // Cek.

        // Event listener saat pemutaran video berjalan
        video.addEventListener('timeupdate', () => { // Terpicu saat video berputar.
            const curTime = video.currentTime; // Posisi detik video saat ini.
            let targetIdx = -1; // Inisialisasi index target.

            // Cari langkah sholat mana yang sesuai dengan posisi detik video saat ini
            for (let i = 0; i < steps.length; i++) { // Loop.
                const start = steps[i].video_start; // Detik awal langkah ke-i.
                const end = (i < steps.length - 1) ? steps[i + 1].video_start : video.duration || 9999; // Detik akhir langkah ke-i.
                
                if (curTime >= start && curTime < end) { // Cek kecocokan rentang.
                    targetIdx = i; // Tentukan target.
                    break; // Selesai.
                } // Penutup cek.
            } // Penutup loop.

            // Jika terdeteksi perubahan langkah aktif di video
            if (targetIdx !== -1 && targetIdx !== activeStep) { // Cek perbedaan index.
                loadStepDetails(targetIdx); // Update konten halaman di UI tanpa mengalihkan posisi video player.
            } // Penutup cek.
        }); // Penutup event listener.
    } // Penutup fungsi.

    // ========================================================
    // ── SISTEM PEMUTAR AUDIO PANDUAN & SPEECH SYNTHESIS (TTS) ──
    // ========================================================
    function stopAudio() { // Deklarasi fungsi menghentikan audio.
        isPlaying = false; // Set bermain ke false.
        if (currentAudio) { // Cek file audio.
            currentAudio.pause(); // Pause.
            currentAudio = null; // Kosongkan instansi.
        } // Penutup cek.
        if (window.speechSynthesis) { // Cek TTS.
            window.speechSynthesis.cancel(); // Batalkan TTS.
        } // Penutup cek.
        
        // Kembalikan tombol ke default
        document.getElementById('audio-play-icon').classList.remove('hidden'); // Tampilkan play.
        document.getElementById('audio-pause-icon').classList.add('hidden'); // Sembunyikan pause.
        document.getElementById('audio-visualizer').classList.add('hidden'); // Sembunyikan visualizer.
        document.getElementById('audio-status-text').textContent = "Ayo klik tombol bulat di kanan untuk bunyi suara!"; // Status teks anak-anak.
    } // Penutup fungsi.

    function changeAudioSetting() { // Fungsi perubahan pengaturan suara.
        audioType = document.getElementById('audio-type-select').value; // Ambil tipe bahasa.
        audioSpeed = parseFloat(document.getElementById('audio-speed-select').value); // Ambil kecepatan.
        stopAudio(); // Hentikan audio.
    } // Penutup fungsi.

    function toggleAudio() { // Fungsi tombol play diklik.
        if (isPlaying) { // Jika sedang menyala.
            stopAudio(); // Hentikan.
            return; // Keluar.
        } // Penutup cek.

        isPlaying = true; // Set bermain.
        document.getElementById('audio-play-icon').classList.add('hidden'); // Sembunyikan play.
        document.getElementById('audio-pause-icon').classList.remove('hidden'); // Tampilkan pause.
        document.getElementById('audio-visualizer').classList.remove('hidden'); // Tampilkan visualizer.
        document.getElementById('audio-status-text').textContent = audioType === 'arab' ? "Yuk dengar bacaan Arab-nya..." : "Yuk dengar artinya..."; // Update teks status anak-anak.

        const step = steps[activeStep]; // Ambil data langkah aktif.
        const audioSrc = audioType === 'arab' ? step.audio_url : step.audio_translation_url; // Pilih file audio.

        if (audioSrc) { // Jika file audio tersedia.
            currentAudio = new Audio(audioSrc); // Buat instansi audio.
            currentAudio.playbackRate = audioSpeed; // Terapkan kecepatan.
            currentAudio.onended = () => stopAudio(); // Hentikan jika selesai.
            currentAudio.onerror = () => fallbackTTS(); // Panggil fallback jika error.
            currentAudio.play().catch(() => fallbackTTS()); // Putar.
        } else { // Jika file audio kosong.
            fallbackTTS(); // Panggil fallback TTS.
        } // Penutup cek.
    } // Penutup fungsi.

    function fallbackTTS() { // Deklarasi fungsi fallback TTS.
        const step = steps[activeStep]; // Ambil langkah.
        const textToSpeak = audioType === 'arab' ? step.arabic : step.translation; // Ambil teks target.
        const lang = audioType === 'arab' ? 'ar-SA' : 'id-ID'; // Bahasa target.
        
        if (!window.speechSynthesis) { // Cek dukungan TTS.
            stopAudio(); // Hentikan.
            return; // Keluar.
        } // Penutup cek.

        // Bersihkan teks
        const cleanText = textToSpeak.replace(/\n/g, " ").replace(/\([\d]+\)/g, ""); // Bersihkan teks.
        const utterance = new SpeechSynthesisUtterance(cleanText); // Buat utterance.
        utterance.lang = lang; // Set bahasa.
        utterance.rate = audioSpeed * (lang === 'ar-SA' ? 0.75 : 0.95); // Penyesuaian kecepatan.
        
        const voices = window.speechSynthesis.getVoices(); // Dapatkan list suara pembaca.
        const voice = voices.find(v => v.lang.startsWith(lang.split('-')[0])); // Cari suara aksen.
        if (voice) { // Jika ketemu.
            utterance.voice = voice; // Pasang.
        } // Penutup cek.

        utterance.onend = () => stopAudio(); // Selesai.
        utterance.onerror = () => stopAudio(); // Error.
        window.speechSynthesis.speak(utterance); // Jalankan pembacaan teks bersuara.
    } // Penutup fungsi.

    // ========================================================
    // ── 3D TILT EFFECT UNTUK KARTU (BOUNCY CARTOON STYLE) ──
    // ========================================================
    function init3DTiltEffect() { // Deklarasi fungsi.
        const handleMouseMove = (e, card) => { // Perhitungan rotasi.
            const rect = card.getBoundingClientRect(); // Batas fisik kartu.
            const x = e.clientX - rect.left; // Posisi horizontal kursor.
            const y = e.clientY - rect.top; // Posisi vertikal kursor.
            
            const width = rect.width; // Lebar kartu.
            const height = rect.height; // Tinggi kartu.
            
            const normalizedX = (x / width) - 0.5; // Normalisasi X (-0.5 s/d 0.5).
            const normalizedY = (y / height) - 0.5; // Normalisasi Y (-0.5 s/d 0.5).
            
            // Rotasi berukuran besar (24 derajat) untuk memberi kesan 3D membal kartun yang kuat
            const rotateY = normalizedX * 24; 
            const rotateX = -normalizedY * 24;
            card.style.transform = `perspective(800px) rotateY(${rotateY}deg) rotateX(${rotateX}deg) scale(1.06)`; // Skala pembesaran kentara 1.06x.
            card.style.boxShadow = `${-normalizedX * 15}px ${-normalizedY * 15}px 0px rgba(251, 146, 60, 0.4)`; // Bayangan padat oranye ikut bergeser.
        }; // Penutup mousemove.
        
        const handleMouseLeave = (card) => { // Pemulihan posisi.
            card.style.transform = `perspective(800px) rotateY(0deg) rotateX(0deg) scale(1)`; // Reset rotasi dan skala.
            card.style.boxShadow = `0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1)`; // Reset bayangan halus.
        }; // Penutup mouseleave.

        const card = document.getElementById('image-frame-card'); // Dapatkan kartu frame gambar.
        if (card) { // Jika kartu ada.
            card.addEventListener('mousemove', (e) => handleMouseMove(e, card)); // Tambahkan event mousemove.
            card.addEventListener('mouseleave', () => handleMouseLeave(card)); // Tambahkan event mouseleave.
        } // Penutup cek.
    } // Penutup fungsi.

    // Inisialisasi awal saat dokumen selesai dimuat
    window.addEventListener('DOMContentLoaded', () => { // Event listener pemuatan DOM.
        loadStepDetails(0); // Memuat gerakan pertama (Niat - index 0).
        initVideoSync(); // Mengaktifkan sinkronisasi video.
        init3DTiltEffect(); // Mengaktifkan efek 3D tilt bouncy pada bingkai gambar.

        // Menyelaraskan waktu video dengan langkah awal (Niat) secara otomatis saat halaman pertama kali dibuka
        const video = document.getElementById('guide-local-video'); // Mendapatkan pemutar video.
        if (video) { // Memastikan pemutar video terdeteksi.
            if (video.readyState >= 1) { // Jika metadata video sudah siap.
                video.currentTime = steps[0].video_start; // Lompat ke detik awal langkah Niat (8 detik).
            } else { // Jika belum siap.
                video.addEventListener('loadedmetadata', () => { // Tunggu hingga metadata termuat.
                    video.currentTime = steps[0].video_start; // Set detik ke awal langkah Niat.
                }); // Penutup event listener.
            } // Penutup cek readyState.
        } // Penutup cek video.
    }); // Penutup event listener.

    // Fungsi mengaktifkan/menonaktifkan (toggle) panel menu mengembang langkah sholat (Mode Anak)
    function toggleFloatingStepsMenu() { // Deklarasi fungsi.
        const panel = document.getElementById('floating-steps-panel'); // Dapatkan panel.
        if (!panel) return; // Cek.
        
        if (panel.classList.contains('hidden')) { // Jika disembunyikan.
            panel.classList.remove('hidden'); // Tampilkan.
            setTimeout(() => { // Jeda mikro.
                panel.classList.remove('scale-95', 'opacity-0'); // Hilangkan ciut pudar.
                panel.classList.add('scale-100', 'opacity-100'); // Skala penuh solid.
            }, 15); // Akhir jeda.
        } else { // Jika sedang terbuka.
            panel.classList.add('scale-95', 'opacity-0'); // Ciutkan.
            panel.classList.remove('scale-100', 'opacity-100'); // Hapus solid.
            setTimeout(() => { // Jeda.
                panel.classList.add('hidden'); // Sembunyikan.
            }, 200); // Akhir jeda.
        } // Penutup cek.
    } // Penutup fungsi.

    // Fungsi navigasi langkah sholat melalui menu mengembang (Mode Anak)
    function selectStepAndClose(idx) { // Deklarasi fungsi.
        clickStepTab(idx); // Klik tab langkah.
        toggleFloatingStepsMenu(); // Tutup menu.
    } // Penutup fungsi.
</script> {{-- Penutup tag script --}}
@endsection {{-- Menutup seksi konten --}}

@section('floating_widgets') {{-- Menyuntikkan widget melayang bergaya ceria kartun anak-anak --}}
<div class="relative" id="floating-step-container"> {{-- Pembungkus posisi relatif --}}
    
    {{-- Tombol Utama Toggle Menu Ceria --}}
    <button id="btn-toggle-steps" onclick="toggleFloatingStepsMenu()" class="w-12 h-12 rounded-full bg-orange-500 text-white shadow-2xl flex items-center justify-center cursor-pointer hover:scale-110 transition-all border-0 text-lg animate-pulse" aria-label="Buka daftar langkah"> {{-- Tombol melayang berdenyut --}}
        🎈 {{-- Balon ceria --}}
    </button> {{-- Penutup tombol --}}
    
    {{-- Panel Menu Mengembang Bergaya Kartun Bouncy --}}
    <div id="floating-steps-panel" class="absolute bottom-16 right-0 bg-card border-4 border-orange-300 rounded-3xl p-4 shadow-2xl w-72 hidden transition-all duration-200 transform scale-95 opacity-0 origin-bottom-right kids-doodle"> {{-- Panel doodle anak --}}
        <h5 class="font-black text-xs uppercase text-orange-600 border-b-2 border-orange-100 pb-2 mb-2">Ayo Pilih Langkah! ⭐</h5> {{-- Judul ramah anak --}}
        <div class="grid grid-cols-4 gap-2"> {{-- Grid 4 kolom --}}
            @foreach($steps as $index => $s) {{-- Looping langkah --}}
                <button onclick="selectStepAndClose({{ $index }})" id="floating-step-btn-{{ $index }}" class="w-11 h-11 rounded-xl border-2 border-orange-200 text-xs font-black flex items-center justify-center transition-all bg-amber-50 hover:bg-orange-500 hover:text-white cursor-pointer text-orange-500"> {{-- Tombol angka dengan bintang --}}
                    🌟{{ $s->id }} {{-- Angka langkah --}}
                </button> {{-- Penutup tombol --}}
            @endforeach {{-- Penutup loop --}}
        </div> {{-- Penutup grid --}}
    </div> {{-- Penutup panel --}}
    
</div> {{-- Penutup pembungkus --}}
@endsection {{-- Akhir seksi --}}
