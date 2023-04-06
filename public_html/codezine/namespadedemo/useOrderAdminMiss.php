<?php
// require_once("./classes/businesses/OrderAdmin.php");
// require_once("./classes/consumers/OrderAdmin.php");
require_once("autoload.php");
use phpdemo\codezine\namespadedemo\classes\businesses\OrderAdminName as OrderAdminBusiness;
use phpdemo\codezine\namespadedemo\classes\consumers\OrderAdminName as OrderAdminConsumer;

$orderAdmin = new OrderAdminBusiness();
$custAdmin = new OrderAdminConsumer();