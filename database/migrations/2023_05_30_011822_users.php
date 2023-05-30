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
        Schema::create('Users',function (Blueprint $table){
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('age');
            $table->integer('phone');
            $table->string('address');
            $table->timestamps();
        }
        
        
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
