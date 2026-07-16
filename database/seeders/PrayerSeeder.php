<?php // Tag pembuka tag PHP untuk memulai penulisan file seeder.

namespace Database\Seeders; // Menentukan namespace agar file seeder ini berada dalam folder Database\Seeders.

use App\Models\PrayerStep; // Mengimpor model PrayerStep agar bisa menyimpan data langkah sholat ke database.
use App\Models\QuranVerse; // Mengimpor model QuranVerse agar bisa menyimpan data ayat Quran ke database.
use App\Models\Hadith; // Mengimpor model Hadith agar bisa menyimpan data hadits ke database.
use App\Models\PrayerTime; // Mengimpor model PrayerTime agar bisa menyimpan data waktu sholat ke database.
use App\Models\SyaratSah; // Mengimpor model SyaratSah agar bisa menyimpan data syarat sah sholat ke database.
use Illuminate\Database\Seeder; // Mengimpor base class Seeder dari framework Laravel.

class PrayerSeeder extends Seeder // Mendefinisikan class PrayerSeeder yang mewarisi sifat Seeder Laravel.
{ // Kurung kurawal pembuka class seeder.
    /**
     * Jalankan database seeds.
     */
    public function run(): void // Metode run yang dipanggil secara otomatis saat menjalankan command db:seed.
    { // Kurung kurawal pembuka metode run.
        
        // 1. Data Langkah-Langkah Sholat (Prayer Steps)
        $prayerSteps = [ // Mendefinisikan array multi-dimensi untuk menampung data langkah sholat.
            [ // Baris data langkah ke-1
                'title' => "Niat", // Judul langkah sholat.
                'subtitle' => "Niat dalam Hati", // Deskripsi singkat/sub-judul.
                'arabic' => "النِّيَّةُ فِي الْقَلْبِ", // Teks bacaan Arab.
                'transliteration' => "An-niyyatu fil qalb", // Transliterasi Latin dari bacaan Arab.
                'translation' => "Niat itu letaknya di dalam hati, tidak diucapkan", // Terjemahan bahasa Indonesia.
                'description' => "Niat sholat dilakukan di dalam hati secara tulus ikhlas karena Allah SWT, berbarengan dengan Takbiratul Ihram. Menurut Muhammadiyah (HPT), melafalkan niat dengan lisan seperti 'Ushalli...' tidak memiliki landasan dalil yang shahih, sehingga cukup diniatkan dalam hati. Niat merupakan rukun batin yang menentukan sah atau tidaknya sholat.", // Penjelasan syariat gerakan.
                'position' => "Berdiri tegak menghadap kiblat, kedua tangan lurus di samping badan sebelum takbir", // Deskripsi posisi fisik tubuh.
                'gradient' => "from-violet-600 to-indigo-700", // CSS gradient khusus background mode dewasa.
                'num' => "١", // Angka Arab representatif.
                'source' => "Himpunan Putusan Tarjih (HPT) Muhammadiyah", // Referensi hukum/hadits.
                'video_start' => 8, // Detik awal kemunculan gerakan ini di dalam video.
                'audio_url' => "", // URL file audio bacaan Arab (dikosongkan jika tidak ada).
                'audio_translation_url' => "", // URL file audio terjemahan (dikosongkan jika tidak ada).
                'image_path' => "sebelum takbiratul ihram.png" // Nama file gambar baru untuk gerakan ini.
            ], // Penutup baris data langkah ke-1.
            [ // Baris data langkah ke-2
                'title' => "Takbiratul Ihram", // Judul langkah sholat.
                'subtitle' => "Membuka Sholat", // Deskripsi singkat/sub-judul.
                'arabic' => "اللَّهُ أَكْبَرُ", // Teks bacaan Arab.
                'transliteration' => "Allaahu Akbar", // Transliterasi Latin.
                'translation' => "Allah Maha Besar.", // Terjemahan bahasa Indonesia.
                'description' => "Mengangkat kedua belah tangan tegak sejajar dengan bahu atau daun telinga, dengan menghadapkan kedua telapak tangan ke arah kiblat serta merenggangkan jari-rinya, seraya mengucapkan 'Allaahu Akbar'. Setelah itu, meletakkan tangan kanan di atas tangan kiri di atas dada (bersedekap). Ini adalah pembuka sholat yang wajib dilakukan.", // Keterangan syariat.
                'position' => "Berdiri tegak, angkat kedua tangan sejajar telinga/bahu menghadap kiblat, kemudian bersedekap di dada", // Posisi fisik tubuh.
                'gradient' => "from-blue-600 to-cyan-600", // CSS gradient.
                'num' => "٢", // Angka Arab.
                'source' => "H.R. Bukhari no. 735, Muslim no. 391 — HPT Muhammadiyah", // Sumber dalil.
                'video_start' => 22, // Detik awal video.
                'audio_url' => "/audio/step-02-arab.mp3", // File audio Arab.
                'audio_translation_url' => "/audio/step-02-arti.mp3", // File audio terjemahan.
                'image_path' => "takbiratul ihram & i'tidal.png" // Nama file gambar baru.
            ], // Penutup baris data langkah ke-2.
            [ // Baris data langkah ke-3
                'title' => "Doa Iftitah", // Judul langkah.
                'subtitle' => "Doa Pembuka Sholat", // Sub-judul.
                'arabic' => "اللَّهُمَّ بَاعِدْ بَيْنِي وَبَيْنَ خَطَايَايَ كَمَا بَاعَدْتَ بَيْنَ الْمَشْرِقِ وَالْمَغْرِبِ، اللَّهُمَّ نَقِّنِي مِنَ الْخَطَايَا كَمَا يُنَقَّى الثَّوْبُ الْأَبْيَضُ مِنَ الدَّنَسِ، اللَّهُمَّ اغْسِلْنِي مِنْ خَطَايَايَ بِالْمَاءِ وَالثَّلْجِ وَالْبَرَدِ", // Doa Arab iftitah HPT Muhammadiyah.
                'transliteration' => "Allaahumma baa'id bainii wa baina khotoyaaya kamaa baa'adta bainal masyriqi wal maghrib. Allaahumma naqqinii minal khotoyaa kamaa yunaqqots tsaubu al-abyadu minad danas. Allaahummaghsilnii min khotoyaaya bil maa'i wats tsalji wal barad.", // Transliterasi Latin.
                'translation' => "Ya Allah, jauhkanlah antara aku dan kesalahan-kesalahanku, sebagaimana Engkau menjauhkan antara timur dan barat. Ya Allah, bersihkanlah aku dari kesalahan-kesalahanku sebagaimana pakaian putih dibersihkan dari kotoran. Ya Allah, cucilah aku dari kesalahan-kesalahanku dengan air, salju, dan embun beku.", // Terjemahan lengkap.
                'description' => "Dibaca setelah Takbiratul Ihram dan sebelum Al-Fatihah, dalam posisi berdiri bersedekap. Muhammadiyah menggunakan doa iftitah riwayat Abu Hurairah ini karena sanadnya shahih (Bukhari-Muslim). Bacaan ini merupakan permohonan ampunan sebelum memulai sholat.", // Keterangan tata cara.
                'position' => "Berdiri tegak, tangan bersedekap di atas dada, pandangan ke tempat sujud", // Keterangan posisi fisik tubuh.
                'gradient' => "from-teal-600 to-emerald-600", // CSS gradient.
                'num' => "٣", // Angka Arab.
                'source' => "H.R. Bukhari no. 744, Muslim no. 598 — HPT Muhammadiyah", // Sumber dalil.
                'video_start' => 35, // Detik awal video.
                'audio_url' => "/audio/step-03-arab.mp3", // File audio Arab.
                'audio_translation_url' => "/audio/step-03-arti.mp3", // File audio terjemahan.
                'image_path' => "bersedekap.png" // File gambar baru.
            ], // Penutup baris data langkah ke-3.
            [ // Baris data langkah ke-4
                'title' => "Al-Fatihah", // Judul langkah.
                'subtitle' => "Rukun Qauliy Sholat", // Sub-judul.
                'arabic' => "بِسۡمِ ٱللَّهِ ٱلرَّحۡمَٰنِ ٱلرَّحِيمِ ﴿١﴾ ٱلۡحَمۡdُ لِلَّهِ رَبِّ ٱلۡcَٰلَمِينَ ﴿٢﴾ ٱلرَّحۡمَٰنِ ٱلرَّحِيمِ ﴿٣﴾ مَٰلِكِ يَوۡمِ ٱلدِّينِ ﴿٤﴾ إِيَّاكَ نَعۡbُدُ وَإِيَّاكَ نَسۡتَعِينَ ﴿٥﴾ ٱهۡدِنَا ٱلصِّرَٰطَ ٱلۡمُسۡتَقِيمَ ﴿٦﴾ صِرَٰطَ ٱلَّذِينَ أَنۡcَمۡتَ عَلَيۡهِمۡ غَيۡرِ ٱلۡمَغۡdُوبِ عَلَيۡeِمۡ وَلَا ٱلضَّآلِّينَ ﴿٧﴾", // Surah Al-Fatihah lengkap.
                'transliteration' => "Bismillaahir rahmaanir rahiim (1). Alhamdulillaahi rabbil 'aalamiin (2). Ar-rahmaanir rahiim (3). Maaliki yaumid diin (4). Iyyaaka na'budu wa iyyaaka nasta'iin (5). Ihdinash shiraathal mustaqiim (6). Shiraathal ladziina an'amta 'alaihim, ghairil maghdhuubi 'alaihim wa ladh-dhaalliin (7). Aamiin.", // Transliterasi Latin.
                'translation' => "Dengan nama Allah Yang Maha Pengasih, Maha Penyayang (1). Segala puji bagi Allah, Tuhan seluruh alam (2). Yang Maha Pengasih, Maha Penyayang (3). Pemilik hari pembalasan (4). Hanya kepada Engkaulah kami menyembah dan hanya kepada Engkaulah kami mohon pertolongan (5). Tunjukilah kami jalan yang lurus (6). Yaitu jalan orang-orang yang telah Engkau beri nikmat, bukan jalan mereka yang dimurkai dan bukan pula jalan mereka yang sesat (7). Aamiin.", // Terjemahan.
                'description' => "Membaca Al-Fatihah adalah rukun sholat (fardhu 'ain) pada setiap rakaat, wajib dibaca oleh imam, makmum, maupun yang sholat sendiri. Menurut Muhammadiyah, Basmalah termasuk bagian Al-Fatihah dan dibaca dengan sirr (lirih). Setelah selesai, disunahkan membaca 'Aamiin' dengan suara keras pada sholat jahriyyah.", // Keterangan syariat.
                'position' => "Berdiri tegak, tangan bersedekap di dada, membaca dengan tartil (pelan dan jelas)", // Keterangan posisi fisik.
                'gradient' => "from-amber-500 to-orange-600", // CSS gradient.
                'num' => "٤", // Angka Arab.
                'source' => "QS. Al-Fatihah 1:1-7 — H.R. Bukhari no. 756, Muslim no. 394", // Sumber dalil.
                'video_start' => 85, // Detik awal video.
                'audio_url' => "/audio/step-04-arab.mp3", // File audio Arab.
                'audio_translation_url' => "/audio/step-04-arti.mp3", // File audio terjemahan.
                'image_path' => "bersedekap.png" // File gambar baru.
            ], // Penutup baris data langkah ke-4.
            [ // Baris data langkah ke-5
                'title' => "Surah Setelah Al-Fatihah", // Judul langkah.
                'subtitle' => "Surah Al-Ikhlas (Contoh)", // Sub-judul.
                'arabic' => "بِسۡمِ ٱللَّهِ ٱلرَّحۡمَٰنِ ٱلرَّحِيمِ قُلۡ هُوَ ٱللَّهُ أَحَدٌ ﴿١﴾ ٱللَّهُ ٱلصَّمَدُ ﴿٢﴾ لَمۡ يَلِدۡ وَلَمۡ يُولَدۡ ﴿٣﴾ وَلَمۡ يَكُن لَّهُۥ كُفُوًا أَحَدٌۢ ﴿٤﴾", // Surah Al-Ikhlas lengkap.
                'transliteration' => "Bismillaahir rahmaanir rahiim. Qul huwallaahu ahad (1). Allaahush-shamad (2). Lam yalid wa lam yuulad (3). Wa lam yakun lahuu kufuwan ahad (4).", // Transliterasi Latin.
                'translation' => "Dengan nama Allah Yang Maha Pengasih, Maha Penyayang. Katakanlah (Muhammad), 'Dialah Allah, Yang Maha Esa (1). Allah tempat meminta segala sesuatu (2). Dia tidak beranak dan tidak pula diperanakkan (3). Dan tidak ada sesuatu pun yang setara dengan Dia (4).'", // Terjemahan.
                'description' => "Membaca surah setelah Al-Fatihah hukumnya sunnah mu'akkadah pada dua rakaat pertama. Disunahkan membaca surah yang berbeda pada setiap rakaat. Contoh di atas menggunakan Surah Al-Ikhlas. Boleh juga membaca surah lainnya seperti Al-Kafirun, An-Nasr, Al-Masad, dll.", // Keterangan syariat.
                'position' => "Berdiri tegak, tangan bersedekap, langsung dibaca setelah Al-Fatihah selesai", // Keterangan posisi fisik.
                'gradient' => "from-rose-500 to-pink-600", // CSS gradient.
                'num' => "٥", // Angka Arab.
                'source' => "QS. Al-Ikhlas 112:1-4 — H.R. Bukhari no. 759, Muslim no. 451", // Sumber dalil.
                'video_start' => 120, // Detik awal video.
                'audio_url' => "/audio/step-05-arab.mp3", // File audio Arab.
                'audio_translation_url' => "/audio/step-05-arti.mp3", // File audio terjemahan.
                'image_path' => "bersedekap.png" // File gambar baru.
            ], // Penutup baris data langkah ke-5.
            [ // Baris data langkah ke-6
                'title' => "Ruku'", // Judul langkah.
                'subtitle' => "Membungkukkan Badan", // Sub-judul.
                'arabic' => "سُبْحَانَكَ اللَّهُمَّ رَبَّنَا وَبِحَمْدِكَ، اللَّهُمَّ اغْفِرْ لِي", // Doa ruku' HPT Muhammadiyah.
                'transliteration' => "Subhaanaka Allaahumma rabbanaa wa bihamdika, Allaahummaghfir lii. (Dibaca 3x)", // Transliterasi Latin.
                'translation' => "Maha Suci Engkau, ya Allah, Tuhan kami, dan dengan memuji-Mu, ya Allah, ampunilah aku. (Dibaca 3x)", // Terjemahan.
                'description' => "Setelah membaca surah, bertakbir 'Allaahu Akbar' sambil mengangkat tangan sejajar telinga/bahu, lalu membungkukkan badan hingga punggung dan kepala lurus sejajar (posisi 90°). Kedua tangan menggenggam lutut dengan jari direnggangkan. Harus tuma'ninah (berhenti sejenak dengan tenang). Membaca doa ruku' minimal 3 kali.", // Keterangan syariat.
                'position' => "Badan membungkuk 90°, punggung lurus sejajar kepala, kedua tangan menggenggam lutut", // Keterangan posisi fisik.
                'gradient' => "from-fuchsia-600 to-purple-600", // CSS gradient.
                'num' => "٦", // Angka Arab.
                'source' => "H.R. Bukhari no. 794, Muslim no. 484 — Tuntunan Tarjih Muhammadiyah", // Sumber dalil.
                'video_start' => 165, // Detik awal video.
                'audio_url' => "/audio/step-06-arab.mp3", // File audio Arab.
                'audio_translation_url' => "/audio/step-06-arti.mp3", // File audio terjemahan.
                'image_path' => "ruku'.png" // File gambar baru.
            ], // Penutup baris data langkah ke-6.
            [ // Baris data langkah ke-7
                'title' => "I'tidal", // Judul langkah.
                'subtitle' => "Bangkit dari Ruku'", // Sub-judul.
                'arabic' => "سَمِعَ اللَّهُ لِمَنْ حَمِدَهُ\n\nرَبَّنَا وَلَكَ الْحَمْدُ حَمْدًا كَثِيرًا طَيِّبًا مُبَارَكًا فِيهِ", // Bacaan i'tidal.
                'transliteration' => "Sami'allaahu liman hamidah. Rabbanaa wa lakal hamdu, hamdan katsiiran thayyiban mubaarokan fiih.", // Transliterasi Latin.
                'translation' => "Allah mendengar orang yang memuji-Nya. (Diucapkan saat bangkit dari ruku')\n\nWahai Tuhan kami, bagi-Mu segala puji, pujian yang banyak, yang baik, dan yang penuh berkah. (Dibaca setelah berdiri sempurna)", // Terjemahan.
                'description' => "Bangkit dari ruku' sambil mengucapkan 'Sami'allaahu liman hamidah' dan mengangkat tangan sejajar telinga/bahu. Setelah berdiri lurus sempurna, membaca 'Rabbanaa wa lakal hamdu...'. Posisi tangan setelah i'tidal: boleh bersedekap kembali atau dilepas di samping badan. Harus tuma'ninah.", // Keterangan syariat.
                'position' => "Berdiri tegak sempurna, angkat tangan saat bangkit, kemudian tuma'ninah (diam sejenak)", // Keterangan posisi fisik.
                'gradient' => "from-indigo-500 to-violet-600", // CSS gradient.
                'num' => "٧", // Angka Arab.
                'source' => "H.R. Bukhari no. 795, Muslim no. 392 — HPT Muhammadiyah", // Sumber dalil.
                'video_start' => 195, // Detik awal video.
                'audio_url' => "/audio/step-07-arab.mp3", // File audio Arab.
                'audio_translation_url' => "/audio/step-07-arti.mp3", // File audio terjemahan.
                'image_path' => "takbiratul ihram & i'tidal.png" // File gambar baru.
            ], // Penutup baris data langkah ke-7.
            [ // Baris data langkah ke-8
                'title' => "Sujud", // Judul langkah.
                'subtitle' => "Posisi Dekat dengan Allah", // Sub-judul.
                'arabic' => "سُبْحَانَكَ اللَّهُمَّ رَبَّنَا وَبِحَمْدِكَ، اللَّهُمَّ اغْفِرْ لِي", // Doa sujud HPT.
                'transliteration' => "Subhaanaka Allaahumma rabbanaa wa bihamdika, Allaahummaghfir lii. (Dibaca 3x)", // Transliterasi Latin.
                'translation' => "Maha Suci Engkau, ya Allah, Tuhan kami, dan dengan memuji-Mu, ya Allah, ampunilah aku. (Dibaca 3x)", // Terjemahan.
                'description' => "Dari i'tidal, bertakbir 'Allaahu Akbar' lalu turun sujud. Sujud dilakukan dengan menempelkan tujuh anggota badan ke lantai: (1) Dahi dan hidung, (2) Telapak tangan kanan, (3) Telapak tangan kiri, (4) Lutut kanan, (5) Lutut kiri, (6) Ujung jari kaki kanan, (7) Ujung jari kaki kiri. Kedua siku tidak menempel lantai. Baca doa sujud minimal 3 kali dengan tuma'ninah.", // Keterangan syariat.
                'position' => "7 anggota badan menempel lantai: dahi+hidung, 2 telapak tangan, 2 lutut, ujung 2 jari kaki", // Keterangan posisi fisik.
                'gradient' => "from-cyan-600 to-blue-600", // CSS gradient.
                'num' => "٨", // Angka Arab.
                'source' => "H.R. Bukhari no. 794, Muslim no. 484 — Tuntunan Tarjih Muhammadiyah", // Sumber dalil.
                'video_start' => 225, // Detik awal video.
                'audio_url' => "/audio/step-08-arab.mp3", // File audio Arab.
                'audio_translation_url' => "/audio/step-08-arti.mp3", // File audio terjemahan.
                'image_path' => "sujud.png" // File gambar baru.
            ], // Penutup baris data langkah ke-8.
            [ // Baris data langkah ke-9
                'title' => "Duduk Antara Dua Sujud", // Judul langkah.
                'subtitle' => "Duduk Iftirasy", // Sub-judul.
                'arabic' => "اللَّهُمَّ اغْفِرْ لِي وَارْحَمْنِي وَاجْبُرْنِي وَاهْدِنِي وَارْزُقْنِي", // Doa duduk HPT.
                'transliteration' => "Allaahummaghfir lii, warhamnii, wajburnii, wahdinii, warzuqnii.", // Transliterasi Latin.
                'translation' => "Ya Allah, ampunilah aku, kasihanilah aku, cukupkanlah kekuranganku, berilah aku petunjuk, dan berilah aku rezeki.", // Terjemahan.
                'description' => "Setelah sujud pertama, bangkit dengan bertakbir 'Allaahu Akbar' dan duduk iftirasy: menduduki kaki kiri yang dihamparkan, menegakkan kaki kanan dengan ujung jari menghadap kiblat. Tangan kanan dan kiri diletakkan di atas paha masing-masing. Membaca doa ini dengan tuma'ninah, kemudian sujud kembali untuk sujud kedua.", // Keterangan syariat.
                'position' => "Duduk di atas kaki kiri (iftirasy), kaki kanan tegak dengan ujung jari menghadap kiblat", // Keterangan posisi fisik.
                'gradient' => "from-orange-500 to-amber-600", // CSS gradient.
                'num' => "٩", // Angka Arab.
                'source' => "H.R. Abu Dawud no. 850, Ibnu Majah no. 898 — HPT Muhammadiyah", // Sumber dalil.
                'video_start' => 260, // Detik awal video.
                'audio_url' => "/audio/step-09-arab.mp3", // File audio Arab.
                'audio_translation_url' => "/audio/step-09-arti.mp3", // File audio terjemahan.
                'image_path' => "duduk diantara 2 sujud.png" // File gambar baru.
            ], // Penutup baris data langkah ke-9.
            [ // Baris data langkah ke-10
                'title' => "Tasyahhud Awal", // Judul langkah.
                'subtitle' => "Duduk Rakaat Kedua", // Sub-judul.
                'arabic' => "التَّحِيَّاتُ لِلَّهِ وَالصَّلَوَاتُ وَالطَّيِّبَاتُ، السَّلَامُ عَلَيْكَ أَيُّهَا النَّبِيُّ وَرَحْمَةُ اللَّهِ وَبَرَكَاتُهُ، السَّلَامُ عَلَيْنَا وَعَلَى عِبَادِ اللَّهِ الصَّالِحِينَ، أَشْهَدُ أَنْ لَا إِلَهَ إِلَّا اللَّهُ وَأَشْهَدُ أَنْ مُحَمَّدًا عَبْدُهُ وَرَسُولُهُ\n\nاللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ", // Bacaan tasyahhud awal.
                'transliteration' => "At-tahiyyaatu lillaahi wash-shalawaaatu wath-thayyibaat. As-salaamu 'alaika ayyuhan-nabiyyu wa rahmatullaahi wa barakaatuh. As-salaamu 'alainaa wa 'alaa 'ibaadillaahish-shaalihiin. Asyhadu an laa ilaaha illallaah, wa asyhadu anna Muhammadan 'abduhu wa rasuuluh. Allaahumma shalli 'alaa Muhammad wa 'alaa aali Muhammad.", // Transliterasi Latin.
                'translation' => "Segala penghormatan, sholawat, dan kebaikan hanya milik Allah. Semoga keselamatan, rahmat Allah, dan berkah-Nya terlimpah kepadamu wahai Nabi. Semoga keselamatan juga terlimpah kepada kami dan kepada hamba-hamba Allah yang shalih. Aku bersaksi bahwa tidak ada tuhan selain Allah, dan aku bersaksi bahwa Muhammad adalah hamba dan utusan-Nya. Ya Allah, limpahkanlah sholawat kepada Muhammad dan keluarga Muhammad.", // Terjemahan.
                'description' => "Dilakukan pada akhir rakaat kedua (pada sholat yang rakaatnya lebih dari dua). Duduk iftirasy. Tangan kanan diletakkan di atas paha kanan dengan menggenggam jari kelingking, jari manis, dan jari tengah, sementara jari telunjuk menunjuk ke depan dan ibu jari melengkung (atau membuat lingkaran). Pandangan ke arah telunjuk.", // Keterangan syariat.
                'position' => "Duduk iftirasy: duduk di atas kaki kiri, kaki kanan tegak, telunjuk kanan menunjuk", // Keterangan posisi fisik.
                'gradient' => "from-purple-600 to-fuchsia-600", // CSS gradient.
                'num' => "١٠", // Angka Arab.
                'source' => "H.R. Bukhari no. 831, Muslim no. 402 — HPT Muhammadiyah", // Sumber dalil.
                'video_start' => 295, // Detik awal video.
                'audio_url' => "/audio/step-10-arab.mp3", // File audio Arab.
                'audio_translation_url' => "/audio/step-10-arti.mp3", // File audio terjemahan.
                'image_path' => "tasyahud awal & akhir.png" // File gambar baru.
            ], // Penutup baris data langkah ke-10.
            [ // Baris data langkah ke-11
                'title' => "Tasyahhud Akhir", // Judul langkah.
                'subtitle' => "Duduk Rakaat Terakhir", // Sub-judul.
                'arabic' => "التَّحِيَّاتُ لِلَّهِ وَالصَّلَوَاتُ وَالطَّيِّبَاتُ، السَّلَامُ عَلَيْكَ أَيُّهَا النَّبِيُّ وَرَحْمَةُ اللَّهِ وَبَرَكَاتُهُ، السَّلَامُ عَلَيْنَا وَعَلَى عِبَادِ اللَّهِ الصَّالِحِينَ، أَشْهَدُ أَنْ لَا إِلَهَ إِلَّا اللَّهُ وَأَشْهَدُ أَنْ مُحَمَّdًا عَبْدُهُ وَرَسُولُهُ\n\nاللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّدٍ، كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ، وَبَارِكْ عَلَى مُحَمَّدٍ وَعَلَى آلِ مُحَمَّdٍ، كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ، فِي الْعَالَمِينَ إِنَّكَ حَمِيدٌ مَجِيدٌ\n\nاللَّهُمَّ إِنِّي أَعُوذُ بِكَ مِنْ عَذَابِ جَهَنَّمَ، وَمِنْ عَذَابِ الْقَبْرِ، وَمِنْ فِتْنَةِ الْمَحْيَا وَالْمَمَاتِ، وَمِنْ شَرِّ فِتْنَةِ الْمَسِيحِ الدَّجَّالِ", // Bacaan tasyahhud akhir HPT.
                'transliteration' => "At-tahiyyaatu lillaahi wash-shalawaatu wath-thayyibaat. As-salaamu 'alaika ayyuhan-nabiyyu wa rahmatullaahi wa barakaatuh... Allaahumma shalli 'alaa Muhammad... fil 'aalamiina innaka hamiidum majiid. Allaahumma innii a'uudzubika min 'adzaabi jahannama...", // Transliterasi Latin.
                'translation' => "Segala penghormatan, sholawat, dan kebaikan hanya milik Allah... Ya Allah, sesungguhnya aku berlindung kepada-Mu dari siksa neraka Jahanam, dari siksa kubur, dari fitnah kehidupan dan kematian, serta dari kejahatan fitnah Dajjal.", // Terjemahan.
                'description' => "Dilakukan pada rakaat terakhir sholat. Posisi duduk tawarruk: pantat menyentuh lantai, kaki kiri dikeluarkan/diselipkan ke arah kanan di bawah betis kaki kanan, kaki kanan tegak. Baca tasyahhud lengkap + shalawat Ibrahim yang lengkap + doa perlindungan dari 4 fitnah. Ini adalah rukun sholat yang wajib.", // Keterangan syariat.
                'position' => "Duduk tawarruk: pantat ke lantai, kaki kiri diselip ke kanan, kaki kanan tegak, telunjuk menunjuk", // Keterangan posisi fisik.
                'gradient' => "from-amber-600 to-yellow-500", // CSS gradient.
                'num' => "١١", // Angka Arab.
                'source' => "H.R. Bukhari no. 831, Muslim no. 402, Abu Dawud no. 983 — HPT Muhammadiyah", // Sumber dalil.
                'video_start' => 335, // Detik awal video.
                'audio_url' => "/audio/step-11-arab.mp3", // File audio Arab.
                'audio_translation_url' => "/audio/step-11-arti.mp3", // File audio terjemahan.
                'image_path' => "tasyahud awal & akhir.png" // File gambar baru.
            ], // Penutup baris data langkah ke-11.
            [ // Baris data langkah ke-12
                'title' => "Salam", // Judul langkah.
                'subtitle' => "Penutup Sholat", // Sub-judul.
                'arabic' => "اَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللَّهِ\n\nاَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللَّهِ", // Bacaan salam.
                'transliteration' => "As-salaamu 'alaikum wa rahmatullaah. (kanan)\n\nAs-salaamu 'alaikum wa rahmatullaah. (kiri)", // Transliterasi Latin.
                'translation' => "Semoga keselamatan, rahmat Allah, dan berkah-Nya terlimpah kepada kalian. (menoleh ke kanan)\n\nSemoga keselamatan dan rahmat Allah terlimpah kepada kalian. (menoleh ke kiri)", // Terjemahan.
                'description' => "Salam adalah rukun penutup sholat yang wajib dilakukan. Menoleh ke kanan hingga pipi kanan terlihat dari belakang sambil mengucapkan salam pertama (dengan tambahan 'wa barakaatuh'), kemudian menoleh ke kiri hingga pipi kiri terlihat dari belakang sambil mengucapkan salam kedua (tanpa 'wa barakaatuh'). Sholat resmi berakhir.", // Keterangan syariat.
                'position' => "Dari posisi tasyahhud akhir, menoleh maksimal ke kanan, lalu menoleh maksimal ke kiri", // Keterangan posisi fisik.
                'gradient' => "from-rose-600 to-pink-600", // CSS gradient.
                'num' => "١٢", // Angka Arab.
                'source' => "H.R. Abu Dawud no. 996-997, Ahmad no. 3796 — HPT Muhammadiyah", // Sumber dalil.
                'video_start' => 375, // Detik awal video.
                'audio_url' => "/audio/step-12-arab.mp3", // File audio Arab.
                'audio_translation_url' => "/audio/step-12-arti.mp3", // File audio terjemahan.
                'image_path' => "salam.png" // File gambar baru.
            ] // Penutup baris data langkah ke-12.
        ]; // Penutup definisi array data langkah sholat.

        // 2. Data Ayat Al-Quran (Quran Verses)
        $quranVerses = [ // Array penampung data ayat Quran.
            [ // Ayat ke-1
                'arabic' => "وَأَقِيمُوا الصَّلَاةَ وَآتُوا الزَّكَاةَ وَارْكَعُوا مَعَ الرَّاكِعِينَ", // Redaksi ayat Arab.
                'translation' => "\"Dan laksanakanlah sholat, tunaikanlah zakat, dan rukuklah beserta orang-orang yang rukuk.\"", // Terjemahan.
                'surah' => "QS. Al-Baqarah", // Nama surat.
                'ayat' => "2:43", // Nomor ayat.
            ], // Penutup ayat ke-1.
            [ // Ayat ke-2
                'arabic' => "اتْلُ مَا أُوحِيَ إِلَيْكَ مِنَ الْكِتَابِ وَأَقِمِ الصَّلَاةَ ۖ إِنَّ الصَّلَاةَ تَنْهَىٰ عَنِ الْفَحْشَاءِ وَالْمُنكَرِ", // Redaksi ayat Arab.
                'translation' => "\"...dan laksanakanlah sholat. Sesungguhnya sholat itu mencegah dari (perbuatan) keji dan mungkar.\"", // Terjemahan.
                'surah' => "QS. Al-Ankabut", // Nama surat.
                'ayat' => "29:45", // Nomor ayat.
            ], // Penutup ayat ke-2.
            [ // Ayat ke-3
                'arabic' => "إِنَّ الصَّلَاةَ كَانَتْ عَلَى الْمُؤْمِنِينَ كِتَابًا مَّوْقutًا", // Redaksi ayat Arab.
                'translation' => "\"Sungguh, sholat itu adalah kewajiban yang ditentukan waktunya atas orang-orang yang beriman.\"", // Terjemahan.
                'surah' => "QS. An-Nisa", // Nama surat.
                'ayat' => "4:103", // Nomor ayat.
            ], // Penutup ayat ke-3.
            [ // Ayat ke-4
                'arabic' => "حَافِظُوا عَلَى الصَّلَوَاتِ وَالصَّلَاةِ الْوُسْطَىٰ وَقُومُوا لِلَّهِ قَانِتِينَ", // Redaksi ayat Arab.
                'translation' => "\"Peliharalah semua sholat dan sholat wustha (Ashar). Dan laksanakanlah (sholat) karena Allah dengan khusyuk.\"", // Terjemahan.
                'surah' => "QS. Al-Baqarah", // Nama surat.
                'ayat' => "2:238", // Nomor ayat.
            ], // Penutup ayat ke-4.
        ]; // Penutup array ayat Quran.

        // 3. Data Hadits Keutamaan Sholat (Hadiths)
        $hadiths = [ // Array penampung data hadits.
            [ // Hadits ke-1
                'arabic' => "الصَّلَاةُ عِمَادُ الدِّينِ، فَمَنْ أَقَامَهَا فَقَدْ أَقَامَ الدِّينَ، وَمَنْ هَدَمَهَا فَقَدْ هَدَمَ الدِّينَ", // Redaksi hadits Arab.
                'translation' => "\"Sholat adalah tiang agama. Barangsiapa mendirikannya, maka ia telah menegakkan agama. Barangsiapa meninggalkannya, maka ia telah merobohkan agama.\"", // Terjemahan.
                'source' => "HR. Al-Baihaqi", // Kitab hadits.
                'narrator' => "Dari Umar bin Khattab RA", // Sahabat perawi.
                'grade' => "Shahih", // Kredibilitas/derajat hadits.
            ], // Penutup hadits ke-1.
            [ // Hadits ke-2
                'arabic' => "أَوَّلُ مَا يُحَاسَبُ بِهِ الْعَبْدُ يَوْمَ الْقِيَامَةِ مِنْ عَمَلِهِ صَلَاتُهُ، فَإِنْ صَلُحَتْ فَقَدْ أَفْلَحَ وَأَنْجَحَ", // Redaksi hadits Arab.
                'translation' => "\"Amalan yang pertama kali dihisab dari seorang hamba pada Hari Kiamat adalah sholatnya. Jika sholatnya baik, maka ia beruntung dan selamat.\"", // Terjemahan.
                'source' => "HR. Abu Dawud & At-Tirmidzi", // Kitab hadits.
                'narrator' => "Dari Abu Hurairah RA", // Sahabat perawi.
                'grade' => "Shahih", // Derajat.
            ], // Penutup hadits ke-2.
            [ // Hadits ke-3
                'arabic' => "صَلُّوا كَمَا رَأَيْتُمُونِي أُصَلِّي", // Redaksi hadits Arab.
                'translation' => "\"Sholatlah kalian sebagaimana kalian melihatku sholat.\"", // Terjemahan.
                'source' => "HR. Bukhari no. 631", // Kitab hadits.
                'narrator' => "Dari Malik bin Al-Huwairits RA", // Perawi.
                'grade' => "Shahih", // Derajat.
            ], // Penutup hadits ke-3.
            [ // Hadits ke-4
                'arabic' => "أَقْرَبُ مَا يَكُونُ الْعَبْدُ مِنْ رَبِّهِ وَهُوَ سَاجِدٌ، فَأَكْثِرُوا الدُّعَاءَ", // Redaksi hadits Arab.
                'translation' => "\"Keadaan paling dekat antara seorang hamba dengan Tuhannya adalah ketika ia sujud, maka perbanyaklah berdoa saat itu.\"", // Terjemahan.
                'source' => "HR. Muslim no. 482", // Kitab hadits.
                'narrator' => "Dari Abu Hurairah RA", // Perawi.
                'grade' => "Shahih", // Derajat.
            ], // Penutup hadits ke-4.
        ]; // Penutup array hadits.

        // 4. Data Waktu Sholat (Prayer Times)
        $prayerTimes = [ // Array penampung data waktu sholat fardhu.
            ['name' => "Subuh", 'arabic' => "الصُّبْح", 'time' => "Fajar — Sebelum Matahari Terbit", 'rakaat' => "2 Rakaat", 'icon' => "🌙", 'color' => "from-indigo-800 to-blue-900"], // Data Subuh.
            ['name' => "Dzuhur", 'arabic' => "الظُّهْر", 'time' => "Tengah Hari — Bayangan Seukuran Benda", 'rakaat' => "4 Rakaat", 'icon' => "☀️", 'color' => "from-amber-500 to-orange-600"], // Data Dzuhur.
            ['name' => "Ashar", 'arabic' => "الْعَصْر", 'time' => "Sore — Bayangan 2x Ukuran Benda", 'rakaat' => "4 Rakaat", 'icon' => "🌤️", 'color' => "from-orange-600 to-red-700"], // Data Ashar.
            ['name' => "Maghrib", 'arabic' => "الْمَغْرِب", 'time' => "Setelah Matahari Terbenam", 'rakaat' => "3 Rakaat", 'icon' => "🌅", 'color' => "from-rose-700 to-purple-800"], // Data Maghrib.
            ['name' => "Isya", 'arabic' => "الْعِشَاء", 'time' => "Malam — Hingga Fajar Shadiq", 'rakaat' => "4 Rakaat", 'icon' => "⭐", 'color' => "from-purple-800 to-indigo-900"], // Data Isya.
        ]; // Penutup array waktu sholat.

        // 5. Data Syarat Sah Sholat (Syarat Sah)
        $syarat = [ // Array penampung data syarat sah sholat.
            ['title' => "Islam", 'description' => "Pelaku sholat haruslah seorang Muslim", 'icon' => "☪️"], // Islam.
            ['title' => "Baligh & Berakal", 'description' => "Telah mencapai usia dewasa dan dalam keadaan sadar", 'icon' => "📖"], // Baligh & Berakal.
            ['title' => "Suci dari Hadats", 'description' => "Bersih dari hadats kecil (berwudhu) dan hadats besar (mandi wajib)", 'icon' => "💧"], // Suci dari hadats.
            ['title' => "Suci Pakaian & Tempat", 'description' => "Pakaian, badan, dan tempat sholat bebas dari najis", 'icon' => "✨"], // Suci Pakaian & Tempat.
            ['title' => "Menutup Aurat", 'description' => "Laki-laki: pusar hingga lutut. Perempuan: seluruh tubuh kecuali wajah & telapak tangan", 'icon' => "🧕"], // Menutup Aurat.
            ['title' => "Menghadap Kiblat", 'description' => "Menghadap Ka'bah di Masjidil Haram, Makkah Al-Mukarramah", 'icon' => "🕌"], // Menghadap Kiblat.
            ['title' => "Masuk Waktu Sholat", 'description' => "Sholat dilaksanakan setelah masuk waktunya masing-masing", 'icon' => "⏰"], // Masuk Waktu Sholat.
            ['title' => "Mengetahui Cara Sholat", 'description' => "Mengetahui tata cara dan rukun sholat yang benar", 'icon' => "📋"], // Mengetahui Cara Sholat.
        ]; // Penutup array syarat sah sholat.

        // 6. Menyimpan Seluruh Data ke Database
        foreach ($prayerSteps as $step) { // Perulangan data langkah sholat.
            PrayerStep::create($step); // Membuat data baris baru di tabel prayer_steps.
        } // Akhir perulangan langkah sholat.

        foreach ($quranVerses as $verse) { // Perulangan data ayat Quran.
            QuranVerse::create($verse); // Membuat data baris baru di tabel quran_verses.
        } // Akhir perulangan ayat Quran.

        foreach ($hadiths as $hadith) { // Perulangan data hadits.
            Hadith::create($hadith); // Membuat data baris baru di tabel hadiths.
        } // Akhir perulangan hadits.

        foreach ($prayerTimes as $pt) { // Perulangan data waktu sholat.
            PrayerTime::create($pt); // Membuat data baris baru di tabel prayer_times.
        } // Akhir perulangan waktu sholat.

        foreach ($syarat as $s) { // Perulangan data syarat sah sholat.
            SyaratSah::create($s); // Membuat data baris baru di tabel syarat_sahs.
        } // Akhir perulangan syarat sah sholat.
    } // Kurung kurawal penutup metode run.
} // Kurung kurawal penutup class seeder.
