<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <source>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary " data-bs-theme="dark">
        <div class="container-md">
            <a class="navbar-brand" href="#">
                <img src="BMW_logo_(gray).jpg" style="width: 40px; height: 40px;" />
            </a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Series</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search in BMW" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="card text-bg-secondary ms-3" style="width: 47rem; height: 30px;">
                    <p class="ms-2">Our Products</p>
                </div>
                <div class="container text-center">
                    <div class="row">
                        <div class="col ms-1">
                            <div class="card text-bg-dark mt-3" style="width: 8rem; height: 30px;">
                                <p class="text-center">M Series</p>
                            </div>
                            <div class="card mt-2" style="width: 8rem;">
                                <img src="mserie.png" class="card-img-top rounded"
                                    style="width: 8rem; height: 8rem; object-fit: contain;">
                            </div>
                            <div class="card text-bg-dark mt-4" style="width: 8rem; height: 30px; ">
                                <p class="text-center">Motorcycle</p>
                            </div>
                            <div class="card mt-2" style="width: 8rem;">
                                <img src="motorrad.png" class="card-img-top rounded"
                                    style="width: 8rem; height: 8rem; object-fit: contain;">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-bg-dark mt-3" style="width: 8rem; height: 30px;">
                                <p class="text-center">X Series</p>
                            </div>
                            <div class="card mt-2" style="width: 8rem;">
                                <img src="xseries.png" class="card-img-top rounded"
                                    style="width: 8rem; height: 8rem; object-fit: contain;">
                            </div>
                            <div class="card text-bg-dark mt-4" style="width: 8rem; height: 30px; ">
                                <p class="text-center">Van</p>
                            </div>
                            <div class="card mt-2" style="width: 8rem;">
                                <img src="van.png" class="card-img-top rounded"
                                    style="width: 8rem; height: 8rem; object-fit: contain;">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-bg-dark mt-3" style="width: 8rem; height: 30px;">
                                <p class="text-center">Z Series</p>
                            </div>
                            <div class="card mt-2" style="width: 8rem;">
                                <img src="zseries.png" class="card-img-top rounded"
                                    style="width: 8rem; height: 8rem; object-fit: contain;">
                            </div>
                            <div class="card text-bg-dark mt-4" style="width: 8rem; height: 30px; ">
                                <p class="text-center">Electric Vehicle</p>
                            </div>
                            <div class="card mt-2" style="width: 8rem;">
                                <img src="electric.webp" class="card-img-top rounded"
                                    style="width: 8rem; height: 8rem; object-fit:cover;">
                            </div>
                        </div>
                        <div class="ms-4 mt-3" style="width: 18rem;">
                            <img src="portrait.jpg" class="card-img-top rounded"
                                style="height: 510px; object-fit: cover; width: 100%;">
                        </div>
                        <div class="col">
                            <div class="ms-4" style="width: 18rem;">
                                <img src="BMW_logo_(gray).jpg" class="card-img-top rounded"
                                    style="height: 210px; width: 210px;">
                            </div>
                            <div class="card text-bg-secondary mt-4 ms-4" style="width: 290px; height: 30px;">
                                <p class="ms-2">About BMW</p>
                            </div>
                            <div class="row mt-3">
                                <div class="col-3">
                                    <img src="bmwfac.jpg" class="card-img-top rounded ms-3"
                                        style="height: 80px; width: 80px; object-fit: cover;">
                                </div>
                                <div class="col ms-4">
                                    <p style="text-align: justify;">Bayerische Motoren Werke, is a German manufacturer
                                        of luxury vehicles and
                                        motorcycles headquartered in Munich, Germany.</p>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-3">
                                    <img src="bmwmotor.jpg" class="card-img-top rounded ms-3"
                                        style="height: 80px; width: 80px; object-fit: cover;">
                                </div>
                                <div class="col ms-4">
                                    <p style="text-align: justify;">BMW Motorrad is the motorcycle brand of
                                        German automotive manufacturer, BMW.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ms-3" style="width: 27rem; height: 30px; margin-top: -120px;">
                    <img src="banner.jpg" class="card-img-top rounded"
                        style="width: 27rem; height: 8rem; object-fit: contain;">
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script></script>
</body>

</html>
