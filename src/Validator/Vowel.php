<?php

namespace Cothema\NLP\Elements\Validator;

class Vowel extends A\Validator {

    public static function getVowelLetters() {
        $vowelsLower = [
            'a', 'e', 'i', 'o', 'u', 'y',
            'á', 'é', 'í', 'ó', 'ú', 'ý',
            'ě'
        ];

        $vowelsUpper = array_map(function($in) {
            return mb_strtoupper($in, 'utf-8');
        }, $vowelsLower);

        return array_merge($vowelsLower, $vowelsUpper);
    }
    
    public function isValid() {
        return in_array($this->value, self::getVowelLetters());
    }

}
