<head>
  <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{env('MIDTRANS_ClientKey')}}"></script>
</head>

<body>
  <button id="pay-button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Pay!</button>
  <div id="snap-container"></div>
  <script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function($snapToken) {
      window.snap.pay('{{ $transactionHistory->snapToken }}', {
        onSuccess: function(result) {
          /* You may add your own implementation here */
          console.log(JSON.stringify(result));
          console.log("Suksessss");
          alert("Payment Success!");
          window.location.href = "{{ route('PaymentSuccess') }}";
          console.log(result);
        },
        onPending: function(result) {
          /* You may add your own implementation here */
          console.log("Pending");
          alert("Waiting your payment!");
          console.log(result);
        },
        onError: function(result) {
          /* You may add your own implementation here */
          console.log("Error");
          alert("Payment failed!");
          console.log(result);
        },
        onClose: function() {
          console.log("Penutup");
          /* You may add your own implementation here */
          alert('you closed the popup without finishing the payment');
        }
      })
    });
  </script>


</body>