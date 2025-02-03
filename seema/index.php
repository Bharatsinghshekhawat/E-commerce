<!-- index.php -->
<?php include 'header.php'; ?>
<link rel="stylesheet" href="css.css">
<style>/* Global Styling */
body {
    font-family: 'Poppins', sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
}

/* Container and Row */
.container.shopy {
    padding: 20px;
    max-width: 100%;
}

h3 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 20px;
    color: #333;
}

/* Card Styling */
.card {
    transition: transform 0.3s, box-shadow 0.3s;
    border: none;
    border-radius: 10px;
    overflow: hidden;
}

.card img {
    object-fit: cover;
    border-radius: 10px 10px 0 0;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.card h5 {
    font-size: 1.2rem;
    font-weight: 600;
    color: #333;
}

.card p {
    font-size: 1.1rem;
    color: #888;
    margin: 5px 0;
}

button.add-to-cart {
    font-size: 1rem;
    padding: 8px 12px;
    border-radius: 5px;
    background: linear-gradient(135deg, #1e90ff, #00bfff);
    border: none;
    color: white;
    transition: background-color 0.3s ease;
}

button.add-to-cart:hover {
    background-color: #007acc;
}

/* Responsive Design */
@media (max-width: 768px) {
    .card {
        width: 100%;
        margin-bottom: 20px;
    }
}

@media (max-width: 576px) {
    h3 {
        font-size: 1.5rem;
    }

    .card img {
        height: 200px;
    }

    button.add-to-cart {
        font-size: 0.9rem;
    }
}
</style>
<!-- Add your main content here -->
<div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="slid1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="slid2.jpg" class="d-block w-100" alt="..." loading="lazy">
        </div>
        <div class="carousel-item">
            <img src="slid3.jpg" class="d-block w-100" alt="..." loading="lazy">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Continue adding more content here -->
<hr class="border border-danger border-2 opacity-50">
<h1 class="text-center">SHOP CATEGORIES</h1>
<hr class="border border-primary border-3 opacity-75">
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card h-100">
            <img src="card1.1.jpg" class="card-img-top" alt="...">
            <div class="card-footer">
                <small class="text-body-secondary">Jumpsuits</small>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="card2.2.jpg" class="card-img-top" alt="...">
            <div class="card-footer">
                <small class="text-body-secondary">Blazers</small>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="card3.3.jpg" class="card-img-top">
            <div class="card-footer">
                <small class="text-body-secondary">Dresses</small>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row shop">
        <div class="col-12 col-md-4 mb-6 mb-md-0">
            <div class="card bro">
                <div class="card-body">
                    <img src="cat.png" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bro2">
                <div class="card-body">
                    <h1 class="card-title">FAVOURITE BLOUSES</h1>
                    <p class="card-text">Our new favourite blouses are defined by great all-over patterns and special details.</p>
                    <a href="cart.php" class="btn btn-primary but">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-group shop">
    <div class="card bg1">
        <h3 class="t1">SUNGLASSES</h3>
        <hr>
        <img src="glasses.png" width="300px">
        <div class="card-body">
            <p class="card-text">BUY A BRAND NEW, HANDMADE LEATHER BELT TODAY AND GET A 15% DISCOUNT!</p>
        </div>
    </div>
    <div class="card bg2">
        <h3 class="t1">LEATHER BELT</h3>
        <hr>
        <img src="belt.png" width="280px">
        <div class="card-body">
            <p class="card-text">OUR WHOLE RANGE OF COTTON, WOOLEN AND LEATHER WRISTBANDS</p>
        </div>
    </div>
    <div class="card bg3">
        <h3 class="t1">LEATHER BAGS</h3>
        <hr>
        <img src="bag.png" width="280px">
        <div class="card-body">
            <p class="card-text">ALL OF OUR LEATHER MADE CARD HOLDERS COME NOW AT A GREATLY REDUCED PRICE.</p>
        </div>
    </div>
</div>

<!-- Most Recent Popular Models Section -->
<div class="container text-center shopy">
    <h3>MOST RECENT POPULAR MODELS</h3>
    <div class="row">
        <div class="col mt-2">
            <div class="card" style="width: 16rem;">
                <img src="mo1.jpg" height="250px">
                <div>
                    <h5>BUTTONED SHIRT</h5>
                    <p>$59.00</p>
                    <button class="btn btn-primary add-to-cart" data-name="Buttoned Shirt" data-price="59.00">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col mt-2">
            <div class="card" style="width: 16rem;">
                <img src="mo2.jpg" height="250px">
                <div>
                    <h5>CHECKED TUNIC</h5>
                    <p>$65.00</p>
                    <button class="btn btn-primary add-to-cart" data-name="Checked Tunic" data-price="65.00">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col mt-2">
            <div class="card" style="width: 16rem;">
                <img src="mo3.jpg" height="250px">
                <div>
                    <h5>EMBROIDERED SHIRT</h5>
                    <p>$36.00</p>
                    <button class="btn btn-primary add-to-cart" data-name="Embroidered Shirt" data-price="36.00">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col mt-2">
            <div class="card" style="width: 16rem;">
                <img src="mo4.jpg" height="250px">
                <div>
                    <h5>LEATHER JACKET</h5>
                    <p>$85.00</p>
                    <button class="btn btn-primary add-to-cart" data-name="Leather Jacket" data-price="85.00">Add to Cart</button>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container text-center col2">
    <div class="row">
        <div class="col mt-2">
            <div class="card" style="width: 16rem;">
                <img src="mo5.jpg" height="250px">
                <div>
                    <h5>PUFFER JACKET</h5>
                    <p>$54.00</p>
                    <button class="btn btn-primary add-to-cart" data-name="Puffer Jacket" data-price="54.00">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col mt-2">
            <div class="card" style="width: 16rem;">
                <img src="mo6.jpg" height="250px">
                <div>
                    <h5>PRINTED BLOUSE</h5>
                    <p>$65.00</p>
                    <button class="btn btn-primary add-to-cart" data-name="Printed Blouse" data-price="65.00">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col mt-2">
            <div class="card" style="width: 16rem;">
                <img src="mo7.jpg" height="250px">
                <div>
                    <h5>RIPPED DENIM JACKET</h5>
                    <p>$86.00</p>
                    <button class="btn btn-primary add-to-cart" data-name="Ripped Denim Jacket" data-price="86.00">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="col mt-2">
            <div class="card" style="width: 16rem;">
                <img src="mo8.jpg" height="250px">
                <div>
                    <h5>SUEDE EFFECT DRESS</h5>
                    <p>$25.00</p>
                    <button class="btn btn-primary add-to-cart" data-name="Suede Effect Dress" data-price="25.00">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <div class="card text-bg-dark shopy deal">
        <img src="bg.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
            <br><br><br><br>
            <p class="card-text">DEALY DEALS</p>
            <h1>MODERN CASUAL<br>ESSENTIALS</h1>
            <button type="button" class="btn btn-dark">SHOP NOW</button>
        </div>
    </div>
    
    <h3 class="cen">LATEST FROM BLOG</h3>
    <div class="card-group gap1">
        <div class="card">
            <img src="blog1.jpg" class="card-img-top" alt="...">
            <div class="card-footer">
                <small class="text-body-secondary">
                    <a href="blog.php"><h4>WHEN IN DOUBT, WEAR ROSE PUMPS</h4></a>
                    It’s always a good idea to invest in a good pair of nude pumps. It’s a timeless wardrobe staple just…
                    <br><br>
                    Posted by Admin
                </small>
            </div>
        </div>
        <div class="card">
            <img src="blog2.jpg" class="card-img-top" alt="...">
            <div class="card-footer">
                <small class="text-body-secondary">
                    <a href="blog.php"><h4>HEM YOUR PANTS FOR A SHOE HEIGHT</h4></a>
                    A mistake many people make is wearing pants (or dresses) that are too long or too short for their shoes.…
                    <br><br>
                    Posted by Admin
                </small>
            </div>
        </div>
    </div>
    <script>// Initialize the carousel
let myCarousel = document.querySelector('#carouselExampleRide');
let carousel = new bootstrap.Carousel(myCarousel, {
  interval: 3000,  // Auto-slide every 3 seconds
  ride: 'carousel' // Starts auto-sliding immediately
});

// Stop auto-slide when needed
carousel.pause();

// Start auto-slide again when needed
carousel.cycle();
</script>
<?php include 'footer.php'; ?>
