<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678aa11f991c7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Page\Admin\Page; use Pmpr\Module\Salary\Model\Income as IncModel; use Pmpr\Module\Salary\Profile\Admin\Tab\Agreement; use Pmpr\Module\Salary\Profile\Admin\Tab\Income; use Pmpr\Module\Salary\Profile\Admin\Tab\Payment; use Pmpr\Module\Salary\Profile\Admin\Tab\Product; use Pmpr\Module\Salary\User; class Admin extends Page { const wuowaiyouwecckaw = "\x6d\x79\137\143\x6f\154\x6c\x61\142\x6f\162\141\x74\151\x6f\x6e\x5f\x70\162\157\x66\151\154\x65"; const qagqayweyigciamg = "\x62\x61\156\x6b\137\151\x6e\146\157"; const equssioqikiumyki = "\167\151\x74\x68\144\x72\x61\167\137\x74\x6f"; public function ikcgmcycisiccyuc() { $this->canRunSetup = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie() || $this->caokeucsksukesyo()->issssuygyewuaswa()->askmkgcmgekiqwsg(User::yuqaieqcaccggqck); } public function mameiwsayuyquoeq() { $wksoawcgagcgoask = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this); $this->args = [Constants::qoquaeuooeycomks => $wksoawcgagcgoask, Constants::ysgwugcqguggmigq => __("\115\x79\40\123\141\154\x61\162\171\x20\120\162\x6f\x66\x69\x6c\x65", PR__MDL__SALARY), Constants::wuowaiyouwecckaw => self::wuowaiyouwecckaw, Constants::kekcgssiyagioocg => 0, Constants::ucmueuwwcmocgmig => "\x72\x65\x61\x64"]; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\x6d\x69\x6e\x5f\151\156\x69\164", [$this, "\171\x65\x79\x69\x67\165\171\145\147\155\x6d\171\165\x73\x65\141"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if ($this->qcsgmgoukiouuscw()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, "\160\162\157\146\151\154\145", "\160\x72\157\146\151\154\x65\x2e\152\x73")->simswskycwagoeqy())->ceuoqiqwoyuqyewe($this, [Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy, "\x6d\x65\163\163\141\147\145\163" => ["\167\x69\x74\x68\x64\x72\141\x77\137\x74\x6f" => sprintf(__("\111\164\x27\x73\40\156\x6f\164\40\x61\40\166\x61\154\151\144\x20\x25\x73", PR__MDL__SALARY), __("\x44\141\164\x65", PR__MDL__SALARY)), "\x65\155\x70\164\171" => ["\x62\141\156\x6b\137\x69\156\146\157" => sprintf(__("\120\154\145\x61\x73\x65\40\x73\x65\154\145\143\x74\x20\x61\40\x25\x73", PR__MDL__SALARY), __("\x42\141\156\x6b\x20\101\143\143\x6f\x75\156\164\x20\x49\156\146\x6f\162\x6d\141\164\x69\x6f\156", PR__MDL__SALARY)), "\167\x69\164\150\144\162\141\x77\x5f\164\x6f" => sprintf(__("\120\x6c\145\141\163\x65\x20\163\x65\154\145\143\164\x20\141\40\45\163", PR__MDL__SALARY), __("\x44\141\164\145", PR__MDL__SALARY))]]]); } } public function suicksywcwiggasc() { $this->ciwuiwsyckiiogwo([Income::symcgieuakksimmu(), Product::symcgieuakksimmu(), Payment::symcgieuakksimmu(), Agreement::symcgieuakksimmu()]); $this->ssysiyiouyscyeyq(); } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { $this->asucekgauiagoeeo(); parent::kccgekiqgsuwmowo($suaemuyiacqyugsm); } public function asucekgauiagoeeo() { $oammesyieqmwuwyi = ["\x69\156\143\x6f\x6d\145\x73" => __("\x54\157\164\x61\154\40\111\156\x63\157\155\145\163", PR__MDL__SALARY), "\144\x65\x64\165\x63\x74\x73" => __("\124\157\x74\x61\x6c\x20\104\x65\x64\165\x63\164\x73", PR__MDL__SALARY), "\160\x61\171\x6d\x65\x6e\x74\163" => __("\x54\x6f\x74\x61\154\40\120\141\171\155\145\156\x74\x73", PR__MDL__SALARY)]; $miowmmgaiagcuyoo = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = 0; try { switch ($uusmaiomayssaecw) { case "\151\156\x63\157\x6d\x65\163": $ywwsgumqquoegmci = IncModel::symcgieuakksimmu(); $cseccogesusskess = $ywwsgumqquoegmci->iekyeyicoyyawomk()->cieaqygkucwoqwke([Constants::iockmgiyoygcswog => $miowmmgaiagcuyoo, IncModel::eiiuyoyiygsickwe => [Constants::ciyoccqkiamemcmm => [IncModel::ycmomqymkecsysum, IncModel::youiiwsayswmyuum], Constants::euoaaiqkqcqcgeco => Constants::wuwqeigceueyqmsc]]); $eqgoocgaqwqcimie = $ywwsgumqquoegmci->cseaisoguykosgem($cseccogesusskess); break; case "\144\145\x64\165\x63\164\163": break; case "\x70\141\x79\155\x65\156\164\163": break; } } catch (Exception $wgaoewqkwgomoaai) { $eqgoocgaqwqcimie = 0; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, Constants::ciyoccqkiamemcmm => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($eqgoocgaqwqcimie)]; } echo $this->iuygowkemiiwqmiw("\x73\164\x61\x74\163", [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi]); } public function ssysiyiouyscyeyq() { $ikgwqyuyckaewsow = ''; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); if ($mkucggyaiaukqoce = $yoiguusocukqeayg->get()) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $saqgcoqwmimycgim = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce); $qyukicweqoisimwg = ["\x63\x61\x6e\143\x65\x6c"]; $aukoggqmyoweqokc = User::symcgieuakksimmu()->ysqqicckeiweemmu($mkucggyaiaukqoce, self::qagqayweyigciamg); if ($aukoggqmyoweqokc) { $ikgwqyuyckaewsow = MetaBox::iuaucuookgoqiiio([MetaBox::sgsesoiwcgqgckoo(self::equssioqikiumyki, __("\x44\141\x74\x65\40\124\157", PR__MDL__SALARY))->yoimakcqmoqokkcu(), $aukoggqmyoweqokc->eumecwmqmukqgyea(), MetaBox::cwiuiiakukcsaakw("\x6f\167\156\x65\162", $saqgcoqwmimycgim)], ["\145\x63\x68\157" => false, "\160\141\162\145\x6e\x74" => ["\x63\154\x61\163\163" => "\143\157\x6c\x2d\61\x32\x20\x63\x6f\x6c\55\155\x64\x2d\x38\x20\143\157\154\x2d\x6c\147\55\66\40\x6d\x79\x2d\63\40\155\170\55\141\165\x74\157"]]); $ikgwqyuyckaewsow = $swqimwqeweekeusq->uuccukgasskgimsq("\144\151\166", ["\143\154\x61\x73\x73" => "\x72\157\167"], $ikgwqyuyckaewsow); $iwamiguusayooguq = __("\102\x79\40\x73\165\x62\x6d\x69\x74\164\151\156\147\x20\x61\40\x6e\145\x77\40\160\141\171\155\145\156\164\x20\162\145\x71\165\145\163\164\x2c\x20\171\157\165\x20\167\151\x6c\x6c\40\x72\145\143\x65\x69\166\145\x20\171\x6f\x75\x72\40\151\156\143\157\x6d\x65\40\x69\156\40\x74\x68\145\x20\x66\157\162\x6d\40\157\x66\x20\x61\x20\x64\x65\x70\157\163\x69\x74\x20\164\x6f\x20\164\x68\x65\x20\151\156\x74\162\x6f\144\x75\143\145\144\40\x62\141\x6e\153\40\141\143\143\157\x75\156\x74", PR__MDL__SALARY); $qyukicweqoisimwg[] = ["\x63\x6c\141\163\163" => "\x62\x74\x6e\x20\142\164\x6e\55\160\x72\151\155\141\162\x79\40\141\x64\x64\55\156\145\167\x2d\167\x69\164\150\x64\162\x61\167", "\164\151\164\154\145" => __("\123\165\142\x6d\151\164", PR__MDL__SALARY)]; } else { $geecqyososceumsk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\164\141\142", "\164\141\142\x5f\x69\156\143\157\155\x65\x73\137\x61\156\x64\x5f\160\x61\x79\x6d\145\156\164\163", $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ekqiayaoseqcygmo($saqgcoqwmimycgim)); $uweseoyuyuwyeggc = $swqimwqeweekeusq->uuccukgasskgimsq("\x61", ["\150\x72\145\146" => $geecqyososceumsk], __("\x50\x72\157\146\x69\x6c\x65\40\x70\x61\x67\145", PR__MDL__SALARY)); $iwamiguusayooguq = sprintf(__("\x59\157\x75\40\163\150\x6f\165\154\144\40\x66\151\162\163\164\54\x20\x66\x69\154\x6c\x20\x69\156\40\171\x6f\165\x72\x20\142\141\156\x6b\40\141\143\143\x6f\x75\x6e\x74\x20\151\156\146\x6f\162\155\x61\164\151\x6f\156\x20\151\156\x73\x69\144\145\x20\171\157\x75\x72\x20\x25\163\54\x20\x74\x6f\x20\x73\165\x62\155\151\x74\x20\x61\40\167\151\164\150\x64\x72\x61\167", PR__MDL__SALARY), $uweseoyuyuwyeggc); } $iwamiguusayooguq = $swqimwqeweekeusq->iaaacsuskiakkwui($iwamiguusayooguq); $uosiuoqysyokseqe = __("\101\x64\144\x20\116\x65\x77\x20\x57\151\x74\150\144\x72\141\167", PR__MDL__SALARY); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wmkogisswkckmeua()->icqkogwskuwscskk(["\x73\x69\x7a\x65" => "\x6c\x67", "\164\171\160\x65" => "\160\162\x69\x6d\x61\x72\x79", "\x74\x69\164\154\x65" => $uosiuoqysyokseqe, "\x70\162\145\x66\x69\170" => "\x61\x64\144\137\x6e\145\167\137\167\x69\164\150\144\162\141\167", "\x63\157\x6e\x74\x65\x6e\x74" => $iwamiguusayooguq . $ikgwqyuyckaewsow, "\142\x75\164\x74\157\156\x73" => $qyukicweqoisimwg, "\x73\x70\151\156\156\145\162" => true], ["\x74\151\164\154\x65" => $uosiuoqysyokseqe, "\x61\x74\164\x72\x73" => ["\x63\154\141\x73\163" => "\142\x74\x6e\40\x62\164\x6e\x2d\x70\162\x69\x6d\141\x72\171\40\146\x6c\157\141\x74\55\162\151\x67\x68\164", "\141\162\151\141\x2d\x6c\x61\142\145\x6c" => $uosiuoqysyokseqe]]); $this->quyawykcegmmwmky($nsmgceoqaqogqmuw); } } }
