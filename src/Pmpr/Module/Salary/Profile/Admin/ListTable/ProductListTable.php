<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62bb65dcd38fe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\ListTable; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Module\Salary\Model\Income; use Pmpr\Module\Salary\Product; use Exception; use WP_Query; class ProductListTable extends WPListTable { const okqyysagcagmigei = "\x74\157\x74\141\154\x5f\x73\141\x6c\145"; const eocsmweuyayasmma = "\171\x6f\165\162\137\145\x61\162\x6e\x73"; protected ?Income $income = null; public function __construct() { $this->income = Income::symcgieuakksimmu(); parent::__construct(["\160\x6c\165\162\x61\x6c" => __("\120\x72\x6f\144\165\x63\164\163", PR__MDL__SALARY), "\163\151\156\147\165\154\141\x72" => __("\120\162\x6f\x64\x75\x63\164", PR__MDL__SALARY), "\x61\152\141\x78" => false]); } public function uawiokcagaqwmyaa() : ?Income { return $this->income; } public function kugsomueokogcawo() { $this->prepare_items(); parent::kugsomueokogcawo(); } public function prepare_items() { $wkkweuacukumqmya = $this->get_columns(); $qqkyekmackggcick = []; $osmkwgikieoyykwg = []; $weyoqgcesqgeusiu = ManipulateSetting::omkaowmygoqwsywq(); $gqgemcmoicmgaqie = new WP_Query(["\x6d\145\x74\x61\137\x6b\145\171" => self::iockmgiyoygcswog, "\x70\x6f\163\164\137\164\171\160\x65" => self::oguseymmyyoyaako, "\x6d\145\x74\x61\137\166\x61\x6c\x75\145" => ManipulateUser::mwikyscisascoeea(), "\x70\x6f\163\164\x5f\163\164\x61\164\x75\163" => [self::wmmucsiyiyusmssm], "\x70\x6f\163\x74\163\x5f\160\x65\x72\137\160\141\147\x65" => $weyoqgcesqgeusiu]); $this->items = $gqgemcmoicmgaqie->get_posts(); $this->set_pagination_args(["\x70\145\x72\137\160\141\147\145" => $weyoqgcesqgeusiu, "\164\x6f\164\x61\x6c\x5f\x69\164\x65\x6d\163" => $gqgemcmoicmgaqie->found_posts]); $this->_column_headers = [$wkkweuacukumqmya, $qqkyekmackggcick, $osmkwgikieoyykwg]; } public function no_items() { _e("\x4e\x6f\x20\160\162\x6f\x64\x75\143\164\163\40\x66\x6f\x75\156\x64\x2e", PR__MDL__SALARY); } public function get_columns() : array { return [self::NAME => __("\x4e\x61\155\x65", PR__MDL__SALARY), self::okqyysagcagmigei => __("\124\x6f\x74\141\x6c\40\123\x61\x6c\145", PR__MDL__SALARY), self::eocsmweuyayasmma => __("\x59\x6f\165\x72\40\x45\141\x72\156\163", PR__MDL__SALARY)]; } public function column_name($product) : string { return ManipulateHTML::yuawgssgauywkiia(ManipulateHTML::ciuuiyckmsygceis(ManipulatePost::qcgakseyaikigqco($product)), ManipulatePost::ycqquoiyyuesegsy($product), ["\x63\x6c\141\x73\163" => "\164\x65\x78\164\x2d\x64\x65\143\157\162\141\164\151\x6f\156\x2d\156\157\156\x65"]); } public function column_total_sale($product) : string { $uuwmqqqiwksuaise = count($this->omecwkegqsucwsom($product, self::gouqcwikiiygyasc)); return sprintf(__("\x25\x73\40\116\x75\155\142\x65\x72", PR__MDL__SALARY), $this->msywmyaoqmaegsuy($uuwmqqqiwksuaise)); } public function column_your_earns($product) : string { $ckwwgsuyuwiaewuw = 0; try { $cseccogesusskess = $this->omecwkegqsucwsom($product); if (!$cseccogesusskess) { goto osuscoaaomwcqkew; } $ckwwgsuyuwiaewuw = $this->uawiokcagaqwmyaa()->cseaisoguykosgem($cseccogesusskess); osuscoaaomwcqkew: } catch (Exception $wgaoewqkwgomoaai) { } return ManipulateWoocommerce::mcgaskyiamgqmqgu($ckwwgsuyuwiaewuw); } public function omecwkegqsucwsom($product, $wkkweuacukumqmya = ["\x2a"]) : array { return $this->uawiokcagaqwmyaa()->cwkywyqksyucoyia([self::iockmgiyoygcswog => ManipulateUser::mwikyscisascoeea(), self::oguseymmyyoyaako => ManipulateUser::mwikyscisascoeea($product), Income::eiiuyoyiygsickwe => [self::ciyoccqkiamemcmm => [Income::ycmomqymkecsysum, Income::youiiwsayswmyuum], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]], $wkkweuacukumqmya); } }
