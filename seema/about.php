<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="styles.css">
    <title>About Us</title>
</head>

<body>
    <!-- Include the header -->
    <?php include('header.php'); ?>
    <link rel="stylesheet" href="css.css">

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="display-4">About Us</h1>
                <p class="lead mt-4">Seema Collection - Where Style Meets Quality</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <h2>Our Story</h2>
                <p>
                    Seema Collection began with a simple idea – to provide modern, stylish, and affordable fashion for everyone. Our founder’s vision was to create a brand that embraces individuality and empowers people to express their unique style.
                </p>
                <p>
                    Since our inception, we have expanded our product range to include blazers, dresses, jumpsuits, and much more, with a strong focus on quality, comfort, and innovation.
                </p>
            </div>
            <div class="col-md-6 ">
            <img src="our story.webp" class="img-fluid" alt="Our Story" style="height: 400px; width: 500px; border-radius: 20%;">


            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <img src="our vision.png" class="img-fluid" alt="Our Vision" style="height: 400px; width: 500px; border-radius: 20%;">
            </div>
            <div class="col-md-6">
                <h2>Our Vision</h2>
                <p>
                    Our vision is to lead the fashion industry with creativity and a customer-centric approach. We aim to make Seema Collection a household name, known for premium designs that offer unparalleled value.
                </p>
                <p>
                    We believe that fashion is more than just clothing – it is a way of life. Through our collections, we want to inspire confidence and help our customers create their own identity.
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h2>Our Values</h2>
            </div>
            <div class="col-md-4 text-center mt-3">
                <i class="fas fa-handshake fa-3x"></i>
                <h3 class="mt-3">Integrity</h3>
                <p>We are committed to upholding honesty and transparency in everything we do.</p>
            </div>
            <div class="col-md-4 text-center mt-3">
                <i class="fas fa-users fa-3x"></i>
                <h3 class="mt-3">Community</h3>
                <p>Our community is at the heart of what we do, and we always strive to give back.</p>
            </div>
            <div class="col-md-4 text-center mt-3">
                <i class="fas fa-leaf fa-3x"></i>
                <h3 class="mt-3">Sustainability</h3>
                <p>We believe in creating fashion that is both stylish and sustainable for a better tomorrow.</p>
            </div>
        </div>

        <div class="row mt-5 text-center">
            <div class="col-md-12">
                <h2>Why Shop with Us?</h2>
                <p>With Seema Collection, you are not just shopping for fashion; you are choosing a lifestyle. Here’s why thousands of customers love us:</p>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check-circle"></i> 30-Day Returns Policy</li>
                    <li><i class="fas fa-check-circle"></i> Free Shipping on Orders Over $99</li>
                    <li><i class="fas fa-check-circle"></i> 100% Payment Secure</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Include the footer -->
    <?php include('footer.php'); ?>

</body>

</html>
