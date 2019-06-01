<?php

namespace yii2module\tool\console\bin;

use Yii;
use yii\helpers\ArrayHelper;
use yii2rails\app\domain\helpers\phar\PharCacheHelper;
use yii2rails\extension\console\helpers\Output;
use yii2rails\extension\console\base\Controller;

class PharController extends \yii\base\Component
{
	
	public function init() {
		parent::init();
		Output::line();
	}

	public function actionMakeCache()
	{
		Output::line('Update cache...');
        //$all = \App::$domain->tool->runtimeInclude->allUnique();
        $all = PharCacheHelper::allCommon();
        //d([count($all), $all]);
        PharCacheHelper::addClassListWithParents($all);
        d([count($all), $all]);
	}

}
