<?php
namespace Fruits;
require_once('./Interfaces/FruitInterface.php');
use Interfaces\FruitInterface;


class Orange implements FruitInterface {
    public function getName(): string{
        return 'みかん';
    }

    public function getColor(): string {
        return  'orange';
    }

    public function getHasLike(): string{
        return '好き';
    }

    public function getOrderOfPopularity(): int{
        return 1;
    }

    public function getCalorie(): int{
        return 100;
    }

}