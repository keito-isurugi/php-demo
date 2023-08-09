<?php
namespace Fruits;
require_once('./Interfaces/FruitInterface.php');
use Interfaces\FruitInterface;

class Grape implements FruitInterface {
    public function getName(){
        return 'ぶどう';
    }

    public function getColor(){
        return 'purple';
    }

    public function getHasLike(){
        return '嫌い';
    }

    public function getOrderOfPopularity(){
        return 2;
    }

    public function getCalorie(){
        return 200;
    }

}