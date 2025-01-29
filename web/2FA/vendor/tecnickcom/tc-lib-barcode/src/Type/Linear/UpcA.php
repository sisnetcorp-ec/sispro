<?php
/* CbPlus */
/*

*/
 namespace Com\Tecnick\Barcode\Type\Linear; use Com\Tecnick\Barcode\Exception as BarcodeException; class UpcA extends \Com\Tecnick\Barcode\Type\Linear\EanOneThree { protected $format = "\x55\x50\x43\x41"; protected $code_length = 12; protected function formatCode() { goto U22OspvmvYnf; U22OspvmvYnf: $code = str_pad($this->code, $this->code_length - 1, "\x30", STR_PAD_LEFT); goto UNThjF2jQRQq; ttOBljnUhYrr: ++$this->code_length; goto PRI09zWHjOs0; PRI09zWHjOs0: $this->extcode = "\60" . $code; goto gIeR1h1gh_29; UNThjF2jQRQq: $code .= $this->getChecksum($code); goto ttOBljnUhYrr; gIeR1h1gh_29: } }
