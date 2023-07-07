<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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

    .background-image-1 {
        background: url("{{ url('/storage/app/public/auction/' . $product->auctionProductImages[0]->image) }}");
        overflow: hidden;
        height: 100vh;
        background-size: 100% 100%;
        background-position: top center;
        background-repeat: no-repeat;


    }

    .background-image-3 {
        background: url("{{ url('/storage/app/public/auction/' . $product->auctionProductImages[1]->image) }}");
        overflow: hidden;
        height: 600px;
        background-size: 100% 100%;
        background-position: top center;
        background-repeat: no-repeat;
    }

    .background-image-2 {
        background: url("{{ url('/storage/app/public/auction/' . $product->auctionProductImages[2]->image) }}");
        overflow: hidden;
        height: 600px;
        background-size: 100% 100%;
        background-position: top center;
        background-repeat: no-repeat;
    }

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
    }

    .banner-text-section h2 {
        font-family: ;
        font-size: 50px;
        font-weight: 800;
        line-height: 61px;
        letter-spacing: 0em;
        text-align: left;
        text-transform: uppercase;
        margin-bottom: 0px;
    }

    .banner-text-section h3 {
        font-family: ;
        font-size: 20px;
        font-weight: 800;
        line-height: 32px;
        letter-spacing: 0.1em;
        text-align: left;
        text-transform: uppercase;
        margin-bottom: 0px;

    }

    .banner-text-section p {
        font-family: ;
        font-size: 11px;
        font-weight: 500;
        line-height: 13px;
        letter-spacing: 0.2em;
        text-align: left;
        text-transform: uppercase;
        margin-bottom: 0px;


    }

    .banner-text-section h4 {
        font-family: ;
        font-size: 18px;
        font-weight: 700;
        line-height: 22px;
        letter-spacing: 0.1em;
        text-align: left;
        text-transform: uppercase;



    }

    .banner-text-section span {
        font-family: ;
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
        top: 80%;
        left: 46%;
        position: absolute;
        width: 501px;
        height: auto;
        background-color: rgba(239, 235, 229, 1);
        padding: 25px
    }

    .banner-text-section-2 p {
        font-family: ;
        font-size: 11px;
        font-weight: 500;
        line-height: 13px;
        letter-spacing: 0.2em;
        text-align: left;
        text-transform: uppercase;
        margin-bottom: 0px;


    }

    .banner-text-section-2 h3 {
        font-family: ;
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
        font-family: ;
        font-size: 11px;
        font-weight: 500;
        line-height: 12px;
        letter-spacing: 0.1em;
        text-align: left;
        text-transform: capitalize
    }

    .banner-text-section-2 h5 {
        font-family: ;
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
    }

    .badge-section img {
        width: 180px;
        height: 180px;
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



    @media screen and (max-width:768px) {
        .banner-text-section img {
            display: block;
        }

        .banner-text-section-2 .banner-image-2 {
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

        .badge-section img {
            width: 120px;
            height: 120px;
        }

        .banner-text-section-2 {
            padding: 0px !important;
        }

        .banner-text-section {
            padding: 0px !important;
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
        padding: 12px;
        border-radius: 20px;
        width: 42px;
        text-align: center;
    }

    .white-anchor {
        text-decoration: none;
        color: #9F9B9B !important;
    }

    .content-wrapper {
        padding: 10px 30px;
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
        font-weight: 500;
        line-height: 13px;
        letter-spacing: 0.2em;
        text-align: center;
        color: black;
        text-transform: uppercase;

    }

    .modal-section-body h2 {

        font-size: 18px;
        font-weight: 700;
        line-height: 22px;
        letter-spacing: 0.1em;
        text-align: center;
        color: rgba(35, 43, 56, 1);
        text-transform: uppercase;


    }

    .modal-section-body p {
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
        font-size: 25px;
    }

    .content-wrapper {
        height: 2500px;
    }
</style>

<body>
    <div class="content-wrapper">
        <div class="conatiner-fluid complete-wrapper">
            <div class="navbar">
                <div class="icons-tab">
                    <a href="https://www.facebook.com/qimacoffee"><i href="" class="fa fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/qimacoffee/"> <i href="" class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCcgmMB11TkfAsGO1uiHuKnQ"><i href=""
                            class="fa fa-youtube-play"></i>
                    </a>


                </div>
                <div class="menu-bar">
                    <p>menu</p>
                    <i class="fa fa-bars"></i>
                </div>


            </div>
            <div class="wrapper-bg-section row ">
                <div class="images-section rellax " data-rellax-desktop-speed="-10">
                    <div>
                        <div class="background-image-1 col-md-12">
                        </div>
                    </div>
                    <div class="mt-4 row">
                        <div class="background-image-3 col-md-6">
                        </div>
                        <div class="background-image-2 col-md-6">
                        </div>
                    </div>
                </div>
                <div class="text-sections" id="fast-div">
                    <div class="banner-text-section ">
                        <h2>{{ $product->rank }}.</h2>
                        <h3>{{ $product->name }}</h3>
                        <p>Jury code : {{ $product->code }}</p>
                        <hr>
                        <img class="mt-2 mb-2" src="{{ url('/storage/app/public/auction/' . $product->auctionProductImages[0]->image) }}" width="100%"
                            alt="">

                        <p>jury score :</p>
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
                        <p>lot size :</p>
                        <h4>{{ $product->size }}LBS</h4>
                        <hr>
                        <div data-bs-toggle="modal" data-bs-target="#location">
                            <p>traceability</p>
                            <p>VILLAGE :{{ $product->village }}</p>
                            <p> REGION : {{ $product->region }} </p>
                            <p>GOVERNORATE : {{ $product->governorate }}</p>
                            <p>ALTITUDE :{{ $product->altitude }}masl</p>
                        </div>
                        <img class="mt-2 mb-2"
                            src="{{ url('/storage/app/public/auction/' . $product->auctionProductImages[1]->image) }}"
                            width="100%" alt="">

                    </div>
                    <div class="banner-text-section-2">
                        <p>flavour profile</p>
                        <h3>{{ $product->cup_profile }}</h3>
                        <hr>
                        <h5>{{ $product->heading_1 }}</h5>
                        <span>{{ $product->description_1 }}</span>
                        <img class="mt-2 mb-2 banner-image-2" src="{{ url('/storage/app/public/auction/' . $product->auctionProductImages[2]->image) }}"
                            width="100%" alt="">
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
        <div class="modal-dialog">
            <div class="modal-content theme-background-color">
                <div class="modal-header modal-head-section">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-section-body">
                    <h4>Genetics</h4>
                    <h2>{{ $product->genetic }}</h2>
                    <p>Coffee farmer Hifthallah Alhaymi is just 20 years of age and owns a farm in Hayma Kharijiya, on
                        the west side of Sana’a City. Hifthallah’s most important crop is coffee, however, alongside
                        this he also grows qat and corn. When he was just a young boy, Hifthallah worked on the farm
                        with his father and brothers, however, a few years ago they left him to work on a farm in Sana’a
                        City, growing vegetables.With a wife and two children, Hifthallah knew it was up to him to take
                        over the day-to-day running of the farm and ensure he grew the best coffee he could.

                        While he was a little nervous at first, his mother stood by him and supported him, helping him
                        to become one of the best farmers in the village. He spends most of his time tending to the
                        coffee trees, and his mother is always there to help him water and pick the cherries. He
                        sometimes also calls in the assistance of local labourers.</p>


                </div>

            </div>
        </div>
    </div>
    <div class="modal fade " id="process" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content theme-background-color">
                <div class="modal-header modal-head-section">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-section-body">
                    <h4>Process</h4>
                    <h2>{{ $product->process }}</h2>
                    <p>Coffee farmer Hifthallah Alhaymi is just 20 years of age and owns a farm in Hayma Kharijiya, on
                        the west side of Sana’a City. Hifthallah’s most important crop is coffee, however, alongside
                        this he also grows qat and corn. When he was just a young boy, Hifthallah worked on the farm
                        with his father and brothers, however, a few years ago they left him to work on a farm in Sana’a
                        City, growing vegetables.With a wife and two children, Hifthallah knew it was up to him to take
                        over the day-to-day running of the farm and ensure he grew the best coffee he could.

                        While he was a little nervous at first, his mother stood by him and supported him, helping him
                        to become one of the best farmers in the village. He spends most of his time tending to the
                        coffee trees, and his mother is always there to help him water and pick the cherries. He
                        sometimes also calls in the assistance of local labourers.</p>


                </div>

            </div>
        </div>
    </div>
    <div class="modal fade " id="location" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content theme-background-color">
                <div class="modal-header modal-head-section">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-section-body">
                    <h4>TRACEABILITY</h4>
                    <h2>{{ $product->governorate . '-' . $product->region . '-' . $product->village }}</h2>
                    <p>Coffee farmer Hifthallah Alhaymi is just 20 years of age and owns a farm in Hayma Kharijiya, on
                        the west side of Sana’a City. Hifthallah’s most important crop is coffee, however, alongside
                        this he also grows qat and corn. When he was just a young boy, Hifthallah worked on the farm
                        with his father and brothers, however, a few years ago they left him to work on a farm in Sana’a
                        City, growing vegetables.With a wife and two children, Hifthallah knew it was up to him to take
                        over the day-to-day running of the farm and ensure he grew the best coffee he could.

                        While he was a little nervous at first, his mother stood by him and supported him, helping him
                        to become one of the best farmers in the village. He spends most of his time tending to the
                        coffee trees, and his mother is always there to help him water and pick the cherries. He
                        sometimes also calls in the assistance of local labourers.</p>


                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script>
        //default JS Setting
        var rellax = new Rellax('.rellax', {
            breakpoints: [576, 768, 1201]
        });
        rellax.refresh();
    </script>
    <script>
        window.addEventListener("scroll", function() {
            var scroll = window.pageYOffset || document.documentElement.scrollTop;
            var heroImg = document.querySelector(".background-image-1");
            heroImg.style.backgroundSize = (100 + scroll / 15) + "%";
            heroImg.style.top = -(scroll / 10) + "%";
        });
        window.addEventListener("scroll", function() {
            var scroll = window.pageYOffset || document.documentElement.scrollTop;
            var heroImg2 = document.querySelector(".background-image-3");
            heroImg2.style.backgroundSize = (30 + scroll / 20) + "%";
            heroImg2.style.top = -(scroll / 10) + "%";
        });
        window.addEventListener("scroll", function() {
            var scroll = window.pageYOffset || document.documentElement.scrollTop;
            var heroImg3 = document.querySelector(".background-image-2");
            heroImg3.style.backgroundSize = (30 + scroll / 20) + "%";
            heroImg3.style.top = -(scroll / 10) + "%";
        });
    </script>

</body>

</html>
