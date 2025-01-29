<?php
/* CbPlus */
/*

*/
 namespace Com\Tecnick\Barcode\Type\Linear; use Com\Tecnick\Barcode\Exception as BarcodeException; class CodeThreeNineCheck extends \Com\Tecnick\Barcode\Type\Linear\CodeThreeNineExtCheck { protected $format = "\x43\x33\71\53"; protected function formatCode() { $code = strtoupper($this->code); $this->extcode = "\52" . $code . $this->getChecksum($code) . "\52"; } }
