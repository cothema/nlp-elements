<?php

namespace Cothema\NLP\Test\Elements\Filter;

use Cothema\NLP\Elements\Filter\UpperCase as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class UpperCase extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('FRUIT', (new Tested('Fruit'))->apply());
    }

}

(new UpperCase)->run();
