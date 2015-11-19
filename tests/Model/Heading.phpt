<?php

namespace Cothema\NLP\Test\Elements\Model;

use Cothema\NLP\Elements\Model\Heading as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Heading extends \Tester\TestCase {

    public function testCase1() {
        $examples = [
            'About us',
            'Result'
        ];

        foreach ($examples as $example) {
            Assert::same($example, (string) (new Tested($example)));
        }
    }

}

(new Heading)->run();
