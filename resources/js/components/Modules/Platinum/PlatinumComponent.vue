<template>
  <div>
   <v-app>
      <div>
        <Datatable
        name="Platinum"
        :headers="headers"
        :items="items"
        model="Platinum"
        ></Datatable>
      </div>
   </v-app>
  </div>
</template>

<script>

import Textbox from '../../Fields/Textbox/Textbox.vue';
import Button from '../../Fields/Button/Button.vue';
import Datatable from '../../Fields/Datatable/Datatable.vue';
export default {
   data() {
     return {
       headers: [
        { text: 'Title', value: 'title' },
        { text: 'Code', value: 'code' },
        { text: 'By', value: 'song_by' },
        { text: 'Status', value: 'status', sortable: false },
      ],
      items:[]
     }
   },
  components:{
     Textbox,
     Button,
     Datatable
  },
  methods:{
    onSave() {
    //    this.createRecord(this.formData, '/api/users/store');
    },
  },

  async created() {
    const resData = await this.getAllRecords('/api/platinum');
    this.items = resData;

    console.log(resData);
  },
}

</script>
