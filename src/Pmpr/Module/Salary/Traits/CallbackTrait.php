<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d8a2d30a04             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\AbstractSalary; trait CallbackTrait { public function ekkwaykokcgqkmoi(?string $ccamueccusigaaio, string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { $sogksuscggsicmac = ''; if ($ccamueccusigaaio) { if (Constants::uwycywkimsycqwcy === $mgkceomocowocqyo) { $sogksuscggsicmac = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->uiiyaqiemcccwewi(), $ccamueccusigaaio); } else { $ccamueccusigaaio = str_replace("\x5f", "\x5c", $ccamueccusigaaio); if (is_subclass_of($ccamueccusigaaio, AbstractSalary::class) && ($qgciuiagkkguykgs = $this->sqasccoaywygsoew($ccamueccusigaaio))) { $sogksuscggsicmac = [$ccamueccusigaaio::symcgieuakksimmu(), $qgciuiagkkguykgs]; if (!is_callable($sogksuscggsicmac)) { $sogksuscggsicmac = null; } } } } return $sogksuscggsicmac; } public function uiiyaqiemcccwewi(string $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) : array { $sogksuscggsicmac = []; $gsoeomygymgeosya = (array) $this->ocksiywmkyaqseou("\163\x61\154\x61\x72\x79\x5f\x63\x61\x6c\154\x62\x61\143\x6b\x73", []); if (Constants::uwycywkimsycqwcy === $mgkceomocowocqyo) { foreach ($gsoeomygymgeosya as $egkyssmuqcwaciya => $meqocwsecsywiiqs) { if ($this->sqasccoaywygsoew($egkyssmuqcwaciya)) { $sogksuscggsicmac[esc_attr(str_replace("\134", "\137", $egkyssmuqcwaciya))] = $meqocwsecsywiiqs; } } } return $sogksuscggsicmac; } public function sqasccoaywygsoew($egkyssmuqcwaciya) { return $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($egkyssmuqcwaciya, "\x67\x65\x74\115\141\164\143\150\145\x64\122\145\x71\165\145\x73\x74\163"); } }
