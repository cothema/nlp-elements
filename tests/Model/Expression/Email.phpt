<?php

namespace Cothema\NLP\Test\Elements\Model\Expression;

use Cothema\NLP\Elements\Model\Expression\Email as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Email extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('email@example.com', (string) (new Tested('email@example.com')));
    }

}

(new Email)->run();
