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
        background-image: url("{{asset('public/app-assets/images/banner/new-bg.png')}}");
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
        font-family: 'circular';
        font-style: normal;
        font-weight: 400;
        font-size: 80px;
        /* line-height: 98px; */
        margin-top: 0px;
        color: #FFFFFF;
        margin-bottom: 20px;
    }

    .timer-section h3 {
        font-family: 'circular';
        font-style: normal;
        font-weight: 400;
        font-size: 60px;
        /* line-height: 98px; */
        margin-top: 0px;
        color: #FFFFFF;
        margin-bottom: 20px;
    }

    .timer-section button {
        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 35px;
        color: #575555;
        width: 518px;
        padding: 20px;
        font-size: 23px;
        text-transform: uppercase;
        font-weight: 700;
        border-color: white !important;
        border: none;
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
        font-family: 'circular';
        flex-direction: column;
    }

    .auction-time h2 {
        font-family: 'circular';
        font-style: normal;
        font-weight: 700;
        font-size: 30px;
        line-height: 40px;
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

    .footer-qima p {
        font-family: 'circular';
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
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
        margin-top: 25px;
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
</style>

<body>
    <div class="bg-theme-color">
        <div class="landing-page-bg">
            <div class="boy-image">
                <img src="{{asset('public/app-assets/images/banner/bestofyemen.png')}}" alt="">
                <img src="{{asset('public/app-assets/images/banner/midbanner.png')}}" alt="">
            </div>
            <div class="timer-section">
                <h2 id="timer">00:00:00:00</h2>
                <h3>AUGUST 9TH</h3>
                <button>purchase a sample set</button>
            </div>

        </div>
        <div class="container-fluid ">
            <div class="row row-cols-1 row-cols-md-3 g-4 date-country">
                <div class="icons-tab">
                    <i class="fa fa-facebook-f"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-youtube"></i>


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
                        AUGUST 9TH</h2>
                </div>

            </div>
            <hr class="hr">
            <div class="footer-qima">
                <p>best of yemen 2022 results</p>
                <p>qima coffee</p>
                <p>Alliance for coffee excellence</p>
                <p>qima foundation</p>

            </div>
        </div>


    </div>
    <script>
        const targetDate = new Date('August 9, 2023 00:00:00').getTime();

        const timer = setInterval(function() {

            const now = new Date().getTime();


            const timeRemaining = targetDate - now;

            const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            document.getElementById('timer').innerHTML = `${days.toString().padStart(2, '0')}:${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

            if (timeRemaining <= 0) {
                clearInterval(timer);
                document.getElementById('timer').innerHTML = '00:00:00:00';
            }
        }, 1000);
    </script>
</body>

</html>