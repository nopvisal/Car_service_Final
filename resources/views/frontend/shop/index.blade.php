@extends('frontend.layouts.master')
@section('title', 'Shop')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="carousel-shop">
        <div class="navbars-shop">
            <h2>SPARE PART</h2>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <div class="content-shop">
        <section class="shop spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="shop__sidebar">
                            <div class="shop__sidebar__search">
                                <form action="#">
                                    <input type="text" placeholder="Search...">
                                    <button type="submit"><span class="icon_search"></span></button>
                                </form>
                            </div>
                            <div class="shop__sidebar__accordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseOne"
                                                class="menu-heading">Categories</a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="shop__sidebar__categories">
                                                    <ul class="nice-scroll">
                                                        <li><a href="#">Gearbox.</a></li>
                                                        <li><a href="#">Brakes</a></li>
                                                        <li><a href="#">Oil Filters</a></li>
                                                        <li><a href="#">Battery</a></li>
                                                        <li><a href="#">Spark Plugs</a></li>
                                                        <li><a href="#">Fuel Injector.</a></li>
                                                        <li><a href="#">Suspension</a></li>
                                                        <li><a href="#">Fuel Pumps</a></li>
                                                        <li><a href="#">Engine oil</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                        </div>
                                        <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="shop__sidebar__brand">
                                                    <ul>
                                                        <li><a href="#">Louis Vuitton</a></li>
                                                        <li><a href="#">Chanel</a></li>
                                                        <li><a href="#">Hermes</a></li>
                                                        <li><a href="#">Gucci</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="shop__product__option">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="shop__product__option__left">
                                        <p>Showing 1–12 of 126 results</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="shop__product__option__right">
                                        <p>Sort by Price:</p>
                                        <select>
                                            <option value="">Low To High</option>
                                            <option value="">$0 - $55</option>
                                            <option value="">$55 - $100</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">



                            @foreach ($products as $product)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <!-- Use background-image inline style and check for image existence -->
                                        <div class="product__item__pic"
                                            style="background-image: url('{{ $product->photo ? asset('storage/' . $product->photo) : asset('frontend/img/default-image.jpg') }}');">
                                            <ul class="product__hover">
                                                <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}"
                                                            alt=""></a></li>
                                                <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}"
                                                            alt=""><span>Compare</span></a></li>
                                                <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}"
                                                            alt=""></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__item__text" style="padding-left:20px;text-transform: uppercase;">
                                            <h6 style="color:rgb(0, 138, 250)"> {{ $product->name }}</h6>
                                            <h6> {{ $product->price }}$</h6>
                                            <a href="#" class="add-cart-btn">+ Add To Cart</a>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <button id="cart-button" class="btn "
                            style="display: none; position: fixed; bottom: 20px;background-color:transparent; right: 20px; z-index: 9999; border: none;  color: white;">
                            <span style="background-color:black; padding: 10px 15px; border-radius:4px 0px 0px 4px;">💵
                                Total: $<span id="cart-total">0.00</span></span><span
                                style="background-color:rgb(0, 138, 250); padding: 10px 15px;border-radius:0px 4px 4px 0px;">🛒
                                Cart (<span id="cart-count">0</span>)</span>
                        </button>

                    </div>
                    <!-- Modal for Receipt -->
                    <!-- Receipt Modal -->
                    <div id="receiptModal" class="modal-overlay">
                        <div class="modal-box">
                            <div class="modal-header">
                                <h2>🧾 Receipt</h2>
                                <button id="closeModalBtn" class="close-btn">&times;</button>
                            </div>
                            <div class="modal-body" id="receipt-content">
                                <p>No items yet.</p>
                            </div>
                            <div class="modal-footer">
                                <button id="modalClearButton" class="modal-close-btn" style="background-color: red;">Clear</button>
                                <!-- Complete Purchase Button -->
                                <button id="purchaseButton" class="modal-close-btn"
                                    style="background-color:rgb(0, 138, 250)">Purchase</button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Clear Confirmation -->
                    <div id="clearConfirmationModal" class="modal-overlay" style="display: none;">
                        <div class="modal-box">
                            <div class="modal-header">
                                <h2>Are you sure?</h2>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to clear the items in your cart?</p>
                            </div>
                            <div class="modal-footer">
                                <button id="confirmClearButton" class="modal-close-btn" style="background-color: red;">Yes,
                                    Clear</button>
                                <button id="cancelClearButton" class="modal-close-btn"
                                    style="background-color: green;">Cancel</button>
                            </div>
                        </div>
                    </div>
                    <!-- Modal for QR Code -->
                    <div id="qrModal" class="modal-overlay" style="display: none;">
                        <div class="modal-box">
                            <button id="closeQRModalBtn" class="close-btn"
                                style="width:100%; text-align: right;">&times;</button>
                            <div class="modal-header">
                                <h2>Scan to Pay with Bakong</h2>
                            </div>
                            <div class="modal-body" style="text-align: center;">
                                <div id="totalPriceDisplay"
                                    style="font-size: 1.2rem; font-weight: bold; margin-bottom: 20px;"></div>
                                <img src="{{ asset('frontend/img/qr.jpg') }}" alt="Bakong QR Code"
                                    style="width: 250px; height: 250px;">
                                <p>Please scan the QR code using your Bakong app to complete the payment.</p>
                                <button id="finalPurchaseButton" class="modal-close-btn"
                                    style="margin-top: 20px; background-color: green;">Complete Purchase</button>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>
        @include('frontend.layouts.footer')
    </div>
    <!-- Shop Section End -->


    <!-- Footer Section Begin -->

    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <script>
        let cartCount = 0;
        let cartItems = [];

        const addToCartButtons = document.querySelectorAll('.add-cart-btn');
        const cartCountElement = document.getElementById('cart-count');
        const cartTotalElement = document.getElementById('cart-total');
        const cartButton = document.getElementById('cart-button');
        const receiptContent = document.getElementById('receipt-content');
        const receiptModal = document.getElementById('receiptModal');
        const qrModal = document.getElementById('qrModal');
        const totalPriceDisplay = document.getElementById('totalPriceDisplay');
        const clearConfirmationModal = document.getElementById('clearConfirmationModal');

        // Handle adding items to cart
        addToCartButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                cartCount++;
                cartCountElement.textContent = cartCount;
                cartButton.style.display = 'inline-block';

                const productCard = button.closest('.product__item');
                const name = productCard.querySelector('h6').textContent;
                const price = productCard.querySelectorAll('h6')[1].textContent.replace('$', '').trim();

                const existingItem = cartItems.find(item => item.name === name);
                if (existingItem) {
                    existingItem.quantity++;
                } else {
                    cartItems.push({ name, price: parseFloat(price), quantity: 1 });
                }

                // Update total dynamically
                updateCartTotal();
            });
        });

        // Function to update cart total and display total amount
        function updateCartTotal() {
            let total = 0;
            cartItems.forEach(item => {
                total += item.price * item.quantity;
            });
            cartTotalElement.textContent = total.toFixed(2);
        }

        // Show the cart modal with details
        cartButton.addEventListener('click', () => {
            if (cartItems.length === 0) {
                receiptContent.innerHTML = '<p>No items yet.</p>';
            } else {
                let html = '';
                let total = 0;

                cartItems.forEach(item => {
                    const itemTotal = item.price * item.quantity;
                    total += itemTotal;

                    html += `
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid #eee; padding: 4px 0;">
                            <span>${item.name} x${item.quantity}</span>
                            <span>$${itemTotal.toFixed(2)}</span>
                        </div>`;
                });

                html += `
                    <div style="display: flex; justify-content: space-between; font-weight: bold; padding-top: 8px; border-top: 2px solid #000; margin-top: 10px;">
                        <span>Total:</span>
                        <span>$${total.toFixed(2)}</span>
                    </div>`;

                receiptContent.innerHTML = html;
            }

            receiptModal.style.display = 'flex';
        });

        // Show the confirmation modal when the Clear button is clicked
        document.getElementById('modalClearButton').addEventListener('click', () => {
            clearConfirmationModal.style.display = 'flex';
        });

        // Cancel the clear action (close the confirmation modal)
        document.getElementById('cancelClearButton').addEventListener('click', () => {
            clearConfirmationModal.style.display = 'none';
        });

        // Confirm and clear the cart
        document.getElementById('confirmClearButton').addEventListener('click', () => {
            // Clear the cart items array
            cartItems = [];
            cartCount = 0;

            // Update the cart count and total display
            cartCountElement.textContent = cartCount;
            cartTotalElement.textContent = '0.00';

            // Hide the cart button if no items are in the cart
            cartButton.style.display = 'none';

            // Reset the receipt modal content
            receiptContent.innerHTML = '<p>No items yet.</p>';

            // Close the confirmation modal
            clearConfirmationModal.style.display = 'none';
            receiptModal.style.display = 'none'; // Optionally close the receipt modal
        });

        // Close the receipt modal
        document.getElementById('closeModalBtn').addEventListener('click', () => {
            receiptModal.style.display = 'none';
        });

        // Show QR modal and display total price for payment
        document.getElementById('purchaseButton').addEventListener('click', () => {
            const total = cartItems.reduce((sum, item) => sum + item.price * item.quantity, 0);
            totalPriceDisplay.textContent = `Total: $${total.toFixed(2)}`;
            receiptModal.style.display = 'none';
            qrModal.style.display = 'flex';
        });

        // Close the QR modal
        document.getElementById('closeQRModalBtn').addEventListener('click', () => {
            qrModal.style.display = 'none';
        });

        // Finalize purchase and deduct stock
        document.getElementById('finalPurchaseButton').addEventListener('click', () => {
            fetch('/api/complete-purchase', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ items: cartItems })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Purchase successful! Stock updated.');
                        // Reset cart after successful purchase
                        cartItems = [];
                        cartCount = 0;
                        cartCountElement.textContent = cartCount;
                        cartButton.style.display = 'none';
                        receiptContent.innerHTML = '<p>No items yet.</p>';
                        receiptModal.style.display = 'none';
                        qrModal.style.display = 'none';
                        updateCartTotal();
                    } else {
                        alert('Purchase failed: ' + (data.message || 'Unknown error'));
                    }
                })
                .catch(error => {
                    console.error('Error completing purchase:', error);
                    alert('Purchase successful! Stock updated.');
                });
        });
    </script>














@endsection