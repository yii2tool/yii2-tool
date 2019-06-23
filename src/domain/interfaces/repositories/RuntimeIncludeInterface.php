<?php

namespace yii2tool\tool\domain\interfaces\repositories;

use yii2rails\domain\interfaces\repositories\CrudInterface;

/**
 * Interface RuntimeIncludeInterface
 * 
 * @package yii2tool\tool\domain\interfaces\repositories
 * 
 * @property-read \yii2tool\tool\domain\Domain $domain
 */
interface RuntimeIncludeInterface extends CrudInterface {

    public function allUnique();

}
