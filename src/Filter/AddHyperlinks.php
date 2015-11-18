<?php

namespace Cothema\NLP\Elements\Filter;

use Cothema\NLP\Elements\Tokenizer\Expression\Universal;
use Cothema\NLP\Elements\Model\Expression\URL;
use Cothema\NLP\Elements\Model\Expression\URLSimple;
use Cothema\NLP\Elements\Model\Expression\Email;
use Cothema\NLP\Elements\Model\Expression\PhoneNumber;

class AddHyperlinks extends A\Filter {

    protected function process() {
        $parts = (new Universal($this->value))->tokenize();

        $out = $this->value;
        foreach ($parts as $part) {
            if ($part instanceof URL) {
                $out = str_replace($part, '<a href="' . $part . '">' . $part . '</a>', $out);
            } elseif ($part instanceof URLSimple) {
                $out = str_replace($part, '<a href="http://' . $part . '">' . $part . '</a>', $out);
            } elseif ($part instanceof Email) {
                $out = str_replace($part, '<a href="mailto:' . $part . '">' . $part . '</a>', $out);
            } elseif ($part instanceof PhoneNumber) {
                $out = str_replace($part, '<a href="tel:' . $part . '">' . $part . '</a>', $out);
            }
        }

        $this->value = $out;
    }

}
