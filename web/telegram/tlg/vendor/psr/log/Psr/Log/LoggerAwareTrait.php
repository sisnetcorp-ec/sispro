<?php
/* CbPlus */
/*

*/
 namespace Psr\Log; trait LoggerAwareTrait { protected $logger; public function setLogger(LoggerInterface $logger) { $this->logger = $logger; } }
