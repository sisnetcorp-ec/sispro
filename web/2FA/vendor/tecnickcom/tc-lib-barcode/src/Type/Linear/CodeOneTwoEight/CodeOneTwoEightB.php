<?php
/* CbPlus */
/*

*/
 namespace Com\Tecnick\Barcode\Type\Linear\CodeOneTwoEight; use Com\Tecnick\Barcode\Exception as BarcodeException; class CodeOneTwoEightB extends \Com\Tecnick\Barcode\Type\Linear\CodeOneTwoEight { protected $format = "\x43\x31\62\x38\x42"; protected function getCodeData() { goto Pl8UKt1X2RyD; u67Yr1RWRFZ6: return $this->finalizeCodeData($code_data, 104); goto T9zXaOnBVbYT; Sr7A_f_gyDYo: $this->getCodeDataB($code_data, $code, $len); goto u67Yr1RWRFZ6; Pl8UKt1X2RyD: $code = $this->code; goto gIO2ODyukVnT; sI0k1b8ofTMG: $code_data = array(); goto Sr7A_f_gyDYo; gIO2ODyukVnT: $len = strlen($code); goto sI0k1b8ofTMG; T9zXaOnBVbYT: } }
