<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->string('recentlySearched')->nullable();
            $table->string('bookmarks')->nullable();
            $table->string('orders')->nullable();
            $table->string('orderId')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('finders');
    }
}
