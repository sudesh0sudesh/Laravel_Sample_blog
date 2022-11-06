<?php

namespace Database\Seeders;
use \App\Models\Donor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d= new Donor;
        $d->name="Donor_name";
        $d->emergency_details_id="O Positive";

        $d->save();

        $s= new Donor;
        $s->name="Donor_name_2";
        $s->emergency_details_id="O Positive";
        $s->save();

        //
    }
}
