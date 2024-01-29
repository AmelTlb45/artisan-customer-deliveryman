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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('Tel')->nullable();
            $table->string('address')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('product_title')->nullable(); // Corrected column name
            $table->unsignedInteger('quantity')->nullable(); // Use appropriate data type
            $table->decimal('price', 10, 2)->nullable(); // Use appropriate data type
            $table->string('image')->nullable();
            $table->unsignedBigInteger('prod_id');
            $table->foreign('prod_id')->references('id')->on('products')->onDelete('cascade');

            $table->string('payment_status')->nullable();
            $table->string('delivery_status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
