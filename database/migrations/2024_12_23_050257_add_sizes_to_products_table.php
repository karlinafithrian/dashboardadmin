<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSizesToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Menambahkan kolom sizes yang akan menyimpan JSON
            $table->json('sizes')->nullable(); // Kolom ini untuk menyimpan stok dan harga per ukuran
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('sizes');
        });
    }
}

