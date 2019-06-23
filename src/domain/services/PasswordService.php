<?php

namespace yii2tool\tool\domain\services;

use yii2rails\domain\services\base\BaseService;
use yii2rails\extension\common\helpers\StringHelper;
use yii2tool\tool\domain\enums\CharsetEnum;

class PasswordService extends BaseService {
	
	public $length = 9;
	public $set = null;
	public $characters = CharsetEnum::NUM_ALPHA;
	public $count = 105;
	
	public function generate() {
		$passList = [];
		for($i=0;$i<$this->count;$i++) {
			$passList[] = StringHelper::generateRandomString($this->length, $this->set, $this->characters, true);
		}
		return $passList;
	}
	
}
