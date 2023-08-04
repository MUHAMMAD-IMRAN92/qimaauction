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
        display: flex;
        flex-direction: column;
        height: 100vh;
        margin: 0;

    }

    .name-anchors {
        display: none;
    }

    .name-spans {
        display: none !important;
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

    #width a img {
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

    .footer {
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

    #mySidebar {
        box-shadow: -5px 0px 4px rgba(0, 0, 0, 0.2);
    }

    .sidebar-container {
        padding: 20px 30px;
        width: 450px;
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

        .footer {
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
            content: "Weight";
        }

        .auction-data td:nth-of-type(4):before {
            content: "Highest Bid";
        }

        .auction-data td:nth-of-type(5):before {
            content: "Name";
        }

        .auction-data td:nth-of-type(6):before {
            content: "Process";
        }

        .auction-data td:nth-of-type(7):before {
            content: "Genetics";
        }

        .auction-data td:nth-of-type(8):before {
            content: "High Bidder";
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

    .header-heading {
        margin-top: 20px;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .header-heading-left {
        display: flex;
        align-items: center;
        gap: 15px;
        color: black;
        text-decoration: none;
    }

    .header-heading-h5 {
        text-align: center;
        margin-bottom: 0px;
        font-family: 'Montserrat';
    }

    .header-heading-left:hover {
        text-decoration: none;
        color: #D1AF69;
    }

    .dropdown a {
        background: white;
        border: none;
        padding: 0px;
    }

    .dropdown a:hover {
        background-color: white !important;
        color: black !important;
        border: none !important;
    }

    .btn.show {
        background-color: white !important;
        color: black !important;
        border: none !important;
    }

    .btn-secondary.focus,
    .btn-secondary:focus {
        background-color: white !important;
        color: black !important;
        border: none !important;
        box-shadow: none !important;
    }

    .navbar-list {
        display: flex;
        align-items: center;
    }

    .dropdown-menu {
        padding: 5px;
        min-width: 100px;
    }

    .dropdown-menu a:hover {
        color: goldenrod !important;

    }

    .button-background {
        background: white;
        color: black;
        border: none;
    }

    .button-background:hover {
        background: white;
        color: black;
        border: none;
    }

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

    /* hamza starts ends */
</style>

<body>
    <nav class="navbar navbar-fix">
        <div id="width"><a href="{{ url('/') }}"><img
                    src="https://bestofyemenauction.com/public/images/logo.land.png" width="180px" alt="">
            </a>
        </div>
        <div>
            <ul class="navbar-list" style="margin-right: 15px; " id="nav-list">
                <a href="{{ route('user_logout') }}">
                    <i class="fa fa-sign-out" title="Logout"></i>
                </a>
                <a target="_blank" href="https://www.instagram.com/qimacoffee/"><i title="Follow us on Instagram"
                        class="fa fa-instagram"></i> </a>
                <a target="_blank" href="https://www.facebook.com/qimacoffee/"><i title="Follow us on Facebook"
                        class="fa fa-facebook"></i></a>
                <a target="_blank" href="https://www.linkedin.com/company/qima-coffee/mycompany/"><i
                        title="Follow us on Linkedin" class="fa fa-linkedin" aria-hidden="true"></i> </a>
                <a target="_blank" href="https://www.youtube.com/channel/UCcgmMB11TkfAsGO1uiHuKnQ"><i
                        title="View our Youtube Channel" class="fa fa-youtube-play" aria-hidden="true"></i> </a>
                @auth
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle button-background" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i title="Profile" class="fa fa-user" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ url('/user-profile') }}">My Profile</a>
                            <a class="dropdown-item" href="{{ route('user_logout') }}">Logout</a>
                        </div>
                    </div>
                @endauth
            </ul>
        </div>
    </nav>
    {{-- @php
        $id=request()->route()->id;
        $auction=App\Models\Auction::where('id',$id)->first();
        if($auction->getPreviousAttribute() != 'null' && $auction->getNextAttribute() != 'null')
        {
            $previous = $auction->getPreviousAttribute();
            $next=$auction->getNextAttribute();
        }
        $old_date = $auction->startDate;
        $old_date_timestamp = strtotime($old_date);
        $new_date = date('d-m-Y', $old_date_timestamp);
    @endphp --}}
    <section>
        <div class="header-heading">
            <div>
                {{-- <a class="header-heading-left"
                    @if (isset($previous)) href="{{ route('auction-winners', $previous->id) }}" @endif> <i
                        class="fa fa-angle-left" style="font-size:50px"></i>
                    <h5 class="header-heading-h5">Previous Auction </h5>
                </a> --}}
            </div>
            <div>
                <h2 style="text-align: center;font-family:'Montserrat';">Welcome to the Best of Yemen</h2>
            </div>
            <div>
                {{-- <a
                    class="header-heading-left"@if (isset($next)) href="{{ route('auction-winners', $next->id) }}" @endif>
                    <h5 class="header-heading-h5">Next Auction </h5><i class="fa fa-angle-right"
                        style="font-size:50px"></i>
                </a> --}}
            </div>
        </div>
        <div class="header-heading-time mt-5">
            {{-- <p style="text-align: center;font-family:'Montserrat';">Name: <span> {{$auction->title}}</span></p>
                <p style="text-align: center;font-family:'Montserrat';">Date: <span>{{$new_date}}</span></p> --}}
        </div>
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
                <div class="tab-pane fade auction-data table-responsive show active" id="nav-home" role="tabpanel"
                    aria-labelledby="nav-home-tab">
                    <table class="table auctiontable">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Rank</th>
                                <th scope="col">Jury Score</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Highest Bid</th>
                                <th scope="col">Name</th>
                                <th scope="col">Process</th>
                                <th scope="col">Genetics</th>
                                <th scope="col">High Bidder</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-head-border">

                                <td colspan="14">
                                    <h5 class="inner-data heading-table-auction">NATURAL AND DEEP FERMENTATION</h5>
                                </td>
                            </tr>
                            @foreach ($natAuctionProducts as $auctionProduct)
                                <tr class="tr-bb table-pt-res text-center bidcollapse{{ $auctionProduct->id }}">
                                    <td class="fw-bold td-res-pl">{{ $auctionProduct->rank }}</td>
                                    <td class="fw-bold td-res-pl">{{ $auctionProduct->jury_score }}</td>
                                    <td class="td-res-pl">{{ $auctionProduct->weight }}lbs</td>
                                    <td class="fw-bold td-res-pl">
                                        <div>
                                            <span
                                                class="bidData1{{ $auctionProduct->id }} intialinc">${{ isset($auctionProduct->highestbid) ? $auctionProduct->highestbid->bid_amount : $auctionProduct->start_price }}/lbs</span>
                                        </div>
                                    </td>
                                    @foreach ($auctionProduct->products as $products)
                                        <td class="fw-bold text-underline td-res-pl name-append"><a
                                                class="openbtn openSidebar "data-id="{{ $auctionProduct->id }} "
                                                data-productid="{{ $products->id }}"
                                                data-image="{{ @$auctionProduct->auctionProductImages[0]->image }}"
                                                data-image1="{{ @$auctionProduct->auctionProductImages[1]->image }}">
                                                {{ $products->product_title }}
                                            </a>

                                        </td>
                                    @endforeach
                                    @foreach ($auctionProduct->products as $products)
                                        {{-- @if ($products->pro_process == '1') --}}
                                        <td class="td-res-pl">{{ $auctionProduct->process }}</td>
                                        {{-- @elseif ($products->pro_process == '2')
                                            <td class="td-res-pl">Slow Dried</td>
                                        @else
                                            <td class="td-res-pl">Alchemy</td>
                                        @endif --}}
                                    @endforeach
                                    @foreach ($auctionProduct->products as $products)
                                        {{-- @if ($products->genetic_id == '1') --}}
                                        <td class="td-res-pl">{{ $auctionProduct->genetic }}</td>
                                        {{-- @elseif ($products->genetic_id == '2')
                                            <td class="td-res-pl">Bourbon</td>
                                        @else
                                            <td class="td-res-pl">SL28</td>
                                        @endif --}}
                                    @endforeach
                                    @if ($auctionProduct->winnerNames)
                                        <td style="width: 500px !important"
                                            class="paddleno{{ $auctionProduct->id }} fw-bold td-res-pl">
                                            <span
                                                class="{{ $auction->is_hidden_winners == 0 ? 'name-anchors' : '' }} ">{{ $auctionProduct->winnerNames->company ?? '---' }}</span>
                                                <a
                                                class="{{ $auction->is_hidden_winners == 1 ? 'name-spans' : 'name-spans-block' }}">__</a>
                                        </td>
                                    @elseif (isset($auctionProduct->highestbid))
                                        @foreach ($auctionProduct->highestbid->user as $userData)
                                            <td style="width: 500px !important"
                                                class="paddleno{{ $auctionProduct->id }} fw-bold td-res-pl">
                                                <span
                                                    class="{{ $auction->is_hidden_winners == 0 ? 'name-anchors' : '' }} ">{{ $userData->company ?? '---' }}</span>
                                                <a
                                                    class="{{ $auction->is_hidden_winners == 1 ? 'name-spans' : 'name-spans-block' }}">__</a>
                                            </td>
                                        @endforeach
                                    @else
                                        <td class="paddleno{{ $auctionProduct->id }} td-res-pl">Awaiting Bid</td>
                                    @endif
                                </tr>
                                <tr class="hide-table-padding bid-row">
                                    <td colspan="13">
                                        <div id="collapseOne{{ $auctionProduct->id }}" class="collapse">
                                            <div class="card">
                                                <h5 class="card-header">You need to login to Bid.</h5>
                                                <div class="card-body">
                                                    <a href="{{ route('customer.login') }}"
                                                        class="btn btn-success">Login</a>
                                                </div>
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
                                <tr class="tr-bb table-pt-res text-center bidcollapse{{ $auctionProduct->id }}">
                                    <td class="fw-bold td-res-pl">{{ $auctionProduct->rank }}</td>
                                    <td class="fw-bold td-res-pl">{{ $auctionProduct->jury_score }}</td>
                                    <td class="td-res-pl">{{ $auctionProduct->weight }}lbs</td>
                                    <td class="fw-bold td-res-pl">
                                        <div>
                                            <span
                                                class="bidData1{{ $auctionProduct->id }} intialinc">${{ isset($auctionProduct->highestbid) ? $auctionProduct->highestbid->bid_amount : $auctionProduct->start_price }}/lbs</span>
                                        </div>
                                    </td>
                                    @foreach ($auctionProduct->products as $products)
                                        <td class="fw-bold text-underline td-res-pl name-append"><a
                                                class="openbtn openSidebar "data-id="{{ $auctionProduct->id }} "
                                                data-productid="{{ $products->id }}"
                                                data-image="{{ @$auctionProduct->auctionProductImages[0]->image }}"
                                                data-image1="{{ @$auctionProduct->auctionProductImages[1]->image }}">
                                                {{ $products->product_title }}
                                            </a>

                                        </td>
                                    @endforeach
                                    @foreach ($auctionProduct->products as $products)
                                        {{-- @if ($products->pro_process == '1') --}}
                                        <td class="td-res-pl">{{ $auctionProduct->process }}</td>
                                        {{-- @elseif ($products->pro_process == '2')
                                            <td class="td-res-pl">Slow Dried</td>
                                        @else
                                            <td class="td-res-pl">Alchemy</td>
                                        @endif --}}
                                    @endforeach
                                    @foreach ($auctionProduct->products as $products)
                                        {{-- @if ($products->genetic_id == '1') --}}
                                        <td class="td-res-pl">{{ $auctionProduct->genetic }}</td>
                                        {{-- @elseif ($products->genetic_id == '2')
                                            <td class="td-res-pl">Bourbon</td>
                                        @else
                                            <td class="td-res-pl">SL28</td>
                                        @endif --}}
                                    @endforeach
                                    @if (isset($auctionProduct->highestbid))
                                        @foreach ($auctionProduct->highestbid->user as $userData)
                                            <td style="width: 500px !important"
                                                class="paddleno{{ $auctionProduct->id }} fw-bold td-res-pl">
                                                <span
                                                    class="{{ $auction->is_hidden_winners == 0 ? 'name-anchors' : '' }} ">{{ $userData->company ?? '---' }}</span>
                                                <a
                                                    class="{{ $auction->is_hidden_winners == 1 ? 'name-spans' : 'name-spans-block' }}">__</a>
                                            </td>
                                        @endforeach
                                    @else
                                        <td class="paddleno{{ $auctionProduct->id }} td-res-pl">Awaiting Bid</td>
                                    @endif
                                </tr>
                                <tr class="hide-table-padding bid-row">
                                    <td colspan="13">
                                        <div id="collapseOne{{ $auctionProduct->id }}" class="collapse">
                                            <div class="card">
                                                <h5 class="card-header">You need to login to Bid.</h5>
                                                <div class="card-body">
                                                    <a href="{{ route('customer.login') }}"
                                                        class="btn btn-success">Login</a>
                                                </div>
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
    <section class="footer">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 pb-2 text-center section-4-img">
                    <img src="https://bestofyemenauction.com/public/images/LOGO_0003_Vector-Smart-Object 1.png"
                        alt="">
                </div>
            </div>
        </div>
    </section>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

@include('customer.auction_pages.groupbiddingjs');
<script>
    function closeNav() {

        $("#mySidebar").removeClass('sidebaropen-width');
    }
</script>
<script type="text/javascript">
    $(document).ready(function(e) {
        var socket = io('<?= env('SOCKETS') ?>');
        //OpenSidebar
        $('.name-anchors').css('display', 'none');
        socket.on('add_auction_status', function(data) {
            if (data.auctionstatus == 1) {
                // window.location = window.location.href + "?ended=1";
                $('.name-anchors').css('display', 'block');
                $('.name-spans-block').css('display', 'none');
            }
        });

        // socket.on('publish_winner', function(data) {
        //     // alert(data);
        //     // console.log(data);
        //     console.log('imran');
        // });
        setTimeout(function() {
            window.location.reload();
        }, 300000)
        $(".openSidebar").click(function() {
            $("#mySidebar").addClass('sidebaropen-width');
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
                        $(".genetics").html(genetics);
                    }
                    if (process == 1) {
                        $(".proprocess").html('Natural');
                    } else if (process == 2) {
                        $(".proprocess").html('Slow Dried');
                    } else {
                        $(".proprocess").html(process);
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

    });
</script>

</html>
