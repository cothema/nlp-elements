<?php

namespace Cothema\NLP\Test\Elements\Model\Expression;

use Cothema\NLP\Elements\Model\Expression\Cluster\Words as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../../bootstrap.php';

class Words extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('my lion', (string) (new Tested('my lion')));
    }

}

(new Words)->run();
