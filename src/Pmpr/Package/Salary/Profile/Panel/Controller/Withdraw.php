<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c04d2d4c02b             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Salary\Model\Income; use Pmpr\Package\Salary\Model\Payment; use Pmpr\Package\Salary\Model\Withdraw as Model; use Pmpr\Package\Salary\Model\Agreement; use Pmpr\Package\Salary\Setting; use Pmpr\Package\Salary\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Withdraw extends Controller { const muwsgygqegywogka = "\x61\x67\162\x65\145\155\145\156\164\x73"; public function __construct() { $this->rest_base = "\x77\x69\x74\150\x64\162\141\x77"; parent::__construct(); } public function register_routes() { $this->register("\57\x67\x65\164\55\154\x69\163\x74\55\142\171\x2d\x75\x73\145\x72", [self::wwgusigoaksqmwsm => [$this, "\143\x75\141\x6b\x69\x65\153\x73\x73\147\153\x65\171\x73\167\x61"]]); $this->register("\57\x67\x65\x74\x2d\146\x69\145\154\144\163", [self::wwgusigoaksqmwsm => [$this, "\165\147\x6d\x63\x65\x63\x63\147\167\141\x61\141\151\147\151\x79"]]); $this->register("\57\163\x75\142\x6d\x69\164", ["\x6d\x65\x74\x68\157\x64\163" => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\141\145\x61\x71\147\171\x73\x67\x61\x65\x6f\167\x61\x67\x75\147"]]); $this->register("\57\143\141\x6c\x63\x75\x6c\141\x74\x65", ["\155\x65\164\x68\157\x64\163" => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\167\163\x6f\145\165\145\x6b\141\155\145\145\151\x63\x61\163\143"]]); $this->register("\57\147\145\x74\x2d\x77\x69\164\x68\x64\x72\x61\x77", [self::wwgusigoaksqmwsm => [$this, "\x73\x63\163\x69\x65\x63\x67\171\141\x6d\x67\171\x69\151\x61\x61"]]); $this->register("\57\x67\x65\164\55\151\156\x63\x6f\x6d\x65\x73", [self::wwgusigoaksqmwsm => [$this, "\165\171\145\x63\143\x6f\171\x61\163\163\147\x6f\x65\167\x69\x77"]]); $this->register("\57\147\x65\x74\x2d\x70\x61\171\x6d\145\x6e\x74\163", [self::wwgusigoaksqmwsm => [$this, "\153\x73\167\x69\x65\x6f\143\163\155\141\141\147\x77\155\x6b\161"]]); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto owgsameoayaogsma; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); $euakemkgmcigqycw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x77\151\x74\150\x64\x72\x61\x77"); if ($euakemkgmcigqycw) { goto icumkkykaoqycqqu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\x6d\x65\x20\162\145\161\165\x69\x72\145\40\x70\x61\162\141\x6d\145\164\145\162\x73\x20\151\163\40\155\151\x73\163\151\156\x67\56", PR__PKG__SALARY)); goto oeamoqweiueaueay; icumkkykaoqycqqu: $ogekyekymoyuywog = Income::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [$ogekyekymoyuywog::iockmgiyoygcswog => $saqgcoqwmimycgim, $ogekyekymoyuywog::WITHDRAW_ID => $euakemkgmcigqycw]); oeamoqweiueaueay: owgsameoayaogsma: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kswieocsmaagwmkq(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto gqimwsyemoewagcy; } $euakemkgmcigqycw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x77\x69\x74\x68\144\162\x61\167"); if ($euakemkgmcigqycw) { goto kyiwsiakwgiwouyi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x6d\x65\40\162\x65\x71\x75\x69\162\145\x20\x70\x61\x72\x61\155\x65\x74\x65\162\x73\40\x69\x73\40\155\x69\x73\x73\151\156\x67\56", PR__PKG__SALARY)); goto awgmegueeqeyqamu; kyiwsiakwgiwouyi: $oesweawoiuucekmw = Payment::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $oesweawoiuucekmw, [$oesweawoiuucekmw::WITHDRAW_ID => $euakemkgmcigqycw]); awgmegueeqeyqamu: gqimwsyemoewagcy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function scsiecgyamgyiiaa(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto yyqygaokeccgugos; } $aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\167\x69\x74\150\x64\x72\141\167"); $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); if ($aokagokqyuysuksm && $saqgcoqwmimycgim) { goto yggseoaommssscwo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\x6d\145\x20\x72\x65\161\165\x69\x72\145\x20\x70\x61\x72\141\x6d\145\x74\x65\162\163\40\x69\163\x20\x6d\151\x73\x73\151\156\x67\x2e", PR__PKG__SALARY)); goto aeiemwacaiygemmg; yggseoaommssscwo: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $euakemkgmcigqycw = $jwsqucqyaoaasykk->oqomcmyuuakigusk([$jwsqucqyaoaasykk::iockmgiyoygcswog => $saqgcoqwmimycgim, $jwsqucqyaoaasykk->kumuygiiqswoyasy() => $aokagokqyuysuksm]); if ($euakemkgmcigqycw) { goto ayceeyuocgowqwsa; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\161\165\x65\x73\x74\145\144\40\167\151\164\x68\x64\162\141\x77\x20\156\x6f\x74\x20\x66\157\x75\156\x64\x2e", PR__PKG__SALARY)); goto iuwkiyimqmgguose; ayceeyuocgowqwsa: $euakemkgmcigqycw = $jwsqucqyaoaasykk->scqakcemaqsqkema($euakemkgmcigqycw); $icwicymcioeyeyek = [$jwsqucqyaoaasykk::BANK_ACCOUNT => '', $jwsqucqyaoaasykk::ciywsqoeiymemsys => '', $jwsqucqyaoaasykk::aioqyewkwawaqgqe => '', $jwsqucqyaoaasykk::CREATED_AT => '']; foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $igqsaukqcqscimok) { $wkaqekwwgqsqwcoi = ''; $meqocwsecsywiiqs = ''; $eqgoocgaqwqcimie = ManipulateArray::get($euakemkgmcigqycw, $uusmaiomayssaecw); switch ($uusmaiomayssaecw) { case $jwsqucqyaoaasykk::BANK_ACCOUNT: if (!$eqgoocgaqwqcimie) { goto sksgcusuyqcwqswe; } $meqocwsecsywiiqs = __("\x42\141\x6e\153\x20\x41\x63\143\x6f\x75\156\x74", PR__PKG__SALARY); $wkaqekwwgqsqwcoi = ManipulateArray::get($eqgoocgaqwqcimie, self::qgqyauaqwqmqseim); $eqgoocgaqwqcimie = sprintf("\45\163\x20\x28\45\x73\51", ManipulateArray::get($eqgoocgaqwqcimie, User::oogeqgcgkamuoaoe), ManipulateArray::get($eqgoocgaqwqcimie, self::iockmgiyoygcswog)); sksgcusuyqcwqswe: goto maaisuqwkymeguys; case $jwsqucqyaoaasykk::ciywsqoeiymemsys: $meqocwsecsywiiqs = __("\x53\x74\x61\x74\x75\x73", PR__PKG__SALARY); $wkaqekwwgqsqwcoi = IconFontawesomeInterface::ICON_WALLET; goto maaisuqwkymeguys; case $jwsqucqyaoaasykk::aioqyewkwawaqgqe: $meqocwsecsywiiqs = __("\x41\x6d\x6f\x75\156\164", PR__PKG__SALARY); $wkaqekwwgqsqwcoi = IconFontawesomeInterface::ICON_BADGE_DOLLAR; goto maaisuqwkymeguys; case $jwsqucqyaoaasykk::CREATED_AT: $meqocwsecsywiiqs = __("\104\141\x74\x65", PR__PKG__SALARY); $wkaqekwwgqsqwcoi = IconFontawesomeInterface::ICON_CALENDAR_DAY; goto maaisuqwkymeguys; } qkyciyiwkmgkmquk: maaisuqwkymeguys: $icwicymcioeyeyek[$uusmaiomayssaecw] = [self::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; esagiiawomyacuiw: } aoaqwygkaagiuuws: $keccaugmemegoimu = ManipulateArray::set($euakemkgmcigqycw, [self::uiwqcumqkgikqyue => $icwicymcioeyeyek]); iuwkiyimqmgguose: aeiemwacaiygemmg: yyqygaokeccgugos: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wsoeuekameeicasc(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto iwkckkeimmeoquyq; } $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu, true); $ywqqikcsamcaycgm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muwsgygqegywogka); if ($miowmmgaiagcuyoo && $ywqqikcsamcaycgm) { goto qwisiamkmkkwucyo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\155\x65\x20\162\145\161\x75\151\x72\145\40\160\x61\162\141\x6d\145\164\145\x72\163\x20\151\x73\40\x6d\x69\x73\x73\151\x6e\x67", PR__PKG__SALARY)); goto yqcusaeysomccaok; qwisiamkmkkwucyo: $suuagcecoyuweoqk = []; $ogekyekymoyuywog = Income::symcgieuakksimmu(); $oqseeekuqisekiwy = [$ogekyekymoyuywog::WITHDRAW_STATUS_LOCKED, $ogekyekymoyuywog::WITHDRAW_STATUS_UNWITHDRAWN, $ogekyekymoyuywog::WITHDRAW_STATUS_NONEWITHDRAWNABLE]; foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { $uoomaookgsyciacm = [$ogekyekymoyuywog::iockmgiyoygcswog => $miowmmgaiagcuyoo, $ogekyekymoyuywog::AGREEMENT_ID => $xssuewsokckmigqk]; foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq) { $uoomaookgsyciacm[] = [self::wsgoaaeiyusigoym => $iueymcwwscwqkiyq, self::euoaaiqkqcqcgeco => self::SELECT_RAW, self::SELECT => [self::sgyowqgsmegoocaw => [$ogekyekymoyuywog::WITHDRAW_STATUS => $iueymcwwscwqkiyq], self::mskoigqmkguawcac => $ogekyekymoyuywog::aioqyewkwawaqgqe]]; sicgyiyiocyygkoc: } giuccakymqymawgk: $wcsgguaigguiiwcy = $ogekyekymoyuywog->cwkywyqksyucoyia($uoomaookgsyciacm); if (!$wcsgguaigguiiwcy) { goto cyosacayacumuaks; } $wcsgguaigguiiwcy = (array) reset($wcsgguaigguiiwcy); $wcsgguaigguiiwcy[self::uiiqiokqwmccomiu] = array_sum($wcsgguaigguiiwcy); $suuagcecoyuweoqk[$xssuewsokckmigqk] = $wcsgguaigguiiwcy; cyosacayacumuaks: kwuckkyqaygwgcuy: } oeusomaaeekakake: $keccaugmemegoimu = [self::uiiqiokqwmccomiu => 0]; foreach ($suuagcecoyuweoqk as $wcsgguaigguiiwcy) { foreach ($wcsgguaigguiiwcy as $iueymcwwscwqkiyq => $qsmaqqyoggcuyukq) { if (!isset($keccaugmemegoimu[$iueymcwwscwqkiyq])) { goto aumowowgewgqmwci; } $keccaugmemegoimu[$iueymcwwscwqkiyq] += $qsmaqqyoggcuyukq; goto oasggeyceiyieuuo; aumowowgewgqmwci: $keccaugmemegoimu[$iueymcwwscwqkiyq] = $qsmaqqyoggcuyukq; oasggeyceiyieuuo: kyiuewcikkqagwwg: } gcucsowqoeiwmyyq: eqiiaokcgakicaye: } ikcwmsgocyuqiumc: $bsgyawiqyuquqmyy = 0; $uaesckuogcakkmaw = false; $ygeuioagqoqumwuw = Setting::eiwcuqigayigimak(Setting::MIN_WITHDRAW_BALANCE, 0); foreach ($keccaugmemegoimu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $ukwokcuqauuosmoo = ''; $qoiwmokisgikggia = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case self::uiiqiokqwmccomiu: $ukwokcuqauuosmoo = __("\124\157\164\141\x6c\40\x6f\x66\40\x79\x6f\x75\x72\x20\151\156\143\157\155\x65\163\x20\146\x6f\x72\40\163\145\x6c\x65\143\164\x65\x64\40\141\147\x72\145\145\155\145\x6e\x74\x73", PR__PKG__SALARY); $meqocwsecsywiiqs = __("\124\157\x74\x61\x6c", PR__PKG__SALARY); $qoiwmokisgikggia = "\x64\x61\x72\153\x2d\x35\x30"; $sqqewmoeaekuyyas = 5; goto quamuugoocyyceec; default: $meqocwsecsywiiqs = $ogekyekymoyuywog->cysukeiuucugyiqq($uusmaiomayssaecw); switch ($uusmaiomayssaecw) { case $ogekyekymoyuywog::WITHDRAW_STATUS_LOCKED: case $ogekyekymoyuywog::WITHDRAW_STATUS_NONEWITHDRAWNABLE: if ($eqgoocgaqwqcimie) { goto ygcgoaokauigwuus; } $meqocwsecsywiiqs = ''; goto ysiqakyaiooyscwy; ygcgoaokauigwuus: $qoiwmokisgikggia = self::wyaqwomqwwaoiwas; $sqqewmoeaekuyyas = 10; if ($uusmaiomayssaecw == $ogekyekymoyuywog::WITHDRAW_STATUS_LOCKED) { goto qyyyycwaookqaoke; } $ukwokcuqauuosmoo = __("\111\155\x70\x6f\x73\163\x69\142\154\145\x20\164\x6f\40\x77\x69\x74\150\x64\x72\x61\x77\x20\x62\145\143\x61\x75\163\145\40\x6f\x66\x20\x69\x6e\163\x75\x66\x66\x69\143\x69\145\x6e\x74\x20\163\141\154\145\x73\x20\x76\157\x6c\165\155\145", PR__PKG__SALARY); goto ssywsaaqqaucesau; qyyyycwaookqaoke: $ukwokcuqauuosmoo = __("\111\x6d\160\157\x73\163\x69\x62\x6c\x65\40\x74\x6f\x20\x77\x69\x74\150\x64\162\x61\167\40\x62\145\143\141\x75\163\145\40\x6f\x66\40\163\x6f\x6d\145\40\x6d\x61\156\141\147\x65\162\151\x61\x6c\40\x72\x65\141\x73\157\x6e\163", PR__PKG__SALARY); ssywsaaqqaucesau: $uaesckuogcakkmaw = true; ysiqakyaiooyscwy: goto iymaiwqimisgacmk; case $ogekyekymoyuywog::WITHDRAW_STATUS_UNWITHDRAWN: $bsgyawiqyuquqmyy = $eqgoocgaqwqcimie; if (!($eqgoocgaqwqcimie < $ygeuioagqoqumwuw)) { goto auumaoycmsmsgigs; } $eqgoocgaqwqcimie = 0; auumaoycmsmsgigs: $qoiwmokisgikggia = self::ckcawaoawwioqecq; $sqqewmoeaekuyyas = 100; $ukwokcuqauuosmoo = sprintf(__("\131\x6f\165\162\40\164\x6f\x74\141\x6c\x20\x69\x6e\143\x6f\155\x65\x20\164\150\141\x74\40\x69\163\40\x68\151\x67\x68\145\162\40\x74\150\141\156\x20\x25\163", PR__PKG__SALARY), ManipulateHTML::ciuuiyckmsygceis(ManipulateWoocommerce::mcgaskyiamgqmqgu($ygeuioagqoqumwuw))); goto iymaiwqimisgacmk; } mugscgugcogcasue: iymaiwqimisgacmk: } qcssigmcayuyweiy: quamuugoocyyceec: if ($meqocwsecsywiiqs) { goto qeuyekusasqmcqms; } ManipulateArray::unset($keccaugmemegoimu, $uusmaiomayssaecw); goto yiceawuuiusakwiq; qeuyekusasqmcqms: $keccaugmemegoimu[$uusmaiomayssaecw] = [self::ciyoccqkiamemcmm => ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie), self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::igssuqwuicwawgam => $qoiwmokisgikggia, self::iuqumwggccmcuyem => $sqqewmoeaekuyyas, self::eqkeooqcsscoggia => $ukwokcuqauuosmoo]; if (!($uaesckuogcakkmaw && !isset($keccaugmemegoimu["\x72\145\x6d\x61\151\156"]))) { goto ousmyagwsiooumos; } $keccaugmemegoimu["\x72\x65\155\x61\x69\x6e"] = [self::ciyoccqkiamemcmm => ManipulateWoocommerce::mcgaskyiamgqmqgu($bsgyawiqyuquqmyy), self::qescuiwgsyuikume => __("\x52\x65\155\141\x69\x6e", PR__PKG__SALARY), self::igssuqwuicwawgam => "\x64\x61\x72\153\x2d\x35\60", self::iuqumwggccmcuyem => 50, self::eqkeooqcsscoggia => __("\x54\x6f\164\141\x6c\40\171\157\x75\x72\40\x72\145\x63\145\151\166\141\142\154\x65\x73", PR__PKG__SALARY)]; ousmyagwsiooumos: yiceawuuiusakwiq: wwcqoeuwskquakwy: } omuauimgkygcecsc: if (!$keccaugmemegoimu) { goto sgocecweikecwwgq; } $keccaugmemegoimu = ManipulateArray::yaeiiwwyckwugsem($keccaugmemegoimu); sgocecweikecwwgq: yqcusaeysomccaok: iwkckkeimmeoquyq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function aeaqgysgaeowagug(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto giugwaeuwaomossq; } $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu, true); $ccamueccusigaaio = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); $ywqqikcsamcaycgm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muwsgygqegywogka); if ($miowmmgaiagcuyoo && $ywqqikcsamcaycgm && $ccamueccusigaaio) { goto yoqsigmoyaaceqky; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\x6d\145\40\x72\x65\x71\165\x69\162\145\x20\x70\x61\x72\x61\x6d\x65\x74\x65\x72\163\40\151\163\x20\x6d\151\x73\163\x69\156\147", PR__PKG__SALARY)); goto suqckoccuyeeymww; yoqsigmoyaaceqky: $sogksuscggsicmac = Model::symcgieuakksimmu()->mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $ywqqikcsamcaycgm, $ccamueccusigaaio); $uamcoiueqaamsqma = ManipulateArray::get($sogksuscggsicmac, self::eoskkkieowogacws); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto masakmomqmeocqqg; } $keccaugmemegoimu = $this->oemauiimmycumcsk($uamcoiueqaamsqma, 400); goto yksywwikmeksikqc; masakmomqmeocqqg: $keccaugmemegoimu = $this->qasywwyamoesisyi($uamcoiueqaamsqma); yksywwikmeksikqc: suqckoccuyeeymww: giugwaeuwaomossq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function cuakiekssgkeyswa(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto acgqaeakoyasgkku; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu, true); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [$jwsqucqyaoaasykk::iockmgiyoygcswog => $saqgcoqwmimycgim]); acgqaeakoyasgkku: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ssagcgqaucssyego; } $keccaugmemegoimu = $this->geosscgquaqosyse($keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto sycougcyeqmeiagk; } $keccaugmemegoimu = $this->ayssaocauwgssywa($keccaugmemegoimu); sycougcyeqmeiagk: ssagcgqaucssyego: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function geosscgquaqosyse($mkucggyaiaukqoce) { [$qecuekqmeaiykeek, $iwkyyocymeukcceu, $ykiyyumywksqcisg] = User::symcgieuakksimmu()->uwoesmooocquykum($mkucggyaiaukqoce, self::mgsccwumkcawaqcy); if ($iwkyyocymeukcceu && $ykiyyumywksqcisg) { goto iqsgossweywksoia; } $iwywmkygwewiamwm = $this->wigcmmuseymwogeg("\x2f\x75\163\x65\x72\57\x70\x72\x6f\146\x69\154\145\x2f\x62\141\x6e\153\x2d\141\143\x63\157\x75\x6e\164\163", __("\125\163\145\x72\40\120\x72\x6f\146\x69\154\145", PR__PKG__SALARY)); $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\131\157\165\40\163\x68\x6f\165\154\x64\40\x66\x69\162\163\164\x2c\x20\x66\151\x6c\x6c\x20\151\156\40\171\x6f\x75\x72\40\142\141\156\153\x20\141\143\143\157\x75\156\164\40\151\x6e\x66\x6f\x72\155\141\x74\x69\157\156\40\x69\156\x73\x69\144\x65\x20\x79\157\165\x72\40\45\163\x2c\x20\x74\x6f\x20\163\165\x62\x6d\x69\164\x20\141\x20\167\x69\x74\150\x64\x72\x61\167", PR__PKG__SALARY), $iwywmkygwewiamwm)); goto awaqksikyomsuaeo; iqsgossweywksoia: $ygikoqaokckisawo = []; foreach ($iwkyyocymeukcceu as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $ygikoqaokckisawo[] = [ self::gouqcwikiiygyasc => $uusmaiomayssaecw, self::qgqyauaqwqmqseim => ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw), self::uissasisiuymwsmu => $this->msywmyaoqmaegsuy($pkyyagewkiyckmwy), "\x69\143\x6f\156\137\x63\154\x61\x73\163" => "\163\166\x67\55\156\157\x2d\x63\157\x6c\x6f\162", ]; ekoqieigyoeyauqa: } mqgeseysuwcaqwiy: $qiouiwasaauyaaue = []; $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $ywqqikcsamcaycgm = $mssuumukiiaqmcka->coyaqyocmqmmgeew($mkucggyaiaukqoce); if ($ywqqikcsamcaycgm) { goto ksckqkmwiqggykke; } $iwywmkygwewiamwm = $this->wigcmmuseymwogeg("\57\163\x61\154\141\x72\171\x2f\141\160\160\154\x79", __("\x53\x74\141\x72\164\x20\105\x61\x72\156\40\115\x6f\x6e\x65\171", PR__PKG__SALARY)); $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\131\157\165\40\x61\162\145\x20\x6e\x6f\164\40\155\x65\155\x62\145\162\40\x6f\x66\x20\x61\156\x79\x20\141\147\162\145\x65\x6d\x65\x6e\x74\40\x79\x65\x74\54\x20\171\x6f\x75\x20\143\141\x6e\40\x66\151\x6e\144\x20\141\x70\x70\x6c\151\141\x62\x6c\145\40\x61\x67\x72\145\145\155\x65\x6e\164\163\40\151\x6e\40\45\163\x20\x74\157\x20\x61\160\x70\x6c\x79\x20\x74\x68\145\x6d\x65\56", PR__PKG__SALARY), $iwywmkygwewiamwm)); goto igwkcikeyoowosoi; ksckqkmwiqggykke: foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { $qiouiwasaauyaaue[$mssuumukiiaqmcka->keeuqgyooycqoygw($xssuewsokckmigqk)] = $mssuumukiiaqmcka->uikgwcuascgeissw($xssuewsokckmigqk); mimacwyuueomgwwy: } cuwcsamuuqyuyqsu: $sogksuscggsicmac = [Form::mccagaqeagiikkec(self::muwsgygqegywogka, __("\101\147\162\x65\145\x6d\x65\x6e\x74", PR__PKG__SALARY))->eumecwmqmukqgyea()->ccmwycqioaicegoc(__("\x43\x68\x6f\157\x73\x65\40\164\150\x65\x20\x61\147\x72\145\145\155\145\156\164\x73\40\x74\150\141\x74\40\x79\x6f\165\x20\167\141\156\x74\40\164\157\x20\142\x65\x20\x63\x72\x65\x64\151\164\x65\x64\x20\167\x69\x74\x68", PR__PKG__SALARY))->acauweqyyugwisqc($qiouiwasaauyaaue)->ioayksieaoewquom()->oikgogcweiiaocka(), Form::mccagaqeagiikkec(self::mgsccwumkcawaqcy, __("\x42\141\156\x6b\x20\101\143\x63\x6f\x75\x6e\164", PR__PKG__SALARY))->acauweqyyugwisqc($ygikoqaokckisawo)->ccewgoaawmaoiqqq($qecuekqmeaiykeek)->eumecwmqmukqgyea()]; igwkcikeyoowosoi: awaqksikyomsuaeo: return $sogksuscggsicmac; } }
