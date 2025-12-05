<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('username')->unique();
        $table->string('email')->unique();
        $table->string('password');
        $table->enum('role', ['pemula', 'veteran'])->default('pemula');
        $table->string('lokasi')->nullable();
        $table->timestamp('bergabung_pada')->useCurrent();
        $table->integer('resep_count')->default(0);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('users');
}
};
