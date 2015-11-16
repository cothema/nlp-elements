<?php

namespace Cothema\NLP\Elements\Validator\Expression;

class PhoneNumber extends \Cothema\NLP\Elements\Validator\A\Expression {

    public function isValid() {
        return (bool) preg_match('~^[+]?[()/0-9. -]{9,}$~', $this->value);
    }

}
