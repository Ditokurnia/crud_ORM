<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('harga');
            $table->integer('stok');
            $table->float('berat');
            $table->text('gambar')->nullable();
            // Menggunakan ENUM dengan nilai 'Baru' dan 'Bekas'
            $table->enum('kondisi', ['Baru', 'Bekas']); // Pastikan tidak ada duplikasi nilai 'Baru'
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
