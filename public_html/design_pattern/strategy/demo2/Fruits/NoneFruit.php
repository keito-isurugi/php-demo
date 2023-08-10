<?php
namespace PublicHtml\design_pattern\strategy\demo2\fruits;
use PublicHtml\design_pattern\strategy\demo2\interfaces\FruitInterface;

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