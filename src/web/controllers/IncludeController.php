<?php

namespace yii2module\tool\web\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\helpers\ArrayHelper;
use yii2lab\db\domain\helpers\TableHelper;
use yii2rails\app\domain\helpers\phar\PharCacheHelper;
use yii2rails\extension\code\helpers\CodeCacheHelper;
use yii2rails\extension\code\helpers\generator\FileGeneratorHelper;
use yii2rails\extension\console\base\Controller;
use yii2rails\extension\yii\helpers\FileHelper;

class IncludeController extends Controller
{

	public function actionIndex()
	{
        $all = PharCacheHelper::allCommon();
        //$all = \App::$domain->tool->runtimeInclude->allUnique();
        //d([count($all), $all]);
        PharCacheHelper::addClassListWithParents($all);
        d([count($all), $all]);
	}

}
