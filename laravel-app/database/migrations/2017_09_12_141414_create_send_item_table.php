<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('send_item', function (Blueprint $table) {
            $sql = 'CREATE TABLE `send_item` (
                    `send_item_id` int(11) NOT NULL AUTO_INCREMENT,
                    `item_id` int(11) DEFAULT NULL,
                    `img` text,
                    `detail` text,
                    PRIMARY KEY (`send_item_id`)
                    ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;';
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
        Schema::dropIfExists('send_item');
    }
}
