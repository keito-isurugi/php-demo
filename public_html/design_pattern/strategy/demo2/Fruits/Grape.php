<?php
namespace PublicHtml\design_pattern\strategy\demo2\fruits;
use PublicHtml\design_pattern\strategy\demo2\interfaces\FruitInterface;

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