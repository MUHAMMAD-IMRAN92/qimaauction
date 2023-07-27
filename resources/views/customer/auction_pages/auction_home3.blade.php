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
    #mySidebar {
        box-shadow: -5px 0px 4px rgba(0, 0, 0, 0.2);
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        display: flex;
        flex-direction: column;
        height: 100vh;
        margin: 0;

    }

    .lotidparent {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;

    }

    .lotidparent button {
        background-color: #dee2e6 !important;
        border: none !important;
        font-size: 30px !important;

    }

    button:focus {
        outline: none !important;
    }

    .lotidchild {
        display: flex !important;
        justify-content: space-between !important;
    }

    .lotidchild-1 {
        display: flex !important;
        flex-direction: column !important;
    }

    .lotid-groupoffers {
        display: flex !important;
        justify-content: space-between !important;

    }

    .lotid-hr {
        margin-bottom: 5px !important;
        margin-top: 0px !important;

    }

    .lotid-cancelbutton {

        color: #007bff !important;
        font-weight: 600;
    }

    .lotid-cancelbutton:hover {
        color: f1f1f1 !important;
        box-shadow: 1px 5px 5px -2px rgba(0, 0, 0, 0.29);
        -webkit-box-shadow: 1px 5px 5px -2px rgba(0, 0, 0, 0.29);
        -moz-box-shadow: 1px 5px 5px -2px rgba(0, 0, 0, 0.29);

    }

    .mt-15 {
        margin-top: 15px
    }

    .mx-10 {
        margin: auto 10px;
    }

    .ml-30 {
        margin-left: 30px;
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

    /* b {

        font-style: normal;
        font-weight: 600;
        font-size: 24px;
        line-height: 30px;
    } */

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

    .align-left {
        text-align: left;
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
        font-family: 'Montserrat';
    }

    .singlebidbtn:hover {
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


    .table-container {
        width: 90%;
        margin: 0 auto;
        display: flex;
        justify-content: center;
    }

    .sidebar-container {
        padding: 20px;
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

    .startbidbtn {
        background-color: #143D30 !important;
        color: white;
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


    .sidebaropen-width {
        width: 450px;
    }

    .group-lots ul {
        list-style: none;
        padding-left: 0;
    }

    /* Groupbid sidebar starts */
    .groupbid-sidebar {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        font-family: 'Montserrat';
    }

    .bid-confirm-sec table {
        width: 100%;
    }

    .groupbid-sidebar p,
    .groupbid-sidebar td {
        Font-size: 16px;
        Line-height: 15px;
        color: #000000;
        padding: 4px 3px;
        border: none;
        margin-bottom: 5px;
    }

    .groupbid-sidebar h5,
    .groupbid-sidebar th {
        Font-size: 16px;
        Line-height: 22px;
        color: #212529;
        padding: 10px 4px;
        border: none;
        font-weight: bold;
    }

    .offerpost {
        margin-left: 10px;
    }

    .groupbid-offers ul {
        list-style: none;
        font-size: 22px;
        padding: 0;
    }

    .groupbid-offers ul li {
        background-color: #dee2e6;
        padding: 15px;
    }

    .groupbid-offers ul li span,
    .lot-toggle-btn {
        border: 1px solid white;
        font-size: 20px;
        line-height: 23px;
        color: white;
        border-radius: 50%;
        padding: 6px;
        margin-right: 20px;
        background: #143D30;
        width: 35px;
        height: 35px;
        display: block;
        text-align: center;
    }

    .hide {
        display: none;
    }

    .show-bidconfirm {
        display: block;
    }

    /* Groupbid sidebar ends */


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


        .bid-row .form-inline {
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

    .colorered {
        color: #143D30;
        background: #DBFFDA;
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

    /* hamza starts ends */
</style>

<body>
    {{-- <section> --}}
    <nav class="navbar navbar-fix">
        <div><a href="{{ url('/') }}"><img src="https://bestofyemenauction.com/public/images/logo.land.png"
                    width="180px" alt="">
            </a>
        </div>
        <div>
            <ul class="navbar-list" id="nav-list">
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
            </ul>
        </div>
    </nav>
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
        <h2 style="text-align: center;font-family:'Montserrat';">Welcome to the Best of Yemen</h2>

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
                <div class="tab-pane fade auction-data table-responsive show active" id="nav-home" role="tabpanel"
                    aria-labelledby="nav-home-tab">
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

                            @foreach ($auctionProducts as $key => $auctionProduct)
                            @php
                                    $sortClass = '';
                                @endphp
                                {{--
                                @if ($key == 0 && $key < $naturalauctionProductsCount)
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <b> ALCHEMY
                                            </b>
                                        </td>
                                    </tr>
                                @elseif($key != 0 && $key == $naturalauctionProductsCount)
                                    @php
                                        $sortClass = 'sortByRank';
                                    @endphp
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <b> NATURAL AND DEEP FERMENTATION </b>
                                        </td>
                                    </tr>
                                @endif --}}
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
                                    $i = 0;
                                    if (isset($auctionProduct->offerComplete)) {
                                        $offerUser = [];
                                        foreach ($auctionProduct->offerComplete->allOfferUsers as $offerUsers) {
                                            $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                                            $offerUser[$i]['weight'] = $offerUsers->weight;
                                            $offerUser[$i]['productid'] = $offerUsers->auction_product_id;
                                            $i++;
                                        }
                                        $groupUsers = $offerUser;
                                    }
                                @endphp
                                <tr
                                    class="tr-bb table-pt-res text-center bidcollapse{{ $auctionProduct->id }} {{ $sortClass}}
                                    @if (isset($auctionProduct->offerComplete) && isset($auctionProduct->groupAutobid)) @foreach ($groupUsers as $users)
                                        @if ($users['bidwinner'] == Auth::user()->id)
                                        changecolor @endif
                                    @endforeach
                                    @endif
                                    @if (
                                        !isset($auctionProduct->groupAutobid) &&
                                            isset($auctionProduct->singleBidPricelatest->user_id) &&
                                            $auctionProduct->singleBidPricelatest->is_group == 0 &&
                                            $auctionProduct->singleBidPricelatest->user_id == Auth::user()->id) changecolor @endif">
                                    <td class="fw-bold productrank{{ $auctionProduct->id }}">
                                        {{ $auctionProduct->rank }}</td>
                                    <input class="auctionproductid{{ $auctionProduct->id }}" type="hidden"
                                        value="{{ $auctionProduct->id }}">
                                    <td class="fw-bold ">{{ $auctionProduct->jury_score }}</td>
                                    <td contenteditable='true'
                                        class="text-underline yourscore  auctionyourscore{{ $auctionProduct->id }}"
                                        data-id="{{ $auctionProduct->id }}" id="score">
                                        {{ $auctionProduct->userscore->your_score ?? '' }}</td>
                                    <td class=" productweight{{ $auctionProduct->id }}">
                                        {{ $auctionProduct->weight }}lbs</td>
                                    <td class="increment{{ $auctionProduct->id }} ">
                                        ${{ number_format((float) $bidIncrementSinglebid, 1) }}</td>
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

                                    <td>
                                        <p class="liability{{ $auctionProduct->id }} ">
                                            @php $userfound = 0; @endphp
                                            @if (isset($auctionProduct->groupAutobid))
                                                @foreach ($groupUsers as $users)
                                                    @if ($users['bidwinner'] == Auth::user()->id)
                                                        @php $userfound = 1; @endphp
                                                        ${{ isset($auctionProduct->latestBidPrice) ? number_format($auctionProduct->latestBidPrice->bid_amount * $users['weight'], 1) : number_format($auctionProduct->start_price * $auctionProduct->weight, 1) }}
                                                        <p class="groupliability{{ $auctionProduct->id }}">
                                                            weight{{ $users['weight'] }}/lbs</p>
                                                    @endif
                                                @endforeach
                                            @endif
                                            @if ($userfound == 0)
                                                ${{ isset($auctionProduct->latestBidPrice) ? number_format($auctionProduct->latestBidPrice->bid_amount * $auctionProduct->weight, 1) : number_format($auctionProduct->start_price * $auctionProduct->weight, 1) }}
                                            @endif
                                        </p>
                                        <p class="groupliability{{ $auctionProduct->id }}"></p>
                                    </td>
                                    @foreach ($auctionProduct->products as $products)
                                        <td class="fw-bold text-underline"><a class="openbtn openSidebar"
                                                data-id="{{ $auctionProduct->id }}"
                                                data-productid="{{ $products->id }}"
                                                data-image="{{ isset($auctionProduct->images[0]) ? $auctionProduct->images[0]->image_name : '' }}">{{ $products->product_title }}
                                            </a></td>
                                    @endforeach
                                    {{-- @foreach ($auctionProduct->products as $products)
                                        @if ($products->pro_process == '1') --}}
                                    <td class="">{{ $auctionProduct->process }}</td>
                                    {{-- @elseif ($products->pro_process == '2')
                                            <td class="">Slow Dried</td>
                                        @else
                                            <td class="">Alchemy</td>
                                        @endif
                                    @endforeach --}}
                                    {{-- @foreach ($auctionProduct->products as $products) --}}
                                    <td class="">{{ $auctionProduct->genetic }}</td>

                                    {{-- @endforeach --}}
                                    {{-- @dd($auctionProduct->groupAutobid) --}}
                                    @if (!isset($auctionProduct->groupAutobid) && isset($auctionProduct->singleBidPricelatest))
                                        @foreach ($auctionProduct->singleBidPricelatest->user as $userData)
                                            <td class="paddleno{{ $auctionProduct->id }} fw-bold paddlenumber">
                                                {{ $userData->paddle_number ?? '---' }}</td>
                                        @endforeach
                                    @elseif (isset($auctionProduct->groupAutobid))
                                        <td class="paddleno{{ $auctionProduct->id }} fw-bold paddlenumber">
                                            {{ $auctionProduct->offerComplete->paddle_number ?? '---' }}</td>
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
                                @if (
                                    !isset($agreement) ||
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
                                    {{-- @dd($auctionProduct->latestAutoBidPrice) --}}
                                    <tr class="hide-table-padding bid-row">
                                        <td></td>
                                        <td colspan="12">
                                            <div id="collapseOne{{ $auctionProduct->id }}" class="collapse in p-3">
                                                <div class="row ">
                                                    <div class="col-sm-4 col-lg-4">
                                                        <div class="input-group mb-3 bid-now-btn-field">
                                                            @php $userfound = 0; @endphp
                                                            @if (isset($auctionProduct->latestAutoBidPrice->bid_amount) && $auctionProduct->latestAutoBidPrice->is_group == 1)
                                                                @foreach ($groupUsers as $users)
                                                                    @if ($users['bidwinner'] == Auth::user()->id)
                                                                        @php $userfound = 1; @endphp
                                                                        <p class="mr-1 mt-2 nextincrement{{ $auctionProduct->id }}"
                                                                            style="display: none;">
                                                                            ${{ number_format($finalIncSinglebid, 1) }}
                                                                        </p>
                                                                    @endif
                                                                @endforeach
                                                            @elseif (isset($auctionProduct->latestAutoBidPrice->bid_amount) &&
                                                                    $auctionProduct->latestAutoBidPrice->is_group == 0 &&
                                                                    $auctionProduct->latestAutoBidPrice->user_id == auth()->user()->id)
                                                                @php $userfound = 1; @endphp
                                                                <p class="mr-1 mt-2 nextincrement{{ $auctionProduct->id }}"
                                                                    style="display: none;">
                                                                    ${{ number_format($finalIncSinglebid, 1) }}
                                                                </p>
                                                            @else
                                                                {{-- <p
                                                                    class="mr-1 mt-2 nextincrement{{ $auctionProduct->id }}">
                                                                    ${{ number_format($finalIncSinglebid, 1) }}
                                                                </p> --}}
                                                            @endif
                                                            @if ($userfound == 0)
                                                                <p
                                                                    class="mr-1 mt-2 nextincrement{{ $auctionProduct->id }}">
                                                                    ${{ number_format($finalIncSinglebid, 1) }}
                                                                </p>
                                                            @endif
                                                            <div>
                                                                @php $userfound = 0; @endphp
                                                                @if (isset($auctionProduct->latestAutoBidPrice->bid_amount) && $auctionProduct->latestAutoBidPrice->is_group == 1)
                                                                    @foreach ($groupUsers as $users)
                                                                        @if ($users['bidwinner'] == Auth::user()->id)
                                                                            @php $userfound = 1; @endphp
                                                                            <button
                                                                                class="singlebidbtn btn singlebtnclick bidnowbutton{{ $auctionProduct->id }}"
                                                                                id="{{ $auctionProduct->id }}"
                                                                                href="javascript:void(0)"
                                                                                data-id="{{ $auctionProduct->id }}"
                                                                                style="border-radius: 5px; display:none;">Bid
                                                                                Now</button>
                                                                        @endif
                                                                    @endforeach
                                                                @elseif (isset($auctionProduct->latestAutoBidPrice->bid_amount) &&
                                                                        $auctionProduct->latestAutoBidPrice->is_group == 0 &&
                                                                        $auctionProduct->latestAutoBidPrice->user_id == auth()->user()->id)
                                                                    @php $userfound = 1; @endphp
                                                                    <button
                                                                        class="singlebidbtn btn singlebtnclick bidnowbutton{{ $auctionProduct->id }}"
                                                                        id="{{ $auctionProduct->id }}"
                                                                        href="javascript:void(0)"
                                                                        data-id="{{ $auctionProduct->id }}"
                                                                        style="border-radius: 5px; display:none;">Bid
                                                                        Now</button>
                                                                @else
                                                                    {{-- daffy3<button
                                                                        class="singlebidbtn btn singlebtnclick bidnowbutton{{ $auctionProduct->id }}"
                                                                        id="{{ $auctionProduct->id }}"
                                                                        href="javascript:void(0)"
                                                                        data-id="{{ $auctionProduct->id }}"
                                                                        @if (isset($auctionProduct->latestSingleBid->user_id) && $auctionProduct->latestSingleBid->user_id == Auth::user()->id) disabled="disabled" style="background:#a6a6a6;color:ffffff" @endif
                                                                        style="border-radius: 5px;">Bid Now</button> --}}
                                                                @endif
                                                                @if ($userfound == 0)
                                                                    <button
                                                                        class="singlebidbtn btn singlebtnclick bidnowbutton{{ $auctionProduct->id }}"
                                                                        id="{{ $auctionProduct->id }}"
                                                                        href="javascript:void(0)"
                                                                        data-id="{{ $auctionProduct->id }}"
                                                                        @if (isset($auctionProduct->latestSingleBid->user_id) && $auctionProduct->latestSingleBid->user_id == Auth::user()->id) disabled="disabled" style="background:#a6a6a6;color:ffffff" @endif
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
                                                    <div class="col-sm-4 col-lg-4">
                                                        <form class="form-inline"
                                                            onkeydown="return event.key != 'Enter';" action=""
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden"
                                                                class="form-control auctionid{{ $auctionProduct->id }}"
                                                                value="{{ $auctionProduct->auction_id }}"
                                                                id="autobidamount">
                                                            @php $userfound = 0; @endphp
                                                            @if (isset($auctionProduct->latestAutoBidPrice->bid_amount) && $auctionProduct->latestAutoBidPrice->is_group == 1)
                                                                @foreach ($groupUsers as $users)
                                                                    @if ($users['bidwinner'] == Auth::user()->id)
                                                                        @php $userfound = 1; @endphp
                                                                        &nbsp;<input type="number" min="1"
                                                                            name="autobidamount"
                                                                            class="form-control autobidamount{{ $auctionProduct->id }}"
                                                                            id="autobidamount"
                                                                            style="width: 50%; display:none;">
                                                                    @endif
                                                                @endforeach
                                                            @elseif (isset($auctionProduct->latestAutoBidPrice->bid_amount) &&
                                                                    $auctionProduct->latestAutoBidPrice->is_group == 0 &&
                                                                    $auctionProduct->latestAutoBidPrice->user_id == auth()->user()->id)
                                                                @php $userfound = 1; @endphp
                                                                &nbsp;<input type="number" min="1"
                                                                    name="autobidamount"
                                                                    class="form-control autobidamount{{ $auctionProduct->id }}"
                                                                    id="autobidamount"
                                                                    style="width: 50%; display:none;">
                                                            @else
                                                                {{-- <input type="text"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                    min="1" pattern="[0-9]{10}" maxlength="10"
                                                                    name="autobidamount"
                                                                    class="form-control autobidamount{{ $auctionProduct->id }}"
                                                                    id="autobidamount" style="width: 50%;"> --}}
                                                            @endif
                                                            @if ($userfound == 0)
                                                                <input type="text"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                    min="1" pattern="[0-9]{10}" maxlength="10"
                                                                    name="autobidamount"
                                                                    class="form-control autobidamount{{ $auctionProduct->id }}"
                                                                    id="autobidamount" style="width: 50%;">
                                                            @endif
                                                            @php $userfound = 0; @endphp
                                                            @if (isset($auctionProduct->latestAutoBidPrice) && $auctionProduct->latestAutoBidPrice->is_group == 1)
                                                                @foreach ($groupUsers as $users)
                                                                    @if (
                                                                        $auctionProduct->latestAutoBidPrice->auction_product_id == $auctionProduct->id &&
                                                                            $users['bidwinner'] == auth()->user()->id)
                                                                        @php $userfound = 1; @endphp
                                                                    @endif
                                                                @endforeach
                                                            @elseif(isset($auctionProduct->latestAutoBidPrice) &&
                                                                    $auctionProduct->latestAutoBidPrice->is_group == 0 &&
                                                                    $auctionProduct->latestAutoBidPrice->user_id == Auth::user()->id)
                                                                @php $userfound = 1; @endphp
                                                            @else
                                                            @endif
                                                            @if ($userfound == 0)
                                                                <button  @if (isset($auctionProduct->latestSingleBid->user_id) && $auctionProduct->latestSingleBid->user_id == Auth::user()->id) disabled="disabled" @endif
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
                                                                <div
                                                                    class="errormsgautobid  errorMsgAutoBid{{ $auctionProduct->id }}">
                                                                </div>
                                                            @endif
                                                            @if (isset($auctionProduct->latestAutoBidPrice->bid_amount) && $auctionProduct->latestAutoBidPrice->is_group == 1)
                                                                @foreach ($groupUsers as $users)
                                                                    @if ($users['bidwinner'] == Auth::user()->id)
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
                                                                            style="display: none;"
                                                                            id="confirmbtn">Confirm
                                                                        </button>
                                                                        <button
                                                                            class="btn singlebidbtn  removeautobtn{{ $auctionProduct->id }} ml-2 removeautobid"
                                                                            type="button"
                                                                            data-id="{{ $auctionProduct->id }}"
                                                                            style="display: none;">Cancel
                                                                        </button>
                                                                        <div
                                                                            class="errormsgautobid  errormsgautobid{{ $auctionProduct->id }}">
                                                                            <p
                                                                                class="newautobidamount{{ $auctionProduct->id }}">
                                                                                Current autobid is
                                                                                ${{ number_format($auctionProduct->latestAutoBidPrice->bid_amount, 1) }}/lb
                                                                                {{-- <a href="javascript:void(0)"
                                                                        class="removeAutoBID"
                                                                        data-id="{{ $auctionProduct->id }}"
                                                                        style="color:#000000">{Remove}</a> --}}
                                                                            </p>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                            @if (isset($auctionProduct->latestAutoBidPrice->bid_amount) &&
                                                                    $auctionProduct->latestAutoBidPrice->is_group == 0 &&
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
                                                                    <p
                                                                        class="newautobidamount{{ $auctionProduct->id }}">
                                                                        Current autobid is
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
                                                        </form>
                                                    </div>
                                                    {{-- <div class="col-sm-4 col-lg-4 align-left">
                                                        <button class="singlebidbtn btn openGroupSidebar groupbidsidebarbtn{{$auctionProduct->id}}"
                                                            id="{{ $auctionProduct->id }}"
                                                            onclick="closeGroupSidebar()"
                                                            data-id="{{ $auctionProduct->id }}"
                                                            style="border-radius: 5px;">Group Bidding</button>
                                                    </div> --}}
                                                </div>
                                                <div class="row">
                                                    <div class="col-4"></div>
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
                                                                    ${{ isset($auctionProduct->latestAutoBidPrice->bid_amount) ? number_format($finalIncSinglebid * $auctionProduct->weight, 1) : number_format($auctionProduct->weight * $finalIncSinglebid, 1) }}
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
            <div class="tab-pane fade " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
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
                                    $i = 0;
                                    if (isset($auctionProduct->offerComplete)) {
                                        $offerUser = [];
                                        foreach ($auctionProduct->offerComplete->allOfferUsers as $offerUsers) {
                                            $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                                            $offerUser[$i]['weight'] = $offerUsers->weight;
                                            $offerUser[$i]['productid'] = $offerUsers->auction_product_id;
                                            $i++;
                                        }
                                        $groupUsers = $offerUser;
                                    }
                                    $isEmpty = sizeof($singleBids);
                                    $userfound = 0;
                                @endphp
                                <tr id="bid_row_{{ $auctionProduct->id }}" {{-- single bid / autobid winner --}}
                                    @if (
                                        !isset($auctionProduct->groupAutobid) &&
                                            isset($auctionProduct->singleBidPricelatest->user_id) &&
                                            $auctionProduct->singleBidPricelatest->user_id == Auth::user()->id) @php $userfound = 1; @endphp
                                        {{ '' }}
                                        {{-- group bid winner --}}
                                    @elseif(isset($auctionProduct->groupAutobid))
                                    @foreach ($groupUsers as $users)
                                        @if ($users['bidwinner'] == Auth::user()->id && $users['productid'] == $auctionProduct->id)
                                        @php $userfound = $users['bidwinner']; @endphp
                                        {{ '' }} @endif
                                    @endforeach
                            @endif
                            @if ($userfound == 0) style="display:none;" @endif
                            class="tr-bb text-center liabilitybidcollapse{{ $auctionProduct->id }} liability-data"
                            @php $userfound = 0; @endphp
                            @if (
                                !isset($auctionProduct->groupAutobid) &&
                                    isset($auctionProduct->singleBidPricelatest->user_id) &&
                                    $auctionProduct->singleBidPricelatest->user_id == Auth::user()->id) @php $userfound = 1; @endphp
                                     style="background: #DBFFDA;"
                                     @elseif(isset($auctionProduct->offerComplete) && isset($auctionProduct->groupAutobid))
                                    @foreach ($groupUsers as $users)
                                        @if ($users['bidwinner'] == Auth::user()->id)
                                        style="background: #DBFFDA;" @endif
                            @endforeach
                            @endif @if ($userfound == 0)  @endif>

                            <td class="fw-bold text-center"><i class="fa fa-star"
                                    aria-hidden="true"></i>{{ $auctionProduct->rank }}</td>
                            <td class="fw-bold ">{{ $auctionProduct->jury_score }}</td>
                            <td contenteditable='true'
                                class="text-underline yourscore  auctionyourscore{{ $auctionProduct->id }}"
                                data-id="{{ $auctionProduct->id }}" id="score">
                                {{ $auctionProduct->userscore->your_score ?? '' }}</td>
                            <td class="fw-bold ">{{ $auctionProduct->weight }}lbs</td>
                            <td class="increment{{ $auctionProduct->id }} ">
                                ${{ number_format((float) $bidIncrementSinglebid, 1) }}</td>
                            <td class="fw-bold ">
                                <div>
                                    <span
                                        class="bidData1{{ $auctionProduct->id }} intialinc">${{ isset($auctionProduct->latestBidPrice) ? number_format($auctionProduct->latestBidPrice->bid_amount, 1) : number_format($auctionProduct->start_price, 1) }}lbs</span>
                                </div>
                            </td>
                            @php
                                if (!isset($auctionProduct->groupAutobid) && isset($auctionProduct->singleBidPricelatest)) {
                                    if ($auctionProduct->singleBidPricelatest->user_id == Auth::user()->id) {
                                        $datavalue = isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount * $auctionProduct->weight : $auctionProduct->start_price * $auctionProduct->weight;
                                        $total_liability = $total_liability + $datavalue;
                                    }
                                }
                                if (isset($auctionProduct->groupAutobid)) {
                                    foreach ($groupUsers as $users) {
                                        if ($users['bidwinner'] == Auth::user()->id) {
                                            $datavalue = isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount * $users['weight'] : $auctionProduct->start_price * $auctionProduct->weight;
                                            $total_liability = $total_liability + $datavalue;
                                        }
                                    }
                                }
                            @endphp
                            <td>
                                <p
                                    class="liability_your{{ $auctionProduct->id }}  liability{{ $auctionProduct->id }}
                                        @php $userfound = 0; @endphp
                                         @if (
                                             !isset($auctionProduct->groupAutobid) &&
                                                 isset($auctionProduct->singleBidPricelatest->user_id) &&
                                                 $auctionProduct->singleBidPricelatest->user_id == Auth::user()->id) @php $userfound = 1; @endphp
                                            {{ 'liabilty_shown' }}
                                        @elseif(isset($auctionProduct->groupAutobid))
                                        @foreach ($groupUsers as $users)
                                        @if ($users['bidwinner'] == Auth::user()->id)
                                        @php $userfound = 1; @endphp
                                        {{ 'liabilty_shown' }} @endif
                                        @endforeach
                                        @endif
                                        @if ($userfound == 0)  @endif ">

                                    @if (
                                        !isset($auctionProduct->groupAutobid) &&
                                            isset($auctionProduct->singleBidPricelatest->user_id) &&
                                            $auctionProduct->singleBidPricelatest->user_id == Auth::user()->id)
                                        ${{ isset($auctionProduct->latestBidPrice) ? number_format($auctionProduct->latestBidPrice->bid_amount * $auctionProduct->weight, 1) : number_format($auctionProduct->start_price * $auctionProduct->weight, 1) }}
                                    @elseif(isset($auctionProduct->groupAutobid))
                                        @foreach ($groupUsers as $users)
                                            @if ($users['bidwinner'] == Auth::user()->id)
                                                ${{ isset($auctionProduct->latestBidPrice) ? number_format($auctionProduct->latestBidPrice->bid_amount * $users['weight'], 1) : number_format($auctionProduct->start_price * $auctionProduct->weight, 1) }}
                                                <p class="groupliability{{ $auctionProduct->id }}">
                                                    weight{{ $users['weight'] }}/lbs</p>
                                            @endif
                                        @endforeach
                                    @endif
                                <p class="groupliability{{ $auctionProduct->id }}"></p>
                            </td>
                            @foreach ($auctionProduct->products as $products)
                                <td class="fw-bold text-underline "> <a class="openbtn openSidebar"
                                        data-id="{{ $auctionProduct->id }}"
                                        data-image="{{ isset($auctionProduct->images[0]) ? $auctionProduct->images[0]->image_name : '' }}">
                                        {{ $products->product_title }} </a></td>
                            @endforeach
                            @foreach ($auctionProduct->products as $products)
                                <td class="td-res-pl">{{ $auctionProduct->process }}</td>
                            @endforeach
                            @foreach ($auctionProduct->products as $products)
                                <td class="td-res-pl">{{ $auctionProduct->genetic }}</td>
                            @endforeach
                            {{-- @if (isset($auctionProduct->singleBidPricelatest))
                                        @foreach ($auctionProduct->singleBidPricelatest->user as $userData)
                                            <td class="paddleno{{ $auctionProduct->id }} fw-bold paddlenumber">
                                                {{ $userData->paddle_number ?? '---' }}</td>
                                        @endforeach
                                    @else
                                        <td class="paddleno{{ $auctionProduct->id }} ">Awaiting Bid</td>
                                    @endif --}}
                            @if (!isset($auctionProduct->groupAutobid) && isset($auctionProduct->singleBidPricelatest))
                                @foreach ($auctionProduct->singleBidPricelatest->user as $userData)
                                    <td class="paddleno{{ $auctionProduct->id }} fw-bold paddlenumber">
                                        {{ $userData->paddle_number ?? '---' }}</td>
                                @endforeach
                            @elseif (isset($auctionProduct->groupAutobid))
                                <td class="paddleno{{ $auctionProduct->id }} fw-bold paddlenumber">
                                    {{ $auctionProduct->offerComplete->paddle_number ?? '---' }}</td>
                            @else
                                <td class="paddleno{{ $auctionProduct->id }}">Awaiting Bid</td>
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


            <div id="groupbid_sidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeGroupSidebar()">&times;</a>
                <div class="sidebar-container">
                    <div class="groupbid-sidebar">
                        <div class="grouplot-listing" id="grouplot-listing">
                            <p class="hide">Lot ID:<span class="lotproductid "></span></p>
                            <h3>Active Group Lot Listing</h3>
                            <div class="group-lots">
                                <p class="fw-bold">Other Offers:</p>
                                <ul id="other-offers">
                                </ul>
                            </div>
                            <hr class="lotid-hr">

                            {{-- <div class="groupbid-offers other-offers">
                                <p>Other's Offers:</p>
                                <ul>
                                    <li> <span>29</span> 20 * 6 = 120 </li>
                                </ul>
                            </div> --}}
                            <div class="groupbid-offers my-offers">
                                <p class="fw-bold">My Offers:</p>
                                <ul id="offers">
                                </ul>
                            </div>
                            {{-- <hr> --}}
                        </div>
                        <div class="current-group-bid">
                            <div class="groupbid-offers my-offers">
                                <ul id="groupbidoffers">
                                </ul>
                            </div>
                            <div class="col-8 groupbiddiv">
                                {{-- <form method="POST">
                                    @csrf --}}
                                <p>Total bags: <span class="productbags">--</span></p>
                                <label>Bags Quantity:</label>
                                <input type="number" class="form-control bag_quantity" min="1"
                                    id="bag_quantity" name="bag_quantity">
                                <span class="validationbags colorered"></span>
                                <h5>Weight: <span class="finalweight">--</span></h5>
                                <label>Amount: </label>
                                <input type="number" min="1" class="form-control groupbidamount"
                                    id="bid_amount" name="Bid Amount">
                                <span class="validationamount colorered"></span>
                                <span class="fullweight colorered"></span>
                                <br>
                                <button type="button" class="singlebidbtn btn show-bid-confirm" value="">Post
                                    Group Bid</button>
                                <br>
                                <div class="bid-confirm-sec hide liabiltysec">

                                    {{-- <p style="font-weight: bold">Bid:<span class="bidamount"></span></p>
                                        <p style="font-weight: bold">Weight:<span class="liabilityweight"></span> </p>
                                        <p style="font-weight: bold">Liability:<span class="finalliability"></span></p>
                                        <button class="singlebidbtn btn confirmgroupbidbutton" href="javascript:void(0)">Confirm</button>
                                        <button type="button"  class="singlebidbtn btn cancelgroupbtn">Cancel</button> --}}

                                    <table>
                                        <tr>
                                            <th style="border-top: 1px solid #dee2e6;">
                                                Bid:
                                            </th>
                                            <td class="bidamount">

                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="border-top: 1px solid #dee2e6;">
                                                Weight:
                                            </th>
                                            <td class="liabilityweight">

                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="border-top: 1px solid #dee2e6;">
                                                Liability:
                                            </th>
                                            <td class="finalliabilitygroupbid">

                                            </td>
                                        </tr>
                                    </table>
                                    <div class="mt-15">
                                        <button class="singlebidbtn btn confirmgroupbidbutton"
                                            href="javascript:void(0)">Confirm</button>
                                        <button type="button" class="singlebidbtn btn cancelgroupbtn">Cancel</button>
                                    </div>

                                </div>
                                {{-- </form> --}}

                            </div>

                            {{-- <div class="alert alert-success offerdiv hide" role="alert">
                                <p style="margin: 0">You posted offer of: <span class="offerpost">---</span></p>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>

    </section>
    <section class="footer">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 pb-2 text-center section-4-img">
                    <img src="https://bestofyemenauction.com/public/images/logo.land.png"
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

    function closeGroupSidebar() {
        $("#groupbid_sidebar").removeClass('sidebaropen-width');
    }
</script>
<script type="text/javascript">
    $(document).ready(function(e) {

        //OpenSidebar
        // setTimeout(function() {
        //     window.location.reload();
        // }, 300000)
        $(".openSidebar").click(function() {
            $("#mySidebar").addClass('sidebaropen-width');
            var id = $(this).attr('data-id');
            var productid = $(this).attr('data-productid');
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
                    url = url.replace(':id', productid);
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
            var minamount = $('.nextincrement' + id).html();
            var float_amount = parseFloat(minamount.replace(/[^0-9.]/g, ''));
            current_val = $('.autobidamount' + id).val();
            if (current_val && current_val < float_amount) {
                $('.showMessageForAmount' + id).show();
                $('.showMessageForAmount' + id).html('Please Enter Amount Greater than or equal to ' +
                    float_amount);
            } else {
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
                    $(".maximumliability" + id).html('$' + addCommas(parseFloat(weight * autobidamount)
                        .toFixed(2)));
                } else {
                    $('.showMessageForAmount' + id).show();
                    $('.showMessageForAmount' + id).html('Please Enter Some Amount First');
                }
            }
            // var finalmax    = parseFloat(autobidamount.replace(/[^\d\.]*/g, ''))
        });
        //cancelbidvtn first auto bid
        $(".removeautobid").click(function() {
            // alert('hello');
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
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event
                    .which > 57)) {
                event.preventDefault();
            }
        });
        $(".yourscore").focusout(function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            let value = $.trim($(this).html());
            var float_amount = parseFloat(value.replace(/[^0-9.]/g, ''));
            if (float_amount) {
                $.ajax({
                    url: "{{ route('saveyourscore') }}",
                    method: 'POST',
                    data: {
                        id: id,
                        value: float_amount,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        var yourscore = response.your_score;
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
                    var isgroup = response.isgroup;
                    var groupusers = response.groupusers;
                    // alert(groupusers);
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
                        "isgroup": isgroup,
                        "groupusers": groupusers,
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
                        // console.log(response);
                        if (response.success) {
                            $('.errorMsgAutoBid' + id).html('');
                            $('.errorMsgAutoBid' + id + id).html('');
                            $('.errorMsgAutoBid' + id + id).html(
                                '<p class="newautobidamount{{ @$auctionProduct->id }}">Current autobid is $' +
                                addCommas(autobidamount) +
                                ' /lb.{<a href="javascript:void(0)" class="removeAutoBID" data-id=' +
                                id + '>Remove</a>}</p>');
                            $('.autobidamount' + id).val('');
                            $('.alertMessage' + id).html('');
                            $(".bidnowbutton" + id).css("display",
                                "none");
                            $(".autobidClass" + id).css("display", "none");
                        } else if (response.message !== null) {
                            $('.errorMsgAutoBid' + id).html('');
                            $('.errorMsgAutoBid' + id + id).html('');
                            $('.errorMsgAutoBid' + id + id).html(response.message);
                            $('.autobidamount' + id).show();
                            $('.autobidamount' + id).val('');
                            $('.bidnowautobutton' + id).show();
                            $('.autobidClass' + id).hide();
                            $('.nextincrement' + id).show();
                        } else {
                            var latestAutoBidId = response.id;
                            var bidPrice = response.bid_amountNew;
                            var bidID = response.auction_product_id;
                            var increment = response.bidIncrement;
                            var weightautobid = $(".weightautobid" + id).html();
                            var weight = parseFloat(weightautobid.replace(/[^\d\.]*/g, ''));
                            var liability = weight * bidPrice;
                            var paddleNo = response.userPaddleNo;
                            var nextIncrement = +increment + +bidPrice;
                            var outbid = response.outAutobid;
                            var autobidUserID = response.bidder_user_id;
                            var bidderLiablity = response.liablity;
                            var bidderID = response.user_id;
                            var bidderMaxBid = response.bidderMaxAmount;
                            var userbidAmount = response.bid_amount;
                            var totalAutoBidLiability = response.totalAutoBidLiability;
                            var bid_amountNew = response.bid_amountNew;
                            var loser = response.loser_user;
                            var winneruser = response.winneruser;
                            var checkTimer = response.timerCheck;
                            var isgroup = response.isgroup;
                            var groupUsers = response.groupUsers;
                            var groupPaddleNo = response.groupPaddleNo;
                            $('.errorMsgAutoBid' + id).html('');
                            $(".bidcollapse" + bidID).addClass(
                                "changecolor");
                            $(".liabilitybidcollapse" + bidID).addClass(
                                "changecolor");
                            socket.emit('auto_bid_updates', {
                                "autobidamount": autobidamount,
                                "latestAutoBidId": latestAutoBidId,
                                'id': id,
                                "bidID": bidID,
                                'user_id': response.user_id,
                                "userbidAmount": userbidAmount,
                                "totalAutoBidLiability": totalAutoBidLiability,
                                "outbid": outbid,
                                "autobidUserID": autobidUserID,
                                "bid_amountNew": bid_amountNew,
                                "nextIncrement": nextIncrement,
                                "paddleNo": paddleNo,
                                "liability": liability,
                                "loser": loser,
                                "winneruser": winneruser,
                                "checkTimer": checkTimer,
                                "isgroup": isgroup,
                                "groupUsers": groupUsers,
                                "groupPaddleNo": groupPaddleNo,
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
            $(".bidnowautobutton" + id).hide();
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
                            $(".autobidamount" + id).show();
                            $(".nextincrement" + id).show();
                            $(".singlebidtable" + id).hide();
                            $(".autobidtable" + id).hide();
                            $(".bidnowautobutton" + id).show();
                            $(".autobidClass" + id).hide();
                            $(".bidnowbutton" + id).prop('disabled', false);
                            $(".bidnowbutton" + id).css('background', '#143D30');
                            var auction_product_id = response.auction_product_id;
                            var outbid = response.outAutobid;
                            if (outbid == 0) {
                                current_user_id = {{ Auth::user()->id }};
                                $('.errorMsgAutoBid' + id).html('');
                                $('.errorMsgAutoBid' + id + id).html('');
                                $(".bidnowbutton" + id).css("display", "block");
                                if (response.winner_id == current_user_id) {
                                    $(".bidnowbutton" + id).prop('disabled', true);
                                    $(".bidnowbutton" + id).css('background',
                                        '#a6a6a6');
                                    $(".bidcollapse" + id).addClass("changecolor");
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
    socket.on('auto_bid_updates', function(data) {
        console.log(data);
        if (data.groupPaddleNo == null) {
            $(".paddleno" + data.bidID).html(data.paddleNo);
            $(".paddleno" + data.bidID).addClass('fw-bold');
        } else {
            $(".paddleno" + data.bidID).html(data.groupPaddleNo);
            $(".paddleno" + data.bidID).addClass('fw-bold');
        }
        if (data.loser == {{ Auth::user()->id }}) {
            $(".bidcollapse" + data.bidID).removeClass("changecolor");
            $(".bidcollapse" + data.bidID).addClass("changecolorLose");
            setTimeout(() => {
                $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
            }, 10000);
            $('.errorMsgAutoBid' + data.bidID + data.bidID).html('');
            $('.errorMsgAutoBid' + data.bidID).html('');
            $(".alertMessage" + data.bidID).css('background', '#f16767');
            $(".alertMessage" + data.bidID).html('<p>You have been outbid.</p>');
            $('.nextincrement' + data.bidID).show();
            $('.bidnowbutton' + data.bidID).show();
            $('.autobidamount' + data.bidID).show();
            $('.bidnowautobutton' + data.bidID).show();
            $('.bidnowbutton' + data.bidID).attr("disabled", false);
            $('.bidnowautobutton' + data.bidID).attr("disabled", false);
            $(".bidnowbutton" + data.bidID).css('background', '#143D30');
        }
        //if triggered from groupbid
        if (data.isgroup == 1) {
            var i;
            for (i = 0; i < data.winneruser.length; ++i) {
                if (data.winneruser[i].bidwinner == {{ Auth::user()->id }}) {
                    $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
                    $('.groupliability' + data.bidID).empty();
                    $(".liability" + data.bidID).html('$' + addCommas(data.winneruser[i].weight * data
                        .bid_amountNew));
                    $(".groupliability" + data.bidID).html('weight(' + data.winneruser[i].weight + '/lbs)');
                    $('.alertMessage' + data.bidID).html('');
                    $(".liabilitybidcollapse" + data.bidID).show();
                    $(".liability_your" + data.bidID).addClass('liabilty_shown');
                    $(".finalliabilitytr").show();
                    $(".userbid" + data.bidID).css("color", "black");
                    $(".bidcollapse" + data.bidID).addClass("changecolor");
                    $(".liabilitybidcollapse" + data.bidID).addClass("changecolor");
                    $(".auctionpaddleno" + data.bidID).html(data.paddleNo);
                    $(".autobidClass" + data.bidID).css("display", "none");
                    $(".bidnowautobutton" + data.bidID).css("display", "none");
                    $(".bidnowbutton" + data.bidID).css("display", "none");
                    $(".autobidamount" + data.bidID).hide();
                    $(".nextincrement" + data.bidID).hide();
                    $('.errorMsgAutoBid' + data.bidID).html('');
                    $('.errorMsgAutoBid' + data.bidID + data.bidID).html('');
                    $('.errorMsgAutoBid' + data.bidID + data.bidID).html(
                        '<p>Current autobid is $' +
                        addCommas(data.autobidamount) +
                        ' /lb</p>');
                }
            }
        } else {
            //if triggered from autobid
            if (data.user_id == {{ Auth::user()->id }} && data.winneruser == {{ Auth::user()->id }}) {
                $('.alertMessage' + data.bidID).html('');
                $(".liabilitybidcollapse" + data.bidID).show();
                $(".liability_your" + data.bidID).addClass('liabilty_shown');
                $(".finalliabilitytr").show();
                $(".userbid" + data.bidID).css("color", "black");
                $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
                $(".bidcollapse" + data.bidID).addClass("changecolor");
                $(".liabilitybidcollapse" + data.bidID).addClass("changecolor");
                $(".auctionpaddleno" + data.bidID).html(data.paddleNo);
                $(".liability" + data.bidID).html('$' + data.liability.toLocaleString('en-US'));
            } else if (data.winneruser == {{ Auth::user()->id }}) {
                $(".liabilitybidcollapse" + data.bidID).show();
                $(".liability_your" + data.bidID).addClass('liabilty_shown');
            } else {
                $(".liabilitybidcollapse" + data.bidID).hide();
                $(".liability_your" + data.bidID).removeClass('liabilty_shown');
                $(".bidcollapse" + data.bidID).addClass("changecolorLose");
                setTimeout(() => {
                    $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
                }, 10000);
            }
        }
        $(".bidData1" + data.bidID).html('$' + data.bid_amountNew.toLocaleString('en-US') + 'lbs');
        data.nextIncrement = parseFloat(data.nextIncrement).toFixed(1);
        $(".nextincrement" + data.bidID).html('$' + addCommas(data.nextIncrement));
        if (data.groupUsers != null) {
            if (data.groupUsers != null && data.winneruser != null) {
                var i;
                for (i = 0; i < data.winneruser.length; ++i) {
                    var j;
                    for (j = 0; j < data.groupUsers.length; ++j) {
                        if (data.winneruser[i].bidwinner == data.groupUsers[j].bidwinner) {
                            data.groupUsers.splice(j, 1);
                        }
                    }
                }
            }
            var i;
            for (i = 0; i < data.groupUsers.length; ++i) {
                if (data.groupUsers[i].bidwinner == {{ Auth::user()->id }}) {
                    $(".liability" + data.bidID).html('$' + data.liability.toLocaleString('en-US'));
                    $(".bidcollapse" + data.bidID).removeClass("changecolor");
                    $(".bidcollapse" + data.bidID).addClass("changecolorLose");
                    setTimeout(() => {
                        $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
                    }, 10000);
                    $('.errorMsgAutoBid' + data.bidID + data.bidID).html('');
                    $(".alertMessage" + data.bidID).css('background', '#f16767');
                    $(".alertMessage" + data.bidID).html('<p>You have been outbid.</p>');
                    $('.nextincrement' + data.bidID).show();
                    $('.bidnowbutton' + data.bidID).show();
                    $('.autobidamount' + data.bidID).show();
                    $('.bidnowautobutton' + data.bidID).show();
                    $('.bidnowbutton' + data.bidID).attr("disabled", false);
                    $('.bidnowautobutton' + data.bidID).attr("disabled", false);
                    $(".bidnowbutton" + data.bidID).css('background', '##143D30');
                    $(".liabilitybidcollapse" + data.bidID).hide();
                    $(".liability_your" + data.bidID).removeClass('liabilty_shown');
                    $('.errorMsgAutoBid' + data.bidID).html('');
                    $('.groupliability' + data.bidID).html('');
                }
            }
        } else {
            if (data.outbid == 0 && data.autobidUserID == {{ Auth::user()->id }} && data.isgroup != 1) {
                $(".liability" + data.bidID).html('$' + data.liability.toLocaleString('en-US'));
                $(".bidcollapse" + data.bidID).removeClass("changecolor");
                $(".bidcollapse" + data.bidID).addClass("changecolorLose");
                setTimeout(() => {
                    $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
                }, 10000);
                $('.errorMsgAutoBid' + data.bidID + data.bidID).html('');
                $('.errorMsgAutoBid' + data.bidID).html('');
                $(".alertMessage" + data.bidID).css('background', '#f16767');
                $(".alertMessage" + data.bidID).html('<p>You have been outbid.</p>');
                $('.nextincrement' + data.bidID).show();
                $('.bidnowbutton' + data.bidID).show();
                $('.autobidamount' + data.bidID).show();
                $('.bidnowautobutton' + data.bidID).show();
                $('.bidnowbutton' + data.bidID).attr("disabled", false);
                $('.bidnowautobutton' + data.bidID).attr("disabled", false);
                $(".bidnowbutton" + data.bidID).css('background', '##143D30');
                $(".liabilitybidcollapse" + data.bidID).hide();
                $(".liability_your" + data.bidID).removeClass('liabilty_shown');
            }
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

        if (data.checkTimer == 0) {
            window.empty = data.checkTimer;
            resetTimer(data);
        }

    });

    function roundedToFixed(input, digits) {
        var rounded = Math.pow(10, digits);
        return (Math.round(input * rounded) / rounded).toFixed(digits);
    }
    socket.on('auto_bid_delete', function(data) {
        $(".alertMessage" + data.bidID).html('');
        $('.errorMsgAutoBid' + data.auction_product_id).html('');
        $(".autobidamount" + data.auction_product_id).removeClass("mb-2");
        $('.errorMsgAutoBid' + data.auction_product_id + data.auction_product_id).html('');
        $(".totalliability" + data.auction_product_id).html('$' + total.toLocaleString('en-US'));
        $(".AutoSingleBidClick" + data.auction_product_id).css("display", "none");
    });
    socket.on('auto_bid_update_user_amount', function(data) {
        $('.errorMsgAutoBid' + data.id).html('');
        $('.errorMsgAutoBid' + data.id + data.id).html('');
        if (data.user_id == {{ Auth::user()->id }}) {
            $('.errorMsgAutoBid' + data.id + data.id).html(
                '<p">Current autobid is $' +
                addCommas(data.autobidamount) +
                ' /lb.{<a href="javascript:void(0)" class="removeAutoBID" data-id=' +
                data.id + '>Remove</a>}</p>');
        }
    });
    socket.on('add_groupbid_updates', function(data) {
        console.log('reset timer add_groupbid_updates');
        var my = data.offersdata;
        var lotid = $('.lotproductid').html();
        const interval_id = window.setInterval(function() {}, Number.MAX_SAFE_INTEGER);
        // Clear any timeout/interval up to that id
        for (let i = 1; i < interval_id; i++) {
            window.clearInterval(i);
        }
        if (my.length != 0) {
            var strValue = $('#offers').empty();
            $('#other-offers').empty();
            $('.some_div').empty();
            var i;
            var other_check = 0;
            var offers_all = [];
            for (i = 0; i < my.length; ++i) {
                var weight = my[i].accopied_wieght / 20;
                var amount = my[i].amount;
                var liability = my[i].accopied_wieght * amount;
                var rem_weight = my[i].remainig_weight / 20;
                if (my[i].user_id == {{ Auth::user()->id }}) {
                    $('#offers').append("<li class='offersli" + my[i].id +
                        "'> <div class='lotidparent'><span class='lotid'>" + my[i].rank +
                        "</span><button class='lotid-cancelbutton' onclick='cancelOffer(" + my[i].id +
                        ")'>× </button></div> <div class='lotidchild'> <div class='lotidchild-1'><p >Amount: $" +
                        addCommas(my[i]
                            .amount) + "<p> Bags: " + weight +
                        "</p> </div> <div class='lotidchild-1'><p>Liablity: $" + addCommas(liability) +
                        "</p><p>Remaining time: <b id='some_div" + i + "'></b></p> " + counter(my[i].id, i,
                            my[i]
                            .start_time, my[i].end_time, my[i].user_id) + "</div></div></li>");
                    if (other_check == 0 || other_check != my[i].id) {
                        if (offers_all.includes(my[i].id)) {

                        } else {
                            offers_all.push(my[i].id);
                            $('#other-offers').append(
                                "<li class='othersofferli" + my[i].id + "'><span class='lot-toggle-btn'" +
                                i + "'> " + my[i].rank +
                                " </span><button type='button' class='singlebidbtn btn mt-15 mb-1' data-toggle='collapse' data-target='#demo" +
                                i + "'> " + 'Participate' +
                                " </button><li><div class='lotid-groupoffers'> <p>Amount: <span  class='offeramount" +
                                my[i]
                                .id + "'>" + '$' + addCommas(my[i].amount) +
                                "</span></p><p>Remaining Bags: <span class=' remainingbags" + my[i].id +
                                "'>" +
                                rem_weight + "</span></p></div> <p>Remaining time :<b  id='mysome_div" + i +
                                "'></b></p>" +
                                counter(my[i].id, i, my[i].start_time, my[i].end_time, my[i].user_id) +
                                "</li><div id='demo" + i +
                                "' class='groupbid-offers collapse'><div class='col-8'>  <label>Bags Quantity: </label> <input type='number' class='form-control bag_quant" +
                                my[i].id + "' id='remaining_bag_quantity' min='1' data-id='" + my[i].id +
                                "' name='bag_quantity'><input type='hidden' class='offerhiddenid" + my[i]
                                .id +
                                "' value='" + my[i].id + "'> <span class='validationbags " + my[i].id +
                                " colorered'></span><span class='validationbagsnew" + my[i].id +
                                " colorered'></span><p style='font-weight: bold'>Weight: <span class='appendedfinalweight" +
                                my[i].id +
                                "'>--</span></p> <br> <button type='button' class='singlebidbtn btn appended-bid-confirm confirmgrpbid" +
                                my[i].id + "' data-id=" + my[i].id +
                                ">Post Group Bid</button> <br><div class='bid-confirm-sec hide liabiltysecappended" +
                                my[i].id + "'><br><p >Bid: <b class='bidamountappended" +
                                my[i].id +
                                "'></b></p><p>Weight: <b class='liabilityweight" +
                                my[i].id +
                                "'></b> </p><p>Liability: <b class='liabilityappended" +
                                my[i].id +
                                "'></b></p><div><button class='singlebidbtn btn participategroupbidbutton' data-id='" +
                                my[i].id + "'lot-id='" + my[i].auction_product_id +
                                "' href='javascript:void(0)'>Confirm</button><button type='button' class='singlebidbtn btn cancelappendedgroupbtn mx-10' data-id='" +
                                my[i].id + "'>Cancel</button></div></div> </div> </div></li>");
                            other_check = my[i].id;
                        }
                    }
                } else {
                    if (other_check == 0 || other_check != my[i].id) {
                        if (offers_all.includes(my[i].id)) {

                        } else {
                            offers_all.push(my[i].id);
                            $('#other-offers').append(
                                "<li class='othersofferli" + my[i].id + "'><span class='lot-toggle-btn'" +
                                i + "'> " + my[i].rank +
                                " </span><button type='button' class='singlebidbtn btn mt-15' data-toggle='collapse' data-target='#demo" +
                                i + "'> " + 'Participate' +
                                " </button><li><div class='lotid-groupoffers'> <p>Amount: <span  class='offeramount" +
                                my[i]
                                .id + "'>" + '$' + addCommas(my[i].amount) +
                                "</span></p><p>Remaining Bags: <span class=' remainingbags" + my[i].id +
                                "'>" +
                                rem_weight + "</span></p></div> <p>Remaining time :<b  id='other_div" + i +
                                "'></b></p>" +
                                counter(my[i].id, i, my[i].start_time, my[i].end_time, my[i].user_id) +
                                "</li><div id='demo" + i +
                                "' class='groupbid-offers collapse'><div class='col-8'>  <label>Bags Quantity: </label> <input type='number' class='form-control bag_quant" +
                                my[i].id + "' id='remaining_bag_quantity' data-id='" + my[i].id +
                                "' name='bag_quantity'><input type='hidden' class='offerhiddenid" + my[i]
                                .id +
                                "' value='" + my[i].id + "'> <span class='validationbags" + my[i].id +
                                " colorered'></span><span class='validationbagsnew" + my[i].id +
                                " colorered'></span><p style='font-weight: bold'>Weight: <span class='appendedfinalweight" +
                                my[i].id +
                                "'>--</span></p> <br> <button type='button' class='singlebidbtn btn appended-bid-confirm confirmgrpbid" +
                                my[i].id + "' data-id=" + my[i].id +
                                ">Post Group Bid</button> <br><div class='bid-confirm-sec hide liabiltysecappended" +
                                my[i].id + "'><br><p >Bid: <b class='bidamountappended" +
                                my[i].id +
                                "'></b></p><p>Weight: <b class='liabilityweight" +
                                my[i].id +
                                "'></b> </p><p>Liability: <b class='liabilityappended" +
                                my[i].id +
                                "'></b></p><div><button class='singlebidbtn btn participategroupbidbutton' data-id='" +
                                my[i].id + "'lot-id='" + my[i].auction_product_id +
                                "' href='javascript:void(0)'>Confirm</button><button type='button' class='singlebidbtn btn cancelappendedgroupbtn mx-10' data-id='" +
                                my[i].id + "'>Cancel</button></div></div> </div> </div></li>");
                            other_check = my[i].id;
                        }

                    } else {

                    }
                }
            }
        } else {
            $('.groupbiddiv').show();
            $('.offerdiv').hide();
            $('#offers').empty();
            $('#other-offers').empty();
        }
    });
    socket.on('add_bid_updates', function(data) {
        if (data.groupusers != undefined) {
            var i;
            for (i = 0; i < data.groupusers.length; ++i) {
                if (data.outbidresponse == 0 && data.groupusers[i].bidwinner == {{ Auth::user()->id }}) {
                    $('.errorMsgAutoBid' + data.bidID).hide();
                    $('.errorMsgAutoBid' + data.bidID + data.bidID).html('');
                    $(".autobidamount" + data.bidID).addClass("mb-2");
                    $(".bidnowbutton" + data.bidID).css("display", "block");
                    $(".bidnowautobutton" + data.bidID).css("display", "block");
                    $(".bidnowautobutton" + data.bidID).css("margin-bottom: ", "9px;");
                    $(".bidcollapse" + data.bidID).removeClass("changecolor");
                    $(".bidcollapse" + data.bidID).addClass("changecolorLose");
                    setTimeout(() => {
                        $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
                    }, 10000);
                    $('.autobidamount' + data.bidID).show();
                    $('.nextincrement' + data.bidID).show();
                    $(".autobidClass1" + data.bidID).show();
                    $('.bidnowbutton' + data.bidID).attr("disabled", false);
                    $('.bidnowautobutton' + data.bidID).attr("disabled", false);
                    $(".alertMessage" + data.bidID).css('background', '#f16767');
                    $('.alertMessage' + data.bidID).html('You have been outbid.');
                }
            }
        } else {
            if (data.outbidresponse == 0 && data.autobidUserID == {{ Auth::user()->id }}) {
                $('.errorMsgAutoBid' + data.bidID).hide();
                $('.errorMsgAutoBid' + data.bidID + data.bidID).html('');
                $(".autobidamount" + data.bidID).addClass("mb-2");
                $(".bidnowbutton" + data.bidID).css("display", "block");
                $(".bidnowautobutton" + data.bidID).css("display", "block");
                $(".bidnowautobutton" + data.bidID).css("margin-bottom: ", "9px;");
                $(".bidcollapse" + data.bidID).removeClass("changecolor");
                $(".bidcollapse" + data.bidID).addClass("changecolorLose");
                setTimeout(() => {
                    $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
                }, 10000);
                $('.autobidamount' + data.bidID).show();
                $('.nextincrement' + data.bidID).show();
                $(".autobidClass1" + data.bidID).show();
                $('.bidnowbutton' + data.bidID).attr("disabled", false);
                $('.bidnowautobutton' + data.bidID).attr("disabled", false);
                $(".alertMessage" + data.bidID).css('background', '#f16767');
                $('.alertMessage' + data.bidID).html('You have been outbid.');
            }
        }
        if (data.winningBidder == {{ Auth::user()->id }}) {
            total = total;
            $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
            $(".bidnowbutton" + data.bidID).attr("disabled", true);
            $(".bidnowautobutton" + data.bidID).attr("disabled", true);
            $(".bidnowbutton" + data.bidID).css('background', '#a6a6a6');
            $(".bidnowbutton" + data.bidID).css('color', '#ffffff');
            $(".alertMessage" + data.bidID).css('background', '#DBFFDA');
            $(".alertMessage" + data.bidID).html('<p>Your $' + data.singleBidammounttesting +
                '/lb Bid is confirmed.</p>');
            $(".liabilitybidcollapse" + data.bidID).show();
            $(".liability_your" + data.bidID).addClass('liabilty_shown');
            $(".finalliabilitytr").show();
            $(".userbid" + data.bidID).css("color", "black");
            $(".bidcollapse" + data.bidID).addClass("changecolor");
            $(".liabilitybidcollapse" + data.bidID).addClass("changecolor");
            $(".auctionpaddleno" + data.bidID).html(data.paddleNo);
        } else if (data.winningBidder != {{ Auth::user()->id }}) {
            $(".liabilitybidcollapse" + data.bidID).hide();
            $(".liability_your" + data.bidID).removeClass('liabilty_shown');
            $(".bidcollapse" + data.bidID).removeClass("changecolor");
            $(".userbid" + data.bidID).css("color", "#e78460");
            $(".bidcollapse" + data.bidID).addClass("changecolorLose");
            setTimeout(() => {
                $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
            }, 10000);
            $(".bidnowbutton" + data.bidID).attr("disabled", false);
            $(".bidnowautobutton" + data.bidID).attr("disabled", false);
            $(".bidnowbutton" + data.bidID).css('background', '#143D30');
            $(".alertMessage" + data.bidID).css('background', '#f16767');
            $(".alertMessage" + data.bidID).html('<p>You have been outbid.</p>');
        }
        if (data.isgroup == 1) {
            var i;
            for (i = 0; i < data.latestSingleBidUser.length; ++i) {
                if (data.latestSingleBidUser[i].bidwinner == {{ Auth::user()->id }}) {
                    $(".bidcollapse" + data.bidID).removeClass("changecolorLose");
                    $(".bidnowbutton" + data.bidID).attr("disabled", true);
                    $(".bidnowautobutton" + data.bidID).attr("disabled", true);
                    $(".bidnowbutton" + data.bidID).css('background', '#a6a6a6');
                    $(".bidnowbutton" + data.bidID).css('color', '#ffffff');
                    $(".alertMessage" + data.bidID).css('background', '#DBFFDA');
                    $(".alertMessage" + data.bidID).html('<p>Your $' + data.singleBidammounttesting +
                        '/lb Bid is confirmed.</p>');
                    $(".liabilitybidcollapse" + data.bidID).show();
                    $(".liability_your" + data.bidID).addClass('liabilty_shown');
                    $(".finalliabilitytr").show();
                    $(".userbid" + data.bidID).css("color", "black");
                    $(".bidcollapse" + data.bidID).addClass("changecolor");
                    $(".liabilitybidcollapse" + data.bidID).addClass("changecolor");
                    $(".auctionpaddleno" + data.bidID).html(data.paddleNo);
                    $(".bidcollapse" + data.bidID).removeClass("changecolorLose");

                }
            }
        }
        if (data.loser == {{ Auth::user()->id }}) {
            $(".alertMessage" + data.bidID).css('background', '#f16767');
            $(".alertMessage" + data.bidID).html('<p>You have been outbid.</p>');
        }
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
        var incrementedvalue = roundedToFixed(data.nextIncrement, 1);
        $(".bidData1" + data.bidID).html('$' + data.singleBidammounttesting.toLocaleString('en-US') + '/lbs');
        $(".nextincrement" + data.bidID).html('$' + addCommas(incrementedvalue));
        $(".increment" + data.bidID).html('$' + data.increment.toLocaleString('en-US'));
        $(".paddleno" + data.bidID).html(data.paddleNo);
        $(".paddleno" + data.bidID).addClass('fw-bold');
        $(".biddermaxbid" + data.bidID).html('$' + addCommas(data.nextIncrement) +
            '/lb');
        $(".totalliability" + data.bidID).html('$' + data.bidderLiablity.toLocaleString('en-US'));

    });
    var endAuctionVar = 0;
    socket.on('add_auction_status', function(data) {
        if (data.auctionstatus == 1) {
            // window.location = window.location.href + "?ended=1";
            endAuctionVar = 1;
        }
    });
    socket.on('add_timer_reset', function(data) {
        if (data.timerreset == 1) {
            data.checkTimer = 0;
            resetTimer(data);
        }
    });

    function resetTimer(data) {
        // console.log('reset timer');
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

        } else {
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
            minutes = (seconds <= 0) ? --minutes : minutes;
            seconds = (seconds <= 0) ? 59 : seconds;
            seconds = seconds.toString().padStart(2, "0");

            //minutes = (minutes < 10) ?  minutes : minutes;
            if (minutes >= 0 && seconds >= 0) {

                $('.days').html(days.toString().padStart(2, "0"));
                $('.hours').html(hours.toString().padStart(2, "0"));
                $('.minutes').html(minutes.toString().padStart(2, "0"));
                $('.seconds').html(seconds);
            } else {

                $('.seconds').html('00');
            }
            if (minutes < 0) clearInterval(interval);
            //check if both minutes and seconds are 0
            if ((seconds <= 0) && (minutes <= 0) && endAuctionVar == 1) {
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

    function addCommas(n) {
        var parts = n.toString().split(".");
        const numberPart = parts[0];
        const decimalPart = parts[1];
        const thousands = /\B(?=(\d{3})+(?!\d))/g;
        return numberPart.replace(thousands, ",") + (decimalPart ? "." + decimalPart : "");
    }

    function addCommas(nStr) {
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

    function cancelOffer(id) {
        swal({
            title: "Are you sure?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }).then(isConfirmed => {
            if (isConfirmed) {
                $.ajax({
                    url: "{{ route('updateUserOfferStatus') }}",
                    method: 'POST',
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        // console.log(response);

                        var offersdata = response.offersdata;

                        socket.emit('add_groupbid_updates', {
                            "offersdata": offersdata,
                        });
                    },
                    error: function(error) {
                        console.log(error)
                    }
                });
                $(".file").addClass("isDeleted");
                //   swal("Deleted!", "Your offer has been deleted.", "success");
            }
        });

    }


</script>
@include('customer.auction_pages.homejs')

</html>
