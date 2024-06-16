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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->year('year');

            $table->text("images");
            $table->enum('visibility',['public','private'])->default('private');

            // mesin
            $table->string("tipe_mesin");
            $table->string("busi");
            $table->string("kopling");
            $table->string("sistem_bahan_bakar");
            $table->timestamps();

            // rangka

            $table->string("tipe_rangka");
            $table->string("ukuran_ban_belakang");
            $table->string("ukuran_ban_depan");
            $table->string("sistem_pengereman");

            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
