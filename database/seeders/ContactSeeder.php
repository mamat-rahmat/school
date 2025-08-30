<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@contoh.com',
            'subject' => 'Formulir Kontak Percobaan',
            'message' => 'Ini adalah pesan percobaan untuk memverifikasi fungsi formulir kontak.'
        ]);

        Contact::create([
            'name' => 'Siti Rahayu',
            'email' => 'siti@contoh.com',
            'subject' => 'Pertanyaan tentang Sekolah',
            'message' => 'Saya ingin mengetahui lebih lanjut tentang program sekolah dan proses penerimaan.'
        ]);
    }
}
