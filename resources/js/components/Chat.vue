<style scoped>
    .panel-block {
        flex-direction: column;
        border: none;
    }
    .chat {
        width: 100%;
        padding: 20px;
        box-shadow: inset 0 0 20px 0 #4a4a4a;
        margin-bottom: 20px;
        border: 1px solid #00b89c;
        max-height: 600px;
        overflow-x: auto;
        background-color: white;
    }
    .chat .chat-right, .chat .chat-left {
        max-width: 70%;
        box-shadow: 0 0 8px 0px #4a4a4a;
        padding: 8px;
        margin: 4px;
    }
    .chat-right {
        float: right;
    }
    .chat-left {
        float: left;
    }
    .no-message {
        height: 200px;
        display: flex;
        align-items: center;
    }
</style>

<template>
    <div class="panel-block">
        <div class="chat" v-if="chats.length != 0">
            <div v-for="chat in chats" style="overflow: auto;">
                <div class="chat-right" v-if="chat.user_id == userid">
                    {{ chat.chat }}
                </div>
                <div class="chat-left" v-else>
                    {{ chat.chat }}
                </div>
            </div>
        </div>
        <div v-else class="no-message">
            There are no messages
        </div>
        <chat-composer v-bind:userid="userid" v-bind:chats="chats" v-bind:friendid="friendid"></chat-composer>
    </div>
</template>

<script>
    export default {
        props: ['chats', 'userid', 'friendid']
    }
</script>
