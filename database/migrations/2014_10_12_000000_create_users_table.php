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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nisn', 13)->unique();
            $table->string('jenis_kelamin');
            $table->string('asal_sekolah');
            $table->string('email')->unique();
            $table->string('no_hp', 13);
            $table->string('no_hp_ayah', 13);
            $table->string('no_hp_ibu', 13);
            $table->string('referensi');
            $table->string('nama')->nullable();
            $table->string('rayon')->nullable();
            $table->string('lulus')->nullable();
            $table->string('asal_smp')->nullable();
            $table->string('no_seleksi')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('roles', ['Admin', 'Student']);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
