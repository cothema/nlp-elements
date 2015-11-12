<?php

namespace Cothema\NLP\Elements\Filter;

use Nette\Utils\Strings;

class UpperCase extends AFilter {

	protected function process() {
		$this->value = Strings::upper($this->value);
	}

}
