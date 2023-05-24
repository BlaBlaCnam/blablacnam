import {api} from "./config"
import {user} from "./stores/user"

let userValue;

user.subscribe((e) => {
    userValue = e;
})

export async function api_fetch(url, data = new FormData())
{
    if (userValue.is_logged_in)
    {
        data.append("PHPSESSID", userValue.data.PHPSESSID);
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
        console.log(ex);
    }

    let message = await res.text();
    try {
        let output = JSON.parse(message);
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