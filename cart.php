<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your Cart</title>
    <link rel="icon" href="../Project/assets/images/Loupi.png">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700');

        body{
          background: url('http://all4desktop.com/data_images/original/4236532-background-images.jpg');
          font-family: 'Roboto Condensed', sans-serif;
          color: #262626;
          margin: 5% 0;
        }
        .container{
          width: 100%;
          padding-right: 15px;
          padding-left: 15px;
          margin-right: auto;
          margin-left: auto;
        }
        @media (min-width: 1200px)
        {
          .container{
            max-width: 1140px;
          }
        }
        .d-flex{
          display: flex;
          flex-direction: row;
          background: #f6f6f6;
          border-radius: 0 0 5px 5px;
          padding: 25px;
        }
        form{
          flex: 4;
        }
        .Yorder{
          flex: 2;
        }
        .title{
          background: -webkit-gradient(linear, left top, right bottom, color-stop(0, #5195A8), color-stop(100, #70EAFF));
          background: -moz-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
          background: -ms-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
          background: -o-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
          background: linear-gradient(to bottom right, #5195A8 0%, #70EAFF 100%);
          border-radius:5px 5px 0 0 ;
          padding: 20px;
          color: #f6f6f6;
        }
        h2{
          margin: 0;
          padding-left: 15px; 
        }
        .required{
          color: red;
        }
        label, table{
          display: block;
          margin: 15px;
        }
        label>span{
          float: left;
          width: 25%;
          margin-top: 12px;
          padding-right: 10px;
        }
        input[type="text"], input[type="tel"], input[type="email"], select
        {
          width: 100%;
          height: 30px;
          padding: 5px 10px;
          margin-bottom: 10px;
          border: 1px solid #dadada;
          color: #888;
        }
        select{
          width: 72%;
          height: 45px;
          padding: 5px 10px;
          margin-bottom: 10px;
        }
        .Yorder{
          margin-top: 15px;
          height: 600px;
          padding: 20px;
          border: 1px solid #dadada;
        }
        table{
          margin: 0;
          padding: 0;
        }
        th{
          border-bottom: 1px solid #dadada;
          padding: 10px 0;
        }
        tr>td:nth-child(1){
          text-align: left;
          color: #2d2d2a;
        }
        tr>td:nth-child(2){
          text-align: right;
          color: #52ad9c;
        }
        td{
          border-bottom: 1px solid #dadada;
          padding: 25px 25px 25px 0;
        }

        p{
          display: block;
          color: #888;
          margin: 0;
          padding-left: 25px;
        }
        .Yorder>div{
          padding: 15px 0; 
        }

        button{
          width: 100%;
          margin-top: 10px;
          padding: 10px;
          border: none;
          border-radius: 30px;
          background: #52ad9c;
          color: #fff;
          font-size: 15px;
          font-weight: bold;
        }
        button:hover{
          cursor: pointer;
          background: #428a7d;
        }

        

        /* Custom modal styles */
        .custom-modal {
            display: none;
            position: fixed;
            z-index: 1050;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .custom-modal .modal-content {
            position: relative;
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
            border-radius: 10px;
            z-index: 1100;
        }

        .custom-modal .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .custom-modal .close:hover,
        .custom-modal .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* form table  */
        .orderForm table tr > td:first-child {
            width: 30%;
        }
        .orderForm table tr > td:last-child {
            width: 70%;
        }
        .orderForm table input {
            width: 100%;
        }
    </style>
</head>
<body>
    <?php include "menu.php"; ?>

    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Your Cart</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="section categories related-games">
        <div class="container">
            <div class="row" id="cart-items">
                <!-- Cart items will be injected here by JavaScript -->
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © LOUPI Gaming Company. <br>All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Custom Modal HTML -->
    <div class="custom-modal" id="buyModal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div class="title">
                <h2>Product Order Form</h2>
            </div>
            <div class="d-flex">
                <form id="orderForm">
                    <table>
                        <tr>
                            <td><span class="fname">First Name <span class="required">*</span></span></td>
                            <td><input type="text" name="fname" required></td>
                        </tr>
                        <tr>
                            <td><span class="lname">Last Name <span class="required">*</span></span></td>
                            <td><input type="text" name="lname" required></td>
                        </tr>
                        <tr>
                            <td><span>Company Name (Optional)</span></td>
                            <td><input type="text" name="cn"></td>
                        </tr>
                        <tr>
                            <td><span>Country <span class="required">*</span></span></td>
                            <td>
                                <select style="width: 100%;" id="country-select" name="selection" required>
                                    <option value="">Select a country...</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Street Address <span class="required">*</span></span></td>
                            <td><input type="text" name="houseadd" placeholder="House number and street name" required></td>
                        </tr>
                        <tr>
                            <td><span>&nbsp;</span></td>
                            <td><input type="text" name="apartment" placeholder="Apartment, suite, unit etc. (optional)"></td>
                        </tr>
                        <tr>
                            <td><span>Town / City <span class="required">*</span></span></td>
                            <td><input type="text" name="city" required> </td>
                        </tr>
                        <tr>
                            <td><span>State / County <span class="required">*</span></span></td>
                            <td><input type="text" name="state" required></td>
                        </tr>
                        <tr>
                            <td><span>Postcode / ZIP <span class="required">*</span></span></td>
                            <td><input type="text" name="postcode" required> </td>
                        </tr>
                        <tr>
                            <td><span>Email Address <span class="required">*</span></span></td>
                            <td><input type="email" name="email" required></td>
                        </tr>
                    </table>
                </form>
                <div class="Yorder">
                    <table>
                        <tr>
                            <th colspan="2">Your order</th>
                        </tr>
                    </table><br>
                    <div>
                        <input type="radio" name="dbt" value="dbt" checked> Direct Bank Transfer
                    </div>
                    <p>
                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the                         funds have cleared in our account.
                    </p>
                    <div>
                        <input type="radio" name="dbt" value="cd"> Cash on Delivery
                    </div>
                    <div>
                        <input type="radio" name="dbt" value="paypal"> Paypal <span>
                            <img id="paypal" src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg" alt="PayPal" width="50">
                        </span>
                    </div>
                    <button type="button" id="placeOrderButton">Place Order</button>
                </div><!-- Yorder -->
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cartItemsContainer = document.getElementById('cart-items');

            // Function to fetch game details from server
            async function fetchGameDetails(gameId) {
                const response = await fetch(`game_details.php?game_id=${gameId}`);
                return await response.json();
            }

            // Function to render cart items
            async function renderCartItems() {
                const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
                if (cartItems.length === 0) {
                    cartItemsContainer.innerHTML = '<div class="col-lg-12"><p>Your cart is empty.</p></div>';
                    return;
                }

                for (const item of cartItems) {
                    const gameDetails = await fetchGameDetails(item.game_id);
                    if (gameDetails) {
                        const gameItem = `
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card">
                                    <img src="${gameDetails.ImagePath}" class="card-img-top" alt="${gameDetails.name}">
                                    <div class="card-body">
                                        <h5 class="card-title">${gameDetails.name}</h5>
                                        <p class="card-text">${gameDetails.Desc1}</p>
                                        <p class="price"><em>$${gameDetails.newPrice}</em></p>
                                        <p class="quantity">Quantity: ${item.quantity}</p>
                                        <a href="#" class="btn btn-primary remove-from-cart" data-game-id="${gameDetails.game_id}">Remove from Cart</a>
                                        <a href="#" class="btn btn-primary buy-now" data-game-id="${gameDetails.game_id}" data-quantity="${item.quantity}">Buy</a>
                                    </div>
                                </div>
                            </div>
                        `;
                        cartItemsContainer.insertAdjacentHTML('beforeend', gameItem);
                    }
                }
            }

            // Event listener for removing items from cart
            cartItemsContainer.addEventListener('click', function (event) {
                if (event.target.classList.contains('remove-from-cart')) {
                    event.preventDefault();
                    const gameId = event.target.dataset.gameId;
                    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
                    cartItems = cartItems.filter(item => item.game_id != gameId);
                    localStorage.setItem('cart', JSON.stringify(cartItems));
                    event.target.closest('.col-lg-4').remove();
                }
            });

            // Event listener for "Buy" button
            cartItemsContainer.addEventListener('click', async function (event) {
                if (event.target.classList.contains('buy-now')) {
                    event.preventDefault();
                    const gameId = event.target.dataset.gameId;
                    const quantity = event.target.dataset.quantity;
                    const gameDetails = await fetchGameDetails(gameId);
                    
                    if (gameDetails) {
                        const modalBody = document.querySelector('.custom-modal .modal-content .Yorder table');
                        modalBody.innerHTML = `
                            <tr>
                                <th colspan="2">Your order</th>
                            </tr>
                            <tr>
                                <td>${gameDetails.name} x ${quantity}</td>
                                <td>$${gameDetails.newPrice * quantity}</td>
                            </tr>
                            <tr>
                                <td>Subtotal</td>
                                <td>$${gameDetails.newPrice * quantity}</td>
                            </tr>
                            <tr>
                                <td>Shipping</td>
                                <td>Free shipping</td>
                            </tr>
                        `;
                        document.getElementById('buyModal').style.display = 'block';
                    }
                }
            });

            // Event listener for "Place Order" button in the modal
            document.getElementById('placeOrderButton').addEventListener('click', function () {
                alert('Order placed successfully!');
                document.getElementById('buyModal').style.display = 'none';
            });

            // Function to close the custom modal
            function closeModal() {
                document.getElementById('buyModal').style.display = 'none';
            }

            // Attach close function to global scope for inline usage
            window.closeModal = closeModal;

            // Initial render of cart items
            renderCartItems();
        });

        $(document).ready(function() {
            $.ajax({
                url: "https://restcountries.com/v3.1/all",
                method: "GET",
                success: function(data) {
                    var countrySelect = $('#country-select');
                    data.sort((a, b) => a.name.common.localeCompare(b.name.common)); // Sort countries alphabetically
                    data.forEach(function(country) {
                        var option = $('<option></option>')
                            .attr('value', country.cca3)
                            .text(country.name.common);
                        countrySelect.append(option);
                    });
                },
                error: function(error) {
                    console.error("Error fetching countries:", error);
                }
            });
        });
    </script>
</body>
</html>

                   
