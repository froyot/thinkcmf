<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 老猫 <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace think;
// [ 入口文件 ]

// 调试模式开关
define("APP_DEBUG", true);

// 定义CMF根目录,可更改此目录
define('CMF_ROOT', __DIR__ . '/../');

// 定义应用目录
define('APP_PATH', CMF_ROOT . 'app/');

// 定义网站入口目录
define('WEB_ROOT', __DIR__ . '/');

// 定义插件目录
define('PLUGINS_PATH', __DIR__ . '/plugins/');

// 定义CMF 版本号
define('THINKCMF_VERSION', '5.1.0-dev');

// 加载基础文件
require __DIR__ . '/../vendor/thinkphp/base.php';

// Loader::addClassMap('think\\App', __DIR__ . '/../vendor/thinkcmf/cmf/src/App.php');

// 执行应用并响应
Container::get('cmf\\App', [APP_PATH])->run()->send();
