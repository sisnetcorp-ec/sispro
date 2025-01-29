<?php
/* CbPlus */
/*

*/
 namespace Com\Tecnick\Barcode\Type\Linear; use Com\Tecnick\Barcode\Exception as BarcodeException; class CodeThreeNineExt extends \Com\Tecnick\Barcode\Type\Linear\CodeThreeNineExtCheck { protected $format = "\103\x33\71\105"; protected function formatCode() { $this->extcode = "\x2a" . $this->getExtendCode(strtoupper($this->code)) . "\52"; } }
