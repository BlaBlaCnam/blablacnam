import{S as M,i as N,s as P,e as n,a,t as F,b as L,C as U,c as Q,d as e,I as y,q as k,h as V,n as G,f as W,J as X,g as x,v as Z,u as $,K as tt}from"./index.d118c188.js";import{u as H}from"./_store.7a9143d8.js";function et(s){let t,o,f,l,g,p,h,i,c,d,u,m,I,J,K,O,Y,j,z,w,A,_,v=s[2]()+"",S,C,B,q,D,R,T,E;return{c(){t=n("div"),o=n("h1"),o.textContent="Login",f=a(),l=n("input"),g=a(),p=n("br"),h=a(),i=n("input"),c=a(),d=n("br"),u=a(),m=n("button"),m.textContent="Submit",I=a(),J=n("br"),K=a(),O=n("br"),Y=a(),j=n("br"),z=a(),w=n("p"),A=F(`This login page is actually located at\r
    `),_=n("a"),S=F(v),B=a(),q=n("p"),q.textContent=`You are seeing it here, because we're using $goto with the static option\r
    enabled. This renders the login page, without changing the URL in the\r
    browser.`,D=a(),R=n("p"),R.textContent=`On submit, we're "redirected" to the current URL in your browser.`,L(l,"type","text"),L(i,"type","text"),L(_,"href",C=s[2]()),U(t,"width","256px"),U(t,"margin","128px auto"),U(t,"text-align","center")},m(r,b){Q(r,t,b),e(t,o),e(t,f),e(t,l),y(l,s[0]),e(t,g),e(t,p),e(t,h),e(t,i),y(i,s[1]),e(t,c),e(t,d),e(t,u),e(t,m),e(t,I),e(t,J),e(t,K),e(t,O),e(t,Y),e(t,j),e(t,z),e(t,w),e(w,A),e(w,_),e(_,S),e(t,B),e(t,q),e(t,D),e(t,R),T||(E=[k(l,"input",s[4]),k(i,"input",s[5]),k(m,"click",s[3])],T=!0)},p(r,[b]){b&1&&l.value!==r[0]&&y(l,r[0]),b&2&&i.value!==r[1]&&y(i,r[1]),b&4&&v!==(v=r[2]()+"")&&V(S,v),b&4&&C!==(C=r[2]())&&L(_,"href",C)},i:G,o:G,d(r){r&&W(t),T=!1,X(E)}}}function nt(s,t,o){let f,l,g;x(s,Z,u=>o(6,f=u)),x(s,H,u=>o(7,l=u)),x(s,$,u=>o(2,g=u));let p="anything",h="goes";function i(){tt(H,l={username:p},l),f(window.location.href)}function c(){p=this.value,o(0,p)}function d(){h=this.value,o(1,h)}return[p,h,g,i,c,d]}class at extends M{constructor(t){super(),N(this,t,nt,et,P,{})}}export{at as default};