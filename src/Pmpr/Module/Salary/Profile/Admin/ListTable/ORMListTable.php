<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62bb65dcd38fe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin\ListTable; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\ORM\DB\Builder; use Pmpr\Common\Foundation\ORM\View\ListTable; class ORMListTable extends ListTable { public function eeowuwkaomauqkai($siykeiywomwwuoiw = null) : ?Builder { return $this->mgogaykgkoogasim()->wkmkqaiwuqouweye(self::iockmgiyoygcswog, ManipulateUser::mwikyscisascoeea(), "\75", $siykeiywomwwuoiw); } public function qkeoieugywkooams() : ?Builder { $siykeiywomwwuoiw = parent::qkeoieugywkooams(); return $this->eeowuwkaomauqkai($siykeiywomwwuoiw); } public function before_pagination(?Builder $siykeiywomwwuoiw) : ?Builder { $siykeiywomwwuoiw = $this->eeowuwkaomauqkai($siykeiywomwwuoiw); return parent::before_pagination($siykeiywomwwuoiw); } public function get_bulk_actions() : array { return []; } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { return ''; } protected function kgewmaycsoykyaso($ccowyogiqwikkkie) { ManipulateArray::unset($ccowyogiqwikkkie, "\x64\x65\x6c\145\x74\145"); return $ccowyogiqwikkkie; } public function ewgmueueeycoikso($oammesyieqmwuwyi) : array { $wkkweuacukumqmya = []; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if (!$meywaqqsugaoeyys) { goto gqmewagyagamokok; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $swaaugcasqkysckc) { $meqocwsecsywiiqs = ''; if (is_numeric($momcykaoccoymeig)) { goto ussceseaimqywuiy; } $meqocwsecsywiiqs = $swaaugcasqkysckc; goto oyiuemaaykgkqqam; ussceseaimqywuiy: $momcykaoccoymeig = $swaaugcasqkysckc; $aiowsaccomcoikus = $meywaqqsugaoeyys->oyeskqayoscwciem()->uqeoyqiwywwmsiew($swaaugcasqkysckc); if (!$aiowsaccomcoikus) { goto mkomygccqkmkumsi; } $meqocwsecsywiiqs = $aiowsaccomcoikus->qcgakseyaikigqco(); mkomygccqkmkumsi: oyiuemaaykgkqqam: $wkkweuacukumqmya[$momcykaoccoymeig] = $meqocwsecsywiiqs; cgmgqucewwssmicq: } ciucewqgyoiouesq: $wkkweuacukumqmya[$meywaqqsugaoeyys::CREATED_AT] = __("\103\162\145\x61\x74\145\144\x20\x61\x74", PR__MDL__SALARY); gqmewagyagamokok: return $wkkweuacukumqmya; } }
