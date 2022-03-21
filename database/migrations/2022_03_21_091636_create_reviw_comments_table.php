<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatereviwcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_comments', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->unsignedBigInteger('reviw_id')->default(0);
            $table->unsignedBigInteger('user_id')->default(0);
            $table->string('tittle');
            $table->string('body',300);
            $table->integer('stars')->default(0);
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
        Schema::dropIfExists('review_comments');
    }
};

