<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cb93f61ab1c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Container extends BaseClass { const wyqmcowecikgawuu = "\151\142\141\156"; const oogeqgcgkamuoaoe = "\x62\x61\156\153"; const wagwccqcqwgsoyoi = "\154\x6f\143\153\145\144"; const cqkcksqwkcsiykuq = "\x65\163\x63\x61\x70\x65\144"; const kuwsqycgaagiimge = "\141\143\143\157\165\x6e\164"; const skyceaacaaaamiii = "\x64\145\x62\151\164\137\x63\x61\x72\144"; const qagqayweyigciamg = "\163\x61\154\x61\162\x79\x5f\142\x61\x6e\x6b\x5f\141\x63\143\157\165\156\x74\x5f\151\156\146\157\162\155\x61\164\151\157\x6e"; const yuqaieqcaccggqck = "\x63\157\x6c\154\141\x62\157\x72\141\x74\x6f\162"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function ukckwgeyciyygoou() : array { $oammesyieqmwuwyi = $this->weysguygiseoukqw(Setting::gkysgacoiamwmggk, []); $aacykmqwasyaykgu = []; if (!$oammesyieqmwuwyi) { goto jkgouewqysmscmqs; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (ManipulateArray::uuegkqwagymmusiy($igqsaukqcqscimok, [self::iccwcygaeqmomooo, Setting::gskosgoeymsumieq, Setting::iyqigkiieoieskgy, Setting::aewsykuggcssqeyo])) { goto asqqqqakiagymemk; } $sqeykgyoooqysmca = ManipulateArray::get($igqsaukqcqscimok, Setting::iyqigkiieoieskgy, Setting::ogkkygkwcccggasw); $eqgoocgaqwqcimie = ManipulateArray::get($igqsaukqcqscimok, $sqeykgyoooqysmca, 0); if (!$eqgoocgaqwqcimie) { goto iyeswoaqkaeggiiy; } $igqsaukqcqscimok[Setting::oyyoccawmkogkcyy] = $eqgoocgaqwqcimie; $aacykmqwasyaykgu[] = $igqsaukqcqscimok; iyeswoaqkaeggiiy: asqqqqakiagymemk: ucksaiwquekagyqe: } gygqgauaceiuawkq: jkgouewqysmscmqs: return $aacykmqwasyaykgu; } public function mqyckeaqgokeqwuq($qqqskcogoyswqaum, $qqswgiawgeaeoecu) : array { $isweyuoisomqyaag = []; array_filter($qqswgiawgeaeoecu); if (!$qqswgiawgeaeoecu) { goto iquecygaakmiomeg; } $sqeykgyoooqysmca = ManipulateArray::get($qqqskcogoyswqaum, Setting::iyqigkiieoieskgy); $eqgoocgaqwqcimie = ManipulateArray::get($qqqskcogoyswqaum, Setting::oyyoccawmkogkcyy); if ($sqeykgyoooqysmca === Setting::mikaaiimemmoegcm) { goto sgiuwkisugmewmcs; } $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); goto kceeuicccqscwgsu; sgiuwkisugmewmcs: $eqgoocgaqwqcimie = $this->msywmyaoqmaegsuy("{$eqgoocgaqwqcimie}\45"); kceeuicccqscwgsu: $isweyuoisomqyaag = [self::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, self::ssmskyqgcmeiayco => sprintf(__("\106\145\x65\40\x6f\146\x20\145\141\x63\150\40\x74\162\141\x6e\x73\x61\143\x74\151\x6f\x6e\40\x69\163\x20\x25\163", PR__MDL__SALARY), $eqgoocgaqwqcimie)]; iquecygaakmiomeg: return $isweyuoisomqyaag; } public function kgkkgawwksigaqyy($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk) { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $eiwicgsqoiaeawkk = User::symcgieuakksimmu()->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk); $qmomekeesaiaoegu = ManipulateArray::get($eiwicgsqoiaeawkk, self::oogeqgcgkamuoaoe); $sqeykgyoooqysmca = ManipulateArray::get($eiwicgsqoiaeawkk, self::squoamkioomemiyi); $ccamueccusigaaio = null; foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $qgeeqyucwycemwmo = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::aewsykuggcssqeyo); $aqsekqkimiekimei = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::gskosgoeymsumieq); if (!(in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true) && in_array($qmomekeesaiaoegu, $aqsekqkimiekimei, true))) { goto yeemsgmumygmumqw; } $ccamueccusigaaio = $qqqskcogoyswqaum; goto eacysqsegwcqawsa; yeemsgmumygmumqw: yimeskeioamqmuwg: } eacysqsegwcqawsa: return $ccamueccusigaaio; } protected function imqmyggquiyewkww($uamcoiueqaamsqma, $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\x73\163", "\x6d\x73\x67\x20\155\171\55\141\x75\x74\x6f"); return ManipulateHTML::iaaacsuskiakkwui(ManipulateHTML::ciuuiyckmsygceis($uamcoiueqaamsqma, ["\143\154\141\163\x73" => "\x6d\x79\55\141\165\164\x6f"]), $wwgucssaecqekuek); } }
