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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            // ROLE
            $table->enum('role', ['artisan', 'customer', 'deliveryman']);
            //commun
            $table->string('phone')->nullable(); // Use dedicated "phone" type or format constraint
            $table->string('address')->nullable(); // Use text type for longer content
            $table->string('image', 2048)->nullable();
            //artisan and delivery only
            $table->string('Heur_Overture')->nullable();
            $table->string('Heur_Fermetur')->nullable();
            $table->string('Description')->nullable();
            //email
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');


            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
