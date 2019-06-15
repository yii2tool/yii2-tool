<?php

use yii2lab\db\domain\db\MigrationCreateTable as Migration;

/**
 * Class m190531_173927_create_runtime_include_table
 * 
 * @package 
 */
class m190531_173927_create_runtime_include_table extends Migration {

	public $table = 'runtime_include';

	/**
	 * @inheritdoc
	 */
	public function getColumns()
	{
		return [
			'id' => $this->primaryKey()->notNull(),
			'request_data' => $this->json()->notNull(),
			'class' => $this->string()->notNull(),
			'timestamp' => $this->integer()->notNull(),
		];
	}

	public function afterCreate()
	{
		
	}

}