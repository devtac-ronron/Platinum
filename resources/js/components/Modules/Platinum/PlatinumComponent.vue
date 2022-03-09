<template>
    <div>
        <v-app>
           <input type="file" name="file" ref="file" placeholder="File" v-on:change="handleFileUpload($event)">
              <Button btnName="Submit" btnColor="green" v-on:save="importFile" btnMethod="save"> </Button>
        </v-app>
    </div>
</template>

<script>
import Button from '../../Fields/Button/Button.vue';
export default {
    data() {
        return {
            file:'',
            formData: new FormData()
        }
    },
    components: {
        Button
    },
    methods: {
        importFile() {
            const headers = {
                headers: { "Content-Type": "multipart/form-data"},
                };
            this.$SHOW_LOADING();
            const requestPath = this.$BASE_URL + '/api/importFiles';
            axios
                .post(requestPath, this.formData, headers)
                .then(response => {
                    this.$HIDE_LOADING();
                    this.clearFields();
                    return response.data;
                })
                .catch(err => {
                    this.$HIDE_LOADING();
                    return err.message;
            });
        },
        handleFileUpload(event) {
            this.file = event.target.files[0];
            this.formData.append('file', this.file);
        }
    }
}
</script>

