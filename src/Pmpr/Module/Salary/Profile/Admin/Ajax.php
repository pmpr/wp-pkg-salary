<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d8a2d30a04             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Container; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Withdraw; class Ajax extends Container { const wiysygukkaksueso = "\160\x72\137\x73\x61\154\x61\162\x79\x5f\x61\152\x61\x78\137"; const kqewokmaycweqkco = self::wiysygukkaksueso . "\x61\144\144\137\156\x65\167\x5f\x77\151\164\x68\144\x72\x61\167\137\141\143\164\151\x6f\156"; const kusssokwyuiygyqq = self::wiysygukkaksueso . "\x61\x64\144\137\x6e\x65\x77\x5f\x70\141\171\155\x65\156\164\137\141\143\164\151\157\x6e"; const myikkigscysoykgy = ["\141\144\144\x5f\156\x65\x77\137\x70\x61\x79\155\145\156\164" => self::kqewokmaycweqkco, "\141\144\x64\x5f\156\145\x77\137\167\x69\164\x68\144\x72\141\167" => self::kqewokmaycweqkco]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\x6b\147\x79\x6d\165\x71\x73\x71\x6d\161\x75\x67\161\x73\x6d\167"])->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\165\157\163\x69\x75\157\161\x79\163\171\x6f\153\163\x65\x71\145"]); parent::wigskegsqequoeks(); } public function kgymuqsqmqugqsmw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (!is_wp_error($keccaugmemegoimu)) { $eiuuauwyukskgois = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::owskgkyceomsskgm, 0); $euakemkgmcigqycw = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Payment::qyeimiaoamokwygy, 0); if ($eiuuauwyukskgois && $euakemkgmcigqycw) { $keccaugmemegoimu = Payment::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([]); if (!is_wp_error($keccaugmemegoimu)) { $occymigcemkqucuw = true; $keccaugmemegoimu = null; } } else { $keccaugmemegoimu = __("\123\157\155\x65\40\162\145\161\165\x69\x72\x65\40\x70\x61\x72\141\155\145\x74\x65\162\163\40\151\163\40\x6d\x69\x73\x73\151\156\147\56", PR__MDL__SALARY); } } if ($keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ueyuicgwuyuiioie($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu), $occymigcemkqucuw); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function uosiuoqysyokseqe() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (!is_wp_error($keccaugmemegoimu)) { $miowmmgaiagcuyoo = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::iockmgiyoygcswog); $wayieuwuoeasekks = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Admin::qagqayweyigciamg); $wssiaomiwukaiwmw = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Admin::equssioqikiumyki); if ($wayieuwuoeasekks && $wssiaomiwukaiwmw && $miowmmgaiagcuyoo) { $sogksuscggsicmac = Withdraw::symcgieuakksimmu()->mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $wssiaomiwukaiwmw, $wayieuwuoeasekks); $keccaugmemegoimu = $sogksuscggsicmac[Constants::eoskkkieowogacws]; $occymigcemkqucuw = $sogksuscggsicmac[Constants::ckcawaoawwioqecq]; } else { $keccaugmemegoimu = __("\123\x6f\x6d\145\x20\x72\x65\x71\165\151\x72\145\40\160\141\x72\x61\x6d\x65\164\145\162\x73\x20\151\x73\x20\155\x69\x73\163\151\x6e\x67\x2e", PR__MDL__SALARY); } } if ($keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ueyuicgwuyuiioie($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu), $occymigcemkqucuw); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
