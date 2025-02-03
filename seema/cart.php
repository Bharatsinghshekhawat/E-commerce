<?php include 'header.php'; ?>
<link rel="stylesheet" href="css.css">
<style>/* General styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f0f5;
    margin: 0;
    padding: 0;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

h1.cart-title {
    font-size: 3rem;
    color: #333;
    margin-bottom: 30px;
    font-family: 'Poppins', sans-serif;
    letter-spacing: 2px;
    text-transform: uppercase;
    background: linear-gradient(to right, #ff9966, #ff5e62);
    -webkit-background-clip: text;
    color: transparent;
}

.cart-items-container {
    background-color: #fff;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
}

#cart-items {
    list-style-type: none;
    padding: 0;
}

#cart-items li {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    margin-bottom: 10px;
    background-color: #f7f7f9;
    border-radius: 8px;
    transition: all 0.3s ease;
}

#cart-items li:hover {
    transform: scale(1.05);
    background-color: #f1f1f1;
}

.btn-clear-cart {
    background: linear-gradient(to right, #ff9966, #ff5e62);
    color: white;
    font-size: 1.2rem;
    padding: 12px 30px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.4s ease;
}

.btn-clear-cart:hover {
    background: linear-gradient(to right, #ff5e62, #ff9966);
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(255, 94, 98, 0.4);
}

/* Mobile responsive adjustments */
@media (max-width: 768px) {
    h1.cart-title {
        font-size: 2rem;
    }

    #cart-items li {
        flex-direction: column;
    }
}
</style>

<div class="container">
    <h1 class="cart-title">Your Cart</h1>
    <div id="cart-items-container" class="cart-items-container">
        <ul id="cart-items"></ul>
    </div>
    <button id="clear-cart" class="btn-clear-cart">Clear Cart</button>
</div>

<?php include 'footer.php'; ?>
