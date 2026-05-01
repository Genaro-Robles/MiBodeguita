<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('establishments', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->char('country_id', 2);
            $table->char('department_id', 2);
            $table->char('province_id', 4);
            $table->char('district_id', 6);
            $table->string('address')->default('-');
            $table->string('email');
            $table->string('telephone')->default('-');
            $table->string('code');
            $table->string('aditional_information')->nullable();
            $table->string('trade_address')->nullable();
            $table->unsignedBigInteger('default_cusomer_id')->nullable();
            $table->string('logo')->nullable();
            $table->string('template_a4_pdf')->default('default');
            $table->string('template_a5_pdf')->default('default');
            $table->string('template_ticket_pdf')->default('default');
            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('district_id')->references('id')->on('districts');
            //$table->foreign('cusomer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('establishments');
    }
};
