<?php

namespace Database\Seeders;
use App\Models\Relatives;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class relatives_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s= new Relatives;
        $s->name="Relative_1";
        $s->emergency_details_id="1";
        $s->relative_contact="8484848485";
        $s->save();

        $s2= new Relatives;
        $s2->name="Relative_2";
        $s2->emergency_details_id="2";
        $s2->relative_contact="8484848485";
        $s2->save();

        Relatives::factory()->count(100)->create();
    }
}
