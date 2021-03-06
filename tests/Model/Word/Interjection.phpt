<?php

namespace Cothema\NLP\Test\Elements\Model\Word;

use Cothema\NLP\Elements\Model\Word\Interjection as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Interjection extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('Hurrah', (string) (new Tested('Hurrah')));
    }

}

(new Interjection)->run();
