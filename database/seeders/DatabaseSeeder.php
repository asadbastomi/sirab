<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'id' => Str::uuid(),
            'name' => 'Superadmin',
            'email' => 'super@gmail.com',
            'password' => Hash::make('123'),
            'status' => 'verified',
            'role' => 'superadmin',
        ]);

        DB::table('users')->insert([
            'id' => Str::uuid(),
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'status' => 'verified',
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'id' => Str::uuid(),
            'name' => 'User',
            'email' => 'user@gmail.com',
            'nik' => '6303070905970002',
            'password' => Hash::make('123'),
            'role' => 'user',
        ]);

        $rusun1Id = Str::uuid();
        $rusun2Id = Str::uuid();

        DB::table('rusuns')->insert([
            ['id' => $rusun1Id, 'nama' => 'Rusunawa Ganda Maghfirah', 'alamat' => 'Jl. Tembus Mantuil, Kelayan Sel., Kec. Banjarmasin Sel., Kota Banjarmasin, Kalimantan Selatan 70233'],
            ['id' => $rusun2Id, 'nama' => 'Rusunawa Kelayan', 'alamat' => 'Jalan mantuil selatan']
        ]);

        $blok1Id = Str::uuid();
        $blok2Id = Str::uuid();
        $blok3Id = Str::uuid();
        $blok4Id = Str::uuid();

        DB::table('bloks')->insert([
            ['id' => $blok1Id, 'rusun_id' => $rusun1Id, 'nama' => 'Blok A'],
            ['id' => $blok2Id, 'rusun_id' => $rusun1Id, 'nama' => 'Blok B'],
            ['id' => $blok3Id, 'rusun_id' => $rusun2Id, 'nama' => 'Gedung A'],
            ['id' => $blok4Id, 'rusun_id' => $rusun2Id, 'nama' => 'Gedung B']
        ]);

        DB::table('units')->insert([
            ['id' => Str::uuid(), 'blok_id' => $blok1Id, 'nomor' => '893712931', 'tipe' => '42', 'lantai' => 1, 'tarif' => 300000],
            ['id' => Str::uuid(), 'blok_id' => $blok1Id, 'nomor' => '893712932', 'tipe' => '42', 'lantai' => 2, 'tarif' => 250000],
            ['id' => Str::uuid(), 'blok_id' => $blok1Id, 'nomor' => '893712933', 'tipe' => '42', 'lantai' => 3, 'tarif' => 200000],
            ['id' => Str::uuid(), 'blok_id' => $blok2Id, 'nomor' => '893712934', 'tipe' => '42', 'lantai' => 1, 'tarif' => 300000],
            ['id' => Str::uuid(), 'blok_id' => $blok2Id, 'nomor' => '893712935', 'tipe' => '42', 'lantai' => 2, 'tarif' => 250000],
            ['id' => Str::uuid(), 'blok_id' => $blok2Id, 'nomor' => '893712936', 'tipe' => '42', 'lantai' => 3, 'tarif' => 200000],
            ['id' => Str::uuid(), 'blok_id' => $blok3Id, 'nomor' => '893712941', 'tipe' => '42', 'lantai' => 1, 'tarif' => 300000],
            ['id' => Str::uuid(), 'blok_id' => $blok3Id, 'nomor' => '893712942', 'tipe' => '42', 'lantai' => 2, 'tarif' => 250000],
            ['id' => Str::uuid(), 'blok_id' => $blok3Id, 'nomor' => '893712943', 'tipe' => '42', 'lantai' => 3, 'tarif' => 200000],
            ['id' => Str::uuid(), 'blok_id' => $blok4Id, 'nomor' => '893712954', 'tipe' => '42', 'lantai' => 1, 'tarif' => 300000],
            ['id' => Str::uuid(), 'blok_id' => $blok4Id, 'nomor' => '893712955', 'tipe' => '42', 'lantai' => 2, 'tarif' => 250000],
            ['id' => Str::uuid(), 'blok_id' => $blok4Id, 'nomor' => '893712956', 'tipe' => '42', 'lantai' => 3, 'tarif' => 200000]
        ]);
    }
}
