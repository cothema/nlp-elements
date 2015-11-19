<?php

namespace Cothema\NLP\Test\Elements\Model;

use Cothema\NLP\Elements\Model\ComplexSentencePart as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class ComplexSentencePart extends \Tester\TestCase {

    public function testCase1() {
        $examples = [
            'I walked home',
            'but others waited for a bus',
            'Do it',
            'take a rest'
        ];

        foreach ($examples as $example) {
            Assert::same($example, (string) (new Tested($example)));
        }
    }

}

(new ComplexSentencePart)->run();
