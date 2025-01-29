<?php
/* CbPlus */
/*

*/
 namespace Composer\Autoload; class ClassLoader { private $prefixLengthsPsr4 = array(); private $prefixDirsPsr4 = array(); private $fallbackDirsPsr4 = array(); private $prefixesPsr0 = array(); private $fallbackDirsPsr0 = array(); private $useIncludePath = false; private $classMap = array(); private $classMapAuthoritative = false; private $missingClasses = array(); private $apcuPrefix; public function getPrefixes() { goto d7aGkisuHe7V; ApbOgQOCf19K: return call_user_func_array("\x61\x72\162\x61\x79\x5f\155\x65\162\147\145", $this->prefixesPsr0); goto epJM2UOWksFG; nYUYeZG0FaOr: return array(); goto F4PnD_Tibmvz; epJM2UOWksFG: q8kTFBtBiIZz: goto nYUYeZG0FaOr; d7aGkisuHe7V: if (empty($this->prefixesPsr0)) { goto q8kTFBtBiIZz; } goto ApbOgQOCf19K; F4PnD_Tibmvz: } public function getPrefixesPsr4() { return $this->prefixDirsPsr4; } public function getFallbackDirs() { return $this->fallbackDirsPsr0; } public function getFallbackDirsPsr4() { return $this->fallbackDirsPsr4; } public function getClassMap() { return $this->classMap; } public function addClassMap(array $classMap) { goto qzGKQ29E4MoL; M5r17MQHkd2e: b1pWkboDGqyj: goto RYnpff7KgotH; il9HmFUYgGaL: $this->classMap = array_merge($this->classMap, $classMap); goto M5r17MQHkd2e; HNC3ftzYpraw: r1ioV_N6Xsd3: goto il9HmFUYgGaL; xQJtbVAwnuU8: goto b1pWkboDGqyj; goto HNC3ftzYpraw; qzGKQ29E4MoL: if ($this->classMap) { goto r1ioV_N6Xsd3; } goto raFil5Vpe1iM; raFil5Vpe1iM: $this->classMap = $classMap; goto xQJtbVAwnuU8; RYnpff7KgotH: } public function add($prefix, $paths, $prepend = false) { goto lX7o9P50th8T; lhr3xAlCBn5N: return; goto cpY39UllM7dx; s1ba8hCudEPR: $this->prefixesPsr0[$first][$prefix] = (array) $paths; goto UW15Bwocx7FF; lX7o9P50th8T: if ($prefix) { goto djAMXMhQhiwu; } goto Wdh_nDQFqLI1; IzLM5jjBaL7_: goto weRIjeq9ilSV; goto y9uUNT3duY8Y; AB3xI8T1tVF8: weRIjeq9ilSV: goto n9MHyep1Bpx3; hLO1Exappi8n: $this->prefixesPsr0[$first][$prefix] = array_merge((array) $paths, $this->prefixesPsr0[$first][$prefix]); goto AB3xI8T1tVF8; lrFz2gi3Z7bt: $this->fallbackDirsPsr0 = array_merge($this->fallbackDirsPsr0, (array) $paths); goto cSmWHlnxnMSv; G_a4keJwwvYv: if (isset($this->prefixesPsr0[$first][$prefix])) { goto aI8vh7JpaQDn; } goto s1ba8hCudEPR; lpfinR0n5gy9: $first = $prefix[0]; goto G_a4keJwwvYv; cSmWHlnxnMSv: goto S8FtkhoJuKu3; goto BSO4PUqNPzmo; y9uUNT3duY8Y: CG0V7hrH89Fn: goto hLO1Exappi8n; Wdh_nDQFqLI1: if ($prepend) { goto KAYvWJ4_Nz8S; } goto lrFz2gi3Z7bt; UW15Bwocx7FF: return; goto dO41fvgTpd0M; dO41fvgTpd0M: aI8vh7JpaQDn: goto ORJSIZ5qWPS1; BSO4PUqNPzmo: KAYvWJ4_Nz8S: goto R8JEyeXwcZ36; KJyColS5AsiJ: S8FtkhoJuKu3: goto lhr3xAlCBn5N; ORJSIZ5qWPS1: if ($prepend) { goto CG0V7hrH89Fn; } goto kjmee1hKpkuA; kjmee1hKpkuA: $this->prefixesPsr0[$first][$prefix] = array_merge($this->prefixesPsr0[$first][$prefix], (array) $paths); goto IzLM5jjBaL7_; R8JEyeXwcZ36: $this->fallbackDirsPsr0 = array_merge((array) $paths, $this->fallbackDirsPsr0); goto KJyColS5AsiJ; cpY39UllM7dx: djAMXMhQhiwu: goto lpfinR0n5gy9; n9MHyep1Bpx3: } public function addPsr4($prefix, $paths, $prepend = false) { goto qBiwOILuWajv; gnM5wxs31IKI: $this->fallbackDirsPsr4 = array_merge((array) $paths, $this->fallbackDirsPsr4); goto lZuNOiRff7bJ; EnC_z3KxS9iz: G1u2HPF2ACUB: goto gnM5wxs31IKI; YSx3dcSajcRW: if (!("\x5c" !== $prefix[$length - 1])) { goto XI1VxRlkVLpB; } goto DFNEr6MTOv06; ASqCTFRu7fHZ: goto y1tHz7CQYY4m; goto oMqRL3Q83w6e; vgsqcaTpVKZo: if ($prepend) { goto xFnwqJJN29pi; } goto AZLqdhOGfGnx; Wzt6IjMJ11IP: $this->prefixDirsPsr4[$prefix] = array_merge((array) $paths, $this->prefixDirsPsr4[$prefix]); goto uRiqwOMfrJPX; gpVTcNFlMQeH: XI1VxRlkVLpB: goto HggYym_n8qiW; Zy8tt6ozPglX: if (!isset($this->prefixDirsPsr4[$prefix])) { goto fMRCsBmrUfpx; } goto vgsqcaTpVKZo; R3gv_32UxA61: goto y1tHz7CQYY4m; goto q1L41SlMGAfg; qBiwOILuWajv: if (!$prefix) { goto TagYCgUmMHs0; } goto Zy8tt6ozPglX; oMqRL3Q83w6e: TagYCgUmMHs0: goto UY4N2akLlPe7; DFNEr6MTOv06: throw new \InvalidArgumentException("\101\40\156\x6f\x6e\x2d\145\155\x70\164\171\x20\x50\x53\122\55\x34\40\160\162\145\146\x69\x78\x20\x6d\165\x73\x74\x20\x65\x6e\144\40\167\x69\x74\150\40\141\x20\156\x61\x6d\x65\163\x70\x61\x63\145\40\163\145\x70\x61\x72\x61\x74\157\x72\x2e"); goto gpVTcNFlMQeH; uRiqwOMfrJPX: y1tHz7CQYY4m: goto FpGxkaK_FhOn; YV7ggzTd0c4B: $this->fallbackDirsPsr4 = array_merge($this->fallbackDirsPsr4, (array) $paths); goto g414ZdejIP5X; UY4N2akLlPe7: if ($prepend) { goto G1u2HPF2ACUB; } goto YV7ggzTd0c4B; q1L41SlMGAfg: xFnwqJJN29pi: goto Wzt6IjMJ11IP; lZuNOiRff7bJ: ctZsjoAhKWeu: goto HndUJIXjsMjY; HggYym_n8qiW: $this->prefixLengthsPsr4[$prefix[0]][$prefix] = $length; goto DKevcv43QzGs; AZLqdhOGfGnx: $this->prefixDirsPsr4[$prefix] = array_merge($this->prefixDirsPsr4[$prefix], (array) $paths); goto ASqCTFRu7fHZ; oIaE1GvsUuN5: fMRCsBmrUfpx: goto nH36AiNMRNV8; g414ZdejIP5X: goto ctZsjoAhKWeu; goto EnC_z3KxS9iz; HndUJIXjsMjY: goto y1tHz7CQYY4m; goto oIaE1GvsUuN5; DKevcv43QzGs: $this->prefixDirsPsr4[$prefix] = (array) $paths; goto R3gv_32UxA61; nH36AiNMRNV8: $length = strlen($prefix); goto YSx3dcSajcRW; FpGxkaK_FhOn: } public function set($prefix, $paths) { goto SGN2RJaAZj4e; PCA7XqJIqI9x: goto FNNWx3_Ez1A9; goto WwEoa1Ffs7Vj; b9XBr1z02G94: $this->fallbackDirsPsr0 = (array) $paths; goto C0HN7xniiNeN; SGN2RJaAZj4e: if (!$prefix) { goto cUuxGrwF3RXP; } goto DSZJxrHDxctg; DSZJxrHDxctg: $this->prefixesPsr0[$prefix[0]][$prefix] = (array) $paths; goto PCA7XqJIqI9x; WwEoa1Ffs7Vj: cUuxGrwF3RXP: goto b9XBr1z02G94; C0HN7xniiNeN: FNNWx3_Ez1A9: goto w6uk772qgVJ7; w6uk772qgVJ7: } public function setPsr4($prefix, $paths) { goto kMm875yEJurW; ABTsBfTbbJgI: $this->prefixDirsPsr4[$prefix] = (array) $paths; goto E6U5bwVfZ03C; stxQoSnBbi36: $this->prefixLengthsPsr4[$prefix[0]][$prefix] = $length; goto ABTsBfTbbJgI; E6U5bwVfZ03C: goto J6gQ5YrZFiUN; goto Dl3IxK0sgz1S; kMm875yEJurW: if (!$prefix) { goto kelb7uvPnM8x; } goto bftvkq0iyzmo; Ac4zh6JbG_RA: $this->fallbackDirsPsr4 = (array) $paths; goto Ktu72Dlj4j52; bftvkq0iyzmo: $length = strlen($prefix); goto XxlL703QOVzj; qYywNS9hrXwU: JqiEYiJBo9Xv: goto stxQoSnBbi36; Dl3IxK0sgz1S: kelb7uvPnM8x: goto Ac4zh6JbG_RA; Ktu72Dlj4j52: J6gQ5YrZFiUN: goto JITzjnRvFn22; XxlL703QOVzj: if (!("\x5c" !== $prefix[$length - 1])) { goto JqiEYiJBo9Xv; } goto o47SuZHNYNWY; o47SuZHNYNWY: throw new \InvalidArgumentException("\x41\x20\156\x6f\156\55\x65\155\160\164\171\40\120\x53\x52\x2d\64\40\x70\162\145\146\151\170\40\155\165\163\164\x20\145\156\144\x20\x77\151\x74\150\x20\x61\40\156\x61\155\x65\x73\x70\141\143\x65\x20\163\145\160\141\162\x61\164\x6f\162\x2e"); goto qYywNS9hrXwU; JITzjnRvFn22: } public function setUseIncludePath($useIncludePath) { $this->useIncludePath = $useIncludePath; } public function getUseIncludePath() { return $this->useIncludePath; } public function setClassMapAuthoritative($classMapAuthoritative) { $this->classMapAuthoritative = $classMapAuthoritative; } public function isClassMapAuthoritative() { return $this->classMapAuthoritative; } public function setApcuPrefix($apcuPrefix) { $this->apcuPrefix = function_exists("\x61\160\143\x75\x5f\x66\x65\x74\x63\150") && filter_var(ini_get("\x61\160\x63\56\145\x6e\141\x62\x6c\x65\144"), FILTER_VALIDATE_BOOLEAN) ? $apcuPrefix : null; } public function getApcuPrefix() { return $this->apcuPrefix; } public function register($prepend = false) { spl_autoload_register(array($this, "\154\157\x61\144\x43\154\x61\163\x73"), true, $prepend); } public function unregister() { spl_autoload_unregister(array($this, "\154\157\x61\144\103\154\x61\x73\x73")); } public function loadClass($class) { goto gPuWe3Ny8Dhk; D9plRM2kXh0F: ltVttRLnwoVD: goto t4qJYCkrUAOO; gPuWe3Ny8Dhk: if (!($file = $this->findFile($class))) { goto ltVttRLnwoVD; } goto TA8Lot24aFRx; NxVjA21ol9jd: return true; goto D9plRM2kXh0F; TA8Lot24aFRx: includeFile($file); goto NxVjA21ol9jd; t4qJYCkrUAOO: } public function findFile($class) { goto ePwBW68onFUj; hnPB_toVFPPs: n79wtkWZgbTO: goto wUPtuIt_euQz; Rp9n96QCHIHM: if (!$hit) { goto N9S7qSIGPOy2; } goto ihWhjWh9tsta; Tebgkoq1UCyG: return $this->classMap[$class]; goto hnPB_toVFPPs; inxPddEPfmRD: if (!(null !== $this->apcuPrefix)) { goto qRsRtr7egOuH; } goto Z1sxI33NQPki; wUPtuIt_euQz: if (!($this->classMapAuthoritative || isset($this->missingClasses[$class]))) { goto WerIFHXSeER5; } goto chX28WtVpbY_; lY8Mopw5tAA1: $file = apcu_fetch($this->apcuPrefix . $class, $hit); goto Rp9n96QCHIHM; S0Uy68yoQsz6: WerIFHXSeER5: goto Pl3w856bqLn1; Z1sxI33NQPki: apcu_add($this->apcuPrefix . $class, $file); goto pXlgl6JqDDGR; j32TvhPDY5sS: if (!(false === $file)) { goto c7E8lAUknxmM; } goto t6BOqhMz0oIt; XMDjyeB3Gpjv: H60SuEAGNG1R: goto inxPddEPfmRD; ceSUv1cPUoMu: if (!(false === $file && defined("\110\x48\126\x4d\x5f\x56\105\x52\x53\x49\117\x4e"))) { goto H60SuEAGNG1R; } goto BGaBGtkUY8M5; BGaBGtkUY8M5: $file = $this->findFileWithExtension($class, "\x2e\x68\x68"); goto XMDjyeB3Gpjv; mhocBMradTN9: c7E8lAUknxmM: goto TqxdEX9bs0is; Pl3w856bqLn1: if (!(null !== $this->apcuPrefix)) { goto U47__rKIBebJ; } goto lY8Mopw5tAA1; IvBW7DTO6w1a: U47__rKIBebJ: goto ZhEk6F6fQ7Mf; t6BOqhMz0oIt: $this->missingClasses[$class] = true; goto mhocBMradTN9; ihWhjWh9tsta: return $file; goto Vsr1qdk1gEs5; TqxdEX9bs0is: return $file; goto fimjd1Zmlhot; chX28WtVpbY_: return false; goto S0Uy68yoQsz6; ePwBW68onFUj: if (!isset($this->classMap[$class])) { goto n79wtkWZgbTO; } goto Tebgkoq1UCyG; Vsr1qdk1gEs5: N9S7qSIGPOy2: goto IvBW7DTO6w1a; ZhEk6F6fQ7Mf: $file = $this->findFileWithExtension($class, "\56\x70\x68\160"); goto ceSUv1cPUoMu; pXlgl6JqDDGR: qRsRtr7egOuH: goto j32TvhPDY5sS; fimjd1Zmlhot: } private function findFileWithExtension($class, $ext) { goto ZhmTSvKWc99i; LWgVOlrCz_N5: Z_bvOJW4uWvG: goto BAHuTgev2eH1; UOCdQwVU3s4o: $subPath = $class; goto UrNQ6whLt4pP; f03bJAOzcVLS: $search = $subPath . "\134"; goto NrOaYjJtTSpd; xjq1nVEzNpLP: fHg55y7w8B5N: goto oALmrrSOJwPk; r_d4CnJLATDq: $logicalPathPsr0 = substr($logicalPathPsr4, 0, $pos + 1) . strtr(substr($logicalPathPsr4, $pos + 1), "\137", DIRECTORY_SEPARATOR); goto SEb0R80Fuub7; BiuMg08PmnXx: if (false !== ($pos = strrpos($class, "\134"))) { goto Jy15G7Ai0Thh; } goto dnHYHdDqwKpg; mtWu3Mh2ik17: goto sXCF0wX4IqhT; goto p4UgAIvMZ7Zy; ZhmTSvKWc99i: $logicalPathPsr4 = strtr($class, "\134", DIRECTORY_SEPARATOR) . $ext; goto UyMNlgEJwPm8; sZi_uMYr1IHo: sxRATpLwZSND: goto CPt_mCljLDcP; oALmrrSOJwPk: foreach ($this->fallbackDirsPsr0 as $dir) { goto mTG46trlJ2gA; mTG46trlJ2gA: if (!file_exists($file = $dir . DIRECTORY_SEPARATOR . $logicalPathPsr0)) { goto VEHa1f3l92BF; } goto Vo7p80_dUPlV; Vo7p80_dUPlV: return $file; goto VXGVeUVxmdoM; VXGVeUVxmdoM: VEHa1f3l92BF: goto EnBvm1kePv0R; EnBvm1kePv0R: MKRGSkQL9fcf: goto dp1Eemii9jPx; dp1Eemii9jPx: } goto sZi_uMYr1IHo; weltDExg2PXK: if (!isset($this->prefixLengthsPsr4[$first])) { goto KTNtBmpDjVn5; } goto UOCdQwVU3s4o; c4WsGTHA9vTK: if (!isset($this->prefixesPsr0[$first])) { goto fHg55y7w8B5N; } goto UdLYMmjyuhGc; UrNQ6whLt4pP: sXCF0wX4IqhT: goto yZQaibnH2dmD; DOnOl3QpOOxu: $subPath = substr($subPath, 0, $lastPos); goto f03bJAOzcVLS; M1rMyuyQrqvk: foreach ($this->prefixDirsPsr4[$search] as $dir) { goto sbXvkNcAQZRO; aobgjrCBzOMI: return $file; goto w54S8b66gNpL; w54S8b66gNpL: Qtf1WztyC2nL: goto SHnLtiXt0Dq9; sbXvkNcAQZRO: if (!file_exists($file = $dir . $pathEnd)) { goto Qtf1WztyC2nL; } goto aobgjrCBzOMI; SHnLtiXt0Dq9: AT1WUmZWbcV7: goto zCam2WFpAgRs; zCam2WFpAgRs: } goto LWgVOlrCz_N5; OWT8cxJsV_YD: W0YurhpIfcru: goto BiuMg08PmnXx; VJzqgsN5aOX5: $pathEnd = DIRECTORY_SEPARATOR . substr($logicalPathPsr4, $lastPos + 1); goto M1rMyuyQrqvk; tT6ryl2OLLwL: goto vTToztQyxoTw; goto WNw0eSLz7KN7; p4UgAIvMZ7Zy: khMGmEJ8EO0b: goto AvKkH2ZRUHGj; SEb0R80Fuub7: vTToztQyxoTw: goto c4WsGTHA9vTK; EE0qnemYjarI: return $file; goto cQI6ILj_cKsG; UyMNlgEJwPm8: $first = $class[0]; goto weltDExg2PXK; CDlFpq6c_ye0: return false; goto xCwvMpiPemi_; UdLYMmjyuhGc: foreach ($this->prefixesPsr0[$first] as $prefix => $dirs) { goto Sia3VCKo3oQW; Sia3VCKo3oQW: if (!(0 === strpos($class, $prefix))) { goto YDsUZKF0drHl; } goto zOzBTRmmbBF3; zOzBTRmmbBF3: foreach ($dirs as $dir) { goto o3wxELRQE3l_; IdTh0PN4GXN8: ipFwee3OYiqB: goto Yv1wIzbLMvr2; Yv1wIzbLMvr2: fAPRtVTHqkiH: goto mn0G_gzwVZUJ; o3wxELRQE3l_: if (!file_exists($file = $dir . DIRECTORY_SEPARATOR . $logicalPathPsr0)) { goto ipFwee3OYiqB; } goto f7Al9Bid8bKi; f7Al9Bid8bKi: return $file; goto IdTh0PN4GXN8; mn0G_gzwVZUJ: } goto bkgXbvoRTQgd; b0buEMJDyAZf: YDsUZKF0drHl: goto Role7qSY51Yy; Role7qSY51Yy: s7VqmVZ4rqpk: goto IWxI6fjxYKBh; bkgXbvoRTQgd: PsUn3THvtLpE: goto b0buEMJDyAZf; IWxI6fjxYKBh: } goto CuOA1evinMv0; dnHYHdDqwKpg: $logicalPathPsr0 = strtr($class, "\137", DIRECTORY_SEPARATOR) . $ext; goto tT6ryl2OLLwL; WNw0eSLz7KN7: Jy15G7Ai0Thh: goto r_d4CnJLATDq; yZQaibnH2dmD: if (!(false !== ($lastPos = strrpos($subPath, "\134")))) { goto khMGmEJ8EO0b; } goto DOnOl3QpOOxu; BAHuTgev2eH1: LlMYb34gSU5i: goto mtWu3Mh2ik17; cQI6ILj_cKsG: CLu3WppbzD1A: goto CDlFpq6c_ye0; CPt_mCljLDcP: if (!($this->useIncludePath && ($file = stream_resolve_include_path($logicalPathPsr0)))) { goto CLu3WppbzD1A; } goto EE0qnemYjarI; AvKkH2ZRUHGj: KTNtBmpDjVn5: goto oYE2Zzgs_IPn; oYE2Zzgs_IPn: foreach ($this->fallbackDirsPsr4 as $dir) { goto J2YFyhYEUZYY; QoMF7Plj5wiO: xhAd9sktOX59: goto xCI3OzRnlhni; J2YFyhYEUZYY: if (!file_exists($file = $dir . DIRECTORY_SEPARATOR . $logicalPathPsr4)) { goto H0MbfVHx_J1a; } goto ICGLLrT_3G5T; ICGLLrT_3G5T: return $file; goto NXle97D4FlFb; NXle97D4FlFb: H0MbfVHx_J1a: goto QoMF7Plj5wiO; xCI3OzRnlhni: } goto OWT8cxJsV_YD; CuOA1evinMv0: yqNLaeci3NKQ: goto xjq1nVEzNpLP; NrOaYjJtTSpd: if (!isset($this->prefixDirsPsr4[$search])) { goto LlMYb34gSU5i; } goto VJzqgsN5aOX5; xCwvMpiPemi_: } } function includeFile($file) { include $file; }
