<?php

namespace Cothema\NLP\Test\Elements\Model;

use Cothema\NLP\Elements\Model\Vowel as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Vowel extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('a', (string) (new Tested('a')));
    }

}

(new Vowel)->run();
