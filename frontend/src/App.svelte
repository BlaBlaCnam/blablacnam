<script>
  import { Router } from "@roxi/routify";
  import { routes } from "../.routify/routes";

  import { user } from "./stores/user";

  import NavBarConnexion from "./components/navbars/navbar_connexion.svelte";
  import NavBarUser from "./components/navbars/navbar_user.svelte";
  import NavBarAdmin from "./components/navbars/navbar_admin.svelte";

  import Footer from "./components/footer.svelte";
  import { onMount } from "svelte";
  import { api_fetch, get_cookie } from "./function";
  import { api } from "./config";

  import animatedbackground from "./components/animations/animatedbackground.svelte";
  onMount(async () => {
    let sessid = get_cookie("PHPSESSID");
    if (sessid && sessid != 'undefined')
    {
      let userData = await api_fetch(api + "/try_session.php?PHPSESSID=" + sessid);
      if (userData)
      {
        await user.set(userData);
      }
    }
  })

</script>
<animatedbackground />
{#if $user && parseInt($user.administrateur)}
  <NavBarAdmin />
{:else if $user}
  <NavBarUser />
{:else}
  <NavBarConnexion />
{/if}

<Router {routes} />
<Footer />