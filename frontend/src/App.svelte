<script>
  import { Router } from "@roxi/routify";
  import { routes } from "../.routify/routes";
  import NavBar from "./components/navbar.svelte"
  import Footer from "./components/footer.svelte"
</script>

<NavBar />
<Router {routes} />
<Footer />
