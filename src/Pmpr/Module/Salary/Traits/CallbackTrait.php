<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3d48e8c62             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\AbstractSalary; use Pmpr\Module\Salary\Model\Agreement; trait CallbackTrait { public function ekkwaykokcgqkmoi(string $ccamueccusigaaio, string $sqeykgyoooqysmca = Agreement::giskgsemukeyqsws, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { $sogksuscggsicmac = ''; if ($ccamueccusigaaio) { if (Constants::uwycywkimsycqwcy === $mgkceomocowocqyo) { $sogksuscggsicmac = $this->uiiyaqiemcccwewi($sqeykgyoooqysmca)[$ccamueccusigaaio] ?? null; } else { $ccamueccusigaaio = str_replace("\x5f", "\134", $ccamueccusigaaio); if (is_subclass_of($ccamueccusigaaio, AbstractSalary::class) && ($qgciuiagkkguykgs = $this->sqasccoaywygsoew($ccamueccusigaaio, $sqeykgyoooqysmca))) { $sogksuscggsicmac = [$ccamueccusigaaio::symcgieuakksimmu(), $qgciuiagkkguykgs]; if (!is_callable($sogksuscggsicmac)) { $sogksuscggsicmac = null; } } } } return $sogksuscggsicmac; } private function uiiyaqiemcccwewi(string $sqeykgyoooqysmca, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : array { $sogksuscggsicmac = []; $gsoeomygymgeosya = (array) $this->ocksiywmkyaqseou("\163\x61\x6c\x61\162\x79\137{$sqeykgyoooqysmca}\137\x63\x61\x6c\154\x62\141\x63\153\163", []); if (Constants::uwycywkimsycqwcy === $mgkceomocowocqyo) { foreach ($gsoeomygymgeosya as $egkyssmuqcwaciya => $meqocwsecsywiiqs) { if ($this->sqasccoaywygsoew($egkyssmuqcwaciya, $sqeykgyoooqysmca)) { $sogksuscggsicmac[esc_attr(str_replace("\134", "\137", $egkyssmuqcwaciya))] = $meqocwsecsywiiqs; } } } return $sogksuscggsicmac; } public function sqasccoaywygsoew($egkyssmuqcwaciya, string $sqeykgyoooqysmca) { $ekiuyucoiagmscgy = false; $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); switch ($sqeykgyoooqysmca) { case Agreement::giskgsemukeyqsws: $ekiuyucoiagmscgy = $cgwqqcukiasoicmi->myagqecycsaiyqsk($egkyssmuqcwaciya, "\x67\145\x74\x4d\141\164\x63\x68\145\144\122\x65\161\x75\145\163\x74\163"); break; case Agreement::ymmcwqwisimwywom: $ekiuyucoiagmscgy = $cgwqqcukiasoicmi->myagqecycsaiyqsk($egkyssmuqcwaciya, "\147\x65\x74\115\141\x74\143\150\x65\144\x50\x72\x6f\144\x75\x63\164\163"); break; } return $ekiuyucoiagmscgy; } }
