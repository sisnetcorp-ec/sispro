<?php
/* CbPlus */
/*

*/
 namespace Com\Tecnick\Barcode\Type\Linear\CodeOneTwoEight; use Com\Tecnick\Barcode\Exception as BarcodeException; class CodeOneTwoEightC extends \Com\Tecnick\Barcode\Type\Linear\CodeOneTwoEight { protected $format = "\x43\x31\x32\x38\x43"; protected function getCodeData() { goto jhfEX7zbz8c8; celvQ7k8mg0U: return $this->finalizeCodeData($code_data, 105); goto KmxVfzYedK5R; sG9WkFiczTe4: if (!(ord($code[0]) == 241)) { goto l3HW4Yroisdt; } goto HNWK54IIiBlK; gpxjaWfqbCSt: l3HW4Yroisdt: goto Nx0EOS8k4b2h; Zvg6LFuLkJ5t: $code_data = array(); goto sG9WkFiczTe4; jhfEX7zbz8c8: $code = $this->code; goto Zvg6LFuLkJ5t; ThI_Co9O7IlD: $code = substr($code, 1); goto gpxjaWfqbCSt; HNWK54IIiBlK: $code_data[] = 102; goto ThI_Co9O7IlD; Nx0EOS8k4b2h: $this->getCodeDataC($code_data, $code); goto celvQ7k8mg0U; KmxVfzYedK5R: } }
