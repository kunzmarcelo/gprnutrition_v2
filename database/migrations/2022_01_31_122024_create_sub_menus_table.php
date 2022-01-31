<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_menus', function (Blueprint $table) {
            $table->id();
            $table->string('name',25);
            $table->bigInteger('menu_id')->unsigned()->index();

            $table->string('icon',125);
            $table->string('action',255); //route, url, action
            $table->integer('order'); // 0 a 50
            $table->string('position')->nullable();; //left ou boton
            $table->boolean('status'); // true or false
            $table->foreign('menu_id')
                            ->references('id')
                            ->on('menus')
                            ->onDelete('cascade');
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
        Schema::dropIfExists('sub_menus');
    }
}
