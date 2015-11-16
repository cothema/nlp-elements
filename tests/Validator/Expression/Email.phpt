<?php

namespace Cothema\NLP\Test\Elements\Validator\Expression;

use Cothema\NLP\Elements\Validator\Expression\Email as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Email extends \Tester\TestCase {

    public function testValid() {
        $valid = [
            'test@example.com', 'my.name@example.com'
        ];
        
        foreach($valid as $validOne) {
            Assert::true((new Tested($validOne))->isValid());
        }
    }
    
    public function testNotValid() {
        $valid = [
            'me', 'me@me@exmple.com', 'me @example.com'
        ];
        
        foreach($valid as $validOne) {
            Assert::false((new Tested($validOne))->isValid());
        }
    }

}

(new Email)->run();
