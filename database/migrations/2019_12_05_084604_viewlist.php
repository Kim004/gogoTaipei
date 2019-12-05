<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Viewlist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view', function (Blueprint $table) {

            $table->char('id', 30);
            $table->text('name');
            $table->text('description');
            $table->text('tel');
            $table->text('address');
            $table->integer('zipcode');
            $table->text('opentime');
            $table->float('px');
            $table->float('py');
            // 這個很重要!!
            $table->primary('id');
            $table->collation = 'utf8mb4_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view');
    }
}

