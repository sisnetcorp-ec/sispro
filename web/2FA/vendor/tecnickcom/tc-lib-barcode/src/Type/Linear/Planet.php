<?php
/* CbPlus */
/*

*/
 namespace Com\Tecnick\Barcode\Type\Linear; use Com\Tecnick\Barcode\Exception as BarcodeException; class Planet extends \Com\Tecnick\Barcode\Type\Linear\Postnet { protected $format = "\x50\x4c\101\116\105\124"; protected $chbar = array("\x30" => "\61\x31\x32\62\62", "\61" => "\x32\x32\62\x31\x31", "\62" => "\x32\x32\x31\62\x31", "\x33" => "\62\x32\x31\61\62", "\x34" => "\x32\x31\x32\62\x31", "\65" => "\62\61\x32\x31\x32", "\66" => "\62\61\x31\x32\x32", "\67" => "\x31\x32\x32\x32\x31", "\70" => "\x31\x32\x32\x31\x32", "\71" => "\x31\x32\x31\x32\x32"); }
