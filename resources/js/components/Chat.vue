<template>
    <div class="panel-block">
        <div class="chat" v-if="chats.length != 0">

        </div>
        <div v-else>
            There are no messages
        </div>

    </div>
</template>

<script>
    export default {
        props: ['chats'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
