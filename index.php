<?php 
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;
use \Hcode\Model\User;
use \Hcode\Model\Category;

$app = new Slim();

$app->config('debug', true);

require_once("rota_site.php");
require_once("rota_admin.php");
require_once("rota_admin_users.php");
require_once("rota_categories.php");
require_once("rota_products.php");

$app->run();

?>