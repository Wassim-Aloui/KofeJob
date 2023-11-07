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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('logo')->nullable();
            $table->unsignedBigInteger("user_id");
            $table->string('technology');
            $table->string('company');
            $table->date('start_date');
            $table->date('due_date');
            $table->float('budget', 8, 2); // Total digits: 8, Decimal places: 2
            $table->integer('progress')->unsigned(); // Progress as an integer (0 to 100)
            $table->timestamps();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
};
