<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KP Wedding</title>
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg px-2 py-5  sticky-top" style="background-color: rgb(0, 0, 0)";>
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarSupportedContent">
                <div class="">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light me-4" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light me-4" href="#main-content">About</a>
                          </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light me-4 dropdown-toggle" href="#serviceCarousel" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Service
                            </a>
                            {{-- <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul> --}}
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light me-4 disabled" aria-disabled="true">Forom</a>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <a class="navbar-brand" href="#">
                        <img src="https://sanggarliza.co.id/apps/assets/images/logo.png" alt="Bootstrap" width="120"
                            height="60">
                    </a>
                </div>
                <div class="">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light me-4" aria-current="page" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light me-4" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light me-4 dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light me-4 disabled" aria-disabled="true">Sign</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://i.pinimg.com/736x/76/52/d3/7652d36b423617a7801a3c161001c78d.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://images.weddingku.com/images/upload/articles/images/gl04frqedyfb42620191603.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://images.harpersbazaar.co.id/unsafe/0x0/smart/media/body_672cf17dc95e48d3ba421ea88d5e4bee.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

{{-- main content--}}
    <div  id="main-content" class="jumbotron text-white text-center " style="background-color: rgb(80, 5, 5); padding: 80px 0;">
      <h1 class="display-4" style="color: rgb(187, 164, 13);">ONE STOP WEDDING SERVICE</h1>
      <p class="lead">Selamat Datang di Website Resmi Sanggar Liza</p>
      <hr class="my-4">
      <p class="text-center">Ingin tata rias dengan konsep yang modern dan kontemporer tanpa meninggalkan pakem tradisional warisan leluhur yang telah turun temurun? Sanggar Liza siap mewujudkannya! Sanggar Liza memiliki tim Profesional Make Up Artist yang bersertifikat dan kaya akan pengalaman puluhan tahun menangani Tata Rias dengan spesialisasi pengantin tradisional. Kini dengan Sanggar Liza "One Stop Wedding Service" kamu tidak perlu ribet cari vendor sana-sini untuk mendapatkan jawaban atas kebutuhan Wedding Service yang kamu inginkan, semua ada di Sanggar Liza! Yuk kepoin info lengkapnya dengan menekan menu Wedding Service untuk masing-masing servicenya!</p>
      <p class="lead" style="color: rgb(187, 164, 13);">Tunggu apa lagi? Segera hubungi kami untuk menikmati layanan "One Stop Wedding Service" untuk hari bahagiamu. Temukan jawaban atas kebutuhan pernikahanmu hanya di Sanggar Liza.</p>
    </div>
    <section class="service_area" style="background-color: black; padding: 80px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h2 class="border-bottom border-danger border-bottom-4 pb-2 mb-4 text-center" style="color: rgb(187, 164, 13); width: fit-content; margin: auto;">Our Services</h2>
                        <p style="color: white;">Explore our wide range of services</p>
                    </div>
                </div>
            </div>

            {{-- card menggunakan carousel--}}
            <div class="row">
                <div class="col-md-12">
                    <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3 mb-4">
                                        <div class="card text-white" style="background-color: rgb(80, 5, 5);">
                                            <img src="https://i.pinimg.com/564x/80/a0/bd/80a0bd304c453196ac08243a1fe3ff35.jpg" class="card-img-top" alt="Service Image">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Service Title 1</h5>
                                                <a href="#" class="btn btn-light">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <div class="card text-white" style="background-color: rgb(80, 5, 5);">
                                            <img src="https://i.pinimg.com/564x/80/a0/bd/80a0bd304c453196ac08243a1fe3ff35.jpg" class="card-img-top" alt="Service Image">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Service Title 1</h5>
                                                <a href="#" class="btn btn-light">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <div class="card text-white" style="background-color: rgb(80, 5, 5);">
                                            <img src="https://i.pinimg.com/564x/80/a0/bd/80a0bd304c453196ac08243a1fe3ff35.jpg" class="card-img-top" alt="Service Image">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Service Title 1</h5>
                                                <a href="#" class="btn btn-light">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <div class="card text-white" style="background-color: rgb(80, 5, 5);">
                                            <img src="https://i.pinimg.com/564x/80/a0/bd/80a0bd304c453196ac08243a1fe3ff35.jpg" class="card-img-top" alt="Service Image">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Service Title 1</h5>
                                                <a href="#" class="btn btn-light">Book Now</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3 mb-4">
                                        <div class="card text-white" style="background-color: rgb(80, 5, 5);">
                                            <img src="https://i.pinimg.com/564x/80/a0/bd/80a0bd304c453196ac08243a1fe3ff35.jpg" class="card-img-top" alt="Service Image">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Service Title 5</h5>
                                                <a href="#" class="btn btn-light">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <div class="card text-white" style="background-color: rgb(80, 5, 5);">
                                            <img src="https://i.pinimg.com/564x/80/a0/bd/80a0bd304c453196ac08243a1fe3ff35.jpg" class="card-img-top" alt="Service Image">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Service Title 5</h5>
                                                <a href="#" class="btn btn-light">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <div class="card text-white" style="background-color: rgb(80, 5, 5);">
                                            <img src="https://i.pinimg.com/564x/80/a0/bd/80a0bd304c453196ac08243a1fe3ff35.jpg" class="card-img-top" alt="Service Image">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Service Title 5</h5>
                                                <a href="#" class="btn btn-light">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                         <div class="col-md-3 mb-4">
                                        <div class="card text-white" style="background-color: rgb(80, 5, 5);">
                                            <img src="https://i.pinimg.com/564x/80/a0/bd/80a0bd304c453196ac08243a1fe3ff35.jpg" class="card-img-top" alt="Service Image">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Service Title 5</h5>
                                                <a href="#" class="btn btn-light">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add more carousel items -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="jumbotron text-white text-center" style="background-color: rgb(74, 84, 92); padding: 80px 0;">
        <h1 class="display-4" style="color: rgb(187, 164, 13);">ONE STOP WEDDING SERVICE</h1>
        <div class="quote-container">
            <p class="quote-text mb-0">"Cinta adalah perjalanan yang panjang, dimulai dengan ciuman, dan diakhiri dengan arahan."</p>
        </div>
    </div>



    <footer class="text-white py-5" style="background-color: rgb(80, 5, 5);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h5>Lala wedding organizer</h5>
                    <img src="https://i.pinimg.com/736x/20/4d/29/204d29d4e2480c483ef6a3fec308974d.jpg" alt="Footer Logo" class="img-fluid " style="width: 100px;">
                </div>
                <div class="col-lg-4">
                    <h5>Subscribe for Our Newsletter</h5>
                    <p>Dapatkan informasi seputar diskon dan penawaran lainnya dari layanan favoritemu</p>
                    <p class="mt-3">Your personal details are safe with us.</p>
                </div>
                <div class="col-lg-4">
                    <h5>Contact Information</h5>
                    <p>Gedung Graha Liza, Jl. Asem Baris Raya No.11A, RT.4 RW.3, Kebon Baru, Tebet, South Jakarta City, Jakarta 12830</p>
                    <p>+6221 2200 8879</p>
                    <p>sanggarliza@gmail.com</p>
                    <p>Senin - Minggu<br>09.30 - 17.00 WIB</p>
                </div>
            </div>
            <hr class="mt-4">
            <div class="row mt-4">
                <div class="col-lg-6">
                    <h5>Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">About Us</a></li>
                        <li><a href="#" class="text-white">Our Story on Instagram</a></li>
                        <li><a href="#" class="text-white">Portfolio</a></li>
                        <li><a href="#" class="text-white">Wedding Blog</a></li>
                        <li><a href="#" class="text-white">Career</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    {{-- Javascript Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
