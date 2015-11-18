<?php

namespace Cothema\NLP\Test\Elements\Validator\Expression;

use Cothema\NLP\Elements\Validator\Expression\URLSimple as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class URLSimple extends \Tester\TestCase {

    public function testValid() {
        $valid = [
            'www.example.com', 'example.com'
        ];

        foreach ($valid as $validOne) {
            Assert::true((new Tested($validOne))->isValid());
        }
    }

    public function testNotValid() {
        $valid = [
            'example com', 'http://www.example.com'
        ];

        foreach ($valid as $validOne) {
            Assert::false((new Tested($validOne))->isValid());
        }
    }

}

(new URLSimple)->run();
