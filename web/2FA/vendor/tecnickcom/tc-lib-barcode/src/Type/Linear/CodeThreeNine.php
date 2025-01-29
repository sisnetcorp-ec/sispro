<?php
/* CbPlus */
/*

*/
 namespace Com\Tecnick\Barcode\Type\Linear; use Com\Tecnick\Barcode\Exception as BarcodeException; class CodeThreeNine extends \Com\Tecnick\Barcode\Type\Linear\CodeThreeNineExtCheck { protected $format = "\103\63\71"; protected function formatCode() { $this->extcode = "\x2a" . strtoupper($this->code) . "\52"; } }
