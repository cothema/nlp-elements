<?php

namespace Cothema\NLP\Test\Elements\Model\Word;

use Cothema\NLP\Elements\Model\Word\Preposition as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Preposition extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('in', (string) (new Tested('in')));
    }

}

(new Preposition)->run();
