<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id')->unique();
            $table->dateTime('order_date');
            $table->string('project_id');
            $table->string('project');
            $table->string('project_supervisor');
            $table->longText('items');
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
        Schema::dropIfExists('material_orders');
    }
}
