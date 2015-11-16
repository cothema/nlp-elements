<?php

namespace Cothema\NLP\Test\Elements\Model\Expression;

use Cothema\NLP\Elements\Model\Expression\PhoneNumber as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class PhoneNumber extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('+420000000000', (string) (new Tested('+420000000000')));
    }

}

(new PhoneNumber)->run();
