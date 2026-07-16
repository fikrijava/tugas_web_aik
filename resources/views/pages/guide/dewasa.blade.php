@extends('layouts.app') {{-- Menggunakan master layout layouts/app.blade.php --}}

@section('title', 'Panduan Sholat Dewasa - Tuntunan Sholat Muhammadiyah') {{-- Mengisi title tab browser --}}

@section('content') {{-- Membuka seksi konten --}}
<div class="max-w-6xl mx-auto px-4 py-8"> {{-- Kontainer utama dengan batas lebar 6xl dan padding --}}

    <!-- Header Judul Halaman -->
    <div class="text-center mb-10"> {{-- Penataan teks ke tengah dengan margin bawah --}}
        <h1 class="text-3xl md:text-5xl font-bold font-cinzel text-foreground flex items-center justify-center gap-3"> {{-- Judul utama --}}
            <span>🕌</span> <span>Panduan Sholat Mode Dewasa</span> {{-- Teks judul formal --}}
        </h1> {{-- Penutup judul --}}
        <p class="text-muted-foreground text-sm md:text-base max-w-xl mx-auto mt-2"> {{-- Sub-deskripsi --}}
            Pelajari setiap rukun gerakan sholat secara tenang, khusyuk, dan tuma'ninah berdasarkan HPT Muhammadiyah. {{-- Deskripsi formal --}}
        </p> {{-- Penutup sub-deskripsi --}}
    </div> {{-- Penutup header --}}

    <!-- Navigasi Langkah Tab (1 sampai 12) -->
    <div class="flex flex-wrap justify-center gap-2 mb-10" id="steps-tabs-container"> {{-- Pembungkus tab tombol langkah --}}
        @foreach($steps as $index => $step) {{-- Loop langkah sholat dari database --}}
            <button id="step-tab-{{ $index }}" onclick="clickStepTab({{ $index }})" class="w-12 h-12 rounded-xl text-sm font-bold transition-all duration-300 border-2 cursor-pointer {{ $index === 0 ? 'bg-primary border-primary text-primary-foreground scale-110 shadow-lg' : 'border-border text-muted-foreground hover:border-primary hover:text-foreground' }}"> {{-- Tombol tab langkah sholat --}}
                {{ $step->id }} {{-- Angka langkah sholat --}}
            </button> {{-- Penutup tombol --}}
        @endforeach {{-- Penutup loop --}}
    </div> {{-- Penutup tab --}}

    <!-- Grid Konten Utama (Kiri & Kanan) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8"> {{-- Grid 12 kolom untuk tablet/layar besar --}}
        
        <!-- ========================================== -->
        <!-- ── PANEL KIRI: VISUAL, VIDEO & SINKRONISASI ── -->
        <!-- ========================================== -->
        <div class="lg:col-span-5 flex flex-col gap-6"> {{-- Sisi kiri mengambil 5 kolom porsi grid --}}
            
            <!-- 🎬 Pemutar Video Peraga -->
            <div class="rounded-3xl border border-border bg-card p-6 shadow-xl flex flex-col gap-4"> {{-- Card pemutar video peraga --}}
                <div class="flex items-center justify-between"> {{-- Baris judul video --}}
                    <span class="font-bold text-sm flex items-center gap-2 text-foreground"> {{-- Label --}}
                        <span>🎬</span> Video Peraga Sholat {{-- Teks judul video --}}
                    </span> {{-- Penutup label --}}
                    <span class="text-xs bg-primary/10 text-primary font-semibold px-3 py-1 rounded-full"> {{-- Penanda video --}}
                        Panduan Resmi {{-- Teks penanda --}}
                    </span> {{-- Penutup penanda --}}
                </div> {{-- Penutup baris --}}

                {{-- Pemutar Video HTML5 Lokal --}}
                <div class="relative rounded-2xl overflow-hidden bg-black aspect-video shadow-md"> {{-- Pembungkus video --}}
                    <video id="guide-local-video" src="{{ route('video.stream') }}" class="w-full h-full object-cover" controls playsinline preload="auto"></video> {{-- Elemen video yang memanggil stream Partial Content --}}
                </div> {{-- Penutup pembungkus video --}}
                
                <div class="flex items-center justify-between text-xs text-muted-foreground pt-1"> {{-- Keterangan sinkronisasi tanpa garis bawah --}}
                    <p>Langkah Aktif: <strong id="video-step-name" class="text-foreground">Niat</strong></p> {{-- Nama langkah saat ini --}}
                    <a id="video-youtube-link" href="#" target="_blank" class="text-primary hover:underline font-semibold decoration-none">Alternatif YouTube ↗</a> {{-- Link alternatif --}}
                </div> {{-- Penutup keterangan --}}
            </div> {{-- Penutup card video --}}

            <!-- 📸 Frame Gambar Gerakan Sholat Baru -->
            <div id="image-frame-card" class="rounded-3xl border border-border bg-card p-6 shadow-xl relative overflow-hidden transition-all duration-500"> {{-- Card pembungkus gambar gerakan --}}
                <div class="flex items-center justify-between mb-4"> {{-- Baris judul atas frame --}}
                    <span class="font-bold text-sm flex items-center gap-2 text-foreground"> {{-- Label --}}
                        <span>🖼️</span> Visual Gerakan Sholat {{-- Judul --}}
                    </span> {{-- Penutup label --}}
                    <span class="text-xs bg-primary/10 text-primary font-semibold px-3 py-1 rounded-full uppercase tracking-wider"> {{-- Badge mode --}}
                        Model Dewasa {{-- Teks badge --}}
                    </span> {{-- Penutup badge --}}
                </div> {{-- Penutup baris judul --}}
                
                {{-- Box Gambar Gerakan Sholat --}}
                <div class="relative w-full min-h-[400px] md:min-h-[480px] rounded-2xl bg-secondary/30 border border-border flex items-center justify-center overflow-hidden"> {{-- Box penampil gambar lebih tinggi --}}
                    <img id="prayer-movement-image" src="" alt="Gerakan Sholat" class="max-h-[400px] md:max-h-[480px] w-auto h-auto object-contain transition-opacity duration-300"> {{-- Gambar ditampilkan utuh (object-contain) tanpa terpotong --}}
                </div> {{-- Penutup box gambar --}}
            </div> {{-- Penutup card gambar --}}

            <!-- 📍 Posisi & Gerakan Fisik Deskripsi -->
            <div class="rounded-3xl border border-border bg-card p-6 shadow-xl"> {{-- Card posisi tubuh --}}
                <h4 class="font-bold text-foreground mb-3 flex items-center gap-2"> {{-- Judul --}}
                    <span>📍</span> Posisi & Gerakan Fisik {{-- Label judul --}}
                </h4> {{-- Penutup judul --}}
                <p id="guide-physical-position" class="text-sm text-muted-foreground leading-relaxed"></p> {{-- Teks posisi yang diisi dinamis --}}
            </div> {{-- Penutup card posisi --}}
        </div> {{-- Penutup panel kiri --}}

        <!-- ========================================== -->
        <!-- ── PANEL KANAN: BACAAN, TERJEMAHAN & AUDIO ── -->
        <!-- ========================================== -->
        <div class="lg:col-span-7 flex flex-col gap-6"> {{-- Sisi kanan mengambil 7 kolom porsi grid --}}
            
            <!-- Card Konten Utama Bacaan Sholat -->
            <div id="guide-content-card" class="relative rounded-3xl overflow-hidden shadow-2xl border border-accent/20 text-white p-6 md:p-8 transition-all duration-500"> {{-- Card bergradien yang warnanya disesuaikan per gerakan --}}
                <div class="relative z-10 space-y-6"> {{-- Pembungkus konten di atas gradien --}}
                    
                    <!-- Header Langkah Sholat -->
                    <div class="flex items-center justify-between border-b border-white/20 pb-4"> {{-- Baris atas --}}
                        <div class="flex items-center gap-3"> {{-- Info angka Arab dan judul --}}
                            <span id="arabic-step-num" class="text-4xl font-bold text-white/30 font-amiri">١</span> {{-- Angka Arab dinamis --}}
                            <div> {{-- Judul --}}
                                <p id="guide-step-counter-label" class="text-white/60 text-xs uppercase tracking-wider">Langkah 1 dari 12</p> {{-- Urutan --}}
                                <h3 id="guide-step-title" class="text-xl md:text-2xl font-black">Niat</h3> {{-- Judul gerakan --}}
                            </div> {{-- Penutup judul --}}
                        </div> {{-- Penutup info --}}
                        <span id="guide-step-subtitle" class="text-xs bg-white/20 text-white px-3 py-1 rounded-full font-medium">Niat dalam Hati</span> {{-- Subjudul gerakan --}}
                    </div> {{-- Penutup header --}}

                    <!-- Bacaan Arab -->
                    <div class="bg-white/10 rounded-2xl p-5 border border-white/10"> {{-- Card bacaan Arab --}}
                        <p class="text-xs font-bold uppercase tracking-widest text-amber-200 mb-3">Bacaan Arab</p> {{-- Judul sub-seksi --}}
                        <p id="guide-step-arabic" class="text-2xl md:text-3xl text-right leading-loose font-medium whitespace-pre-line font-amiri" dir="rtl"></p> {{-- Teks Arab besar --}}
                    </div> {{-- Penutup card bacaan --}}

                    <!-- Transliterasi Latin -->
                    <div class="bg-white/5 rounded-xl p-4 border border-white/5"> {{-- Card Latin --}}
                        <p class="text-xs font-bold uppercase tracking-widest text-amber-200 mb-2">Latin (Transliterasi)</p> {{-- Label --}}
                        <p id="guide-step-transliteration" class="text-sm italic text-white/90 leading-relaxed font-medium whitespace-pre-line"></p> {{-- Teks Latin --}}
                    </div> {{-- Penutup card Latin --}}

                    <!-- Terjemahan Bahasa Indonesia -->
                    <div class="bg-white/5 rounded-xl p-4 border border-white/5"> {{-- Card terjemahan --}}
                        <p class="text-xs font-bold uppercase tracking-widest text-white/60 mb-2">Terjemahan Indonesia</p> {{-- Label --}}
                        <p id="guide-step-translation" class="text-sm text-white/80 leading-relaxed whitespace-pre-line"></p> {{-- Teks arti terjemahan --}}
                    </div> {{-- Penutup card terjemahan --}}

                    <!-- Keterangan detail gerakan sholat -->
                    <div class="text-sm text-white/70 leading-relaxed border-t border-white/10 pt-4"> {{-- Box keterangan --}}
                        <p class="text-xs font-bold uppercase tracking-widest text-white/50 mb-2">Keterangan Syariat</p> {{-- Label --}}
                        <p id="guide-step-description" class="whitespace-pre-line"></p> {{-- Teks detail penjelasan syariat --}}
                    </div> {{-- Penutup box keterangan --}}
                    
                    {{-- Sumber rujukan --}}
                    <div class="text-xs text-white/50 pt-2 flex items-center gap-1.5 font-semibold flex-wrap"> {{-- Kontainer rujukan --}}
                        <span>📚</span><span class="text-white/40">Sumber Rujukan:</span><span id="guide-step-source" class="text-white">HPT Muhammadiyah</span> {{-- Sumber --}}
                    </div> {{-- Penutup kontainer rujukan --}}
                </div> {{-- Penutup pembungkus konten --}}
            </div> {{-- Penutup card utama --}}

            <!-- 🔊 Panel Pengontrol Audio Bacaan Doa -->
            <div class="rounded-3xl border border-border bg-card p-6 shadow-xl relative overflow-hidden"> {{-- Card kontrol audio --}}
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4"> {{-- Tata letak flex responsif --}}
                    <div class="flex items-center gap-3"> {{-- Info status audio --}}
                        <div class="w-12 h-12 rounded-2xl bg-primary/10 flex items-center justify-center text-xl">🔊</div> {{-- Ikon speaker --}}
                        <div> {{-- Status teks --}}
                            <h4 class="font-bold text-foreground">Suara Panduan Bacaan</h4> {{-- Judul panel --}}
                            <p id="audio-status-text" class="text-xs text-muted-foreground">Klik tombol putar untuk mendengarkan bacaan doa</p> {{-- Status --}}
                        </div> {{-- Penutup status teks --}}
                    </div> {{-- Penutup info --}}
                    
                    {{-- Tombol Play/Pause Audio --}}
                    <button id="btn-play-audio" onclick="toggleAudio()" class="w-12 h-12 rounded-full flex items-center justify-center text-white bg-primary hover:bg-primary/90 shadow-lg shadow-primary/30 transition-all cursor-pointer border-0"> {{-- Tombol play audio --}}
                        <svg id="audio-play-icon" class="w-5 h-5 translate-x-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg> {{-- Ikon segitiga play --}}
                        <svg id="audio-pause-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 24 24"><rect x="6" y="6" width="12" height="12" rx="1.5"/></svg> {{-- Ikon kotak pause --}}
                    </button> {{-- Penutup tombol --}}
                </div> {{-- Penutup tata letak flex --}}

                {{-- Pengaturan Bahasa & Kecepatan --}}
                <div class="grid grid-cols-2 gap-4 mt-6 pt-4 border-t border-border"> {{-- Grid 2 pilihan dropdown --}}
                    <div> {{-- Kolom bahasa --}}
                        <label class="block text-xs font-semibold text-muted-foreground mb-1.5 uppercase tracking-wider">Pilihan Bahasa</label> {{-- Label --}}
                        <select id="audio-type-select" onchange="changeAudioSetting()" class="w-full text-xs font-bold bg-secondary text-foreground border border-border rounded-xl px-3 py-2 outline-none focus:border-accent"> {{-- Dropdown --}}
                            <option value="arab">Bahasa Arab (Lafal)</option> {{-- Lafal Arab --}}
                            <option value="arti">Bahasa Indonesia (Arti)</option> {{-- Arti terjemahan --}}
                        </select> {{-- Penutup dropdown --}}
                    </div> {{-- Penutup kolom bahasa --}}
                    <div> {{-- Kolom kecepatan --}}
                        <label class="block text-xs font-semibold text-muted-foreground mb-1.5 uppercase tracking-wider">Kecepatan Bacaan</label> {{-- Label --}}
                        <select id="audio-speed-select" onchange="changeAudioSetting()" class="w-full text-xs font-bold bg-secondary text-foreground border border-border rounded-xl px-3 py-2 outline-none focus:border-accent"> {{-- Dropdown --}}
                            <option value="0.75">Lambat (0.75x)</option> {{-- 0.75x --}}
                            <option value="1" selected>Normal (1.0x)</option> {{-- 1.0x --}}
                            <option value="1.25">Sedang (1.25x)</option> {{-- 1.25x --}}
                            <option value="1.5">Cepat (1.5x)</option> {{-- 1.5x --}}
                        </select> {{-- Penutup dropdown --}}
                    </div> {{-- Penutup kolom kecepatan --}}
                </div> {{-- Penutup grid pengaturan --}}

                {{-- Visualizer Audio Animasi --}}
                <div id="audio-visualizer" class="hidden flex justify-center items-end gap-1.5 h-10 mt-5 overflow-hidden"> {{-- Batang visualizer membal --}}
                    <div class="w-1.5 bg-accent rounded-full animate-bounce h-2/5"></div> {{-- Batang 1 --}}
                    <div class="w-1.5 bg-accent rounded-full animate-bounce h-4/5" style="animation-delay: 0.1s"></div> {{-- Batang 2 --}}
                    <div class="w-1.5 bg-accent rounded-full animate-bounce h-3/5" style="animation-delay: 0.2s"></div> {{-- Batang 3 --}}
                    <div class="w-1.5 bg-accent rounded-full animate-bounce h-5/5" style="animation-delay: 0.3s"></div> {{-- Batang 4 --}}
                    <div class="w-1.5 bg-accent rounded-full animate-bounce h-3/5" style="animation-delay: 0.4s"></div> {{-- Batang 5 --}}
                    <div class="w-1.5 bg-accent rounded-full animate-bounce h-4/5" style="animation-delay: 0.5s"></div> {{-- Batang 6 --}}
                    <div class="w-1.5 bg-accent rounded-full animate-bounce h-2/5" style="animation-delay: 0.6s"></div> {{-- Batang 7 --}}
                </div> {{-- Penutup visualizer --}}
            </div> {{-- Penutup card audio --}}

        </div> {{-- Penutup panel kanan --}}

    </div> {{-- Penutup grid konten --}}

