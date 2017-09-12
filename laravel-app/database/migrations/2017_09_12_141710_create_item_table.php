<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item', function (Blueprint $table) {
            $sql = 'CREATE TABLE `item` (
                      `item_id` int(11) NOT NULL AUTO_INCREMENT,
                      `img` text,
                      `title` char(50) DEFAULT NULL,
                      `detail` text,
                      `status` tinyint(1) DEFAULT NULL,
                      `user_id` text,
                      PRIMARY KEY (`item_id`)
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
        Schema::dropIfExists('item');
    }
}
