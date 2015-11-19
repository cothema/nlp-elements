<?php

namespace Cothema\NLP\Test\Elements\Model;

use Cothema\NLP\Elements\Model\Space as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Space extends \Tester\TestCase {

    public function testCase1() {
        $examples = [
            ' '
        ];

        foreach ($examples as $example) {
            Assert::same($example, (string) (new Tested($example)));
        }
    }

}

(new Space)->run();
