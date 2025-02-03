<?php include 'header.php'; ?>
<link rel="stylesheet" href="css.css">
<style>
    .btn-success {
    background-color: #28a745;
    color: white;
    font-size: 1rem; /* Reduced font size */
    padding: 8px 20px; /* Reduced padding */
    margin-left: 10px;
    border: none;
    /* border-radius: 8px; */
    /* cursor: pointer; */
    transition: background 0.4s ease, transform 0.4s ease;
}

.btn-success:hover {
    background-color: #218838;
    transform: scale(1.05);
}


</style>

<?php
// Fetch product ID from the URL and convert it to an integer
$productID = isset($_GET['id']) ? (int)$_GET['id'] : null;

// Simulated product data (replace with actual database queries)
$products = [
    6 => ['name' => 'Mini Dresses', 'price' => 60, 'manufacturer' => 'Batch process manufacturing', 'style' => 'Classic fashion', 'wash' => 'MACHINE WASH', 'description' => 'Elegant mini dress perfect for any occasion.', 'image' => 'd1.jpg'],
    7 => ['name' => 'Midi Dresses', 'price' => 70, 'manufacturer' => 'Batch process manufacturing', 'style' => 'Classic fashion', 'wash' => 'MACHINE WASH', 'description' => 'Stylish midi dress for formal and casual wear.', 'image' => 'd2.jpg'],
    8 => ['name' => 'Maxi Dresses', 'price' => 40, 'manufacturer' => 'Repetitive manufacturing', 'style' => 'Artsy fashion', 'wash' => 'HAND WASH', 'description' => 'Flowy maxi dress with artistic design.', 'image' => 'd3.jpg'],
    9 => ['name' => 'Occasion Dresses', 'price' => 45, 'manufacturer' => 'Batch process manufacturing', 'style' => 'Classic fashion', 'wash' => 'MACHINE WASH', 'description' => 'A beautiful dress for special occasions.', 'image' => 'd4.jpg'],
    10 => ['name' => 'Evening Dresses', 'price' => 88, 'manufacturer' => 'Repetitive manufacturing', 'style' => 'Artsy fashion', 'wash' => 'HAND WASH', 'description' => 'Elegant evening gown for formal events.', 'image' => 'd5.jpg'],
    11 => ['name' => 'Party Dresses', 'price' => 68, 'manufacturer' => 'Batch process manufacturing', 'style' => 'Classic fashion', 'wash' => 'MACHINE WASH', 'description' => 'Fun party dress for celebrations and gatherings.', 'image' => 'd6.jpg'],
    1 => ['name' => 'Wool Blazer', 'price' => 59, 'manufacturer' => 'Repetitive manufacturing', 'style' => 'Artsy fashion', 'wash' => 'HAND WASH', 'description' => 'High quality wool blazer.', 'image' => 'mo1.jpg'],
    2 => ['name' => 'Blackberry Blazer', 'price' => 65, 'manufacturer' => 'Batch process manufacturing', 'style' => 'Classic fashion', 'wash' => 'MACHINE WASH', 'description' => 'Elegant blackberry blazer.', 'image' => 'mo2.jpg'],
    3 => ['name' => 'Printed Blazer', 'price' => 36, 'manufacturer' => 'Repetitive manufacturing', 'style' => 'Artsy fashion', 'wash' => 'HAND WASH', 'description' => 'Stylish printed blazer.', 'image' => 'mo3.jpg'],
    4 => ['name' => 'Corduroy Blazer', 'price' => 85, 'manufacturer' => 'Batch process manufacturing', 'style' => 'Classic fashion', 'wash' => 'MACHINE WASH', 'description' => 'Classic corduroy blazer.', 'image' => 'mo4.jpg'],
    5 => ['name' => 'Beige Blazer', 'price' => 98, 'manufacturer' => 'Batch process manufacturing', 'style' => 'Classic fashion', 'wash' => 'MACHINE WASH', 'description' => 'Modern beige blazer.', 'image' => 'mo5.jpg'],
    // Jumpsuits
    12 => ['name' => 'Playsuits', 'price' => 39, 'manufacturer' => 'Batch process manufacturing', 'style' => 'Classic fashion', 'wash' => 'MACHINE WASH', 'description' => 'Comfortable playsuit for casual wear.', 'image' => 'j1.jpg'],
    13 => ['name' => 'Cedar Jumpsuit', 'price' => 65, 'manufacturer' => 'Batch process manufacturing', 'style' => 'Classic fashion', 'wash' => 'MACHINE WASH', 'description' => 'Stylish cedar jumpsuit.', 'image' => 'j2.jpg'],
    14 => ['name' => 'Floral Jumpsuit', 'price' => 31, 'manufacturer' => 'Batch process manufacturing', 'style' => 'Classic fashion', 'wash' => 'MACHINE WASH', 'description' => 'Floral jumpsuit perfect for spring.', 'image' => 'j3.jpg'],
    15 => ['name' => 'Boiler Jumpsuit', 'price' => 82, 'manufacturer' => 'Repetitive manufacturing', 'style' => 'Artsy fashion', 'wash' => 'HAND WASH', 'description' => 'Utility boiler jumpsuit.', 'image' => 'j4.jpg'],
    16 => ['name' => 'Flared Jumpsuit', 'price' => 91, 'manufacturer' => 'Batch process manufacturing', 'style' => 'Classic fashion', 'wash' => 'MACHINE WASH', 'description' => 'Flared jumpsuit with a vintage touch.', 'image' => 'j5.jpg'],
    17 => ['name' => 'Overall Jumpsuit', 'price' => 93, 'manufacturer' => 'Repetitive manufacturing', 'style' => 'Artsy fashion', 'wash' => 'HAND WASH', 'description' => 'Trendy overall jumpsuit.', 'image' => 'j6.jpg']
];

