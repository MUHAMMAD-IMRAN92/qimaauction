<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Best of Yemen Auction 2023</title>
</head>
<style>
    body {
        margin: 0px;
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
        line-height: 20px;

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
        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: 0.2em;
        text-transform: uppercase;


        color: #575555;
        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        font-feature-settings: 'kern' off;

        color: #575555;
    }

    .hr-tag {
        margin-top: 10px;
        padding: 8px;
        margin-bottom: 0px;
        border-bottom: 3px solid rgb(244, 243, 243);
    }

    .hr {

        margin-bottom: 0px;
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
        font-feature-settings: 'kern' off;

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

    .icons-tab {
        margin-top: 45px;
        display: flex;
        justify-content: center;
        gap: 30px;


    }

    .icons-tab i {
        font-size: 30px;
        font-size: 30px;
        color: white;
        background: #575555;
        padding: 12px;
        border-radius: 50%;
        width: 29px;
    }

    .white-anchor {
        text-decoration: none;
        color: #9F9B9B !important;
    }

    @font-face {
        font-family: 'Montserrat';
        src: url('{{ asset('public/app-assets/fonts/Montserrat/Montserrat-Bold.ttf') }}') format('truetype');

    }

    .card-display-3 p {
        font-family: 'Montserrat-Medium';
        font-weight: 500;
        font-size: 16px;
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

    #join-the-auction {
        cursor: pointer;
    }
    .btn-group-table{
        align-items: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    }
</style>

<body>
    <div class="bg-theme-color">
        <div class="landing-page-bg">
            <div class="boy-image">
                <img src="{{ asset('public/app-assets/images/banner/bestofyemen.png') }}" alt="">
                <img src="{{ asset('public/app-assets/images/banner/midbanner.png') }}" alt="">
            </div>
            <div class="timer-section">
                <h2 id="timer">00:00:00:00</h2>
                <h3>AUGUST 8TH</h3>
                <div class="d-flex btn-group-table">
                    <button id="register-for-auction"><a
                            href="https://allianceforcoffeeexcellence.org/product/best-of-yemen-auction-only-2023/">Register
                            For The Auction</a></button>
                    <button type="button" class="btn btn-primary banner-btns mb-1" id="join-the-auction"
                        style="display: block" OnClick=" location.href='/auction-home' ">JOIN THE PRACTICE AUCTION
                    </button>
                </div>

            </div>

        </div>
        @if (count($natural) > 0 || count($alchmey) > 0)
            <div class="table-wrapper">
                <div class=" table-grid wrapper-top-section">
                    <div class="table-items">
                        <h3 id="w-c">Winning Coffees</h3>
                        <div class="heading-top first-head">
                            <h2>Naturals & Deep Fermentation</h2>
                        </div>
                        <div class="headings">
                            <div class="h-1">
                                <div id="rank">Rank</div>
                                <div id="lname">Lot Name</div>
                                <div id="cscore">Cupping Score</div>
                                <div id="lsize">lot size</div>
                            </div>
                            <div class="h-2">
                                <div id="process">Process</div>
                                <div id="genetics">genetic</div>
                                <div id="traceability">traceability</div>
                            </div>
                            <div class="h-3">
                                <div id="button">
                                </div>
                            </div>
                        </div>
                        @foreach ($natural as $key => $nat)
                            <div class="content">
                                <div class="c-1">
                                    <div class="rank">{{ $nat->rank }}.</div>
                                    <div class="lname">
                                        <div class="">
                                            <h2>{{ $nat->name }}</h2>
                                            <p>jury code: {{ $nat->code }}</p>
                                        </div>
                                    </div>
                                    <div class="cscore">
                                        {{ $nat->jury_score }}
                                    </div>
                                    <div class="lsize">
                                        <div class="">
                                            <p>{{ $nat->size }}</p>
                                            <p>lbs</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-2">
                                    <div class="process">
                                        <p>{{ $nat->process }}</p>
                                    </div>
                                    <div class="genetics">{{ $nat->genetic }}</div>
                                    <div class="traceability">
                                        <div class="traceability-content">
                                            <p class="p">Village :<span>{{ $nat->village }}</span> </p>
                                            <p class="p">Region : <span>{{ $nat->region }}</p>
                                            <p class="p">governorate :<span>{{ $nat->governorate }}</span> </p>
                                            <p class="p">altitude : <span>{{ $nat->altitude }}masl</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-3">
                                    <button class="btn-info"><a style="color: inherit;text-decoration:none;"
                                            href="{{ url('product/detail/' . $nat->id) }}">More
                                            information</a></button>
                                </div>
                            </div>
                        @endforeach
                        <div class="hr-tag">

                        </div>
                        <div class="heading-top">
                            <h2>Alchemy</h2>
                        </div>
                        <div class="headings">
                            <div class="h-1">
                                <div id="rank">Rank</div>
                                <div id="lname">Lot Name</div>
                                <div id="cscore">Cupping Score</div>
                                <div id="lsize">lot size</div>
                            </div>
                            <div class="h-2">
                                <div id="process">Process</div>
                                <div id="genetics">genetic</div>
                                <div id="traceability">traceability</div>
                            </div>
                            <div class="h-3">
                                <div id="button">
                                </div>
                            </div>
                        </div>

                        @foreach ($alchmey as $key => $alc)
                            <div class="content">
                                <div class="c-1">
                                    <div class="rank">{{ $alc->rank }}.</div>
                                    <div class="lname">
                                        <div class="">
                                            <h2>{{ $alc->name }}</h2>
                                            <p>jury code: {{ $alc->code }}</p>
                                        </div>
                                    </div>
                                    <div class="cscore">
                                        {{ $alc->jury_score }}
                                    </div>
                                    <div class="lsize">
                                        <div class="">
                                            <p>{{ $alc->size }}</p>
                                            <p>lbs</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-2">
                                    <div class="process">
                                        <p>{{ $alc->process }}</p>
                                    </div>
                                    <div class="genetics">{{ $alc->genetic }}</div>
                                    <div class="traceability">
                                        <div class="traceability-content">
                                            <p class="p mr-1">Village : <span> {{ $alc->village }}</span> </p>
                                            <p class="p">Region : <span> {{ $alc->region }}</p>
                                            <p class="p">governorate : <span> {{ $alc->governorate }}</span> </p>
                                            <p class="p">altitude : <span> {{ $alc->altitude }}masl</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-3">
                                    <button class="btn-info"><a style="color: inherit;text-decoration:none;"
                                            href="{{ url('product/detail/' . $alc->id) }}">More
                                            information</a></button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        <div class="wrapper-jury">
            <div class="international-jury-section">
                <h2>INTERNATIONAL JURY</h2>
                <div class="jury-images">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0003_Layer-1.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0015_boy2022-logo_0028_AROMA_logo.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0016_boy2022-logo_0026_Blue_Bottle_Coffee_logo.svg.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0023_boy2022-logo_0010_logo_default01.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0006_new2_0003_Layer-5.png') }}"
                        alt="">
                </div>
                <div class="jury-images">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0012_new_0001_Layer-2-copy.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0018_boy2022-logo_0019_logo_0000s_0017_CYP_Logo_v9_130417_Black_RGB_REL_Arabic.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0014_decam.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0019_boy2022-logo_0017_logo_0000s_0012_gh_logo1.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0017_boy2022-logo_0022_logo_0000s_0019_10270314_385016148315984_5518205311371855319_n.png') }}"
                        alt="">
                </div>
                <div class="jury-images">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0020_boy2022-logo_0016_logos.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0021_boy2022-logo_0015_IMG_1001.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0007_new2_0002_Layer-5-copy.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0022_boy2022-logo_0012_original.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0004_new2_0005_Layer-4.png') }}"
                        alt="">
                </div>
                <div class="jury-images">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0005_new2_0004_Layer-6.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0013_new_0000_Layer-2.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0009_new2_0000_images.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0024_boy2022-logo_0005_visual_logo.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/square.png') }}" alt="">

                </div>
                <div class="jury-images">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0025_boy2022-logo_0004_Layer-0.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0026_boy2022-logo_0003_Sulalat-Logo-2021.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0008_new2_0001_download-1.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0027_boy2022-logo_0000_zephyr-file-2-rgb-scaled.png') }}"
                        alt="">
                    <img src="{{ asset('public/app-assets/images/international-jury/2023_0010_new_0003_Layer-2-copy-3.png') }}"
                        alt="">
                </div>

            </div>
        </div>

        <div class="container-fluid ">
            <div class="row row-cols-1 row-cols-md-3 g-4 date-country">
                <div class="icons-tab">
                    <a href="https://www.facebook.com/qimacoffee"><i href="" class="fa fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/qimacoffee/"> <i href=""
                            class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCcgmMB11TkfAsGO1uiHuKnQ"><i href=""
                            class="fa fa-youtube-play"></i>
                    </a>


                </div>
                <div class="col card-display-3">
                    <div class="card bg-none text-color h-100" style="text-transform:uppercase;">
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


    </div>
    <script>
        const targetDate = new Date('2023-08-08T14:00').getTime();

        const timer = setInterval(function() {

            const now = "{{$currentTime}}";

            const timeRemaining = targetDate - now;

            const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            document.getElementById('timer').innerHTML =
                `${days.toString().padStart(2, '0')}:${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

            if (timeRemaining <= 0) {
                clearInterval(timer);
                document.getElementById('timer').innerHTML = '00:00:00:00';
                document.getElementById('join-the-auction').style.display = "block";
                // document.getElementById('register-for-auction').style.display = "none";
            }
        }, 1000);
    </script>
</body>

</html>
