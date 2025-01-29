<?php
/* CbPlus */
/*

*/
 namespace Test\Linear; use PHPUnit\Framework\TestCase; use Test\TestUtil; class ImbTest extends TestUtil { protected function getTestObject() { return new \Com\Tecnick\Barcode\Barcode(); } public function testGetGrid() { goto T5eXfQs_GEeI; ynbkRBMjqbpk: $this->assertEquals($expected, $grid); goto fK1juM9ibO3i; E_kT8FeF25Ri: $expected = "\x31\60\60\x30\61\x30\60\60\x30\60\61\60\x31\x30\60\x30\60\60\60\60\60\x30\60\60\61\x30\61\x30\60\x30\x30\x30\x31\x30\60\x30\x30\60\61\60\x31\60\x31\x30\x30\x30\x31\x30\60\x30\61\60\x30\x30\61\x30\x30\x30\x30\60\61\60\x31\60\61\60\x31\x30\x30\x30\60\x30\x31\x30\60\60\x31" . "\60\60\60\x31\x30\x30\x30\x30\60\60\x30\60\x30\60\x30\60\60\60\x30\61\60\x30\x30\60\60\60\x30\61\60\60\60\61\60\60\x30\61\x30\60\60\60\60\x30\60\61\60\61\60\60\60\x31\x30\x31\xa" . "\61\60\x31\x30\x31\60\x31\x30\x31\x30\x31\60\x31\60\61\60\x31\60\x31\x30\61\x30\61\x30\x31\60\x31\x30\x31\60\61\60\x31\x30\61\60\x31\60\x31\x30\x31\x30\61\60\x31\x30\x31\60\61\60\61\x30\61\60\61\60\61\x30\x31\x30\x31\60\x31\60\x31\60\x31\x30\x31\x30\x31\x30\x31\60\61\x30\x31\60\x31\x30\x31\x30\61\60\x31\x30\61\60\61\x30\61\x30\x31\x30\x31\60" . "\x31\60\x31\x30\x31\60\x31\60\x31\60\61\x30\x31\x30\61\60\61\60\x31\x30\x31\60\x31\60\61\60\x31\60\61\x30\x31\x30\61\xa" . "\60\60\61\x30\x31\60\x30\60\60\60\x30\x30\x31\x30\61\60\x30\x30\60\x30\x30\x30\x30\x30\x31\60\60\x30\60\60\x30\60\60\60\x31\x30\x30\x30\60\x30\60\60\x30\x30\x30\60\61\x30\60\60\x31\60\x30\x30\x30\60\x30\60\61\x30\60\60\x30\x30\60\60\x31\60\61\x30\61\x30\60\x30\x31\60\60\x30\60\x30\60\60\x30\x30\61\x30\x30\x30\61\x30\x30\60\x30\x30\61\60" . "\61\60\x31\60\x30\60\61\x30\x30\60\x30\x30\x30\x30\61\60\60\x30\x31\60\60\x30\61\60\61\60\x31\60\60\60\61\60\x30\12"; goto tDSBZPM52muS; uXZ_ILWLj4xD: $grid = $bobj->getGrid(); goto E_kT8FeF25Ri; apoqNTag0HRO: $grid = $bobj->getGrid(); goto nRX6yHwjEXSe; SOUBnsDIOMqH: $this->assertEquals($expected, $grid); goto tS8ZMxS7yzQH; u_pcGpK8APX3: $grid = $bobj->getGrid(); goto NO59tIa0rnfI; DliSWC1BXuDg: $grid = $bobj->getGrid(); goto ypdaxDoa3yZg; VQyZNFDi9V5d: $this->assertEquals($expected, $grid); goto EP3HuoCPRg87; oPSDqmeYVUv_: $bobj = $testObj->getBarcodeObj("\111\115\x42", "\60\x31\x32\63\x34\65\x36\67\70\71"); goto DliSWC1BXuDg; VvjLa3f4N5KX: $bobj = $testObj->getBarcodeObj("\111\x4d\x42", "\60\x31\62\x33\x34\65\66\x37\x30\x39\x34\x39\x38\67\x36\x35\x34\x33\x32\61\55\x30\x31\62\x33\x34"); goto m4qPGPS5hrGF; fK1juM9ibO3i: $bobj = $testObj->getBarcodeObj("\x49\x4d\x42", "\x30\x31\x32\63\64\x35\66\x37\60\x39\64\x39\70\67\x36\x35\x34\x33\x32\61\x2d"); goto u_pcGpK8APX3; szBC_uQOzVsA: $expected = "\x31\60\x31\60\60\60\60\x30\x31\60\x31\x30\60\60\x31\x30\x30\x30\60\60\61\x30\60\60\60\x30\61\60\61\60\x30\x30\61\x30\61\60\x30\60\x31\x30\x30\x30\x30\x30\60\x30\60\60\61\60\61\x30\61\60\60\60\60\x30\60\60\x30\x30\x30\x30\x30\60\x30\60\x31\x30\61\x30\61\60\x30\x30\x31" . "\x30\x30\60\x30\60\60\x30\60\x30\x31\60\x31\60\61\x30\60\60\x30\60\x30\x30\x30\x30\x30\x30\x31\x30\x30\60\61\x30\61\x30\x31\x30\61\x30\x30\x30\x31\60\60\60\x30\x30\61\x30\61\x30\60\x30\x31\12" . "\x31\x30\x31\60\61\60\x31\x30\61\x30\x31\x30\61\x30\61\x30\61\x30\x31\60\61\x30\x31\60\x31\x30\x31\60\x31\x30\61\x30\61\x30\61\60\61\x30\61\x30\61\x30\x31\x30\x31\x30\61\60\61\x30\61\60\61\60\x31\60\x31\x30\x31\x30\61\x30\x31\60\61\60\61\60\x31\60\61\x30\x31\60\61\x30\x31\60\61\60\61\x30\x31\60" . "\61\x30\x31\x30\x31\60\61\x30\61\60\61\x30\61\x30\61\x30\61\60\61\60\x31\x30\61\x30\x31\x30\61\60\x31\60\x31\60\61\60\x31\x30\x31\x30\61\60\x31\60\61\x30\x31\xa" . "\60\60\60\x30\61\x30\x30\x30\61\60\x31\x30\61\60\61\60\x30\60\x31\x30\60\60\x31\60\x30\x30\x30\x30\60\60\x31\60\x30\x30\60\x30\x30\x30\x31\60\61\60\x30\60\61\60\x31\x30\x30\60\60\x30\x30\60\61\x30\x31\60\60\x30\x31\x30\60\x30\x30\x30\x31\x30\x30\x30\61\60\x30\x30\61\60\60\60\61\x30\x31\x30\61\x30" . "\60\x30\x31\60\x31\x30\x31\x30\61\60\61\x30\x30\60\x30\60\60\60\x30\60\61\x30\x31\60\60\60\60\x30\x30\x30\x31\x30\x31\x30\x30\60\61\60\x30\60\x30\x30\x31\x30\x30\xa"; goto VQyZNFDi9V5d; tS8ZMxS7yzQH: $bobj = $testObj->getBarcodeObj("\111\x4d\x42", "\60\61\x32\x33\x34\x35\66\x37\60\x39\64\x39\x38\67\66\x35\64\63\x32\x31\x2d\60\x31\62\63\x34\65\x36\x37\x38"); goto uXZ_ILWLj4xD; xyPd9qmbiK0E: $grid = $bobj->getGrid(); goto wt0A2QldMGjp; m4qPGPS5hrGF: $grid = $bobj->getGrid(); goto lyYXsZ2Zecgw; DitIDYguiBXC: $this->assertEquals($expected, $grid); goto iRMCw72r1J_Y; wt0A2QldMGjp: $expected = "\61\60\x30\60\x30\x30\x31\x30\61\60\61\x30\60\60\x31\x30\x30\x30\x31\60\61\x30\60\x30\61\60\61\x30\60\x30\x30\x30\x30\60\x31\60\60\60\60\x30\x31\x30\61\60\60\x30\61\60\60\x30\61\x30\x31\60\61\60\60\x30\60\x30" . "\x31\x30\x30\x30\61\60\x30\60\x31\60\60\60\60\x30\x30\60\x31\x30\x31\x30\61\x30\x30\60\x30\60\61\60\61\60\61\60\61\x30\60\60\x31\60\60\60\x30\x30\x30\x30\60\x30\60\x30\61\60\60\x30\61\x30\60\x30\61\x30\60\60\61\60\60\x30\x30\60\60\x30\x31\xa" . "\61\x30\x31\x30\61\60\61\x30\x31\60\61\60\61\x30\x31\x30\61\60\x31\x30\x31\x30\x31\60\61\x30\x31\60\61\x30\61\60\x31\x30\61\x30\61\x30\61\x30\x31\x30\61\x30\x31\x30\x31\60\61\x30\x31\x30\61\60\61\x30\61\60\x31\x30\61\60\61\x30\x31\x30\x31" . "\60\x31\60\x31\60\61\x30\x31\60\61\x30\x31\x30\x31\x30\61\x30\x31\x30\x31\x30\x31\x30\61\60\61\x30\61\x30\x31\x30\x31\60\61\60\61\60\61\60\61\60\x31\x30\x31\x30\x31\60\61\x30\x31\x30\61\60\x31\60\x31\60\61\x30\x31\x30\x31\xa" . "\x30\60\60\60\61\x30\61\x30\60\x30\x30\x30\60\60\x31\x30\60\x30\60\60\61\60\x30\x30\61\60\60\60\60\x30\x30\60\x30\60\x31\x30\61\60\61\60\x30\60\60\60\x31\x30\x30\60\60\60\60\60\x30\60\x31\60\60\x30\x31\60\61\60\61\60\60\x30\x31" . "\x30\x31\60\x31\60\x30\60\61\60\x31\60\60\x30\x31\x30\61\x30\60\60\60\x30\x31\x30\x31\x30\61\x30\x30\60\x31\x30\61\60\x30\x30\x31\60\61\60\60\60\60\60\60\x30\60\x30\60\x30\61\x30\60\x30\60\60\61\60\x30\x30\61\60\60\xa"; goto xdoymoGq4Hud; T5eXfQs_GEeI: $testObj = $this->getTestObject(); goto J1b72POSsXeb; iRMCw72r1J_Y: $bobj = $testObj->getBarcodeObj("\111\115\x42", "\60\61\62\63\64\x35\x36\x37\x30\71\64\x39\x38\67\66\65\x34\x33\x32\x31\55\x30\x31\62\63\x34\x35\66\67\x38\x39\61"); goto svcwqri_AS6t; tDSBZPM52muS: $this->assertEquals($expected, $grid); goto VvjLa3f4N5KX; NO59tIa0rnfI: $expected = "\x31\x30\60\60\60\x30\61\x30\x31\x30\60\x30\x30\x30\x30\60\60\x30\x30\x30\61\x30\60\60\60\60\61\60\x31\60\x30\60\x30\x30\60\x30\x30\x30\60\60\x30\60\x31\60\60\x30\x30\60\60\x30\61\x30\x31\60\x30\60\x30\60\61\x30\61\60\60\x30\61\60\x30\x30\61\60\x30\x30\61\x30\61\60\61" . "\60\x31\60\61\60\60\x30\61\x30\60\60\61\60\x31\x30\61\x30\x31\60\61\x30\60\60\x30\x30\x31\60\61\x30\x30\x30\x30\x30\61\60\x31\60\x30\x30\61\60\x30\x30\x31\x30\60\x30\x30\x30\x30\60\x30\xa" . "\x31\x30\61\x30\61\x30\61\x30\x31\60\x31\x30\61\x30\61\x30\x31\x30\61\60\x31\60\x31\x30\x31\60\x31\x30\61\x30\61\60\x31\x30\x31\60\x31\60\x31\60\x31\x30\x31\60\61\60\61\x30\61\60\x31\60\61\x30\x31\x30\x31\x30\61\60\61\x30\x31\60\x31\x30\x31\x30\x31\x30\x31\x30\x31\x30\x31\60\x31\x30\61\60\x31\60\61\60" . "\x31\x30\61\x30\61\x30\61\x30\61\x30\x31\60\x31\60\61\60\x31\x30\61\x30\61\x30\x31\x30\61\x30\x31\x30\x31\x30\x31\x30\61\60\x31\x30\61\60\61\60\x31\60\61\x30\61\xa" . "\60\x30\x30\x30\x30\x30\61\60\60\60\x30\60\60\x30\61\60\x30\x30\x30\x30\60\60\x31\60\60\60\60\60\60\60\60\60\60\60\61\60\x30\60\x31\x30\x30\60\x30\60\60\60\x30\x30\61\x30\x30\x30\61\x30\x31\60\61\x30\61\60\x30\60\61\60\61\60\61\60\61\x30\x30\x30\x31\x30\61\x30\61\x30\61\x30\61\x30\60\x30" . "\60\60\x30\x30\x31\x30\x30\60\60\x30\60\x30\60\60\60\x30\61\60\x31\x30\x31\60\x30\60\x31\60\x30\60\x30\60\61\60\61\60\x30\60\61\60\61\x30\60\x30\61\60\60\12"; goto DitIDYguiBXC; ypdaxDoa3yZg: $expected = "\x30\60\61\x30\61\60\x31\60\60\x30\61\60\x31\60\x31\x30\60\x30\61\60\60\x30\61\x30\60\60\x31\60\61\x30\x31\60\61\x30\61\60\60\60\61\60\60\x30\60\x30\61\x30\60\60\61\60\61\x30\x31\60\x30\x30\x31\60\61\60" . "\x31\x30\61\x30\61\60\x31\x30\60\60\60\x30\60\x30\60\x30\x30\60\x30\x30\x30\x30\x31\x30\x31\x30\61\x30\x30\60\x30\x30\x30\60\61\x30\x30\60\61\60\x31\60\x31\60\60\60\x31\60\x30\x30\x31\60\x30\x30\x31\60\61\x30\61\x30\x30\x30\x31\60\60\60\60\x30\x31\xa" . "\x31\60\x31\60\x31\x30\x31\x30\x31\x30\x31\60\x31\60\x31\x30\x31\60\61\x30\61\60\61\x30\x31\60\61\x30\x31\x30\61\60\61\60\61\x30\x31\60\61\60\61\x30\x31\x30\61\60\61\60\61\60\61\x30\61\60\61\x30\61\x30\61\60\61\60\61\x30\61\x30\61" . "\x30\x31\x30\x31\x30\x31\60\61\x30\x31\60\x31\x30\x31\x30\x31\x30\61\x30\x31\x30\61\60\61\x30\61\x30\x31\60\61\x30\x31\60\x31\60\x31\60\61\60\61\60\61\x30\x31\x30\x31\x30\61\60\61\x30\x31\x30\61\60\61\x30\x31\60\x31\60\x31\12" . "\x31\60\61\x30\x31\x30\61\x30\61\60\61\60\61\x30\60\x30\x30\x30\61\x30\x31\60\60\x30\x30\60\x31\x30\x31\x30\x31\60\x30\x30\60\60\60\x30\60\x30\60\60\x30\60\61\x30\61\60\60\x30\61\60\60\60\61\x30\x31\60\60\60\x30\60\60\x30\60\x30\60" . "\x30\x30\x30\x31\60\x31\x30\60\x30\60\60\x31\60\x30\x30\61\60\x30\x30\x31\60\x30\x30\x30\60\61\60\61\60\x31\60\61\60\60\x30\x30\x30\x31\x30\x31\60\x30\x30\x30\60\61\x30\x31\60\61\x30\x31\60\x31\60\x30\x30\x31\60\61\60\x31\xa"; goto jmq1XhHCa9oo; xdoymoGq4Hud: $this->assertEquals($expected, $grid); goto oPSDqmeYVUv_; nRX6yHwjEXSe: $expected = "\61\x30\x31\x30\60\x30\60\x30\61\60\x31\x30\x30\60\61\60\60\60\x30\x30\x31\60\x30\x30\x30\x30\61\x30\61\60\60\60\61\x30\61\60\60\x30\x31\x30\x30\60\60\60\x30\x30\x30\60\x31\60\x31\60\x31\x30\x30\x30\x30\x30\60\x30\60\60\60\60\x30\60\x30\x30\61\60\x31\x30\61\x30\60\x30\61" . "\60\x30\60\x30\60\x30\60\60\60\61\60\61\60\61\60\60\60\x30\x30\60\60\60\60\x30\60\61\x30\60\60\61\x30\x31\x30\x31\60\61\60\60\x30\x31\60\60\60\60\60\61\x30\x31\x30\x30\60\x31\xa" . "\61\x30\61\60\x31\x30\x31\x30\x31\60\x31\60\x31\60\61\x30\x31\60\x31\x30\61\60\x31\60\x31\60\61\x30\x31\60\x31\60\x31\x30\61\x30\61\x30\x31\x30\x31\x30\x31\60\x31\x30\61\60\x31\x30\x31\60\61\60\61\x30\x31\x30\61\60\x31\60\61\x30\61\60\x31\60\x31\x30\61\x30\61\60\61\60\61\x30\x31\60\61\60\61\x30" . "\x31\60\61\x30\x31\60\61\x30\x31\x30\61\60\61\60\x31\x30\x31\60\61\x30\61\60\x31\60\61\60\61\60\61\x30\x31\x30\x31\x30\61\x30\x31\x30\61\60\61\60\x31\x30\x31\xa" . "\x30\x30\x30\60\x31\60\60\60\61\x30\61\x30\x31\x30\61\x30\60\x30\61\60\x30\x30\x31\60\60\x30\x30\x30\60\x30\x31\x30\x30\x30\60\x30\60\x30\61\60\x31\60\x30\60\61\x30\x31\x30\60\x30\60\60\x30\60\x31\x30\x31\x30\60\60\x31\60\60\x30\60\60\x31\x30\60\x30\61\x30\60\x30\61\x30\60\60\x31\x30\61\60\x31\x30" . "\x30\60\x31\x30\61\60\61\x30\x31\60\61\60\60\60\x30\x30\x30\x30\x30\60\x31\60\x31\x30\60\x30\x30\x30\60\60\61\60\x31\60\x30\60\x31\x30\60\x30\x30\x30\x31\60\60\12"; goto SOUBnsDIOMqH; jmq1XhHCa9oo: $this->assertEquals($expected, $grid); goto A7LY4yXw7LES; J1b72POSsXeb: $bobj = $testObj->getBarcodeObj("\111\115\102", "\60\x30\x30\x30\x30\55"); goto xyPd9qmbiK0E; lyYXsZ2Zecgw: $expected = "\x30\60\x30\x30\60\60\61\60\x31\60\x31\x30\x30\60\60\x30\x30\x30\x30\x30\x31\x30\60\x30\60\x30\x30\60\61\60\x30\60\x31\x30\60\60\60\x30\x30\60\60\x30\x31\x30\x30\x30\61\x30\60\x30\61\60\x31\60\x31\x30\x30\x30\x31\x30\x31\60\60\x30\x30\60\60\x30\x31\60\x30\x30\61\x30\x31\60\x31" . "\x30\x31\x30\x30\60\x30\x30\60\60\x31\60\x30\60\61\x30\61\x30\61\x30\x31\x30\60\60\x30\x30\61\x30\x30\x30\x30\x30\x30\60\x31\60\61\x30\60\x30\60\x30\x30\x30\x30\x30\x30\x30\61\x30\61\x30\x30\xa" . "\x31\60\61\60\x31\60\x31\60\61\60\61\x30\x31\x30\61\60\61\x30\x31\x30\61\60\x31\x30\61\60\61\x30\x31\60\61\x30\x31\60\x31\x30\x31\60\x31\60\61\60\61\60\61\x30\61\x30\x31\x30\x31\x30\x31\60\x31\x30\x31\60\x31\60\61\60\x31\60\61\60\61\60\61\x30\61\60\x31\x30\61\60\x31\60\61\60\61\60\61\60" . "\x31\x30\x31\60\61\x30\61\x30\x31\x30\61\60\x31\60\x31\x30\x31\60\x31\60\61\60\61\60\61\x30\61\60\x31\60\x31\x30\61\x30\61\x30\x31\x30\61\60\61\60\61\x30\x31\12" . "\61\x30\x30\x30\x30\60\x30\60\61\x30\x30\x30\x31\x30\x31\x30\60\x30\60\60\61\x30\x30\60\x31\x30\60\60\x31\60\x30\x30\61\x30\61\x30\x30\60\61\x30\61\x30\x30\60\61\60\60\x30\x31\60\x30\60\61\x30\x30\x30\x31\60\x31\60\60\x30\x30\x30\61\x30\61\60\x31\60\60\60\60\x30\60\x30\x30\x30\x31\x30\x31\60\60\x30" . "\60\60\x30\x30\61\x30\61\x30\x30\60\x30\60\x30\x30\x30\x30\61\60\61\60\x31\x30\60\x30\x31\x30\x31\60\x30\60\x31\x30\x31\x30\61\x30\x30\60\61\60\x31\60\61\60\x30\xa"; goto ynbkRBMjqbpk; svcwqri_AS6t: $grid = $bobj->getGrid(); goto szBC_uQOzVsA; A7LY4yXw7LES: $bobj = $testObj->getBarcodeObj("\x49\115\x42", "\60\61\62\63\x34\65\x36\67\x30\x39\64\x39\70\67\x36\x35\x34\x33\x32\61\55\x30\x31\62\63\x34\x35\x36\67\x38\x39\61"); goto apoqNTag0HRO; EP3HuoCPRg87: } public function testInvalidRoutingCode() { goto hGM2XfOb3GcB; e28WXRbGmGzg: $testObj = $this->getTestObject(); goto cIcE8ckPsCIP; hGM2XfOb3GcB: $this->bcExpectException("\x5c\x43\x6f\155\134\124\145\x63\x6e\151\143\x6b\134\102\141\162\143\157\x64\x65\134\105\170\x63\145\160\164\x69\x6f\x6e"); goto e28WXRbGmGzg; cIcE8ckPsCIP: $testObj->getBarcodeObj("\x49\115\102", "\60\x31\62\x33\64\65\66\67\60\71\x34\71\70\x37\66\65\64\63\62\x31\55\x31"); goto UUtsWWF6_1Wp; UUtsWWF6_1Wp: } }
