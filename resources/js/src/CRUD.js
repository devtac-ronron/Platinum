export default {
    methods: {
        createRecord(formData, routeApi) {
            this.$SHOW_LOADING();
            const requestPath = this.$BASE_URL + routeApi;
            axios
                .post(requestPath, formData, this.$CONFIG)
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

        clearFields(formData) {
            for (let value in formData) {
                return (formData[value] = "");
            }
        },

        updateRecord(id, formData, routeApi) {
            this.$SHOW_LOADING();
            const requestPath = this.$BASE_URL + routeApi + `${id}`;
            return axios
                .put(requestPath, formData, this.$CONFIG)
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

        showRecord(id) {
            console.log("show record");
        },

        deleteRecord() {
            console.log("delete record");
        },

        async getAllRecords(routeApi) {
            this.$SHOW_LOADING();
            const requestPath = this.$BASE_URL + routeApi;
            return axios
                .get(requestPath, this.$CONFIG)
                .then(response => {
                    this.$HIDE_LOADING();
                    return response.data;
                })
                .catch(err => {
                    this.$HIDE_LOADING();
                    return err.message;
                });
        },

        async searchRecord(routeApi, data, getRecordBy) {
            let searchData = null;
            if (!this.isEmpty(data)) {
                searchData = data;
            }
            const requestPath =
                this.$BASE_URL + routeApi + searchData + "/" + getRecordBy;
            return axios
                .get(requestPath, this.$CONFIG)
                .then(response => {
                    return response.data;
                })
                .catch(err => {
                    return err.message;
                });
        }
    }
};
