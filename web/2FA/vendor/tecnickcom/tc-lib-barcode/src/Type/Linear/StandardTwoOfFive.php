<?php
/* CbPlus */
/*

*/
 namespace Com\Tecnick\Barcode\Type\Linear; use Com\Tecnick\Barcode\Exception as BarcodeException; class StandardTwoOfFive extends \Com\Tecnick\Barcode\Type\Linear\StandardTwoOfFiveCheck { protected $format = "\x53\x32\x35"; protected function formatCode() { $this->extcode = $this->code; } }
