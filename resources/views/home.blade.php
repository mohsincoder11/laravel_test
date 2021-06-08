@extends('layout')
@section('css')
<!-- owl carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<link href="{{asset('public/assets/css/fontfamily.css')}}" rel="stylesheet">
<link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/theme-default.min.css">
<style> 
    #section3{
        padding-top: 6%;
    }
    .testimonial{
        text-align: center;
    padding: 85px 50px 45px 70px;
    margin: 70px 15px 35px;
    background: #f9f9f9;
    box-shadow: 8px 4px 0 0 #00a9af;
    position: relative;
}
.testimonial .pic{
    width: 120px;
    height: 120px;
    border: 5px solid #898989;
    border-radius: 8px;
    margin: 0 auto;
    position: absolute;
    top: -60px;
    left: 0;
    right: 0;
}
.testimonial .pic img{
    width: 100%;
    height: auto;
}
.testimonial .description{
    font-size: 15px;
    color: #757575;
    line-height: 27px;
    margin-bottom: 20px;
    position: relative;
}

.testimonial .testimonial-profile{
    position: relative;
    margin: 20px 0 10px 0;
}
.testimonial .testimonial-profile:after{
    content: "";
    width: 50px;
    height: 2px;
    background: #898989;
    margin: 0 auto;
    position: absolute;
    bottom: -10px;
    left: 0;
    right: 0;
}
.testimonial .title{
    display: inline-block;
    font-size: 18px;
    color: #212529;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin: 0;
}
.testimonial .post{
    display: inline-block;
    font-size: 15px;
    color: #757575;
    text-transform: capitalize;
}
.owl-theme .owl-controls{
    margin-top: 10px;
}
.owl-theme .owl-controls .owl-page span{
    background: #5e5f5f;
    opacity: 1;
    transition: all 0.4s ease 0s;
}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls.clickable .owl-page:hover span{
    background: #00a9af;
}
.owl-theme .owl-controls .owl-page.active span{
    width: 22px;
    height: 12px;
}
    .error{
        color: red;
        padding-top: 5px;
    }
    #successmsg {
        visibility: hidden;
        margin-left: 300px;
        background-color: rgba(30, 176, 47,0.7);
        color: #fff;
        text-align: left;
        border-radius: 10px;
        border:2px solid #fff;
        padding: 16px;
        position: fixed;
        z-index: 1;
        right: 2%;
        top: 12%;
        font-size: 14px;
    }
    #successmsg.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    @-webkit-keyframes fadein {
        from {top: 30; opacity: 0;} 
        to {top:7% opacity: 1;}
    }

    @keyframes fadein {
        from {top:00; opacity: 0;}
        to {top:7% opacity: 1;}
    }

    @-webkit-keyframes fadeout {
        from {top:7% opacity: 1;} 
        to {top: 0; opacity: 0;}
    }

    @keyframes fadeout {
        from {top:7% opacity: 1;}
        to {top: 0; opacity: 0;}
    }</style>
    @stop
    @section('content')
    <div id="errormsg"> <strong>Error!</strong> Check username or Password.
    </div>
    <div id="successmsg"> <strong>Success!</strong> Form Submitted Successfully.
    </div>
    <nav id="navbar" class="navbar navbar-expand-lg  navbar-light bg-light ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img id="logo" src="{{asset('public/assets/images/logo/logo.png')}}" alt="" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <img src="{{asset('public/assets/images/bar-icon.png')}}" alt="" class="img-fluid">
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#section1">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section2">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section3">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section4">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('login')}}">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section id="section1">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-12 elevnted-corner">
                    <div class="#">
                        <div class="d-flex justify-content-center h-100">
                            <div class="align-self-center">
                                <img src="{{asset('public/assets/images/elevnted.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <img src="{{asset('public/assets/images/kitchen.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="#">
            <div class="Kitchenmate-righcorner">
                <div class="Kitchenmate-leftcorner">
                    <div class="container-fluid p-0">
                        <div class="row g-0">
                            <!-- <div class="col-12 d-none d-lg-block">
                                <div class="d-block text-left">
                                    <img src="{{asset('public/assets/images/kitchen-lady.png')}}" alt="" class="img-fluid">
                                </div>
                            </div> -->
                            <div class="col-12 d-flex align-self-center">
                                <div class="Kitchenmate-info ">
                                    <h2 class="text-muted">Kitchenmate brings the best of</h2>
                                    <img src="{{asset('public/assets/images/elevnted-lg.png')}}" alt="" class="img-fluid">
                                    <h2 class="text-muted">to your doorstep.</h2>
                                    <h6 class="text-muted">Built-in appliances by:</h6>
                                    <img src="{{asset('public/assets/images/bosch-siemens.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block ">
                <img src="{{asset('public/assets/images/kitchen-lady.jpg')}}" alt="" class="img-fluid">
            </div>
        </div>
    </section>

    <section class="position-relative">
        <div class="kitchenlife-leftcorner">
            <div class="kitchenlife-rightcorner">
                <div class="kitchenlife-section">
                    <div class="container-md position-relative">
                        <h2 class="mb-4">Bringing your<br> kitchen to life</h2>
                        <h4 class="text-muted fw-normal">We are Authorized Dealers of the most trusted brand, Godrej Interio Modular Kitchens.</h4>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="kitchen-life">
                                    <img src="{{asset('public/assets/images/kitchen-life/warranty.png')}}" alt="" class="img-fluid">
                                    <h4>15 Years’<br>Warranty </h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="kitchen-life">
                                    <img src="{{asset('public/assets/images/kitchen-life/hardware.png')}}" alt="" class="img-fluid">
                                    <h4>Best-in-Class<br> Hardware</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="kitchen-life">
                                    <img src="{{asset('public/assets/images/kitchen-life/strenth.png')}}" alt="" class="img-fluid">
                                    <h4>Spot-on Style<br> & Strength</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="kitchen-life">
                                    <img src="{{asset('public/assets/images/kitchen-life/resistant.png')}}" alt="" class="img-fluid">
                                    <h4>Termite & Rust<br> Resistant</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="kitchen-life">
                                    <img src="{{asset('public/assets/images/kitchen-life/installation.png')}}" alt="" class="img-fluid pb-2">
                                    <h4>Quick <br> Installation</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="kitchen-life">
                                    <img src="{{asset('public/assets/images/kitchen-life/service.png')}}" alt="" class="img-fluid">
                                    <h4>Prompt After-<br> Sales Service</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="#">
        <div class="ek-leftcorner">
            <div class="ek-rightcorner">
                <div class="erognomic-kitchen-section">
                    <div class="container">
                        <h2 class="mb-4">Erognomic Kitchen for<br>the Quintessential Indian</h2>
                        <h4 class="text-muted fw-normal mb-4 pb-2">Discover a head-turning, factory-finished, tailor-made range of Godrej Interio Kitchens and accessories, designed to suit Indian cooking and storage habits.</h4>
                        <div class="row ">
                            <div class="col-lg-6 mb-4">
                                <div class="row">
                                    <div class="col-6 position-relative">
                                        <h2 class="position-absolute text-white fw-normal p-3">Willow Wok<br> Kitchens </h2>
                                        <img src="{{asset('public/assets/images/erognomic-kitchen/willow-bg.png')}}" alt="" class="img-fluid pb-2">
                                    </div>
                                    <div class="col-6">
                                        <h4 class="text-muted fw-normal erognomic-info">Raw appeal of a woody frame work.</h4>
                                    </div>
                                    <div class="col-lg-12 position-relative">
                                        <div class="erognomic-kitchen">
                                            <img src="{{asset('public/assets/images/erognomic-kitchen/willow-work.png')}}" alt="" class="img-fluid pb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="row">
                                    <div class="col-6 position-relative">
                                        <h2 class="position-absolute text-white fw-normal p-3">Steel Chef<br> Kitchens </h2>
                                        <img src="{{asset('public/assets/images/erognomic-kitchen/steel-bg.png')}}" alt="" class="img-fluid pb-2">
                                    </div>
                                    <div class="col-6">
                                        <h4 class="text-muted fw-normal erognomic-info">Strength of steel aesthetics of wood.</h4>
                                    </div>
                                    <div class="col-lg-12 position-relative">
                                        <div class="erognomic-kitchen">
                                            <img src="{{asset('public/assets/images/erognomic-kitchen/steel-chef.png')}}" alt="" class="img-fluid pb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="built-leftcorner">
            <div class="built-rightcorner">
                <div class="built-section">
                    <div class="container">
                        <h2 class="mb-5 pb-3">Built in appliances<br>by Bosch & Siemens</h2>
                    </div>
                    <div class="mb-5">
                        <div class="owl-carousel built-carousel">
                            <div class="item">
                                <img src="{{asset('public/assets/images/build-img/img1.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{asset('public/assets/images/build-img/img2.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{asset('public/assets/images/build-img/img3.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{asset('public/assets/images/build-img/img1.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{asset('public/assets/images/build-img/img2.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{asset('public/assets/images/build-img/img3.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{asset('public/assets/images/build-img/img1.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{asset('public/assets/images/build-img/img2.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{asset('public/assets/images/build-img/img3.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{asset('public/assets/images/build-img/img1.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{asset('public/assets/images/build-img/img2.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{asset('public/assets/images/build-img/img3.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section2" >
        <div class="work-rightcorner">
            <div class="work-section">
                <div class="container">
                    <h2>How Do We Work</h2>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="kitchen-life">
                                <img src="{{asset('public/assets/images/we-work/get-touch.png')}}" alt="" class="img-fluid pb-2">
                                <h3>Get in Touch</h3>
                                <p>Call us with a request for a kitchen redo.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="kitchen-life">
                                <img src="{{asset('public/assets/images/we-work/store.png')}}" alt="" class="img-fluid pb-2">
                                <h3>Visit Store</h3>
                                <p>isit the store to get the feel of Godrej Kitchens</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="kitchen-life">
                                <img src="{{asset('public/assets/images/we-work/visit.png')}}" alt="" class="img-fluid pb-2">
                                <h3>Get a Visit</h3>
                                <p>Our experts will give your kitchen a visit for sizes, shape, and a thorough understanding of your need.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="kitchen-life">
                                <img src="{{asset('public/assets/images/we-work/order.png')}}" alt="" class="img-fluid pb-2">
                                <h3>Place an Order</h3>
                                <p>Once our experts determine your need and quote you a price for it, an order will be placed upon your approval and sent to the parent company.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="kitchen-life">
                                <img src="{{asset('public/assets/images/we-work/custom.png')}}" alt="" class="img-fluid pb-2">
                                <h3>Custom Manufacturing Begins
                                </h3>
                                <p>Godrej Interio Kitchens designs, manufactures, and carefully sends the modular, prefabricated package, which includes even the nuts and bolts, to Kitchenmate.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="kitchen-life">
                                <img src="{{asset('public/assets/images/we-work/installation.png')}}" alt="" class="img-fluid pb-2">
                                <h3>Installation</h3>
                                <p>Our experts install the dream kitchen for you in no time.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!--   <section class="section-partner">
        <div class="container-fluid p-0">
            <div class="owl-carousel  partner-carousel">
                <div class="item h-100">
                    <img src="{{asset('public/assets/images/partner/partner1.png')}}" alt="" class="img-fluid">
                </div>
                <div class="item h-100">
                    <img src="{{asset('public/assets/images/partner/partner2.png')}}" alt="" class="img-fluid">
                </div>
                <div class="item">
                    <img src="{{asset('public/assets/images/partner/partner1.png')}}" alt="" class="img-fluid">
                </div>
                <div class="item">
                    <img src="{{asset('public/assets/images/partner/partner2.png')}}" alt="" class="img-fluid">
                </div>
                <div class="item">
                    <img src="{{asset('public/assets/images/partner/partner1.png')}}" alt="" class="img-fluid">
                </div>
                <div class="item">
                    <img src="{{asset('public/assets/images/partner/partner2.png')}}" alt="" class="img-fluid">
                </div>
                <div class="item">
                    <img src="{{asset('public/assets/images/partner/partner1.png')}}" alt="" class="img-fluid">
                </div>
                <div class="item">
                    <img src="{{asset('public/assets/images/partner/partner2.png')}}" alt="" class="img-fluid">
                </div>
                <div class="item">
                    <img src="{{asset('public/assets/images/partner/partner1.png')}}" alt="" class="img-fluid">
                </div>
                <div class="item">
                    <img src="{{asset('public/assets/images/partner/partner2.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section> -->

<section id="section3" > 
<div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
                <div class="testimonial">
                    <div class="pic">
                        <img src="{{asset('public/assets/images/carousel/img1.png')}}">
                    </div>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto commodi dolorum earum fugiat, fugit hic id, ipsum laborum minus nostrum numquam perspiciatis saepe velit.
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">williamson-</h3>
                        <span class="post">Web Developer</span>
                    </div>
                </div>
 
                <div class="testimonial">
                    <div class="pic">
                        <img src="{{asset('public/assets/images/carousel/img2.png')}}">
                    </div>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto commodi dolorum earum fugiat, fugit hic id, ipsum laborum minus nostrum numquam perspiciatis saepe velit.
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">Kristina-</h3>
                        <span class="post">Web Designer</span>
                    </div>
                </div>
 
                <div class="testimonial">
                    <div class="pic">
                        <img src="{{asset('public/assets/images/carousel/img3.png')}}">
                    </div>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto commodi dolorum earum fugiat, fugit hic id, ipsum laborum minus nostrum numquam perspiciatis saepe velit.
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">Steve Thomas-</h3>
                        <span class="post">Web Developer</span>
                    </div>
                </div>
            </div>
        </div>
          </section>


    <section id="section4" class="contact-section" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contactbox">
                        <form id="contact_form" method="post" name="form">       

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required="">
                            </div>
                            <div class="mb-3">
                                <label for="Mobile" class="form-label">Mobile</label>
                                <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Enter Valid Mob Number" required="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                <textarea class="form-control" name="description" placeholder="Describe Here" id="description" rows="3" required=""></textarea>
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid p-0 bg-dark">
        <p class="text-white mb-0 p-2">© Copyright 2020 Shells Advertising | Privacy Policy</p>
    </div>

    @stop
    @section('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready( function () {

           window.onscroll = function() {
            scrollFunction()
        };
 $("#testimonial-slider").owlCarousel({
        items:2,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        itemsMobile:[650,1],
        pagination:true,
        navigation:false,
        slideSpeed:1000,
        autoPlay:true
    });

        function scrollFunction() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                document.getElementById("navbar").style.padding = "00px 10px";
                document.getElementById("logo").style.width = "70%";
            } else {
                document.getElementById("navbar").style.padding = "0px 10px";
                document.getElementById("logo").style.width = "100%";
            }
        }

        $("#contact_form").validate({
          rules: {
            name: "required",
            email: {
              required: true,
              email: true
          },
          mobile:{
           required: true,
           minlength: 10,
           maxlength: 10,

       }
   },
   messages: {
    mobile:{
       minlength: "Mobile number should be 10 digit",
       maxlength: "Mobile number should be 10 digit"

   },
   name: "Please specify your name",
   email: {
      required: "We need your email address to contact you",
      email: "Your email address must be in the format of name@domain.com"
  },

},

submitHandler: function(contact_form) {
    $.ajax({
        url: "{{url('submit_contact_form')}}",
        type: contact_form.method,
        data: $(contact_form).serialize(),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
           $('#contact_form')[0].reset();

           console.log(data);
           if(data==1)
           {
               var x = document.getElementById("successmsg");
               x.className = "show";
               setTimeout(function() {
                x.className = x.className.replace("show", "");
            }, 3000);                        }
               else{
                var x = document.getElementById("errormsg");
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);
            }        
        }            
    });
}


});
        
    } );


</script>
@stop