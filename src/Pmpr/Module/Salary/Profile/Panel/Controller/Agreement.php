<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a18a0b2e84             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\FormMaker\Front\Field\Field; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Model\Agreement as Model; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Setting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Agreement extends Controller { public function __construct() { $this->rest_base = "\x61\147\x72\145\x65\155\x65\156\x74"; parent::__construct(); } public function register_routes() { $this->register("\57\147\x65\x74\x2d\160\165\142\154\x69\x63\x73", [self::wwgusigoaksqmwsm => [$this, "\145\x61\151\171\x6b\x6f\155\x65\155\x6d\151\x69\x77\155\153\x69"]]); $this->register("\x2f\147\x65\164\55\141\x67\162\145\x65\155\x65\156\164", [self::wwgusigoaksqmwsm => [$this, "\171\x79\143\x69\x6d\143\x61\153\x75\x69\x79\155\163\141\x6f\x71"]]); $this->register("\x2f\147\145\x74\55\x70\162\157\x64\165\143\164\x73", [self::wwgusigoaksqmwsm => [$this, "\x61\x67\145\161\163\167\167\x6b\153\x71\171\x77\x63\153\143\157"]]); $this->register("\57\147\x65\164\x2d\x63\x61\164\145\147\x6f\162\x69\145\x73", [self::wwgusigoaksqmwsm => [$this, "\155\145\163\x61\153\153\171\143\157\x6d\x79\165\165\x77\167\155"]]); $this->register("\x2f\x67\145\164\x2d\141\x70\160\x6c\171\55\x72\x65\x71\165\x69\x72\145\163", [self::wwgusigoaksqmwsm => [$this, "\157\143\x75\x65\x67\x77\x73\x75\161\x77\x6b\x71\x6d\157\x69\x69"]]); $this->register("\x2f\x73\165\142\x6d\151\164\x2d\141\x70\160\x6c\171", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x73\x79\147\x77\143\x77\143\x75\x61\x65\167\x69\165\151\153\143"]]); $this->register("\x2f\x67\145\164\x2d\154\x69\163\x74\x2d\142\171\x2d\165\x73\145\x72", [self::wwgusigoaksqmwsm => [$this, "\x77\x63\x63\153\x61\153\x6f\167\x65\167\x69\143\163\163\161\x67"]]); $this->register("\x2f\147\x65\x74\55\151\156\x63\x6f\x6d\x65\163", [self::wwgusigoaksqmwsm => [$this, "\x75\x79\145\x63\143\x6f\x79\141\x73\163\147\x6f\x65\167\x69\167"]]); } public function eaiykomemmiiwmki(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto ueigkucgaucgeimc; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $mqamowqmoasqycgc = $yoiguusocukqeayg->yksywgmucwascgwk($mkucggyaiaukqoce, true); $ggiwyickioisqkss = []; foreach ($mqamowqmoasqycgc as $oeucsuyqysaciasy) { $ggiwyickioisqkss[] = [self::ciyoccqkiamemcmm => $oeucsuyqysaciasy, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::meisqwykgaymauka => $jwsqucqyaoaasykk::aociysagacimyqgu, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim]; egyyiccaeeiooaua: } ooeausyowguqicuo: $siykeiywomwwuoiw = $jwsqucqyaoaasykk->kqewyqqqiyiouaou([[self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::iowgsqgiaamyuswi => [$jwsqucqyaoaasykk::mmisekagkomcsowm => [self::ciyoccqkiamemcmm => $ycoeoaakqyskgykq, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim], [self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::iowgsqgiaamyuswi => $ggiwyickioisqkss]]], [self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::iowgsqgiaamyuswi => [$jwsqucqyaoaasykk::ciywsqoeiymemsys => [self::ciyoccqkiamemcmm => [self::miswkosqicsksgok, self::cemyyceucooociss], self::cwsguekoagqkaesm => self::weaykmmocuacwekg], $jwsqucqyaoaasykk::mmisekagkomcsowm => [self::euoaaiqkqcqcgeco => self::weigugswsgkycqkc, self::cwsguekoagqkaesm => self::weaykmmocuacwekg], $jwsqucqyaoaasykk::aociysagacimyqgu => [self::euoaaiqkqcqcgeco => self::weigugswsgkycqkc, self::cwsguekoagqkaesm => self::weaykmmocuacwekg]]], $jwsqucqyaoaasykk::cmiegiycgiucucgs => [self::euoaaiqkqcqcgeco => self::imiesusgyysqwyew, self::ciyoccqkiamemcmm => $kueeocmceokoouqa::woagckamiequeoyu, self::iowgsqgiaamyuswi => [$kueeocmceokoouqa::meksegaoamowuwoq => $ycoeoaakqyskgykq]], [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw, self::meisqwykgaymauka => self::ciywsqoeiymemsys, self::ciyoccqkiamemcmm => [self::miswkosqicsksgok, self::cemyyceucooociss]]]); $yoskgaaocqaweqyw = self::kumuoysauoagaiiy; $kecaaeasoukoeask = "\x72\145\161\x75\x65\x73\x74\x5f\163\x74\x61\164\x75\163"; $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [], $siykeiywomwwuoiw, [self::soquiwyuimckgiow => [$jwsqucqyaoaasykk->kumuygiiqswoyasy(true), $jwsqucqyaoaasykk->myywwqkyiwawwquy($jwsqucqyaoaasykk::qescuiwgsyuikume), $jwsqucqyaoaasykk->myywwqkyiwawwquy($jwsqucqyaoaasykk::ciywsqoeiymemsys), $kueeocmceokoouqa->kmgukcsewikeswco($kueeocmceokoouqa::ciywsqoeiymemsys, $kecaaeasoukoeask), $kueeocmceokoouqa->kmgukcsewikeswco($kueeocmceokoouqa::CREATED_AT, $yoskgaaocqaweqyw)], self::wosqwewmqmyweqea => false]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($oammesyieqmwuwyi = $gkyciwoiiisgywcs->get($keccaugmemegoimu, self::qwumqqyuasyskkkc, []))) { goto kqgcyoscsusgoaqi; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $sgcwoeksqaiayucu = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::ciywsqoeiymemsys); $wciwsoomyoeueocu = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $kecaaeasoukoeask); if ($sgcwoeksqaiayucu !== $jwsqucqyaoaasykk::miswkosqicsksgok) { goto ugqaaewwmkocwwgy; } if (!$wciwsoomyoeueocu) { goto igooksugieceoege; } $skikmocgwukomwyq = $kueeocmceokoouqa->gascwoasakiqyumc($wciwsoomyoeueocu); goto omqiayeucoioqoao; igooksugieceoege: $wciwsoomyoeueocu = self::owiykagmoieoggya; $skikmocgwukomwyq = __("\122\x65\161\x75\x65\163\x74\x61\x62\154\x65", PR__MDL__SALARY); omqiayeucoioqoao: goto wgewmqieuamsoayy; ugqaaewwmkocwwgy: $wciwsoomyoeueocu = self::oooiesaeqsouwieg; $skikmocgwukomwyq = __("\x55\x6e\x72\145\x71\x75\145\163\164\x61\x62\x6c\x65", PR__MDL__SALARY); wgewmqieuamsoayy: $muocgugcqiewywag = [self::kumuoysauoagaiiy => $kueeocmceokoouqa->ooeucgsymeocguuu($yoskgaaocqaweqyw, $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $yoskgaaocqaweqyw), $igqsaukqcqscimok), self::ciywsqoeiymemsys => $wciwsoomyoeueocu, self::ciywsqoeiymemsys . self::icmokuskwoskgace => $skikmocgwukomwyq]; $oammesyieqmwuwyi[$momcykaoccoymeig] = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, $muocgugcqiewywag); cewmoqyysgsmuiya: } scisgsyemmsekgos: kqgcyoscsusgoaqi: $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; goto sggawugoykqcmsug; ueigkucgaucgeimc: $keccaugmemegoimu = $mkucggyaiaukqoce; sggawugoykqcmsug: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function yycimcakuiymsaoq(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto eogwckcymuugikuy; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce)) { goto mwsmsguqqkcwiiuk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\x6f\x75\162\x20\x72\x65\x71\165\x65\x73\x74\145\x64\x20\x61\147\x72\x65\x65\x6d\x65\x6e\164\x20\156\157\x74\40\x66\157\165\156\144", PR__MDL__SALARY), 404); goto eeauyscekuckoues; mwsmsguqqkcwiiuk: $yygmoeguaqyumuui = [$jwsqucqyaoaasykk::kkeogqiyysoyuemk => IconInterface::okgwkgguoawyiecg, $jwsqucqyaoaasykk::siwsmgcqgcqmaeui => IconInterface::cyeyqyiaoagiucws, $jwsqucqyaoaasykk::weumemyqgykuwqok => IconInterface::kacscoqyuismekww, $jwsqucqyaoaasykk::yykcmqogieykgkus => IconInterface::gqusoyqaekkgqmas]; $icwicymcioeyeyek = []; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $eqgoocgaqwqcimie = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $uusmaiomayssaecw); if (!$eqgoocgaqwqcimie) { goto owmuceyswmgueasi; } $aaqqkgyougeiueyq = $jwsqucqyaoaasykk->oyeskqayoscwciem()->uqeoyqiwywwmsiew($uusmaiomayssaecw); if (!$aaqqkgyougeiueyq) { goto qmuwoecuacmkwgem; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [self::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, self::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; qmuwoecuacmkwgem: owmuceyswmgueasi: wakmayaoqoskekqy: } wkeuuycukmuqiaom: $keccaugmemegoimu = [self::uiwqcumqkgikqyue => $icwicymcioeyeyek, $jwsqucqyaoaasykk::gouqcwikiiygyasc => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk), $jwsqucqyaoaasykk::qescuiwgsyuikume => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::qescuiwgsyuikume), $jwsqucqyaoaasykk::ucoiewcoucauqwko => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::ucoiewcoucauqwko), $jwsqucqyaoaasykk::eqkeooqcsscoggia => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::eqkeooqcsscoggia)]; eeauyscekuckoues: goto msemumccgceyugmg; eogwckcymuugikuy: $keccaugmemegoimu = $mkucggyaiaukqoce; msemumccgceyugmg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ageqswwkkqywckco(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto wcugqegqsuuuwqao; } if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu, false)) { goto qoqskyuuwueqkquk; } if ($keccaugmemegoimu) { goto wagqgeqymeqoeuyi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\101\147\x72\x65\x65\155\x65\x6e\164\x20\151\x73\x20\x72\x65\x71\x75\151\x72\x65", PR__MDL__SALARY), 404); wagqgeqymeqoeuyi: goto iwsuawwqomaowuii; qoqskyuuwueqkquk: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $oksqskmgoqiqciis = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::kmqmeaywmyiqqkqw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oksqskmgoqiqciis, [$this, "\x6b\x75\x77\x6f\x65\171\153\x77\x77\151\x67\157\145\x61\157\x71"], [self::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), "\x61\x67\162\x65\x65\155\x65\x6e\164" => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk)]); iwsuawwqomaowuii: goto asiqwuoswmigcaki; wcugqegqsuuuwqao: $keccaugmemegoimu = $mkucggyaiaukqoce; asiqwuoswmigcaki: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mesakkycomyuuwwm(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto emmsycooskoqmgeg; } if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu, false)) { goto mqicocmqegwukkwg; } if ($keccaugmemegoimu) { goto ciykoyeioqgyaeqo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\101\147\x72\145\145\155\x65\156\x74\40\151\x73\40\x72\x65\161\165\151\162\145", PR__MDL__SALARY), 400); ciykoyeioqgyaeqo: goto qgeugwymkkiacwoc; mqicocmqegwukkwg: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $eyscsimwcyaqakqg = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::guksqgkoswygwycw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $eyscsimwcyaqakqg, [$this, "\141\167\147\143\147\141\x79\171\157\x71\x69\153\x6d\155\x71\157"], [self::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), "\x61\x67\162\145\145\155\145\156\164" => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk)]); qgeugwymkkiacwoc: goto ouamogymawucwswu; emmsycooskoqmgeg: $keccaugmemegoimu = $mkucggyaiaukqoce; ouamogymawucwswu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sygwcwcuaewiuikc(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto aomysykcgikegiau; } if ($this->qsyweymowowcmsww($mkucggyaiaukqoce)["\141\160\x70\154\x69\141\x62\x6c\145"]) { goto iwekmyyccgiyuecc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\157\165\162\40\166\x65\162\x69\146\151\141\x62\x6c\x65\x20\x66\151\x65\x6c\144\163\x20\151\163\40\156\157\164\x20\x76\x65\162\151\146\x69\x65\x64\x2c\x20\x63\141\x6e\x27\164\40\x73\165\x62\155\x69\x74\x20\x79\157\x75\162\40\x72\x65\x71\165\x65\163\164", PR__MDL__SALARY)); goto ikqqskkqqwmwssoo; iwekmyyccgiyuecc: if ($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\143\141\156\x5f\141\x70\x70\x6c\x79", false)) { goto ousiuuwgwkiyikyq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\120\154\x65\141\163\145\40\141\x63\143\145\160\164\x20\164\145\162\155\x73\x20\146\151\x72\x73\164\x20\157\162\40\x6d\141\153\x65\40\x73\165\162\145\40\171\x6f\x75\x72\40\166\145\162\151\x66\x79\x20\x72\x65\x71\x75\x69\162\x65\x20\x66\x69\x65\x6c\x64\163\40\x69\163\x20\166\145\162\151\x66\151\x65\x64", PR__MDL__SALARY), 400); goto ogsaaqsaogcqiouy; ousiuuwgwkiyikyq: if ($gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\147\162\145\145\155\x65\156\x74")) { goto miweggwqeiaeweia; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x61\x67\162\145\x65\155\145\156\164\40\151\x64\x20\x69\163\x20\141\x20\162\x65\161\165\x69\x72\145\40\x66\151\145\x6c\x64", PR__MDL__SALARY), 400); goto kqqiegkuqagcqsya; miweggwqeiaeweia: $kueeocmceokoouqa = Request::symcgieuakksimmu(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); if (!$kueeocmceokoouqa->qumqowkwyaceeqwu([$kueeocmceokoouqa::meksegaoamowuwoq => $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce, true), $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq])) { goto guykyqecgswcsmws; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\171\x6f\165\x20\x61\x6c\x72\x65\x61\x64\x79\x20\x73\165\142\155\151\x74\x20\141\40\x72\145\161\165\145\163\x74\40\157\x6e\x20\x74\x68\151\163\40\141\x67\x72\x65\145\155\145\x6e\164", PR__MDL__SALARY)); goto kkumywowcoycymeo; guykyqecgswcsmws: if ($this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu)) { goto samwkqgwouggsguc; } if ($keccaugmemegoimu) { goto oomguqikqokqwgku; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\162\145\x71\165\145\163\164\x65\144\x20\x61\147\x72\145\145\155\x65\156\x74\40\151\163\40\156\x6f\x74\x20\166\141\x6c\x69\x64\40\157\x72\x20\x6e\157\x74\x20\145\x78\x69\163\x74\x2c\x20\160\154\x65\x61\x73\x65\40\x72\145\146\162\x65\x73\150\x20\x70\141\147\x65\x20\141\156\144\x20\x74\162\171\x20\141\x67\141\151\x6e", PR__MDL__SALARY)); oomguqikqokqwgku: goto wyuemgggaqogsmsq; samwkqgwouggsguc: $sogksuscggsicmac = $kueeocmceokoouqa->gscuuyuyauokoyuo([$kueeocmceokoouqa::meksegaoamowuwoq => $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce), $kueeocmceokoouqa::ciywsqoeiymemsys => $kueeocmceokoouqa::ecysamcwsaweumeu, $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq], false, $mkucggyaiaukqoce); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto mugqyyeayeyggqqk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\x6d\145\164\x68\x69\x6e\147\40\167\162\x6f\156\x67\x20\157\156\40\x73\165\142\155\x69\164\x74\151\x6e\147\x20\171\x6f\x75\162\40\x72\145\x71\165\x65\163\164\x2c\x20\160\154\145\141\163\145\x20\164\162\x79\x20\141\147\141\151\x6e\40\x61\x66\164\145\x72\40\146\x65\167\40\155\151\156\x75\x74\x65\163", PR__MDL__SALARY), 400); goto acsqgiuageaasiyy; mugqyyeayeyggqqk: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x59\157\x75\x20\162\145\x71\x75\x65\163\x74\40\x73\x75\142\x6d\x69\x74\x74\x65\144\40\163\165\x63\x63\145\x73\163\146\165\154\154\171", PR__MDL__SALARY)); acsqgiuageaasiyy: wyuemgggaqogsmsq: kkumywowcoycymeo: kqqiegkuqagcqsya: ogsaaqsaogcqiouy: ikqqskkqqwmwssoo: goto cwwmimggaaecmucw; aomysykcgikegiau: $keccaugmemegoimu = $mkucggyaiaukqoce; cwwmimggaaecmucw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto mqkmcysgoiaouiwm; } $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($wqqmoakyckcwwkua = $this->oausasacgwqmkycw($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu)) { goto ogqmesokykywseys; } if (!$keccaugmemegoimu) { goto ykomgumacooyomsk; } goto awoaooyoeoyeeqee; ogqmesokykywseys: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [$ogekyekymoyuywog::cmiegiycgiucucgs => $kueeocmceokoouqa->keeuqgyooycqoygw($wqqmoakyckcwwkua)]); goto awoaooyoeoyeeqee; ykomgumacooyomsk: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\111\x74\47\163\x20\x73\x65\x65\155\163\40\x79\157\165\x20\144\x6f\156\164\40\163\165\x62\155\151\164\40\141\x6e\171\x20\x72\x65\x71\x75\x65\163\x74\x20\157\x6e\40\x74\150\145\x20\141\x67\162\145\145\x6d\145\156\164", PR__MDL__SALARY), 400); awoaooyoeoyeeqee: goto kosaqwikueyksqmw; mqkmcysgoiaouiwm: $keccaugmemegoimu = $mkucggyaiaukqoce; kosaqwikueyksqmw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wcckakowewicssqg(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto iikiiioqiyegyaak; } $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Model::symcgieuakksimmu(); $siykeiywomwwuoiw = $kueeocmceokoouqa->kqewyqqqiyiouaou([self::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), self::ciywsqoeiymemsys => self::cwiummueqsucqayc, $kueeocmceokoouqa::woagckamiequeoyu => [self::euoaaiqkqcqcgeco => self::imiesusgyysqwyew]]); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $kueeocmceokoouqa, [], $siykeiywomwwuoiw, [self::soquiwyuimckgiow => [$mssuumukiiaqmcka->kumuygiiqswoyasy(true), $mssuumukiiaqmcka->myywwqkyiwawwquy(self::qescuiwgsyuikume), $mssuumukiiaqmcka->myywwqkyiwawwquy($mssuumukiiaqmcka::kmqmeaywmyiqqkqw), $mssuumukiiaqmcka->myywwqkyiwawwquy($mssuumukiiaqmcka::guksqgkoswygwycw)], self::wosqwewmqmyweqea => false]); if (!($oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($keccaugmemegoimu, self::qwumqqyuasyskkkc, []))) { goto gicyayswqyuoekcq; } $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $mssuumukiiaqmcka->cwgkcyyaymmsomqa($oammesyieqmwuwyi); gicyayswqyuoekcq: goto uiosisocuwokwkie; iikiiioqiyegyaak: $keccaugmemegoimu = $mkucggyaiaukqoce; uiosisocuwokwkie: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ocuegwsuqwkqmoii(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto cuumeogeomowqisc; } $keccaugmemegoimu = $this->qsyweymowowcmsww($mkucggyaiaukqoce); goto gcckqucukawcasgk; cuumeogeomowqisc: $keccaugmemegoimu = $mkucggyaiaukqoce; gcckqucukawcasgk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kuwoeykwwigoeaoq($aqmwamyiwgeeymqa, $product, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); if (!($product = $usmsssmiougymckk->get($product))) { goto eekcoeikaeaaeyii; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $meqocwsecsywiiqs = $jwsqucqyaoaasykk->geyuyukmwaoksywa($usmsssmiougymckk->ycqquoiyyuesegsy($product), $usmsssmiougymckk->qcgakseyaikigqco($product), [self::mgsccwumkcawaqcy => "\137\142\154\x61\156\x6b"]); $sogksuscggsicmac = [self::qescuiwgsyuikume => $meqocwsecsywiiqs]; if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto csammceowmqwaamq; } $qecuekqmeaiykeek = $usmsssmiougymckk->mmoaikqueyiwcesm($product); $qecuekqmeaiykeek[] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); goto ocaguquugeamqckq; csammceowmqwaamq: $aumscagymwyyicag = $usmsssmiougymckk->iimgkucsckeosmmk($product); if ($aumscagymwyyicag) { goto qmkaeeomgkwggoyo; } $aumscagymwyyicag = __("\x57\151\x74\150\x6f\x75\x74\x20\120\162\x69\143\x65", PR__MDL__SALARY); qmkaeeomgkwggoyo: $sogksuscggsicmac["\160\162\151\x63\145"] = $aumscagymwyyicag; ocaguquugeamqckq: eekcoeikaeaaeyii: return $sogksuscggsicmac; } public function awgcgayyoqikmmqo($aqmwamyiwgeeymqa, $guwumyyyakswawas, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if (!($guwumyyyakswawas = $aoskwucuugeuaeus->get($guwumyyyakswawas))) { goto uaukmuiwskcemcsw; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $oksqskmgoqiqciis = $aoskwucuugeuaeus->iyssgoiwgwygeacg($guwumyyyakswawas, self::oguseymmyyoyaako, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $okcscwesammossuq = []; $qecuekqmeaiykeek = []; foreach ($oksqskmgoqiqciis as $product) { if (!($product = $usmsssmiougymckk->get($product))) { goto ugqwuugsweqgmywk; } $okcscwesammossuq[] = $usmsssmiougymckk->mmoaikqueyiwcesm($product); $qecuekqmeaiykeek[] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); ugqwuugsweqgmywk: gmwykkouysyaqwqm: } cogywoqcqummsyus: $qecuekqmeaiykeek = array_merge([], ...$okcscwesammossuq); $meqocwsecsywiiqs = $jwsqucqyaoaasykk->geyuyukmwaoksywa($aoskwucuugeuaeus->qmgcisuuikgmqcsu($guwumyyyakswawas), $aoskwucuugeuaeus->qcgakseyaikigqco($guwumyyyakswawas), [self::mgsccwumkcawaqcy => "\137\142\x6c\141\156\153"]); $sogksuscggsicmac = [self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::kmqmeaywmyiqqkqw => $jwsqucqyaoaasykk->msywmyaoqmaegsuy(count($oksqskmgoqiqciis))]; $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); uaukmuiwskcemcsw: return $sogksuscggsicmac; } private function okqaggqwqcaieqoc($aqmwamyiwgeeymqa) { return $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\x70\160\x6c\171", false); } private function qsyweymowowcmsww($mkucggyaiaukqoce) : array { $sogksuscggsicmac = []; $wsoeeiiqguoauciy = true; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ouwoukcecmicoeos = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::eieeagimaskkekew); if (!$ouwoukcecmicoeos) { goto kqswcsysqawkcgye; } $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\x70\x61\156\145\154\137\165\163\145\x72\137\x67\x65\164\137\146\151\x65\x6c\x64\x73", [], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::ackcaikowcokggsc => $ouwoukcecmicoeos, self::wacsysugayaeayag => true]); $ocqaciyqwmcuuuue = [self::sgoswgskyiiwkyuo => __("\x50\x65\156\x64\x69\156\147", PR__MDL__SALARY), self::uyicaiummcooqwqk => __("\x56\x65\x72\x69\x66\x69\145\144", PR__MDL__SALARY), self::iiiimowywicukqke => __("\x55\156\143\x6f\155\160\x6c\145\x74\145\x64", PR__MDL__SALARY)]; if (!$ikgwqyuyckaewsow) { goto ewscugeuicukkycc; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto eeyyskqsmquyquqw; } $iueymcwwscwqkiyq = self::iiiimowywicukqke; if ($aiowsaccomcoikus->iokkueaqiswaewyq()) { goto uegouoiuyoqkcscg; } if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { goto mggeqkcksyaymcsa; } $iueymcwwscwqkiyq = self::uyicaiummcooqwqk; mggeqkcksyaymcsa: goto cgyakcqgugqgkqiw; uegouoiuyoqkcscg: if ($aiowsaccomcoikus->wowamsaiqwikqoqa()) { goto cscusseysqygsoiy; } if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { goto uaqackioaiqwcocy; } $iueymcwwscwqkiyq = self::sgoswgskyiiwkyuo; uaqackioaiqwcocy: goto isgwkwacoyimiauk; cscusseysqygsoiy: $iueymcwwscwqkiyq = self::uyicaiummcooqwqk; isgwkwacoyimiauk: cgyakcqgugqgkqiw: $kqwygogeauwwyoca = self::uyicaiummcooqwqk === $iueymcwwscwqkiyq; $wsoeeiiqguoauciy = $wsoeeiiqguoauciy && $kqwygogeauwwyoca; $sogksuscggsicmac[$aiowsaccomcoikus->mwikyscisascoeea()] = [self::qgqyauaqwqmqseim => $kqwygogeauwwyoca ? IconInterface::ggokgkyiweugsokc : IconInterface::ucomcyskmkiqysee, self::qescuiwgsyuikume => $aiowsaccomcoikus->uikgwcuascgeissw(), self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uyicaiummcooqwqk => $kqwygogeauwwyoca, self::iuqumwggccmcuyem => $kqwygogeauwwyoca ? 2 : (self::sgoswgskyiiwkyuo === $iueymcwwscwqkiyq ? 1 : 0), self::ciywsqoeiymemsys . self::icmokuskwoskgace => $gkyciwoiiisgywcs->get($ocqaciyqwmcuuuue, $iueymcwwscwqkiyq)]; eeyyskqsmquyquqw: mkwkkmkgiqiamacc: } sockeswygwcskeuq: ewscugeuicukkycc: kqswcsysqawkcgye: return ["\x61\x70\160\154\x69\x61\142\154\x65" => $wsoeeiiqguoauciy, self::ymckmcsiymwqucoq => $gkyciwoiiisgywcs->yaeiiwwyckwugsem($sogksuscggsicmac)]; } private function oausasacgwqmkycw(WP_REST_Request $aqmwamyiwgeeymqa, $mkucggyaiaukqoce, ?WP_Error &$iswcokucwmiosiaq = null) { $sogksuscggsicmac = null; $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\147\x72\145\145\155\145\156\164")) { goto wusciwkkckmqigms; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\101\147\x72\x65\145\x6d\x65\156\x74\40\151\x73\x20\x72\x65\x71\165\151\x72\x65\144", PR__MDL__SALARY)); goto iiiccouaaqsyikae; wusciwkkckmqigms: $sogksuscggsicmac = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq, $kueeocmceokoouqa::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce)]); iiiccouaaqsyikae: return $sogksuscggsicmac; } private function mswqycukmiokeuiu(array $sogksuscggsicmac, WP_REST_Request $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, array $ywmkwiwkosakssii = []) : array { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto mwysseaekcsiesmm; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ycoeoaakqyskgykq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, $kueeocmceokoouqa::meksegaoamowuwoq); $gimugccgakegomoq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, $kueeocmceokoouqa::woagckamiequeoyu); $qgciakuqggmiywuk = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::meksegaoamowuwoq => $ycoeoaakqyskgykq, $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq]); $qsmaqqyoggcuyukq = $gaeqamemwmwsyukm = 0; if (!$qgciakuqggmiywuk) { goto ukkcmocamwgiqayu; } $uoomaookgsyciacm = [$ogekyekymoyuywog::iockmgiyoygcswog => $ycoeoaakqyskgykq, $ogekyekymoyuywog::oguseymmyyoyaako => $qecuekqmeaiykeek, $ogekyekymoyuywog::cmiegiycgiucucgs => $gimugccgakegomoq]; $qsmaqqyoggcuyukq = $ogekyekymoyuywog->qgiewwqykwugcuoo($ogekyekymoyuywog::aioqyewkwawaqgqe, $uoomaookgsyciacm); $gaeqamemwmwsyukm = $ogekyekymoyuywog->asskucacysemeoiu($uoomaookgsyciacm); ukkcmocamwgiqayu: $sogksuscggsicmac["\151\156\x63\157\x6d\x65\x73\x5f\x73\x75\x6d"] = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($qsmaqqyoggcuyukq); $sogksuscggsicmac["\x69\156\x63\157\x6d\145\163\x5f\143\x6f\165\156\x74"] = $this->msywmyaoqmaegsuy($gaeqamemwmwsyukm); mwysseaekcsiesmm: return $sogksuscggsicmac; } private function gayyweiqkuooeicq(WP_REST_Request $aqmwamyiwgeeymqa, $mkucggyaiaukqoce, ?WP_Error &$iswcokucwmiosiaq = null, bool $tsuauommsquiesmk = true) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $xssuewsokckmigqk = null; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); if (!($gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\147\x72\x65\145\x6d\145\x6e\164"))) { goto oyeyomcgkmgymogq; } if (!($xssuewsokckmigqk = $jwsqucqyaoaasykk->akkkoiiymmamsauc($gimugccgakegomoq))) { goto mscyggqcesgqqksu; } $iueymcwwscwqkiyq = $jwsqucqyaoaasykk->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $xssuewsokckmigqk, self::aqugcqsyeisayuog); $qgciakuqggmiywuk = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq, $kueeocmceokoouqa::meksegaoamowuwoq => $ycoeoaakqyskgykq]); if (!$qgciakuqggmiywuk) { goto gommacygsykyussk; } if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto gygwewcqsmwqismo; } if (!(self::yascuqeoeosyewwc === $kueeocmceokoouqa->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $qgciakuqggmiywuk, $kueeocmceokoouqa::ecysamcwsaweumeu))) { goto amgsueumgaguceaa; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\x55\163\x65\162\40\162\x65\161\x75\x65\x73\164\x20\162\x65\x6a\145\x63\164\145\144\x20\x62\x79\x20\x61\x64\155\x69\x6e", PR__MDL__SALARY)); amgsueumgaguceaa: goto uougwgeyiokewkkm; gygwewcqsmwqismo: $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\x55\163\x65\162\x20\141\154\x72\x65\141\144\x79\40\163\x75\x62\155\151\164\40\141\x20\162\145\161\x75\x65\x73\164\x20\157\x6e\x20\164\x68\x69\163\x20\x61\x67\162\145\145\155\145\156\164", PR__MDL__SALARY)); uougwgeyiokewkkm: gommacygsykyussk: if (self::aqugcqsyeisayuog === $iueymcwwscwqkiyq) { goto sioekkmekwygemyc; } if ($eiaskqgsuqcysisw = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, [])) { goto uqokiksoqcwwqgio; } if (!($guguqsiieswegsiy = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, []))) { goto kocqqoyymosmuksu; } $askmkgcmgekiqwsg = false; foreach ($guguqsiieswegsiy as $iqgguioieaoeaucu) { if (!$yoiguusocukqeayg->askmkgcmgekiqwsg($iqgguioieaoeaucu, $mkucggyaiaukqoce, true)) { goto uimeeckqksqeekqq; } $askmkgcmgekiqwsg = true; uimeeckqksqeekqq: uykousayyomcaeaa: } ucqmumuygcywwqma: if ($askmkgcmgekiqwsg) { goto iuuuususuuuaieem; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\101\147\x72\145\145\x6d\x65\x6e\x74\40\x6e\157\x74\40\146\157\x72\x20\164\x68\x65\x20\165\163\x65\162", PR__MDL__SALARY)); iuuuususuuuaieem: kocqqoyymosmuksu: goto qukocuwgakemmyga; uqokiksoqcwwqgio: if (in_array($ycoeoaakqyskgykq, $eiaskqgsuqcysisw, true)) { goto ukqocwewouckikso; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\101\x67\162\145\x65\x6d\x65\x6e\x74\x20\156\x6f\x74\x20\x66\x6f\x72\40\164\150\145\x20\x75\163\x65\162", PR__MDL__SALARY)); ukqocwewouckikso: qukocuwgakemmyga: goto yiowgigkkwsoqcci; sioekkmekwygemyc: $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\x41\147\x72\x65\145\x6d\145\156\164\40\x69\163\x20\x70\x72\151\166\141\164\145", PR__MDL__SALARY)); yiowgigkkwsoqcci: if (!$iswcokucwmiosiaq) { goto ieqesiiageaauiuw; } $xssuewsokckmigqk = null; ieqesiiageaauiuw: if (!($xssuewsokckmigqk && $tsuauommsquiesmk)) { goto gamqcwuwkikwqoay; } $xssuewsokckmigqk = $jwsqucqyaoaasykk->scqakcemaqsqkema($xssuewsokckmigqk); gamqcwuwkikwqoay: mscyggqcesgqqksu: oyeyomcgkmgymogq: return $xssuewsokckmigqk; } }
