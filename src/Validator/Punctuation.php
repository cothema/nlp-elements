<?php

namespace Cothema\NLP\Elements\Validator;

class Punctuation extends A\Validator {

    public static function getAllowedChars() {
        return [
            '.', '?', '!',
            ':', ',', '"', '\'', ';', '(', ')',
            '{', '}', '[', ']', '/'
        ];
    }

    public function isValid() {
        return in_array($this->value, self::getAllowedChars());
    }

}
