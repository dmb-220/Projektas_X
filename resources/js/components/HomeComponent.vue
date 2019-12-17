<template>
    <div class="content">
        <b-alert show variant="dark">
            <b-alert show variant="info">
        <div class="row">
        <div class="col-md-12">
            <div>
                <b-input-group>
                    <b-input-group-prepend size="lg">
                    <b-button variant="info">
                        <i class="fa fa-pencil-square-o"></i> Įdėti skelbimą
                    </b-button>
                    </b-input-group-prepend>

                    <b-form-input></b-form-input>
                    <b-form-select v-model="selected" :options="options"></b-form-select>

                    <b-input-group-append>
                    <b-button variant="secondary">
                        <i class="fa fa-search"></i>
                    </b-button>
                    </b-input-group-append>
                </b-input-group>
            </div>
        </div>
        </div>
        </b-alert>
    <br>
         
    <div class="row text-center align-items-end">
      <!-- Pricing Table-->
      <div 
      @mouseover="hover.rangovai = true"
      @mouseleave="hover.rangovai = false"
      class="col-lg-4 mb-5 mb-lg-0">
        <div :class="hover.rangovai ? 'bg-secondary' : 'bg-white'" class="p-5 rounded-lg shadow">
          <h2 class="h1 font-weight-bold">RANGOVAI</h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left">
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Lorem ipsum dolor sit amet</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Sed ut perspiciatis</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> At vero eos et accusamus</li>
          </ul>
          <a href="#" class="btn btn-primary btn-block p-2 shadow rounded-pill">Žiūrėti skelbimus</a>
        </div>
      </div>
      <!-- END -->


      <!-- Pricing Table-->
      <div
      @mouseover="hover.uzsakovai = true"
      @mouseleave="hover.uzsakovai = false"
      class="col-lg-4 mb-5 mb-lg-0">
        <div :class="hover.uzsakovai ? 'bg-secondary' : 'bg-white'" class="p-5 rounded-lg shadow">
          <h2 class="h1 font-weight-bold">UŽSAKOVAI</h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Lorem ipsum dolor sit amet</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Sed ut perspiciatis</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> At vero eos et accusamus</li>
          </ul>
          <a href="#" class="btn btn-primary btn-block p-2 shadow rounded-pill">Žiūrėti skelbimus</a>
        </div>
      </div>
      <!-- END -->


      <!-- Pricing Table-->
      <div
      @mouseover="hover.skelbimai = true"
      @mouseleave="hover.skelbimai = false"
      class="col-lg-4">
        <div :class="hover.skelbimai ? 'bg-secondary' : 'bg-white'" class="p-5 rounded-lg shadow">
          <h2 class="h1 font-weight-bold">SKELBIMAI</h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Lorem ipsum dolor sit amet</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Sed ut perspiciatis</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> At vero eos et accusamus</li>
          </ul>
          <a href="#" class="btn btn-primary btn-block p-2 shadow rounded-pill">Žiūrėti skelbimus</a>
        </div>
      </div>
      <!-- END -->

    </div>
        </b-alert>
    <br>
     <!-- Portfolio Item Row -->
     <b-alert show variant="secondary">
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="http://placehold.it/750x500" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Project Description</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
      <h3 class="my-3">Project Details</h3>
      <ul>
        <li>Lorem Ipsum</li>
        <li>Dolor Sit Amet</li>
        <li>Consectetur</li>
        <li>Adipiscing Elit</li>
      </ul>
    </div>

  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
  <h3 class="my-4">Related Projects</h3>

  <div class="row">

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

  </div>
  </b-alert>
  <!-- /.row -->
</div>
</template>

<style scoped>
.rounded-lg {
  border-radius: 1rem !important;
}

.text-small {
  font-size: 0.9rem !important;
}

.custom-separator {
  width: 5rem;
  height: 6px;
  border-radius: 1rem;
}

.text-uppercase {
  letter-spacing: 0.2em;
}
</style>

<script>
    export default {
        data() {
      return {
          hover: {
              rangovai: false,
              uzsakovai: false,
              skelbimai: false
          },
        selected: null,
        options: [
          { value: null, text: 'Apskritys' },
          { value: '1', text: 'Vilnius' },
          { value: '2', text: 'Kaunas' },
          { value: '3', text: 'Klaipėda' },
          { value: '4', text: 'Šiauliai' },
          { value: '5', text: 'Panevėžys' },
          { value: '6', text: 'Marijampolė' },
          { value: '7', text: 'Alytus' },
          { value: '8', text: 'Utena' },
          { value: '9', text: 'Telšiai' },
          { value: '10', text: 'Tauragė' }
        ]
      }
    },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            skelbimai(){
                console.log('[paspausta ant skelbimai]')
            }
        }
    }
</script>
