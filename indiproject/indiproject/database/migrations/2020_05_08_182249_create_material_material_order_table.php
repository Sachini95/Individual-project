<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialMaterialOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_material_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreing('material_id')->references('material_id')->on('material');
            $table->foreing('order_id')->references('order_id')->on('material_order');
            $table->dateTime('supply_date');
            $table->longtext('supply_notes')->nullable();
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
        Schema::dropIfExists('material_material_order');
    }
}
