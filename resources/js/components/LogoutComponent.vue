<template>
    <li class="nav-item">
        <a class="nav-link fontStyle" href="#" role="button" v-on:click="loggedOut">
          Logout
        </a>
    </li>
</template>

<script>
export default {
    methods: {
        loggedOut() {
            const requestPath = this.$BASE_URL + '/api/logout';
            axios.post(requestPath,this.$CONFIG)
            .then((response) => {
                location.reload();
                console.log(response);
            })
            .catch((error) => {console.log(error)})
        },
    }
}
</script>

<style scope>
    .fontStyle {
        font-weight: bold;        
        font-size:16px;
        text-transform: capitalize;
    }
</style>