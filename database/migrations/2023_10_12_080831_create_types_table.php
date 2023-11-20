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

            Schema::create('types', function (Blueprint $table) {
                $table->id();
                $table->string('name_type');
                $table->unsignedBigInteger('category_id'); // The foreign key to link with categories
                $table->foreign('category_id')->references('id')->on('categories');
              
                $table->timestamps();
            });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types');
    }
};
