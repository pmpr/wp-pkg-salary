<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cb93f61ab1c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\FormMaker\Front\Field\Field; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Salary\Model\Agreement as Model; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Setting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Agreement extends Controller { public function __construct() { $this->rest_base = "\x61\x67\x72\145\x65\155\x65\156\x74"; parent::__construct(); } public function register_routes() { $this->register("\57\147\x65\164\55\160\165\x62\154\x69\x63\x73", [self::wwgusigoaksqmwsm => [$this, "\145\x61\151\x79\x6b\157\155\x65\x6d\x6d\151\x69\167\x6d\153\x69"]]); $this->register("\57\147\145\164\x2d\141\x67\x72\145\145\x6d\145\156\x74", [self::wwgusigoaksqmwsm => [$this, "\171\x79\143\x69\155\x63\141\153\x75\x69\171\x6d\x73\141\x6f\x71"]]); $this->register("\x2f\x67\x65\x74\55\160\162\x6f\x64\x75\x63\x74\x73", [self::wwgusigoaksqmwsm => [$this, "\x61\x67\145\x71\163\167\x77\153\153\161\x79\x77\143\x6b\143\x6f"]]); $this->register("\57\147\x65\164\55\x63\141\x74\x65\x67\x6f\162\151\x65\x73", [self::wwgusigoaksqmwsm => [$this, "\x6d\145\163\x61\153\153\171\x63\x6f\155\x79\165\x75\167\x77\155"]]); $this->register("\x2f\147\x65\x74\55\x61\x70\160\x6c\x79\55\x72\x65\161\165\151\x72\145\163", [self::wwgusigoaksqmwsm => [$this, "\x6f\x63\165\x65\x67\x77\163\x75\161\167\x6b\x71\155\x6f\x69\151"]]); $this->register("\x2f\x73\165\142\155\151\164\x2d\x61\x70\x70\x6c\x79", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x73\171\147\167\143\x77\x63\165\141\145\x77\x69\165\x69\x6b\143"]]); $this->register("\x2f\x67\x65\x74\55\x6c\x69\163\164\x2d\x62\x79\x2d\x75\163\x65\162", [self::wwgusigoaksqmwsm => [$this, "\x77\x63\143\153\141\153\157\167\145\x77\151\x63\x73\163\x71\147"]]); $this->register("\x2f\x67\145\164\55\151\x6e\x63\157\x6d\x65\x73", [self::wwgusigoaksqmwsm => [$this, "\165\171\x65\143\x63\157\171\141\x73\x73\x67\157\x65\167\151\x77"]]); } public function eaiykomemmiiwmki(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto iwsuawwqomaowuii; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($jwsqucqyaoaasykk && $kueeocmceokoouqa) { goto wagqgeqymeqoeuyi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\155\x65\x74\150\151\156\x67\x20\167\x72\157\x6e\147\x2c\x20\x70\154\145\141\x73\145\40\143\x6f\x6e\164\x61\143\x74\40\x75\x73", PR__MDL__SALARY), 500); goto qoqskyuuwueqkquk; wagqgeqymeqoeuyi: $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $mqamowqmoasqycgc = ManipulateUser::yksywgmucwascgwk($mkucggyaiaukqoce, true); $ggiwyickioisqkss = []; foreach ($mqamowqmoasqycgc as $oeucsuyqysaciasy) { $ggiwyickioisqkss[] = [self::ciyoccqkiamemcmm => $oeucsuyqysaciasy, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::meisqwykgaymauka => $jwsqucqyaoaasykk::aociysagacimyqgu, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim]; wkeuuycukmuqiaom: } sggawugoykqcmsug: $siykeiywomwwuoiw = $jwsqucqyaoaasykk->kqewyqqqiyiouaou([[self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::iowgsqgiaamyuswi => [$jwsqucqyaoaasykk::mmisekagkomcsowm => [self::ciyoccqkiamemcmm => $ycoeoaakqyskgykq, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim], [self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::iowgsqgiaamyuswi => $ggiwyickioisqkss]]], [self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::iowgsqgiaamyuswi => [$jwsqucqyaoaasykk::ciywsqoeiymemsys => [self::ciyoccqkiamemcmm => [self::miswkosqicsksgok, self::cemyyceucooociss], self::cwsguekoagqkaesm => self::weaykmmocuacwekg], $jwsqucqyaoaasykk::mmisekagkomcsowm => [self::euoaaiqkqcqcgeco => self::weigugswsgkycqkc, self::cwsguekoagqkaesm => self::weaykmmocuacwekg], $jwsqucqyaoaasykk::aociysagacimyqgu => [self::euoaaiqkqcqcgeco => self::weigugswsgkycqkc, self::cwsguekoagqkaesm => self::weaykmmocuacwekg]]], $jwsqucqyaoaasykk::cmiegiycgiucucgs => [self::euoaaiqkqcqcgeco => self::imiesusgyysqwyew, self::ciyoccqkiamemcmm => $kueeocmceokoouqa::woagckamiequeoyu, self::iowgsqgiaamyuswi => [$kueeocmceokoouqa::meksegaoamowuwoq => $ycoeoaakqyskgykq]], [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw, self::meisqwykgaymauka => self::ciywsqoeiymemsys, self::ciyoccqkiamemcmm => [self::miswkosqicsksgok, self::cemyyceucooociss]]]); $yoskgaaocqaweqyw = self::kumuoysauoagaiiy; $kecaaeasoukoeask = "\x72\145\x71\x75\145\x73\x74\137\x73\164\141\x74\165\x73"; $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [], $siykeiywomwwuoiw, [self::soquiwyuimckgiow => [$jwsqucqyaoaasykk->kumuygiiqswoyasy(true), $jwsqucqyaoaasykk->myywwqkyiwawwquy($jwsqucqyaoaasykk::qescuiwgsyuikume), $jwsqucqyaoaasykk->myywwqkyiwawwquy($jwsqucqyaoaasykk::ciywsqoeiymemsys), $kueeocmceokoouqa->kmgukcsewikeswco($kueeocmceokoouqa::ciywsqoeiymemsys, $kecaaeasoukoeask), $kueeocmceokoouqa->kmgukcsewikeswco($kueeocmceokoouqa::CREATED_AT, $yoskgaaocqaweqyw)], self::wosqwewmqmyweqea => false]); if (!($oammesyieqmwuwyi = ManipulateArray::get($keccaugmemegoimu, self::qwumqqyuasyskkkc, []))) { goto msemumccgceyugmg; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $sgcwoeksqaiayucu = ManipulateArray::get($igqsaukqcqscimok, self::ciywsqoeiymemsys); $wciwsoomyoeueocu = ManipulateArray::get($igqsaukqcqscimok, $kecaaeasoukoeask); if ($sgcwoeksqaiayucu !== $jwsqucqyaoaasykk::miswkosqicsksgok) { goto eeauyscekuckoues; } if (!$wciwsoomyoeueocu) { goto owmuceyswmgueasi; } $skikmocgwukomwyq = $kueeocmceokoouqa->gascwoasakiqyumc($wciwsoomyoeueocu); goto mwsmsguqqkcwiiuk; owmuceyswmgueasi: $wciwsoomyoeueocu = self::owiykagmoieoggya; $skikmocgwukomwyq = __("\x52\x65\x71\x75\145\163\164\141\x62\x6c\x65", PR__MDL__SALARY); mwsmsguqqkcwiiuk: goto eogwckcymuugikuy; eeauyscekuckoues: $wciwsoomyoeueocu = self::oooiesaeqsouwieg; $skikmocgwukomwyq = __("\x55\x6e\162\145\161\165\x65\163\x74\x61\142\x6c\x65", PR__MDL__SALARY); eogwckcymuugikuy: $muocgugcqiewywag = [self::kumuoysauoagaiiy => $kueeocmceokoouqa->ooeucgsymeocguuu($yoskgaaocqaweqyw, ManipulateArray::get($igqsaukqcqscimok, $yoskgaaocqaweqyw), $igqsaukqcqscimok), self::ciywsqoeiymemsys => $wciwsoomyoeueocu, self::ciywsqoeiymemsys . self::icmokuskwoskgace => $skikmocgwukomwyq]; $oammesyieqmwuwyi[$momcykaoccoymeig] = ManipulateArray::set($igqsaukqcqscimok, $muocgugcqiewywag); qmuwoecuacmkwgem: } wakmayaoqoskekqy: msemumccgceyugmg: $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; qoqskyuuwueqkquk: goto wcugqegqsuuuwqao; iwsuawwqomaowuii: $keccaugmemegoimu = $mkucggyaiaukqoce; wcugqegqsuuuwqao: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function yycimcakuiymsaoq(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto oomguqikqokqwgku; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); if ($jwsqucqyaoaasykk) { goto mugqyyeayeyggqqk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x6d\x65\x74\150\151\156\x67\x20\167\x72\x6f\x6e\147\x2c\x20\160\x6c\x65\141\163\145\40\143\x6f\x6e\x74\141\x63\x74\40\x75\163", PR__MDL__SALARY), 500); goto acsqgiuageaasiyy; mugqyyeayeyggqqk: if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce)) { goto emmsycooskoqmgeg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\157\165\162\x20\162\x65\161\x75\x65\x73\164\145\x64\x20\141\147\162\145\x65\x6d\145\x6e\164\x20\x6e\157\x74\x20\146\x6f\x75\x6e\x64", PR__MDL__SALARY), 404); goto ouamogymawucwswu; emmsycooskoqmgeg: $yygmoeguaqyumuui = [$jwsqucqyaoaasykk::kkeogqiyysoyuemk => IconFontawesomeInterface::xwkeaeyecuwesuia, $jwsqucqyaoaasykk::siwsmgcqgcqmaeui => IconFontawesomeInterface::quwuqosmwegsssoi, $jwsqucqyaoaasykk::weumemyqgykuwqok => IconFontawesomeInterface::aeaeecwkcmmgauce, $jwsqucqyaoaasykk::yykcmqogieykgkus => IconFontawesomeInterface::cisscumeqkoayius]; $icwicymcioeyeyek = []; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $eqgoocgaqwqcimie = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $uusmaiomayssaecw); if (!$eqgoocgaqwqcimie) { goto qgeugwymkkiacwoc; } $aaqqkgyougeiueyq = $jwsqucqyaoaasykk->oyeskqayoscwciem()->uqeoyqiwywwmsiew($uusmaiomayssaecw); if (!$aaqqkgyougeiueyq) { goto mqicocmqegwukkwg; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [self::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, self::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; mqicocmqegwukkwg: qgeugwymkkiacwoc: ciykoyeioqgyaeqo: } asiqwuoswmigcaki: $keccaugmemegoimu = [self::uiwqcumqkgikqyue => $icwicymcioeyeyek, $jwsqucqyaoaasykk::gouqcwikiiygyasc => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk), $jwsqucqyaoaasykk::qescuiwgsyuikume => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::qescuiwgsyuikume), $jwsqucqyaoaasykk::ucoiewcoucauqwko => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::ucoiewcoucauqwko), $jwsqucqyaoaasykk::eqkeooqcsscoggia => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::eqkeooqcsscoggia)]; ouamogymawucwswu: acsqgiuageaasiyy: goto samwkqgwouggsguc; oomguqikqokqwgku: $keccaugmemegoimu = $mkucggyaiaukqoce; samwkqgwouggsguc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ageqswwkkqywckco(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto ousiuuwgwkiyikyq; } if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu, false)) { goto miweggwqeiaeweia; } if ($keccaugmemegoimu) { goto kkumywowcoycymeo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x41\x67\x72\x65\145\155\x65\156\164\x20\x69\x73\40\x72\x65\x71\165\x69\162\145", PR__MDL__SALARY), 404); kkumywowcoycymeo: goto kqqiegkuqagcqsya; miweggwqeiaeweia: if ($jwsqucqyaoaasykk = Model::symcgieuakksimmu()) { goto wyuemgggaqogsmsq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\155\x65\x74\x68\x69\156\147\40\x77\x72\x6f\156\147\x2c\x20\160\154\x65\x61\163\x65\x20\143\157\156\164\141\x63\164\40\165\x73", PR__MDL__SALARY), 500); goto guykyqecgswcsmws; wyuemgggaqogsmsq: $oksqskmgoqiqciis = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::kmqmeaywmyiqqkqw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oksqskmgoqiqciis, [$this, "\x6b\165\x77\157\x65\x79\x6b\167\167\x69\147\157\x65\141\157\x71"], [self::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), "\141\147\x72\x65\x65\x6d\145\x6e\x74" => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk)]); guykyqecgswcsmws: kqqiegkuqagcqsya: goto ogsaaqsaogcqiouy; ousiuuwgwkiyikyq: $keccaugmemegoimu = $mkucggyaiaukqoce; ogsaaqsaogcqiouy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mesakkycomyuuwwm(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto ogqmesokykywseys; } if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu, false)) { goto cwwmimggaaecmucw; } if ($keccaugmemegoimu) { goto aomysykcgikegiau; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x41\147\x72\x65\145\155\x65\156\x74\x20\151\x73\x20\162\x65\x71\165\151\162\x65", PR__MDL__SALARY), 400); aomysykcgikegiau: goto awoaooyoeoyeeqee; cwwmimggaaecmucw: if ($jwsqucqyaoaasykk = Model::symcgieuakksimmu()) { goto iwekmyyccgiyuecc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\155\145\164\150\151\x6e\147\40\167\x72\157\x6e\x67\54\40\x70\154\x65\141\x73\145\40\x63\x6f\156\164\141\143\x74\40\165\163", PR__MDL__SALARY), 500); goto ikqqskkqqwmwssoo; iwekmyyccgiyuecc: $eyscsimwcyaqakqg = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::guksqgkoswygwycw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $eyscsimwcyaqakqg, [$this, "\x61\167\x67\x63\x67\141\x79\171\x6f\x71\151\153\x6d\x6d\x71\x6f"], [self::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), "\x61\147\162\x65\x65\155\145\x6e\x74" => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk)]); ikqqskkqqwmwssoo: awoaooyoeoyeeqee: goto ykomgumacooyomsk; ogqmesokykywseys: $keccaugmemegoimu = $mkucggyaiaukqoce; ykomgumacooyomsk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sygwcwcuaewiuikc(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto sockeswygwcskeuq; } if ($this->qsyweymowowcmsww($mkucggyaiaukqoce)["\x61\160\x70\x6c\x69\x61\142\x6c\x65"]) { goto ugqwuugsweqgmywk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\157\165\x72\x20\166\145\x72\x69\x66\x69\x61\142\154\x65\40\146\151\145\154\144\163\x20\x69\163\40\x6e\157\164\x20\166\x65\162\151\x66\151\145\x64\x2c\x20\143\141\x6e\47\x74\x20\x73\x75\142\x6d\x69\164\40\171\157\x75\x72\x20\162\x65\x71\x75\x65\x73\164", PR__MDL__SALARY)); goto uaukmuiwskcemcsw; ugqwuugsweqgmywk: if ($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\143\x61\156\x5f\141\160\x70\x6c\x79", false)) { goto cogywoqcqummsyus; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x50\x6c\145\141\163\145\x20\141\x63\x63\x65\x70\x74\x20\164\x65\x72\155\163\40\146\151\162\163\x74\x20\157\x72\x20\x6d\x61\153\145\40\x73\165\x72\145\x20\x79\157\x75\162\x20\x76\145\162\151\146\x79\x20\x72\145\161\x75\x69\x72\145\40\146\151\x65\154\144\163\40\151\x73\40\166\x65\162\151\x66\151\145\144", PR__MDL__SALARY), 400); goto gmwykkouysyaqwqm; cogywoqcqummsyus: if ($gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\147\x72\x65\145\x6d\145\x6e\164")) { goto ocaguquugeamqckq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\141\147\162\x65\145\155\x65\x6e\x74\40\151\x64\40\x69\x73\x20\x61\40\162\145\161\165\x69\x72\x65\x20\x66\151\x65\x6c\x64", PR__MDL__SALARY), 400); goto eekcoeikaeaaeyii; ocaguquugeamqckq: if ($kueeocmceokoouqa = Request::symcgieuakksimmu()) { goto qmkaeeomgkwggoyo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\155\145\x74\x68\x69\x6e\147\40\167\162\x6f\156\147\54\40\x70\x6c\145\141\163\145\x20\x63\x6f\x6e\x74\141\x63\164\40\x75\163", PR__MDL__SALARY), 500); goto csammceowmqwaamq; qmkaeeomgkwggoyo: if (!$kueeocmceokoouqa->qumqowkwyaceeqwu([$kueeocmceokoouqa::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce, true), $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq])) { goto cuumeogeomowqisc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x79\x6f\165\40\141\x6c\162\145\141\x64\x79\x20\x73\x75\x62\x6d\151\164\40\141\40\x72\145\x71\165\145\x73\164\40\x6f\156\40\164\x68\151\x73\40\x61\x67\162\x65\x65\155\145\x6e\x74", PR__MDL__SALARY)); goto gcckqucukawcasgk; cuumeogeomowqisc: if ($this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu)) { goto iikiiioqiyegyaak; } if ($keccaugmemegoimu) { goto gicyayswqyuoekcq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x72\145\x71\x75\145\163\x74\x65\x64\40\x61\147\x72\145\145\155\145\156\x74\40\x69\x73\x20\156\157\x74\x20\166\141\x6c\151\x64\40\x6f\x72\x20\156\x6f\164\40\x65\x78\x69\x73\x74\54\40\160\154\x65\x61\x73\145\40\162\x65\x66\x72\x65\163\x68\40\160\x61\x67\x65\40\141\x6e\144\40\x74\x72\x79\40\x61\x67\141\x69\x6e", PR__MDL__SALARY)); gicyayswqyuoekcq: goto uiosisocuwokwkie; iikiiioqiyegyaak: $sogksuscggsicmac = $kueeocmceokoouqa->gscuuyuyauokoyuo([$kueeocmceokoouqa::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), $kueeocmceokoouqa::ciywsqoeiymemsys => $kueeocmceokoouqa::ecysamcwsaweumeu, $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq], false, $mkucggyaiaukqoce); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto mqkmcysgoiaouiwm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x6d\x65\x74\x68\x69\156\147\x20\167\162\x6f\x6e\x67\x20\157\156\40\x73\165\x62\x6d\x69\x74\164\151\x6e\x67\x20\171\x6f\x75\x72\40\162\x65\x71\x75\145\x73\x74\54\x20\160\154\x65\141\x73\145\x20\164\162\x79\40\141\147\141\151\156\40\141\146\x74\x65\162\40\146\145\x77\x20\x6d\151\156\165\x74\145\163", PR__MDL__SALARY), 400); goto kosaqwikueyksqmw; mqkmcysgoiaouiwm: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\131\x6f\165\x20\162\x65\x71\x75\145\x73\164\40\x73\165\142\155\x69\x74\164\145\x64\x20\163\x75\143\143\x65\163\163\146\165\154\154\x79", PR__MDL__SALARY)); kosaqwikueyksqmw: uiosisocuwokwkie: gcckqucukawcasgk: csammceowmqwaamq: eekcoeikaeaaeyii: gmwykkouysyaqwqm: uaukmuiwskcemcsw: goto mkwkkmkgiqiamacc; sockeswygwcskeuq: $keccaugmemegoimu = $mkucggyaiaukqoce; mkwkkmkgiqiamacc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto cgyakcqgugqgkqiw; } $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($kueeocmceokoouqa && $ogekyekymoyuywog) { goto mggeqkcksyaymcsa; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x6d\145\164\x68\x69\156\x67\x20\167\162\x6f\x6e\147\54\x20\160\154\145\x61\x73\145\x20\143\157\x6e\x74\x61\143\164\40\x75\x73", PR__MDL__SALARY), 500); goto uegouoiuyoqkcscg; mggeqkcksyaymcsa: if ($wqqmoakyckcwwkua = $this->oausasacgwqmkycw($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu)) { goto cscusseysqygsoiy; } if (!$keccaugmemegoimu) { goto isgwkwacoyimiauk; } goto uaqackioaiqwcocy; cscusseysqygsoiy: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [$ogekyekymoyuywog::cmiegiycgiucucgs => $kueeocmceokoouqa->keeuqgyooycqoygw($wqqmoakyckcwwkua)]); goto uaqackioaiqwcocy; isgwkwacoyimiauk: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x49\164\x27\x73\40\x73\145\145\x6d\x73\x20\x79\157\165\x20\x64\157\x6e\164\40\163\165\x62\x6d\151\164\40\141\156\x79\40\162\x65\x71\x75\x65\163\x74\x20\157\156\x20\164\150\145\x20\x61\147\162\x65\x65\155\x65\156\x74", PR__MDL__SALARY), 400); uaqackioaiqwcocy: uegouoiuyoqkcscg: goto eeyyskqsmquyquqw; cgyakcqgugqgkqiw: $keccaugmemegoimu = $mkucggyaiaukqoce; eeyyskqsmquyquqw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wcckakowewicssqg(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto iiiccouaaqsyikae; } $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Model::symcgieuakksimmu(); if ($kueeocmceokoouqa && $mssuumukiiaqmcka) { goto kqswcsysqawkcgye; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x6d\x65\x74\150\x69\156\x67\x20\x77\x72\157\156\x67\x2c\x20\160\154\145\141\x73\x65\x20\143\157\156\x74\x61\x63\164\40\x75\x73", PR__MDL__SALARY), 500); goto wusciwkkckmqigms; kqswcsysqawkcgye: $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $siykeiywomwwuoiw = $kueeocmceokoouqa->kqewyqqqiyiouaou([self::meksegaoamowuwoq => $ycoeoaakqyskgykq, self::ciywsqoeiymemsys => self::cwiummueqsucqayc, $kueeocmceokoouqa::woagckamiequeoyu => [self::euoaaiqkqcqcgeco => self::imiesusgyysqwyew]]); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $kueeocmceokoouqa, [], $siykeiywomwwuoiw, [self::soquiwyuimckgiow => [$mssuumukiiaqmcka->kumuygiiqswoyasy(true), $mssuumukiiaqmcka->myywwqkyiwawwquy(self::qescuiwgsyuikume), $mssuumukiiaqmcka->myywwqkyiwawwquy($mssuumukiiaqmcka::kmqmeaywmyiqqkqw), $mssuumukiiaqmcka->myywwqkyiwawwquy($mssuumukiiaqmcka::guksqgkoswygwycw)], self::wosqwewmqmyweqea => false]); if (!($oammesyieqmwuwyi = ManipulateArray::get($keccaugmemegoimu, self::qwumqqyuasyskkkc, []))) { goto ewscugeuicukkycc; } $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $mssuumukiiaqmcka->cwgkcyyaymmsomqa($oammesyieqmwuwyi); ewscugeuicukkycc: wusciwkkckmqigms: goto ukkcmocamwgiqayu; iiiccouaaqsyikae: $keccaugmemegoimu = $mkucggyaiaukqoce; ukkcmocamwgiqayu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ocuegwsuqwkqmoii(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto mwysseaekcsiesmm; } $keccaugmemegoimu = $this->qsyweymowowcmsww($mkucggyaiaukqoce); goto amgsueumgaguceaa; mwysseaekcsiesmm: $keccaugmemegoimu = $mkucggyaiaukqoce; amgsueumgaguceaa: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kuwoeykwwigoeaoq($aqmwamyiwgeeymqa, $product, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; if (!($product = ManipulateWoocommerce::aqasygcsqysmmyke($product))) { goto ucqmumuygcywwqma; } if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto ukqocwewouckikso; } $meqocwsecsywiiqs = $jwsqucqyaoaasykk->geyuyukmwaoksywa($product->get_permalink(), $product->get_title(), [self::mgsccwumkcawaqcy => "\x5f\x62\x6c\x61\x6e\153"]); $sogksuscggsicmac = [self::qescuiwgsyuikume => $meqocwsecsywiiqs]; if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto uougwgeyiokewkkm; } $qecuekqmeaiykeek = $product->get_children(); $qecuekqmeaiykeek[] = $product->get_id(); $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); goto gommacygsykyussk; uougwgeyiokewkkm: $aumscagymwyyicag = $product->get_price_html(); if ($aumscagymwyyicag) { goto gygwewcqsmwqismo; } $aumscagymwyyicag = __("\x57\151\164\x68\157\x75\x74\40\x50\x72\151\x63\x65", PR__MDL__SALARY); gygwewcqsmwqismo: $sogksuscggsicmac["\x70\162\151\x63\x65"] = $aumscagymwyyicag; gommacygsykyussk: ukqocwewouckikso: ucqmumuygcywwqma: return $sogksuscggsicmac; } public function awgcgayyoqikmmqo($aqmwamyiwgeeymqa, $guwumyyyakswawas, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; if (!($guwumyyyakswawas = ManipulateTerm::get($guwumyyyakswawas))) { goto uqokiksoqcwwqgio; } if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto kocqqoyymosmuksu; } $oksqskmgoqiqciis = ManipulateTerm::iyssgoiwgwygeacg($guwumyyyakswawas, self::oguseymmyyoyaako, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]); $okcscwesammossuq = []; $qecuekqmeaiykeek = []; foreach ($oksqskmgoqiqciis as $product) { $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product) { goto iuuuususuuuaieem; } $okcscwesammossuq[] = $product->get_children(); $qecuekqmeaiykeek[] = $product->get_id(); iuuuususuuuaieem: uimeeckqksqeekqq: } uykousayyomcaeaa: $qecuekqmeaiykeek = array_merge([], ...$okcscwesammossuq); $meqocwsecsywiiqs = $jwsqucqyaoaasykk->geyuyukmwaoksywa(ManipulateTerm::qmgcisuuikgmqcsu($guwumyyyakswawas), ManipulateTerm::qcgakseyaikigqco($guwumyyyakswawas), [self::mgsccwumkcawaqcy => "\137\x62\154\141\156\153"]); $sogksuscggsicmac = [self::qescuiwgsyuikume => $meqocwsecsywiiqs, "\x70\x72\157\144\165\x63\164\x73" => $jwsqucqyaoaasykk->msywmyaoqmaegsuy(count($oksqskmgoqiqciis))]; $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); kocqqoyymosmuksu: uqokiksoqcwwqgio: return $sogksuscggsicmac; } private function okqaggqwqcaieqoc($aqmwamyiwgeeymqa) { return $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\160\160\x6c\171", false); } private function qsyweymowowcmsww($mkucggyaiaukqoce) : array { $sogksuscggsicmac = []; $wsoeeiiqguoauciy = true; $ouwoukcecmicoeos = Setting::eiwcuqigayigimak(Setting::eieeagimaskkekew); if (!$ouwoukcecmicoeos) { goto wkwamkgkwykeqkec; } $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\156\x65\x6c\137\x75\163\x65\x72\137\x67\145\x74\x5f\146\151\145\x6c\144\x73"), [], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::ackcaikowcokggsc => $ouwoukcecmicoeos, self::wacsysugayaeayag => true]); $ocqaciyqwmcuuuue = [self::sgoswgskyiiwkyuo => __("\120\145\156\x64\151\x6e\147", PR__MDL__SALARY), self::uyicaiummcooqwqk => __("\x56\x65\162\151\x66\x69\x65\x64", PR__MDL__SALARY), self::iiiimowywicukqke => __("\x55\x6e\x63\x6f\155\160\154\145\x74\145\144", PR__MDL__SALARY)]; if (!$ikgwqyuyckaewsow) { goto mogkoocsoeuyoqqa; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto wsesqmcqoiyyqkqi; } $iueymcwwscwqkiyq = self::iiiimowywicukqke; if ($aiowsaccomcoikus->iokkueaqiswaewyq()) { goto oyeyomcgkmgymogq; } if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { goto mscyggqcesgqqksu; } $iueymcwwscwqkiyq = self::uyicaiummcooqwqk; mscyggqcesgqqksu: goto iesekaeqeomeuaui; oyeyomcgkmgymogq: if ($aiowsaccomcoikus->wowamsaiqwikqoqa()) { goto ieqesiiageaauiuw; } if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { goto yiowgigkkwsoqcci; } $iueymcwwscwqkiyq = self::sgoswgskyiiwkyuo; yiowgigkkwsoqcci: goto gamqcwuwkikwqoay; ieqesiiageaauiuw: $iueymcwwscwqkiyq = self::uyicaiummcooqwqk; gamqcwuwkikwqoay: iesekaeqeomeuaui: $kqwygogeauwwyoca = self::uyicaiummcooqwqk === $iueymcwwscwqkiyq; $wsoeeiiqguoauciy = $wsoeeiiqguoauciy && $kqwygogeauwwyoca; $sogksuscggsicmac[$aiowsaccomcoikus->mwikyscisascoeea()] = [self::qgqyauaqwqmqseim => $kqwygogeauwwyoca ? IconFontawesomeInterface::uoyseacicaismmug : IconFontawesomeInterface::cugwqwigakiwyiuk, self::qescuiwgsyuikume => $aiowsaccomcoikus->uikgwcuascgeissw(), self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uyicaiummcooqwqk => $kqwygogeauwwyoca, self::iuqumwggccmcuyem => $kqwygogeauwwyoca ? 2 : (self::sgoswgskyiiwkyuo === $iueymcwwscwqkiyq ? 1 : 0), self::ciywsqoeiymemsys . self::icmokuskwoskgace => ManipulateArray::get($ocqaciyqwmcuuuue, $iueymcwwscwqkiyq)]; wsesqmcqoiyyqkqi: sioekkmekwygemyc: } qukocuwgakemmyga: mogkoocsoeuyoqqa: wkwamkgkwykeqkec: return ["\x61\160\x70\x6c\x69\x61\x62\x6c\x65" => $wsoeeiiqguoauciy, self::ymckmcsiymwqucoq => ManipulateArray::yaeiiwwyckwugsem($sogksuscggsicmac)]; } private function oausasacgwqmkycw(WP_REST_Request $aqmwamyiwgeeymqa, $mkucggyaiaukqoce, ?WP_Error &$iswcokucwmiosiaq = null) { $sogksuscggsicmac = null; if ($kueeocmceokoouqa = Request::symcgieuakksimmu()) { goto suqceasgacskcmkc; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\123\x6f\x6d\145\164\x68\x69\x6e\147\40\167\x72\x6f\156\147\54\x20\160\x6c\x65\141\x73\x65\40\143\x6f\x6e\x74\141\143\x74\40\165\x73", PR__MDL__SALARY), 500); goto yykqaowwsqgqysmq; suqceasgacskcmkc: if ($gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\147\x72\145\x65\x6d\x65\156\x74")) { goto oimkeqocuguqqsqk; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\101\147\x72\x65\145\x6d\145\x6e\164\x20\151\x73\x20\x72\145\161\x75\x69\162\145\x64", PR__MDL__SALARY)); goto oeocukauoyosicso; oimkeqocuguqqsqk: $sogksuscggsicmac = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq, $kueeocmceokoouqa::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce)]); oeocukauoyosicso: yykqaowwsqgqysmq: return $sogksuscggsicmac; } private function mswqycukmiokeuiu(array $sogksuscggsicmac, WP_REST_Request $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii = []) : array { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if (!($ogekyekymoyuywog && $kueeocmceokoouqa && !$this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa))) { goto uckewycoogsogwiy; } $saqgcoqwmimycgim = ManipulateArray::get($ywmkwiwkosakssii, $kueeocmceokoouqa::meksegaoamowuwoq); $gimugccgakegomoq = ManipulateArray::get($ywmkwiwkosakssii, $kueeocmceokoouqa::woagckamiequeoyu); $qgciakuqggmiywuk = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::meksegaoamowuwoq => $saqgcoqwmimycgim, $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq]); $qsmaqqyoggcuyukq = $gaeqamemwmwsyukm = 0; if (!$qgciakuqggmiywuk) { goto kwiggogcgciwuwqk; } $uoomaookgsyciacm = [$ogekyekymoyuywog::iockmgiyoygcswog => $saqgcoqwmimycgim, $ogekyekymoyuywog::oguseymmyyoyaako => $qecuekqmeaiykeek, $ogekyekymoyuywog::cmiegiycgiucucgs => $gimugccgakegomoq]; $qsmaqqyoggcuyukq = $ogekyekymoyuywog->qgiewwqykwugcuoo($ogekyekymoyuywog::aioqyewkwawaqgqe, $uoomaookgsyciacm); $gaeqamemwmwsyukm = $ogekyekymoyuywog->asskucacysemeoiu($uoomaookgsyciacm); kwiggogcgciwuwqk: $sogksuscggsicmac["\151\x6e\143\157\155\x65\163\x5f\x73\165\155"] = ManipulateWoocommerce::mcgaskyiamgqmqgu($qsmaqqyoggcuyukq); $sogksuscggsicmac["\151\156\x63\x6f\155\x65\x73\x5f\x63\x6f\165\x6e\x74"] = $this->msywmyaoqmaegsuy($gaeqamemwmwsyukm); uckewycoogsogwiy: return $sogksuscggsicmac; } private function gayyweiqkuooeicq(WP_REST_Request $aqmwamyiwgeeymqa, $mkucggyaiaukqoce, ?WP_Error &$iswcokucwmiosiaq = null, bool $tsuauommsquiesmk = true) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $xssuewsokckmigqk = null; if (!($jwsqucqyaoaasykk && $kueeocmceokoouqa)) { goto qikaewekoecykeou; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); if (!($gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\147\x72\145\145\x6d\145\156\x74"))) { goto yqagomygmeoecwey; } if (!($xssuewsokckmigqk = $jwsqucqyaoaasykk->akkkoiiymmamsauc($gimugccgakegomoq))) { goto qsgqwyqaqiowkmco; } $iueymcwwscwqkiyq = $jwsqucqyaoaasykk->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $xssuewsokckmigqk, self::aqugcqsyeisayuog); $qgciakuqggmiywuk = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq, $kueeocmceokoouqa::meksegaoamowuwoq => $saqgcoqwmimycgim]); if (!$qgciakuqggmiywuk) { goto yuimwyoywaiiqacs; } if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto yoqakewookqoqacm; } if (!(self::yascuqeoeosyewwc === $kueeocmceokoouqa->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $qgciakuqggmiywuk, $kueeocmceokoouqa::ecysamcwsaweumeu))) { goto ikuuiauwouuqawuw; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\x55\x73\x65\162\x20\x72\145\x71\165\145\163\164\40\x72\x65\x6a\x65\x63\164\x65\144\x20\x62\171\x20\x61\144\155\151\156", PR__MDL__SALARY)); ikuuiauwouuqawuw: goto gswcoeiisamakwii; yoqakewookqoqacm: $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\125\x73\145\x72\x20\141\154\x72\x65\x61\x64\x79\40\x73\165\142\x6d\x69\164\x20\141\40\162\x65\161\x75\x65\x73\x74\40\x6f\156\x20\x74\150\x69\163\x20\x61\x67\x72\145\x65\x6d\x65\x6e\x74", PR__MDL__SALARY)); gswcoeiisamakwii: yuimwyoywaiiqacs: if (self::aqugcqsyeisayuog === $iueymcwwscwqkiyq) { goto mscgewkcqcoowweg; } if ($eiaskqgsuqcysisw = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, [])) { goto esaqcqqwuussiiwo; } if (!($guguqsiieswegsiy = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, []))) { goto qiiigwkqeoewsuwm; } $askmkgcmgekiqwsg = false; foreach ($guguqsiieswegsiy as $iqgguioieaoeaucu) { if (!ManipulateUser::askmkgcmgekiqwsg($iqgguioieaoeaucu, $mkucggyaiaukqoce, true)) { goto esikeyqyuikmaiek; } $askmkgcmgekiqwsg = true; esikeyqyuikmaiek: iwsmmkqaoksmocok: } emqswoaawgeyosmi: if ($askmkgcmgekiqwsg) { goto okkmcocqokkskasy; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\x41\x67\x72\145\x65\x6d\145\x6e\x74\x20\156\157\x74\40\146\x6f\162\40\x74\150\x65\x20\x75\x73\145\x72", PR__MDL__SALARY)); okkmcocqokkskasy: qiiigwkqeoewsuwm: goto ikqeeaysmqgcgawq; esaqcqqwuussiiwo: if (in_array($saqgcoqwmimycgim, $eiaskqgsuqcysisw, true)) { goto ocywegekakimmwcq; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\x41\147\162\x65\145\155\x65\156\164\x20\x6e\x6f\164\x20\x66\x6f\162\x20\x74\x68\145\40\165\163\x65\162", PR__MDL__SALARY)); ocywegekakimmwcq: ikqeeaysmqgcgawq: goto suqcsgaosywaauuu; mscgewkcqcoowweg: $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\101\x67\162\145\x65\x6d\x65\156\164\x20\151\163\x20\160\x72\151\x76\x61\164\x65", PR__MDL__SALARY)); suqcsgaosywaauuu: if (!$iswcokucwmiosiaq) { goto wwukgaquuyoissgy; } $xssuewsokckmigqk = null; wwukgaquuyoissgy: if (!($xssuewsokckmigqk && $tsuauommsquiesmk)) { goto gsygwgsiawgmqiyi; } $xssuewsokckmigqk = $jwsqucqyaoaasykk->scqakcemaqsqkema($xssuewsokckmigqk); gsygwgsiawgmqiyi: qsgqwyqaqiowkmco: yqagomygmeoecwey: qikaewekoecykeou: return $xssuewsokckmigqk; } }
