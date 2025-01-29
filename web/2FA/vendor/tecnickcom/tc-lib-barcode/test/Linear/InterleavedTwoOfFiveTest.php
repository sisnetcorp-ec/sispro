<?php
/* CbPlus */
/*

*/
 namespace Test\Linear; use PHPUnit\Framework\TestCase; use Test\TestUtil; class InterleavedTwoOfFiveTest extends TestUtil { protected function getTestObject() { return new \Com\Tecnick\Barcode\Barcode(); } public function testGetGrid() { goto v1va4JwHbR70; v1va4JwHbR70: $testObj = $this->getTestObject(); goto ibdWJ5R2noef; YXzp1FGcLfFi: $this->assertEquals($expected, $grid); goto ujsgWEfVdiln; SD8v2u09yEjy: $grid = $bobj->getGrid(); goto xZqLhO6dgwji; xZqLhO6dgwji: $expected = "\x31\60\x31\60\x31\60\60\61\60\x31\61\60\61\x31\60\x31\x30\60\61\60\x30\x31\61\60\60\61\x30\61\60\61\x31\x30\61\60\60\61\60\x31\61\x30\x30\61\x30\61\61\60\x31\x30\61\61\60\61\x31\60\61\x30\60\61\x30\x30\61\x31\60\x31\60\60\61\x30\61\x31\60\x30\61\x30\x31\61\x30\x31\xa"; goto YXzp1FGcLfFi; ibdWJ5R2noef: $bobj = $testObj->getBarcodeObj("\x49\62\x35", "\60\61\x32\x33\x34\65\x36\x37\x38\71"); goto SD8v2u09yEjy; ujsgWEfVdiln: } }
