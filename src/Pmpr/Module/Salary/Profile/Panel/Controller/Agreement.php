<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ae3192d4abf             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\FormMaker\Front\Field\Field; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Salary\Model\Agreement as Model; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Setting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Agreement extends Controller { public function __construct() { $this->rest_base = "\141\x67\162\145\145\155\145\x6e\164"; parent::__construct(); } public function register_routes() { $this->register("\57\147\x65\164\55\x70\x75\142\x6c\x69\143\163", [self::wwgusigoaksqmwsm => [$this, "\x65\x61\x69\171\153\157\x6d\x65\155\155\x69\151\167\155\153\151"]]); $this->register("\x2f\x67\x65\x74\x2d\x61\147\x72\x65\x65\155\145\x6e\164", [self::wwgusigoaksqmwsm => [$this, "\171\x79\143\x69\x6d\x63\141\153\x75\151\171\x6d\x73\141\x6f\161"]]); $this->register("\57\147\145\x74\55\x70\162\157\x64\x75\143\164\163", [self::wwgusigoaksqmwsm => [$this, "\141\x67\x65\x71\x73\x77\x77\x6b\153\x71\171\x77\x63\153\143\x6f"]]); $this->register("\57\x67\145\164\x2d\x63\141\164\145\147\157\162\x69\x65\x73", [self::wwgusigoaksqmwsm => [$this, "\x6d\145\163\x61\153\153\x79\143\157\x6d\x79\165\x75\167\x77\x6d"]]); $this->register("\57\x67\145\x74\55\x61\x70\x70\154\171\55\162\145\x71\x75\x69\162\x65\163", [self::wwgusigoaksqmwsm => [$this, "\157\x63\165\145\147\167\x73\165\161\167\x6b\x71\155\157\151\151"]]); $this->register("\57\x73\x75\142\155\x69\164\x2d\141\x70\160\154\171", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\163\171\x67\167\143\x77\143\x75\x61\145\167\x69\165\151\153\143"]]); $this->register("\x2f\147\145\164\x2d\154\151\x73\164\x2d\x62\x79\55\165\163\x65\x72", [self::wwgusigoaksqmwsm => [$this, "\167\143\x63\x6b\141\153\157\x77\145\x77\x69\143\163\x73\x71\x67"]]); $this->register("\57\x67\145\164\55\x69\156\143\157\155\145\163", [self::wwgusigoaksqmwsm => [$this, "\x75\x79\x65\143\143\x6f\171\x61\163\x73\x67\x6f\x65\167\x69\167"]]); } public function eaiykomemmiiwmki(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto goqmywuiicciasyk; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($jwsqucqyaoaasykk && $kueeocmceokoouqa) { goto wkgskiuiukiuyque; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x6d\x65\164\x68\x69\156\147\40\x77\x72\157\156\x67\54\40\x70\x6c\x65\141\163\145\x20\143\x6f\156\164\x61\x63\x74\x20\x75\x73", PR__MDL__SALARY), 500); goto oyiuyywyeoskckuw; wkgskiuiukiuyque: $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $mqamowqmoasqycgc = ManipulateUser::yksywgmucwascgwk($mkucggyaiaukqoce, true); $ggiwyickioisqkss = []; foreach ($mqamowqmoasqycgc as $oeucsuyqysaciasy) { $ggiwyickioisqkss[] = [self::ciyoccqkiamemcmm => $oeucsuyqysaciasy, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::meisqwykgaymauka => $jwsqucqyaoaasykk::aociysagacimyqgu, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim]; mkomygccqkmkumsi: } cgmgqucewwssmicq: $siykeiywomwwuoiw = $jwsqucqyaoaasykk->kqewyqqqiyiouaou([[self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::iowgsqgiaamyuswi => [$jwsqucqyaoaasykk::mmisekagkomcsowm => [self::ciyoccqkiamemcmm => $ycoeoaakqyskgykq, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim], [self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::iowgsqgiaamyuswi => $ggiwyickioisqkss]]], [self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::iowgsqgiaamyuswi => [$jwsqucqyaoaasykk::ciywsqoeiymemsys => [self::ciyoccqkiamemcmm => [self::miswkosqicsksgok, self::cemyyceucooociss], self::cwsguekoagqkaesm => self::weaykmmocuacwekg], $jwsqucqyaoaasykk::mmisekagkomcsowm => [self::euoaaiqkqcqcgeco => self::weigugswsgkycqkc, self::cwsguekoagqkaesm => self::weaykmmocuacwekg], $jwsqucqyaoaasykk::aociysagacimyqgu => [self::euoaaiqkqcqcgeco => self::weigugswsgkycqkc, self::cwsguekoagqkaesm => self::weaykmmocuacwekg]]], $jwsqucqyaoaasykk::cmiegiycgiucucgs => [self::euoaaiqkqcqcgeco => self::imiesusgyysqwyew, self::ciyoccqkiamemcmm => $kueeocmceokoouqa::woagckamiequeoyu, self::iowgsqgiaamyuswi => [$kueeocmceokoouqa::meksegaoamowuwoq => $ycoeoaakqyskgykq]], [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw, self::meisqwykgaymauka => self::ciywsqoeiymemsys, self::ciyoccqkiamemcmm => [self::miswkosqicsksgok, self::cemyyceucooociss]]]); $yoskgaaocqaweqyw = self::kumuoysauoagaiiy; $kecaaeasoukoeask = "\x72\x65\161\x75\x65\163\164\x5f\163\x74\141\164\165\x73"; $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $jwsqucqyaoaasykk, [], $siykeiywomwwuoiw, [self::soquiwyuimckgiow => [$jwsqucqyaoaasykk->kumuygiiqswoyasy(true), $jwsqucqyaoaasykk->myywwqkyiwawwquy($jwsqucqyaoaasykk::qescuiwgsyuikume), $jwsqucqyaoaasykk->myywwqkyiwawwquy($jwsqucqyaoaasykk::ciywsqoeiymemsys), $kueeocmceokoouqa->kmgukcsewikeswco($kueeocmceokoouqa::ciywsqoeiymemsys, $kecaaeasoukoeask), $kueeocmceokoouqa->kmgukcsewikeswco($kueeocmceokoouqa::CREATED_AT, $yoskgaaocqaweqyw)], self::wosqwewmqmyweqea => false]); if (!($oammesyieqmwuwyi = ManipulateArray::get($keccaugmemegoimu, self::qwumqqyuasyskkkc, []))) { goto ukomuiwukymcoaso; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $sgcwoeksqaiayucu = ManipulateArray::get($igqsaukqcqscimok, self::ciywsqoeiymemsys); $wciwsoomyoeueocu = ManipulateArray::get($igqsaukqcqscimok, $kecaaeasoukoeask); if ($sgcwoeksqaiayucu !== $jwsqucqyaoaasykk::miswkosqicsksgok) { goto uycesqqkoeamocgm; } if (!$wciwsoomyoeueocu) { goto gqmewagyagamokok; } $skikmocgwukomwyq = $kueeocmceokoouqa->gascwoasakiqyumc($wciwsoomyoeueocu); goto sqmoqymckwsogsqg; gqmewagyagamokok: $wciwsoomyoeueocu = self::owiykagmoieoggya; $skikmocgwukomwyq = __("\x52\145\161\x75\x65\x73\x74\141\142\x6c\145", PR__MDL__SALARY); sqmoqymckwsogsqg: goto ceiwqkyquikcemmo; uycesqqkoeamocgm: $wciwsoomyoeueocu = self::oooiesaeqsouwieg; $skikmocgwukomwyq = __("\x55\x6e\x72\x65\x71\x75\145\x73\x74\141\142\x6c\145", PR__MDL__SALARY); ceiwqkyquikcemmo: $muocgugcqiewywag = [self::kumuoysauoagaiiy => $kueeocmceokoouqa->ooeucgsymeocguuu($yoskgaaocqaweqyw, ManipulateArray::get($igqsaukqcqscimok, $yoskgaaocqaweqyw), $igqsaukqcqscimok), self::ciywsqoeiymemsys => $wciwsoomyoeueocu, self::ciywsqoeiymemsys . self::icmokuskwoskgace => $skikmocgwukomwyq]; $oammesyieqmwuwyi[$momcykaoccoymeig] = ManipulateArray::set($igqsaukqcqscimok, $muocgugcqiewywag); oyiuemaaykgkqqam: } ussceseaimqywuiy: ukomuiwukymcoaso: $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; oyiuyywyeoskckuw: goto siecswkggyikqkga; goqmywuiicciasyk: $keccaugmemegoimu = $mkucggyaiaukqoce; siecswkggyikqkga: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function yycimcakuiymsaoq(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto eckcqesiokgwkkiw; } $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); if ($jwsqucqyaoaasykk) { goto yamyagayiooyeekg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\155\x65\x74\150\x69\156\x67\40\x77\x72\157\x6e\x67\x2c\40\x70\154\x65\141\x73\145\x20\x63\157\x6e\164\x61\x63\164\x20\165\163", PR__MDL__SALARY), 500); goto yoagcooekomeokwg; yamyagayiooyeekg: if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce)) { goto smiemmcqqukyguuu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\x6f\165\162\40\162\145\x71\x75\145\x73\x74\x65\144\x20\x61\147\x72\145\145\155\x65\x6e\x74\40\156\x6f\x74\40\x66\157\x75\x6e\x64", PR__MDL__SALARY), 404); goto iksewmsaugayqaqq; smiemmcqqukyguuu: $yygmoeguaqyumuui = [$jwsqucqyaoaasykk::kkeogqiyysoyuemk => IconInterface::okgwkgguoawyiecg, $jwsqucqyaoaasykk::siwsmgcqgcqmaeui => IconInterface::cyeyqyiaoagiucws, $jwsqucqyaoaasykk::weumemyqgykuwqok => IconInterface::kacscoqyuismekww, $jwsqucqyaoaasykk::yykcmqogieykgkus => IconInterface::gqusoyqaekkgqmas]; $icwicymcioeyeyek = []; foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $eqgoocgaqwqcimie = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $uusmaiomayssaecw); if (!$eqgoocgaqwqcimie) { goto quaqmuusokiyqgqe; } $aaqqkgyougeiueyq = $jwsqucqyaoaasykk->oyeskqayoscwciem()->uqeoyqiwywwmsiew($uusmaiomayssaecw); if (!$aaqqkgyougeiueyq) { goto yuqgwwmqwqiuwmaw; } $icwicymcioeyeyek[$uusmaiomayssaecw] = [self::qescuiwgsyuikume => $aaqqkgyougeiueyq->qcgakseyaikigqco(), self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, self::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; yuqgwwmqwqiuwmaw: quaqmuusokiyqgqe: easqmyamcmeesgya: } qkuiwoqksgayqqmg: $keccaugmemegoimu = [self::uiwqcumqkgikqyue => $icwicymcioeyeyek, $jwsqucqyaoaasykk::gouqcwikiiygyasc => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk), $jwsqucqyaoaasykk::qescuiwgsyuikume => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::qescuiwgsyuikume), $jwsqucqyaoaasykk::ucoiewcoucauqwko => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::ucoiewcoucauqwko), $jwsqucqyaoaasykk::eqkeooqcsscoggia => $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::eqkeooqcsscoggia)]; iksewmsaugayqaqq: yoagcooekomeokwg: goto ecouwqosmoyyqmkw; eckcqesiokgwkkiw: $keccaugmemegoimu = $mkucggyaiaukqoce; ecouwqosmoyyqmkw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ageqswwkkqywckco(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto mmgmqogugasaqkgg; } if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu, false)) { goto skuqigsokaguscas; } if ($keccaugmemegoimu) { goto sgiwoiscywusgmmm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\101\147\x72\145\x65\x6d\145\156\164\x20\151\x73\40\x72\145\161\165\x69\162\x65", PR__MDL__SALARY), 404); sgiwoiscywusgmmm: goto quyogmwugsyoaaiu; skuqigsokaguscas: if ($jwsqucqyaoaasykk = Model::symcgieuakksimmu()) { goto mqiiqkuaoekeuswo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\x6d\x65\164\x68\x69\x6e\147\x20\167\x72\x6f\x6e\147\54\40\x70\x6c\145\x61\163\145\x20\143\157\156\164\141\x63\164\40\165\x73", PR__MDL__SALARY), 500); goto qmoocweoekqueuyy; mqiiqkuaoekeuswo: $oksqskmgoqiqciis = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::kmqmeaywmyiqqkqw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oksqskmgoqiqciis, [$this, "\x6b\x75\167\x6f\x65\171\153\167\167\x69\147\157\145\x61\x6f\161"], [self::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), "\141\x67\x72\145\x65\155\145\x6e\x74" => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk)]); qmoocweoekqueuyy: quyogmwugsyoaaiu: goto wmumywgyyeagqoeq; mmgmqogugasaqkgg: $keccaugmemegoimu = $mkucggyaiaukqoce; wmumywgyyeagqoeq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mesakkycomyuuwwm(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto sckioayasmkcoeoo; } if ($xssuewsokckmigqk = $this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu, false)) { goto yuoeumyiuqkuouey; } if ($keccaugmemegoimu) { goto eoyiumycaigawmmc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\101\147\162\x65\145\155\145\156\164\40\151\x73\x20\162\145\x71\x75\x69\162\145", PR__MDL__SALARY), 400); eoyiumycaigawmmc: goto eyiwqgqcsqakwqss; yuoeumyiuqkuouey: if ($jwsqucqyaoaasykk = Model::symcgieuakksimmu()) { goto smcguieygyqcaqgs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\x6d\145\164\150\x69\x6e\x67\40\x77\162\157\x6e\147\x2c\40\x70\x6c\x65\x61\x73\145\40\x63\157\156\164\x61\x63\164\x20\x75\163", PR__MDL__SALARY), 500); goto mgcuiguaomoqwwwm; smcguieygyqcaqgs: $eyscsimwcyaqakqg = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::guksqgkoswygwycw, []); $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $eyscsimwcyaqakqg, [$this, "\x61\x77\x67\x63\x67\x61\171\x79\157\x71\x69\x6b\x6d\x6d\161\157"], [self::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), "\141\x67\162\145\x65\x6d\145\156\x74" => $jwsqucqyaoaasykk->keeuqgyooycqoygw($xssuewsokckmigqk)]); mgcuiguaomoqwwwm: eyiwqgqcsqakwqss: goto yssqmyoaokkksukc; sckioayasmkcoeoo: $keccaugmemegoimu = $mkucggyaiaukqoce; yssqmyoaokkksukc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sygwcwcuaewiuikc(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto kgmeiwiakwicgkkk; } if ($this->qsyweymowowcmsww($mkucggyaiaukqoce)["\x61\x70\160\154\151\141\142\x6c\x65"]) { goto kicwiowcogmauwiy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\157\x75\x72\40\166\x65\162\151\x66\x69\x61\x62\154\x65\x20\146\x69\x65\154\144\x73\40\x69\x73\x20\x6e\157\164\40\166\145\162\151\146\x69\145\144\x2c\40\143\x61\156\x27\x74\40\163\x75\142\155\x69\164\40\x79\x6f\165\x72\40\x72\x65\x71\165\145\163\x74", PR__MDL__SALARY)); goto cwswueuqoamqasya; kicwiowcogmauwiy: if ($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x63\141\156\x5f\x61\x70\x70\154\x79", false)) { goto egaymskkosukqeao; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x50\x6c\145\141\x73\x65\40\141\143\143\x65\x70\x74\x20\164\145\162\x6d\163\x20\146\x69\x72\163\x74\40\157\162\x20\155\x61\153\x65\x20\x73\165\x72\x65\x20\x79\x6f\x75\x72\x20\x76\x65\x72\151\146\171\40\x72\145\161\x75\x69\x72\145\x20\x66\151\145\154\144\163\40\x69\x73\40\x76\x65\x72\x69\146\x69\145\144", PR__MDL__SALARY), 400); goto kaiesowkgwogqseg; egaymskkosukqeao: if ($gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\x67\x72\145\x65\155\x65\156\164")) { goto acggikioyeueeowg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x61\x67\162\x65\x65\155\x65\x6e\164\x20\x69\x64\x20\x69\163\40\141\x20\x72\x65\161\x75\151\162\145\x20\146\151\145\x6c\144", PR__MDL__SALARY), 400); goto cwikoaeqmmoimmso; acggikioyeueeowg: if ($kueeocmceokoouqa = Request::symcgieuakksimmu()) { goto iwueukqcywkiyqge; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\155\145\164\x68\x69\156\x67\40\167\162\157\156\x67\x2c\x20\x70\x6c\145\141\163\x65\40\x63\157\156\164\141\143\x74\x20\x75\163", PR__MDL__SALARY), 500); goto ykwasaaoeeiuomim; iwueukqcywkiyqge: if (!$kueeocmceokoouqa->qumqowkwyaceeqwu([$kueeocmceokoouqa::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce, true), $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq])) { goto kqyoakickmseyyeq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\171\157\x75\40\x61\x6c\x72\145\x61\144\x79\40\163\x75\x62\x6d\x69\164\x20\x61\40\162\x65\161\165\145\x73\164\x20\x6f\156\x20\164\150\151\163\40\141\x67\162\x65\x65\155\x65\156\164", PR__MDL__SALARY)); goto micceocwuwkyusic; kqyoakickmseyyeq: if ($this->gayyweiqkuooeicq($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu)) { goto iauwuugggmegwisk; } if ($keccaugmemegoimu) { goto wgiygcmqaokywuqa; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\162\145\161\165\145\163\x74\145\x64\40\x61\147\162\145\x65\x6d\x65\x6e\164\x20\x69\163\x20\156\157\164\x20\166\141\x6c\151\144\x20\157\162\x20\156\157\x74\x20\145\170\151\163\x74\x2c\40\160\x6c\x65\141\163\145\40\162\x65\x66\x72\145\x73\x68\x20\x70\x61\147\x65\40\141\x6e\144\x20\164\x72\171\x20\141\147\x61\151\156", PR__MDL__SALARY)); wgiygcmqaokywuqa: goto aukucaieceiwesmm; iauwuugggmegwisk: $sogksuscggsicmac = $kueeocmceokoouqa->gscuuyuyauokoyuo([$kueeocmceokoouqa::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), $kueeocmceokoouqa::ciywsqoeiymemsys => $kueeocmceokoouqa::ecysamcwsaweumeu, $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq], false, $mkucggyaiaukqoce); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto ooqksueucyagyuoe; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x6d\x65\164\x68\x69\x6e\x67\40\167\162\157\156\147\40\157\x6e\40\x73\x75\142\155\x69\164\164\151\156\x67\40\171\157\x75\x72\x20\x72\145\161\x75\145\163\164\x2c\x20\160\154\145\141\163\145\40\164\162\x79\x20\141\147\141\x69\156\x20\141\146\x74\x65\162\x20\x66\x65\x77\40\x6d\151\x6e\x75\x74\x65\x73", PR__MDL__SALARY), 400); goto osmmoyqkqoucsgow; ooqksueucyagyuoe: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x59\157\165\x20\x72\145\x71\165\x65\x73\164\x20\x73\x75\x62\155\151\x74\164\145\144\x20\x73\x75\143\143\x65\163\163\x66\x75\x6c\x6c\171", PR__MDL__SALARY)); osmmoyqkqoucsgow: aukucaieceiwesmm: micceocwuwkyusic: ykwasaaoeeiuomim: cwikoaeqmmoimmso: kaiesowkgwogqseg: cwswueuqoamqasya: goto suuskagowwgsouqw; kgmeiwiakwicgkkk: $keccaugmemegoimu = $mkucggyaiaukqoce; suuskagowwgsouqw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function uyeccoyassgoewiw(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto cquecqekuucwoumw; } $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if ($kueeocmceokoouqa && $ogekyekymoyuywog) { goto mykiyqcqiegkiqys; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\155\x65\164\150\151\x6e\x67\x20\x77\x72\157\x6e\x67\54\x20\x70\154\145\141\163\x65\x20\143\157\156\164\x61\x63\164\x20\165\163", PR__MDL__SALARY), 500); goto agemwookwseyycqo; mykiyqcqiegkiqys: if ($wqqmoakyckcwwkua = $this->oausasacgwqmkycw($aqmwamyiwgeeymqa, $mkucggyaiaukqoce, $keccaugmemegoimu)) { goto csieaismmmocyacu; } if (!$keccaugmemegoimu) { goto aquqkiggamaoegoo; } goto omykokikgocoikec; csieaismmmocyacu: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $ogekyekymoyuywog, [$ogekyekymoyuywog::cmiegiycgiucucgs => $kueeocmceokoouqa->keeuqgyooycqoygw($wqqmoakyckcwwkua)]); goto omykokikgocoikec; aquqkiggamaoegoo: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x49\164\47\163\40\x73\145\145\x6d\x73\40\x79\157\x75\x20\144\x6f\x6e\x74\x20\x73\x75\142\155\x69\164\x20\x61\x6e\x79\40\162\x65\x71\165\145\163\164\40\x6f\156\40\164\150\145\40\x61\147\x72\x65\145\155\145\156\x74", PR__MDL__SALARY), 400); omykokikgocoikec: agemwookwseyycqo: goto koiscokkkaimiecq; cquecqekuucwoumw: $keccaugmemegoimu = $mkucggyaiaukqoce; koiscokkkaimiecq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wcckakowewicssqg(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto mqimkwickkgqqeoi; } $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Model::symcgieuakksimmu(); if ($kueeocmceokoouqa && $mssuumukiiaqmcka) { goto saauykgakaeiyoua; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x6d\145\164\x68\151\x6e\147\x20\x77\x72\157\156\x67\54\40\160\154\x65\x61\x73\x65\40\x63\157\x6e\164\141\x63\164\40\x75\163", PR__MDL__SALARY), 500); goto qwemkcoaseywkuuc; saauykgakaeiyoua: $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $siykeiywomwwuoiw = $kueeocmceokoouqa->kqewyqqqiyiouaou([self::meksegaoamowuwoq => $ycoeoaakqyskgykq, self::ciywsqoeiymemsys => self::cwiummueqsucqayc, $kueeocmceokoouqa::woagckamiequeoyu => [self::euoaaiqkqcqcgeco => self::imiesusgyysqwyew]]); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $kueeocmceokoouqa, [], $siykeiywomwwuoiw, [self::soquiwyuimckgiow => [$mssuumukiiaqmcka->kumuygiiqswoyasy(true), $mssuumukiiaqmcka->myywwqkyiwawwquy(self::qescuiwgsyuikume), $mssuumukiiaqmcka->myywwqkyiwawwquy($mssuumukiiaqmcka::kmqmeaywmyiqqkqw), $mssuumukiiaqmcka->myywwqkyiwawwquy($mssuumukiiaqmcka::guksqgkoswygwycw)], self::wosqwewmqmyweqea => false]); if (!($oammesyieqmwuwyi = ManipulateArray::get($keccaugmemegoimu, self::qwumqqyuasyskkkc, []))) { goto owuuuiekkaeoeacq; } $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $mssuumukiiaqmcka->cwgkcyyaymmsomqa($oammesyieqmwuwyi); owuuuiekkaeoeacq: qwemkcoaseywkuuc: goto kwyimqumkuuyaiku; mqimkwickkgqqeoi: $keccaugmemegoimu = $mkucggyaiaukqoce; kwyimqumkuuyaiku: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ocuegwsuqwkqmoii(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($mkucggyaiaukqoce)) { goto gkqiqaqecmoogmaa; } $keccaugmemegoimu = $this->qsyweymowowcmsww($mkucggyaiaukqoce); goto mceucsaeouuwyumm; gkqiqaqecmoogmaa: $keccaugmemegoimu = $mkucggyaiaukqoce; mceucsaeouuwyumm: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kuwoeykwwigoeaoq($aqmwamyiwgeeymqa, $product, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; if (!($product = ManipulateWoocommerce::aqasygcsqysmmyke($product))) { goto wiwoiyoakywqyaiy; } if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto isewysikysqewkis; } $meqocwsecsywiiqs = $jwsqucqyaoaasykk->geyuyukmwaoksywa($product->get_permalink(), $product->get_title(), [self::mgsccwumkcawaqcy => "\137\x62\x6c\x61\x6e\x6b"]); $sogksuscggsicmac = [self::qescuiwgsyuikume => $meqocwsecsywiiqs]; if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto gsymkkskwsgggoic; } $qecuekqmeaiykeek = $product->get_children(); $qecuekqmeaiykeek[] = $product->get_id(); $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); goto ugykmcouiwiscoqu; gsymkkskwsgggoic: $aumscagymwyyicag = $product->get_price_html(); if ($aumscagymwyyicag) { goto ceiuqsiqgiuiekem; } $aumscagymwyyicag = __("\127\x69\164\150\x6f\165\164\40\120\x72\x69\x63\145", PR__MDL__SALARY); ceiuqsiqgiuiekem: $sogksuscggsicmac["\x70\162\151\x63\145"] = $aumscagymwyyicag; ugykmcouiwiscoqu: isewysikysqewkis: wiwoiyoakywqyaiy: return $sogksuscggsicmac; } public function awgcgayyoqikmmqo($aqmwamyiwgeeymqa, $guwumyyyakswawas, $ywmkwiwkosakssii = []) : array { $sogksuscggsicmac = []; if (!($guwumyyyakswawas = ManipulateTerm::get($guwumyyyakswawas))) { goto ykqsuiyyosyeyscc; } if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto uscokkmquayiukag; } $oksqskmgoqiqciis = ManipulateTerm::iyssgoiwgwygeacg($guwumyyyakswawas, self::oguseymmyyoyaako, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]); $okcscwesammossuq = []; $qecuekqmeaiykeek = []; foreach ($oksqskmgoqiqciis as $product) { $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product) { goto sqwuqegeiisoiiuq; } $okcscwesammossuq[] = $product->get_children(); $qecuekqmeaiykeek[] = $product->get_id(); sqwuqegeiisoiiuq: eouwacqiommmeaqc: } igmmqwyawcuuckkq: $qecuekqmeaiykeek = array_merge([], ...$okcscwesammossuq); $meqocwsecsywiiqs = $jwsqucqyaoaasykk->geyuyukmwaoksywa(ManipulateTerm::qmgcisuuikgmqcsu($guwumyyyakswawas), ManipulateTerm::qcgakseyaikigqco($guwumyyyakswawas), [self::mgsccwumkcawaqcy => "\x5f\142\x6c\x61\x6e\153"]); $sogksuscggsicmac = [self::qescuiwgsyuikume => $meqocwsecsywiiqs, "\x70\162\x6f\x64\165\x63\164\163" => $jwsqucqyaoaasykk->msywmyaoqmaegsuy(count($oksqskmgoqiqciis))]; $sogksuscggsicmac = $this->mswqycukmiokeuiu($sogksuscggsicmac, $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii); uscokkmquayiukag: ykqsuiyyosyeyscc: return $sogksuscggsicmac; } private function okqaggqwqcaieqoc($aqmwamyiwgeeymqa) { return $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\x70\x70\x6c\171", false); } private function qsyweymowowcmsww($mkucggyaiaukqoce) : array { $sogksuscggsicmac = []; $wsoeeiiqguoauciy = true; $ouwoukcecmicoeos = Setting::eiwcuqigayigimak(Setting::eieeagimaskkekew); if (!$ouwoukcecmicoeos) { goto gqimwsyemoewagcy; } $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\156\x65\154\x5f\165\163\145\162\137\147\145\164\x5f\x66\x69\x65\154\x64\x73"), [], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::ackcaikowcokggsc => $ouwoukcecmicoeos, self::wacsysugayaeayag => true]); $ocqaciyqwmcuuuue = [self::sgoswgskyiiwkyuo => __("\x50\145\x6e\144\151\156\147", PR__MDL__SALARY), self::uyicaiummcooqwqk => __("\x56\x65\x72\x69\146\x69\x65\x64", PR__MDL__SALARY), self::iiiimowywicukqke => __("\125\156\143\157\155\x70\154\145\164\145\x64", PR__MDL__SALARY)]; if (!$ikgwqyuyckaewsow) { goto awgmegueeqeyqamu; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto kyiwsiakwgiwouyi; } $iueymcwwscwqkiyq = self::iiiimowywicukqke; if ($aiowsaccomcoikus->iokkueaqiswaewyq()) { goto oeamoqweiueaueay; } if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { goto icumkkykaoqycqqu; } $iueymcwwscwqkiyq = self::uyicaiummcooqwqk; icumkkykaoqycqqu: goto owgsameoayaogsma; oeamoqweiueaueay: if ($aiowsaccomcoikus->wowamsaiqwikqoqa()) { goto mcqucouuiuoagqwc; } if (!$aiowsaccomcoikus->qooeaookuemoqecm()) { goto syusgosewwkoagoq; } $iueymcwwscwqkiyq = self::sgoswgskyiiwkyuo; syusgosewwkoagoq: goto eweaaismksecwagy; mcqucouuiuoagqwc: $iueymcwwscwqkiyq = self::uyicaiummcooqwqk; eweaaismksecwagy: owgsameoayaogsma: $kqwygogeauwwyoca = self::uyicaiummcooqwqk === $iueymcwwscwqkiyq; $wsoeeiiqguoauciy = $wsoeeiiqguoauciy && $kqwygogeauwwyoca; $sogksuscggsicmac[$aiowsaccomcoikus->mwikyscisascoeea()] = [self::qgqyauaqwqmqseim => $kqwygogeauwwyoca ? IconInterface::ggokgkyiweugsokc : IconInterface::ucomcyskmkiqysee, self::qescuiwgsyuikume => $aiowsaccomcoikus->uikgwcuascgeissw(), self::ciywsqoeiymemsys => $iueymcwwscwqkiyq, self::uyicaiummcooqwqk => $kqwygogeauwwyoca, self::iuqumwggccmcuyem => $kqwygogeauwwyoca ? 2 : (self::sgoswgskyiiwkyuo === $iueymcwwscwqkiyq ? 1 : 0), self::ciywsqoeiymemsys . self::icmokuskwoskgace => ManipulateArray::get($ocqaciyqwmcuuuue, $iueymcwwscwqkiyq)]; kyiwsiakwgiwouyi: egesuwkqkmaigaoe: } ugogoekeckgcmuaw: awgmegueeqeyqamu: gqimwsyemoewagcy: return ["\141\160\160\154\151\x61\142\x6c\145" => $wsoeeiiqguoauciy, self::ymckmcsiymwqucoq => ManipulateArray::yaeiiwwyckwugsem($sogksuscggsicmac)]; } private function oausasacgwqmkycw(WP_REST_Request $aqmwamyiwgeeymqa, $mkucggyaiaukqoce, ?WP_Error &$iswcokucwmiosiaq = null) { $sogksuscggsicmac = null; if ($kueeocmceokoouqa = Request::symcgieuakksimmu()) { goto maaisuqwkymeguys; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\123\157\155\x65\x74\x68\151\x6e\147\40\167\x72\x6f\156\147\54\x20\160\x6c\x65\x61\x73\145\40\143\x6f\x6e\x74\141\x63\x74\40\165\163", PR__MDL__SALARY), 500); goto qkyciyiwkmgkmquk; maaisuqwkymeguys: if ($gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x61\147\162\145\145\155\x65\x6e\x74")) { goto aoaqwygkaagiuuws; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\101\x67\162\x65\x65\155\145\x6e\x74\40\151\x73\x20\162\x65\161\165\x69\x72\145\x64", PR__MDL__SALARY)); goto esagiiawomyacuiw; aoaqwygkaagiuuws: $sogksuscggsicmac = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq, $kueeocmceokoouqa::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce)]); esagiiawomyacuiw: qkyciyiwkmgkmquk: return $sogksuscggsicmac; } private function mswqycukmiokeuiu(array $sogksuscggsicmac, WP_REST_Request $aqmwamyiwgeeymqa, $qecuekqmeaiykeek, $ywmkwiwkosakssii = []) : array { $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if (!($ogekyekymoyuywog && $kueeocmceokoouqa && !$this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa))) { goto ayceeyuocgowqwsa; } $saqgcoqwmimycgim = ManipulateArray::get($ywmkwiwkosakssii, $kueeocmceokoouqa::meksegaoamowuwoq); $gimugccgakegomoq = ManipulateArray::get($ywmkwiwkosakssii, $kueeocmceokoouqa::woagckamiequeoyu); $qgciakuqggmiywuk = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::meksegaoamowuwoq => $saqgcoqwmimycgim, $kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq]); $qsmaqqyoggcuyukq = $gaeqamemwmwsyukm = 0; if (!$qgciakuqggmiywuk) { goto sksgcusuyqcwqswe; } $uoomaookgsyciacm = [$ogekyekymoyuywog::iockmgiyoygcswog => $saqgcoqwmimycgim, $ogekyekymoyuywog::oguseymmyyoyaako => $qecuekqmeaiykeek, $ogekyekymoyuywog::cmiegiycgiucucgs => $gimugccgakegomoq]; $qsmaqqyoggcuyukq = $ogekyekymoyuywog->qgiewwqykwugcuoo($ogekyekymoyuywog::aioqyewkwawaqgqe, $uoomaookgsyciacm); $gaeqamemwmwsyukm = $ogekyekymoyuywog->asskucacysemeoiu($uoomaookgsyciacm); sksgcusuyqcwqswe: $sogksuscggsicmac["\151\156\x63\157\x6d\x65\x73\137\x73\x75\x6d"] = ManipulateWoocommerce::mcgaskyiamgqmqgu($qsmaqqyoggcuyukq); $sogksuscggsicmac["\x69\x6e\143\x6f\155\x65\163\x5f\x63\x6f\x75\x6e\164"] = $this->msywmyaoqmaegsuy($gaeqamemwmwsyukm); ayceeyuocgowqwsa: return $sogksuscggsicmac; } private function gayyweiqkuooeicq(WP_REST_Request $aqmwamyiwgeeymqa, $mkucggyaiaukqoce, ?WP_Error &$iswcokucwmiosiaq = null, bool $tsuauommsquiesmk = true) { $jwsqucqyaoaasykk = Model::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); $xssuewsokckmigqk = null; if (!($jwsqucqyaoaasykk && $kueeocmceokoouqa)) { goto qcssigmcayuyweiy; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); if (!($gimugccgakegomoq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\x67\x72\x65\145\155\145\x6e\164"))) { goto quamuugoocyyceec; } if (!($xssuewsokckmigqk = $jwsqucqyaoaasykk->akkkoiiymmamsauc($gimugccgakegomoq))) { goto wwcqoeuwskquakwy; } $iueymcwwscwqkiyq = $jwsqucqyaoaasykk->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $xssuewsokckmigqk, self::aqugcqsyeisayuog); $qgciakuqggmiywuk = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::woagckamiequeoyu => $gimugccgakegomoq, $kueeocmceokoouqa::meksegaoamowuwoq => $saqgcoqwmimycgim]); if (!$qgciakuqggmiywuk) { goto yyqygaokeccgugos; } if ($this->okqaggqwqcaieqoc($aqmwamyiwgeeymqa)) { goto yggseoaommssscwo; } if (!(self::yascuqeoeosyewwc === $kueeocmceokoouqa->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $qgciakuqggmiywuk, $kueeocmceokoouqa::ecysamcwsaweumeu))) { goto iuwkiyimqmgguose; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\x55\x73\145\162\40\x72\x65\x71\165\x65\x73\x74\40\x72\145\x6a\145\143\164\145\x64\40\x62\171\40\x61\x64\155\151\x6e", PR__MDL__SALARY)); iuwkiyimqmgguose: goto aeiemwacaiygemmg; yggseoaommssscwo: $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\x55\163\145\162\x20\x61\154\x72\145\x61\144\171\x20\x73\x75\x62\x6d\151\164\x20\x61\x20\x72\x65\161\165\145\163\164\x20\157\156\x20\x74\150\x69\163\x20\x61\147\x72\145\x65\155\x65\x6e\164", PR__MDL__SALARY)); aeiemwacaiygemmg: yyqygaokeccgugos: if (self::aqugcqsyeisayuog === $iueymcwwscwqkiyq) { goto kyiuewcikkqagwwg; } if ($eiaskqgsuqcysisw = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, [])) { goto eqiiaokcgakicaye; } if (!($guguqsiieswegsiy = $jwsqucqyaoaasykk->qogaqkcsogcqiaic($xssuewsokckmigqk, $jwsqucqyaoaasykk::mmisekagkomcsowm, []))) { goto ikcwmsgocyuqiumc; } $askmkgcmgekiqwsg = false; foreach ($guguqsiieswegsiy as $iqgguioieaoeaucu) { if (!ManipulateUser::askmkgcmgekiqwsg($iqgguioieaoeaucu, $mkucggyaiaukqoce, true)) { goto sicgyiyiocyygkoc; } $askmkgcmgekiqwsg = true; sicgyiyiocyygkoc: giuccakymqymawgk: } kwuckkyqaygwgcuy: if ($askmkgcmgekiqwsg) { goto cyosacayacumuaks; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\x41\x67\x72\145\x65\x6d\145\x6e\164\x20\156\157\164\40\x66\x6f\x72\40\x74\x68\145\40\x75\163\x65\x72", PR__MDL__SALARY)); cyosacayacumuaks: ikcwmsgocyuqiumc: goto gcucsowqoeiwmyyq; eqiiaokcgakicaye: if (in_array($saqgcoqwmimycgim, $eiaskqgsuqcysisw, true)) { goto oeusomaaeekakake; } $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\101\x67\x72\x65\x65\x6d\x65\156\164\x20\x6e\x6f\164\x20\146\157\162\x20\164\x68\145\40\x75\163\x65\x72", PR__MDL__SALARY)); oeusomaaeekakake: gcucsowqoeiwmyyq: goto aumowowgewgqmwci; kyiuewcikkqagwwg: $iswcokucwmiosiaq = $this->oemauiimmycumcsk(__("\101\147\x72\x65\x65\155\145\156\164\x20\x69\163\x20\x70\x72\151\x76\x61\164\145", PR__MDL__SALARY)); aumowowgewgqmwci: if (!$iswcokucwmiosiaq) { goto oasggeyceiyieuuo; } $xssuewsokckmigqk = null; oasggeyceiyieuuo: if (!($xssuewsokckmigqk && $tsuauommsquiesmk)) { goto omuauimgkygcecsc; } $xssuewsokckmigqk = $jwsqucqyaoaasykk->scqakcemaqsqkema($xssuewsokckmigqk); omuauimgkygcecsc: wwcqoeuwskquakwy: quamuugoocyyceec: qcssigmcayuyweiy: return $xssuewsokckmigqk; } }
