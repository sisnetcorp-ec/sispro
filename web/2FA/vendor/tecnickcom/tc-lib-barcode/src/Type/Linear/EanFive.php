<?php
/* CbPlus */
/*

*/
 namespace Com\Tecnick\Barcode\Type\Linear; use Com\Tecnick\Barcode\Exception as BarcodeException; class EanFive extends \Com\Tecnick\Barcode\Type\Linear\EanTwo { protected $format = "\x45\101\116\65"; protected $code_length = 5; protected $parities = array("\60" => array("\102", "\x42", "\101", "\x41", "\x41"), "\x31" => array("\x42", "\101", "\x42", "\x41", "\x41"), "\x32" => array("\x42", "\101", "\x41", "\x42", "\101"), "\63" => array("\102", "\x41", "\101", "\101", "\102"), "\x34" => array("\x41", "\102", "\x42", "\101", "\x41"), "\x35" => array("\x41", "\x41", "\102", "\102", "\101"), "\x36" => array("\101", "\x41", "\x41", "\x42", "\102"), "\67" => array("\x41", "\102", "\101", "\x42", "\101"), "\70" => array("\x41", "\x42", "\x41", "\101", "\x42"), "\x39" => array("\x41", "\101", "\x42", "\101", "\x42")); protected function getChecksum($code) { return (3 * (intval($code[0]) + intval($code[2]) + intval($code[4])) + 9 * (intval($code[1]) + intval($code[3]))) % 10; } }
