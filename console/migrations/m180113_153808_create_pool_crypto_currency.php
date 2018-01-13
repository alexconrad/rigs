<?php

use yii\db\Migration;

/**
 * Class m180113_153808_create_pool_crypto_currency
 */
class m180113_153808_create_pool_crypto_currency extends Migration
{
	public function up()
	{
		$this->createTable('pool_crypto_currency', [
			'pool_id' => $this->integer()->notNull(),
			'crypto_currency_id' => $this->integer()->notNull(),
		], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');

		$this->addPrimaryKey('pool_crypto_currency', 'pool_crypto_currency', ['pool_id', 'crypto_currency_id']);
	}

	public function down()
	{
		$this->dropTable('pool_crypto_currency');
	}
}
