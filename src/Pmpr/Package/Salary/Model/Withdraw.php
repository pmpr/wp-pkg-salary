<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c039ae18cf0             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Model; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Package\Salary\Salary; use Pmpr\Package\Salary\Setting; use Pmpr\Package\Salary\User; class Withdraw extends Common { const owskgkyceomsskgm = "\x63\x72\145\141\x74\157\x72"; const INCOME_ID = "\151\x6e\143\157\155\x65\x5f\151\144"; const PAYMENT_ID = "\x70\x61\x79\x6d\x65\156\x74\x5f\151\x64"; const BANK_ACCOUNT = "\142\141\x6e\153\137\141\x63\x63\157\x75\x6e\164"; const aioqyewkwawaqgqe = "\141\x6d\x6f\x75\156\164"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->guiaswksukmgageq(__("\127\x69\x74\x68\x64\162\141\x77", PR__PKG__SALARY))->muuwuqssqkaieqge(__("\127\x69\164\x68\144\162\x61\x77\x73", PR__PKG__SALARY))->aseucqksocwomwos()->wkesqcmiekqoykag()->qemeyueyiwgsokuc(["\160\157\163\x69\164\x69\x6f\x6e" => 3, "\155\x65\156\165\x5f\164\x69\164\154\x65" => __("\101\x6c\x6c\x20\x57\151\164\150\x64\x72\x61\x77\163", PR__PKG__SALARY)]); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->geqyygqiwiqusekc(self::iockmgiyoygcswog)->gswweykyogmsyawy(__("\117\167\156\x65\162", PR__PKG__SALARY)), $this->geqyygqiwiqusekc(self::owskgkyceomsskgm)->gswweykyogmsyawy(__("\103\162\145\141\164\x6f\x72", PR__PKG__SALARY))->acokiqqgsmoqaeyu(), $this->owgikiusoocuqqgo(self::ciywsqoeiymemsys, $this->agausceiyceikeag())->gswweykyogmsyawy(__("\x53\x74\x61\x74\x75\163", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::BANK_ACCOUNT)->acceqyqygswoecwe(8)->gswweykyogmsyawy(__("\102\x61\x6e\x6b\40\101\x63\143\157\165\156\x74\40\x49\156\146\157\x72\155\141\164\151\157\156", PR__PKG__SALARY)), $this->ggiieomioscuigco(self::INCOME_ID)->uwmyqckcyamwaiww(Income::class)->gswweykyogmsyawy(__("\x49\x6e\143\157\x6d\145\x73", PR__PKG__SALARY))->ckgquisaimmgwuyu(), $this->ggiieomioscuigco(self::PAYMENT_ID)->uwmyqckcyamwaiww(Payment::class)->gswweykyogmsyawy(__("\x50\141\171\155\145\x6e\164", PR__PKG__SALARY))->ckgquisaimmgwuyu()]); parent::ewaqwooqoqmcoomi(); } public function kssgsuewkcwgiksa() : array { return [self::ciywsqoeiymemsys => ["\143\157\x6c" => "\155\144\55\x36\x20\x6c\x67\x2d\x33", "\164\x79\160\145" => "\x62\x73\163\145\x6c\x65\143\164", "\x6f\x70\x74\x69\157\156\x73" => $this->agausceiyceikeag(), "\x72\x65\161\x75\x69\x72\x65\x64"], self::PAYMENT_ID => ["\143\x6f\154" => "\61\62", "\x74\171\x70\145" => "\x67\x72\x6f\x75\160", "\x74\x77\x6f\55\143\157\154\x75\x6d\x6e"]]; } public function agausceiyceikeag($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::sgoswgskyiiwkyuo => __("\120\x65\156\144\x69\156\147\x20\x50\141\x79\x6d\145\156\x74", PR__PKG__SALARY), self::cwiummueqsucqayc => __("\x41\x63\x63\145\x70\x74\145\x64", PR__PKG__SALARY), self::ayucqsmaykqegwqo => __("\x52\x65\146\165\163\145\x64", PR__PKG__SALARY)]; return ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq, $oqseeekuqisekiwy); } public function kyisicoeikyckoge($miowmmgaiagcuyoo, $iueymcwwscwqkiyq, $cackiyicawmkyqqg = "\75") : int { $gaeqamemwmwsyukm = 0; $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye(self::iockmgiyoygcswog, ManipulateUser::mwikyscisascoeea($miowmmgaiagcuyoo)); if (!$siykeiywomwwuoiw) { goto eeauyscekuckoues; } $gaeqamemwmwsyukm = $this->ieieyoeqmmeysauc(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, $cackiyicawmkyqqg, $siykeiywomwwuoiw); eeauyscekuckoues: return $gaeqamemwmwsyukm; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { if (isset($mksyucucyswaukig->amount)) { goto eogwckcymuugikuy; } $mksyucucyswaukig->amount = 0; eogwckcymuugikuy: switch ($qgoqiacsiccwoawi) { case self::BANK_ACCOUNT: $miowmmgaiagcuyoo = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::iockmgiyoygcswog); $wusccgcckucqsqwe = User::symcgieuakksimmu(); if (ManipulateQuery::euqowsuwmgokuqqo()) { goto iwsuawwqomaowuii; } $eqgoocgaqwqcimie = $wusccgcckucqsqwe->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); $qmomekeesaiaoegu = ManipulateArray::get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::oogeqgcgkamuoaoe); $ygogqywsaqoukoqy = ManipulateArray::get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::cqkcksqwkcsiykuq); if (!$qmomekeesaiaoegu) { goto qoqskyuuwueqkquk; } $eqgoocgaqwqcimie[$wusccgcckucqsqwe::qgqyauaqwqmqseim] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->kwagkemgawuoacwy($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::oogeqgcgkamuoaoe] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->eoemoqciaweskqkk($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::cqkcksqwkcsiykuq] = $this->msywmyaoqmaegsuy($ygogqywsaqoukoqy); qoqskyuuwueqkquk: goto wcugqegqsuuuwqao; iwsuawwqomaowuii: $eqgoocgaqwqcimie = $wusccgcckucqsqwe->kkqikgwyqqmukogk($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); wcugqegqsuuuwqao: goto msemumccgceyugmg; case self::iockmgiyoygcswog: case self::owskgkyceomsskgm: $miowmmgaiagcuyoo = ManipulateUser::get($eqgoocgaqwqcimie, true); if (!$miowmmgaiagcuyoo) { goto asiqwuoswmigcaki; } $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($miowmmgaiagcuyoo, "\144\151\x73\160\x6c\141\x79\x5f\156\141\x6d\x65", true); $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulateUser::yyykkcyiksewsoqy($miowmmgaiagcuyoo), $ymqmyyeuycgmigyo); asiqwuoswmigcaki: goto msemumccgceyugmg; case self::ciywsqoeiymemsys: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto ciykoyeioqgyaeqo; } $meqocwsecsywiiqs = ManipulateArray::get($this->agausceiyceikeag(), $eqgoocgaqwqcimie); $eqgoocgaqwqcimie = $this->usouqioywgosyqqy($eqgoocgaqwqcimie, $meqocwsecsywiiqs); ciykoyeioqgyaeqo: goto msemumccgceyugmg; case self::aioqyewkwawaqgqe: case self::INCOME_ID: $eqgoocgaqwqcimie = $this->uoemumeeowowuqaq($mksyucucyswaukig, false); $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); goto msemumccgceyugmg; } wagqgeqymeqoeuyi: msemumccgceyugmg: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function uoemumeeowowuqaq($mksyucucyswaukig, $mgkceomocowocqyo = "\166\x69\145\167") { return $this->yqcgeogiccmkwuic($mksyucucyswaukig, self::INCOME_ID, $mgkceomocowocqyo); } public function qeowcucuoaqyqwuw($umwgoasiowmqcumw, $siykeiywomwwuoiw = null) : array { $oqseeekuqisekiwy = $this->agausceiyceikeag(); foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq => $meqocwsecsywiiqs) { $umwgoasiowmqcumw[$iueymcwwscwqkiyq] = [self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::qiyqwyiiwykeccmo => $this->ieieyoeqmmeysauc(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, "\x3d", clone $siykeiywomwwuoiw)]; qgeugwymkkiacwoc: } mqicocmqegwukkwg: return parent::qeowcucuoaqyqwuw($umwgoasiowmqcumw, $siykeiywomwwuoiw); } public function mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $ywqqikcsamcaycgm, $kooascmqqwmaskmi) : array { $occymigcemkqucuw = false; $ckeskcacgiywwoua = $this->kyisicoeikyckoge($miowmmgaiagcuyoo, self::sgoswgskyiiwkyuo); if ($ckeskcacgiywwoua <= 0) { goto ousiuuwgwkiyikyq; } $uamcoiueqaamsqma = sprintf(__("\x59\x6f\165\40\x61\x6c\162\145\x61\144\x79\x20\150\141\x76\x65\x20\x61\40\167\151\164\x68\144\x72\x61\x77\x20\167\151\x74\150\40\45\x73\x20\x73\164\x61\164\165\163\x2e", PR__PKG__SALARY), ManipulateHTML::ciuuiyckmsygceis($this->agausceiyceikeag(self::sgoswgskyiiwkyuo))); goto ogsaaqsaogcqiouy; ousiuuwgwkiyikyq: if ($ywqqikcsamcaycgm) { goto miweggwqeiaeweia; } $uamcoiueqaamsqma = __("\101\147\162\x65\145\x6d\145\x6e\164\x20\x6e\x6f\164\x20\146\x6f\165\x6e\x64\x2e", PR__PKG__SALARY); goto kqqiegkuqagcqsya; miweggwqeiaeweia: $ogekyekymoyuywog = Income::symcgieuakksimmu(); $cseccogesusskess = $ogekyekymoyuywog->cwkywyqksyucoyia([$ogekyekymoyuywog::iockmgiyoygcswog => $miowmmgaiagcuyoo, $ogekyekymoyuywog::AGREEMENT_ID => [self::ciyoccqkiamemcmm => $ywqqikcsamcaycgm, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc], $ogekyekymoyuywog::WITHDRAW_STATUS => $ogekyekymoyuywog::WITHDRAW_STATUS_UNWITHDRAWN]); $ygeuioagqoqumwuw = Setting::eiwcuqigayigimak(Setting::MIN_WITHDRAW_BALANCE, 0); $gkimsiseuqckqkso = $this->cseaisoguykosgem($cseccogesusskess); if ($gkimsiseuqckqkso > $ygeuioagqoqumwuw) { goto guykyqecgswcsmws; } $uamcoiueqaamsqma = sprintf(__("\131\x6f\165\162\40\162\x65\x71\165\x65\163\x74\145\x64\x20\x61\x6d\157\x75\156\x74\x20\50\45\x73\x29\40\151\163\x20\154\145\x73\x73\x20\164\150\141\156\40\x79\157\165\x72\x20\x61\x67\x72\145\145\x6d\x65\156\x74\x20\x62\141\x6c\x61\x6e\x63\x65\x20\x74\150\x72\x65\163\150\x6f\x6c\144\x20\x28\45\x73\x29\56", PR__PKG__SALARY), ManipulateHTML::ciuuiyckmsygceis(ManipulateWoocommerce::mcgaskyiamgqmqgu($gkimsiseuqckqkso)), ManipulateHTML::ciuuiyckmsygceis(ManipulateWoocommerce::mcgaskyiamgqmqgu($ygeuioagqoqumwuw))); goto kkumywowcoycymeo; guykyqecgswcsmws: if ($cseccogesusskess) { goto samwkqgwouggsguc; } $uamcoiueqaamsqma = sprintf(__("\131\157\x75\40\x64\157\156\47\x74\40\150\x61\166\145\x20\x61\x6e\x79\40\x69\x6e\143\157\x6d\x65\x20\165\x6e\164\151\154\40\x6e\157\167\x2c\x20\167\x69\x74\x68\x20\x73\164\x61\164\165\163\40\x25\163\x2e", PR__PKG__SALARY), ManipulateHTML::ciuuiyckmsygceis($ogekyekymoyuywog->cysukeiuucugyiqq($ogekyekymoyuywog::WITHDRAW_STATUS_UNWITHDRAWN))); goto wyuemgggaqogsmsq; samwkqgwouggsguc: foreach ($cseccogesusskess as $momcykaoccoymeig => $yuywqkssaukwuiwe) { $cseccogesusskess[$momcykaoccoymeig] = ManipulateArray::set($yuywqkssaukwuiwe, [$ogekyekymoyuywog::WITHDRAW_STATUS => $ogekyekymoyuywog::WITHDRAW_STATUS_WITHDRAWN]); ouamogymawucwswu: } emmsycooskoqmgeg: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([self::iockmgiyoygcswog => $miowmmgaiagcuyoo, self::ciywsqoeiymemsys => self::sgoswgskyiiwkyuo, self::owskgkyceomsskgm => $miowmmgaiagcuyoo, self::INCOME_ID => $cseccogesusskess, self::BANK_ACCOUNT => $kooascmqqwmaskmi]); $euakemkgmcigqycw = ManipulateArray::get($sogksuscggsicmac, "\x6f\142\x6a\x65\x63\164"); if ($euakemkgmcigqycw instanceof Withdraw) { goto acsqgiuageaasiyy; } $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, self::iwyueouqaqegmcas, []); $uamcoiueqaamsqma = sprintf(__("\x43\x61\x6e\x20\156\157\x74\40\141\x64\x64\x20\x61\40\x6e\x65\167\x20\x77\151\x74\x68\x64\x72\x61\x77\x3a\40\x25\163", PR__PKG__SALARY), implode("\x3c\142\162\57\76", $ueeagokqmgisgauy)); goto oomguqikqokqwgku; acsqgiuageaasiyy: try { User::symcgieuakksimmu()->oiagiswyysamcyag($miowmmgaiagcuyoo, $kooascmqqwmaskmi); $uamcoiueqaamsqma = __("\131\x6f\165\x72\x20\x77\x69\164\150\x64\162\141\167\40\151\163\x20\x73\x75\x62\x6d\151\164\164\x65\x64\x20\163\165\143\x63\x65\163\x73\x66\x75\x6c\154\171\x2e", PR__PKG__SALARY); $occymigcemkqucuw = true; } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf(__("\103\x61\x6e\x20\156\157\x74\40\x73\141\166\x65\x20\162\145\x6c\x61\x74\x69\157\156\x20\x73\x68\151\160\x3a\x20\x25\163", PR__PKG__SALARY), $wgaoewqkwgomoaai->sagusgigmkeysock()); } if ($occymigcemkqucuw) { goto mugqyyeayeyggqqk; } try { $euakemkgmcigqycw->delete(); } catch (Exception $wgaoewqkwgomoaai) { } mugqyyeayeyggqqk: oomguqikqokqwgku: wyuemgggaqogsmsq: kkumywowcoycymeo: kqqiegkuqagcqsya: ogsaaqsaogcqiouy: return [self::ckcawaoawwioqecq => $occymigcemkqucuw, self::eoskkkieowogacws => $uamcoiueqaamsqma]; } }
