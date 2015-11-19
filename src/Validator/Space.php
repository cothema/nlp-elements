<?php

namespace Cothema\NLP\Elements\Validator;

class Space extends \Cothema\NLP\Elements\Validator\A\Expression {

    public function isValid() {
        return (bool) preg_match('~^\s+$~', $this->value);
    }

}
