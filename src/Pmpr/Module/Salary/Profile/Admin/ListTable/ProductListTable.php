<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ffe8558c9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\ListTable; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Module\Salary\Model\Income; use Exception; use WP_Query; class ProductListTable extends WPListTable { const okqyysagcagmigei = "\164\x6f\x74\141\x6c\x5f\163\x61\x6c\x65"; const eocsmweuyayasmma = "\171\157\165\162\x5f\x65\x61\x72\x6e\x73"; protected ?Income $income = null; public function __construct() { $this->income = Income::symcgieuakksimmu(); parent::__construct(["\x70\x6c\x75\x72\x61\x6c" => __("\120\x72\157\x64\x75\x63\164\x73", PR__MDL__SALARY), "\163\151\156\x67\165\154\x61\162" => __("\120\x72\x6f\144\165\x63\164", PR__MDL__SALARY), "\x61\x6a\x61\170" => false]); } public function uawiokcagaqwmyaa() : ?Income { return $this->income; } public function kugsomueokogcawo() { $this->prepare_items(); parent::kugsomueokogcawo(); } public function prepare_items() { $wkkweuacukumqmya = $this->get_columns(); $qqkyekmackggcick = []; $osmkwgikieoyykwg = []; $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->qqqooiyuyqmyuwqi(); $gqgemcmoicmgaqie = new WP_Query([Constants::osocaqqumyuooqyo => Constants::iockmgiyoygcswog, Constants::uouymeyqasaeckso => Constants::oguseymmyyoyaako, Constants::iwmgegikocuwggua => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(), Constants::gikuasuikwemyqoq => [Constants::wmmucsiyiyusmssm], Constants::goqgcigmiawyauai => $weyoqgcesqgeusiu]); $this->items = $gqgemcmoicmgaqie->get_posts(); $this->set_pagination_args([Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, "\164\157\x74\x61\154\x5f\x69\x74\145\x6d\163" => $gqgemcmoicmgaqie->found_posts]); $this->_column_headers = [$wkkweuacukumqmya, $qqkyekmackggcick, $osmkwgikieoyykwg]; } public function no_items() { _e("\x4e\157\40\x70\x72\x6f\144\165\x63\164\x73\x20\146\157\x75\156\x64\x2e", PR__MDL__SALARY); } public function get_columns() : array { return [Constants::NAME => __("\116\141\155\145", PR__MDL__SALARY), self::okqyysagcagmigei => __("\x54\x6f\164\141\x6c\x20\x53\x61\154\145", PR__MDL__SALARY), self::eocsmweuyayasmma => __("\131\157\165\x72\x20\x45\141\162\156\163", PR__MDL__SALARY)]; } public function column_name($product) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); return $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->ciuuiyckmsygceis($seumokooiykcomco->qcgakseyaikigqco($product)), $seumokooiykcomco->ycqquoiyyuesegsy($product), ["\x63\154\x61\163\x73" => "\164\x65\x78\x74\55\x64\x65\143\x6f\x72\141\x74\x69\x6f\156\x2d\156\x6f\x6e\x65"]); } public function column_total_sale($product) : string { $uuwmqqqiwksuaise = count($this->omecwkegqsucwsom($product, Constants::gouqcwikiiygyasc)); return sprintf(__("\45\163\40\x4e\x75\155\142\x65\162", PR__MDL__SALARY), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($uuwmqqqiwksuaise)); } public function column_your_earns($product) : string { $ckwwgsuyuwiaewuw = 0; try { $cseccogesusskess = $this->omecwkegqsucwsom($product); if ($cseccogesusskess) { $ckwwgsuyuwiaewuw = $this->uawiokcagaqwmyaa()->cseaisoguykosgem($cseccogesusskess); } } catch (Exception $wgaoewqkwgomoaai) { } return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($ckwwgsuyuwiaewuw); } public function omecwkegqsucwsom($product, $wkkweuacukumqmya = ["\52"]) : array { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); return $this->uawiokcagaqwmyaa()->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::yauicucwkgqyygas, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu()), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::oguseymmyyoyaako, $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product)), $eqwoegegiamegqsm->megqywqeuquawkim(Income::eiiuyoyiygsickwe, [Income::ycmomqymkecsysum, Income::youiiwsayswmyuum])], $wkkweuacukumqmya); } }
