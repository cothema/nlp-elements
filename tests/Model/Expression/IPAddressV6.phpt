<?php

namespace Cothema\NLP\Test\Elements\Model\Expression;

use Cothema\NLP\Elements\Model\Expression\IPAddressV6 as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class IPAddressV6 extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('::1', (string) (new Tested('::1')));
    }

}

(new IPAddressV6)->run();
