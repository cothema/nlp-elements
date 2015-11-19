<?php

namespace Cothema\NLP\Test\Elements\Tokenizer\Expression;

use Cothema\NLP\Elements\Tokenizer\Expression\Universal as Tested;
use Cothema\NLP\Elements\Model;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Universal extends \Tester\TestCase {

    public function testCase1() {
        $output = (new Tested('5 apples'))->tokenize(TRUE);

        Assert::same('5', $output[0]);
        Assert::same('apples', $output[1]);
        Assert::same(2, count($output));
    }

    public function testCase2() {
        $output = (new Tested('4 cats and 3 dogs.'))->tokenize(TRUE);

        Assert::same('4', $output[0]);
        Assert::same('cats', $output[1]);
        Assert::same('and', $output[2]);
        Assert::same('3', $output[3]);
        Assert::same('dogs', $output[4]);
        Assert::same(5, count($output));
    }

    public function testCase3() {
        $output = (new Tested('5 apples'))->tokenize();

        Assert::type(Model\Expression\Number::class, $output[0]);
        Assert::type(Model\Expression\Word::class, $output[1]);
        Assert::same(2, count($output));
    }

    public function testCase4() {
        $output = (new Tested('4 cats and 3 dogs.'))->tokenize();

        Assert::type(Model\Expression\Number::class, $output[0]);
        Assert::type(Model\Expression\Word::class, $output[1]);
        Assert::type(Model\Expression\Word::class, $output[2]);
        Assert::type(Model\Expression\Number::class, $output[3]);
        Assert::type(Model\Expression\Word::class, $output[4]);
        Assert::same(5, count($output));
    }

    public function testCase5() {
        $output = (new Tested('What\'s up?'))->tokenize();

        Assert::type(Model\Expression\Contraction::class, $output[0]);
        Assert::type(Model\Expression\Word::class, $output[1]);
        Assert::same(2, count($output));
    }

    public function testCase6() {
        $output = (new Tested('My email is test@example.com. My phone number is +420123456789.'))->tokenize();

        Assert::same('My', (string) $output[0]);
        Assert::type(Model\Expression\Word::class, $output[0]);
        Assert::same('email', (string) $output[1]);
        Assert::type(Model\Expression\Word::class, $output[1]);
        Assert::same('is', (string) $output[2]);
        Assert::type(Model\Expression\Word::class, $output[2]);
        Assert::same('test@example.com', (string) $output[3]);
        Assert::type(Model\Expression\Email::class, $output[3]);
        Assert::same('+420123456789', (string) $output[8]);
        Assert::type(Model\Expression\PhoneNumber::class, $output[8]);
        Assert::same(9, count($output));
    }

    public function testCase7() {
        $output = (new Tested('Go to my website: example.com!'))->tokenize();

        Assert::same('example.com', (string) $output[4]);
        Assert::type(Model\Expression\URLSimple::class, $output[4]);
        Assert::same(5, count($output));
    }
    
    public function testCase8() {
        $output = (new Tested('My local IP Addresses are: 127.0.0.1 and ::1.'))->tokenize();

        Assert::same('127.0.0.1', (string) $output[5]);var_dump($output[5] );
        Assert::type(Model\Expression\IPAddressV4::class, $output[5]);
        Assert::same('::1', (string) $output[7]);
        Assert::type(Model\Expression\IPAddressV6::class, $output[7]);
        Assert::same(8, count($output));
    }

}

(new Universal)->run();
