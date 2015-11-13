<?php

namespace Cothema\NLP\Test\Elements\Model;

use Cothema\NLP\Elements\Model\Syllable as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Syllable extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('pa', (string) (new Tested('pa')));
    }

}

(new Syllable)->run();
