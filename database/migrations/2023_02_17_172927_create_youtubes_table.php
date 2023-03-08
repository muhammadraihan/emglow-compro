<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYoutubesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('youtubes', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('name')->nullable();
            $table->longText('detail')->nullable();
            $table->longText('link')->nullable();
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
        Schema::dropIfExists('youtubes');
    }
}
