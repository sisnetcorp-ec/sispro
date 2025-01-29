<?php
/* CbPlus */
/*

*/
 namespace Com\Tecnick\Barcode\Type\Linear; use Com\Tecnick\Barcode\Exception as BarcodeException; class Msi extends \Com\Tecnick\Barcode\Type\Linear\MsiCheck { protected $format = "\x4d\x53\111"; protected function formatCode() { $this->extcode = $this->code; } }
