<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFounderInfosTable extends Migration
{
    public function up()
    {
        Schema::create('founder_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_1');
            $table->string('title_2');
            $table->string('national');
            $table->string('dob');
            $table->string('address');
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
