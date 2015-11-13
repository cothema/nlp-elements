<?php

namespace Cothema\NLP\Test\Elements\Validator;

use Cothema\NLP\Elements\Validator\Vowel as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Vowel extends \Tester\TestCase {

    public function testValid() {
        $valid = [
            'a', 'E', 'i', 'o', 'U', 'Ě'
        ];
        
        foreach($valid as $validOne) {
            Assert::true((new Tested($validOne))->isValid());
        }
    }
    
    public function testNotValid() {
        $valid = [
            'd', 'D', 'X', 'z', 'f', 'G'
        ];
        
        foreach($valid as $validOne) {
            Assert::false((new Tested($validOne))->isValid());
        }
    }

}

(new Vowel)->run();
