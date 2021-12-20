<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c04d2d4c02b             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Model; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Salary\Setting; class Agreement extends Common { const eamockcoeqooicec = "\154\x69\156\x65"; const eyqgmoumkowegyse = "\162\157\154\145"; const ucoiewcoucauqwko = "\x74\145\162\x6d\x73"; const eqieykacgqwskmag = "\x75\163\x65\x72\163"; const kkeogqiyysoyuemk = "\x6d\145\x74\x68\157\144"; const kmqmeaywmyiqqkqw = "\160\x72\x6f\144\165\x63\164\163"; const AS_PUBLIC = "\141\163\137\160\165\142\x6c\151\143"; const INCOME_ID = "\151\x6e\143\157\x6d\145\137\151\x64"; const REQUEST_ID = "\162\x65\161\x75\145\163\x74\137\151\144"; const WITHDRAW_ID = "\x77\x69\x74\150\x64\162\141\167\137\151\144"; const PRODUCT_CATS = "\x70\162\157\x64\165\143\x74\x5f\x63\x61\164\x73"; const METHOD_VALUE = "\x6d\145\x74\x68\157\x64\137\166\x61\154\165\x65"; const WITHDRAW_METHOD = "\x77\151\164\150\x64\x72\x61\x77\137\x6d\145\x74\150\x6f\x64"; const WITHDRAW_PERIOD = "\x77\151\164\x68\144\162\141\x77\137\x70\x65\x72\x69\x6f\x64"; const ORDER_THRESHOLD_MAX = "\x6f\x72\x64\x65\162\137\x74\150\x72\145\x73\x68\x6f\x6c\x64\137\155\x61\170"; const CONSIDER_BEFORE_MIN = "\x63\157\x6e\x73\151\x64\x65\x72\x5f\142\x65\146\x6f\162\145\137\x6d\x69\156"; const ORDER_THRESHOLD_MIN = "\x6f\162\x64\145\x72\x5f\164\150\162\145\163\150\x6f\x6c\x64\x5f\x6d\x69\x6e"; const WITHDRAW_MIN_BALANCE = "\x77\x69\x74\150\x64\x72\141\167\137\155\x69\156\137\142\x61\154\141\x6e\x63\145"; const ORDER_THRESHOLD_TYPE = "\x6f\162\144\145\x72\x5f\x74\x68\162\x65\x73\x68\157\x6c\144\x5f\x74\171\x70\x65"; const ORIGIN_ANYWHERE = "\141\x6e\171\167\150\x65\x72\145"; const ORIGIN_SHORTCODE = "\x73\150\x6f\x72\164\143\x6f\144\x65"; const METHOD_VARIABLE = "\x76\141\x72\151\x61\x62\x6c\145"; const METHOD_CONSTANT = "\x63\157\156\163\164\141\x6e\x74"; const WITHDRAW_METHOD_MANUAL = "\155\141\156\165\x61\x6c"; const WITHDRAW_METHOD_AUTOMATIC = "\141\165\164\157\x6d\x61\164\151\143"; const ORDER_THRESHOLD_TYPE_NONE = "\x6e\x6f\156\x65"; const ORDER_THRESHOLD_TYPE_MONETARY = "\x6d\157\x6e\x65\164\141\x72\x79"; const ORDER_THRESHOLD_TYPE_NUMERICAL = "\156\x75\x6d\x65\x72\x69\x63\x61\154"; const WITHDRAW_PERIOD_PER_WEEK = "\x70\x65\162\x5f\x77\145\145\153"; const WITHDRAW_PERIOD_PER_MONTH = "\x70\x65\x72\x5f\155\157\156\164\x68"; const WITHDRAW_PERIOD_EACH_THREE_MONTH = "\145\141\x63\150\137\x74\x68\x72\x65\x65\x5f\155\x6f\156\164\150"; const WITHDRAW_PERIOD_EACH_SIX_MONTH = "\x65\141\x63\150\x5f\163\151\170\137\155\157\x6e\164\x68"; const WITHDRAW_PERIOD_PER_YEAR = "\160\x65\x72\137\x79\x65\x61\162"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconFontawesomeInterface::ICON_HANDSHAKE)->guiaswksukmgageq(__("\x41\147\162\145\145\155\x65\x6e\x74", PR__PKG__SALARY))->muuwuqssqkaieqge(__("\x41\x67\162\145\x65\x6d\145\x6e\x74\x73", PR__PKG__SALARY))->gemkqqguesukeocw()->aseucqksocwomwos()->wkesqcmiekqoykag()->qemeyueyiwgsokuc(["\x70\x6f\x73\x69\x74\151\157\x6e" => 1]); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->qcyqgwuuymykkcke(self::qescuiwgsyuikume)->acceqyqygswoecwe(200)->gswweykyogmsyawy(__("\124\151\164\x6c\145", PR__PKG__SALARY))->jyumyyugiwwiqomk(0), $this->qagesioaeoaacoea(self::eqieykacgqwskmag)->gswweykyogmsyawy(__("\125\x73\x65\x72\163", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::eyqgmoumkowegyse)->acceqyqygswoecwe(64)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\122\x6f\154\145", PR__PKG__SALARY)), $this->geqyygqiwiqusekc(self::eamockcoeqooicec)->gswweykyogmsyawy(__("\114\x69\156\145\40\x28\103\154\x61\x73\163\x29", PR__PKG__SALARY))->acokiqqgsmoqaeyu(), $this->kwwgyikigsyesgoo(self::AS_PUBLIC)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x41\x73\x20\120\x75\142\x6c\x69\143", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::kkeogqiyysoyuemk)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x41\x67\x72\145\x65\x6d\x65\x6e\164\40\x4d\x65\164\x68\157\144", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::METHOD_VALUE)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x41\147\162\145\145\155\145\156\164\40\x4d\145\x74\x68\157\x64\x20\126\x61\x6c\165\145", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::ORDER_THRESHOLD_TYPE)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\117\162\x64\145\x72\x20\x54\150\162\x65\x73\x68\x6f\x6c\144\x20\124\171\160\x65", PR__PKG__SALARY))->acokiqqgsmoqaeyu(), $this->kwwgyikigsyesgoo(self::CONSIDER_BEFORE_MIN)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x43\157\x6e\163\x69\144\x65\x72\40\x42\145\x66\157\162\x65\x20\115\151\x6e\x69\x6d\x75\155\40\124\x68\x72\145\x73\x68\157\x6c\144", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::ORDER_THRESHOLD_MAX)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\115\x61\x78\x69\x6d\165\x6d\x20\117\162\x64\x65\x72\40\124\x68\x72\145\163\150\x6f\154\144", PR__PKG__SALARY))->acokiqqgsmoqaeyu(), $this->qcyqgwuuymykkcke(self::ORDER_THRESHOLD_MIN)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\115\x69\x6e\151\155\x75\x6d\40\x4f\x72\x64\145\x72\40\124\x68\162\x65\x73\x68\x6f\154\144", PR__PKG__SALARY))->acokiqqgsmoqaeyu(), $this->qcyqgwuuymykkcke(self::WITHDRAW_METHOD)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x57\151\x74\150\144\162\141\167\40\x4d\145\x74\x68\x6f\x64", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::WITHDRAW_PERIOD)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\127\x69\x74\150\x64\x72\141\167\40\120\145\x72\151\x6f\x64", PR__PKG__SALARY))->acokiqqgsmoqaeyu(), $this->qcyqgwuuymykkcke(self::igecewwoemccgwsq)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x4f\162\x69\147\151\156", PR__PKG__SALARY)), $this->qagesioaeoaacoea(self::kmqmeaywmyiqqkqw)->gswweykyogmsyawy(__("\x50\x72\x6f\144\x75\x63\x74\163", PR__PKG__SALARY)), $this->qagesioaeoaacoea(self::PRODUCT_CATS)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x50\x72\157\144\165\143\164\40\x43\x61\164\145\x67\157\162\151\145\163", PR__PKG__SALARY)), $this->ymuegqgyuagyucws(self::ucoiewcoucauqwko)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\124\145\x72\x6d\x73", PR__PKG__SALARY)), $this->ymuegqgyuagyucws(self::eqkeooqcsscoggia)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\104\x65\163\x63\x72\151\160\x74\151\x6f\156", PR__PKG__SALARY)), $this->ggiieomioscuigco(self::INCOME_ID)->acokiqqgsmoqaeyu()->uwmyqckcyamwaiww(Income::class)->ckgquisaimmgwuyu()->gswweykyogmsyawy(__("\111\156\143\x6f\x6d\x65\x73", PR__PKG__SALARY)), $this->ggiieomioscuigco(self::REQUEST_ID)->acokiqqgsmoqaeyu()->uwmyqckcyamwaiww(Request::class)->ckgquisaimmgwuyu()->gswweykyogmsyawy(__("\101\147\x72\x65\x65\155\x65\x6e\x74\40\122\145\x71\165\x65\x73\164\x73", PR__PKG__SALARY)), $this->ggiieomioscuigco(self::WITHDRAW_ID)->uwmyqckcyamwaiww(Withdraw::class)->gswweykyogmsyawy(__("\x57\151\164\x68\x64\162\141\167\163", PR__PKG__SALARY))->ckmqkgwcusyaegmm()]); parent::ewaqwooqoqmcoomi(); } public function reksuiwuyowmumwy() : bool { return false; } public function kssgsuewkcwgiksa() : array { return [self::qescuiwgsyuikume => ["\x63\157\x6c" => "\155\144\x2d\66\x20\x6c\x67\55\x33"], self::eqieykacgqwskmag => ["\x63\x6f\x6c" => "\x6d\x64\55\66\x20\x6c\147\x2d\63", "\x74\x79\x70\x65" => "\x73\145\x6c\145\x63\164\55\x75\x73\145\162", "\x61\163\x2d\x6d\x75\154\164\x69\160\154\145", "\151\147\x6e\157\x72\x61\x62\154\145" => [[self::ykqyicwaggyuuuwo => '', self::ymckmcsiymwqucoq => self::eyqgmoumkowegyse]]], self::eyqgmoumkowegyse => ["\143\157\154" => "\x6d\144\x2d\66\40\154\147\55\63", "\164\171\160\x65" => "\163\x65\x6c\x65\143\164\55\162\157\154\x65", "\x69\x67\156\x6f\x72\x61\x62\154\145" => [[self::ykqyicwaggyuuuwo => '', self::ymckmcsiymwqucoq => self::eqieykacgqwskmag]]], self::kkeogqiyysoyuemk => ["\143\157\x6c" => "\x6d\x64\x2d\x36\40\154\x67\55\63", "\x74\171\160\145" => "\x62\163\163\x65\x6c\x65\143\164", "\157\x70\164\x69\157\156\x73" => $this->myseugoqckwooqmc(), "\x72\145\161\165\x69\162\x65\144"], self::METHOD_VALUE => ["\143\x6f\x6c" => "\155\144\55\66\40\x6c\x67\55\x33", "\x61\x73\x2d\x6e\165\155\142\x65\162"], self::WITHDRAW_METHOD => ["\143\x6f\154" => "\x6d\144\55\x36\40\x6c\147\55\63", "\164\x79\x70\x65" => "\142\163\x73\145\154\145\143\x74", "\x6f\160\164\151\x6f\x6e\163" => $this->igiuaguowqkakmmc(), "\151\x67\x6e\157\162\141\x62\x6c\145" => [[self::ykqyicwaggyuuuwo => self::WITHDRAW_METHOD_AUTOMATIC, self::ymckmcsiymwqucoq => self::WITHDRAW_PERIOD]], "\x72\x65\161\165\151\x72\145\x64"], self::WITHDRAW_PERIOD => ["\143\x6f\154" => "\155\x64\x2d\x36\40\154\x67\x2d\63", "\164\x79\160\145" => "\x62\x73\163\x65\154\x65\x63\164", "\157\160\164\x69\157\156\x73" => $this->caegsmcwokgyyqwk()], self::ORDER_THRESHOLD_TYPE => ["\143\x6f\154" => "\x6d\144\55\66\x20\x6c\147\55\x33", "\164\x79\160\x65" => "\142\163\163\x65\154\x65\143\164", "\x6f\160\164\x69\x6f\156\x73" => $this->ewkwkeqmcsiugeem(), "\162\x65\x71\x75\151\162\x65\x64", "\151\x67\156\157\x72\x61\x62\x6c\x65" => [[self::ymckmcsiymwqucoq => [self::ORDER_THRESHOLD_MIN, self::ORDER_THRESHOLD_MAX], self::ykqyicwaggyuuuwo => [self::ORDER_THRESHOLD_TYPE_MONETARY, self::ORDER_THRESHOLD_TYPE_NUMERICAL]]]], self::ORDER_THRESHOLD_MIN => ["\143\157\154" => "\x6d\144\55\66\x20\x6c\x67\x2d\x33", "\x61\x73\55\x6e\165\x6d\x62\145\162"], self::ORDER_THRESHOLD_MAX => ["\143\x6f\x6c" => "\x6d\144\x2d\x36\x20\x6c\147\x2d\x33", "\141\x73\55\156\x75\155\142\x65\x72"], self::CONSIDER_BEFORE_MIN => ["\x63\157\154" => "\x6d\x64\55\x36\x20\154\x67\55\63", "\x61\163\55\x69\x6e\x6c\151\x6e\145", "\160\141\162\145\156\x74\55\143\154\141\x73\x73" => "\40\155\x74\x2d\x6d\x64\55\x61\165\x74\157"], self::AS_PUBLIC => ["\x63\x6f\154" => "\x6d\144\55\66\40\154\x67\55\63", "\x61\163\55\151\x6e\x6c\151\x6e\145", "\x69\x67\x6e\157\162\x61\142\154\x65" => [[self::ymckmcsiymwqucoq => self::ucoiewcoucauqwko, self::ykqyicwaggyuuuwo => true]], "\x70\141\162\145\x6e\164\55\x63\154\141\x73\163" => "\x20\155\164\x2d\x6d\144\x2d\x61\x75\164\x6f"], self::igecewwoemccgwsq => ["\143\157\154" => "\x6d\144\x2d\66\x20\154\147\x2d\x33", "\164\171\160\145" => "\142\x73\163\x65\154\145\x63\x74", "\x6f\x70\x74\151\x6f\x6e\163" => $this->kmumcykykicieqsm(), "\x72\145\161\x75\x69\x72\x65\x64"], self::eamockcoeqooicec => ["\x63\157\154" => "\155\144\55\66\x20\x6c\x67\x2d\63", "\164\171\160\145" => "\142\x73\x73\145\154\145\143\164", "\157\x70\x74\x69\x6f\x6e\x73" => $this->sykiqoisiaisskgs(false), "\x72\145\x71\x75\x69\162\145\144"], self::kmqmeaywmyiqqkqw => ["\143\157\154" => "\x6d\144\x2d\66\x20\x6c\147\55\x33", "\164\x79\x70\x65" => "\x73\145\x6c\x65\143\164\x2d\160\157\163\x74", "\151\164\145\155\x73" => [self::oguseymmyyoyaako], "\x61\163\55\155\x75\154\164\151\x70\x6c\x65"], self::PRODUCT_CATS => ["\143\x6f\x6c" => "\155\x64\x2d\66\x20\x6c\x67\x2d\63", "\x74\x79\160\x65" => "\x73\x65\154\145\143\164\x2d\164\145\x72\x6d", "\x69\x74\x65\x6d\163" => [self::PRODUCT_CAT], "\141\163\55\155\165\154\x74\x69\x70\x6c\145"], self::ucoiewcoucauqwko => ["\164\x79\160\145" => "\145\x64\x69\x74\157\x72", "\162\x6f\x77\163" => 5, "\144\151\163\x61\x62\x6c\x65\55\155\145\144\151\x61"], self::eqkeooqcsscoggia => ["\x74\171\x70\145" => "\145\x64\151\164\x6f\162", "\x72\x6f\167\163" => 5, "\x64\x69\163\x61\x62\x6c\x65\x2d\x6d\x65\144\151\x61"]]; } public function kmumcykykicieqsm($iakkeikwceeomgyq = null) { $mqsmouamogoaiocs = [self::ORIGIN_ANYWHERE => __("\x41\156\x79\x77\150\x65\162\145", PR__PKG__SALARY), self::ORIGIN_SHORTCODE => __("\123\150\x6f\162\x74\x63\157\144\x65", PR__PKG__SALARY)]; return ManipulateArray::get($mqsmouamogoaiocs, $iakkeikwceeomgyq, $mqsmouamogoaiocs); } public function sykiqoisiaisskgs($mgkceomocowocqyo = self::uwycywkimsycqwcy, $mwuwcsieauaqecae = null) { $kgcswwyywoscuqqs = Setting::sykiqoisiaisskgs($mgkceomocowocqyo); return ManipulateArray::get($kgcswwyywoscuqqs, $mwuwcsieauaqecae, $kgcswwyywoscuqqs); } public function myseugoqckwooqmc() : array { return [self::METHOD_CONSTANT => __("\x43\157\x6e\163\164\141\x6e\164\x20\122\x61\x74\145", PR__PKG__SALARY), self::METHOD_VARIABLE => __("\126\x61\x72\x69\141\x62\x6c\x65\x20\122\141\164\x65", PR__PKG__SALARY)]; } public function igiuaguowqkakmmc() : array { return [self::WITHDRAW_METHOD_MANUAL => __("\x4d\141\x6e\x75\x61\154", PR__PKG__SALARY), self::WITHDRAW_METHOD_AUTOMATIC => __("\x41\x75\164\157\155\141\x74\151\143", PR__PKG__SALARY)]; } public function caegsmcwokgyyqwk($ymmgciamciieaysq = null) { $scumyeasgcsssmko = [self::WITHDRAW_PERIOD_PER_WEEK => __("\x50\145\162\40\x57\145\145\153", PR__PKG__SALARY), self::WITHDRAW_PERIOD_PER_MONTH => __("\x50\145\162\40\x4d\x6f\156\x74\150", PR__PKG__SALARY), self::WITHDRAW_PERIOD_EACH_THREE_MONTH => __("\105\141\x63\150\x20\124\x68\162\145\145\x20\x4d\x6f\156\164\x68", PR__PKG__SALARY), self::WITHDRAW_PERIOD_EACH_SIX_MONTH => __("\x45\x61\143\150\40\x53\x69\170\40\x4d\x6f\x6e\x74\150", PR__PKG__SALARY), self::WITHDRAW_PERIOD_PER_YEAR => __("\x50\x65\x72\x20\x59\x65\x61\162", PR__PKG__SALARY)]; return ManipulateArray::get($scumyeasgcsssmko, $ymmgciamciieaysq, $scumyeasgcsssmko); } public function ewkwkeqmcsiugeem($sqeykgyoooqysmca = null) { $qgeeqyucwycemwmo = [self::ORDER_THRESHOLD_TYPE_NONE => __("\x57\151\164\150\x6f\x75\x74\x20\124\x68\x72\x65\x73\x68\x6f\154\144", PR__PKG__SALARY), self::ORDER_THRESHOLD_TYPE_NUMERICAL => __("\116\x75\155\x65\162\x69\143\141\154", PR__PKG__SALARY), self::ORDER_THRESHOLD_TYPE_MONETARY => __("\x4d\157\156\145\164\x61\162\x79", PR__PKG__SALARY)]; return ManipulateArray::get($qgeeqyucwycemwmo, $sqeykgyoooqysmca, $qgeeqyucwycemwmo); } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::eqieykacgqwskmag: $kcugcsqiuqaomqom = $this->qogaqkcsogcqiaic($mksyucucyswaukig, $qgoqiacsiccwoawi, []); $oeucsuyqysaciasy = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::eyqgmoumkowegyse); $gaeqamemwmwsyukm = 0; $wasugiwwkeuoiquw = ''; if ($kcugcsqiuqaomqom) { goto suqceasgacskcmkc; } if (!$oeucsuyqysaciasy) { goto oeocukauoyosicso; } $wasugiwwkeuoiquw = __("\x42\141\163\x65\40\x6f\x6e\x20\x72\157\x6c\x65", PR__PKG__SALARY); $gaeqamemwmwsyukm = ManipulateArray::qamwegcyimgcqksw(count_users(), "\x61\166\x61\x69\x6c\137\x72\x6f\154\145\163\x2e{$oeucsuyqysaciasy}", []); oeocukauoyosicso: goto yykqaowwsqgqysmq; suqceasgacskcmkc: $wasugiwwkeuoiquw = __("\x42\x61\163\x65\x20\157\x6e\40\x75\x73\x65\x72\x73\40\x69\144", PR__PKG__SALARY); $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie); yykqaowwsqgqysmq: $eqgoocgaqwqcimie = sprintf("\45\163\54\x20\x25\163", sprintf(__("\x49\156\143\x6c\x75\144\x65\x20\45\x73\40\165\x73\145\162\163", PR__PKG__SALARY), $this->msywmyaoqmaegsuy($gaeqamemwmwsyukm)), $wasugiwwkeuoiquw); goto wkwamkgkwykeqkec; case self::METHOD_VALUE: $qgciuiagkkguykgs = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::kkeogqiyysoyuemk); if ($qgciuiagkkguykgs === self::METHOD_CONSTANT) { goto kwiggogcgciwuwqk; } $eqgoocgaqwqcimie = $this->msywmyaoqmaegsuy("{$eqgoocgaqwqcimie}\45"); goto uckewycoogsogwiy; kwiggogcgciwuwqk: $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); uckewycoogsogwiy: goto wkwamkgkwykeqkec; case self::kkeogqiyysoyuemk: $eqgoocgaqwqcimie = ManipulateArray::get($this->myseugoqckwooqmc(), $eqgoocgaqwqcimie); goto wkwamkgkwykeqkec; case self::ORDER_THRESHOLD_TYPE: $eqgoocgaqwqcimie = $this->ewkwkeqmcsiugeem($eqgoocgaqwqcimie); goto wkwamkgkwykeqkec; case self::ORDER_THRESHOLD_MIN: case self::ORDER_THRESHOLD_MAX: if ($eqgoocgaqwqcimie) { goto gswcoeiisamakwii; } $eqgoocgaqwqcimie = __("\116\x6f\x20\124\x68\162\145\x73\x68\157\x6c\x64", PR__PKG__SALARY); goto yuimwyoywaiiqacs; gswcoeiisamakwii: $qgciuiagkkguykgs = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::ORDER_THRESHOLD_TYPE); if ($qgciuiagkkguykgs === self::ORDER_THRESHOLD_TYPE_MONETARY) { goto ikuuiauwouuqawuw; } $eqgoocgaqwqcimie = sprintf(__("\45\x73\x20\116\165\155\142\145\x72", PR__PKG__SALARY), $this->msywmyaoqmaegsuy($eqgoocgaqwqcimie)); goto yoqakewookqoqacm; ikuuiauwouuqawuw: $eqgoocgaqwqcimie = ManipulateWoocommerce::mcgaskyiamgqmqgu($eqgoocgaqwqcimie); yoqakewookqoqacm: yuimwyoywaiiqacs: goto wkwamkgkwykeqkec; case self::igecewwoemccgwsq: $eqgoocgaqwqcimie = ManipulateArray::get($this->kmumcykykicieqsm(), $eqgoocgaqwqcimie); goto wkwamkgkwykeqkec; case self::WITHDRAW_METHOD: $eqgoocgaqwqcimie = ManipulateArray::get($this->igiuaguowqkakmmc(), $eqgoocgaqwqcimie); $ymmgciamciieaysq = ManipulateArray::get($mksyucucyswaukig, self::WITHDRAW_PERIOD); if (!$ymmgciamciieaysq) { goto ocywegekakimmwcq; } $ymmgciamciieaysq = $this->caegsmcwokgyyqwk($ymmgciamciieaysq); $eqgoocgaqwqcimie .= sprintf("\74\144\x69\x76\x3e\45\x73\x3a\40\45\163\74\x2f\144\151\x76\x3e", __("\127\151\164\x68\144\162\141\x77\x20\120\x65\162\151\x6f\144", PR__PKG__SALARY), $ymmgciamciieaysq); ocywegekakimmwcq: goto wkwamkgkwykeqkec; case self::kmqmeaywmyiqqkqw: $oksqskmgoqiqciis = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::kmqmeaywmyiqqkqw, []); $eyscsimwcyaqakqg = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::PRODUCT_CATS, []); if (!$this->wkcuasmkgoscaiay()) { goto mscgewkcqcoowweg; } if (!$oksqskmgoqiqciis) { goto ikqeeaysmqgcgawq; } ikqeeaysmqgcgawq: goto suqcsgaosywaauuu; mscgewkcqcoowweg: $wamcomkuwysqgwgk = "\45\x73\x20\45\163"; $oammesyieqmwuwyi = []; if (!$oksqskmgoqiqciis) { goto esikeyqyuikmaiek; } $meqocwsecsywiiqs = __("\120\162\157\144\165\143\164", PR__PKG__SALARY); if (($gaeqamemwmwsyukm = count($oksqskmgoqiqciis)) > 1) { goto emqswoaawgeyosmi; } $oammesyieqmwuwyi[] = sprintf($wamcomkuwysqgwgk, $meqocwsecsywiiqs, $this->dekewcqgacukskeq($oksqskmgoqiqciis)); goto iwsmmkqaoksmocok; emqswoaawgeyosmi: $oammesyieqmwuwyi[] = sprintf($wamcomkuwysqgwgk, $this->msywmyaoqmaegsuy($gaeqamemwmwsyukm), $meqocwsecsywiiqs); iwsmmkqaoksmocok: esikeyqyuikmaiek: if (!$eyscsimwcyaqakqg) { goto esaqcqqwuussiiwo; } $meqocwsecsywiiqs = __("\103\141\x74\145\x67\157\x72\171", PR__PKG__SALARY); if (($gaeqamemwmwsyukm = count($eyscsimwcyaqakqg)) > 1) { goto okkmcocqokkskasy; } $oammesyieqmwuwyi[] = sprintf($wamcomkuwysqgwgk, $meqocwsecsywiiqs, $this->swwqouewemsmsyui($eyscsimwcyaqakqg)); goto qiiigwkqeoewsuwm; okkmcocqokkskasy: $oammesyieqmwuwyi[] = sprintf($wamcomkuwysqgwgk, $this->msywmyaoqmaegsuy($gaeqamemwmwsyukm), $meqocwsecsywiiqs); qiiigwkqeoewsuwm: esaqcqqwuussiiwo: $eqgoocgaqwqcimie = sprintf(__("\111\x6e\x63\154\x75\x64\x65\40\x25\x73", PR__PKG__SALARY), ManipulateArray::ieiaauacewimoeei($oammesyieqmwuwyi, __("\46\x6e\142\163\160\73\x61\x6e\x64\x26\156\x62\x73\x70\73", PR__PKG__SALARY))); suqcsgaosywaauuu: goto wkwamkgkwykeqkec; } oimkeqocuguqqsqk: wkwamkgkwykeqkec: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function dekewcqgacukskeq($oksqskmgoqiqciis = []) : string { $suuagcecoyuweoqk = []; foreach ($oksqskmgoqiqciis as $product) { $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product) { goto qsgqwyqaqiowkmco; } $suuagcecoyuweoqk[] = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x63\x6c\x61\x73\163" => '', "\150\x72\145\146" => $product->get_permalink()], $product->get_title()); qsgqwyqaqiowkmco: gsygwgsiawgmqiyi: } wwukgaquuyoissgy: return ManipulateArray::ieiaauacewimoeei($suuagcecoyuweoqk); } public function swwqouewemsmsyui($eyscsimwcyaqakqg = []) : string { $suuagcecoyuweoqk = []; foreach ($eyscsimwcyaqakqg as $guwumyyyakswawas) { $guwumyyyakswawas = ManipulateTerm::get($guwumyyyakswawas); if (!$guwumyyyakswawas) { goto eucqomyqykgoiuge; } $suuagcecoyuweoqk[] = ManipulateHTML::uuccukgasskgimsq("\141", ["\143\154\x61\x73\x73" => '', "\150\162\x65\x66" => ManipulateTerm::qmgcisuuikgmqcsu($guwumyyyakswawas)], ManipulateTerm::qcgakseyaikigqco($guwumyyyakswawas)); eucqomyqykgoiuge: qikaewekoecykeou: } yqagomygmeoecwey: return ManipulateArray::ieiaauacewimoeei($suuagcecoyuweoqk); } public function sewmuymswawyuiki($mkucggyaiaukqoce, $uoomaookgsyciacm = []) : array { $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce); $uagwmwoawiwkycao = ManipulateUser::yksywgmucwascgwk($mkucggyaiaukqoce, true); $gyoyimqimcqseiyg[self::eqieykacgqwskmag] = [self::ciyoccqkiamemcmm => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim]; if (!$uagwmwoawiwkycao) { goto sqyokemumceysegy; } foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) { $gyoyimqimcqseiyg[] = [self::ciyoccqkiamemcmm => $oeucsuyqysaciasy, self::meisqwykgaymauka => self::eyqgmoumkowegyse, self::cwsguekoagqkaesm => self::ieiyckasqmcyekim]; aiccyaswigkaycqk: } usymasgsyqgsuocg: sqyokemumceysegy: $uoomaookgsyciacm[] = [self::iowgsqgiaamyuswi => $gyoyimqimcqseiyg]; return $uoomaookgsyciacm; } public function coyaqyocmqmmgeew($mkucggyaiaukqoce) : array { $ywqqikcsamcaycgm = []; if (!$mkucggyaiaukqoce) { goto zayqqeqgcwkekwws; } $uoomaookgsyciacm = $this->sewmuymswawyuiki($mkucggyaiaukqoce); if (!$uoomaookgsyciacm) { goto oqousikwiiqagoyw; } $ywqqikcsamcaycgm = $this->cwkywyqksyucoyia($uoomaookgsyciacm); oqousikwiiqagoyw: zayqqeqgcwkekwws: return $ywqqikcsamcaycgm; } public function kkkiwemgugaauowc($mkucggyaiaukqoce, $ywmkwiwkosakssii = []) : array { $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($this->sewmuymswawyuiki($mkucggyaiaukqoce)); return $this->aeggeuqycwawueqy($siykeiywomwwuoiw, $ywmkwiwkosakssii); } public function kyqcoyaauiwgieci($miowmmgaiagcuyoo, $iakkeikwceeomgyq = self::ORIGIN_ANYWHERE) : ?array { $uammqaqiwgcmeska = null; try { $gouqcwikiiygyasc = ManipulateUser::mwikyscisascoeea($miowmmgaiagcuyoo); $miowmmgaiagcuyoo = ManipulateUser::get($miowmmgaiagcuyoo, true); if (!$miowmmgaiagcuyoo) { goto uoeasoimegouymka; } $ikacucssqkoyacym = null; $iwkcokiewqkockea = null; $ywqqikcsamcaycgm = $this->kasiqqyyaswsgics(); foreach ($ywqqikcsamcaycgm as $xssuewsokckmigqk) { if (!$ikacucssqkoyacym || !$iwkcokiewqkockea) { goto oocuemosmeeekgas; } goto aueaceeyommgkicu; goto qkcsykuocwuyaice; oocuemosmeeekgas: $kcugcsqiuqaomqom = (array) $this->qogaqkcsogcqiaic($xssuewsokckmigqk, self::eqieykacgqwskmag, []); $uagwmwoawiwkycao = (array) $this->qogaqkcsogcqiaic($xssuewsokckmigqk, self::eyqgmoumkowegyse, []); if (!(!$iakkeikwceeomgyq || $iakkeikwceeomgyq === $this->qogaqkcsogcqiaic($xssuewsokckmigqk, self::igecewwoemccgwsq))) { goto agkmiayuawacakau; } if (!in_array($gouqcwikiiygyasc, $kcugcsqiuqaomqom)) { goto egmayaiikwsskgmy; } $uammqaqiwgcmeska = $xssuewsokckmigqk; goto aueaceeyommgkicu; egmayaiikwsskgmy: foreach ($miowmmgaiagcuyoo->roles as $oeucsuyqysaciasy) { if (!in_array($oeucsuyqysaciasy, $uagwmwoawiwkycao)) { goto sguskaeaaqcagqgc; } $ikacucssqkoyacym = $xssuewsokckmigqk; goto ucuoeymyqeokgsya; sguskaeaaqcagqgc: yuuyikiacmmueosu: } ucuoeymyqeokgsya: agkmiayuawacakau: if (!(!$uammqaqiwgcmeska && $ikacucssqkoyacym)) { goto syuaummumssgwwee; } $uammqaqiwgcmeska = $ikacucssqkoyacym; syuaummumssgwwee: qkcsykuocwuyaice: mysueeoswqgccmui: } aueaceeyommgkicu: uoeasoimegouymka: } catch (Exception $wgaoewqkwgomoaai) { $uammqaqiwgcmeska = null; } return $uammqaqiwgcmeska; } }
