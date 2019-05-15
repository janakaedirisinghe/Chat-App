<template>

    <div class="panel-block field" >
        <div class="control">
            <input type="text" name="" class="input">
        </div>
        <div class="control auto-width">
            <input type="button" name="" class="button" value="sent">
        </div>
    </div>

</template>

<script>
    export default {
        name: "ChatComposer"
    }
</script>

<style scoped>
    .panel-block {
        flex-direction: row;
        width: 100%;
        border: none;
        padding: 0;
    }
    input {
        border-radius: 0;
    }
    .auto-width {
        width: auto;
    }
</style>style>