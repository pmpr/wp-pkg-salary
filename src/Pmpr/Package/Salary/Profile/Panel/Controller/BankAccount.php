<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61afe0f26121f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Panel\Controller; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Salary\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class BankAccount extends Controller { protected ?User $userManager = null; public function __construct() { goto giaacoqqqsekcayy; ewymsmkkiksgwysk: $this->userManager = User::symcgieuakksimmu(); goto cmegwsegsosyqcai; giaacoqqqsekcayy: $this->rest_base = "\142\x61\156\153\55\x61\x63\143\x6f\x75\x6e\x74"; goto ewymsmkkiksgwysk; cmegwsegsosyqcai: parent::__construct(); goto wmywuusgukmmaams; wmywuusgukmmaams: } public function gomiusgyskywsqai() : ?User { return $this->userManager; } public function register_routes() { goto gkyawqqcmigqgaiq; gkyawqqcmigqgaiq: $this->register("\57\x67\145\164\55\154\x69\163\164", [self::CALLBACK => [$this, "\x63\x69\165\147\x77\x6f\157\141\x73\141\x71\143\171\x77\x61\163"]]); goto ooeausyowguqicuo; ooeausyowguqicuo: $this->register("\x2f\147\x65\x74\x2d\146\x69\145\x6c\144\163", [self::CALLBACK => [$this, "\x75\x67\x6d\143\145\x63\x63\147\x77\141\x61\x61\x69\147\x69\171"]]); goto egyyiccaeeiooaua; egyyiccaeeiooaua: $this->register("\x2f\x73\x61\x76\145", ["\155\145\164\150\x6f\x64\163" => self::CREATABLE, self::CALLBACK => [$this, "\163\x61\166\145"]]); goto scisgsyemmsekgos; scisgsyemmsekgos: $this->register("\x2f\x64\x65\x6c\145\164\x65", ["\x6d\x65\164\x68\157\x64\x73" => self::DELETABLE, self::CALLBACK => [$this, "\144\145\154\x65\164\145"]]); goto cewmoqyysgsmuiya; cewmoqyysgsmuiya: } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { goto igooksugieceoege; igooksugieceoege: $ikgwqyuyckaewsow = $this->geosscgquaqosyse(); goto omqiayeucoioqoao; ugqaaewwmkocwwgy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto wgewmqieuamsoayy; omqiayeucoioqoao: $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); goto ugqaaewwmkocwwgy; wgewmqieuamsoayy: } public function delete(WP_REST_Request $aqmwamyiwgeeymqa) { goto msemumccgceyugmg; mqkmcysgoiaouiwm: $keccaugmemegoimu = $mkucggyaiaukqoce; goto kosaqwikueyksqmw; iwekmyyccgiyuecc: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\102\141\x6e\153\40\x61\143\143\x6f\x75\x6e\x74\x20\x72\x65\x6d\x6f\x76\x65\144\x20\x73\165\x63\x63\x65\163\163\146\x75\154\154\171", PR__PKG__SALARY)); goto ikqqskkqqwmwssoo; mqicocmqegwukkwg: $ygikoqaokckisawo = $wusccgcckucqsqwe->guimqgyewioyekuy($mkucggyaiaukqoce); goto qgeugwymkkiacwoc; cwwmimggaaecmucw: qmuwoecuacmkwgem: goto awoaooyoeoyeeqee; ousiuuwgwkiyikyq: goto ueigkucgaucgeimc; goto ogsaaqsaogcqiouy; ikqqskkqqwmwssoo: ueigkucgaucgeimc: goto aomysykcgikegiau; wagqgeqymeqoeuyi: if (is_wp_error($mkucggyaiaukqoce)) { goto eeauyscekuckoues; } goto qoqskyuuwueqkquk; qgeugwymkkiacwoc: $eiwicgsqoiaeawkk = ManipulateArray::get($ygikoqaokckisawo, $uusmaiomayssaecw); goto emmsycooskoqmgeg; iwsuawwqomaowuii: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x61\143\x63\x6f\165\x6e\x74\40\160\x61\162\141\155\x65\x74\x65\x72\40\x69\163\x20\x6d\x69\x73\163\x69\156\x67", PR__PKG__SALARY)); goto wcugqegqsuuuwqao; aomysykcgikegiau: wkeuuycukmuqiaom: goto cwwmimggaaecmucw; awoaooyoeoyeeqee: mwsmsguqqkcwiiuk: goto ogqmesokykywseys; mugqyyeayeyggqqk: goto qmuwoecuacmkwgem; goto acsqgiuageaasiyy; ouamogymawucwswu: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\103\x61\x6e\x20\156\x6f\164\x20\146\x69\156\x64\x20\162\145\161\x75\145\163\164\145\x64\40\x61\143\143\157\165\156\164", PR__PKG__SALARY)); goto mugqyyeayeyggqqk; miweggwqeiaeweia: if ($wusccgcckucqsqwe->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce)) { goto kqgcyoscsusgoaqi; } goto kqqiegkuqagcqsya; qoqskyuuwueqkquk: if ($uusmaiomayssaecw = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::KEY)) { goto owmuceyswmgueasi; } goto iwsuawwqomaowuii; asiqwuoswmigcaki: owmuceyswmgueasi: goto ciykoyeioqgyaeqo; kosaqwikueyksqmw: eogwckcymuugikuy: goto gicyayswqyuoekcq; kqqiegkuqagcqsya: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\x6d\145\x74\150\151\x6e\147\x20\167\162\x6f\156\x67\x20\157\156\40\x72\x65\155\x6f\166\x65\40\x70\x72\157\x63\x65\163\x73\54\x20\160\154\145\x61\x73\145\40\164\x72\171\40\x61\x67\141\x69\x6e", PR__PKG__SALARY)); goto ousiuuwgwkiyikyq; ykomgumacooyomsk: eeauyscekuckoues: goto mqkmcysgoiaouiwm; samwkqgwouggsguc: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\157\165\162\x20\x72\145\161\x75\145\x73\x74\x65\x64\40\141\x63\143\x6f\165\x6e\164\x20\146\157\162\x20\x72\x65\155\157\166\145\x20\x69\x73\40\154\x6f\x63\153\x65\144", PR__PKG__SALARY)); goto wyuemgggaqogsmsq; gicyayswqyuoekcq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto iikiiioqiyegyaak; guykyqecgswcsmws: sggawugoykqcmsug: goto kkumywowcoycymeo; wyuemgggaqogsmsq: goto wkeuuycukmuqiaom; goto guykyqecgswcsmws; msemumccgceyugmg: $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto wagqgeqymeqoeuyi; ciykoyeioqgyaeqo: $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); goto mqicocmqegwukkwg; ogsaaqsaogcqiouy: kqgcyoscsusgoaqi: goto iwekmyyccgiyuecc; kkumywowcoycymeo: ManipulateArray::unset($ygikoqaokckisawo, $uusmaiomayssaecw); goto miweggwqeiaeweia; acsqgiuageaasiyy: wakmayaoqoskekqy: goto oomguqikqokqwgku; emmsycooskoqmgeg: if ($eiwicgsqoiaeawkk) { goto wakmayaoqoskekqy; } goto ouamogymawucwswu; oomguqikqokqwgku: if (!ManipulateArray::get($eiwicgsqoiaeawkk, $wusccgcckucqsqwe::LOCKED)) { goto sggawugoykqcmsug; } goto samwkqgwouggsguc; wcugqegqsuuuwqao: goto mwsmsguqqkcwiiuk; goto asiqwuoswmigcaki; ogqmesokykywseys: goto eogwckcymuugikuy; goto ykomgumacooyomsk; iikiiioqiyegyaak: } public function save(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->cukkomiaseyomacg($aqmwamyiwgeeymqa, $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::KEY)); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { goto mscgewkcqcoowweg; suqcsgaosywaauuu: if (is_wp_error($keccaugmemegoimu)) { goto ikqeeaysmqgcgawq; } goto wwukgaquuyoissgy; gsygwgsiawgmqiyi: $oammesyieqmwuwyi = $wusccgcckucqsqwe->guimqgyewioyekuy($keccaugmemegoimu); goto qsgqwyqaqiowkmco; eucqomyqykgoiuge: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto usymasgsyqgsuocg; qikaewekoecykeou: ikqeeaysmqgcgawq: goto eucqomyqykgoiuge; wwukgaquuyoissgy: $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); goto gsygwgsiawgmqiyi; qsgqwyqaqiowkmco: $oammesyieqmwuwyi = ManipulateArray::yaeiiwwyckwugsem($oammesyieqmwuwyi, self::KEY); goto yqagomygmeoecwey; yqagomygmeoecwey: $keccaugmemegoimu = $this->ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oammesyieqmwuwyi, function ($aqmwamyiwgeeymqa, $igqsaukqcqscimok) use($wusccgcckucqsqwe) { goto yoqakewookqoqacm; esikeyqyuikmaiek: $sogksuscggsicmac["\146\x6f\x72\x6d"] = $eaoumsseceiowgsk; goto okkmcocqokkskasy; yoqakewookqoqacm: $eaoumsseceiowgsk = []; goto gswcoeiisamakwii; ocywegekakimmwcq: $sogksuscggsicmac = []; goto emqswoaawgeyosmi; okkmcocqokkskasy: $sogksuscggsicmac[self::DATA] = ManipulateArray::yaeiiwwyckwugsem($icwicymcioeyeyek); goto qiiigwkqeoewsuwm; qiiigwkqeoewsuwm: return $sogksuscggsicmac; goto esaqcqqwuussiiwo; emqswoaawgeyosmi: foreach ($igqsaukqcqscimok as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { goto gamqcwuwkikwqoay; yykqaowwsqgqysmq: $icwicymcioeyeyek[$uusmaiomayssaecw] = [self::PRIORITY => $sqqewmoeaekuyyas, self::TITLE => $meqocwsecsywiiqs, self::VALUE => $eqgoocgaqwqcimie]; goto kwiggogcgciwuwqk; gamqcwuwkikwqoay: $uescmseksquycukc = false; goto mscyggqcesgqqksu; mscyggqcesgqqksu: $meqocwsecsywiiqs = ''; goto oyeyomcgkmgymogq; oeocukauoyosicso: yiowgigkkwsoqcci: goto suqceasgacskcmkc; uckewycoogsogwiy: cuumeogeomowqisc: goto ikuuiauwouuqawuw; kwiggogcgciwuwqk: ieqesiiageaauiuw: goto uckewycoogsogwiy; wkwamkgkwykeqkec: if (!$uescmseksquycukc) { goto yiowgigkkwsoqcci; } goto oimkeqocuguqqsqk; oyeyomcgkmgymogq: $sqqewmoeaekuyyas = 0; goto iesekaeqeomeuaui; iesekaeqeomeuaui: switch ($uusmaiomayssaecw) { case $wusccgcckucqsqwe::LOCKED: goto csammceowmqwaamq; csammceowmqwaamq: $uescmseksquycukc = true; goto ocaguquugeamqckq; eekcoeikaeaaeyii: $sogksuscggsicmac[self::STATUS . self::_TITLE] = $eqgoocgaqwqcimie ? __("\x4c\x6f\x63\x6b\145\x64", PR__PKG__SALARY) : __("\x45\144\151\164\x61\142\154\x65", PR__PKG__SALARY); goto cogywoqcqummsyus; ocaguquugeamqckq: $sogksuscggsicmac[self::STATUS] = $eqgoocgaqwqcimie ? "\154\157\x63\153\145\x64" : "\145\x64\x69\x74\x61\142\154\145"; goto eekcoeikaeaaeyii; cogywoqcqummsyus: goto gcckqucukawcasgk; goto gmwykkouysyaqwqm; gmwykkouysyaqwqm: case $wusccgcckucqsqwe::TYPE: goto ugqwuugsweqgmywk; uaqackioaiqwcocy: goto gcckqucukawcasgk; goto cscusseysqygsoiy; mkwkkmkgiqiamacc: $sqqewmoeaekuyyas = 2; goto uaqackioaiqwcocy; ugqwuugsweqgmywk: $meqocwsecsywiiqs = __("\x54\171\x70\x65", PR__PKG__SALARY); goto uaukmuiwskcemcsw; uaukmuiwskcemcsw: $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; goto sockeswygwcskeuq; sockeswygwcskeuq: $eqgoocgaqwqcimie = $sqeykgyoooqysmca; goto mkwkkmkgiqiamacc; cscusseysqygsoiy: case $wusccgcckucqsqwe::BANK: goto isgwkwacoyimiauk; cgyakcqgugqgkqiw: $eqgoocgaqwqcimie = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->eoemoqciaweskqkk($eqgoocgaqwqcimie); goto eeyyskqsmquyquqw; uegouoiuyoqkcscg: $sogksuscggsicmac[self::ICON] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->kwagkemgawuoacwy($eqgoocgaqwqcimie); goto cgyakcqgugqgkqiw; mggeqkcksyaymcsa: $meqocwsecsywiiqs = __("\x42\141\x6e\153", PR__PKG__SALARY); goto uegouoiuyoqkcscg; ewscugeuicukkycc: goto gcckqucukawcasgk; goto kqswcsysqawkcgye; eeyyskqsmquyquqw: $sqqewmoeaekuyyas = 1; goto ewscugeuicukkycc; isgwkwacoyimiauk: $uescmseksquycukc = true; goto mggeqkcksyaymcsa; kqswcsysqawkcgye: case $wusccgcckucqsqwe::OWNER: goto wusciwkkckmqigms; wusciwkkckmqigms: $uescmseksquycukc = true; goto iiiccouaaqsyikae; ukkcmocamwgiqayu: $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; goto mwysseaekcsiesmm; iiiccouaaqsyikae: $meqocwsecsywiiqs = sprintf(__("\x4f\x77\156\x65\x72\40\x6f\146\40\x25\x73", PR__PKG__SALARY), $sqeykgyoooqysmca); goto ukkcmocamwgiqayu; amgsueumgaguceaa: goto gcckqucukawcasgk; goto gygwewcqsmwqismo; mwysseaekcsiesmm: $sqqewmoeaekuyyas = 0; goto amgsueumgaguceaa; gygwewcqsmwqismo: case $wusccgcckucqsqwe::IBAN: case $wusccgcckucqsqwe::DEBIT_CARD: goto uougwgeyiokewkkm; uimeeckqksqeekqq: goto gcckqucukawcasgk; goto iuuuususuuuaieem; uykousayyomcaeaa: $sqqewmoeaekuyyas = 99; goto uimeeckqksqeekqq; gommacygsykyussk: $eaoumsseceiowgsk[$uusmaiomayssaecw] = ManipulateArray::get($igqsaukqcqscimok, $wusccgcckucqsqwe::ESCAPED); goto ukqocwewouckikso; ukqocwewouckikso: $eqgoocgaqwqcimie = $this->msywmyaoqmaegsuy($eqgoocgaqwqcimie); goto ucqmumuygcywwqma; ucqmumuygcywwqma: $meqocwsecsywiiqs = sprintf(__("\x4e\x75\155\x62\x65\162\40\157\146\x20\x25\163", PR__PKG__SALARY), $sqeykgyoooqysmca); goto uykousayyomcaeaa; uougwgeyiokewkkm: $uescmseksquycukc = true; goto gommacygsykyussk; iuuuususuuuaieem: case $wusccgcckucqsqwe::KEY: case $wusccgcckucqsqwe::ESCAPED: goto kocqqoyymosmuksu; qukocuwgakemmyga: goto gcckqucukawcasgk; goto sioekkmekwygemyc; uqokiksoqcwwqgio: $eaoumsseceiowgsk[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; goto qukocuwgakemmyga; kocqqoyymosmuksu: $uescmseksquycukc = true; goto uqokiksoqcwwqgio; sioekkmekwygemyc: } goto wsesqmcqoiyyqkqi; wsesqmcqoiyyqkqi: qmkaeeomgkwggoyo: goto mogkoocsoeuyoqqa; suqceasgacskcmkc: if (!$meqocwsecsywiiqs) { goto ieqesiiageaauiuw; } goto yykqaowwsqgqysmq; oimkeqocuguqqsqk: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; goto oeocukauoyosicso; mogkoocsoeuyoqqa: gcckqucukawcasgk: goto wkwamkgkwykeqkec; ikuuiauwouuqawuw: } goto iwsmmkqaoksmocok; yuimwyoywaiiqacs: $sqeykgyoooqysmca = $wusccgcckucqsqwe->mmymimkumuekmmgi()->yuuwwswmwmgmcyem(ManipulateArray::get($igqsaukqcqscimok, self::TYPE)); goto ocywegekakimmwcq; gswcoeiisamakwii: $icwicymcioeyeyek = []; goto yuimwyoywaiiqacs; iwsmmkqaoksmocok: uiosisocuwokwkie: goto esikeyqyuikmaiek; esaqcqqwuussiiwo: }); goto qikaewekoecykeou; mscgewkcqcoowweg: $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto suqcsgaosywaauuu; usymasgsyqgsuocg: } private function cukkomiaseyomacg($aqmwamyiwgeeymqa, $uusmaiomayssaecw = false) { goto aoquoewagkseayug; mgcuiguaomoqwwwm: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\x6f\x75\40\x72\x65\161\165\x65\163\x74\x65\x64\x20\x61\x63\x63\157\x75\156\x74\x20\146\x6f\x72\x20\145\x64\151\x74\x20\x74\x68\141\164\x20\x6e\x6f\x74\x20\x65\170\x69\x73\x74", PR__PKG__SALARY), 400); goto eoyiumycaigawmmc; kqyoakickmseyyeq: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\x6d\145\x74\150\151\156\x67\x20\167\x72\x6f\x6e\147\x20\x6f\156\40\x73\x61\x76\151\156\x67\x20\160\162\157\x63\x65\x73\163\x2c\40\x70\x6c\x65\141\163\x65\x20\x74\162\x79\40\141\x67\x61\x69\x6e", PR__PKG__SALARY)); goto micceocwuwkyusic; mkomygccqkmkumsi: $uqyaagwcuoewkkss = $wusccgcckucqsqwe->mmymimkumuekmmgi(); goto ussceseaimqywuiy; oyiuemaaykgkqqam: $sqeykgyoooqysmca = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $wusccgcckucqsqwe::TYPE); goto gqmewagyagamokok; ykwasaaoeeiuomim: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x42\141\x6e\153\x20\x61\143\143\157\165\x6e\164\x20\163\x61\x76\x65\144\40\x73\x75\143\x63\145\x73\163\x66\x75\x6c\x6c\x79", PR__PKG__SALARY)); goto acggikioyeueeowg; kaiesowkgwogqseg: agkmiayuawacakau: goto kicwiowcogmauwiy; yamyagayiooyeekg: if (!is_wp_error($gmcgeogogyqsgawk)) { goto ucuoeymyqeokgsya; } goto yoagcooekomeokwg; easqmyamcmeesgya: if ($qmomekeesaiaoegu) { goto sguskaeaaqcagqgc; } goto yuqgwwmqwqiuwmaw; ciucewqgyoiouesq: if (is_wp_error($mkucggyaiaukqoce)) { goto egsycocugqyyswsi; } goto cgmgqucewwssmicq; ceiwqkyquikcemmo: qkcsykuocwuyaice: goto ukomuiwukymcoaso; kicwiowcogmauwiy: oocuemosmeeekgas: goto cwswueuqoamqasya; ussceseaimqywuiy: $miowmmgaiagcuyoo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $wusccgcckucqsqwe::OWNER); goto oyiuemaaykgkqqam; csieaismmmocyacu: qiaimmucomukkeka: goto aquqkiggamaoegoo; quaqmuusokiyqgqe: goto agkmiayuawacakau; goto smiemmcqqukyguuu; yuqgwwmqwqiuwmaw: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\131\157\x75\162\x20\142\x61\x6e\153\x20\151\163\x20\156\x6f\x74\40\x73\165\x70\x70\x6f\162\164\40\x6f\162\40\171\157\x75\162\40\x65\x6e\164\x65\162\x65\x64\40\45\x73\40\151\163\x20\156\157\x74\x20\x76\141\154\x69\144", PR__PKG__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem($sqeykgyoooqysmca)), 400); goto quaqmuusokiyqgqe; uycesqqkoeamocgm: goto uoeasoimegouymka; goto ceiwqkyquikcemmo; ukomuiwukymcoaso: $eqgoocgaqwqcimie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, $sqeykgyoooqysmca); goto wkgskiuiukiuyque; aquqkiggamaoegoo: return $keccaugmemegoimu; goto mykiyqcqiegkiqys; iksewmsaugayqaqq: $gmcgeogogyqsgawk = $wusccgcckucqsqwe->aceogymkeuswukyi([$sqeykgyoooqysmca => $eqgoocgaqwqcimie, $wusccgcckucqsqwe::OWNER => $miowmmgaiagcuyoo, $wusccgcckucqsqwe::TYPE => $sqeykgyoooqysmca, $wusccgcckucqsqwe::BANK => $qmomekeesaiaoegu]); goto yamyagayiooyeekg; yssqmyoaokkksukc: if (!$ksiyqouuaoymsycg) { goto zayqqeqgcwkekwws; } goto ooqksueucyagyuoe; mmgmqogugasaqkgg: $gmcgeogogyqsgawk[self::KEY] = $uusmaiomayssaecw; goto wmumywgyyeagqoeq; sgiwoiscywusgmmm: $eiwicgsqoiaeawkk = ManipulateArray::get($ygikoqaokckisawo, $uusmaiomayssaecw); goto skuqigsokaguscas; iwueukqcywkiyqge: aueaceeyommgkicu: goto ykwasaaoeeiuomim; gqmewagyagamokok: if ($miowmmgaiagcuyoo && $sqeykgyoooqysmca) { goto qkcsykuocwuyaice; } goto sqmoqymckwsogsqg; cwswueuqoamqasya: uoeasoimegouymka: goto kgmeiwiakwicgkkk; oyiuyywyeoskckuw: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x56\141\x6c\x75\145\x20\157\146\x20\45\x73\x20\151\163\x20\x72\x65\x71\165\151\x72\x65", PR__PKG__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem($sqeykgyoooqysmca)), 400); goto goqmywuiicciasyk; osmmoyqkqoucsgow: zayqqeqgcwkekwws: goto wgiygcmqaokywuqa; qkuiwoqksgayqqmg: $qmomekeesaiaoegu = $uqyaagwcuoewkkss->gcquickqgyqooyyu($eqgoocgaqwqcimie, $sqeykgyoooqysmca); goto easqmyamcmeesgya; aoquoewagkseayug: $keccaugmemegoimu = null; goto osuscoaaomwcqkew; wgiygcmqaokywuqa: if (is_wp_error($keccaugmemegoimu)) { goto egmayaiikwsskgmy; } goto iauwuugggmegwisk; osuscoaaomwcqkew: $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto ciucewqgyoiouesq; yoagcooekomeokwg: $keccaugmemegoimu = $gmcgeogogyqsgawk; goto eckcqesiokgwkkiw; eckcqesiokgwkkiw: goto yuuyikiacmmueosu; goto ecouwqosmoyyqmkw; kgmeiwiakwicgkkk: goto qiaimmucomukkeka; goto suuskagowwgsouqw; micceocwuwkyusic: goto mysueeoswqgccmui; goto iwueukqcywkiyqge; smiemmcqqukyguuu: sguskaeaaqcagqgc: goto iksewmsaugayqaqq; sqmoqymckwsogsqg: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4d\x69\163\x73\x69\156\147\40\163\x6f\155\x65\40\x72\145\x71\x75\151\162\x65\x20\x66\x69\x65\x6c\144\163", PR__PKG__SALARY), 400); goto uycesqqkoeamocgm; egaymskkosukqeao: yuuyikiacmmueosu: goto kaiesowkgwogqseg; omykokikgocoikec: $keccaugmemegoimu = $mkucggyaiaukqoce; goto csieaismmmocyacu; wkgskiuiukiuyque: if ($eqgoocgaqwqcimie) { goto syuaummumssgwwee; } goto oyiuyywyeoskckuw; skuqigsokaguscas: if (!$eiwicgsqoiaeawkk) { goto aiccyaswigkaycqk; } goto quyogmwugsyoaaiu; ecouwqosmoyyqmkw: ucuoeymyqeokgsya: goto mqiiqkuaoekeuswo; siecswkggyikqkga: syuaummumssgwwee: goto qkuiwoqksgayqqmg; suuskagowwgsouqw: egsycocugqyyswsi: goto omykokikgocoikec; ooqksueucyagyuoe: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\157\165\x20\141\x6c\x72\145\x61\x64\171\x20\141\x64\x64\145\144\x20\x74\150\x69\x73\40\x61\x63\x63\x6f\x75\156\x74\40\x6e\x75\155\142\x65\x72", PR__PKG__SALARY), 400); goto osmmoyqkqoucsgow; mqiiqkuaoekeuswo: $ygikoqaokckisawo = $wusccgcckucqsqwe->guimqgyewioyekuy($mkucggyaiaukqoce); goto qmoocweoekqueuyy; smcguieygyqcaqgs: aiccyaswigkaycqk: goto mgcuiguaomoqwwwm; wmumywgyyeagqoeq: goto sqyokemumceysegy; goto smcguieygyqcaqgs; cwikoaeqmmoimmso: egmayaiikwsskgmy: goto egaymskkosukqeao; yuoeumyiuqkuouey: oqousikwiiqagoyw: goto eyiwqgqcsqakwqss; quyogmwugsyoaaiu: ManipulateArray::unset($ygikoqaokckisawo, $uusmaiomayssaecw); goto mmgmqogugasaqkgg; acggikioyeueeowg: mysueeoswqgccmui: goto cwikoaeqmmoimmso; eoyiumycaigawmmc: sqyokemumceysegy: goto yuoeumyiuqkuouey; iauwuugggmegwisk: $ygikoqaokckisawo[$uusmaiomayssaecw] = $gmcgeogogyqsgawk; goto aukucaieceiwesmm; eyiwqgqcsqakwqss: $ygogqywsaqoukoqy = $gmcgeogogyqsgawk[$wusccgcckucqsqwe::ESCAPED]; goto sckioayasmkcoeoo; sckioayasmkcoeoo: [$ksiyqouuaoymsycg, $gwsycqoiookakscg] = ManipulateArray::ksiyqouuaoymsycg($ygikoqaokckisawo, $wusccgcckucqsqwe::ESCAPED, $ygogqywsaqoukoqy); goto yssqmyoaokkksukc; cgmgqucewwssmicq: $wusccgcckucqsqwe = $this->gomiusgyskywsqai(); goto mkomygccqkmkumsi; qmoocweoekqueuyy: if (!$uusmaiomayssaecw) { goto oqousikwiiqagoyw; } goto sgiwoiscywusgmmm; goqmywuiicciasyk: goto oocuemosmeeekgas; goto siecswkggyikqkga; aukucaieceiwesmm: if ($wusccgcckucqsqwe->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce)) { goto aueaceeyommgkicu; } goto kqyoakickmseyyeq; mykiyqcqiegkiqys: } private function geosscgquaqosyse() : array { return [Form::ymuegqgyuagyucws(User::OWNER, __("\101\143\143\x6f\165\x6e\x74\40\117\167\156\145\162\x20\116\141\155\x65", PR__PKG__SALARY))->eumecwmqmukqgyea(), Form::yyuwuqsiucweeoue(User::TYPE, __("\x41\x63\x63\157\x75\x6e\x74\40\x54\x79\x70\145", PR__PKG__SALARY))->kesomeowemmyygey(User::IBAN, __("\x49\102\x41\x4e", PR__PKG__SALARY))->kesomeowemmyygey(User::DEBIT_CARD, __("\x44\x65\x62\151\164\40\103\141\162\x64", PR__PKG__SALARY))->agywyaaquwawwuiy([User::IBAN => User::IBAN, User::DEBIT_CARD => User::DEBIT_CARD])->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(User::IBAN, __("\x49\102\x41\116", PR__PKG__SALARY))->uagmgmommooaewkk()->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(User::DEBIT_CARD, __("\104\x65\x62\x69\164\40\103\x61\x72\x64", PR__PKG__SALARY))->wykoackkeuuqeyss()->eumecwmqmukqgyea()]; } }
