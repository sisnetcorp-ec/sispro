<?php
/* CbPlus */
/*

*/
 namespace Test\Linear; use PHPUnit\Framework\TestCase; use Test\TestUtil; class RawTest extends TestUtil { protected function getTestObject() { return new \Com\Tecnick\Barcode\Barcode(); } public function testGetGrid() { goto ahm27Zv07UJ9; l4vjIInBMVB4: $grid = $bobj->getGrid(); goto t3ZDQde3zPbO; F7QzLgICFLpV: $testObj = $this->getTestObject(); goto WkdvVUfHIhD1; WkdvVUfHIhD1: $bobj = $testObj->getBarcodeObj("\x4c\x52\x41\x57", "\60\61\x30\x30\x31\x31\60\x30\x30\x31\x31\x31\x30\x30\x30\60\61\x31\61\x31\54\x31\60\61\x31\60\x30\61\61\61\x30\60\60\x31\61\x31\x31\60\60\60\x30"); goto l4vjIInBMVB4; ahm27Zv07UJ9: $testObj = $this->getTestObject(); goto F7QzLgICFLpV; aDG0THsDQGKg: $this->assertEquals($expected, $grid); goto EjR_uOVnSDXV; t3ZDQde3zPbO: $expected = "\x30\x31\60\x30\x31\x31\x30\60\60\61\x31\x31\x30\x30\x30\x30\61\x31\61\61\xa\61\x30\x31\x31\x30\60\61\61\x31\60\60\60\61\x31\61\61\60\x30\x30\60\xa"; goto aDG0THsDQGKg; EjR_uOVnSDXV: } }
