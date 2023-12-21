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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->char('Azienda', 100);
            $table->char('Stazione_di_partenza', 100);
            $table->char('Stazione_di_arrivo', 100);
            $table->time('Orario_di_partenza');
            $table->time('Orario_di_arrivo');
            $table->bigInteger('Codice_Treno');
            $table->bigInteger('Numero_Carrozze');
            $table->boolean('In_orario');
            $table->boolean('Cancellato');
            $table->date('Data_di_partenza');
            $table->boolean('stato');
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
        Schema::dropIfExists('trains');
    }
};
