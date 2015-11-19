<?php

namespace Cothema\NLP\Elements\Filter;

use Nette\Utils\Strings;

class UpperCase extends A\Filter {

    protected function process() {
        $this->value = Strings::upper($this->value);
    }

}
