<template>
  <div>
   <v-app>
      <div>
        <Datatable 
        name="Users"
        addBtn="New User"
        :headers="headers"
        :items="items"
        :formData="formData"
        model="Users"
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
       formData:[{
         firstname:'TEST',
         lastname:'',
         username:'',
         password:''
       }],
       headers: [
        { text: 'Firstname', value: 'firstname' },
        { text: 'Lastname', value: 'lastname' },
        { text: 'Username', value: 'username' },
        { text: 'Actions', value: 'actions', sortable: false },
      ],
      items: []
     }
   },
  components:{
     Textbox,
     Button,
     Datatable
  },
  methods:{
    onSave() {
       this.createRecord(this.formData, '/api/users/store');
    },
  },

  async created() {
    const resData = await this.getAllRecords('/api/users');
    this.items = resData;
  },
}
</script>