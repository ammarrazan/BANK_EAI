<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ObjWisataModel;
use Carbon\Carbon;
class ObjWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activeDate = Carbon::now()->toDateString();
        $expiredDate = Carbon::now()->addYears(4)->toDateString();

        ObjWisataModel::create([
            'id' => '2021403001',
            'id_wisata' => 'OP01',
            'nama_objek' => 'Orchid Forest Cikole',
            'harga_tiket' => 40000,
            'saldo' => 100000,
            'active_date' => $activeDate,
            'expired_date' => $expiredDate,
        ]);
        ObjWisataModel::create([
            'id' => '2021403002',
            'id_wisata' => 'OP02',
            'nama_objek' => 'Taman Impian Jaya Ancol',
            'harga_tiket' => 25000,
            'saldo' => 100000,
            'active_date' => $activeDate,
            'expired_date' => $expiredDate,
        ]);
        ObjWisataModel::create([
            'id' => '2021403003',
            'id_wisata' => 'OP03',
            'nama_objek' => 'Candi Borobudur',
            'harga_tiket' => 50000,
            'saldo' => 100000,
            'active_date' => $activeDate,
            'expired_date' => $expiredDate,
        ]);
        ObjWisataModel::create([
            'id' => '2021403004',
            'id_wisata' => 'OP04',
            'nama_objek' => 'Uluwatu Temple',
            'harga_tiket' => 50000,
            'saldo' => 100000,
            'active_date' => $activeDate,
            'expired_date' => $expiredDate,
        ]);
        ObjWisataModel::create([
            'id' => '2021403005',
            'id_wisata' => 'OP05',
            'nama_objek' => 'Surabaya North Quay',
            'harga_tiket' => 50000,
            'saldo' => 100000,
            'active_date' => $activeDate,
            'expired_date' => $expiredDate,
        ]);
    }
}
