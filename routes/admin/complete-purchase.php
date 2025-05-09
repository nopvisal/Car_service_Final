<script>
    document.getElementById('finalPurchaseButton').addEventListener('click', () => {
    // Send a POST request to complete the purchase
    fetch('/admin/complete-purchase', {  // Update the path to match the route in web.php
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',  // Content type set to JSON
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content // Add CSRF token for security
        },
        body: JSON.stringify({ items: cartItems })  // Send cart items as JSON in the request body
    })
    .then(response => response.json())  // Parse the response as JSON
    .then(data => {
        if (data.success) {
            // Success - the purchase went through
            alert('Purchase successful! Stock updated.');
            // Reset the cart after successful purchase
            cartItems = [];
            cartCount = 0;
            cartCountElement.textContent = cartCount;
            cartButton.style.display = 'none';
            receiptContent.innerHTML = '<p>No items yet.</p>';
            receiptModal.style.display = 'none';
            qrModal.style.display = 'none';
            updateCartTotal(); // Update the total display
        } else {
            // Failure - display the error message returned by the backend
            alert('Purchase failed: ' + (data.message || 'Unknown error'));
        }
    })
    .catch(error => {
        // Handle errors if the request fails (network errors, etc.)
        console.error('Error completing purchase:', error);
        alert('An error occurred. Please try again.');
    });
});

</script>