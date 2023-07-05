<!doctype html>
<html lang="en">

<head>
    <title>Hasil Rekomendasi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
      <link rel="stylesheet" href="{{'assets/owl.carousel.min.css' }}" />
    <link rel="stylesheet" href="{{'assets/owl.carousel.css' }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
    <body style="background-color:rgb(161, 239, 247);"> 
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/mboranLogo.png" alt="" width="auto"
                        height="30"></a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="/" aria-current="page">Beranda <span
                                    class="visually-hidden">(current)</span></a>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        
                        </form>
                    </div>
                </div>
            </nav>

        </header>
        
        <div class="container-fluid px-4 py-5" id="custom-cards"
        style="background-image: url('img/navy.jpg'); background-size:100% 100%;">
        <main class="text-light">
        @if (isset($penjual))
                    <h2 class= "text-center ">Hasil Rekomendasi</h2>
                    @if ($penjual->isEmpty());
                        <p>P</p>
                    @else
                    <div class="col-lg-5 mx-auto">
                        <ul>
                            @foreach ($penjual as $namaPenjual)
                                <li>
                                    <strong>Nama Penjual : </strong>{{ $namaPenjual }}
                                </li>
                            @endforeach
                        </ul>
                        <ul>
                            @foreach ($alamat as $alamatPenjual)
                                <li>
                                    <strong>Alamat Penjual : </strong>{{ $alamatPenjual }}
                                </li>
                            @endforeach
                        </ul>
                        <ul>
                            @foreach ($jamBuka as $jamBukaPenjual)
                                <li>
                                    <strong>Jam Buka : </strong> {{ $jamBukaPenjual }}
                                </li>
                            @endforeach
                        </ul>
                        <ul>
                            @foreach ($jamTutup as $jamTutupPenjual)
                                <li>
                                    <strong>Jam Tutup : </strong>{{ $jamTutupPenjual }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                @endif
        </main>
        <div class="row">
            <div class="owl-carousel owl-theme">
            <div class="ml-2">
                <h5 class="mb-3 display-6 lh-1 text-center text-warning">Ibu Lily</h5>
                <img src="img/fotopedagang1.jpg" class="img-fluid rounded-2 " alt="">
            </div>  
            <div class="ml-2">
                <h5 class="mb-3 display-6 lh-1 text-center text-warning">Mbak Ita</h5>
                <img src="img/fotopedagang2.jpg" class="img-fluid rounded-2" alt="">
            </div>  
            <div class="ml-2">
                <h5 class="mb-3 display-6 lh-1 text-center text-warning">Ibu Nur Aisyah</h5>
                <img src="img/fotopedagang3.jpg" class="img-fluid rounded-2" alt="">
            </div>  
            <div class="ml-2">
                <h5 class="mb-3 display-6 lh-1 text-center text-warning">Ibu Suharni</h5>
                <img src="img/fotopedagang4.jpg" class="img-fluid rounded-2" alt="">
            </div>  
            <div class="ml-2">
                <h5 class="mb-3 display-6 lh-1 text-center text-warning">Ibu Latri</h5>
                <img src="img/fotopedagang5.jpg" class="img-fluid rounded-2" alt="">
            </div>  
            <div class="ml-2">
                <h5 class="mb-3 display-6 lh-1 text-center text-warning">Ibu Hj Sumiah</h5>
                <img src="img/fotopedagang6.jpg" class="img-fluid rounded-2" alt="">
            </div>  
        </div>
           
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="{{'assets/owl.carousel.min.js'}}"></script>
<script type="text/javascript" src="{{'assets/owl.carousel.js'}}"></script>
<script>
    $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:5000,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });
    });
</script>
    </body>
    </html>
