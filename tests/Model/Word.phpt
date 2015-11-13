<?php

namespace Cothema\NLP\Test\Elements\Model;

use Cothema\NLP\Elements\Model\Word as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Word extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('lion', (string) (new Tested('lion')));
    }

}

(new Word)->run();
