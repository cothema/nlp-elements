<?php

namespace Cothema\NLP\Elements\Validator\Expression;

class Universal extends \Cothema\NLP\Elements\Validator\A\Expression {

    public function isValid() {
        return (bool) preg_match('~^\S+$~', $this->value);
    }

}
