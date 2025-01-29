<?php
/* CbPlus */
/*

*/
 namespace Test\Linear\CodeOneTwoEight; use PHPUnit\Framework\TestCase; use Test\TestUtil; class CodeOneTwoEightBTest extends TestUtil { protected function getTestObject() { return new \Com\Tecnick\Barcode\Barcode(); } public function testGetGrid() { goto RDkiO1cHHwzs; QPuax0c4PIi2: $bobj = $testObj->getBarcodeObj("\x43\x31\x32\x38\102", chr(241) . "\x30\x31\x32\63\64\x35\x36\67\x38\x39\x31"); goto SLF0WDRU3d3s; UycKha1MIKqd: $grid = $bobj->getGrid(); goto rAK88nQKXZ3L; RDkiO1cHHwzs: $testObj = $this->getTestObject(); goto P1s9olXTTsCo; PLbdX0a48LYT: $this->assertEquals($expected, $grid); goto QPuax0c4PIi2; gBhI28LNeEnq: $this->assertEquals($expected, $grid); goto S2SSc1Bi1CX6; rAK88nQKXZ3L: $expected = "\61\x31\x30\61\60\x30\x31\x30\x30\60\x30\x31\x30\x30\x31\x31\61\60\x31\x31\x30\60\61\x30\x30\x31\61\x31\x30\60\61\x31\x30\61\x31\60\x30\61\61\x31\60\x30\61\x30\x31\x31\x30\60\61\x30\x31\x31\x31\60\60\61\x31\60\x30\x31\x30\x30\61\x31\61\x30\x31\x31\x30\61\x31\61\60\x30" . "\x31\x30\x30\61\61\x30\60\x31\x31\x31\60\61\60\x30\x31\61\x31\x30\61\x31\60\x31\61\61\60\61\x31\61\x30\x31\60\x30\x31\x31\60\x30\61\x31\x31\60\x30\61\x30\x31\61\x30\x30\61\61\60\x30\60\60\x31\60\x31\x30\x30\61\x31\x30\60\x30\61\x31\61\x30\61\x30\x31\61\xa"; goto PLbdX0a48LYT; P1s9olXTTsCo: $bobj = $testObj->getBarcodeObj("\x43\61\62\x38\102", "\60\x31\x32\x33\64\65\66\x37\70\x39"); goto UycKha1MIKqd; HhfKpslNlhM0: $expected = "\x31\x31\x30\61\60\60\x31\x30\x30\60\60\x31\x31\61\x31\x30\61\60\61\x31\61\x30\x31\60\60\61\61\x31\60\x31\x31\60\x30\x31\60\x30\61\61\61\60\x30\61\61\x30\x31\x31\60\60\61\x31\x31\60\x30\61\60\x31\61\x30\60\x31\60\61\61\61\60\x30\x31\61\60\60\61\60\60\61" . "\x31\x31\x30\61\x31\x30\61\x31\x31\x30\x30\x31\x30\60\61\x31\60\60\61\x31\61\60\x31\60\60\61\61\61\60\61\61\60\x31\x31\61\60\x31\x31\x31\x30\61\60\x30\61\61\60\x30\61\x31\x31\x30\60\x31\x30\61\61\60\60\x31\60\x30\x31\61\x31\60\x30\61\61\x30\x31\x30\x30\x30\x30\x31\x31\x30\x30\x31\x30\x31\x31\60\x30\x30\61\61\x31\60\x31\60\x31\x31\12"; goto gBhI28LNeEnq; SLF0WDRU3d3s: $grid = $bobj->getGrid(); goto HhfKpslNlhM0; S2SSc1Bi1CX6: } public function testInvalidInput() { goto NOV6WTKg1fRv; NOV6WTKg1fRv: $this->bcExpectException("\134\x43\x6f\x6d\x5c\124\145\x63\x6e\151\x63\x6b\x5c\102\141\162\143\x6f\144\145\x5c\x45\170\x63\145\x70\164\x69\x6f\x6e"); goto RJiqelfeo7a9; NcvcakUr8Kqs: $testObj->getBarcodeObj("\x43\x31\62\70\102", chr(246) . "\60\61\x32\63\x34\65\66\67\x38\71\x31"); goto jxILIzMOZDrJ; RJiqelfeo7a9: $testObj = $this->getTestObject(); goto NcvcakUr8Kqs; jxILIzMOZDrJ: } }
