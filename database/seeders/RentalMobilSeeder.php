<?php

namespace Database\Seeders;

use App\Models\RentalMobil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentalMobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RentalMobil::create([
            'id'=>3001101,
            'rekening'=>1012021402,
            'jenisKartuKredit'=>"",
            'jenisTabungan'=>'Tahapan',
            'nominal'=> 1500000,
            'nama'=>'Ale',
            'saldo'=>1500000000
        ]);
        RentalMobil::create([
            'id'=>3303102,
            'rekening'=>1022021402,
            'jenisKartuKredit'=>"",
            'jenisTabungan'=>'Tahapan',
            'nominal'=> 640000,
            'nama'=>'Leo',
            'saldo'=>1500000000
        ]);
        RentalMobil::create([
            'id'=>3305103,
            'rekening'=>1032021404,
            'jenisKartuKredit'=>"Visa",
            'jenisTabungan'=>'JangkaPanjang',
            'nominal'=> 500000,
            'nama'=>'Lea',
            'saldo'=>1500000000
        ]);
        RentalMobil::create([
            'id'=>3001104,
            'rekening'=>1042021402,
            'jenisKartuKredit'=>"",
            'jenisTabungan'=>'Tahapan',
            'nominal'=>1050000,
            'nama'=>'Satoru',
            'saldo'=>1500000000
        ]);
        RentalMobil::create([
            'id'=>3303105,
            'rekening'=>1052021403,
            'jenisKartuKredit'=>"",
            'jenisTabungan'=>'Xpresi',
            'nominal'=>2000000,
            'nama'=>'Suguru',
            'saldo'=>1500000000
        ]);
    }
}
