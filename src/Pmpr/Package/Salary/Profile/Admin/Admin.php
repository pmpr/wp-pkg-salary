<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             623bbc715cce1             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Package\Salary\Model\Income as IncModel; use Pmpr\Package\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Package\Salary\Profile\Admin\Tab\Income; use Pmpr\Package\Salary\Profile\Admin\Tab\Payment; use Pmpr\Package\Salary\Profile\Admin\Tab\Product; use Pmpr\Package\Salary\User; class Admin extends Page { const wuowaiyouwecckaw = "\155\171\x5f\143\x6f\154\x6c\141\142\157\162\141\164\151\x6f\x6e\x5f\x70\162\x6f\x66\151\x6c\145"; const qagqayweyigciamg = "\142\141\x6e\x6b\x5f\x69\156\x66\x6f"; const equssioqikiumyki = "\x77\x69\x74\150\x64\162\x61\167\137\x74\157"; public function __construct() { if (!(DecoratorUser::scmcyesmmikkucie() || ManipulateUser::askmkgcmgekiqwsg(User::yuqaieqcaccggqck))) { goto quwcqmyokicssyew; } $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\160\x61\x72\x65\x6e\x74\x5f\163\x6c\x75\147" => $wksoawcgagcgoask, "\x70\141\x67\145\137\164\151\x74\x6c\x65" => __("\115\171\40\123\x61\x6c\x61\x72\171\40\x50\x72\157\146\x69\x6c\x65", PR__PKG__SALARY), "\155\145\x6e\165\137\x73\x6c\165\x67" => self::wuowaiyouwecckaw, "\x70\157\x73\151\x74\151\157\156" => 0, "\x63\141\160\141\x62\151\154\151\164\x79" => "\x72\145\141\144"]; parent::__construct(); $this->iemaakgqgqosiecm(); quwcqmyokicssyew: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\x5f\x69\156\151\164", [$this, "\171\145\x79\151\147\x75\x79\145\x67\x6d\155\x79\165\163\x65\141"]); parent::wigskegsqequoeks(); } public function iemaakgqgqosiecm() { Ajax::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto iqcogmsguwoikame; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x70\x72\157\x66\151\x6c\x65", $eygsasmqycagyayw->get("\160\x72\157\x66\x69\x6c\x65\x2e\x6a\163"))->ayuciigykaswwqeo("\152\x71\165\145\x72\x79"))->ikqyiskqaaymscgw("\141\152\x61\170", Ajax::myikkigscysoykgy)->ikqyiskqaaymscgw("\155\145\x73\163\141\x67\x65\163", ["\x77\151\164\x68\144\162\x61\167\x5f\164\x6f" => sprintf(__("\x49\x74\47\x73\x20\x6e\157\x74\x20\141\40\x76\x61\154\151\x64\40\45\x73", PR__PKG__SALARY), __("\104\x61\x74\x65", PR__PKG__SALARY)), "\x65\155\160\x74\171" => ["\142\141\x6e\x6b\x5f\x69\x6e\146\x6f" => sprintf(__("\120\154\145\141\163\145\x20\163\x65\154\145\143\164\x20\x61\x20\45\x73", PR__PKG__SALARY), __("\x42\141\156\153\40\101\143\x63\157\x75\x6e\164\x20\111\x6e\x66\157\x72\x6d\x61\x74\x69\157\156", PR__PKG__SALARY)), "\167\151\164\x68\x64\x72\141\x77\137\164\157" => sprintf(__("\x50\154\x65\x61\x73\x65\40\163\x65\x6c\x65\x63\164\x20\141\x20\45\163", PR__PKG__SALARY), __("\104\141\x74\x65", PR__PKG__SALARY))]]); iqcogmsguwoikame: } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); $this->ssysiyiouyscyeyq(); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ["\151\x6e\143\x6f\x6d\145\163" => __("\x54\x6f\164\141\154\x20\111\156\x63\157\155\x65\x73", PR__PKG__SALARY), "\x64\145\x64\x75\x63\164\x73" => __("\x54\157\x74\141\x6c\x20\x44\x65\144\x75\x63\x74\163", PR__PKG__SALARY), "\160\x61\x79\x6d\145\x6e\x74\163" => __("\x54\157\164\x61\x6c\x20\120\141\x79\x6d\145\156\164\163", PR__PKG__SALARY)]; $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case "\x69\x6e\x63\157\155\145\163": $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->cwkywyqksyucoyia([IncModel::iockmgiyoygcswog => $miowmmgaiagcuyoo, IncModel::eiiuyoyiygsickwe => [self::ciyoccqkiamemcmm => [IncModel::aquouykoyqcwccay, IncModel::ugswgyqgycqguios], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); goto yqykqysmiquwoasu; case "\x64\x65\x64\165\x63\x74\163": goto yqykqysmiquwoasu; case "\x70\141\x79\155\x65\x6e\164\x73": goto yqykqysmiquwoasu; } ayyweymyuuiauamo: yqykqysmiquwoasu: } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = ["\x6c\x61\x62\x65\x6c" => $pkyyagewkiyckmwy, "\166\141\154\165\x65" => ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie)]; cmqucgoewuyieoyk: } gimmuoqwckiseaik: echo $this->iuygowkemiiwqmiw("\163\164\141\x74\x73", ["\x69\164\145\155\x73" => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $mkucggyaiaukqoce = ManipulateUser::get(); $ikgwqyuyckaewsow = ''; if (!$mkucggyaiaukqoce) { goto ygcsmkuycoagwyou; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $qyukicweqoisimwg = ["\143\x61\156\143\x65\x6c"]; $aukoggqmyoweqokc = User::symcgieuakksimmu()->ysqqicckeiweemmu($mkucggyaiaukqoce, self::qagqayweyigciamg); if ($aukoggqmyoweqokc) { goto mosqsmqimqgqoase; } $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo("\x74\141\142", "\x74\x61\x62\137\x69\x6e\x63\157\x6d\145\163\137\x61\x6e\x64\x5f\160\141\x79\x6d\145\x6e\164\163", DecoratorUser::ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = ManipulateHTML::uuccukgasskgimsq("\141", ["\150\x72\145\146" => $geecqyososceumsk], __("\120\162\157\146\x69\x6c\145\40\x70\x61\x67\145", PR__PKG__SALARY)); $iwamiguusayooguq = sprintf(__("\x59\x6f\165\x20\x73\x68\157\x75\154\x64\x20\x66\151\x72\x73\x74\x2c\40\146\x69\x6c\x6c\40\151\x6e\x20\x79\x6f\x75\x72\40\x62\141\156\x6b\x20\141\143\143\157\x75\x6e\164\x20\x69\156\146\x6f\x72\155\141\x74\151\157\x6e\40\x69\x6e\163\151\144\x65\40\171\x6f\x75\x72\40\x25\x73\54\x20\164\x6f\40\x73\x75\142\155\151\x74\40\141\x20\167\151\x74\x68\x64\162\x61\x77", PR__PKG__SALARY), $uweseoyuyuwyeggc); goto omugkkesagcyagmk; mosqsmqimqgqoase: $aukoggqmyoweqokc->yoimakcqmoqokkcu(); $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::equssioqikiumyki, __("\104\x61\164\145\40\x54\x6f", PR__PKG__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw("\157\167\156\x65\162", $saqgcoqwmimycgim)], ["\x65\x63\x68\x6f" => false, "\x70\141\x72\145\156\164" => ["\143\154\x61\x73\x73" => "\x63\157\154\55\x31\62\x20\143\157\154\55\x6d\x64\55\x38\40\143\x6f\x6c\55\154\x67\x2d\66\x20\x6d\x79\55\x33\x20\x6d\x78\x2d\141\x75\x74\157"]]); $ikgwqyuyckaewsow = ManipulateHTML::uuccukgasskgimsq("\x64\151\166", ["\x63\x6c\x61\163\163" => "\162\x6f\167"], $ikgwqyuyckaewsow); $iwamiguusayooguq = __("\x42\x79\x20\x73\x75\x62\x6d\151\x74\164\151\156\147\40\141\x20\x6e\145\x77\x20\160\x61\171\155\x65\156\164\40\162\145\x71\x75\x65\x73\x74\x2c\40\171\157\x75\40\167\151\x6c\x6c\x20\162\145\x63\145\151\166\145\40\x79\x6f\x75\x72\x20\151\x6e\x63\x6f\155\145\40\151\x6e\40\164\x68\x65\40\x66\x6f\162\x6d\40\x6f\146\x20\x61\40\144\145\160\x6f\163\x69\164\x20\x74\x6f\40\x74\150\x65\40\151\x6e\x74\162\157\x64\x75\143\x65\x64\x20\x62\141\x6e\x6b\x20\141\143\143\x6f\165\156\x74", PR__PKG__SALARY); $qyukicweqoisimwg[] = ["\x63\154\141\x73\x73" => "\x62\x74\x6e\x20\x62\164\x6e\x2d\160\162\x69\x6d\x61\162\x79\40\x61\144\x64\x2d\156\145\x77\x2d\x77\x69\x74\x68\x64\162\141\167", "\164\151\x74\x6c\145" => __("\x53\x75\142\x6d\x69\164", PR__PKG__SALARY)]; omugkkesagcyagmk: $iwamiguusayooguq = ManipulateHTML::uuccukgasskgimsq("\x64\x69\x76", [], $iwamiguusayooguq); $uosiuoqysyokseqe = __("\x41\144\144\40\x4e\x65\167\40\x57\151\x74\x68\x64\x72\x61\167", PR__PKG__SALARY); $nsmgceoqaqogqmuw = ManipulateHTML::icqkogwskuwscskk(["\x73\x69\172\x65" => "\x6c\147", "\164\171\160\x65" => "\160\x72\x69\155\141\x72\171", "\x74\151\x74\154\145" => $uosiuoqysyokseqe, "\160\x72\145\146\151\x78" => "\x61\144\144\137\156\x65\167\x5f\167\151\x74\150\144\162\x61\167", "\x63\x6f\156\x74\145\x6e\x74" => $iwamiguusayooguq . $ikgwqyuyckaewsow, "\x62\165\x74\164\x6f\156\x73" => $qyukicweqoisimwg, "\x73\160\x69\x6e\x6e\x65\x72" => true], ["\x74\x69\x74\154\145" => $uosiuoqysyokseqe, "\141\164\164\x72\163" => ["\143\x6c\x61\163\163" => "\x62\x74\156\x20\142\x74\x6e\55\160\162\151\x6d\141\162\x79\x20\x66\x6c\157\141\164\55\x72\151\147\150\x74", "\x61\162\151\141\55\154\x61\x62\145\x6c" => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); ygcsmkuycoagwyou: } }
