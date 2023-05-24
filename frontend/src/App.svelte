<script>
  import { Router } from "@roxi/routify";
  import { routes } from "../.routify/routes";

  import { user } from "./stores/user";

  import NavBarConnexion from "./components/navbars/navbar_connexion.svelte";
  import NavBarUser from "./components/navbars/navbar_user.svelte";
  import NavBarAdmin from "./components/navbars/navbar_admin.svelte";

  import Footer from "./components/footer.svelte";

  import {getCookie, setCookie} from "./function"
</script>

{#if $user.is_logged_in && $user.data.administrateur}
  <NavBarAdmin />
{:else if $user.is_logged_in}
  <NavBarUser />
{:else}
  <NavBarConnexion />
{/if}

<Router {routes} />
<Footer />