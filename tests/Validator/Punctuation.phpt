<?php

namespace Cothema\NLP\Test\Elements\Validator;

use Cothema\NLP\Elements\Validator\Punctuation as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Punctuation extends \Tester\TestCase {

    public function testValid() {
        $valid = [
            '?', '{', ')', '.', '\'', '"', ':'
        ];
        
        foreach($valid as $validOne) {
            Assert::true((new Tested($validOne))->isValid());
        }
    }
    
    public function testNotValid() {
        $valid = [
            'd', 'D', 'X', ' ', '5', 'G'
        ];
        
        foreach($valid as $validOne) {
            Assert::false((new Tested($validOne))->isValid());
        }
    }

}

(new Punctuation)->run();
