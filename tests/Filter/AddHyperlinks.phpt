<?php

namespace Cothema\NLP\Test\Elements\Filter;

use Cothema\NLP\Elements\Filter\AddHyperlinks as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class AddHyperlinks extends \Tester\TestCase {

    public function testCase1() {
        Assert::same('My website is <a href="http://www.example.com">www.example.com</a>.', (new Tested('My website is www.example.com.'))->apply());
    }

    public function testCase2() {
        Assert::same('My website is <a href="mailto:my@example.com">my@example.com</a>.', (new Tested('My website is my@example.com.'))->apply());
    }
    
    public function testCase3() {
        Assert::same('My phone number is <a href="tel:+420123456789">+420123456789</a>.', (new Tested('My phone number is +420123456789.'))->apply());
    }

}

(new AddHyperlinks)->run();
