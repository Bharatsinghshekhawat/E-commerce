<!-- header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Shop the latest trends in fashion at Seema Collection. From blazers to dresses, find your perfect style.">
    <meta name="keywords" content="fashion, clothing, blazers, dresses, Seema Collection">
    <meta property="og:title" content="Seema Collection">
<meta property="og:description" content="Shop the latest trends in fashion at Seema Collection.">
<meta property="og:image" content="link_to_image.jpg">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Poppins:wght@300;400&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <script src="js.js"></script>
    <title>Seema Collection</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"> <img src="logo.png" width="80" height="70" alt=""> </a>
            <a class="navbar-brand" href="index.php">Seema Collection</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contacts</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <div class="dropdown-menu p-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6>Categories</h6>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="blazer.php">Blazers</a></li>
                                        <li><a class="dropdown-item" href="dresses.php">Dresses</a></li>
                                        <li><a class="dropdown-item" href="jumpsuits.php">Jumpsuits</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <form class="d-flex" role="search" action="search.php" method="GET">
    <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>

                <!-- Cart Icon -->
                <a href="cart.php" id="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart-count">0</span>
                </a>
            </div>
        </div>
    </nav>
</body>
