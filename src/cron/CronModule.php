<?php
/**
 * @copyright Copyright (c) 2013-2016 Voodoo Mobile Consulting Group LLC
 * @link      https://voodoo.rocks
 * @license   http://opensource.org/licenses/MIT The MIT License (MIT)
 */
namespace vm\api;

use Yii;
use yii\base\Exception;

/**
 * Class CronModule
 * @package vm\api
 */
class CronModule extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\cron\controllers';
    /**
     * @throws Exception
     */
    public function init()
    {
        parent::init();
    }
}