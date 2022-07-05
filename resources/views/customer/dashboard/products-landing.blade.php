<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="" content="">
  <title>Best of Yemen Auction 2022</title>
  <link rel="icon" type="image/jpeg" href="{{ asset('public/images/favicon.jpeg') }}">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../Js/bundle.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<style>
  .navbar {
  background-color: white;
  display: flex;
  align-items: center;
  justify-content: space-between;
  font: 20px;
}

.navbar-list {
  list-style: none;
}

.navbar-list .list-items {
  display: inline-block;
  padding: 10px 10px;
  font-weight: 400;
}
#width a img{
  margin-left: 108px;
  margin-top:20px;
  margin-bottom: 15px;
}
.navbar a {
  text-decoration: none;
  color: black;
  margin-left: 5px;
  margin-right: 5px;
}

.menu {
  display: none;
}

.menu-item {
  width: 20px;
  height: 5px;
  background-color: black;
  padding: 2px;
  margin-top: 3px;
}

@media all and (max-width : 999px) {
  #width a img{

    margin-top:20px;
    margin-left: 10px;
  }
  .menu {
      display: block;
      position: absolute;
      right: 15px;
      top: 35px;

  }

  .navbar {
      flex-direction: column;

  }

  .navbar-list .list-items {
      display: block;
      padding: 20px 10px;

  }

  .navbar-list {

      list-style: none;
      text-align: center;
      display: none;
  }

  .active {
      display: block;
  }

}
.bio_graphy h1{
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-size: 70px;
  text-transform: uppercase;
  color: #232B38;
    }
    .bio_graphy h3{
      font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  text-transform: uppercase;
  color: #232B38;
    }
    .region_flex{
      display: flex;
      flex-wrap: wrap;
    }
    .region_text h6{
      font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-size: 26px;
  text-transform: uppercase;
  color: #000000;
    }
    .regional_name h6{
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-size: 26px;
  text-transform: uppercase;
  color: #000000;
    }
    .farmer-display{
      width: 100%;
    }
    .genetics-area p{
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-size: 20px;
  text-transform: uppercase;
  color: #232B38;
    }
    .genetics-area h6{
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  font-size: 70px;
  text-transform: uppercase;
  color: #000000;
    }
    .genetic_content{
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-size: 20px;
  text-transform: uppercase;
  color: #232B38;
    }
    .image_with_text{
      display: flex;
    }
    .image_with_text_image img{
      width: 100%;
      height: 240px;
    }
    .image_with_text_text p{
  font-family: 'Montserrat';
  font-style: italic;
  font-weight: 400;
  font-size: 24px;
  color: #000000;
    }
    .cup-profile{
      text-align: right;
    }
    .cup_profile_datails p{
      font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-size: 20px;
  text-align: right;
  text-transform: uppercase;
  color: #000000;
    }
    .cup_profile_datails h6{
      font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  font-size: 20px;
  text-align: right;
  text-transform: uppercase;
  color: #000000;
    }
    .farmer_cutting h3{
      font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300;
  font-size: 30px;
  text-transform: uppercase;
  color: #232B38;
  margin: 10px 0;
    }
    .farmer_cutting p{
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  font-size: 18px;
  align-items: center;
  color: #000000;
    }

    @media only screen and (max-width:768px){
        .image_with_text_image img{
            height: auto;
        }
    }


   @media only screen and (min-width:768px){
    .img-with-text-mar .col-md-6{
        padding-left: 7px;
        padding-right: 7px;
    }
    .img-with-img-mar .col-md-6{
        padding-left: 5px;
        padding-right: 5px;
    }
    .img-with-img-mar-second .col-md-6{
        padding-left: 9px;
        padding-right: 9px;
    }
    .cup-profile{
        margin-right: 11px;
    }
    .farmer_cutting{
        margin-left: -5px;
    }
   }
</style>
<body>

  <nav class="navbar navbar-fix">
    <div id="width"><a href="{{url ('/index-new')}}"><img  src={{ asset('public/images/logo.land.png') }}  width="180px"  alt="">
        </a>
    </div>
    <div>
        <ul class="navbar-list" style="margin-right: 15px; " id="nav-list">
            {{-- <li class="list-items"> <a style="
              font-weight: 500;
          " >SIGN IN </a>
            </li>

            <li class="list-items"> <a style="
              font-weight: 500;
          " > PURCHASE SAMPLE SET </a>
            </li>
            <li class="list-items"> <a style="
              font-weight: 500;
          " > WINNING COFFEES </a>
            </li> --}}
            <a href="#"><i class="fa fa-instagram" ></i> </a>
            <a  href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>

            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>


        </ul>
    </div>
    <div class="menu" id="toggle-button">
        <div class="menu-item"></div>
        <div class="menu-item"></div>
        <div class="menu-item"></div>
    </div>



