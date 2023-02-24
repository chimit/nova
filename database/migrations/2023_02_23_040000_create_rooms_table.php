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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->boolean('active')->default(true);
            $table->string('floor');
            $table->string('door');
            $table->timestamp('renovated_at')->nullable();
            $table->timestamps();

            $table->unique(['category_id', 'floor', 'door']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
