<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0323410186             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Salary\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class BankAccount extends Controller { protected ?User $userManager = null; public function __construct() { $this->rest_base = "\142\x61\x6e\153\x2d\x61\143\x63\157\165\x6e\x74"; $this->userManager = User::symcgieuakksimmu(); parent::__construct(); } public function gomiusgyskywsqai() : ?User { return $this->userManager; } public function register_routes() { $this->register("\x2f\x67\145\x74\x2d\x6c\151\x73\164", [self::wwgusigoaksqmwsm => [$this, "\143\151\165\x67\x77\157\157\x61\x73\141\x71\143\171\x77\141\163"]]); $this->register("\x2f\147\x65\164\x2d\146\x69\x65\154\144\163", [self::wwgusigoaksqmwsm => [$this, "\165\x67\x6d\143\145\x63\x63\147\x77\141\141\141\x69\x67\151\171"]]); $this->register("\x2f\x73\141\x76\x65", ["\x6d\x65\164\x68\157\x64\x73" => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x73\x61\x76\145"]]); $this->register("\x2f\x64\x65\154\x65\x74\145", ["\155\145\164\150\157\144\163" => self::kqqquayqkucokyqi, self::wwgusigoaksqmwsm => [$this, "\144\x65\x6c\x65\164\145"]]); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->geosscgquaqosyse(); $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function delete(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto mykiyqcqiegkiqys; } if ($uusmaiomayssaecw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm)) { goto csieaismmmocyacu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\141\143\143\157\165\156\164\40\160\141\x72\141\x6d\145\x74\x65\162\x20\151\163\40\155\x69\163\163\151\156\x67", PR__PKG__SALARY)); goto aquqkiggamaoegoo; csieaismmmocyacu: $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $ygikoqaokckisawo = $wusccgcckucqsqwe->guimqgyewioyekuy($mkucggyaiaukqoce); $eiwicgsqoiaeawkk = ManipulateArray::get($ygikoqaokckisawo, $uusmaiomayssaecw); if ($eiwicgsqoiaeawkk) { goto suuskagowwgsouqw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x43\141\x6e\x20\x6e\157\164\40\146\151\x6e\x64\x20\x72\x65\161\x75\145\x73\164\145\x64\x20\x61\143\143\157\x75\x6e\164", PR__PKG__SALARY)); goto omykokikgocoikec; suuskagowwgsouqw: if (!ManipulateArray::get($eiwicgsqoiaeawkk, $wusccgcckucqsqwe::wagwccqcqwgsoyoi)) { goto cwswueuqoamqasya; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\157\x75\162\x20\162\145\161\x75\x65\x73\x74\x65\144\40\141\x63\143\x6f\x75\x6e\164\40\146\157\x72\40\162\x65\x6d\157\x76\145\x20\x69\163\x20\154\157\143\x6b\x65\x64", PR__PKG__SALARY)); goto kgmeiwiakwicgkkk; cwswueuqoamqasya: ManipulateArray::unset($ygikoqaokckisawo, $uusmaiomayssaecw); if ($wusccgcckucqsqwe->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce)) { goto kaiesowkgwogqseg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\155\x65\164\150\x69\156\x67\40\x77\x72\x6f\156\x67\x20\157\x6e\x20\x72\x65\x6d\x6f\166\145\40\160\x72\x6f\143\145\163\x73\x2c\40\160\x6c\x65\x61\x73\145\x20\164\162\171\x20\x61\x67\141\x69\156", PR__PKG__SALARY)); goto kicwiowcogmauwiy; kaiesowkgwogqseg: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\102\141\156\153\x20\x61\x63\143\x6f\x75\156\x74\40\162\x65\x6d\x6f\166\145\x64\x20\163\x75\143\x63\145\163\163\146\165\x6c\x6c\x79", PR__PKG__SALARY)); kicwiowcogmauwiy: kgmeiwiakwicgkkk: omykokikgocoikec: aquqkiggamaoegoo: goto agemwookwseyycqo; mykiyqcqiegkiqys: $keccaugmemegoimu = $mkucggyaiaukqoce; agemwookwseyycqo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function save(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->cukkomiaseyomacg($aqmwamyiwgeeymqa, $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm)); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto kwyimqumkuuyaiku; } $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $oammesyieqmwuwyi = $wusccgcckucqsqwe->guimqgyewioyekuy($keccaugmemegoimu); $oammesyieqmwuwyi = ManipulateArray::yaeiiwwyckwugsem($oammesyieqmwuwyi, self::ascagqcquwgmygkm); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oammesyieqmwuwyi, function ($aqmwamyiwgeeymqa, $igqsaukqcqscimok) use($wusccgcckucqsqwe) { $eaoumsseceiowgsk = []; $icwicymcioeyeyek = []; $sqeykgyoooqysmca = $wusccgcckucqsqwe->mmymimkumuekmmgi()->yuuwwswmwmgmcyem(ManipulateArray::get($igqsaukqcqscimok, self::squoamkioomemiyi)); $sogksuscggsicmac = []; foreach ($igqsaukqcqscimok as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $uescmseksquycukc = false; $meqocwsecsywiiqs = ''; $sqqewmoeaekuyyas = 0; switch ($uusmaiomayssaecw) { case $wusccgcckucqsqwe::wagwccqcqwgsoyoi: $uescmseksquycukc = true; $sogksuscggsicmac[self::ciywsqoeiymemsys] = $eqgoocgaqwqcimie ? "\154\157\x63\x6b\x65\x64" : "\x65\x64\x69\164\x61\142\x6c\x65"; $sogksuscggsicmac[self::ciywsqoeiymemsys . self::_TITLE] = $eqgoocgaqwqcimie ? __("\114\x6f\143\153\145\144", PR__PKG__SALARY) : __("\105\144\x69\x74\141\142\154\145", PR__PKG__SALARY); goto owuuuiekkaeoeacq; case $wusccgcckucqsqwe::squoamkioomemiyi: $meqocwsecsywiiqs = __("\124\x79\x70\x65", PR__PKG__SALARY); $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $eqgoocgaqwqcimie = $sqeykgyoooqysmca; $sqqewmoeaekuyyas = 2; goto owuuuiekkaeoeacq; case $wusccgcckucqsqwe::oogeqgcgkamuoaoe: $uescmseksquycukc = true; $meqocwsecsywiiqs = __("\102\141\156\153", PR__PKG__SALARY); $sogksuscggsicmac[self::qgqyauaqwqmqseim] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->kwagkemgawuoacwy($eqgoocgaqwqcimie); $eqgoocgaqwqcimie = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->eoemoqciaweskqkk($eqgoocgaqwqcimie); $sqqewmoeaekuyyas = 1; goto owuuuiekkaeoeacq; case $wusccgcckucqsqwe::iockmgiyoygcswog: $uescmseksquycukc = true; $meqocwsecsywiiqs = sprintf(__("\117\x77\156\x65\162\40\x6f\146\x20\x25\x73", PR__PKG__SALARY), $sqeykgyoooqysmca); $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $sqqewmoeaekuyyas = 0; goto owuuuiekkaeoeacq; case $wusccgcckucqsqwe::wyqmcowecikgawuu: case $wusccgcckucqsqwe::DEBIT_CARD: $uescmseksquycukc = true; $eaoumsseceiowgsk[$uusmaiomayssaecw] = ManipulateArray::get($igqsaukqcqscimok, $wusccgcckucqsqwe::cqkcksqwkcsiykuq); $eqgoocgaqwqcimie = $this->msywmyaoqmaegsuy($eqgoocgaqwqcimie); $meqocwsecsywiiqs = sprintf(__("\x4e\x75\155\x62\x65\162\x20\157\x66\40\45\x73", PR__PKG__SALARY), $sqeykgyoooqysmca); $sqqewmoeaekuyyas = 99; goto owuuuiekkaeoeacq; case $wusccgcckucqsqwe::ascagqcquwgmygkm: case $wusccgcckucqsqwe::cqkcksqwkcsiykuq: $uescmseksquycukc = true; $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; goto owuuuiekkaeoeacq; } saauykgakaeiyoua: owuuuiekkaeoeacq: if (!$uescmseksquycukc) { goto qwemkcoaseywkuuc; } $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; qwemkcoaseywkuuc: if (!$meqocwsecsywiiqs) { goto mqimkwickkgqqeoi; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [self::iuqumwggccmcuyem => $sqqewmoeaekuyyas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; mqimkwickkgqqeoi: koiscokkkaimiecq: } cquecqekuucwoumw: $sogksuscggsicmac["\x66\157\x72\155"] = $eaoumsseceiowgsk; $sogksuscggsicmac[self::uiwqcumqkgikqyue] = ManipulateArray::yaeiiwwyckwugsem($icwicymcioeyeyek); return $sogksuscggsicmac; }); kwyimqumkuuyaiku: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function cukkomiaseyomacg($aqmwamyiwgeeymqa, $uusmaiomayssaecw = false) { $keccaugmemegoimu = null; $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto mcqucouuiuoagqwc; } $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); $uqyaagwcuoewkkss = $wusccgcckucqsqwe->mmymimkumuekmmgi(); $miowmmgaiagcuyoo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $wusccgcckucqsqwe::iockmgiyoygcswog); $sqeykgyoooqysmca = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $wusccgcckucqsqwe::squoamkioomemiyi); if ($miowmmgaiagcuyoo && $sqeykgyoooqysmca) { goto egesuwkqkmaigaoe; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\115\151\x73\x73\151\x6e\147\40\x73\x6f\155\145\x20\x72\145\161\x75\151\x72\145\40\146\x69\x65\x6c\x64\163", PR__PKG__SALARY), 400); goto syusgosewwkoagoq; egesuwkqkmaigaoe: $eqgoocgaqwqcimie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $sqeykgyoooqysmca); if ($eqgoocgaqwqcimie) { goto ykqsuiyyosyeyscc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\x61\154\x75\x65\x20\157\x66\40\x25\163\40\x69\x73\x20\x72\x65\x71\x75\151\x72\x65", PR__PKG__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem($sqeykgyoooqysmca)), 400); goto ugogoekeckgcmuaw; ykqsuiyyosyeyscc: $qmomekeesaiaoegu = $uqyaagwcuoewkkss->gcquickqgyqooyyu($eqgoocgaqwqcimie, $sqeykgyoooqysmca); if ($qmomekeesaiaoegu) { goto sqwuqegeiisoiiuq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x59\x6f\x75\x72\x20\x62\141\x6e\153\x20\x69\163\40\x6e\157\164\40\163\165\x70\x70\x6f\x72\x74\x20\157\x72\40\x79\157\x75\162\x20\x65\156\164\x65\x72\x65\x64\40\x25\163\x20\151\163\40\156\157\x74\x20\166\x61\x6c\x69\x64", PR__PKG__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem($sqeykgyoooqysmca)), 400); goto uscokkmquayiukag; sqwuqegeiisoiiuq: $gmcgeogogyqsgawk = $wusccgcckucqsqwe->aceogymkeuswukyi([$sqeykgyoooqysmca => $eqgoocgaqwqcimie, $wusccgcckucqsqwe::iockmgiyoygcswog => $miowmmgaiagcuyoo, $wusccgcckucqsqwe::squoamkioomemiyi => $sqeykgyoooqysmca, $wusccgcckucqsqwe::oogeqgcgkamuoaoe => $qmomekeesaiaoegu]); if (!is_wp_error($gmcgeogogyqsgawk)) { goto igmmqwyawcuuckkq; } $keccaugmemegoimu = $gmcgeogogyqsgawk; goto eouwacqiommmeaqc; igmmqwyawcuuckkq: $ygikoqaokckisawo = $wusccgcckucqsqwe->guimqgyewioyekuy($mkucggyaiaukqoce); if (!$uusmaiomayssaecw) { goto ceiuqsiqgiuiekem; } $eiwicgsqoiaeawkk = ManipulateArray::get($ygikoqaokckisawo, $uusmaiomayssaecw); if (!$eiwicgsqoiaeawkk) { goto gkqiqaqecmoogmaa; } ManipulateArray::unset($ygikoqaokckisawo, $uusmaiomayssaecw); $gmcgeogogyqsgawk[self::ascagqcquwgmygkm] = $uusmaiomayssaecw; goto mceucsaeouuwyumm; gkqiqaqecmoogmaa: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\157\x75\40\162\145\x71\165\145\x73\164\145\x64\x20\x61\x63\x63\x6f\165\156\164\x20\146\x6f\x72\x20\x65\144\151\164\40\164\150\x61\x74\x20\x6e\x6f\164\40\145\x78\x69\163\164", PR__PKG__SALARY), 400); mceucsaeouuwyumm: ceiuqsiqgiuiekem: $ygogqywsaqoukoqy = $gmcgeogogyqsgawk[$wusccgcckucqsqwe::cqkcksqwkcsiykuq]; [$ksiyqouuaoymsycg, $gwsycqoiookakscg] = ManipulateArray::ksiyqouuaoymsycg($ygikoqaokckisawo, $wusccgcckucqsqwe::cqkcksqwkcsiykuq, $ygogqywsaqoukoqy); if (!$ksiyqouuaoymsycg) { goto gsymkkskwsgggoic; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\x6f\165\x20\141\154\x72\145\141\144\x79\x20\x61\x64\144\x65\144\40\164\x68\151\163\x20\x61\143\x63\157\165\x6e\x74\x20\x6e\x75\155\142\x65\162", PR__PKG__SALARY), 400); gsymkkskwsgggoic: if (is_wp_error($keccaugmemegoimu)) { goto wiwoiyoakywqyaiy; } $ygikoqaokckisawo[$uusmaiomayssaecw] = $gmcgeogogyqsgawk; if ($wusccgcckucqsqwe->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce)) { goto ugykmcouiwiscoqu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\155\x65\x74\x68\151\156\147\x20\167\162\157\x6e\147\40\x6f\x6e\40\x73\141\x76\x69\x6e\x67\x20\x70\x72\157\143\x65\163\163\54\x20\x70\x6c\145\x61\x73\x65\x20\x74\162\x79\40\x61\x67\141\151\156", PR__PKG__SALARY)); goto isewysikysqewkis; ugykmcouiwiscoqu: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x42\141\156\x6b\x20\x61\x63\x63\157\x75\x6e\x74\x20\163\141\166\x65\144\x20\163\165\x63\x63\x65\x73\x73\x66\x75\x6c\x6c\171", PR__PKG__SALARY)); isewysikysqewkis: wiwoiyoakywqyaiy: eouwacqiommmeaqc: uscokkmquayiukag: ugogoekeckgcmuaw: syusgosewwkoagoq: goto eweaaismksecwagy; mcqucouuiuoagqwc: $keccaugmemegoimu = $mkucggyaiaukqoce; eweaaismksecwagy: return $keccaugmemegoimu; } private function geosscgquaqosyse() : array { return [Form::ymuegqgyuagyucws(User::iockmgiyoygcswog, __("\x41\x63\143\x6f\165\156\164\x20\x4f\x77\156\x65\x72\x20\x4e\x61\155\x65", PR__PKG__SALARY))->eumecwmqmukqgyea(), Form::yyuwuqsiucweeoue(User::squoamkioomemiyi, __("\x41\x63\143\x6f\x75\156\x74\x20\124\171\160\145", PR__PKG__SALARY))->kesomeowemmyygey(User::wyqmcowecikgawuu, __("\x49\x42\x41\116", PR__PKG__SALARY))->kesomeowemmyygey(User::DEBIT_CARD, __("\x44\145\142\x69\x74\x20\x43\x61\x72\144", PR__PKG__SALARY))->agywyaaquwawwuiy([User::wyqmcowecikgawuu => User::wyqmcowecikgawuu, User::DEBIT_CARD => User::DEBIT_CARD])->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(User::wyqmcowecikgawuu, __("\x49\102\101\x4e", PR__PKG__SALARY))->uagmgmommooaewkk()->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(User::DEBIT_CARD, __("\104\x65\142\x69\x74\x20\103\141\x72\x64", PR__PKG__SALARY))->wykoackkeuuqeyss()->eumecwmqmukqgyea()]; } }
