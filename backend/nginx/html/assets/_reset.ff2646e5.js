import{S as D,i as E,s as F,M as G,c as n,A,N as I,B as L,O as J,f as p,g as z,v as P,u as Q,w as T,e as d,t as H,a as q,b as c,C as R,d as K,q as U,x as V,y as W,z as X,K as Y}from"./index.d118c188.js";import{u as j}from"./_store.7a9143d8.js";function y(l){let o,i,t,s,f,v,m,k,u,M,C,B,b,N,_,S,O;const w=l[5].default,r=T(w,l,l[4],null);return{c(){o=d("a"),i=H("Back to examples"),s=q(),f=d("a"),v=H("Home"),k=q(),u=d("a"),M=H("About"),B=q(),b=d("button"),b.textContent="Logout",N=q(),r&&r.c(),c(o,"href",t=l[1]("/example")),c(f,"href",m=l[1]("./")),c(u,"href",C=l[1]("./about")),R(b,"position","absolute"),R(b,"right","24px")},m(e,a){n(e,o,a),K(o,i),n(e,s,a),n(e,f,a),K(f,v),n(e,k,a),n(e,u,a),K(u,M),n(e,B,a),n(e,b,a),n(e,N,a),r&&r.m(e,a),_=!0,S||(O=U(b,"click",l[2]),S=!0)},p(e,a){(!_||a&2&&t!==(t=e[1]("/example")))&&c(o,"href",t),(!_||a&2&&m!==(m=e[1]("./")))&&c(f,"href",m),(!_||a&2&&C!==(C=e[1]("./about")))&&c(u,"href",C),r&&r.p&&(!_||a&16)&&V(r,w,e,e[4],_?X(w,e[4],a,null):W(e[4]),null)},i(e){_||(A(r,e),_=!0)},o(e){L(r,e),_=!1},d(e){e&&p(o),e&&p(s),e&&p(f),e&&p(k),e&&p(u),e&&p(B),e&&p(b),e&&p(N),r&&r.d(e),S=!1,O()}}}function Z(l){let o,i,t=l[0]&&y(l);return{c(){t&&t.c(),o=G()},m(s,f){t&&t.m(s,f),n(s,o,f),i=!0},p(s,[f]){s[0]?t?(t.p(s,f),f&1&&A(t,1)):(t=y(s),t.c(),A(t,1),t.m(o.parentNode,o)):t&&(I(),L(t,1,1,()=>{t=null}),J())},i(s){i||(A(t),i=!0)},o(s){L(t),i=!1},d(s){t&&t.d(s),s&&p(o)}}}function $(l,o,i){let t,s,f;z(l,j,u=>i(0,t=u)),z(l,P,u=>i(3,s=u)),z(l,Q,u=>i(1,f=u));let{$$slots:v={},$$scope:m}=o;function k(){Y(j,t=!1,t)}return l.$$set=u=>{"$$scope"in u&&i(4,m=u.$$scope)},l.$$.update=()=>{l.$$.dirty&9&&(t||s("./login",{},!0))},[t,f,k,s,m,v]}class x extends D{constructor(o){super(),E(this,o,$,Z,F,{})}}export{x as default};