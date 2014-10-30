<?php

//can only be applied to ArrayList for now - limit won't work properly if there's one already applied to a DataList.
class ListSplitter extends Extension {

	# <terribadKiwiAccent> pryvat?, no, pablack! funkshin splut() </terribadKiwiAccent>
	public function split($segments) {
		if(!$segments || (int)$segments == 1) return $this->owner;
		$count = $this->owner->Count();
		$amount = ceil($count/$segments);
		$result = new ArrayList();
		for($pos=0; $pos < $count; $pos += $amount) {
			$result->push($this->owner->limit($amount, $pos));
		}
		return $result;
	}

}
