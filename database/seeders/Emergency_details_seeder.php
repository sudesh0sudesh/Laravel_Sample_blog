<?php

namespace Database\Seeders;
use App\Models\EmergencyDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Emergency_details_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $x = new EmergencyDetails;
        $x->bloodgroup="O positive";
        $x->emergencycontact="999999999";
        $x->hostel_id=1;
        $x->save();

        EmergencyDetails::factory()->count(50)->create();

    }
}
