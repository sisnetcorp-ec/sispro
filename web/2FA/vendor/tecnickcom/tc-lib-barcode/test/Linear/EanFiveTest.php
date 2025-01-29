<?php
/* CbPlus */
/*

*/
 namespace Test\Linear; use PHPUnit\Framework\TestCase; use Test\TestUtil; class EanFiveTest extends TestUtil { protected function getTestObject() { return new \Com\Tecnick\Barcode\Barcode(); } public function testGetGrid() { goto UCNyJHHknrbw; jqUEEjuRj0A3: $expected = "\61\60\x31\61\x30\61\61\x30\60\61\61\60\61\x30\x30\x31\x30\x30\x31\61\x30\x31\x30\61\x30\x30\x30\60\61\x30\61\x30\61\x30\60\x30\61\61\60\61\x30\61\x31\x30\x30\60\61\12"; goto YrwM2EJIFrDG; YrwM2EJIFrDG: $this->assertEquals($expected, $grid); goto KM3CDovzcIg2; UCNyJHHknrbw: $testObj = $this->getTestObject(); goto Wp0v2IV3wcPF; Wp0v2IV3wcPF: $bobj = $testObj->getBarcodeObj("\x45\101\x4e\x35", "\61\62\63\x34\65"); goto k64ik4K3yWhl; k64ik4K3yWhl: $grid = $bobj->getGrid(); goto jqUEEjuRj0A3; KM3CDovzcIg2: } }
