import{S as T,i as M,s as k,e as d,a as b,b as u,c as h,d as l,n as y,f as m,g as v,k as L}from"./index.d118c188.js";function H(i){let t;return{c(){t=d("a"),t.innerHTML='<button class="btnpage" type="submit">Retour</button>',u(t,"href","/user/infouser")},m(e,a){h(e,t,a)},d(e){e&&m(t)}}}function w(i){let t;return{c(){t=d("a"),t.innerHTML='<button class="btnpage" type="submit">Retour</button>',u(t,"href","/admin/infoadmin")},m(e,a){h(e,t,a)},d(e){e&&m(t)}}}function D(i){let t,e,a,s,_,f,g,p;function j(r,c){if(c&1&&(e=null),e==null&&(e=!!(r[0]&&parseInt(r[0].administrateur))),e)return w;if(r[0])return H}let o=j(i,-1),n=o&&o(i);return{c(){t=d("div"),n&&n.c(),a=b(),s=d("h2"),s.textContent="Mes Trajets",_=b(),f=d("a"),f.innerHTML='<button class="btnNewTrajet">Nouveau trajet</button>',g=b(),p=d("table"),p.innerHTML=`<thead><tr><th>Date</th> 
          <th>D\xE9part</th> 
          <th>Arriv\xE9e</th> 
          <th>Details</th> 
          <th>Supprimer</th></tr></thead> 
      <tbody><tr><td>01/05/2023</td> 
          <td>Paris</td> 
          <td>Lyon</td> 
          <td><p><a href="/trajet/infotrajet"><img src="/eye.png"/></a></p></td> 
          <td><p><img src="/bin.png"/></p></td></tr> 
        
        <tr><td>05/05/2023</td> 
          <td>Lyon</td> 
          <td>Marseille</td> 
          <td><p><a href="/trajet/infotrajet"><img src="/eye.png"/></a></p></td> 
          <td><p><img src="/bin.png"/></p></td></tr></tbody>`,u(s,"class","login-heading"),u(f,"href","/trajet/nouveauTrajet"),u(p,"class","table"),u(t,"class","newtrajet-container")},m(r,c){h(r,t,c),n&&n.m(t,null),l(t,a),l(t,s),l(t,_),l(t,f),l(t,g),l(t,p)},p(r,[c]){o!==(o=j(r,c))&&(n&&n.d(1),n=o&&o(r),n&&(n.c(),n.m(t,a)))},i:y,o:y,d(r){r&&m(t),n&&n.d()}}}function S(i,t,e){let a;return v(i,L,s=>e(0,a=s)),[a]}class C extends T{constructor(t){super(),M(this,t,S,D,k,{})}}export{C as default};