</nav>
<script>
    const togglebutton = document.getElementById('toggle-button');
    const navbutton = document.getElementById('nav-list');
    togglebutton.addEventListener('click', () => {
        navbutton.classList.toggle('active');
    })
</script>
  <div class="container">
     <div class="row">
      <div class="col-md-12">
        <div class="bio_graphy">
             <h1>#{{$winningCoffeesData->rank}}</h1>
             <h1>{{$winningCoffeesData->name}}</h1>
             <h3>{{$winningCoffeesData->code}}</h3>
        </div>

        <div class="region_flex">
          <div class="region_text">
              <h6>REGION :&nbsp; </h6>
          </div>
          <div class="regional_name">
                <h6>{{$winningCoffeesData->village}} <&nbsp; </h6>
          </div>
          <div class="regional_name">
            <h6>{{$winningCoffeesData->region}} <&nbsp; </h6>
          </div>
          <div class="regional_name">
            <h6>{{$winningCoffeesData->governorate}} &nbsp; </h6>
          </div>
          <div>

          </div>
        </div>
        <div class="region_flex">
          <div class="region_text">
              <h6>ALTITUDE : &nbsp; </h6>
          </div>
          <div class="regional_name">
                <h6>{{$winningCoffeesData->altitude}}</h6>
          </div>
          <div>

          </div>
        </div>
      </div>
     </div>
     <div class="row img-with-text-mar">
        <div class="col-md-6">
            <img class="farmer-display" src="{{ asset('/public/images/Product_images/'.$winningCoffeesData->images[0]->image_1)}}"alt="">
        </div>
        <div class="col-md-6">
           <div class="genetics-area">
             <p style="margin-bottom: 0;"> JURY SCORE</p>
             <h6>{{$winningCoffeesData->score}}</h6>
           </div>
           <div class="region_flex">
            <div class="region_text">
                <h6>LOT SIZE :&nbsp; </h6>
            </div>
            <div class="regional_name">
                  <h6>{{$winningCoffeesData->quantity}}LBS</h6>
            </div>
          </div>
          <div class="region_flex">
            <div class="region_text">
                <h6>PROCESS :&nbsp;  </h6>
            </div>
            <div class="regional_name">
                  <h6>{{$winningCoffeesData->process}}</h6>
            </div>
          </div>
          <div class="genetic_content">
            <p>Authentication of <i>Coffeea Arabica</i> genetics
              using DNA fingerprinting technology.</p>
          </div>
          <div class="region_flex">
            <div class="region_text">
                <h6>GENETICS :&nbsp; </h6>
            </div>
            <div class="regional_name">
                  <h6>{{$winningCoffeesData->genetics}}</h6>
            </div>
          </div>
          <div class="row">
                <div class="col-md-6">
                    <div class="image_with_text_image">

                      <img src={{ asset('/public/images/Product_images/'.$winningCoffeesData->images[0]->image_2)}} alt="">
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="image_with_text_text">
                    <p><i>“Coffee supports me in my illness and happiness.
                     I will not stop growing coffee until the last day of my life”.</i></p>
                 </div>
                </div>
          </div>
        </div>
     </div>
     <div class="row mt-1 img-with-img-mar mb-3">
        <div class="col-md-6">
         <div class="row">
           <div class="col-md-6">
           </div>
           <div class="col-md-6">
            <div class="cup-profile">
              <img style="width:100%;" src={{ asset('/public/images/Product_images/'.$winningCoffeesData->images[0]->image_3)}}  alt="">
              <div class="cup_profile_datails">
                <p style="margin-bottom: 0;">Cup profile:</p>
                <h6>JASMINE / PEACH / HONEY / BERGAMOT / APRICOT / VANILLA / APPLE PIE</h6>
                <p></p>
              </div>
              </div>
           </div>
         </div>
        </div>
        <div class="col-md-6">
        <div class="farmer_cutting">
          <img style="width: 100%;" src={{ asset('/public/images/Product_images/'.$winningCoffeesData->images[0]->image_4)}} alt="">
        <h3>the human behind the coffee</h3>
        <p style="margin-bottom: 0;">Ali is 65 years old. He has 6 children. He started growing coffee when he was 20 years old beside his father with love. He joined the army for 35 years and then retired, even when he was away from the farm he always thought of it.
          After his father passed away, he took full responsibility of taking care of the farm with the help of his brother.
          When their sons grew up, they stood by side him to help him on the farm until he until became one of the best farmers in the village
          He advises all Yemeni farmers to pay attention to agriculture in general, and in particular to coffee cultivation. He also advises them to use natural manure and take care of watering.
          ​​His farm is about 250 Libna San'ani (One Libna= 44 square meters). He grows Odeni, Doaeri and Tofahi coffee on his farm. Alongside coffee, he grows a small amount of grain.
          Coffee is the wealth of all Yemenis.
          </p>
        </div>
        </div>
     </div>
     <div class="row img-with-img-mar-second mt-2 mb-3">
      <div class="col-md-6">
       <div class="row">
         <div class="col-md-6">
         </div>
         <div class="col-md-6">
          <div class="cup-profile2">
            <img style="width:100%;" src={{ asset('/public/images/Product_images/'.$winningCoffeesData->images[0]->image_5)}} alt="">
            </div>
         </div>
       </div>
      </div>
      <div class="col-md-6">
     <div class="row">
       <div class="col-md-6">
        <div class="farmer_cutting2">
          <img style="width: 100%;" src={{ asset('/public/images/Product_images/'.$winningCoffeesData->images[0]->image_6)}}  alt="">
        </div>
       </div>
       <div class="col-md-6">

       </div>
     </div>
     <div class="farmer_cutting">
      <h3>the region of bait alal</h3>
        <p style="margin-bottom: 0;">Bait Alal is located in the region of Hayma Kharijiya in Sana’a. It is home to 300 farming families and the Bait Alal is perched on a mountain top at an altitude of 2300 metres above sea level. The farmers in Bait Alal see the coffee tree as a symbol of pride and they believe that coffee originated from this area.
          The land has been passed down through the generations, some of the farmers have ownership documents that show that the lands and the coffee trees date back a few hundred years. The farmers face difficulties due to the harsh climate which is one of the reasons for low yields being produced. However, no matter how small the harvest is or how harsh the conditions, the farmers never abandon their coffee trees.
          Bait Alal is also home to Al Ruwad is Yemen’s largest and most established specialty coffee cooperative, serving 285 families – the equivalent of around 2000 people.

          </p>
     </div>
      </div>
   </div>
  </div>
