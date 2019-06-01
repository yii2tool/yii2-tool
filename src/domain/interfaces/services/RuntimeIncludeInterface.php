<?php

namespace yii2module\tool\domain\interfaces\services;

use yii2rails\domain\interfaces\services\CrudInterface;

/**
 * Interface RuntimeIncludeInterface
 * 
 * @package yii2module\tool\domain\interfaces\services
 * 
 * @property-read \yii2module\tool\domain\Domain $domain
 * @property-read \yii2module\tool\domain\interfaces\repositories\RuntimeIncludeInterface $repository
 */
interface RuntimeIncludeInterface extends CrudInterface {

    public function allUnique();

}
