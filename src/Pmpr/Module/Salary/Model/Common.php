<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678aa11f991c7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\Model; abstract class Common extends Model { public function usouqioywgosyqqy($iueymcwwscwqkiyq, $meqocwsecsywiiqs) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); return $swqimwqeweekeusq->uuccukgasskgimsq("\x6d\141\x72\153", ["\143\154\x61\x73\x73" => "\160\162\x2d\163\x74\x61\164\165\163\40\x73\164\141\x74\x75\x73\55{$iueymcwwscwqkiyq}"], $swqimwqeweekeusq->gmqyuaqwgiayskei($meqocwsecsywiiqs)); } public function cseaisoguykosgem($oammesyieqmwuwyi, $aiowsaccomcoikus = Constants::aioqyewkwawaqgqe) : int { $smowyuyseuwiaiei = 0; if ($oammesyieqmwuwyi) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $smowyuyseuwiaiei += (int) $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $aiowsaccomcoikus, 0); } } return $smowyuyseuwiaiei; } public function yqcgeogiccmkwuic($mksyucucyswaukig, $ywquoeygyskoaucu, $mgkceomocowocqyo = Constants::uwycywkimsycqwcy, $syweiogqscmeigge = Constants::aioqyewkwawaqgqe) { $oammesyieqmwuwyi = $this->iekyeyicoyyawomk()->iscemaoqqckmkago($ywquoeygyskoaucu, $mksyucucyswaukig, $syweiogqscmeigge); $smowyuyseuwiaiei = $this->cseaisoguykosgem($oammesyieqmwuwyi, $syweiogqscmeigge); if ($mgkceomocowocqyo === Constants::uwycywkimsycqwcy) { $smowyuyseuwiaiei = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($smowyuyseuwiaiei); } return $smowyuyseuwiaiei; } }
