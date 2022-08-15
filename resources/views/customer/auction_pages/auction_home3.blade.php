<html lang="en">
<!--#fae2e2-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best of Yemen Auction 2022</title>
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" type="image/jpeg" href="{{ asset('public/images/favicon.jpeg') }}">

    <!-- Fonts Start  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;1,300&display=swap"
        rel="stylesheet">
    {{-- web sockets --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.5.1/socket.io.min.js"></script>
    <script type="text/javascript">
        var socket = io('<?= env('SOCKETS') ?>');
    </script>
</head>
<style>
    #mySidebar{
        box-shadow: -5px 0px 4px rgba(0, 0, 0, 0.2);
    }
    body {
        font-family: Arial, Helvetica, sans-serif;
        display: flex;
    flex-direction: column;
    height: 100vh;
    margin: 0;

    }
    .navbar {
  background-color: white;
  display: flex;
  align-items: center;
  justify-content: space-between;
      width: 90%;
    margin: 10px auto;
}

.navbar-list {
  list-style: none;
  padding-left: 0;
  margin-bottom: 0
}

.navbar-list .list-items {
  display: inline-block;
  padding: 10px 10px;
  font-weight: 400;
}
#width a img{
  /* margin-left: 108px;
  margin-top:20px;
  margin-bottom: 15px; */
}
.navbar a {
  text-decoration: none;
  color: black;
  margin-left: 5px;
  margin-right: 5px;
}
    /* .navbar {
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
    } */

    .footer{
            background-color: #232B38;
    position: relative;
    width: 100%;
    margin-top: auto;
    }
    .footer img {
    height: auto;
    width: 270px;
    max-width: 100%;
}

    #background {
        background-image: url({{ asset('public/images/banner2.png') }});
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

    /* Footer css */
    .footer-policy a,
    .footer-links a {
        font-size: 18px;
        line-height: 24px;
        font-family: Montserrat;
        color: black;
        display: block;
        text-decoration: none;
        margin: 5px 0;
    }

    .footer-policy h2,
    .footer-search h2,
    .footer-links h2,
    .footer-contact h2 {
        font-size: 22px;
        line-height: 26px;
        font-family: Montserrat;
        color: black;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .footer-policy,
    .footer-search,
    .footer-links,
    .footer-contact {
        margin-top: 20px;
    }

    .footer-contact p {
        display: flex;
        margin-bottom: 15px;
    }

    .footer-contact p img {
        width: auto;
        height: 20px;
        margin-right: 10px;
    }

    .footer-container {
        background-color: #D1AF69;
        color: black;
        padding: 30px;
        font-family: 'Montserrat';
    }

    .searchbar-container--footer {
        position: relative;
        border: 1px solid black;
        width: 80%;
        border-radius: 3px;
        margin-bottom: 10px;
    }


    .footer-container .search-bar {
        width: 100%;
        color: black;
        background-color: transparent;
        border: transparent;
        padding: 5px;
    }

    .footer-copyright {
        text-align: center;
        background-color: #D1AF69;
        margin-top: 20px;
    }

    .footer-copyright h3 {
        color: black;
        font-size: 16px;
        line-height: 24px;
    }


    .low {
        margin-top: 30px;
    }


    .avatar {
        vertical-align: middle;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .search-icon {
        position: absolute;
        top: 8px;
        right: 10px;
        color: #8b7f7f;
        font-size: 18px;
    }

    .img-vector {
        width: 8px;
        margin-bottom: 3px;
        margin-right: 6px;
    }

    p {
        font-style: normal;
        font-weight: 500;
        font-size: 17px;
        line-height: 20px;
    }

    b {

        font-style: normal;
        font-weight: 600;
        font-size: 24px;
        line-height: 30px;
    }

    .footer-head {
        padding: 20px;
    }

    .position-bar {

        position: relative;
    }

    .p-low {

        line-height: 35px;
        display: block;
    }

    .p-low img {
        margin-right: 10px;
    }

    /* auction table css */
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
    /* .sidebar a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    } */

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

    .finalliabilitytr {
        text-align: center
    }

    /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
    #main {
        transition: margin-left .5s;
        /* If you want a transition effect */
        padding: 20px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */


    .nav-tabs .nav-link {
        border: 1px solid #9C9C9C !important;
        border-top-left-radius: 10px !important;
        border-top-right-radius: 10px !important;
    }

    .nav-tabs .nav-link.active {
        color: white !important;
    }

    .nav-tabs .nav-item.nav-link {
        color: #9C9C9C;
    }

    .auctiontable thead {
        background: #E5E5E5;
        border-width: 1px 0px;
        border-style: solid;
        border-color: #9C9C9C;
    }

    .auctiontable thead th {
        font-family: 'Montserrat';
        font-weight: 700;
        font-size: 16px;
        line-height: 20px;
        text-align: center;
        padding: 10px 8px;
    }

    .auctiontabs a.active {
        background: #D1AF69 !important;
        border-width: 1px 1px 0px 1px;
        border-style: solid;
        border-color: #9C9C9C;
        border-radius: 10px 10px 0px 0px;
    }

    .changecolor {
        background: #DBFFDA;
    }

    .changecolorLose {
        background: #f7e98f;
    }


    .changecolorwining {
        background: #DBFFDA;
        border-width: 1px 0px;
        border-style: solid;
        border-color: #9C9C9C;
    }

    .alertmsg {
        background: #DBFFDA;
    }

    .errormsgautobid {
        /* background: #DBFFDA; */
        margin-top: 12px;
    }

    .errormsgautobidAmount {
        background: #DBFFDA;
        margin-top: 12px;
    }

    .liabilitytable thead {
        box-sizing: border-box;
        background: #E5E5E5;
        border-width: 1px 0px;
        border-style: solid;
        border-color: #9C9C9C;
    }

    .auctiontable tbody tr td a {
        font-size: 18px;
        line-height: 25px;
        text-align: center;
        padding: 2px;
    }

    .auctiontable tbody tr td {
        font-family: 'Montserrat';
        Font-size: 18px;
        Line-height: 22px;
        color: #000000;
        padding: 10px 4px;
        border: none;
        text-align: center;
    }

    .fw-bold {
        font-weight: bold;
    }

    .tr-bb {
        border-bottom: 1px solid #9C9C9C;
    }

    .yourscore {
        max-width: 40px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    .auctiontabs a.active {
        background: #D1AF69 !important;
        border-width: 1px 1px 0px 1px;
        border-style: solid;
        border-color: #9C9C9C;
        border-radius: 10px 10px 0px 0px;
    }

    /* .changebuttontext {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 25px;
        color: #FFFFFF;
    } */

    .errormsgautobid {
        /* background: #DBFFDA; */
        margin-top: 12px;
    }


    .liabilitytable thead {
        box-sizing: border-box;
        background: #E5E5E5;
        border-width: 1px 0px;
        border-style: solid;
        border-color: #9C9C9C;

    }

    .liabilitytable thead th {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 700;
        font-size: 18px;
        line-height: 16px;
        text-align: center;

        color: #000000;
    }

    .liabilitytable tbody tr td a {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 25px;
        /* identical to box height */

        text-align: center;

        color: #FFFFFF;
    }

    .liabilitytable tbody tr td {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        font-size: 22px;
        line-height: 29px;
        text-align: center;
        color: #000000;
    }

    .box {
        width: 295px;
        border: 3px solid #D1AF69;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .boxrow {
        text-align: center;
        gap: 20px;
        justify-content: center;
    }

    .boxrow h2 {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        font-size: 56px;
        line-height: 88px;
        text-align: center;
        color: #4D3705;
    }

    .boxrow p {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        text-align: center;
        color: #4D3705;
    }

    .tablenav {
        margin-top: 40px;
    }

    .singlebidbtn {
        background-color: #143D30;
        color: white;


    }

    .singlebidbtn:hover {
        color: white;
    }

    .startbidbtn {
        background-color: #143D30 !important;
        color: white;
    }

    .fa-star {
        color: #7A602B;
    }


    .table td,
    .table th {
        vertical-align: middle !important;
    }

    .intialinc {
        style=float: left;
        width: 75px;
    }

    .tdtimer {
        display: flex;
        justify-content: center;
    }

    .tdtimer p {
        margin-bottom: 0px;
    }

    /* hamza css starts */
    /* .hide-table-padding {
    display: none;
} */
    .table-container {
        width: 90%;
        margin: 0 auto;
        display: flex;
        justify-content: center;
    }

    .sidebar-container {
        padding: 20px 30px;
        width:450px;
    }

    .lot-header h4 {
        font-family: Montserrat;
        font-size: 72px;
        line-height: 87px;
        font-weight: 700;
        color: #232B38;
    }

    .lot-header h3 {
        font-family: Montserrat;
        font-size: 60px;
        line-height: 70px;
        font-weight: 900;
        color: black;
    }

    .lot-header h5 {
        font-family: Montserrat;
        font-size: 30px;
        line-height: 40px;
        font-weight: 700;
        color: #232B38;
    }

    .lot-description p {
        font-family: Montserrat;
        font-size: 20px;
        line-height: 24px;
        font-weight: 300;
        color: #232B38;
    }

    .lot-description p span {
        font-weight: 700;
    }

    .lot-featured-img img {
        width: 100%;
        height: auto;
        margin-bottom: 10px;
    }

    .lot-genetis p {
        font-family: Montserrat;
        font-size: 14px;
        line-height: 17px;
        font-weight: 400;
        color: #232B38;
    }

    .lot-genetis h3 {
        font-family: Montserrat;
        font-size: 28px;
        line-height: 36px;
        font-weight: 300;
        color: #232B38;
    }

    .lot-genetis h3 span {
        font-weight: 700;
    }

    .moreBtn {
        display: block;
        margin-bottom: 15px;
    }

    .moreBtn button {
        font-size: 20px;
        line-height: 24px;
        font-weight: 600;
        font-family: Montserrat;
        color: white;
        background-color: black;
        text-align: center;
        padding: 10px 5px;
        border-radius: 3px;
        width: 100%;
    }

    .text-underline {
        text-decoration: underline;
    }

    /* hamza starts ends */
    .lot-header h3 {
        font-family: Montserrat;
        font-size: 96px;
        line-height: 117px;
        font-weight: 900;
        color: black;
    }

    .lot-header h5 {
        font-family: Montserrat;
        font-size: 40px;
        line-height: 48px;
        font-weight: 700;
        color: #232B38;
    }

    .lot-description p {
        font-family: Montserrat;
        font-size: 20px;
        line-height: 24px;
        font-weight: 300;
        color: #232B38;
    }

    .lot-description p span {
        font-weight: 700;
    }

    .lot-featured-img img {
        width: 100%;
        height: auto;
    }

    .lot-genetis p {
        font-family: Montserrat;
        font-size: 14px;
        line-height: 17px;
        font-weight: 400;
        color: #232B38;
    }

    .lot-genetis h3 {
        font-family: Montserrat;
        font-size: 32px;
        line-height: 39px;
        font-weight: 300;
        color: #232B38;
    }

    .lot-genetis h3 span {
        font-weight: 700;
    }

    .moreBtn {
        display: block;
    }
    .bid-now-btn-field {
        justify-content: end;
    }
.lh-zero{
    line-height: 0;
}


.sidebaropen-width{
    width: 450px;
}

    @media (max-width: 1199px) {
        .tablenav a {
            font-size: 10px;
        }

        .lot-header h4 {
            font-size: 72px;
            line-height: 87px;
        }

        .lot-header h3 {
            font-size: 60px;
            line-height: 65px;
        }

        .lot-header h5 {
            font-size: 32px;
            line-height: 36px;
        }

        .lot-description p {
            font-size: 18px;
            line-height: 21px;
        }

        .lot-genetis p {
            font-size: 14px;
            line-height: 17px;
        }

        .lot-genetis h3 {
            font-size: 28px;
            line-height: 34px;
        }

        .moreBtn button {
            font-size: 18px;
            line-height: 20px;
            max-width: 190px;
        }

        .auctiontable tbody tr td {
            Font-size: 12px;
            Line-height: 16px;
        }

        .auctiontable thead th {
            font-size: 12px;
            line-height: 16px;
        }

        .auctiontable tbody tr td a {
            font-size: 12px;
            line-height: 18px;
        }

        .footer-policy a,
        .footer-links a {
            font-size: 13px;
            line-height: 22px;
        }

        .footer-contact p {
            font-size: 13px;
        }
    }

    @media screen and (max-width: 800px) {
            .navbar {
                display: block;
  text-align: center;
  width: 100%;
}
.navbar-list {
    margin-top: 15px;
}
    .footer{
    position: relative;
    }
        .tab-content {
            width: 100%;
        }

        /* Force table to not be like tables anymore */

        thead,
        tbody,
        th,
        td,
        tr {
            /* display: block; */
        }

        /* Hide table headers (but not display: none;, for accessibility) */
        thead tr {
            /* position: absolute;
            top: -9999px;
            left: -9999px; */
        }

        td {
            position: relative;
        }

        .td-res-pl {
            padding-left: 65% !important;
        }

        td:before {
            display: none;
            position: absolute;
            top: 12px;
            left: 40px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
        }

        .yourscore {
            max-width: none;
        }

        .table-pt-res {
            padding: 10px 0;
        }

        .auctiontable tbody tr td {
            text-align: left;
        }

        /* .bid-now-btn-field {
            justify-content: start;
        } */
        .finalliabilitytr {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nav-tabs {
            border-bottom: none;
        }

        /* auction data */

        .auction-data td:nth-of-type(1):before {
            content: "Rank";
        }

        .auction-data td:nth-of-type(2):before {
            content: "Jury Score";
        }

        .auction-data td:nth-of-type(3):before {
            content: "Your Score	";
        }

        .auction-data td:nth-of-type(4):before {
            content: "Weight";
        }

        .auction-data td:nth-of-type(5):before {
            content: "Increment";
        }

        .auction-data td:nth-of-type(6):before {
            content: "Bid";
        }

        .auction-data td:nth-of-type(7):before {
            content: " ";
        }

        .auction-data td:nth-of-type(8):before {
            content: "Total Value";
        }

        .auction-data td:nth-of-type(9):before {
            content: "Name";
        }

        .auction-data td:nth-of-type(10):before {
            content: "Process";
        }

        .auction-data td:nth-of-type(11):before {
            content: "Genetics";
        }

        .auction-data td:nth-of-type(12):before {
            content: "High Bidder";
        }

        .auction-data td:nth-of-type(13):before {
            content: "Time Left";
        }


        /* Libility Data */
        .liability-data td:nth-of-type(1):before {
            content: "Rank";
        }

        .liability-data td:nth-of-type(2):before {
            content: "Jury Score";
        }

        .liability-data td:nth-of-type(3):before {
            content: "Your Score";
        }

        .liability-data td:nth-of-type(4):before {
            content: "Size";
        }

        .liability-data td:nth-of-type(5):before {
            content: "Weight";
        }

        .liability-data td:nth-of-type(6):before {
            content: "Process";
        }

        .liability-data td:nth-of-type(7):before {
            content: "Genetics ";
        }

        .liability-data td:nth-of-type(8):before {
            content: "Current Bid";
        }

        .liability-data td:nth-of-type(9):before {
            content: "Your Liability";
        }

        .liability-data td:nth-of-type(10):before {
            content: "Name";
        }

        .liability-data td:nth-of-type(11):before {
            content: "High Bidder";
        }

        .liability-data td:nth-of-type(12):before {
            content: "Time Left";
        }


        .bid-row .form-inline{
    justify-content: end;
}

        /* bid row hidding content */
        .hide-table-padding td:nth-of-type(1):before,
        .hide-table-padding td:nth-of-type(2):before {
            content: "";
        }

        /* .finalliabilitytr td:nth-of-type(1):before, .finalliabilitytr td:nth-of-type(2):before,.finalliabilitytr td:nth-of-type(3):before,
                .finalliabilitytr td:nth-of-type(4):before,
                .finalliabilitytr td:nth-of-type(5):before,
                .finalliabilitytr td:nth-of-type(6):before,
                .finalliabilitytr td:nth-of-type(7):before, .finalliabilitytr td:nth-of-type(8):before, {
            content: ""  !important;
        } */

        .finalliabilitytr td {
            display: none;
        }

        .finalliabilitytr td.finalliability {
            display: block;
        }
    .tdtimer {
        justify-content: start;
    }

    }

    @media screen and (max-width : 768px) {
        .tablenav a {
            font-size: 10px;
        }
        .sidebaropen-width{
    width: 300px;
}
    }

    @media screen and (max-height: 450px) {
        .sidebar {
            padding-top: 15px;
        }

        .sidebar a {
            font-size: 18px;
        }
    }

    /* hamza starts ends */
</style>

<body>
    {{-- <section> --}}
        <nav class="navbar navbar-fix">
            <div><a href="https://bestofyemenauction.com"><img src="https://bestofyemenauction.com/public/images/logo.land.png" width="180px" alt="">
                </a>
            </div>
            <div>
                <ul class="navbar-list" id="nav-list">
                    <a href="{{ route('user_logout') }}">
                        <i class="fa fa-sign-out" title="Logout"></i>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/qimacoffee/"><i title="Follow us on Instagram" class="fa fa-instagram"></i> </a>
                    <a target="_blank" href="https://www.facebook.com/qimacoffee/"><i title="Follow us on Facebook" class="fa fa-facebook"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/company/qima-coffee/mycompany/"><i title="Follow us on Linkedin" class="fa fa-linkedin" aria-hidden="true"></i> </a>

                    <a target="_blank" href="https://www.youtube.com/channel/UCcgmMB11TkfAsGO1uiHuKnQ"><i title="View our Youtube Channel" class="fa fa-youtube-play" aria-hidden="true"></i> </a>


                </ul>
            </div>
            {{-- <div class="menu" id="toggle-button">
                <div class="menu-item"></div>
                <div class="menu-item"></div>
                <div class="menu-item"></div>
            </div> --}}



        </nav>

        {{-- <div class="navbar">
            <a href="#"><img src="{{ asset('public/images/avatar.png') }}" alt="Avatar" class="avatar"></a>

            <a href="{{ route('user_logout') }}">
                <p>LOG OUT</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <a href="#"><i class="fa fa-instagram"></i> </a>
            <a href="#"><i class="fa fa-facebook-f"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>

            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
        </div> --}}
    {{-- </section> --}}
    {{-- <section>
        <div id="background">
            <div class="imglogo">
                <img src="{{ asset('public/images/logo-banner.png') }}" width=40px alt="">
            </div>
        </div>
    </section> --}}
    <div class="container box text-center section-4-text-1 auction_pending" style="display: none;width:auto;">
        <div class="row boxrow">
            {{ $auction->startDate }}
            {{ date('Y-m-d H:i:s') }}
            <p class="timer_text"></p>
        </div>
        <div class="row boxrow ">
            <div class="col-2">
                <h2 class="days">-</h2>
                <p>Days</p>
            </div>
            <div>
                <h2>:</h2>
            </div>
            <div class="col-2">
                <h2 class="hours">-</h2>
                <p>Hours</p>
            </div>
            <div>
                <h2>:</h2>
            </div>
            <div class="col-2">
                <h2 class="minutes">-</h2>
                <p>Minutes</p>
            </div>
            <div>
                <h2>:</h2>
            </div>
            <div class="col-2">
                <h2 class="seconds">-</h2>
                <p>Seconds </p>
            </div>
        </div>
        <div class="row boxrow">
            <div class="col-8 ">
                <p id="countdown" style="color: red;font-size: small;"></p>
            </div>
        </div>
    </div>

    <section>
        <h2 style="text-align: center;font-family:'Montserrat';">This is a Practice Auction.</h2>

        <div class="table-container">
            <div class="tab-content" id="nav-tabContent">
                <nav class="tablenav">
                    <div class="col-sm-5 col-8" style="padding-left: 0; !important">
                        <div class="nav nav-tabs nav-fill auctiontabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active mr-2" id="nav-home-tab" data-toggle="tab"
                                href="#nav-home" role="tab" aria-controls="nav-home"
                                aria-selected="true">Auction</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">Your Liability</a>
                        </div>
                    </div>
                </nav>
                <div class="tab-pane fade auction-data show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table class="table auctiontable">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Rank</th>
                                <th scope="col">Jury Score</th>
                                <th scope="col">Your Score</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Increment</th>
                                <th scope="col">Bid</th>
                                <th scope="col"></th>
                                <th scope="col">Total Value</th>
                                <th scope="col">Name</th>
                                <th scope="col">Process</th>
                                <th scope="col">Genetics</th>
                                <th scope="col">High Bidder</th>
                                <th scope="col">Time Left</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($auctionProducts as $auctionProduct)
                                @php
                                    //increment in singlebid price
                                    $incPriceSinglebid = isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount : $auctionProduct->start_price;
                                    $bidLimitSinglebid = App\Models\Bidlimit::where('min', '<', $incPriceSinglebid)
                                        ->orderBy('min', 'desc')
                                        ->limit(1)
                                        ->get();
                                    $bidIncrementSinglebid = $bidLimitSinglebid[0]->increment ?? '';
                                    $finalIncSinglebid = (float)$incPriceSinglebid + (float)$bidIncrementSinglebid;
                                    $isEmpty = sizeof($singleBids);
                                @endphp
                                <tr
                                    class="tr-bb table-pt-res text-center bidcollapse{{ $auctionProduct->id }}
                                    @if (isset($auctionProduct->singleBidPricelatest->user_id) &&
                                        $auctionProduct->singleBidPricelatest->user_id == Auth::user()->id) changecolor @endif">
                                    <td class="fw-bold ">{{ $auctionProduct->rank }}</td>
                                    <td class="fw-bold ">{{ $auctionProduct->jury_score }}</td>
                                    <td contenteditable='true' class="text-underline yourscore  auctionyourscore{{ $auctionProduct->id}}"
                                        data-id="{{ $auctionProduct->id }}" id="score">
                                        {{ $auctionProduct->userscore->your_score ?? '' }}</td>
                                    <td class="">{{ $auctionProduct->weight }}lbs</td>
                                    <td class="increment{{ $auctionProduct->id }} ">
                                        ${{ number_format((float)$bidIncrementSinglebid, 1) }}</td>
                                    <td class="fw-bold">
                                        <div>
                                            <span
                                                class="bidData1{{ $auctionProduct->id }} intialinc">${{ isset($auctionProduct->latestBidPrice) ? number_format($auctionProduct->latestBidPrice->bid_amount, 1) : number_format($auctionProduct->start_price, 1) }}/lbs</span>
                                        </div>
                                    </td>
                                    <td class="">
                                        @if ($auction->auctionStatus() == 'active')
                                            <a class=" startbidbtn btn-success btn accordion-toggle collapsed startBid changetext{{ $auctionProduct->id }}"
                                                data-id="{{ $auctionProduct->id }}"
                                                auction-id="{{ $auctionProduct->auction_id }}" id="accordion1"
                                                data-toggle="collapse" data-parent="#accordion1"
                                                href="#collapseOne{{ $auctionProduct->id }}">Bid</a>
                                        @endif
                                    </td>

                                    <td class="liability{{ $auctionProduct->id }} ">
                                        ${{ isset($auctionProduct->latestBidPrice) ? number_format($auctionProduct->latestBidPrice->bid_amount * $auctionProduct->weight, 1) : number_format($auctionProduct->start_price * $auctionProduct->weight, 1) }}
                                    </td>

                                    @foreach ($auctionProduct->products as $products)
                                        <td class="fw-bold text-underline"><a
                                                class="openbtn openSidebar"data-id="{{ $auctionProduct->id }}"
                                                data-image="{{ isset($auctionProduct->winningImages[0]) ? $auctionProduct->winningImages[0]->image_1 : '' }}">{{ $products->product_title }}
                                            </a></td>


                                    @endforeach
                                    @foreach ($auctionProduct->products as $products)
                                        @if ($products->pro_process == '1')
                                            <td class="">Natural</td>
                                        @elseif ($products->pro_process == '2')
                                            <td class="">Slow Dried</td>
                                        @else
                                            <td class="">Alchemy</td>
                                        @endif
                                    @endforeach
                                    @foreach ($auctionProduct->products as $products)
                                        @if ($products->genetic_id == '1')
                                            <td class="">Yemenia</td>
                                        @elseif ($products->genetic_id == '2')
                                            <td class="">Bourbon</td>
                                        @else
                                            <td class="">SL28</td>
                                        @endif
                                    @endforeach
                                    @if (isset($auctionProduct->singleBidPricelatest))
                                        @foreach ($auctionProduct->singleBidPricelatest->user as $userData)
                                            <td class="paddleno{{ $auctionProduct->id }} fw-bold">
                                                {{ $userData->paddle_number ?? '---' }}</td>
                                        @endforeach
                                    @else
                                        <td class="paddleno{{ $auctionProduct->id }}">Awaiting Bid</td>
                                    @endif
                                    <td class="">
                                        <div>
                                            <span class="waiting{{ $auctionProduct->id }}  lh-zero">
                                                @if ($auction->auctionStatus() != 'active')
                                                    -
                                                @else
                                                    <div class="tdtimer">
                                                        <p class="minutes">-</p>
                                                        <p>:</p>
                                                        <p class="seconds">-</p>
                                                    </div>

                                                @endif
                                            </span>
                                        </div>
                                    </td>

                                </tr>
                                @if (!isset($agreement) ||
                                    $agreement->privacy_policy_id != '1' ||
                                    $agreement->terms_conditions_id != '2' ||
                                    $agreement->bid_agrement_id != '3')
                                    <tr class="hide-table-padding bid-row">
                                        <td colspan="12">
                                            <div id="collapseOne{{ $auctionProduct->id }}" class="collapse">
                                                <div class="card">
                                                    <h5 class="card-header">Bidding Agreement</h5>
                                                    <div class="card-body">
                                                        <form action="{{ url('/accept-agrements') }}" method="POST"
                                                            autocomplete="off">
                                                            @csrf
                                                            {{-- <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="privacy" name="privacy_policy_id"
                                                                    value="1" required>
                                                                <label for="privacy">I've read and agree to the <a
                                                                        href="{{ url('/privacy_policy') }}"
                                                                        target="_blank">Privacy Policy.</a></label>
                                                            </div> --}}
                                                            {{-- <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="terms_conditions_id" id="terms"
                                                                    value="2" required>
                                                                <label for="terms">I've read and agree to the <a
                                                                        href="{{ url('/terms_conditions') }}"
                                                                        target="_blank">Terms And
                                                                        Conditions.</a></label>
                                                            </div> --}}
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="agreement" name="bid_agrement_id"
                                                                    value="3" required>
                                                                <label for="agreement">I've read and agree to the <a
                                                                        href="{{ url('/bid_agreement') }}"
                                                                        target="_blank">Bidding Agreement.</a></label>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary" type="submit">Proceed
                                                                    For
                                                                    Bidding</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @else
                                    <tr class="hide-table-padding bid-row">
                                        <td></td>
                                        <td colspan="10">
                                            <div id="collapseOne{{ $auctionProduct->id }}" class="collapse in p-3">
                                                <div class="row ">
                                                    <div class="col-sm-6 col-lg-6">
                                                        <div class="input-group mb-3 bid-now-btn-field">
                                                            @if (isset($auctionProduct->latestAutoBidPrice->bid_amount) &&
                                                                $auctionProduct->latestAutoBidPrice->user_id == auth()->user()->id)
                                                                <p class="mr-1 mt-2 nextincrement{{ $auctionProduct->id }}"
                                                                    style="display: none;">
                                                                    ${{ number_format($finalIncSinglebid, 1) }}
                                                                </p>
                                                            @else
                                                                <p
                                                                    class="mr-1 mt-2 nextincrement{{ $auctionProduct->id }}">
                                                                    ${{ number_format($finalIncSinglebid, 1) }}
                                                                </p>
                                                            @endif
                                                            <div>

                                                                @if (isset($auctionProduct->latestAutoBidPrice->bid_amount) &&
                                                                    $auctionProduct->latestAutoBidPrice->user_id == auth()->user()->id)
                                                                    <button
                                                                        class="singlebidbtn btn singlebtnclick bidnowbutton{{ $auctionProduct->id }}"
                                                                        id="{{ $auctionProduct->id }}"
                                                                        href="javascript:void(0)"
                                                                        data-id="{{ $auctionProduct->id }}"
                                                                        style="border-radius: 5px; display:none;">Bid
                                                                        Now</button>
                                                                @else
                                                                    <button
                                                                        class="singlebidbtn btn singlebtnclick bidnowbutton{{ $auctionProduct->id }}"
                                                                        id="{{ $auctionProduct->id }}"
                                                                        href="javascript:void(0)"
                                                                        data-id="{{ $auctionProduct->id }}"
                                                                        @if (isset($auctionProduct->latestSingleBid->user_id) &&
                                                                            $auctionProduct->latestSingleBid->user_id == Auth::user()->id) disabled="disabled" style="background:#a6a6a6;color:ffffff" @endif
                                                                        style="border-radius: 5px;">Bid Now</button>
                                                                @endif
                                                                <button
                                                                    class="singlebidbtn btn singlebid singlebidClass{{ $auctionProduct->id }}"
                                                                    id="{{ $auctionProduct->id }}"
                                                                    href="javascript:void(0)"
                                                                    data-id="{{ $auctionProduct->id }}"
                                                                    style="border-radius: 5px; display:none;">Confirm</button>
                                                                <button
                                                                    class="singlebidbtn btn cancelbidbutton removesinglebtn{{ $auctionProduct->id }}"
                                                                    href="javascript:void(0)"
                                                                    data-id="{{ $auctionProduct->id }}"
                                                                    style="border-radius: 5px; display:none;">Cancel</button>

                                                            </div>
                                                        </div>
                                                        <div id="alertMessage"
                                                            class="alertmsg alertMessage{{ $auctionProduct->id }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-6">
                                                        <form class="form-inline" onkeydown="return event.key != 'Enter';" action="" method="POST">
                                                            @csrf
                                                            <input type="hidden"
                                                                class="form-control auctionid{{ $auctionProduct->id }}"
                                                                value="{{ $auctionProduct->auction_id }}"
                                                                id="autobidamount">
                                                            @if (isset($auctionProduct->latestAutoBidPrice->bid_amount) &&
                                                                $auctionProduct->latestAutoBidPrice->user_id == auth()->user()->id)
                                                                &nbsp;<input type="number" min="0"
                                                                    name="autobidamount"
                                                                    class="form-control autobidamount{{ $auctionProduct->id }}"
                                                                    id="autobidamount"
                                                                    style="width: 50%; display:none;">
                                                            @else
                                                                <input type="text"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                    min="0" pattern="[0-9]{10}" maxlength="10"
                                                                    name="autobidamount"
                                                                    class="form-control autobidamount{{ $auctionProduct->id }}"
                                                                    id="autobidamount" style="width: 50%;">
                                                            @endif

                                                            &nbsp;
                                                            @if (isset($auctionProduct->latestAutoBidPrice))
                                                                @if ($auctionProduct->latestAutoBidPrice->auction_product_id == $auctionProduct->id &&
                                                                    $auctionProduct->latestAutoBidPrice->user_id != auth()->user()->id)
                                                                    <button
                                                                    class="btn singlebidbtn autobtnclick  bidnowautobutton{{ $auctionProduct->id }}"
                                                                     type="button"
                                                                    data-id="{{ $auctionProduct->id }}">Auto
                                                                    Bid</button>
                                                                    <button
                                                                    class="btn singlebidbtn autobid autobidClass{{ $auctionProduct->id }}"
                                                                    type="button"
                                                                    data-id="{{ $auctionProduct->id }}" style="display: none;" id="confirmbtn">Confirm
                                                                    </button>
                                                                    <button
                                                                    class="btn singlebidbtn  removeautobtn{{ $auctionProduct->id }} ml-2 removeautobid"
                                                                    type="button"
                                                                    data-id="{{ $auctionProduct->id }}" style="display: none;">Cancel
                                                                    </button>
                                                                    <div
                                                                        class="errormsgautobid  errorMsgAutoBid{{ $auctionProduct->id }}">
                                                                    </div>
                                                                @endif
                                                            @else
                                                                <button
                                                                    class="btn singlebidbtn autobtnclick  bidnowautobutton{{ $auctionProduct->id }}"
                                                                    type="button"
                                                                    data-id="{{ $auctionProduct->id }}">Auto
                                                                    Bid</button>
                                                                <button
                                                                    class="btn singlebidbtn autobid autobidClass{{ $auctionProduct->id }}"
                                                                    type="button"
                                                                    data-id="{{ $auctionProduct->id }}"
                                                                    style="display: none;" id="confirmbtn">Confirm
                                                                </button>
                                                                <button
                                                                    class="btn singlebidbtn  removeautobtn{{ $auctionProduct->id }} ml-2 removeautobid"
                                                                    type="button"
                                                                    data-id="{{ $auctionProduct->id }}"
                                                                    style="display: none;">Cancel
                                                                </button>
                                                            @endif
                                                            @if (isset($auctionProduct->latestAutoBidPrice->bid_amount) &&
                                                                $auctionProduct->latestAutoBidPrice->user_id == auth()->user()->id)
                                                                <button
                                                                    class="btn singlebidbtn autobtnclick  bidnowautobutton{{ $auctionProduct->id }}"
                                                                    type="button"
                                                                    data-id="{{ $auctionProduct->id }}"
                                                                    style="display: none;">Auto
                                                                    Bid</button>
                                                                <button
                                                                    class="btn singlebidbtn autobid autobidClass{{ $auctionProduct->id }}"
                                                                    type="button"
                                                                    data-id="{{ $auctionProduct->id }}"
                                                                    style="display: none;" id="confirmbtn">Confirm
                                                                </button>
                                                                <button
                                                                    class="btn singlebidbtn  removeautobtn{{ $auctionProduct->id }} ml-2 removeautobid"
                                                                    type="button"
                                                                    data-id="{{ $auctionProduct->id }}"
                                                                    style="display: none;">Cancel
                                                                </button>
                                                                <div
                                                                    class="errormsgautobid  errormsgautobid{{ $auctionProduct->id }}">
                                                                    <p >CURRENT AUTOBID IS
                                                                        ${{ number_format($auctionProduct->latestAutoBidPrice->bid_amount, 1) }}/lb
                                                                        <a href="javascript:void(0)"
                                                                            class="removeAutoBID"
                                                                            data-id="{{ $auctionProduct->id }}"
                                                                            style="color:#000000">{Remove}</a>
                                                                    </p>
                                                                </div>
                                                            @endif
                                                            <div
                                                                class="errormsgautobid errorMsgAutoBid{{ $auctionProduct->id }}{{ $auctionProduct->id }}">
                                                            </div>
                                                            <div
                                                                class="errormsgautobidAmount showMessageForAmount{{ $auctionProduct->id }}">
                                                            </div>

                                                            @if (isset($auctionProduct->latestAutoBidPrice))
                                                                @if ($auctionProduct->latestAutoBidPrice->auction_product_id == $auctionProduct->id &&
                                                                    $auctionProduct->latestAutoBidPrice->user_id != auth()->user()->id)
                                                                @endif
                                                            @endif
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-8"></div>
                                                    <div class="col-4 singlebidtable{{ $auctionProduct->id }}"
                                                        style="display: none;">
                                                        <table class="table mt-2">
                                                            <tr>
                                                                <th scope="col">Bid</th>
                                                                <td
                                                                    scope="col"class="biddermaxbid{{ $auctionProduct->id }}">
                                                                    ${{ number_format($finalIncSinglebid, 1) }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col">Weight</th>
                                                                <td scope="col">{{ $auctionProduct->weight }}lbs
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col"
                                                                    class="totalliabilitytext{{ $auctionProduct->id }}">
                                                                    Total Liability</th>
                                                                <td scope="col"
                                                                    class="totalliability{{ $auctionProduct->id }}">
                                                                    ${{ isset($auctionProduct->latestAutoBidPrice->bid_amount) ? number_format($auctionProduct->latestAutoBidPrice->bid_amount * $auctionProduct->weight, 1) : number_format($auctionProduct->weight * $finalIncSinglebid, 1) }}
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="col-4 autobidtable{{ $auctionProduct->id }}"
                                                        style="display: none;">
                                                        <table class="table mt-2">
                                                            <tr>
                                                                <th scope="col">Bid</th>
                                                                <td
                                                                    scope="col"class="autobiddermaxbid{{ $auctionProduct->id }}">
                                                                    ---
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col">Weight</th>
                                                                <td scope="col"
                                                                    class="weightautobid{{ $auctionProduct->id }}">
                                                                    {{ $auctionProduct->weight }}lbs
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col"
                                                                    class="totalliabilitytext{{ $auctionProduct->id }}">
                                                                    Maximum Liability</th>
                                                                <td scope="col"
                                                                    class="maximumliability{{ $auctionProduct->id }}">
                                                                    ${{ isset($auctionProduct->latestAutoBidPrice->bid_amount) ? number_format($auctionProduct->latestAutoBidPrice->bid_amount * $auctionProduct->weight, 1) : number_format($auctionProduct->weight * $finalIncSinglebid, 1) }}
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                </div>
                </td>
                </tr>
                @endif
                @endforeach
                </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="table-responsive">
                    <table class="table auctiontable">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Rank</th>
                                <th scope="col">Jury Score</th>
                                <th scope="col">Your Score</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Increment</th>
                                <th scope="col">Bid</th>
                                <th scope="col">Total Value</th>
                                <th scope="col">Name</th>
                                <th scope="col">Process</th>
                                <th scope="col">Genetics</th>
                                <th scope="col">High Bidder</th>
                                <th scope="col">Time Left</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total_liability = 0; @endphp
                            @foreach ($auctionProducts as $auctionProduct)
                                @php
                                    $isEmpty = sizeof($singleBids);
                                @endphp
                                <tr id="bid_row_{{ $auctionProduct->id }}"
                                    @if (isset($auctionProduct->singleBidPricelatest->user_id) &&
                                        $auctionProduct->singleBidPricelatest->user_id == Auth::user()->id) {{ '' }} @else style="display:none;" @endif
                                    class="tr-bb text-center liabilitybidcollapse{{ $auctionProduct->id }} liability-data"
                                    @if (isset($auctionProduct->singleBidPricelatest->user_id) &&
                                        $auctionProduct->singleBidPricelatest->user_id == Auth::user()->id) style="background: #DBFFDA;" @endif>
                                    <td class="fw-bold "><i class="fa fa-star"
                                            aria-hidden="true"></i>{{ $auctionProduct->rank }}</td>
                                    <td class="fw-bold ">{{ $auctionProduct->jury_score }}</td>
                                    <td contenteditable='true' class="text-underline yourscore  auctionyourscore{{ $auctionProduct->id}}"
                                        data-id="{{ $auctionProduct->id }}" id="score">
                                        {{ $auctionProduct->userscore->your_score ?? '' }}</td>
                                    <td class="fw-bold ">{{ $auctionProduct->weight }}lbs</td>
                                    <td class="increment{{ $auctionProduct->id }} ">
                                        ${{ number_format((float)$bidIncrementSinglebid, 1) }}</td>
                                    <td class="fw-bold ">
                                        <div>
                                            <span
                                                class="bidData1{{ $auctionProduct->id }} intialinc">${{ isset($auctionProduct->latestBidPrice) ? number_format($auctionProduct->latestBidPrice->bid_amount, 1) : number_format($auctionProduct->start_price, 1) }}lbs</span>
                                        </div>
                                    </td>
                                    @php
                                        if (isset($auctionProduct->singleBidPricelatest)) {
                                            if ($auctionProduct->singleBidPricelatest->user_id == Auth::user()->id) {
                                                $datavalue = isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount * $auctionProduct->weight : $auctionProduct->start_price * $auctionProduct->weight;
                                                $total_liability = $total_liability + $datavalue;
                                            }
                                        }
                                    @endphp
                                    <td
                                        class="liability_your{{ $auctionProduct->id }}  liability{{ $auctionProduct->id }} @if (isset($auctionProduct->singleBidPricelatest->user_id) &&
                                            $auctionProduct->singleBidPricelatest->user_id == Auth::user()->id) {{ 'liabilty_shown' }} @endif ">
                                        ${{ isset($auctionProduct->latestBidPrice) ? number_format($auctionProduct->latestBidPrice->bid_amount * $auctionProduct->weight, 1) : number_format($auctionProduct->start_price * $auctionProduct->weight, 1) }}
                                    </td>
                                    @foreach ($auctionProduct->products as $products)
                                        <td class="fw-bold text-underline "> <a class="openbtn openSidebar"
                                                data-id="{{ $auctionProduct->id }}"
                                                data-image="{{ isset($auctionProduct->winningImages[0]) ? $auctionProduct->winningImages[0]->image_1 : '' }}">
                                                {{ $products->product_title }} </a></td>


                                    @endforeach
                                    @foreach ($auctionProduct->products as $products)
                                        @if ($products->pro_process == '1')
                                            <td class="">Natural</td>
                                        @elseif ($products->pro_process == '2')
                                            <td class="">Slow Dried</td>
                                        @else
                                            <td class="">Alchemy</td>
                                        @endif
                                    @endforeach
                                    @foreach ($auctionProduct->products as $products)
                                        @if ($products->genetic_id == '1')
                                            <td class="">Yemenia</td>
                                        @elseif ($products->genetic_id == '2')
                                            <td class="">Bourbon</td>
                                        @else
                                            <td class="">SL28</td>
                                        @endif
                                    @endforeach
                                    @if (isset($auctionProduct->singleBidPricelatest))
                                        @foreach ($auctionProduct->singleBidPricelatest->user as $userData)
                                            <td class="paddleno{{ $auctionProduct->id }} fw-bold ">
                                                {{ $userData->paddle_number ?? '---' }}</td>
                                        @endforeach
                                    @else
                                        <td class="paddleno{{ $auctionProduct->id }} ">Awaiting Bid</td>
                                    @endif
                                    <td class="">
                                        <div>
                                            <span class="waiting{{ $auctionProduct->id }}">
                                                @if ($auction->auctionStatus() != 'active')
                                                    -
                                                @else
                                                    <div class="tdtimer">
                                                        <p class="minutes">-</p>
                                                        <p>:</p>
                                                        <p class="seconds">-</p>
                                                    </div>

                                                @endif
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <tr class="finalliabilitytr">
                                <th>Total Liability</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="finalliability">${{ number_format($total_liability, 1) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="sidebar-container">
                    <div class="lot-header">
                        <h3 class="rank"></h3>
                        <h3 class="juryscore"></h3>
                        <h5 class="name"></h5>
                        <h5 class="code"></h5>
                    </div>
                    <hr>
                    <div class="lot-description">
                        <p>LOT SIZE: <span class="size"></span></p>
                        <p>CURRENT BID: <span class="currentbid"></span></p>
                        <p>TOTAL VALUE: <span class="totalvalue"></span></p>
                        <hr>
                        <p>WINNING BIDDER: <span class="paddleno"></span></p>
                    </div>
                    <div class="lot-featured-img">
                        <img class="img-status">
                        <input type="hidden" name="image-source"
                            value="{{ asset('/public/images/product_images/') }}" id="image-source" />
                    </div>
                    <div class="lot-description">
                        <p>PROCESS: <span class="proprocess"></span></p>
                    </div>
                    <div class="lot-genetis">
                        <h3>GENETICS <span class="genetics"></span></h3>

                    </div>

                    <div class="moreBtn"></div>
                </div>
            </div>
    </section>
    <section class="footer">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 pb-2 text-center section-4-img">
                    <img src="https://bestofyemenauction.com/public/images/LOGO_0003_Vector-Smart-Object 1.png" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- <section>
        <div class="footer-container">
            <div class="row footer-head">
                <div class="col-lg-3 col-md-4 col-sm-6 footer-policy">
                    <h2>LEGAL</h2>
                    <a href="#">Term and Conditions</a>
                    <a href="#"> Term of Use</a>
                    <a href="#"> Privacy Policy</a>
                    <a href="#">Cookie Policy</a>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 footer-search">
                    <h2>SEARCH</h2>
                    <div class="searchbar-container--footer">

                        <input type="text" placeholder="Search" class="search-bar">
                        <i class="fa fa-search search-icon"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 footer-links">
                    <h2>QUICK LINKS</h2>
                    <a href="#">Contact Us</a>
                    <a href="#"> Blog</a>
                    <a href="#"> FAQ</a>
                    <a href="#">Our Sponsers</a>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 footer-contact">
                    <h2>QIMA COFFEE AUCTION</h2>
                    <p> <img src="{{ asset('public/images/home-icon1.png') }}" alt=""> 2250
                        NW 22nd Ave #612
                        Portland OR 97210</p>
                    <p><img src="{{ asset('public/images/call-icon1.png') }}" alt="">(503)
                        208-2872</p>
                    <p> <img src="{{ asset('public/images/message-icon1.png') }}"
                            alt="">support@qimacoffeeauction.com</p>
                </div>
            </div>
            <div class="footer-copyright">
                <h3>Â© 2022 QIMA Coffee Auction. All Rights Reserved. </h3>
            </div>
        </div>
    </section> --}}

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>


<script>
    $("#signup-for-newsletter").on("click", function() {
        $("#newsltterModel").modal("show");
    });

    // /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
    // function openNav() {
    //     document.getElementById("mySidebar").style.width = "500px";
    //     document.getElementById("main").style.marginLeft = "500px";
    // }

    // /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {

        $("#mySidebar").removeClass('sidebaropen-width');
    }
</script>
<script type="text/javascript">
    $(document).ready(function(e) {
        //OpenSidebar
        setTimeout(function() {
            window.location.reload();
        }, 300000)
        $(".openSidebar").click(function() {

           $("#mySidebar").addClass('sidebaropen-width');
            var id = $(this).attr('data-id');
            $('.img-status').attr('src', "");
            var image = $(this).attr('data-image');
            var source = $("#image-source").val();
            var res = source.concat('/' + image);
            $('.img-status').attr('src', res);
            var currentbid = $(".bidData1" + id).html();
            var totalvalue = $(".liability" + id).html();

            $.ajax({
                url: "{{ route('opensidebar') }}",
                method: 'POST',
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    var rank = response.rank;
                    var juryscore = response.jury_score;
                    var name = response.products[0].product_title;
                    var code = response.products[0].sample;
                    var size = response.size;
                    var paddleno = $('.paddleno' + id).html();
                    var process = response.products[0].pro_process;
                    var genetics = response.products[0].genetic_id;
                    var url = '{{ route('productsidebar', ':id') }}';
                    url = url.replace(':id', rank);
                    $(".weight").html(response.weight);
                    $(".rank").html('#' + rank);
                    $(".juryscore").html(juryscore);
                    $(".name").html(name);
                    $(".code").html(code);
                    $(".size").html(size + 'LBS');
                    $(".currentbid").html(currentbid.toLocaleString('en-US'));
                    $(".totalvalue").html(totalvalue.toLocaleString('en-US'));
                    $(".paddleno").html(paddleno);
                    if (genetics == 1) {
                        $(".genetics").html('Yemenia');
                    } else if (genetics == 2) {
                        $(".genetics").html('Bourbon');
                    } else {
                        $(".genetics").html('SL28');
                    }
                    if (process == 1) {
                        $(".proprocess").html('Natural');
                    } else if (process == 2) {
                        $(".proprocess").html('Slow Dried');
                    } else {
                        $(".proprocess").html('Alchemy');
                    }
                    if (response.products[0].pro_lot_type == 1) {
                        $(".lotName").html('Farmer Lot');
                    } else {
                        $(".lotName").html('Community Lot');
                    }
                    $(".score").html(response.jury_score);

                    $(".moreBtn").html(
                        '<a href="' + url +
                        '" target="blank"><button >More Information</button></a>'
                    )
                },
                error: function(error) {
                    console.log(error)
                }
            });
        });
        //start bid
        $(".startBid").click(function() {
            var id = $(this).attr('data-id');
            if ($(".changetext" + id).text() == "Bid") {
                $(".changetext" + id).text("Close");
                $(".changetext" + id).addClass("changebuttontext");
            } else {
                $(".changetext" + id).text("Bid");
            }
        });
        //singlebtnclick first
        $(".singlebtnclick").click(function() {
            var id = $(this).attr('data-id');
            $(".singlebidtable" + id).show();
            $(".autobidtable" + id).hide();
            $(".singlebidClass" + id).show();
            $(".removesinglebtn" + id).show();
            $(".bidnowbutton" + id).hide();
        });
        //cancelbidvtn first single bid
        $(".cancelbidbutton").click(function() {
            var id = $(this).attr('data-id');
            $(".autobidtable" + id).hide();
            $(".singlebidtable" + id).hide();
            $(".singlebidClass" + id).hide();
            $(".removesinglebtn" + id).hide();
            $(".bidnowbutton" + id).show();
        });
        //auto bid
        $(".autobtnclick").click(function() {

            var id = $(this).attr('data-id');
            var minamount=$('.nextincrement'+id).html();
            var float_amount = parseFloat(minamount.replace(/[^0-9.]/g,''));
            current_val = $('.autobidamount' + id).val();
            if(current_val && current_val < float_amount){
                $('.showMessageForAmount' + id).show();
                $('.showMessageForAmount' + id).html('Please Enter Amount Greater than or equal to '+float_amount);
            }else{
            if (current_val) {
                $('.showMessageForAmount' + id).hide();
                $(".autobidtable" + id).show();
                $(".singlebidtable" + id).hide();
                $(".autobidClass" + id).show();
                $(".removeautobtn" + id).show();
                $(".bidnowautobutton" + id).hide();
                var autobidamount = $(".autobidamount" + id).val();
                var weightautobid = $(".weightautobid" + id).html();
                var weight = parseFloat(weightautobid.replace(/[^\d\.]*/g, ''));
                $(".autobiddermaxbid" + id).html('$' + autobidamount);
                $(".maximumliability" + id).html('$' + commify(parseFloat(weight * autobidamount)
                    .toFixed(2)));
            } else {
                $('.showMessageForAmount' + id).show();
                $('.showMessageForAmount' + id).html('Please Enter Some Amount First');
            }}
            // var finalmax    = parseFloat(autobidamount.replace(/[^\d\.]*/g, ''))
        });
        //cancelbidvtn first auto bid
        $(".removeautobid").click(function() {
            var id = $(this).attr('data-id');
            $(".autobidtable" + id).hide();
            $(".singlebidtable" + id).hide();
            $(".autobidClass" + id).hide();
            $(".removeautobtn" + id).hide();
            $(".bidnowautobutton" + id).show();
        });

        //userscore save
        $(".yourscore").keypress(function(e) {
            if ($(this).html() == "---") {
                $(this).html("");
            }
            if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
        });
        $(".yourscore").focusout(function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            let value = $.trim($(this).html());
            var float_amount = parseFloat(value.replace(/[^0-9.]/g,''));
            if(float_amount){
            $.ajax({
                url: "{{ route('saveyourscore') }}",
                method: 'POST',
                data: {
                    id: id,
                    value: float_amount,
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                       var yourscore=response.your_score;
                       $('.auctionyourscore' + id).html(parseFloat(yourscore).toFixed(2));
                },
                error: function(error) {
                    console.log(error)
                }
            });
  }
        });

        $(".singlebid").on("click", function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            var singlebidamount = $('.nextincrement' + id).html();
            $(".singlebidClass" + id).hide();
            $(".removesinglebtn" + id).hide();
            $(".autobidtable" + id).hide();
            $(".singlebidtable" + id).hide();
            $(".bidnowbutton" + id).show();
            $.ajax({
                url: "{{ route('singlebiddata') }}",
                async: false,
                method: 'POST',
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    var bidPrice = response.bid_amountNew;
                    var bidID = response.auction_product_id;
                    var increment = response.bidIncrement;
                    var paddleNo = response.userPaddleNo;
                    var nextIncrement = +increment + +bidPrice;
                    var outbid = response.outAutobid;
                    var autobidUserID = response.autoBidUser
                    var bidderLiablity = response.liablityInc;
                    var liabiltyUser = response.liabiltyUser;
                    var bidderID = response.user_id;
                    var bidderMaxBid = response.bidderMaxAmount;
                    var autoBidmax = response.autoBidmaxData;
                    var checkTimer = response.timerCheck;
                    var userBidAmount = response.userBidAmount;
                    var winningBidder = response.winningBidder;
                    var latestSingleBidUser = response.latestSingleBidUser;
                    var bidAmountUser = response.bidAmountUser;
                    var liability = response.liability;
                    var checkStartTimer = response.checkStartTimer;
                    var finaltotalliability = response.finaltotalliability;
                    var loser = response.loser_user;
                    $('.errorMsgAutoBid' + id).html('');
                    $('.errorMsgAutoBid' + id + id).html('');
                    // if (bidPrice > autoBidmax) {
                    //     $('.alertMessage' + id).html('<p>Your $' + bidPrice +
                    //         '/lb Bid is outed.</p>');
                    // } else {
                    //     $('.alertMessage' + id).html('<p>Your $' + bidPrice +
                    //         '/lb Bid is confirmed.</p>');
                    // }
                    socket.emit('add_bid_updates', {
                        "singleBidammounttesting": bidPrice,
                        "bidID": bidID,
                        "increment": increment,
                        "paddleNo": paddleNo,
                        "nextIncrement": nextIncrement,
                        "outbidresponse": outbid,
                        "autobidUserID": autobidUserID,
                        "bidderLiablity": bidderLiablity,
                        "bidderID": bidderID,
                        "userBidAmount": userBidAmount,
                        "winningBidder": winningBidder,
                        "latestSingleBidUser": latestSingleBidUser,
                        "bidAmountUser": bidAmountUser,
                        "liabiltyUser": liabiltyUser,
                        "checkTimer": checkTimer,
                        "liability": liability,
                        "checkStartTimer": checkStartTimer,
                        "loser": loser,
                    });
                },
                error: function(error) {
                    console.log(error)
                }
            });
        });

        //Autobid
        $(".autobid").on("click", function(e) {
            e.preventDefault();
            $('.errorMsgAutoBid' + id).html('');
            var id = $(this).attr('data-id');
            var currentBidPrice = $('.bidData1' + id).html();
            var autobidamount = $('.autobidamount' + id).val();
            var weight
            $(".removeautobtn" + id).hide();
            $(".autobidamount" + id).hide();
            $(".autobidtable" + id).hide();
            $(".nextincrement" + id).hide();
            if (autobidamount <= currentBidPrice) {
                $('.showerrormessages').remove();
                $('.errorMsgAutoBid' + id).html(
                    '<p class="showerrormessages">Please enter the amount greater than current bid amount.</p>'
                );
                $('.autobidamount' + id).val('');
                $('.bidnowautobutton' + id + id).show();


            } else {
                        var auctionid = $('.auctionid' + id).val();
                        $.ajax({
                            url: "{{ route('autobiddata') }}",
                            async: false,
                            method: 'POST',
                            data: {
                                id: id,
                                autobidamount: autobidamount,
                                auctionid: auctionid,
                                _token: "{{ csrf_token() }}",
                            },
                            success: function(response) {

                                 if (response.success) {
                                    $('.errorMsgAutoBid' + id).html('');
                                    $('.errorMsgAutoBid' + id + id).html('');
                                    $('.errorMsgAutoBid' + id + id).html(
                                        '<p>Current autobid is $' +
                                        addCommas(autobidamount) +
                                        ' /lb.{<a href="javascript:void(0)" class="removeAutoBID" data-id=' +
                                        id + '>Remove</a>}</p>');
                                    $('.autobidamount' + id).val('');
                                    $('.alertMessage' + id).html('');
                                    $(".bidnowbutton" + id).css("display",
                                         "none");
                                    $(".autobidClass" + id).css("display", "none");
                                }else  if (response.message !== null) {
                                    $('.errorMsgAutoBid' + id).html('');
                                    $('.errorMsgAutoBid' + id + id).html('');
                                    $('.errorMsgAutoBid' + id + id).html(response.message);
                                    $('.autobidamount'+id).show();
                                    $('.autobidamount'+id).val('');
                                    $('.bidnowautobutton'+id).show();
                                    $('.autobidClass'+id).hide();
                                    $('.nextincrement'+id).show();
                                }else {
                                    var latestAutoBidId = response.id;
                                    var bidPrice = response.bid_amountNew;
                                    var bidID = response.auction_product_id;
                                    var increment = response.bidIncrement;
                                    var weightautobid = $(".weightautobid"+id).html();
                                    var weight = parseFloat(weightautobid.replace(/[^\d\.]*/g, ''));
                                    var liability   = weight*bidPrice;
                                    var paddleNo = response.userPaddleNo;
                                    var nextIncrement = +increment + +bidPrice;
                                    var outbid = response.outAutobid;
                                    var autobidUserID = response.bidder_user_id;
                                    var bidderLiablity = response.liablity;
                                    var bidderID = response.user_id;
                                    var bidderMaxBid = response.bidderMaxAmount;
                                    var userbidAmount   = response.bid_amount;
                                    var totalAutoBidLiability = response.totalAutoBidLiability;
                                    var bid_amountNew       = response.bid_amountNew;
                                    var loser=response.loser_user;
                                    $('.errorMsgAutoBid' + id).html('');
                                    $(".bidcollapse" + bidID).addClass(
                                        "changecolor");
                                    $(".liabilitybidcollapse" + bidID).addClass(
                                        "changecolor");
                                    // socket.emit('add_bid_updates', {
                                    //     "singleBidammounttesting": bidPrice,
                                    //     "bidID": bidID,
                                    //     "increment": increment,
                                    //     "paddleNo": paddleNo,
                                    //     "nextIncrement": nextIncrement,
                                    //     "outbidresponse": outbid,
                                    //     "autobidUserID": autobidUserID,
                                    //     "bidderLiablity": bidderLiablity,
                                    //     "bidderID": bidderID,
                                    //     // "bidderMaxBid":bidderMaxBid,
                                    // });
                                    socket.emit('auto_bid_updates', {
                                        "autobidamount": autobidamount,
                                        "latestAutoBidId": latestAutoBidId,
                                        'id': id,
                                        "bidID": bidID,
                                        'user_id': response.user_id,
                                        "userbidAmount":userbidAmount,
                                        "totalAutoBidLiability": totalAutoBidLiability,
                                        "outbid":outbid,
                                        "autobidUserID":autobidUserID,
                                        "bid_amountNew":bid_amountNew,
                                        "nextIncrement":nextIncrement,
                                        "paddleNo":paddleNo,
                                        "liability":liability,
                                        "loser":loser,
                                    });
                                    $('.errorMsgAutoBid' + id).html('');
                                    $('.errorMsgAutoBid' + id + id).html('');
                                    $('.errorMsgAutoBid' + id + id).html(
                                        '<p>Current autobid is $' +
                                        addCommas(autobidamount) +
                                        ' /lb.{<a href="javascript:void(0)" class="removeAutoBID" data-id=' +
                                        id + '>Remove</a>}</p>');
                                    $('.autobidamount' + id).val('');
                                    $('.alertMessage' + id).html('');
                                    $(".bidnowbutton" + id).css("display",
                                         "none");
                                    $(".autobidClass" + id).css("display", "none");
                                }
                            },
                            error: function(error) {
                                console.log(error)
                            }
                        });
            }
        });
        //remove autobid
        $(document).on("click", '.removeAutoBID', function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            $(".autobidamount" + id).show();
            $(".nextincrement" + id).show();
            $(".singlebidtable" + id).hide();
            $(".autobidtable" + id).hide();
            $(".bidnowautobutton" + id).show();
            $(".autobidClass" + id).hide();
            $(".bidnowbutton" + id).prop('disabled', false);
            $(".bidnowbutton" + id).css('background', '#143D30');
            swal({
                title: `Remove Auto Bid ?`,
                // text: "You will remain highest bidder until your limit reached.",
                type: "error",
                buttons: true,
                dangerMode: true,
            }).then((result) => {
                if (result) {
                    $.ajax({
                        url: "{{ route('removeautobid') }}",
                        method: 'POST',
                        data: {
                            id: id,
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(response) {
                            var auction_product_id = response.auction_product_id;
                            var outbid = response.outAutobid;
                            if (outbid == 0) {
                                current_user_id={{ Auth::user()->id }};
                                $('.errorMsgAutoBid' + id).html('');
                                $('.errorMsgAutoBid' + id + id).html('');
                                $(".bidnowbutton" + id).css("display", "block");
                                if(response.winner_id == current_user_id){
                                    $(".bidnowbutton" + id).prop('disabled', true);
                                    $(".bidnowbutton" + id).css('background', '#a6a6a6');
                                }
                            }
                            socket.emit('auto_bid_delete', {
                                "autobidamount": 0,
                                "auction_product_id": auction_product_id,
                            });
                        },
                        error: function(error) {
                            console.log(error)
                        }
                    });
                } else {
                    swal('Your bid is safe');
                }
            })
        });
    });
