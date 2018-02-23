<template>
  <div>
    <nav class="panel column is-offset-2 is-8">
      <p class="panel-heading">
        <b>Phonebook(Laravel + Vue.js)</b>
        <button class="button is-primary is-outlined" @click="openAdd">Add New</button>
      </p>
      <div class="panel-block">
        <p class="control has-icons-left">
          <input class="input is-small" type="text" placeholder="search">
          <span class="icon is-small is-left">
            <i class="fa fa-search"></i>
          </span>
        </p>
      </div>

      <a class="panel-block" v-for="(item, key) in lists">
        <span class="column is-9">
          [{{ key+1 }}] {{ item.name }}
        </span>
        <span class="panel-icon column is-1">
          <i class="has-text-danger fa fa-trash" aria-hidden="true"></i>
        </span>
        <span class="panel-icon column is-1">
          <i class="has-text-info fa fa-edit" aria-hidden="true"></i>
        </span>
        <span class="panel-icon column is-1">
          <i class="has-text-primary fa fa-eye" aria-hidden="true"></i>
        </span>
      </a>
    </nav>

    <add :openmodal='addActive' @closeModal='close'></add>
  </div>

</template>

<script>
  let Add = require('./Add.vue')

  export default {
    data() {
      return {
        addActive: '',
        showActive: '',
        lists: {},
        errors: {}
      }
    },
    components: {
      Add
    },
    mounted() {
      axios.post('/getData')
        .then((response) => this.lists = response.data )
        .catch((error) => this.errors = error.response.data )
    },
    methods:{
      openAdd() {
        this.addActive = 'is-active';
      },
      openShow() {
        this.showActive = 'is-active';
      },
      close() {
        this.addActive = '';
      }
    }
  }
</script>