<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63978c153af1f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Field\BSSelect; use Pmpr\Common\Foundation\Interfaces\Icon\IconPmprBankInterface; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Error; class Validator extends Container { const keiouaegcemwagqa = "\142\155\x69"; const comioyycgecawaqm = "\142\x73\151"; const swcmkuuasyyyumiu = "\142\153\151"; const yguuaqwyykgiimms = "\x62\x69\x6d"; const cemigosyuasmyiei = "\x62\160\x69"; const mskkwqcwkgmssqqg = "\x65\144\x62\x69"; const wgmmceiqgcgceoku = "\x73\x62\x32\x34"; const mkswmgamiuuuyosg = "\x73\142\141\x6e\153"; const iqsuaogkyuqcisiq = "\145\156\x62\x61\x6e\153"; const iwmcgsqaouqyckgg = "\164\x74\142\141\156\x6b"; const waiecqigymkwuagq = "\x6d\145\142\x61\156\153"; const okumewaywsyqkgom = "\x73\x69\156\141\142\141\x6e\153"; const ccciqwgmqgaioaec = "\142\141\156\x6b\55\x64\x65\x79"; const suyawocesuuayoke = "\160\157\163\x74\142\x61\x6e\153"; const cwisqcwqaqwewewc = "\x62\x61\x6e\x6b\x73\x65\x70\141\x68"; const guiyeekyugocksii = "\x61\156\163\141\x72\x62\141\x6e\153"; const wakewcwcocoeeqou = "\x62\x61\156\153\x6d\x65\154\154\141\x74"; const qkqckkmccsuywqaa = "\162\x65\146\141\x68\x2d\x62\141\156\x6b"; const ksakqsegasqgmmmi = "\x73\150\141\150\x72\55\x62\x61\x6e\153"; const aeigmscigwsqawwm = "\164\x65\x6a\x61\x72\x61\164\142\141\x6e\x6b"; const uqmwkiuiecqyouyc = "\x62\141\156\x6b\x2d\155\x61\163\153\x61\156"; const waiwweymagyamkgm = "\x70\x65\x72\x73\151\x61\x6e\55\142\141\156\153"; const uoaoowsimaigiumk = "\x6b\x61\x72\x61\146\x61\162\x69\156\x62\x61\x6e\153"; public function auawsikwmsucqccc($aokagokqyuysuksm) : BSSelect { return MetaBox::auouusgocuwkgaok($aokagokqyuysuksm, $this->kwagkemgawuoacwy(), $this->eoemoqciaweskqkk())->usuqmwksoeaayaig(__("\x42\x61\156\x6b\40\116\x61\x6d\145", PR__MDL__SALARY))->qigsyyqgewgskemg("\142\x61\156\x6b\x2d\156\x61\x6d\145"); } public function aoeooseeeeaysoiy() : array { return [self::keiouaegcemwagqa, self::comioyycgecawaqm, self::yguuaqwyykgiimms, self::swcmkuuasyyyumiu, self::cemigosyuasmyiei, self::mskkwqcwkgmssqqg, self::wgmmceiqgcgceoku, self::mkswmgamiuuuyosg, self::iqsuaogkyuqcisiq, self::iwmcgsqaouqyckgg, self::ccciqwgmqgaioaec, self::suyawocesuuayoke, self::okumewaywsyqkgom, self::cwisqcwqaqwewewc, self::guiyeekyugocksii, self::wakewcwcocoeeqou, self::ksakqsegasqgmmmi, self::aeigmscigwsqawwm, self::uqmwkiuiecqyouyc, self::waiwweymagyamkgm, self::uoaoowsimaigiumk]; } public function uqyqsuqogawkesee($qmomekeesaiaoegu) : bool { return in_array($qmomekeesaiaoegu, $this->aoeooseeeeaysoiy()); } public function mmqoiwqsoiaaiowk($csceswaimywmwswc) : bool { $mmqoiwqsoiaaiowk = false; $ameekioeuciogcqo = $csceswaimywmwswc; $iuwssqgmmuygogii = substr($ameekioeuciogcqo, 2); if (!(is_numeric($iuwssqgmmuygogii) && strlen($iuwssqgmmuygogii) == 24)) { goto magymcqykamwqigw; } $uyqcookuywseommq = [10 => "\101", "\102", "\x43", "\104", "\105", "\x46", "\x47", "\x48", "\x49", "\x4a", "\113", "\x4c", "\x4d", "\116", "\x4f", "\x50", "\x51", "\x52", "\123", "\x54", "\x55", "\x56", "\x57", "\130", "\131", "\132"]; $omqauwuwykgsysce = substr($ameekioeuciogcqo, 0, 2); $cwqmgckokyqmsice = array_map(function ($foskoegaseuwccwe) use($uyqcookuywseommq) { return array_search(strtoupper($foskoegaseuwccwe), $uyqcookuywseommq); }, str_split($omqauwuwykgsysce)); $quscceoaiwasmkcy = implode('', $cwqmgckokyqmsice); $mcsumwoaieuoaygm = substr($iuwssqgmmuygogii, 2) . $quscceoaiwasmkcy . substr($iuwssqgmmuygogii, 0, 2); $mmqoiwqsoiaaiowk = $this->qwcuuywiwuisgoew($mcsumwoaieuoaygm, 97) === 1; magymcqykamwqigw: return $mmqoiwqsoiaaiowk; } public function kwagkemgawuoacwy($qmomekeesaiaoegu = null) { $ykiyyumywksqcisg = [self::keiouaegcemwagqa => IconPmprBankInterface::soekiuqwwykmmemy, self::comioyycgecawaqm => IconPmprBankInterface::uimkuekqukkymgws, self::yguuaqwyykgiimms => IconPmprBankInterface::iigmiyqwcwecwyim, self::swcmkuuasyyyumiu => IconPmprBankInterface::cqyogkiiwyggquek, self::cemigosyuasmyiei => IconPmprBankInterface::caeawgaeswwququw, self::mskkwqcwkgmssqqg => IconPmprBankInterface::cqyeioyqomkeyooy, self::wgmmceiqgcgceoku => IconPmprBankInterface::iigmiyqwcwecwyim, self::mkswmgamiuuuyosg => IconPmprBankInterface::scyqgyqcscuwyuuo, self::iqsuaogkyuqcisiq => IconPmprBankInterface::qgyoasmoeqkiigia, self::waiecqigymkwuagq => IconPmprBankInterface::aiemgawgeciemykq, self::iwmcgsqaouqyckgg => IconPmprBankInterface::syskoiukamwuceke, self::ccciqwgmqgaioaec => IconPmprBankInterface::sqikgmckuayukceu, self::suyawocesuuayoke => IconPmprBankInterface::meokuyekimiuyayy, self::okumewaywsyqkgom => IconPmprBankInterface::cgyiyawewcasoyww, self::cwisqcwqaqwewewc => IconPmprBankInterface::aiemgawgeciemykq, self::guiyeekyugocksii => IconPmprBankInterface::wqyiuaaguqmyoyog, self::wakewcwcocoeeqou => IconPmprBankInterface::gioyoyuoiymsgkmi, self::ksakqsegasqgmmmi => IconPmprBankInterface::eckcegquumegewgg, self::aeigmscigwsqawwm => IconPmprBankInterface::saagakkuywusouyk, self::uqmwkiuiecqyouyc => IconPmprBankInterface::ysuosqagcqeceeeu, self::waiwweymagyamkgm => IconPmprBankInterface::smisisusqycayemo, self::uoaoowsimaigiumk => IconPmprBankInterface::soaoywwyqccyaeka]; return ManipulateArray::get($ykiyyumywksqcisg, $qmomekeesaiaoegu, $ykiyyumywksqcisg); } public function eoemoqciaweskqkk($qmomekeesaiaoegu = null) { $iwkyyocymeukcceu = [self::keiouaegcemwagqa => __("\x42\x61\x6e\153\40\115\x65\x6c\x6c\x69\x20\111\x72\x61\x6e", PR__MDL__SALARY), self::comioyycgecawaqm => __("\102\141\156\153\40\x53\x61\x64\x65\x72\x61\164\x20\x49\x72\141\x6e", PR__MDL__SALARY), self::yguuaqwyykgiimms => __("\x42\141\x6e\x6b\40\157\x66\x20\x49\x6e\144\165\163\x74\x72\171\40\141\x6e\x64\x20\115\x69\x6e\x65", PR__MDL__SALARY), self::swcmkuuasyyyumiu => __("\102\x61\x6e\x6b\40\x4b\x65\163\x68\x61\166\x61\162\x7a\151\40\x49\x72\x61\x6e", PR__MDL__SALARY), self::cemigosyuasmyiei => __("\102\141\x6e\x6b\40\x50\x61\163\x61\x72\147\141\x64", PR__MDL__SALARY), self::mskkwqcwkgmssqqg => __("\x45\x78\x70\x6f\x72\164\40\x44\145\x76\x65\154\x6f\160\155\x65\156\x74\40\102\x61\156\153\x20\x6f\x66\x20\111\x72\141\x6e", PR__MDL__SALARY), self::wgmmceiqgcgceoku => __("\x53\141\x6d\141\156\x20\102\141\156\x6b", PR__MDL__SALARY), self::mkswmgamiuuuyosg => __("\123\x61\x72\x6d\141\171\x65\x20\x42\x61\156\153", PR__MDL__SALARY), self::iqsuaogkyuqcisiq => __("\x45\116\40\102\x61\156\153", PR__MDL__SALARY), self::waiecqigymkwuagq => __("\x4d\x65\150\162\x65\40\x45\147\x68\164\x65\163\x61\x64\40\x28\x53\x65\160\x61\150\x29", PR__MDL__SALARY), self::iwmcgsqaouqyckgg => __("\124\x54\x20\102\141\156\153", PR__MDL__SALARY), self::ccciqwgmqgaioaec => __("\104\145\x79\40\102\141\156\153", PR__MDL__SALARY), self::suyawocesuuayoke => __("\x50\157\163\x74\40\102\x61\156\153\40\157\x66\40\111\x72\141\x6e", PR__MDL__SALARY), self::okumewaywsyqkgom => __("\x53\151\156\x61\x20\x42\141\156\x6b", PR__MDL__SALARY), self::cwisqcwqaqwewewc => __("\x42\x61\156\153\x20\123\145\x70\x61\x68", PR__MDL__SALARY), self::guiyeekyugocksii => __("\x41\x6e\163\141\x72\40\102\141\156\x6b", PR__MDL__SALARY), self::wakewcwcocoeeqou => __("\102\x61\156\153\40\x4d\145\154\154\x61\x74", PR__MDL__SALARY), self::ksakqsegasqgmmmi => __("\102\x61\156\x6b\x20\123\x68\141\150\x72", PR__MDL__SALARY), self::qkqckkmccsuywqaa => __("\122\x65\146\141\150\40\102\x61\156\153", PR__MDL__SALARY), self::aeigmscigwsqawwm => __("\103\157\x6d\x6d\x65\x72\143\145\40\102\x61\156\153", PR__MDL__SALARY), self::uqmwkiuiecqyouyc => __("\x48\x6f\165\163\151\156\147\40\102\x61\156\x6b", PR__MDL__SALARY), self::waiwweymagyamkgm => __("\120\x65\162\x73\x69\x61\156\40\x42\x61\x6e\x6b", PR__MDL__SALARY), self::uoaoowsimaigiumk => __("\x45\156\164\162\145\x70\162\145\156\145\165\162\x73\150\151\x70\x20\x42\x61\156\x6b", PR__MDL__SALARY)]; return ManipulateArray::get($iwkyyocymeukcceu, $qmomekeesaiaoegu, $iwkyyocymeukcceu); } private function aygskauusuymmkgq($eqgoocgaqwqcimie) : bool { return false; } public function cmkgoqaaysaasiom() : array { return ["\66\x30\63\67\x39\x39" => self::keiouaegcemwagqa, "\x36\x32\x37\x39\66\61" => self::yguuaqwyykgiimms, "\x36\60\63\x37\x37\x30" => self::swcmkuuasyyyumiu, "\66\60\71\62\61\x37" => self::swcmkuuasyyyumiu, "\x36\x30\63\67\x36\71" => self::comioyycgecawaqm, "\65\60\x32\x32\x32\71" => self::cemigosyuasmyiei, "\x36\63\x39\63\64\67" => self::cemigosyuasmyiei, "\66\x32\x37\66\x34\x38" => self::mskkwqcwkgmssqqg, "\x32\60\67\61\x37\67" => self::mskkwqcwkgmssqqg, "\x36\x32\x31\71\x38\66" => self::wgmmceiqgcgceoku, "\66\x33\x39\x36\x30\x37" => self::mkswmgamiuuuyosg, "\x35\60\x32\x39\x30\70" => self::iwmcgsqaouqyckgg, "\x36\62\67\64\x31\62" => self::iqsuaogkyuqcisiq, "\66\x32\x37\67\66\60" => self::suyawocesuuayoke, "\66\63\71\x33\64\x36" => self::okumewaywsyqkgom, "\65\60\x32\x39\63\70" => self::ccciqwgmqgaioaec, "\x36\63\x39\x33\x37\x30" => self::cwisqcwqaqwewewc, "\65\x38\x39\x32\x31\60" => self::cwisqcwqaqwewewc, "\66\62\x37\x33\x38\x31" => self::guiyeekyugocksii, "\65\x30\x32\70\60\66" => self::ksakqsegasqgmmmi, "\65\x30\64\67\60\x36" => self::ksakqsegasqgmmmi, "\x36\x31\60\64\x33\x33" => self::wakewcwcocoeeqou, "\x39\71\61\x39\x37\65" => self::wakewcwcocoeeqou, "\x35\x38\x39\64\x36\63" => self::qkqckkmccsuywqaa, "\66\x32\70\60\62\63" => self::uqmwkiuiecqyouyc, "\66\x32\67\x33\x35\x33" => self::aeigmscigwsqawwm, "\66\62\62\61\60\x36" => self::waiwweymagyamkgm, "\x36\x33\71\61\71\64" => self::waiwweymagyamkgm, "\66\62\x37\64\64\70" => self::waiwweymagyamkgm, "\66\62\x37\64\70\x38" => self::uoaoowsimaigiumk, "\x35\60\x32\71\61\x30" => self::uoaoowsimaigiumk]; } public function cyuweacmssmikssi() : array { return ["\60\x31\x31" => self::yguuaqwyykgiimms, "\x30\61\62" => self::wakewcwcocoeeqou, "\x30\x31\x33" => self::qkqckkmccsuywqaa, "\x30\61\x34" => self::uqmwkiuiecqyouyc, "\x30\61\x35" => self::cwisqcwqaqwewewc, "\60\x31\66" => self::swcmkuuasyyyumiu, "\x30\x31\67" => self::keiouaegcemwagqa, "\x30\61\70" => self::aeigmscigwsqawwm, "\x30\61\71" => self::comioyycgecawaqm, "\x30\62\60" => self::mskkwqcwkgmssqqg, "\60\62\61" => self::suyawocesuuayoke, "\x30\65\x37" => self::cemigosyuasmyiei, "\60\65\x33" => self::uoaoowsimaigiumk, "\x30\x35\64" => self::waiwweymagyamkgm, "\60\x35\65" => self::iqsuaogkyuqcisiq, "\x30\65\x36" => self::wgmmceiqgcgceoku, "\x30\x35\70" => self::mkswmgamiuuuyosg, "\x30\66\x31" => self::ksakqsegasqgmmmi, "\60\x36\63" => self::guiyeekyugocksii, "\60\x36\x36" => self::ccciqwgmqgaioaec]; } public function gcquickqgyqooyyu($eqgoocgaqwqcimie, $sqeykgyoooqysmca = self::skyceaacaaaamiii) { $qmomekeesaiaoegu = null; $eqgoocgaqwqcimie = str_replace("\40", '', $eqgoocgaqwqcimie); switch ($sqeykgyoooqysmca) { case self::wyqmcowecikgawuu: $yuwymayicwwqiske = substr($eqgoocgaqwqcimie, 2, 3); $qmomekeesaiaoegu = ManipulateArray::get($this->cyuweacmssmikssi(), $yuwymayicwwqiske); goto ukogwqiuuuakkawy; case self::skyceaacaaaamiii: $yuwymayicwwqiske = substr($eqgoocgaqwqcimie, 0, 6); $qmomekeesaiaoegu = ManipulateArray::get($this->cmkgoqaaysaasiom(), $yuwymayicwwqiske); goto ukogwqiuuuakkawy; } gicmaqmuscawegie: ukogwqiuuuakkawy: return $qmomekeesaiaoegu; } public function kuuugksiksqcaaaa($ywmkwiwkosakssii = []) { $sogksuscggsicmac = false; $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::squoamkioomemiyi, self::skyceaacaaaamiii); $eqgoocgaqwqcimie = str_replace("\x20", '', ManipulateArray::get($ywmkwiwkosakssii, self::ciyoccqkiamemcmm, 0)); switch ($sqeykgyoooqysmca) { case self::skyceaacaaaamiii: $qmomekeesaiaoegu = ManipulateArray::get($ywmkwiwkosakssii, self::oogeqgcgkamuoaoe, ''); if (!$qmomekeesaiaoegu) { goto gygqgauaceiuawkq; } $sogksuscggsicmac = $this->cgwekyekisusssio($qmomekeesaiaoegu, $eqgoocgaqwqcimie); gygqgauaceiuawkq: goto oymyqcoekqyuiguq; case self::wyqmcowecikgawuu: $sogksuscggsicmac = $this->mmqoiwqsoiaaiowk($eqgoocgaqwqcimie); goto oymyqcoekqyuiguq; } ayamomygygmgwgkg: oymyqcoekqyuiguq: if ($sogksuscggsicmac) { goto ucksaiwquekagyqe; } $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\105\156\164\x65\162\145\x64\x20\45\163\x20\x69\x73\40\x6e\x6f\x74\40\x76\141\x6c\x69\144", PR__MDL__SALARY), $this->yuuwwswmwmgmcyem($sqeykgyoooqysmca))); ucksaiwquekagyqe: return $sogksuscggsicmac; } public function yuuwwswmwmgmcyem($sqeykgyoooqysmca = false) { $qgeeqyucwycemwmo = [self::skyceaacaaaamiii => __("\x44\x65\x62\x69\x74\x20\x43\141\x72\144", PR__MDL__SALARY), self::wyqmcowecikgawuu => __("\x49\102\101\x4e", PR__MDL__SALARY)]; return ManipulateArray::get($qgeeqyucwycemwmo, $sqeykgyoooqysmca, $qgeeqyucwycemwmo); } private function qwcuuywiwuisgoew($wucawosmqgsocgcw, $mecqgaskioioycuw) : int { if (extension_loaded("\x62\x63\155\141\x74\150")) { goto jkgouewqysmscmqs; } $cqwwaumaseiikayu = 5; $ugkymqicywakcemw = ''; asqqqqakiagymemk: $mmeioagwmyscwumo = (int) $ugkymqicywakcemw . substr($wucawosmqgsocgcw, 0, $cqwwaumaseiikayu); $wucawosmqgsocgcw = substr($wucawosmqgsocgcw, $cqwwaumaseiikayu); $ugkymqicywakcemw = $mmeioagwmyscwumo % $mecqgaskioioycuw; if (strlen($wucawosmqgsocgcw)) { goto asqqqqakiagymemk; } iyeswoaqkaeggiiy: goto sgiuwkisugmewmcs; jkgouewqysmscmqs: $ugkymqicywakcemw = bcmod($wucawosmqgsocgcw, $mecqgaskioioycuw); sgiuwkisugmewmcs: return (int) $ugkymqicywakcemw; } public function cgwekyekisusssio($qmomekeesaiaoegu, $eusockqasqqmoess) : bool { $kuuugksiksqcaaaa = false; $ykiwomimkkuiigoq = strlen($eusockqasqqmoess); if (!($ykiwomimkkuiigoq >= 16 && substr($eusockqasqqmoess, 1, 10) != 0 && substr($eusockqasqqmoess, 10, 6) != 0)) { goto yeemsgmumygmumqw; } $ciagusimogciiumg = $this->cmkgoqaaysaasiom(); $qgiocsakoiaswkou = ManipulateArray::get($ciagusimogciiumg, substr($eusockqasqqmoess, 0, 6), 0); if (!($qgiocsakoiaswkou === $qmomekeesaiaoegu)) { goto yimeskeioamqmuwg; } $piuesceqiguuskme = 0; $wgywewwaswowuooi = null; $icuyogeyaokmwusi = null; $momcykaoccoymeig = 0; eacysqsegwcqawsa: if (!($momcykaoccoymeig < 16)) { goto kceeuicccqscwgsu; } $wgywewwaswowuooi = $momcykaoccoymeig % 2 === 0 ? 2 : 1; $icuyogeyaokmwusi = (int) substr($eusockqasqqmoess, $momcykaoccoymeig, 1) * $wgywewwaswowuooi; $piuesceqiguuskme += $icuyogeyaokmwusi > 9 ? $icuyogeyaokmwusi - 9 : $icuyogeyaokmwusi; iquecygaakmiomeg: $momcykaoccoymeig++; goto eacysqsegwcqawsa; kceeuicccqscwgsu: $kuuugksiksqcaaaa = $piuesceqiguuskme % 10 === 0; yimeskeioamqmuwg: yeemsgmumygmumqw: return $kuuugksiksqcaaaa; } }
