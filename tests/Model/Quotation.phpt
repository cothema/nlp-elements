<?php

namespace Cothema\NLP\Test\Elements\Model;

use Cothema\NLP\Elements\Model\Quotation as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Quotation extends \Tester\TestCase {

    public function testCase1() {
        $examples = [
            'Hi Michael!',
            'Such a nice evening today.'
        ];

        foreach ($examples as $example) {
            Assert::same($example, (string) (new Tested($example)));
        }
    }

}

(new Quotation)->run();
