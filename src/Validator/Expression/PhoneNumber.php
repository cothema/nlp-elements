<?php

namespace Cothema\NLP\Elements\Validator\Expression;

class PhoneNumber extends \Cothema\NLP\Elements\Validator\A\Expression {

    public function isValid() {
        return (bool) preg_match('~^(\(?(\+|00)\d{2,3}\)?)?[\(\)/0-9 -]{6,}$~', $this->value);
    }

}
