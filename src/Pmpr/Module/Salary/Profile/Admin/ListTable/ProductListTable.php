<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b74fa6330             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\ListTable; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Module\Salary\Model\Income; use Exception; use WP_Query; class ProductListTable extends WPListTable { const okqyysagcagmigei = "\164\x6f\x74\x61\x6c\x5f\x73\x61\x6c\145"; const eocsmweuyayasmma = "\x79\157\165\x72\137\145\141\x72\156\x73"; protected ?Income $income = null; public function __construct() { $this->income = Income::symcgieuakksimmu(); parent::__construct(["\160\154\165\x72\x61\x6c" => __("\120\x72\x6f\x64\165\143\164\163", PR__MDL__SALARY), "\x73\x69\x6e\147\165\x6c\x61\x72" => __("\x50\162\157\x64\165\143\164", PR__MDL__SALARY), "\141\152\x61\170" => false]); } public function uawiokcagaqwmyaa() : ?Income { return $this->income; } public function kugsomueokogcawo() { $this->prepare_items(); parent::kugsomueokogcawo(); } public function prepare_items() { $wkkweuacukumqmya = $this->get_columns(); $qqkyekmackggcick = []; $osmkwgikieoyykwg = []; $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->qqqooiyuyqmyuwqi(); $gqgemcmoicmgaqie = new WP_Query([Constants::osocaqqumyuooqyo => Constants::iockmgiyoygcswog, Constants::uouymeyqasaeckso => Constants::oguseymmyyoyaako, Constants::iwmgegikocuwggua => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(), Constants::gikuasuikwemyqoq => [Constants::wmmucsiyiyusmssm], Constants::goqgcigmiawyauai => $weyoqgcesqgeusiu]); $this->items = $gqgemcmoicmgaqie->get_posts(); $this->set_pagination_args([Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu, "\164\157\x74\141\154\137\x69\x74\145\x6d\163" => $gqgemcmoicmgaqie->found_posts]); $this->_column_headers = [$wkkweuacukumqmya, $qqkyekmackggcick, $osmkwgikieoyykwg]; } public function no_items() { _e("\116\157\40\x70\162\157\x64\165\x63\164\x73\x20\x66\x6f\165\x6e\x64\x2e", PR__MDL__SALARY); } public function get_columns() : array { return [Constants::NAME => __("\x4e\141\x6d\145", PR__MDL__SALARY), self::okqyysagcagmigei => __("\124\157\164\x61\154\40\123\141\154\145", PR__MDL__SALARY), self::eocsmweuyayasmma => __("\131\x6f\165\x72\x20\105\141\162\x6e\163", PR__MDL__SALARY)]; } public function column_name($product) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); return $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->ciuuiyckmsygceis($seumokooiykcomco->qcgakseyaikigqco($product)), $seumokooiykcomco->ycqquoiyyuesegsy($product), ["\x63\154\x61\x73\x73" => "\x74\145\170\164\55\144\145\143\x6f\x72\141\x74\151\x6f\156\x2d\156\x6f\x6e\x65"]); } public function column_total_sale($product) : string { $uuwmqqqiwksuaise = count($this->omecwkegqsucwsom($product, Constants::gouqcwikiiygyasc)); return sprintf(__("\x25\163\40\116\x75\x6d\x62\145\162", PR__MDL__SALARY), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($uuwmqqqiwksuaise)); } public function column_your_earns($product) : string { $ckwwgsuyuwiaewuw = 0; try { $cseccogesusskess = $this->omecwkegqsucwsom($product); if ($cseccogesusskess) { $ckwwgsuyuwiaewuw = $this->uawiokcagaqwmyaa()->cseaisoguykosgem($cseccogesusskess); } } catch (Exception $wgaoewqkwgomoaai) { } return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($ckwwgsuyuwiaewuw); } public function omecwkegqsucwsom($product, $wkkweuacukumqmya = ["\52"]) : array { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); return $this->uawiokcagaqwmyaa()->iekyeyicoyyawomk()->cieaqygkucwoqwke([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::iockmgiyoygcswog, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu()), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::oguseymmyyoyaako, $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product)), $eqwoegegiamegqsm->megqywqeuquawkim(Income::eiiuyoyiygsickwe, [Income::ycmomqymkecsysum, Income::youiiwsayswmyuum])], $wkkweuacukumqmya); } }
