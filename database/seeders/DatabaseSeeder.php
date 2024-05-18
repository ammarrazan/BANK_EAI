<?php

namespace Database\Seeders;

use App\Models\JenisNasabah;
use App\Models\JenisPembayaran;
use App\Models\JenisTabungan;
use App\Models\KartuKredit;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        JenisNasabah::create([
            "id" => 201 ,
            'nama'=>'Individu',
            'deskripsi'=> 'jenis nasabah yang dimiliki hanya perorangan'
        ]);
        JenisNasabah::create([
            "id" => 202 ,
            'nama'=>'Bisnis',
            'deskripsi'=> 'jenis nasabah yang dimiliki oleh perorangan/kelompok yang menggerakan sebuah bisnis'
        ]);
        JenisNasabah::create([
            "id" => 203 ,
            'nama'=>'organisasi',
            'deskripsi'=> 'jenis nasabah yang dimiliki oleh PT/CV'
        ]);
        
        JenisPembayaran::create([
            "id" => 3001 ,
            'nama'=>'cash',
            'deskripsi'=> 'Pembayaran langsung memberikan uang'
        ]);
        JenisPembayaran::create([
            "id" => 3002 ,
            'nama'=>'qris',
            'deskripsi'=> 'Pemabayran berupa scan QR code'
        ]);
        JenisPembayaran::create([
            "id" => 3303 ,
            'nama'=>'transfer',
            'deskripsi'=> 'Pembayaran memindahkan uang dari tabungan berbeda'
        ]);
        JenisPembayaran::create([
            "id" => 3304 ,
            'nama'=>'debit',
            'deskripsi'=> 'pembayaran menggunakan kartu '
        ]);
        JenisPembayaran::create([
            "id" => 3305 ,
            'nama'=>'krebit',
            'deskripsi'=> 'pembayaran menggunakan kartu kredit'
        ]);
        JenisTabungan::create([
            'id'=> 1402,
            'nama'=>'tahapan',
            'expired'=> 3,
            'deskripsi'=>'tabungan reguler dengan biaya admin Rp.15.000 tanpa limit perhari'
        ]);
        JenisTabungan::create([
            'id'=> 1403,
            'nama'=>'Xpresi',
            'expired'=> 4,
            'deskripsi'=>'tabungan reguler dengan biaya admin Rp10.000 dengan limit transfer 1jt per 5 hari'
        ]);
        JenisTabungan::create([
            'id'=> 1404,
            'nama'=>'jangka panjang',
            'expired'=> 5,
            'deskripsi'=>'tabungan untuk menabung dengan tujuan terntentu dengan biaya admin Rp15.000'
        ]);
        JenisTabungan::create([
            'id'=> 1405,
            'nama'=>'prioritas',
            'expired'=>0,
            'deskripsi'=>'tabungan untuk menyimpan uang diatas 5 milyar dengan biaya admin Rp20.000'
        ]);
        KartuKredit::create ([
            'id'=> 1234,
            'jenis'=>'Visa',
            'expired'=> 5
        ]);
        KartuKredit::create ([
            'id'=> 5689,
            'jenis'=>'Master card',
            'expired'=> 5
        ]);

    }
}
