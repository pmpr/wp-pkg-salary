<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67955283d5dca             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\Tab; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Profile\Admin\ListTable\ORMListTable; abstract class ORMTab extends Tab { protected ?ORMListTable $listTable = null; public function waeasakssissiuqg() : ?ORMListTable { return $this->listTable; } public function eiieguqemowyacgi() { if ($this->waeasakssissiuqg()) { $this->waeasakssissiuqg()->prepare_items(); } parent::eiieguqemowyacgi(); } public function gayqqwwuycceosii() : array { $qookweymeqawmcwo = []; $qsyooiqcmkcieyuk = $this->waeasakssissiuqg(); if ($qsyooiqcmkcieyuk) { $meywaqqsugaoeyys = $qsyooiqcmkcieyuk->mgogaykgkoogasim(); $qookweymeqawmcwo = ["\154\x69\x73\164\137\x74\x61\142\154\145" => $qsyooiqcmkcieyuk, Constants::NAME => $meywaqqsugaoeyys->miwqiiqeegeqcwis(), Constants::qescuiwgsyuikume => $meywaqqsugaoeyys->oyeskqayoscwciem()->uikgwcuascgeissw(Constants::mmieaueggwwaokig), Constants::qwumqqyuasyskkkc => $meywaqqsugaoeyys->oyeskqayoscwciem()->uikgwcuascgeissw("\163\x65\x61\162\x63\150\x5f\151\x74\x65\x6d\x73"), Constants::kyyscqqmsikeuaea => $qsyooiqcmkcieyuk->umaeoegyykkkqmia(), Constants::myikkigscysoykgy => $meywaqqsugaoeyys->easkmgsoqaqeyayo()]; } return $qookweymeqawmcwo; } }
