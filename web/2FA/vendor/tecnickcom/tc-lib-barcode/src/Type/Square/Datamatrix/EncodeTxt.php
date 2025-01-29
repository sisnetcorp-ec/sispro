<?php
/* CbPlus */
/*

*/
 namespace Com\Tecnick\Barcode\Type\Square\Datamatrix; use Com\Tecnick\Barcode\Exception as BarcodeException; use Com\Tecnick\Barcode\Type\Square\Datamatrix\Data; class EncodeTxt extends \Com\Tecnick\Barcode\Type\Square\Datamatrix\Steps { public function encodeTXTC40shift(&$chr, &$enc, &$temp_cw, &$ptr) { goto RfGwmFPe_e1h; ach9SfkhHrjE: dky4sWsNlfaz: goto yClkz4hxVFQd; yClkz4hxVFQd: $temp_cw[] = $shiftset[$chr]; goto TL3qwCrzHvPl; N9S1FtbvTJE4: goto dky4sWsNlfaz; goto Z37V7Qtpy2_f; vEUUxKUIGga1: $temp_cw[] = 2; goto P87_nCpRp7UZ; HDqbw29Bes1H: $shiftset = Data::CHSET["\x53\x48\x31"]; goto N9S1FtbvTJE4; mQKVf3iutNvC: throw new BarcodeException("\105\162\162\157\162"); goto T_AGMda_29qp; QbAUv2qE6UeY: usobAus3awhh: goto A2ax2OZrP4tk; kIbi4GsGW9k9: sVpvAlH1HvwJ: goto ycE6STwaXvCc; wWorowW8jVZ6: if (array_key_exists($chr, Data::CHSET["\x53\x48\62"])) { goto ajHxJ9Fzx6OU; } goto Jsguaq8sd_84; T_AGMda_29qp: goto dky4sWsNlfaz; goto QbAUv2qE6UeY; A2ax2OZrP4tk: $temp_cw[] = 0; goto HDqbw29Bes1H; dE5uhadrO7Bs: $shiftset = Data::CHSET["\x53\x33\x54"]; goto ach9SfkhHrjE; Qdqqj1FAS1bv: wrEWaFKQNT6S: goto vEUUxKUIGga1; RfGwmFPe_e1h: if (array_key_exists($chr, Data::CHSET["\123\x48\61"])) { goto usobAus3awhh; } goto wWorowW8jVZ6; TL3qwCrzHvPl: $ptr += 2; goto DKqFXemqasEK; Jsguaq8sd_84: if ($enc == Data::ENC_C40 && array_key_exists($chr, Data::CHSET["\123\63\x43"])) { goto wrEWaFKQNT6S; } goto R1IlfQ_udSa0; Z37V7Qtpy2_f: ajHxJ9Fzx6OU: goto wiy3xex_o97a; R1IlfQ_udSa0: if ($enc == Data::ENC_TXT && array_key_exists($chr, Data::CHSET["\123\x33\124"])) { goto sVpvAlH1HvwJ; } goto mQKVf3iutNvC; xwvYJ4zvElzH: goto dky4sWsNlfaz; goto kIbi4GsGW9k9; q_UIMiXSVxg2: $shiftset = Data::CHSET["\123\x48\62"]; goto ZIcwGaH_hLAQ; wiy3xex_o97a: $temp_cw[] = 1; goto q_UIMiXSVxg2; P87_nCpRp7UZ: $shiftset = Data::CHSET["\x53\63\x43"]; goto xwvYJ4zvElzH; ZIcwGaH_hLAQ: goto dky4sWsNlfaz; goto Qdqqj1FAS1bv; ycE6STwaXvCc: $temp_cw[] = 2; goto dE5uhadrO7Bs; DKqFXemqasEK: } public function encodeTXTC40(&$data, &$enc, &$temp_cw, &$ptr, &$epos, &$charset) { goto eNL5wMP9rHgr; Bn2Dq0iidoCE: $temp_cw[] = 30; goto PdSnxU7tMJ1Q; gbAYmdExWil9: return $chr; goto cCV3no3O0Qcg; jYreTAIx57tU: $temp_cw[] = $charset[$chr]; goto gtIOrQRdOLV3; PdSnxU7tMJ1Q: $ptr += 2; goto C7eLgJGRiD8s; eNL5wMP9rHgr: $chr = ord($data[$epos]); goto AU49FwJxhTy1; ghv8zWGinO9f: $this->encodeTXTC40shift($chr, $enc, $temp_cw, $ptr); goto M9PSbsiHBpMD; AU49FwJxhTy1: ++$epos; goto q9oOGId9PB45; QIU2osiQPTXr: YgZ7gSlVEfuO: goto SpS5N2HZK52u; lGWnRxiJwcRd: zdoe6G0dGQzy: goto gbAYmdExWil9; q9oOGId9PB45: if (!($chr & 0x80)) { goto jC370BMZLKyZ; } goto cLN0AYCLLXEV; gtIOrQRdOLV3: ++$ptr; goto lGWnRxiJwcRd; SpS5N2HZK52u: $chr = $chr & 0x7f; goto NvvkJzXLCPvb; AS4B1qggpkyH: throw new BarcodeException("\x54\130\x54\x43\x34\60\x20\105\162\x72\x6f\x72"); goto QIU2osiQPTXr; C7eLgJGRiD8s: jC370BMZLKyZ: goto HywpDKOXFhto; cLN0AYCLLXEV: if (!($enc == Data::ENC_X12)) { goto YgZ7gSlVEfuO; } goto AS4B1qggpkyH; M9PSbsiHBpMD: goto zdoe6G0dGQzy; goto P6uwtra4HP3S; HywpDKOXFhto: if (isset($charset[$chr])) { goto FTJWVxL2BIrk; } goto ghv8zWGinO9f; NvvkJzXLCPvb: $temp_cw[] = 1; goto Bn2Dq0iidoCE; P6uwtra4HP3S: FTJWVxL2BIrk: goto jYreTAIx57tU; cCV3no3O0Qcg: } public function encodeTXTC40last($chr, &$cdw, &$cdw_num, &$enc, &$temp_cw, &$ptr, &$epos) { goto kPau9dPvbjtD; L3bdEZ4rSAgy: goto LDdcpiarlolw; goto aUwd94dqTjHr; Aa3K25pDvZNY: $cdw[] = $chr + 1; goto pKYBqAHfBlck; fxfVZ9eGkAn4: $cdw[] = $tmp >> 8; goto VSj5HHrRP5WJ; kbBEpPm5sgDw: LDdcpiarlolw: goto uLTywdqtyToR; QObCLexZW9PS: $ch2 = array_shift($temp_cw); goto IigVZuX1evoz; kPau9dPvbjtD: $cdwr = $this->getMaxDataCodewords($cdw_num + $ptr) - $cdw_num; goto NBFvnWF0GmUS; IKtL5beMgAev: if ($cdwr == 2 && $ptr == 2) { goto m9h5OCo39Cw8; } goto EIXNT5k5s54G; NBFvnWF0GmUS: if ($cdwr == 1 && $ptr == 1) { goto BKkbsE6xNqbq; } goto H7bOld7U0PzE; JQqoFhTjnFtg: $ch1 = array_shift($temp_cw); goto QObCLexZW9PS; liSmOBPV11v7: $cdw[] = 254; goto y_3V2smVEh8H; R3VVNz6VYxPb: $cdw[] = $this->getSwitchEncodingCodeword($enc); goto I9FispS3a41X; IigVZuX1evoz: $ptr -= 2; goto J0saQDx8XNQp; yHJeyF8AufeA: $this->last_enc = $enc; goto R3VVNz6VYxPb; m7fWkdfWFv8m: $this->last_enc = $enc; goto VYV0d3uA37z3; xvV2VwhRl2l9: jmHKBWyuuIyW: goto L3bdEZ4rSAgy; IvZvZ7AMni0K: m9h5OCo39Cw8: goto JQqoFhTjnFtg; HX3WOLLP3rKR: mQVWbTUWIyJy: goto liSmOBPV11v7; I9FispS3a41X: ++$cdw_num; goto uXh23xbMFsSH; DC60gLHSb3rN: $enc = Data::ENC_ASCII; goto Cp0FqEfYY0FY; s1KU2EwGuW8v: $cdw_num += 2; goto rglu2nKZKZez; rglu2nKZKZez: $enc = Data::ENC_ASCII; goto nQSvMFljumy4; uXh23xbMFsSH: $epos -= $ptr; goto xvV2VwhRl2l9; VYV0d3uA37z3: goto LDdcpiarlolw; goto HX3WOLLP3rKR; Cp0FqEfYY0FY: $this->last_enc = $enc; goto kbBEpPm5sgDw; J0saQDx8XNQp: $tmp = 1600 * $ch1 + 40 * $ch2 + 1; goto fxfVZ9eGkAn4; EIXNT5k5s54G: if (!($enc != Data::ENC_ASCII)) { goto jmHKBWyuuIyW; } goto aK0vF6Ck_66o; DsyHX3MNtPJa: goto LDdcpiarlolw; goto IvZvZ7AMni0K; aK0vF6Ck_66o: $enc = Data::ENC_ASCII; goto yHJeyF8AufeA; y_3V2smVEh8H: $cdw[] = $chr + 1; goto s1KU2EwGuW8v; pKYBqAHfBlck: ++$cdw_num; goto uCF1vMMH18ER; H7bOld7U0PzE: if ($cdwr == 2 && $ptr == 1) { goto mQVWbTUWIyJy; } goto IKtL5beMgAev; uCF1vMMH18ER: $enc = Data::ENC_ASCII; goto m7fWkdfWFv8m; LhKQGIe0movo: $cdw_num += 2; goto DC60gLHSb3rN; VSj5HHrRP5WJ: $cdw[] = $tmp % 256; goto LhKQGIe0movo; aUwd94dqTjHr: BKkbsE6xNqbq: goto Aa3K25pDvZNY; nQSvMFljumy4: $this->last_enc = $enc; goto DsyHX3MNtPJa; uLTywdqtyToR: } public function encodeTXT(&$cdw, &$cdw_num, &$pos, &$data_length, &$data, &$enc) { goto s8H1L9FSLAtB; masg8bXq2FlO: if (!($newenc != $enc)) { goto dJOL37Py0vdb; } goto B5oBxsYID4Oy; a13jsn2iZHP6: $epos = $pos; goto eX9XXxGcOEwF; K6L48ZnChXb8: $newenc = $this->lookAheadTest($data, $pos, $enc); goto masg8bXq2FlO; i0QJGnqCTvav: $ptr = 0; goto a13jsn2iZHP6; qlIKaERjtIEn: $pos = $epos; goto K6L48ZnChXb8; PLttODdk3sOe: $tmp = 1600 * $ch1 + 40 * $ch2 + $ch3 + 1; goto xt2bVx8XOGaI; s8H1L9FSLAtB: $temp_cw = array(); goto i0QJGnqCTvav; XtjK_MIkVeVj: $ch1 = array_shift($temp_cw); goto ftYprLiUd1lV; i2JoeyiqvlYp: dJOL37Py0vdb: goto gKWV_E1dBGGt; A1jnrBhwEZG3: $this->encodeTXTC40last($chr, $cdw, $cdw_num, $enc, $temp_cw, $ptr, $epos); goto Bv9BVfzXotGg; SR9v9JFkbd6z: Mvc74Qd30fVr: goto gkeDEyyDGj8n; B5oBxsYID4Oy: $enc = $newenc; goto oJirYhko0bYc; jNAU3qitwanw: s71lJIB3pbcU: goto wQOMrSx3QjMA; rjRcZODjbp8c: ++$cdw_num; goto vvu2BX0r8_kG; ftYprLiUd1lV: $ch2 = array_shift($temp_cw); goto OK7ytIp9s67d; kI0spde9kmWq: $cdw[] = $tmp % 256; goto O8oR7RGfBC33; jZiW0qcPpeQC: if ($ptr > 0 && $epos < $data_length) { goto RYs13bg1jfHD; } goto jNAU3qitwanw; IeB7W6tcr70V: goto s71lJIB3pbcU; goto i2JoeyiqvlYp; oJirYhko0bYc: if (!($enc != Data::ENC_ASCII)) { goto Mvc74Qd30fVr; } goto njBTLlZ3caKI; Bv9BVfzXotGg: $pos = $epos; goto ee56b0lndm22; gKWV_E1dBGGt: HJLGqZH3TjZF: goto jZiW0qcPpeQC; hQEeaMRx0ciB: $chr = $this->encodeTXTC40($data, $enc, $temp_cw, $ptr, $epos, $charset); goto nR1IMuw_dljA; v0M1P6RV8pcd: $ptr = 0; goto IeB7W6tcr70V; wQOMrSx3QjMA: if (!($ptr > 0)) { goto AAzg1_dghDDX; } goto A1jnrBhwEZG3; OK7ytIp9s67d: $ch3 = array_shift($temp_cw); goto X0R0fyQaYcHX; njBTLlZ3caKI: $cdw[] = $this->getSwitchEncodingCodeword(Data::ENC_ASCII); goto VrAn6orUWwqo; O8oR7RGfBC33: $cdw_num += 2; goto qlIKaERjtIEn; eX9XXxGcOEwF: $set_id = Data::CHSET_ID[$enc]; goto Nkx7mvFGSYjo; Nkx7mvFGSYjo: $charset = Data::CHSET[$set_id]; goto vM6G5Dx8_XQm; vvu2BX0r8_kG: $pos -= $ptr; goto v0M1P6RV8pcd; ee56b0lndm22: AAzg1_dghDDX: goto CvgI2KTW5tPg; nR1IMuw_dljA: if (!($ptr >= 3)) { goto HJLGqZH3TjZF; } goto XtjK_MIkVeVj; xt2bVx8XOGaI: $cdw[] = $tmp >> 8; goto kI0spde9kmWq; gkeDEyyDGj8n: $cdw[] = $this->getSwitchEncodingCodeword($enc); goto rjRcZODjbp8c; VrAn6orUWwqo: ++$cdw_num; goto SR9v9JFkbd6z; vM6G5Dx8_XQm: RYs13bg1jfHD: goto hQEeaMRx0ciB; X0R0fyQaYcHX: $ptr -= 3; goto PLttODdk3sOe; CvgI2KTW5tPg: } }
