<?php

namespace Cothema\NLP\Test\Elements\Model\Expression;

use Cothema\NLP\Elements\Model\Expression\URL as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class URL extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('http://www.example.com', (string) (new Tested('http://www.example.com')));
    }

}

(new URL)->run();
