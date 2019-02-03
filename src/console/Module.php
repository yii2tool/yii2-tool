<?php

namespace yii2module\tool\console;

use yii2rails\domain\helpers\DomainHelper;

/**
 * Class Module
 * 
 * @package yii2module\tool\console
 */
class Module extends \yii\base\Module {

	//public static $langDir = 'yii2module/tool/domain/messages';
	
	public function init() {
		DomainHelper::forgeDomains([
			'tool' => 'yii2module\tool\domain\Domain',
		]);
		parent::init();
	}
	
}