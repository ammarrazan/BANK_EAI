<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\asuransi;
use Carbon\Carbon;

class asuransiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activeDate = Carbon::now()->toDateString();
        $expiredDate = Carbon::now()->addYears(4)->toDateString();

        asuransi::create([
            'id'=>201,
            'rekening'=>20211402201,
            'nama'=>'Ali',
            'jenis_nasabah'=>'individu',
            'jenis_tabungan'=>'tahapan',
            'kategori'=>'kendaraan',
            'jumlah'=>60,
            'active_date'=>$activeDate,
            'expired'=>$expiredDate,
            'saldo'=>900000,
            'tagihan'=>100000,
        ]);

        asuransi::create([
            'id'=>202,
            'rekening'=>20211403202,
            'nama'=>'sandra',
            'jenis_nasabah'=>'individu',
            'jenis_tabungan'=>'xpresi',
            'kategori'=>'furniture',
            'jumlah'=>60,
            'active_date'=>$activeDate,
            'expired'=>$expiredDate,
            'saldo'=>900000,
            'tagihan'=>200000,
        ]);

        asuransi::create([
            'id'=>203,
            'rekening'=>20211404203,
            'nama'=>'joseph',
            'jenis_nasabah'=>'individu',
            'jenis_tabungan'=>'jangka_panjang',
            'kategori'=>'kendaraan',
            'jumlah'=>50,
            'active_date'=>$activeDate,
            'expired'=>$expiredDate,
            'saldo'=>900000,
            'tagihan'=>150000,
        ]);

        asuransi::create([
            'id'=>204,
            'rekening'=>20211405204,
            'nama'=>'lisa',
            'jenis_nasabah'=>'individu',
            'jenis_tabungan'=>'prioritas',
            'kategori'=>'kesehatan',
            'jumlah'=>10,
            'active_date'=>$activeDate,
            'expired'=>$expiredDate,
            'saldo'=>900000,
            'tagihan'=>150000,
        ]);

        asuransi::create([
            'id'=>205,
            'rekening'=>20211405205,
            'nama'=>'bagas',
            'jenis_nasabah'=>'individu',
            'jenis_tabungan'=>'prioritas',
            'kategori'=>'kesehatan',
            'jumlah'=>10,
            'active_date'=>$activeDate,
            'expired'=>$expiredDate,
            'saldo'=>900000,
            'tagihan'=>100000,
        ]);

    }
 }
