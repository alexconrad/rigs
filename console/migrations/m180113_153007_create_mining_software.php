<?php

use yii\db\Migration;

/**
 * Class m180113_153007_create_mining_software
 */
class m180113_153007_create_mining_software extends Migration
{
	public function up()
	{
		$this->createTable('mining_software', [
			'id' => $this->primaryKey(),
			'name' => $this->string()->notNull()->unique(),
		], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
	}

	public function down()
	{
		$this->dropTable('mining_software');
	}
}
