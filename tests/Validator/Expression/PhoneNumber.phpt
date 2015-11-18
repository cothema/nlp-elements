<?php

namespace Cothema\NLP\Test\Elements\Validator\Expression;

use Cothema\NLP\Elements\Validator\Expression\PhoneNumber as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class PhoneNumber extends \Tester\TestCase {

    public function testValid() {
        $valid = [
            '+420000000000','(+420)000000000','00420000000000', '123 456 789'
        ];
        
        foreach($valid as $validOne) {
            Assert::true((new Tested($validOne))->isValid());
        }
    }
    
    public function testNotValid() {
        $valid = [
            'phone', '10.0.0.1'
        ];
        
        foreach($valid as $validOne) {
            Assert::false((new Tested($validOne))->isValid());
        }
    }

}

(new PhoneNumber)->run();
