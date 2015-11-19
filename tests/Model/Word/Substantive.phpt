<?php

namespace Cothema\NLP\Test\Elements\Model\Word;

use Cothema\NLP\Elements\Model\Word\Substantive as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Substantive extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('lion', (string) (new Tested('lion')));
    }

}

(new Substantive)->run();
