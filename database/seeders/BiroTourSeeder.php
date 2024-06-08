<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BiroTour;
use Carbon\Carbon;
class BiroTourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ActiveDate = Carbon::now()->toDateString();
        $ExpiredDate = Carbon::now()->addYears(5)->toDateString();

        BiroTour::create([
            "id" => 1112021402,
            'nama_guider'=>'Chadkowi',
            'profile'=> 'Seorang pemandu wisata berpengalaman dengan kecintaan pada petualangan alam yang menawarkan pengalaman mendaki gunung dan menjelajahi hutan yang luas.',
            'saldo'=> 2000000,
            'fee'=> 200000,
            'no_guider'=> 111,
            'active_date'=> $ActiveDate,
            'expired_date'=> $ExpiredDate,
        ]);
        BiroTour::create([
            "id" => 1122021403,
            'nama_guider'=>'Prabroro',
            'profile'=> 'Seorang pemandu wisata yang ahli dalam memperkenalkan budaya lokal dan sejarah di setiap destinasi.',
            'saldo'=> 4000000,
            'fee'=> 400000,
            'no_guider'=> 112,
            'active_date'=> $ActiveDate,
            'expired_date'=> $ExpiredDate,
        ]);
        BiroTour::create([
            "id" => 1132021402,
            'nama_guider'=>'Anisa',
            'profile'=> 'Seorang pemandu wisata yang mengutamakan pengalaman mewah dan layanan berkualitas tinggi, memastikan setiap perjalanan menjadi pengalaman yang istimewa.',
            'saldo'=> 5000000,
            'fee'=> 500000,
            'no_guider'=> 113,
            'active_date'=> $ActiveDate,
            'expired_date'=> $ExpiredDate,
        ]);
        BiroTour::create([
            "id" => 1142021402 ,
            'nama_guider'=>'Janggar',
            'profile'=> 'Seorang pemandu wisata yang ramah keluarga dengan keahlian dalam merencanakan liburan yang menyenangkan bagi seluruh anggota keluarga.',
            'saldo'=> 4500000,
            'fee'=> 450000,
            'no_guider'=> 114,
            'active_date'=> $ActiveDate,
            'expired_date'=> $ExpiredDate,
        ]);
        BiroTour::create([
            "id" => 1152021405,
            'nama_guider'=>'Mahfud DM',
            'profile'=> 'mampu menjelaskan seluk beluk tempat-tempat yang dikunjungi saat perjalanan wisata.',
            'saldo'=> 3000000,
            'fee'=> 300000,
            'no_guider'=> 115,
            'active_date'=> $ActiveDate,
            'expired_date'=> $ExpiredDate,
        ]);
    }
}
