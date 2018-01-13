<?php

use yii\db\Migration;

/**
 * Class m180113_153015_create_pool
 */
class m180113_153015_create_pool extends Migration
{
	public function up()
	{
		$this->createTable('pool', [
			'id' => $this->primaryKey(),
			'name' => $this->string()->notNull()->unique(),
			'url' => $this->string()->notNull()->unique(),
			'status' => $this->smallInteger()->notNull()->defaultValue(0),
		], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');

		$this->createIndex('status', 'pool', ['status']);
	}

	public function down()
	{
		$this->dropTable('pool');
	}
}
