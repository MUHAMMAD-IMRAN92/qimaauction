<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best of Yemen Auction 2022</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="icon" type="image/jpeg" href="{{ asset('public/images/favicon.jpeg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Fonts Start  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;1,300&display=swap"
        rel="stylesheet">

    <!-- Fonts End      -->

</head>
<style>
    tr.hide-table-padding td {
        padding: 0;
    }

    .expand-button {
        position: relative;
    }

    .accordion-toggle .expand-button:after {
        position: absolute;
        left: .75rem;
        top: 50%;
        transform: translate(0, -50%);
        content: '-';
    }

    .accordion-toggle.collapsed .expand-button:after {
        content: '+';
    }

    /* The sidebar menu */
    .sidebar {
        height: 100%;
        /* 100% Full-height */
        width: 0;
        /* 0 width - change this with JavaScript */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Stay on top */
        top: 0;
        right: 0;
        background-color: #FFFFFF;
        /* Black*/
        overflow-x: hidden;
        /* Disable horizontal scroll */
        padding-top: 60px;
        /* Place content 60px from the top */
        transition: 0.5s;
        /* 0.5 second transition effect to slide in the sidebar */
    }

    /* The sidebar links */
    .sidebar a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    /* When you mouse over the navigation links, change their color */
    .sidebar a:hover {
        color: #f1f1f1;
    }

    /* Position and style the close button (top right corner) */
    .sidebar .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }


    /* The button used to open the sidebar */
    .openbtn {
        font-size: 20px;
        cursor: pointer;
        /* background-color: #111; */
        /* color: white; */
        padding: 10px 15px;
        border: none;
    }

    .input-group {
        justify-content: flex-end;
         !important
    }

    /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
    #main {
        transition: margin-left .5s;
        /* If you want a transition effect */
        padding: 20px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
        .sidebar {
            padding-top: 15px;
        }

        .sidebar a {
            font-size: 18px;
        }
    }

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

    .navbar p {
        display: inline;
    }

    .navbar a p {
        font-family: 'play-fair';
    }

    #background {
        background-image: url("{{ asset('public/images/banner2.png') }}");
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: 189px;

    }

    .imglogo {
        position: absolute;
        top: 92px;
        left: 100px;

    }

    .imglogo img {
        width: 212px;
        height: 122px;
    }

    #footer1 {
        background-color: #D1AF69;
        color: black;


    }

    #footer1 .search-bar {
        margin-top: 10px;
        width: 100%;

        color: #646C78;
        background-color: #D1AF69;

        border: 1px solid #646C78;
        border-radius: 5px;

    }

    #footer1 h2 {
        font-size: 22px;
    }

    .last-section {
        text-align: center;
        background-color: #D1AF69;



    }

    .last-section h3 {
        color: black;
        font-size: 22px;
        padding-bottom: 20px;
        margin-left: 15px;
        padding-left: 0px;
    }


    @media all and (max-width : 768px) {

        #footer1 {
            display: flex;
            flex-direction: column;
            text-align: center;

        }

        #footer1 .search-bar {
            margin-bottom: 20px;
            margin-left: 20px;
        }

        .container {
            padding: 20px;
        }
    }









    .low {
        margin-top: 30px;
    }

    #footer1 li {
        font-size: 12px;
    }

    .avatar {
        vertical-align: middle;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .search-icon {
        position: absolute;
        top: 15px;
        right: 15px;
    }

    .col-2 h2 {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        font-size: 50px;

        /* identical to box height */

        text-align: center;
        margin-bottom: 0px;
        color: #4D3705;
    }

    .col-2 h6 {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;

        /* identical to box height */

        text-align: center;

        color: #4D3705;

    }

    .col-8 p {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 24px;
        /* identical to box height */

        text-align: center;

        color: #FF0000;

    }

    .box {
        width: 460px;
        border: 3px solid #D1AF69;
        margin-top: 20px;
    }
</style>

<body>
    <section>
        <div class="navbar">
            <a href="#"><img src="././././public/images/avatar.png" alt="Avatar" class="avatar"></a>

            <a href="{{ route('user_logout') }}">
                <i class="fa fa-sign-out" title="Logout"></i>
            </a>
            <a target="_blank" href="https://www.instagram.com/qimacoffee/"><i title="Follow us on Instagram" class="fa fa-instagram"></i> </a>
            <a target="_blank" href="https://www.facebook.com/qimacoffee/"><i title="Follow us on Facebook" class="fa fa-facebook"></i></a>
            <a target="_blank" href="https://www.linkedin.com/company/qima-coffee/mycompany/"><i title="Follow us on Linkedin" class="fa fa-linkedin" aria-hidden="true"></i> </a>

            <a target="_blank" href="https://www.youtube.com/channel/UCcgmMB11TkfAsGO1uiHuKnQ"><i title="View our Youtube Channel" class="fa fa-youtube-play" aria-hidden="true"></i> </a>
        </div>
    </section>
    <section>
        <div id="background">
            <div class="imglogo">
                <img src="{{ asset('public/images/logo-banner.png') }}" width=40px alt="">
            </div>
        </div>
        <div class="container box">

            <div class="row" style="
    text-align: center;
    justify-content: center;

">

                <div class="col-2">

                    <h2>00</h2>
                    <h6>Days </h6>
                </div>

                <div class="col-2">
                    <h2>00</h2>
                    <h6>Hours </h6>

                </div>
                <div class="col-2">
                    <h2>00</h2>
                    <h6>Minutes</h6>

                </div>
                <div class="col-2">
                    <h2>00</h2>
                    <h6>Seconds </h6>

                </div>



            </div>
            <div class="row" style="
        text-align: center;
        justify-content: center;
    ">
                <div class="col-8">
                    <p style="
                color: red;
                font-size: small;
            ">5 Auction
                        products awaitng for first bid to start time</p>
                </div>



            </div>



        </div>
        <section>
            <div class="container" style="
    display: flex;
    justify-content: flex-end;
    margin-top:40px;
">
                <div class="row">
                    <div class="col-4 " style="
            display: contents;">
                        <form>
                            <label
                                style="
                    font-size: 18px;
                    padding: 10px;
                "
                                for="cars">Process</label>
                            <select style="font-size: 20px;width: 150px;padding: 4px;border-radius: 6px;" name="cars"
                                id="cars">
                                <option value="volvo">All</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                    </div>

                    </form>
                    <div class="col-4" style="
                  display: contents;">
                        <form>
                            <label
                                style="
                        font-size: 18px;
                        padding: 10px;
                    "
                                for="cars">Genetics</label>
                            <select style="font-size: 20px;width: 150px;padding: 4px;border-radius: 6px;" name="cars"
                                id="cars">
                                <option value="volvo">All</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>

                        </form>
                    </div>
                    <div class="col-4" style="
                      display: contents;">
                        <form>
                            <label
                                style="
                            font-size: 18px;
                            padding: 10px;
                        "
                                for="cars">LOT Name</label>
                            <select style="font-size: 20px;width: 150px;padding: 4px;border-radius: 6px; "
                                name="cars" id="cars">
                                <option value="volvo">All</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>

                            </select>


                        </form>
                        <a href="#" style="color: #7A602B;padding: 12px;">Clear All</a>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </section>
    <div class="row">
        <div class="col-2 ">
            <ul class="nav navbar-nav float-right">
                <li class="dropdown dropdown-user nav-item">
                    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                        @php
                            $user = Auth::user();
                        @endphp
                        <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">
                                {{ Str::upper($user->name ?? '') }}</span></div><span><img class="round"
                                src="../../../public/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar"
                                height="40" width="40"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i
                                class="feather icon-power"></i>
                            Logout</a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 pb-2 text-center section-4-img">
            <img src="https://bestofyemenauction.com/public/images/LOGO_0003_Vector-Smart-Object 1.png" alt="">
        </div>
        <div class="col-lg-12 text-center section-4-text-1">
            <p class="time real-timer m-0"></p>
            @php
                $date = date('j F Y', strtotime($auction->startDate));
            @endphp
            <p class="date">{{ $date }}</p>
        </div>
    </div>


    <div class="container-fluid" id="footer1">
        <div class="row  " style="padding: 20px;">
            <div class="col-md-3 low">
                <h2><b>LEGAL</b></h2>
                <p>Term and Conditions</p>
                <p>Term of Use</p>
                <p> Privacy Policy</p>
                <p>Cookie Policy</p>

            </div>
            <div class="col-md-3 search-bar1 low">
                <h2><b>SEARCH</b></h2>
                <div style="
    position: relative; ">

                    <input type="text" placeholder="Search" class="search-bar">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <div class="col-md-3 low">
                <h2><b>QUICK LINKS</b></h2>
                <p>Contact us</p>
                <p> Blog</p>
                <p>FAQ</p>
                <p>Our Sponsors</p>

            </div>


            <div class="col-md-3 low">
                <h2><b>QIMA COFFE AUCTION</b></h2>
                <p> <img src="././././public/images/home-icon1.png" style="margin-right:10px;" alt=""> 2250
                    NW 22nd Ave #612 Po-rtland OR 97210</p>
                <p><img src="././././public/images/call-icon1.png" alt="" style="margin-right:10px;">(503)
                    208-2872</p>
                <p> <img src="././././public/images/message-icon1.png" style="margin-right:10px;"
                        alt="">support@qimauction</p>


            </div>




            <div class=" row last-section ">
                <h3>© 2022 QIMA Coffee Auction. All Rights Reserved. </h3>
            </div>
        </div>
    </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>


    <!-- </div> -->
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>


<script>
    // Set the date we're counting down to
    var date = `{{ date('m-d-Y H:i:s', strtotime($auction->startDate)) }}`;
    var countDownDate = new Date(date);
    // {new Date("Aug 9, 2022 00:00:00").getTime();}

    // Update the count down every 1 second
    var x = setInterval(function() {
        // debugger

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        if (hours < 10) {
            hours = "0" + hours;
        }
        if (seconds < 10) {
            seconds = "0" + seconds;
        }
        if (days < 10) {
            days = "0" + days;
        }
        if (minutes < 10) {
            minutes = "0" + minutes;
        }
        // Output the result in an element with id="demo"
        $(".real-timer").text(days + ":" + hours + ":" +
            minutes + ":" + seconds);
        //   document.getElementsByClassName("real-timer").innerHTML = days + ":" + hours + ":"
        //   + minutes + ":" + seconds + ":";

        // If the count down is over, write some text
        //   if (distance < 0) {
        //     clearInterval(x);
        //     document.getElementById("demo").innerHTML = "EXPIRED";
        //   }
    }, 1000);
    $("#signup-for-newsletter").on("click", function() {
        $("#newsltterModel").modal("show");
    });

    /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>

</html>
