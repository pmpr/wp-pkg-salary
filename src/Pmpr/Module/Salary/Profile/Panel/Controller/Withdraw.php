<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432b7fd5e31d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Withdraw as Model; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Setting; use Pmpr\Module\Salary\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Withdraw extends Controller { const muwsgygqegywogka = "\141\x67\x72\145\x65\155\145\156\164\x73"; public function __construct() { $this->rest_base = "\x77\151\x74\150\144\162\x61\x77"; parent::__construct(); } public function register_routes() { $this->register("\57\x67\145\x74\x2d\154\x69\163\164\x2d\142\171\x2d\165\163\145\162", [self::wwgusigoaksqmwsm => [$this, "\143\165\141\x6b\x69\x65\x6b\163\x73\x67\153\x65\x79\x73\x77\x61"]]); $this->register("\x2f\147\x65\x74\x2d\x66\151\145\154\x64\x73", [self::wwgusigoaksqmwsm => [$this, "\x75\147\x6d\x63\145\143\x63\x67\x77\x61\x61\141\x69\x67\151\x79"]]); $this->register("\x2f\163\x75\142\x6d\x69\164", ["\155\145\164\150\157\144\x73" => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x61\x65\x61\161\147\171\x73\x67\x61\145\x6f\x77\141\147\165\x67"]]); $this->register("\x2f\x63\x61\x6c\x63\x75\x6c\141\164\x65", ["\155\145\164\150\157\x64\x73" => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\167\x73\157\145\165\145\153\141\x6d\145\145\151\x63\x61\163\143"]]); $this->register("\57\x67\x65\164\55\167\x69\x74\150\144\162\x61\167", [self::wwgusigoaksqmwsm => [$this, "\x73\143\x73\x69\145\143\147\171\x61\155\147\x79\x69\x69\141\141"]]); $this->register("\x2f\147\145\164\x2d\x69\x6e\x63\157\x6d\145\x73", [self::wwgusigoaksqmwsm => [$this, "\x75\x79\x65\143\143\x6f\171\141\x73\x73\x67\157\145\167\151\x77"]]); $this->register("\57\x67\x65\x74\x2d\160\141\171\x6d\x65\156\x74\x73", [self::wwgusigoaksqmwsm => [$this, "\x6b\163\167\151\x65\157\x63\163\x6d\x61\x61\147\167\155\x6b\161"]]); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto qwisiamkmkkwucyo; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); $euakemkgmcigqycw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x77\151\x74\x68\x64\x72\x61\x77"); if ($euakemkgmcigqycw) { goto yiceawuuiusakwiq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\x6d\145\x20\162\145\161\165\151\162\x65\x20\x70\141\x72\141\155\x65\164\x65\x72\x73\x20\x69\163\40\155\x69\x73\x73\x69\x6e\x67\x2e", PR__MDL__SALARY)); goto sgocecweikecwwgq; yiceawuuiusakwiq: $ogekyekymoyuywog = Income::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [$ogekyekymoyuywog::iockmgiyoygcswog => $saqgcoqwmimycgim, $ogekyekymoyuywog::qyeimiaoamokwygy => $euakemkgmcigqycw]); sgocecweikecwwgq: qwisiamkmkkwucyo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kswieocsmaagwmkq(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto masakmomqmeocqqg; } $euakemkgmcigqycw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x77\x69\164\150\144\162\x61\x77"); if ($euakemkgmcigqycw) { goto yqcusaeysomccaok; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\155\x65\x20\162\x65\161\165\x69\162\x65\40\160\141\x72\x61\155\x65\x74\x65\162\163\x20\x69\163\x20\x6d\151\163\x73\x69\156\x67\56", PR__MDL__SALARY)); goto iwkckkeimmeoquyq; yqcusaeysomccaok: $oesweawoiuucekmw = Payment::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $oesweawoiuucekmw, [$oesweawoiuucekmw::qyeimiaoamokwygy => $euakemkgmcigqycw]); iwkckkeimmeoquyq: masakmomqmeocqqg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function scsiecgyamgyiiaa(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto cuwcsamuuqyuyqsu; } $aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x77\x69\x74\150\144\x72\x61\x77"); $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); if ($aokagokqyuysuksm && $saqgcoqwmimycgim) { goto mqgeseysuwcaqwiy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\155\x65\x20\x72\x65\161\x75\151\162\x65\40\160\x61\x72\141\155\145\164\x65\x72\x73\x20\x69\163\x20\155\x69\x73\x73\x69\156\147\x2e", PR__MDL__SALARY)); goto ekoqieigyoeyauqa; mqgeseysuwcaqwiy: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $euakemkgmcigqycw = $jwsqucqyaoaasykk->oqomcmyuuakigusk([$jwsqucqyaoaasykk::iockmgiyoygcswog => $saqgcoqwmimycgim, $jwsqucqyaoaasykk->kumuygiiqswoyasy() => $aokagokqyuysuksm]); if ($euakemkgmcigqycw) { goto sycougcyeqmeiagk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\145\161\165\145\x73\x74\145\x64\x20\x77\x69\x74\x68\144\x72\x61\167\40\156\157\x74\x20\146\x6f\x75\x6e\144\56", PR__MDL__SALARY)); goto ssagcgqaucssyego; sycougcyeqmeiagk: $euakemkgmcigqycw = $jwsqucqyaoaasykk->scqakcemaqsqkema($euakemkgmcigqycw); $icwicymcioeyeyek = [$jwsqucqyaoaasykk::owmueawayysqcsqo => '', $jwsqucqyaoaasykk::ciywsqoeiymemsys => '', $jwsqucqyaoaasykk::aioqyewkwawaqgqe => '', $jwsqucqyaoaasykk::CREATED_AT => '']; foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $igqsaukqcqscimok) { $wkaqekwwgqsqwcoi = ''; $meqocwsecsywiiqs = ''; $eqgoocgaqwqcimie = ManipulateArray::get($euakemkgmcigqycw, $uusmaiomayssaecw); switch ($uusmaiomayssaecw) { case $jwsqucqyaoaasykk::owmueawayysqcsqo: if (!$eqgoocgaqwqcimie) { goto acgqaeakoyasgkku; } $meqocwsecsywiiqs = __("\x42\141\156\x6b\x20\101\x63\143\157\x75\x6e\164", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = ManipulateArray::get($eqgoocgaqwqcimie, self::qgqyauaqwqmqseim); $eqgoocgaqwqcimie = sprintf("\45\163\x20\50\x25\x73\x29", ManipulateArray::get($eqgoocgaqwqcimie, User::oogeqgcgkamuoaoe), ManipulateArray::get($eqgoocgaqwqcimie, self::iockmgiyoygcswog)); acgqaeakoyasgkku: goto suqckoccuyeeymww; case $jwsqucqyaoaasykk::ciywsqoeiymemsys: $meqocwsecsywiiqs = __("\x53\164\141\164\x75\x73", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconInterface::uywgggmcoacosiqa; goto suqckoccuyeeymww; case $jwsqucqyaoaasykk::aioqyewkwawaqgqe: $meqocwsecsywiiqs = __("\101\155\157\x75\156\164", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconInterface::eckamoaqmuuqkugg; goto suqckoccuyeeymww; case $jwsqucqyaoaasykk::CREATED_AT: $meqocwsecsywiiqs = __("\x44\141\x74\x65", PR__MDL__SALARY); $wkaqekwwgqsqwcoi = IconInterface::uoouwyaycseeiysk; goto suqckoccuyeeymww; } giugwaeuwaomossq: suqckoccuyeeymww: $icwicymcioeyeyek[$uusmaiomayssaecw] = [self::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; yoqsigmoyaaceqky: } yksywwikmeksikqc: $keccaugmemegoimu = ManipulateArray::set($euakemkgmcigqycw, [self::uiwqcumqkgikqyue => $icwicymcioeyeyek]); ssagcgqaucssyego: ekoqieigyoeyauqa: cuwcsamuuqyuyqsu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wsoeuekameeicasc(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto mkgmaguyswskyioa; } $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu, true); $ywqqikcsamcaycgm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muwsgygqegywogka); if ($miowmmgaiagcuyoo && $ywqqikcsamcaycgm) { goto skuuyysooocugyww; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\155\x65\40\162\x65\x71\165\x69\x72\145\40\x70\141\162\x61\155\145\x74\x65\x72\x73\x20\151\163\x20\x6d\x69\163\x73\151\156\x67", PR__MDL__SALARY)); goto cmmusgkieoqyymgs; skuuyysooocugyww: $suuagcecoyuweoqk = []; $ogekyekymoyuywog = Income::symcgieuakksimmu(); $oqseeekuqisekiwy = [$ogekyekymoyuywog::wagwccqcqwgsoyoi, $ogekyekymoyuywog::youiiwsayswmyuum, $ogekyekymoyuywog::gweieugwqicugemk]; foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { $uoomaookgsyciacm = [$ogekyekymoyuywog::iockmgiyoygcswog => $miowmmgaiagcuyoo, $ogekyekymoyuywog::cmiegiycgiucucgs => $xssuewsokckmigqk]; foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq) { $uoomaookgsyciacm[] = [self::wsgoaaeiyusigoym => $iueymcwwscwqkiyq, self::euoaaiqkqcqcgeco => self::oeusoaowacmykwsm, self::SELECT => [self::sgyowqgsmegoocaw => [$ogekyekymoyuywog::eiiuyoyiygsickwe => $iueymcwwscwqkiyq], self::mskoigqmkguawcac => $ogekyekymoyuywog::aioqyewkwawaqgqe]]; iqsgossweywksoia: } igwkcikeyoowosoi: $wcsgguaigguiiwcy = $ogekyekymoyuywog->cwkywyqksyucoyia($uoomaookgsyciacm); if (!$wcsgguaigguiiwcy) { goto awaqksikyomsuaeo; } $wcsgguaigguiiwcy = (array) reset($wcsgguaigguiiwcy); $wcsgguaigguiiwcy[self::uiiqiokqwmccomiu] = array_sum($wcsgguaigguiiwcy); $suuagcecoyuweoqk[$xssuewsokckmigqk] = $wcsgguaigguiiwcy; awaqksikyomsuaeo: ksckqkmwiqggykke: } mimacwyuueomgwwy: $keccaugmemegoimu = [self::uiiqiokqwmccomiu => 0]; foreach ($suuagcecoyuweoqk as $wcsgguaigguiiwcy) { foreach ($wcsgguaigguiiwcy as $iueymcwwscwqkiyq => $qsmaqqyoggcuyukq) { if (!isset($keccaugmemegoimu[$iueymcwwscwqkiyq])) { goto uqcsksaywyqeumig; } $keccaugmemegoimu[$iueymcwwscwqkiyq] += $qsmaqqyoggcuyukq; goto yggmaskeguaqkusc; uqcsksaywyqeumig: $keccaugmemegoimu[$iueymcwwscwqkiyq] = $qsmaqqyoggcuyukq; yggmaskeguaqkusc: uwaimsisescsgyqk: } qyeswawykmasuqye: ggeoqeowscwkeumy: } cuommomwmsackoqc: $bsgyawiqyuquqmyy = 0; $uaesckuogcakkmaw = false; $ygeuioagqoqumwuw = Setting::eiwcuqigayigimak(Setting::iqkskgussyuogioe, 0); foreach ($keccaugmemegoimu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $ukwokcuqauuosmoo = ''; $qoiwmokisgikggia = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case self::uiiqiokqwmccomiu: $ukwokcuqauuosmoo = __("\x54\157\164\141\154\40\157\x66\40\x79\157\165\x72\x20\151\156\x63\x6f\x6d\x65\x73\40\x66\x6f\162\40\x73\145\154\x65\x63\x74\x65\144\40\141\x67\162\x65\145\x6d\145\156\x74\x73", PR__MDL__SALARY); $meqocwsecsywiiqs = __("\x54\x6f\164\x61\154", PR__MDL__SALARY); $qoiwmokisgikggia = "\x64\141\162\153\55\65\60"; $sqqewmoeaekuyyas = 5; goto kwmiwaecqcgiaqye; default: $meqocwsecsywiiqs = $ogekyekymoyuywog->iowygaiuiqkqimio($uusmaiomayssaecw); switch ($uusmaiomayssaecw) { case $ogekyekymoyuywog::wagwccqcqwgsoyoi: case $ogekyekymoyuywog::gweieugwqicugemk: if ($eqgoocgaqwqcimie) { goto mwieyyqamgwicgco; } $meqocwsecsywiiqs = ''; goto wkiymcoqqiigqaaw; mwieyyqamgwicgco: $qoiwmokisgikggia = self::wyaqwomqwwaoiwas; $sqqewmoeaekuyyas = 10; if ($uusmaiomayssaecw === $ogekyekymoyuywog::wagwccqcqwgsoyoi) { goto kceuusiekagyeoys; } $ukwokcuqauuosmoo = __("\x49\155\160\x6f\x73\163\151\142\154\145\x20\x74\x6f\40\x77\151\x74\x68\x64\x72\141\x77\40\142\x65\143\141\x75\163\145\40\x6f\146\x20\x69\156\x73\x75\146\x66\151\x63\x69\145\x6e\x74\x20\x73\x61\x6c\x65\163\x20\x76\157\x6c\165\x6d\145", PR__MDL__SALARY); goto uyeyscsaigimsqwq; kceuusiekagyeoys: $ukwokcuqauuosmoo = __("\111\x6d\160\x6f\x73\x73\151\x62\x6c\x65\x20\164\x6f\40\x77\x69\164\x68\x64\162\141\x77\x20\142\145\143\x61\x75\x73\145\x20\157\146\40\x73\157\155\x65\x20\x6d\141\x6e\141\x67\145\162\151\x61\154\40\x72\x65\141\x73\157\x6e\163", PR__MDL__SALARY); uyeyscsaigimsqwq: $uaesckuogcakkmaw = true; wkiymcoqqiigqaaw: goto gkoaeuekqockuoiq; case $ogekyekymoyuywog::youiiwsayswmyuum: $bsgyawiqyuquqmyy = $eqgoocgaqwqcimie; if (!($eqgoocgaqwqcimie < $ygeuioagqoqumwuw)) { goto esqwswmoegiqcckg; } $eqgoocgaqwqcimie = 0; esqwswmoegiqcckg: $qoiwmokisgikggia = self::ckcawaoawwioqecq; $sqqewmoeaekuyyas = 100; $ukwokcuqauuosmoo = sprintf(__("\x59\x6f\165\x72\40\164\x6f\x74\x61\x6c\x20\x69\156\143\157\155\x65\40\164\x68\141\x74\x20\x69\163\40\150\x69\x67\x68\145\x72\x20\x74\x68\x61\x6e\40\x25\163", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis(ManipulateWoocommerce::mcgaskyiamgqmqgu($ygeuioagqoqumwuw))); goto gkoaeuekqockuoiq; } eekaiaeqewiqkkgm: gkoaeuekqockuoiq: } yqicwmekwuoywyus: kwmiwaecqcgiaqye: if ($meqocwsecsywiiqs) { goto mosuacsuaasssciu; } ManipulateArray::unset($keccaugmemegoimu, $uusmaiomayssaecw); goto qksckewucmosemuo; mosuacsuaasssciu: $keccaugmemegoimu[$uusmaiomayssaecw] = [self::ciyoccqkiamemcmm => ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie), self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::igssuqwuicwawgam => $qoiwmokisgikggia, self::iuqumwggccmcuyem => $sqqewmoeaekuyyas, self::eqkeooqcsscoggia => $ukwokcuqauuosmoo]; if (!($uaesckuogcakkmaw && !isset($keccaugmemegoimu["\162\145\x6d\141\x69\x6e"]))) { goto qmokwkocmcyeyesc; } $keccaugmemegoimu["\x72\x65\155\x61\151\x6e"] = [self::ciyoccqkiamemcmm => ManipulateWoocommerce::mcgaskyiamgqmqgu($bsgyawiqyuquqmyy), self::qescuiwgsyuikume => __("\122\x65\155\x61\x69\x6e", PR__MDL__SALARY), self::igssuqwuicwawgam => "\144\141\x72\153\55\65\x30", self::iuqumwggccmcuyem => 50, self::eqkeooqcsscoggia => __("\124\157\164\141\x6c\40\x79\x6f\165\x72\40\x72\x65\x63\145\x69\x76\141\x62\154\145\x73", PR__MDL__SALARY)]; qmokwkocmcyeyesc: qksckewucmosemuo: jsmisuccwyukksgc: } ukwoswyyogmsygqg: if (!$keccaugmemegoimu) { goto kmooekeyemqgucci; } $keccaugmemegoimu = ManipulateArray::yaeiiwwyckwugsem($keccaugmemegoimu); kmooekeyemqgucci: cmmusgkieoqyymgs: mkgmaguyswskyioa: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function aeaqgysgaeowagug(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto cysgqimowcqoqqsc; } $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu, true); $ccamueccusigaaio = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::mgsccwumkcawaqcy); $ywqqikcsamcaycgm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muwsgygqegywogka); if ($miowmmgaiagcuyoo && $ywqqikcsamcaycgm && $ccamueccusigaaio) { goto gicuuwuuuwumyooa; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x6d\145\40\x72\x65\x71\x75\x69\x72\145\x20\160\x61\162\141\x6d\145\164\145\162\163\x20\151\163\x20\x6d\151\163\163\151\156\147", PR__MDL__SALARY)); goto kakkuyeccaacewyo; gicuuwuuuwumyooa: $sogksuscggsicmac = Model::symcgieuakksimmu()->mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $ywqqikcsamcaycgm, $ccamueccusigaaio); $uamcoiueqaamsqma = ManipulateArray::get($sogksuscggsicmac, self::eoskkkieowogacws); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto skwusmoyomgqkimm; } $keccaugmemegoimu = $this->oemauiimmycumcsk($uamcoiueqaamsqma, 400); goto usyckeewsgwaysam; skwusmoyomgqkimm: $keccaugmemegoimu = $this->qasywwyamoesisyi($uamcoiueqaamsqma); usyckeewsgwaysam: kakkuyeccaacewyo: cysgqimowcqoqqsc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function cuakiekssgkeyswa(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ismeikacqqyqcmqe; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu, true); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [$jwsqucqyaoaasykk::iockmgiyoygcswog => $saqgcoqwmimycgim]); ismeikacqqyqcmqe: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto casgoamcqkekgeeo; } $keccaugmemegoimu = $this->geosscgquaqosyse($keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto qsokkkyoackoycie; } $keccaugmemegoimu = $this->ayssaocauwgssywa($keccaugmemegoimu); qsokkkyoackoycie: casgoamcqkekgeeo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function geosscgquaqosyse($mkucggyaiaukqoce) { [$qecuekqmeaiykeek, $iwkyyocymeukcceu, $ykiyyumywksqcisg] = User::symcgieuakksimmu()->uwoesmooocquykum($mkucggyaiaukqoce, self::mgsccwumkcawaqcy); if ($iwkyyocymeukcceu && $ykiyyumywksqcisg) { goto koukiyqaccegmquc; } $iwywmkygwewiamwm = $this->wigcmmuseymwogeg("\x2f\165\163\145\x72\x2f\160\162\157\146\x69\x6c\x65\x2f\142\141\x6e\153\55\141\x63\x63\x6f\x75\156\x74\x73", __("\125\x73\x65\x72\x20\x50\162\157\146\151\x6c\x65", PR__MDL__SALARY)); $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\x59\157\x75\40\x73\150\x6f\165\x6c\144\x20\x66\151\162\x73\x74\x2c\40\x66\x69\x6c\154\40\x69\x6e\40\x79\x6f\165\162\x20\142\x61\x6e\153\x20\x61\143\143\x6f\x75\156\164\x20\x69\156\x66\157\162\x6d\141\x74\x69\157\156\40\151\x6e\163\151\x64\145\40\x79\157\165\x72\x20\x25\163\54\x20\164\x6f\x20\x73\x75\x62\x6d\151\x74\40\x61\x20\x77\151\x74\x68\x64\162\x61\x77", PR__MDL__SALARY), $iwywmkygwewiamwm)); goto ekakkiuuquqkccse; koukiyqaccegmquc: $ygikoqaokckisawo = []; foreach ($iwkyyocymeukcceu as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $ygikoqaokckisawo[] = [ self::gouqcwikiiygyasc => $uusmaiomayssaecw, self::qgqyauaqwqmqseim => ManipulateArray::get($ykiyyumywksqcisg, $uusmaiomayssaecw), self::uissasisiuymwsmu => $this->msywmyaoqmaegsuy($pkyyagewkiyckmwy), "\151\x63\157\x6e\x5f\143\154\141\163\x73" => "\163\x76\147\55\x6e\x6f\x2d\x63\157\x6c\x6f\x72", ]; qcgyggiaowuqswuw: } yseyyukqaowwouua: $qiouiwasaauyaaue = []; $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $ywqqikcsamcaycgm = $mssuumukiiaqmcka->coyaqyocmqmmgeew($mkucggyaiaukqoce); if ($ywqqikcsamcaycgm) { goto kwsqgqmwyyeykgum; } $iwywmkygwewiamwm = $this->wigcmmuseymwogeg("\x2f\163\x61\154\141\162\x79\x2f\x61\160\x70\x6c\x79", __("\x53\x74\x61\162\x74\x20\x45\141\x72\156\40\x4d\x6f\156\x65\x79", PR__MDL__SALARY)); $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\x59\157\165\40\141\x72\145\40\156\157\x74\40\155\x65\x6d\142\145\x72\40\x6f\x66\40\x61\156\171\x20\141\x67\x72\145\145\155\x65\x6e\164\x20\171\145\x74\54\40\x79\157\165\x20\x63\x61\x6e\x20\x66\151\x6e\x64\40\141\160\x70\x6c\x69\x61\142\154\145\x20\x61\x67\x72\145\145\155\145\x6e\x74\163\x20\x69\156\40\45\163\40\164\157\x20\141\160\x70\154\171\x20\x74\x68\145\x6d\145\x2e", PR__MDL__SALARY), $iwywmkygwewiamwm)); goto emauuoieewwoeyqq; kwsqgqmwyyeykgum: foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { $qiouiwasaauyaaue[$mssuumukiiaqmcka->keeuqgyooycqoygw($xssuewsokckmigqk)] = $mssuumukiiaqmcka->uikgwcuascgeissw($xssuewsokckmigqk); ywqakqkmmcoceqka: } sooecucuakgkuyis: $sogksuscggsicmac = [Form::mccagaqeagiikkec(self::muwsgygqegywogka, __("\x41\147\162\145\x65\155\x65\156\164", PR__MDL__SALARY))->eumecwmqmukqgyea()->ccmwycqioaicegoc(__("\x43\150\157\157\x73\145\x20\164\150\145\x20\141\147\x72\x65\145\x6d\x65\x6e\164\163\40\164\x68\x61\x74\x20\171\157\165\40\167\x61\x6e\164\40\x74\157\x20\x62\x65\x20\x63\x72\145\x64\x69\x74\x65\144\40\x77\151\x74\x68", PR__MDL__SALARY))->acauweqyyugwisqc($qiouiwasaauyaaue)->ioayksieaoewquom()->oikgogcweiiaocka(), Form::mccagaqeagiikkec(self::mgsccwumkcawaqcy, __("\x42\141\156\x6b\x20\101\143\143\x6f\x75\156\164", PR__MDL__SALARY))->acauweqyyugwisqc($ygikoqaokckisawo)->ccewgoaawmaoiqqq($qecuekqmeaiykeek)->eumecwmqmukqgyea()]; emauuoieewwoeyqq: ekakkiuuquqkccse: return $sogksuscggsicmac; } }
