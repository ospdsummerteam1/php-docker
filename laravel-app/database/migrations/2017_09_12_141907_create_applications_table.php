<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {
            $sql = 'CREATE TABLE `applications` (
                    `application_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                    `user_id` text CHARACTER SET utf8,
                    `item_id` int(11) DEFAULT NULL,
                    `status` tinyint(1) DEFAULT \'1\',
                    PRIMARY KEY (`application_id`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;';
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
        Schema::dropIfExists('applications');
    }
}
