import {writable} from "svelte/store"

export const annon = {
    is_logged_in: false,
    data: {}
}

export const user = writable(annon);