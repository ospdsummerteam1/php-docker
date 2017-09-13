<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $sql = 'CREATE TABLE `items` (
                    `item_id` int(11) NOT NULL AUTO_INCREMENT,
                    `img` text CHARACTER SET utf8,
                    `title` char(50) CHARACTER SET utf8 DEFAULT NULL,
                    `detail` text CHARACTER SET utf8,
                    `status` tinyint(1) DEFAULT \'1\',
                    `user_id` text CHARACTER SET utf8,
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
        Schema::dropIfExists('items');
    }
}
