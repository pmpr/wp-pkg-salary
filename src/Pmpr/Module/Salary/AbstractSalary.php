<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6654cb66de764             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Request; abstract class AbstractSalary extends Container { protected ?string $title = null; public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\x73\x61\x6c\x61\x72\x79\137\x63\141\x6c\x6c\x62\x61\x63\x6b\x73", [$this, "\x75\161\x79\x6f\x65\143\x67\157\x77\155\141\x67\171\161\157\x6f"]); } public final function uqyoecgowmagyqoo($gsoeomygymgeosya) : array { if (is_array($gsoeomygymgeosya)) { goto qgoiooayqmqqsiok; } $gsoeomygymgeosya = []; qgoiooayqmqqsiok: $gsoeomygymgeosya[self::uqggkiomyiceyooa()] = $this->qcgakseyaikigqco(); return $gsoeomygymgeosya; } public final function yceacaoomkmkesym($xssuewsokckmigqk) : ?string { $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); return $mssuumukiiaqmcka->qogaqkcsogcqiaic($xssuewsokckmigqk, $mssuumukiiaqmcka::iimaoeeqksicsawa); } public final function rkwqmomqeowwyaam($xssuewsokckmigqk, $mkucggyaiaukqoce) : ?object { $aqmwamyiwgeeymqa = null; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); if (!($mkucggyaiaukqoce && $yoiguusocukqeayg->myagqecycsaiyqsk($mkucggyaiaukqoce) && ($ycoeoaakqyskgykq = $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce)))) { goto qwigomakwmyiwkgo; } $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); $aqmwamyiwgeeymqa = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::meksegaoamowuwoq => $ycoeoaakqyskgykq, $kueeocmceokoouqa::woagckamiequeoyu => $mssuumukiiaqmcka->keeuqgyooycqoygw($xssuewsokckmigqk)]); qwigomakwmyiwkgo: return $aqmwamyiwgeeymqa; } public abstract function ksikyqoayeggqssg($xssuewsokckmigqk, $cawesmkieccckaae, $product) : array; }
