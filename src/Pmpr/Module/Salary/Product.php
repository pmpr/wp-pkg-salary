<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626988ef56022             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Income; use WC_Order_Item_Product; class Product extends Container { const ycieggkicmoegqyu = "\x77\160\x70"; const ycqmesciieccwesi = "\x73\145\163\x73\151\157\156\x5f" . self::ycieggkicmoegqyu; const ucuwycequmesyess = "\x70\162\157\x64\x75\143\x74\137\157\167\156\x65\x72\x5f\x6d\145\x74\x61"; const quwkmkogoywowmgs = "\x70\162\x6f\x64\x75\143\x74"; const mkoieeuuiaomckcy = "\x6f\x72\x64\x65\x72\x5f\155\145\164\141\x5f\160\x6f\163\x74\137" . self::ycieggkicmoegqyu; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x6f\157\143\157\x6d\x6d\145\162\x63\145\137\x63\x61\162\x74\x5f\x69\x74\x65\x6d\137\x72\x65\x6d\157\166\145\144", [$this, "\x6b\171\x73\x75\x67\151\x67\x6b\x71\155\x75\165\x6f\163\167\161"], 999)->qcsmikeggeemccuu("\167\157\x6f\x63\157\155\x6d\145\x72\143\x65\137\160\141\x79\155\145\156\164\x5f\x63\157\155\160\x6c\145\164\x65", [$this, "\x73\141\x65\x61\167\x61\x65\165\x6f\157\171\151\x75\x73\141\x6b"], 9999)->qcsmikeggeemccuu("\167\157\157\x63\157\x6d\x6d\145\x72\143\x65\x5f\x61\144\144\137\164\x6f\x5f\x63\x61\162\x74", [$this, "\x70\167\x77\141\165\x63\x61\x69\163\x65\143\143\x71\141\147\163"], 999, 2)->qcsmikeggeemccuu("\x77\157\157\143\x6f\155\x6d\145\x72\x63\145\x5f\141\146\x74\x65\162\x5f\x61\x64\144\137\164\157\x5f\143\141\x72\x74\137\142\x75\164\x74\157\156", [$this, "\147\x71\165\x63\x75\153\x61\x61\x6d\147\141\153\x73\x6b\x69\145"], 999); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\160\x72\157\144\165\x63\x74\137\x73\x68\157\x72\x74\x63\157\x64\x65\x5f\141\164\x74\x72\163"), [$this, "\x65\167\141\x77\141\x77\x65\163\x6f\x61\x6f\147\x67\x6d\163\x6b"]); parent::kgquecmsgcouyaya(); } public function saeawaeuooyiusak($qsmogugokoieokgw) { $oammesyieqmwuwyi = ManipulateWoocommerce::ceusksoaisoswmia($qsmogugokoieokgw); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof WC_Order_Item_Product) { goto qckouamqueqiykqi; } $product = $igqsaukqcqscimok->get_product(); $mkgcaseqyaayywqo = $igqsaukqcqscimok->get_quantity(''); if (!($product && $product->get_price('') > 0)) { goto kieyoaoawqacqamy; } $this->uwswyuymakqsccya($igqsaukqcqscimok->get_id(), $product, $mkgcaseqyaayywqo); kieyoaoawqacqamy: qckouamqueqiykqi: eciksmgaqikwegwq: } okagauksoqkoqygi: } public function iqoqmakqemwcgqcc($xssuewsokckmigqk) : array { $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $oeucsuyqysaciasy = $mssuumukiiaqmcka->qogaqkcsogcqiaic($xssuewsokckmigqk, Agreement::eyqgmoumkowegyse); if ($oeucsuyqysaciasy) { goto measoqewessauqma; } $kcugcsqiuqaomqom = $mssuumukiiaqmcka->qogaqkcsogcqiaic($xssuewsokckmigqk, Agreement::eqieykacgqwskmag); goto auaigccmwqwsqsku; measoqewessauqma: $kcugcsqiuqaomqom = ManipulateUser::mmgsuuoossqmukqg($oeucsuyqysaciasy, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]); auaigccmwqwsqsku: return $kcugcsqiuqaomqom; } public function ksicuayoqaiikoiq($product) : array { $ywqqikcsamcaycgm = []; if (!$product) { goto wiaesksmicgikqcm; } $eoioyuyammuoecgs = ManipulateWoocommerce::ykmakcaumkuuwaye($product); $eyscsimwcyaqakqg = ManipulatePost::weescwwgqgiyumyw($eoioyuyammuoecgs, self::cmckeoksigiaqykc, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]); $ywqqikcsamcaycgm = Agreement::symcgieuakksimmu()->cwkywyqksyucoyia([Agreement::kmqmeaywmyiqqkqw => [self::ciyoccqkiamemcmm => [$eoioyuyammuoecgs], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim], Agreement::guksqgkoswygwycw => [self::ciyoccqkiamemcmm => $eyscsimwcyaqakqg, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim], Agreement::eamockcoeqooicec => [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw]]); wiaesksmicgikqcm: return $ywqqikcsamcaycgm; } public function aeaogyseiocsykqi($mwuwcsieauaqecae, $mkucggyaiaukqoce, $gmmwqccskyikyqci) : int { $uuuuuceswsksoiye = ManipulateArray::get($gmmwqccskyikyqci, $mkucggyaiaukqoce, []); if (is_numeric($mwuwcsieauaqecae)) { goto mcucegiogmuyogki; } $mwuwcsieauaqecae = 0; goto gqaimiooakyykccy; mcucegiogmuyogki: $mwuwcsieauaqecae = (int) ($mwuwcsieauaqecae / 100); gqaimiooakyykccy: if (!($mwuwcsieauaqecae > 0 && $uuuuuceswsksoiye)) { goto agemeseegiuuowgo; } $mwuwcsieauaqecae = in_array($mwuwcsieauaqecae, $uuuuuceswsksoiye, true) ? 0 : $mwuwcsieauaqecae; agemeseegiuuowgo: return $mwuwcsieauaqecae; } public function uwswyuymakqsccya($cawesmkieccckaae, $product, $mkgcaseqyaayywqo) { $gyayqukiwaeusqci = []; $ywqqikcsamcaycgm = $this->ksicuayoqaiikoiq($product); foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { if (!($mwuwcsieauaqecae = ManipulateArray::get($xssuewsokckmigqk, Agreement::eamockcoeqooicec))) { goto ggwcauaeuagekeyo; } if (!($kcugcsqiuqaomqom = $this->iqoqmakqemwcgqcc($xssuewsokckmigqk))) { goto ggqwcqssoauckuic; } if (!($ekiuyucoiagmscgy = $this->kmuweyayaqoeqiyw()->uiiyaqiemcccwewi($mwuwcsieauaqecae))) { goto camawumockccayaq; } $kcugcsqiuqaomqom = call_user_func_array($ekiuyucoiagmscgy, [$xssuewsokckmigqk, $kcugcsqiuqaomqom]); camawumockccayaq: if (!($kcugcsqiuqaomqom && is_array($kcugcsqiuqaomqom))) { goto csyoimsqgwcmiwki; } foreach ($kcugcsqiuqaomqom as $mkucggyaiaukqoce) { $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); if (!($mwuwcsieauaqecae = $this->aeaogyseiocsykqi($mwuwcsieauaqecae, $saqgcoqwmimycgim, $gyayqukiwaeusqci))) { goto qesqgumuouyymcwa; } $ogekyekymoyuywog = Income::symcgieuakksimmu(); $eoioyuyammuoecgs = ManipulateWoocommerce::omwkqcuwceweymcc($product); if (!$ogekyekymoyuywog->qumqowkwyaceeqwu([self::awkcoioakcaougmq => $cawesmkieccckaae, self::oguseymmyyoyaako => $eoioyuyammuoecgs])) { goto qowcwmsiyscackaa; } $gyayqukiwaeusqci[$saqgcoqwmimycgim][] = $mwuwcsieauaqecae; goto aqigiwmamkowomiw; qowcwmsiyscackaa: $sogksuscggsicmac = $ogekyekymoyuywog->cegwwsqwouioquma($xssuewsokckmigqk, $saqgcoqwmimycgim, $cawesmkieccckaae, $product, $mkgcaseqyaayywqo); if (!ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq, false)) { goto usgcoawgqswoeiec; } $gyayqukiwaeusqci[$saqgcoqwmimycgim][] = $mwuwcsieauaqecae; usgcoawgqswoeiec: aqigiwmamkowomiw: qesqgumuouyymcwa: ggqeakyaggiuegek: } uuisaeysawuagysg: csyoimsqgwcmiwki: ggqwcqssoauckuic: ggwcauaeuagekeyo: gykuaukukosiocoy: } goswwiomuackymqi: } public function ewawawesoaoggmsk($wwgucssaecqekuek) { $migiiksoiymissge = ManipulateArray::get($wwgucssaecqekuek, self::sauwwsocmukoaayu); if (!$migiiksoiymissge) { goto waewaiuiogywqigu; } $post = ManipulatePost::mwikyscisascoeea(); $product = ManipulateArray::get($wwgucssaecqekuek, self::oguseymmyyoyaako); if (!($post && $product)) { goto mmkoqmccusoeaoyi; } $wwgucssaecqekuek[self::sauwwsocmukoaayu] = DecoratorQuery::yqymaqmqiqmmmsoo([self::ycieggkicmoegqyu => $post], $migiiksoiymissge); mmkoqmccusoeaoyi: waewaiuiogywqigu: return $wwgucssaecqekuek; } public function pwwaucaiseccqags($uusmaiomayssaecw, $product) { $post = ManipulateServer::ayueggmoqeeukqmq(self::ycieggkicmoegqyu, 0); if (!($post && $product)) { goto gyeayeuuyiemuwuq; } $uomewyckeuqoqocu = ManipulateWoocommerce::wugwewwmekuaamos(self::ycqmesciieccwesi); if (is_array($uomewyckeuqoqocu)) { goto yyamycyesguwueuw; } $uomewyckeuqoqocu = [$uusmaiomayssaecw => $post]; goto aymmymequcisekie; yyamycyesguwueuw: $uomewyckeuqoqocu[$uusmaiomayssaecw] = $post; aymmymequcisekie: ManipulateWoocommerce::giyscymwkesykqsg(self::ycqmesciieccwesi, $uomewyckeuqoqocu); gyeayeuuyiemuwuq: } public function kuswmimkgmyuymiu($product) { $miowmmgaiagcuyoo = ManipulatePost::igawqaomowicuayw(self::ucuwycequmesyess, $product, true); if ($miowmmgaiagcuyoo) { goto kyggwyywiycksgqq; } $miowmmgaiagcuyoo = ManipulatePost::mguqscccckuywsya($product, true); kyggwyywiycksgqq: return $miowmmgaiagcuyoo; } public function kysugigkqmuuoswq($uusmaiomayssaecw) { $uomewyckeuqoqocu = ManipulateWoocommerce::wugwewwmekuaamos(self::ycqmesciieccwesi); if (!(is_array($uomewyckeuqoqocu) && isset($uomewyckeuqoqocu[$uusmaiomayssaecw]))) { goto sugumgeqcwgekcqs; } ManipulateArray::unset($uomewyckeuqoqocu, $uusmaiomayssaecw); ManipulateWoocommerce::giyscymwkesykqsg(self::ycqmesciieccwesi, $uomewyckeuqoqocu); sugumgeqcwgekcqs: } public function gqucukaamgakskie() { if (!($post = ManipulateServer::get(self::ycieggkicmoegqyu, 0))) { goto imeaiksowuukikui; } MetaBox::cwiuiiakukcsaakw(self::ycieggkicmoegqyu, $post)->render(["\145\143\x68\157" => true]); imeaiksowuukikui: } public function fooqekauqwsguyqq($qsmogugokoieokgw) { try { $ewgwqamkygiqaawc = ManipulateWoocommerce::uakuwyoiooeqqiow(); if (!($ewgwqamkygiqaawc && $qsmogugokoieokgw)) { goto ssmgmiuqoeiuacsa; } $umwqusowiqmyseom = ManipulateWoocommerce::mmmcswscsiecscwg($qsmogugokoieokgw); $this->gaycywmuakuuswyu($umwqusowiqmyseom, $ewgwqamkygiqaawc); $uomewyckeuqoqocu = ManipulateWoocommerce::wugwewwmekuaamos(self::ycqmesciieccwesi); if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto cqkuuyouqoqyguus; } foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $post) { $asueykamkygekuqy = ManipulateArray::get($ewgwqamkygiqaawc, $uusmaiomayssaecw, []); if (!$asueykamkygekuqy) { goto weggeeowykuqooyg; } $product = ManipulateArray::get($asueykamkygekuqy, "\x70\162\157\144\x75\143\x74\x5f\151\x64", 0); $mkgcaseqyaayywqo = ManipulateArray::get($asueykamkygekuqy, "\161\165\141\156\164\x69\164\171", 1); $this->ykkwmsweeukkgcsc($umwqusowiqmyseom, $product, $post, $mkgcaseqyaayywqo); weggeeowykuqooyg: gaceikykesgywssm: } aqmiewawgseaqeqk: cqkuuyouqoqyguus: ssmgmiuqoeiuacsa: } catch (Exception $wgaoewqkwgomoaai) { } } public function gaycywmuakuuswyu($umwqusowiqmyseom, $oammesyieqmwuwyi) { if (!($umwqusowiqmyseom && is_array($oammesyieqmwuwyi))) { goto ueaiskyiqcquiika; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $product = ManipulateArray::get($igqsaukqcqscimok, "\160\162\x6f\x64\165\143\x74\137\151\144", 0); if (!($miowmmgaiagcuyoo = $this->kuswmimkgmyuymiu($product))) { goto koggssokukoukkay; } $mkgcaseqyaayywqo = ManipulateArray::get($igqsaukqcqscimok, "\x71\x75\141\156\164\151\x74\x79", 1); Income::symcgieuakksimmu()->qqowskscgmumsugo($miowmmgaiagcuyoo, $umwqusowiqmyseom, $product, $mkgcaseqyaayywqo); koggssokukoukkay: gwoacimkeyymqccq: } wiqigqgiegmacgsw: ueaiskyiqcquiika: } public function ykkwmsweeukkgcsc($umwqusowiqmyseom, $product, $post, $mkgcaseqyaayywqo) { $qscaoekmoooeuyqg = ManipulatePost::mguqscccckuywsya($post); $miowmmgaiagcuyoo = $this->kuswmimkgmyuymiu($product); if (!($miowmmgaiagcuyoo && $qscaoekmoooeuyqg && $miowmmgaiagcuyoo == $qscaoekmoooeuyqg)) { goto cqugssuesycomqwa; } $mwokgqqeeikkiece = Income::symcgieuakksimmu(); $kywiogykysqukkio = ManipulatePost::qgisekcaywsmigga($umwqusowiqmyseom->get_type(), self::mkoieeuuiaomckcy, $post); if ($kywiogykysqukkio) { goto ucecweoaoyeoyuue; } $sogksuscggsicmac = $mwokgqqeeikkiece->mcsiiagyqmaocaoe($miowmmgaiagcuyoo, $umwqusowiqmyseom, $product, $mkgcaseqyaayywqo); if (!ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq, false)) { goto eqemcocqsyasqycq; } ManipulatePost::giwmekimakcaawsq(self::mkoieeuuiaomckcy, $post, ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom), true); eqemcocqsyasqycq: ucecweoaoyeoyuue: cqugssuesycomqwa: } }
