<?php

namespace Cothema\NLP\Test\Elements\Model\Word;

use Cothema\NLP\Elements\Model\Word\Adverb as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Adverb extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('late', (string) (new Tested('late')));
    }

}

(new Adverb)->run();
