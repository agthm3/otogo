<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('route_street', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('route_id');
            $table->unsignedBigInteger('street_id');
            $table->enum('type', ['depart', 'return']);
            $table->timestamps();

            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('route_street');
    }
};
