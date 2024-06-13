<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\asuransi;


class asuransiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        asuransi::create([
            'id'=>201,
            'rekening'=>20211402201,
            'nama'=>'Ali',
            'kategori'=>'kendaraan',
            'jumlah'=>60,
            'tagihan'=>100000,
        ]);

        asuransi::create([
            'id'=>202,
            'rekening'=>20211403202,
            'nama'=>'sandra',
            'kategori'=>'furniture',
            'jumlah'=>60,
            'tagihan'=>200000,
        ]);

        asuransi::create([
            'id'=>203,
            'rekening'=>20211404203,
            'nama'=>'joseph',
            'kategori'=>'kendaraan',
            'jumlah'=>50,
            'tagihan'=>150000,
        ]);

        asuransi::create([
            'id'=>204,
            'rekening'=>20211405204,
            'nama'=>'lisa',
            'kategori'=>'kesehatan',
            'jumlah'=>10,
            'tagihan'=>150000,
        ]);

        asuransi::create([
            'id'=>205,
            'rekening'=>20211405205,
            'nama'=>'bagas',
            'kategori'=>'kesehatan',
            'jumlah'=>10,
            'tagihan'=>100000,
        ]);

    }
 }
