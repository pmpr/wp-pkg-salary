<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ae3192d4abf             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Module\Salary\Model\Income as IncModel; use Pmpr\Module\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Module\Salary\Profile\Admin\Tab\Income; use Pmpr\Module\Salary\Profile\Admin\Tab\Payment; use Pmpr\Module\Salary\Profile\Admin\Tab\Product; use Pmpr\Module\Salary\User; class Admin extends Page { const wuowaiyouwecckaw = "\x6d\171\x5f\143\157\154\154\141\x62\157\162\141\164\x69\157\156\x5f\x70\x72\x6f\x66\151\154\145"; const qagqayweyigciamg = "\142\141\156\x6b\137\x69\156\x66\x6f"; const equssioqikiumyki = "\167\151\x74\x68\144\x72\x61\167\x5f\x74\157"; public function __construct() { if (!(DecoratorUser::scmcyesmmikkucie() || ManipulateUser::askmkgcmgekiqwsg(User::yuqaieqcaccggqck))) { goto yykqaowwsqgqysmq; } $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\160\141\162\145\156\164\137\163\x6c\165\147" => $wksoawcgagcgoask, "\x70\x61\147\145\137\164\x69\x74\154\x65" => __("\x4d\171\x20\x53\141\154\x61\162\171\40\x50\162\x6f\x66\x69\154\x65", PR__MDL__SALARY), "\x6d\145\156\x75\137\163\154\x75\147" => self::wuowaiyouwecckaw, "\160\157\x73\x69\164\151\157\x6e" => 0, "\143\x61\x70\141\x62\151\x6c\151\x74\x79" => "\x72\145\x61\144"]; parent::__construct(); $this->iemaakgqgqosiecm(); yykqaowwsqgqysmq: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\x6e\137\x69\156\151\164", [$this, "\171\x65\171\151\x67\165\x79\145\x67\x6d\155\171\x75\163\x65\141"]); parent::wigskegsqequoeks(); } public function iemaakgqgqosiecm() { Ajax::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto kwiggogcgciwuwqk; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x70\x72\157\x66\x69\x6c\145", $eygsasmqycagyayw->get("\160\162\157\x66\x69\154\145\x2e\152\x73"))->ayuciigykaswwqeo("\x6a\161\165\145\x72\171"))->ikqyiskqaaymscgw("\x61\152\141\170", Ajax::myikkigscysoykgy)->ikqyiskqaaymscgw("\155\145\163\x73\x61\147\x65\163", ["\167\151\164\150\x64\x72\x61\167\137\x74\157" => sprintf(__("\x49\x74\x27\163\40\x6e\157\164\x20\x61\40\x76\141\154\151\144\40\45\x73", PR__MDL__SALARY), __("\104\x61\164\145", PR__MDL__SALARY)), "\x65\x6d\x70\x74\171" => ["\x62\141\156\153\x5f\151\x6e\x66\x6f" => sprintf(__("\120\154\145\141\163\145\x20\x73\x65\x6c\145\143\164\x20\141\40\x25\x73", PR__MDL__SALARY), __("\102\141\x6e\153\40\101\x63\x63\x6f\x75\156\x74\x20\111\156\x66\157\162\155\x61\164\x69\157\x6e", PR__MDL__SALARY)), "\167\x69\x74\x68\144\x72\141\167\x5f\164\157" => sprintf(__("\120\x6c\145\x61\163\145\40\x73\145\154\145\143\164\40\x61\x20\x25\163", PR__MDL__SALARY), __("\x44\x61\164\145", PR__MDL__SALARY))]]); kwiggogcgciwuwqk: } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); $this->ssysiyiouyscyeyq(); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ["\x69\156\x63\x6f\155\145\x73" => __("\124\157\164\x61\154\40\x49\156\x63\x6f\155\x65\163", PR__MDL__SALARY), "\144\145\x64\165\x63\x74\x73" => __("\x54\x6f\x74\x61\154\40\104\x65\x64\165\143\164\x73", PR__MDL__SALARY), "\x70\x61\x79\x6d\145\156\x74\163" => __("\x54\x6f\164\x61\x6c\x20\x50\x61\171\x6d\145\x6e\x74\163", PR__MDL__SALARY)]; $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case "\151\x6e\x63\x6f\155\145\163": $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->cwkywyqksyucoyia([IncModel::iockmgiyoygcswog => $miowmmgaiagcuyoo, IncModel::eiiuyoyiygsickwe => [self::ciyoccqkiamemcmm => [IncModel::ycmomqymkecsysum, IncModel::youiiwsayswmyuum], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); goto yoqakewookqoqacm; case "\144\145\144\165\x63\x74\163": goto yoqakewookqoqacm; case "\160\x61\x79\x6d\145\156\164\x73": goto yoqakewookqoqacm; } gswcoeiisamakwii: yoqakewookqoqacm: } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = ["\x6c\141\x62\145\154" => $pkyyagewkiyckmwy, "\x76\x61\154\165\145" => ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie)]; ikuuiauwouuqawuw: } uckewycoogsogwiy: echo $this->iuygowkemiiwqmiw("\163\164\141\164\x73", ["\151\x74\x65\155\x73" => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $mkucggyaiaukqoce = ManipulateUser::get(); $ikgwqyuyckaewsow = ''; if (!$mkucggyaiaukqoce) { goto emqswoaawgeyosmi; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $qyukicweqoisimwg = ["\143\141\156\x63\x65\154"]; $aukoggqmyoweqokc = User::symcgieuakksimmu()->ysqqicckeiweemmu($mkucggyaiaukqoce, self::qagqayweyigciamg); if ($aukoggqmyoweqokc) { goto yuimwyoywaiiqacs; } $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo("\x74\x61\142", "\x74\x61\142\137\x69\x6e\143\x6f\155\145\163\x5f\141\x6e\x64\x5f\x70\141\171\x6d\145\156\x74\x73", DecoratorUser::ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\x72\145\x66" => $geecqyososceumsk], __("\x50\162\x6f\x66\x69\154\145\40\x70\x61\147\145", PR__MDL__SALARY)); $iwamiguusayooguq = sprintf(__("\131\157\x75\40\163\150\x6f\165\154\144\40\146\151\162\x73\x74\x2c\x20\146\151\x6c\x6c\x20\151\156\x20\x79\157\x75\162\40\142\141\156\x6b\x20\x61\143\x63\x6f\165\x6e\164\40\x69\156\x66\157\162\x6d\x61\x74\x69\157\x6e\40\151\x6e\163\151\x64\x65\40\171\x6f\x75\162\x20\45\x73\54\40\164\157\x20\163\x75\x62\155\x69\164\40\141\40\x77\151\x74\x68\144\162\x61\x77", PR__MDL__SALARY), $uweseoyuyuwyeggc); goto ocywegekakimmwcq; yuimwyoywaiiqacs: $aukoggqmyoweqokc->yoimakcqmoqokkcu(); $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::equssioqikiumyki, __("\104\x61\x74\145\x20\124\x6f", PR__MDL__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw("\157\x77\x6e\x65\162", $saqgcoqwmimycgim)], ["\x65\143\150\157" => false, "\160\x61\162\x65\x6e\x74" => ["\143\x6c\x61\x73\163" => "\x63\x6f\x6c\55\x31\62\x20\143\x6f\154\x2d\x6d\144\x2d\70\x20\143\x6f\x6c\x2d\154\x67\55\66\x20\155\171\55\x33\40\155\170\55\141\165\x74\157"]]); $ikgwqyuyckaewsow = ManipulateHTML::uuccukgasskgimsq("\144\x69\x76", ["\x63\x6c\x61\x73\163" => "\162\157\167"], $ikgwqyuyckaewsow); $iwamiguusayooguq = __("\x42\x79\40\163\165\142\155\x69\164\164\151\x6e\147\x20\141\x20\x6e\145\x77\40\x70\141\171\155\145\x6e\x74\40\x72\x65\161\165\145\163\164\54\40\x79\x6f\x75\x20\x77\151\x6c\154\40\x72\145\x63\x65\x69\x76\x65\x20\x79\157\x75\x72\x20\151\x6e\x63\157\x6d\145\40\151\x6e\40\164\x68\145\40\146\x6f\162\155\40\x6f\146\x20\x61\x20\144\145\x70\157\163\x69\164\x20\x74\x6f\x20\164\150\x65\40\151\156\164\x72\157\144\165\143\x65\144\x20\142\x61\156\x6b\40\141\143\x63\157\x75\x6e\164", PR__MDL__SALARY); $qyukicweqoisimwg[] = ["\143\154\141\163\163" => "\x62\164\156\x20\142\164\156\x2d\160\162\x69\x6d\141\162\x79\40\141\144\144\55\156\145\167\x2d\x77\151\164\150\x64\x72\141\167", "\164\x69\164\154\145" => __("\x53\165\x62\155\151\x74", PR__MDL__SALARY)]; ocywegekakimmwcq: $iwamiguusayooguq = ManipulateHTML::uuccukgasskgimsq("\144\151\x76", [], $iwamiguusayooguq); $uosiuoqysyokseqe = __("\101\x64\144\x20\x4e\x65\x77\x20\127\151\164\x68\x64\162\141\167", PR__MDL__SALARY); $nsmgceoqaqogqmuw = ManipulateHTML::icqkogwskuwscskk(["\x73\151\x7a\145" => "\x6c\x67", "\164\x79\160\x65" => "\160\162\151\155\x61\x72\171", "\x74\x69\x74\x6c\145" => $uosiuoqysyokseqe, "\160\162\x65\x66\x69\170" => "\141\144\144\137\x6e\x65\167\137\167\x69\x74\150\x64\x72\141\167", "\143\157\156\164\x65\156\164" => $iwamiguusayooguq . $ikgwqyuyckaewsow, "\x62\165\x74\164\157\156\163" => $qyukicweqoisimwg, "\x73\x70\151\x6e\x6e\x65\162" => true], ["\164\151\x74\154\145" => $uosiuoqysyokseqe, "\x61\164\164\x72\163" => ["\143\x6c\141\163\x73" => "\x62\164\x6e\x20\x62\x74\x6e\x2d\x70\x72\151\155\x61\x72\x79\40\x66\154\157\x61\x74\x2d\162\151\x67\150\164", "\x61\162\151\141\x2d\x6c\141\x62\145\x6c" => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); emqswoaawgeyosmi: } }
