<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>page1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .navbar {
        width: 100%;
        background-color: #D1AF69;
        overflow: auto;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
    }

    .navbar a {
        float: left;
        padding: 8px;
        color: Black;
        text-decoration: none;
        font-size: 17px;
        
        
    }
    .navbar p{
        display :  inline;
    }
    .navbar a p{
        font-family:'play-fair';
    }
#background{
    background-image: url('././././public/images/comingsoon_banner.png');
    background-repeat: no-repeat;
    background-attachment:scroll;
    background-size:cover;
    background-position: center center;
    width:100%;
    height :489px;
    
}
 .imglogo{
    position : absolute;
    top:92px;
    left:100px;
    
 }   
 .imglogo img{
    width:212px;
    height:122px;
 }
 .heading1 h2{
    text-align:center;
    color :#7A602B;
    font-style: normal;
font-weight: 400;
font-size: 66px;
line-height: 88px;
letter-spacing: 0.1em;
margin-top:30px;
font-family:'play-fair';


 }
 .button1{
    text-align:center;
    margin-top:20px;
    
 }
 .button1 button{
    background-color:#143D30;
    color:white;
    font-size:24px;
    font-family: 'Open Sans';
font-style: normal;
font-weight: 400;
width: 166.92px;
 }
 .para{
    text-align:center;
    font-size:24px;
    line-height:32px;
   display:flex;
   justify-content:center;
   align-items:center;
   flex-direction :column;
    background-color :#D9D9D9;
    padding:60px;

 }
.para p{
    margin-top:20px;
    color:
#4D3705;

}
.para b{
    color:
#4D3705;
}
.para a{
    color:
#000000;

}
.img-part{
    padding-left:0px;
     
}

.row{
    margin-top:30px;
}
.lower-mid{
    text-align:center;
    
    font-family:'play-fair';
    


color: #7A602B;

}
.lower-mid h2{
    margin-top:40px;
    font-size:66px;
}
.lower-mid p{
    font-size:22px;
}


.lower-mid-1 img{
    width:350px;

}

.lower-mid-1 h4{
    color:#4D3705;
    font-size:22px;
    font-style: normal;
font-weight: 700;
    line-height: 32px;
    font-family:'play-fair';
    
    
}
.lower-mid-1 p{
   
    color:black;
    font-size:18px;
    font-family:'play-fair';
    margin-bottom:0px;
    margin-top:20px;
    letter-spacing:3px;

  
}

.lower-mid-1 h6{
    color: #4D3705;
    font-weight: 400;
font-size: 18px;
line-height: 24px;
font-family:'play-fair';
margin-top:20px;

}
.lower-mid-1 a{
    color:black;
    font-family: 'Open Sans';
font-style: normal;
font-weight: 400;
font-size: 22px;
line-height: 30px;
margin-top:15px;
}
.lower-end{
    text-align:end;
}
.lower-end a{
    color:black;
    text-decoration:none;
    font-size:22px;
    padding:10px;
}
#footer1 {
    background-color: #D1AF69;
    color: black;
  
    
}
#footer1 .search-bar{
    margin-top: 10px;
    width :100%;
 
   color:#646C78 ;
   background-color: #D1AF69;
   
   border: 1px solid #646C78;
border-radius: 5px;
   
}
#footer1 h2{
    font-size:22px;
}
.last-section{
    text-align:center;
    background-color:#D1AF69;
   
    
    
}
.last-section h3{
    color:black;
    font-size:22px;
    padding-bottom:20px;
    margin-left:15px;
padding-left:0px;  
}


@media all and (max-width : 768px) {
    
    #footer1{
        display: flex;
        flex-direction: column;
        text-align: center;

    }
    .heading1 h2{
        font-size:40px;

    }
    .para{
        font-size:15px;
    }
    .img-part img{
        height: 300px;
    }
    .lower-mid h2{
        font-size:40px;
    }
    .lowe-mid-1 img{
        margin-top:20px;
    }
#footer1 .search-bar{
    margin-bottom:20px;
    margin-left:20px;

}

.container{
    padding:20px;
}
}
@media all and (max-width : 1250px){
    .lower-mid-1 img{
        width: -webkit-fill-available;

    }
    



}
@media all and (max-width : 1750px){
    .img-part img{
        width: -webkit-fill-available;
    }

}
@media all and (max-width : 1350px)
{
  .img-part img{

  }
}
@media all and (min-width : 768px){
    .lower-mid-1 .lower-mid-1part img{
       height:190px;
        }
        .up{
            position:absolute;
            left:90px;
    }
    }
    @media all and (max-width : 995px) and (min-width : 768px){

        .lower-mid-1 .lower-mid-1part img{
       height:140px;
        }

    }
    @media all and (min-width : 1200px){
        .lower-mid-1 .lower-mid-1part img{
       height:230px;
        }
    }
.low{
    margin-top:30px;
}

.up h2{
    color:white;
    font-size:20px;
    padding:20px;
}
.up h2 b{
    color :#D1AF69

}
.up{
    position:absolute;
    
top: 294px;
background: rgba(0, 0, 0, 0.8);

}

.search-icon{
 position:absolute;
 top:15px;
 right:15px;
}





</style>

<body>

<section>
    <div class="navbar">
    
        <a href="#"><p>LOG IN</p></a>
    <a href="#"><i class="fa fa-instagram" ></i> </a>
        <a  href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>
        
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
    </div>
    </section>
    <section>
