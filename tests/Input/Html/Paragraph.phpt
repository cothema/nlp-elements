<?php

namespace Cothema\NLP\Test\Elements\Input\Html;

use Cothema\NLP\Elements\Input\Html\Paragraph as Tested;
use Cothema\NLP\Elements\Model;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

class Paragraph extends \Tester\TestCase {

    public function testValid1() {
        $example = (new Tested('<p>Hi Michael!</p>'))->getOutput();
        
        Assert::type(Model\Paragraph::class, $example);
        Assert::same('Hi Michael!', (string) $example);
    }

    public function testValid2() {
        $example = (new Tested('<p class="highlight important">Hi Michael!</p>'))->getOutput();

        Assert::type(Model\Paragraph::class, $example);
        Assert::same('Hi Michael!', (string) $example);
    }

}

(new Paragraph)->run();
