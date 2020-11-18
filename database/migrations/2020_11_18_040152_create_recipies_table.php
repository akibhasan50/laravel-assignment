<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipies', function (Blueprint $table) {
            $table->id();
            $table->string('title',150);
            $table->text('instructions');
            $table->string('ingredients',150);
            $table->string('time',150);
            $table->string('servings',150);
            $table->text('nutrition');
            $table->string('type',150);
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
        Schema::dropIfExists('recipies');
    }
}