</script>
    
<script>
    var total = 0;
    var interval;
    var empty = '{{ $isEmpty }}';
    socket.on('auto_bid_updates', function(data) {
        $(".paddleno" + data.bidID).html(data.paddleNo);
        if(data.user_id == {{ Auth::user()->id }})
        {
            $(".liabilitybidcollapse" + data.bidID).show();
            $(".liability_your" + data.bidID).addClass('liabilty_shown');
            $(".finalliabilitytr").show();
            $(".userbid" + data.bidID).css("color", "black");
            $(".bidcollapse" + data.bidID).addClass("changecolor");
            $(".liabilitybidcollapse" + data.bidID).addClass("changecolor");
            $(".auctionpaddleno" + data.bidID).html(data.paddleNo);
        }
        else{
            $(".liabilitybidcollapse" + data.bidID).hide();
            $(".liability_your" + data.bidID).removeClass('liabilty_shown');

        }
        $(".bidData1" + data.bidID).html('$' + data.bid_amountNew.toLocaleString('en-US') + 'lbs');
        data.nextIncrement  = parseFloat(data.nextIncrement).toFixed(1);
        $(".nextincrement" + data.bidID).html('$' + addCommas(data.nextIncrement));
        $(".liability" + data.bidID).html('$' + data.liability.toLocaleString('en-US'));
        if (data.outbid == 0 && data.autobidUserID == {{ Auth::user()->id }}) {
           $(".bidcollapse" + data.bidID).removeClass("changecolor");
            $(".bidcollapse" + data.bidID).addClass("changecolorLose");
            setTimeout(() => {
                $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
            }, 10000);
            $('.errorMsgAutoBid' + data.bidID + data.bidID).html('');
            $(".alertMessage" + data.bidID).css('background','#f16767');
            $(".alertMessage" + data.bidID).html('<p>You have been outbid.</p>');
            $('.nextincrement'+data.bidID).show();
            $('.bidnowbutton'+data.bidID).show();
            $('.autobidamount'+data.bidID).show();
            $('.bidnowautobutton'+data.bidID).show();
             $('.bidnowbutton'+data.bidID).attr("disabled", false);
             $(".bidnowbutton" +data.bidID).css('background', '##143D30');
        }
        if(data.user_id != {{ Auth::user()->id }} && data.latestAutoBidId != {{ Auth::user()->id }}){
            $(".bidcollapse" + data.bidID).addClass("changecolorLose");
            setTimeout(() => {
                $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
            }, 10000);
            $('.errorMsgAutoBid' + data.bidID + data.bidID).html('');
            $(".alertMessage" + data.bidID).css('background','#f16767');
            $('.nextincrement'+data.bidID).show();
            $('.bidnowbutton'+data.bidID).show();
            $('.autobidamount'+data.bidID).show();
            $('.bidnowautobutton'+data.bidID).show();
            $('.bidnowbutton'+data.bidID).attr("disabled", false);
             $(".bidnowbutton" +data.bidID).css('background', '#143D30');
        }
        if (data.loser == {{ Auth::user()->id }}) {
           $(".bidcollapse" + data.bidID).removeClass("changecolor");
            $(".bidcollapse" + data.bidID).addClass("changecolorLose");
            setTimeout(() => {
                $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
            }, 10000);
            $('.errorMsgAutoBid' + data.bidID + data.bidID).html('');
            $(".alertMessage" + data.bidID).css('background','#f16767');
            $(".alertMessage" + data.bidID).html('<p>You have been outbid.</p>');
            $('.nextincrement'+data.bidID).show();
            $('.bidnowbutton'+data.bidID).show();
            $('.autobidamount'+data.bidID).show();
            $('.bidnowautobutton'+data.bidID).show();
            $('.bidnowbutton'+data.bidID).attr("disabled", false);
             $(".bidnowbutton" +data.bidID).css('background', '#143D30');
        }
        var total_bid = 0;

        setTimeout(() => {
            $('.liabilty_shown').each(function(i, obj) {
                s_bid = $(obj).html();
                formated_amount = parseFloat(s_bid.replace(/[^\d\.]*/g, ''));
                total_bid = parseFloat(total_bid) + parseFloat(formated_amount);
            });
            $(".finalliability").html('$' + total_bid.toLocaleString('en-US'));
        }, 500);
        data.checkTimer = 0;
        resetTimer(data);

    });
    function roundedToFixed(input, digits){
  var rounded = Math.pow(10, digits);
  return (Math.round(input * rounded) / rounded).toFixed(digits);
}
    socket.on('auto_bid_delete', function(data) {
        $(".alertMessage" + data.bidID).html('');
        $('.errorMsgAutoBid' + data.auction_product_id).html('');
        $(".autobidamount" + data.auction_product_id).removeClass("mb-2");
        $('.errorMsgAutoBid' + data.auction_product_id + data.auction_product_id).html('');
        $(".bidcollapse" + data.auction_product_id).removeClass("changecolor");
        // var weight = $("#auctionWeight").val();
        // var finalIncSinglebid = $("#finalIncSinglebid").val();
        // var total = 0;
        //  var total = (finalIncSinglebid * weight);
        $(".totalliability" + data.auction_product_id).html('$' + total.toLocaleString('en-US'));
        $(".AutoSingleBidClick" + data.auction_product_id).css("display", "none");
    });
    socket.on('add_bid_updates', function(data) {
        // $(".alertMessage"+data.bidID).html('');
        if (data.outbidresponse == 0 && data.autobidUserID == {{ Auth::user()->id }}) {
            $('.errorMsgAutoBid' + data.bidID).hide();
            $('.errorMsgAutoBid' + data.bidID + data.bidID).html('');
            $(".autobidamount" + data.bidID).addClass("mb-2");
            $(".bidnowbutton" + data.bidID).css("display", "block");
            $(".bidnowautobutton" + data.bidID).css("display", "block");
            $(".bidnowautobutton" + data.bidID).css("margin-bottom: ", "9px;");
            // $(".autobidClass" + data.bidID).css("margin-left", "188px");
            $(".bidcollapse" + data.bidID).removeClass("changecolor");
            $(".bidcollapse" + data.bidID).addClass("changecolorLose");
            setTimeout(() => {
                $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
            }, 10000);
            $('.autobidamount' + data.bidID).show();
            $('.nextincrement' + data.bidID).show();
            $(".alertMessage" + data.bidID).hide('');
            $(".autobidClass1" + data.bidID).show();
            $('.bidnowbutton'+data.bidID).attr("disabled", false);
             $(".alertMessage" + data.bidID).css('background','#f16767');
            $('.alertMessage' + data.bidID).html('You have been outbid.');
            $(".alertMessage" + data.bidID).hide('');

        }
        if (data.winningBidder == {{ Auth::user()->id }}) {
            total = total;
            $(".liabilitybidcollapse" + data.bidID).show();
            $(".liability_your" + data.bidID).addClass('liabilty_shown');
            $(".finalliabilitytr").show();
            $(".userbid" + data.bidID).css("color", "black");
            $(".bidcollapse" + data.bidID).addClass("changecolor");
            $(".liabilitybidcollapse" + data.bidID).addClass("changecolor");
            $(".auctionpaddleno" + data.bidID).html(data.paddleNo);

        } else if (data.winningBidder != undefined) {
            // total = 0;
            $(".liabilitybidcollapse" + data.bidID).hide();
            $(".liability_your" + data.bidID).removeClass('liabilty_shown');
            $(".bidcollapse" + data.bidID).removeClass("changecolor");
            $(".userbid" + data.bidID).css("color", "#e78460");
            $(".bidcollapse" + data.bidID).addClass("changecolorLose");
            setTimeout(() => {
                $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
            }, 10000);
            $(".bidnowbutton" + data.bidID).attr("disabled", false);
            $(".bidnowbutton" + data.bidID).css('background', '#143D30');
            $(".alertMessage" + data.bidID).css('background','#f16767');
//            $(".alertMessage" + data.bidID).html('<p>You have been outbid.</p>');
        }
        if (data.latestSingleBidUser == {{ Auth::user()->id }}) {
            $(".bidnowbutton" + data.bidID).attr("disabled", true);
            $(".bidnowbutton" + data.bidID).css('background', '#a6a6a6');
            $(".bidnowbutton" + data.bidID).css('color', '#ffffff');
            $(".alertMessage" + data.bidID).css('background', '#DBFFDA');
            $(".alertMessage" + data.bidID).html('<p>Your $' + data.singleBidammounttesting +
                '/lb Bid is confirmed.</p>');
        } else {
        if(data.loser && data.loser == {{ Auth::user()->id }}){
//            $(".bidcollapse" + data.bidID).addClass("changecolorLose");
//            setTimeout(() => {
//                $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
//            }, 10000);
//            $(".bidnowbutton" + data.bidID).attr("disabled", false);
//            $(".bidnowbutton" + data.bidID).css('background', '#143D30');
//            $(".alertMessage" + data.bidID).css('background','#f16767');
            $(".alertMessage" + data.bidID).html('<p>You have been outbid.</p>');
        }}
        if (data.bidAmountUser == {{ Auth::user()->id }}) {
            $(".userbid" + data.bidID).html('$' + data.userBidAmount.toLocaleString('en-US') + '/lb');
        }
        if (data.liabiltyUser == {{ Auth::user()->id }}) {
            total = total + data.liability;
            var total_bid = 0;
            $(".liability" + data.bidID).html('$' + data.liability.toLocaleString('en-US'));
            setTimeout(() => {
                $('.liabilty_shown').each(function(i, obj) {
                    s_bid = $(obj).html();
                    formated_amount = parseFloat(s_bid.replace(/[^\d\.]*/g, ''));
                    total_bid = parseFloat(total_bid) + parseFloat(formated_amount);
                });
                $(".finalliability").html('$' + total_bid.toLocaleString('en-US'));
            }, 500);
        } else {
            var liablity = $(".liability" + data.bidID).html();
            var resliablity = parseFloat(liablity.replace(/[^\d\.]*/g, ''));
            var totalliabilty = $(".finalliability").html();
            var restotalliabilty = parseFloat(totalliabilty.replace(/[^\d\.]*/g, ''));
            var final = restotalliabilty - resliablity;
            total_bid = 0;
            setTimeout(() => {
                $('.liabilty_shown').each(function(i, obj) {
                    s_bid = $(obj).html();
                    formated_amount = parseFloat(s_bid.replace(/[^\d\.]*/g, ''));
                    total_bid = parseFloat(total_bid) + parseFloat(formated_amount);
                });

                if (total_bid > 0)
                    $(".finalliability").html('$' + total_bid.toLocaleString('en-US'));
                else {
                    $(".finalliability").html('$' + 0);
                }
            }, 500);

        }
        if (data.checkTimer == 0) {
            window.empty = data.checkTimer;
            resetTimer(data);
        }
        var incrementedvalue=roundedToFixed(data.nextIncrement,1);
        $(".bidData1" + data.bidID).html('$' + data.singleBidammounttesting.toLocaleString('en-US') + '/lbs');
        $(".nextincrement" + data.bidID).html('$' + addCommas(incrementedvalue));
        $(".increment" + data.bidID).html('$' + data.increment.toLocaleString('en-US'));
        $(".paddleno" + data.bidID).html(data.paddleNo);
        $(".paddleno" + data.bidID).addClass('fw-bold');
        $(".biddermaxbid" + data.bidID).html('$' + addCommas(data.nextIncrement) +
            '/lb');
        $(".totalliability" + data.bidID).html('$' + data.bidderLiablity.toLocaleString('en-US'));

    });

    function resetTimer(data) {
        var timer_text = "";
        var hours = 0;
        var days = 0;
        @php
            $isEmpty = sizeof($singleBids);
        @endphp

        if ("{{ $auction->auctionStatus() }}" == "active") {
            @php
                $date_a = new DateTime($auction->endTime);
                $date_b = new DateTime(date('Y-m-d H:i:s'));
                $date_c = new DateTime($auction->startDate);

                $interval = date_diff($date_a, $date_b);
                $interva13 = date_diff($date_b, $date_c);

                $interval2 = $interval->format('%i:%s');
                $interval3 = $interva13->format('%d:%h:%i:%s');
            @endphp
            if (data && data.checkTimer == 0) {
                $('.auction_pending').hide();
                $('.auction_started').show();
                var timer_text = "Auction Ending in";
                var timer2 = "03:00";
                var timer = timer2.split(':');

            } else if (window.empty != 0) {
                $('.auction_pending').hide();
                $('.auction_started').show();
                var timer_text = "Auction Ending in";
                var timer2 = "03:00";
                var timer = timer2.split(':');

            } else {
                $('.auction_started').show();
                $('.auction_pending').hide();
                var timer_text = "Auction Ending in";
                var timer2 = "{{ $interval2 }}";
                var timer = timer2.split(':');

            }
        } else if ("{{ $auction->auctionStatus() }}" == "ended") {

        }
        // else if("{{ $auction->auctionStatus() }}" == "running")
        // {

        // }
        else {
            $('.auction_started').hide();
            $('.auction_pending').show();
            var timer_text = "Auction Starting in";
            var timer2 = "{{ $interval3 }}";
            var timer = timer2.split(':');

        }
        $('.timer_text').html(timer_text);
        clearInterval(interval);
        if (timer.length > 2) {
            days = parseInt(timer[0], 10);
            hours = parseInt(timer[1], 10);
            var minutes = parseInt(timer[2], 10);
            var seconds = parseInt(timer[3], 10);
        } else {
            var minutes = parseInt(timer[0], 10);
            var seconds = parseInt(timer[1], 10);
        }
        $('.days').html(days.toString().padStart(2, "0"));
        $('.hours').html(hours.toString().padStart(2, "0"));
        $('.minutes').html(minutes.toString().padStart(2, "0"));
        $('.seconds').html(seconds.toString().padStart(2, "0"));
        if (window.empty != 0 && "{{ $auction->auctionStatus() }}" == "active") {
            return;
        }
        window.interval = setInterval(function() {
            var timer = timer2.split(':');
            //by parsing integer, I avoid all extra string processing
            if (timer.length > 2) {
                days = parseInt(timer[0], 10);
                hours = parseInt(timer[1], 10);
                var minutes = parseInt(timer[2], 10);
                var seconds = parseInt(timer[3], 10);
            } else {
                var minutes = parseInt(timer[0], 10);
                var seconds = parseInt(timer[1], 10);
            }

            --seconds;
            minutes = (seconds < 0) ? --minutes : minutes;
            seconds = (seconds < 0) ? 59 : seconds;
            seconds = seconds.toString().padStart(2, "0");
            //minutes = (minutes < 10) ?  minutes : minutes;
            $('.days').html(days.toString().padStart(2, "0"));
            $('.hours').html(hours.toString().padStart(2, "0"));
            $('.minutes').html(minutes.toString().padStart(2, "0"));
            $('.seconds').html(seconds);
            if (minutes < 0) clearInterval(interval);
            //check if both minutes and seconds are 0
            if ((seconds <= 0) && (minutes <= 0)) {
                clearInterval(interval);
                // set is_hidden of auction = 1
                window.location = window.location.href + "?ended=1"; //location.reload();
            }
            if (timer.length > 2) {
                timer2 = days + ':' + hours + ':' + minutes + ':' + seconds;
            } else {
                timer2 = minutes + ':' + seconds;
            }
        }, 1000);
    }
    $(function() {
        resetTimer();
    })

    function commify(n) {
        var parts = n.toString().split(".");
        const numberPart = parts[0];
        const decimalPart = parts[1];
        const thousands = /\B(?=(\d{3})+(?!\d))/g;
        return numberPart.replace(thousands, ",") + (decimalPart ? "." + decimalPart : "");
    }
    function addCommas(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}
</script>

</html>