</body>
<section class="section-4">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 pb-2 text-center section-4-img">
                <img src="./images/LOGO_0003_Vector-Smart-Object 1.png" alt="">
            </div>
            <div class="col-lg-12 text-center section-4-text-1">
                <p class="time real-timer m-0"></p>
                <p class="date">AUGUST 9<sup>th</sup> </p>
            </div>
        </div>


        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">

            </div>
            <div class="col card-display-3">
                <div class="card bg-none text-color h-100">
                    <p class="m-0 text-start">2:00pm BST &nbsp;- London, United Kingdom</p>
                    <p class="m-0 text-start">6:00am PDT &nbsp;- LA, USA</p>
                    <p class="m-0">9:00am EDT &nbsp;&nbsp;- NY, USA</p>
                    <p class="m-0">3:00pm CEST - Amsterdam, Netherlands</p>
                    <p class="m-0">4:00pm AST &nbsp;&nbsp;- Riyadh, Saudi Arabia</p>
                    <p class="m-0">5:00pm GST &nbsp;&nbsp;- Dubai, UAE</p>
                    <p class="m-0">9:00pm HKT &nbsp;&nbsp;- Hong Kong, Hong Kong</p>
                    <p class="m-0">10:00pm JST &nbsp;&nbsp;- Tokyo, Japan</p>
                    <p class="m-0">10:00pm KST &nbsp;- Seoul, South Korea</p>
                    <p class="m-0">11:00pm AEST - Sydney, Australia</p>
                </div>
            </div>

        </div>
        <hr class=" text-white border" style="margin-top:40px;">
        <div class="footerz">
            <div class="row text-center">
                <div class="col-12 my-2">
                    <span class="text-color-size">For the latest news and updates</span>
                </div>
                <div class="col-12">
                    <a type="button" class="btn btn-outline-light" id="signup-for-newsletter"
                        href="javascript:void(0)">SIGN UP FOR NEWSLETTER</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="modal" tabindex="-1" role="dialog" id="newsltterModel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">SIGN UP FOR NEWSLETTER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" placeholder="Enter Your Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" placeholder="Enter Your Email" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark">Submit</button>
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>
</section>
</html>
