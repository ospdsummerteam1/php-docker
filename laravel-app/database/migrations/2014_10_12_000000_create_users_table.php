<?php

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
        Schema::table('users', function (Blueprint $table) {
            $sql = 'CREATE TABLE `users` (
                    `icon` text CHARACTER SET utf8,
                    `user_name` char(50) CHARACTER SET utf8 NOT NULL DEFAULT \'\',
                    `introduction` text CHARACTER SET utf8,
                    `user_id` text CHARACTER SET utf8 NOT NULL
                    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;';
            DB::connection()->getPdo()->exec($sql);
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
