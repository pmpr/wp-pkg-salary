<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432b7fd5e31d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\ORM\DB\Model; abstract class Common extends Model { public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->oyeskqayoscwciem()->okgmqaeuaeymaocm($wksoawcgagcgoask)->wiskakymeaywyeuw($wksoawcgagcgoask); } public function usouqioywgosyqqy($iueymcwwscwqkiyq, $meqocwsecsywiiqs) : string { return ManipulateHTML::uuccukgasskgimsq("\x6d\x61\162\153", ["\143\x6c\141\163\163" => "\x70\162\x2d\163\x74\x61\164\x75\163\40\163\164\141\x74\165\163\55{$iueymcwwscwqkiyq}"], ManipulateHTML::gmqyuaqwgiayskei($meqocwsecsywiiqs)); } public function cseaisoguykosgem($oammesyieqmwuwyi, $aiowsaccomcoikus = "\141\155\x6f\x75\x6e\x74") : int { $smowyuyseuwiaiei = 0; if (!$oammesyieqmwuwyi) { goto coywmiyqgsweuiic; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $smowyuyseuwiaiei += (int) ManipulateArray::get($igqsaukqcqscimok, $aiowsaccomcoikus, 0); ieumumsgyguceusy: } yssscwioiyygssec: coywmiyqgsweuiic: return $smowyuyseuwiaiei; } public function yqcgeogiccmkwuic($mksyucucyswaukig, $ywquoeygyskoaucu, $mgkceomocowocqyo = self::uwycywkimsycqwcy, $syweiogqscmeigge = "\x61\155\157\x75\156\x74") { $oammesyieqmwuwyi = $this->iscemaoqqckmkago($ywquoeygyskoaucu, $mksyucucyswaukig, $syweiogqscmeigge); $smowyuyseuwiaiei = $this->cseaisoguykosgem($oammesyieqmwuwyi, $syweiogqscmeigge); if (!($mgkceomocowocqyo === self::uwycywkimsycqwcy)) { goto siqagquguiemuoku; } $smowyuyseuwiaiei = ManipulateWoocommerce::mcgaskyiamgqmqgu($smowyuyseuwiaiei); siqagquguiemuoku: return $smowyuyseuwiaiei; } public function ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $saqmwwmqiwmkiwaa = null, $locale = null, $mksyucucyswaukig = null) { return parent::ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, ManipulateSetting::yoaaussmackoisuw(), $locale, $mksyucucyswaukig); } }
