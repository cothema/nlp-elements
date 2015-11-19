<?php

namespace Cothema\NLP\Test\Elements\Tokenizer;

use Cothema\NLP\Elements\Tokenizer\Syllable as Tested;

require_once __DIR__ . '/../bootstrap.php';

class Syllable extends \Cothema\NLP\Test\A\TestCase {

    protected $tested = Tested::class;

    public function testCases() {
        $this->iterateForCaseArray($this->getExampleData());
    }

    private function getExampleData() {
        return [
            ['kolo', ['ko', 'lo']],
            ['plechovka', ['ple', 'chov', 'ka']],
            ['polička', ['po', 'lič', 'ka']],
            ['moucha', ['mou', 'cha']],
            ['skála', ['ská', 'la']],
            ['mravenec', ['mra', 've', 'nec']],
            ['podplukovník', ['pod', 'plu', 'kov', 'ník']],
            ['otrkat', ['o', 'tr', 'kat']],
            ['krk', ['krk']],
            ['usrknout', ['u', 'srk', 'nout']],
            ['krknout', ['krk', 'nout']],
            ['náramek', ['ná', 'ra', 'mek']],
            ['perla', ['per', 'la']],
            ['zem', ['zem']],
            ['skluzavka', ['sklu', 'zav', 'ka']],
            ['mrknutí', ['mrk', 'nu', 'tí']],
            ['cvaknutí', ['cvak', 'nu', 'tí']],
            ['sentiment', ['sen', 'ti', 'ment']],
            ['sentimentální', ['sen', 'ti', 'men', 'tál', 'ní']],
            ['akce', ['ak', 'ce']],
            ['akné', ['ak', 'né']],
            ['sláva', ['slá', 'va']],
            ['mouka', ['mou', 'ka']],
            ['zkouška', ['zkouš', 'ka']],
            ['krkavec', ['kr', 'ka', 'vec']],
            ['škrtnout', ['škrt', 'nout']],
            ['prvňák', ['prv', 'ňák']],
            ['skaut', ['skaut']]
        ];

        /* TODO:
          ['kotrmelec', ['ko','tr','me','lec']]
          ['Alžběta', ['Alž', 'bě', 'ta']],
          ['prvouka', ['pr', 'vo', 'uka']],
          ['pouliční', ['po', 'u', 'lič', 'ní']]
         */
    }

}

(new Syllable)->run();
