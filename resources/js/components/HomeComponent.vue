<template>
    <div class="content">
        <b-alert show variant="dark">
        <div class="row">
        <div class="col-md-12">
            <div>
                <b-input-group>
                    <b-input-group-prepend size="lg">
                    <b-button variant="info" to="ideti_skelbima">
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
        
    <br>
    
    <div class="blog-home2 py-5">
  <div class="container">
    <!-- Row  -->
    <div class="row justify-content-center">
      <!-- Column -->
      <div class="col-md-8 text-center">
        <h3 class="my-3">Upcoming Events</h3>
        <h6 class="subtitle font-weight-normal">You can relay on our amazing features list and also our customer services will be great experience for you without doubt</h6>
      </div>
      <!-- Column -->
      <!-- Column -->
    </div>
    <div class="row mt-4">
      <!-- Column -->
      <div class="col-md-4 on-hover">
        <div class="card border-0 mb-4">
          <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img3.jpg" alt="wrappixel kit"></a>
          <div class="date-pos bg-info-gradiant p-2 d-inline-block text-center rounded text-white position-absolute">Oct<span class="d-block">23</span></div>
          <h5 class="font-weight-medium mt-3"><a href="#" class="text-decoration-none link">You should have eagle’s eye on new trends and techonogies</a></h5>
          <p class="mt-3">Business Park, Opp. Corns Sam Restaurant, New Yoark, US</p>
          <a href="#" class="text-decoration-none linking text-themecolor mt-2">Learn More</a>
        </div>
      </div>
      <!-- Column -->
      <div class="col-md-4 on-hover">
        <div class="card border-0 mb-4">
          <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img2.jpg" alt="wrappixel kit"></a>
          <div class="date-pos bg-info-gradiant p-2 d-inline-block text-center rounded text-white position-absolute">Oct<span class="d-block">23</span></div>
          <h5 class="font-weight-medium mt-3"><a href="#" class="text-decoration-none link">New Seminar on Newest Food Recipe from World’s Best</a></h5>
          <p class="mt-3">Business Park, Opp. Corns Sam Restaurant, New Yoark, US</p>
          <a href="#" class="text-decoration-none linking text-themecolor mt-2">Learn More</a>
        </div>
      </div>
      <!-- Column -->
      <div class="col-md-4 on-hover">
        <div class="card border-0 mb-4">
          <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img1.jpg" alt="wrappixel kit"></a>
          <div class="date-pos bg-info-gradiant p-2 d-inline-block text-center rounded text-white position-absolute">Oct<span class="d-block">23</span></div>
          <h5 class="font-weight-medium mt-3"><a href="#" class="text-decoration-none link">Learn from small things to create something bigger.</a></h5>
          <p class="mt-3">Business Park, Opp. Corns Sam Restaurant, New Yoark, US</p>
          <a href="#" class="text-decoration-none linking text-themecolor mt-2">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</div>
     <!-- Portfolio Item Row -->
