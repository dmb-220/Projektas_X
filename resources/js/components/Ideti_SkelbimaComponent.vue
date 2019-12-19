//npm install vue-form-wizard
<template>
  <form-wizard
  title=""
                      subtitle=""
                      back-button-text="Atgal"
                      next-button-text="Toliau"
                      finish-button-text="Paskelbti"
  @on-complete="onComplete" 
  shape="square"
  color="#3498db">
      <tab-content title="Skelbimo informacija"
      :before-change="beforeTabSwitch"
                   icon="fa fa-user">
      <b-form-group
        id="input-group-1"
        label="Email address:"
        label-for="input-1"
        description="We'll never share your email with anyone else."
      >
        <b-form-input
          id="input-1"
          v-model="form.email"
          type="email"
          required
          placeholder="Enter email"
        ></b-form-input>
      </b-form-group>

      <b-form-group id="input-group-2" label="Your Name:" label-for="input-2">
        <b-form-input
          id="input-2"
          v-model="form.name"
          required
          placeholder="Enter name"
        ></b-form-input>
      </b-form-group>

      <b-form-group id="input-group-3" label="Food:" label-for="input-3">
        <b-form-select
          id="input-3"
          v-model="form.food"
          :options="foods"
          required
        ></b-form-select>
      </b-form-group>

      <b-form-group id="input-group-4">
        <b-form-checkbox-group v-model="form.checked" id="checkboxes-4">
          <b-form-checkbox value="me">Check me out</b-form-checkbox>
          <b-form-checkbox value="that">Check that out</b-form-checkbox>
        </b-form-checkbox-group>
      </b-form-group>
      </tab-content>
      <tab-content title="Asmneninė informacija"
                   icon="fa fa-home">
        My second tab content
      </tab-content>
      <tab-content title="Nuotraukų įkėlimas"
                   icon="fa fa-check">
        Yuhuuu! This seems pretty damn simple
      </tab-content>
      <tab-content title="Apmokėjimas"
                   icon="fa fa-check">
        sumoketi uz skelbima
      </tab-content>
  </form-wizard>

</template>

<script>
    //local registration
import {FormWizard, TabContent} from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'

  export default {
    components: {FormWizard, TabContent},
    data() {
      return {
        form: {
          email: '',
          name: '',
          food: null,
          checked: []
        },
        foods: [{ text: 'Select One', value: null }, 'Carrots', 'Beans', 'Tomatoes', 'Corn'],
        show: true
      }
    },
     methods: {
       beforeTabSwitch: function(){
     alert("This is called before switchind tabs")
     return true;
   },
      onComplete: function(){
          alert('Yay. Done!');
       }
      },
      onSubmit(evt) {
        evt.preventDefault()
        alert(JSON.stringify(this.form))
      },
      onReset(evt) {
        evt.preventDefault()
        // Reset our form values
        this.form.email = ''
        this.form.name = ''
        this.form.food = null
        this.form.checked = []
        // Trick to reset/clear native browser form validation state
        this.show = false
        this.$nextTick(() => {
          this.show = true
        })
      }
  }
</script>