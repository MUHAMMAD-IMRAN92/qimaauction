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

    .hr {
        margin-bottom: 0px;
        border: 1px solid white;
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
        src: url('{{asset("public/app-assets/fonts/Montserrat/Montserrat-Bold.ttf")}}') format('truetype');

    }

    .card-display-3 p {
        font-weight: 600;
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

    .heading-top {
        font-family: 'Montserrat';
        font-size: 23px;
        font-weight: 800;
        line-height: 2rem;
        letter-spacing: 0.3rem;
        border-bottom: 3px solid rgb(244, 243, 243);
        border-top: 3px solid rgb(244, 243, 243);
        padding: 0.7rem 0;
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

    }

    #lname {  text-transform: uppercase;
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

    #cscore {  text-transform: uppercase;
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

    #lsize {  text-transform: uppercase;
        font-family: 'Montserrat';
            font-size: 10px;
            font-weight: 500;
        border-bottom: 3px solid rgb(244, 243, 243);
        display: flex;
        align-items: center;
        justify-content: center;

    }

    #process {  text-transform: uppercase;
        font-family: 'Montserrat';
            font-size: 10px;
            font-weight: 500;
        border-right: 3px solid rgb(244, 243, 243);
        border-left: 3px solid rgb(244, 243, 243);
        border-bottom: 3px solid rgb(244, 243, 243);

    }

    #genetics {  text-transform: uppercase;
        font-family: 'Montserrat';
            font-size: 10px;
            font-weight: 500;
        border-right: 3px solid rgb(244, 243, 243);
        border-bottom: 3px solid rgb(244, 243, 243);
    }

    #traceability {  text-transform: uppercase;
        font-family: 'Montserrat';
            font-size: 10px;
            font-weight: 500;
        border-bottom: 3px solid rgb(244, 243, 243);
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .rank {
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

    .lname {  text-transform: uppercase;
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
        color: #303030;
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
    }

    .traceability-content {
        border: 8px solid transparent;
        font-size: 11px ;
        text-transform: uppercase;
        font-family: 'Montserrat-Medium' ;
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

    .btn-info  {
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

    @media (max-width: 880px) {
        .international-jury-section img{
        width: 90% !important;
    }

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
            border-left: none;
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
            width: 90vw;
            border-left: 3px solid rgb(244, 243, 243);
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



    }

    @media (max-width: 480px) {
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
            width: 90vw;
            border-left: 3px solid rgb(244, 243, 243);
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
            font-size: 0.52rem;
            line-height: 0.9rem;
        }

        .cscore {
            font-size: 20px;
        }

        .lsize {
            font-size: 15px;
            line-height: 1.2rem;

        }

        .lname p {
            font-size: 0.5rem;
        }

        .rank {

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
            font-size: 0.6rem;
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
        #rank{
            font-size: 9px;
        }#lname{
            font-size: 9px;
        }
        #cscore{
            font-size: 9px;
        }
        #lsize{
            font-size: 9px;
        }
        #process{
            font-size: 9px;
        }
        #genetics{
            font-size: 9px;
        }
        #traceability{
            font-size: 9px;
        }
        .international-jury-section h2{
            font-size: 20px !important;
        }
    }
        .wrapper-jury{
            background-color: white;
        
        }
    .international-jury-section {
        text-align: center;
       
       
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
        src: url('{{asset("public/app-assets/fonts/Montserrat/Montserrat-Bold.ttf")}}') format('truetype');

    }
    @font-face {
        font-family: 'Montserrat-Medium';
        src: url('{{asset("public/app-assets/fonts/Montserrat/Montserrat-Medium.ttf")}}') format('truetype');

    }
   
    .international-jury-section img{
        width: 600px;
    }
    .wrapper-top-section{
        padding: 0px 15px;
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
                <button><a href="https://allianceforcoffeeexcellence.org/product/best-of-yemen-sample-set-auction-registration-2023/">purchase a sample set</a></button>
            </div>

        </div>

        <div class="container-fluid table-grid wrapper-top-section">
            <h3 id="w-c">Winnging Coffees</h3>
            <div class="heading-top">
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
            <div class="content">
                <div class="c-1">
                    <div class="rank">01.</div>
                    <div class="lname">
                        <div class="">
                            <h2>Hayma dakhiliya</h2>
                            <p>jury code: 9589</p>
                        </div>
                    </div>
                    <div class="cscore">
                        92.5
                    </div>
                    <div class="lsize">
                        <div class="">
                            <p>163</p>
                            <p>lbs</p>
                        </div>
                    </div>
                </div>
                <div class="c-2">
                    <div class="process">
                        <p>Deep Fermentation</p>
                    </div>
                    <div class="genetics">BOURBON</div>
                    <div class="traceability">
                        <div class="traceability-content">
                            <p class="p">Village:<span>Bani OFair</span> </p>
                            <p class="p">Region: <span>ANS</p>
                            <p class="p">governorate:<span>DHAmar</span> </p>
                            <p class="p">altitude: <span>2000masl</span></p>
                        </div>
                    </div>
                </div>
                <div class="c-3">
                    <button class="btn-info">More information</button>
                </div>
            </div>
            <div class="content">
                <div class="c-1">
                    <div class="rank">02.</div>
                    <div class="lname">
                        <div class="">
                            <h2>yahya al ofairi</h2>
                            <p>jury code: 2345</p>
                        </div>
                    </div>
                    <div class="cscore">
                        91
                    </div>
                    <div class="lsize">
                        <div class="">
                            <p>300</p>
                            <p>lbs</p>
                        </div>
                    </div>
                </div>
                <div class="c-2">
                    <div class="process">
                        <p>natural</p>
                    </div>
                    <div class="genetics">sl34</div>
                    <div class="traceability">
                        <div class="traceability-content">
                            <p class="p">Village:<span> Bait alal</span> </p>
                            <p class="p">Region: <span> hayma khardiya</p>
                            <p class="p">governorate:<span> sanaa</span> </p>
                            <p class="p">altitude: <span> 2350masl</span></p>
                        </div>
                    </div>
                </div>
                <div class="c-3">
                    <button class="btn-info">More information</button>
                </div>
            </div>
            <div class="content">
                <div class="c-1">
                    <div class="rank">03.</div>
                    <div class="lname">
                        <div class="">
                            <h2>hameed subaih</h2>
                            <p>jury code: 2322</p>
                        </div>
                    </div>
                    <div class="cscore">
                        90
                    </div>
                    <div class="lsize">
                        <div class="">
                            <p>45</p>
                            <p>lbs</p>
                        </div>
                    </div>
                </div>
                <div class="c-2">
                    <div class="process">
                        <p>natural</p>
                    </div>
                    <div class="genetics">yemenia</div>
                    <div class="traceability">
                        <div class="traceability-content">
                            <p class="p">Vilage:<span> Bait alal</span> </p>
                            <p class="p">Region: <span> hayman khardiya</p>
                            <p class="p">governorate:<span> sanaa</span> </p>
                            <p class="p">altitude: <span> 2350masl</span></p>
                        </div>
                    </div>
                </div>
                <div class="c-3">
                    <button class="btn-info">More information</button>
                </div>
            </div>
            <!-- <div class="h-3">
                    <div id="button">
                    </div>
                </div> -->
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

            <div class="content">
                <div class="c-1">
                    <div class="rank">01.</div>
                    <div class="lname">
                        <div class="">
                            <h2>Hayma dakhiliya</h2>
                            <p>jury code: 9589</p>
                        </div>
                    </div>
                    <div class="cscore">
                        92.5
                    </div>
                    <div class="lsize">
                        <div class="">
                            <p>163</p>
                            <p>lbs</p>
                        </div>
                    </div>
                </div>
                <div class="c-2">
                    <div class="process">
                        <p>Deep Fermentation</p>
                    </div>
                    <div class="genetics">BOURBON</div>
                    <div class="traceability">
                        <div class="traceability-content">
                            <p class="p">Village:<span> Bani OFair</span> </p>
                            <p class="p">Region: <span> ANS</p>
                            <p class="p">governorate:<span> DHAmar</span> </p>
                            <p class="p">altitude: <span> 2000masl</span></p>
                        </div>
                    </div>
                </div>
                <div class="c-3">
                    <button class="btn-info">More information</button>
                </div>
            </div>
            <div class="content">
                <div class="c-1">
                    <div class="rank">02.</div>
                    <div class="lname">
                        <div class="">
                            <h2>yahya al ofairi</h2>
                            <p>jury code: 2345</p>
                        </div>
                    </div>
                    <div class="cscore">
                        91
                    </div>
                    <div class="lsize">
                        <div class="">
                            <p>300</p>
                            <p>lbs</p>
                        </div>
                    </div>
                </div>
                <div class="c-2">
                    <div class="process">
                        <p>natural</p>
                    </div>
                    <div class="genetics">sl34</div>
                    <div class="traceability">
                        <div class="traceability-content">
                            <p class="p">Village:<span> Bait alal</span> </p>
                            <p class="p">Region: <span> hayma khardiya</p>
                            <p class="p">governorate:<span> sanaa</span> </p>
                            <p class="p">altitude: <span> 2350masl</span></p>
                        </div>
                    </div>
                </div>
                <div class="c-3">
                    <button class="btn-info">More information</button>
                </div>
            </div>
            <div class="content">
                <div class="c-1">
                    <div class="rank">03.</div>
                    <div class="lname">
                        <div class="">
                            <h2>hameed subaih</h2>
                            <p>jury code: 2322</p>
                        </div>
                    </div>
                    <div class="cscore">
                        90
                    </div>
                    <div class="lsize">
                        <div class="">
                            <p>45</p>
                            <p>lbs</p>
                        </div>
                    </div>
                </div>
                <div class="c-2">
                    <div class="process">
                        <p>natural</p>
                    </div>
                    <div class="genetics">yemenia</div>
                    <div class="traceability">
                        <div class="traceability-content">
                            <p class="p">Vilage:<span> Bait alal</span> </p>
                            <p class="p">Region: <span> hayman khardiya</p>
                            <p class="p">governorate:<span> sanaa</span> </p>
                            <p class="p">altitude: <span> 2350masl</span></p>
                        </div>
                    </div>
                </div>
                <div class="c-3">
                    <button class="btn-info">More information</button>
                </div>
            </div>
            </div>
<div class="wrapper-jury">
            <div class="international-jury-section">
                <h2>INTERNATIONAL JURY</h2>
                <img  src="{{ asset('public/images/jury.png') }}" alt="">
            </div>
            </div>
       
        <div class="container-fluid ">
            <div class="row row-cols-1 row-cols-md-3 g-4 date-country">
                <div class="icons-tab">
                    <a href="https://www.facebook.com/qimacoffee"><i href="" class="fa fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/qimacoffee/"> <i href="" class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCcgmMB11TkfAsGO1uiHuKnQ"><i href="" class="fa fa-youtube-play"></i>
                    </a>


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
                <div class="auction-time">
                    <h2>best of yemen 2023 <br>
                        AUGUST 8TH</h2>
                </div>

            </div>
            <hr class="hr">
            <div class="footer-qima">
                <p> <a href="{{ url('/auction/results') }}" class="white-anchor"> best of yemen 2022 results</a></p>
                <p><a href="https://www.qimacoffee.com">qima coffee</a> </p>
                <p><a href="https://allianceforcoffeeexcellence.org/ace-private-collection-auctions/">Alliance for coffee excellence</a></p>
                <p><a href="https://www.qimafoundation.org/">qima foundation</a></p>

            </div>
        </div>


    </div>
    <script>
        const targetDate = new Date('August 8, 2023 00:00:00').getTime();

        const timer = setInterval(function() {

            const now = new Date().getTime();


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
            }
        }, 1000);
    </script>
</body>

</html>