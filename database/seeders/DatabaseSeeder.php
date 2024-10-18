<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anggota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Anggota::create([
            'nama' => 'Sopian Aji',
            'hp' => '085123456781',
        ]);

        Anggota::create([
            'nama' => 'Husni Faqih',
            'hp' => '085123456782',
        ]);

        Anggota::create([
            'nama' => 'Rouysati',
            'hp' => '085123456783',
        ]);
    }
}