<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63281b2e06609             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Module\Salary\Model\Income as IncModel; use Pmpr\Module\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Module\Salary\Profile\Admin\Tab\Income; use Pmpr\Module\Salary\Profile\Admin\Tab\Payment; use Pmpr\Module\Salary\Profile\Admin\Tab\Product; use Pmpr\Module\Salary\User; class Admin extends Page { const wuowaiyouwecckaw = "\x6d\171\x5f\x63\157\x6c\x6c\x61\x62\x6f\162\141\x74\151\x6f\x6e\137\x70\162\157\146\x69\x6c\x65"; const qagqayweyigciamg = "\142\x61\x6e\x6b\x5f\x69\x6e\146\x6f"; const equssioqikiumyki = "\x77\x69\x74\x68\144\x72\x61\x77\137\x74\157"; public function __construct() { if (!(DecoratorUser::scmcyesmmikkucie() || ManipulateUser::askmkgcmgekiqwsg(User::yuqaieqcaccggqck))) { goto cuoqqgaygogsmmic; } $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\x70\x61\x72\145\156\164\x5f\163\154\x75\147" => $wksoawcgagcgoask, "\160\141\147\145\137\164\x69\164\x6c\145" => __("\115\x79\x20\123\x61\x6c\141\x72\171\40\120\162\157\x66\151\154\x65", PR__MDL__SALARY), "\x6d\x65\156\x75\137\x73\154\165\x67" => self::wuowaiyouwecckaw, "\160\157\163\x69\164\151\157\156" => 0, "\143\141\x70\141\x62\x69\x6c\151\x74\x79" => "\x72\145\x61\144"]; parent::__construct(); $this->iemaakgqgqosiecm(); cuoqqgaygogsmmic: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\x6e\137\x69\156\x69\164", [$this, "\171\145\171\x69\147\165\x79\145\147\x6d\x6d\x79\165\x73\x65\141"]); parent::wigskegsqequoeks(); } public function iemaakgqgqosiecm() { Ajax::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto cgewcsueoyaeikgm; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x70\162\x6f\146\x69\154\x65", $eygsasmqycagyayw->get("\160\162\x6f\x66\151\154\x65\56\x6a\163"))->ayuciigykaswwqeo("\x6a\161\x75\145\162\x79"))->ikqyiskqaaymscgw("\141\152\x61\x78", Ajax::myikkigscysoykgy)->ikqyiskqaaymscgw("\x6d\145\163\x73\141\x67\x65\x73", ["\167\x69\x74\150\144\162\141\x77\x5f\x74\157" => sprintf(__("\111\x74\x27\163\x20\156\x6f\164\x20\141\x20\166\141\154\151\x64\40\45\x73", PR__MDL__SALARY), __("\x44\x61\164\x65", PR__MDL__SALARY)), "\x65\x6d\160\x74\x79" => ["\x62\x61\156\x6b\x5f\151\x6e\146\157" => sprintf(__("\120\x6c\145\x61\163\x65\x20\x73\145\x6c\x65\x63\164\40\x61\40\x25\x73", PR__MDL__SALARY), __("\102\x61\156\x6b\40\101\143\143\x6f\x75\156\x74\x20\111\x6e\146\157\x72\x6d\x61\x74\151\157\156", PR__MDL__SALARY)), "\x77\x69\164\150\144\x72\141\167\x5f\164\x6f" => sprintf(__("\120\154\145\141\x73\145\x20\163\145\154\x65\143\x74\40\141\x20\45\163", PR__MDL__SALARY), __("\x44\x61\x74\145", PR__MDL__SALARY))]]); cgewcsueoyaeikgm: } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); $this->ssysiyiouyscyeyq(); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ["\151\156\x63\157\155\x65\163" => __("\x54\157\x74\x61\154\40\111\x6e\x63\x6f\155\x65\163", PR__MDL__SALARY), "\144\x65\x64\165\143\164\163" => __("\x54\x6f\164\141\x6c\x20\x44\145\144\x75\143\164\x73", PR__MDL__SALARY), "\160\141\x79\155\145\156\164\163" => __("\x54\157\164\141\x6c\x20\120\x61\171\155\x65\x6e\164\x73", PR__MDL__SALARY)]; $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case "\151\x6e\x63\x6f\155\x65\163": $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->cwkywyqksyucoyia([IncModel::iockmgiyoygcswog => $miowmmgaiagcuyoo, IncModel::eiiuyoyiygsickwe => [self::ciyoccqkiamemcmm => [IncModel::ycmomqymkecsysum, IncModel::youiiwsayswmyuum], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); goto mqccmesakuemceqi; case "\x64\145\x64\x75\143\x74\x73": goto mqccmesakuemceqi; case "\160\x61\x79\x6d\x65\x6e\x74\163": goto mqccmesakuemceqi; } eyiamcekkgkiawqy: mqccmesakuemceqi: } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = ["\x6c\x61\x62\x65\x6c" => $pkyyagewkiyckmwy, "\x76\141\154\x75\145" => ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie)]; igymseewwyiocoug: } sukskmcwsoysiuqu: echo $this->iuygowkemiiwqmiw("\x73\164\141\x74\163", ["\151\x74\x65\x6d\x73" => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $mkucggyaiaukqoce = ManipulateUser::get(); $ikgwqyuyckaewsow = ''; if (!$mkucggyaiaukqoce) { goto qwcegcuowwgiccos; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $qyukicweqoisimwg = ["\x63\x61\x6e\143\x65\154"]; $aukoggqmyoweqokc = User::symcgieuakksimmu()->ysqqicckeiweemmu($mkucggyaiaukqoce, self::qagqayweyigciamg); if ($aukoggqmyoweqokc) { goto twkmiuomimomscew; } $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo("\x74\x61\x62", "\x74\x61\x62\137\151\x6e\143\x6f\x6d\x65\x73\137\141\156\144\137\160\x61\x79\x6d\145\156\164\163", DecoratorUser::ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\x72\145\x66" => $geecqyososceumsk], __("\120\162\x6f\x66\151\154\x65\x20\x70\141\147\x65", PR__MDL__SALARY)); $iwamiguusayooguq = sprintf(__("\x59\x6f\165\40\x73\150\x6f\165\x6c\x64\40\146\x69\x72\163\164\54\40\146\151\x6c\154\x20\151\x6e\40\x79\157\165\x72\x20\142\x61\156\153\x20\x61\143\143\157\x75\156\164\x20\x69\156\146\157\162\155\x61\x74\x69\157\x6e\40\x69\x6e\163\x69\x64\x65\x20\x79\157\x75\x72\40\x25\163\54\x20\164\157\x20\x73\x75\x62\155\151\164\40\x61\x20\167\151\164\150\x64\162\141\x77", PR__MDL__SALARY), $uweseoyuyuwyeggc); goto kooskuwkuayiuose; twkmiuomimomscew: $aukoggqmyoweqokc->yoimakcqmoqokkcu(); $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::equssioqikiumyki, __("\104\x61\164\x65\x20\x54\157", PR__MDL__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw("\157\167\x6e\x65\x72", $saqgcoqwmimycgim)], ["\145\143\x68\157" => false, "\160\x61\162\145\156\x74" => ["\143\x6c\141\163\163" => "\143\x6f\x6c\55\61\62\x20\x63\157\x6c\x2d\155\x64\x2d\x38\40\x63\x6f\154\55\154\147\55\66\40\x6d\x79\55\x33\40\155\170\55\x61\x75\164\x6f"]]); $ikgwqyuyckaewsow = ManipulateHTML::uuccukgasskgimsq("\x64\x69\166", ["\143\154\141\163\x73" => "\162\157\167"], $ikgwqyuyckaewsow); $iwamiguusayooguq = __("\x42\x79\x20\x73\x75\142\155\x69\164\164\x69\x6e\x67\40\141\x20\x6e\145\x77\x20\160\x61\x79\155\145\x6e\164\40\x72\x65\x71\x75\145\163\x74\x2c\x20\x79\157\165\40\x77\151\x6c\154\40\162\x65\143\x65\x69\x76\x65\x20\x79\x6f\165\x72\x20\151\x6e\143\x6f\x6d\x65\x20\x69\x6e\40\x74\x68\x65\x20\146\x6f\162\x6d\40\x6f\146\x20\141\x20\x64\145\x70\x6f\x73\x69\x74\x20\x74\157\40\x74\150\x65\x20\x69\156\x74\x72\157\144\165\143\x65\x64\x20\x62\141\x6e\x6b\40\141\143\x63\x6f\x75\156\164", PR__MDL__SALARY); $qyukicweqoisimwg[] = ["\143\154\x61\x73\x73" => "\142\x74\x6e\x20\x62\x74\x6e\x2d\x70\x72\x69\x6d\141\x72\x79\40\x61\x64\144\55\x6e\145\x77\55\x77\151\164\x68\x64\162\x61\x77", "\x74\151\x74\x6c\x65" => __("\x53\x75\142\155\x69\x74", PR__MDL__SALARY)]; kooskuwkuayiuose: $iwamiguusayooguq = ManipulateHTML::uuccukgasskgimsq("\144\151\166", [], $iwamiguusayooguq); $uosiuoqysyokseqe = __("\x41\x64\x64\40\116\145\167\x20\x57\x69\x74\x68\144\x72\141\167", PR__MDL__SALARY); $nsmgceoqaqogqmuw = ManipulateHTML::icqkogwskuwscskk(["\x73\x69\172\x65" => "\x6c\147", "\164\x79\x70\x65" => "\160\x72\x69\x6d\141\162\171", "\164\151\x74\154\x65" => $uosiuoqysyokseqe, "\x70\162\145\x66\151\170" => "\x61\144\144\x5f\156\145\167\137\x77\x69\x74\x68\x64\x72\141\167", "\143\x6f\156\164\x65\x6e\164" => $iwamiguusayooguq . $ikgwqyuyckaewsow, "\142\x75\x74\x74\x6f\156\163" => $qyukicweqoisimwg, "\x73\x70\151\156\156\145\x72" => true], ["\x74\151\x74\154\x65" => $uosiuoqysyokseqe, "\x61\164\164\162\163" => ["\x63\x6c\x61\x73\x73" => "\142\x74\156\40\x62\x74\156\55\x70\x72\x69\x6d\x61\162\171\x20\x66\x6c\157\x61\x74\55\162\151\147\x68\164", "\141\162\151\141\55\x6c\x61\142\145\154" => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); qwcegcuowwgiccos: } }