// Find the product by ID
$product = isset($products[$productID]) ? $products[$productID] : null;
?>

<div class="container mt-4">
    <?php if ($product): ?>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="img-fluid" style="height: 400px; width: 500px; border: 2px solid #000; border-radius: 8px; object-fit: contain;">
            </div>
            <div class="col-md-6">
                <h2><?php echo $product['name']; ?></h2>
                <p><strong>Price:</strong> $<?php echo $product['price']; ?></p>
                <p><strong>Manufacturer:</strong> <?php echo $product['manufacturer']; ?></p>
                <p><strong>Style:</strong> <?php echo $product['style']; ?></p>
                <p><strong>Wash:</strong> <?php echo $product['wash']; ?></p>
                <p><strong>Description:</strong> <?php echo $product['description']; ?></p>
                
                <button class="btn btn-primary add-to-cart" data-id="<?php echo $productID; ?>">
    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
</button>

<button class="btn btn-success buy-now" data-id="<?php echo $productID; ?>">
    <i class="fa-solid fa-bolt"></i> Buy Now
</button>

            </div>
        </div>
    <?php else: ?>
        <p>Product not found.</p>
    <?php endif; ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('click', (event) => {
        if (event.target.classList.contains('add-to-cart')) {
            const button = event.target;
            const productId = button.getAttribute('data-id');
            const productName = '<?php echo $product['name']; ?>';
            const productPrice = '<?php echo $product['price']; ?>';

            const product = {
                id: productId,
                name: productName,
                price: productPrice
            };

            // Add product to cart (localStorage)
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.push(product);
            localStorage.setItem('cart', JSON.stringify(cart));

            alert(`${productName} added to cart!`);
        }
    });
});
</script>
<script>document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('click', (event) => {
        const productId = '<?php echo $productID; ?>';
        const productName = '<?php echo $product['name']; ?>';
        const productPrice = '<?php echo $product['price']; ?>';
        const product = {
            id: productId,
            name: productName,
            price: productPrice
        };

        if (event.target.classList.contains('add-to-cart')) {
            // Add product to cart (localStorage)
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.push(product);
            localStorage.setItem('cart', JSON.stringify(cart));

            alert(`${productName} added to cart!`);
        }

        if (event.target.classList.contains('buy-now')) {
            // Add product to cart (localStorage) then redirect to checkout
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.push(product);
            localStorage.setItem('cart', JSON.stringify(cart));

            alert(`Proceeding to checkout with ${productName}.`);
            window.location.href = 'checkout.php'; // Redirect to checkout page
        }
    });
});
</script>
<br><br>
<?php include 'footer.php'; ?>
