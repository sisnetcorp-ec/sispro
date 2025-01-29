<?php
/* CbPlus */
/*

*/
 namespace Test; use PHPUnit\Framework\TestCase; class TestUtil extends TestCase { public function bcAssertEqualsWithDelta($expected, $actual, $delta = 0.01, $message = '') { goto V6CnrQL0xCTk; nsH3SaKxVKNH: $this->assertEquals($expected, $actual, $message, $delta); goto OldFqg0SkHJv; WCtbG6cTxe1M: return; goto uVtIC3byNoPY; uVtIC3byNoPY: g9GUJDlU434l: goto nsH3SaKxVKNH; AAKBylHkQZXv: parent::assertEqualsWithDelta($expected, $actual, $delta, $message); goto WCtbG6cTxe1M; V6CnrQL0xCTk: if (!\is_callable([self::class, "\141\163\163\x65\x72\x74\x45\x71\165\x61\x6c\163\x57\x69\164\x68\104\145\x6c\164\141"])) { goto g9GUJDlU434l; } goto AAKBylHkQZXv; OldFqg0SkHJv: } public function bcExpectException($exception) { goto n2xrfG3ZpbqC; Yl_ABvtwog03: return; goto VF2RLpx5EGuV; VF2RLpx5EGuV: GwyJJCOuxEMK: goto LqTGc7B69hkC; n2xrfG3ZpbqC: if (!\is_callable([self::class, "\x65\x78\x70\x65\143\164\105\170\143\x65\x70\164\x69\157\x6e"])) { goto GwyJJCOuxEMK; } goto waqbRWwT3D_n; LqTGc7B69hkC: parent::setExpectedException($exception); goto yO14LQZqX6Oh; waqbRWwT3D_n: parent::expectException($exception); goto Yl_ABvtwog03; yO14LQZqX6Oh: } }
