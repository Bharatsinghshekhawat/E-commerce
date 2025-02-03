document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.number');
    const speed = 400; // The lower the slower

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 1);
            }
        };

        updateCount();
    });
});

function validateForm() {
    var name = document.getElementById('name').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    var namePattern = /^[A-Z][a-zA-Z\s]*$/;
    if (!namePattern.test(name)) {
        alert('Name should start with a capital letter and contain no numbers.');
        return false;
    }

    if (subject.trim() === '') {
        alert('Subject is required.');
        return false;
    }

    if (message.trim() === '' || message.split(' ').length < 10) {
        alert('Message is required and should contain at least 10 words.');
        return false;
    }

    return true;
}

// Google Analytics tracking code
function gtag(){dataLayer.push(arguments);}
window.dataLayer = window.dataLayer || [];
gtag('js', new Date());
gtag('config', 'YOUR_TRACKING_ID');



document.addEventListener('DOMContentLoaded', function() {
    const cartIcon = document.getElementById('cart-icon');
    const cartPopup = document.getElementById('cart-popup');
    const cartItems = document.getElementById('cart-items');
    const cartCount = document.getElementById('cart-count');
    const clearCartButton = document.getElementById('clear-cart');

    let cart = [];

    // Function to add item to cart
    function addToCart(productName, price) {
        cart.push({ name: productName, price: price });
        updateCartUI();
    }

    // Function to remove item from cart
    function removeFromCart(index) {
        cart.splice(index, 1);
        updateCartUI();
    }

    // Function to update the UI for the cart
    function updateCartUI() {
        cartItems.innerHTML = '';
        cart.forEach((item, index) => {
            const div = document.createElement('div');
            div.innerHTML = `
                <p>${item.name} - $${item.price} <button onclick="removeFromCart(${index})">Remove</button></p>
            `;
            cartItems.appendChild(div);
        });
        cartCount.textContent = cart.length;
        cartPopup.style.display = cart.length > 0 ? 'block' : 'none';
    }

    // Add event listener to cart icon
    cartIcon.addEventListener('click', function() {
        cartPopup.style.display = cartPopup.style.display === 'block' ? 'none' : 'block';
    });

    // Add event listener to clear cart
    clearCartButton.addEventListener('click', function() {
        cart = [];
        updateCartUI();
    });

    // Example usage: Add to Cart buttons (you can connect this with your actual products)
    document.querySelectorAll('.btn-primary.but2').forEach((button, index) => {
        button.addEventListener('click', function() {
            const productCard = this.parentElement;
            const productName = productCard.querySelector('h5').textContent;
            const price = productCard.querySelector('p').textContent.replace('$', '');
            addToCart(productName, price);
        });
    });
});


// Array to store cart items
let cart = [];

// Add to cart button functionality
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', (e) => {
        // Get product details
        const name = e.target.getAttribute('data-name');
        const price = e.target.getAttribute('data-price');

        // Add product to cart array
        cart.push({ name, price });

        // Display updated cart
        displayCart();
    });
});

// Function to display cart items
function displayCart() {
    const cartItemsContainer = document.getElementById('cart-items');
    cartItemsContainer.innerHTML = '';

    cart.forEach((item, index) => {
        const li = document.createElement('li');
        li.textContent = `${item.name} - $${item.price}`;
        cartItemsContainer.appendChild(li);
    });
}
document.addEventListener('DOMContentLoaded', function() {
    const cartCount = document.getElementById('cart-count');
    const cartItemsContainer = document.getElementById('cart-items');
    const clearCartButton = document.getElementById('clear-cart');

    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Update cart UI
    function updateCartUI() {
        if (cartItemsContainer) {
            cartItemsContainer.innerHTML = ''; // Clear the cart display
            cart.forEach((item, index) => {
                const li = document.createElement('li');
                li.innerHTML = `
                    ${item.name} - $${item.price} 
                    <button class="btn btn-sm btn-danger" onclick="removeFromCart(${index})">Remove</button>
                `;
                cartItemsContainer.appendChild(li);
            });
        }
        cartCount.textContent = cart.length;
    }

    // Add to Cart functionality
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const productName = this.getAttribute('data-name');
            const price = this.getAttribute('data-price');
            cart.push({ name: productName, price: price });
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartUI();
            alert('Item added to cart!');
        });
    });

    // Remove from Cart
    window.removeFromCart = function(index) {
        cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartUI();
    };

    // Clear Cart
    if (clearCartButton) {
        clearCartButton.addEventListener('click', function() {
            cart = [];
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartUI();
        });
    }

    updateCartUI(); // Initial update
});

