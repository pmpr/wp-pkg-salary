<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec9b93467             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Model\Agreement as Model; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Setting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Agreement extends Controller { public function __construct() { $this->rest_base = "\141\147\x72\x65\x65\155\x65\x6e\164"; parent::__construct(); } public function register_routes() { $this->register("\57\147\x65\x74\x2d\160\165\142\x6c\151\143\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x65\141\151\x79\153\157\x6d\x65\155\155\151\151\167\155\153\151"]]); $this->register("\57\147\x65\164\x2d\x61\x67\x72\x65\145\155\145\x6e\x74", [Constants::wwgusigoaksqmwsm => [$this, "\x79\171\x63\151\155\x63\141\x6b\x75\151\x79\x6d\x73\141\157\x71"]]); $this->register("\x2f\147\145\x74\x2d\160\162\x6f\x64\x75\x63\164\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x61\x67\145\x71\163\167\167\153\x6b\161\x79\x77\143\153\143\x6f"]]); $this->register("\x2f\147\x65\x74\x2d\143\141\164\x65\147\x6f\162\x69\145\163", [Constants::wwgusigoaksqmwsm => [$this, "\x6d\145\x73\141\x6b\153\171\143\x6f\155\x79\x75\165\167\x77\x6d"]]); $this->register("\x2f\147\x65\164\x2d\x61\160\160\x6c\171\55\x72\145\x71\x75\151\x72\145\x73", [Constants::wwgusigoaksqmwsm => [$this, "\157\143\x75\145\x67\x77\163\x75\161\x77\153\161\155\x6f\151\151"]]); $this->register("\x2f\163\x75\x62\155\x69\x74\x2d\x61\160\x70\154\171", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x73\x79\x67\x77\x63\167\x63\x75\x61\145\167\151\x75\151\153\143"]]); $this->register("\57\147\145\164\55\x6c\x69\163\x74\55\142\171\55\x75\163\145\x72", [Constants::wwgusigoaksqmwsm => [$this, "\167\x63\143\x6b\141\x6b\157\x77\145\167\151\x63\163\x73\161\147"]]); $this->register("\x2f\147\145\164\x2d\x69\x6e\x63\x6f\x6d\x65\163", [Constants::wwgusigoaksqmwsm => [$this, "\165\171\145\x63\143\x6f\171\141\x73\163\x67\x6f\145\x77\x69\167"]]); } public function eaiykomemmiiwmki(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto yamyagayiooyeekg; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $mqamowqmoasqycgc = $yoiguusocukqeayg->yksywgmucwascgwk($mkucggyaiaukqoce, true); $ggiwyickioisqkss = []; foreach ($mqamowqmoasqycgc as $oeucsuyqysaciasy) { $ggiwyickioisqkss[] = [Constants::ciyoccqkiamemcmm => $oeucsuyqysaciasy, Constants::euoaaiqkqcqcgeco => Constants::wuwqeigceueyqmsc, Constants::meisqwykgaymauka => $jwsqucqyaoaasykk::aociysagacimyqgu, Constants::cwsguekoagqkaesm => Constants::ieiyckasqmcyekim]; goqmywuiicciasyk: } oyiuyywyeoskckuw: $siykeiywomwwuoiw = $jwsqucqyaoaasykk->kqewyqqqiyiouaou([[Constants::euoaaiqkqcqcgeco => Constants::qmesccgukkkogskw, Constants::cwsguekoagqkaesm => Constants::ieiyckasqmcyekim, Constants::iowgsqgiaamyuswi => [$jwsqucqyaoaasykk::mmisekagkomcsowm => [Constants::ciyoccqkiamemcmm => $ycoeoaakqyskgykq, Constants::euoaaiqkqcqcgeco => Constants::wuwqeigceueyqmsc, Constants::cwsguekoagqkaesm => Constants::ieiyckasqmcyekim], [Constants::euoaaiqkqcqcgeco => Constants::qmesccgukkkogskw, Constants::cwsguekoagqkaesm => Constants::ieiyckasqmcyekim, Constants::iowgsqgiaamyuswi => $ggiwyickioisqkss]]], [Constants::euoaaiqkqcqcgeco => Constants::qmesccgukkkogskw, Constants::cwsguekoagqkaesm => Constants::ieiyckasqmcyekim, Constants::iowgsqgiaamyuswi => [Constants::ciywsqoeiymemsys => [Constants::ciyoccqkiamemcmm => [Constants::miswkosqicsksgok, Constants::cemyyceucooociss], Constants::cwsguekoagqkaesm => Constants::weaykmmocuacwekg], $jwsqucqyaoaasykk::mmisekagkomcsowm => [Constants::euoaaiqkqcqcgeco => Constants::weigugswsgkycqkc, Constants::cwsguekoagqkaesm => Constants::weaykmmocuacwekg], $jwsqucqyaoaasykk::aociysagacimyqgu => [Constants::euoaaiqkqcqcgeco => Constants::weigugswsgkycqkc, Constants::cwsguekoagqkaesm => Constants::weaykmmocuacwekg]]], $jwsqucqyaoaasykk::cmiegiycgiucucgs => [Constants::euoaaiqkqcqcgeco => Constants::imiesusgyysqwyew, Constants::ciyoccqkiamemcmm => $kueeocmceokoouqa::woagckamiequeoyu, Constants::iowgsqgiaamyuswi => [Constants::meksegaoamowuwoq => $ycoeoaakqyskgykq]], [Constants::euoaaiqkqcqcgeco => Constants::cqcimoqckgmaacyw, Constants::meisqwykgaymauka => Constants::ciywsqoeiymemsys, Constants::ciyoccqkiamemcmm => [Constants::miswkosqicsksgok, Constants::cemyyceucooociss]]]); $yoskgaaocqaweqyw = Constants::kumuoysauoagaiiy; $kecaaeasoukoeask = "\x72\145\161\x75\x65\x73\164\137\x73\164\141\164\165\x73"; $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [], $siykeiywomwwuoiw, [Constants::soquiwyuimckgiow => [$jwsqucqyaoaasykk->kumuygiiqswoyasy(true), $jwsqucqyaoaasykk->myywwqkyiwawwquy(Constants::qescuiwgsyuikume), $jwsqucqyaoaasykk->myywwqkyiwawwquy(Constants::ciywsqoeiymemsys), $kueeocmceokoouqa->kmgukcsewikeswco(Constants::ciywsqoeiymemsys, $kecaaeasoukoeask), $kueeocmceokoouqa->kmgukcsewikeswco($kueeocmceokoouqa::CREATED_AT, $yoskgaaocqaweqyw)], Constants::wosqwewmqmyweqea => false]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($oammesyieqmwuwyi = $gkyciwoiiisgywcs->get($keccaugmemegoimu, Constants::qwumqqyuasyskkkc, []))) { goto iksewmsaugayqaqq; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $sgcwoeksqaiayucu = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ciywsqoeiymemsys); $wciwsoomyoeueocu = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $kecaaeasoukoeask); if ($sgcwoeksqaiayucu !== Constants::miswkosqicsksgok) { goto quaqmuusokiyqgqe; } if (!$wciwsoomyoeueocu) { goto easqmyamcmeesgya; } $skikmocgwukomwyq = $kueeocmceokoouqa->gascwoasakiqyumc($wciwsoomyoeueocu); goto yuqgwwmqwqiuwmaw; easqmyamcmeesgya: $wciwsoomyoeueocu = Constants::owiykagmoieoggya; $skikmocgwukomwyq = __("\x52\145\161\165\x65\163\x74\x61\x62\154\145", PR__MDL__SALARY); yuqgwwmqwqiuwmaw: goto smiemmcqqukyguuu; quaqmuusokiyqgqe: $wciwsoomyoeueocu = Constants::oooiesaeqsouwieg; $skikmocgwukomwyq = __("\x55\156\162\x65\x71\165\x65\x73\x74\141\x62\154\145", PR__MDL__SALARY); smiemmcqqukyguuu: $muocgugcqiewywag = [Constants::kumuoysauoagaiiy => $kueeocmceokoouqa->ooeucgsymeocguuu($yoskgaaocqaweqyw, $gkyciwoiiisgywcs->get($igqsaukqcqscimok, $yoskgaaocqaweqyw), $igqsaukqcqscimok), Constants::ciywsqoeiymemsys => $wciwsoomyoeueocu, Constants::ciywsqoeiymemsys . Constants::icmokuskwoskgace => $skikmocgwukomwyq]; $oammesyieqmwuwyi[$momcykaoccoymeig] = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, $muocgugcqiewywag); qkuiwoqksgayqqmg: } siecswkggyikqkga: iksewmsaugayqaqq: $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; goto yoagcooekomeokwg; yamyagayiooyeekg: $keccaugmemegoimu = $mkucggyaiaukqoce; yoagcooekomeokwg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function yycimcakuiymsaoq(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto quyogmwugsyoaaiu; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce)) { goto sgiwoiscywusgmmm; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\131\157\165\162\x20\x72\145\x71\165\145\x73\x74\145\144\40\141\147\162\145\145\x6d\145\x6e\164\x20\x6e\x6f\164\x20\x66\x6f\165\156\x64", PR__MDL__SALARY), 404); goto skuqigsokaguscas; sgiwoiscywusgmmm: $yygmoeguaqyumuui = [Constants::kkeogqiyysoyuemk => IconInterface::okgwkgguoawyiecg, $jwsqucqyaoaasykk::siwsmgcqgcqmaeui => IconInterface::cyeyqyiaoagiucws, $jwsqucqyaoaasykk::weumemyqgykuwqok => IconInterface::kacscoqyuismekww, $jwsqucqyaoaasykk::yykcmqogieykgkus => IconInterface::gqusoyqaekkgqmas]; $icwicymcioeyeyek = []; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $eqgoocgaqwqcimie = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $uusmaiomayssaecw); if (!$eqgoocgaqwqcimie) { goto qmoocweoekqueuyy; } $aaqqkgyougeiueyq = $jwsqucqyaoaasykk->oyeskqayoscwciem()->uqeoyqiwywwmsiew($uusmaiomayssaecw); if (!$aaqqkgyougeiueyq) { goto mqiiqkuaoekeuswo; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [Constants::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; mqiiqkuaoekeuswo: qmoocweoekqueuyy: ecouwqosmoyyqmkw: } eckcqesiokgwkkiw: $keccaugmemegoimu = [Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek, Constants::gouqcwikiiygyasc => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk), Constants::qescuiwgsyuikume => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, Constants::qescuiwgsyuikume), Constants::ucoiewcoucauqwko => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, Constants::ucoiewcoucauqwko), Constants::eqkeooqcsscoggia => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, Constants::eqkeooqcsscoggia)]; skuqigsokaguscas: goto mmgmqogugasaqkgg; quyogmwugsyoaaiu: $keccaugmemegoimu = $mkucggyaiaukqoce; mmgmqogugasaqkgg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ageqswwkkqywckco(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto eoyiumycaigawmmc; } if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu, false)) { goto smcguieygyqcaqgs; } if ($keccaugmemegoimu) { goto wmumywgyyeagqoeq; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\x67\162\x65\145\155\145\x6e\164\x20\151\163\x20\x72\145\161\x75\151\162\145", PR__MDL__SALARY), 404); wmumywgyyeagqoeq: goto mgcuiguaomoqwwwm; smcguieygyqcaqgs: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $oksqskmgoqiqciis = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::kmqmeaywmyiqqkqw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oksqskmgoqiqciis, [$this, "\153\x75\x77\157\145\171\153\167\167\x69\x67\157\145\141\x6f\x71"], [Constants::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), "\x61\x67\162\x65\x65\x6d\x65\156\164" => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk)]); mgcuiguaomoqwwwm: goto yuoeumyiuqkuouey; eoyiumycaigawmmc: $keccaugmemegoimu = $mkucggyaiaukqoce; yuoeumyiuqkuouey: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mesakkycomyuuwwm(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto ooqksueucyagyuoe; } if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu, false)) { goto sckioayasmkcoeoo; } if ($keccaugmemegoimu) { goto eyiwqgqcsqakwqss; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\x67\x72\145\145\155\145\156\164\40\x69\x73\x20\162\x65\x71\165\151\x72\145", PR__MDL__SALARY), 400); eyiwqgqcsqakwqss: goto yssqmyoaokkksukc; sckioayasmkcoeoo: $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $eyscsimwcyaqakqg = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::guksqgkoswygwycw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $eyscsimwcyaqakqg, [$this, "\141\167\147\x63\147\x61\171\x79\x6f\161\x69\x6b\155\x6d\161\157"], [Constants::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), "\141\x67\x72\x65\145\x6d\x65\x6e\164" => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk)]); yssqmyoaokkksukc: goto osmmoyqkqoucsgow; ooqksueucyagyuoe: $keccaugmemegoimu = $mkucggyaiaukqoce; osmmoyqkqoucsgow: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sygwcwcuaewiuikc(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto kgmeiwiakwicgkkk; } if ($this->qsyweymowowcmsww($mkucggyaiaukqoce)["\x61\160\x70\x6c\151\x61\142\x6c\145"]) { goto kicwiowcogmauwiy; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\131\x6f\x75\x72\x20\166\x65\x72\151\146\x69\141\142\154\145\x20\146\151\145\x6c\x64\163\x20\151\x73\x20\x6e\157\164\x20\x76\x65\x72\x69\x66\151\x65\144\x2c\x20\143\141\x6e\47\164\x20\x73\x75\142\155\x69\x74\40\171\157\x75\162\x20\x72\x65\x71\x75\145\163\164", PR__MDL__SALARY)); goto cwswueuqoamqasya; kicwiowcogmauwiy: if ($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\143\141\x6e\x5f\141\x70\x70\154\171", false)) { goto egaymskkosukqeao; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\120\154\145\141\x73\x65\40\x61\x63\x63\x65\x70\164\x20\x74\x65\x72\x6d\163\x20\146\151\x72\163\164\40\x6f\x72\x20\155\141\x6b\145\40\x73\165\x72\145\40\x79\x6f\x75\x72\40\166\x65\162\x69\146\x79\x20\x72\145\x71\165\151\x72\x65\x20\146\151\x65\x6c\144\163\40\151\163\x20\166\x65\x72\x69\x66\151\x65\144", PR__MDL__SALARY), 400); goto kaiesowkgwogqseg; egaymskkosukqeao: if ($gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\147\x72\145\x65\155\x65\x6e\164")) { goto acggikioyeueeowg; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\141\147\162\145\x65\x6d\145\x6e\164\40\x69\x64\x20\151\163\x20\141\40\x72\145\x71\x75\151\162\145\x20\146\x69\x65\x6c\144", PR__MDL__SALARY), 400); goto cwikoaeqmmoimmso; acggikioyeueeowg: $kueeocmceokoouqa = Request::symcgieuakksimmu(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); if (!$kueeocmceokoouqa->qumqowkwyaceeqwu([Constants::meksegaoamowuwoq => $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce, true), $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq])) { goto iwueukqcywkiyqge; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\171\157\x75\x20\x61\154\x72\145\x61\x64\x79\x20\163\x75\x62\x6d\x69\164\40\141\40\x72\x65\x71\165\145\163\164\40\x6f\156\40\164\x68\x69\163\x20\x61\x67\162\145\x65\x6d\145\x6e\164", PR__MDL__SALARY)); goto ykwasaaoeeiuomim; iwueukqcywkiyqge: if ($this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu)) { goto kqyoakickmseyyeq; } if ($keccaugmemegoimu) { goto aukucaieceiwesmm; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\162\145\161\x75\x65\163\164\x65\x64\40\141\147\x72\x65\x65\x6d\x65\156\164\40\x69\163\x20\156\x6f\x74\x20\166\x61\154\x69\x64\x20\x6f\x72\x20\156\157\164\x20\145\x78\151\163\x74\54\40\160\154\x65\x61\x73\x65\x20\162\x65\x66\x72\x65\x73\150\40\x70\141\x67\x65\40\141\x6e\x64\40\164\162\171\x20\141\x67\x61\x69\x6e", PR__MDL__SALARY)); aukucaieceiwesmm: goto micceocwuwkyusic; kqyoakickmseyyeq: $sogksuscggsicmac = $kueeocmceokoouqa->gscuuyuyauokoyuo([Constants::meksegaoamowuwoq => $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce), Constants::ciywsqoeiymemsys => Constants::ecysamcwsaweumeu, $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq], false, $mkucggyaiaukqoce); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto wgiygcmqaokywuqa; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\157\x6d\x65\x74\x68\x69\156\x67\40\x77\x72\157\x6e\x67\40\157\156\40\163\x75\x62\155\151\164\164\151\156\147\40\171\157\165\162\x20\162\145\x71\x75\145\x73\x74\x2c\x20\x70\x6c\145\141\x73\145\40\x74\162\x79\x20\x61\x67\141\151\x6e\x20\x61\x66\x74\x65\x72\40\x66\x65\167\x20\x6d\151\x6e\165\164\145\x73", PR__MDL__SALARY), 400); goto iauwuugggmegwisk; wgiygcmqaokywuqa: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x59\157\x75\x20\x72\145\x71\x75\x65\163\164\40\x73\x75\x62\x6d\151\164\x74\145\x64\x20\x73\165\x63\143\145\x73\163\x66\165\154\154\x79", PR__MDL__SALARY)); iauwuugggmegwisk: micceocwuwkyusic: ykwasaaoeeiuomim: cwikoaeqmmoimmso: kaiesowkgwogqseg: cwswueuqoamqasya: goto suuskagowwgsouqw; kgmeiwiakwicgkkk: $keccaugmemegoimu = $mkucggyaiaukqoce; suuskagowwgsouqw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto mykiyqcqiegkiqys; } $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($wqqmoakyckcwwkua = $this->oausasacgwqmkycw($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu)) { goto csieaismmmocyacu; } if ($keccaugmemegoimu) { goto omykokikgocoikec; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x49\x74\x27\x73\x20\163\x65\145\155\x73\40\x79\x6f\165\x20\144\157\156\164\40\163\x75\x62\155\151\164\40\141\156\x79\40\x72\145\161\x75\145\163\164\40\157\x6e\x20\x74\150\x65\x20\x61\147\x72\x65\x65\x6d\145\156\x74", PR__MDL__SALARY), 400); omykokikgocoikec: goto aquqkiggamaoegoo; csieaismmmocyacu: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [$ogekyekymoyuywog::cmiegiycgiucucgs => $kueeocmceokoouqa->keeuqgyooycqoygw($wqqmoakyckcwwkua)]); aquqkiggamaoegoo: goto agemwookwseyycqo; mykiyqcqiegkiqys: $keccaugmemegoimu = $mkucggyaiaukqoce; agemwookwseyycqo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wcckakowewicssqg(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto koiscokkkaimiecq; } $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Model::symcgieuakksimmu(); $siykeiywomwwuoiw = $kueeocmceokoouqa->kqewyqqqiyiouaou([Constants::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), Constants::ciywsqoeiymemsys => Constants::cwiummueqsucqayc, $kueeocmceokoouqa::woagckamiequeoyu => [Constants::euoaaiqkqcqcgeco => Constants::imiesusgyysqwyew]]); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $kueeocmceokoouqa, [], $siykeiywomwwuoiw, [Constants::soquiwyuimckgiow => [$mssuumukiiaqmcka->kumuygiiqswoyasy(true), $mssuumukiiaqmcka->myywwqkyiwawwquy(Constants::qescuiwgsyuikume), $mssuumukiiaqmcka->myywwqkyiwawwquy($mssuumukiiaqmcka::kmqmeaywmyiqqkqw), $mssuumukiiaqmcka->myywwqkyiwawwquy($mssuumukiiaqmcka::guksqgkoswygwycw)], Constants::wosqwewmqmyweqea => false]); if (!($oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($keccaugmemegoimu, Constants::qwumqqyuasyskkkc, []))) { goto cquecqekuucwoumw; } $keccaugmemegoimu[Constants::qwumqqyuasyskkkc] = $mssuumukiiaqmcka->cwgkcyyaymmsomqa($oammesyieqmwuwyi); cquecqekuucwoumw: goto owuuuiekkaeoeacq; koiscokkkaimiecq: $keccaugmemegoimu = $mkucggyaiaukqoce; owuuuiekkaeoeacq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ocuegwsuqwkqmoii(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto saauykgakaeiyoua; } $keccaugmemegoimu = $this->qsyweymowowcmsww($mkucggyaiaukqoce); goto qwemkcoaseywkuuc; saauykgakaeiyoua: $keccaugmemegoimu = $mkucggyaiaukqoce; qwemkcoaseywkuuc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kuwoeykwwigoeaoq($aqmwamyiwgeeymqa, $product, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; if (!$product) { goto mceucsaeouuwyumm; } $meqocwsecsywiiqs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::ckmqoekmugkggeym => $product, Constants::iikosyqiawkweouo => [Constants::mgsccwumkcawaqcy => "\x5f\x62\154\x61\x6e\153"]]); $sogksuscggsicmac = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs]; $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto kwyimqumkuuyaiku; } $qecuekqmeaiykeek = $usmsssmiougymckk->mmoaikqueyiwcesm($product); $qecuekqmeaiykeek[] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); goto gkqiqaqecmoogmaa; kwyimqumkuuyaiku: $aumscagymwyyicag = $usmsssmiougymckk->iimgkucsckeosmmk($product); if ($aumscagymwyyicag) { goto mqimkwickkgqqeoi; } $aumscagymwyyicag = __("\x57\151\164\x68\157\x75\x74\x20\120\162\x69\143\145", PR__MDL__SALARY); mqimkwickkgqqeoi: $sogksuscggsicmac[Constants::acymsykymkiewqsy] = $aumscagymwyyicag; gkqiqaqecmoogmaa: mceucsaeouuwyumm: return $sogksuscggsicmac; } public function awgcgayyoqikmmqo($aqmwamyiwgeeymqa, $guwumyyyakswawas, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if (!($guwumyyyakswawas = $aoskwucuugeuaeus->get($guwumyyyakswawas))) { goto isewysikysqewkis; } $oksqskmgoqiqciis = $aoskwucuugeuaeus->iyssgoiwgwygeacg($guwumyyyakswawas, Constants::oguseymmyyoyaako, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $okcscwesammossuq = []; $qecuekqmeaiykeek = []; foreach ($oksqskmgoqiqciis as $product) { if (!($product = $usmsssmiougymckk->get($product))) { goto ugykmcouiwiscoqu; } $okcscwesammossuq[] = $usmsssmiougymckk->mmoaikqueyiwcesm($product); $qecuekqmeaiykeek[] = $usmsssmiougymckk->iooowgsqoyqseyuu($product); ugykmcouiwiscoqu: gsymkkskwsgggoic: } ceiuqsiqgiuiekem: $qecuekqmeaiykeek = array_merge([], ...$okcscwesammossuq); $meqocwsecsywiiqs = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::yoayaissyomokiui, Constants::ckmqoekmugkggeym => $guwumyyyakswawas, Constants::iikosyqiawkweouo => [Constants::mgsccwumkcawaqcy => "\x5f\142\x6c\141\x6e\x6b"]]); $sogksuscggsicmac = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::kmqmeaywmyiqqkqw => $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(count($oksqskmgoqiqciis))]; $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); isewysikysqewkis: return $sogksuscggsicmac; } private function okqaggqwqcaieqoc($aqmwamyiwgeeymqa) { return $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\x70\160\x6c\171", false); } private function qsyweymowowcmsww($mkucggyaiaukqoce) : array { $sogksuscggsicmac = []; $wsoeeiiqguoauciy = true; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ouwoukcecmicoeos = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::eieeagimaskkekew); if (!$ouwoukcecmicoeos) { goto eweaaismksecwagy; } $ikgwqyuyckaewsow = (array) $this->ocksiywmkyaqseou("\160\x61\156\145\x6c\x5f\165\163\x65\162\x5f\147\145\x74\x5f\x66\x69\145\x6c\x64\163", [], [Constants::meksegaoamowuwoq => $mkucggyaiaukqoce, Constants::ackcaikowcokggsc => $ouwoukcecmicoeos, Constants::wacsysugayaeayag => true]); $ocqaciyqwmcuuuue = [Constants::sgoswgskyiiwkyuo => __("\120\x65\156\x64\x69\x6e\147", PR__MDL__SALARY), Constants::koswkeacksqaocay => __("\126\145\x72\x69\x66\x69\145\144", PR__MDL__SALARY), Constants::iiiimowywicukqke => __("\x55\156\143\157\x6d\160\154\x65\x74\145\x64", PR__MDL__SALARY)]; if (!$ikgwqyuyckaewsow) { goto mcqucouuiuoagqwc; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto syusgosewwkoagoq; } $iueymcwwscwqkiyq = Constants::iiiimowywicukqke; if ($aiowsaccomcoikus->iokkueaqiswaewyq()) { goto ugogoekeckgcmuaw; } if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { goto ykqsuiyyosyeyscc; } $iueymcwwscwqkiyq = Constants::koswkeacksqaocay; ykqsuiyyosyeyscc: goto egesuwkqkmaigaoe; ugogoekeckgcmuaw: if ($aiowsaccomcoikus->wowamsaiqwikqoqa()) { goto sqwuqegeiisoiiuq; } if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { goto eouwacqiommmeaqc; } $iueymcwwscwqkiyq = Constants::sgoswgskyiiwkyuo; eouwacqiommmeaqc: goto uscokkmquayiukag; sqwuqegeiisoiiuq: $iueymcwwscwqkiyq = Constants::koswkeacksqaocay; uscokkmquayiukag: egesuwkqkmaigaoe: $kqwygogeauwwyoca = Constants::koswkeacksqaocay === $iueymcwwscwqkiyq; $wsoeeiiqguoauciy = $wsoeeiiqguoauciy && $kqwygogeauwwyoca; $sogksuscggsicmac[$aiowsaccomcoikus->mwikyscisascoeea()] = [Constants::qgqyauaqwqmqseim => $kqwygogeauwwyoca ? IconInterface::ggokgkyiweugsokc : IconInterface::ucomcyskmkiqysee, Constants::qescuiwgsyuikume => $aiowsaccomcoikus->uikgwcuascgeissw(), Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq, Constants::koswkeacksqaocay => $kqwygogeauwwyoca, Constants::iuqumwggccmcuyem => $kqwygogeauwwyoca ? 2 : (Constants::sgoswgskyiiwkyuo === $iueymcwwscwqkiyq ? 1 : 0), Constants::ciywsqoeiymemsys . Constants::icmokuskwoskgace => $gkyciwoiiisgywcs->get($ocqaciyqwmcuuuue, $iueymcwwscwqkiyq)]; syusgosewwkoagoq: igmmqwyawcuuckkq: } wiwoiyoakywqyaiy: mcqucouuiuoagqwc: eweaaismksecwagy: return ["\141\160\x70\154\151\141\x62\154\145" => $wsoeeiiqguoauciy, Constants::ymckmcsiymwqucoq => $gkyciwoiiisgywcs->yaeiiwwyckwugsem($sogksuscggsicmac)]; } private function oausasacgwqmkycw(WP_REST_Request $aqmwamyiwgeeymqa, $mkucggyaiaukqoce, ?WP_Error &$iswcokucwmiosiaq = null) { $sogksuscggsicmac = null; $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\x67\162\x65\145\155\145\x6e\164")) { goto icumkkykaoqycqqu; } $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\x67\162\x65\145\155\145\x6e\x74\40\151\163\40\162\x65\161\x75\x69\162\145\144", PR__MDL__SALARY)); goto oeamoqweiueaueay; icumkkykaoqycqqu: $sogksuscggsicmac = $kueeocmceokoouqa->oqomcmyuuakigusk([Constants::meksegaoamowuwoq => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce), $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq]); oeamoqweiueaueay: return $sogksuscggsicmac; } private function mswqycukmiokeuiu(array $sogksuscggsicmac, WP_REST_Request $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, array $ywmkwiwkosakssii = []) : array { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto kyiwsiakwgiwouyi; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ycoeoaakqyskgykq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::meksegaoamowuwoq); $gimugccgakegomoq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, $kueeocmceokoouqa::woagckamiequeoyu); $qgciakuqggmiywuk = $kueeocmceokoouqa->oqomcmyuuakigusk([Constants::meksegaoamowuwoq => $ycoeoaakqyskgykq, $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq]); $qsmaqqyoggcuyukq = $gaeqamemwmwsyukm = 0; if (!$qgciakuqggmiywuk) { goto owgsameoayaogsma; } $uoomaookgsyciacm = [Constants::iockmgiyoygcswog => $ycoeoaakqyskgykq, Constants::oguseymmyyoyaako => $qecuekqmeaiykeek, $ogekyekymoyuywog::cmiegiycgiucucgs => $gimugccgakegomoq]; $qsmaqqyoggcuyukq = $ogekyekymoyuywog->qgiewwqykwugcuoo($ogekyekymoyuywog::aioqyewkwawaqgqe, $uoomaookgsyciacm); $gaeqamemwmwsyukm = $ogekyekymoyuywog->asskucacysemeoiu($uoomaookgsyciacm); owgsameoayaogsma: $sogksuscggsicmac["\151\156\x63\157\155\145\x73\137\x73\165\x6d"] = $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($qsmaqqyoggcuyukq); $sogksuscggsicmac["\151\156\143\157\155\x65\163\x5f\143\157\x75\x6e\x74"] = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm); kyiwsiakwgiwouyi: return $sogksuscggsicmac; } private function gayyweiqkuooeicq(WP_REST_Request $aqmwamyiwgeeymqa, $mkucggyaiaukqoce, ?WP_Error &$iswcokucwmiosiaq = null, bool $tsuauommsquiesmk = true) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $xssuewsokckmigqk = null; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); if (!($gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\x67\162\145\145\155\145\156\164"))) { goto ikcwmsgocyuqiumc; } if (!($xssuewsokckmigqk = $jwsqucqyaoaasykk->akkkoiiymmamsauc($gimugccgakegomoq))) { goto cyosacayacumuaks; } $iueymcwwscwqkiyq = $jwsqucqyaoaasykk->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $xssuewsokckmigqk, Constants::aqugcqsyeisayuog); $qgciakuqggmiywuk = $kueeocmceokoouqa->oqomcmyuuakigusk([Constants::meksegaoamowuwoq => $ycoeoaakqyskgykq, $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq]); if (!$qgciakuqggmiywuk) { goto esagiiawomyacuiw; } if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto gqimwsyemoewagcy; } if (!(Constants::yascuqeoeosyewwc === $kueeocmceokoouqa->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $qgciakuqggmiywuk, Constants::ecysamcwsaweumeu))) { goto awgmegueeqeyqamu; } $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\163\x65\x72\x20\162\x65\x71\x75\x65\163\164\x20\162\x65\152\145\143\x74\145\x64\40\142\171\40\x61\144\155\x69\156", PR__MDL__SALARY)); awgmegueeqeyqamu: goto aoaqwygkaagiuuws; gqimwsyemoewagcy: $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\163\145\162\40\x61\154\x72\x65\x61\x64\171\x20\163\x75\x62\x6d\x69\164\x20\141\x20\x72\145\161\x75\145\x73\x74\40\157\156\40\x74\150\151\163\40\x61\147\x72\145\x65\x6d\145\x6e\x74", PR__MDL__SALARY)); aoaqwygkaagiuuws: esagiiawomyacuiw: if (Constants::aqugcqsyeisayuog === $iueymcwwscwqkiyq) { goto oeusomaaeekakake; } if ($eiaskqgsuqcysisw = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, [])) { goto aeiemwacaiygemmg; } if (!($guguqsiieswegsiy = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, []))) { goto yggseoaommssscwo; } $askmkgcmgekiqwsg = false; foreach ($guguqsiieswegsiy as $iqgguioieaoeaucu) { if (!$yoiguusocukqeayg->askmkgcmgekiqwsg($iqgguioieaoeaucu, $mkucggyaiaukqoce, true)) { goto ayceeyuocgowqwsa; } $askmkgcmgekiqwsg = true; ayceeyuocgowqwsa: sksgcusuyqcwqswe: } qkyciyiwkmgkmquk: if ($askmkgcmgekiqwsg) { goto iuwkiyimqmgguose; } $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\147\162\145\145\x6d\x65\156\164\40\156\157\164\40\x66\x6f\162\x20\164\150\x65\x20\165\x73\x65\162", PR__MDL__SALARY)); iuwkiyimqmgguose: yggseoaommssscwo: goto yyqygaokeccgugos; aeiemwacaiygemmg: if (in_array($ycoeoaakqyskgykq, $eiaskqgsuqcysisw, true)) { goto maaisuqwkymeguys; } $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\x67\162\145\145\x6d\x65\156\x74\x20\156\x6f\x74\x20\146\x6f\x72\40\x74\150\145\x20\x75\x73\145\162", PR__MDL__SALARY)); maaisuqwkymeguys: yyqygaokeccgugos: goto kwuckkyqaygwgcuy; oeusomaaeekakake: $iswcokucwmiosiaq = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\147\x72\145\145\155\x65\156\164\40\x69\x73\x20\160\x72\151\166\141\164\x65", PR__MDL__SALARY)); kwuckkyqaygwgcuy: if (!$iswcokucwmiosiaq) { goto giuccakymqymawgk; } $xssuewsokckmigqk = null; giuccakymqymawgk: if (!($xssuewsokckmigqk && $tsuauommsquiesmk)) { goto sicgyiyiocyygkoc; } $xssuewsokckmigqk = $jwsqucqyaoaasykk->scqakcemaqsqkema($xssuewsokckmigqk); sicgyiyiocyygkoc: cyosacayacumuaks: ikcwmsgocyuqiumc: return $xssuewsokckmigqk; } }
