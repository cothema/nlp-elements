<?php

namespace Cothema\NLP\Elements\Filter;

use Nette\Utils\Strings;

class LowerCase extends A\Filter {

	protected function process() {
		$this->value = Strings::lower($this->value);
	}

}
