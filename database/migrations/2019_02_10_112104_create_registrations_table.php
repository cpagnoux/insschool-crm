<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('plan', [
                'ANNUAL',
                'QUARTERLY',
            ])->nullable();
            $table->string('followed_quarters')->nullable();
            $table->decimal('price', 6, 2)->nullable();
            $table->integer('discount')->default(0);
            $table->integer('num_payments')->nullable();
            $table->text('comment')->nullable();
            $table->boolean('volunteer')->default(0);
            $table->boolean('file_photo')->default(0);
            $table->boolean('file_insurance')->default(0);
            $table->boolean('file_medical_certificate')->default(0);
            $table->boolean('file_stamped_envelope')->default(0);
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
        Schema::dropIfExists('registrations');
    }
}
