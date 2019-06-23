<?php

namespace yii2tool\tool\domain;

use yii2rails\domain\enums\Driver;
use yii2tool\tool\domain\enums\CharsetEnum;

/**
 * Class Domain
 * 
 * @package yii2tool\tool\domain
 *
 * @property \yii2tool\tool\domain\services\GrabberService $grabber
 * @property \yii2tool\tool\domain\services\PasswordService $password
 * @property \yii2tool\tool\domain\services\OpenServerService $openServer
 * @property-read \yii2tool\tool\domain\interfaces\services\RuntimeIncludeInterface $runtimeInclude
 * @property-read \yii2tool\tool\domain\interfaces\repositories\RepositoriesInterface $repositories
 */
class Domain extends \yii2rails\domain\Domain {
	
	/**
	 * @return array
	 */
	public function config() {
		return [
			'repositories' => [
				'password',
				'grabber',
				'runtimeInclude' => Driver::ACTIVE_RECORD,
				'openServer' => [
					'driver' => Driver::FILE,
					'domainDir' => 'C:\OpenServer\domains',
					'domainConfigFile' => 'C:\OpenServer\userdata\profiles\Default_domains.txt',
					'domains' => [
						'js',
						'static',
						'tool',
						'tpl',
						'tpltest',
						'yii',
						'yiitest',
					],
				]
			],
			'services' => [
				'password' => [
					'length' => 9,
					'characters' => CharsetEnum::NUM_ALPHA_SIMPLE,
					'count' => 20,
				],
				'grabber',
				'openServer',
                'runtimeInclude',
			],
		];
	}

}