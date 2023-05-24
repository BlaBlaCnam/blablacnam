<script>
  import { Router, page } from "@roxi/routify";
  import { routes } from "../.routify/routes";
  import NavBar from "./components/navbars/navbar_connexion.svelte";
  import Footer from "./components/footer.svelte";
  import { onMount } from 'svelte';

  let currentPage;

onMount(() => {
  // Subscribe to changes in the $page store
  const unsubscribe = page.subscribe(($page) => {
    currentPage = $page.path;
  });
 
  // Clean up the subscription when the component is destroyed
  return unsubscribe;
});
</script>



{#if currentPage != "/Connexion/connexion" && currentPage != "/Connexion/inscription"}
  <NavBar />
{/if}

<Router {routes} />

{#if currentPage != "/identification/connexion" && currentPage != "/identification/inscription"}
  <Footer />
{/if}

