<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eed0d969b0a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Salary\Model\Agreement; use Pmpr\Package\Salary\Model\Income; use WC_Order_Item_Product; class Product extends Container { const ycieggkicmoegqyu = "\x77\160\160"; const ycqmesciieccwesi = "\x73\x65\163\163\x69\157\x6e\137" . self::ycieggkicmoegqyu; const ucuwycequmesyess = "\160\x72\x6f\144\165\x63\164\x5f\157\x77\x6e\145\162\137\x6d\145\164\141"; const quwkmkogoywowmgs = "\x70\x72\x6f\144\x75\x63\x74"; const mkoieeuuiaomckcy = "\157\x72\x64\x65\162\137\x6d\145\x74\141\137\x70\x6f\163\x74\x5f" . self::ycieggkicmoegqyu; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\157\x6f\x63\x6f\x6d\155\x65\162\143\145\137\143\x61\162\164\137\151\164\x65\155\x5f\x72\x65\155\157\166\x65\144", [$this, "\x6b\x79\x73\165\147\x69\x67\153\161\155\x75\x75\x6f\x73\x77\161"], 999)->qcsmikeggeemccuu("\x77\x6f\157\143\157\x6d\x6d\145\162\x63\145\137\160\x61\171\x6d\145\156\x74\x5f\143\x6f\155\160\154\x65\164\145", [$this, "\163\x61\145\141\x77\x61\x65\165\157\157\171\x69\165\163\141\153"], 9999)->qcsmikeggeemccuu("\x77\x6f\x6f\x63\x6f\x6d\x6d\145\x72\143\x65\x5f\141\x64\x64\137\164\157\137\143\x61\162\x74", [$this, "\x70\167\167\x61\x75\143\141\151\163\x65\143\x63\x71\x61\147\163"], 999, 2)->qcsmikeggeemccuu("\x77\157\157\x63\157\x6d\x6d\145\x72\x63\145\x5f\x61\146\x74\145\162\x5f\141\144\x64\x5f\x74\157\137\x63\141\162\x74\137\x62\165\x74\164\x6f\156", [$this, "\x67\x71\x75\143\165\x6b\x61\x61\155\x67\141\x6b\x73\153\x69\145"], 999); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\160\x72\157\x64\x75\x63\164\137\x73\x68\x6f\162\164\143\x6f\144\x65\137\x61\x74\x74\162\163"), [$this, "\145\x77\141\x77\141\x77\x65\163\x6f\x61\x6f\x67\x67\155\163\153"]); parent::kgquecmsgcouyaya(); } public function saeawaeuooyiusak($qsmogugokoieokgw) { $oammesyieqmwuwyi = ManipulateWoocommerce::ceusksoaisoswmia($qsmogugokoieokgw); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof WC_Order_Item_Product) { goto awaqksikyomsuaeo; } $product = $igqsaukqcqscimok->get_product(); $mkgcaseqyaayywqo = $igqsaukqcqscimok->get_quantity(''); if (!($product && $product->get_price('') > 0)) { goto iqsgossweywksoia; } $this->uwswyuymakqsccya($igqsaukqcqscimok->get_id(), $product, $mkgcaseqyaayywqo); iqsgossweywksoia: awaqksikyomsuaeo: igwkcikeyoowosoi: } ksckqkmwiqggykke: } public function iqoqmakqemwcgqcc($xssuewsokckmigqk) : array { $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $oeucsuyqysaciasy = $mssuumukiiaqmcka->qogaqkcsogcqiaic($xssuewsokckmigqk, Agreement::eyqgmoumkowegyse); if ($oeucsuyqysaciasy) { goto cuommomwmsackoqc; } $kcugcsqiuqaomqom = $mssuumukiiaqmcka->qogaqkcsogcqiaic($xssuewsokckmigqk, Agreement::eqieykacgqwskmag); goto ggeoqeowscwkeumy; cuommomwmsackoqc: $kcugcsqiuqaomqom = ManipulateUser::mmgsuuoossqmukqg($oeucsuyqysaciasy, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]); ggeoqeowscwkeumy: return $kcugcsqiuqaomqom; } public function ksicuayoqaiikoiq($product) : array { $ywqqikcsamcaycgm = []; if (!$product) { goto qyeswawykmasuqye; } $eoioyuyammuoecgs = ManipulateWoocommerce::ykmakcaumkuuwaye($product); $eyscsimwcyaqakqg = ManipulatePost::weescwwgqgiyumyw($eoioyuyammuoecgs, self::cmckeoksigiaqykc, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]); $ywqqikcsamcaycgm = Agreement::symcgieuakksimmu()->cwkywyqksyucoyia([Agreement::kmqmeaywmyiqqkqw => [self::ciyoccqkiamemcmm => [$eoioyuyammuoecgs], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim], Agreement::guksqgkoswygwycw => [self::ciyoccqkiamemcmm => $eyscsimwcyaqakqg, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim], Agreement::eamockcoeqooicec => [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw]]); qyeswawykmasuqye: return $ywqqikcsamcaycgm; } public function aeaogyseiocsykqi($mwuwcsieauaqecae, $mkucggyaiaukqoce, $gmmwqccskyikyqci) : int { $uuuuuceswsksoiye = ManipulateArray::get($gmmwqccskyikyqci, $mkucggyaiaukqoce, []); if (is_numeric($mwuwcsieauaqecae)) { goto uwaimsisescsgyqk; } $mwuwcsieauaqecae = 0; goto uqcsksaywyqeumig; uwaimsisescsgyqk: $mwuwcsieauaqecae = intval($mwuwcsieauaqecae / 100); uqcsksaywyqeumig: if (!($mwuwcsieauaqecae > 0 && $uuuuuceswsksoiye)) { goto yggmaskeguaqkusc; } $mwuwcsieauaqecae = in_array($mwuwcsieauaqecae, $uuuuuceswsksoiye) ? 0 : $mwuwcsieauaqecae; yggmaskeguaqkusc: return $mwuwcsieauaqecae; } public function uwswyuymakqsccya($cawesmkieccckaae, $product, $mkgcaseqyaayywqo) { $gyayqukiwaeusqci = []; $ywqqikcsamcaycgm = $this->ksicuayoqaiikoiq($product); foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { if (!($mwuwcsieauaqecae = ManipulateArray::get($xssuewsokckmigqk, Agreement::eamockcoeqooicec))) { goto qmokwkocmcyeyesc; } if (!($kcugcsqiuqaomqom = $this->iqoqmakqemwcgqcc($xssuewsokckmigqk))) { goto esqwswmoegiqcckg; } if (!($ekiuyucoiagmscgy = $this->kmuweyayaqoeqiyw()->uiiyaqiemcccwewi($mwuwcsieauaqecae))) { goto kwmiwaecqcgiaqye; } $kcugcsqiuqaomqom = call_user_func_array($ekiuyucoiagmscgy, [$xssuewsokckmigqk, $kcugcsqiuqaomqom]); kwmiwaecqcgiaqye: if (!($kcugcsqiuqaomqom && is_array($kcugcsqiuqaomqom))) { goto wkiymcoqqiigqaaw; } foreach ($kcugcsqiuqaomqom as $mkucggyaiaukqoce) { $saqgcoqwmimycgim = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); if (!($mwuwcsieauaqecae = $this->aeaogyseiocsykqi($mwuwcsieauaqecae, $saqgcoqwmimycgim, $gyayqukiwaeusqci))) { goto mwieyyqamgwicgco; } $ogekyekymoyuywog = Income::symcgieuakksimmu(); $eoioyuyammuoecgs = ManipulateWoocommerce::omwkqcuwceweymcc($product); if (!$ogekyekymoyuywog->qumqowkwyaceeqwu([Income::awkcoioakcaougmq => $cawesmkieccckaae, Income::oguseymmyyoyaako => $eoioyuyammuoecgs])) { goto kceuusiekagyeoys; } $gyayqukiwaeusqci[$saqgcoqwmimycgim][] = $mwuwcsieauaqecae; goto uyeyscsaigimsqwq; kceuusiekagyeoys: $sogksuscggsicmac = $ogekyekymoyuywog->cegwwsqwouioquma($xssuewsokckmigqk, $saqgcoqwmimycgim, $cawesmkieccckaae, $product, $mkgcaseqyaayywqo); if (!ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq, false)) { goto eekaiaeqewiqkkgm; } $gyayqukiwaeusqci[$saqgcoqwmimycgim][] = $mwuwcsieauaqecae; eekaiaeqewiqkkgm: uyeyscsaigimsqwq: mwieyyqamgwicgco: gkoaeuekqockuoiq: } yqicwmekwuoywyus: wkiymcoqqiigqaaw: esqwswmoegiqcckg: qmokwkocmcyeyesc: jsmisuccwyukksgc: } ukwoswyyogmsygqg: } public function ewawawesoaoggmsk($wwgucssaecqekuek) { $migiiksoiymissge = ManipulateArray::get($wwgucssaecqekuek, self::sauwwsocmukoaayu); if (!$migiiksoiymissge) { goto qksckewucmosemuo; } $post = ManipulatePost::mwikyscisascoeea(); $product = ManipulateArray::get($wwgucssaecqekuek, self::oguseymmyyoyaako); if (!($post && $product)) { goto mosuacsuaasssciu; } $wwgucssaecqekuek[self::sauwwsocmukoaayu] = DecoratorQuery::yqymaqmqiqmmmsoo([self::ycieggkicmoegqyu => $post], $migiiksoiymissge); mosuacsuaasssciu: qksckewucmosemuo: return $wwgucssaecqekuek; } public function pwwaucaiseccqags($uusmaiomayssaecw, $product) { $post = ManipulateServer::ayueggmoqeeukqmq(self::ycieggkicmoegqyu, 0); if (!($post && $product)) { goto cmmusgkieoqyymgs; } $uomewyckeuqoqocu = ManipulateWoocommerce::wugwewwmekuaamos(self::ycqmesciieccwesi); if (is_array($uomewyckeuqoqocu)) { goto kmooekeyemqgucci; } $uomewyckeuqoqocu = [$uusmaiomayssaecw => $post]; goto skuuyysooocugyww; kmooekeyemqgucci: $uomewyckeuqoqocu[$uusmaiomayssaecw] = $post; skuuyysooocugyww: ManipulateWoocommerce::giyscymwkesykqsg(self::ycqmesciieccwesi, $uomewyckeuqoqocu); cmmusgkieoqyymgs: } public function kuswmimkgmyuymiu($product) { $miowmmgaiagcuyoo = ManipulatePost::igawqaomowicuayw(self::ucuwycequmesyess, $product, true); if ($miowmmgaiagcuyoo) { goto mkgmaguyswskyioa; } $miowmmgaiagcuyoo = ManipulatePost::mguqscccckuywsya($product, true); mkgmaguyswskyioa: return $miowmmgaiagcuyoo; } public function kysugigkqmuuoswq($uusmaiomayssaecw) { $uomewyckeuqoqocu = ManipulateWoocommerce::wugwewwmekuaamos(self::ycqmesciieccwesi); if (!(is_array($uomewyckeuqoqocu) && isset($uomewyckeuqoqocu[$uusmaiomayssaecw]))) { goto skwusmoyomgqkimm; } ManipulateArray::unset($uomewyckeuqoqocu, $uusmaiomayssaecw); ManipulateWoocommerce::giyscymwkesykqsg(self::ycqmesciieccwesi, $uomewyckeuqoqocu); skwusmoyomgqkimm: } public function gqucukaamgakskie() { if (!($post = ManipulateServer::get(self::ycieggkicmoegqyu, 0))) { goto usyckeewsgwaysam; } MetaBox::cwiuiiakukcsaakw(self::ycieggkicmoegqyu, $post)->render(["\x65\143\x68\x6f" => true]); usyckeewsgwaysam: } public function fooqekauqwsguyqq($qsmogugokoieokgw) { try { $ewgwqamkygiqaawc = ManipulateWoocommerce::uakuwyoiooeqqiow(); if (!($ewgwqamkygiqaawc && $qsmogugokoieokgw)) { goto qsokkkyoackoycie; } $umwqusowiqmyseom = ManipulateWoocommerce::mmmcswscsiecscwg($qsmogugokoieokgw); $this->gaycywmuakuuswyu($umwqusowiqmyseom, $ewgwqamkygiqaawc); $uomewyckeuqoqocu = ManipulateWoocommerce::wugwewwmekuaamos(self::ycqmesciieccwesi); if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto ismeikacqqyqcmqe; } foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $post) { $asueykamkygekuqy = ManipulateArray::get($ewgwqamkygiqaawc, $uusmaiomayssaecw, []); if (!$asueykamkygekuqy) { goto cysgqimowcqoqqsc; } $product = ManipulateArray::get($asueykamkygekuqy, "\160\x72\x6f\x64\165\143\x74\137\x69\x64", 0); $mkgcaseqyaayywqo = ManipulateArray::get($asueykamkygekuqy, "\161\165\141\x6e\x74\x69\164\x79", 1); $this->ykkwmsweeukkgcsc($umwqusowiqmyseom, $product, $post, $mkgcaseqyaayywqo); cysgqimowcqoqqsc: kakkuyeccaacewyo: } gicuuwuuuwumyooa: ismeikacqqyqcmqe: qsokkkyoackoycie: } catch (Exception $wgaoewqkwgomoaai) { } } public function gaycywmuakuuswyu($umwqusowiqmyseom, $oammesyieqmwuwyi) { if (!($umwqusowiqmyseom && is_array($oammesyieqmwuwyi))) { goto sooecucuakgkuyis; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $product = ManipulateArray::get($igqsaukqcqscimok, "\160\x72\157\x64\x75\x63\x74\137\x69\144", 0); if (!($miowmmgaiagcuyoo = $this->kuswmimkgmyuymiu($product))) { goto qcgyggiaowuqswuw; } $mkgcaseqyaayywqo = ManipulateArray::get($igqsaukqcqscimok, "\x71\165\141\x6e\x74\x69\x74\171", 1); Income::symcgieuakksimmu()->qqowskscgmumsugo($miowmmgaiagcuyoo, $umwqusowiqmyseom, $product, $mkgcaseqyaayywqo); qcgyggiaowuqswuw: yseyyukqaowwouua: } casgoamcqkekgeeo: sooecucuakgkuyis: } public function ykkwmsweeukkgcsc($umwqusowiqmyseom, $product, $post, $mkgcaseqyaayywqo) { $qscaoekmoooeuyqg = ManipulatePost::mguqscccckuywsya($post); $miowmmgaiagcuyoo = $this->kuswmimkgmyuymiu($product); if (!($miowmmgaiagcuyoo && $qscaoekmoooeuyqg && $miowmmgaiagcuyoo == $qscaoekmoooeuyqg)) { goto emauuoieewwoeyqq; } $mwokgqqeeikkiece = Income::symcgieuakksimmu(); $kywiogykysqukkio = ManipulatePost::qgisekcaywsmigga($umwqusowiqmyseom->get_type(), self::mkoieeuuiaomckcy, $post); if ($kywiogykysqukkio) { goto kwsqgqmwyyeykgum; } $sogksuscggsicmac = $mwokgqqeeikkiece->mcsiiagyqmaocaoe($miowmmgaiagcuyoo, $umwqusowiqmyseom, $product, $mkgcaseqyaayywqo); if (!ManipulateArray::get($sogksuscggsicmac, self::ckcawaoawwioqecq, false)) { goto ywqakqkmmcoceqka; } ManipulatePost::giwmekimakcaawsq(self::mkoieeuuiaomckcy, $post, ManipulateWoocommerce::kcwiwskyggmcimie($umwqusowiqmyseom), true); ywqakqkmmcoceqka: kwsqgqmwyyeykgum: emauuoieewwoeyqq: } }
