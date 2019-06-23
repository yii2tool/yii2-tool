<?php

namespace yii2tool\tool\domain\services;

use yii2tool\tool\domain\interfaces\services\RuntimeIncludeInterface;
use yii2rails\domain\services\base\BaseActiveService;

/**
 * Class RuntimeIncludeService
 * 
 * @package yii2tool\tool\domain\services
 * 
 * @property-read \yii2tool\tool\domain\Domain $domain
 * @property-read \yii2tool\tool\domain\interfaces\repositories\RuntimeIncludeInterface $repository
 */
class RuntimeIncludeService extends BaseActiveService implements RuntimeIncludeInterface {

    public function allUnique() {
        return $this->repository->allUnique();
    }
}
