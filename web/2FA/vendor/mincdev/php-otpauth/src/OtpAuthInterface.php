<?php
/* CbPlus */
/*

*/
 namespace MincDev\OtpAuth; use DateTimeInterface; interface OtpAuthInterface { public function validate(string $secret, string $code) : bool; public function getCode(string $secret, ?DateTimeInterface $time = null) : string; public function getQR(string $accountName, string $issuer, string $secret) : string; public function newSecret() : string; }
