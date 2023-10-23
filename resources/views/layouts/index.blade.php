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
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@300;400;500;700&display=swap') }}"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/dist/css/custom.css') }}">
</head>

<body>
    <h1>Hello, world!</h1>

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
    </div>
    <div class="container col-lg-6 hero-title ">
        <div class="row justify-content-start sub-title">
            <div class="d-flex flex-column">
                <div class="p-2 bg-primary text-white">28 Million Community</div>
                <div class="p-2 bg-primary text-white">Lets work with us</div>
                <div class="p-2 bg-primary text-white">
                    Flex item 3
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
                <h1>layout2</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis sapiente exercitationem eaque animi qui ut! Nulla quasi, dolorum est assumenda modi eum. Quisquam ad voluptatibus voluptatum repellat enim modi quo a porro facere blanditiis qui repellendus dolor beatae ipsa quam laborum deserunt adipisci, cupiditate voluptate numquam vel. Dolor incidunt distinctio dolorum laborum! Repellat eligendi laboriosam sit at 
                    cupiditate accusantium, rerum debitis distinctio vitae ullam deserunt quia nostrum quae 
                    nemo quidem, hic inventore, fugiat deleniti ex suscipit reiciendis saepe. Omnis voluptatum 
                    quod adipisci odit. Similique in cupiditate ex odit? Beatae deserunt voluptatibus, tenetur 
                    minima porro optio architecto! Harum ea inventore iure. Explicabo similique mollitia libero veritatis, nobis expedita, autem reiciendis veniam excepturi nesciunt quis qui, tempore praesentium ab provident dicta minima voluptas magni eaque dignissimos? Nam quam corrupti quos ducimus pariatur officia veritatis numquam aperiam rem suscipit dolore, tenetur ad sunt!
                </p>
                <div class="col-lg-6 p-2 bg-primary text-white" style="margin-top: 100px;">Warm Regrads</div>
                <div class="col-lg-6 p-2 bg-primary text-white">United Creative</div>
            </div>
            </div>
        </div>
    </div>
    {{-- end Content-1 --}}
    
    <div class="container mt-4">
    </div>
    {{-- end Fluid full --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
