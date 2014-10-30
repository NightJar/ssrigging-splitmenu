<?php

class SplitMenu extends Extension {

	public function MenuSplit($menu=1, $segments=2) {
		$menu = $this->owner->Menu($menu);
		if(!$segments || $segments == 1) return $menu;
		$count = $menu->Count();
		$amount = ceil($count/$segments);
		$result = new ArrayList();
		for($pos=0; $pos < $count; $pos += $amount) {
			$result->push($menu->limit($amount, $pos));
		}
		return $result;
	}

}
