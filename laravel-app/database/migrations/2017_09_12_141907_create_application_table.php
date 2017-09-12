<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('application', function (Blueprint $table) {
            $sql = 'CREATE TABLE `application` (
                  `application_id` int(11) DEFAULT NULL,
                  `user_id` text,
                  `item_id` int(11) DEFAULT NULL,
                  `status` tinyint(1) DEFAULT NULL
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
        Schema::dropIfExists('application');
    }
}
