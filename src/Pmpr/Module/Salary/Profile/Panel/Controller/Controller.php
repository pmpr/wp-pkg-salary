<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432b7fd5e31d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Salary\Profile\Panel\Controller; use Pmpr\Module\Panel\REST\AbstractREST; use Pmpr\Module\Salary\Model\Agreement as Model; abstract class Controller extends AbstractREST { public function __construct() { $this->abstract = true; parent::__construct(); $this->namespace .= "\57\163\x61\x6c\141\162\x79"; } protected function ogaukwwywwoywssy($aqmwamyiwgeeymqa, $oammesyieqmwuwyi, $ekiuyucoiagmscgy, $ywmkwiwkosakssii = []) : array { $megmggkiokqkcwou = 0; $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk, 1); $sogksuscggsicmac = []; $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq, 10); if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto ukomuiwukymcoaso; } $megmggkiokqkcwou = count($oammesyieqmwuwyi); $qmeuaeiseuacgiqc = min($megmggkiokqkcwou, $weyoqgcesqgeusiu * ($suaemuyiacqyugsm - 1) + $weyoqgcesqgeusiu); $ggkaciewmeqmgckg = max(0, $qmeuaeiseuacgiqc - $weyoqgcesqgeusiu); $oammesyieqmwuwyi = array_slice($oammesyieqmwuwyi, $ggkaciewmeqmgckg, $qmeuaeiseuacgiqc); if (!$oammesyieqmwuwyi) { goto ceiwqkyquikcemmo; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { if (!is_callable($ekiuyucoiagmscgy)) { goto sqmoqymckwsogsqg; } $igqsaukqcqscimok = call_user_func_array($ekiuyucoiagmscgy, [$aqmwamyiwgeeymqa, $igqsaukqcqscimok, $ywmkwiwkosakssii]); sqmoqymckwsogsqg: if (!$igqsaukqcqscimok) { goto uycesqqkoeamocgm; } $sogksuscggsicmac[$momcykaoccoymeig] = $igqsaukqcqscimok; uycesqqkoeamocgm: gqmewagyagamokok: } oyiuemaaykgkqqam: ceiwqkyquikcemmo: ukomuiwukymcoaso: $ocqawgquwsqioses = $megmggkiokqkcwou > 0 ? (int) ($megmggkiokqkcwou / $weyoqgcesqgeusiu) : 1; return Model::symcgieuakksimmu()->oosqweumiyeayasy($sogksuscggsicmac, $megmggkiokqkcwou, max(1, $ocqawgquwsqioses), $weyoqgcesqgeusiu); } }
