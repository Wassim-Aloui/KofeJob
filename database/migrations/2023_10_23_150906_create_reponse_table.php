database/migrations/2023_10_19_134032_create_reponses_table.php<?php

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
        Schema::create('reponses', function (Blueprint $table) {
            $table->id();
            $table->text('contenu');
            $table->unsignedBigInteger('condidat_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('condidat_id')->references('id')->on('condidat')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reponses');
    }
};
