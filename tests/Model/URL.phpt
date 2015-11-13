<?php

namespace Cothema\NLP\Test\Elements\Model;

use Cothema\NLP\Elements\Model\URL as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class URL extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('www.example.com', (string) (new Tested('www.example.com')));
    }

}

(new URL)->run();