<?php

namespace yii2tool\tool\console\controllers;

use Yii;
use yii2rails\extension\console\base\Controller;

/**
 * Grabber tools
 */
class GrabberController extends Controller
{
	
	/**
	 * Grab
	 */
	public function actionRun()
	{
		\App::$domain->tool->grabber->run();
	}
	
}
