<?php
class GoodsWithTax extends Goods
{
	public function printPrice(): void
	{
		$priceWithTax = round($this->getPrice() * 1.08);  
		print($this->getName()."の税込み価格: ￥".$priceWithTax."<br>");  
	}
}