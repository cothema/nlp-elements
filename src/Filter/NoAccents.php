<?php

namespace Cothema\NLP\Elements\Filter;

use Nette\Utils\Strings;

class NoAccents extends A\Filter {

    protected function process() {
        $this->value = Strings::toAscii($this->value);
    }

}
