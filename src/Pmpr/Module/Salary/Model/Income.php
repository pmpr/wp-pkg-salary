<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432b7fd5e31d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Model; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Income extends Common { const aioqyewkwawaqgqe = "\x61\x6d\x6f\x75\x6e\x74"; const cmiegiycgiucucgs = "\x72\145\161\x75\x65\x73\x74\x5f\151\144"; const qyeimiaoamokwygy = "\167\151\164\x68\144\x72\141\167\x5f\151\144"; const eiiuyoyiygsickwe = "\x77\151\x74\150\144\x72\x61\x77\x5f\x73\164\141\x74\165\x73"; const wagwccqcqwgsoyoi = "\154\x6f\x63\153\x65\144"; const ycmomqymkecsysum = "\x77\151\x74\x68\144\x72\x61\x77\x6e"; const youiiwsayswmyuum = "\x75\156\167\x69\164\x68\144\x72\x61\167\x6e"; const gweieugwqicugemk = "\156\157\x6e\145\167\151\164\150\x64\162\x61\167\x6e\x61\142\x6c\145"; const kaeouguogocgeuoc = "\154\x6f\x63\153\137\x70\x72\157\144\x75\143\164\x5f\141\146\164\145\x72\137\162\151\x63\x68\x5f\164\150\162\x65\163\x68\157\x6c\x64"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconInterface::okgwkgguoawyiecg)->ckaeqgiaiqwsccke(20)->guiaswksukmgageq(__("\x49\156\143\157\x6d\x65", PR__MDL__SALARY))->muuwuqssqkaieqge(__("\x49\156\143\157\x6d\x65\163", PR__MDL__SALARY))->aseucqksocwomwos()->qemeyueyiwgsokuc(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->geqyygqiwiqusekc(self::awkcoioakcaougmq)->gswweykyogmsyawy(__("\x52\145\154\141\x74\x65\x64\x20\117\x72\x64\145\x72", PR__MDL__SALARY)), $this->usqseiuaeauwuwus(self::aioqyewkwawaqgqe)->gswweykyogmsyawy(__("\x41\x6d\157\165\x6e\164", PR__MDL__SALARY)), $this->geqyygqiwiqusekc(self::oguseymmyyoyaako)->gswweykyogmsyawy(__("\x50\x72\157\144\x75\143\164", PR__MDL__SALARY)), $this->yyuiuwgokmwioomq(self::eiiuyoyiygsickwe)->kesomeowemmyygey(1, self::youiiwsayswmyuum, __("\x55\156\x77\x69\164\x68\x64\x72\x61\x77\x6e", PR__MDL__SALARY))->kesomeowemmyygey(2, self::ycmomqymkecsysum, __("\x57\x69\x74\x68\x64\162\x61\167\156", PR__MDL__SALARY))->kesomeowemmyygey(3, self::wagwccqcqwgsoyoi, __("\114\157\x63\x6b\145\x64", PR__MDL__SALARY))->kesomeowemmyygey(4, self::gweieugwqicugemk, __("\116\157\156\145\x20\127\151\x74\x68\144\x72\x61\167\156\x61\142\x6c\x65", PR__MDL__SALARY))->gswweykyogmsyawy(__("\127\x69\164\x68\144\162\x61\167\x20\123\x74\x61\164\165\163", PR__MDL__SALARY)), $this->eoaomaokwkwqyqiq(self::cmiegiycgiucucgs)->uwmyqckcyamwaiww(Request::class)->wuuqgaekqeymecag()->gswweykyogmsyawy(__("\x52\145\x71\x75\145\163\164", PR__MDL__SALARY)), $this->eoaomaokwkwqyqiq(self::qyeimiaoamokwygy)->acokiqqgsmoqaeyu()->uwmyqckcyamwaiww(Withdraw::class)->wuuqgaekqeymecag()->gswweykyogmsyawy(__("\127\x69\164\150\x64\x72\141\x77", PR__MDL__SALARY))]); parent::ewaqwooqoqmcoomi(); } public function iowygaiuiqkqimio($iueymcwwscwqkiyq = null) { return $this->yomgsemomcmgekyi(self::eiiuyoyiygsickwe, $iueymcwwscwqkiyq); } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, &$mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::iockmgiyoygcswog: $miowmmgaiagcuyoo = ManipulateUser::get($eqgoocgaqwqcimie, true); if (!$miowmmgaiagcuyoo) { goto kiqogmwcgcamwiig; } $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($miowmmgaiagcuyoo, "\144\x69\163\x70\154\x61\171\x5f\156\x61\155\145", true); $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulateUser::yyykkcyiksewsoqy($miowmmgaiagcuyoo), $ymqmyyeuycgmigyo); kiqogmwcgcamwiig: goto kwagwqyusyiyoaqs; case self::awkcoioakcaougmq: $eqgoocgaqwqcimie = $this->cqumckukywgkacyo(ManipulateWoocommerce::qusqcuegmmsiguym($eqgoocgaqwqcimie)); goto kwagwqyusyiyoaqs; case self::eiiuyoyiygsickwe: $meqocwsecsywiiqs = $this->iowygaiuiqkqimio($eqgoocgaqwqcimie); if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto iomcaiwewsawiamu; } $eqgoocgaqwqcimie = $this->usouqioywgosyqqy($eqgoocgaqwqcimie, $meqocwsecsywiiqs); iomcaiwewsawiamu: goto kwagwqyusyiyoaqs; case self::oguseymmyyoyaako: if (!$eqgoocgaqwqcimie) { goto sqiciiuwmykocycc; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulatePost::ycqquoiyyuesegsy($eqgoocgaqwqcimie), ManipulatePost::qcgakseyaikigqco($eqgoocgaqwqcimie)); sqiciiuwmykocycc: goto kwagwqyusyiyoaqs; case self::aioqyewkwawaqgqe: $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); goto kwagwqyusyiyoaqs; case self::cmiegiycgiucucgs: $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); if (!($kueeocmceokoouqa && $mssuumukiiaqmcka)) { goto ocokwuuquaokmasc; } $aqmwamyiwgeeymqa = $this->iscemaoqqckmkago($qgoqiacsiccwoawi, $mksyucucyswaukig); $xssuewsokckmigqk = $kueeocmceokoouqa->iscemaoqqckmkago($kueeocmceokoouqa::woagckamiequeoyu, $aqmwamyiwgeeymqa); if (!($aqmwamyiwgeeymqa && $xssuewsokckmigqk)) { goto cggowoquuiwqkyew; } $meqocwsecsywiiqs = $mssuumukiiaqmcka->uikgwcuascgeissw($xssuewsokckmigqk); if (ManipulateQuery::aqwquwewocyewasw()) { goto eequksumcoogyoem; } $eqgoocgaqwqcimie = $kueeocmceokoouqa->geyuyukmwaoksywa($kueeocmceokoouqa->uesweuocqoywoyms($aqmwamyiwgeeymqa), sprintf("\x25\163\x20\50\45\x73\51", $meqocwsecsywiiqs, ManipulateUser::ygwimyogyaqgumam(ManipulateArray::get($aqmwamyiwgeeymqa, self::meksegaoamowuwoq)))); goto uukumskkeggaowck; eequksumcoogyoem: $eqgoocgaqwqcimie = ManipulateHTML::yuawgssgauywkiia($meqocwsecsywiiqs, ManipulateServer::oiucukewkckkwiqc("\x2f\163\x61\x6c\141\162\x79\x2f\141\147\x72\145\145\x6d\x65\x6e\x74\57{$eqgoocgaqwqcimie}", self::ismwwqmwgmqqocke)); uukumskkeggaowck: cggowoquuiwqkyew: ocokwuuquaokmasc: goto kwagwqyusyiyoaqs; } yowsmsiyimmimemc: kwagwqyusyiyoaqs: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function ceuwgeyigaiosgec(?string $iueymcwwscwqkiyq = self::wagwccqcqwgsoyoi) : array { $cseccogesusskess = []; try { $cseccogesusskess = $this->woimamkkeyoyauoa(self::eiiuyoyiygsickwe, $iueymcwwscwqkiyq); } catch (Exception $wgaoewqkwgomoaai) { } return $cseccogesusskess; } public function iasuucsqckqgkgwi($product) { return $this->qgiewwqykwugcuoo(self::aioqyewkwawaqgqe, [self::oguseymmyyoyaako => $product]); } public function kuyeikkgksekigcq($product) : int { return $this->ieieyoeqmmeysauc(self::oguseymmyyoyaako, $product); } public function owiuygoyeiuqiyuc($miowmmgaiagcuyoo, $kwkmegesqkqwyska) : array { return $this->cwkywyqksyucoyia([self::iockmgiyoygcswog => $miowmmgaiagcuyoo, self::CREATED_AT => [self::ciyoccqkiamemcmm => $kwkmegesqkqwyska, self::euoaaiqkqcqcgeco => self::kumuoysauoagaiiy, self::eugyciakiowwcuwm => "\x3c\x3d"], self::eiiuyoyiygsickwe => self::youiiwsayswmyuum]); } public function muyuaguucggskykw($xssuewsokckmigqk, $ousomaowqseoamse, $cawesmkieccckaae, $product, $mkgcaseqyaayywqo = 1) : array { $iswcokucwmiosiaq = ''; $mkgcaseqyaayywqo = max(1, $mkgcaseqyaayywqo); $eoioyuyammuoecgs = ManipulateWoocommerce::omwkqcuwceweymcc($product); $sogksuscggsicmac = [self::ckcawaoawwioqecq => false]; if ($mssuumukiiaqmcka = Agreement::symcgieuakksimmu()) { goto cgewcsueoyaeikgm; } $iswcokucwmiosiaq = $this->gcsweumukyckmgik($this->aqgegcykekmuggsu()); goto sukskmcwsoysiuqu; cgewcsueoyaeikgm: $smowyuyseuwiaiei = $this->mkwqioemikeimwai($xssuewsokckmigqk, $eoioyuyammuoecgs); if ($smowyuyseuwiaiei > 0) { goto ygkcacsyyckescqs; } $iswcokucwmiosiaq = __("\101\155\x6f\165\156\x74\x20\x69\163\x20\156\157\164\40\166\141\x6c\151\144\x2c\40\154\145\x73\163\x20\x74\150\141\x6e\x20\x31", PR__MDL__SALARY); goto cuoqqgaygogsmmic; ygkcacsyyckescqs: $wikmsuswiigscwgg = $mssuumukiiaqmcka->ogegcqqcukiaqscy(Agreement::seeqqyqyyaiqcowg, $xssuewsokckmigqk); $ckysocikcecqseum = (int) $mssuumukiiaqmcka->qogaqkcsogcqiaic($xssuewsokckmigqk, Agreement::weumemyqgykuwqok, 0); $kqgogugewiwqkaye = (int) $mssuumukiiaqmcka->qogaqkcsogcqiaic($xssuewsokckmigqk, Agreement::yykcmqogieykgkus, 0); try { $kggyacsekkkagqya = $this->cwkywyqksyucoyia([self::oguseymmyyoyaako => $eoioyuyammuoecgs, self::cmiegiycgiucucgs => $ousomaowqseoamse]); } catch (Exception $wgaoewqkwgomoaai) { $kggyacsekkkagqya = []; } $akmsosaouiokmuiq = false; $oyuqkqayqyqysyse = -1; $ciyackuwsqkoqese = 1; qmeoaqmsuseueqiy: if (!($ciyackuwsqkoqese <= $mkgcaseqyaayywqo)) { goto yiwiqaqmwiogawym; } switch ($wikmsuswiigscwgg) { case Agreement::aucwwygcuwkokics: $oyuqkqayqyqysyse = $this->cseaisoguykosgem($kggyacsekkkagqya) + ($smowyuyseuwiaiei * $ciyackuwsqkoqese - 1); if (!($kqgogugewiwqkaye > 0)) { goto qgegkeomwscwwiuw; } if ($oyuqkqayqyqysyse >= $kqgogugewiwqkaye) { goto egasokooagakisiy; } if (!($oyuqkqayqyqysyse + $smowyuyseuwiaiei > $kqgogugewiwqkaye)) { goto mswsoaimesegiiic; } $bsgyawiqyuquqmyy = $kqgogugewiwqkaye - $oyuqkqayqyqysyse; if (!($bsgyawiqyuquqmyy <= $smowyuyseuwiaiei)) { goto usqgaogkqgemuima; } $smowyuyseuwiaiei = $bsgyawiqyuquqmyy; usqgaogkqgemuima: mswsoaimesegiiic: goto kecwuwwcwokuksyq; egasokooagakisiy: $akmsosaouiokmuiq = true; kecwuwwcwokuksyq: qgegkeomwscwwiuw: goto meawswgwagoqgkye; case Agreement::qmssqcoweqskggsc: $oyuqkqayqyqysyse = count($kggyacsekkkagqya) + ($ciyackuwsqkoqese - 1); if (!($kqgogugewiwqkaye > 0 && $oyuqkqayqyqysyse >= $kqgogugewiwqkaye)) { goto qmiwsequckckoaei; } $akmsosaouiokmuiq = true; qmiwsequckckoaei: goto meawswgwagoqgkye; case Agreement::wokicqaaogeeegsc: goto meawswgwagoqgkye; } wcesymwqykqoyuqk: meawswgwagoqgkye: if (!$akmsosaouiokmuiq) { goto goeoymmqqqeeoime; } goto yiwiqaqmwiogawym; goeoymmqqqeeoime: if ($ckysocikcecqseum > 0 && $oyuqkqayqyqysyse < $ckysocikcecqseum) { goto eiawsoasmscmqswa; } $iueymcwwscwqkiyq = self::youiiwsayswmyuum; goto ickcmqoiosquugwe; eiawsoasmscmqswa: $iueymcwwscwqkiyq = self::gweieugwqicugemk; ickcmqoiosquugwe: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([self::awkcoioakcaougmq => $cawesmkieccckaae, self::aioqyewkwawaqgqe => $smowyuyseuwiaiei, self::oguseymmyyoyaako => $eoioyuyammuoecgs, self::cmiegiycgiucucgs => $ousomaowqseoamse, self::eiiuyoyiygsickwe => $iueymcwwscwqkiyq], true); goacqqsgaaigyuaw: $ciyackuwsqkoqese++; goto qmeoaqmsuseueqiy; yiwiqaqmwiogawym: cuoqqgaygogsmmic: sukskmcwsoysiuqu: if (!$iswcokucwmiosiaq) { goto igymseewwyiocoug; } $sogksuscggsicmac[self::iwyueouqaqegmcas] = $iswcokucwmiosiaq; igymseewwyiocoug: return $sogksuscggsicmac; } public function mkwqioemikeimwai($xssuewsokckmigqk, $product) { $smowyuyseuwiaiei = 0; $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$xssuewsokckmigqk) { goto qcessicwuikwqsis; } $aumscagymwyyicag = $product->get_price(''); if (!($aumscagymwyyicag > 0)) { goto qwcegcuowwgiccos; } $eqgoocgaqwqcimie = (int) ManipulateArray::get($xssuewsokckmigqk, Agreement::siwsmgcqgcqmaeui, 0); if (!($eqgoocgaqwqcimie > 0)) { goto kooskuwkuayiuose; } $qgciuiagkkguykgs = ManipulateArray::get($xssuewsokckmigqk, Agreement::kkeogqiyysoyuemk, Agreement::aqkaquswquuyqkum); switch ($qgciuiagkkguykgs) { case Agreement::aqkaquswquuyqkum: if (!($aumscagymwyyicag >= $eqgoocgaqwqcimie)) { goto twkmiuomimomscew; } $smowyuyseuwiaiei = $eqgoocgaqwqcimie; twkmiuomimomscew: goto mqccmesakuemceqi; case Agreement::sqymqqcecuamwium: $smowyuyseuwiaiei = $aumscagymwyyicag * $eqgoocgaqwqcimie / 100; goto mqccmesakuemceqi; } eyiamcekkgkiawqy: mqccmesakuemceqi: kooskuwkuayiuose: qwcegcuowwgiccos: qcessicwuikwqsis: return $smowyuyseuwiaiei; } public function mmciyecquyoegiay() : ?string { return self::eiiuyoyiygsickwe; } }
