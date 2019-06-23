<?php

namespace yii2tool\tool\domain\services;

use yii2rails\domain\services\base\BaseService;

/**
 * Class OpenServerService
 *
 * @package yii2tool\tool\domain\services
 *
 * @property \yii2tool\tool\domain\repositories\file\OpenServerRepository $repository
 */
class OpenServerService extends BaseService {
	
	public function update() {
		$collection = $this->repository->scan();
		$this->repository->saveToConfig($collection);
		return $collection;
	}
	
	public function all() {
		$collection = $this->repository->all();
		return $collection;
	}
	
}
