<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6793da350efd7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Admin; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Salary\Container; use Pmpr\Module\Salary\Model\Payment; use Pmpr\Module\Salary\Model\Withdraw; class Ajax extends Container { const wiysygukkaksueso = "\160\x72\x5f\163\x61\154\x61\x72\171\x5f\141\x6a\x61\170\137"; const kqewokmaycweqkco = self::wiysygukkaksueso . "\x61\144\x64\x5f\x6e\x65\167\x5f\167\x69\x74\150\144\x72\141\x77\x5f\141\143\164\x69\157\x6e"; const kusssokwyuiygyqq = self::wiysygukkaksueso . "\141\144\x64\137\x6e\x65\x77\x5f\160\x61\x79\x6d\x65\x6e\x74\x5f\x61\x63\164\x69\x6f\156"; const myikkigscysoykgy = ["\x61\144\144\137\156\x65\167\x5f\x70\x61\171\x6d\145\x6e\164" => self::kqewokmaycweqkco, "\x61\x64\144\x5f\156\145\x77\137\167\151\x74\150\x64\162\141\167" => self::kqewokmaycweqkco]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\153\x67\x79\x6d\x75\x71\x73\161\x6d\161\x75\x67\x71\163\155\167"])->koaegcswmcqsiykq(self::kqewokmaycweqkco, [$this, "\x75\157\163\x69\x75\x6f\x71\171\x73\171\157\153\163\145\161\x65"]); parent::wigskegsqequoeks(); } public function kgymuqsqmqugqsmw() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (!is_wp_error($keccaugmemegoimu)) { $eiuuauwyukskgois = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::owskgkyceomsskgm, 0); $euakemkgmcigqycw = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Payment::qyeimiaoamokwygy, 0); if ($eiuuauwyukskgois && $euakemkgmcigqycw) { $keccaugmemegoimu = Payment::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([]); if (!is_wp_error($keccaugmemegoimu)) { $occymigcemkqucuw = true; $keccaugmemegoimu = null; } } else { $keccaugmemegoimu = __("\123\x6f\x6d\x65\40\x72\145\x71\165\x69\x72\145\x20\160\x61\x72\x61\155\x65\x74\x65\162\163\40\x69\x73\40\x6d\151\163\163\151\x6e\147\56", PR__MDL__SALARY); } } if ($keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ueyuicgwuyuiioie($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu), $occymigcemkqucuw); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function uosiuoqysyokseqe() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $occymigcemkqucuw = false; $keccaugmemegoimu = $eiicaiwgqkgsekce->aoyemeikggcigigu(); if (!is_wp_error($keccaugmemegoimu)) { $miowmmgaiagcuyoo = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::iockmgiyoygcswog); $wssiaomiwukaiwmw = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Admin::equssioqikiumyki); $kooascmqqwmaskmi = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Admin::qagqayweyigciamg); if ($kooascmqqwmaskmi && $wssiaomiwukaiwmw && $miowmmgaiagcuyoo) { $sogksuscggsicmac = Withdraw::symcgieuakksimmu()->mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $wssiaomiwukaiwmw, $kooascmqqwmaskmi); $keccaugmemegoimu = $sogksuscggsicmac[Constants::eoskkkieowogacws]; $occymigcemkqucuw = $sogksuscggsicmac[Constants::ckcawaoawwioqecq]; } else { $keccaugmemegoimu = __("\x53\x6f\x6d\x65\x20\162\145\161\165\151\162\x65\x20\160\x61\x72\141\x6d\145\164\145\162\x73\40\151\x73\40\155\151\163\163\151\156\x67\x2e", PR__MDL__SALARY); } } if ($keccaugmemegoimu) { $keccaugmemegoimu = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ueyuicgwuyuiioie($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keccaugmemegoimu), $occymigcemkqucuw); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
