<script setup>

import {useForm} from "@inertiajs/vue3";

const form = useForm({
   mask: null
});

function submit()
{
        form.post('/hi', {
            onSuccess:() => console.log('SUCCESS _:)'),
            onError: (error) => {
                console.log('ERROR');
                console.log(error);
            },
        });
}
</script>

<template>

    Hey
<button @click="submit">Submit</button>
</template>

<style scoped>

</style>
