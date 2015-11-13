<?php

namespace Cothema\NLP\Elements\Model;

class Sentence extends A\LetterPart {

	private $parts = [];
	private $ending;

	public function __construct($value = NULL) {
		$this->value = $value;
		$this->ending = '.';
	}

	private function getEnding() {
		return $this->ending;
	}

	public function setEnding($ending) {
		$this->ending = $ending;
	}

	public function addWord($word) {
		$this->parts[] = $word;
	}

	public function addText($text) {
		$this->parts[] = $text;
	}

	private function getText() {
                if($this->value) {
                    return $this->value;
                }
            
		$out = '';

		foreach ($this->parts as $part) {
			if (trim($part) === '') {
				continue;
			}

			if ($out !== '') {
				$out .= ' ';
			}

			$out .= $part;
		}

		return trim($out) . $this->getEnding();
	}

	public function __toString() {
		return $this->getText();
	}

}
