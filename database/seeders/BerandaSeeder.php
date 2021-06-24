<?php

namespace Database\Seeders;

use App\Models\Beranda;
use Illuminate\Database\Seeder;

class BerandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Beranda::create([
            'headMaster_name' => 'Nama Kepala Sekolah',
            'headMaster_image' => 'unknown.png',
            'headMaster_desc' => 'Ini bagian Deskripsi',
            'event_name' => 'Judul Acara',
            'event_image' => 'music.png',
            'event_desc' => 'Ini bagian Deskripsi',
        ]);
    }
}
