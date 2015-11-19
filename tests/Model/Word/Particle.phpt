<?php

namespace Cothema\NLP\Test\Elements\Model\Word;

use Cothema\NLP\Elements\Model\Word\Particle as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Particle extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('well', (string) (new Tested('well')));
    }

}

(new Particle)->run();
