<?php
/* CbPlus */
/*

*/
 namespace Psr\Log; class NullLogger extends AbstractLogger { public function log($level, $message, array $context = array()) { } }
