<?php

namespace Cothema\NLP\Test\Elements\Model\Expression;

use Cothema\NLP\Elements\Model\Expression\Number as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Number extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('8', (string) (new Tested(8)));
    }

}

(new Number)->run();
