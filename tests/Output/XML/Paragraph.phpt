<?php

namespace Cothema\NLP\Test\Elements\Format\XML;

use Cothema\NLP\Elements\Output\XML\Paragraph as Tested;
use Cothema\NLP\Elements\Model;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Paragraph extends \Tester\TestCase {

    public function testValid1() {
        $example = new Model\Paragraph('Hi Michael!');

        Assert::same('<p>Hi Michael!</p>', (string) (new Tested($example)));
    }

}

(new Paragraph)->run();
