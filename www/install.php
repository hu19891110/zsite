<?php
/**
 * The install router file of XiRangBPS.
 *
 * @copyright   Copyright 2012-2013 QingDao XiRang Network Infomation Co,LTD (www.xirang.biz)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     XiRangBPS
 * @version     $Id$
 * @link        http://www.xirang.biz
 */
//error_reporting(0);
define('RUN_MODE', 'install');

/* Load the framework. */
include '../framework/router.class.php';
include '../framework/control.class.php';
include '../framework/model.class.php';
include '../framework/helper.class.php';

/* Instance the app and run it. */
$app    = router::createApp('pms', dirname(dirname(__FILE__)));
$config = $app->config;

/* Check installed or not. */
if(!isset($_SESSION['installing']) and isset($config->installed) and $config->installed) die(header('location: index.php'));

/* Reset the config params. */
$config->set('requestType', 'GET');
$config->set('debug', true);
$config->set('default.module', 'install');
$app->setDebug();

/* If setted db parms, connect it. */
if(isset($config->installed) and $config->installed) $dbh = $app->connectDB();

/* Run the app. */
$app->parseRequest();
$app->loadModule();
