<?php

namespace Cothema\NLP\Test\Elements\Model\Word;

use Cothema\NLP\Elements\Model\Word\Conjuction as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Conjuction extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('go', (string) (new Tested('go')));
    }

}

(new Conjuction)->run();
