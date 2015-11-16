<?php

namespace Cothema\NLP\Elements\Validator\Expression;

class Number extends \Cothema\NLP\Elements\Validator\A\Expression {

    public function isValid() {
        return (bool) preg_match('~^\d+$~', $this->value);
    }

}
