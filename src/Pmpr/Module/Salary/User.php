<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63281b2e06609             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Select; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Error; class User extends Container { protected ?Validator $validator = null; public function mmymimkumuekmmgi() : ?Validator { return $this->validator; } public function __construct() { $this->validator = Validator::symcgieuakksimmu(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\x69\x74", [$this, "\151\x6e\x69\164"])->qcsmikeggeemccuu("\163\150\157\x77\x5f\x75\x73\145\x72\137\160\x72\157\x66\x69\x6c\x65", [$this, "\x61\x77\x6b\x71\x6b\x71\141\x75\167\x77\x75\161\147\145\x77\x75"])->qcsmikeggeemccuu("\x65\144\x69\x74\x5f\165\163\145\162\137\x70\x72\157\146\151\x6c\x65", [$this, "\x61\x77\153\161\x6b\x71\x61\165\167\x77\165\x71\147\x65\x77\165"])->qcsmikeggeemccuu("\160\x65\162\163\157\x6e\141\x6c\137\157\x70\164\x69\x6f\156\163\x5f\x75\160\144\x61\164\145", [$this, "\x6d\x73\x79\x73\147\161\x65\145\167\x6b\161\147\163\x63\x77\145"])->qcsmikeggeemccuu("\x65\144\151\x74\137\165\163\x65\162\137\160\x72\157\146\151\154\145\x5f\x75\160\x64\141\x74\x65", [$this, "\x6d\163\171\x73\x67\x71\x65\x65\167\153\x71\x67\163\x63\x77\x65"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\157\x6f\x63\157\155\x6d\x65\x72\x63\145\137\x64\151\163\x61\x62\154\x65\137\141\x64\x6d\151\x6e\x5f\x62\141\162", [$this, "\145\x6f\x73\163\x6d\x6f\x79\x67\163\145\x69\145\x6b\x65\x77\x71"]); parent::kgquecmsgcouyaya(); } public function init() { DecoratorUser::secqmksoyausymio(self::yuqaieqcaccggqck, __("\103\x6f\x6c\x6c\141\x62\157\x72\x61\x74\157\x72", PR__MDL__SALARY), ["\x72\145\x61\x64" => true]); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!($eygsasmqycagyayw && ManipulateUser::eoyueosccuoeqkee())) { goto uaicwcqwauosmsqm; } if (!($uqyaagwcuoewkkss = Validator::symcgieuakksimmu())) { goto cumeycwmuuqawwyu; } $kgkkgoqacescqgsy = __("\x49\x74\47\163\x20\156\157\x74\40\141\40\166\x61\x6c\x69\144\40\x25\x73", PR__MDL__SALARY); $oucioakwecwsakic = __("\120\x6c\145\x61\163\x65\x20\163\x65\154\x65\x63\x74\x20\141\40\x25\163", PR__MDL__SALARY); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x75\163\145\162", $eygsasmqycagyayw->get("\x75\163\145\162\56\152\x73"))->ayuciigykaswwqeo("\x6a\161\165\145\162\171"))->ikqyiskqaaymscgw("\x6d\x65\x73\x73\141\x67\145\x73", ["\151\x6e\x76\141\x6c\151\144" => ["\x61\x64\x64\x5f\156\x65\x77" => $this->imqmyggquiyewkww(__("\x53\x6f\x72\162\x79\x2c\x20\x79\157\x75\40\143\x61\156\x20\x6e\x6f\x74\x20\141\x64\144\40\x6e\x65\x77\x20\x62\x61\x6e\153\x20\151\156\x66\157\x2c\40\x73\x6f\155\145\40\160\x72\x65\x76\151\157\x75\163\x20\x69\x74\x65\x6d\40\151\163\x20\x6e\x6f\164\40\x76\141\154\x69\144\56", PR__MDL__SALARY), ["\143\x6c\141\163\163" => "\x6d\154\55\x32"]), self::oogeqgcgkamuoaoe => sprintf($oucioakwecwsakic, __("\x42\141\156\153", PR__MDL__SALARY)), self::iockmgiyoygcswog => sprintf($kgkkgoqacescqgsy, __("\117\167\x6e\x65\x72", PR__MDL__SALARY)) . "\x2e\x20" . sprintf(__("\x50\x6c\145\x61\163\145\x20\145\156\x74\x65\162\40\x61\164\x20\x6c\145\x61\163\164\40\x25\163\x20\x63\x68\141\x72\141\x63\164\x65\x72\163", PR__MDL__SALARY), $this->msywmyaoqmaegsuy(6)), self::wyqmcowecikgawuu => sprintf($kgkkgoqacescqgsy, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::wyqmcowecikgawuu)), self::squoamkioomemiyi => sprintf($oucioakwecwsakic, __("\101\143\x63\157\x75\x6e\x74\x20\x49\156\146\x6f\x72\x6d\141\164\151\x6f\x6e\x20\x54\x79\160\145", PR__MDL__SALARY)), self::skyceaacaaaamiii => sprintf($kgkkgoqacescqgsy, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::skyceaacaaaamiii)), "\142\141\156\153\137\156\157\164\x5f\144\145\x74\x65\x63\164\145\x64" => __("\131\157\x75\x72\40\x61\x63\x63\x6f\165\156\164\x20\x73\x70\145\143\151\146\151\x63\141\164\151\157\156\163\x20\156\157\x74\40\163\x75\x70\160\x6f\x72\x74\x65\x64\54\40\x70\x6c\x65\141\163\x65\x20\x61\144\x64\40\151\156\x66\x6f\x72\155\x61\x74\151\x6f\156\x20\x62\141\163\x65\144\40\157\x6e\x20\x73\165\x70\x70\x6f\162\164\145\x64\x20\142\141\156\x6b\163\56", PR__MDL__SALARY), "\144\165\x70\x6c\x69\143\141\x74\x65\137\163\160\x65\x63\151\x66\x69\x63\141\x74\x69\157\x6e" => __("\x53\x6f\x72\x72\171\54\40\x74\x68\151\x73\40\x76\141\154\x75\x65\40\141\154\x72\145\x61\x64\171\40\x65\170\151\163\x74\x20\x69\x6e\x20\x70\x72\145\x76\x69\157\x75\x73\x20\151\x74\x65\155\x73\x2e", PR__MDL__SALARY)]])->ikqyiskqaaymscgw("\160\162\x65\x66\151\170\145\163", [self::wyqmcowecikgawuu => $uqyaagwcuoewkkss->cyuweacmssmikssi(), self::skyceaacaaaamiii => $uqyaagwcuoewkkss->cmkgoqaaysaasiom()]); cumeycwmuuqawwyu: uaicwcqwauosmsqm: } public function eossmoygseiekewq($ikcaescyugmgiegq) { if (!DecoratorUser::scmcyesmmikkucie(self::yuqaieqcaccggqck)) { goto gsqcoqqsioiyoykq; } $ikcaescyugmgiegq = false; gsqcoqqsioiyoykq: return $ikcaescyugmgiegq; } public function awkqkqauwwuqgewu($mkucggyaiaukqoce) { if (!($uqyaagwcuoewkkss = $this->mmymimkumuekmmgi())) { goto cuseccewekgcgkyg; } $ygikoqaokckisawo = $this->guimqgyewioyekuy($mkucggyaiaukqoce, "\x69\156\x64\x65\x78"); $ikgwqyuyckaewsow = [MetaBox::iseogkiymousogom(self::qagqayweyigciamg, __("\102\141\156\153\x20\x41\x63\x63\157\x75\156\x74\40\x49\156\146\157\162\155\141\164\x69\157\156", PR__MDL__SALARY))->mkksewyosgeumwsa($uqyaagwcuoewkkss->auawsikwmsucqccc(self::oogeqgcgkamuoaoe)->eumecwmqmukqgyea())->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::squoamkioomemiyi, __("\101\x63\x63\157\x75\x6e\x74\x20\111\x6e\146\157\162\x6d\141\x74\x69\x6f\x6e\x20\124\x79\160\145", PR__MDL__SALARY), $uqyaagwcuoewkkss->yuuwwswmwmgmcyem())->wmwikuasuocmqycw([self::ymckmcsiymwqucoq => self::oogeqgcgkamuoaoe, self::sssoieywiewykmam => $this->uyocacmiaawcwkyy()])->oeeumggeiyyckkom(self::wyqmcowecikgawuu, self::wyqmcowecikgawuu)->oeeumggeiyyckkom(self::skyceaacaaaamiii, self::skyceaacaaaamiii)->qigsyyqgewgskemg("\141\x63\143\x6f\x75\x6e\164\55\x74\171\160\x65")->eumecwmqmukqgyea())->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::skyceaacaaaamiii, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::skyceaacaaaamiii))->wykoackkeuuqeyss()->qigsyyqgewgskemg("\143\x61\162\144\x2d\166\141\154\x75\145"))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::wyqmcowecikgawuu, $uqyaagwcuoewkkss->yuuwwswmwmgmcyem(self::wyqmcowecikgawuu))->uagmgmommooaewkk()->qigsyyqgewgskemg("\x69\x62\x61\156\55\x76\141\x6c\165\x65"))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::iockmgiyoygcswog, __("\x41\143\x63\157\165\x6e\x74\40\x4f\167\x6e\x65\162\x20\x4e\x61\x6d\x65", PR__MDL__SALARY))->eumecwmqmukqgyea()->qigsyyqgewgskemg("\141\x63\x63\x6f\165\156\x74\55\157\x77\156\145\x72"))->mkksewyosgeumwsa(MetaBox::cwiuiiakukcsaakw(self::wagwccqcqwgsoyoi)->qigsyyqgewgskemg("\141\x63\143\157\165\156\x74\x2d\154\x6f\x63\153\145\x64"))->mkksewyosgeumwsa(MetaBox::cwiuiiakukcsaakw(self::ascagqcquwgmygkm))->qigsyyqgewgskemg("\143\157\154\x2d\x78\154\55\64")->iygyugseyaqwywyg($ygikoqaokckisawo)]; foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto owisckseoogsugqq; } $ymqmyyeuycgmigyo = $aiowsaccomcoikus->aakmagwggmkoiiyu(); $aiowsaccomcoikus->usuqmwksoeaayaig(''); $woiqcqksaumcwwuc = self::uissasisiuymwsmu; if (!$aiowsaccomcoikus instanceof Group) { goto ysweqawmawicakeo; } $woiqcqksaumcwwuc = self::qescuiwgsyuikume; ysweqawmawicakeo: $ikgwqyuyckaewsow[$momcykaoccoymeig] = [$woiqcqksaumcwwuc => $ymqmyyeuycgmigyo, self::gouqcwikiiygyasc => $aiowsaccomcoikus->mwikyscisascoeea(), self::gsqoooskigukokks => $aiowsaccomcoikus->render()]; owisckseoogsugqq: iaomqomgiwiegoca: } goaowamiyyamueiw: if (!$ikgwqyuyckaewsow) { goto ookcgumoacskyymy; } echo $this->iuygowkemiiwqmiw("\160\x72\157\x66\151\x6c\145", [self::qescuiwgsyuikume => __("\x49\156\143\x6f\x6d\145\40\141\156\x64\40\x50\x61\x79\155\145\156\164", PR__MDL__SALARY), self::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]); ookcgumoacskyymy: cuseccewekgcgkyg: } public function msysgqeewkqgscwe($mkucggyaiaukqoce, $ygikoqaokckisawo = []) { $oammesyieqmwuwyi = []; if ($ygikoqaokckisawo) { goto kgysyqkoqgwmoscq; } $ygikoqaokckisawo = ManipulateServer::ayueggmoqeeukqmq(self::qagqayweyigciamg, []); kgysyqkoqgwmoscq: if (!($ygikoqaokckisawo && is_array($ygikoqaokckisawo))) { goto qiaaqkymeuuueoqk; } $gwscsiewquwmkkgu = $this->guimqgyewioyekuy($mkucggyaiaukqoce, self::wagwccqcqwgsoyoi); foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { $igqsaukqcqscimok = $this->aceogymkeuswukyi($eiwicgsqoiaeawkk); if (!($igqsaukqcqscimok && !is_wp_error($igqsaukqcqscimok) && ($uusmaiomayssaecw = $igqsaukqcqscimok[self::ascagqcquwgmygkm]) && !isset($gwscsiewquwmkkgu[$uusmaiomayssaecw]))) { goto acesyuieuuqwgkwm; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = $igqsaukqcqscimok; acesyuieuuqwgkwm: oqwcmgwimeisusoe: } makomwwyomweyamm: if (!$gwscsiewquwmkkgu) { goto asaowisseacciyia; } $oammesyieqmwuwyi = $gwscsiewquwmkkgu + $oammesyieqmwuwyi; asaowisseacciyia: $this->ksmqawcowkmegigw($oammesyieqmwuwyi, $mkucggyaiaukqoce); qiaaqkymeuuueoqk: } public function aceogymkeuswukyi($eiwicgsqoiaeawkk) { $uqyaagwcuoewkkss = $this->mmymimkumuekmmgi(); if (!ManipulateArray::uuegkqwagymmusiy($eiwicgsqoiaeawkk, [self::squoamkioomemiyi, self::iockmgiyoygcswog, self::oogeqgcgkamuoaoe])) { goto cigesysuauaiccms; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x53\157\x6d\x65\x20\x72\x65\x71\165\151\x72\x65\x20\x70\x61\x72\x61\x6d\x65\164\x65\162\x73\40\151\163\40\x6d\x69\163\x73\x69\156\x67", PR__MDL__SALARY)); goto qumkwsqqocooyuoq; cigesysuauaiccms: $qmomekeesaiaoegu = ManipulateArray::get($eiwicgsqoiaeawkk, self::oogeqgcgkamuoaoe); $sqeykgyoooqysmca = ManipulateArray::get($eiwicgsqoiaeawkk, self::squoamkioomemiyi); $miowmmgaiagcuyoo = ManipulateArray::get($eiwicgsqoiaeawkk, self::iockmgiyoygcswog); $eqgoocgaqwqcimie = ManipulateArray::get($eiwicgsqoiaeawkk, $sqeykgyoooqysmca, ''); $ygogqywsaqoukoqy = str_replace("\x20", '', $eqgoocgaqwqcimie); if ($uqyaagwcuoewkkss->uqyqsuqogawkesee($qmomekeesaiaoegu)) { goto gwiaimosqoiquwkc; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x42\x61\156\153\40\x69\x73\40\x6e\x6f\x74\x20\163\x75\x70\160\157\x72\x74\x65\144", PR__MDL__SALARY)); goto owgakkqgckqcegoi; gwiaimosqoiquwkc: $sogksuscggsicmac = $uqyaagwcuoewkkss->kuuugksiksqcaaaa([self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, self::squoamkioomemiyi => $sqeykgyoooqysmca, self::oogeqgcgkamuoaoe => $qmomekeesaiaoegu]); if (is_wp_error($sogksuscggsicmac)) { goto ugswokwmkumcmigc; } $sogksuscggsicmac = [$sqeykgyoooqysmca => $eqgoocgaqwqcimie, self::squoamkioomemiyi => $sqeykgyoooqysmca, self::oogeqgcgkamuoaoe => $qmomekeesaiaoegu, self::iockmgiyoygcswog => $miowmmgaiagcuyoo, self::wagwccqcqwgsoyoi => false, self::cqkcksqwkcsiykuq => $ygogqywsaqoukoqy]; ugswokwmkumcmigc: owgakkqgckqcegoi: qumkwsqqocooyuoq: return $sogksuscggsicmac; } public function ksmqawcowkmegigw($oammesyieqmwuwyi, $mkucggyaiaukqoce) { if (!$oammesyieqmwuwyi) { goto gcskyqewysqaceeg; } $oammesyieqmwuwyi = array_values(ManipulateArray::ggkqgwsekcwaaawa($oammesyieqmwuwyi)); $oammesyieqmwuwyi = array_values(ManipulateArray::ggkqgwsekcwaaawa($oammesyieqmwuwyi)); gcskyqewysqaceeg: return ManipulateUser::ksmqawcowkmegigw(self::qagqayweyigciamg, $oammesyieqmwuwyi, $mkucggyaiaukqoce); } public function oiagiswyysamcyag($mkucggyaiaukqoce, $uusmaiomayssaecw) { $ygikoqaokckisawo = $this->guimqgyewioyekuy($mkucggyaiaukqoce); $eiwicgsqoiaeawkk = ManipulateArray::get($ygikoqaokckisawo, $uusmaiomayssaecw); if (!$eiwicgsqoiaeawkk) { goto kkewoqqowugagwoy; } $eiwicgsqoiaeawkk[self::wagwccqcqwgsoyoi] = true; $ygikoqaokckisawo[$uusmaiomayssaecw] = $eiwicgsqoiaeawkk; $this->ksmqawcowkmegigw($ygikoqaokckisawo, $mkucggyaiaukqoce); kkewoqqowugagwoy: } public function kkqikgwyqqmukogk($miowmmgaiagcuyoo, $uusmaiomayssaecw) : string { $eiwicgsqoiaeawkk = $this->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $uusmaiomayssaecw); $ymqmyyeuycgmigyo = ManipulateArray::get($eiwicgsqoiaeawkk, self::iockmgiyoygcswog); $ygogqywsaqoukoqy = ManipulateArray::get($eiwicgsqoiaeawkk, self::cqkcksqwkcsiykuq); return sprintf("\x25\x73\x20\50\x25\163\x29", $ymqmyyeuycgmigyo, $ygogqywsaqoukoqy); } public function ogimyyckeeygkmyc($mkucggyaiaukqoce, $uusmaiomayssaecw) { $ygikoqaokckisawo = $this->guimqgyewioyekuy($mkucggyaiaukqoce); return ManipulateArray::get($ygikoqaokckisawo, $uusmaiomayssaecw, false); } public function guimqgyewioyekuy($mkucggyaiaukqoce, $aqykuigiuwmmcieu = self::ALL) : array { $sogksuscggsicmac = []; $ygikoqaokckisawo = ManipulateUser::igawqaomowicuayw(self::qagqayweyigciamg, $mkucggyaiaukqoce, true); if (!(is_array($ygikoqaokckisawo) && $ygikoqaokckisawo)) { goto aaogeemgkogagkai; } foreach ($ygikoqaokckisawo as $eiwicgsqoiaeawkk) { $eiwicgsqoiaeawkk[self::ciyoccqkiamemcmm] = ManipulateArray::get($eiwicgsqoiaeawkk, self::squoamkioomemiyi, ManipulateArray::get($eiwicgsqoiaeawkk, self::cqkcksqwkcsiykuq)); if ($aqykuigiuwmmcieu === "\151\x6e\x64\145\x78") { goto ooysmgyeqoiesgqm; } if (!($aqykuigiuwmmcieu === self::ALL || ManipulateArray::get($eiwicgsqoiaeawkk, $aqykuigiuwmmcieu, false))) { goto wmaeicoyyciuaiuy; } $uusmaiomayssaecw = ManipulateArray::get($eiwicgsqoiaeawkk, self::ascagqcquwgmygkm); if (!$uusmaiomayssaecw) { goto ocgkwqqmgasuoies; } $sogksuscggsicmac[$uusmaiomayssaecw] = $eiwicgsqoiaeawkk; ocgkwqqmgasuoies: wmaeicoyyciuaiuy: goto kwoyiysciqumswcy; ooysmgyeqoiesgqm: $sogksuscggsicmac[] = $eiwicgsqoiaeawkk; kwoyiysciqumswcy: wsemeeocquawyauo: } wwswmaewcaisauei: aaogeemgkogagkai: return $sogksuscggsicmac; } public function uyocacmiaawcwkyy() : array { $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); $qecuekqmeaiykeek = []; if (!is_array($aacykmqwasyaykgu)) { goto ayamomygygmgwgkg; } foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $aqsekqkimiekimei = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::gskosgoeymsumieq); $qgeeqyucwycemwmo = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::aewsykuggcssqeyo); if (!($qgeeqyucwycemwmo && $aqsekqkimiekimei)) { goto oymyqcoekqyuiguq; } foreach ($aqsekqkimiekimei as $qmomekeesaiaoegu) { foreach ($qgeeqyucwycemwmo as $sqeykgyoooqysmca) { $qecuekqmeaiykeek[] = $this->mqyckeaqgokeqwuq($qqqskcogoyswqaum, [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::oogeqgcgkamuoaoe => $qmomekeesaiaoegu]); gicmaqmuscawegie: } ukogwqiuuuakkawy: magymcqykamwqigw: } oiiqqgyqmggyiums: oymyqcoekqyuiguq: isqwwmikecauwyuc: } qqmmycmsoqegcqqw: ayamomygygmgwgkg: return array_filter($qecuekqmeaiykeek); } public function uwoesmooocquykum($mkucggyaiaukqoce, $aokagokqyuysuksm = "\x62\141\156\x6b\137\x69\x6e\146\x6f\x73") : array { $ygikoqaokckisawo = $this->guimqgyewioyekuy($mkucggyaiaukqoce); $qecuekqmeaiykeek = $ykiyyumywksqcisg = $iwkyyocymeukcceu = []; if (!$ygikoqaokckisawo) { goto kceeuicccqscwgsu; } $aacykmqwasyaykgu = $this->ukckwgeyciyygoou(); foreach ($ygikoqaokckisawo as $uusmaiomayssaecw => $eiwicgsqoiaeawkk) { $qmomekeesaiaoegu = ManipulateArray::get($eiwicgsqoiaeawkk, self::oogeqgcgkamuoaoe); $sqeykgyoooqysmca = ManipulateArray::get($eiwicgsqoiaeawkk, self::squoamkioomemiyi); $miowmmgaiagcuyoo = ManipulateArray::get($eiwicgsqoiaeawkk, self::iockmgiyoygcswog); $ygogqywsaqoukoqy = ManipulateArray::get($eiwicgsqoiaeawkk, self::cqkcksqwkcsiykuq); if (!($sqeykgyoooqysmca && $qmomekeesaiaoegu && $miowmmgaiagcuyoo)) { goto sgiuwkisugmewmcs; } $eqgoocgaqwqcimie = ManipulateArray::get($eiwicgsqoiaeawkk, $sqeykgyoooqysmca, $ygogqywsaqoukoqy); $ykiyyumywksqcisg[$uusmaiomayssaecw] = $this->mmymimkumuekmmgi()->kwagkemgawuoacwy($qmomekeesaiaoegu); $iwkyyocymeukcceu[$uusmaiomayssaecw] = sprintf("\x25\163\x20\x2d\40\x25\x73", $miowmmgaiagcuyoo, $eqgoocgaqwqcimie); foreach ($aacykmqwasyaykgu as $qqqskcogoyswqaum) { $qgeeqyucwycemwmo = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::aewsykuggcssqeyo); $aqsekqkimiekimei = (array) ManipulateArray::get($qqqskcogoyswqaum, Setting::gskosgoeymsumieq); if (!(in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo) && in_array($qmomekeesaiaoegu, $aqsekqkimiekimei))) { goto jkgouewqysmscmqs; } $qecuekqmeaiykeek[] = $this->mqyckeaqgokeqwuq($qqqskcogoyswqaum, [$aokagokqyuysuksm => $uusmaiomayssaecw]); jkgouewqysmscmqs: asqqqqakiagymemk: } iyeswoaqkaeggiiy: sgiuwkisugmewmcs: ucksaiwquekagyqe: } gygqgauaceiuawkq: kceeuicccqscwgsu: return [$qecuekqmeaiykeek, $iwkyyocymeukcceu, $ykiyyumywksqcisg]; } public function ysqqicckeiweemmu($mkucggyaiaukqoce, $aokagokqyuysuksm = "\x62\141\156\x6b\x5f\151\156\x66\157\x73") : ?Select { $gmksciycsesoouoi = null; [$qecuekqmeaiykeek, $iwkyyocymeukcceu, $ykiyyumywksqcisg] = $this->uwoesmooocquykum($mkucggyaiaukqoce, $aokagokqyuysuksm); if (!($ykiyyumywksqcisg && $iwkyyocymeukcceu)) { goto iquecygaakmiomeg; } $gmksciycsesoouoi = MetaBox::auouusgocuwkgaok($aokagokqyuysuksm, $ykiyyumywksqcisg, $iwkyyocymeukcceu)->wmwikuasuocmqycw([self::sssoieywiewykmam => $qecuekqmeaiykeek])->qigsyyqgewgskemg("\167\55\155\x64\55\61\60\60")->usuqmwksoeaayaig(__("\x42\x61\156\x6b\x20\x41\x63\143\157\165\x6e\x74\x20\x49\x6e\x66\157\162\x6d\141\x74\151\157\x6e", PR__MDL__SALARY)); iquecygaakmiomeg: return $gmksciycsesoouoi; } }
