<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carehomeStatus = [
            'REPEAT SENT', 'REPEAT RECEIVED',
            'PRESCRIPTION ORDERED', 'PRESCRIPTION RECEIVED', 'PRESCRIPTION CHECKED', 'PRESCRIPTION ENDORSED',
            'MARCHART BIODOSED',
            'MEDICINE PICKED', 'MEDICINE PODDED',
            'BIODOSE CHECKED', 'BIODOSE CONFIRMED',
            'PACKAGE PACKED', 'PACKAGE DELIVERED'
        ];

        foreach($carehomeStatus as $status){
            $RxStatus = new Status();
            $RxStatus->status_name = $status;
            $RxStatus->save();
        }
    }
}
