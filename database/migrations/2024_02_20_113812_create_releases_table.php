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
        Schema::create('releases', function (Blueprint $table) {
            $table->id();
            $table->string('media_type')->nullable();
            $table->string('user_id')->nullable();
            $table->string('genre')->nullable();
            $table->string('subgenre')->nullable();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('version_subtitle')->nullable();
            $table->string('primary_artist')->nullable();
            $table->string('featur')->nullable();
            $table->string('checkboxartist')->nullable();
            $table->string('label_name')->nullable();
            $table->string('format')->nullable();
            $table->string('release_date')->nullable();
            $table->string('production_year')->nullable();
            $table->string('line1')->nullable();
            $table->string('line2')->nullable();
            $table->string('upc')->nullable();
            $table->string('producer_catalogue_number')->nullable();
            $table->string('main_price')->nullable();
            $table->string('live_release_date')->nullable();
            $table->string('audio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('releases');
    }
};
