<?php
/* CbPlus */
/*

*/
 namespace Test\Square; use PHPUnit\Framework\TestCase; class RawTest extends TestCase { protected function getTestObject() { return new \Com\Tecnick\Barcode\Barcode(); } public function testGetGrid() { goto ad8r67OX5y1w; c4DOJ7Cos3KP: $grid = $bobj->getGrid(); goto IsjfbL5VB2pv; OQg3SaB2Lv9s: $this->assertEquals($expected, $grid); goto NKB2G02YoQ5s; ad8r67OX5y1w: $testObj = $this->getTestObject(); goto bFoYIHo30d2Q; bFoYIHo30d2Q: $bobj = $testObj->getBarcodeObj("\123\x52\x41\x57", "\x30\61\x30\x31\54\x31\x30\61\x30\x2c\61\61\60\x30\54\60\60\x31\x31"); goto c4DOJ7Cos3KP; IsjfbL5VB2pv: $expected = "\60\61\60\61\xa\61\x30\61\60\12\61\x31\x30\60\12\x30\x30\x31\x31\12"; goto OQg3SaB2Lv9s; NKB2G02YoQ5s: } }
