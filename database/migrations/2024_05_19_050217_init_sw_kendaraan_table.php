<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penyewa', function (Blueprint $table) {
            $table->id('id_penyewa');
            $table->string('nama_penyewa', 100);
            $table->text('alamat');
            $table->string('no_hp', 15);
            $table->timestamps();
        });

        Schema::create('sewa', function (Blueprint $table) {
            $table->id('id_sewa');
            $table->Integer('no_pol');
            $table->date('tgl_sewa');
            $table->date('tgl_selesai');
            $table->string('tlp_tujuan', 15);
            $table->text('alamat_tujuan');
            $table->integer('biaya_sewa');
            $table->string('kota', 50)->default('Pontianak');
            $table->unsignedBigInteger('id_penyewa')->default(1); // Foreign Key id_penyewa, default value: 1
            $table->foreign('id_penyewa')->references('id_penyewa')->on('penyewa');
            $table->integer('jlh_penumpang');
            $table->unsignedBigInteger('id_kwitansi');
            $table->timestamps();
            
        
        });

        Schema::create('kwitansi', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_kwitansi');
            $table->timestamps();
        });

        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('no_pol', 10);
            $table->enum('jenis_mobil', ['mpv', 'city', 'suv'])->notNull();
            $table->string('nama_mobil', 40)->notNull();
            $table->enum('merk', ['honda', 'toyota', 'daihatsu'])->notNull();
            $table->string('kapasitas', 5)->notNull();
            $table->integer('tarif')->notNull();
            $table->timestamps();

    
        });

        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->string('no_pol', 10)->notNull();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyewa');
        Schema::dropIfExists('sewa');
        Schema::dropIfExists('kwitansi');
        Schema::dropIfExists('kendaraan');
        Schema::dropIfExists('invoice');
    }
};
