<?php

namespace Cothema\NLP\Test\Elements\Model;

use Cothema\NLP\Elements\Model\ComplexSentence as Tested;
use Cothema\NLP\Elements\Model;
use Tester\Assert;

require_once __DIR__ . '/../bootstrap.php';

class ComplexSentence extends \Tester\TestCase {

    public function testCase1() {
        $examples = [
            'I walked home, but others waited for a bus.',
            'Do it and take a rest.'
        ];

        foreach ($examples as $example) {
            Assert::same($example, (string) (new Tested($example)));
        }
    }

    public function testCase2() {
        $complexSentence = new Tested;
        $complexSentence->addPart(new Model\ComplexSentencePart('I walked home'));
        $complexSentence->addPart(new Model\Punctuation(','));
        $complexSentence->addPart(new Model\ComplexSentencePart('but others waited for a bus'));
        $complexSentence->addPart(new Model\Punctuation('.'));

        Assert::same('I walked home, but others waited for a bus.', (string) $complexSentence);
    }
    
    public function testCase4() {
        $complexSentence = new Tested;
        $complexSentence->addPart(new Model\ComplexSentencePart('Do it'));
        $complexSentence->addPart(new Model\Word\Conjuction('and'));
        $complexSentence->addPart(new Model\ComplexSentencePart('take a rest'));
        $complexSentence->addPart(new Model\Punctuation('.'));

        Assert::same('Do it and take a rest.', (string) $complexSentence);
    }
    
    /**
     * @throws Cothema\NLP\Elements\Model\Exception\InvalidClusterPart
     */
    public function testCase3() {
        $complexSentence = new Tested;
        $complexSentence->addPart(new Model\Expression\Number('5'));
    }

}

(new ComplexSentence)->run();
