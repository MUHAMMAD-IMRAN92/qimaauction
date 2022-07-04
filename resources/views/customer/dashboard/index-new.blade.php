<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best of Yemen Auction 2022</title>
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">

    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="icon" type="image/jpeg" href="{{ asset('public/images/favicon.jpeg') }}">

    <!-- Fonts Start  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;1,300&display=swap"
        rel="stylesheet">

    <!-- Fonts End      -->
</head>
<style>
    .style-td-1 {
        font-size: 22px;
        color: #232B38;
        font-weight: 700;
        border-bottom: 1px solid black;
        font-family: 'Montserrat';
        padding:10px;
    }
    .style-td-2 {
        font-weight: 600;
        color: #E78460;
        font-size: 47px;
        font-family: 'Montserrat';
        border-bottom: 1px solid black;
        padding:10px;
    }
    .style-td-3 {
        font-family: 'Montserrat';
        line-height: 25px;
        /* display: flex; */
        align-items: #232B37;
        font-weight: 700;
        font-size: 15px;
        color: #232B38;
        padding: 10px;
        border-bottom: 1px solid black;
    }
    .style-td-4 {
        font-family: 'Montserrat';
        font-weight: 600;
        color: #232B38;
        font-size: 22px;
        padding:10px;
        border-bottom: 1px solid black;
    }
    .style-td-5 {
        font-family: 'Montserrat';
        line-height: 20px;
        color: #232B38;
        font-size: 20px;
        border-bottom: 1px solid black;
        font-weight: 600;
        padding:10px;
    }
    .style-td-6 {
        font-family: 'Montserrat';
        line-height: 39px;
        color: #232B38;
        padding:10px;
        font-size: 24px;
        border-bottom: 1px solid black;
        font-weight: 700;
    }
    .style-td-6 button {
        font-size: 20px;
        background: black;
        color: white;
        padding: 3px;
        border-bottom: 1px solid black;
    }
    #winc {
        text-align: center;
        color: #232B38;
        margin-top: 30px;
        margin-bottom: 30px;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 64px;
        line-height: 78px;
        color: #232B38;
    }
    table {
        margin-top: 60px;
        margin-bottom: 100px;
    }
    .rank {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 62px;
        line-height: 80px;
        border-bottom: 1px solid black;
        color: #E78460;
        padding: 10px;
    }
    tr th {
        font-weight: 400;
    }
    .imgh2 {
        text-align: center;
        margin-top: 50px;
    }
    .imgh2 h2 {
        margin-top: 10px;
    }
    .img-size img {
      width: -webkit-fill-available;
    }
    .button {
        text-align: center;
        margin-top: 20px;
        margin-bottom: 50px;
        margin-left: 10px;
        padding: 10px;
    }
    .button button {
        background-color: black;
        color: white;
        padding: 8px;
        border-radius: 5px;
    }
    .button button a {
        color: white;
        text-decoration: none;

    }
    .vl {
        border-right: 1px solid black;
        height: 100px;
        display: flex;
        text-align: justify;
        align-items: center;
        padding: 10px;
    }
    @media all and (max-width : 1050px) {
        .table-row {
            font-size: 10px;
        }
        #winc {
            font-size: 54px;
        }
        .style-td-1 {
            font-size: 15px;

        }
        .rank {
            font-size: 30px;

        }
        .style-td-2 {
            font-size: 26px;

        }
        .style-td-3 {
            font-size: 11px;
            line-height: normal;
        }
        .style-td-4 {
            font-size: 15px;
        }
        .style-td-5 {

            font-size: 15px;
        }
        .style-td-6 {
            font-size: 20px;

        }
        .button button {
            font-size: 12px;

        }
        .button button h5 {
            font-size: 20px;
        }
    }
    @media all and (max-width : 770px) {
        .table-row {
            font-size: 10px;
        }

        .imgh2 img {
            width: 100px;
        }

        #winc {
            font-size: 44px;
        }
        .style-td-1 {

            font-size: 8px;

        }

        .rank {
            font-size: 16px;

        }

        .style-td-2 {
            font-size: 16px;

        }
        .style-td-3 {
            font-size: 8px;

        }

        .style-td-4 {
            font-size: 9px;

        }

        .style-td-5 {

            font-size: 9px;

        }

        .style-td-6 {
            font-size: 13px;

        }

    }

    @media all and (max-width : 600px) {
        .button {
            padding: 0px;
        }

        #winc {
            font-size: 34px;
        }

        .justify {
            justify-content: flex-end;
        }

        .table-row {
            font-size: 7px;
        }

        .table-row .genetics {
            display: none;

        }

        .table-row .process {
            display: none;
        }

        .style-td-5 {
            display: none;
        }

        .style-td-1 {
            padding: 0px font-size:6px;


        }

        .rank {
            font-size: 10px;
            padding: 0px;

        }

        .style-td-2 {
            font-size: 10px;
            padding: 0px;
        }

        .style-td-3 {
            font-size: 8px;
            padding: 0px;

        }

        .style-td-4 {
            font-size: 7px;
            padding: 0px;

        }

        .style-td-5 {

            font-size: 7px;
            padding: 0px;

        }

        .style-td-6 {
            display: none;


        }

        .button button {
            font-size: 8px;
        }
    }

    @media all and (max-width : 500px) {
        .button button {
            font-size: 3px;
        }
    }
