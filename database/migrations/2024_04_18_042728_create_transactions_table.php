<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->date('tanggal');
            $table->bigInteger('court_id')->unsigned();
            $table->foreign('court_id')->references('id')->on('courts')->onUpdate('cascade')->onDelete('cascade');
            $table->date('starttime')->nullable();
            $table->date('endtime')->nullable();
            $table->integer('duration');
            $table->integer('costume');
            $table->integer('shoes');
            $table->integer('total');
            $table->integer('grandtotal');
            $table->integer('paytotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
