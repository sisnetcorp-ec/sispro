<?php
/* CbPlus */
/*

*/
 namespace Test\Linear; use PHPUnit\Framework\TestCase; use Test\TestUtil; class MsiTest extends TestUtil { protected function getTestObject() { return new \Com\Tecnick\Barcode\Barcode(); } public function testGetGrid() { goto bDysCMybJIER; r8PoqF31fAJP: $expected = "\x31\61\60\61\x30\x30\x31\60\60\61\x30\x30\x31\x30\60\x31\60\60\61\60\x30\x31\x30\60\61\61\60\61\x30\x30\x31\60\60\x31\x31\x30\x31\x30\60\x31\60\x30\61\x30\60\61\61\x30\x31\61\60\x31\x30\60\x31\61\x30\61\60\x30" . "\x31\60\60\61\x30\60\x31\61\x30\x31\60\x30\61\x31\60\61\x30\60\61\x31\x30\x31\61\x30\x31\x30\x30\61\60\60\x31\61\x30\x31\x31\x30\x31\x31\60\x31\61\60\x31\x30\60\x31\x30\x30\61\60\60\x31\x31\x30\x31\60\x30\x31\60\x30\x31\61\60\61\60\x30\x31\xa"; goto Osic0UC1IIbB; Osic0UC1IIbB: $this->assertEquals($expected, $grid); goto Z3zArqcEsJf1; tJ6bYHNnB_kM: $grid = $bobj->getGrid(); goto r8PoqF31fAJP; bDysCMybJIER: $testObj = $this->getTestObject(); goto j5MSiOhSTNCm; j5MSiOhSTNCm: $bobj = $testObj->getBarcodeObj("\x4d\x53\x49", "\60\61\62\63\x34\x35\x36\67\70\x39"); goto tJ6bYHNnB_kM; Z3zArqcEsJf1: } }
