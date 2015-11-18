<?php

namespace Cothema\NLP\Test\Elements\Model\Expression;

use Cothema\NLP\Elements\Model\Expression\Number as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Number extends \Tester\TestCase {

    public function testValid1() {
        Assert::same('8', (string) (new Tested(8)));
    }
   
    public function testInvalid1() {
        Assert::exception(function() {new Tested('a');}, '\Cothema\NLP\Elements\Model\Exception\InvalidInput');
        Assert::exception(function() {new Tested('University');}, '\Cothema\NLP\Elements\Model\Exception\InvalidInput');
    }

}

(new Number)->run();
