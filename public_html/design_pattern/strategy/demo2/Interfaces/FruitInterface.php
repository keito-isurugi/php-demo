<?php
namespace PublicHtml\design_pattern\strategy\demo2\interfaces;
interface FruitInterface{
    public function getName(): string;
    public function getColor(): string;
    public function getHasLike(): string;
    public function getOrderOfPopularity(): int;
    public function getCalorie(): int;
}
