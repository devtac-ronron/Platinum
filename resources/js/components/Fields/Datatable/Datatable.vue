<template>
    <div>
       <v-card>
        <v-data-table
        :headers="headers"
        :items="items"
        :search="search"
        :loading="searching"
        >
    <template v-slot:top>

      <v-toolbar flat>

        <v-toolbar-title>{{name}}</v-toolbar-title>

        <v-divider
          class="mx-4"
          inset
          vertical
        ></v-divider>

        <v-text-field
        v-model="search"
        append-icon="mdi-magnify"
        label="Search"
        single-line
        hide-details
        v-on:input="onSearch"
        ></v-text-field>

        <v-divider
          class="mx-4"
          inset
          vertical
        ></v-divider>

        <v-spacer></v-spacer>
        
        <template>
            <v-btn
              color="success"
              dark
              class="mb-2"
              small
            >
            <i class="fas fa-plus-circle"></i>
              {{ addBtn }}
            </v-btn>
          </template>

      </v-toolbar>
    </template>

    <template v-slot:[`item.actions`]="{ item }">
      <v-btn
      color="primary"
      dark
      small
      v-on:click="editItem(item)"
      >
      Edit
      </v-btn>

     <v-btn
      color="error"
      dark
      small
      v-on:click="deleteItem(item)"
      >
      Remove
      </v-btn>
    </template>


    <template v-slot:no-data>
      <v-btn
        color="primary"
        small
      >
        Refresh
      </v-btn>
    </template>
  </v-data-table>
     </v-card>
    </div>
</template>

<script>
import Textbox from '../../Fields/Textbox/Textbox.vue';
import Button from '../../Fields/Button/Button.vue';

  export default {
    props:['name', 'addBtn', 'headers', 'items', 'model', 'formData'],
    data: () => ({
        search: '',
        searching: false,
        formTitle: '',
    }),
    components: {
        Textbox,
        Button
    },

    watch: {

    },

    methods: {
      onSearch() {
        this.searching = true;
          setTimeout(() => {
            this.searching = false;
          }, 2000);
      },
      editItem (item) {
        console.log(item);
        this.formTitle = `Edit ${this.model}`;
      },

      deleteItem (item) {
      },

      deleteItemConfirm () {
        this.closeDelete()
      },

      close () {
        this.formTitle = `New ${this.model}`;
      },

      closeDelete () {
      },
 
      save () {
        this.close()
      },
    },
  }
</script>