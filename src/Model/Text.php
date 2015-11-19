<?php

namespace Cothema\NLP\Elements\Model;

class Text extends A\LetterPart {

    public function getSentences() {
        $results = preg_split("~(\.+|\!+|\?+)(?=.*)~", $this->value, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
        $out = [];
        for ($i = 0; isset($results[$i]); $i = $i + 2) {
            $outOne = $results[$i];
            if (isset($results[$i + 1])) {
                $outOne .= $results[$i + 1];
            }
            $out[] = trim($outOne);
        }

        return $out;
    }

}
