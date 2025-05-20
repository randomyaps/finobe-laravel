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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->longText('title');
            $table->longText('info');
            $table->string('creatorid', 100);
            $table->string('playing', 100);
            $table->string('maxplayer', 100);
            $table->string('favorited', 100);
            $table->string('version', 100);
            $table->longText('createdon');
            $table->string('assetype', 100);
            $table->longText('genre');
            $table->string('approved', 100);
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
