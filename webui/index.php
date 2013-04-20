<?php

// change the following paths if necessary
switch ($_SERVER['SERVER_NAME']) {
    case '10.10.0.20':
        $yii = dirname(__FILE__) . '/../yii/framework/yii.php';
        break;
    default:
        $yii = dirname(__FILE__) . '/../../yii/framework/yii.php';
        break;
}

$config = dirname(__FILE__) . '/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

require_once($yii);
Yii::createWebApplication($config)->run();
