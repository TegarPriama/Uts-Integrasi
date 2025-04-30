<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashServicesTable extends Migration
{
    /**
     * Jalankan migrasi: membuat tabel wash_services.
     */
    public function up()
    {
        Schema::create('wash-services', function (Blueprint $table) {
            $table->id(); // kolom ID otomatis
            $table->string('name'); // nama layanan
            $table->integer('price'); // harga layanan
            $table->string('duration'); // durasi layanan (misal: "30 menit")
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse migrasi: menghapus tabel wash_services.
     */
    public function down()
    {
        Schema::dropIfExists('wash-services');
    }
}