</style>

<body>
    <div class="container-fluid container-all p-0">
        <div style="position: relative;">
            <div class="overlays"></div>

            <video autoplay loop muted playsinline src="{{ asset('public/videos/boy - teaser5 - clean.mp4.mp4') }}"
                style="width: 100%; height: 100vh; object-fit: cover;">
            </video>
            <div class="land-overlay"
                style="position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;">
                <div style="position: relative; text-align: center;display: table;width: 100%;height: 100vh;">
                    <div style="display: table-cell;vertical-align: middle;">
                        <div class="main-img-logo my-3">
                            <img style="width: 270px;"
                                src="{{ asset('public/images/LOGO_0002_Vector-Smart-Object 1.png') }}" alt="">
                        </div>
                        <div class="video-text-1 my-3">
                            <span class="real-timer"></span>
                        </div>
                        <div class="font-fam video-text-2" style="color: white;">
                            <p style="">AUGUST 9<sup>th</sup></p>

                        </div>
                        <div class="my-3 banner-btn">
                            <button type="button" style="border-color:#fff !important;background-color: unset;"
                                class="btn btn-primary banner-btns mb-1"
                                OnClick=" location.href='https://allianceforcoffeeexcellence.org/product/best-yemen-pca-sample-set-2022/' ">Purchase
                                Sample Set</button>
                            <button type="button" style="border-color:#fff !important;background-color: unset;"
                                class="btn btn-primary banner-btns mb-1"
                                OnClick=" location.href='https://allianceforcoffeeexcellence.org/product/yemen-pca-auction-registration-2022/' ">Register
                                for Auction</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="overlay land-overlay">


            <div class="video-text-1">
                <span class="real-timer"></span>
            </div>
            <div class="video-text-2">
                <p>AUGUST 9<sup>th</sup><br>

                </p>

            </div>
        </div> -->
    </div>
    <section id="backgroung-img-section-2">
        <div class="container-fluid" style="margin-top: -8px;">
            <div class="row" style="padding-top:40px;padding-bottom:40px">
                <!-- <div class="col-lg-12 text-center pt-4 pb-3">
                    <a href="https://allianceforcoffeeexcellence.org/product/best-yemen-pca-sample-set-2022/" type="button" class="btn btn-outline-light">BUY SAMPLE SET</a>
                </div> -->
                <div class="col-lg-12 section-2 text-center pt-3 pb-3">
                    <img src="{{ asset('public/images/LOGO_0001_Vector-Smart-Object 1.png') }}" alt="">
                </div>
                <div class="col-lg-8 section-2-text pt-3 pb-3" style="margin:auto">
                    <p class="text-center section-2-custom-text">
                        This year’s instalment of the successful auction series will be centred around the theme of
                        “Catalyzing peace and prosperity”, to highlight and celebrate Yemeni coffee’s role in promoting
                        peace and development efforts in Yemen.
                    </p>
                </div>
                <div class="col-lg-12 text-center pt-2 section-2-logos">
                    <!-- <div class="row"> -->
                    <!-- <div class="col-lg-12 text-center"> -->
                    <img class="mr-2" src="{{ asset('public/images/LOGO_0000_Vector-Smart-Object 1.png') }}"
                        alt="">
                    <img class="ml-2" src="{{ asset('public/images/LOGO_0005_Vector-Smart-Object 1.png') }}"
                        alt="">
                    <!-- </div> -->
                    <!-- </div> -->
                </div>
                <div class="col-lg-12 text-center pt-3 section-2-logos">
                    <img src="{{ asset('public/images/LOGO_0004_Vector-Smart-Object 1.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row justify">
                <div class="col-12">
                    <h2 id="winc">WINNING COFFES</h2>
                </div>


                <div class="row">
                    <div class="col-md-12 pad">

                        <table style="width:100%">
                            <tr class="table-row">
                                <th style="border-bottom:1px solid black;">RANK</th>
                                <th style="border-bottom:1px solid black;">LOT NAME AND CODE</th>
                                <th style="border-bottom:1px solid black;">JURY SCORE</th>
                                <th style="border-bottom:1px solid black;">REGION & ALTITUE</th>
                                <th style="border-bottom:1px solid black;">LOT SIZE</th>
                                <th style="border-bottom:1px solid black;" class="process">PROCESS</th>
                                <th style="border-bottom:1px solid black;" class="genetics">GENETICS</th>
                                <th></th>

                            </tr>
                            <tr>
                                <td class="rank">
                                    <div class="vl">#1</div>
                                </td>

                                <td class="style-td-1">
                                    <div class="vl">ALISUBAIH 7189</div>
                                </td>

                                <td class="style-td-2">
                                    <div class="vl">90.1</div>
                                </td>

                                <td class="style-td-3">
                                    <div class="vl">BAITALALHAYMA KHARIJIYASANA
                                        2300MASL</div>
                                </td>

                                <td class="style-td-4">
                                    <div class="vl">163lbs</div>
                                </td>

                                <td class="style-td-5">
                                    <div class="vl">SLOWDRIED</div>
                                </td>

                                <td class="style-td-6">
                                    YEMENIA
                                </td>

                                <td class="button"><button><a href="{{url ('/product/7189')}}">MORE INFORMATION</a></button></td>




                            </tr>
                            <tr>
                                <td class="rank">
                                    <div class="vl">#2</div>
                                </td>
                                <td class=style-td-1>
                                    <div class="vl">AKRAM DARWAISH 7406</div>
                                </td>
                                <td class="style-td-2">
                                    <div class="vl">90</div>
                                </td>
                                <td class="style-td-3">
                                    <div class="vl">QABALALQAFR
                                        IBB1800-2000MASL</div>
                                </td>
                                <td class="style-td-4">
                                    <div class="vl">74lbs</div>
                                </td>
                                <td class="style-td-5">
                                    <div class="vl">NATURAL</div>
                                </td>
                                <td class="style-td-6">SL-34</td>
                                <td class="button"> <button><a href="{{url ('/product/7189')}}">MORE INFORMATION</a></button></td>

                            </tr>
                            <tr>
                                <td class="rank">
                                    <div class="vl">#3</div>
                                </td>
                                <td class="style-td-1">
                                    <div class="vl">BAITALALXII
                                        8595</div>
                                </td>
                                <td class="style-td-2 ";>
                                    <div class="vl " style="
    color: #232B38;
