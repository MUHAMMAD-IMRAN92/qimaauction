<html lang="en">

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
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

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

    #width a img {
        /* margin-left: 108px; */
        margin-top: 20px;
        margin-bottom: 15px;
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

    .startbidbtn,
    .startbidbtn:hover {
        background-color: #143D30 !important;
        color: white;
    }

    .text-decoration-none:hover {
        text-decoration: none !important;
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
        /* display: flex; */
        justify-content: center;
    }

    .sidebar-container {
        padding: 20px 30px;
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

    .lh-zero {
        line-height: 0;
    }

    .bid-row .form-inline {
        justify-content: end;
    }

    .sidebaropen-width {
        width: 450px;
    }

    .changecolor {
        background: #FFFEA2;
        border-width: 1px 0px;
        border-style: solid;
        border-color: #9C9C9C;
    }

    .card-header {
        display: flex;
        justify-content: center;
        align-items: center;
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
            /* padding-left: 65% !important; */
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
            text-align: center;
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

        .sidebaropen-width {
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
    .heading-table-auction {
        font-family: 'Montserrat' !important;
        font-size: 27px !important;
        font-weight: 800 !important;
        line-height: 32px !important;
        letter-spacing: 0.2em !important;
        text-align: center;
        color: rgba(231, 132, 96, 1) !important;
        padding: 20px !important;
    }

    .table-head-border {
        border-bottom: 2px solid rgba(231, 132, 96, 1);
    }

    .banner-text-section {

        height: auto;
        background-color: rgba(239, 235, 229, 1);
        z-index: 10;
    }

    .banner-text-section h2 {
        font-family: 'Montserrat';
        font-size: 50px;
        font-weight: 800;
        line-height: 61px;
        letter-spacing: 0em;
        text-align: left;
        text-transform: uppercase;
        margin-bottom: 0px;

    }

    .banner-text-section h3 {
        font-family: 'Montserrat';
        font-size: 20px;
        font-weight: 800;
        line-height: 32px;
        letter-spacing: 0.1em;
        text-align: left;
        text-transform: uppercase;
        margin-bottom: 0px;


    }

    .banner-text-section p {
        cursor: pointer;

        font-family: 'Montserrat-Medium';
        font-size: 11px;
        font-weight: 500;
        line-height: 13px;
        letter-spacing: 0.2em;
        text-align: left;
        text-transform: uppercase;
        margin-bottom: 0px;


    }

    .banner-text-section h6 {
        cursor: pointer;

        font-family: 'Montserrat';
        font-size: 11px;
        font-weight: 500;
        line-height: 13px;
        letter-spacing: 0.2em;
        text-align: left;
        text-transform: uppercase;
        margin-bottom: 0px;


    }

    .banner-text-section h4 {
        font-family: 'Montserrat';
        font-size: 18px;
        font-weight: 700;
        line-height: 22px;
        letter-spacing: 0.1em;
        text-align: left;
        text-transform: uppercase;
        cursor: pointer;



    }

    .banner-text-section span {
        font-family: 'Montserrat-Medium';
        font-size: 11px;
        font-weight: 500;
        line-height: 13px;
        letter-spacing: 0.2em;
        text-align: left;
        text-transform: uppercase;


    }

    .wrapper-bg-section {
        position: relative;
    }



    .banner-text-section-2 {
        top: 75%;
        left: 46%;
        position: absolute;
        width: 501px;
        height: auto;
        background-color: rgba(239, 235, 229, 1);
        padding: 25px;
        z-index: 10;
    }

    .images-section {
        z-index: 5;
    }

    .banner-text-section-2 p {
        font-family: 'Montserrat-Medium';
        font-size: 11px;
        font-weight: 500;
        line-height: 13px;
        letter-spacing: 0.2em;
        text-align: left;
        margin-bottom: 0px;


    }

    .banner-text-section-2 h3 {
        font-family: 'Montserrat';
        font-size: 18px;
        font-weight: 700;
        line-height: 22px;
        letter-spacing: 0.1em;
        text-align: left;
        text-transform: uppercase;
        margin-bottom: 0px;
        margin-top: 10px;
        color: rgba(35, 43, 56, 1);



    }

    .moreBtn {
        background: transparent;
        text-align: center;
    }

    .btn-info button {
        padding: 0.6rem 0.4rem;
        font-family: 'Montserrat';
        font-size: 11px;
        font-weight: 600;
        line-height: 12px;
        color: #303030;
        text-transform: uppercase;
        background-color: white;
        letter-spacing: 0.1em;
        border: none;
        cursor: pointer;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
        border-radius: 24px;
        margin: 0 1rem;
        width: 180px;
    }

    .btn-info:hover {
        background-color: transparent !important;
    }

    .banner-text-section-2 h6 {
        font-family: 'Montserrat-Medium';
        font-size: 11px;
        font-weight: 500;
        line-height: 19px;
        letter-spacing: 0.1em;
        text-align: left;
        text-transform: inherit;
        max-height: 50vh;
        overflow-y: auto;
        display: block;
    }

    .banner-text-section-2y::-webkit-scrollbar {
        width: 1em;
    }

    .banner-text-section-2::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    .banner-text-section-2::-webkit-scrollbar-thumb {
        background-color: darkgrey;
        outline: 1px solid slategrey;
    }

    .banner-text-section-2 h5 {
        font-family: 'Montserrat';
        font-size: 11px;
        font-weight: 700;
        line-height: 13px;
        letter-spacing: 0.2em;
        text-align: left;
        text-transform: uppercase;
        margin-bottom: 10px;

    }

    #mySidebar {
        background: rgba(239, 235, 229, 1)
    }


    @font-face {
        font-family: 'Montserrat';
        src: url('{{ asset('public/app-assets/fonts/Montserrat/Montserrat-Bold.ttf') }}') format('truetype');

    }

    @font-face {
        font-family: 'Montserrat-Medium';
        src: url('{{ asset('public/app-assets/fonts/Montserrat/Montserrat-Medium.ttf') }}') format('truetype');

    }

    .banner-text-section img {
        margin-top: 20px !important;
        margin-bottom: 20px !important;
        display: block;
    }

    @media screen and (max-width:1000px) {
        .complete-wrapper::after {
            display: none !important;
        }

        .content-wrapper {
            margin-bottom: 0vh !important;
        }

        .banner-text-section img {
            margin-top: 20px !important;
            margin-bottom: 20px !important;
            display: block;
        }

        .banner-text-section-2 .banner-image-2 {
            margin-top: 20px !important;
            margin-bottom: 20px !important;
            display: block;
        }

        .banner-text-section {
            position: initial;
            width: 100%;
        }

        .banner-text-section-2 {
            position: initial;
            width: 100%;
        }

        .background-image-1 {
            display: none;
        }

        .background-image-2 {
            display: none;

        }

        .background-image-3 {
            display: none;
        }

        .badge-section {
            position: initial;
            text-align: center;
        }

        .complete-wrapper {
            padding: 10px !important;
            height: auto;
        }

        .icons-tab {
            display: none !important;
        }

        .content-wrapper {
            padding: 10px !important;
        }

        .navbar {
            display: flex;
            justify-content: end;
        }

        .badges-wrapper {
            margin-top: 0px !important;
            position: initial !important;
        }

        .display-none-section {
            display: none;
        }

        .badge-section {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 0px;
        }

        .banner-text-section-2 {
            padding: 0px !important;
        }

        .banner-text-section {
            padding: 0px !important;
        }

        .content-wrapper {
            height: auto !important;
        }
    }

    #score {
        border: 2px solid lightgray;
    }

    .hr {
        border: 2px solid rgb(244, 243, 243);
    }

    .newfooter-bg {
        background: #EFEBE5;
    }

    .footer-qima {
        padding: 40px;
    }

    .footer-qima p a {
        text-decoration: none;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        line-height: 17px;
        display: flex;
        align-items: center;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        font-feature-settings: 'kern' off;
        color: #9F9B9B;
    }

    .white-anchor {
        text-decoration: none;
        color: #9F9B9B !important;
    }

    .auctiontable tbody tr td P {
        margin-bottom: 0px;
    }

    /* .table.auctiontable tbody tr:nth-child(32) td:nth-child(7) .inner-data{
        white-space: nowrap;
        width: max-content;
    } */
    /* .table.auctiontable tbody tr:nth-child(32) td:nth-child(7) .inner-data{
        white-space: nowrap;
        width: max-content;
    } */
    /* .table.auctiontable tbody tr td{
        white-space: nowrap;
        width: 20%;
        max-width: 20%;
        min-width: 20%;
    } */
    /* .inner-data{
        white-space: nowrap;
        width: max-content;
    } */
</style>

<body>
    <nav class="navbar navbar-fix">
        <div id="width"><a href="{{ url('/') }}"><img
                    src="https://bestofyemenauction.com/public/images/logo.land.png" width="180px" alt="">
            </a>
        </div>
        <div>
            <ul class="navbar-list" style="margin-right: 15px; " id="nav-list">
                @if (Auth::user())
                    <a href="{{ route('user_logout') }}">
                        <i class="fa fa-sign-out" title="Logout"></i>
                    </a>
                @else
                    <a href="{{ route('login') }}">
                        <i class="fa fa-sign-in" title="Sign in"></i>
                    </a>
                @endif
                <a target="_blank" href="https://www.instagram.com/qimacoffee/"><i title="Follow us on Instagram"
                        class="fa fa-instagram"></i> </a>
                <a target="_blank" href="https://www.facebook.com/qimacoffee/"><i title="Follow us on Facebook"
                        class="fa fa-facebook"></i></a>
                <a target="_blank" href="https://www.linkedin.com/company/qima-coffee/mycompany/"><i
                        title="Follow us on Linkedin" class="fa fa-linkedin" aria-hidden="true"></i> </a>

                <a target="_blank" href="https://www.youtube.com/channel/UCcgmMB11TkfAsGO1uiHuKnQ"><i
                        title="View our Youtube Channel" class="fa fa-youtube-play" aria-hidden="true"></i> </a>


            </ul>
        </div>
        <!-- {{-- <div class="menu" id="toggle-button">
            <div class="menu-item"></div>
            <div class="menu-item"></div>
            <div class="menu-item"></div>
        </div> --}} -->



    </nav>
    <!-- {{-- <section>
        <div class="navbar">
            <a href="#"><img src="{{ asset('public/images/avatar.png') }}" alt="Avatar" class="avatar"></a>

            @if (Auth::user())
            <a href="{{ route('user_logout') }}" >
            <p>LOG OUT</p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
            @else
            <a href="{{ route('customer.login') }}">
                <p>LOG IN</p>
            </a>
            @endif

            <a href="https://www.instagram.com/qimacoffee/"><i class="fa fa-instagram"></i> </a>
            <a href="https://www.facebook.com/qimacoffee/"><i class="fa fa-facebook"></i></a>
            <a href="https://www.linkedin.com/company/qima-coffee/mycompany/"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>

            <a href="https://www.youtube.com/channel/UCcgmMB11TkfAsGO1uiHuKnQ"><i class="fa fa-youtube-play" aria-hidden="true"></i> </a>
        </div>
    </section>
    <section>
        <div id="background">
            <div class="imglogo">
                <img src="{{ asset('public/images/logo-banner.png') }}" width=40px alt="">
            </div>
        </div>
    </section> --}} -->
    <div class="container box text-center section-4-text-1 auction_pending" style="display: none;width:auto;">
        <div class="row boxrow">
            {{ $auction->startDate }}
            {{ \Carbon\Carbon::now() }}
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
    <!-- {{-- <div class="container box text-center section-4-text-1 auction_started" style="display: none;">
        <div class="row boxrow">
            <p class="timer_text"></p>
        </div>
        <div class="row boxrow">

            <div class="col-3">
                <h2 class="minutes">-</h2>
                <p>Minutes</p>
            </div>
            <div>
                <h2>:</h2>
            </div>
            <div class="col-3">
                <h2 class="seconds">-</h2>
                <p>Seconds </p>
            </div>
        </div>
        <div class="row boxrow">
            <div class="col-8 ">
                <p id="countdown" style="color: red;font-size: small;"></p>
            </div>
        </div>
    </div> --}} -->
    <section>
        <h2 style="text-align: center;font-family:'Montserrat';">Welcome to the Best of Yemen</h2>
        <!--<h3 style="text-align: center;font-family:'Montserrat';">Auction starting soon.</h3>-->

        <div class="table-container">
            <div class="tab-content" id="nav-tabContent">
                <nav class="tablenav">
                    <div class="col-sm-2 col-4" style="padding-left: 0; !important">
                        <div class="nav nav-tabs nav-fill auctiontabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active mr-2" id="nav-home-tab" data-toggle="tab"
                                href="#nav-home" role="tab" aria-controls="nav-home"
                                aria-selected="true">Auction</a>
                        </div>
                    </div>
                </nav>
                <div class="tab-pane fade auction-data show active table-responsive" id="nav-home" role="tabpanel"
                    aria-labelledby="nav-home-tab">
                    <table class="table auctiontable">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Rank</th>
                                <th scope="col">Jury Score</th>
                                {{-- <th scope="col">Your Score</th> --}}
                                <th scope="col">Weight</th>
                                <th scope="col">Increment</th>
                                <th scope="col">Bid</th>
                                <th scope="col"></th>
                                {{-- <th scope="col">Total Value</th> --}}
                                <th scope="col">Name</th>
                                <th scope="col">Process</th>
                                <th scope="col">Genetics</th>
                                <th scope="col">High Bidder</th>
                                <th scope="col">Time Left</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="table-head-border">

                                <td colspan="14">
                                    <h5 class="inner-data heading-table-auction">NATURAL AND DEEP FERMENTATION</h5>
                                </td>
                            </tr>
                            @foreach ($naturalauctionProducts as $auctionProduct)
                                @php
                                    //increment in singlebid price
                                    $incPriceSinglebid = isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount : $auctionProduct->start_price;
                                    $bidLimitSinglebid = App\Models\Bidlimit::where('min', '<', $incPriceSinglebid)
                                        ->orderBy('min', 'desc')
                                        ->limit(1)
                                        ->get();
                                    $bidIncrementSinglebid = $bidLimitSinglebid[0]->increment ?? '';
                                    $finalIncSinglebid = (float) $incPriceSinglebid + (float) $bidIncrementSinglebid;
                                    $isEmpty = sizeof($singleBids);
                                @endphp
                                <tr class="tr-bb table-pt-res text-center bidcollapse{{ $auctionProduct->id }}">
                                    <td class="fw-bold td-res-pl">{{ $auctionProduct->rank }}</td>
                                    <td class="fw-bold td-res-pl">{{ $auctionProduct->jury_score }}</td>
                                    {{-- <td contenteditable='true' class="text-underline yourscore td-res-pl"
                                    data-id="{{ $auctionProduct->id }}" id="score">
                                    {{ $auctionProduct->userscore->your_score ?? '' }}</td> --}}
                                    <td class="td-res-pl">{{ $auctionProduct->weight }}lbs</td>
                                    <td class="increment{{ $auctionProduct->id }} td-res-pl">
                                        ${{ number_format((float) $bidIncrementSinglebid, 1) }}</td>
                                    <td class="fw-bold td-res-pl">
                                        <div>
                                            <span
                                                class="bidData1{{ $auctionProduct->id }} intialinc">${{ isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount : $auctionProduct->start_price }}/lbs</span>
                                        </div>
                                    </td>
                                    <td class="td-res-pl">
                                        @if ($auction->auctionStatus() == 'active')
                                            <a class=" startbidbtn btn-success btn accordion-toggle collapsed startBid changetext{{ $auctionProduct->id }}"
                                                data-id="{{ $auctionProduct->id }}"
                                                auction-id="{{ $auctionProduct->auction_id }}" id="accordion1"
                                                data-toggle="collapse" data-parent="#accordion1"
                                                href="#collapseOne{{ $auctionProduct->id }}">Bid</a>
                                        @endif
                                    </td>
                                    {{-- <td class="liability{{ $auctionProduct->id }} td-res-pl">
                                    ${{ isset($auctionProduct->latestBidPrice) ? number_format($auctionProduct->latestBidPrice->bid_amount * $auctionProduct->weight, 1) : number_format($auctionProduct->start_price * $auctionProduct->weight, 1) }}
                                </td> --}}
                                    @foreach ($auctionProduct->products as $products)
                                        <td class="fw-bold text-underline td-res-pl"><a
                                                class="openbtn openSidebar"data-id="{{ $auctionProduct->id }}"
                                                data-productid="{{ $products->id }}"
                                                data-image="{{ @$auctionProduct->auctionProductImages[0]->image }}"
                                                data-image1="{{ @$auctionProduct->auctionProductImages[1]->image }}">{{ $products->product_title }}
                                            </a>

                                        </td>
                                    @endforeach
                                    {{-- @foreach ($auctionProduct->products as $products) --}}

                                    <td class="td-res-pl">{{ $auctionProduct->process }}</td>

                                    {{-- @endforeach --}}
                                    {{-- @foreach ($auctionProduct->products as $products) --}}
                                    {{-- @if ($products->genetic_id == '1') --}}
                                    <td class="td-res-pl">{{ $auctionProduct->genetic }}</td>
                                    {{-- @elseif ($products->genetic_id == '2')
                                        <td class="td-res-pl">Bourbon</td>
                                    @else
                                        <td class="td-res-pl">SL28</td>
                                    @endif --}}
                                    {{-- @endforeachz --}}
                                    @if (isset($auctionProduct->singleBidPricelatest))
                                        @foreach ($auctionProduct->singleBidPricelatest->user as $userData)
                                            <td class="paddleno{{ $auctionProduct->id }} fw-bold td-res-pl">
                                                {{ $userData->paddle_number ?? '---' }}</td>
                                        @endforeach
                                    @else
                                        <td class="paddleno{{ $auctionProduct->id }} td-res-pl">Awaiting Bid</td>
                                    @endif
                                    <td class="td-res-pl">
                                        <div>
                                            <span class="waiting{{ $auctionProduct->id }} td-res-pl lh-zero">
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
                                <tr class="hide-table-padding bid-row">
                                    <td colspan="13">
                                        <div id="collapseOne{{ $auctionProduct->id }}" class="collapse">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 style="margin: 0 20px">You need to login to Bid.</h5>
                                                    <a style="padding: 5px; border-radius: 4px;"
                                                        href="{{ route('customer.login') }}"
                                                        class="startbidbtn text-decoration-none">Login</a>

                                                </div>
                                                {{-- <div class="card-body">
                                                       <a  href="{{ route('customer.login') }}" class="btn btn-success">Login</a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <tr class="table-head-border">

                                <td colspan="14">
                                    <h5 class="inner-data heading-table-auction ">ALCHEMY</h5>
                                </td>

                            </tr>
                            @foreach ($auctionProducts as $auctionProduct)
                                @php
                                    //increment in singlebid price
                                    $incPriceSinglebid = isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount : $auctionProduct->start_price;
                                    $bidLimitSinglebid = App\Models\Bidlimit::where('min', '<', $incPriceSinglebid)
                                        ->orderBy('min', 'desc')
                                        ->limit(1)
                                        ->get();
                                    $bidIncrementSinglebid = $bidLimitSinglebid[0]->increment ?? '';
                                    $finalIncSinglebid = (float) $incPriceSinglebid + (float) $bidIncrementSinglebid;
                                    $isEmpty = sizeof($singleBids);
                                @endphp
                                <tr class="tr-bb table-pt-res text-center bidcollapse{{ $auctionProduct->id }}">
                                    <td class="fw-bold td-res-pl">{{ $auctionProduct->rank }}</td>
                                    <td class="fw-bold td-res-pl">{{ $auctionProduct->jury_score }}</td>
                                    {{-- <td contenteditable='true' class="text-underline yourscore td-res-pl"
                                        data-id="{{ $auctionProduct->id }}" id="score">
                                        {{ $auctionProduct->userscore->your_score ?? '' }}</td> --}}
                                    <td class="td-res-pl">{{ $auctionProduct->weight }}lbs</td>
                                    <td class="increment{{ $auctionProduct->id }} td-res-pl">
                                        ${{ number_format((float) $bidIncrementSinglebid, 1) }}</td>
                                    <td class="fw-bold td-res-pl">
                                        <div>
                                            <span
                                                class="bidData1{{ $auctionProduct->id }} intialinc">${{ isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount : $auctionProduct->start_price }}/lbs</span>
                                        </div>
                                    </td>
                                    <td class="td-res-pl">
                                        @if ($auction->auctionStatus() == 'active')
                                            <a class=" startbidbtn btn-success btn accordion-toggle collapsed startBid changetext{{ $auctionProduct->id }}"
                                                data-id="{{ $auctionProduct->id }}"
                                                auction-id="{{ $auctionProduct->auction_id }}" id="accordion1"
                                                data-toggle="collapse" data-parent="#accordion1"
                                                href="#collapseOne{{ $auctionProduct->id }}">Bid</a>
                                        @endif
                                    </td>
                                    {{-- <td class="liability{{ $auctionProduct->id }} td-res-pl">
                                        ${{ isset($auctionProduct->latestBidPrice) ? number_format($auctionProduct->latestBidPrice->bid_amount * $auctionProduct->weight, 1) : number_format($auctionProduct->start_price * $auctionProduct->weight, 1) }}
                                    </td> --}}
                                    @foreach ($auctionProduct->products as $products)
                                        <td class="fw-bold text-underline td-res-pl"><a
                                                class="openbtn openSidebar"data-id="{{ $auctionProduct->id }}"
                                                data-productid="{{ $products->id }}"
                                                data-image="{{ @$auctionProduct->auctionProductImages[0]->image }}"
                                                data-image1="{{ @$auctionProduct->auctionProductImages[1]->image }}">{{ $products->product_title }}
                                            </a>

                                        </td>
                                    @endforeach
                                    {{-- @foreach ($auctionProduct->products as $products) --}}

                                    <td class="td-res-pl">{{ $auctionProduct->process }}</td>

                                    {{-- @endforeach --}}
                                    {{-- @foreach ($auctionProduct->products as $products) --}}
                                    {{-- @if ($products->genetic_id == '1') --}}
                                    <td class="td-res-pl">{{ $auctionProduct->genetic }}</td>
                                    {{-- @elseif ($products->genetic_id == '2')
                                            <td class="td-res-pl">Bourbon</td>
                                        @else
                                            <td class="td-res-pl">SL28</td>
                                        @endif --}}
                                    {{-- @endforeachz --}}
                                    @if (isset($auctionProduct->singleBidPricelatest))
                                        @foreach ($auctionProduct->singleBidPricelatest->user as $userData)
                                            <td class="paddleno{{ $auctionProduct->id }} fw-bold td-res-pl">
                                                {{ $userData->paddle_number ?? '---' }}</td>
                                        @endforeach
                                    @else
                                        <td class="paddleno{{ $auctionProduct->id }} td-res-pl">Awaiting Bid</td>
                                    @endif
                                    {{-- @if (!isset($auctionProduct->groupAutobid) && isset($auctionProduct->singleBidPricelatest))
                                    @foreach ($auctionProduct->singleBidPricelatest->user as $userData)
                                        <td class="paddleno{{ $auctionProduct->id }} fw-bold paddlenumber">
                                            {{ $userData->paddle_number ?? '---' }}</td>
                                    @endforeach
                                @elseif (isset($auctionProduct->groupAutobid))
                                    <td class="paddleno{{ $auctionProduct->id }} fw-bold paddlenumber">
                                        {{ $auctionProduct->offerComplete->paddle_number ?? '---' }}</td>
                                @else
                                    <td class="paddleno{{ $auctionProduct->id }}">Awaiting Bid</td>
                                @endif --}}
                                    <td class="td-res-pl">
                                        <div>
                                            <span class="waiting{{ $auctionProduct->id }} td-res-pl lh-zero">
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
                                <tr class="hide-table-padding bid-row">
                                    <td colspan="13">
                                        <div id="collapseOne{{ $auctionProduct->id }}" class="collapse">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 style="margin: 0 20px">You need to login to Bid.</h5>
                                                    <a style="padding: 5px; border-radius: 4px;"
                                                        href="{{ route('customer.login') }}"
                                                        class="startbidbtn text-decoration-none">Login</a>

                                                </div>
                                                {{-- <div class="card-body">
                                                           <a  href="{{ route('customer.login') }}" class="btn btn-success">Login</a>
                                                    </div> --}}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="mySidebar" class="sidebar">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="sidebar-container">
                        <div class="banner-text-section ">
                            <h2 class="rank"></h2>
                            <h3 class="name"></h3>
                            <div class="d-flex align-items-center">
                                <p>JURY CODE:</p>
                                <p style="cursor: auto;" class="code"></p>
                            </div>
                            <hr>
                            <div class="lot-featured-img">
                                <img class="img-status">
                                <input type="hidden" name="image-source"
                                    value="{{ asset('storage/app/public/auction/') }}" id="image-source" />
                            </div>
                            <p>JURY SCORE:</p>
                            <h2 style="cursor: auto;" class="juryscore"></h2>
                            <h2></h2>
                            <hr>
                            <div>
                                <p>Genetics :</p>
                                <h4 class="genetics"></h4>
                            </div>
                            <div>
                                <p>Process :</p>
                                <h4 class="proprocess"></h4>
                            </div>
                            <p style="cursor: auto;">lot size :</p>
                            <h4 style="cursor: auto;" class="size"></h4>
                            <hr>
                            <div>
                                <h6>traceability</h6>
                                <div class="d-flex">
                                    <p>VILLAGE : </p>
                                    <p id="village"></p>
                                </div>
                                <div class="d-flex">
                                    <p> REGION : </p>
                                    <p id="region"></p>
                                </div>
                                <div class="d-flex">
                                    <p>GOVERNORATE :</p>
                                    <p id="governorate"></p>
                                </div>
                                <div class="d-flex">
                                    <p>ALTITUDE :</p>
                                    <p id="altitude"></p>
                                </div>
                            </div>
                            <div class="lot-featured-img">
                                <img class="img-status1">
                                <input type="hidden" name="image-source"
                                    value="{{ asset('storage/app/public/auction/') }}" id="image-source" />
                            </div>
                            <p id="">flavour profile</p>
                            <h4 id="cupping_profile"></h4>

                            <div class="moreBtn btn-info mt-2"></div>
                        </div>
                    </div>
                </div>
    </section>
    <div class="container-fluid newfooter-bg">
        <div class="footer-qima">
            <hr class="hr">
            <p> <a href="{{ url('/auction/results') }}" class="white-anchor"> best of yemen 2022 results</a></p>
            <p><a href="https://www.qimacoffee.com">qima coffee</a> </p>
            <p><a href="https://allianceforcoffeeexcellence.org/ace-private-collection-auctions/">Alliance for
                    coffee excellence</a></p>
            <p><a href="https://www.qimafoundation.org/">qima foundation</a></p>

        </div>
    </div>




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
            if (document.hidden) {

                window.location.reload();
            }
        }, 10000);
        $(".openSidebar").click(function() {
            $("#mySidebar").toggleClass('sidebaropen-width');
            var id = $(this).attr('data-id');
            var productid = $(this).attr('data-productid');
            $('.img-status').attr('src', "");
            $('.img-status1').attr('src', "");
            var image = $(this).attr('data-image');
            var image1 = $(this).attr('data-image1');
            var source = $("#image-source").val();
            var res = source.concat('/' + image);
            var res1 = source.concat('/' + image1);
            // alert(res);
            $('.img-status').attr('src', res);
            $('.img-status1').attr('src', res1);
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
                    var rank = response.rank;
                    var juryscore = response.jury_score;
                    var name = response.products[0].product_title;
                    var code = response.code;
                    var size = response.size;
                    var paddleno = $('.paddleno' + id).html();
                    var process = response.process;
                    var genetics = response.genetic;
                    var cupping_profile = response.cup_profile;
                    var village = response.village;
                    var region = response.region;
                    var governorate = response.governorate;
                    var altitude = response.altitude;
                    var url = '{{ route('product_detail_page_auction', ':id') }}';
                    url = url.replace(':id', id);
                    $(".weight").html(response.weight);
                    $(".rank").html('#' + rank);
                    $(".juryscore").html(juryscore);
                    $(".name").html(name);
                    $(".code").html(code);
                    $(".size").html(size + 'LBS');
                    $(".currentbid").html(currentbid.toLocaleString('en-US'));
                    // $(".totalvalue").html(totalvalue.toLocaleString('en-US'));
                    $(".paddleno").html(paddleno);
                    $("#cupping_profile").html(cupping_profile);
                    $("#region").html(region);
                    $("#village").html(village);
                    $("#altitude").html(altitude);
                    $("#governorate").html(governorate);
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
            let value = $(this).html();
            $.ajax({
                url: "{{ route('saveyourscore') }}",
                method: 'POST',
                data: {
                    id: id,
                    value: value,
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {

                },
                error: function(error) {
                    console.log(error)
                }
            });

        });
    });
