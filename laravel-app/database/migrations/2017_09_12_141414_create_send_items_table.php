<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('send_items', function (Blueprint $table) {
            $sql = 'CREATE TABLE `send_items` (
                    `send_item_id` int(11) NOT NULL AUTO_INCREMENT,
                    `item_id` int(11) DEFAULT NULL,
                    `img` text CHARACTER SET utf8,
                    `detail` text CHARACTER SET utf8,
                    PRIMARY KEY (`send_item_id`)
                    ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;';
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
        Schema::dropIfExists('send_items');
    }
}
