<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Welcome to SIP Baku Sayang</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('template/css/font-face.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('template/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('template/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('template/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/wow/animate.css')}} " rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/slick/slick.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('template/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Main CSS-->
    <link href="{{asset('template/css/styles.css')}}" rel="stylesheet" media="all">

    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <div class="logo">
                    <img src="{{asset('template/images/icon/logo_full.png')}}" width="200" height="80" alt="Logo cafe" />
                </div>                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#utama">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link" href="#comment">Komentar</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('login')}}">Login</a></li>
                        {{-- <a class="btn btn-primary btn-xl" href="{{url('login')}}">Login</a> --}}
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center" id="utama">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="text-white font-weight-bold">Selamat Datang di KopiBakusayang</h1>
                            <hr class="divider">
                            <p class="text-white mb-5">'Bukan Lagi Suka, Tapi Udah Sayang'
                            {{-- <br><a class="btn btn-primary btn-xl" href="{{url('login')}}">Login</a></p> --}}
                        </div>
                        <!--slide foto-->
                        <div class="col-md-6">
                            <div class="container">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{asset('template/images/icon/1.jpg')}}">                                            
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('template/images/icon/2.jpg')}}">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('template/images/icon/4.jpg')}}">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset('template/images/icon/makaroni.png')}}">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <div class="nav-icon">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </div>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <div class="nav-icon">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </div>
                                    </a>
                                </div>
                            </div>                     
                        </div>
                    </div>
                </div>                                
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white-50 mt-0">Layanan Kami</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-50 mb-4">Pesan dengan mudah tanpa ngantri. Ayo register dan gunakan layanan kami dengan cepat </p>
                        <a class="btn btn-light btn-xl" href="{{url('register_customer')}}">Ayo Register !!</a>
                    </div>
                </div>
            </div>
        </section> 
        <!-- Contact -->
        <section class="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center" id="comment">
                    <div class="row">
                        <div class="card-header">
                            <h3>
                              Kritik dan Saran
                            </h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{route('store')}}" enctype="multipart/form-data" id="algin-form">
                                @csrf
                                <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="name">Nama</label>
                                        </div>
                                        <div class="col-4">
                                            <input id="nama" name="nama" type="text" class="form-control "/>
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Kritik dan Saran<sup class="text-danger">*</sup></label>
                                    </div>
                                    <div class="col-4">
                                        <textarea class="form-control" name="pesan" placeholder="*Silahkan masukkan kritik dan saran anda" id="floatingTextarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">
                                     Unggah
                                </button>
                            </form>
                        </div>
                        <div class="card-header">
                            <h3>Komentar</h3>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                @foreach ($data as $value)
                                <div class="comment card-menu">
                                    <div class="comment mt-4 text-justify float-left">
                                        <h4>{{$value->nama}}</h4>
                                        <br>
                                        <p>{{$value->pesan}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </section>  
        <section class="page-section bg-primary" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white-50 mt-0">Hubungi Kami</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-50 mb-4">
                            Opr. hours: 11.00-22.00</br>
                            Lokasi : MT haryono sebrang mandau mitshubishi</br>
                            Email  : a.bakus@gmail.com</br>
                            Telephone   : 08521361xxxx</br>
                            Grab/gofood : Kopi bakusayang.</br>
                        </p>
						<div class="about-icons"> 
                            <ul >
                                <a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-facebook"></span></a>
                                <a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-instagram"></span></a>
                                <a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-whatsapp"></span></a>                               
                            </ul>
                        </div>                    
                    </div>
                </div>
            </div>
        </section>     
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center nav-item">Copyright by -</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Slick JS -->    
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            $(document).ready(function(){
                console.log('Im ready');
            });
        </script>
    </body>
</html>