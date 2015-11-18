<?php

namespace Cothema\NLP\Test\Elements\Tokenizer;

use Cothema\NLP\Elements\Tokenizer\Syllable as Tested;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class Syllable extends \Tester\TestCase {

    public function testCase1() {
        $output = (new Tested('kolo'))->tokenize(TRUE);

        Assert::same('ko', $output[0]);
        Assert::same('lo', $output[1]);
        Assert::same(2, count($output));
    }

    public function testCase2() {
        $output = (new Tested('plechovka'))->tokenize(TRUE);

        Assert::same('ple', $output[0]);
        Assert::same('chov', $output[1]);
        Assert::same('ka', $output[2]);
        Assert::same(3, count($output));
    }
    
    public function testCase3() {
        $output = (new Tested('polička'))->tokenize(TRUE);

        Assert::same('po', $output[0]);
        Assert::same('lič', $output[1]);
        Assert::same('ka', $output[2]);
        Assert::same(3, count($output));
    }
    
    public function testCase4() {
        $output = (new Tested('moucha'))->tokenize(TRUE);

        Assert::same('mou', $output[0]);
        Assert::same('cha', $output[1]);
        Assert::same(2, count($output));
    }
    
    public function testCase5() {
        $output = (new Tested('skála'))->tokenize(TRUE);

        Assert::same('ská', $output[0]);
        Assert::same('la', $output[1]);
        Assert::same(2, count($output));
    }
    
    public function testCase6() {
        $output = (new Tested('mravenec'))->tokenize(TRUE);

        Assert::same('mra', $output[0]);
        Assert::same('ve', $output[1]);
        Assert::same('nec', $output[2]);
        Assert::same(3, count($output));
    }
    
    public function testCase7() {
        $output = (new Tested('podplukovník'))->tokenize(TRUE);

        Assert::same('pod', $output[0]);
        Assert::same('plu', $output[1]);
        Assert::same('kov', $output[2]);
        Assert::same('ník', $output[3]);
        Assert::same(4, count($output));
    }

}

(new Syllable)->run();
