<?php

namespace Cothema\NLP\Elements\Validator\Expression;

class Word extends \Cothema\NLP\Elements\Validator\A\Expression {

    public function isValid() {
        return (bool) preg_match('~^\S+$~', $this->value);
    }

}
