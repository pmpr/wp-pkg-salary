<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63281b2e06609             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Model\Request; use Pmpr\Module\Salary\Traits\CallbackTrait; use WC_Order_Item_Product; class Product extends Container { use CallbackTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\157\x6f\143\157\x6d\x6d\x65\x72\143\x65\137\160\141\x79\155\145\156\x74\137\143\x6f\155\x70\154\x65\x74\x65", [$this, "\x63\171\161\161\167\171\x69\143\x6f\141\x69\157\141\153\165\x73"], 9999)->qcsmikeggeemccuu("\167\157\157\x63\x6f\155\x6d\145\x72\143\145\x5f\x6f\x72\144\145\x72\x5f\163\164\x61\164\165\x73\137\x63\157\x6d\160\154\145\164\x65\x64", [$this, "\143\x79\x71\161\167\x79\x69\x63\x6f\x61\x69\x6f\141\x6b\165\x73"], 9999); } public function cyqqwyicoaioakus($qsmogugokoieokgw) { $oammesyieqmwuwyi = ManipulateWoocommerce::ceusksoaisoswmia($qsmogugokoieokgw); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof WC_Order_Item_Product) { goto saauykgakaeiyoua; } $product = $igqsaukqcqscimok->get_product(); $mkgcaseqyaayywqo = $igqsaukqcqscimok->get_quantity(''); if (!($product && $product->get_price('') > 0)) { goto owuuuiekkaeoeacq; } $this->uwswyuymakqsccya($igqsaukqcqscimok->get_id(), $product, $mkgcaseqyaayywqo); owuuuiekkaeoeacq: saauykgakaeiyoua: koiscokkkaimiecq: } cquecqekuucwoumw: } public function uwswyuymakqsccya($cawesmkieccckaae, $product, $mkgcaseqyaayywqo) { $umwqusowiqmyseom = ManipulateWoocommerce::qusqcuegmmsiguym($cawesmkieccckaae); $umkkkaqkwugkemce = ManipulateWoocommerce::omwkqcuwceweymcc($product); $ywqqikcsamcaycgm = $this->ksicuayoqaiikoiq($product); foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { if ($ekiuyucoiagmscgy = ManipulateArray::get($xssuewsokckmigqk, self::wwgusigoaksqmwsm)) { goto kwyimqumkuuyaiku; } $okycmmskgswewacc = $this->awweyuumwaygcauy($xssuewsokckmigqk); goto gkqiqaqecmoogmaa; kwyimqumkuuyaiku: $ekiuyucoiagmscgy = $this->ekkwaykokcgqkmoi($ekiuyucoiagmscgy, ''); $okycmmskgswewacc = $ekiuyucoiagmscgy($xssuewsokckmigqk, $cawesmkieccckaae, $product); gkqiqaqecmoogmaa: if (!($okycmmskgswewacc && is_array($okycmmskgswewacc))) { goto wiwoiyoakywqyaiy; } $ogekyekymoyuywog = Income::symcgieuakksimmu(); $kueeocmceokoouqa = Request::symcgieuakksimmu(); if (!($ogekyekymoyuywog && $kueeocmceokoouqa)) { goto isewysikysqewkis; } foreach ($okycmmskgswewacc as $aqmwamyiwgeeymqa) { $ousomaowqseoamse = $kueeocmceokoouqa->keeuqgyooycqoygw($aqmwamyiwgeeymqa); if ($ogekyekymoyuywog->qumqowkwyaceeqwu([$ogekyekymoyuywog::awkcoioakcaougmq => $cawesmkieccckaae, $ogekyekymoyuywog::oguseymmyyoyaako => $umkkkaqkwugkemce, $ogekyekymoyuywog::cmiegiycgiucucgs => $ousomaowqseoamse])) { goto ugykmcouiwiscoqu; } $sogksuscggsicmac = $ogekyekymoyuywog->muyuaguucggskykw($xssuewsokckmigqk, $ousomaowqseoamse, $cawesmkieccckaae, $product, $mkgcaseqyaayywqo); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto gsymkkskwsgggoic; } $umwqusowiqmyseom->add_order_note(sprintf(__("\x43\141\x6e\x20\x6e\x6f\164\x20\x61\x64\x64\40\x69\156\143\x6f\x6d\x65\x3a\x20\45\163", PR__MDL__SALARY), $this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas]))); gsymkkskwsgggoic: ugykmcouiwiscoqu: ceiuqsiqgiuiekem: } mceucsaeouuwyumm: isewysikysqewkis: wiwoiyoakywqyaiy: mqimkwickkgqqeoi: } qwemkcoaseywkuuc: } public function awweyuumwaygcauy($xssuewsokckmigqk) : array { $okycmmskgswewacc = []; $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); if (!($kueeocmceokoouqa && $mssuumukiiaqmcka)) { goto igmmqwyawcuuckkq; } $okycmmskgswewacc = $kueeocmceokoouqa->cwkywyqksyucoyia([self::ciywsqoeiymemsys => self::cwiummueqsucqayc, $kueeocmceokoouqa::woagckamiequeoyu => (int) $mssuumukiiaqmcka->keeuqgyooycqoygw($xssuewsokckmigqk)]); igmmqwyawcuuckkq: return $okycmmskgswewacc; } public function ksicuayoqaiikoiq($product) : array { $ywqqikcsamcaycgm = []; $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); if (!($product && $mssuumukiiaqmcka)) { goto eouwacqiommmeaqc; } $eoioyuyammuoecgs = ManipulateWoocommerce::ykmakcaumkuuwaye($product); $eyscsimwcyaqakqg = ManipulatePost::weescwwgqgiyumyw($eoioyuyammuoecgs, self::cmckeoksigiaqykc, [self::ymckmcsiymwqucoq => self::oyaoekcogwkcekcc]); $ywqqikcsamcaycgm = $mssuumukiiaqmcka->cwkywyqksyucoyia([Agreement::kmqmeaywmyiqqkqw => [self::ciyoccqkiamemcmm => [$eoioyuyammuoecgs], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim], Agreement::guksqgkoswygwycw => [self::ciyoccqkiamemcmm => $eyscsimwcyaqakqg, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim]]); eouwacqiommmeaqc: return $ywqqikcsamcaycgm; } }
