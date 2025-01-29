<?php
/* CbPlus */
/*

*/
 namespace Test; use PHPUnit\Framework\TestCase; class TestUtil extends TestCase { public function bcAssertEqualsWithDelta($expected, $actual, $delta = 0.01, $message = '') { goto dRKwVEDb6lG6; dRKwVEDb6lG6: if (!\is_callable([self::class, "\x61\x73\163\x65\x72\164\x45\161\165\141\x6c\x73\127\151\164\150\104\x65\154\164\141"])) { goto c0BtuuzHah_E; } goto Xn5SXRCjVNVF; Xn5SXRCjVNVF: parent::assertEqualsWithDelta($expected, $actual, $delta, $message); goto ZJZiEN69Nv8u; MUI2ufRaWKjJ: $this->assertEquals($expected, $actual, $message, $delta); goto Ne50Nh2Sr105; ZJZiEN69Nv8u: return; goto u6d5MjzqSDeF; u6d5MjzqSDeF: c0BtuuzHah_E: goto MUI2ufRaWKjJ; Ne50Nh2Sr105: } public function bcExpectException($exception) { goto l4ZT4LoozJ9C; GND2Ln5jWz0x: return; goto XCOdhuOUVn4r; l4ZT4LoozJ9C: if (!\is_callable([self::class, "\x65\170\160\145\x63\x74\x45\x78\143\x65\x70\x74\151\x6f\156"])) { goto nTaWtPOVi7ZO; } goto Mc0Xm3rP6uh0; qbXHIDvI6Qyl: parent::setExpectedException($exception); goto h0dvKcg1tjph; Mc0Xm3rP6uh0: parent::expectException($exception); goto GND2Ln5jWz0x; XCOdhuOUVn4r: nTaWtPOVi7ZO: goto qbXHIDvI6Qyl; h0dvKcg1tjph: } }
