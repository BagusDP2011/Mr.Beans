<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  s
  <title>MrBeans CoffeeBeans Shop</title>
</head>

<body class="bg-gray-100">

  <!-- Header -->
  @include('header')

  <!-- Content -->
  <div class="container mx-auto px-4 py-8">

    <!-- Vision and Mission Section -->
    <section class="mb-10">
      <h1 class="text-3xl font-semibold mt-5 mb-4">Help Center</h1>
      <div class="mb-6">
        <h2 class="text-xl font-semibold mb-2">Vision</h2>
        <p class="text-gray-700">Our vision at Mr. Beans Coffee Beans Shop is to provide the finest coffee beans to coffee enthusiasts around the world. We strive to source the best beans, roast them to perfection, and deliver an exceptional coffee experience.</p>
      </div>
      <div>
        <h2 class="text-xl font-semibold mb-2">Mission</h2>
        <p class="text-gray-700">Our mission is to share our passion for coffee by offering high-quality coffee beans and related products. We are committed to providing excellent customer service, supporting sustainable coffee practices, and promoting the joy of brewing and savoring great coffee.</p>
      </div>
    </section>

    <!-- How to Checkout Section -->
    <section class="mb-8">
      <h2 class="text-2xl font-semibold mb-4">How to Checkout</h2>
      <ol class="list-decimal pl-6">
        <li class="mb-2"><strong>Add Products to Your Cart:</strong> Browse our selection of coffee beans and products. Click the "Add to Cart" button next to the items you want to purchase.</li>
        <li class="mb-2"><strong>Review Your Cart:</strong> Click the shopping cart icon at the top of the page to review the items in your cart. Make sure you've selected the right products and quantities.</li>
        <li class="mb-2"><strong>Proceed to Checkout:</strong> Click the "Proceed to Checkout" button. You may be asked to log in or provide shipping information if you haven't already.</li>
        <li class="mb-2"><strong>Choose Shipping Method:</strong> Select your preferred shipping method. Review the shipping cost and estimated delivery date.</li>
        <li class="mb-2"><strong>Payment Information:</strong> Enter your payment information securely. We accept various payment methods, including credit cards and online payment services.</li>
        <li class="mb-2"><strong>Review Your Order:</strong> Double-check your order details, shipping address, and payment information. Make any necessary adjustments.</li>
        <li class="mb-2"><strong>Place Your Order:</strong> Click the "Place Order" or "Complete Purchase" button to finalize your order. You will receive an order confirmation email shortly.</li>
      </ol>
      <p class="text-gray-700">If you encounter any issues during the checkout process or have questions about your order, please don't hesitate to <a href="{{ route('contact') }}" class="text-blue-500">contact us</a>. Our customer support team is here to assist you.</p>
    </section>

    <!-- Frequently Asked Questions (FAQ) Section -->
    <section class="mb-8">
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <h2 class="text-2xl font-semibold mb-4">Frequently Asked Questions (FAQ)</h2>
        <!-- <table class="w-full text-sm text-left">
        <thead class="bg-gray-200"> -->
        <table class="w-full text-sm text-left rtl:text-right text-blue-100 dark:text-blue-100">
          <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
            <tr>
              <th class="py-2 px-4">Question</th>
              <th class="py-2 px-4 bg-blue-500">Answer</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border px-4 py-2 bg-blue-700">How can I track my order?</td>
              <td class="border px-4 py-2 bg-blue-500">You can track your order by logging into your account and navigating to the "Order History" section. There, you'll find detailed information about the status and tracking number of your order.</td>
            </tr>
            <tr>
              <td class="border px-4 py-2 bg-blue-700">What payment methods do you accept?</td>
              <td class="border px-4 py-2 bg-blue-500">We accept various payment methods, including credit cards (Visa, Mastercard, American Express), PayPal, and bank transfers. You can select your preferred payment method during the checkout process.</td>
            </tr>
            <tr>
              <td class="border px-4 py-2 bg-blue-700">Do you offer international shipping?</td>
              <td class="border px-4 py-2 bg-blue-500">Yes, we offer international shipping to many countries worldwide. Shipping rates and delivery times may vary depending on your location. During checkout, you can enter your address to see available shipping options.</td>
            </tr>
            <tr>
              <td class="border px-4 py-2 bg-blue-700">What is your return policy?</td>
              <td class="border px-4 py-2 bg-blue-500">We have a hassle-free return policy. If you're not satisfied with your purchase for any reason, you can return it within 30 days for a full refund or exchange. Please make sure the item is unused and in its original packaging.</td>
            </tr>
            <tr>
              <td class="border px-4 py-2 bg-blue-700">How can I contact customer support?</td>
              <td class="border px-4 py-2 bg-blue-500">You can contact our customer support team by filling out the contact form on our website or by emailing us at support@example.com. We strive to respond to all inquiries within 24 hours.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

  </div>

  <!-- Footer -->
  <div class="footer bg-gray-800 text-white py-4 text-center">
    <p class="text-sm">&copy; DEVELOP BY: MrBeans Teams</p>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('#carouselExampleControls').carousel();
    });
  </script>

</body>

</html>