<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="
                                                                                            https://cdn.jsdelivr.net/npm/rellax@1.12.1/rellax.min.js
                                                                                            "></script>
</head>
<style>
    .row {
        padding: 0px;
        margin: 0px;
    }

    body {
        background-color: rgba(239, 235, 229, 1);
    }

    /* .background-image-1 {
        background: url("{{ url('/storage/app/public/auction/' . @$product->auctionProductImages[0]->image) }}");
        overflow: hidden;
        height: 100vh;
        background-size: 100% 100%;
        background-position: top center;
        background-repeat: no-repeat;
    } */
    /*
    .background-image-3 {
        background: url("");
        overflow: hidden;
        height: 600px;
        background-size: 98% 100%;
        background-position: top center;
        background-repeat: no-repeat;
    } */

    /* .background-image-2 {
        background: url("{{ url('/storage/app/public/auction/' . @$product->auctionProductImages[2]->image) }}");
        overflow: hidden;
        height: 600px;
        background-size: 98% 100%;
        background-position: top center;
        background-repeat: no-repeat;
    } */

    .background-image-1 img {
        height: 100%;
        width: 100%;
    }

    .background-image-2 img {
        width: 100%;
        height: 100%;


    }

    .background-image-3 img {
        width: 100%;
        height: 100%;

    }

    .background-image-3 {
        padding-left: 0px;

    }

    .background-image-2 {
        padding-right: 0px;

    }

    .banner-text-section {
        width: 501px;
        height: auto;
        background-color: rgba(239, 235, 229, 1);
        padding: 25px;
        position: absolute;
        left: 46%;
        top: 27%;
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
        text-transform: uppercase;
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

    .banner-text-section-2 span {
        font-family: 'Montserrat-Medium';
        font-size: 11px;
        font-weight: 500;
        line-height: 12px;
        letter-spacing: 0.1em;
        text-align: left;
        text-transform: inherit;
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

    .badge-section {
        margin-top: 15px;
        text-align: center;
        display: flex;
        justify-content: center;
        gap: 30px;
    }

    .badge-section img {
        width: 160px;
        height: 160px;
        padding: 10px;
    }

    .complete-wrapper {

        background-color: rgba(239, 235, 229, 1);
    }

    .banner-text-section img {
        display: none;
    }

    .banner-text-section-2 .banner-image-2 {
        display: none;
    }

    .content-wrapper {
        position: relative;
    }

    .complete-wrapper {
        position: relative;
        padding: 10px 40px;
    }

    .complete-wrapper::after {
        content: "";
        background: rgba(227, 222, 215, 1);
        height: 45vh;
        width: 100%;
        position: absolute;
        left: 0;
        right: 0;
        top: 84%;
        z-index: 0;
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

    .icons-tab {

        display: flex;
        justify-content: center;
        gap: 30px;


    }

    .icons-tab i {
        font-size: 20px;
        color: white;
        background: #575555;
        padding: 10px;
        border-radius: 20px;
        width: 40px;
        height: 40px;
        text-align: center;
    }

    .white-anchor {
        text-decoration: none;
        color: #9F9B9B !important;
    }

    .content-wrapper {

        background-color: rgba(239, 235, 229, 1);

    }

    .menu-bar {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .menu-bar i {
        font-size: 25px;
        color: rgba(87, 85, 85, 1);
    }

    .menu-bar p {
        margin: 0px;
        font-size: 11px;
        font-weight: 700;
        line-height: 13px;
        letter-spacing: 0.2em;
        text-align: left;
        color: rgba(87, 85, 85, 1);
        text-transform: uppercase;

    }

    .navbar {
        padding: 12px;
    }

    .badges-wrapper {
        margin-top: 330px;
        position: relative;
        right: 2%;
    }

    .theme-background-color {
        background-color: rgba(239, 235, 229, 1);
    }

    .modal-section-body {

        padding: 60px 60px;
        height: 500px;
        scroll-behavior: smooth;
        overflow-y: scroll;
    }

    .modal-section-body::-webkit-scrollbar-button {
        width: 10px;
    }

    .modal-section-body h4 {
        font-size: 11px;
        font-family: 'Montserrat';
        font-weight: 500;
        line-height: 13px;
        letter-spacing: 0.2em;
        text-align: center;
        color: black;
        text-transform: uppercase;

    }

    .modal-section-body h2 {
        font-family: 'Montserrat';
        font-size: 18px;
        font-weight: 700;
        line-height: 22px;
        letter-spacing: 0.1em;
        text-align: center;
        color: rgba(35, 43, 56, 1);
        text-transform: uppercase;


    }

    .modal-section-body p {
        font-family: 'Montserrat-Medium';
        margin-top: 20px;
        font-size: 10px;
        font-weight: 500;
        line-height: 15px;
        letter-spacing: 0.2em;
        text-transform: capitalize;

        text-align: center;

    }

    .modal-head-section {
        border-bottom: none !important;
    }

    .modal-head-section button {
        font-size: 20px;
        padding: 15px;
    }


    .landing-page-bg {
        background-image: url("{{ asset('public/app-assets/images/banner/new-bg.png') }}");
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .boy-image {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .boy-image img {
        padding: 20px;
        margin-top: 10px;
        width: 300px;
    }

    .timer-section {
        text-align: center;
    }

    .timer-section h2 {
        font-family: 'Montserrat-Medium';
        font-style: normal;
        font-weight: 400;
        font-size: 80px;
        /* line-height: 98px; */
        margin-top: 0px;
        color: #FFFFFF;
        margin-bottom: 20px;
    }

    .timer-section h3 {
        font-family: 'Montserrat-Medium';
        font-style: normal;
        font-weight: 400;
        font-size: 50px;
        /* line-height: 98px; */
        margin-top: 0px;
        color: #FFFFFF;
        margin-bottom: 20px;
    }

    .timer-section button {
        margin-top: 25px;
        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 35px;
        color: #575555;
        width: 542px;
        padding: 15px;
        font-size: 23px;
        text-transform: uppercase;
        font-weight: 700;
        border-color: white !important;
        border: none;
    }

    .timer-section button a {
        text-decoration: none;
        color: #575555;
    }

    .icons-tab i {
        cursor: pointer;
    }

    .card-display-3 {
        margin-top: 20px;
        line-height: 32px;

    }

    .bg-theme-color {
        background-color: #EFEBE5;
    }

    .date-country {
        justify-content: center;
        display: flex;
        font-size: 30px;
        align-items: center;
        text-align: center;
        color: #575555;
        font-family: 'Montserrat';
        flex-direction: column;
    }

    .auction-time h2 {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 18px;
        line-height: 22px;

        letter-spacing: 0.2em;
        text-transform: uppercase;


        color: #575555;

        text-align: center;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        font-feature-settings: 'kern'off;

        color: #575555;
    }

    .hr-tag {
        margin-top: 10px;
        padding: 8px;
        margin-bottom: 0px;
        border-bottom: 3px solid rgb(244, 243, 243);
    }

    .hr {


        border: 2px solid rgb(244, 243, 243);
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
        font-feature-settings: 'kern'off;

        color: #9F9B9B;
    }

    @media only screen and (max-width:768px) {
        .timer-section button {
            width: auto;
        }

        .timer-section h2 {
            font-size: 50px;

        }

        .timer-section h3 {
            font-size: 40px;
        }

        .date-country {
            font-size: 16px;
        }

        .footer-qima p {
            line-height: 40px;
        }

        .timer-section button {
            font-size: 16px;
            padding: 15px;
        }


    }

    .footer-text {
        text-transform: uppercase;
        background: transparent;
        border: none;
        text-align: center;
        display: flex;
        align-items: center;
    }


    @font-face {
        font-family: 'Montserrat';
        src: url('{{ asset(' public/app-assets/fonts/Montserrat/Montserrat-Bold.ttf') }}') format('truetype');

    }

    .card-display-3 p {
        font-weight: 500;
        font-size: 16px;
        font-family: 'Montserrat-Medium'
    }

    #w-c {

        font-size: 24px;
        font-weight: 800;
        line-height: 32px;
        letter-spacing: 0.2em;
        text-align: center;
        color: #575555;
        width: auto;
        text-transform: uppercase;
        font-family: 'Montserrat';


    }

    .section2 {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: white;

    }

    .container-fluid {
        padding: 0 0.5rem;

    }

    .first-head {
        border-top: 3px solid rgb(244, 243, 243);
    }

    .heading-top {
        font-family: 'Montserrat';
        font-size: 27px;
        font-weight: 800;
        line-height: 2rem;
        letter-spacing: 0.3rem;
        border-bottom: 3px solid rgb(244, 243, 243);

        padding: 1.5rem 0;
        margin: 0;
        /* margin-top: 1.6rem; */
        color: #E78460;
        text-align: center;
        width: 100%;
        text-transform: uppercase;
    }



    .h-1 {
        width: 45vw;
        display: grid;
        margin: 0;
        grid-template-columns: 1fr 2.6fr 1fr 0.9fr;
        font-family: 'Montserrat';

    }

    .h-2 {
        display: grid;
        width: 40vw;
        grid-template-columns: 1.4fr 1fr 1.4fr;
        font-family: 'Montserrat';

    }

    .h-3 {
        width: 15vw;
        display: flex;
        border-left: 3px solid rgb(244, 243, 243);
        border-bottom: 3px solid rgb(244, 243, 243);
        justify-content: center;
        align-items: center;
        height: 3rem;
        font-family: 'Montserrat';

    }

    .h-2 div {

        justify-content: center;
        align-items: center;
        display: flex;

    }

    .h-3 div {

        justify-content: center;
        align-items: center;
        display: flex;

    }


    #rank {
        font-family: 'Montserrat';
        text-transform: uppercase;
        display: flex;
        align-items: center;
        text-align: left;
        border-right: 3px solid rgb(244, 243, 243);
        border-bottom: 3px solid rgb(244, 243, 243);

        font-size: 10px;
        font-weight: 500;
        line-height: 12px;
        letter-spacing: 0.1em;
        text-align: left;
        padding: 15px 25px;

    }

    #lname {
        text-transform: uppercase;
        font-family: 'Montserrat';
        font-size: 10px;
        font-weight: 500;
        line-height: 12px;
        letter-spacing: 0.1em;
        text-align: center;

        border-right: 3px solid rgb(244, 243, 243);
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 3px solid rgb(244, 243, 243);


    }

    #cscore {
        text-transform: uppercase;
        font-family: 'Montserrat';
        font-size: 10px;
        font-weight: 500;

        border-right: 3px solid rgb(244, 243, 243);
        border-bottom: 3px solid rgb(244, 243, 243);
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        line-height: 1.2rem;


    }

    #lsize {
        text-transform: uppercase;
        font-family: 'Montserrat';
        font-size: 10px;
        font-weight: 500;
        border-bottom: 3px solid rgb(244, 243, 243);
        display: flex;
        align-items: center;
        justify-content: center;

    }

    #process {
        text-transform: uppercase;
        font-family: 'Montserrat';
        font-size: 10px;
        font-weight: 500;
        border-right: 3px solid rgb(244, 243, 243);
        border-left: 3px solid rgb(244, 243, 243);
        border-bottom: 3px solid rgb(244, 243, 243);

    }

    #genetics {
        text-transform: uppercase;
        font-family: 'Montserrat';
        font-size: 10px;
        font-weight: 500;
        border-right: 3px solid rgb(244, 243, 243);
        border-bottom: 3px solid rgb(244, 243, 243);
    }

    #traceability {
        text-transform: uppercase;
        font-family: 'Montserrat';
        font-size: 10px;
        font-weight: 500;
        border-bottom: 3px solid rgb(244, 243, 243);
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .rank {
        padding: 15px 25px;
        text-transform: uppercase;
        border-right: 3px solid rgb(244, 243, 243);
        border-bottom: 3px solid rgb(244, 243, 243);
        font-size: 48px;
        font-weight: 800;
        line-height: 61px;
        letter-spacing: 0em;
        text-align: left;
        align-items: center;
        display: flex;
        font-family: 'Montserrat';

    }

    .lname {
        text-transform: uppercase;
        border-right: 3px solid rgb(244, 243, 243);
        font-size: 0.9rem;
        font-weight: 800;
        line-height: 1.5rem;
        letter-spacing: 0.1em;
        text-align: center;
        border-bottom: 3px solid rgb(244, 243, 243);
        justify-content: center;
        align-items: center;
        display: flex;
        font-family: 'Montserrat';


    }

    .table-grid p,
    h2 {
        padding: 0;
        margin: 0;
    }

    .cscore {

        border-right: 3px solid rgb(244, 243, 243);
        border-bottom: 3px solid rgb(244, 243, 243);
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 32px;
        font-weight: 800;
        line-height: 2.3rem;
        letter-spacing: 0em;
        font-family: 'Montserrat';
    }

    .lsize {
        font-size: 18px;
        line-height: 1.6rem;
        letter-spacing: 0.1em;
        border-bottom: 3px solid rgb(244, 243, 243);
        font-weight: 900;
        color: rgba(35, 43, 56, 1);
        ;
        display: flex;
        text-align: center;
        align-items: center;
        justify-content: center;
        font-family: 'Montserrat';
        text-transform: uppercase;
    }

    .process {
        border-right: 3px solid rgb(244, 243, 243);
        border-left: 3px solid rgb(244, 243, 243);
        border-bottom: 3px solid rgb(244, 243, 243);
        font-size: 14px;
        font-weight: 700;
        line-height: 19px;
        letter-spacing: 0.1em;
        text-align: center;
        justify-content: center;
        align-items: center;
        display: flex;
        text-transform: uppercase;
        font-family: 'Montserrat';

    }

    .genetics {
        border-right: 3px solid rgb(244, 243, 243);
        border-bottom: 3px solid rgb(244, 243, 243);
        font-size: 14px;
        font-weight: 700;
        line-height: 32px;
        letter-spacing: 0.1em;
        text-align: center;
        text-align: center;
        justify-content: center;
        align-items: center;
        display: flex;
        text-transform: uppercase;
        font-family: 'Montserrat';
        font-family: 'Montserrat';

    }

    .traceability {
        border-bottom: 3px solid rgb(244, 243, 243);
        display: flex;
        font-size: 10px;
        font-weight: 300;
        line-height: 12px;
        letter-spacing: 0em;
        align-items: center;
        color: #6a6a6a;
        font-family: 'Montserrat';
    }

    .traceability span {
        font-size: 10px;
        font-weight: 500;
        line-height: 12px;
        letter-spacing: 0em;
        color: black !important;
        font-family: 'Montserrat' !important;
        margin-left: 3px;
        line-height: 18px;
    }

    .traceability-content {
        border: 8px solid transparent;
        font-size: 11px;
        text-transform: uppercase;
        font-family: 'Montserrat-Medium';
    }

    .headings {
        display: flex;
        font-family: Montserrat;
        font-size: 0.7rem;
        font-weight: 700;
        line-height: 0.6rem;
        letter-spacing: 0.1em;
        text-align: left;
        color: #575555;
    }

    .content {
        display: flex;
        font-family: 'Montserrat';
    }

    .c-1 {
        width: 45vw;
        display: grid;
        margin: 0;
        grid-template-columns: 1fr 2.6fr 1fr 0.9fr;

    }

    .c-2 {
        display: grid;
        width: 40vw;
        grid-template-columns: 1.4fr 1fr 1.4fr;

    }

    .c-3 {
        width: 15vw;
        display: flex;
        border-left: 3px solid rgb(244, 243, 243);
        border-bottom: 3px solid rgb(244, 243, 243);
        justify-content: center;
        align-items: center;
    }

    .lname p {
        font-size: 0.7rem;
        font-weight: 500;
        padding: 0;
        margin: 0;
        font-family: 'Montserrat-Medium' !important;
    }

    .btn-info {
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

    .jury-images {
        text-align: center;
    }

    .jury-images img {
        width: 130px;
        height: 130px;
    }

    @media (max-width: 880px) {


        .h-1 {
            width: 90vw;
            height: 2rem;

        }

        .h-2 {

            width: 90vw;
            height: 2rem;
        }

        .h-3 {
            width: 90vw;
            height: 2rem;
        }

        #process {
            margin-top: 10px;
            padding: 10px;
        }

        .h-3 {
            border-left: none;
        }

        .c-1 {
            width: 90vw;
        }

        .c-2 {
            width: 90vw;

        }

        .c-3 {
            justify-content: end;
            width: 100%;
            height: 4rem;
        }

        .process {
            border-left: none;
        }

        .c-3 {
            border-left: none;
        }

        .headings {
            display: block;
        }

        .content {
            display: block;
        }

        .lname {
            font-size: 0.6rem;
            line-height: 1rem;
        }


        .rank {

            font-size: 2.3rem;
            line-height: 3.5rem;
        }

        .process {
            font-size: 12px;
            line-height: 1rem;
        }

        .genetics {
            font-size: 12px;
            font-weight: 700;
            line-height: 1rem;
        }

        .traceability {
            border-bottom: 3px solid rgb(244, 243, 243);
            display: flex;
            font-size: 9px;
            font-weight: 300;
            line-height: 0.6rem;
            letter-spacing: 0em;
            align-items: center;
        }

        .traceability span {
            font-size: 9px;
            font-weight: 600;
            line-height: 15px;
        }

        #w-c {

            font-size: 1rem;
            font-weight: 800;
            line-height: 20px;
            letter-spacing: 0.2em;
            text-align: center;
            color: #575555;
            text-transform: uppercase;
        }

        .heading-top {
            line-height: 1.6rem;
            font-size: 1rem;
            letter-spacing: 0.2rem;
            /* width: 90vw; */
            width: 100%;
        }

        #traceability {
            margin-top: 10px;
            padding: 10px;
        }

        #genetics {
            margin-top: 10px;
            padding: 10px;
        }

        .jury-images img {
            width: 100px;
            height: 100px;
        }

    }

    @media (max-width: 600px) {
        .h-1 {
            width: 100%;
            height: 2rem;

        }

        .h-2 {

            width: 100%;
            height: 2rem;
        }

        .h-3 {
            width: 100%;
            height: 2rem;
        }

        #process {
            margin-top: 0px;
            padding: 0px;
            border-left: none;
        }

        .h-3 {
            border-left: none;
        }

        .c-1 {
            width: 100%;
        }

        .c-2 {
            width: 100%;

        }

        .c-3 {
            justify-content: end;
            width: 100%;
            height: 4rem;
        }

        .heading-top {
            line-height: 1.7rem;


        }

        .headings {
            font-size: 0.4rem;
            /* width: 100vw; */
        }

        .h-1 {
            height: 2rem;

        }

        .h-2 {
            height: 2rem;
        }

        .h-3 {
            height: 1rem;
        }


        .lname {
            font-size: 13px !important;

        }

        .cscore {
            font-size: 20px;
        }

        .lsize {
            font-size: 15px;
            line-height: 1.2rem;

        }

        .lname p {
            font-size: 9px;
            margin-top: 5px;
        }

        .rank {
            padding: 0px;
            font-size: 32px;
        }

        .traceability span {
            font-size: 8px;
        }

        .p {
            font-size: 8px
        }

        .process {
            font-size: 11px;
            line-height: 0.8rem;
        }

        .genetics {
            font-size: 11px;
        }

        .btn-info {
            padding: 0.4rem 0.5rem;
            font-size: 8px;
            font-weight: 700;
            margin: 0 1.5rem;

        }

        #cscore {
            line-height: 0.5rem;
        }

        .btn-info {
            margin: 0 0.6rem;
        }

        #rank {
            font-size: 8px;
            padding: 0px;
        }

        #lname {
            font-size: 8px;
        }

        #cscore {
            font-size: 8px;
        }

        #lsize {
            font-size: 8px;
        }

        #process {
            font-size: 8px;

        }

        #genetics {
            font-size: 8px;
            margin-top: 0px;
            padding: 0px;
        }

        #traceability {
            font-size: 8px;
            margin-top: 0px;
            padding: 0px;
        }

        .international-jury-section h2 {
            font-size: 20px !important;
        }

        .wrapper-top-section {
            padding: 0px 15px !important;
        }

        .jury-images img {
            width: 50px;
            height: 50px;
        }
    }

    .wrapper-jury {
        background-color: white;

    }



    .international-jury-section h2 {
        font-family: 'Montserrat';
        font-size: 24px;
        font-weight: 800;
        line-height: 32px;
        letter-spacing: 0.2em;
        text-align: center;
        padding: 50px 10px;


    }

    @font-face {
        font-family: 'Montserrat';
        src: url('{{ asset('public/app-assets/fonts/Montserrat/Montserrat-Bold.ttf') }}') format('truetype');

    }

    @font-face {
        font-family: 'Montserrat-Medium';
        src: url('{{ asset('public/app-assets/fonts/Montserrat/Montserrat-Medium.ttf') }}') format('truetype');

    }



    .wrapper-top-section {

        max-width: 1500px;
    }

    .table-wrapper {
        display: flex;
        justify-content: center;
    }

    .auction-timer--country {
        display: flex;
        align-items: center;
        flex-direction: column
    }

    .auction-timer--country p {
        font-family: 'Montserrat-Medium'
    }

    .footer-bg {
        background: #E3DED7;
    }

    .content-wrapper {
        margin-bottom: 60vh;
    }

    .icons-tab p {
        font-family: 'Montserrat';
        font-size: 18px;
        font-weight: 700;
        line-height: 22px;
        letter-spacing: 0.2em;
        text-align: left;
        text-transform: uppercase;
        color: rgba(87, 85, 85, 1);
    }

    .modal-center-alignment {
        height: 100vh;
        display: flex;
        align-items: center;
    }


    .menu-container {
        position: relative;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        right: -4%;
        padding: 20px;
        width: max-content;

        /* additional styling for the dropdown menu */
    }

    .menu-bar .fa {
        cursor: pointer;
    }

    .dropdown-menu a {
        color: #575555;
        text-decoration: none;
        font-weight: 600;
        text-transform: uppercase;
        font-family: 'Montserrat-Medium';
    }

    .dropdown-menu hr {
        margin: 10px 0px;
    }
