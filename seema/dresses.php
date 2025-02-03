<?php include 'header.php'; ?>
<link rel="stylesheet" href="css.css">
<div class="container mt-4">
    <div class="row">
        <div class="col-md-3">
            <div class="filter-section">
                <h3>Categories</h3>
                <ul class="list-unstyled">
                    <li><a href="cart.php" class="link-secondary">Shop</a></li>
                    <li><a href="blazer.php" class="link-secondary">Blazers</a></li>
                    <li><a href="dresses.php" class="link-secondary">Dresses</a></li>
                    <li><a href="jumpsuits.php" class="link-secondary">Jumpsuits</a></li>
                    <!-- <li><a href="newarrival.php" class="link-secondary">New Arrival</a></li>
                    <li><a href="trousers-shorts.php" class="link-secondary">Trousers-Shorts</a></li> -->
                </ul>
            </div>
            <div class="filter-section mt-4">
                <h3>Filter By</h3>
                <form id="filterForm">
                    <div class="form-group">
                        <label for="priceMin">Price</label>
                        <input type="number" class="form-control" id="priceMin" placeholder="Min">
                        <input type="number" class="form-control mt-2" id="priceMax" placeholder="Max">
                    </div>
                    <div class="form-group">
                        <label for="manufacturer">Manufacturer</label>
                        <select class="form-control" id="manufacturer">
                            <option value="">Select Manufacturer</option>
                            <option>Repetitive manufacturing</option>
                            <option>Batch process manufacturing</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="style">Style</label>
                        <select class="form-control" id="style">
                            <option value="">Select Style</option>
                            <option>Artsy fashion</option>
                            <option>Classic fashion</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="wash">Wash</label>
                        <select class="form-control" id="wash">
                            <option value="">Select Wash</option>
                            <option>HAND WASH</option>
                            <option>MACHINE WASH</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Apply</button>
                    <button type="reset" class="btn btn-secondary">Clear</button>
                </form>
            </div>
        </div>
        <div class="col-md-9">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <label for="showCount">Show</label>
                    <select class="form-control d-inline-block w-auto" id="showCount">
                        <option>3</option>
                        <option>6</option>
                        <option>10</option>
                    </select>
                </div>
                <div>
                    <label for="sortOrder">Sort by</label>
                    <select class="form-control d-inline-block w-auto" id="sortOrder">
                        <option>Oldest First</option>
                        <option>Newest First</option>
                        <option>Price Low to High</option>
                        <option>Price High to Low</option>
                    </select>
                </div>
            </div>
            <div class="products-section mt-4">
                <h3>Dresses</h3>
                <div id="productsList" class="row">
                    <!-- Product Card Template -->
                    <div class="col-md-4 product-template d-none">
                        <div class="product-card card mb-4">
                            <img src="" alt="Product Image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">Price: $<span class="product-price"></span></p>
                                <p class="card-text">Manufacturer: <span class="product-manufacturer"></span></p>
                                <p class="card-text">Style: <span class="product-style"></span></p>
                                <p class="card-text">Wash: <span class="product-wash"></span></p>

                                <button class="btn btn-primary buy-now mt-2">
                                    <a href="" class="text-white buy-now-link">
                                    <i class="fa-solid fa-truck-fast"></i> Buy Now
                                    </a>
                                </button>
                                <br>
                                <button class="btn btn-primary add-to-cart mt-2" data-id="">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                                </button>
                               
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Card Template -->
                </div>
            </div>
        </div>
    </div>
</div>

<script >

