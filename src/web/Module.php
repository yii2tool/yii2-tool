<?php

namespace yii2tool\tool\web;

use yii2rails\domain\helpers\DomainHelper;

/**
 * Class Module
 * 
 * @package yii2tool\tool\console
 */
class Module extends \yii\base\Module {

	//public static $langDir = 'yii2module/tool/domain/messages';
	
	public function init() {
		DomainHelper::forgeDomains([
			'tool' => 'yii2tool\tool\domain\Domain',
		]);
		parent::init();
	}
	
}