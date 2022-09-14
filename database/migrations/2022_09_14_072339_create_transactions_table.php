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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
           // $table->bigInteger('user_id')->nullable(false);
            $table->bigInteger('account_id')->nullable(false);
            $table->bigInteger('category_id')->nullable(false);
            $table->decimal('amount', 8,4)->nullable(false)->unsignedBigInteger();
            $table->enum('type', ['income', 'expense'])->nullable(false);
            $table->string('note', 250)->nullable();
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
        Schema::dropIfExists('transactions');
    }
};
