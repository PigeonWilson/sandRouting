<?php
require_once ('sandLoader.php');

if (!isset($_REQUEST['skey'])) die('no key provided');
if (!$router->keyLinkValidator($_REQUEST['skey'], $router->_->getScriptName())) die('invalid key provided');
?>
page A

