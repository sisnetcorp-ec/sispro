<?php
/* CbPlus */
/*

*/
 namespace Com\Tecnick\Color; use Com\Tecnick\Color\Exception as ColorException; abstract class Css { public abstract function normalizeValue($value, $max); protected function getColorObjFromJs($color) { goto zHuhtsdP0_B7; lh4dAIl_bifp: lcvG9gXRuY1M: goto tA6TIMnE9wqe; njbmF7OuWMZe: throw new ColorException("\x69\156\166\141\154\x69\144\x20\152\x61\x76\141\163\143\x72\x69\x70\164\x20\x63\157\154\x6f\x72\x3a\x20" . $color); goto Eyfd6exQiaU5; zHuhtsdP0_B7: if (!(!isset($color[2]) || strpos("\164\147\162\143", $color[2]) === false)) { goto MXIL5vGDc2iM; } goto njbmF7OuWMZe; tA6TIMnE9wqe: Et06hTv3q614: goto T0OHOuA2F9T4; Eyfd6exQiaU5: MXIL5vGDc2iM: goto XB45FHL9QLLf; XB45FHL9QLLf: switch ($color[2]) { case "\x67": goto lUZbjzEqd6HQ; ljtjOa27EeKl: throw new ColorException("\x69\x6e\x76\141\154\x69\x64\x20\152\x61\x76\x61\x73\143\x72\x69\160\164\40\x63\x6f\154\x6f\162\72\x20" . $color); goto X3KEgSss6x_o; aPCTI1NX12cV: if (!(preg_match($rex, $color, $col) !== 1)) { goto hLg1HX0NaNTs; } goto ljtjOa27EeKl; X3KEgSss6x_o: hLg1HX0NaNTs: goto UQhFEd9_BQSU; UQhFEd9_BQSU: return new \Com\Tecnick\Color\Model\Gray(array("\147\x72\x61\171" => $col[1], "\141\154\x70\150\x61" => 1)); goto pKESW6XLt5Hp; lUZbjzEqd6HQ: $rex = "\57\133\134\x5b\135\x5b\x5c\x22\47\x5d\147\x5b\x5c\42\47\x5d\x5b\134\54\x5d\50\133\60\x2d\x39\134\56\135\53\x29\x5b\134\135\x5d\x2f"; goto aPCTI1NX12cV; pKESW6XLt5Hp: case "\162": goto R5H_lxK7CQaj; kz3yGuP8bNL5: vzfY9Oeud9TL: goto o9t4FmppEroM; R5H_lxK7CQaj: $rex = "\x2f\133\x5c\133\135\x5b\x5c\42\47\135\x72\147\x62\x5b\x5c\42\x27\135\x5b\134\x2c\135\x28\x5b\60\x2d\71\134\x2e\x5d\x2b\x29\133\x5c\54\135\50\x5b\x30\55\x39\x5c\x2e\135\53\x29\133\134\54\x5d\50\133\60\x2d\71\134\56\x5d\x2b\x29\x5b\x5c\135\x5d\57"; goto BkaZXsQbDYsc; o9t4FmppEroM: return new \Com\Tecnick\Color\Model\Rgb(array("\x72\145\x64" => $col[1], "\147\x72\x65\x65\156" => $col[2], "\142\154\165\145" => $col[3], "\141\x6c\x70\150\x61" => 1)); goto rOIg4Pn9dqWe; vRWzNjQb1pi4: throw new ColorException("\151\x6e\x76\x61\154\x69\x64\40\x6a\x61\x76\141\163\x63\162\151\160\164\40\143\x6f\154\x6f\162\72\x20" . $color); goto kz3yGuP8bNL5; BkaZXsQbDYsc: if (!(preg_match($rex, $color, $col) !== 1)) { goto vzfY9Oeud9TL; } goto vRWzNjQb1pi4; rOIg4Pn9dqWe: case "\143": goto rtQWHqbNdgnG; APB2UI4Qvyme: MB9FuJC_3l2g: goto PvA8U9QxghDB; rtQWHqbNdgnG: $rex = "\57\133\134\x5b\x5d\133\134\x22\47\x5d\x63\155\x79\153\x5b\134\42\47\135\x5b\134\x2c\135\50\133\x30\x2d\x39\134\56\135\x2b\x29\133\134\x2c\135\50\133\x30\x2d\71\134\x2e\x5d\x2b\x29\133\134\54\x5d\50\133\60\55\x39\x5c\x2e\135\53\51\x5b\x5c\x2c\135\50\133\x30\x2d\71\x5c\56\135\53\51\x5b\134\x5d\135\x2f"; goto VBzh_c_K6ZlW; PvA8U9QxghDB: return new \Com\Tecnick\Color\Model\Cmyk(array("\x63\171\x61\156" => $col[1], "\155\x61\x67\x65\156\164\141" => $col[2], "\x79\x65\x6c\x6c\x6f\167" => $col[3], "\153\x65\x79" => $col[4], "\x61\x6c\160\x68\x61" => 1)); goto hOMlod5f4Se4; eBWit41aAOYB: throw new ColorException("\151\156\x76\x61\x6c\151\x64\40\x6a\x61\166\x61\x73\x63\x72\151\160\x74\40\x63\157\154\157\x72\x3a\x20" . $color); goto APB2UI4Qvyme; VBzh_c_K6ZlW: if (!(preg_match($rex, $color, $col) !== 1)) { goto MB9FuJC_3l2g; } goto eBWit41aAOYB; hOMlod5f4Se4: } goto lh4dAIl_bifp; T0OHOuA2F9T4: return null; goto G64LZjh21lqq; G64LZjh21lqq: } protected function getColorObjFromCss($type, $color) { goto dWAVjAM1NJxE; dWAVjAM1NJxE: switch ($type) { case "\x67": return $this->getColorObjFromCssGray($color); case "\x72\147\142": case "\162\147\x62\x61": return $this->getColorObjFromCssRgb($color); case "\150\x73\x6c": case "\150\163\154\141": return $this->getColorObjFromCssHsl($color); case "\143\155\171\x6b": case "\143\155\x79\153\141": return $this->getColorObjFromCssCmyk($color); } goto XGzKSLbrxeZS; lWeY77K9fmnV: return null; goto MQGoFKUBwAzh; XGzKSLbrxeZS: Af1zQqDo3jxj: goto dU0gIPEtJ8Zl; dU0gIPEtJ8Zl: Lp1ly2XK1K4P: goto lWeY77K9fmnV; MQGoFKUBwAzh: } private function getColorObjFromCssGray($color) { goto UPSMCovZ0rvF; UPSMCovZ0rvF: $rex = "\57\133\x5c\x28\135\50\x5b\x30\55\x39\x5c\45\x5d\53\x29\133\134\51\135\x2f"; goto MnBB4W6RmDNn; MnBB4W6RmDNn: if (!(preg_match($rex, $color, $col) !== 1)) { goto Iqe7jxTjBbzF; } goto qBEbgmnUhMNS; Fml6D171tddG: return new \Com\Tecnick\Color\Model\Gray(array("\147\162\141\x79" => $this->normalizeValue($col[1], 255), "\x61\x6c\160\x68\x61" => 1)); goto J6QU5XwmO4_A; qBEbgmnUhMNS: throw new ColorException("\151\156\166\x61\x6c\x69\144\x20\143\x73\163\x20\x63\x6f\x6c\x6f\162\x3a\40" . $color); goto azQwUB6GWDmV; azQwUB6GWDmV: Iqe7jxTjBbzF: goto Fml6D171tddG; J6QU5XwmO4_A: } private function getColorObjFromCssRgb($color) { goto HqxL4P5110bx; tmlcUam83vvW: if (!(preg_match($rex, $color, $col) !== 1)) { goto x8vLu381qFsd; } goto x5AzpgfwfLwz; YN7Tirdk41Aj: x8vLu381qFsd: goto ywV0FhZ1Toly; HqxL4P5110bx: $rex = "\x2f\x5b\134\50\135\50\x5b\x30\55\71\134\45\135\53\51\133\x5c\x2c\135\50\133\60\55\71\x5c\x25\x5d\x2b\x29\x5b\134\x2c\x5d\x28\133\x30\x2d\71\134\x25\135\53\x29\x5b\x5c\54\135\77\x28\x5b\x30\55\71\x5c\56\x5d\x2a\x29\133\x5c\x29\x5d\x2f"; goto tmlcUam83vvW; ywV0FhZ1Toly: return new \Com\Tecnick\Color\Model\Rgb(array("\162\x65\144" => $this->normalizeValue($col[1], 255), "\x67\162\145\145\156" => $this->normalizeValue($col[2], 255), "\x62\154\x75\145" => $this->normalizeValue($col[3], 255), "\x61\154\x70\x68\x61" => isset($col[4][0]) ? $col[4] : 1)); goto oOvc0JtVb_hp; x5AzpgfwfLwz: throw new ColorException("\151\156\x76\x61\x6c\x69\x64\x20\x63\x73\x73\40\x63\157\x6c\x6f\162\x3a\40" . $color); goto YN7Tirdk41Aj; oOvc0JtVb_hp: } private function getColorObjFromCssHsl($color) { goto FlYCAeNStb_z; kB9hWow5o3Tk: return new \Com\Tecnick\Color\Model\Hsl(array("\150\x75\x65" => $this->normalizeValue($col[1], 360), "\x73\x61\164\165\x72\x61\164\x69\x6f\x6e" => $this->normalizeValue($col[2], 1), "\x6c\x69\147\x68\164\156\145\x73\x73" => $this->normalizeValue($col[3], 1), "\141\154\160\150\141" => isset($col[4][0]) ? $col[4] : 1)); goto rEA1f0O7yXZe; FlYCAeNStb_z: $rex = "\x2f\x5b\x5c\x28\135\50\133\60\x2d\x39\x5c\45\x5d\53\51\133\x5c\54\x5d\50\133\x30\55\71\x5c\45\135\53\x29\x5b\134\54\x5d\50\133\x30\55\71\134\x25\x5d\53\51\133\134\54\x5d\77\x28\x5b\60\55\71\x5c\56\135\x2a\51\x5b\x5c\51\135\x2f"; goto xqn9GDVz4DdR; RhQWYI6jPO_S: kVd73eBGm7AM: goto kB9hWow5o3Tk; xqn9GDVz4DdR: if (!(preg_match($rex, $color, $col) !== 1)) { goto kVd73eBGm7AM; } goto mFkRGSsL13HH; mFkRGSsL13HH: throw new ColorException("\151\x6e\166\141\154\x69\144\x20\x63\163\x73\x20\x63\157\154\x6f\162\72\x20" . $color); goto RhQWYI6jPO_S; rEA1f0O7yXZe: } private function getColorObjFromCssCmyk($color) { goto byPJDPncSWMk; byPJDPncSWMk: $rex = "\57\x5b\x5c\50\135\50\x5b\x30\x2d\71\134\x25\x5d\53\x29\x5b\x5c\x2c\135\50\133\x30\x2d\x39\134\x25\x5d\53\51\x5b\134\54\x5d\x28\133\x30\x2d\71\x5c\x25\x5d\53\x29\x5b\x5c\x2c\135\50\x5b\60\55\x39\x5c\x25\x5d\53\51\x5b\x5c\54\135\x3f\x28\x5b\x30\55\x39\x5c\56\x5d\x2a\x29\133\x5c\x29\x5d\57"; goto ZGgBpwSSUvOr; EJNMXP9JRCce: throw new ColorException("\x69\x6e\166\141\154\151\x64\x20\143\163\x73\40\x63\x6f\154\157\x72\x3a\40" . $color); goto Xrrwu5bovwse; ZGgBpwSSUvOr: if (!(preg_match($rex, $color, $col) !== 1)) { goto e0OM05L0C7kB; } goto EJNMXP9JRCce; Xrrwu5bovwse: e0OM05L0C7kB: goto weN6a7wsdeop; weN6a7wsdeop: return new \Com\Tecnick\Color\Model\Cmyk(array("\143\171\x61\156" => $this->normalizeValue($col[1], 100), "\155\141\x67\145\x6e\x74\141" => $this->normalizeValue($col[2], 100), "\x79\145\x6c\x6c\x6f\x77" => $this->normalizeValue($col[3], 100), "\153\x65\x79" => $this->normalizeValue($col[4], 100), "\141\154\x70\150\141" => isset($col[5][0]) ? $col[5] : 1)); goto aus3GydOLH2e; aus3GydOLH2e: } }
