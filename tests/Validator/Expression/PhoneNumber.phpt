<?php

namespace Cothema\NLP\Test\Elements\Validator\Expression;

use Cothema\NLP\Elements\Validator\Expression\PhoneNumber as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class PhoneNumber extends \Tester\TestCase {

    public function testValid() {
        $valid = [
            '+420000000000'
        ];
        
        foreach($valid as $validOne) {
            Assert::true((new Tested($validOne))->isValid());
        }
    }
    
    public function testNotValid() {
        $valid = [
            'phone'
        ];
        
        foreach($valid as $validOne) {
            Assert::false((new Tested($validOne))->isValid());
        }
    }

}

(new PhoneNumber)->run();
