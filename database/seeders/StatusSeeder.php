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
            'REPEAT_SENT', 'REPEAT_RECEIVED',
            'PRESCRIPTION_ORDERED', 'PRESCRIPTION_RECEIVED', 'PRESCRIPTION_CHECKED', 'PRESCRIPTION_ENDORSED',
            'MARCHART_BIODOSED',
            'MEDICINE_PICKED', 'MEDICINE_PODDED',
            'BIODOSE_CHECKED', 'BIODOSE_CONFIRMED',
            'PACKAGE_PACKED', 'PACKAGE_DELIVERED'
        ];

        foreach($carehomeStatus as $status){
            $RxStatus = new Status();
            $RxStatus->status_name = $status;
            $RxStatus->save();
        }
    }
}
