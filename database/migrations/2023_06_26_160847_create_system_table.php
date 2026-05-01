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
        Schema::create('state_types', function (Blueprint $table) {
            $table->char('id', 2)->index();
            $table->string('description');
        });

        DB::table('state_types')->insert([
            ['id' => '01', 'description' => 'Registrado'],
            ['id' => '03', 'description' => 'Enviado'],
            ['id' => '05', 'description' => 'Aceptado'],
            ['id' => '07', 'description' => 'Observado'],
            ['id' => '09', 'description' => 'Rechazado'],
            ['id' => '11', 'description' => 'Anulado'],
            ['id' => '13', 'description' => 'Por anular'],
        ]);

        Schema::create('soap_types', function (Blueprint $table) {
            $table->char('id', 2)->index();
            $table->string('description');
        });

        DB::table('soap_types')->insert([
            ['id' => '01', 'description' => 'Demo'],
            ['id' => '02', 'description' => 'Producción'],
        ]);

        Schema::create('groups', function (Blueprint $table) {
            $table->char('id', 2)->index();
            $table->string('description');
        });

        DB::table('groups')->insert([
            ['id' => '01', 'description' => 'Facturas'],
            ['id' => '02', 'description' => 'Boletas'],
            ['id' => '03', 'description' => 'Notas de crédito'],
            ['id' => '04', 'description' => 'Notas de débito'],
            ['id' => '05', 'description' => 'Guías de remisión'],
            ['id' => '06', 'description' => 'Liquidaciones de compra'],
            ['id' => '07', 'description' => 'Comprobantes de retención'],
            ['id' => '08', 'description' => 'Comprobantes de percepción'],
            ['id' => '09', 'description' => 'Otros documentos'],
        ]);

        Schema::create('item_types', function (Blueprint $table) {
            $table->char('id', 2)->index();
            $table->string('description');
        });

        DB::table('item_types')->insert([
            ['id' => '01', 'description' => 'Producto'],
            ['id' => '02', 'description' => 'Servicio']
        ]);

        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->timestamps();
        });

        DB::table('banks')->insert([
            ['description' => 'BANCO SCOTIABANK'],
            ['description' => 'BANCO DE CREDITO DEL PERU'],
            ['description' => 'BANCO DE COMERCIO'],
            ['description' => 'BANCO PICHINCHA'],
            ['description' => 'BBVA CONTINENTAL'],
            ['description' => 'INTERBANK'],
        ]);

        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bank_id');
            $table->string('description');
            $table->string('number');
            $table->char('currency_type_id',3);

            $table->foreign('bank_id')->references('id')->on('banks');
            $table->foreign('currency_type_id')->references('id')->on('cat_currency_types');
        });

        Schema::create('exchange_rates', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('buy', 13, 3);
            $table->decimal('sell', 13, 3);
            $table->date('date_original');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exchange_rates');
        Schema::dropIfExists('bank_accounts');
        Schema::dropIfExists('banks');
        Schema::dropIfExists('item_types');
        Schema::dropIfExists('groups');
        Schema::dropIfExists('soap_types');
        Schema::dropIfExists('process_types');
        Schema::dropIfExists('state_types');
    }
};
