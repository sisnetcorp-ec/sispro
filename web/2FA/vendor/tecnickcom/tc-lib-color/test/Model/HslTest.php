<?php
/* CbPlus */
/*

*/
 namespace Test\Model; use PHPUnit\Framework\TestCase; use Test\TestUtil; class HslTest extends TestUtil { protected function getTestObject() { return new \Com\Tecnick\Color\Model\Hsl(array("\150\x75\145" => 0.583, "\x73\141\164\x75\x72\x61\x74\x69\x6f\x6e" => 0.5, "\x6c\x69\x67\150\x74\x6e\145\163\x73" => 0.5, "\x61\x6c\x70\x68\141" => 0.85)); } public function testGetType() { goto cys54_hynaOk; cys54_hynaOk: $testObj = $this->getTestObject(); goto kvVD7ojuiXst; kvVD7ojuiXst: $res = $testObj->getType(); goto I9RC3ZyIMTt8; I9RC3ZyIMTt8: $this->assertEquals("\x48\123\x4c", $res); goto zoXvwyUnAL9g; zoXvwyUnAL9g: } public function testGetNormalizedValue() { goto iBUuiwDbf2K1; iBUuiwDbf2K1: $testObj = $this->getTestObject(); goto MCzntYIeYHsf; bkt7UDSTA_Jf: $this->assertEquals(128, $res); goto RzWqDL6wlPOV; MCzntYIeYHsf: $res = $testObj->getNormalizedValue(0.5, 255); goto bkt7UDSTA_Jf; RzWqDL6wlPOV: } public function testGetHexValue() { goto xoZ3pSED89G_; e_65q9CQUpcH: $res = $testObj->getHexValue(0.5, 255); goto mierMNDcEZir; xoZ3pSED89G_: $testObj = $this->getTestObject(); goto KwFQB_ONrgib; KwFQB_ONrgib: $testObj = $this->getTestObject(); goto e_65q9CQUpcH; mierMNDcEZir: $this->assertEquals("\x38\x30", $res); goto LAqGkp_AV9sR; LAqGkp_AV9sR: } public function testGetRgbaHexColor() { goto uFzp94vdfQim; uFzp94vdfQim: $testObj = $this->getTestObject(); goto C6YTf5R6jCsG; C6YTf5R6jCsG: $res = $testObj->getRgbaHexColor(); goto i2AytubZYSpE; i2AytubZYSpE: $this->assertEquals("\43\64\60\x38\x30\142\146\x64\x39", $res); goto eEpkV3wG0t3N; eEpkV3wG0t3N: } public function testGetRgbHexColor() { goto F8VO2_mmaOTN; DJupEIivmgVX: $this->assertEquals("\x23\x34\60\70\x30\x62\146", $res); goto pXcZStKMnHru; F8VO2_mmaOTN: $testObj = $this->getTestObject(); goto X1quOO2VtCKJ; X1quOO2VtCKJ: $res = $testObj->getRgbHexColor(); goto DJupEIivmgVX; pXcZStKMnHru: } public function testGetArray() { goto FKlxv25NWrX2; FKlxv25NWrX2: $testObj = $this->getTestObject(); goto zfmtIgwTGNzB; fQjmK7UfgmoW: $this->assertEquals(array("\110" => 0.583, "\123" => 0.5, "\x4c" => 0.5, "\x41" => 0.85), $res); goto dAiNQrqHTeRy; zfmtIgwTGNzB: $res = $testObj->getArray(); goto fQjmK7UfgmoW; dAiNQrqHTeRy: } public function testGetNormalizedArray() { goto Mdks_AyqZzCm; IWDEgTO2lKus: $res = $testObj->getNormalizedArray(255); goto rVp1kqC8MzwK; Mdks_AyqZzCm: $testObj = $this->getTestObject(); goto IWDEgTO2lKus; rVp1kqC8MzwK: $this->assertEquals(array("\x48" => 210, "\123" => 0.5, "\x4c" => 0.5, "\101" => 0.85), $res); goto wGK39Ue4oqDz; wGK39Ue4oqDz: } public function testGetCssColor() { goto YunMF3lYYsyv; YunMF3lYYsyv: $testObj = $this->getTestObject(); goto CDHK0AqwwRFc; CA3CfNVhggv9: $this->assertEquals("\150\x73\x6c\141\50\62\x31\x30\54\x35\60\x25\54\65\x30\x25\54\x30\x2e\x38\65\x29", $res); goto m8kVlguOEx4j; CDHK0AqwwRFc: $res = $testObj->getCssColor(); goto CA3CfNVhggv9; m8kVlguOEx4j: } public function testGetJsPdfColor() { goto HhKTraU30Dal; gJ61MGiVEqJm: $res = $col->getJsPdfColor(); goto ai9RYGRvFlRj; JyBJWQqxFYEW: $col = new \Com\Tecnick\Color\Model\Hsl(array("\150\x75\x65" => 0.583, "\163\141\164\x75\x72\x61\164\151\157\156" => 0.5, "\x6c\x69\147\x68\x74\x6e\x65\x73\163" => 0.5, "\141\x6c\160\150\141" => 0)); goto gJ61MGiVEqJm; HhKTraU30Dal: $testObj = $this->getTestObject(); goto ir0OBZjeiwHS; ai9RYGRvFlRj: $this->assertEquals("\133\x22\x54\x22\x5d", $res); goto ngM0pY7RxpcS; ir0OBZjeiwHS: $res = $testObj->getJsPdfColor(); goto XJeRWIBz9Nzl; XJeRWIBz9Nzl: $this->assertEquals("\x5b\x22\122\107\x42\x22\54\x30\56\x32\x35\x30\60\60\x30\54\60\x2e\x35\60\61\60\x30\60\54\60\x2e\67\65\60\60\60\60\x5d", $res); goto JyBJWQqxFYEW; ngM0pY7RxpcS: } public function testGetComponentsString() { goto vyH3TiMYpHTb; hBB5_64fkOHj: $this->assertEquals("\x30\x2e\x32\65\x30\x30\60\x30\x20\x30\x2e\x35\x30\61\60\60\x30\x20\60\56\67\65\60\x30\60\x30", $res); goto IKKjNq0l4PHe; vyH3TiMYpHTb: $testObj = $this->getTestObject(); goto u9CumzGJ1bqh; u9CumzGJ1bqh: $res = $testObj->getComponentsString(); goto hBB5_64fkOHj; IKKjNq0l4PHe: } public function testGetPdfColor() { goto x7_YInaSCRzI; vMaw85Iriym0: $this->assertEquals("\x30\x2e\x32\x35\60\x30\60\60\x20\60\x2e\65\60\x31\60\x30\60\x20\x30\56\x37\65\x30\60\60\x30\x20\162\x67" . "\xa", $res); goto i_0l87LXGp09; x7_YInaSCRzI: $testObj = $this->getTestObject(); goto gfVposBaco4z; uT4KAtYYrTlA: $res = $testObj->getPdfColor(true); goto JXaF7VtK88ur; JXaF7VtK88ur: $this->assertEquals("\x30\56\x32\x35\60\60\60\60\x20\x30\x2e\x35\60\61\60\60\60\x20\60\56\x37\65\60\60\60\x30\40\x52\x47" . "\xa", $res); goto Gkygl3iCrERg; urGbyEfQsy8x: $this->assertEquals("\60\x2e\62\x35\60\60\60\x30\40\60\x2e\x35\60\x31\60\60\60\40\x30\x2e\x37\65\x30\60\60\x30\x20\162\147" . "\xa", $res); goto uT4KAtYYrTlA; i_0l87LXGp09: $res = $testObj->getPdfColor(false); goto urGbyEfQsy8x; gfVposBaco4z: $res = $testObj->getPdfColor(); goto vMaw85Iriym0; Gkygl3iCrERg: } public function testToGrayArray() { goto T_n_RDRCipYt; q_shdn58Yc6O: $this->bcAssertEqualsWithDelta(array("\x67\162\x61\171" => 0.5, "\141\x6c\160\150\x61" => 0.85), $res); goto nl65B_cOVotH; T_n_RDRCipYt: $testObj = $this->getTestObject(); goto WnA_nnjxMZ6w; WnA_nnjxMZ6w: $res = $testObj->toGrayArray(); goto q_shdn58Yc6O; nl65B_cOVotH: } public function testToRgbArray() { goto VNFDM1mrrFfL; tGku8eDdUtY2: $this->bcAssertEqualsWithDelta(array("\x72\145\x64" => 0.25, "\x67\x72\145\x65\156" => 0.5, "\x62\x6c\165\x65" => 0.75, "\141\154\x70\x68\141" => 0.85), $res); goto K1mW4bVNZiaA; NJx63yEasMk5: $res = $col->toRgbArray(); goto gZtpiJpZMz2I; IqAyx2ayrumm: $res = $testObj->toRgbArray(); goto tGku8eDdUtY2; Y2QFscWIpxdd: $res = $col->toRgbArray(); goto Z_3LLMQlNW9A; On8ckb9jor7R: $this->bcAssertEqualsWithDelta(array("\162\145\144" => 0.8, "\x67\162\145\x65\x6e" => 0.048, "\x62\x6c\165\145" => 0, "\x61\154\x70\150\x61" => 1), $res); goto CLwyz5CMcFEW; gZtpiJpZMz2I: $this->bcAssertEqualsWithDelta(array("\162\145\x64" => 0.8, "\147\162\145\x65\x6e" => 0, "\x62\154\165\x65" => 0, "\141\154\160\x68\141" => 1), $res); goto E4UHUR0RkB8G; Z_3LLMQlNW9A: $this->bcAssertEqualsWithDelta(array("\162\x65\x64" => 0.199, "\147\x72\x65\x65\x6e" => 0.4, "\142\154\165\x65" => 0.6, "\141\154\x70\x68\x61" => 1), $res); goto NnGxSmv545Dy; e5yxogfnu65w: $col = new \Com\Tecnick\Color\Model\Hsl(array("\x68\x75\x65" => 0.01, "\163\x61\164\165\162\141\x74\x69\157\156" => 1, "\x6c\x69\147\x68\164\156\145\163\163" => 0.4, "\141\x6c\x70\150\x61" => 1)); goto tK0Ogos1_b1S; o7M6Z_WDTy7Z: $res = $col->toRgbArray(); goto unJlMy7xoBlR; NnGxSmv545Dy: $col = new \Com\Tecnick\Color\Model\Hsl(array("\150\x75\x65" => 0.583, "\163\x61\164\165\x72\141\x74\151\x6f\156" => 0, "\154\x69\147\150\x74\x6e\x65\163\x73" => 0.4, "\141\154\160\150\141" => 1)); goto o7M6Z_WDTy7Z; tK0Ogos1_b1S: $res = $col->toRgbArray(); goto On8ckb9jor7R; CLwyz5CMcFEW: $col = new \Com\Tecnick\Color\Model\Hsl(array("\150\165\145" => 1, "\163\141\x74\165\x72\x61\164\x69\x6f\156" => 1, "\x6c\151\147\x68\x74\156\x65\163\163" => 0.4, "\x61\x6c\x70\x68\141" => 1)); goto NJx63yEasMk5; unJlMy7xoBlR: $this->bcAssertEqualsWithDelta(array("\162\x65\x64" => 0.4, "\147\x72\145\145\x6e" => 0.4, "\142\154\165\145" => 0.4, "\141\x6c\x70\x68\x61" => 1), $res); goto e5yxogfnu65w; VNFDM1mrrFfL: $testObj = $this->getTestObject(); goto IqAyx2ayrumm; K1mW4bVNZiaA: $col = new \Com\Tecnick\Color\Model\Hsl(array("\150\x75\145" => 0.583, "\x73\141\164\165\x72\x61\x74\151\x6f\x6e" => 0.5, "\154\151\x67\x68\164\x6e\145\x73\163" => 0.4, "\x61\x6c\160\150\x61" => 1)); goto Y2QFscWIpxdd; E4UHUR0RkB8G: } public function testToHslArray() { goto rn482vPm2q8O; rn482vPm2q8O: $testObj = $this->getTestObject(); goto FbvbmZ9pkblx; xwPLw7G0QZaa: $this->bcAssertEqualsWithDelta(array("\x68\165\145" => 0.583, "\x73\x61\164\165\x72\141\x74\151\157\x6e" => 0.5, "\154\151\x67\150\164\156\145\x73\x73" => 0.5, "\141\x6c\x70\x68\141" => 0.85), $res); goto mf1uQdmvjd0H; FbvbmZ9pkblx: $res = $testObj->toHslArray(); goto xwPLw7G0QZaa; mf1uQdmvjd0H: } public function testToCmykArray() { goto PGOMD2chgBHz; CVnkfzN9w08M: $res = $testObj->toCmykArray(); goto g4TLaPQzjRGS; PGOMD2chgBHz: $testObj = $this->getTestObject(); goto CVnkfzN9w08M; g4TLaPQzjRGS: $this->bcAssertEqualsWithDelta(array("\143\171\141\x6e" => 0.666, "\155\x61\147\x65\156\x74\x61" => 0.333, "\x79\145\x6c\154\x6f\x77" => 0, "\153\x65\x79" => 0.25, "\x61\x6c\160\x68\141" => 0.85), $res); goto CXm55D17k3W4; CXm55D17k3W4: } public function testInvertColor() { goto s1L0_sLATmRG; s1L0_sLATmRG: $testObj = $this->getTestObject(); goto cLvgjXCobvJE; K9vEb_xmxQYb: $this->bcAssertEqualsWithDelta(array("\150\165\145" => 0.083, "\x73\141\x74\x75\162\x61\x74\x69\157\156" => 0.5, "\154\x69\147\x68\164\x6e\145\163\163" => 0.5, "\x61\154\160\x68\141" => 0.85), $res); goto ntemOWNWpNCO; cLvgjXCobvJE: $testObj->invertColor(); goto R4gUFKStp_G2; R4gUFKStp_G2: $res = $testObj->toHslArray(); goto K9vEb_xmxQYb; ntemOWNWpNCO: } }
