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
            'BillID'=>123456,
            'ReservationID'=>111,
            'jenisKartuKredit'=>'Visa',
            'name'=>'Ale',
            'total'=>1000000,
            'paymentStatus'=>'paid'

        ]);

        hotel::create([
            'id'=>305123457,
            'BillID'=>123457,
            'ReservationID'=>222,
            'jenisKartuKredit'=>'Master_card',
            'name'=>'Leo',
            'total'=>1000000,
            'paymentStatus'=>'paid'

        ]);

        hotel::create([
            'id'=>305123458,
            'BillID'=>123458,
            'ReservationID'=>333,
            'jenisKartuKredit'=>'Visa',
            'name'=>'Lea',
            'total'=>4000000,
            'paymentStatus'=>'paid'

        ]);
        hotel::create([
            'id'=>305123459,
            'BillID'=>123459,
            'ReservationID'=>444,
            'jenisKartuKredit'=>'Visa',
            'name'=>'Satoru',
            'total'=>2000000,
            'paymentStatus'=>'paid'

        ]);
        hotel::create([
            'id'=>305123460,
            'BillID'=>123460,
            'ReservationID'=>555,
            'jenisKartuKredit'=>'Master_card',
            'name'=>'Suguru',
            'total'=>6000000,
            'paymentStatus'=>'paid'

        ]);
    }
    }

