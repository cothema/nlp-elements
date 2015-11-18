<?php

namespace Cothema\NLP\Elements\Validator\Expression;

class URLSimple extends \Cothema\NLP\Elements\Validator\A\Expression {

    public function isValid() {
        if (preg_match('~^\S+://\S+$~', $this->value)) {
            return FALSE;
        }

        if (!(preg_match('~^\S+\.\S+$~', $this->value))) {
            return FALSE;
        }
        
        if ((preg_match('~^[\d\.]+$~', $this->value))) {
            return FALSE;
        }

        return (bool) filter_var('http://' . $this->value, FILTER_VALIDATE_URL);
    }

}
