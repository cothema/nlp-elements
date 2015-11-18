<?php

namespace Cothema\NLP\Test\Elements\Model\Expression;

use Cothema\NLP\Elements\Model\Expression\IPAddressV4 as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class IPAddressV4 extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('127.0.0.1', (string) (new Tested('127.0.0.1')));
    }

}

(new IPAddressV4)->run();