<div id="background">
    <div class="imglogo">
        <img src="././././public/images/logo-banner.png" width=40px alt="">

    </div>
    <div class="up">
        <h2>UPCOMING AUCTION : <b> 17 March 22</b></h2>
    </div>


</div>
</section>
<section>
    <div class="heading1"><h2>UPCOMING AUCTION</h2></div>
    <div class="button1"><button >View All</button></div>
    
</section>
<section>
    <div class="heading1"><h2>PRESS RELEASE</h2></div>
</section>
<section><div class=container-fluid>
    <div class="row">
    <div class= "col-xl-6 para">
   <b> Cypher Urban Roastery Secures Rare Coffee Lot At The Best Of Yemen Auction In A Bid To Bring The Finest Of Authentic Yemeni Coffee To The UAE</b>
   <p>Yemen lays claim to the birth of the coffee industry and is among the oldest and most highly praised coffee in the world. Yemen lays claim to the birth of the coffee industry and is among the oldest and most highly praised coffee in the world. Yemen lays claim to the birth of the coffee industry and is among the oldest and most highly praised coffee in the world. Yemen lays claim to the birth of the coffee industry and is among the oldest and most highly praised coffee in the world.</p>
   <a href="#">Read more</a>
    </div>
    <div class= "col-xl-6 img-part">
    <img src="././././public/images/mid-part.png" width="870px" height="641px" alt="">


    </div>

    <div class="col-md-12 lower-mid">
        <h2>LATEST NEWS</h2>
        <P>Subscribe to learn more about us</P>

    </div>
    </div>
</section>

<section>
    <div class="container">

    <div class="row ">

    <div class="col-md-4 lower-mid-1">
        <div class="lower-mid-1part">
            <img src="././././public/images/lower-mid-first.png"  alt="">
            <p>2/14/22</p>
            
            
            <h4>Cypher Urban Roastery Secures Rare Coffee Lot At The Best Of Yemen Auction In A Bid To Bring The Finest Of Authentic Yemeni Coffee To The UAE</h4>
         <a href=""><i class="fa-solid fa-arrow-right"></i></a>
         <h6>Yemen lays claim to the birth of the coffee industry and is among the oldest and most highly praised coffee in the world.</h6>
        <a href="#">Read more</a>
        </div>

    </div>
    <div class="col-md-4 lower-mid-1">
        <div>
            <img src="././././public/images/lower-mid-2.png" alt="">
            <p>2/14/22</p>
            
            
            <h4>Cypher Urban Roastery Secures Rare Coffee Lot At The Best Of Yemen Auction In A Bid To Bring The Finest Of Authentic Yemeni Coffee To The UAE</h4>
        <a href=""><i class="fa-solid fa-arrow-right"></i></a> 
         <h6>Yemen lays claim to the birth of the coffee industry and is among the oldest and most highly praised coffee in the world.</h6>
        <a href="#">Read more</a>
        </div>

    </div>
    <div class="col-md-4 lower-mid-1">
        <div>
            <img src="././././public/images/lower-mid-3.png" alt="">
            <p>2/14/22</p>
            
            
            <h4>Cypher Urban Roastery Secures Rare Coffee Lot At The Best Of Yemen Auction In A Bid To Bring The Finest Of Authentic Yemeni Coffee To The UAE</h4>
       <a href=""> <i class="fa-solid fa-arrow-right"></i></a> 
         <h6>Yemen lays claim to the birth of the coffee industry and is among the oldest and most highly praised coffee in the world.</h6>
        <a href="#">Read more</a>
        </div>

    </div>
    </div>
    <div class="row">
        <div class="col-12 lower-end"><a href="#">Older Posts <i class='fas fa-angle-right'></i></a></div>
    </div>
    </div>
</section>
<section>
<div class="container-fluid" id="footer1" >
    <div class="row  " style="padding: 20px;">
    <div class="col-md-3 low" >
        <h2  ><b>LEGAL</b></h2>
       <p>Term and Conditions</p> 
       <p>Term of Use</p> 
       <p> Privacy Policy</p> 
       <p>Cookie Policy</p> 
        
    </div>
    <div class="col-md-3 search-bar1 low" >
        <h2 ><b>SEARCH</b></h2>
       <div style="
    position: relative; "
>
      
        <input  type="text" placeholder="Search"  class="search-bar"  >
        <i class="fas fa-search search-icon"></i>
        
        </div>
    </div>
    <div class="col-md-3 low"  >
        <h2 ><b>QUICK LINKS</b></h2>
       <p>Contact us</p> 
       <p> Blog</p>
     <p>FAQ</p>   
       <p>Our Sponsors</p> 
        
    </div>


    <div class="col-md-3 low" >
        <h2   ><b>QIMA COFFE AUCTION</b></h2>
       <p> <img src="././././public/images/home-icon1.png"  style="margin-right:10px;" alt=""> 2250 NW 22nd Ave #612 Po-rtland OR 97210</p>
      <p><img src="././././public/images/call-icon1.png" alt="" style="margin-right:10px;">(503) 208-2872</p> 
      <p> <img src="././././public/images/message-icon1.png"  style="margin-right:10px;" alt="">support@qimauction</p>
      
        
    </div>




<div class=" row last-section ">
    <h3>© 2022 QIMA Coffee Auction. All Rights Reserved. </h3>
</div>
</div>
</div>
</section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>