<!DOCTYPE html>
<html>
<head>
<title>MeSomb Payment Button</title>
</head>
<body>

  <button id="paymentButton">Pay Now</button>

  <script>
    const paymentButton = document.getElementById('paymentButton');

    paymentButton.addEventListener('click', () => {
      // Replace with your actual MeSomb application key
      const applicationKey = '9b80d408cb3b0577c2a8125bc0739cfcdca9d090'; 

      // Payment details
      const paymentData = {
        amount: 100, // Amount to be paid
        payer: '670090909', // Replace with the actual payer's phone number
        fees: true,
        service: 'MTN', // or 'ORANGE' depending on the payment method
        country: 'CM',
        currency: 'XAF'
      };

      // Make the API call
      fetch('/api/v1.1/payment/collect/', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-MeSomb-Application': applicationKey
        },
        body: JSON.stringify(paymentData)
      })
      .then(response => response.json())
      .then(data => {
        // Handle the response
        if (data.success) {
          // Payment successful
          alert('Payment successful!');
          // You can optionally redirect to a success page
          // window.location.href = data.redirect;
        } else {
          // Payment failed
          alert('Payment failed. Please try again.');
        }
      })
      .catch(error => {
        // Handle errors
        console.error('Error:', error);
        alert('An error occurred. Please try again later.');
      });
    });
  </script>

</body>
</html>




