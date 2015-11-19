<?php

namespace Cothema\NLP\Test\Elements\Model\Word;

use Cothema\NLP\Elements\Model\Word\Numeral as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Numeral extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('two', (string) (new Tested('two')));
    }

}

(new Numeral)->run();
