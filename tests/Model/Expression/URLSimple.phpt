<?php

namespace Cothema\NLP\Test\Elements\Model\Expression;

use Cothema\NLP\Elements\Model\Expression\URLSimple as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class URLSimple extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('www.example.com', (string) (new Tested('www.example.com')));
    }

}

(new URLSimple)->run();
