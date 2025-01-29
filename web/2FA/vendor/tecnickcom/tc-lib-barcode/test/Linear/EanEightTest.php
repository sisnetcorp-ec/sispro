<?php
/* CbPlus */
/*

*/
 namespace Test\Linear; use PHPUnit\Framework\TestCase; use Test\TestUtil; class EanEightTest extends TestUtil { protected function getTestObject() { return new \Com\Tecnick\Barcode\Barcode(); } public function testGetGrid() { goto kyXwYeKJMOOE; Eb6W8HWQ2IfH: $bobj = $testObj->getBarcodeObj("\105\x41\x4e\70", "\61\62\63\x34\x35\66\67"); goto wzTd6MTDETDh; wzTd6MTDETDh: $grid = $bobj->getGrid(); goto JsI7RP2IuJMv; GdWJrAcLkvUC: $this->assertEquals($expected, $grid); goto NAGr8b8lLzhG; JsI7RP2IuJMv: $expected = "\61\60\x31\60\60\61\x31\60\x30\61\60\x30\61\60\x30\x31\x31\60\x31\61\x31\61\60\x31\x30\61\x30\x30\x30\61\x31\60\x31\x30\61\60\x31\60\60\x31\x31\x31\60\x31\x30\x31\x30\60\60\60\61\x30\60\60\61\60\x30\61\61\61\60\x30\x31\60\x31\60\x31\xa"; goto GdWJrAcLkvUC; kyXwYeKJMOOE: $testObj = $this->getTestObject(); goto Eb6W8HWQ2IfH; NAGr8b8lLzhG: } }