</div> {{-- Penutup kontainer utama --}}

<!-- ── JAVASCRIPT LOGIC PANDUAN DEWASA ── -->
<script> {{-- Penulisan Javascript local panduan dewasa --}}
    // Parsing data langkah-langkah sholat dari database ke format JSON array JS
    const steps = @json($steps); // Array langkah sholat.
    
    // State Halaman
    let activeStep = 0; // Index langkah aktif (0-11).
    let isPlaying = false; // Status pemutaran audio panduan.
    let audioType = 'arab'; // Tipe audio aktif ('arab' atau 'arti').
    let audioSpeed = 1; // Kecepatan putar audio.
    let currentAudio = null; // Instansi file audio yang sedang diputar.
    let isSyncingFromVideo = false; // Flag status untuk mendeteksi apakah update langkah dipicu oleh timeupdate video (menghindari loop tak terbatas).

    // Fungsi memuat detail data langkah sholat berdasarkan index terpilih
    function loadStepDetails(idx) { // Deklarasi fungsi loadStepDetails.
        activeStep = idx; // Mengupdate index langkah aktif global.
        const step = steps[idx]; // Mengambil objek data langkah terkait.

        // Memperbarui highlight tombol tab langkah aktif (1-12)
        steps.forEach((s, bidx) => { // Perulangan semua tombol tab.
            const btn = document.getElementById(`step-tab-${bidx}`); // Mendapatkan elemen tombol.
            if (btn) { // Memastikan elemen tombol terdeteksi.
                btn.className = `w-12 h-12 rounded-xl text-sm font-bold transition-all duration-300 border-2 cursor-pointer ${bidx === activeStep ? 'bg-primary border-primary text-primary-foreground scale-110 shadow-lg shadow-primary/20' : 'border-border text-muted-foreground hover:border-primary hover:text-foreground'}`; // Menerapkan highlight jika aktif, mereset jika tidak.
            } // Penutup cek.

            // Memperbarui highlight tombol di panel melayang langkah sholat
            const floatBtn = document.getElementById(`floating-step-btn-${bidx}`); // Mendapatkan elemen tombol melayang.
            if (floatBtn) { // Memastikan tombol melayang ada.
                if (bidx === activeStep) { // Jika langkah ini aktif.
                    floatBtn.className = "w-10 h-10 rounded-lg text-xs font-bold flex items-center justify-center transition-all bg-primary border-primary text-primary-foreground scale-110 shadow-lg shadow-primary/20 cursor-pointer border-0"; // Terapkan highlight aktif.
                } else { // Jika pasif.
                    floatBtn.className = "w-10 h-10 rounded-lg border border-border text-xs font-bold flex items-center justify-center transition-all hover:bg-primary hover:text-white cursor-pointer bg-secondary text-foreground"; // Reset ke pasif.
                } // Penutup cek aktif.
            } // Penutup cek tombol.
        }); // Penutup perulangan.

        // Memperbarui warna gradien panel utama (guide-content-card) menyesuaikan data langkah sholat dari database
        const card = document.getElementById('guide-content-card'); // Mendapatkan panel utama.
        if (card) { // Memastikan panel ada.
            card.className = `relative rounded-3xl overflow-hidden shadow-2xl border border-accent/20 bg-gradient-to-br ${step.gradient} text-white p-6 md:p-8 transition-all duration-500`; // Memasang kelas gradien.
        } // Penutup cek.

        // Memperbarui teks dinamis di halaman
        document.getElementById('arabic-step-num').textContent = step.num; // Angka arab.
        document.getElementById('guide-step-counter-label').textContent = `Langkah ${step.id} dari 12`; // Urutan langkah.
        document.getElementById('guide-step-title').textContent = step.title; // Judul langkah.
        document.getElementById('guide-step-subtitle').textContent = step.subtitle; // Subjudul.
        document.getElementById('guide-step-arabic').textContent = step.arabic; // Bacaan Arab.
        document.getElementById('guide-step-transliteration').textContent = step.transliteration; // Transliterasi Latin.
        document.getElementById('guide-step-translation').textContent = step.translation; // Terjemahan.
        document.getElementById('guide-step-description').textContent = step.description; // Deskripsi syariat.
        document.getElementById('guide-step-source').textContent = step.source; // Sumber referensi.
        document.getElementById('video-step-name').textContent = step.title; // Status video di bawah player.
        document.getElementById('guide-physical-position').textContent = step.position; // Deskripsi fisik tubuh.

        // Memperbarui tautan alternatif YouTube
        document.getElementById('video-youtube-link').href = `https://www.youtube.com/watch?v=7u7a2P1d5tM&t=${step.video_start}s`; // Mengubah tautan parameter detik.

        // Memperbarui status navigasi footer (disable button jika di ujung awal/akhir)
        // Memperbarui file gambar gerakan sholat yang baru
        const imgEl = document.getElementById('prayer-movement-image'); // Mendapatkan elemen tag gambar.
        if (imgEl) { // Memastikan elemen gambar terdeteksi.
            imgEl.style.opacity = 0; // Set transparan terlebih dahulu agar memicu transisi fade-in.
            setTimeout(() => { // Jeda 150 milidetik.
                imgEl.src = `/images/${step.image_path}`; // Mengubah path sumber gambar baru (langsung ke public/images/[nama_file.png]).
                imgEl.style.opacity = 1; // Tampilkan kembali gambar dengan animasi fade-in.
            }, 150); // Akhir jeda.
        } // Penutup cek gambar.
    } // Penutup fungsi loadStepDetails.

    // Aksi memicu pergantian langkah secara manual via tombol tab angka (1-12)
    function clickStepTab(idx) { // Deklarasi fungsi clickStepTab.
        stopAudio(); // Menghentikan audio yang sedang berjalan.
        loadStepDetails(idx); // Memuat konten teks langkah terpilih.
        
        // Memposisikan video ke detik awal gerakan sholat yang diklik
        const video = document.getElementById('guide-local-video'); // Mendapatkan pemutar video.
        if (video) { // Memastikan video ditemukan.
            isSyncingFromVideo = false; // Matikan bendera sinkronisasi video.
            // Memastikan video sudah termuat (readyState >= 1) sebelum melakukan seek untuk menghindari error
            if (video.readyState >= 1) { // Jika metadata video sudah siap.
                video.currentTime = steps[idx].video_start; // Set detik pemutar video ke detik mulai gerakan.
                video.play().catch(() => {}); // Mainkan video otomatis.
            } else { // Jika metadata video belum siap.
                const seekOnLoad = () => { // Fungsi callback sekali jalan.
                    video.currentTime = steps[idx].video_start; // Set detik pemutar video.
                    video.play().catch(() => {}); // Mainkan video.
                    video.removeEventListener('loadedmetadata', seekOnLoad); // Hapus event listener agar tidak terpicu berulang kali.
                }; // Penutup callback.
                video.addEventListener('loadedmetadata', seekOnLoad); // Dengarkan event saat metadata selesai dimuat.
            } // Penutup cek readyState.
        } // Penutup cek video.
    } // Penutup fungsi clickStepTab.

    // ========================================================
    // ── LOGIKA SINKRONISASI BERSILANGAN (BIDIRECTIONAL SYNC) ──
    // ========================================================
    function initVideoSync() { // Deklarasi fungsi initVideoSync.
        const video = document.getElementById('guide-local-video'); // Mendapatkan pemutar video.
        if (!video) return; // Mencegah error jika video tidak ada.

        // Event listener saat kursor pemutaran video berjalan (timeupdate)
        video.addEventListener('timeupdate', () => { // Terpicu beberapa kali per detik saat video berputar.
            const curTime = video.currentTime; // Mendapatkan posisi detik pemutaran video saat ini.
            let targetIdx = -1; // Inisialisasi index target langkah.

            // Mencari langkah sholat mana yang menaungi detik video saat ini
            for (let i = 0; i < steps.length; i++) { // Looping semua langkah.
                const start = steps[i].video_start; // Detik awal langkah ke-i.
                // Detik akhir langkah ke-i adalah detik awal langkah berikutnya, atau durasi maksimal video jika di langkah terakhir.
                const end = (i < steps.length - 1) ? steps[i + 1].video_start : video.duration || 9999;
                
                if (curTime >= start && curTime < end) { // Jika detik video masuk dalam rentang langkah ke-i.
                    targetIdx = i; // Tentukan target langkah sholat.
                    break; // Keluar dari looping pencarian.
                } // Penutup cek rentang.
            } // Penutup looping pencarian.

            // Jika langkah target ditemukan dan berbeda dengan langkah sholat yang sedang aktif di UI
            if (targetIdx !== -1 && targetIdx !== activeStep) { // Pengecekan perubahan langkah.
                // Perbarui detail halaman langkah di UI, tanpa mengalihkan posisi video (agar tidak terjadi loop memantul kembali)
                loadStepDetails(targetIdx); // Panggil loadStepDetails.
            } // Penutup cek.
        }); // Penutup event listener.
    } // Penutup fungsi initVideoSync.

    // ========================================================
    // ── SISTEM PEMUTAR AUDIO PANDUAN & SPEECH SYNTHESIS (TTS) ──
    // ========================================================
    function stopAudio() { // Deklarasi fungsi menghentikan audio.
        isPlaying = false; // Set status bermain ke false.
        if (currentAudio) { // Jika instansi file audio terdeteksi.
            currentAudio.pause(); // Hentikan pemutaran audio file.
            currentAudio = null; // Kosongkan instansi.
        } // Penutup cek.
        if (window.speechSynthesis) { // Jika browser mendukung Web Speech Synthesis.
            window.speechSynthesis.cancel(); // Batalkan pembacaan suara pembaca text.
        } // Penutup cek.
        
        // Kembalikan tampilan tombol dan sembunyikan visualizer
        document.getElementById('audio-play-icon').classList.remove('hidden'); // Tampilkan ikon play.
        document.getElementById('audio-pause-icon').classList.add('hidden'); // Sembunyikan ikon pause.
        document.getElementById('audio-visualizer').classList.add('hidden'); // Sembunyikan visualizer.
        document.getElementById('audio-status-text').textContent = "Klik tombol putar untuk mendengarkan bacaan doa"; // Reset status teks.
    } // Penutup fungsi stopAudio.

    function changeAudioSetting() { // Fungsi merespon perubahan dropdown pengaturan audio.
        audioType = document.getElementById('audio-type-select').value; // Ambil nilai tipe audio baru.
        audioSpeed = parseFloat(document.getElementById('audio-speed-select').value); // Ambil nilai kecepatan putar audio baru.
        stopAudio(); // Hentikan audio untuk mereset pemutaran berikutnya.
    } // Penutup fungsi.

    function toggleAudio() { // Fungsi tombol play/pause utama audio diklik.
        if (isPlaying) { // Jika audio sedang menyala.
            stopAudio(); // Hentikan audio.
            return; // Keluar dari fungsi.
        } // Penutup cek.

        isPlaying = true; // Set status berjalan.
        document.getElementById('audio-play-icon').classList.add('hidden'); // Sembunyikan ikon play.
        document.getElementById('audio-pause-icon').classList.remove('hidden'); // Tampilkan ikon pause.
        document.getElementById('audio-visualizer').classList.remove('hidden'); // Tampilkan visualizer.
        document.getElementById('audio-status-text').textContent = audioType === 'arab' ? "Melafalkan doa dalam bahasa Arab..." : "Membacakan arti terjemahan..."; // Update teks status.

        const step = steps[activeStep]; // Ambil data langkah aktif.
        const audioSrc = audioType === 'arab' ? step.audio_url : step.audio_translation_url; // Memilih file audio berdasarkan tipe.

        if (audioSrc) { // Jika file audio terdaftar di database.
            currentAudio = new Audio(audioSrc); // Buat objek Audio baru.
            currentAudio.playbackRate = audioSpeed; // Terapkan kecepatan putar.
            currentAudio.onended = () => stopAudio(); // Panggil fungsi stop jika audio selesai diputar.
            currentAudio.onerror = () => fallbackTTS(); // Panggil fallback text-to-speech jika terjadi error memuat file.
            currentAudio.play().catch(() => fallbackTTS()); // Putar audio (panggil fallback jika diblokir browser).
        } else { // Jika tidak ada file audio.
            fallbackTTS(); // Langsung gunakan Text-to-Speech browser.
        } // Penutup cek sumber audio.
    } // Penutup fungsi toggleAudio.

    // Fungsi Fallback Text-to-Speech (TTS) jika file audio absen/error
    function fallbackTTS() { // Deklarasi fungsi fallbackTTS.
        const step = steps[activeStep]; // Ambil data langkah aktif.
        const textToSpeak = audioType === 'arab' ? step.arabic : step.translation; // Ambil teks Arab atau arti.
        const lang = audioType === 'arab' ? 'ar-SA' : 'id-ID'; // Pilih aksen/bahasa pembacaan.
        
        if (!window.speechSynthesis) { // Jika browser tidak mendukung TTS sama sekali.
            stopAudio(); // Hentikan audio.
            return; // Keluar.
        } // Penutup cek.

        // Bersihkan teks dari baris baru dan penulisan nomor ayat kurung kurawal agar pelafalan bersih
        const cleanText = textToSpeak.replace(/\n/g, " ").replace(/\([\d]+\)/g, ""); // Proses regex pembersihan teks.
        const utterance = new SpeechSynthesisUtterance(cleanText); // Buat objek utterance.
        utterance.lang = lang; // Atur bahasa pembacaan.
        utterance.rate = audioSpeed * (lang === 'ar-SA' ? 0.75 : 0.95); // Sedikit memperlambat pembacaan Arab agar pelafalan terdengar lebih tajam dan jelas.
        
        const voices = window.speechSynthesis.getVoices(); // Ambil list suara mesin pembaca di perangkat.
        const voice = voices.find(v => v.lang.startsWith(lang.split('-')[0])); // Cari suara pembaca yang cocok dengan bahasa target.
        if (voice) { // Jika suara pembaca beraksen lokal terdeteksi.
            utterance.voice = voice; // Terapkan suara tersebut.
        } // Penutup cek suara.

        utterance.onend = () => stopAudio(); // Hentikan status bermain jika pembacaan teks selesai.
        utterance.onerror = () => stopAudio(); // Hentikan jika terjadi error di tengah jalan.
        window.speechSynthesis.speak(utterance); // Jalankan perintah pembacaan teks bersuara.
    } // Penutup fungsi fallbackTTS.

    // Fungsi mengaktifkan/menonaktifkan (toggle) panel menu mengembang langkah sholat
    function toggleFloatingStepsMenu() { // Deklarasi fungsi toggleFloatingStepsMenu.
        const panel = document.getElementById('floating-steps-panel'); // Mendapatkan panel melayang.
        if (!panel) return; // Mencegah error jika elemen absen.
        
        if (panel.classList.contains('hidden')) { // Jika menu sedang disembunyikan.
            panel.classList.remove('hidden'); // Munculkan elemen di DOM.
            setTimeout(() => { // Jeda mikro agar transisi CSS berjalan lancar.
                panel.classList.remove('scale-95', 'opacity-0'); // Hilangkan efek ciut dan pudar.
                panel.classList.add('scale-100', 'opacity-100'); // Terapkan skala penuh dan solid.
            }, 15); // Penutup jeda.
        } else { // Jika menu sedang terbuka.
            panel.classList.add('scale-95', 'opacity-0'); // Ciutkan dan pudarkan menu.
            panel.classList.remove('scale-100', 'opacity-100'); // Hapus kelas solid.
            setTimeout(() => { // Jeda menunggu transisi CSS selesai (200 milidetik).
                panel.classList.add('hidden'); // Sembunyikan elemen kembali dari DOM.
            }, 200); // Akhir jeda.
        } // Penutup blok percabangan.
    } // Penutup fungsi toggleFloatingStepsMenu.

    // Fungsi navigasi langkah sholat melalui menu mengembang
    function selectStepAndClose(idx) { // Deklarasi fungsi selectStepAndClose.
        clickStepTab(idx); // Jalankan fungsi perpindahan langkah utama.
        toggleFloatingStepsMenu(); // Tutup panel menu mengembang setelah dipilih.
    } // Penutup fungsi.

    // Memuat inisialisasi awal saat halaman selesai dirender
    window.addEventListener('DOMContentLoaded', () => { // Event listener pemuatan DOM.
        loadStepDetails(0); // Memuat gerakan pertama (Niat - index 0).
        initVideoSync(); // Mengaktifkan sinkronisasi dua arah video sholat.

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
</script> {{-- Penutup tag script --}}
@endsection {{-- Menutup seksi konten --}}

@section('floating_widgets') {{-- Menyuntikkan widget melayang khusus langkah sholat dewasa --}}
<div class="relative" id="floating-step-container"> {{-- Pembungkus posisi relatif --}}
    
    {{-- Tombol Utama Toggle Menu --}}
    <button id="btn-toggle-steps" onclick="toggleFloatingStepsMenu()" class="w-12 h-12 rounded-full bg-accent text-accent-foreground shadow-2xl flex items-center justify-center cursor-pointer hover:scale-110 transition-all border-0 text-lg" aria-label="Buka navigasi langkah"> {{-- Tombol bundar --}}
        📋 {{-- Ikon daftar --}}
    </button> {{-- Penutup tombol --}}
    
    {{-- Panel Menu Mengembang (Expanding Panel) --}}
    <div id="floating-steps-panel" class="absolute bottom-16 right-0 bg-card border border-border rounded-2xl p-4 shadow-2xl w-64 hidden transition-all duration-200 transform scale-95 opacity-0 origin-bottom-right"> {{-- Panel yang mengembang melayang --}}
        <h5 class="font-bold text-xs uppercase text-muted-foreground border-b border-border pb-2 mb-2 font-cinzel tracking-wider">Langkah Sholat</h5> {{-- Judul panel --}}
        <div class="grid grid-cols-4 gap-2"> {{-- Grid 4 kolom untuk tombol angka 1-12 --}}
            @foreach($steps as $index => $s) {{-- Looping langkah sholat --}}
                <button onclick="selectStepAndClose({{ $index }})" id="floating-step-btn-{{ $index }}" class="w-10 h-10 rounded-lg border border-border text-xs font-bold flex items-center justify-center transition-all hover:bg-primary hover:text-white cursor-pointer bg-secondary text-foreground"> {{-- Tombol angka langkah --}}
                    {{ $s->id }} {{-- Nomor langkah --}}
                </button> {{-- Penutup tombol --}}
            @endforeach {{-- Penutup loop --}}
        </div> {{-- Penutup grid --}}
    </div> {{-- Penutup panel menu --}}
    
</div> {{-- Penutup pembungkus --}}
@endsection {{-- Akhir seksi --}}