<div class="blog-home3 py-5">
  <div class="container">
    <!-- Row  -->
    <div class="row justify-content-center">
      <!-- Column -->
      <div class="col-md-8 text-center">
        <h3 class="my-3">Latest News and Blog from WrapKit</h3>
        <h6 class="subtitle font-weight-normal">You can relay on our amazing features list and also our customer services will be great experience for you without doubt</h6>
      </div>
      <!-- Column -->
      <!-- Column -->
    </div>
    <div class="row mt-4">
      <!-- Column -->
      <div class="col-lg-6">
        <div class="card border-0 mb-4">
          <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img4.jpg" alt="wrappixel kit"></a>
          <div class="date-pos text-center text-white p-3 bg-success-gradiant">JOHN DOE &nbsp; &nbsp; SEPT 15, 2017</div>
          <h5 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">Techonologies started to change Drastically</a></h5>
          <p class="m-t-20">You can relay on our amazing features list and also our customer services will be great experience. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
      </div>
      <!-- Column -->
      <div class="col-lg-6">
        <div class="row">
          <!-- Column -->
          <div class="col-md-6">
            <div class="card border-0 mb-4">
              <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img5.jpg" alt="wrappixel kit"></a>
              <div class="date-pos text-center text-white p-3 bg-success-gradiant">JOHN DOE &nbsp; &nbsp; SEPT 15, 2017</div>
              <h6 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">New Seminar on Newest Food Recipe</a></h6>
            </div>
          </div>
          <!-- Column -->
          <div class="col-md-6">
            <div class="card border-0 mb-4">
              <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img6.jpg" alt="wrappixel kit"></a>
              <div class="date-pos text-center text-white p-3 bg-success-gradiant">JOHN DOE &nbsp; &nbsp; SEPT 15, 2017</div>
              <h6 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">New Seminar on Newest Food Recipe</a></h6>
            </div>
          </div>
          <!-- Column -->
          <div class="col-md-6">
            <div class="card border-0 mb-4">
              <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img7.jpg" alt="wrappixel kit"></a>
              <div class="date-pos text-center text-white p-3 bg-success-gradiant">JOHN DOE &nbsp; &nbsp; SEPT 15, 2017</div>
              <h6 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">New Seminar on Newest Food Recipe</a></h6>
            </div>
          </div>
          <!-- Column -->
          <div class="col-md-6">
            <div class="card border-0 mb-4">
              <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img8.jpg" alt="wrappixel kit"></a>
              <div class="date-pos text-center text-white p-3 bg-success-gradiant">JOHN DOE &nbsp; &nbsp; SEPT 15, 2017</div>
              <h6 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">New Seminar on Newest Food Recipe</a></h6>
            </div>
          </div>
          <!-- Column -->
        </div>
      </div>
      <!-- Column -->
    </div>
  </div>
</div>
<br>
  <!-- /.row -->
  <div class="pricing6 py-5 bg-light">
  <div class="container"> 
<div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h3 class="mb-3">Pricing to make your Work Effective</h3>
        <h6 class="subtitle font-weight-normal">We offer 100% satisafaction and Money back Guarantee</h6>
      </div>
    </div>
    <!-- row  -->
    <div class="row mt-4">
      <!-- column  -->
      <div class="col-md-6">
        <div class="card card-shadow border-0 mb-4">
          <div class="card-body p-4">
            <div class="d-flex align-items-center">
              <h5 class="font-weight-medium mb-0">Basic Plan</h5>
              <div class="ml-auto"><span class="badge badge-danger font-weight-normal p-2">Popular</span></div>
            </div>
            <div class="row">
              <div class="col-lg-5 text-center">
                <div class="price-box my-3">
                  <sup>$</sup><span class="text-dark display-5">36</span>
                  <h6 class="font-weight-light">MONTHLY</h6>
                  <a class="btn btn-info-gradiant font-14 border-0 text-white p-3 btn-block mt-3" href="#">CHOOSE PLAN </a>
                </div>
              </div>
              <div class="col-lg-7 align-self-center">
                <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                  <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>6 Days a Week </span></li>
                  <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Dedicated Trainer</span></li>
                  <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Diet Plan Included </span></li>
                  <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Morning and Evening Batches</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- column  -->
      <!-- column  -->
      <div class="col-md-6">
        <div class="card card-shadow border-0 mb-4">
          <div class="card-body p-4">
            <div class="d-flex align-items-center">
              <h5 class="font-medium m-b-0">Advanced Plan</h5>
            </div>
            <div class="row">
              <div class="col-lg-5 text-center">
                <div class="price-box my-3">
                  <sup>$</sup><span class="text-dark display-5">368</span>
                  <h6 class="font-weight-light">YEARLY</h6>
                  <a class="btn btn-info-gradiant border-0 font-14 text-white p-3 btn-block mt-3" href="#">CHOOSE PLAN </a>
                </div>
              </div>
              <div class="col-lg-7 align-self-center">
                <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                  <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>6 Days a Week </span></li>
                  <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Dedicated Trainer</span></li>
                  <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Diet Plan Included </span></li>
                  <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Morning and Evening Batches</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- column  -->
    </div>
  </div>
  </div>

              
            <br>
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

@import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800);
.pricing6 {
  font-family: "Montserrat", sans-serif;
  color: #8d97ad;
  font-weight: 300;
}

.pricing6 h1,
.pricing6 h2,
.pricing6 h3,
.pricing6 h4,
.pricing6 h5,
.pricing6 h6 {
  color: #3e4555;
}

.pricing6 .font-weight-medium {
  font-weight: 500;
}

