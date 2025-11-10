<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('images_product', function (Blueprint $table) {
            $table->id();

            // Relación 1:N con product
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');

            $table->string('url_image');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('images_product');
    }
};
