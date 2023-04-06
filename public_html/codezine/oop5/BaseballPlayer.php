<?php
class BaseballPlayer extends SportsPlayer
{
    use HitTrait, ThrowTrait;
 
    //バットを表すプロパティ。
    private $bat;
    //グローブを表すプロパティ。
    private $glove;
}