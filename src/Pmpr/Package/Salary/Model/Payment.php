<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148f36b61d79             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Payment extends Common { const PAYOUT = "\160\141\171\x6f\x75\164"; const CREATOR = "\x63\x72\145\x61\164\x6f\162"; const WITHDRAW_ID = "\x77\151\164\150\144\162\x61\167\137\x69\144"; const ORIGIN_DESC = "\x6f\162\x69\x67\151\x6e\137\144\145\x73\x63"; const ORIGIN_BANK = "\157\x72\x69\x67\x69\x6e\137\142\x61\156\153"; const REFERENCE_ID = "\x72\x65\146\145\x72\x65\156\143\x65\137\x69\144"; const TRACKING_CODE = "\x74\x72\x61\x63\153\x69\x6e\147\137\143\x6f\144\x65"; const TRANS_DATETIME = "\164\162\141\x6e\x73\137\x64\x61\x74\145\164\151\x6d\145"; const ORIGIN_ACCOUNT = "\157\x72\151\147\151\x6e\137\x61\x63\143\x6f\x75\156\x74"; const DESTINATION_DESC = "\x64\x65\163\164\x69\x6e\x61\164\151\157\156\137\x64\145\x73\x63"; const STATUS_FAILED = "\x66\x61\x69\x6c\x65\x64"; const STATUS_SUCCESS = "\163\165\x63\143\x65\x73\163"; const TERMINAL_ATM = "\141\x74\155"; const TERMINAL_API = "\141\x70\151"; const TERMINAL_PAYA = "\160\x61\x79\141"; const TERMINAL_SANTA = "\163\x61\156\164\x61"; const TERMINAL_MOBILE_BANK = "\x6d\157\x62\151\154\x65\x5f\x62\141\x6e\x6b"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->guiaswksukmgageq(__("\x50\x61\171\x6d\145\156\164", PR__PKG__SALARY))->muuwuqssqkaieqge(__("\120\x61\x79\155\x65\x6e\x74\x73", PR__PKG__SALARY))->qemeyueyiwgsokuc(["\160\x6f\163\151\164\x69\x6f\156" => 4])->gemkqqguesukeocw(); } public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array { return parent::eucukwckumgiyyww([$this->ggiieomioscuigco(self::WITHDRAW_ID)->uwmyqckcyamwaiww(Withdraw::class)->wuuqgaekqeymecag()->gswweykyogmsyawy(__("\127\x69\x74\150\144\162\141\167", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::PAYOUT)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x50\141\171\x6f\x75\164", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::CREATOR)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\103\x72\145\x61\x74\x6f\162", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::TERMINAL)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x54\145\162\x6d\x69\x6e\x61\x6c", PR__PKG__SALARY)), $this->wyauigyyoceiaygw(self::TRANS_DATETIME)->gswweykyogmsyawy(__("\124\x72\x61\156\x73\141\x63\164\x69\157\x6e\40\104\x61\164\x65\x74\x69\155\145", PR__PKG__SALARY)), $this->ymuegqgyuagyucws(self::DESTINATION_DESC)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x44\x65\x73\164\151\x6e\141\164\151\x6f\156\x20\104\145\163\143\162\x69\160\x74\151\x6f\x6e", PR__PKG__SALARY)), $this->ymuegqgyuagyucws(self::ORIGIN_DESC)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\117\x72\151\x67\x69\156\x20\104\x65\x73\x63\x72\151\160\x74\x69\157\156", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::REFERENCE_ID)->acceqyqygswoecwe(100)->gswweykyogmsyawy(__("\x52\x65\146\145\162\145\156\x63\145\40\111\x44", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::TRACKING_CODE)->acceqyqygswoecwe(100)->gswweykyogmsyawy(__("\124\x72\x61\x63\153\x69\156\147\40\103\157\x64\x65", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::ORIGIN_BANK)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x4f\162\x69\x67\x69\x6e\40\102\141\156\x6b", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::ORIGIN_ACCOUNT)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x4f\162\x69\147\151\x6e\40\101\x63\143\x6f\165\x6e\164", PR__PKG__SALARY)), $this->qcyqgwuuymykkcke(self::STATUS)->acceqyqygswoecwe(50)->gswweykyogmsyawy(__("\x53\x74\x61\164\165\x73", PR__PKG__SALARY))]); } public function kssgsuewkcwgiksa() : array { return [self::STATUS => ["\143\157\154" => "\x6d\144\x2d\x36\40\154\x67\x2d\x33", "\x74\171\x70\145" => "\x62\x73\163\x65\154\x65\143\164", "\x6f\160\x74\x69\x6f\x6e\163" => $this->agausceiyceikeag(), "\x72\145\161\x75\151\x72\x65\x64"], self::TERMINAL => ["\x63\x6f\x6c" => "\x6d\x64\x2d\x36\40\154\x67\55\x33", "\164\171\160\x65" => "\142\163\163\145\154\x65\143\164", "\x6f\160\x74\151\x6f\156\163" => $this->yoiogykiyuooqcgi(), "\162\x65\x71\x75\151\x72\145\x64"], self::CREATOR => ["\164\171\x70\145" => "\150\151\x64\144\x65\156", "\x76\141\154\x75\145" => ManipulateUser::mwikyscisascoeea()], self::ORIGIN_DESC => ["\143\x6f\x6c" => "\x6d\x64\55\66", "\162\157\x77\x73" => 3, "\143\x6c\x61\163\x73" => "\167\55\x6d\x64\55\x31\x30\x30"], self::DESTINATION_DESC => ["\x63\157\154" => "\x6d\144\55\x36", "\x72\x6f\167\x73" => 3, "\143\x6c\x61\163\163" => "\x77\x2d\155\144\x2d\61\60\x30"]]; } public function agausceiyceikeag($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::STATUS_FAILED => __("\106\x61\151\154\x65\x64", PR__PKG__SALARY), self::STATUS_SUCCESS => __("\x53\x75\143\143\x65\163\163", PR__PKG__SALARY)]; return ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq, $oqseeekuqisekiwy); } public function yoiogykiyuooqcgi($gwwuygsskqcomoas = null) { $skseiqgiyyiuquuu = [self::TERMINAL_PAYA => __("\120\101\x59\x41", PR__PKG__SALARY), self::TERMINAL_SANTA => __("\x53\x41\x4e\124\x41", PR__PKG__SALARY), self::TERMINAL_MOBILE_BANK => __("\x4d\157\142\151\x6c\x65\40\102\x61\156\153", PR__PKG__SALARY), self::TERMINAL_ATM => __("\x41\124\x4d", PR__PKG__SALARY), self::TERMINAL_API => __("\x41\120\x49", PR__PKG__SALARY)]; return ManipulateArray::get($skseiqgiyyiuquuu, $gwwuygsskqcomoas, $skseiqgiyyiuquuu); } }
