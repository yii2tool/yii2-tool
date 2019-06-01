<?php

namespace yii2module\tool\domain\repositories\ar;

use yii\helpers\ArrayHelper;
use yii2lab\db\domain\helpers\TableHelper;
use yii2module\tool\domain\interfaces\repositories\RuntimeIncludeInterface;
use yii2rails\domain\data\Query;
use yii2rails\domain\repositories\BaseRepository;
use yii2rails\extension\activeRecord\repositories\base\BaseActiveArRepository;

/**
 * Class RuntimeIncludeRepository
 * 
 * @package yii2module\tool\domain\repositories\ar
 * 
 * @property-read \yii2module\tool\domain\Domain $domain
 */
class RuntimeIncludeRepository extends BaseActiveArRepository implements RuntimeIncludeInterface {

	protected $schemaClass = true;

	public function tableName()
    {
        return 'runtime_include';
    }

    public function allUnique() {
        $tableName = TableHelper::getGlobalName($this->tableName());
        $command = "
SELECT class
FROM $tableName
GROUP BY class
";
        $all = \Yii::$app->db->createCommand($command)->queryAll();
        $all = ArrayHelper::getColumn($all, 'class');
        $all = array_unique($all);
        return $all;
    }

    private function totalItem111($classList) {
        $tableName = TableHelper::getGlobalName('runtime_include');
        $classes = "'" . implode("','", $classList) . "'";
        $command = "
SELECT id, class, timestamp
FROM $tableName
WHERE class IN($classes)
ORDER BY id ASC
";
        //d($command);
        $all = \Yii::$app->db->createCommand($command)->queryAll();
        //d($all);
        return $all;
    }

    private function totalItem($maxCount) {
        $tableName = TableHelper::getGlobalName('runtime_include');
        $command = "
SELECT class, COUNT(*) as count
FROM $tableName
GROUP BY class
HAVING COUNT(*) = $maxCount

";
        $all = \Yii::$app->db->createCommand($command)->queryAll();
        //d($all);
        return $all;
    }

    private function max() {
        $tableName = TableHelper::getGlobalName('runtime_include');
        $command = "
SELECT class, COUNT(*) as count
FROM $tableName
GROUP BY class

LIMIT 1
";
        $all = \Yii::$app->db->createCommand($command)->queryAll();
        return intval($all[0]['count']);
    }

}
