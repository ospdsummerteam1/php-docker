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
            `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
            `icon` text,
            `user_name` char(50) DEFAULT NULL,
            `introduction` text,
            PRIMARY KEY (`user_id`)
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
