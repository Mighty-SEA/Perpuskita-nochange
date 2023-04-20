<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->foreignId('id_kategori')->constrained('kategori')->onDelete('cascade')->onUpdate('cascade');
            $table->string('pengarang');
            $table->year('tahun_terbit');
            $table->string('image')->nullable()->default('noimg.jpg');
            $table->integer('viewed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
};
