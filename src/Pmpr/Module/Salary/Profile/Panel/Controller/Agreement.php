<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d86d4b1743             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\FormMaker\Front\Field\Field; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Salary\Model\Agreement as Model; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Setting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Agreement extends Controller { public function __construct() { $this->rest_base = "\141\147\x72\x65\x65\155\x65\156\x74"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\x65\x74\55\154\x69\x73\164\55\142\171\55\x75\163\145\x72", ["\141\x72\147\163" => [], "\155\145\x74\x68\157\144\163" => self::uigoseacoukemwqc, "\143\x61\154\x6c\x62\141\x63\153" => [$this, "\x63\165\141\153\x69\x65\x6b\x73\x73\x67\153\x65\171\163\167\x61"]]); $this->register("\57\x67\x65\x74\x2d\x61\147\162\x65\x65\x6d\145\x6e\164", ["\141\162\x67\163" => [], "\x6d\x65\x74\x68\157\144\163" => self::uigoseacoukemwqc, "\143\x61\x6c\154\142\x61\x63\153" => [$this, "\171\171\x63\x69\155\x63\141\153\x75\x69\x79\x6d\x73\141\157\x71"]]); $this->register("\x2f\147\x65\164\x2d\151\x6e\x63\157\x6d\x65\x73", ["\141\x72\147\163" => [], "\155\x65\164\150\157\144\x73" => self::uigoseacoukemwqc, "\143\x61\154\154\x62\141\x63\153" => [$this, "\x75\171\145\143\143\x6f\171\141\x73\163\x67\157\145\x77\151\x77"]]); $this->register("\57\147\145\x74\x2d\160\x72\x6f\144\165\x63\164\x73", ["\141\x72\x67\163" => [], "\x6d\x65\164\150\157\144\163" => self::uigoseacoukemwqc, "\x63\x61\x6c\x6c\142\x61\x63\x6b" => [$this, "\141\x67\145\161\x73\x77\x77\153\x6b\x71\x79\167\143\153\x63\x6f"]]); $this->register("\x2f\147\x65\164\x2d\x63\x61\164\x65\x67\157\x72\x69\x65\x73", ["\141\x72\x67\163" => [], "\155\145\x74\x68\x6f\144\163" => self::uigoseacoukemwqc, "\143\x61\x6c\x6c\142\141\x63\153" => [$this, "\x6d\145\x73\141\153\153\x79\x63\157\155\171\165\165\167\167\155"]]); $this->register("\x2f\147\145\x74\x2d\160\x75\x62\x6c\x69\x63\163", ["\x61\162\147\163" => [], "\x6d\x65\x74\150\157\x64\x73" => self::uigoseacoukemwqc, "\x63\141\x6c\x6c\142\x61\x63\x6b" => [$this, "\145\141\151\x79\x6b\x6f\155\145\155\x6d\x69\x69\167\x6d\x6b\x69"]]); $this->register("\57\147\145\x74\x2d\141\160\160\x6c\x79\x2d\162\x65\161\165\151\x72\145\x73", ["\x61\162\x67\x73" => [], "\155\x65\x74\150\x6f\144\163" => self::uigoseacoukemwqc, "\143\x61\154\x6c\x62\x61\143\x6b" => [$this, "\x6f\x63\x75\x65\147\x77\163\165\161\x77\153\161\155\157\x69\x69"]]); $this->register("\57\x73\x75\142\155\x69\164\55\x61\x70\160\x6c\x79", ["\141\162\x67\163" => [], "\155\145\164\150\x6f\x64\x73" => self::qucyckeykeuuaquw, "\x63\x61\x6c\x6c\x62\141\143\x6b" => [$this, "\163\171\147\x77\x63\x77\x63\165\x61\x65\x77\151\165\x69\x6b\x63"]]); } private function okqaggqwqcaieqoc($aqmwamyiwgeeymqa) { return $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\x70\160\154\171", false); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto syiqkaasoueowwui; } $ogekyekymoyuywog = Income::symcgieuakksimmu(); $xssuewsokckmigqk = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\147\162\x65\145\x6d\145\x6e\164"); if ($xssuewsokckmigqk) { goto skkamseieeusycye; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x41\x67\162\145\x65\x6d\145\156\164\40\x69\163\40\x72\145\x71\x75\x69\x72\145", PR__MDL__SALARY), 404); goto cgiscsqwwgqqaeqi; skkamseieeusycye: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [$ogekyekymoyuywog::iockmgiyoygcswog => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce, true), $ogekyekymoyuywog::woagckamiequeoyu => $xssuewsokckmigqk]); cgiscsqwwgqqaeqi: goto giaacoqqqsekcayy; syiqkaasoueowwui: $keccaugmemegoimu = $mkucggyaiaukqoce; giaacoqqqsekcayy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sygwcwcuaewiuikc(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto wakmayaoqoskekqy; } if ($this->qsyweymowowcmsww($mkucggyaiaukqoce)["\141\x70\x70\x6c\151\x61\142\x6c\145"]) { goto sggawugoykqcmsug; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\x6f\165\162\x20\x76\x65\162\x69\146\151\x61\x62\154\145\x20\x66\x69\x65\x6c\x64\x73\40\151\x73\40\156\157\164\x20\166\145\162\151\x66\x69\145\x64\x2c\40\143\141\156\x27\164\40\163\x75\142\155\x69\x74\x20\171\157\165\162\40\162\x65\161\165\145\163\x74", PR__MDL__SALARY)); goto wkeuuycukmuqiaom; sggawugoykqcmsug: $wsoeeiiqguoauciy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\143\141\156\137\x61\160\160\154\171"); if ($wsoeeiiqguoauciy) { goto kqgcyoscsusgoaqi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x50\154\145\x61\163\x65\x20\x61\x63\143\145\x70\x74\40\x74\x65\x72\x6d\x73\x20\x66\151\x72\x73\164\x20\157\x72\40\155\x61\x6b\145\x20\x73\x75\162\x65\40\x79\157\x75\162\40\x76\x65\x72\151\146\x79\x20\x72\145\161\x75\151\162\x65\x20\x66\151\145\x6c\x64\x73\x20\x69\x73\x20\x76\145\162\x69\146\x69\x65\144", PR__MDL__SALARY), 400); goto ueigkucgaucgeimc; kqgcyoscsusgoaqi: $gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\x67\x72\145\x65\x6d\145\x6e\164"); if ($gimugccgakegomoq) { goto ugqaaewwmkocwwgy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\141\147\x72\145\x65\x6d\145\156\164\x20\151\144\x20\x69\163\x20\141\40\162\145\161\x75\151\x72\145\x20\146\151\145\154\144", PR__MDL__SALARY), 400); goto wgewmqieuamsoayy; ugqaaewwmkocwwgy: $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if (!$kueeocmceokoouqa->qumqowkwyaceeqwu([$kueeocmceokoouqa::meksegaoamowuwoq => $saqgcoqwmimycgim, $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq])) { goto igooksugieceoege; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\157\165\40\141\x6c\162\145\141\144\x79\x20\x73\165\x62\155\151\x74\40\162\145\161\165\x65\x73\164\x20\x66\x6f\x72\x20\164\x68\x69\163\40\x61\x67\x72\x65\145\x6d\x65\x6e\164", PR__MDL__SALARY), 400); goto omqiayeucoioqoao; igooksugieceoege: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = $jwsqucqyaoaasykk->akkkoiiymmamsauc($gimugccgakegomoq); if ($xssuewsokckmigqk && $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::wceoocyeogkmiyaq)) { goto scisgsyemmsekgos; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\162\145\161\x75\145\163\x74\x65\144\40\x61\147\162\x65\145\155\145\156\164\40\151\x73\x20\156\157\164\40\x76\x61\x6c\x69\144\x2c\x20\x70\154\x65\141\163\x65\40\162\x65\x66\162\x65\x73\150\40\x70\x61\147\x65\40\x61\156\x64\40\x74\162\x79\40\141\x67\141\x69\156", PR__MDL__SALARY), 400); goto cewmoqyysgsmuiya; scisgsyemmsekgos: $xwemcsusuaukogau = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::eyqgmoumkowegyse); if ($xwemcsusuaukogau) { goto ooeausyowguqicuo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\157\x75\162\x20\162\x65\x71\165\x65\x73\x74\145\144\x20\141\x67\162\145\x65\155\145\156\x74\40\151\x73\x20\156\157\x74\x20\x61\x20\x76\141\154\x69\x64\40\x61\147\x72\145\x65\155\145\156\164", PR__MDL__SALARY), 400); goto egyyiccaeeiooaua; ooeausyowguqicuo: if (!ManipulateUser::askmkgcmgekiqwsg($xwemcsusuaukogau, $mkucggyaiaukqoce, true)) { goto wmywuusgukmmaams; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\x6f\165\40\x61\154\x72\145\141\x64\171\x20\x69\x6e\143\x6c\165\144\x65\144\40\x74\157\40\x74\150\151\x73\x20\141\x67\162\x65\145\x6d\x65\156\164", PR__MDL__SALARY), 400); goto gkyawqqcmigqgaiq; wmywuusgukmmaams: $sogksuscggsicmac = $kueeocmceokoouqa->gscuuyuyauokoyuo([$kueeocmceokoouqa::meksegaoamowuwoq => $saqgcoqwmimycgim, $kueeocmceokoouqa::ciywsqoeiymemsys => $kueeocmceokoouqa::cwiummueqsucqayc, $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq]); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto ewymsmkkiksgwysk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\155\x65\164\x68\151\x6e\x67\40\167\162\x6f\x6e\x67\x20\157\x6e\x20\x73\165\x62\x6d\x69\164\x74\x69\156\147\40\171\157\x75\162\40\x72\x65\x71\x75\x65\x73\x74\54\x20\x70\x6c\145\141\x73\145\40\164\162\171\x20\141\x66\x74\145\162\x20\x66\145\x77\40\155\x69\156\x75\x74\145\163", PR__MDL__SALARY), 400); goto cmegwsegsosyqcai; ewymsmkkiksgwysk: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\131\x6f\165\x20\x72\145\161\165\145\x73\x74\40\163\165\142\x6d\151\164\x74\145\x64\40\163\x75\x63\143\x65\163\163\x66\165\154\x6c\171", PR__MDL__SALARY)); cmegwsegsosyqcai: gkyawqqcmigqgaiq: egyyiccaeeiooaua: cewmoqyysgsmuiya: omqiayeucoioqoao: wgewmqieuamsoayy: ueigkucgaucgeimc: wkeuuycukmuqiaom: goto qmuwoecuacmkwgem; wakmayaoqoskekqy: $keccaugmemegoimu = $mkucggyaiaukqoce; qmuwoecuacmkwgem: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ageqswwkkqywckco(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto eeauyscekuckoues; } $gimugccgakegomoq = $this->sgmcgsqycoockoku($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, false); if ($gimugccgakegomoq) { goto owmuceyswmgueasi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x41\x67\x72\x65\145\155\145\x6e\164\x20\x69\x73\40\x72\145\161\x75\151\162\145", PR__MDL__SALARY), 404); goto mwsmsguqqkcwiiuk; owmuceyswmgueasi: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = $this->sgmcgsqycoockoku($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, false); $oksqskmgoqiqciis = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::kmqmeaywmyiqqkqw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oksqskmgoqiqciis, [$this, "\153\x75\x77\157\145\x79\153\x77\167\x69\147\157\x65\x61\x6f\161"], [self::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), "\141\147\162\x65\x65\x6d\145\156\164" => $gimugccgakegomoq]); mwsmsguqqkcwiiuk: goto eogwckcymuugikuy; eeauyscekuckoues: $keccaugmemegoimu = $mkucggyaiaukqoce; eogwckcymuugikuy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function yycimcakuiymsaoq(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto ciykoyeioqgyaeqo; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = $this->sgmcgsqycoockoku($aqmwamyiwgeeymqa, $mkucggyaiaukqoce); if ($xssuewsokckmigqk) { goto wcugqegqsuuuwqao; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\157\x75\x72\x20\162\145\161\x75\x65\163\x74\x65\144\x20\x61\x67\x72\145\145\155\145\x6e\164\x20\x6e\157\164\x20\146\x6f\165\x6e\x64", PR__MDL__SALARY), 404); goto asiqwuoswmigcaki; wcugqegqsuuuwqao: $yygmoeguaqyumuui = [$jwsqucqyaoaasykk::kkeogqiyysoyuemk => IconFontawesomeInterface::xwkeaeyecuwesuia, $jwsqucqyaoaasykk::siwsmgcqgcqmaeui => IconFontawesomeInterface::quwuqosmwegsssoi, $jwsqucqyaoaasykk::weumemyqgykuwqok => IconFontawesomeInterface::aeaeecwkcmmgauce, $jwsqucqyaoaasykk::yykcmqogieykgkus => IconFontawesomeInterface::cisscumeqkoayius]; $icwicymcioeyeyek = []; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $eqgoocgaqwqcimie = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $uusmaiomayssaecw); if (!$eqgoocgaqwqcimie) { goto iwsuawwqomaowuii; } if (!($aaqqkgyougeiueyq = $jwsqucqyaoaasykk->oyeskqayoscwciem()->uqeoyqiwywwmsiew($uusmaiomayssaecw))) { goto qoqskyuuwueqkquk; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [self::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, self::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; qoqskyuuwueqkquk: iwsuawwqomaowuii: wagqgeqymeqoeuyi: } msemumccgceyugmg: $keccaugmemegoimu = [self::uiwqcumqkgikqyue => $icwicymcioeyeyek, $jwsqucqyaoaasykk::gouqcwikiiygyasc => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk), $jwsqucqyaoaasykk::qescuiwgsyuikume => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::qescuiwgsyuikume), $jwsqucqyaoaasykk::ucoiewcoucauqwko => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::ucoiewcoucauqwko), $jwsqucqyaoaasykk::eqkeooqcsscoggia => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::eqkeooqcsscoggia)]; asiqwuoswmigcaki: goto mqicocmqegwukkwg; ciykoyeioqgyaeqo: $keccaugmemegoimu = $mkucggyaiaukqoce; mqicocmqegwukkwg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function cuakiekssgkeyswa(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto qgeugwymkkiacwoc; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $uoomaookgsyciacm = $jwsqucqyaoaasykk->sewmuymswawyuiki($mkucggyaiaukqoce); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, $uoomaookgsyciacm); goto emmsycooskoqmgeg; qgeugwymkkiacwoc: $keccaugmemegoimu = $mkucggyaiaukqoce; emmsycooskoqmgeg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mesakkycomyuuwwm(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto acsqgiuageaasiyy; } $gimugccgakegomoq = $this->sgmcgsqycoockoku($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, false); if ($gimugccgakegomoq) { goto ouamogymawucwswu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\101\147\x72\145\x65\155\145\156\164\x20\151\x73\40\x72\145\161\165\x69\162\x65", PR__MDL__SALARY), 404); goto mugqyyeayeyggqqk; ouamogymawucwswu: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = $this->sgmcgsqycoockoku($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, false); $eyscsimwcyaqakqg = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::guksqgkoswygwycw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $eyscsimwcyaqakqg, [$this, "\x61\167\147\143\147\141\171\171\157\161\x69\x6b\155\155\161\157"], [self::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), "\141\147\162\x65\145\x6d\145\x6e\164" => $gimugccgakegomoq]); mugqyyeayeyggqqk: goto oomguqikqokqwgku; acsqgiuageaasiyy: $keccaugmemegoimu = $mkucggyaiaukqoce; oomguqikqokqwgku: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function qsyweymowowcmsww($mkucggyaiaukqoce) : array { $sogksuscggsicmac = []; $wsoeeiiqguoauciy = true; $ouwoukcecmicoeos = Setting::eiwcuqigayigimak(Setting::eieeagimaskkekew); if (!$ouwoukcecmicoeos) { goto aomysykcgikegiau; } $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\156\145\x6c\x5f\x75\x73\x65\162\x5f\147\x65\164\x5f\x66\x69\145\x6c\x64\x73"), [], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::ackcaikowcokggsc => $ouwoukcecmicoeos, self::wacsysugayaeayag => true]); $ocqaciyqwmcuuuue = ["\x76\x65\162\151\x66\151\x65\x64" => __("\126\x65\162\x69\x66\x69\145\144", PR__MDL__SALARY), "\165\x6e\x63\x6f\x6d\x70\x6c\x65\164\145\144" => __("\x55\156\143\157\155\160\x6c\145\164\x65\x64", PR__MDL__SALARY), self::sgoswgskyiiwkyuo => __("\x50\x65\156\144\x69\156\147", PR__MDL__SALARY)]; if (!$ikgwqyuyckaewsow) { goto ikqqskkqqwmwssoo; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto iwekmyyccgiyuecc; } $iueymcwwscwqkiyq = "\x75\156\x63\x6f\x6d\160\x6c\145\164\145\144"; if ($aiowsaccomcoikus->iokkueaqiswaewyq()) { goto ousiuuwgwkiyikyq; } if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { goto kqqiegkuqagcqsya; } $iueymcwwscwqkiyq = "\x76\145\x72\x69\x66\151\x65\144"; kqqiegkuqagcqsya: goto ogsaaqsaogcqiouy; ousiuuwgwkiyikyq: if ($aiowsaccomcoikus->iokkueaqiswaewyq() && $aiowsaccomcoikus->wowamsaiqwikqoqa()) { goto kkumywowcoycymeo; } if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { goto guykyqecgswcsmws; } $iueymcwwscwqkiyq = self::sgoswgskyiiwkyuo; guykyqecgswcsmws: goto miweggwqeiaeweia; kkumywowcoycymeo: $iueymcwwscwqkiyq = "\166\x65\x72\x69\146\151\x65\144"; miweggwqeiaeweia: ogsaaqsaogcqiouy: $kqwygogeauwwyoca = $iueymcwwscwqkiyq == "\x76\145\x72\151\146\x69\x65\144"; $wsoeeiiqguoauciy = $wsoeeiiqguoauciy && $kqwygogeauwwyoca; $sogksuscggsicmac[$aiowsaccomcoikus->mwikyscisascoeea()] = ["\166\145\162\x69\146\x69\x65\144" => $kqwygogeauwwyoca, self::qgqyauaqwqmqseim => $kqwygogeauwwyoca ? IconFontawesomeInterface::uoyseacicaismmug : IconFontawesomeInterface::cugwqwigakiwyiuk, self::qescuiwgsyuikume => $aiowsaccomcoikus->uikgwcuascgeissw(), self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::iuqumwggccmcuyem => $kqwygogeauwwyoca ? 2 : ($iueymcwwscwqkiyq == self::sgoswgskyiiwkyuo ? 1 : 0), self::ciywsqoeiymemsys . self::icmokuskwoskgace => ManipulateArray::get($ocqaciyqwmcuuuue, $iueymcwwscwqkiyq)]; iwekmyyccgiyuecc: wyuemgggaqogsmsq: } samwkqgwouggsguc: ikqqskkqqwmwssoo: aomysykcgikegiau: return ["\x61\x70\x70\154\x69\x61\x62\154\x65" => $wsoeeiiqguoauciy, self::ymckmcsiymwqucoq => ManipulateArray::yaeiiwwyckwugsem($sogksuscggsicmac)]; } public function eaiykomemmiiwmki(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto gcckqucukawcasgk; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [$jwsqucqyaoaasykk::wceoocyeogkmiyaq => true, $jwsqucqyaoaasykk::cmiegiycgiucucgs => [self::euoaaiqkqcqcgeco => self::imiesusgyysqwyew, self::ciyoccqkiamemcmm => $kueeocmceokoouqa::woagckamiequeoyu, self::iowgsqgiaamyuswi => [$kueeocmceokoouqa::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), $kueeocmceokoouqa::ciywsqoeiymemsys => [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw]]]], null, [self::soquiwyuimckgiow => [$jwsqucqyaoaasykk->kumuygiiqswoyasy(true), $jwsqucqyaoaasykk::eyqgmoumkowegyse, $jwsqucqyaoaasykk::qescuiwgsyuikume, $jwsqucqyaoaasykk::eqieykacgqwskmag, $kueeocmceokoouqa->myywwqkyiwawwquy($kueeocmceokoouqa::ciywsqoeiymemsys), $kueeocmceokoouqa->myywwqkyiwawwquy($kueeocmceokoouqa::CREATED_AT)], self::wosqwewmqmyweqea => false]); if (!($oammesyieqmwuwyi = ManipulateArray::get($keccaugmemegoimu, self::qwumqqyuasyskkkc))) { goto cuumeogeomowqisc; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $iueymcwwscwqkiyq = ManipulateArray::get($igqsaukqcqscimok, self::ciywsqoeiymemsys); if (!$iueymcwwscwqkiyq) { goto iikiiioqiyegyaak; } $kiimiykcuusisqiu = $kueeocmceokoouqa->agausceiyceikeag($iueymcwwscwqkiyq); goto uiosisocuwokwkie; iikiiioqiyegyaak: $oeucsuyqysaciasy = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($igqsaukqcqscimok, $jwsqucqyaoaasykk::eyqgmoumkowegyse); $acmmwkyiqsecacee = false; if ($oeucsuyqysaciasy) { goto ykomgumacooyomsk; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $kcugcsqiuqaomqom = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($igqsaukqcqscimok, $jwsqucqyaoaasykk::eqieykacgqwskmag); if (!is_array($kcugcsqiuqaomqom)) { goto ogqmesokykywseys; } $acmmwkyiqsecacee = in_array($saqgcoqwmimycgim, $kcugcsqiuqaomqom); ogqmesokykywseys: goto mqkmcysgoiaouiwm; ykomgumacooyomsk: $acmmwkyiqsecacee = ManipulateUser::askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, true); mqkmcysgoiaouiwm: if ($acmmwkyiqsecacee) { goto kosaqwikueyksqmw; } $iueymcwwscwqkiyq = "\162\145\161\165\x65\163\x74\141\142\x6c\145"; $kiimiykcuusisqiu = __("\x52\145\x71\165\x65\x73\x74\x61\142\x6c\x65", PR__MDL__SALARY); goto gicyayswqyuoekcq; kosaqwikueyksqmw: $iueymcwwscwqkiyq = $kueeocmceokoouqa::cwiummueqsucqayc; $kiimiykcuusisqiu = $kueeocmceokoouqa->agausceiyceikeag($iueymcwwscwqkiyq); gicyayswqyuoekcq: uiosisocuwokwkie: $muocgugcqiewywag = [self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::ciywsqoeiymemsys . self::icmokuskwoskgace => $kiimiykcuusisqiu]; $kwkmegesqkqwyska = ManipulateArray::get($igqsaukqcqscimok, $kueeocmceokoouqa::CREATED_AT); $muocgugcqiewywag[$jwsqucqyaoaasykk::CREATED_AT] = $jwsqucqyaoaasykk->kamyqikiiuwqiiuw($kueeocmceokoouqa::CREATED_AT, $kwkmegesqkqwyska, $igqsaukqcqscimok); $oammesyieqmwuwyi[$momcykaoccoymeig] = ManipulateArray::set($igqsaukqcqscimok, $muocgugcqiewywag); awoaooyoeoyeeqee: } cwwmimggaaecmucw: $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; cuumeogeomowqisc: goto qmkaeeomgkwggoyo; gcckqucukawcasgk: $keccaugmemegoimu = $mkucggyaiaukqoce; qmkaeeomgkwggoyo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ocuegwsuqwkqmoii(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto csammceowmqwaamq; } $keccaugmemegoimu = $this->qsyweymowowcmsww($mkucggyaiaukqoce); goto ocaguquugeamqckq; csammceowmqwaamq: $keccaugmemegoimu = $mkucggyaiaukqoce; ocaguquugeamqckq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function sgmcgsqycoockoku($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $tsuauommsquiesmk = true) { $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $xssuewsokckmigqk = null; $gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\147\x72\x65\145\x6d\x65\156\x74"); if (!$gimugccgakegomoq) { goto sockeswygwcskeuq; } $uoomaookgsyciacm = [$jwsqucqyaoaasykk->kumuygiiqswoyasy() => $gimugccgakegomoq]; $xssuewsokckmigqk = $jwsqucqyaoaasykk->oqomcmyuuakigusk($jwsqucqyaoaasykk->sewmuymswawyuiki($mkucggyaiaukqoce, $uoomaookgsyciacm)); if (!$this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto ugqwuugsweqgmywk; } if (!$xssuewsokckmigqk) { goto cogywoqcqummsyus; } $xssuewsokckmigqk = null; goto gmwykkouysyaqwqm; cogywoqcqummsyus: $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($kueeocmceokoouqa->qumqowkwyaceeqwu([$kueeocmceokoouqa::meksegaoamowuwoq => $saqgcoqwmimycgim, $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq])) { goto eekcoeikaeaaeyii; } $uoomaookgsyciacm[$jwsqucqyaoaasykk::wceoocyeogkmiyaq] = true; $xssuewsokckmigqk = $jwsqucqyaoaasykk->oqomcmyuuakigusk($uoomaookgsyciacm); eekcoeikaeaaeyii: gmwykkouysyaqwqm: ugqwuugsweqgmywk: if (!($xssuewsokckmigqk && $tsuauommsquiesmk)) { goto uaukmuiwskcemcsw; } $xssuewsokckmigqk = $jwsqucqyaoaasykk->scqakcemaqsqkema($xssuewsokckmigqk); uaukmuiwskcemcsw: sockeswygwcskeuq: return $xssuewsokckmigqk; } public function kuwoeykwwigoeaoq($aqmwamyiwgeeymqa, $product, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product) { goto isgwkwacoyimiauk; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $ogekyekymoyuywog = Income::symcgieuakksimmu(); $meqocwsecsywiiqs = $jwsqucqyaoaasykk->geyuyukmwaoksywa($product->get_permalink(), $product->get_title(), [self::mgsccwumkcawaqcy => "\x5f\142\x6c\141\156\153"]); $sogksuscggsicmac = [self::qescuiwgsyuikume => $meqocwsecsywiiqs]; if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto uaqackioaiqwcocy; } $qecuekqmeaiykeek = $product->get_children(); $qecuekqmeaiykeek[] = $product->get_id(); $saqgcoqwmimycgim = ManipulateArray::get($ywmkwiwkosakssii, self::meksegaoamowuwoq); $gimugccgakegomoq = ManipulateArray::get($ywmkwiwkosakssii, "\x61\x67\162\x65\x65\155\x65\156\164\x5f\x69\x64"); $uoomaookgsyciacm = [$ogekyekymoyuywog::iockmgiyoygcswog => $saqgcoqwmimycgim, $ogekyekymoyuywog::oguseymmyyoyaako => $qecuekqmeaiykeek, $ogekyekymoyuywog::woagckamiequeoyu => $gimugccgakegomoq]; $sogksuscggsicmac["\x69\x6e\143\x6f\155\145\x73\x5f\163\x75\x6d"] = ManipulateWoocommerce::mcgaskyiamgqmqgu($ogekyekymoyuywog->qgiewwqykwugcuoo($ogekyekymoyuywog::aioqyewkwawaqgqe, $uoomaookgsyciacm)); $sogksuscggsicmac["\x69\x6e\x63\x6f\155\145\163\x5f\143\157\165\x6e\x74"] = $jwsqucqyaoaasykk->msywmyaoqmaegsuy($ogekyekymoyuywog->asskucacysemeoiu($uoomaookgsyciacm)); goto cscusseysqygsoiy; uaqackioaiqwcocy: $aumscagymwyyicag = $product->get_price_html(); if ($aumscagymwyyicag) { goto mkwkkmkgiqiamacc; } $aumscagymwyyicag = __("\127\151\164\x68\157\x75\164\40\120\x72\x69\143\x65", PR__MDL__SALARY); mkwkkmkgiqiamacc: $sogksuscggsicmac["\x70\162\151\x63\145"] = $aumscagymwyyicag; cscusseysqygsoiy: isgwkwacoyimiauk: return $sogksuscggsicmac; } public function awgcgayyoqikmmqo($aqmwamyiwgeeymqa, $guwumyyyakswawas, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; $guwumyyyakswawas = ManipulateTerm::get($guwumyyyakswawas); if (!$guwumyyyakswawas) { goto ewscugeuicukkycc; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $ogekyekymoyuywog = Income::symcgieuakksimmu(); $oksqskmgoqiqciis = ManipulateTerm::iyssgoiwgwygeacg($guwumyyyakswawas, self::oguseymmyyoyaako, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]); $qecuekqmeaiykeek = []; foreach ($oksqskmgoqiqciis as $product) { $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product) { goto cgyakcqgugqgkqiw; } $qecuekqmeaiykeek[] = $product->get_id(); $qecuekqmeaiykeek = array_merge($qecuekqmeaiykeek, $product->get_children()); cgyakcqgugqgkqiw: uegouoiuyoqkcscg: } mggeqkcksyaymcsa: $meqocwsecsywiiqs = $jwsqucqyaoaasykk->geyuyukmwaoksywa(ManipulateTerm::qmgcisuuikgmqcsu($guwumyyyakswawas), ManipulateTerm::qcgakseyaikigqco($guwumyyyakswawas), [self::mgsccwumkcawaqcy => "\137\142\154\141\x6e\153"]); $sogksuscggsicmac = [self::qescuiwgsyuikume => $meqocwsecsywiiqs, "\160\x72\x6f\x64\165\x63\x74\163" => $jwsqucqyaoaasykk->msywmyaoqmaegsuy(count($oksqskmgoqiqciis))]; if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto eeyyskqsmquyquqw; } $saqgcoqwmimycgim = ManipulateArray::get($ywmkwiwkosakssii, self::meksegaoamowuwoq); $gimugccgakegomoq = ManipulateArray::get($ywmkwiwkosakssii, "\141\x67\x72\x65\145\x6d\x65\156\x74\137\x69\x64"); $uoomaookgsyciacm = [$ogekyekymoyuywog::iockmgiyoygcswog => $saqgcoqwmimycgim, $ogekyekymoyuywog::oguseymmyyoyaako => $qecuekqmeaiykeek, $ogekyekymoyuywog::woagckamiequeoyu => $gimugccgakegomoq]; $sogksuscggsicmac["\151\x6e\143\157\155\x65\163\137\163\165\x6d"] = ManipulateWoocommerce::mcgaskyiamgqmqgu($ogekyekymoyuywog->qgiewwqykwugcuoo($ogekyekymoyuywog::aioqyewkwawaqgqe, $uoomaookgsyciacm)); $sogksuscggsicmac["\x69\156\x63\157\155\x65\163\x5f\x63\157\165\156\x74"] = $jwsqucqyaoaasykk->msywmyaoqmaegsuy($ogekyekymoyuywog->asskucacysemeoiu($uoomaookgsyciacm)); eeyyskqsmquyquqw: ewscugeuicukkycc: return $sogksuscggsicmac; } }
