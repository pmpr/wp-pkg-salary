<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6151a272bdc4a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Salary\Profile\Admin; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Salary\Profile\Common; class Ajax extends Common { const ADD_NEW_WITHDRAW = "\163\x61\154\x61\162\171\x5f\x61\x64\x64\137\x6e\145\x77\137\167\151\x74\x68\x64\x72\141\167\x5f\141\x63\164\x69\x6f\156"; const ADD_NEW_PAYMENT = "\x73\141\x6c\141\162\x79\137\x61\144\x64\x5f\156\145\167\137\x70\141\171\x6d\145\156\x74\x5f\141\x63\164\151\x6f\x6e"; const ACTIONS = ["\x61\x64\144\137\x6e\145\x77\x5f\x70\x61\x79\x6d\x65\x6e\x74" => self::ADD_NEW_WITHDRAW, "\141\x64\144\x5f\156\x65\x77\137\x77\151\164\150\x64\x72\141\x77" => self::ADD_NEW_WITHDRAW]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::ADD_NEW_WITHDRAW, [$this, "\153\147\171\155\165\x71\x73\x71\155\x71\165\147\161\x73\155\x77"])->koaegcswmcqsiykq(self::ADD_NEW_WITHDRAW, [$this, "\165\157\x73\151\x75\157\x71\171\163\x79\x6f\x6b\163\x65\161\x65"]); parent::wigskegsqequoeks(); } public function kgymuqsqmqugqsmw() { goto oyiuyywyeoskckuw; mgcuiguaomoqwwwm: $uamcoiueqaamsqma = ManipulateHTML::ueyuicgwuyuiioie($uamcoiueqaamsqma, $occymigcemkqucuw); goto eoyiumycaigawmmc; yoagcooekomeokwg: $uamcoiueqaamsqma = __("\123\157\155\145\40\162\145\x71\165\151\162\145\x20\160\x61\162\x61\x6d\x65\164\145\x72\x73\x20\151\163\40\x6d\151\163\163\x69\156\147\56", PR__PKG__SALARY); goto eckcqesiokgwkkiw; wmumywgyyeagqoeq: ukomuiwukymcoaso: goto smcguieygyqcaqgs; quaqmuusokiyqgqe: ceiwqkyquikcemmo: goto smiemmcqqukyguuu; mmgmqogugasaqkgg: uycesqqkoeamocgm: goto wmumywgyyeagqoeq; sgiwoiscywusgmmm: if ($occymigcemkqucuw) { goto gqmewagyagamokok; } goto skuqigsokaguscas; qkuiwoqksgayqqmg: if ($this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto ceiwqkyquikcemmo; } goto easqmyamcmeesgya; goqmywuiicciasyk: $uamcoiueqaamsqma = ''; goto siecswkggyikqkga; smcguieygyqcaqgs: if (!$uamcoiueqaamsqma) { goto wkgskiuiukiuyque; } goto mgcuiguaomoqwwwm; mqiiqkuaoekeuswo: $sogksuscggsicmac = Payment::symcgieuakksimmu()->gscuuyuyauokoyuo([]); goto qmoocweoekqueuyy; yuoeumyiuqkuouey: AjaxUtil::eykosmsuqcyueagm($uamcoiueqaamsqma, $occymigcemkqucuw); goto eyiwqgqcsqakwqss; yuqgwwmqwqiuwmaw: goto ukomuiwukymcoaso; goto quaqmuusokiyqgqe; eoyiumycaigawmmc: wkgskiuiukiuyque: goto yuoeumyiuqkuouey; smiemmcqqukyguuu: $eiuuauwyukskgois = ManipulateArray::get($icwicymcioeyeyek, Payment::CREATOR, 0); goto iksewmsaugayqaqq; eckcqesiokgwkkiw: goto uycesqqkoeamocgm; goto ecouwqosmoyyqmkw; quyogmwugsyoaaiu: gqmewagyagamokok: goto mmgmqogugasaqkgg; easqmyamcmeesgya: $uamcoiueqaamsqma = __("\x59\x6f\165\x72\40\x72\145\x71\x75\x65\163\164\x20\x69\x73\40\x6e\x6f\x74\x20\x76\x61\x6c\x69\x64\56", PR__PKG__SALARY); goto yuqgwwmqwqiuwmaw; qmoocweoekqueuyy: $occymigcemkqucuw = ManipulateArray::get($sogksuscggsicmac, "\x73\165\143\143\145\x73\163", $occymigcemkqucuw); goto sgiwoiscywusgmmm; oyiuyywyeoskckuw: $icwicymcioeyeyek = $_POST; goto goqmywuiicciasyk; ecouwqosmoyyqmkw: sqmoqymckwsogsqg: goto mqiiqkuaoekeuswo; siecswkggyikqkga: $occymigcemkqucuw = false; goto qkuiwoqksgayqqmg; iksewmsaugayqaqq: $euakemkgmcigqycw = ManipulateArray::get($icwicymcioeyeyek, Payment::WITHDRAW, 0); goto yamyagayiooyeekg; skuqigsokaguscas: $uamcoiueqaamsqma = ManipulateArray::get($sogksuscggsicmac, "\145\x72\162\157\x72\x73", $occymigcemkqucuw); goto quyogmwugsyoaaiu; yamyagayiooyeekg: if ($eiuuauwyukskgois && $euakemkgmcigqycw) { goto sqmoqymckwsogsqg; } goto yoagcooekomeokwg; eyiwqgqcsqakwqss: } public function uosiuoqysyokseqe() { goto iauwuugggmegwisk; suuskagowwgsouqw: $sogksuscggsicmac = Withdraw::symcgieuakksimmu()->mcqkssugiqcgqkqy($miowmmgaiagcuyoo, $wssiaomiwukaiwmw, $wayieuwuoeasekks); goto omykokikgocoikec; acggikioyeueeowg: $miowmmgaiagcuyoo = ArrayUtil::get($icwicymcioeyeyek, Admin::OWNER); goto cwikoaeqmmoimmso; egaymskkosukqeao: $wssiaomiwukaiwmw = ArrayUtil::get($icwicymcioeyeyek, Admin::WITHDRAW_TO); goto kaiesowkgwogqseg; iwueukqcywkiyqge: goto osmmoyqkqoucsgow; goto ykwasaaoeeiuomim; kqyoakickmseyyeq: if (AjaxUtil::wqsmsuyggkkyyocc(Salary::NONCE_ACTION)) { goto ooqksueucyagyuoe; } goto micceocwuwkyusic; cquecqekuucwoumw: $uamcoiueqaamsqma = ThemeUtil::ueyuicgwuyuiioie($uamcoiueqaamsqma, $occymigcemkqucuw); goto koiscokkkaimiecq; kaiesowkgwogqseg: if ($wayieuwuoeasekks && $wssiaomiwukaiwmw && $miowmmgaiagcuyoo) { goto sckioayasmkcoeoo; } goto kicwiowcogmauwiy; kgmeiwiakwicgkkk: sckioayasmkcoeoo: goto suuskagowwgsouqw; csieaismmmocyacu: $occymigcemkqucuw = ArrayUtil::get($sogksuscggsicmac, "\x73\x75\x63\x63\x65\x73\163", $occymigcemkqucuw); goto aquqkiggamaoegoo; owuuuiekkaeoeacq: AjaxUtil::eykosmsuqcyueagm($uamcoiueqaamsqma, $occymigcemkqucuw); goto saauykgakaeiyoua; aquqkiggamaoegoo: yssqmyoaokkksukc: goto mykiyqcqiegkiqys; aukucaieceiwesmm: $occymigcemkqucuw = false; goto kqyoakickmseyyeq; mykiyqcqiegkiqys: osmmoyqkqoucsgow: goto agemwookwseyycqo; agemwookwseyycqo: if (!$uamcoiueqaamsqma) { goto wgiygcmqaokywuqa; } goto cquecqekuucwoumw; cwikoaeqmmoimmso: $wayieuwuoeasekks = ArrayUtil::get($icwicymcioeyeyek, Admin::BANK_INFO); goto egaymskkosukqeao; ykwasaaoeeiuomim: ooqksueucyagyuoe: goto acggikioyeueeowg; cwswueuqoamqasya: goto yssqmyoaokkksukc; goto kgmeiwiakwicgkkk; kicwiowcogmauwiy: $uamcoiueqaamsqma = __("\123\x6f\155\x65\x20\162\x65\161\165\151\162\145\40\160\141\x72\141\x6d\x65\164\x65\162\163\x20\x69\163\x20\x6d\x69\163\163\x69\x6e\147\x2e", PR__PKG__SALARY); goto cwswueuqoamqasya; koiscokkkaimiecq: wgiygcmqaokywuqa: goto owuuuiekkaeoeacq; micceocwuwkyusic: $uamcoiueqaamsqma = __("\131\x6f\165\x72\40\162\145\x71\165\x65\163\x74\40\151\x73\40\156\157\164\40\x76\141\x6c\151\x64\x2e", PR__PKG__SALARY); goto iwueukqcywkiyqge; iauwuugggmegwisk: $icwicymcioeyeyek = $_POST; goto aukucaieceiwesmm; omykokikgocoikec: $uamcoiueqaamsqma = ArrayUtil::get($sogksuscggsicmac, "\x6d\x65\x73\163\x61\147\145"); goto csieaismmmocyacu; saauykgakaeiyoua: } }
