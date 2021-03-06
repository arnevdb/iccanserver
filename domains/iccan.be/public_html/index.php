<?php
// constanten ivm de paths
define('APPLICATION_PATH', 'application/');
define('SYSTEM_PATH', 'system/');

// require before unserializing object from session
require_once(SYSTEM_PATH . 'model/Message.php');
require_once(APPLICATION_PATH . 'config.php');

require_once(SYSTEM_PATH . 'model/Db.php');
require_once(SYSTEM_PATH . 'model/Mapper.php');
require_once(SYSTEM_PATH . 'model/Identifiable.php');
require_once(SYSTEM_PATH . 'model/Validator.php');
require_once(SYSTEM_PATH . 'model/Auth.php');

require_once(SYSTEM_PATH . 'controller/FrontController.php');
require_once(SYSTEM_PATH . 'controller/Controller.php');
require_once(SYSTEM_PATH . 'controller/Loader.php');
require_once(SYSTEM_PATH . 'controller/Input.php');
require_once(SYSTEM_PATH . 'controller/routeHelpers.php');

require_once(SYSTEM_PATH . 'view/Template.php');
require_once(SYSTEM_PATH . 'view/viewHelpers.php');

require_once(APPLICATION_PATH . 'controller/AdminController.php');

session_start();

$frontController = new FrontController();
$frontController->run();