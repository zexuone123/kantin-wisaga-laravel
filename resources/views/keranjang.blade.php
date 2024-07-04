<!-- cart.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="keranjang.css">
    <script>
      // script.js
const cartList = document.getElementById('cart-list');
const checkoutButton = document.getElementById('checkout');

// retrieve cart data from database
fetch('/api/cart')
   .then(response => response.json())
   .then(data => {
        const cartItems = data.items;
        cartList.innerHTML = '';
        cartItems.forEach(item => {
            const listItem = document.createElement('li');
            listItem.textContent = `${item.itemId} - ${item.quantity} x ${item.price.base} ${item.price.currency}`;
            cartList.appendChild(listItem);
        });
    })
   .catch(error => console.error(error));

// add event listener to checkout button
checkoutButton.addEventListener('click', () => {
    // checkout logic here
});

// Get the products container
const productsContainer = document.querySelector('.products');

// Create an empty shopping cart
let cart = {};

// Add event listeners to each product's "Tambah ke Keranjang" button
productsContainer.addEventListener('click', (e) => {
  if (e.target.tagName === 'BUTTON') {
    const productId = e.target.parentNode.id;
    const productQuantity = 1; // default quantity is 1

    // Add product to cart
    if (cart[productId]) {
      cart[productId].quantity += productQuantity;
    } else {
      cart[productId] = { quantity: productQuantity };
    }

    // Update cart display (optional)
    updateCartDisplay();
  }
});

// Update cart display function (optional)
function updateCartDisplay() {
  const cartContainer = document.querySelector('.cart-container');
  cartContainer.innerHTML = '';

  Object.keys(cart).forEach((productId) => {
    const product = cart[productId];
    const cartItem = document.createElement('div');
    cartItem.innerHTML = `
      <p>${productId} x ${product.quantity}</p>
      <button class="remove-from-cart">Remove</button>
    `;
    cartContainer.appendChild(cartItem);
  });
}

// Remove from cart functionality (optional)
document.addEventListener('click', (e) => {
  if (e.target.classList.contains('remove-from-cart')) {
    const productId = e.target.parentNode.querySelector('p').textContent.split(' x ')[0];
    delete cart[productId];
    updateCartDisplay();
  }
});
    </script>
</head>
<body>
    <h1>Shopping Cart</h1>
    <ul id="cart-list">
        <!-- cart items will be displayed here -->
    </ul>
    <button id="checkout">Checkout</button>

    
</body>
</html>