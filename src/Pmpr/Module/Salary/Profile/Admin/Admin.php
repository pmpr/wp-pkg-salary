<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432b7fd5e31d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Module\Salary\Model\Income as IncModel; use Pmpr\Module\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Module\Salary\Profile\Admin\Tab\Income; use Pmpr\Module\Salary\Profile\Admin\Tab\Payment; use Pmpr\Module\Salary\Profile\Admin\Tab\Product; use Pmpr\Module\Salary\User; class Admin extends Page { const wuowaiyouwecckaw = "\x6d\x79\137\143\157\154\154\141\x62\157\162\x61\x74\x69\157\156\137\x70\162\157\146\x69\154\145"; const qagqayweyigciamg = "\x62\141\x6e\153\x5f\151\156\146\x6f"; const equssioqikiumyki = "\167\151\x74\x68\144\x72\141\167\x5f\164\157"; public function __construct() { if (!(DecoratorUser::scmcyesmmikkucie() || ManipulateUser::askmkgcmgekiqwsg(User::yuqaieqcaccggqck))) { goto uoeasoimegouymka; } $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->args = ["\x70\x61\162\x65\156\x74\137\163\154\x75\147" => $wksoawcgagcgoask, "\x70\x61\147\x65\x5f\x74\151\x74\x6c\x65" => __("\x4d\171\x20\x53\141\154\x61\162\x79\x20\120\162\x6f\146\151\x6c\145", PR__MDL__SALARY), "\x6d\145\156\x75\137\163\x6c\x75\147" => self::wuowaiyouwecckaw, "\160\x6f\x73\x69\164\x69\x6f\156" => 0, "\x63\141\160\141\142\x69\x6c\151\164\x79" => "\162\145\141\144"]; parent::__construct(); $this->iemaakgqgqosiecm(); uoeasoimegouymka: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\151\156\x5f\x69\x6e\151\x74", [$this, "\x79\145\x79\x69\147\x75\x79\x65\147\155\155\171\x75\163\x65\141"]); parent::wigskegsqequoeks(); } public function iemaakgqgqosiecm() { Ajax::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { if (!$this->qcsgmgoukiouuscw()) { goto egsycocugqyyswsi; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\160\162\157\146\x69\x6c\145", $eygsasmqycagyayw->get("\x70\x72\x6f\x66\x69\x6c\x65\x2e\152\163"))->ayuciigykaswwqeo("\152\x71\x75\x65\162\x79"))->ikqyiskqaaymscgw("\x61\152\x61\170", Ajax::myikkigscysoykgy)->ikqyiskqaaymscgw("\x6d\145\163\x73\141\147\145\x73", ["\167\151\x74\150\x64\x72\141\167\x5f\x74\157" => sprintf(__("\111\164\47\163\40\156\x6f\x74\40\x61\x20\166\x61\x6c\x69\x64\40\45\163", PR__MDL__SALARY), __("\x44\x61\x74\145", PR__MDL__SALARY)), "\145\x6d\x70\x74\x79" => ["\142\x61\156\x6b\x5f\x69\x6e\146\157" => sprintf(__("\120\x6c\145\x61\x73\145\40\163\x65\154\x65\143\164\x20\x61\40\45\163", PR__MDL__SALARY), __("\102\141\x6e\153\x20\101\x63\x63\157\165\156\164\x20\x49\x6e\x66\157\x72\x6d\141\164\x69\x6f\x6e", PR__MDL__SALARY)), "\167\x69\164\x68\x64\162\x61\x77\x5f\x74\157" => sprintf(__("\120\x6c\x65\x61\x73\x65\40\163\x65\x6c\x65\x63\164\x20\x61\40\x25\x73", PR__MDL__SALARY), __("\104\141\x74\145", PR__MDL__SALARY))]]); egsycocugqyyswsi: } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); $this->ssysiyiouyscyeyq(); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ["\x69\x6e\x63\157\155\145\x73" => __("\124\157\x74\141\x6c\40\x49\156\143\157\x6d\145\163", PR__MDL__SALARY), "\x64\x65\144\165\143\x74\163" => __("\x54\x6f\164\141\154\x20\x44\x65\144\165\x63\x74\163", PR__MDL__SALARY), "\x70\x61\171\155\x65\x6e\164\x73" => __("\x54\x6f\x74\x61\154\40\x50\x61\x79\x6d\145\156\x74\163", PR__MDL__SALARY)]; $miowmmgaiagcuyoo = ManipulateUser::mwikyscisascoeea(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case "\151\156\143\157\155\x65\x73": $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->cwkywyqksyucoyia([IncModel::iockmgiyoygcswog => $miowmmgaiagcuyoo, IncModel::eiiuyoyiygsickwe => [self::ciyoccqkiamemcmm => [IncModel::ycmomqymkecsysum, IncModel::youiiwsayswmyuum], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); goto osuscoaaomwcqkew; case "\144\x65\x64\165\x63\x74\163": goto osuscoaaomwcqkew; case "\160\x61\x79\x6d\x65\156\164\x73": goto osuscoaaomwcqkew; } ciucewqgyoiouesq: osuscoaaomwcqkew: } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = ["\x6c\141\142\145\154" => $pkyyagewkiyckmwy, "\x76\x61\154\165\x65" => ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie)]; aoquoewagkseayug: } qiaimmucomukkeka: echo $this->iuygowkemiiwqmiw("\163\x74\x61\164\x73", ["\x69\164\145\155\163" => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $mkucggyaiaukqoce = ManipulateUser::get(); $ikgwqyuyckaewsow = ''; if (!$mkucggyaiaukqoce) { goto ussceseaimqywuiy; } $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $qyukicweqoisimwg = ["\143\x61\156\x63\145\x6c"]; $aukoggqmyoweqokc = User::symcgieuakksimmu()->ysqqicckeiweemmu($mkucggyaiaukqoce, self::qagqayweyigciamg); if ($aukoggqmyoweqokc) { goto cgmgqucewwssmicq; } $geecqyososceumsk = DecoratorQuery::yqymaqmqiqmmmsoo("\x74\141\142", "\x74\x61\x62\x5f\x69\156\x63\x6f\x6d\145\x73\x5f\141\156\x64\137\160\x61\x79\x6d\x65\x6e\164\163", DecoratorUser::ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\x72\145\x66" => $geecqyososceumsk], __("\120\162\157\x66\x69\x6c\x65\40\160\141\147\x65", PR__MDL__SALARY)); $iwamiguusayooguq = sprintf(__("\x59\x6f\x75\x20\163\x68\157\165\x6c\144\40\146\x69\x72\x73\x74\54\x20\x66\x69\x6c\x6c\x20\151\156\40\x79\157\165\162\40\142\141\x6e\x6b\40\x61\x63\x63\157\x75\156\x74\40\x69\x6e\x66\x6f\162\x6d\141\164\151\157\156\x20\151\x6e\163\x69\144\145\40\171\x6f\165\162\x20\45\x73\54\x20\x74\157\40\163\x75\x62\x6d\151\164\x20\x61\x20\x77\x69\x74\150\x64\162\141\167", PR__MDL__SALARY), $uweseoyuyuwyeggc); goto mkomygccqkmkumsi; cgmgqucewwssmicq: $aukoggqmyoweqokc->yoimakcqmoqokkcu(); $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::equssioqikiumyki, __("\104\x61\x74\145\x20\124\157", PR__MDL__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw("\157\167\x6e\145\x72", $saqgcoqwmimycgim)], ["\145\x63\x68\157" => false, "\x70\141\x72\145\x6e\164" => ["\143\x6c\x61\163\x73" => "\x63\157\x6c\55\x31\62\x20\x63\157\x6c\x2d\x6d\144\55\70\x20\x63\157\x6c\55\154\147\55\66\x20\155\171\55\x33\x20\155\x78\x2d\141\x75\x74\x6f"]]); $ikgwqyuyckaewsow = ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", ["\x63\154\x61\163\163" => "\x72\x6f\x77"], $ikgwqyuyckaewsow); $iwamiguusayooguq = __("\x42\x79\x20\x73\x75\142\x6d\151\x74\164\x69\156\x67\40\141\x20\156\145\x77\40\160\x61\x79\155\145\156\x74\40\x72\145\x71\165\x65\163\164\54\40\x79\x6f\165\x20\x77\151\x6c\x6c\x20\x72\x65\x63\x65\x69\166\145\x20\x79\157\165\x72\40\x69\x6e\143\157\155\145\x20\x69\x6e\x20\x74\150\x65\x20\146\x6f\162\155\40\157\x66\40\x61\x20\144\x65\160\157\x73\151\x74\x20\164\x6f\x20\164\150\x65\x20\x69\x6e\x74\162\x6f\x64\x75\x63\x65\144\x20\142\x61\156\153\x20\141\143\143\x6f\x75\x6e\164", PR__MDL__SALARY); $qyukicweqoisimwg[] = ["\143\x6c\x61\x73\163" => "\x62\x74\156\40\142\164\156\55\160\162\x69\155\x61\x72\171\40\x61\x64\x64\55\x6e\145\167\x2d\x77\x69\x74\150\x64\x72\x61\x77", "\x74\x69\x74\x6c\145" => __("\123\165\x62\x6d\x69\164", PR__MDL__SALARY)]; mkomygccqkmkumsi: $iwamiguusayooguq = ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", [], $iwamiguusayooguq); $uosiuoqysyokseqe = __("\x41\144\x64\x20\116\145\x77\40\x57\151\164\x68\144\162\x61\167", PR__MDL__SALARY); $nsmgceoqaqogqmuw = ManipulateHTML::icqkogwskuwscskk(["\x73\151\172\x65" => "\x6c\x67", "\x74\171\160\x65" => "\160\162\151\155\141\x72\171", "\x74\x69\164\x6c\145" => $uosiuoqysyokseqe, "\160\162\x65\x66\x69\x78" => "\141\x64\144\137\156\x65\167\x5f\x77\x69\164\x68\144\162\x61\167", "\143\157\156\x74\145\156\164" => $iwamiguusayooguq . $ikgwqyuyckaewsow, "\142\x75\164\164\x6f\x6e\x73" => $qyukicweqoisimwg, "\163\x70\x69\156\x6e\145\x72" => true], ["\164\x69\164\154\145" => $uosiuoqysyokseqe, "\141\x74\164\x72\163" => ["\x63\154\x61\163\x73" => "\142\164\x6e\x20\x62\164\156\55\160\162\151\x6d\x61\162\171\40\146\154\157\x61\164\x2d\x72\151\x67\x68\x74", "\x61\x72\x69\x61\x2d\x6c\141\142\145\x6c" => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); ussceseaimqywuiy: } }
