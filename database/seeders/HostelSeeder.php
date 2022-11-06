<?php

namespace Database\Seeders;
use App\Models\Hostel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class HostelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a= new Hostel;
        $a->name ="Sudesh";
        $a->email="sudesh@sudesh.com";
        $a->contactNumber=96789345445;
        $a->student=1;
        $a->unique_Id="RANDOM_ID";
        $a->save();

        Hostel::factory()->count(50)->create();

    }
}
