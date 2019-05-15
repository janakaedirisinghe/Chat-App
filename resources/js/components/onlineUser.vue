<template >
    <div class="is-pulled-right">
        <i class="fa fa-circle green" v-if="checkUser()">ss</i>
        <i class="fa fa-circle red" v-else>fds</i>
    </div>
</template>

<script>
    export default {
        props: ['friend', 'onlineusers'],
        methods: {
            checkUser: function() {
                return _.find(this.onlineusers, {id: this.friend.id});
            }
        }
    }
</script>

<style lang="css">
    .red {
        color: red;
    }
    .green {
        color: green;
    }
</style>
