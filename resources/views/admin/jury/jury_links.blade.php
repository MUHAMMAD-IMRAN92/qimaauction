<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Review</title>
    <link rel="apple-touch-icon" href="{{ asset('public/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/app-assets/images/ico/logo_new.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/authentication.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<!-- END: Head-->
<!-- BEGIN: Body-->
<style>
    .nav-item.active{
        background-color: white !important;
    }
    /*nav css */
    .tab {overflow: hidden; border: 1px solid #ccc; 
background-color: #f1f1f1;}

.tabcontent {display: none; padding: 6px 12px; border: 1px solid #ccc;
    border-top: none;}
    
.tab button {background-color: inherit; float: left; border: none;
    outline: none; cursor: pointer; padding: 14px 16px; 
    transition: 0.3s;}
    
.tab button:hover {background-color: #ddd;}

.tab .active {background-color: #ccc;}

.tabcontent {display: none; padding: 6px 12px;

border: 1px solid #ccc; border-top: none;}

table {font-family: arial, sans-serif; border-collapse: collapse;
    width: 100%;}

td, th {border: 1px solid #dddddd; padding: 8px; 
    text-align: center;}

/*Change color to gray*/
tr:nth-child(even) {
    background-color: #dddddd;}

.actived a{color:green}
.actived a:hover{ font-weight: bold}

.deactivated a{color:red}
.deactivated a:hover{ font-weight: bold}

.available {color:green; }
.disable{ color: red; font-weight: bold}
.intraining{color: blue; font-weight: bold}
.vacation{ font-weight: bold}

    /*nav css*/
</style>
<body
    class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    {{-- <div><iframe src="https://giphy.com/embed/xT9IgMgdur6larNA1a" width="100%" height="100%" style="position:absolute"
            frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div> --}}

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- maintenance -->
                <section class="row flexbox-container" >
                    <div class="col-xl-7 col-md-8 col-12 d-flex justify-content-center">
                        <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
                            <div class="card-content">
                                <div class="card-header">
                                    @if (session('success'))
                                    <div class="col-md-12 alert alert-success">
                                        {{ session('success') }}
                                        </div>
                                    @endif
                                    @if(count($samples) > 0)
                                    <h5 class="card-title">Dear <b>{{$juryName}}</b>, you have the following pending review forms. Please give your reviews</h5>
                                     @else
                                     <h1 class="card-title" style="margin-top: -25%">Dear <b>{{$juryName}}</b>, you have no pending review</h1>
                                    @endif
                                </div>
                                @if(count($samples) > 0)
                                <div class="card-body mt-5">
                                    <div class="table-responsive">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                           {{-- @foreach ($samples as $sample )
                                           <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                               Table.{{$sample->tables}}.'-'{{$sample->total}}.Samples
                                            </button>
                                          </li>
                                           @endforeach --}}
                                            {{-- <li class="nav-item" role="presentation">
                                              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                                            </li> --}}
                                          </ul>
                                          {{-- <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                                          </div> --}}
                                        {{-- <table class="table table-bordered mb-0"
                                            style="background-color: rgb(255, 255, 255)">
                                            <thead class="hide">
                                                <tr>
                                                    <th>Sr</th>
                                                     <th>Tables</th>
                                                     <th>No of Samples</th>
                                                     <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($samples as $sample)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ 'Tabel-'.$sample->tables }}</td>
                                                        <td><a href="{{route('sampletable',['juryId'=>$juryId,'table'=>$sample->tables ])}}">{{ $sample->total }}</a></td>
                                                        <td> <a href="{{route('give_review',['juryId'=>$juryId,'table'=>$sample->tables ])}}">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>
                                                        </td>
                                                    </tr>
                                                @endforeach 
                                            </tbody>
                                        </table> --}}
                                        <!--Nav-->
                                        <div class="container w3-animate-opacity">
                                            <div class="tab">
                                                {{-- <button class="tablinks" onclick="openCity(event, 'Servers')">Servers List</button>
                                                <button class="tablinks" onclick="openCity(event, 'Fruits')">Fruits Price</button>
                                                <button class="tablinks" onclick="openCity(event, 'Workers')">Workers List</button> --}}
                                                @foreach ($samples as $sample)
                                                <button class="tablinks" id="{{$sample->tables}}"  onclick='javascript:sampleData({{$sample->tables}})'>Table-{{$sample->tables}}</button>
                                                @endforeach
                                           </div>
                                        {{-- <div id="Servers" class="tabcontent">
                                          check 1
                                        </div>
                                        
                                        <div id="Fruits" class="tabcontent w3-animate-opacity">
                                         check 2
                                        </div>
                                        
                                        <div id="Workers" class="tabcontent w3-animate-opacity">
                                          check 3
                                        </div> --}}
                                        </div>
                                        <!--Nav-->
                                        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                            <a class="navbar-brand" href="#"><b>Samples Table</b></a>
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                              <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="collapse navbar-collapse" id="navbarNav">
                                              <ul class="navbar-nav">
                                               
                                                @foreach ($samples as $sample)
                                                <div class="submit-btn">

                                                      <li class="nav-item">
                                                        <a class="nav-link tableData" id="{{$sample->tables}}"  onclick='javascript:sampleData({{$sample->tables}})'>Table-{{$sample->tables}}</a>
                                                      </li>
                                                </div>
                                                @endforeach
                                              </ul>
                                            </div>
                                          
                                          </nav> --}}
                                          <div class="content_data mt-5">

                                          </div>
                                          
                                    </div>
                                </div>
                                @endif
                              
                            </div>
                        </div>
                    </div>
                </section>
                <!-- maintenance end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
  

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('public/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('public/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('public/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('public/app-assets/js/scripts/components.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- END: Theme JS-->
    <script  type='text/javascript'>
        var juryId = {{$juryId}};
        var table ={{$firstsample->tables}};
        sampleData(table);
        // $(function() {
           function  sampleData(table) {
                    jQuery.ajax({
                                type:'POST',
                                url:`{{route('sampletable')}}`,
                                data:{
                                    table:table,
                                    juryId:juryId,
                                    _token: "{{ csrf_token() }}"
                                },
                                success: function( data ) {
                                    // jQuery('#'+table+'').addClass('bg-white');
                                    // console.log(data.html);
                                    jQuery('.content_data').html(data.html);
                                }
                            });  
                       };
        // });
         </script>
         {{-- <script>
             function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";}
        
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "");}

document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += "active";}
         </script> --}}

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
