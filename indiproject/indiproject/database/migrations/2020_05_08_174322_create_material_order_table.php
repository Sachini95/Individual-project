<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_id');
            $table->dateTime('order_date');
            $table->foreign('project_id')->references('id')->on('project');
            $table->string('project');
            $table->string('project_supervisor');
            $table->longtext('items');
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
        Schema::dropIfExists('material_order');
    }
}
