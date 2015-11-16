<?php

namespace Cothema\NLP\Test\Elements\Validator\Expression;

use Cothema\NLP\Elements\Validator\Expression\Number as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Number extends \Tester\TestCase {

    public function testValid() {
        $valid = [
            '1', 985, '985'
        ];
        
        foreach($valid as $validOne) {
            Assert::true((new Tested($validOne))->isValid());
        }
    }
    
    public function testNotValid() {
        $valid = [
            'me', '2 dogs'
        ];
        
        foreach($valid as $validOne) {
            Assert::false((new Tested($validOne))->isValid());
        }
    }

}

(new Number)->run();
