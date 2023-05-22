<script>
  import { Router } from "@roxi/routify";
  import { routes } from "../.routify/routes";
  import NavBar from "./components/navbar.svelte"
</script>

<NavBar />
<Router {routes} />
