<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->text('image')->nulllable();
            $table->string('author', 50)->nullable();
            $table->string('publisher', 50)->nullable();
            $table->string('type', 5);
            $table->string('detail', 500)->nullable();
            $table->timestamps();
        });

        Schema::create('upload_image', function (Blueprint $table) {
			$table->id();
			$table->string("file_name");
			$table->string("file_path");
            $table->timestamps();
       });

    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('books');
        Schema::dropIfExists('upload_image');
    }
}