<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d86d4b1743             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Salary\Salary; use Pmpr\Module\Salary\Setting; class Payment extends Common { const gkiqougcwigqqcos = "\x64\145\144\165\143\164"; const wogsoiqickwekywu = "\x70\x61\171\157\165\x74"; const owskgkyceomsskgm = "\x63\x72\145\x61\x74\x6f\x72"; const qyeimiaoamokwygy = "\x77\151\x74\x68\x64\x72\141\167\x5f\x69\144"; const aeikseqkgeyemmis = "\157\162\x69\x67\x69\156\x5f\x64\145\x73\143"; const kmgieuiymcguqmka = "\x72\145\x66\145\x72\x65\156\143\x65\137\151\x64"; const sgsawoooocqwouiy = "\164\162\141\143\x6b\x69\156\147\x5f\143\157\144\145"; const qcqyuwsagkuqymwq = "\164\x72\141\x6e\x73\137\x64\141\164\145\x74\x69\x6d\145"; const kimkegwygaiggcmo = "\157\x72\151\x67\151\x6e\x5f\x61\143\143\x6f\165\x6e\164"; const kiwayowcwgkswqiw = "\x64\145\x73\x74\x69\x6e\141\x74\x69\x6f\156\137\144\x65\163\x63"; const yekmyiokocomasqi = "\x66\x61\151\x6c\x65\x64"; const soeemwaicsiweqyo = "\x73\165\x63\143\x65\x73\163"; const umegccguweookqyu = "\x61\x74\155"; const mouesqeemeaaukyu = "\x61\x70\151"; const keagmesmwegcscka = "\x70\x61\171\141"; const oiyyoggwuogoeywy = "\163\x61\164\x6e\141"; const mqmqsemegeeckcoi = "\155\157\x62\x69\x6c\x65\x5f\142\141\x6e\x6b"; public function ckgmycmaukqgkosk() { $this->showTimestamp = false; parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->ckaeqgiaiqwsccke(4)->guiaswksukmgageq(__("\x50\141\x79\x6d\x65\156\x74", PR__MDL__SALARY))->muuwuqssqkaieqge(__("\x50\141\171\x6d\145\x6e\164\x73", PR__MDL__SALARY))->gemkqqguesukeocw()->aseucqksocwomwos()->qemeyueyiwgsokuc(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->qcyqgwuuymykkcke(self::wogsoiqickwekywu)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x50\x61\x79\x6f\x75\x74", PR__MDL__SALARY)), $this->owgikiusoocuqqgo(self::ciywsqoeiymemsys, $this->agausceiyceikeag())->gswweykyogmsyawy(__("\x53\x74\141\x74\165\x73", PR__MDL__SALARY)), $this->geqyygqiwiqusekc(self::owskgkyceomsskgm)->gswweykyogmsyawy(__("\103\x72\145\141\164\x6f\162", PR__MDL__SALARY)), $this->owgikiusoocuqqgo(self::gcegwkuowcquosok, $this->yoiogykiyuooqcgi())->gswweykyogmsyawy(__("\x54\x65\x72\x6d\x69\156\x61\x6c", PR__MDL__SALARY)), $this->wyauigyyoceiaygw(self::qcqyuwsagkuqymwq)->gswweykyogmsyawy(__("\124\162\141\x6e\163\x61\x63\x74\x69\157\x6e\40\x44\141\164\145\164\x69\x6d\145", PR__MDL__SALARY)), $this->qcyqgwuuymykkcke(self::gkiqougcwigqqcos)->acceqyqygswoecwe(20)->gswweykyogmsyawy(__("\104\x65\x64\165\143\164\x73", PR__MDL__SALARY))->acokiqqgsmoqaeyu(), $this->qcyqgwuuymykkcke(self::kmgieuiymcguqmka)->acceqyqygswoecwe(10)->gswweykyogmsyawy(__("\122\145\x66\x65\x72\x65\156\143\145\40\111\104", PR__MDL__SALARY)), $this->qcyqgwuuymykkcke(self::sgsawoooocqwouiy)->acceqyqygswoecwe(11)->gswweykyogmsyawy(__("\124\162\x61\x63\x6b\x69\x6e\x67\x20\103\157\144\x65", PR__MDL__SALARY)), $this->qcyqgwuuymykkcke(self::kimkegwygaiggcmo)->acceqyqygswoecwe(8)->gswweykyogmsyawy(__("\117\x72\x69\x67\x69\x6e\x20\x41\143\143\157\165\156\x74", PR__MDL__SALARY)), $this->ymuegqgyuagyucws(self::kiwayowcwgkswqiw)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x44\145\163\164\151\156\x61\x74\151\157\156\40\104\145\163\143\x72\151\x70\x74\x69\157\156", PR__MDL__SALARY)), $this->ymuegqgyuagyucws(self::aeikseqkgeyemmis)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\117\162\x69\147\x69\156\x20\x44\145\163\x63\x72\151\160\x74\151\157\156", PR__MDL__SALARY)), $this->ggiieomioscuigco(self::qyeimiaoamokwygy)->uwmyqckcyamwaiww(Withdraw::class)->wuuqgaekqeymecag()->gswweykyogmsyawy(__("\127\151\164\150\144\x72\141\167", PR__MDL__SALARY))]); parent::ewaqwooqoqmcoomi(); } public function gcmweiksuqcyskmi($mksyucucyswaukig) { $zomswssgcqowmuoy = Salary::symcgieuakksimmu()->kgkkgawwksigaqyy($miowmmgaiagcuyoo, $eiwicgsqoiaeawkk); if (!$zomswssgcqowmuoy) { goto yyqygaokeccgugos; } $sqeykgyoooqysmca = ManipulateArray::get($zomswssgcqowmuoy, Setting::iyqigkiieoieskgy); $eqgoocgaqwqcimie = ManipulateArray::get($zomswssgcqowmuoy, Setting::oyyoccawmkogkcyy); $smowyuyseuwiaiei = 0; if ($sqeykgyoooqysmca === Setting::mikaaiimemmoegcm) { goto iuwkiyimqmgguose; } if (!($sqeykgyoooqysmca === Setting::ogkkygkwcccggasw)) { goto ayceeyuocgowqwsa; } $smowyuyseuwiaiei = $eqgoocgaqwqcimie; ayceeyuocgowqwsa: goto yggseoaommssscwo; iuwkiyimqmgguose: $gkimsiseuqckqkso = $eqgoocgaqwqcimie = $this->uoemumeeowowuqaq($mksyucucyswaukig, false); yggseoaommssscwo: if (!($smowyuyseuwiaiei > 0)) { goto aeiemwacaiygemmg; } aeiemwacaiygemmg: yyqygaokeccgugos: } public function kssgsuewkcwgiksa() : array { return [self::ciywsqoeiymemsys => ["\x63\x6f\x6c" => "\155\x64\x2d\x36\x20\x6c\x67\x2d\x34", "\x74\x79\x70\x65" => "\x62\163\163\145\x6c\145\x63\164", "\157\x70\164\151\x6f\x6e\163" => $this->agausceiyceikeag()], self::gcegwkuowcquosok => ["\x63\157\x6c" => "\x6d\x64\55\66\40\x6c\147\x2d\64", "\x74\x79\x70\x65" => "\142\163\163\x65\x6c\145\143\164", "\157\160\164\151\157\156\163" => $this->yoiogykiyuooqcgi()], self::qcqyuwsagkuqymwq => ["\x63\x6f\x6c" => "\x6d\144\55\66\x20\154\147\55\64"], self::gkiqougcwigqqcos => ["\x63\x6f\x6c" => "\155\144\55\66\40\x6c\147\x2d\x34", "\x61\x73\x2d\x6d\157\156\145\x79"], self::kmgieuiymcguqmka => ["\x63\157\154" => "\155\144\x2d\x36\40\x6c\x67\55\64", "\141\163\x2d\x6e\165\x6d\x62\145\x72"], self::sgsawoooocqwouiy => ["\143\x6f\x6c" => "\x6d\x64\55\x36\x20\154\x67\55\64", "\141\163\55\156\165\x6d\x62\x65\x72"], self::wogsoiqickwekywu => ["\x63\x6f\x6c" => "\x6d\144\55\66", "\141\163\x2d\x6d\x6f\156\145\x79"], self::kimkegwygaiggcmo => ["\x63\157\154" => "\x6d\144\x2d\x36", "\164\171\160\x65" => "\142\x73\x73\x65\154\x65\143\164", "\157\160\164\151\x6f\x6e\163" => Setting::wcwwuuouickuocsa(null, self::emgcgiseaoouacge)], self::owskgkyceomsskgm => ["\x74\x79\160\x65" => "\150\151\x64\144\145\x6e"], self::aeikseqkgeyemmis => ["\143\x6f\154" => "\x6c\147\55\x36", "\x72\x6f\167\x73" => 3], self::kiwayowcwgkswqiw => ["\143\157\x6c" => "\x6c\147\55\x36", "\x72\157\167\163" => 3]]; } public function oiemcgqyamccuagg($icwicymcioeyeyek = []) { $eiuuauwyukskgois = ManipulateArray::get($icwicymcioeyeyek, self::owskgkyceomsskgm); if ($eiuuauwyukskgois) { goto oeusomaaeekakake; } $icwicymcioeyeyek[self::owskgkyceomsskgm] = ManipulateUser::mwikyscisascoeea(); oeusomaaeekakake: return parent::oiemcgqyamccuagg($icwicymcioeyeyek); } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::ciywsqoeiymemsys: if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto sicgyiyiocyygkoc; } $eqgoocgaqwqcimie = $this->usouqioywgosyqqy($eqgoocgaqwqcimie, $this->agausceiyceikeag($eqgoocgaqwqcimie)); sicgyiyiocyygkoc: goto kwuckkyqaygwgcuy; case self::gcegwkuowcquosok: $eqgoocgaqwqcimie = $this->yoiogykiyuooqcgi($eqgoocgaqwqcimie); goto kwuckkyqaygwgcuy; case self::owskgkyceomsskgm: $mkucggyaiaukqoce = ManipulateUser::get($eqgoocgaqwqcimie, true); if (!$mkucggyaiaukqoce) { goto ikcwmsgocyuqiumc; } if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto cyosacayacumuaks; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulateUser::yyykkcyiksewsoqy($mkucggyaiaukqoce), ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce, "\144\151\x73\x70\x6c\141\x79\x5f\x6e\141\x6d\x65", true)); cyosacayacumuaks: ikcwmsgocyuqiumc: goto kwuckkyqaygwgcuy; case self::wogsoiqickwekywu: case self::gkiqougcwigqqcos: $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); goto kwuckkyqaygwgcuy; case self::kimkegwygaiggcmo: if (!$eqgoocgaqwqcimie) { goto eqiiaokcgakicaye; } $eiwicgsqoiaeawkk = Setting::wcwwuuouickuocsa($eqgoocgaqwqcimie); $eqgoocgaqwqcimie = ManipulateArray::get($eiwicgsqoiaeawkk, Setting::gskosgoeymsumieq); eqiiaokcgakicaye: goto kwuckkyqaygwgcuy; case self::qyeimiaoamokwygy: if (!$eqgoocgaqwqcimie) { goto gcucsowqoeiwmyyq; } $eqgoocgaqwqcimie = $this->aouwuegyyugiwksc($qgoqiacsiccwoawi, $mksyucucyswaukig); gcucsowqoeiwmyyq: goto kwuckkyqaygwgcuy; } giuccakymqymawgk: kwuckkyqaygwgcuy: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function agausceiyceikeag($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::soeemwaicsiweqyo => __("\x53\165\x63\x63\x65\x73\x73", PR__MDL__SALARY), self::yekmyiokocomasqi => __("\106\x61\x69\x6c\145\144", PR__MDL__SALARY)]; return ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq, $oqseeekuqisekiwy); } public function yoiogykiyuooqcgi($gwwuygsskqcomoas = null) { $skseiqgiyyiuquuu = [self::mqmqsemegeeckcoi => __("\115\157\x62\151\154\145\x20\102\141\156\153", PR__MDL__SALARY), self::keagmesmwegcscka => __("\x50\x41\x59\101", PR__MDL__SALARY), self::oiyyoggwuogoeywy => __("\123\x41\124\116\101", PR__MDL__SALARY), self::umegccguweookqyu => __("\x41\124\115", PR__MDL__SALARY), self::mouesqeemeaaukyu => __("\x41\x50\111", PR__MDL__SALARY)]; return ManipulateArray::get($skseiqgiyyiuquuu, $gwwuygsskqcomoas, $skseiqgiyyiuquuu); } }
