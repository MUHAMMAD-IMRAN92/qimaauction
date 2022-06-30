<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>page3</title>
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
    background-image: url('././././public/images/banner2.png');
    background-repeat: no-repeat;
    background-attachment:scroll;
    background-size:cover;
    background-position: center center;
    width:100%;
    height :189px;
    
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
    
#footer1 .search-bar{
    margin-bottom:20px;
    margin-left:20px;
}

.container{
    padding:20px;
}
}

    







.low{
    margin-top:30px;
}
#footer1 li{
    font-size:12px;
}
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
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
    <a href="#"><img src=
        "././././public/images/avatar.png" alt="Avatar" class="avatar"></a>
    
        <a href="#"><p>LOG OUT</p></a>
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


</div>
<section>
 
</section>
</section>

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
    position: relative; ">
       
        <input  type="text" placeholder="Search"  class="search-bar" >
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