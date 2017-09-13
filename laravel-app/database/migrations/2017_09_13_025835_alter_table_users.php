<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $sql = 'ALTER TABLE `users` ADD `id` INT(11) UNSIGNED  NOT NULL  AUTO_INCREMENT  PRIMARY KEY AFTER `user_id`;';
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
        Schema::table('users', function (Blueprint $table) {
            $sql = 'ALTER TABLE `users` DROP `id`;';
            DB::connection()->getPdo()->exec($sql);
        });
    }
}
