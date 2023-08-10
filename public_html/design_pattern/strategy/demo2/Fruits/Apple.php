<?php
namespace PublicHtml\design_pattern\strategy\demo2\fruits;
use PublicHtml\design_pattern\strategy\demo2\interfaces\FruitInterface;

class Apple implements FruitInterface {
    public function getName(): string{
        return 'リンゴ';
    }

    public function getColor(): string{
        return 'red';
    }

    public function getHasLike(): string{
        return '好き';
    }

    public function getOrderOfPopularity(): int{
        return 3;
    }

    public function getCalorie(): int{
        return 10;
    }
}