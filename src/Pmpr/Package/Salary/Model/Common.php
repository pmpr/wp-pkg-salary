<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148f36b61d79             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\ORM\DB\Model; abstract class Common extends Model { public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->oyeskqayoscwciem()->okgmqaeuaeymaocm($wksoawcgagcgoask)->wiskakymeaywyeuw($wksoawcgagcgoask); } public function usouqioywgosyqqy($iueymcwwscwqkiyq, $meqocwsecsywiiqs) : string { return ManipulateHTML::uuccukgasskgimsq("\x6d\141\x72\x6b", ["\x63\x6c\x61\x73\x73" => "\160\162\55\163\164\x61\x74\165\x73\40\163\x74\141\x74\x75\x73\55{$iueymcwwscwqkiyq}"], ManipulateHTML::gmqyuaqwgiayskei($meqocwsecsywiiqs)); } public function cseaisoguykosgem($oammesyieqmwuwyi, $aiowsaccomcoikus = "\x61\x6d\x6f\x75\x6e\164") : int { $smowyuyseuwiaiei = 0; if (!$oammesyieqmwuwyi) { goto okkmcocqokkskasy; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $smowyuyseuwiaiei += (int) ManipulateArray::get($igqsaukqcqscimok, $aiowsaccomcoikus, 0); esikeyqyuikmaiek: } iwsmmkqaoksmocok: okkmcocqokkskasy: return $smowyuyseuwiaiei; } public function yqcgeogiccmkwuic($mksyucucyswaukig, $ywquoeygyskoaucu, $mgkceomocowocqyo = "\x76\x69\x65\x77", $syweiogqscmeigge = "\x61\155\x6f\x75\156\x74") { $oammesyieqmwuwyi = $this->iscemaoqqckmkago($ywquoeygyskoaucu, $mksyucucyswaukig, $syweiogqscmeigge); $smowyuyseuwiaiei = $this->cseaisoguykosgem($oammesyieqmwuwyi, $syweiogqscmeigge); if (!($mgkceomocowocqyo === "\166\x69\145\167")) { goto qiiigwkqeoewsuwm; } $smowyuyseuwiaiei = ManipulateWoocommerce::mcgaskyiamgqmqgu($smowyuyseuwiaiei); qiiigwkqeoewsuwm: return $smowyuyseuwiaiei; } public function ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $saqmwwmqiwmkiwaa = null, $aamkqmkgsaqmcuao = null, $mksyucucyswaukig = null) { return parent::ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, ManipulateSetting::yoaaussmackoisuw(), $aamkqmkgsaqmcuao, $mksyucucyswaukig); } }
