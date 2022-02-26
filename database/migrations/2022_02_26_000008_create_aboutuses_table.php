<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusesTable extends Migration
{
    public function up()
    {
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('about_us_1');
            $table->longText('about_us_2');
            $table->longText('about_us_3');
            $table->longText('description');
            $table->longText('client_text');
            $table->longText('success_text');
            $table->longText('task_text');
            $table->string('email_1');
            $table->string('phone_1');
            $table->string('phone_2')->nullable();
            $table->longText('address');
            $table->longText('time');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instegram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->longText('contact_text');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('manager_name');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
