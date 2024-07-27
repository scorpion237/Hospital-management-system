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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('code')->comment('Code unique');
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->string('notes')->nullable();
            $table->enum('blood_type', ['O', 'A', 'AB+'])->nullable();
            $table->string('adresse')->nullable()->comment('adress de residence');
            $table->string('contact_parent')->nullable()->comment('Contact a contater en cas d absence');
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
        Schema::dropIfExists('patients');
    }
};
