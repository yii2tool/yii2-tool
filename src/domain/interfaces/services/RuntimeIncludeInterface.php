<?php

namespace yii2tool\tool\domain\interfaces\services;

use yii2rails\domain\interfaces\services\CrudInterface;

/**
 * Interface RuntimeIncludeInterface
 * 
 * @package yii2tool\tool\domain\interfaces\services
 * 
 * @property-read \yii2tool\tool\domain\Domain $domain
 * @property-read \yii2tool\tool\domain\interfaces\repositories\RuntimeIncludeInterface $repository
 */
interface RuntimeIncludeInterface extends CrudInterface {

    public function allUnique();

}
