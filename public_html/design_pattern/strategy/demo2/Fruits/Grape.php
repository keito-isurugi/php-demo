<?php
namespace Fruits;
require_once('./Interfaces/FruitInterface.php');
use Interfaces\FruitInterface;

class Grape implements FruitInterface {
    public function getName(): string{
        return 'ぶどう';
    }

    public function getColor(): string{
        return 'purple';
    }

    public function getHasLike(): string{
        return '嫌い';
    }

    public function getOrderOfPopularity(): int{
        return 2;
    }

    public function getCalorie(): int{
        return 200;
    }

}