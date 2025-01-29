<?php
/* CbPlus */
/*

*/
 namespace Test\Linear; use PHPUnit\Framework\TestCase; use Test\TestUtil; class PharmaTest extends TestUtil { protected function getTestObject() { return new \Com\Tecnick\Barcode\Barcode(); } public function testGetGrid() { goto gVwnqHcoXDmD; xSM77DYp_t6a: $expected = "\61\61\61\60\x30\61\61\x31\x30\x30\61\x30\60\x31\61\x31\x30\60\x31\x30\60\61\61\61\60\60\61\61\x31\x30\60\x31\60\x30\x31\61\61\x30\60\61\61\x31\x30\x30\x31\x31\x31\60\60\61\61\x31\60\60\x31\x30\x30" . "\x31\x30\60\x31\x31\61\60\x30\61\61\61\60\x30\x31\x30\60\61\61\x31\60\60\61\x30\x30\61\60\60\61\x30\60\x31\61\61\x30\60\61\60\60\61\61\x31\60\60\61\x31\61\60\60\61\xa"; goto pvteWq3na340; pvteWq3na340: $this->assertEquals($expected, $grid); goto kj6DZE36sasY; cd9vAORjWnVi: $bobj = $testObj->getBarcodeObj("\120\110\x41\122\115\x41", "\60\61\62\x33\x34\65\x36\x37\x38\x39"); goto T0fYgD_S4sEN; gVwnqHcoXDmD: $testObj = $this->getTestObject(); goto cd9vAORjWnVi; T0fYgD_S4sEN: $grid = $bobj->getGrid(); goto xSM77DYp_t6a; kj6DZE36sasY: } }
