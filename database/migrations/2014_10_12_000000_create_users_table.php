<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_pendaftar', 50);
            $table->string('asal_sekolah', 50);
            $table->string('jenjang', 50);
            $table->string('nik', 50);
            $table->string('nisn', 50);
            $table->string('name', 255);
            $table->string('tempat_lahir', 255);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('email', 255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->string('remember_token', 100)->nullable();
            $table->timestamps(); // includes created_at and updated_at
            $table->string('password_reset_token', 255)->nullable(); // renamed to standard
            $table->dateTime('password_reset_expired_at')->nullable(); // renamed to standard
            $table->string('profile_picture')->nullable();
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
}
