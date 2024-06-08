<?php

namespace Database\Seeders;

use App\Models\hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class hotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        hotel::create([
            'id'=>305123456,
            'jenis'=>'Visa',
            'name'=>'Ale',
            'total'=>1000000,
            'saldo'=>10000000

        ]);

        hotel::create([
            'id'=>305123457,
            'jenis'=>'Master_card',
            'name'=>'Leo',
            'total'=>1000000,
            'saldo'=>10000000

        ]);

        hotel::create([
            'id'=>305123458,
            'jenis'=>'Visa',
            'name'=>'Lea',
            'total'=>4000000,
            'saldo'=>40000000

        ]);
        hotel::create([
            'id'=>305123459,
            'jenis'=>'Visa',
            'name'=>'Satoru',
            'total'=>2000000,
            'saldo'=>20000000

        ]);
        hotel::create([
            'id'=>305123460,
            'jenis'=>'Master_card',
            'name'=>'Suguru',
            'total'=>6000000,
            'saldo'=>60000000

        ]);
    }
    }

