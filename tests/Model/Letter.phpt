<?php

namespace Cothema\NLP\Test\Elements\Model;

use Cothema\NLP\Elements\Model\Letter as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Letter extends \Tester\TestCase {

    public function testCase1() {
        $examples = [
            'a',
            'g',
            'y',
            'Ch'
        ];

        foreach ($examples as $example) {
            Assert::same($example, (string) (new Tested($example)));
        }
    }

}

(new Letter)->run();
