<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
    <link
        href="{{ url('https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap') }}"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/dist/css/custom.css') }}">
</head>

<body>

    {{-- navbar --}}
    <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Offcanvas navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}

    {{-- Cover --}}
    <div class="container-fluid d-flex flex-column ">
        <img src="{{ asset('/assets/images/fluid-bg1.jpg') }}" class=" d-flex cover" alt="Responsive image">
        <div class="container col-lg-6 hero-title ">
            <div class="row justify-content-start sub-title">
                <div class="d-flex flex-column">
                    <div class="p-2 bg-primary text-white">
                        <h2>
                            28 Million Community
                        </h2>
                    </div>
                    <div class="p-2 bg-primary text-white">
                        <h3>Lets work with us</h3>
                    </div>
                    <div class="p-2 bg-primary text-white" style="height: 30px">
                    </div>
                    <div class="p-2 bg-primary text-white">
                        Flex item 3
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end Cover --}}

    {{-- Content-1 --}}
    <div class="container-fluid " style="width: 100%; height: 40%; background-color: red">
        <div class="row">
            <div class="d-flex flex-column">
                <div class="col-lg-12 p-4 text-content-1 text-white" style="border:4px solid rgb(255, 255, 255);">
                    <p class="mt-10 Subtitle">Bali United Football Club is an Indonesian professional
                        club based in Gianyar, Bali. Bali United began operations in 2014 and continues to be of the
                        highest tier in the Indonesian football competition, League 1. The club has a vision to grow the
                        football industry in Indonesia through creating an ecosystem consisting of 4Cs namely the Club,
                        Community, Corporation and Country. Staying true to this vision, the football club launched a
                        sports agency under the name United Creative,
                        to always bring the GAME ON beyond its own club.
                    </p>
                    <div class="col-lg-6 p-2 bg-primary text-white body-large" style="margin-top: 40px;">Warm Regrads,
                    </div>
                    <div class="col-lg-6 p-2 bg-primary text-white body-large">United Creative</div>
                </div>
            </div>
        </div>
    </div>
    {{-- end Content-1 --}}

    <div class="container-fluid" style="height: 40px">
        <hr style="border: 2px solid;">
    </div>

    {{-- content 2 --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-4 text-content-1 text-white" style="border:4px solid rgb(255, 255, 255);">
                <div class="p-2 bg-primary text-white">
                    Flex item 3
                </div>
                <div class="p-2 bg-primary text-white">
                    Flex item 3
                </div>
            </div>
            <div class="col-lg-6 p-4">
                <p class="mt-10 Subtitle">Bali United Football Club is an Indonesian professional
                    club based in Gianyar, Bali. Bali United began operations in 2014 and continues to be of the highest
                    tier in the Indonesian football competition, League 1. The club has a vision to grow the football

                </p>
            </div>
        </div>
    </div>

    <div class="container px-4">
        <div class="row gx-3 gy-3" style="flex-wrap: wrap">
            <div class="col-4">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>


        </div>

        <div class="container">
            <hr style="border: 1px solid;">
            <hr style="border: 1px solid;">
        </div>
    </div>
    {{-- end content 2 --}}

    {{-- content 3 --}}
    <div class="container-fluid my-5 p-0">
        <div class="row g-0 text-center">
            <div class="col-lg-12">
                <p class="body-reguler">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi laboriosam quo
                    tempora quibusdam fuga dolore quaerat rem perspiciatis facilis porro.
                </p>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-6 facts-overlay">
                <img src="{{ asset('assets/images/fluid-bg.png') }}" class="cover" alt="Responsive image">
            </div>
            <div class="col-lg-6 px-4">
                <p class="body-reguler">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi laboriosam quo
                    tempora quibusdam fuga dolore quaerat rem perspiciatis facilis porro.
                </p>
            </div>
        </div>
    </div>
    {{-- end content 3 --}}


    <div class="container-fluid" style="height: 40px">
        <hr style="border: 2px solid;">
    </div>

    {{-- content 4 --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-4 text-content-1 text-white" style="border:4px solid rgb(255, 255, 255);">
                <div class="p-2 bg-primary text-white">
                    Services
                </div>
                <div class="p-2 bg-primary text-white">
                    What we can do for you
                </div>
            </div>
            <div class="col-lg-6 p-4">
                <p class="mt-10 Subtitle">Bali United Football Club is an Indonesian professional
                    club based in Gianyar, Bali. Bali United began operations in 2014 and continues to be of the highest
                    tier in the Indonesian football competition, League 1. The club has a vision to grow the football
                </p>
            </div>
        </div>
    </div>

    <div class="container px-4">
        <div class="row gx-3 gy-3" style="flex-wrap: wrap">
            <div class="col-4">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- end content 4 --}}

    <div class="container">
        <hr style="border: 1px solid;">
        <hr style="border: 1px solid;">
    </div>

    {{-- content 5 --}}
    <div class="container-fluid my-5 p-0">
        <div class="row g-0 text-center">
            <div class="col-lg-12">
                <p class="body-reguler">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi laboriosam quo
                    tempora quibusdam fuga dolore quaerat rem perspiciatis facilis porro.
                </p>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-6 facts-overlay">
                <img src="{{ asset('assets/images/fluid-bg.png') }}" class="cover" alt="Responsive image">
            </div>
            <div class="col-lg-6 px-4">
                <p class="body-reguler">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi laboriosam quo
                    tempora quibusdam fuga dolore quaerat rem perspiciatis facilis porro.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="container px-4">
                <div class="row gx-3 gy-3" style="flex-wrap: wrap">
                    <div class="col-4">
                        <div class="p-3 border bg-light">
                            <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover"
                                alt="Responsive image">
                            <div class="row bg-danger">
                                <div class="col-lg-12">bali United Fc</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 border bg-light">
                            <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover"
                                alt="Responsive image">
                            <div class="row bg-danger">
                                <div class="col-lg-12">bali United Fc</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 border bg-light">
                            <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover"
                                alt="Responsive image">
                            <div class="row bg-danger">
                                <div class="col-lg-12">bali United Fc</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end content 5 --}}

    <div class="container-fluid" style="height: 40px">
        <hr style="border: 2px solid;">
    </div>

    {{-- content 6 --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-4 text-content-1 text-white" style="border:4px solid rgb(255, 255, 255);">
                <div class="p-2 bg-primary text-white">
                    Services
                </div>
                <div class="p-2 bg-primary text-white">
                    What we can do for you
                </div>
            </div>
            <div class="col-lg-6 p-4">
                <p class="mt-10 Subtitle">Bali United Football Club is an Indonesian professional
                    club based in Gianyar, Bali. Bali United began operations in 2014 and continues to be of the highest
                    tier in the Indonesian football competition, League 1. The club has a vision to grow the football
                </p>
            </div>
        </div>
    </div>

    <div class="container px-4">
        <div class="row gx-3 gy-3" style="flex-wrap: wrap">
            <div class="col-2">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="p-3 border bg-light">
                    <img src="{{ asset('assets/images/logo-bali-u1.png') }}" class="cover" alt="Responsive image">
                    <div class="row bg-danger">
                        <div class="col-lg-12">bali United Fc</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end content 6 --}}

    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="p-3 border bg-light">
                    <p class="Subtitle cta-title text-center">
                        <span class="cta-title">
                            let's create
                        </span>
                        <span class="cta-end">
                            creative project
                        </span>
                    </p>
                </div>
                <div class=""
                    style="background-color: yellow; position: absolute; weight: 20px; height: 15px; ">

                </div>
            </div>
            <div class="col-12">
                <div class="p-3 border bg-light">
                    <p class="Subtitle cta-title text-center">
                        <span class="cta-title">
                            button
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>




    <!-- Footer -->
    <footer class="text-center text-lg-start bg-white text-muted mt-10">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 text-secondary"></i>Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3 text-secondary"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
