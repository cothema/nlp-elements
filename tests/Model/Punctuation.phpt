<?php

namespace Cothema\NLP\Test\Elements\Model;

use Cothema\NLP\Elements\Model\Punctuation as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Punctuation extends \Tester\TestCase {

    public function testCase1() {
        $examples = [
            '.',
            '!',
            '"',
            '('
        ];

        foreach ($examples as $example) {
            Assert::same($example, (string) (new Tested($example)));
        }
    }

}

(new Punctuation)->run();
