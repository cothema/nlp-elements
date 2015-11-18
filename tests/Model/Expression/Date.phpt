<?php

namespace Cothema\NLP\Test\Elements\Model\Expression;

use Cothema\NLP\Elements\Model\Expression\Date as Tested;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Date extends \Tester\TestCase {

    public function testValid1() {
        Assert::same('2015-10-28', (string) (new Tested('2015-10-28')));
    }
   
    public function testInvalid1() {
        Assert::exception(function() {new Tested('124');}, '\Cothema\NLP\Elements\Model\Exception\InvalidInput');
        Assert::exception(function() {new Tested('test');}, '\Cothema\NLP\Elements\Model\Exception\InvalidInput');
    }

}

(new Date)->run();
