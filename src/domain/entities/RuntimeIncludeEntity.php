<?php

namespace yii2tool\tool\domain\entities;

use yii2rails\domain\BaseEntity;

/**
 * Class RuntimeIncludeEntity
 * 
 * @package yii2tool\tool\domain\entities
 * 
 * @property $id
 * @property $request_data
 * @property $class
 * @property $timestamp
 */
class RuntimeIncludeEntity extends BaseEntity {

	protected $id;
	protected $request_data;
	protected $class;
	protected $timestamp;

}
