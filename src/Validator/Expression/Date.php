<?php

namespace Cothema\NLP\Elements\Validator\Expression;

class Date extends \Cothema\NLP\Elements\Validator\A\Expression {

    public function isValid() {
        return (bool) preg_match('~^\d{4}\-\d{2}-\d{2}$~', $this->value);
    }

}
