<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d86d4b1743             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Salary; use Pmpr\Module\Salary\Setting; use Pmpr\Module\Salary\User; class Withdraw extends Common { const owskgkyceomsskgm = "\x63\x72\x65\141\x74\157\162"; const sseuikaiuuscgcge = "\151\x6e\x63\x6f\x6d\x65\x5f\x69\144"; const msoeaooscimowuyw = "\160\x61\171\155\145\156\164\137\151\x64"; const owmueawayysqcsqo = "\142\x61\x6e\x6b\x5f\141\143\143\x6f\165\x6e\164"; const aioqyewkwawaqgqe = "\141\x6d\157\x75\156\x74"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->guiaswksukmgageq(__("\127\151\x74\150\144\x72\141\x77", PR__MDL__SALARY))->muuwuqssqkaieqge(__("\x57\x69\164\x68\144\162\141\167\163", PR__MDL__SALARY))->ckaeqgiaiqwsccke(3)->aseucqksocwomwos()->wkesqcmiekqoykag()->qemeyueyiwgsokuc(["\155\145\156\x75\137\164\x69\164\x6c\145" => __("\x41\154\x6c\x20\x57\x69\x74\150\144\162\141\x77\x73", PR__MDL__SALARY)]); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->geqyygqiwiqusekc(self::iockmgiyoygcswog)->gswweykyogmsyawy(__("\x4f\167\156\145\x72", PR__MDL__SALARY)), $this->geqyygqiwiqusekc(self::owskgkyceomsskgm)->gswweykyogmsyawy(__("\103\x72\x65\141\x74\157\x72", PR__MDL__SALARY))->acokiqqgsmoqaeyu(), $this->owgikiusoocuqqgo(self::ciywsqoeiymemsys, $this->agausceiyceikeag())->gswweykyogmsyawy(__("\123\x74\141\x74\165\163", PR__MDL__SALARY)), $this->qcyqgwuuymykkcke(self::owmueawayysqcsqo)->acceqyqygswoecwe(8)->gswweykyogmsyawy(__("\102\141\156\x6b\40\x41\143\143\x6f\165\x6e\164\40\111\x6e\146\x6f\x72\x6d\x61\164\x69\157\156", PR__MDL__SALARY)), $this->ggiieomioscuigco(self::sseuikaiuuscgcge)->uwmyqckcyamwaiww(Income::class)->gswweykyogmsyawy(__("\111\156\x63\x6f\155\x65\x73", PR__MDL__SALARY))->ckgquisaimmgwuyu(), $this->ggiieomioscuigco(self::msoeaooscimowuyw)->uwmyqckcyamwaiww(Payment::class)->gswweykyogmsyawy(__("\120\141\x79\x6d\x65\x6e\164", PR__MDL__SALARY))->ckgquisaimmgwuyu()]); parent::ewaqwooqoqmcoomi(); } public function kssgsuewkcwgiksa() : array { return [self::ciywsqoeiymemsys => ["\143\x6f\154" => "\155\144\x2d\x36\x20\154\x67\55\63", "\x74\x79\160\145" => "\x62\163\163\145\154\145\143\164", "\x6f\x70\164\x69\x6f\x6e\x73" => $this->agausceiyceikeag(), "\x72\x65\161\165\151\x72\145\144"], self::msoeaooscimowuyw => ["\143\157\154" => "\61\62", "\164\x79\160\145" => "\x67\x72\157\165\x70", "\164\x77\157\x2d\143\157\154\x75\x6d\156"]]; } public function agausceiyceikeag($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::sgoswgskyiiwkyuo => __("\x50\145\156\x64\x69\x6e\x67\40\120\141\171\x6d\145\156\x74", PR__MDL__SALARY), self::cwiummueqsucqayc => __("\101\x63\x63\145\160\164\x65\x64", PR__MDL__SALARY), self::ayucqsmaykqegwqo => __("\x52\145\x66\165\x73\145\144", PR__MDL__SALARY)]; return ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq, $oqseeekuqisekiwy); } public function kyisicoeikyckoge($miowmmgaiagcuyoo, $iueymcwwscwqkiyq, $cackiyicawmkyqqg = "\x3d") : int { $gaeqamemwmwsyukm = 0; $siykeiywomwwuoiw = $this->wkmkqaiwuqouweye(self::iockmgiyoygcswog, ManipulateUser::mwikyscisascoeea($miowmmgaiagcuyoo)); if (!$siykeiywomwwuoiw) { goto ugykmcouiwiscoqu; } $gaeqamemwmwsyukm = $this->ieieyoeqmmeysauc(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, $cackiyicawmkyqqg, $siykeiywomwwuoiw); ugykmcouiwiscoqu: return $gaeqamemwmwsyukm; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { if (isset($mksyucucyswaukig->amount)) { goto isewysikysqewkis; } $mksyucucyswaukig->amount = 0; isewysikysqewkis: switch ($qgoqiacsiccwoawi) { case self::owmueawayysqcsqo: $miowmmgaiagcuyoo = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::iockmgiyoygcswog); $wusccgcckucqsqwe = User::symcgieuakksimmu(); if (ManipulateQuery::euqowsuwmgokuqqo()) { goto sqwuqegeiisoiiuq; } $eqgoocgaqwqcimie = $wusccgcckucqsqwe->ogimyyckeeygkmyc($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); $qmomekeesaiaoegu = ManipulateArray::get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::oogeqgcgkamuoaoe); $ygogqywsaqoukoqy = ManipulateArray::get($eqgoocgaqwqcimie, $wusccgcckucqsqwe::cqkcksqwkcsiykuq); if (!$qmomekeesaiaoegu) { goto eouwacqiommmeaqc; } $eqgoocgaqwqcimie[$wusccgcckucqsqwe::qgqyauaqwqmqseim] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->kwagkemgawuoacwy($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::oogeqgcgkamuoaoe] = (string) $wusccgcckucqsqwe->mmymimkumuekmmgi()->eoemoqciaweskqkk($qmomekeesaiaoegu); $eqgoocgaqwqcimie[$wusccgcckucqsqwe::cqkcksqwkcsiykuq] = $this->msywmyaoqmaegsuy($ygogqywsaqoukoqy); eouwacqiommmeaqc: goto uscokkmquayiukag; sqwuqegeiisoiiuq: $eqgoocgaqwqcimie = $wusccgcckucqsqwe->kkqikgwyqqmukogk($miowmmgaiagcuyoo, $eqgoocgaqwqcimie); uscokkmquayiukag: goto wiwoiyoakywqyaiy; case self::iockmgiyoygcswog: case self::owskgkyceomsskgm: $miowmmgaiagcuyoo = ManipulateUser::get($eqgoocgaqwqcimie, true); if (!$miowmmgaiagcuyoo) { goto ykqsuiyyosyeyscc; } $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($miowmmgaiagcuyoo, "\144\151\163\160\154\141\171\x5f\156\x61\155\145", true); $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulateUser::yyykkcyiksewsoqy($miowmmgaiagcuyoo), $ymqmyyeuycgmigyo); ykqsuiyyosyeyscc: goto wiwoiyoakywqyaiy; case self::ciywsqoeiymemsys: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto ugogoekeckgcmuaw; } $meqocwsecsywiiqs = ManipulateArray::get($this->agausceiyceikeag(), $eqgoocgaqwqcimie); $eqgoocgaqwqcimie = $this->usouqioywgosyqqy($eqgoocgaqwqcimie, $meqocwsecsywiiqs); ugogoekeckgcmuaw: goto wiwoiyoakywqyaiy; case self::aioqyewkwawaqgqe: case self::sseuikaiuuscgcge: $eqgoocgaqwqcimie = $this->uoemumeeowowuqaq($mksyucucyswaukig, false); $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); goto wiwoiyoakywqyaiy; } igmmqwyawcuuckkq: wiwoiyoakywqyaiy: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function uoemumeeowowuqaq($mksyucucyswaukig, $mgkceomocowocqyo = "\x76\151\x65\x77") { return $this->yqcgeogiccmkwuic($mksyucucyswaukig, self::sseuikaiuuscgcge, $mgkceomocowocqyo); } public function qeowcucuoaqyqwuw($umwgoasiowmqcumw, $siykeiywomwwuoiw = null) : array { $oqseeekuqisekiwy = $this->agausceiyceikeag(); foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq => $meqocwsecsywiiqs) { $umwgoasiowmqcumw[$iueymcwwscwqkiyq] = [self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::qiyqwyiiwykeccmo => $this->ieieyoeqmmeysauc(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, "\x3d", clone $siykeiywomwwuoiw)]; syusgosewwkoagoq: } egesuwkqkmaigaoe: return parent::qeowcucuoaqyqwuw($umwgoasiowmqcumw, $siykeiywomwwuoiw); } public function mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $ywqqikcsamcaycgm, $kooascmqqwmaskmi) : array { $occymigcemkqucuw = false; $ckeskcacgiywwoua = $this->kyisicoeikyckoge($miowmmgaiagcuyoo, self::sgoswgskyiiwkyuo); if ($ckeskcacgiywwoua <= 0) { goto qkyciyiwkmgkmquk; } $uamcoiueqaamsqma = sprintf(__("\x59\157\x75\x20\x61\x6c\162\x65\x61\x64\171\40\150\x61\x76\x65\x20\x61\40\x77\x69\x74\x68\x64\162\141\167\40\x77\151\x74\x68\40\45\x73\x20\163\164\x61\164\x75\x73\56", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis($this->agausceiyceikeag(self::sgoswgskyiiwkyuo))); goto sksgcusuyqcwqswe; qkyciyiwkmgkmquk: if ($ywqqikcsamcaycgm) { goto esagiiawomyacuiw; } $uamcoiueqaamsqma = __("\101\x67\x72\145\x65\155\x65\156\164\x20\x6e\x6f\164\40\146\x6f\165\x6e\144\x2e", PR__MDL__SALARY); goto maaisuqwkymeguys; esagiiawomyacuiw: $ogekyekymoyuywog = Income::symcgieuakksimmu(); $cseccogesusskess = $ogekyekymoyuywog->cwkywyqksyucoyia([$ogekyekymoyuywog::iockmgiyoygcswog => $miowmmgaiagcuyoo, $ogekyekymoyuywog::woagckamiequeoyu => [self::ciyoccqkiamemcmm => $ywqqikcsamcaycgm, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc], $ogekyekymoyuywog::eiiuyoyiygsickwe => $ogekyekymoyuywog::ugswgyqgycqguios]); $ygeuioagqoqumwuw = Setting::eiwcuqigayigimak(Setting::iqkskgussyuogioe, 0); $gkimsiseuqckqkso = $this->cseaisoguykosgem($cseccogesusskess); if ($gkimsiseuqckqkso > $ygeuioagqoqumwuw) { goto gqimwsyemoewagcy; } $uamcoiueqaamsqma = sprintf(__("\x59\157\165\x72\x20\162\145\161\165\x65\x73\164\x65\x64\40\141\155\157\x75\x6e\164\x20\50\x25\x73\x29\40\x69\x73\40\x6c\145\x73\163\40\x74\x68\x61\x6e\40\171\x6f\165\x72\40\141\147\162\145\145\x6d\x65\x6e\x74\40\x62\141\x6c\141\x6e\x63\145\40\164\x68\x72\145\x73\x68\x6f\154\x64\40\50\45\x73\x29\56", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis(ManipulateWoocommerce::mcgaskyiamgqmqgu($gkimsiseuqckqkso)), ManipulateHTML::ciuuiyckmsygceis(ManipulateWoocommerce::mcgaskyiamgqmqgu($ygeuioagqoqumwuw))); goto aoaqwygkaagiuuws; gqimwsyemoewagcy: if ($cseccogesusskess) { goto kyiwsiakwgiwouyi; } $uamcoiueqaamsqma = sprintf(__("\131\x6f\165\x20\x64\x6f\x6e\47\164\40\150\141\x76\145\x20\141\x6e\171\x20\x69\x6e\x63\x6f\155\145\40\165\156\x74\x69\154\x20\x6e\x6f\167\x2c\40\167\x69\x74\x68\x20\163\164\141\x74\165\x73\40\45\x73\56", PR__MDL__SALARY), ManipulateHTML::ciuuiyckmsygceis($ogekyekymoyuywog->cysukeiuucugyiqq($ogekyekymoyuywog::ugswgyqgycqguios))); goto awgmegueeqeyqamu; kyiwsiakwgiwouyi: foreach ($cseccogesusskess as $momcykaoccoymeig => $yuywqkssaukwuiwe) { $cseccogesusskess[$momcykaoccoymeig] = ManipulateArray::set($yuywqkssaukwuiwe, [$ogekyekymoyuywog::eiiuyoyiygsickwe => $ogekyekymoyuywog::aquouykoyqcwccay]); eweaaismksecwagy: } mcqucouuiuoagqwc: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([self::iockmgiyoygcswog => $miowmmgaiagcuyoo, self::ciywsqoeiymemsys => self::sgoswgskyiiwkyuo, self::owskgkyceomsskgm => $miowmmgaiagcuyoo, self::sseuikaiuuscgcge => $cseccogesusskess, self::owmueawayysqcsqo => $kooascmqqwmaskmi]); $euakemkgmcigqycw = ManipulateArray::get($sogksuscggsicmac, "\x6f\142\152\145\x63\164"); if ($euakemkgmcigqycw instanceof Withdraw) { goto oeamoqweiueaueay; } $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, self::iwyueouqaqegmcas, []); $uamcoiueqaamsqma = sprintf(__("\x43\x61\156\x20\x6e\157\164\x20\x61\144\144\x20\x61\x20\x6e\145\167\40\x77\151\x74\x68\144\162\141\x77\72\40\x25\163", PR__MDL__SALARY), implode("\74\142\162\57\76", $ueeagokqmgisgauy)); goto owgsameoayaogsma; oeamoqweiueaueay: try { User::symcgieuakksimmu()->oiagiswyysamcyag($miowmmgaiagcuyoo, $kooascmqqwmaskmi); $uamcoiueqaamsqma = __("\x59\x6f\165\x72\40\167\x69\164\150\144\x72\x61\x77\40\151\x73\x20\x73\x75\142\155\x69\164\164\145\x64\x20\163\165\x63\x63\x65\163\x73\x66\x75\154\x6c\171\x2e", PR__MDL__SALARY); $occymigcemkqucuw = true; } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = sprintf(__("\103\141\x6e\40\x6e\157\x74\x20\x73\141\x76\145\x20\x72\145\154\x61\x74\151\x6f\156\x20\x73\150\x69\160\72\40\x25\163", PR__MDL__SALARY), $wgaoewqkwgomoaai->sagusgigmkeysock()); } if ($occymigcemkqucuw) { goto icumkkykaoqycqqu; } try { $euakemkgmcigqycw->delete(); } catch (Exception $wgaoewqkwgomoaai) { } icumkkykaoqycqqu: owgsameoayaogsma: awgmegueeqeyqamu: aoaqwygkaagiuuws: maaisuqwkymeguys: sksgcusuyqcwqswe: return [self::ckcawaoawwioqecq => $occymigcemkqucuw, self::eoskkkieowogacws => $uamcoiueqaamsqma]; } }
