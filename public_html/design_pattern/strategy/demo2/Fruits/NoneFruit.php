<?php
namespace Fruits;
require_once('./Interfaces/FruitInterface.php');
use Interfaces\FruitInterface;

class NoneFruit implements FruitInterface {
    public function getName(): string{
        return 'なし';
    }

    public function getColor(): string{
        return 'なし';
    }

    public function getHasLike(): string{
        return 'なし';
    }

    public function getOrderOfPopularity(): int{
        return 0;
    }

    public function getCalorie(): int{
        return 0;
    }

}