import {api} from "./config"
import {user} from "./stores/user"

let userValue;

user.subscribe((e) => {
    userValue = e;
})

export function set_cookie(cname, cvalue, cminutes = 24) {
    const d = new Date();
    d.setTime(d.getTime() + (cminutes*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

window['set_cookie'] = set_cookie;

export function get_cookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
}

window['get_cookie'] = get_cookie;


export async function api_fetch(url, data = new FormData())
{
    if (userValue)
    {
        data.append("PHPSESSID", userValue.PHPSESSID);
    }
    let res;
    try 
    {
        res = await fetch(url, {method: "POST", body: data});
    }
    catch (ex)
    {
        alert ("Error, see console for more details.");
        console.log(ex);
    }
    
    if (!res.ok)
    {
        alert ("Error, see console for more details.");
        console.log(res);
    }

    let message = await res.text();
    try {
        let output = JSON.parse(message);
        if (output.session_expired)
        {
            alert("La session à expiré, merci de vous reconnecter.");
            window.history.pushState({}, '', "/");
            return {};
        }
        return output;
    }
    catch (ex) {
        alert (message);
    }
}

window['api_fetch'] = api_fetch;

export function api_submit(success_cb = () => {}, error_cb = () => {}) 
{
    return function (e)
    {
        e.preventDefault();
        e.stopImmediatePropagation();
        (async () => {
            try {
                let data = await api_fetch(this.action, new FormData(this))
                if (!data)
                {
                    error_cb();
                    return ;
                }
                success_cb(data);
            }
            catch (ex) {
                error_cb(ex);
            }
        })()
    }
}