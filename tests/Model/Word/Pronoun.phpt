<?php

namespace Cothema\NLP\Test\Elements\Model\Word;

use Cothema\NLP\Elements\Model\Word\Pronoun as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Pronoun extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('you', (string) (new Tested('you')));
    }

}

(new Pronoun)->run();
