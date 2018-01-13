<?php

use yii\db\Migration;

/**
 * Class m180113_153736_create_crypto_currency
 */
class m180113_153736_create_crypto_currency extends Migration
{
	public function up()
	{
		$this->createTable('crypto_currency', [
			'id' => $this->primaryKey(),
			'name' => $this->string()->notNull()->unique(),
			'website' => $this->string()->notNull()->unique(),
		], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
	}

	public function down()
	{
		$this->dropTable('crypto_currency');
	}
}