</style>


<body>
    <div class="content-wrapper">
        <div class="conatiner-fluid complete-wrapper">
            <div class="navbar">
                <div class="icons-tab">

                    <a href="/" style="text-decoration: none">
                        <p>best of yemen auction</p>
                    </a>

                </div>
                <div class="menu-container">
                    <div class="menu-bar">
                        <p>menu</p>
                        <i class="fa fa-bars"></i>
                    </div>
                    <div class="dropdown-menu">
                        <a href="{{ url('/') }}">Home</a>
                        <hr>
                        <a href="{{ url('/auction/results') }}">best of yemen 2022 results</a>
                    </div>
                </div>


            </div>
            <div class="wrapper-bg-section row ">
                <div class="images-section ">
                    <div>
                        <div class="background-image-1 col-md-12">
                            <img src="{{ url('/storage/app/public/auction/' . @$product->auctionProductImages[0]->image) }}"
                                alt="">
                        </div>
                    </div>
                    <div class="mt-4 row">
                        <div class="background-image-3 col-md-6">
                            <img src="{{ url('/storage/app/public/auction/' . @$product->auctionProductImages[1]->image) }}"
                                alt="">
                        </div>
                        <div class="background-image-2 col-md-6">
                            <img src="{{ url('/storage/app/public/auction/' . @$product->auctionProductImages[2]->image) }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="text-sections" id="fast-div">
                    <div class="banner-text-section ">
                        <h2>{{ $product->rank }}.</h2>
                        <h3>{{ $product->name }}</h3>
                        <p style="cursor: auto;">Jury code : {{ $product->code }}</p>
                        <hr>
                        <img class="mt-2 mb-2"
                            src="{{ url('/storage/app/public/auction/' . @$product->auctionProductImages[0]->image) }}"
                            width="100%" alt="Product Image">

                        <p style="cursor: auto;">jury score :</p>
                        <h2> {{ $product->jury_score }}</h2>
                        <hr>
                        <div data-bs-toggle="modal" data-bs-target="#genetics">
                            <p>Genetics :</p>
                            <h4>{{ $product->genetic }}</h4>
                        </div>
                        <div data-bs-toggle="modal" data-bs-target="#process">
                            <p>Process :</p>
                            <h4>{{ $product->process }}</h4>
                        </div>
                        <p style="cursor: auto;">lot size :</p>
                        <h4 style="cursor: auto;">{{ $product->size }}LBS</h4>
                        <hr>
                        <div data-bs-toggle="modal" data-bs-target="#location">
                            <h6>traceability</h6>
                            <p>VILLAGE :{{ $product->village }}</p>
                            <p> REGION : {{ $product->region }} </p>
                            <p>GOVERNORATE : {{ $product->governorate }}</p>
                            <p>ALTITUDE :{{ $product->altitude }}masl</p>
                        </div>
                        <img class="mt-2 mb-2"
                            src="{{ url('/storage/app/public/auction/' . @$product->auctionProductImages[1]->image) }}"
                            width="100%" alt="Product Image">

                    </div>
                    <div class="banner-text-section-2">
                        <p>flavour profile</p>
                        <h3>{{ $product->cup_profile }}</h3>
                        <hr>
                        <h5>{{ $product->heading_1 }}</h5>
                        <span>{!! $product->description_1 !!}</span>
                        <img class="mt-2 mb-2 banner-image-2"
                            src="{{ url('/storage/app/public/auction/' . @$product->auctionProductImages[2]->image) }}"
                            width="100%" alt="Product Image">
                        <div class="badge-section">

                            <img src="{{ url('/public/images/detail-page-img1.png') }}" alt="">
                            <img src="{{ url('/public/images/detail-page-img.png') }}" alt="">
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- <div class="majid">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam suscipit in voluptatum
        consectetur reiciendis distinctio est consequuntur temporibus saepe architecto, quas sunt officiis debitis vitae
        ipsum cumque nobis minima.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit veniam repellat corporis quisquam quod
        ducimus voluptatum, repudiandae id sint nihil ipsa aut tenetur, molestias eveniet laborum. Dignissimos cum
        explicabo sunt.</div> -->

    <div class="modal fade " id="genetics" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-center-alignment">
            <div class="modal-content theme-background-color">
                <div class="modal-header modal-head-section">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-section-body">
                    <h4>Genetics</h4>
                    <h2>{{ @$product->genetics->title }}</h2>
                    <p>{!! @$product->genetics->description !!}</p>


                </div>

            </div>
        </div>
    </div>
    <div class="modal fade " id="process" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-center-alignment">
            <div class="modal-content theme-background-color">
                <div class="modal-header modal-head-section">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-section-body">
                    <h4>Process</h4>
                    <h2>{{ @$product->processes->title }}</h2>
                    <p>{!! @$product->processes->description !!}</p>


                </div>

            </div>
        </div>
    </div>
    <div class="modal fade " id="location" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-center-alignment">
            <div class="modal-content theme-background-color">
                <div class="modal-header modal-head-section">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-section-body">
                    <h4>TRACEABILITY</h4>
                    <h2>{{ @$product->villages->title }}</h2>
                    <p>{!! @$product->villages->description !!}</p>

                    <h2>{{ @$product->regions->title }}</h2>
                    <p>{!! @$product->regions->description !!}</p>
                    <h2>{{ @$product->governorates->title }}</h2>
                    <p>{!! @$product->governorates->description !!}</p>


                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid mt-3 footer-bg">
        <div class="row row-cols-1 row-cols-md-3 g-4 date-country">
            <div class="icons-tab" style="display:flex !important;">
                <a href="https://www.facebook.com/qimacoffee"><i href="" class="fa fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/qimacoffee/"> <i href="" class="fa fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCcgmMB11TkfAsGO1uiHuKnQ"><i href=""
                        class="fa fa-youtube-play"></i>
                </a>


            </div>
            <div class="col card-display-3">
                <div class="card bg-none text-color h-100 footer-text" style="text-transform:uppercase;">
                    <p class="m-0 text-start">10:00am BST &nbsp;- London, United Kingdom</p>
                    <p class="m-0 text-start">2:00am PDT &nbsp;- LA, USA</p>
                    <p class="m-0">5:00am EDT &nbsp;&nbsp;- NY, USA</p>
                    <p class="m-0">11:00am CEST - Amsterdam, Netherlands</p>
                    <p class="m-0">12:00pm AST &nbsp;&nbsp;- Riyadh, Saudi Arabia</p>
                    <p class="m-0">1:00pm GST &nbsp;&nbsp;- Dubai, UAE</p>
                    <p class="m-0">5:00pm HKT &nbsp;&nbsp;- Hong Kong, Hong Kong</p>
                    <p class="m-0">6:00pm JST &nbsp;&nbsp;- Tokyo, Japan</p>
                    <p class="m-0">6:00pm KST &nbsp;- Seoul, South Korea</p>
                    <p class="m-0">7:00pm AEST - Sydney, Australia</p>
                </div>
            </div>
            <div class="auction-time">
                <h2>best of yemen 2023 <br>
                    AUGUST 8TH</h2>
            </div>

        </div>

        <div class="footer-qima">
            <hr class="hr">
            <p> <a href="{{ url('/auction/results') }}" class="white-anchor"> best of yemen 2022 results</a></p>
            <p><a href="https://www.qimacoffee.com">qima coffee</a> </p>
            <p><a href="https://allianceforcoffeeexcellence.org/ace-private-collection-auctions/">Alliance for
                    coffee excellence</a></p>
            <p><a href="https://www.qimafoundation.org/">qima foundation</a></p>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script>
        const menuBar = document.querySelector('.menu-bar');

        // Get the dropdown menu element
        const dropdownMenu = document.querySelector('.dropdown-menu');

        // Add a click event listener to the menu bar
        menuBar.addEventListener('click', function() {
            // Toggle the display of the dropdown menu
            dropdownMenu.style.display = (dropdownMenu.style.display === 'none') ? 'block' : 'none';
        });
    </script>
    <script>
        window.addEventListener("scroll", function() {
            var scroll = window.pageYOffset || document.documentElement.scrollTop;
            var heroImg = document.querySelector(".background-image-1");
            heroImg.style.backgroundSize = (100 + scroll / 55) + "%";
            heroImg.style.top = -(scroll / 10) + "%";
        });
    </script>

</body>

</html>
