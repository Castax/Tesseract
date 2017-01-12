<?php

namespace pocketmine\item;
use pocketmine\item\Item;
use pocketmine\item\Armor;
class Elytra extends Armor {

public function __construct($meta = 0, $count = 1){
	
  parent::__construct(self::ELYTRA, $meta, $count, "Elytra Wings");
	
  }
	public function getArmorType(){
		return Armor::TYPE_CHESTPLATE;
	}
	public function getMaxDurability(){
		return 431;
	}
	public function isChestplate(){
		return true;
	}
}
