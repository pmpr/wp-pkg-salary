<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62b886ce39c50             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\ListTable; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Product; use Exception; use WP_Query; class ProductListTable extends WPListTable { const okqyysagcagmigei = "\164\157\x74\141\x6c\x5f\x73\x61\x6c\x65"; const eocsmweuyayasmma = "\171\x6f\x75\x72\x5f\145\x61\162\156\x73"; protected ?Income $income = null; public function __construct() { $this->income = Income::symcgieuakksimmu(); parent::__construct(["\x70\154\x75\162\x61\154" => __("\120\x72\157\144\165\143\164\x73", PR__MDL__SALARY), "\163\x69\x6e\147\x75\154\x61\162" => __("\120\x72\x6f\144\x75\143\164", PR__MDL__SALARY), "\141\x6a\141\x78" => false]); } public function uawiokcagaqwmyaa() : ?Income { return $this->income; } public function kugsomueokogcawo() { $this->prepare_items(); parent::kugsomueokogcawo(); } public function prepare_items() { $wkkweuacukumqmya = $this->get_columns(); $qqkyekmackggcick = []; $osmkwgikieoyykwg = []; $weyoqgcesqgeusiu = ManipulateSetting::omkaowmygoqwsywq(); $gqgemcmoicmgaqie = new WP_Query(["\155\x65\164\141\137\153\x65\x79" => self::iockmgiyoygcswog, "\x70\x6f\163\164\137\x74\x79\160\145" => self::oguseymmyyoyaako, "\155\x65\164\141\137\x76\141\154\165\145" => ManipulateUser::mwikyscisascoeea(), "\x70\157\x73\164\137\x73\164\141\x74\165\163" => [self::wmmucsiyiyusmssm], "\160\157\x73\164\x73\x5f\x70\145\162\137\160\x61\147\x65" => $weyoqgcesqgeusiu]); $this->items = $gqgemcmoicmgaqie->get_posts(); $this->set_pagination_args(["\x70\145\x72\x5f\160\x61\147\145" => $weyoqgcesqgeusiu, "\164\x6f\164\141\x6c\x5f\x69\164\145\155\x73" => $gqgemcmoicmgaqie->found_posts]); $this->_column_headers = [$wkkweuacukumqmya, $qqkyekmackggcick, $osmkwgikieoyykwg]; } public function no_items() { _e("\116\157\x20\160\162\157\x64\165\143\164\x73\40\x66\157\x75\156\x64\56", PR__MDL__SALARY); } public function get_columns() : array { return [self::NAME => __("\x4e\x61\x6d\145", PR__MDL__SALARY), self::okqyysagcagmigei => __("\124\x6f\x74\x61\154\40\123\x61\154\145", PR__MDL__SALARY), self::eocsmweuyayasmma => __("\x59\157\165\162\x20\105\141\x72\156\163", PR__MDL__SALARY)]; } public function column_name($product) : string { return ManipulateHTML::yuawgssgauywkiia(ManipulateHTML::ciuuiyckmsygceis(ManipulatePost::qcgakseyaikigqco($product)), ManipulatePost::ycqquoiyyuesegsy($product), ["\x63\x6c\x61\x73\163" => "\x74\145\170\164\55\144\145\143\157\x72\x61\164\151\157\x6e\55\156\x6f\x6e\x65"]); } public function column_total_sale($product) : string { $uuwmqqqiwksuaise = count($this->omecwkegqsucwsom($product, self::gouqcwikiiygyasc)); return sprintf(__("\x25\163\40\x4e\x75\155\x62\145\162", PR__MDL__SALARY), $this->msywmyaoqmaegsuy($uuwmqqqiwksuaise)); } public function column_your_earns($product) : string { $ckwwgsuyuwiaewuw = 0; try { $cseccogesusskess = $this->omecwkegqsucwsom($product); if (!$cseccogesusskess) { goto osuscoaaomwcqkew; } $ckwwgsuyuwiaewuw = $this->uawiokcagaqwmyaa()->cseaisoguykosgem($cseccogesusskess); osuscoaaomwcqkew: } catch (Exception $wgaoewqkwgomoaai) { } return ManipulateWoocommerce::mcgaskyiamgqmqgu($ckwwgsuyuwiaewuw); } public function omecwkegqsucwsom($product, $wkkweuacukumqmya = ["\x2a"]) : array { return $this->uawiokcagaqwmyaa()->cwkywyqksyucoyia([self::iockmgiyoygcswog => ManipulateUser::mwikyscisascoeea(), self::oguseymmyyoyaako => ManipulateUser::mwikyscisascoeea($product), Income::eiiuyoyiygsickwe => [self::ciyoccqkiamemcmm => [Income::ycmomqymkecsysum, Income::youiiwsayswmyuum], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]], $wkkweuacukumqmya); } }
