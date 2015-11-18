<?php

namespace Cothema\NLP\Test\Elements\Format\Text;

use Cothema\NLP\Elements\Output\Text\Paragraph as Tested;
use Cothema\NLP\Elements\Model;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Paragraph extends \Tester\TestCase {

    public function testValid1() {
        $example = new Model\Paragraph('Hi Michael!');

        Assert::same('Hi Michael!', (string) (new Tested($example)));
    }

    public function testValid2() {
        $example = new Model\Paragraph('Hi Michael!');
        $example->addFlag('classes', 'highlight');
        $example->addFlag('classes', 'important');

        Assert::same('Hi Michael!', (string) (new Tested($example)));
    }

}

(new Paragraph)->run();
