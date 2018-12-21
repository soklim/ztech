<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderingUnauthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordering_unauths', function (Blueprint $table) {
            $table->string('id',12);
            $table->string('pro_code',30);
            $table->string('price',10)->nullable();
            $table->string('cus_name',50)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('address',250)->nullable();
            $table->string('order_date',30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordering_unauths');
    }
}
