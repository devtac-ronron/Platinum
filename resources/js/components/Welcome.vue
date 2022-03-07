<template>
       <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Users</div>
                    <div v-for="err in this.errorMessage" :key="err" class="text-danger pl-2 pt-2">
                        <h5>{{ err }}</h5>
                    </div>
                    <div class="card-body">
                         <form v-on:keyup.enter="LoggedIn">
                             <div class="form-group">
                             <input type="text" v-model="formData.username" class="form-control" placeholder="Username">
                         </div>
                         <div class="form-group">
                             <input type="password" v-model="formData.password" class="form-control" placeholder="Password">
                         </div>
                         <div class="form-group">
                             <button type="button" class="btn btn-success float-right" v-on:click="LoggedIn">Login</button>
                         </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
</template>

<script>
export default {
    data() {
        return {
           formData: {
                'username':'',
                'password':''
           },
           errorMessage:''
        }
    },
    methods: {
        LoggedIn() {
            if(this.username !== "" && this.password !== "")
            {
                const requestPath = this.$BASE_URL + '/api/login';
                axios.post(requestPath, this.formData, this.$CONFIG)
                .then((response) => {
                    // this.$SHOW_LOADING();
                    window.location.href = 'dashboard';
                })
                .catch((err) => {
                    this.errorMessage = err.response.data;
                });
            }
        }
    },
    mounted() {
            console.log('Component mounted.')
    }
}
</script>

<style>

</style>
