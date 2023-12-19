<?php
error_reporting(0);
const PREVENT_DIRECT_FILE_ACCESS_CONST = true;
$db_hostname = 'localhost';
$db_name = 'SandRouting';
$db_username = 'root';
$db_password = '';
require_once ('Core' . DIRECTORY_SEPARATOR . 'constant.php');
require_once ('Core' . DIRECTORY_SEPARATOR . 'Journal.php');
require_once ('Core' . DIRECTORY_SEPARATOR . 'Db.php');
require_once ('Core' . DIRECTORY_SEPARATOR . 'T.php');
require_once ('Core' . DIRECTORY_SEPARATOR . 'Router.php');
session_start();

$router = new Router($db_hostname, $db_name, $db_username, $db_password);
$router->_->addToSession('salt', $router->_->random_str(128));