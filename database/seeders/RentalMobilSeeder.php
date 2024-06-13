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
            'id'=>'3001101',
            'IDpembayaran'=>'C01',
            'IDPenyewaan'=>001,
            'jenisKartuKredit'=>"",
            'nominal'=> 1500000,
            'tanggalPembayaran'=>'2024-03-25',
            'statusPembayaran'=>'lunas'
        ]);
        RentalMobil::create([
            'id'=>'3303102',
            'IDpembayaran'=>'B01',
            'IDPenyewaan'=>002,
            'jenisKartuKredit'=>"",
            'nominal'=> 640000,
            'tanggalPembayaran'=>'2024-04-12',
            'statusPembayaran'=>'BelumLunas'
        ]);
        RentalMobil::create([
            'id'=>'3305103',
            'IDpembayaran'=>'K01',
            'IDPenyewaan'=>003,
            'jenisKartuKredit'=>"Visa",
            'nominal'=> 500000,
            'tanggalPembayaran'=>'2024-05-04',
            'statusPembayaran'=>'lunas'
        ]);
        RentalMobil::create([
            'id'=>'3001104',
            'IDpembayaran'=>'C02',
            'IDPenyewaan'=>004,
            'jenisKartuKredit'=>"",
            'nominal'=>1050000,
            'tanggalPembayaran'=>'2024-06-18',
            'statusPembayaran'=>'lunas'
        ]);
        RentalMobil::create([
            'id'=>'3303105',
            'IDpembayaran'=>'B02',
            'IDPenyewaan'=>005,
            'jenisKartuKredit'=>"",
            'nominal'=>2000000,
            'tanggalPembayaran'=>'2024-07-25',
            'statusPembayaran'=>'BelumLunas'
        ]);
    }
}
