<?php
/* CbPlus */
/*

*/
 namespace Com\Tecnick\Barcode\Type\Linear\CodeOneTwoEight; use Com\Tecnick\Barcode\Exception as BarcodeException; class CodeOneTwoEightA extends \Com\Tecnick\Barcode\Type\Linear\CodeOneTwoEight { protected $format = "\103\61\62\x38\101"; protected function getCodeData() { goto W_Y1Pn7_2t4a; nQZdxKDFdPBa: return $this->finalizeCodeData($code_data, 103); goto nIqKbYBOCjT3; gm1jJtNyOaY3: $len = strlen($code); goto RSBRDQf3W4YO; RSBRDQf3W4YO: $code_data = array(); goto DOUpcfbZUlTn; W_Y1Pn7_2t4a: $code = $this->code; goto gm1jJtNyOaY3; DOUpcfbZUlTn: $this->getCodeDataA($code_data, $code, $len); goto nQZdxKDFdPBa; nIqKbYBOCjT3: } }
