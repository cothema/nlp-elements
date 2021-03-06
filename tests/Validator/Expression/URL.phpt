<?php

namespace Cothema\NLP\Test\Elements\Validator\Expression;

use Cothema\NLP\Elements\Validator\Expression\URL as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class URL extends \Tester\TestCase {

    public function testValid() {
        $valid = [
            'http://www.example.com'
        ];
        
        foreach($valid as $validOne) {
            Assert::true((new Tested($validOne))->isValid());
        }
    }
    
    public function testNotValid() {
        $valid = [
           'example com'
        ];
        
        foreach($valid as $validOne) {
            Assert::false((new Tested($validOne))->isValid());
        }
    }

}

(new URL)->run();
