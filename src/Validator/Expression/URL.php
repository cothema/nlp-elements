<?php

namespace Cothema\NLP\Elements\Validator\Expression;

class URL extends \Cothema\NLP\Elements\Validator\A\Expression {

    public function isValid() {
        return (bool) filter_var($this->value, FILTER_VALIDATE_URL);
    }

}
