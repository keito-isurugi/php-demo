<?php
require_once("InvokeController.php");
 
$ic = new InvokeController(6);
 
$list = [1, 3, 5, 7, 9];
array_walk($list, $ic);