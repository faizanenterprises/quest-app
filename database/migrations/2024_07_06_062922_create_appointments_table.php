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
        Schema::create('appointments', function (Blueprint $table) {

                $table->id();
                $table->enum('gender', ['Male', 'Female']);
                $table->enum('service', [
                    'Tourist Visa Processing',
                    'Canadian Work Permits',
                    'Immigrate to Canada',
                    'Business Immigration',
                    'Student Visa Processing',
                    'Family Sponsorship'
                ]);
                $table->string('name', 100);
                $table->string('phone', 15)->nullable();
                $table->date('date');
                $table->time('time');
                $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
