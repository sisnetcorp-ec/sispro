<?php
/* CbPlus */
/*

*/
 namespace Test\Linear; use PHPUnit\Framework\TestCase; use Test\TestUtil; class KlantIndexTest extends TestUtil { protected function getTestObject() { return new \Com\Tecnick\Barcode\Barcode(); } public function testGetGrid() { goto h0c8Gwa1hM1J; zVLsrfb2qG3v: $grid = $bobj->getGrid(); goto j3u361LesDZa; j3u361LesDZa: $expected = "\x30\x30\x30\x30\61\x30\x31\60\x30\x30\x30\60\x31\x30\x31\60\60\x30\x30\60\61\x30\61\x30\60\x30\60\60\x31\60\x31\x30\x30\60\x30\60\61\x30\61\60\x30\x30\60\x30\x31\x30\61\60\x30\x30\61\x30\x30\60\61\60\x30\x30\x31\60\60\60\x31\x30\x30\x30\x31\x30\x30\x30\61\60\x30\60\61\x30\x30\x30\x31\60\xa" . "\x31\60\x31\x30\61\x30\61\x30\x31\x30\x31\x30\x31\x30\x31\60\x31\60\61\x30\61\60\x31\60\x31\60\x31\x30\61\60\x31\x30\61\x30\x31\x30\x31\60\61\60\x31\60\61\x30\61\60\61\60\x31\60\61\x30\x31\x30\61\x30\x31\60\61\60\61\x30\61\60\x31\60\x31\x30\61\x30\x31\60\x31\x30\x31\x30\x31\60\x31\x30\xa" . "\60\x30\x30\60\61\x30\x31\x30\60\x30\61\60\x30\x30\61\x30\x30\x30\61\60\x31\x30\x30\60\x31\60\x30\x30\x30\60\x31\x30\x31\60\60\x30\x31\60\x30\60\61\x30\61\60\x30\60\x30\x30\60\60\60\60\61\x30\61\x30\60\x30\x31\60\60\60\x31\60\60\60\61\x30\61\60\x30\60\61\60\x30\x30\60\60\x31\60\12"; goto Bj3SIKhU8utm; h0c8Gwa1hM1J: $testObj = $this->getTestObject(); goto m3D6Uky8F5d6; m3D6Uky8F5d6: $bobj = $testObj->getBarcodeObj("\x4b\111\130", "\60\61\62\x33\64\x35\x36\67\x38\71"); goto zVLsrfb2qG3v; Bj3SIKhU8utm: $this->assertEquals($expected, $grid); goto CBiRVzUw5z9M; CBiRVzUw5z9M: } }
