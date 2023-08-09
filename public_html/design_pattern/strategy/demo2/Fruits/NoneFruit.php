<?php
namespace Fruits;
require_once('./Interfaces/FruitInterface.php');
use Interfaces\FruitInterface;

class NoneFruit implements FruitInterface {
    public function getName(){
        return 'なし';
    }

    public function getColor(){
        return 'なし';
    }

    public function getHasLike(){
        return 'なし';
    }

    public function getOrderOfPopularity(){
        return 'なし';
    }

    public function getCalorie(){
        return 'なし';
    }

}