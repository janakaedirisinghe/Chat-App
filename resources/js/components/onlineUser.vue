<template >

    <div class="is-pulled-right">
        <i class="fa fa-circle green" v-if="checkUser()"></i>
        <i class="fa fa-circle red" v-else></i>
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
        color: #ff5353;
    }
    .green {
        color: #19d33a;
    }
</style>
