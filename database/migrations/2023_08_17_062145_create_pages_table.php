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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('logo')->nullable();
            $table->string('welcome_text')->nullable();
            $table->string('favicon')->nullable();
            $table->string('footer_title')->nullable();
            $table->string('contact_title')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_address_title')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('copyright')->nullable();






            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
