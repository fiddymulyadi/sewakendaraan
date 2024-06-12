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
        Schema::create('penyewa', function (Blueprint $table) {
            $table->increments('id_penyewa');
            $table->string('nama_penyewa', 100)->notNull();
            $table->text('alamat')->notNull();
            $table->string('no_hp', 15)->nullable();
            $table->timestamps();
        });

        Schema::create('kendaraan', function (Blueprint $table) {
            $table->string('no_pol', 10)->primary();
            $table->string('no_mesin', 20)->unique();
            $table->enum('jenis_mobil', ['mpv', 'city', 'suv'])->notNull();
            $table->string('nama_mobil', 40)->notNull();
            $table->enum('merk', ['honda', 'toyota', 'daihatsu'])->notNull();
            $table->string('kapasitas', 5)->notNull();
            $table->integer('tarif')->notNull();
            $table->timestamps();
        });

        Schema::create('kwitansi', function (Blueprint $table) {
            $table->increments('id_kwitansi');
            $table->date('tgl_kwitansi')->notNull();
            $table->timestamps();
        });

        Schema::create('sewa', function (Blueprint $table) {
            $table->increments('id_sewa');
            $table->string('no_pol', 10)->notNull();
            $table->date('tgl_sewa')->notNull();
            $table->date('tgl_selesai')->notNull();
            $table->string('tlp_tujuan', 15)->nullable();
            $table->text('alamat_tujuan')->nullable();
            $table->integer('biaya_sewa')->notNull();
            $table->string('kota', 50)->default('PONTIANAK');
            $table->integer('id_penyewa')->unsigned()->nullable();
            $table->integer('jlh_penumpang')->nullable();
            $table->integer('id_kwitansi')->unsigned()->notNull();
            $table->timestamps();

            // Foreign keys
            $table->foreign('no_pol')->references('no_pol')->on('kendaraan')->onDelete('cascade');
            $table->foreign('id_penyewa')->references('id_penyewa')->on('penyewa')->onDelete('set null');
            $table->foreign('id_kwitansi')->references('id_kwitansi')->on('kwitansi')->onDelete('cascade');
        });

        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('id_invoice');
            $table->integer('id_kwitansi')->notNull()->unsigned();
            $table->integer('id_penyewa')->notNull()->unsigned();
            $table->string('no_pol', 10)->notNull();
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_kwitansi')->references('id_kwitansi')->on('kwitansi')->onDelete('cascade');
            $table->foreign('id_penyewa')->references('id_penyewa')->on('penyewa')->onDelete('cascade');
            $table->foreign('no_pol')->references('no_pol')->on('kendaraan')->onDelete('cascade');
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
