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
        Schema::create('territories', function (Blueprint $table) {

            $table->id();
            $table->string('user_id');
            $table->string('release_id')->nullable();
            $table->longtext('asia_country')->nullable();
            $table->longtext('europe_country')->nullable();
            $table->longtext('africa_country')->nullable();
            $table->longtext('SouthAmerica_country')->nullable();
            $table->longtext('NorthAmerica_country')->nullable();
            $table->longtext('asia_country_url')->nullable();
            $table->longtext('europe_country_url')->nullable();
            $table->longtext('africa_countr_url')->nullable();
            $table->longtext('SouthAmerica_country_url')->nullable();
            $table->longtext('NorthAmerica_country_url')->nullable();
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('territories');
    }
};
