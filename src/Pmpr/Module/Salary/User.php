<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284e4757f6ae             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Select; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Error; class User extends Container { protected ?Validator $validator = null; public function mmymimkumuekmmgi() : ?Validator { return $this->validator; } public function __construct() { $this->validator = Validator::symcgieuakksimmu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\x69\x6e\151\x74"])->qcsmikeggeemccuu("\163\x68\x6f\167\137\165\163\x65\162\137\160\x72\157\x66\151\154\x65", [$this, "\141\167\153\x71\153\161\141\x75\x77\x77\x75\x71\147\145\x77\x75"])->qcsmikeggeemccuu("\145\x64\151\164\137\x75\x73\x65\162\137\160\162\x6f\x66\x69\x6c\x65", [$this, "\141\167\153\161\153\x71\141\x75\x77\167\x75\x71\147\x65\167\165"])->qcsmikeggeemccuu("\160\145\x72\163\x6f\156\141\x6c\x5f\157\x70\164\151\x6f\156\x73\x5f\x75\160\x64\x61\x74\x65", [$this, "\155\x73\171\163\x67\161\x65\x65\167\153\x71\x67\163\143\167\x65"])->qcsmikeggeemccuu("\145\x64\151\x74\137\x75\x73\x65\162\137\x70\x72\x6f\x66\x69\x6c\145\x5f\x75\160\144\x61\x74\x65", [$this, "\x6d\x73\x79\163\x67\161\145\145\167\153\161\x67\x73\x63\167\145"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x6f\x6f\x63\x6f\x6d\x6d\145\162\143\145\137\x64\151\x73\x61\142\154\x65\x5f\141\x64\x6d\151\156\137\x62\141\162", [$this, "\145\x6f\x73\163\x6d\x6f\x79\147\x73\145\x69\x65\153\x65\x77\x71"]); parent::kgquecmsgcouyaya(); } public function init() { DecoratorUser::secqmksoyausymio(self::yuqaieqcaccggqck, __("\103\x6f\154\154\141\x62\x6f\162\141\164\x6f\x72", PR__MDL__SALARY), ["\x72\145\x61\x64" => true]); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($eygsasmqycagyayw && ManipulateUser::eoyueosccuoeqkee())) { goto gicyayswqyuoekcq; } if (!($uqyaagwcuoewkkss = Validator::symcgieuakksimmu())) { goto kosaqwikueyksqmw; } $kgkkgoqacescqgsy = __("\111\164\47\x73\x20\x6e\157\x74\x20\141\40\166\x61\154\151\x64\40\x25\x73", PR__MDL__SALARY); $oucioakwecwsakic = __("\x50\154\145\x61\163\145\x20\x73\145\154\x65\x63\x74\40\x61\40\45\163", PR__MDL__SALARY); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x75\163\x65\162", $eygsasmqycagyayw->get("\165\x73\x65\162\56\152\163"))->ayuciigykaswwqeo("\x6a\x71\x75\x65\162\171"))->ikqyiskqaaymscgw("\155\145\163\x73\141\x67\x65\163", ["\x69\156\166\x61\154\x69\x64" => ["\x61\144\x64\137\156\145\x77" => $this->imqmyggquiyewkww(__("\123\x6f\x72\x72\x79\x2c\x20\x79\157\x75\40\143\141\x6e\x20\156\157\x74\40\x61\144\x64\x20\156\145\167\40\142\141\x6e\x6b\x20\151\x6e\x66\157\x2c\40\x73\157\x6d\145\x20\160\162\145\166\x69\157\x75\163\x20\x69\x74\145\155\x20\x69\x73\40\156\x6f\x74\40\166\141\154\x69\x64\56", PR__MDL__SALARY), ["\x63\154\141\163\x73" => "\155\154\55\x32"]), self::oogeqgcgkamuoaoe => sprintf($oucioakwecwsakic, __("\x42\141\156\153", PR__MDL__SALARY)), self::iockmgiyoygcswog => sprintf($kgkkgoqacescqgsy, __("\117\x77\156\x65\162", PR__MDL__SALARY)) . "\x2e\x20" . sprintf(__("\x50\x6c\x65\x61\163\145\40\145\x6e\x74\145\x72\x20\x61\x74\40\154\x65\141\x73\164\40\x25\x73\x20\x63\150\x61\x72\141\x63\x74\145\x72\163", PR__MDL__SALARY), $this->msywmyaoqmaegsuy(6)), self::wyqmcowecikgawuu => sprintf($kgkkgoqacescqgsy, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::wyqmcowecikgawuu)), self::squoamkioomemiyi => sprintf($oucioakwecwsakic, __("\101\143\x63\157\165\x6e\164\40\111\x6e\146\x6f\x72\x6d\141\164\x69\157\156\x20\x54\171\x70\145", PR__MDL__SALARY)), self::skyceaacaaaamiii => sprintf($kgkkgoqacescqgsy, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::skyceaacaaaamiii)), "\142\141\156\153\x5f\156\x6f\x74\x5f\144\x65\164\145\x63\164\x65\144" => __("\131\157\x75\x72\40\x61\143\143\157\x75\156\x74\40\163\x70\145\143\x69\146\x69\x63\141\164\151\x6f\x6e\x73\x20\x6e\157\164\40\163\165\160\160\157\x72\x74\x65\144\x2c\x20\160\154\145\141\163\x65\x20\141\144\x64\40\151\156\x66\157\162\x6d\x61\164\x69\157\x6e\x20\x62\141\163\145\144\40\x6f\156\40\163\x75\x70\160\157\x72\x74\x65\x64\40\x62\x61\x6e\153\163\56", PR__MDL__SALARY), "\x64\165\160\154\151\x63\141\164\x65\137\x73\x70\145\x63\x69\x66\151\143\x61\164\x69\157\156" => __("\123\157\162\x72\171\x2c\40\x74\150\x69\163\40\x76\x61\x6c\165\145\40\141\x6c\162\x65\x61\144\x79\x20\145\x78\x69\163\164\x20\x69\156\40\160\x72\x65\x76\x69\157\165\x73\x20\x69\x74\x65\x6d\x73\x2e", PR__MDL__SALARY)]])->ikqyiskqaaymscgw("\x70\x72\x65\146\x69\170\x65\x73", [self::wyqmcowecikgawuu => $uqyaagwcuoewkkss->cyuweacmssmikssi(), self::skyceaacaaaamiii => $uqyaagwcuoewkkss->cmkgoqaaysaasiom()]); kosaqwikueyksqmw: gicyayswqyuoekcq: } public function eossmoygseiekewq($ikcaescyugmgiegq) { if (!DecoratorUser::scmcyesmmikkucie(self::yuqaieqcaccggqck)) { goto iikiiioqiyegyaak; } $ikcaescyugmgiegq = false; iikiiioqiyegyaak: return $ikcaescyugmgiegq; } public function awkqkqauwwuqgewu($mkucggyaiaukqoce) { if (!($uqyaagwcuoewkkss = $this->mmymimkumuekmmgi())) { goto ocaguquugeamqckq; } $ygikoqaokckisawo = $this->guimqgyewioyekuy($mkucggyaiaukqoce, "\x69\x6e\x64\x65\x78"); $ikgwqyuyckaewsow = [MetaBox::iseogkiymousogom(self::qagqayweyigciamg, __("\102\141\x6e\x6b\40\101\143\x63\x6f\x75\156\x74\x20\x49\156\x66\157\x72\x6d\141\x74\x69\x6f\x6e", PR__MDL__SALARY))->mkksewyosgeumwsa($uqyaagwcuoewkkss->auawsikwmsucqccc(self::oogeqgcgkamuoaoe)->eumecwmqmukqgyea())->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::squoamkioomemiyi, __("\x41\143\x63\x6f\x75\x6e\x74\x20\111\x6e\146\x6f\x72\x6d\x61\x74\x69\157\x6e\40\124\x79\x70\x65", PR__MDL__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem())->wmwikuasuocmqycw([self::ymckmcsiymwqucoq => self::oogeqgcgkamuoaoe, self::sssoieywiewykmam => $this->uyocacmiaawcwkyy()])->oeeumggeiyyckkom(self::wyqmcowecikgawuu, self::wyqmcowecikgawuu)->oeeumggeiyyckkom(self::skyceaacaaaamiii, self::skyceaacaaaamiii)->qigsyyqgewgskemg("\141\143\143\157\165\156\x74\x2d\164\171\160\x65")->eumecwmqmukqgyea())->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::skyceaacaaaamiii, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::skyceaacaaaamiii))->wykoackkeuuqeyss()->qigsyyqgewgskemg("\x63\141\162\144\x2d\x76\141\x6c\x75\145"))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::wyqmcowecikgawuu, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::wyqmcowecikgawuu))->uagmgmommooaewkk()->qigsyyqgewgskemg("\x69\x62\141\156\55\x76\x61\154\165\x65"))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::iockmgiyoygcswog, __("\101\x63\143\157\x75\x6e\x74\x20\117\167\x6e\145\162\40\116\141\155\145", PR__MDL__SALARY))->eumecwmqmukqgyea()->qigsyyqgewgskemg("\x61\143\143\157\165\156\164\55\x6f\167\156\x65\162"))->mkksewyosgeumwsa(MetaBox::cwiuiiakukcsaakw(self::wagwccqcqwgsoyoi)->qigsyyqgewgskemg("\141\143\143\x6f\165\x6e\x74\x2d\x6c\x6f\143\153\x65\144"))->mkksewyosgeumwsa(MetaBox::cwiuiiakukcsaakw(self::ascagqcquwgmygkm))->qigsyyqgewgskemg("\x63\157\154\55\170\x6c\x2d\x34")->iygyugseyaqwywyg($ygikoqaokckisawo)]; foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto qmkaeeomgkwggoyo; } $ymqmyyeuycgmigyo = $aiowsaccomcoikus->aakmagwggmkoiiyu(); $aiowsaccomcoikus->usuqmwksoeaayaig(''); $woiqcqksaumcwwuc = self::uissasisiuymwsmu; if (!$aiowsaccomcoikus instanceof Group) { goto gcckqucukawcasgk; } $woiqcqksaumcwwuc = self::qescuiwgsyuikume; gcckqucukawcasgk: $ikgwqyuyckaewsow[$momcykaoccoymeig] = [$woiqcqksaumcwwuc => $ymqmyyeuycgmigyo, self::gouqcwikiiygyasc => $aiowsaccomcoikus->mwikyscisascoeea(), self::gsqoooskigukokks => $aiowsaccomcoikus->render()]; qmkaeeomgkwggoyo: cuumeogeomowqisc: } uiosisocuwokwkie: if (!$ikgwqyuyckaewsow) { goto csammceowmqwaamq; } echo $this->iuygowkemiiwqmiw("\160\162\x6f\146\x69\x6c\145", [self::qescuiwgsyuikume => __("\x49\x6e\x63\x6f\155\x65\40\x61\x6e\144\40\x50\x61\171\155\145\156\x74", PR__MDL__SALARY), self::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]); csammceowmqwaamq: ocaguquugeamqckq: } public function msysgqeewkqgscwe($mkucggyaiaukqoce, $ygikoqaokckisawo = []) { $oammesyieqmwuwyi = []; if ($ygikoqaokckisawo) { goto eekcoeikaeaaeyii; } $ygikoqaokckisawo = ManipulateServer::ayueggmoqeeukqmq(self::qagqayweyigciamg, []); eekcoeikaeaaeyii: if (!($ygikoqaokckisawo && is_array($ygikoqaokckisawo))) { goto sockeswygwcskeuq; } $gwscsiewquwmkkgu = $this->guimqgyewioyekuy($mkucggyaiaukqoce, self::wagwccqcqwgsoyoi); foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { $igqsaukqcqscimok = $this->aceogymkeuswukyi($eiwicgsqoiaeawkk); if (!($igqsaukqcqscimok && !is_wp_error($igqsaukqcqscimok) && ($uusmaiomayssaecw = $igqsaukqcqscimok[self::ascagqcquwgmygkm]) && !isset($gwscsiewquwmkkgu[$uusmaiomayssaecw]))) { goto ugqwuugsweqgmywk; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = $igqsaukqcqscimok; ugqwuugsweqgmywk: gmwykkouysyaqwqm: } cogywoqcqummsyus: if (!$gwscsiewquwmkkgu) { goto uaukmuiwskcemcsw; } $oammesyieqmwuwyi = $gwscsiewquwmkkgu + $oammesyieqmwuwyi; uaukmuiwskcemcsw: $this->ksmqawcowkmegigw($oammesyieqmwuwyi, $mkucggyaiaukqoce); sockeswygwcskeuq: } public function aceogymkeuswukyi($eiwicgsqoiaeawkk) { $uqyaagwcuoewkkss = $this->mmymimkumuekmmgi(); if (!ManipulateArray::uuegkqwagymmusiy($eiwicgsqoiaeawkk, [self::squoamkioomemiyi, self::iockmgiyoygcswog, self::oogeqgcgkamuoaoe])) { goto isgwkwacoyimiauk; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\123\x6f\x6d\x65\40\162\x65\x71\165\x69\x72\x65\x20\160\x61\x72\141\155\x65\x74\145\162\x73\40\x69\x73\40\x6d\151\x73\163\x69\156\147", PR__MDL__SALARY)); goto mggeqkcksyaymcsa; isgwkwacoyimiauk: $qmomekeesaiaoegu = ManipulateArray::get($eiwicgsqoiaeawkk, self::oogeqgcgkamuoaoe); $sqeykgyoooqysmca = ManipulateArray::get($eiwicgsqoiaeawkk, self::squoamkioomemiyi); $miowmmgaiagcuyoo = ManipulateArray::get($eiwicgsqoiaeawkk, self::iockmgiyoygcswog); $eqgoocgaqwqcimie = ManipulateArray::get($eiwicgsqoiaeawkk, $sqeykgyoooqysmca, ''); $ygogqywsaqoukoqy = str_replace("\40", '', $eqgoocgaqwqcimie); if ($uqyaagwcuoewkkss->uqyqsuqogawkesee($qmomekeesaiaoegu)) { goto uaqackioaiqwcocy; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\102\x61\156\153\x20\151\163\40\x6e\x6f\x74\x20\163\x75\x70\160\x6f\x72\x74\145\x64", PR__MDL__SALARY)); goto cscusseysqygsoiy; uaqackioaiqwcocy: $sogksuscggsicmac = $uqyaagwcuoewkkss->kuuugksiksqcaaaa([self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, self::squoamkioomemiyi => $sqeykgyoooqysmca, self::oogeqgcgkamuoaoe => $qmomekeesaiaoegu]); if (is_wp_error($sogksuscggsicmac)) { goto mkwkkmkgiqiamacc; } $sogksuscggsicmac = [$sqeykgyoooqysmca => $eqgoocgaqwqcimie, self::squoamkioomemiyi => $sqeykgyoooqysmca, self::oogeqgcgkamuoaoe => $qmomekeesaiaoegu, self::iockmgiyoygcswog => $miowmmgaiagcuyoo, self::wagwccqcqwgsoyoi => false, self::cqkcksqwkcsiykuq => $ygogqywsaqoukoqy]; mkwkkmkgiqiamacc: cscusseysqygsoiy: mggeqkcksyaymcsa: return $sogksuscggsicmac; } public function ksmqawcowkmegigw($oammesyieqmwuwyi, $mkucggyaiaukqoce) { if (!$oammesyieqmwuwyi) { goto uegouoiuyoqkcscg; } $oammesyieqmwuwyi = array_values(ManipulateArray::ggkqgwsekcwaaawa($oammesyieqmwuwyi)); $oammesyieqmwuwyi = array_values(ManipulateArray::ggkqgwsekcwaaawa($oammesyieqmwuwyi)); uegouoiuyoqkcscg: return ManipulateUser::ksmqawcowkmegigw(self::qagqayweyigciamg, $oammesyieqmwuwyi, $mkucggyaiaukqoce); } public function oiagiswyysamcyag($mkucggyaiaukqoce, $uusmaiomayssaecw) { $ygikoqaokckisawo = $this->guimqgyewioyekuy($mkucggyaiaukqoce); $eiwicgsqoiaeawkk = ManipulateArray::get($ygikoqaokckisawo, $uusmaiomayssaecw); if (!$eiwicgsqoiaeawkk) { goto cgyakcqgugqgkqiw; } $eiwicgsqoiaeawkk[self::wagwccqcqwgsoyoi] = true; $ygikoqaokckisawo[$uusmaiomayssaecw] = $eiwicgsqoiaeawkk; $this->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce); cgyakcqgugqgkqiw: } public function kkqikgwyqqmukogk($miowmmgaiagcuyoo, $uusmaiomayssaecw) : string { $eiwicgsqoiaeawkk = $this->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $uusmaiomayssaecw); $ymqmyyeuycgmigyo = ManipulateArray::get($eiwicgsqoiaeawkk, self::iockmgiyoygcswog); $ygogqywsaqoukoqy = ManipulateArray::get($eiwicgsqoiaeawkk, self::cqkcksqwkcsiykuq); return sprintf("\45\x73\x20\50\45\163\x29", $ymqmyyeuycgmigyo, $ygogqywsaqoukoqy); } public function ogimyyckeeygkmyc($mkucggyaiaukqoce, $uusmaiomayssaecw) { $ygikoqaokckisawo = $this->guimqgyewioyekuy($mkucggyaiaukqoce); return ManipulateArray::get($ygikoqaokckisawo, $uusmaiomayssaecw, false); } public function guimqgyewioyekuy($mkucggyaiaukqoce, $aqykuigiuwmmcieu = self::ALL) : array { $sogksuscggsicmac = []; $ygikoqaokckisawo = ManipulateUser::igawqaomowicuayw(self::qagqayweyigciamg, $mkucggyaiaukqoce, true); if (!(is_array($ygikoqaokckisawo) && $ygikoqaokckisawo)) { goto mwysseaekcsiesmm; } foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { $eiwicgsqoiaeawkk[self::ciyoccqkiamemcmm] = ManipulateArray::get($eiwicgsqoiaeawkk, self::squoamkioomemiyi, ManipulateArray::get($eiwicgsqoiaeawkk, self::cqkcksqwkcsiykuq)); if ($aqykuigiuwmmcieu === "\x69\156\x64\x65\170") { goto iiiccouaaqsyikae; } if (!($aqykuigiuwmmcieu === self::ALL || ManipulateArray::get($eiwicgsqoiaeawkk, $aqykuigiuwmmcieu, false))) { goto wusciwkkckmqigms; } $uusmaiomayssaecw = ManipulateArray::get($eiwicgsqoiaeawkk, self::ascagqcquwgmygkm); if (!$uusmaiomayssaecw) { goto kqswcsysqawkcgye; } $sogksuscggsicmac[$uusmaiomayssaecw] = $eiwicgsqoiaeawkk; kqswcsysqawkcgye: wusciwkkckmqigms: goto ukkcmocamwgiqayu; iiiccouaaqsyikae: $sogksuscggsicmac[] = $eiwicgsqoiaeawkk; ukkcmocamwgiqayu: ewscugeuicukkycc: } eeyyskqsmquyquqw: mwysseaekcsiesmm: return $sogksuscggsicmac; } public function uyocacmiaawcwkyy() : array { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $qecuekqmeaiykeek = []; if (!is_array($aacykmqwasyaykgu)) { goto uimeeckqksqeekqq; } foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $aqsekqkimiekimei = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::gskosgoeymsumieq); $qgeeqyucwycemwmo = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::aewsykuggcssqeyo); if (!($qgeeqyucwycemwmo && $aqsekqkimiekimei)) { goto uykousayyomcaeaa; } foreach ($aqsekqkimiekimei as $qmomekeesaiaoegu) { foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { $qecuekqmeaiykeek[] = $this->mqyckeaqgokeqwuq($qqqskcogoyswqaum, [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::oogeqgcgkamuoaoe => $qmomekeesaiaoegu]); ucqmumuygcywwqma: } ukqocwewouckikso: gommacygsykyussk: } uougwgeyiokewkkm: uykousayyomcaeaa: gygwewcqsmwqismo: } amgsueumgaguceaa: uimeeckqksqeekqq: return array_filter($qecuekqmeaiykeek); } public function uwoesmooocquykum($mkucggyaiaukqoce, $aokagokqyuysuksm = "\x62\x61\156\153\x5f\151\156\x66\157\163") : array { $ygikoqaokckisawo = $this->guimqgyewioyekuy($mkucggyaiaukqoce); $qecuekqmeaiykeek = $ykiyyumywksqcisg = $iwkyyocymeukcceu = []; if (!$ygikoqaokckisawo) { goto ieqesiiageaauiuw; } $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); foreach ($ygikoqaokckisawo as $uusmaiomayssaecw => $eiwicgsqoiaeawkk) { $qmomekeesaiaoegu = ManipulateArray::get($eiwicgsqoiaeawkk, self::oogeqgcgkamuoaoe); $sqeykgyoooqysmca = ManipulateArray::get($eiwicgsqoiaeawkk, self::squoamkioomemiyi); $miowmmgaiagcuyoo = ManipulateArray::get($eiwicgsqoiaeawkk, self::iockmgiyoygcswog); $ygogqywsaqoukoqy = ManipulateArray::get($eiwicgsqoiaeawkk, self::cqkcksqwkcsiykuq); if (!($sqeykgyoooqysmca && $qmomekeesaiaoegu && $miowmmgaiagcuyoo)) { goto yiowgigkkwsoqcci; } $eqgoocgaqwqcimie = ManipulateArray::get($eiwicgsqoiaeawkk, $sqeykgyoooqysmca, $ygogqywsaqoukoqy); $ykiyyumywksqcisg[$uusmaiomayssaecw] = $this->mmymimkumuekmmgi()->kwagkemgawuoacwy($qmomekeesaiaoegu); $iwkyyocymeukcceu[$uusmaiomayssaecw] = sprintf("\45\163\x20\x2d\40\45\163", $miowmmgaiagcuyoo, $eqgoocgaqwqcimie); foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $qgeeqyucwycemwmo = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::aewsykuggcssqeyo); $aqsekqkimiekimei = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::gskosgoeymsumieq); if (!(in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo) && in_array($qmomekeesaiaoegu, $aqsekqkimiekimei))) { goto sioekkmekwygemyc; } $qecuekqmeaiykeek[] = $this->mqyckeaqgokeqwuq($qqqskcogoyswqaum, [$aokagokqyuysuksm => $uusmaiomayssaecw]); sioekkmekwygemyc: qukocuwgakemmyga: } uqokiksoqcwwqgio: yiowgigkkwsoqcci: kocqqoyymosmuksu: } iuuuususuuuaieem: ieqesiiageaauiuw: return [$qecuekqmeaiykeek, $iwkyyocymeukcceu, $ykiyyumywksqcisg]; } public function ysqqicckeiweemmu($mkucggyaiaukqoce, $aokagokqyuysuksm = "\x62\x61\156\x6b\x5f\151\156\x66\x6f\163") : ?Select { $gmksciycsesoouoi = null; [$qecuekqmeaiykeek, $iwkyyocymeukcceu, $ykiyyumywksqcisg] = $this->uwoesmooocquykum($mkucggyaiaukqoce, $aokagokqyuysuksm); if (!($ykiyyumywksqcisg && $iwkyyocymeukcceu)) { goto gamqcwuwkikwqoay; } $gmksciycsesoouoi = MetaBox::auouusgocuwkgaok($aokagokqyuysuksm, $ykiyyumywksqcisg, $iwkyyocymeukcceu)->wmwikuasuocmqycw([self::sssoieywiewykmam => $qecuekqmeaiykeek])->qigsyyqgewgskemg("\x77\55\x6d\144\x2d\61\60\60")->usuqmwksoeaayaig(__("\102\141\x6e\x6b\x20\x41\143\143\157\165\x6e\164\x20\111\156\146\157\x72\155\x61\164\151\157\x6e", PR__MDL__SALARY)); gamqcwuwkikwqoay: return $gmksciycsesoouoi; } }
