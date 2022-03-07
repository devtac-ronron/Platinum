export default {
    methods: {
        isEmpty(value) {
            if (
                value === "" ||
                value === null ||
                value === undefined ||
                value === 0
            ) {
                return true;
            }
            return false;
        }
    }
};