.pricing6 .bg-light {
  background-color: #f4f8fa !important;
}

.pricing6 h5 {
    line-height: 22px;
    font-size: 18px;
}

.pricing6 .subtitle {
  color: #8d97ad;
  line-height: 24px;
}

.pricing6 .card.card-shadow {
  -webkit-box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
  box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
}

.pricing6 .price-box sup {
  top: -20px;
  font-size: 16px;
}

.pricing6 .price-box .display-5 {
  line-height: 58px;
  font-size: 3rem;
}

.pricing6 .btn-info-gradiant {
		background: #188ef4;
    background: -webkit-linear-gradient(legacy-direction(to right), #188ef4 0%, #316ce8 100%);
    background: -webkit-gradient(linear, left top, right top, from(#188ef4), to(#316ce8));
    background: -webkit-linear-gradient(left, #188ef4 0%, #316ce8 100%);
    background: -o-linear-gradient(left, #188ef4 0%, #316ce8 100%);
    background: linear-gradient(to right, #188ef4 0%, #316ce8 100%);
}

.pricing6 .btn-info-gradiant:hover {
		background: #316ce8;
    background: -webkit-linear-gradient(legacy-direction(to right), #316ce8 0%, #188ef4 100%);
    background: -webkit-gradient(linear, left top, right top, from(#316ce8), to(#188ef4));
    background: -webkit-linear-gradient(left, #316ce8 0%, #188ef4 100%);
    background: -o-linear-gradient(left, #316ce8 0%, #188ef4 100%);
    background: linear-gradient(to right, #316ce8 0%, #188ef4 100%);
}

.pricing6 .btn-md {
    padding: 15px 45px;
    font-size: 16px;
}

.pricing6 .text-info {
    color: #188ef4 !important;
}

.pricing6 .badge-danger {
    background-color: #ff4d7e;
}

.pricing6 .font-14 {
	font-size: 14px;
}

.blog-home2 {
  font-family: "Montserrat", sans-serif;
  color: #8d97ad;
  font-weight: 300;
}

.blog-home2 h1,
.blog-home2 h2,
.blog-home2 h3,
.blog-home2 h4,
.blog-home2 h5,
.blog-home2 h6 {
  color: #3e4555;
}

.blog-home2 .font-weight-medium {
  font-weight: 500;
}

.blog-home2 .bg-light {
  background-color: #f4f8fa !important;
}

.blog-home2 .subtitle {
  color: #8d97ad;
  line-height: 24px;
}

.blog-home2 .text-themecolor {
  color: #316ce8;
}

.blog-home2 h5 {
  line-height: 22px;
  font-size: 18px;
}

.blog-home2 a.link {
  color: #3e4555;
}

.blog-home2 a.link:hover {
  color: #316ce8;
}

.blog-home2 .on-hover {
  -webkit-transition: 0.2s ease-in;
  -o-transition: 0.2s ease-in;
  transition: 0.2s ease-in;
}

.blog-home2 .on-hover:hover {
  -webkit-transform: translateY(-10px);
  -ms-transform: translateY(-10px);
  transform: translateY(-10px);
}

.blog-home2 .date-pos {
  right: 10px;
  top: 10px;
}

.blog-home2 .date-pos span {
  font-size: 30px;
  line-height: 30px;
}
.blog-home2 .bg-info-gradiant {
    background: #188ef4;
    background: -webkit-linear-gradient(legacy-direction(to right), #188ef4 0%, #316ce8 100%);
    background: -webkit-gradient(linear, left top, right top, from(#188ef4), to(#316ce8));
    background: -webkit-linear-gradient(left, #188ef4 0%, #316ce8 100%);
    background: -o-linear-gradient(left, #188ef4 0%, #316ce8 100%);
    background: linear-gradient(to right, #188ef4 0%, #316ce8 100%);
}

.blog-home3 {
  font-family: "Montserrat", sans-serif;
  color: #8d97ad;
  font-weight: 300;
}

.blog-home3 h1,
.blog-home3 h2,
.blog-home3 h3,
.blog-home3 h4,
.blog-home3 h5,
.blog-home3 h6 {
  color: #3e4555;
}

.blog-home3 h5 {
    line-height: 22px;
    font-size: 18px;
}

.blog-home3 a.link {
    color: #3e4555;
}

.blog-home3 a.link:hover {
    color: #316ce8;
}

.blog-home3 .font-weight-medium {
  font-weight: 500;
}

.blog-home3 .bg-light {
  background-color: #f4f8fa !important;
}

.blog-home3 .subtitle {
  color: #8d97ad;
  line-height: 24px;
}

.blog-home3 .card.card-shadow {
  -webkit-box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
  box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
}

.blog-home3 .on-hover {
  -webkit-transition: 0.2s ease-in;
  -o-transition: 0.2s ease-in;
  transition: 0.2s ease-in;
}

.blog-home3 .on-hover:hover {
  -webkit-transform: translateY(-10px);
  -ms-transform: translateY(-10px);
  transform: translateY(-10px);
}

.blog-home3 .bg-success-gradiant {
  background: #2cdd9b;
  background: -webkit-linear-gradient(legacy-direction(to right), #2cdd9b 0%, #1dc8cc 100%);
  background: -webkit-gradient(linear, left top, right top, from(#2cdd9b), to(#1dc8cc));
  background: -webkit-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
  background: -o-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
  background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);
}

.blog-home3 .date-pos {
  font-size: 12px;
}

.blog-home3 a {
  overflow: hidden;
}

.blog-home3 a img {
  -webkit-transition: 0.2s ease-in;
  -o-transition: 0.2s ease-in;
  transition: 0.2s ease-in;
}

.blog-home3 a img:hover {
  -webkit-transform: scale(1.05);
  -ms-transform: scale(1.05);
  transform: scale(1.05);
}

.pricing8 {
  font-family: "Montserrat", sans-serif;
  color: #8d97ad;
  font-weight: 300;
}

.pricing8 h1,
.pricing8 h2,
.pricing8 h3,
.pricing8 h4,
.pricing8 h5,
.pricing8 h6 {
  color: #3e4555;
}

.pricing8 h5 {
    line-height: 22px;
    font-size: 18px;
}

.pricing8 .subtitle {
  color: #8d97ad;
  line-height: 24px;
}

.pricing8 .display-5 {
  font-size: 3rem;
}

.pricing8 .font-14 {
  font-size: 14px;
}

.pricing8 .pricing-box sup {
  top: -20px;
  font-size: 16px;
}

.pricing8 .btn-info-gradiant {
  background: #188ef4;
  background: -webkit-linear-gradient(legacy-direction(to right), #188ef4 0%, #316ce8 100%);
  background: -webkit-gradient(linear, left top, right top, from(#188ef4), to(#316ce8));
  background: -webkit-linear-gradient(left, #188ef4 0%, #316ce8 100%);
  background: -o-linear-gradient(left, #188ef4 0%, #316ce8 100%);
  background: linear-gradient(to right, #188ef4 0%, #316ce8 100%);
}

.pricing8 .btn-info-gradiant:hover {
  background: #316ce8;
  background: -webkit-linear-gradient(legacy-direction(to right), #316ce8 0%, #188ef4 100%);
  background: -webkit-gradient(linear, left top, right top, from(#316ce8), to(#188ef4));
  background: -webkit-linear-gradient(left, #316ce8 0%, #188ef4 100%);
  background: -o-linear-gradient(left, #316ce8 0%, #188ef4 100%);
  background: linear-gradient(to right, #316ce8 0%, #188ef4 100%);
}

.pricing8 .btn-danger-gradiant {
  background: #ff4d7e;
  background: -webkit-linear-gradient(legacy-direction(to right), #ff4d7e 0%, #ff6a5b 100%);
  background: -webkit-gradient(linear, left top, right top, from(#ff4d7e), to(#ff6a5b));
  background: -webkit-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
  background: -o-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
  background: linear-gradient(to right, #ff4d7e 0%, #ff6a5b 100%);
}

.pricing8 .btn-danger-gradiant:hover {
  background: #ff6a5b;
  background: -webkit-linear-gradient(legacy-direction(to right), #ff6a5b 0%, #ff4d7e 100%);
  background: -webkit-gradient(linear, left top, right top, from(#ff6a5b), to(#ff4d7e));
  background: -webkit-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
  background: -o-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
  background: linear-gradient(to right, #ff6a5b 0%, #ff4d7e 100%);
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
