<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your Cart</title>
    <link rel="icon" href="../Project/assets/images/Loupi.png">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <style><?php include "fbi.css"; ?></style>
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
                                        <a href="buy.php?game_id=${gameDetails.game_id}&quantity=${item.quantity}" class="btn btn-primary">Buy</a>
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

            
            // Initial render of cart items
            renderCartItems();
        });
    </script>
</body>
</html>

