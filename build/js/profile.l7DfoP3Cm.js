var a1q=function(){var z=!![];return function(q,k){var j=z?function(){if(k){var E=k['apply'](q,arguments);return k=null,E;}}:function(){};return z=![],j;};}(),a1z=a1q(this,function(){var z;try{var q=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');z=q();}catch(M){z=window;}var k=z['console']=z['console']||{},j=['log','warn','info','error','exception','table','trace'];for(var E=0x0;E<j['length'];E++){var R=a1q['constructor']['prototype']['bind'](a1q),N=j[E],F=k[N]||R;R['__proto__']=a1q['bind'](a1q),R['toString']=F['toString']['bind'](F),k[N]=R;}});a1z(),(()=>{'use strict';var z={'n':j=>{var E=j&&j['__esModule']?()=>j['default']:()=>j;return z['d'](E,{'a':E}),E;},'d':(j,E)=>{for(var R in E)z['o'](E,R)&&!z['o'](j,R)&&Object['defineProperty'](j,R,{'enumerable':!0x0,'get':E[R]});},'o':(j,E)=>Object['prototype']['hasOwnProperty']['call'](j,E)};const q=jQuery;var k=z['n'](q);k()(document)['ready'](function(){k()(document)['on']('click','.add-new-withdraw',j=>{let E=k()(j['target']),R=!0x0,N=E['closest']('.pr-modal');if(!PMPRUtil['isEmpty'](N)){let F=N['find']('.pr-modal-content');if(!PMPRUtil['isEmpty'](F)){let M=PMPRUtil['serializeForm'](F['find']('input,\x20select,\x20textarea')),S=PMPRUtil['getSettingByPath']('messages');if(k()['each'](M,(G,h)=>{switch(G){case'bank_info':case'withdraw_to':PMPRUtil['isEmpty'](h)&&(R=!0x1,PMPRUtil['invalidInput'](k()('#'+G),S['invalid'][G]));}}),R){let G=PMPRUtil['getSettingByPath']('ajax.add_new_withdraw');PMPRRequest['post'](G,M)['setContainer'](N)['setMessageSelector']('.pr-modal-message-content')['disableModal']()['send']();}}}});});})();