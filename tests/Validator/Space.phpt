<?php

namespace Cothema\NLP\Test\Elements\Validator;

use Cothema\NLP\Elements\Validator\Space as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Space extends \Tester\TestCase {

    public function testValid() {
        $valid = [
            ' '
        ];

        foreach ($valid as $validOne) {
            Assert::true((new Tested($validOne))->isValid());
        }
    }

    public function testNotValid() {
        $valid = [
            'd', '-', '5'
        ];

        foreach ($valid as $validOne) {
            Assert::false((new Tested($validOne))->isValid());
        }
    }

}

(new Space)->run();
