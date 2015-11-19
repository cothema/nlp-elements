<?php

namespace Cothema\NLP\Test\Elements\Model\Word;

use Cothema\NLP\Elements\Model\Word\Adjective as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Adjective extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('nice', (string) (new Tested('nice')));
    }

}

(new Adjective)->run();
