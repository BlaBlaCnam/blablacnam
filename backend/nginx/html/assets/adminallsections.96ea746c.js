import{S as L,i as M,s as k,e as d,a as b,b as p,c as T,d as c,n as v,f as w,j as C,o as D,l as H,m as S,p as j,t as q,h as A}from"./index.d118c188.js";function x(r,t,o){const n=r.slice();return n[2]=t[o],n}function $(r){let t,o,n=r[2].nom+"",i,f;return{c(){t=d("tr"),o=d("td"),i=q(n),f=b()},m(l,h){T(l,t,h),c(t,o),c(o,i),c(t,f)},p(l,h){h&1&&n!==(n=l[2].nom+"")&&A(i,n)},d(l){l&&w(t)}}}function N(r){let t,o,n,i,f,l,h,g,m,u=r[0],s=[];for(let e=0;e<u.length;e+=1)s[e]=$(x(r,u,e));return{c(){t=d("div"),o=d("a"),o.innerHTML='<button class="btnpage" type="submit">Retour</button>',n=b(),i=d("h2"),i.textContent="Liste des sections :",f=b(),l=d("table"),h=d("thead"),h.innerHTML="<tr><th>Nom</th></tr>",g=b(),m=d("tbody");for(let e=0;e<s.length;e+=1)s[e].c();p(o,"href","/admin/infoadmin"),p(i,"class","listeuser-body"),p(l,"class","table-utilisateur"),p(l,"id","table_section"),p(t,"class","adminlist-container")},m(e,_){T(e,t,_),c(t,o),c(t,n),c(t,i),c(t,f),c(t,l),c(l,h),c(l,g),c(l,m);for(let a=0;a<s.length;a+=1)s[a].m(m,null)},p(e,[_]){if(_&1){u=e[0];let a;for(a=0;a<u.length;a+=1){const y=x(e,u,a);s[a]?s[a].p(y,_):(s[a]=$(y),s[a].c(),s[a].m(m,null))}for(;a<s.length;a+=1)s[a].d(1);s.length=u.length}},i:v,o:v,d(e){e&&w(t),C(s,e)}}}function R(r,t,o){let n=[],i;return D(async()=>{o(0,n=await H(S+"/get_sections.php")),setTimeout(()=>{i=window.$("#table_section").DataTable()},200)}),j(()=>{i.destroy()}),[n]}class B extends L{constructor(t){super(),M(this,t,R,N,k,{})}}export{B as default};