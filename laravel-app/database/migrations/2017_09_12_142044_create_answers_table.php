<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('answers', function (Blueprint $table) {
            $sql = 'CREATE TABLE `answers` (
                   `answer_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                    `application_id` int(11) DEFAULT NULL,
                    `question_id` int(11) DEFAULT NULL,
                    `answer` text CHARACTER SET utf8,
                    PRIMARY KEY (`answer_id`)
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
        Schema::dropIfExists('answers');
    }
}
