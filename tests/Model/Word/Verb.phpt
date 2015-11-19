<?php

namespace Cothema\NLP\Test\Elements\Model\Word;

use Cothema\NLP\Elements\Model\Word\Verb as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Verb extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('go', (string) (new Tested('go')));
    }

}

(new Verb)->run();
