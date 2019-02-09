<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birth_date');
            $table->string('address');
            $table->string('city');
            $table->string('zip_code');
            $table->string('mobile')->nullable();
            $table->string('mobile_father')->nullable();
            $table->string('mobile_mother')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->enum('means_of_knowledge', [
                'ADVERTISING_PANEL',
                'INTERNET',
                'POSTER_FLYER',
                'WORD_OF_MOUTH',
            ]);
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
        Schema::dropIfExists('contacts');
    }
}
