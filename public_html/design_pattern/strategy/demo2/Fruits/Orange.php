<?php
namespace PublicHtml\design_pattern\strategy\demo2\fruits;
use PublicHtml\design_pattern\strategy\demo2\interfaces\FruitInterface;

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