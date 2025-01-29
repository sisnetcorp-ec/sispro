<?php
/* CbPlus */
/*

*/
 namespace Com\Tecnick\Barcode\Type\Linear; use Com\Tecnick\Barcode\Exception as BarcodeException; class KlantIndex extends \Com\Tecnick\Barcode\Type\Linear\RoyalMailFourCc { protected $format = "\x4b\111\130"; protected function formatCode() { $this->extcode = strtoupper($this->code); } protected function setBars() { goto c4EMHg48cdVB; ewaKJth__bZk: $this->nrows = 3; goto SUKgowx8LPdZ; c4EMHg48cdVB: $this->ncols = 0; goto ewaKJth__bZk; HHdr1Gb94NDT: $this->getCoreBars(); goto wqmGOrQzA0Ky; SUKgowx8LPdZ: $this->bars = array(); goto HHdr1Gb94NDT; wqmGOrQzA0Ky: } }
