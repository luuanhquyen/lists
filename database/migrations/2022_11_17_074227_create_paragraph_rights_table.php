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
        Schema::create('paragraph_rights', function (Blueprint $table) {
            $table->id(); 
            $table->bigInteger('paragraph_left_id')->unsigned(); 
            $table->foreign('paragraph_left_id')->references('id')->on('paragraph_lefts')->onDelete('cascade');
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
        Schema::dropIfExists('paragraph_rights');
    }
};
