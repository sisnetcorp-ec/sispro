<?php
/* CbPlus */
/*

*/
 namespace Com\Tecnick\Barcode\Type\Linear\CodeOneTwoEight; use Com\Tecnick\Barcode\Exception as BarcodeException; abstract class Process extends \Com\Tecnick\Barcode\Type\Linear { protected $format = "\x43\x31\62\x38"; protected $chbar = array("\x32\61\62\62\62\x32", "\62\x32\62\x31\x32\x32", "\62\62\x32\x32\x32\61", "\61\62\61\x32\x32\x33", "\61\x32\x31\63\x32\x32", "\61\63\x31\62\x32\x32", "\x31\x32\62\62\x31\x33", "\61\x32\62\x33\61\x32", "\x31\x33\62\62\61\x32", "\x32\62\x31\x32\61\63", "\x32\62\x31\x33\61\x32", "\x32\x33\61\x32\61\62", "\61\61\x32\x32\x33\62", "\61\x32\x32\61\63\62", "\x31\62\x32\62\x33\x31", "\61\x31\63\62\62\x32", "\61\x32\63\x31\x32\62", "\x31\62\63\62\x32\x31", "\x32\62\63\x32\x31\61", "\62\62\x31\x31\x33\x32", "\62\62\61\x32\x33\x31", "\62\x31\x33\x32\61\x32", "\x32\62\x33\61\x31\x32", "\x33\61\x32\61\x33\x31", "\63\61\61\x32\x32\62", "\x33\x32\x31\x31\x32\x32", "\63\62\61\62\x32\x31", "\63\x31\62\x32\61\62", "\x33\x32\62\x31\x31\x32", "\63\x32\62\x32\61\61", "\62\61\62\61\62\63", "\62\61\x32\63\x32\61", "\62\63\x32\x31\x32\x31", "\x31\x31\61\x33\x32\63", "\x31\x33\61\x31\62\x33", "\x31\x33\61\63\62\x31", "\61\61\x32\63\x31\x33", "\61\x33\x32\x31\x31\x33", "\61\x33\62\63\x31\61", "\62\x31\x31\63\x31\x33", "\62\x33\x31\61\61\x33", "\x32\x33\61\63\61\x31", "\61\61\x32\x31\x33\x33", "\61\x31\x32\x33\x33\61", "\61\x33\62\61\63\x31", "\61\x31\x33\x31\x32\63", "\61\x31\63\63\x32\61", "\61\63\63\x31\62\x31", "\x33\x31\63\61\x32\61", "\x32\61\61\63\63\x31", "\x32\63\x31\61\x33\x31", "\62\x31\x33\61\x31\x33", "\62\x31\x33\x33\x31\61", "\62\61\63\61\63\x31", "\x33\61\x31\x31\62\63", "\x33\61\x31\x33\62\x31", "\63\63\61\x31\62\61", "\63\61\x32\x31\x31\x33", "\x33\61\x32\63\61\x31", "\63\63\x32\x31\61\x31", "\63\x31\x34\61\x31\x31", "\x32\x32\61\x34\x31\61", "\64\x33\x31\x31\61\61", "\x31\61\x31\62\62\64", "\x31\61\61\x34\x32\x32", "\x31\x32\x31\x31\62\64", "\61\62\61\x34\62\x31", "\61\x34\61\x31\x32\x32", "\x31\64\x31\62\x32\61", "\61\61\x32\62\61\64", "\61\x31\x32\x34\61\62", "\61\x32\62\61\x31\x34", "\61\62\x32\64\61\x31", "\x31\x34\62\x31\61\62", "\x31\x34\x32\62\x31\x31", "\62\64\x31\x32\x31\x31", "\62\x32\x31\61\61\64", "\64\61\x33\61\61\61", "\62\64\61\61\61\62", "\61\63\64\x31\61\x31", "\61\x31\61\x32\64\x32", "\x31\x32\61\x31\64\x32", "\61\x32\61\62\x34\x31", "\x31\61\64\62\61\62", "\x31\62\x34\x31\61\62", "\x31\x32\64\62\x31\x31", "\64\x31\x31\62\61\x32", "\64\62\61\61\61\x32", "\64\62\x31\62\x31\61", "\x32\61\62\61\x34\61", "\x32\61\64\61\62\61", "\x34\61\62\61\x32\61", "\61\x31\x31\x31\x34\63", "\61\61\61\63\64\61", "\x31\63\x31\x31\64\61", "\61\x31\x34\61\x31\x33", "\x31\61\x34\63\x31\61", "\x34\61\61\x31\61\63", "\x34\61\x31\63\x31\x31", "\x31\x31\63\61\x34\x31", "\x31\x31\64\x31\63\61", "\x33\61\61\61\64\61", "\64\x31\61\61\x33\61", "\x32\61\x31\64\61\x32", "\x32\61\61\x32\61\x34", "\62\x31\61\x32\x33\62", "\x32\x33\x33\61\61\x31", "\x32\60\x30\x30\x30\60"); protected $keys_a = ''; protected $keys_b = ''; protected $fnc_a = array(241 => 102, 242 => 97, 243 => 96, 244 => 101); protected $fnc_b = array(241 => 102, 242 => 97, 243 => 96, 244 => 100); protected function getNumericSequence($code) { goto IKLFvELNcrcH; JoxfyyJrID7c: L_c9IO5u5_3P: goto mMqUsGcPwOnV; js1fO3VJjpsk: $numseq = array(); goto I6G9q9WsU24m; vBqlQ38oSN6b: unhlWGf2awYt: goto ZN9YmCcbxSkk; IKLFvELNcrcH: $sequence = array(); goto FrPA5zoYbm1r; mMqUsGcPwOnV: if (!($end_offset < $len)) { goto rNdZ53bPMlQy; } goto ypSGd0qpNM_6; FrPA5zoYbm1r: $len = strlen($code); goto js1fO3VJjpsk; lXOW7jjlFH_I: rNdZ53bPMlQy: goto vBqlQ38oSN6b; I6G9q9WsU24m: preg_match_all("\57\x28\133\60\55\x39\135\x7b\64\x2c\x7d\51\57", $code, $numseq, PREG_OFFSET_CAPTURE); goto byglmiz35PW_; eBhTf8G4QQz6: foreach ($numseq[1] as $val) { goto moSnLGTS387H; NDOIa01xtIKp: $sequence = array_merge($sequence, $this->get128ABsequence(substr($code, $end_offset, $offset - $end_offset))); goto dy5fILt6T0r2; UebUM0mx1Kpj: if (!($slen % 2 != 0)) { goto llo07fQZtrQY; } goto o1xef2qsLd6S; tzqYWTPLAfdn: $sequence[] = array("\x43", substr($code, $offset, $slen), $slen); goto D9uPwaSRFQ2R; XgWs0yE6LkJR: if (!($offset > $end_offset)) { goto FCRijqmF3cv2; } goto NDOIa01xtIKp; dy5fILt6T0r2: FCRijqmF3cv2: goto tzqYWTPLAfdn; LJl7EsWv2mfm: $slen = strlen($val[0]); goto UebUM0mx1Kpj; bSojcXPNw3ba: Vyfl86pqqJBA: goto qf3xACIQI8BG; D9uPwaSRFQ2R: $end_offset = $offset + $slen; goto bSojcXPNw3ba; Nvo0NwfVbXC9: llo07fQZtrQY: goto XgWs0yE6LkJR; o1xef2qsLd6S: --$slen; goto HOTnKPYY9ZHk; HOTnKPYY9ZHk: ++$offset; goto Nvo0NwfVbXC9; moSnLGTS387H: $offset = $val[1]; goto LJl7EsWv2mfm; qf3xACIQI8BG: } goto JoxfyyJrID7c; QQUsd1SYAMjq: $sequence = array_merge($sequence, $this->get128ABsequence($code)); goto wtXhIg1Yks6i; ZN9YmCcbxSkk: return $sequence; goto hc2pByOSLwj3; wtXhIg1Yks6i: goto unhlWGf2awYt; goto CmKCjgAUAmsH; byglmiz35PW_: if (!empty($numseq[1])) { goto u9TPGqLp9n15; } goto QQUsd1SYAMjq; ypSGd0qpNM_6: $sequence = array_merge($sequence, $this->get128ABsequence(substr($code, $end_offset))); goto lXOW7jjlFH_I; CmKCjgAUAmsH: u9TPGqLp9n15: goto YZz0ji1sMgtz; YZz0ji1sMgtz: $end_offset = 0; goto eBhTf8G4QQz6; hc2pByOSLwj3: } protected function get128ABsequence($code) { goto FZsK0XF2CZ4z; f9W5B4w8Gm3S: if (!empty($aseq[1])) { goto bUl17ieQIPPT; } goto kNeG7Xj830fF; XII_ku1Tmwjc: XU2eH4riH2e5: goto IH2QUPNXQAri; P3_ZL4Zx3c0A: if (!($end_offset < $len)) { goto XU2eH4riH2e5; } goto bZCj4sN8IVJM; FZsK0XF2CZ4z: $len = strlen($code); goto qQTACUocjlSs; rMcN0DMqvEKw: return $sequence; goto e9xSekqQAyZu; IH2QUPNXQAri: SUz3yAN2TDdk: goto rMcN0DMqvEKw; Tyvfni0D2KIH: Gfn2hU82FD21: goto P3_ZL4Zx3c0A; bZCj4sN8IVJM: $sequence[] = array("\102", substr($code, $end_offset), $len - $end_offset); goto XII_ku1Tmwjc; inUO_v7aKfj2: goto SUz3yAN2TDdk; goto fQ2hTrLurTK6; iYb0tebcOzkZ: $aseq = array(); goto qSiErkRjtC71; qSiErkRjtC71: preg_match_all("\x2f\50\133\x5c\x78\x30\x30\55\x5c\170\61\146\x5d\x29\x2f", $code, $aseq, PREG_OFFSET_CAPTURE); goto f9W5B4w8Gm3S; uHh1utgJPfSG: $end_offset = 0; goto vP2kiPIcp7Oa; pDcTy0qF_2q9: preg_match_all("\57\50\x5b\134\170\60\x30\55\134\170\x35\146\135\x2b\51\57", $code, $aseq, PREG_OFFSET_CAPTURE); goto uHh1utgJPfSG; fQ2hTrLurTK6: bUl17ieQIPPT: goto pDcTy0qF_2q9; qQTACUocjlSs: $sequence = array(); goto iYb0tebcOzkZ; kNeG7Xj830fF: $sequence[] = array("\x42", $code, $len); goto inUO_v7aKfj2; vP2kiPIcp7Oa: foreach ($aseq[1] as $val) { goto f9dfauW53emD; DemLkgQgVdzH: cIvTtdZFAOQa: goto M2i0zhyedNfR; vQoRG5OtSny2: $sequence[] = array("\102", substr($code, $end_offset, $offset - $end_offset), $offset - $end_offset); goto DemLkgQgVdzH; KxGv0yx_hZmM: $end_offset = $offset + $slen; goto SWpOslaQfc2t; SWpOslaQfc2t: YPFSauPT6noU: goto DrFAmf8lmzZM; f9dfauW53emD: $offset = $val[1]; goto I8e380cu7a7l; PgrrhmdrR6Ok: $sequence[] = array("\101", substr($code, $offset, $slen), $slen); goto KxGv0yx_hZmM; M2i0zhyedNfR: $slen = strlen($val[0]); goto PgrrhmdrR6Ok; I8e380cu7a7l: if (!($offset > $end_offset)) { goto cIvTtdZFAOQa; } goto vQoRG5OtSny2; DrFAmf8lmzZM: } goto Tyvfni0D2KIH; e9xSekqQAyZu: } protected function getCodeDataA(&$code_data, $code, $len) { goto Q98qVlg64frz; nFPwsdDrY2NP: n_HCiNqfCpiR: goto R5XmVfl3jCUb; xHXWsCMaohSU: ++$pos; goto VMWUMI2Nnv4I; Nzr_qz_xmWRu: YDzsi21Ejfwa: goto PyonnyrgLNWj; SACkxkj0rpQd: $char_id = ord($char); goto x4wCfDd2zwmB; x4wCfDd2zwmB: if ($char_id >= 241 && $char_id <= 244) { goto MFQGes6Wh6hd; } goto FMqOnVucKZLZ; avTgR8n0z0KS: $code_data[] = strpos($this->keys_a, $char); goto Nzr_qz_xmWRu; IKdbBv0hdftn: if (!($pos < $len)) { goto n_HCiNqfCpiR; } goto OdD4sN0SQsPs; za62zEzriPBP: IUIzHOtAIBgm: goto avTgR8n0z0KS; VMWUMI2Nnv4I: goto q77Zx6k9PF4T; goto nFPwsdDrY2NP; PyonnyrgLNWj: FnUdVhwPc0fI: goto xHXWsCMaohSU; VynkhTd0vVn6: goto YDzsi21Ejfwa; goto czFVFxAeELri; Hz7BFf9DG_6d: goto YDzsi21Ejfwa; goto za62zEzriPBP; FMqOnVucKZLZ: if ($char_id <= 95) { goto IUIzHOtAIBgm; } goto dI5dt2SWHtc6; czFVFxAeELri: MFQGes6Wh6hd: goto LoPPxWBppq37; Uiy69Huspxc_: q77Zx6k9PF4T: goto IKdbBv0hdftn; Q98qVlg64frz: $pos = 0; goto Uiy69Huspxc_; dI5dt2SWHtc6: throw new BarcodeException("\x49\156\166\x61\154\151\x64\40\143\150\x61\x72\141\143\164\145\162\40\x73\145\x71\x75\x65\x6e\143\145"); goto VynkhTd0vVn6; LoPPxWBppq37: $code_data[] = $this->fnc_a[$char_id]; goto Hz7BFf9DG_6d; OdD4sN0SQsPs: $char = $code[$pos]; goto SACkxkj0rpQd; R5XmVfl3jCUb: } protected function getCodeDataB(&$code_data, $code, $len) { goto m0BcZKbeKS3j; ZP2ju2BRpQuY: $code_data[] = $this->fnc_b[$char_id]; goto P23hwWVKF3Tk; m0BcZKbeKS3j: $pos = 0; goto Sn0H_TAptSIb; nG43QKlffBEe: i0gwtNb1Z1Ou: goto V794s9jz1UId; o7YgdgUhQAsD: B9v0hFMGrVsa: goto zSbFzpHdxZtz; Sn0H_TAptSIb: IH3aM1jLCAY4: goto rJEbKKNjoI7O; TBeG8o5xTWBE: $char = $code[$pos]; goto u0CXBizBp3Q8; iCvD2W2Ykvtq: if ($char_id >= 32 && $char_id <= 127) { goto B9v0hFMGrVsa; } goto Q1SuEIEAXfOr; V794s9jz1UId: daYrdc798aUe: goto p9x_9e3Dsoq5; P23hwWVKF3Tk: goto i0gwtNb1Z1Ou; goto o7YgdgUhQAsD; zSbFzpHdxZtz: $code_data[] = strpos($this->keys_b, $char); goto nG43QKlffBEe; p9x_9e3Dsoq5: ++$pos; goto ozgH0KSS7lsJ; e0UpE2O91OU1: M9AUTATMIzm6: goto wQuCAT8hiOnK; u0CXBizBp3Q8: $char_id = ord($char); goto lL033Tize2Ri; DU20Q6Jw3GGd: ToYSRWdoH34b: goto ZP2ju2BRpQuY; Q1SuEIEAXfOr: throw new BarcodeException("\x49\x6e\x76\x61\154\151\144\40\143\150\141\162\141\x63\164\145\x72\x20\163\x65\161\x75\x65\x6e\x63\x65\x3a\40" . $char_id); goto AB21NFzuOnOY; AB21NFzuOnOY: goto i0gwtNb1Z1Ou; goto DU20Q6Jw3GGd; ozgH0KSS7lsJ: goto IH3aM1jLCAY4; goto e0UpE2O91OU1; rJEbKKNjoI7O: if (!($pos < $len)) { goto M9AUTATMIzm6; } goto TBeG8o5xTWBE; lL033Tize2Ri: if ($char_id >= 241 && $char_id <= 244) { goto ToYSRWdoH34b; } goto iCvD2W2Ykvtq; wQuCAT8hiOnK: } protected function getCodeDataC(&$code_data, $code) { goto pSVPosiDRwtA; pSVPosiDRwtA: $blocks = explode(chr(241), $code); goto iaTeAJRngoq0; nz_7Zf2e4ZQV: array_pop($code_data); goto Pizm9leLvF_g; w149ygtyXiSZ: yQuAxJR2ifcJ: goto nz_7Zf2e4ZQV; iaTeAJRngoq0: foreach ($blocks as $blk) { goto LtXRNAkoASK0; V97CFBjT_jr5: goto k2KJRMyOp0O5; goto WQ_rPT6OYvzB; zKMi1BydzRKh: d9L1kQmrTj9V: goto P7zh8yhiBiDk; ImCn6fI9qccI: k2KJRMyOp0O5: goto b6OBog2XgtiZ; QNf_SKO1xOyz: $pos = 0; goto zKMi1BydzRKh; LtXRNAkoASK0: $len = strlen($blk); goto xcEHddoatWt_; alnVF10Q6Ytu: $code_data[] = 102; goto XVWazq3oHMpj; yXrv98zj2Wph: throw new BarcodeException("\111\156\x76\x61\x6c\x69\x64\40\x63\150\x61\x72\x61\143\x74\145\162\x20\163\x65\x71\165\145\x6e\143\145"); goto V97CFBjT_jr5; P7zh8yhiBiDk: if (!($pos < $len)) { goto gVkPuAOaWjyS; } goto Vf1JOL1eu5bU; qWcsFN4djJDL: OFGkJV2ki5Ja: goto QNf_SKO1xOyz; xcEHddoatWt_: if (!($len % 2 != 0)) { goto OFGkJV2ki5Ja; } goto JzbBAh4fwUGT; b6OBog2XgtiZ: KcO51v20NkYT: goto XwMeotbXZwhK; a2sfdtZQ2Ivh: goto d9L1kQmrTj9V; goto yIoAWAk81dMj; XwMeotbXZwhK: $pos += 2; goto a2sfdtZQ2Ivh; JzbBAh4fwUGT: throw new BarcodeException("\124\x68\145\40\154\x65\x6e\x67\x74\x68\40\157\x66\40\145\141\x63\150\40\106\116\x43\61\55\163\145\x70\x61\x72\x61\164\x65\144\40\143\157\144\x65\40\142\x6c\x6f\x63\x6b\x20\155\165\163\164\x20\142\145\x20\x65\x76\x65\x6e"); goto qWcsFN4djJDL; WQ_rPT6OYvzB: MsPZI6OtS8_5: goto JBVUWzoqIca0; Vf1JOL1eu5bU: $chrnum = $blk[$pos] . $blk[$pos + 1]; goto nE_8kOP_881F; nE_8kOP_881F: if (preg_match("\57\x28\133\60\x2d\71\135\x7b\62\x7d\51\57", $chrnum) > 0) { goto MsPZI6OtS8_5; } goto yXrv98zj2Wph; yIoAWAk81dMj: gVkPuAOaWjyS: goto alnVF10Q6Ytu; JBVUWzoqIca0: $code_data[] = intval($chrnum); goto ImCn6fI9qccI; XVWazq3oHMpj: osqGNdSeegvq: goto GuZFjKDiQIkE; GuZFjKDiQIkE: } goto w149ygtyXiSZ; Pizm9leLvF_g: } protected function finalizeCodeData($code_data, $startid) { goto pDtAq8Jv_6OH; GkCbmcmtOFDd: lz64OHo4vx1k: goto TcZc3CRIo4an; qjdNs5Fp_Gef: foreach ($code_data as $key => $val) { $sum += $val * ($key + 1); c5uLKJKCPDeC: } goto GkCbmcmtOFDd; kSaTxOIMgrdV: array_unshift($code_data, $startid); goto Ybf1pvq03BZ6; TcZc3CRIo4an: $code_data[] = $sum % 103; goto oYNR8zzPQo5P; Ybf1pvq03BZ6: return $code_data; goto SkVcNOOvUp8K; oYNR8zzPQo5P: $code_data[] = 106; goto Nsrg3XfFDN7S; Nsrg3XfFDN7S: $code_data[] = 107; goto kSaTxOIMgrdV; pDtAq8Jv_6OH: $sum = $startid; goto qjdNs5Fp_Gef; SkVcNOOvUp8K: } }
