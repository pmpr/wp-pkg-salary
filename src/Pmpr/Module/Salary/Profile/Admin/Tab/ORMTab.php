<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668708366d2ab             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\Tab; use Pmpr\Module\Salary\Profile\Admin\ListTable\ORMListTable; abstract class ORMTab extends Tab { protected ?ORMListTable $listTable = null; public function waeasakssissiuqg() : ?ORMListTable { return $this->listTable; } public function eiieguqemowyacgi() { if (!$this->waeasakssissiuqg()) { goto koukiyqaccegmquc; } $this->waeasakssissiuqg()->prepare_items(); koukiyqaccegmquc: parent::eiieguqemowyacgi(); } public function gayqqwwuycceosii() : array { $qookweymeqawmcwo = []; $qsyooiqcmkcieyuk = $this->waeasakssissiuqg(); if (!$qsyooiqcmkcieyuk) { goto ekakkiuuquqkccse; } $meywaqqsugaoeyys = $qsyooiqcmkcieyuk->mgogaykgkoogasim(); $qookweymeqawmcwo = ["\154\151\163\164\137\164\x61\142\154\145" => $qsyooiqcmkcieyuk, self::NAME => $meywaqqsugaoeyys->miwqiiqeegeqcwis(), self::qescuiwgsyuikume => $meywaqqsugaoeyys->oyeskqayoscwciem()->uikgwcuascgeissw(self::mmieaueggwwaokig), self::qwumqqyuasyskkkc => $meywaqqsugaoeyys->oyeskqayoscwciem()->uikgwcuascgeissw("\x73\x65\x61\162\x63\x68\137\x69\x74\x65\155\163"), self::kyyscqqmsikeuaea => $qsyooiqcmkcieyuk->umaeoegyykkkqmia(), self::myikkigscysoykgy => $meywaqqsugaoeyys->easkmgsoqaqeyayo()]; ekakkiuuquqkccse: return $qookweymeqawmcwo; } }
