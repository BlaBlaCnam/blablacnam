import{S as r,i,s as d,e as o,b as l,c as p,n as a,f as c,o as u,p as b}from"./index.d118c188.js";function m(n){let t;return{c(){t=o("div"),t.innerHTML=`<a href="/admin/infoadmin"><button class="btnpage" type="submit">Retour</button></a> 
    <h2 class="listeuser-body">Liste des trajets :</h2> 

        <table class="table-utilisateur" id="table_user"><thead><tr><th>D\xE9part</th> 
                    <th>Destination</th> 
                    <th>Date</th> 
                    <th>Nombre de places</th></tr></thead> 
            <tbody><tr><td>CUM Lyon</td> 
                    <td>CNAM Saint etienne</td> 
                    <td><p><img src="/eye.png"/></p></td> 
                    <td><p><img src="/bin.png"/></p></td></tr> 
                <tr><td>CNAM Saint Etienne</td> 
                    <td>CUM Lyon</td> 
                    <td><p><img src="/eye.png"/></p></td> 
                    <td><p><img src="/bin.png"/></p></td></tr></tbody></table>`,l(t,"class","adminlist-container")},m(e,s){p(e,t,s)},p:a,i:a,o:a,d(e){e&&c(t)}}}function h(n){let t;return u(()=>{t=window.$("#table_user").DataTable({columns:[null,null,{orderable:!1},{orderable:!1}]})}),b(()=>{t.destroy()}),[]}class g extends r{constructor(t){super(),i(this,t,h,m,d,{})}}export{g as default};
