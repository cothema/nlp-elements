<?php

namespace Cothema\NLP\Elements\Filter;

use Nette\Utils\Strings;

class FirstUpper extends AFilter {

	protected function process() {
		$this->value = Strings::firstUpper($this->value);
	}

}
