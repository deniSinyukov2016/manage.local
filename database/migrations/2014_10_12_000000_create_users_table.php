<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->boolean('confirmed')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        factory(User::class, [
            'name' => 'Admin',
            'password' => bcrypt('111111'),
            'email' => 'jon@doe.com',
            'is_admin' => true
        ])->create();

        factory(User::class, [
            'name' => 'User',
            'password' => bcrypt('111111'),
            'email' => 'jane@doe.com',
            'is_admin' => false
        ])->create();
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
