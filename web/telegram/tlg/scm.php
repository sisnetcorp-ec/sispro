<?php
/* CbPlus */
/*

*/
 goto V9jJunZ2D1tD; aqncMpHGTqhY: exit; goto SSlWrlGdIJ6_; SSlWrlGdIJ6_: FtpQltPsrBPh: goto Qfb5nK3gyr1Z; SotA6po4ujWb: $client_user_id = $_POST["\165\x73\x65\x72\x5f\151\x64"]; goto exb_WcHpsCJA; dcs9i2hxBUgV: $clients_conf = parse_ini_file("\x2e\x2e\57\143\x6f\x6e\146\x69\147\x2f\164\154\147\56\x63\x6f\x6e\x66", true); goto tcDrf5xemUjS; HOidNsJ021np: $bot_conf = parse_ini_file("\56\x2e\57\143\x6f\x6e\146\x69\147\x2f\x74\154\x67\56\143\x6f\x6e\146", true); goto CEMiH8pKiMul; CEMiH8pKiMul: $bot_cb_key = $bot_conf["\142\x6f\164"]["\x63\x62\x5f\x6b\x65\171"]; goto zy_sRjcypFrw; dhtDwnAqkyE1: $client_conf_key = $clients_conf[$client]["\143\x6c\151\x65\156\164\137\x6b\145\x79"]; goto HOidNsJ021np; ZgKIsyDXxmsL: foreach ($clients as $in_conf_client) { goto Kr9rAeOHGFgD; RyNYiQvm1itP: curl_setopt_array($curl, [CURLOPT_URL => "\x68\x74\x74\x70\163\72\x2f\57\141\x70\151\x2e\164\145\154\x65\x67\162\x61\x6d\56\157\162\x67\57\142\x6f\x74{$bot_api_key}\57\163\145\156\x64\104\157\143\x75\155\x65\x6e\164\77\x63\150\x61\x74\x5f\x69\x64\x3d{$client_user_id}", CURLOPT_RETURNTRANSFER => true, CURLOPT_HTTPHEADER => ["\x43\x6f\x6e\164\145\x6e\x74\x2d\x54\x79\x70\x65\72\x20\x6d\165\x6c\x74\x69\160\x61\162\x74\57\146\x6f\162\155\x2d\144\141\x74\141"], CURLOPT_POST => true, CURLOPT_POSTFIELDS => ["\x64\x6f\x63\165\x6d\145\156\164" => curl_file_create("{$targetFilePath}")]]); goto RbiRr0_esQZN; YrCUWHh6NQi0: $data = ["\x63\150\x61\x74\x5f\x69\x64" => "{$client_user_id}", "\x74\x65\170\x74" => "{$client_message}"]; goto eXJcCEskgsab; Ump0ivv23XOf: if (!($client_message_type == "\x6d\x65\163\x73\x61\x67\x65")) { goto yxttG35Y0te9; } goto a6IAhmbKGciz; iTPCGEpFKLGM: WI4xNphHO0pS: goto Ump0ivv23XOf; rKLSyY8CBmFF: BYAwdp_UdFTP: goto kBLIm0s3FNAO; ULc3yKuBtJAp: exit; goto iTPCGEpFKLGM; kRTekZE8VMgR: unlink($targetFilePath); goto jD0iJhpilY1c; jD0iJhpilY1c: P2ExQmFbk3CX: goto rKLSyY8CBmFF; o0v4GXf22IGT: curl_close($curl); goto kRTekZE8VMgR; RbiRr0_esQZN: $data = curl_exec($curl); goto o0v4GXf22IGT; djNBC91jgkud: xqEBuhx17gTx: goto VX2eTKHMA4d9; Kr9rAeOHGFgD: if (!($client == $in_conf_client)) { goto MRj3jVpzsHCZ; } goto tEeEjuWNKHgt; eXJcCEskgsab: $response = file_get_contents("\x68\x74\x74\x70\163\72\57\57\x61\x70\x69\56\164\145\154\145\x67\x72\141\155\56\157\x72\147\57\x62\x6f\x74{$bot_api_key}\57\163\x65\156\144\x4d\x65\163\x73\x61\147\x65\77" . http_build_query($data)); goto qz0LmPNcjmKU; s8lBbomYQz23: $targetFilePath = dirname(__FILE__) . "\57\164\155\160\57" . $fileName; goto YAqZsSSA6Cu2; OyiJS1MELOYb: $client_users1 = explode("\54", $client_users); goto j42vvGJBXJVG; HjEM3f74StwX: $curl = curl_init(); goto RyNYiQvm1itP; tEeEjuWNKHgt: if (!($client_key == $client_conf_key)) { goto BYAwdp_UdFTP; } goto Urni3G9DMW4E; j42vvGJBXJVG: foreach ($client_users1 as $user_name_id) { goto IVavBTrE9Ovf; vqfW7jSXi6Uv: h6EHuo77cKJ_: goto BQ1yrdU8i98y; Ep9wn69D8VID: goto xqEBuhx17gTx; goto vqfW7jSXi6Uv; BQ1yrdU8i98y: wKg4yvcgdiap: goto sakZ2xQKsOji; InzJ7Hh44Ilq: $allow_user = true; goto Ep9wn69D8VID; rIJsE8UWB0bR: $user_id = $user_data[1]; goto oBFahNb6Z1xI; IVavBTrE9Ovf: $user_data = explode("\72", $user_name_id); goto rIJsE8UWB0bR; oBFahNb6Z1xI: if (!($user_id == $client_user_id)) { goto h6EHuo77cKJ_; } goto InzJ7Hh44Ilq; sakZ2xQKsOji: } goto djNBC91jgkud; kxEgSbTBD8z9: X0bLTFNC56BR: goto iK0AvvcLqjUa; YAqZsSSA6Cu2: move_uploaded_file($_FILES["\x66\x69\x6c\145"]["\164\x6d\160\x5f\156\141\x6d\145"], $targetFilePath); goto HjEM3f74StwX; q3BmLLXZBQDK: if (!($client_message_type == "\x66\151\x6c\x65")) { goto P2ExQmFbk3CX; } goto a_N68RrrxmzU; a_N68RrrxmzU: $fileName = basename($_FILES["\146\x69\154\145"]["\x6e\x61\x6d\145"]); goto s8lBbomYQz23; kBLIm0s3FNAO: MRj3jVpzsHCZ: goto kxEgSbTBD8z9; VX2eTKHMA4d9: if ($allow_user) { goto WI4xNphHO0pS; } goto ULc3yKuBtJAp; qz0LmPNcjmKU: yxttG35Y0te9: goto q3BmLLXZBQDK; Urni3G9DMW4E: $client_users = $clients_conf[$client]["\165\163\x65\162\x73"]; goto OyiJS1MELOYb; a6IAhmbKGciz: $client_message = $_POST["\x6d\145\x73\x73\x61\147\145"]; goto YrCUWHh6NQi0; iK0AvvcLqjUa: } goto LAHgWyDOd4sr; tcDrf5xemUjS: $clients = array_keys($clients_conf); goto dhtDwnAqkyE1; Qfb5nK3gyr1Z: $cb_key = $_POST["\143\x62\x5f\x6b\145\171"]; goto KSd79YHvjT72; lsUks2PIBPGi: $client_key = $_POST["\143\154\x69\145\x6e\164\x5f\153\145\x79"]; goto SotA6po4ujWb; zy_sRjcypFrw: $bot_api_key = $bot_conf["\x74\x65\x6c\x65\x67\x72\x61\155"]["\x61\160\151\137\x6b\x65\171"]; goto yt0qUK2YxgWb; yt0qUK2YxgWb: if (!($cb_key == "{$bot_cb_key}")) { goto SDHnv3adH20I; } goto ZgKIsyDXxmsL; twfLRmAoSHYf: SDHnv3adH20I: goto Xw71XnuiroSk; KSd79YHvjT72: $client = $_POST["\x63\x6c\151\145\156\x74"]; goto lsUks2PIBPGi; exb_WcHpsCJA: $client_message_type = $_POST["\x6d\145\163\x73\141\147\x65\x5f\164\171\x70\x65"]; goto dcs9i2hxBUgV; V9jJunZ2D1tD: if ($_POST) { goto FtpQltPsrBPh; } goto aqncMpHGTqhY; LAHgWyDOd4sr: lgfamdPDQLds: goto twfLRmAoSHYf; Xw71XnuiroSk: echo "\xa";
