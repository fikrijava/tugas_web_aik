<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void // Metode run untuk mengeksekusi seluruh seeder database.
    { // Kurung kurawal pembuka metode run.
        $this->call([ // Memanggil array kelas seeder yang ingin dijalankan secara berurutan.
            PrayerSeeder::class, // Menjalankan PrayerSeeder untuk mengisi data panduan sholat, hadits, ayat, dll.
        ]); // Penutup pemanggilan array kelas seeder.

        User::factory()->create([ // Membuat 1 user testing bawaan Laravel.
            'name' => 'Test User', // Memberi nama 'Test User' pada user baru.
            'email' => 'test@example.com', // Memberi alamat email 'test@example.com'.
        ]); // Penutup pembuatan user.
    } // Kurung kurawal penutup metode run.
}
