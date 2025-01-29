<?php
/* CbPlus */
/*

*/
 namespace Test\Linear; use PHPUnit\Framework\TestCase; use Test\TestUtil; class PharmaTwoTracksTest extends TestUtil { protected function getTestObject() { return new \Com\Tecnick\Barcode\Barcode(); } public function testGetGrid() { goto xgWy3L83excj; yrpoEbEnZnMh: $expected = "\x31\x30\61\60\x30\x30\60\60\61\x30\61\x30\61\x30\60\60\x31\x30\x30\60\x31\x30\61\60\60\x30\x31\60\60\60\61\x30\x31\12\60\x30\60\60\61\60\x31\60\x31\60\61\60\60\x30\x31\60\x31\x30\x31\60\61\60\60\60\61\x30\60\60\61\60\x30\60\x31\12"; goto SWuDJBSElkKJ; xgWy3L83excj: $testObj = $this->getTestObject(); goto FtTKeY51IsP9; SWuDJBSElkKJ: $this->assertEquals($expected, $grid); goto cqLJLouj4yXX; gXQZnJH6POg5: $grid = $bobj->getGrid(); goto yrpoEbEnZnMh; FtTKeY51IsP9: $bobj = $testObj->getBarcodeObj("\120\x48\101\122\115\x41\62\124", "\x30\x31\62\x33\64\x35\66\67\x38\x39"); goto gXQZnJH6POg5; cqLJLouj4yXX: } }
