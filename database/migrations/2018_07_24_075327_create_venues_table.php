<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('active')->default(1);

            $table->string('name');
            $table->string('slug')->unique()->index();
            $table->text('description')->nullable();

            $table->string('phone')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('postcode');
            $table->string('address');

            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

            $table->integer('total_pitches')->default(0);
            $table->integer('indoor_pitches')->default(0);
            $table->integer('toilets')->nullable();
            $table->integer('showers')->nullable();
            $table->integer('dressing_rooms')->nullable();
            $table->integer('parking_slots')->nullable();

            $table->timestamps();
        });

        Schema::create('user_venue', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                  ->references('id')->on('users');

            $table->unsignedInteger('venue_id');
            $table->foreign('venue_id')
                  ->references('id')->on('venues');

            $table->string('role')->default('manager');

            $table->unique(['venue_id', 'user_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_venue');
        Schema::dropIfExists('venues');
    }
}
