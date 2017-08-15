<?php

use Illuminate\Database\Capsule\Manager as Capsule;

define("BASE_PATH", __DIR__);

//引入自动加载文件
require BASE_PATH.'/vendor/autoload.php';

//引入数据库配置

$capsule = new Capsule;
$capsule->addConnection(require(BASE_PATH.'/config/database.php'));
$capsule->bootEloquent();

//报错信息
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();