<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergency_details', function (Blueprint $table) {
            $table->id()->unique();
            $table->string("bloodgroup");
            $table->bigInteger("emergencycontact");
            $table->timestamps();
            $table->bigInteger("hostel_id")->unsigned();
            $table->foreign("hostel_id")->unique()->references("id")->on("hostels")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emergency_details');
    }
};
