<?php

// database/migrations/XXXX_XX_XX_XXXXXX_create_proovedores_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProovedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proovedores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellidopaterno'); // Cambiado a minúsculas
            $table->string('apellidomaterno'); // Cambiado a minúsculas
            $table->string('edad'); // Cambiado a minúsculas
            $table->string('correo'); // Cambiado a minúsculas
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proovedores');
    }
}
