<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             623bbc715cce1             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Salary\Model\Agreement; use Pmpr\Package\Salary\Model\Income; use WC_Order_Item_Product; class Product extends Container { const ycieggkicmoegqyu = "\x77\160\160"; const ycqmesciieccwesi = "\163\145\163\x73\x69\x6f\156\x5f" . self::ycieggkicmoegqyu; const ucuwycequmesyess = "\x70\x72\x6f\144\165\143\164\137\x6f\167\x6e\145\x72\137\x6d\145\x74\141"; const quwkmkogoywowmgs = "\x70\x72\x6f\x64\x75\143\x74"; const mkoieeuuiaomckcy = "\157\162\144\145\x72\x5f\x6d\x65\x74\x61\x5f\x70\157\163\164\137" . self::ycieggkicmoegqyu; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x6f\157\143\157\155\155\145\162\x63\x65\137\x63\141\162\x74\137\x69\164\145\155\x5f\x72\145\155\x6f\166\145\x64", [$this, "\153\x79\163\165\x67\151\x67\153\x71\155\x75\165\x6f\163\x77\x71"], 999)->qcsmikeggeemccuu("\x77\x6f\x6f\143\157\155\155\x65\162\143\x65\x5f\160\141\x79\x6d\x65\156\164\137\143\x6f\155\160\x6c\145\x74\x65", [$this, "\x73\x61\145\141\167\141\145\x75\x6f\157\171\x69\165\163\x61\x6b"], 9999)->qcsmikeggeemccuu("\x77\157\x6f\x63\x6f\155\155\145\162\x63\x65\x5f\141\x64\x64\x5f\164\157\x5f\143\x61\162\x74", [$this, "\160\x77\167\141\x75\x63\141\x69\163\x65\143\x63\161\141\147\x73"], 999, 2)->qcsmikeggeemccuu("\167\157\157\x63\157\155\155\145\162\143\145\137\x61\146\x74\x65\162\x5f\x61\x64\x64\x5f\164\x6f\x5f\143\x61\162\164\x5f\x62\x75\164\164\x6f\x6e", [$this, "\147\x71\x75\143\x75\x6b\x61\x61\x6d\x67\141\x6b\x73\x6b\x69\145"], 999); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\160\x72\x6f\x64\165\143\x74\x5f\163\150\157\162\x74\x63\157\144\x65\137\141\164\x74\x72\163"), [$this, "\145\167\141\x77\141\167\145\x73\157\141\x6f\x67\147\155\163\153"]); parent::kgquecmsgcouyaya(); } public function saeawaeuooyiusak($qsmogugokoieokgw) { $oammesyieqmwuwyi = ManipulateWoocommerce::ceusksoaisoswmia($qsmogugokoieokgw); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof WC_Order_Item_Product) { goto yimeskeioamqmuwg; } $product = $igqsaukqcqscimok->get_product(); $mkgcaseqyaayywqo = $igqsaukqcqscimok->get_quantity(''); if (!($product && $product->get_price('') > 0)) { goto eacysqsegwcqawsa; } $this->uwswyuymakqsccya($igqsaukqcqscimok->get_id(), $product, $mkgcaseqyaayywqo); eacysqsegwcqawsa: yimeskeioamqmuwg: iquecygaakmiomeg: } kceeuicccqscwgsu: } public function iqoqmakqemwcgqcc($xssuewsokckmigqk) : array { $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $oeucsuyqysaciasy = $mssuumukiiaqmcka->qogaqkcsogcqiaic($xssuewsokckmigqk, Agreement::eyqgmoumkowegyse); if ($oeucsuyqysaciasy) { goto yeemsgmumygmumqw; } $kcugcsqiuqaomqom = $mssuumukiiaqmcka->qogaqkcsogcqiaic($xssuewsokckmigqk, Agreement::eqieykacgqwskmag); goto wkaoyycsoeoyqcae; yeemsgmumygmumqw: $kcugcsqiuqaomqom = ManipulateUser::mmgsuuoossqmukqg($oeucsuyqysaciasy, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]); wkaoyycsoeoyqcae: return $kcugcsqiuqaomqom; } public function ksicuayoqaiikoiq($product) : array { $ywqqikcsamcaycgm = []; if (!$product) { goto cwugokqsmiomgmqg; } $eoioyuyammuoecgs = ManipulateWoocommerce::ykmakcaumkuuwaye($product); $eyscsimwcyaqakqg = ManipulatePost::weescwwgqgiyumyw($eoioyuyammuoecgs, self::cmckeoksigiaqykc, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]); $ywqqikcsamcaycgm = Agreement::symcgieuakksimmu()->cwkywyqksyucoyia([Agreement::kmqmeaywmyiqqkqw => [self::ciyoccqkiamemcmm => [$eoioyuyammuoecgs], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim], Agreement::guksqgkoswygwycw => [self::ciyoccqkiamemcmm => $eyscsimwcyaqakqg, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim], Agreement::eamockcoeqooicec => [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw]]); cwugokqsmiomgmqg: return $ywqqikcsamcaycgm; } public function aeaogyseiocsykqi($mwuwcsieauaqecae, $mkucggyaiaukqoce, $gmmwqccskyikyqci) : int { $uuuuuceswsksoiye = ManipulateArray::get($gmmwqccskyikyqci, $mkucggyaiaukqoce, []); if (is_numeric($mwuwcsieauaqecae)) { goto uuuceqkseqkqawko; } $mwuwcsieauaqecae = 0; goto ekoegocuqoycoeyq; uuuceqkseqkqawko: $mwuwcsieauaqecae = intval($mwuwcsieauaqecae / 100); ekoegocuqoycoeyq: if (!($mwuwcsieauaqecae > 0 && $uuuuuceswsksoiye)) { goto yksamaucqkqsawkk; } $mwuwcsieauaqecae = in_array($mwuwcsieauaqecae, $uuuuuceswsksoiye) ? 0 : $mwuwcsieauaqecae; yksamaucqkqsawkk: return $mwuwcsieauaqecae; } public function uwswyuymakqsccya($cawesmkieccckaae, $product, $mkgcaseqyaayywqo) { $gyayqukiwaeusqci = []; $ywqqikcsamcaycgm = $this->ksicuayoqaiikoiq($product); foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { if (!($mwuwcsieauaqecae = ManipulateArray::get($xssuewsokckmigqk, Agreement::eamockcoeqooicec))) { goto weouocwmwicayyiy; } if (!($kcugcsqiuqaomqom = $this->iqoqmakqemwcgqcc($xssuewsokckmigqk))) { goto iuysqgmmgqiywssm; } if (!($ekiuyucoiagmscgy = $this->kmuweyayaqoeqiyw()->uiiyaqiemcccwewi($mwuwcsieauaqecae))) { goto mocaoayiouggauiy; } $kcugcsqiuqaomqom = call_user_func_array($ekiuyucoiagmscgy, [$xssuewsokckmigqk, $kcugcsqiuqaomqom]); mocaoayiouggauiy: if (!($kcugcsqiuqaomqom && is_array($kcugcsqiuqaomqom))) { goto ugiqiewymimqecsu; } foreach ($kcugcsqiuqaomqom as $mkucggyaiaukqoce) { $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); if (!($mwuwcsieauaqecae = $this->aeaogyseiocsykqi($mwuwcsieauaqecae, $saqgcoqwmimycgim, $gyayqukiwaeusqci))) { goto aeaciamekuqyieys; } $ogekyekymoyuywog = Income::symcgieuakksimmu(); $eoioyuyammuoecgs = ManipulateWoocommerce::omwkqcuwceweymcc($product); if (!$ogekyekymoyuywog->qumqowkwyaceeqwu([Income::awkcoioakcaougmq => $cawesmkieccckaae, Income::oguseymmyyoyaako => $eoioyuyammuoecgs])) { goto becceuuwokgoaewy; } $gyayqukiwaeusqci[$saqgcoqwmimycgim][] = $mwuwcsieauaqecae; goto wyugqoowakyicyic; becceuuwokgoaewy: $sogksuscggsicmac = $ogekyekymoyuywog->cegwwsqwouioquma($xssuewsokckmigqk, $saqgcoqwmimycgim, $cawesmkieccckaae, $product, $mkgcaseqyaayywqo); if (!ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq, false)) { goto qgkiguggkyiycwow; } $gyayqukiwaeusqci[$saqgcoqwmimycgim][] = $mwuwcsieauaqecae; qgkiguggkyiycwow: wyugqoowakyicyic: aeaciamekuqyieys: wwcwmkowgooocaem: } ygskksomysgaokek: ugiqiewymimqecsu: iuysqgmmgqiywssm: weouocwmwicayyiy: kskqquqsegiiogek: } akeoaicoieaiekcw: } public function ewawawesoaoggmsk($wwgucssaecqekuek) { $migiiksoiymissge = ManipulateArray::get($wwgucssaecqekuek, self::sauwwsocmukoaayu); if (!$migiiksoiymissge) { goto gkkwmqoacciwomqs; } $post = ManipulatePost::mwikyscisascoeea(); $product = ManipulateArray::get($wwgucssaecqekuek, self::oguseymmyyoyaako); if (!($post && $product)) { goto ggyoywwggggekycs; } $wwgucssaecqekuek[self::sauwwsocmukoaayu] = DecoratorQuery::yqymaqmqiqmmmsoo([self::ycieggkicmoegqyu => $post], $migiiksoiymissge); ggyoywwggggekycs: gkkwmqoacciwomqs: return $wwgucssaecqekuek; } public function pwwaucaiseccqags($uusmaiomayssaecw, $product) { $post = ManipulateServer::ayueggmoqeeukqmq(self::ycieggkicmoegqyu, 0); if (!($post && $product)) { goto ocmagamuyawyiyka; } $uomewyckeuqoqocu = ManipulateWoocommerce::wugwewwmekuaamos(self::ycqmesciieccwesi); if (is_array($uomewyckeuqoqocu)) { goto kucqcgeesiccuuia; } $uomewyckeuqoqocu = [$uusmaiomayssaecw => $post]; goto oycuaqewsskgkqci; kucqcgeesiccuuia: $uomewyckeuqoqocu[$uusmaiomayssaecw] = $post; oycuaqewsskgkqci: ManipulateWoocommerce::giyscymwkesykqsg(self::ycqmesciieccwesi, $uomewyckeuqoqocu); ocmagamuyawyiyka: } public function kuswmimkgmyuymiu($product) { $miowmmgaiagcuyoo = ManipulatePost::igawqaomowicuayw(self::ucuwycequmesyess, $product, true); if ($miowmmgaiagcuyoo) { goto amqgiisymksuuuss; } $miowmmgaiagcuyoo = ManipulatePost::mguqscccckuywsya($product, true); amqgiisymksuuuss: return $miowmmgaiagcuyoo; } public function kysugigkqmuuoswq($uusmaiomayssaecw) { $uomewyckeuqoqocu = ManipulateWoocommerce::wugwewwmekuaamos(self::ycqmesciieccwesi); if (!(is_array($uomewyckeuqoqocu) && isset($uomewyckeuqoqocu[$uusmaiomayssaecw]))) { goto iwgmywqocewwgoeo; } ManipulateArray::unset($uomewyckeuqoqocu, $uusmaiomayssaecw); ManipulateWoocommerce::giyscymwkesykqsg(self::ycqmesciieccwesi, $uomewyckeuqoqocu); iwgmywqocewwgoeo: } public function gqucukaamgakskie() { if (!($post = ManipulateServer::get(self::ycieggkicmoegqyu, 0))) { goto syoeqaqkseguwmgy; } MetaBox::cwiuiiakukcsaakw(self::ycieggkicmoegqyu, $post)->render(["\145\x63\x68\157" => true]); syoeqaqkseguwmgy: } public function fooqekauqwsguyqq($qsmogugokoieokgw) { try { $ewgwqamkygiqaawc = ManipulateWoocommerce::uakuwyoiooeqqiow(); if (!($ewgwqamkygiqaawc && $qsmogugokoieokgw)) { goto wowmysuygugawmmu; } $umwqusowiqmyseom = ManipulateWoocommerce::mmmcswscsiecscwg($qsmogugokoieokgw); $this->gaycywmuakuuswyu($umwqusowiqmyseom, $ewgwqamkygiqaawc); $uomewyckeuqoqocu = ManipulateWoocommerce::wugwewwmekuaamos(self::ycqmesciieccwesi); if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto uugwmywmaqomeksa; } foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $post) { $asueykamkygekuqy = ManipulateArray::get($ewgwqamkygiqaawc, $uusmaiomayssaecw, []); if (!$asueykamkygekuqy) { goto ucasigqmoiwaimkk; } $product = ManipulateArray::get($asueykamkygekuqy, "\x70\162\157\144\x75\143\x74\x5f\x69\x64", 0); $mkgcaseqyaayywqo = ManipulateArray::get($asueykamkygekuqy, "\161\165\141\x6e\164\x69\164\171", 1); $this->ykkwmsweeukkgcsc($umwqusowiqmyseom, $product, $post, $mkgcaseqyaayywqo); ucasigqmoiwaimkk: gwkawguwsamuomuo: } sgiouaqukyycswqm: uugwmywmaqomeksa: wowmysuygugawmmu: } catch (Exception $wgaoewqkwgomoaai) { } } public function gaycywmuakuuswyu($umwqusowiqmyseom, $oammesyieqmwuwyi) { if (!($umwqusowiqmyseom && is_array($oammesyieqmwuwyi))) { goto gsiaskgsukseumig; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $product = ManipulateArray::get($igqsaukqcqscimok, "\x70\x72\157\144\x75\x63\164\x5f\x69\x64", 0); if (!($miowmmgaiagcuyoo = $this->kuswmimkgmyuymiu($product))) { goto xogaycsaesgqeqig; } $mkgcaseqyaayywqo = ManipulateArray::get($igqsaukqcqscimok, "\161\x75\x61\x6e\164\151\x74\x79", 1); Income::symcgieuakksimmu()->qqowskscgmumsugo($miowmmgaiagcuyoo, $umwqusowiqmyseom, $product, $mkgcaseqyaayywqo); xogaycsaesgqeqig: iquugwoswgkoiieg: } mmmqqoemusicwgqg: gsiaskgsukseumig: } public function ykkwmsweeukkgcsc($umwqusowiqmyseom, $product, $post, $mkgcaseqyaayywqo) { $qscaoekmoooeuyqg = ManipulatePost::mguqscccckuywsya($post); $miowmmgaiagcuyoo = $this->kuswmimkgmyuymiu($product); if (!($miowmmgaiagcuyoo && $qscaoekmoooeuyqg && $miowmmgaiagcuyoo == $qscaoekmoooeuyqg)) { goto imwiyqcekcykscui; } $mwokgqqeeikkiece = Income::symcgieuakksimmu(); $kywiogykysqukkio = ManipulatePost::qgisekcaywsmigga($umwqusowiqmyseom->get_type(), self::mkoieeuuiaomckcy, $post); if ($kywiogykysqukkio) { goto woqkgwmkmqsuceuy; } $sogksuscggsicmac = $mwokgqqeeikkiece->mcsiiagyqmaocaoe($miowmmgaiagcuyoo, $umwqusowiqmyseom, $product, $mkgcaseqyaayywqo); if (!ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq, false)) { goto syiyemqigyugagks; } ManipulatePost::giwmekimakcaawsq(self::mkoieeuuiaomckcy, $post, ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom), true); syiyemqigyugagks: woqkgwmkmqsuceuy: imwiyqcekcykscui: } }
