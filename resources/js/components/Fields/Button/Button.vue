<template>
    <div>
        <div class="form-group">
            <v-btn
            :color="btnColor"
            v-bind="$attrs"
            v-on:click="$emit(btnMethod)"
            >
            {{btnName}}
            </v-btn>
        </div>   
    </div>
</template>

<script>
    export default {
        props: ['btnName','btnMethod', 'btnColor']
    }
</script>

<style scoped>

</style>