<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec9b93467             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\ListTable; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Module\Salary\Model\Income; use Exception; use WP_Query; class ProductListTable extends WPListTable { const okqyysagcagmigei = "\x74\x6f\164\141\x6c\x5f\x73\141\x6c\145"; const eocsmweuyayasmma = "\x79\157\165\162\137\145\x61\162\156\x73"; protected ?Income $income = null; public function __construct() { $this->income = Income::symcgieuakksimmu(); parent::__construct(["\x70\154\x75\x72\141\154" => __("\120\162\157\144\165\x63\x74\163", PR__MDL__SALARY), "\x73\151\156\x67\165\154\141\162" => __("\x50\x72\157\144\165\x63\164", PR__MDL__SALARY), "\141\x6a\x61\x78" => false]); } public function uawiokcagaqwmyaa() : ?Income { return $this->income; } public function kugsomueokogcawo() { $this->prepare_items(); parent::kugsomueokogcawo(); } public function prepare_items() { $wkkweuacukumqmya = $this->get_columns(); $qqkyekmackggcick = []; $osmkwgikieoyykwg = []; $weyoqgcesqgeusiu = $this->caokeucsksukesyo()->eiwcuqigayigimak()->qqqooiyuyqmyuwqi(); $gqgemcmoicmgaqie = new WP_Query([self::osocaqqumyuooqyo => self::iockmgiyoygcswog, self::uouymeyqasaeckso => self::oguseymmyyoyaako, self::iwmgegikocuwggua => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(), self::gikuasuikwemyqoq => [self::wmmucsiyiyusmssm], self::goqgcigmiawyauai => $weyoqgcesqgeusiu]); $this->items = $gqgemcmoicmgaqie->get_posts(); $this->set_pagination_args([self::ausqeuugegoygouq => $weyoqgcesqgeusiu, "\x74\x6f\x74\x61\x6c\137\151\x74\x65\155\163" => $gqgemcmoicmgaqie->found_posts]); $this->_column_headers = [$wkkweuacukumqmya, $qqkyekmackggcick, $osmkwgikieoyykwg]; } public function no_items() { _e("\x4e\157\x20\x70\x72\157\x64\165\143\x74\163\x20\x66\x6f\165\156\x64\x2e", PR__MDL__SALARY); } public function get_columns() : array { return [self::NAME => __("\116\x61\x6d\145", PR__MDL__SALARY), self::okqyysagcagmigei => __("\124\157\x74\141\154\x20\x53\141\154\145", PR__MDL__SALARY), self::eocsmweuyayasmma => __("\x59\157\x75\x72\40\x45\141\x72\x6e\163", PR__MDL__SALARY)]; } public function column_name($product) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); return $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->ciuuiyckmsygceis($seumokooiykcomco->qcgakseyaikigqco($product)), $seumokooiykcomco->ycqquoiyyuesegsy($product), ["\x63\x6c\141\163\x73" => "\164\145\x78\164\55\x64\145\x63\157\162\x61\164\x69\x6f\x6e\x2d\156\157\x6e\x65"]); } public function column_total_sale($product) : string { $uuwmqqqiwksuaise = count($this->omecwkegqsucwsom($product, self::gouqcwikiiygyasc)); return sprintf(__("\45\x73\40\x4e\165\x6d\x62\145\162", PR__MDL__SALARY), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($uuwmqqqiwksuaise)); } public function column_your_earns($product) : string { $ckwwgsuyuwiaewuw = 0; try { $cseccogesusskess = $this->omecwkegqsucwsom($product); if (!$cseccogesusskess) { goto kosaqwikueyksqmw; } $ckwwgsuyuwiaewuw = $this->uawiokcagaqwmyaa()->cseaisoguykosgem($cseccogesusskess); kosaqwikueyksqmw: } catch (Exception $wgaoewqkwgomoaai) { } return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($ckwwgsuyuwiaewuw); } public function omecwkegqsucwsom($product, $wkkweuacukumqmya = ["\52"]) : array { return $this->uawiokcagaqwmyaa()->cwkywyqksyucoyia([self::iockmgiyoygcswog => $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu(), self::oguseymmyyoyaako => $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product), Income::eiiuyoyiygsickwe => [self::ciyoccqkiamemcmm => [Income::ycmomqymkecsysum, Income::youiiwsayswmyuum], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]], $wkkweuacukumqmya); } }