document.addEventListener('DOMContentLoaded', () => {
    const filterForm = document.getElementById('filterForm');
    const productsList = document.getElementById('productsList');
    const productTemplate = document.querySelector('.product-template');
    const showCountSelect = document.getElementById('showCount');
    const sortOrderSelect = document.getElementById('sortOrder');

    let currentFilters = {
        priceMin: '',
        priceMax: '',
        manufacturer: '',
        style: '',
        wash: '',
        showCount: showCountSelect.value,
        sortOrder: sortOrderSelect.value
    };


    function fetchProducts(filters) {
        // Mock API call - replace with actual backend endpoint
        const mockProducts = [
            { id: 6, name: 'Mini Dresses', price: 60, manufacturer: 'Batch process manufacturing', style: 'Classic fashion', wash: 'MACHINE WASH', image: 'd1.jpg' },
            { id: 7, name: 'Midi Dresses', price: 70, manufacturer: 'Batch process manufacturing', style: 'Classic fashion', wash: 'MACHINE WASH' , image: 'd2.jpg'},
            { id: 8, name: 'Maxi Dresses', price: 40, manufacturer: 'Repetitive manufacturing', style: 'Artsy fashion', wash: 'HAND WASH' , image: 'd3.jpg'},
            { id: 9, name: 'Occasion Dresses', price: 45, manufacturer: 'Batch process manufacturing', style: 'Classic fashion', wash: 'MACHINE WASH', image: 'd4.jpg' },
            { id: 10, name: 'Evening Dresses', price: 88, manufacturer: 'Repetitive manufacturing', style: 'Artsy fashion', wash: 'HAND WASH' , image: 'd5.jpg'},
            { id: 11, name: 'Party Dressesr', price: 68, manufacturer: 'Batch process manufacturing', style: 'Classic fashion', wash: 'MACHINE WASH' , image: 'd6.jpg'},
        ];

        let filteredProducts = mockProducts.filter(product => {
            return (!filters.priceMin || product.price >= filters.priceMin) &&
                   (!filters.priceMax || product.price <= filters.priceMax) &&
                   (!filters.manufacturer || product.manufacturer === filters.manufacturer) &&
                   (!filters.style || product.style === filters.style) &&
                   (!filters.wash || product.wash === filters.wash);
        });

        if (filters.sortOrder === 'Oldest First') {
            filteredProducts.sort((a, b) => new Date(a.dateAdded) - new Date(b.dateAdded));
        } else if (filters.sortOrder === 'Newest First') {
            filteredProducts.sort((a, b) => new Date(b.dateAdded) - new Date(a.dateAdded));
        } else if (filters.sortOrder === 'Price Low to High') {
            filteredProducts.sort((a, b) => a.price - b.price);
        } else if (filters.sortOrder === 'Price High to Low') {
            filteredProducts.sort((a, b) => b.price - a.price);
        }

        filteredProducts = filteredProducts.slice(0, filters.showCount);

        displayProducts(filteredProducts);
    }

    function displayProducts(products) {
        productsList.innerHTML = '';

        if (products.length === 0) {
            productsList.innerHTML = '<p>No products found</p>';
            return;
        }

        products.forEach(product => {
            const productItem = productTemplate.cloneNode(true);
            productItem.classList.remove('d-none');
            productItem.querySelector('img').src = product.image;
            productItem.querySelector('.card-title').textContent = product.name;
            productItem.querySelector('.product-price').textContent = product.price;
            productItem.querySelector('.product-manufacturer').textContent = product.manufacturer;
            productItem.querySelector('.product-style').textContent = product.style;
            productItem.querySelector('.product-wash').textContent = product.wash;
            productItem.querySelector('.add-to-cart').setAttribute('data-id', product.id);
            productItem.querySelector('.buy-now-link').href = `product.php?id=${product.id}`;

            productsList.appendChild(productItem);
        });
    }

    showCountSelect.addEventListener('change', () => {
        currentFilters.showCount = showCountSelect.value;
        fetchProducts(currentFilters);
    });

    sortOrderSelect.addEventListener('change', () => {
        currentFilters.sortOrder = sortOrderSelect.value;
        fetchProducts(currentFilters);
    });

    filterForm.addEventListener('submit', function(event) {
        event.preventDefault();

        currentFilters.priceMin = document.getElementById('priceMin').value;
        currentFilters.priceMax = document.getElementById('priceMax').value;
        currentFilters.manufacturer = document.getElementById('manufacturer').value;
        currentFilters.style = document.getElementById('style').value;
        currentFilters.wash = document.getElementById('wash').value;

        fetchProducts(currentFilters);
    });

    function updateCart(product) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.push(product);
        localStorage.setItem('cart', JSON.stringify(cart));
    }

    document.addEventListener('click', (event) => {
        if (event.target.classList.contains('add-to-cart')) {
            const button = event.target;
            const productId = button.getAttribute('data-id');
            const productItem = Array.from(document.querySelectorAll('.product-card')).find(item => item.querySelector('.add-to-cart').getAttribute('data-id') === productId);

            const product = {
                id: productId,
                name: productItem.querySelector('.card-title').textContent,
                price: productItem.querySelector('.product-price').textContent
            };

            updateCart(product);
            alert(`${product.name} added to cart!`);
        }
    });

    fetchProducts(currentFilters);
});
</script>
<?php include 'footer.php'; ?>
