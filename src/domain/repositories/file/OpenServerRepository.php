<?php

namespace yii2tool\tool\domain\repositories\file;

use yii2rails\domain\repositories\BaseRepository;
use yii2rails\extension\yii\helpers\FileHelper;
use yii2tool\tool\domain\helpers\OpenServerHelper;

class OpenServerRepository extends BaseRepository {
	
	public $domainDir;
	public $domains;
	public $domainConfigFile;
	
	public function saveToConfig($collection) {
		$code = OpenServerHelper::collectionToCode($collection);
		FileHelper::save($this->domainConfigFile, $code);
		return $code;
	}
	
	public function scan() {
		$result = OpenServerHelper::scan($this->domains, $this->domainDir);
		return $this->forgeEntity($result);
	}
	
	public function all() {
		$result = OpenServerHelper::all($this->domainConfigFile);
		return $this->forgeEntity($result);
	}
	
}
