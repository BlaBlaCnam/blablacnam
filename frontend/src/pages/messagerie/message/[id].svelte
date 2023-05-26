<script>
    import {params} from "@roxi/routify"
    import { onMount } from "svelte";
    import { api_fetch } from "../../../function";
    import { api } from "../../../config";

    let message = {};

    onMount(async () => {
        message = await api_fetch(api + "/get_message_by_id.php?id=" + $params.id);
    })
</script>

<div class="vue-message">
    <div class="message">
        <div class="message-header">
            <p class="message-date">{message.date_message}</p>
        </div>
        <div class="message-content">
            <p>{message.contenu}</p>
            <div class="message-auteur">
                <p>Glossateur</p>
            </div>
        </div>
    </div>
    <a href="/messagerie/messagerie">
    <button class="btnpage" type="submit">Retour</button>
    </a>
</div>