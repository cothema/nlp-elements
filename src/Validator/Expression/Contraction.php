<?php

namespace Cothema\NLP\Elements\Validator\Expression;

class Contraction extends \Cothema\NLP\Elements\Validator\A\Expression {

    public function isValid() {
        return (bool) preg_match('~^\S+[\']\S+$~', $this->value);
    }

}
