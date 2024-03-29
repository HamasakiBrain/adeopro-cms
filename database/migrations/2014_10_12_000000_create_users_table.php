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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->tinyInteger('isAdmin')->default(0);
            $table->unsignedBigInteger('balance')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('country');
            $table->string('city');
            $table->string('zip')->nullable();
            $table->string('address');
            $table->string('site')->nullable();
            $table->integer('type');
            $table->string('org');
            $table->integer('org_type');
            $table->string('phone');
            $table->string('icq')->nullable();
            $table->string('skype')->nullable();
            $table->string('diller')->nullable();
            $table->string('seo')->nullable();
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
}
