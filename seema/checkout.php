<?php include 'header.php'; ?>
<link rel="stylesheet" href="css.css">
<style>body {
    background-color: #f0f0f5;
    font-family: 'Arial', sans-serif;
}

.checkout-title {
    text-align: center;
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 40px;
}

h3 {
    font-size: 1.8rem;
    color: #555;
    margin-bottom: 20px;
}

#cart-summary {
    border: 1px solid #ccc;
    padding: 15px;
    border-radius: 8px;
    background-color: #fff;
}

.list-group-item {
    font-size: 1.2rem;
}

.total-price {
    font-size: 1.5rem;
    font-weight: bold;
    margin-top: 20px;
}

.form-group label {
    font-size: 1.1rem;
}

.btn-success {
    background-color: #28a745;
    padding: 12px;
    border-radius: 8px;
    font-size: 1.0rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-success:hover {
    background-color: #218838;
}
</style>



<div class="container mt-5">
    <h2 class="checkout-title">Checkout</h2>
    
    <div class="row">
        <!-- Cart Summary Section -->
        <div class="col-md-6">
            <h3>Order Summary</h3>
            <ul id="cart-summary" class="list-group mb-3">
                <!-- Cart items will be dynamically populated here -->
            </ul>
            <h4 class="total-price">Total: $<span id="total-price">0</span></h4>
        </div>

        <!-- Payment and Shipping Section -->
        <div class="col-md-6">
            <h3>Shipping Details</h3>
            <form id="checkout-form" action="javascript:void(0);" method="POST">
                <div class="form-group mb-3">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="card">Credit Card</label>
                    <input type="text" class="form-control" id="card" name="card" placeholder="XXXX-XXXX-XXXX-XXXX" required>
                </div>
                <div class="form-group mb-3">
                    <label for="expiry">Expiry Date</label>
                    <input type="text" class="form-control" id="expiry" name="expiry" placeholder="MM/YY" required>
                </div>
                <div class="form-group mb-3">
                    <label for="cvv">CVV</label>
                    <input type="text" class="form-control" id="cvv" name="cvv" placeholder="123" required>
                </div>

                <button type="submit" class="btn btn-success btn-block">Place Order</button><br>
            </form>
        </div>
    </div><br>

    <div id="thank-you-message" style="display:none; text-align:center;">
        <h2>Thank You for Your Order!</h2>
        <img src="thank you.png" alt="Thank You" class="img-fluid" style="max-width: 500px; margin-top: 20px;">
        <br>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
// Load cart data from localStorage and display summary
$(document).ready(function() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    let totalPrice = 0;

    if (cart.length > 0) {
        cart.forEach(item => {
            const price = parseFloat(item.price);
            $('#cart-summary').append(
                `<li class="list-group-item d-flex justify-content-between align-items-center">
                    ${item.name}
                    <span>$${price.toFixed(2)}</span>
                </li>`
            );
            totalPrice += price;
        });
    } else {
        $('#cart-summary').html('<li class="list-group-item">Your cart is empty.</li>');
    }

    $('#total-price').text(totalPrice.toFixed(2));

    // Handle form submission and display Thank You message
    $('#checkout-form').on('submit', function(event) {
        event.preventDefault();  // Prevent actual form submission

        // Clear cart (optional)
        localStorage.removeItem('cart');

        // Hide the form and display the thank you message
        $('#checkout-form').hide();
        $('#thank-you-message').show();
    });
});
</script>

<?php include 'footer.php'; ?>
