<?php

use Carbon\Carbon;
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
            $table->string('password');
            $table->date('birtdate')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('country')->default('Turkey');
            $table->string('gender')->default('null');
            $table->string('role')->default('standart');
            $table->unsignedBigInteger('post_count')->default(50);
            $table->unsignedBigInteger('post_counter')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            //Api Token
            /* $table->string('api_token', 80)->after('password')
                ->unique()
                ->nullable()
                ->default(null);*/
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
