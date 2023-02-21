<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Aspirasi;
use App\Models\Input_aspirasi;
use App\Models\Kategori;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Siswa::create([
            'nis' => '20209151',
            'kelas' => 'XII TEL 10'
        ]);
        Siswa::create([
            'nis' => '20209252',
            'kelas' => 'XII TEL 11'
        ]);
        Siswa::create([
            'nis' => '20209353',
            'kelas' => 'XII TEL 12'
        ]);
        Kategori::create([
            'ket_kategori' => 'Fasilitas'
        ]);
        Kategori::create([
            'ket_kategori' => 'Keamanan'
        ]);
        Kategori::create([
            'ket_kategori' => 'Kebersihan'
        ]);
        // Input_Aspirasi::create([
        //     'nis' => '20209151',
        //     'id_kategori' => '1',
        //     'bukti' => 'haha',
        //     'lokasi' => 'Smk Telkom',
        //     'ket' => 'Ac Mati'
        // ]);
        // Aspirasi::create([
        //     'id_aspirasi' => '1',
        //     'id_kategori' => '1',
        //     'status' => 'Menunggu'
        // ]);
        Admin::create([
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);
    }
}