</script>
<script>
    var total = 0;
    var interval;
    socket.on('auto_bid_updates', function(data) {
        $(".paddleno" + data.bidID).html(data.paddleNo);
        $(".bidData1" + data.bidID).html('$' + data.bid_amountNew.toLocaleString('en-US') + 'lbs');
        $(".nextincrement" + data.bidID).html('$' + data.nextIncrement.toLocaleString('en-US'));
        $(".liability" + data.bidID).html('$' + data.liability.toLocaleString('en-US'));
        var total_bid = 0;
        data.checkTimer = 0;
        resetTimer(data);
    });
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
        if (data.checkTimer == 0) {
            window.empty = data.checkTimer;
            resetTimer(data);
        }
        $(".bidData1" + data.bidID).html('$' + data.singleBidammounttesting.toLocaleString('en-US') + '/lbs');
        $(".nextincrement" + data.bidID).html('$' + data.nextIncrement.toLocaleString('en-US'));
        $(".increment" + data.bidID).html('$' + data.increment.toLocaleString('en-US'));
        $(".paddleno" + data.bidID).html(data.paddleNo);
        $(".biddermaxbid" + data.bidID).html('$' + data.nextIncrement.toLocaleString('en-US') +
            '/lb');
        $(".totalliability" + data.bidID).html('$' + data.bidderLiablity.toLocaleString('en-US'));

    });
    var endAuctionVar = 0;
    socket.on('add_auction_status', function(data) {
        if (data.auctionstatus == 1) {
            var sec = $('.seconds').html();
            var min = $('.minutes').html();


            if (sec == 00 && min == 00) {
                // alert( $('.seconds').html() +'::'+$('.minutes').html());
                window.location = window.location.href + "?ended=1";

            } else {

                endAuctionVar = 1;
            }
        }
    });
    socket.on('add_timer_reset', function(data) {
        if (data.timerreset == 1) {

            data.checkTimer = 0;
            resetTimer(data);
        }
    });
    // socket.on('end_of_auction_timer', function(data) {

    //     console.log('this end_of_auction_timer')
    //     $('.autobtnclick').attr("disabled", true);
    //     $('.singlebtnclick').attr("disabled", true);
    //     $('.confirm-btn').attr("disabled", true);
    //     $('.confirm-btn').css('background', '#a6a6a6');

    //     $(".singlebtnclick").css('background', '#a6a6a6');

    //     $('.minutes').html('00');
    //     $('.seconds').html('00');
    // });

    function resetTimer(data) {
        console.log(data);
        console.log('reset timer');
        var timer_text = "";
        var hours = 0;
        var days = 0;
        @php
            $isEmpty = sizeof($singleBids);
        @endphp

        if ("{{ $auction->auctionStatus() }}" == "active" && endAuctionVar == 0) {
            @php
                $date_a = new DateTime($auction->endTime);
                $date_b = new DateTime(date('Y-m-d H:i:s'));
                $date_c = new DateTime($auction->startDate);
                //   dd($date_b);
                if ($auction->endTime) {
                    $interval = '03:00';
                    $interva13 = '00:00:03:00';
                    $interval2 = '03:00';
                } elseif ($date_b >= $date_a) {
                    $interval = '00:00';
                    $interva13 = '00:00:00:00';
                    $interval2 = '00:00';
                } else {
                    $interval = date_diff($date_a, $date_b);
                    $interva13 = date_diff($date_b, $date_c);
                    $interval2 = $interval->format('%i:%s');
                    $interval3 = $interva13->format('%d:%h:%i:%s');
                }

            @endphp
            // console.log('end--->'++ 'current---->' +${$date_b} );
            if (data && data.checkTimer == 0) {
                // alert("{{ $isEmpty }}")
                $('.auction_pending').hide();
                $('.auction_started').show();
                var timer_text = "Auction Ending in";
                var timer2 = "03:00";
                var timer = timer2.split(':');

            } else if ("{{ $isEmpty }}" > 0) {
                // alert("{{ $isEmpty }}");
                $('.auction_pending').hide();
                $('.auction_started').show();
                var timer_text = "Auction Ending in";
                var timer2 = "03:00";
                var timer = timer2.split(':');
            } else {

                // alert('here{{ $interval2 }}')
                $('.auction_started').show();
                $('.auction_pending').hide();
                var timer_text = "Auction Ending in";
                var timer2 = "{{ $interval2 }}";
                var timer = timer2.split(':');

            }
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
        // alert('here');
        if (!data && "{{ $isEmpty }}" != 0) {
            return;
        }
        // alert('here after');
        setTimeout(function() {
            if (document.hidden) {

                window.location.reload();
            }

        }, 5000);
        window.interval = setInterval(function() {

            // alert('here');
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
            minutes = (seconds <= 0) ? --minutes : minutes;
            seconds = (seconds <= 0) ? 59 : seconds;
            seconds = seconds.toString().padStart(2, "0");

            //minutes = (minutes < 10) ?  minutes : minutes;
            if (minutes >= 0 && seconds >= 0) {
                console.log(minutes + '::' + seconds);
                $('.days').html(days.toString().padStart(2, "0"));
                $('.hours').html(hours.toString().padStart(2, "0"));
                $('.minutes').html(minutes.toString().padStart(2, "0"));
                $('.seconds').html(seconds);
            } else {
                $('.autobtnclick').attr("disabled", true);
                $('.singlebtnclick').attr("disabled", true);

                $(".singlebtnclick").css('background', '#a6a6a6');

                $('.seconds').html('00');
                console.log('here alse');

            }

            if (minutes < 0) clearInterval(interval);
            //check if both minutes and seconds are 0
            if ((seconds <= 1) && (minutes <= 0) && endAuctionVar == 1) {
                // alert(endAuctionVar);
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
</script>

</html>
