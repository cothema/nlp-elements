<?php

namespace Cothema\NLP\Test\Elements\Input\XML;

use Cothema\NLP\Elements\Input\XML\Paragraph as Tested;
use Cothema\NLP\Elements\Model;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Paragraph extends \Tester\TestCase {

    public function testValid1() {
        $example = (new Tested('<p>Hi Michael!</p>'))->getOutput();

        Assert::type(Model\Paragraph::class, $example);
        Assert::same('Hi Michael!', (string) $example);
    }

}

(new Paragraph)->run();
