<template>
    <div class="panel-block">
        <div class="chat" v-if="chats.length != 0">
                <div v-for="chat in chats">
                    <div class="chat-right" v-if="chat.user_id == userid">
                        {{chat.chat}}
                    </div>
                    <div class="chat-left" v-else>
                        {{chat.chat}}
                    </div>
                </div>
        </div>
        <div v-else>
            There are no messages
        </div>

    </div>
</template>

<script>
    export default {
        props: ['chats','userid','friendid'],
       
    }
</script>
