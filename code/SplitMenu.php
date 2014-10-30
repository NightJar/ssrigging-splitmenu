<?php

class SplitMenu extends Extension {

	public function MenuSplit($menu=1, $segments=2) {
		return $this->owner->Menu($menu)->split($segments);
	}

}
