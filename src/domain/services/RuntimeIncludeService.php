<?php

namespace yii2module\tool\domain\services;

use yii2module\tool\domain\interfaces\services\RuntimeIncludeInterface;
use yii2rails\domain\services\base\BaseActiveService;

/**
 * Class RuntimeIncludeService
 * 
 * @package yii2module\tool\domain\services
 * 
 * @property-read \yii2module\tool\domain\Domain $domain
 * @property-read \yii2module\tool\domain\interfaces\repositories\RuntimeIncludeInterface $repository
 */
class RuntimeIncludeService extends BaseActiveService implements RuntimeIncludeInterface {

    public function allUnique() {
        return $this->repository->allUnique();
    }
}