">89.6</div>
                                </td>
                                <td class="style-td-3">
                                    <div class="vl">BAITALALHAYMA KHARIJIYASANA
                                        2300MASL</div>
                                </td>
                                <td class="style-td-4">
                                    <div class="vl">200lbs</div>
                                </td>
                                <td style="
                                        COLOR: #E78460;
                                    " class="style-td-5">
                                    <div class="vl" s>ALCHEMY</div>
                                </td>
                                <td class="style-td-6">YEMENIA

                                </td>
                                <td class="button"> <button><a href="{{url ('/product/7189')}}">MORE INFORMATION</a></button></td>
                            </tr>
                            <tr>
                                <td class="rank">
                                    <div class="vl">#4</div>
                                </td>
                                <td class="style-td-1">
                                    <div class="vl">ALISUBAIH
                                        7189</div>
                                </td>
                                <td class="style-td-2">
                                    <div class="vl" style="
    color: #232B38;
">89.2</div>
                                </td>
                                <td class="style-td-3">
                                    <div class="vl">BAITALALHAYMA KHARIJIYASANA
                                        2300MASL</div>
                                </td>
                                <td class="style-td-4">
                                    <div class="vl">163lbs</div>
                                </td>
                                <td class="style-td-5">
                                    <div class="vl">SLOWDRIED</div>
                                </td>
                                <td class="style-td-6">YEMENIA
                                </td>
                                <td class="button"> <button><a href="{{url ('/product/7189')}}">MORE INFORMATION</a></button></td>
                            </tr>

                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-3">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-12 section-3-heading">
                    <span>
                        THE PLEDGE
                    </span>

                </div>
                <div class="col-lg-12 section-3-text">
                    <p class="section-3-custom-text-one">
                        In line with this year’s theme Best of Yemen will be donating 10% of auction proceeds to the
                        Qima Foundation to fund an upcoming development project in one of Yemen’s most conflict stricken
                        regions.
                    </p>
                    <p class="section-3-custom-text-one border-bottom-custom">More information coming soon.</p>

                    <p class="section-3-custom-text">
                        The Qima Foundation was established in 2018 as a Yemen and UK registered charitable development
                        organisation focusing on coffee growing rural communities. The foundation’s activities and
                        projects are centred around three main pillars; Sustainable Agriculture, Gender Justice, and
                        Education for all. The foundation has led numerous development and social projects in recent
                        years including establishing genetically verified nurseries, seedling distribution, Technical
                        Assistance training to farmers, irrigation projects for farming communities, and educational
                        scholarships for vulnerable children.
                    </p>
                </div>
                <div class="col-lg-12 section-3-img text-center">
                    <img src="{{ asset('public/images/foundation 1.png') }}" alt="">
                </div>
                <div class="col-lg-12 pb-4 text-center">
                    <a type="button" class="btn btn-outline-dark" href="https://qimafoundation.org/">FIND OUT
                        MORE</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 imgh2">
                    <img src="././././public/images/bestofyemen.png" alt="">
                    <h2>INTERNATIONAL JURY</h2>
                </div>
                <div class="row">
                    <div class="col-2  img-size">
                        <img src="././././public/images/1.png" alt="">
                    </div>
                    <div class="col-2 img-size"> <img src="././././public/images/2.png" alt="" width:60>
                    </div>
                    <div class="col-2 img-size"> <img src="././././public/images/3.png" alt=""></div>
                    <div class="col-2 img-size"> <img src="././././public/images/4.png" alt=""></div>
                    <div class="col-2 img-size"> <img src="././././public/images/5.png" alt=""></div>
                    <div class="col-2 img-size"> <img src="././././public/images/6.png" alt=""></div>

                </div>
                <div class="row">
                    <div class="col-2 img-size">
                        <img src="././././public/images/7.png" alt="">
                    </div>
                    <div class="col-2 img-size"> <img src="././././public/images/8.png" alt="" width:60>
                    </div>
                    <div class="col-2 img-size"> <img src="././././public/images/9.png" alt=""></div>
                    <div class="col-2 img-size"> <img src="././././public/images/10.png" alt=""></div>
                    <div class="col-2 img-size"> <img src="././././public/images/11.png" alt=""></div>
                    <div class="col-2 img-size"> <img src="././././public/images/13.png" alt=""></div>

                </div>
                <div class="row">
                    <div class="col-2 img-size">
                        <img src="././././public/images/14.png" alt="">
                    </div>
                    <div class="col-2 img-size"> <img src="././././public/images/15.png" alt="" width:60>
                    </div>
                    <div class="col-2 img-size"> <img src="././././public/images/16.png" alt=""></div>
                    <div class="col-2 img-size"> <img src="././././public/images/17.png" alt=""></div>
                    <div class="col-2 img-size"> <img src="././././public/images/18.png" alt=""></div>
                    <div class="col-2 img-size"> <img src="././././public/images/19.png" alt=""></div>

                </div>
                <div class="row">
                    <div class="col-2 img-size">
                        <img src="././././public/images/20.png" alt="">
                    </div>
                    <div class="col-2 img-size"> <img src="././././public/images/21.png" alt="" width:60>
                    </div>
                    <div class="col-2 img-size"> <img src="././././public/images/22.png" alt=""></div>
                    <div class="col-2 img-size"> <img src="././././public/images/23.png" alt=""></div>
                    <div class="col-2 img-size"> <img src="././././public/images/24.png" alt=""></div>
                    <div class="col-2 img-size"> <img src="././././public/images/25.png" alt=""></div>

                </div>
                <div class="row">
                    <div class="col-2 img-size">
                        <img src="././././public/images/26.png" alt="">
                    </div>
                    <div class="col-2 img-size"> <img src="././././public/images/27.png" alt="" width:60>
                    </div>
                    <div class="col-2 img-size"> <img src="././././public/images/28.png" alt=""></div>
                    <div class="col-2 img-size"> <img src="././././public/images/29.png" alt=""></div>
                    <div class="col-2 img-size"> <img src="././././public/images/30.png" alt=""></div>
                    <div class="col-2 img-size"> <img src="././././public/images/31.png" alt=""></div>

                </div>

            </div>
            <div class="button">
                <button>
                    <h5 style="
                    font-size: 18px;
                    padding: 4px;
                    margin-bottom: 0px;
                ">VIEW THE WINNING COFFEES</h5>
                </button>
            </div>
        </div>
        </div>
    </section>
    <section class="section-4-heading" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pb-5 pt-5 text-center">
                    <span>best of yemen in the news</span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin: 0 auto;">
                <div class="col-lg-6 col-md-6 card-display">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('public/images/image 19.png') }}"
                            alt="Card image cap">
                        <div class="card-body p-2">
                            <div>
                                <p>21/05/2022</p>
                                <br>
                                <p class="card-bold-text">Global Coffee report</p>
                                <p class="card-headings">
                                    ACE announces Best of Yemen 2022
                                </p>
                            </div>
                            <p class="card-text-font">Qima Coffee and the Alliance for Coffee Excellence (ACE) have
                                announced plans to host the
                                Best of Yemen 2022 auction to celebrate and showcase Yemeni coffee.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 card-display-2">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('public/images/image 20.png') }}"
                            alt="Card image cap">
                        <div class="card-body p-2">
                            <div>
                                <p>21/05/2022</p>
                                <br>
                                <p class="card-bold-text">Global Coffee report</p>
                                <p class="card-headings">
                                    ACE announces Best of Yemen 2022
                                </p>
                            </div>
                            <p class="card-text-font">Qima Coffee and the Alliance for Coffee Excellence (ACE) have
                                announced plans to host the
                                Best of Yemen 2022 auction to celebrate and showcase Yemeni coffee.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="section-4">
        <div class="container py-5">
            <!-- <div class=""> -->
            <div class="row">
                <div class="col-lg-12 pb-2 text-center section-4-img">
                    <img src="{{ asset('public/images/LOGO_0003_Vector-Smart-Object 1.png') }}" alt="">
                </div>
                <div class="col-lg-12 text-center section-4-text-1">
                    <p class="time real-timer m-0"></p>
                    <p class="date">AUGUST 9<sup>th</sup> </p>
                </div>
            </div>


            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">

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

            </div>

            <!-- </div> -->
            <hr class=" text-white border" style="margin-top:40px;">

            <div class="footerz">
                <div class="row text-center">
                    <div class="col-12 my-2">
                        <span class="text-color-size">For the latest news and updates</span>
                    </div>
                    <div class="col-12">
                        <a type="button" class="btn btn-outline-light" id="signup-for-newsletter"
                            href="javascript:void(0)">SIGN UP FOR NEWSLETTER</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal" tabindex="-1" role="dialog" id="newsltterModel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">SIGN UP FOR NEWSLETTER</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" placeholder="Enter Your Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" placeholder="Enter Your Email" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark">Submit</button>
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    var countDownDate = new Date("Aug 9, 2022 00:00:00").getTime();

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
</script>

</html>
