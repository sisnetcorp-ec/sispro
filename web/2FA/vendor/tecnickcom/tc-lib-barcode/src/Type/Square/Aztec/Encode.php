<?php
/* CbPlus */
/*

*/
 namespace Com\Tecnick\Barcode\Type\Square\Aztec; use Com\Tecnick\Barcode\Type\Square\Aztec\Data; use Com\Tecnick\Barcode\Type\Square\Aztec\ErrorCorrection; use Com\Tecnick\Barcode\Exception as BarcodeException; class Encode extends \Com\Tecnick\Barcode\Type\Square\Aztec\Bitstream { protected $grid = array(); protected $gridcenter = 0; public function __construct($code, $ecc = 33, $eci = 0, $hint = "\x41", $mode = "\x41") { goto BhyqZmCehXYg; vF8CqBV7oQNO: $this->drawMode($numcdw); goto vc9xfldjpXAC; oP9mxpZAZH4o: $numcdw = $this->addCheckWords($this->bitstream, $this->totbits, $nbits, $wsize); goto aOnLGeCL5aVm; OlI_rObSuFGI: throw new BarcodeException("\104\x61\164\141\40\164\157\x6f\40\154\157\x6e\147"); goto TQXt1cihozcG; bRaz87UY2epX: if ($this->sizeAndBitStuffing($ecc, $mode)) { goto PWx5BWHi3JQu; } goto OlI_rObSuFGI; TQXt1cihozcG: PWx5BWHi3JQu: goto vaQUzXgxDcHM; XJ42205rI2_M: $nbits = $this->layer[3]; goto oP9mxpZAZH4o; vc9xfldjpXAC: $this->drawData(); goto grRFo2LpLGdw; vaQUzXgxDcHM: $wsize = $this->layer[2]; goto XJ42205rI2_M; aOnLGeCL5aVm: $this->setGrid(); goto vF8CqBV7oQNO; BhyqZmCehXYg: $this->highLevelEncoding($code, $eci, $hint); goto bRaz87UY2epX; grRFo2LpLGdw: } public function getGrid() { return $this->grid; } protected function addCheckWords(array &$bitstream, &$totbits, $nbits, $wsize) { goto fhRYgtPFuLSu; u5kfF4TwkV1S: Q0wMQVdWYXYg: goto Qyc5FjkdSwGB; qz_b2jmYGW8d: $checkwords = $ecc->checkwords($cdw, $eccwords); goto CwRpV2cUx13m; A4LA1pS22rar: $eccwords = $totwords - $numcdw; goto amG9ge4_NlW0; Qyc5FjkdSwGB: return $numcdw; goto nSmEJi2f_j4Q; amG9ge4_NlW0: $ecc = new ErrorCorrection($wsize); goto qz_b2jmYGW8d; shgRBUSP2iq2: $totwords = intval($nbits / $wsize); goto A4LA1pS22rar; fhRYgtPFuLSu: $cdw = $this->bitstreamToWords($bitstream, $totbits, $wsize); goto vsYprSF2T3PX; CwRpV2cUx13m: foreach ($checkwords as $val) { $this->appendWordToBitstream($bitstream, $totbits, $wsize, $val); EH_yQX2G0rU_: } goto u5kfF4TwkV1S; vsYprSF2T3PX: $numcdw = count($cdw); goto shgRBUSP2iq2; nSmEJi2f_j4Q: } protected function setGrid() { goto v061ySkymnz8; DorbIxeFRUu3: $ref = 16; goto JcukwAGzF3G1; yPMB3cSGpbk6: $this->grid[$center + $rng][$center - $rng] = 1; goto SK0t88oGMTNJ; nqnd8Cow5Uh6: return; goto DxltJ91e2AiN; zEdctYupN4gY: $this->grid[$center - $rng][$center + $pos] = 1; goto JfP4Phbgr25s; b1_RYacr83yS: if (!($pos <= $halfsize)) { goto yPM1j5tI0kBX; } goto DorbIxeFRUu3; qYjc5xKylIM3: K0ksgY_BkpLi: goto tHFt7onpuk5u; ccRzyA67O3KQ: $this->grid[$center - $rng][$center - $rng] = 1; goto scIn56ck5N3K; XUCiXbQ46vjw: $this->grid = array_fill(0, $size, $row); goto DUVWJsHUubKn; i4fRWoMADnDN: $pos += 2; goto yyzhBpCJGs6k; w1ORqOmAcwDg: $this->grid[$center + $pos][$center + $rng] = 1; goto RvYjur1ARFNn; uz7GEF3f26QM: $this->grid[$center - $ref][$center + $pos] = 1; goto Ip2yM2_N3KHN; NjvGbUNDkyTt: if (!($rng < $bemid)) { goto gB_WABS7UcDZ; } goto hk24PPyyZtuf; W0VbtKcrpGm5: if (!($ref <= $halfsize)) { goto rJ9pzUq9buC6; } goto aVSvD1eBMjQY; E38pfhAURFPa: gB_WABS7UcDZ: goto kq21Q8qBtINw; hEw2p4LBRIHT: FpxgK4Bil_lc: goto b1_RYacr83yS; gFl_orNQVRMp: $this->grid[$center + $rng][$center + $pos] = 1; goto zbfr4n1VFaYc; XbxWbSBc2h_u: $this->grid[$center + $pos][$center] = 1; goto vC1FTp7_ZIYq; WPVnlDzz92Kl: if (!($pos < $rng)) { goto oqOlR5TTiYtN; } goto gFl_orNQVRMp; J_4dSVMgfBYf: goto vEzI8FYluxrz; goto TKFvBQVSSmjN; SK0t88oGMTNJ: $this->grid[$center - $rng][$center + $rng] = 1; goto ccRzyA67O3KQ; gpAPIgLLHnRS: goto KLpLBK_4Va_M; goto Ry4646_rsmkH; kq21Q8qBtINw: $this->grid[$center - $bemid][$center - $bemid] = 1; goto cwTzJ2tYseDV; vC1FTp7_ZIYq: UUBTSu9usLQ8: goto Tt19axophg0i; to6AAuIXAmdU: s_26BDciNJH6: goto NjvGbUNDkyTt; bggXRxTrVBWv: $this->grid[$center - $rng][$center] = 1; goto IKTxlgioqo8p; vbJElpMJ_Uie: hyZYAW8fFsrz: goto YSqvym7go0JY; dxntAJeBJ1oy: $this->grid[$center + $rng][$center + $rng] = 1; goto yPMB3cSGpbk6; scIn56ck5N3K: $pos = 1; goto nD4UKEtGO5h3; cwTzJ2tYseDV: $this->grid[$center - $bemid][$center - $bemid + 1] = 1; goto OayAkKLzidjp; kQQEriOU1ADc: $pos = 2; goto hEw2p4LBRIHT; m0e9JUTKp_Vp: $this->gridcenter = $center; goto jIzNrM7h0RqI; xrNDKRspwckP: $row = array_fill(0, $size, 0); goto XUCiXbQ46vjw; JfP4Phbgr25s: $this->grid[$center - $rng][$center - $pos] = 1; goto w1ORqOmAcwDg; TWxEraIVCnJu: $this->grid[$center + $ref][$center + $pos] = 1; goto htt3KcmcWYtO; bMu9YnoiPDm8: if (!$this->compact) { goto wTzROZ64TQFG; } goto nqnd8Cow5Uh6; deuiKObXf39Y: $this->grid[$center - $pos][$center + $rng] = 1; goto VmANhP05WNSX; yiVd96nJBmfj: $halfsize = intval(($size - 1) / 2); goto BlBFOE8PtFWm; VdzxVDkkx4BG: goto s_26BDciNJH6; goto E38pfhAURFPa; JcukwAGzF3G1: vEzI8FYluxrz: goto W0VbtKcrpGm5; AK49I1op8P77: $pos++; goto gpAPIgLLHnRS; fOw5_77Qj_47: qeJm44m6xLRl: goto W8lnE_Rjee4m; HQO_0PtHAd5K: $this->grid[$center + $pos][$center - $ref] = 1; goto lwJAsCmaDfaT; nD4UKEtGO5h3: KLpLBK_4Va_M: goto WPVnlDzz92Kl; hk24PPyyZtuf: $this->grid[$center + $rng][$center] = 1; goto bggXRxTrVBWv; dmA70yGLJuZT: $bewidth = $this->compact ? 11 : 15; goto UNI8Cg6jZdgd; i7r4ylWplTzL: $rng = 2; goto to6AAuIXAmdU; htt3KcmcWYtO: $this->grid[$center - $pos][$center - $ref] = 1; goto KRQV1rHljJR4; R_IB2nT3Rt9X: B91s0Ms92TKR: goto i4fRWoMADnDN; mi9aLKXsDVcf: $this->grid[$center - $pos][$center] = 1; goto XbxWbSBc2h_u; Ip2yM2_N3KHN: $this->grid[$center + $ref][$center - $pos] = 1; goto TWxEraIVCnJu; yyzhBpCJGs6k: goto FpxgK4Bil_lc; goto ZYrCiUrhzdHH; OayAkKLzidjp: $this->grid[$center - $bemid + 1][$center - $bemid] = 1; goto z4ou4GymUFib; aVSvD1eBMjQY: $this->grid[$center - $ref][$center - $pos] = 1; goto uz7GEF3f26QM; YSqvym7go0JY: $ref += 16; goto J_4dSVMgfBYf; g_LY6QyM5FVZ: RS8lZFCsNjew: goto kQQEriOU1ADc; DxltJ91e2AiN: wTzROZ64TQFG: goto yiVd96nJBmfj; Z0XcWLNiJpoP: $this->grid[$center][$center + $pos] = 1; goto mi9aLKXsDVcf; KRQV1rHljJR4: $this->grid[$center - $pos][$center + $ref] = 1; goto HQO_0PtHAd5K; XgitjfuGKOpx: $this->grid[$center - $bemid + 1][$center + $bemid] = 1; goto m5NMkaNNfl1p; yLgFDaQzpidJ: $this->grid[$center][$center - $pos] = 1; goto Z0XcWLNiJpoP; jIzNrM7h0RqI: $this->grid[$center][$center] = 1; goto dmA70yGLJuZT; IKTxlgioqo8p: $this->grid[$center][$center + $rng] = 1; goto BHPX6Vr0rhlJ; BHPX6Vr0rhlJ: $this->grid[$center][$center - $rng] = 1; goto dxntAJeBJ1oy; W8lnE_Rjee4m: $rng += 2; goto VdzxVDkkx4BG; TKFvBQVSSmjN: rJ9pzUq9buC6: goto R_IB2nT3Rt9X; Tt19axophg0i: $pos += 2; goto EMBzn1G6S8NR; UNI8Cg6jZdgd: $bemid = intval(($bewidth - 1) / 2); goto i7r4ylWplTzL; lwJAsCmaDfaT: $this->grid[$center + $pos][$center + $ref] = 1; goto vbJElpMJ_Uie; VmANhP05WNSX: $this->grid[$center - $pos][$center - $rng] = 1; goto qlQj_F5rCqNK; DUVWJsHUubKn: $center = intval(($size - 1) / 2); goto m0e9JUTKp_Vp; BlBFOE8PtFWm: $pos = 8; goto qYjc5xKylIM3; EMBzn1G6S8NR: goto K0ksgY_BkpLi; goto g_LY6QyM5FVZ; z4ou4GymUFib: $this->grid[$center - $bemid][$center + $bemid] = 1; goto XgitjfuGKOpx; tHFt7onpuk5u: if (!($pos <= $halfsize)) { goto RS8lZFCsNjew; } goto yLgFDaQzpidJ; m5NMkaNNfl1p: $this->grid[$center + $bemid - 1][$center + $bemid] = 1; goto bMu9YnoiPDm8; RvYjur1ARFNn: $this->grid[$center + $pos][$center - $rng] = 1; goto deuiKObXf39Y; ZYrCiUrhzdHH: yPM1j5tI0kBX: goto yPKURyRta6XL; qlQj_F5rCqNK: fGdXSxQqvVJB: goto AK49I1op8P77; zbfr4n1VFaYc: $this->grid[$center + $rng][$center - $pos] = 1; goto zEdctYupN4gY; v061ySkymnz8: $size = $this->layer[0]; goto xrNDKRspwckP; Ry4646_rsmkH: oqOlR5TTiYtN: goto fOw5_77Qj_47; yPKURyRta6XL: } protected function drawMode($numcdw) { goto cPvhpcO2NyRp; KPDUrPDiXotN: $ypos -= $this->skipModeRefGrid($pos); goto qLVG2ffO6Prw; q78yDo3U_5k6: $pos++; goto bsZ52u4KnCme; fxh69LYlfl5q: $ypos++; goto BFVnRjMmxwoj; Ux33aCY3REHN: $srow = -5; goto ikPCIu6aQ8NB; Ib7ZaIqN9sGn: $modebits = 28; goto KwpV8Rsp2o_o; uuzFTcZCTg2f: $xpos--; goto qONHaXmNA8Ab; RoxLS1D3ML85: $modebits = 40; goto y6RSQD6rATDW; xHqk0WcPgS7E: $pos = 0; goto nLiBPob_2Z31; aPuLe2MoBMr1: gpC6d70E3vwB: goto CU20CQdYN72C; Y2rU3VDjTZxH: $xpos--; goto sP_26UN8MYoW; oABNtYR72vur: $ypos++; goto OhOGjSoLH_46; OLjWqVtFjKoH: $xpos = $center + $scol; goto HK6OwC1oYXyK; OhOGjSoLH_46: $xpos -= 2; goto xHqk0WcPgS7E; iLzMNLAu6ZGy: mXBHyUiv10UM: goto bJLDbE3mq4pb; MXQJvUTzoN3x: if (!$this->compact) { goto hLBqienLL5jl; } goto Ib7ZaIqN9sGn; KwpV8Rsp2o_o: $layersbits = 2; goto ked6UH_6iDGI; pO1vhjwGn_nM: $pos++; goto FIKESYuT1z2J; sP_26UN8MYoW: $pos = 0; goto LZA0q7w7Erhr; oju4BRgO6Mf6: $this->grid[$ypos][$xpos] = empty($modebs[$bit++]) ? 0 : 1; goto uuzFTcZCTg2f; Z5lntIHgErml: if (!($pos < $sidelen)) { goto zxbNAltP80D9; } goto KPDUrPDiXotN; woJf1Ztl2ZuA: $ypos -= 2; goto Y2rU3VDjTZxH; L8b5RxIEgtoz: goto cmnNT48C87pd; goto zkr1n6v8vo3J; neYLLIb8i4n9: Tu_cK8qwjDxK: goto pO1vhjwGn_nM; bJLDbE3mq4pb: $pos++; goto L8b5RxIEgtoz; Wude_t1uPzcL: $ypos--; goto iLzMNLAu6ZGy; TR_qedPBIFK1: $xpos += $this->skipModeRefGrid($pos); goto GZcN1wqv9TcP; BOWl62qfY_ca: dDA0ckoChmsi: goto woJf1Ztl2ZuA; vLA3MGKnVXgE: goto gpC6d70E3vwB; goto qJslxRX4WlQL; u3nM13O7CZAw: $bit = 0; goto EVYRYLQFVKX6; zkr1n6v8vo3J: zxbNAltP80D9: goto lKiImkPMcbiI; u4Eey3Drw3JX: $ypos += 2; goto ixSSsSzNMyTI; uYmacLwXLOky: $center = $this->gridcenter; goto RoxLS1D3ML85; ixSSsSzNMyTI: $xpos++; goto Hf6Y4vQLpUne; SzFoQM3kebuv: ijr7w7mLtxaU: goto HjS2BHNd4Eoz; EVYRYLQFVKX6: $ypos = $center + $srow; goto OLjWqVtFjKoH; cPvhpcO2NyRp: $modebs = array(); goto cYG22xyjLrJy; nLiBPob_2Z31: zGoHowzpPfyO: goto BgxGDNPQcsIF; uO8h_XdeJsWl: $this->appendWordToBitstream($modebs, $nbits, $layersbits, $this->numlayers - 1); goto P_51YZRzi_qN; bHGIK4l1xWCv: $scol = -5; goto MXQJvUTzoN3x; v143r5V2Uss7: $this->grid[$ypos][$xpos] = empty($modebs[$bit++]) ? 0 : 1; goto fxh69LYlfl5q; y6RSQD6rATDW: $layersbits = 5; goto nqx3e0Qlcu4D; ked6UH_6iDGI: $codewordsbits = 6; goto xveuxoPPuUYV; qONHaXmNA8Ab: QL5h_2XFcgyS: goto q78yDo3U_5k6; BFVnRjMmxwoj: SJERP9q6vZ_I: goto LN190jIcXIsT; LN190jIcXIsT: $pos++; goto vLA3MGKnVXgE; bsZ52u4KnCme: goto zGoHowzpPfyO; goto BOWl62qfY_ca; nqx3e0Qlcu4D: $codewordsbits = 11; goto WmCbz92NddDB; Hf6Y4vQLpUne: $pos = 0; goto aPuLe2MoBMr1; LZA0q7w7Erhr: cmnNT48C87pd: goto Z5lntIHgErml; HK6OwC1oYXyK: $pos = 0; goto SzFoQM3kebuv; xveuxoPPuUYV: $sidelen = 7; goto Ux33aCY3REHN; TmnAow_3RV1K: eLMTcfBDQvFV: goto u4Eey3Drw3JX; BgxGDNPQcsIF: if (!($pos < $sidelen)) { goto dDA0ckoChmsi; } goto LumGbi5zQlg2; qJslxRX4WlQL: LrUg85qvB6t0: goto oABNtYR72vur; FIKESYuT1z2J: goto ijr7w7mLtxaU; goto TmnAow_3RV1K; cYG22xyjLrJy: $nbits = 0; goto uYmacLwXLOky; El1G18sig4C9: $xpos++; goto neYLLIb8i4n9; LumGbi5zQlg2: $xpos -= $this->skipModeRefGrid($pos); goto oju4BRgO6Mf6; F8VjDMaCVFl9: $srow = -7; goto bHGIK4l1xWCv; HjS2BHNd4Eoz: if (!($pos < $sidelen)) { goto eLMTcfBDQvFV; } goto TR_qedPBIFK1; P_51YZRzi_qN: $this->appendWordToBitstream($modebs, $nbits, $codewordsbits, $numcdw - 1); goto jDd2SvbWZcbi; WmCbz92NddDB: $sidelen = 10; goto F8VjDMaCVFl9; NM8ux1e3FxNP: $ypos += $this->skipModeRefGrid($pos); goto v143r5V2Uss7; ikPCIu6aQ8NB: $scol = -3; goto UBlbJkEIq58n; qLVG2ffO6Prw: $this->grid[$ypos][$xpos] = empty($modebs[$bit++]) ? 0 : 1; goto Wude_t1uPzcL; jDd2SvbWZcbi: $this->addCheckWords($modebs, $nbits, $modebits, 4); goto u3nM13O7CZAw; UBlbJkEIq58n: hLBqienLL5jl: goto uO8h_XdeJsWl; GZcN1wqv9TcP: $this->grid[$ypos][$xpos] = empty($modebs[$bit++]) ? 0 : 1; goto El1G18sig4C9; CU20CQdYN72C: if (!($pos < $sidelen)) { goto LrUg85qvB6t0; } goto NM8ux1e3FxNP; lKiImkPMcbiI: } protected function popBit(&$bit) { return empty($this->bitstream[$bit--]) ? 0 : 1; } protected function skipModeRefGrid($pos) { return intval(!$this->compact && $pos == 5); } protected function skipRefGrid($pos) { return intval(!$this->compact && $pos % 16 == 0); } protected function drawData() { goto F2jfnvgdmMvD; ZW5NN1jSowxp: lXhjx114SDEd: goto LunHz31ZbG5N; euaRR_P5_ZDV: if (!($layer < $this->numlayers)) { goto htJoIZsCzmW9; } goto OuJVLqJ1fLSu; iTGZG1USp5k3: f3MX7WuCuOPV: goto IV2Ma4uEsSwZ; GgJJL0jsHyvy: H5DPLMvWBQXO: goto g1EKaxX3mktP; aSAzMXw6VGse: goto gBdjmyfoRiY9; goto iTGZG1USp5k3; sXOGLinIJOvQ: $this->grid[$ypos][$xpos - 1 - $skip] = $this->popBit($bit); goto ZV4uyv6o18ml; OVwGMoCUYbSG: baIxitorzY_e: goto TsUNIT2XAh2M; g1EKaxX3mktP: if (!($pos < $llen)) { goto lXhjx114SDEd; } goto anuyXR5xXAwd; jAj4Rq_dKRzu: $pos = 0; goto ncu10K_Q1x3D; jbMLFc4eQSiN: $xpos--; goto OVwGMoCUYbSG; A2lp7bOr0pOb: $pos = 0; goto GgJJL0jsHyvy; tJ7eYKQzoz6Q: VEO33V0PDa49: goto OHo9guZ6tf2y; qhA3j4KGm1lx: $llen = 16; goto U6nW2fCEcT7q; JsWeJqFo1l8b: $srow -= $this->skipRefGrid($srow); goto MAQqz8ZLsf75; NbsxqTSL35nu: $scol -= $this->skipRefGrid($scol); goto XdRzOA1Pvcfu; oe4KV3bdS0xn: $this->grid[$ypos][$xpos] = $this->popBit($bit); goto Aj4ZkRSIKsVw; cOfoEBj1hGNz: goto H5DPLMvWBQXO; goto ZW5NN1jSowxp; z1hxSHxII1ro: $ypos++; goto nunt2FM7TKX8; hgdResHFoHU7: $this->grid[$ypos][$xpos] = $this->popBit($bit); goto Q7lOtdVs9R0x; yEbH8czvTS4y: $bit = $this->totbits - 1; goto B1FkWq5qcBew; ChgAdMIL3Auv: $pos++; goto Ye1jWepvvd96; B1FkWq5qcBew: $layer = 0; goto glUFp_3VtuHg; MM3DM4g3RM14: $this->grid[$ypos - 1 - $skip][$xpos] = $this->popBit($bit); goto LV265Jz4OLQE; rCrWp3JTNQsa: ek9gvd6t07vL: goto McXrVVKcBjve; P2HnlVFE4iyL: if (!$this->compact) { goto VEO33V0PDa49; } goto e8D5PS9P8OuY; w9t413ePC55w: $this->grid[$ypos][$xpos] = $this->popBit($bit); goto sXOGLinIJOvQ; rauyMRQBZpdI: $this->grid[$ypos][$xpos] = $this->popBit($bit); goto MM3DM4g3RM14; GX5VHdQhOqS7: goto C0VSl3NBH2zo; goto oQSGFxUtBpTn; NEKVZ1wljmKX: $xpos = $center + $scol; goto jAj4Rq_dKRzu; e8D5PS9P8OuY: $llen = 13; goto ZOl3wZWaIvD7; HjKbUGgK_fqj: JpFAoeXvWyb1: goto wO1Hn_V2qaMY; R918ncUi8Tnc: if (!($pos < $llen)) { goto IC9gJWb3Nw3X; } goto PvsCMZ2wzf53; vaZX4cGQyk9I: H1t3CmCuSGTt: goto LheGXmVc2T6e; McXrVVKcBjve: $pos++; goto cOfoEBj1hGNz; Aj4ZkRSIKsVw: $this->grid[$ypos + 1 + $skip][$xpos] = $this->popBit($bit); goto jbMLFc4eQSiN; XdRzOA1Pvcfu: $skip = $this->skipRefGrid($srow - 1); goto qnt1pdA3JOuy; avR7r2hBT1Cl: gBdjmyfoRiY9: goto A0h37ShtNHQs; glUFp_3VtuHg: tkYNXEPIBFXO: goto euaRR_P5_ZDV; TsUNIT2XAh2M: $pos++; goto aSAzMXw6VGse; U6nW2fCEcT7q: $srow = -8; goto LzWSITEnjb7N; PvsCMZ2wzf53: $xpos += $this->skipRefGrid($xpos - $center); goto rauyMRQBZpdI; lMdiBNi_EE42: $xpos -= $this->skipRefGrid($xpos - $center); goto oe4KV3bdS0xn; dgcQk6pfUUdj: $xpos += 2 + $skip; goto A2lp7bOr0pOb; QfV_4GWKX0Q9: $pos = 0; goto A3XM5l5bJ83T; ZV4uyv6o18ml: $ypos--; goto rCrWp3JTNQsa; OHo9guZ6tf2y: $skip = 0; goto yEbH8czvTS4y; A0h37ShtNHQs: if (!($pos < $llen)) { goto f3MX7WuCuOPV; } goto lMdiBNi_EE42; fsHy5_wO9Q8B: htJoIZsCzmW9: goto B17IZobpErCd; MAQqz8ZLsf75: $scol = $xpos - 1 - $center; goto NbsxqTSL35nu; LV265Jz4OLQE: $xpos++; goto HjKbUGgK_fqj; ZOl3wZWaIvD7: $srow = -6; goto xOKpQVgBzc0t; IV2Ma4uEsSwZ: $ypos--; goto dgcQk6pfUUdj; nunt2FM7TKX8: $xpos -= 2 + $skip; goto QfV_4GWKX0Q9; A3XM5l5bJ83T: N3mOZv98yrIt: goto pIvoHjAhtTnf; wO1Hn_V2qaMY: $pos++; goto GX5VHdQhOqS7; qnt1pdA3JOuy: B1mkMF2YBHDi: goto mwzU_WcRlTOM; xOKpQVgBzc0t: $scol = -5; goto tJ7eYKQzoz6Q; LunHz31ZbG5N: $llen += 4; goto UulTrdEND0fl; ncu10K_Q1x3D: C0VSl3NBH2zo: goto R918ncUi8Tnc; mwzU_WcRlTOM: $layer++; goto JxXAj6VI8vyN; JxXAj6VI8vyN: goto tkYNXEPIBFXO; goto fsHy5_wO9Q8B; anuyXR5xXAwd: $ypos -= $this->skipRefGrid($ypos - $center); goto w9t413ePC55w; LzWSITEnjb7N: $scol = -7; goto P2HnlVFE4iyL; Tcdc6yZhPyTC: HDOPTMiemUuB: goto ChgAdMIL3Auv; WVvk0RYLQi1E: $pos = 0; goto avR7r2hBT1Cl; Ye1jWepvvd96: goto N3mOZv98yrIt; goto vaZX4cGQyk9I; OuJVLqJ1fLSu: $ypos = $center + $srow; goto NEKVZ1wljmKX; UulTrdEND0fl: $srow = $ypos - $center; goto JsWeJqFo1l8b; Lk6YtDjePUzU: $ypos += $this->skipRefGrid($ypos - $center); goto hgdResHFoHU7; F2jfnvgdmMvD: $center = $this->gridcenter; goto qhA3j4KGm1lx; c1ibjrn_NPo_: $ypos++; goto Tcdc6yZhPyTC; LheGXmVc2T6e: $ypos -= 2 + $skip; goto K5NJQJSWKs3S; oQSGFxUtBpTn: IC9gJWb3Nw3X: goto z1hxSHxII1ro; pIvoHjAhtTnf: if (!($pos < $llen)) { goto H1t3CmCuSGTt; } goto Lk6YtDjePUzU; K5NJQJSWKs3S: $xpos--; goto WVvk0RYLQi1E; Q7lOtdVs9R0x: $this->grid[$ypos][$xpos + 1 + $skip] = $this->popBit($bit); goto c1ibjrn_NPo_; B17IZobpErCd: } }
