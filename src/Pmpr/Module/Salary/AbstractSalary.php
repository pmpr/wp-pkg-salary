<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432b7fd5e31d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Module\Salary\Model\Agreement; use Pmpr\Module\Salary\Model\Request; abstract class AbstractSalary extends Container { protected ?string $title = null; public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\163\141\154\x61\162\171\x5f\x63\x61\x6c\x6c\142\141\x63\x6b\163"), [$this, "\x75\x71\x79\x6f\x65\x63\x67\x6f\x77\x6d\141\147\x79\x71\x6f\157"]); } public final function uqyoecgowmagyqoo($gsoeomygymgeosya) : array { if (is_array($gsoeomygymgeosya)) { goto gcckqucukawcasgk; } $gsoeomygymgeosya = []; gcckqucukawcasgk: $gsoeomygymgeosya[self::uqggkiomyiceyooa()] = $this->qcgakseyaikigqco(); return $gsoeomygymgeosya; } public final function yceacaoomkmkesym($xssuewsokckmigqk) : ?string { $oeucsuyqysaciasy = null; if (!($mssuumukiiaqmcka = Agreement::symcgieuakksimmu())) { goto qmkaeeomgkwggoyo; } $oeucsuyqysaciasy = $mssuumukiiaqmcka->qogaqkcsogcqiaic($xssuewsokckmigqk, $mssuumukiiaqmcka::iimaoeeqksicsawa); qmkaeeomgkwggoyo: return $oeucsuyqysaciasy; } public final function rkwqmomqeowwyaam($xssuewsokckmigqk, $mkucggyaiaukqoce) : ?object { $aqmwamyiwgeeymqa = null; if (!($mkucggyaiaukqoce && ManipulateUser::myagqecycsaiyqsk($mkucggyaiaukqoce) && ($ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce)))) { goto ocaguquugeamqckq; } $kueeocmceokoouqa = Request::symcgieuakksimmu(); $mssuumukiiaqmcka = Agreement::symcgieuakksimmu(); if (!($mssuumukiiaqmcka && $kueeocmceokoouqa)) { goto csammceowmqwaamq; } $aqmwamyiwgeeymqa = $kueeocmceokoouqa->oqomcmyuuakigusk([$kueeocmceokoouqa::meksegaoamowuwoq => $ycoeoaakqyskgykq, $kueeocmceokoouqa::woagckamiequeoyu => $mssuumukiiaqmcka->keeuqgyooycqoygw($xssuewsokckmigqk)]); csammceowmqwaamq: ocaguquugeamqckq: return $aqmwamyiwgeeymqa; } public abstract function ksikyqoayeggqssg($xssuewsokckmigqk, $cawesmkieccckaae, $product) : array; }
