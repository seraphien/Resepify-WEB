<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('resep', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        $table->string('nama'); // input textbox
        $table->string('kategori'); // input dropdown
        $table->integer('waktu_masak'); // input angka (menit)
        $table->enum('tingkat_kesulitan', ['mudah', 'sedang', 'sulit']); // input radio button
        $table->integer('porsi'); // input angka
        $table->longText('isi_resep'); // input textarea
        $table->integer('views')->default(0); // jumlah view
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('resep');
}
};
