<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flowbite/css/flowbite.min.css">
  <title>MrBeans CoffeeBeans Shop</title>
</head>

<body>
  @include('header')

  <!-- Isi -->
  <div class="row mt-5 no-gutters justify-content-center">
    <div class="col-md-11 m-5">
      <h1 class="mb-4">Help Center</h1>

      <!-- Vision and Mission Section -->
      <section>
        <h2>Vision</h2>
        <p>Our vision at Mr. Beans Coffee Beans Shop is to provide the finest coffee beans to coffee enthusiasts around the
          world. We strive to source the best beans, roast them to perfection, and deliver an exceptional coffee
          experience.</p>

        <h2>Mission</h2>
        <p>Our mission is to share our passion for coffee by offering high-quality coffee beans and related
          products. We are committed to providing excellent customer service, supporting sustainable coffee practices,
          and promoting the joy of brewing and savoring great coffee.</p>
      </section>

      <!-- How to Checkout Section -->
      <section class="mt-5">
        <h2>How to Checkout</h2>

        <ol>
          <li><strong>Add Products to Your Cart:</strong> Browse our selection of coffee beans and products.
            Click the "Add to Cart" button next to the items you want to purchase.</li>
          <li><strong>Review Your Cart:</strong> Click the shopping cart icon at the top of the page to review
            the items in your cart. Make sure you've selected the right products and quantities.</li>
          <li><strong>Proceed to Checkout:</strong> Click the "Proceed to Checkout" button. You may be asked
            to
            log in or provide shipping information if you haven't already.</li>
          <li><strong>Choose Shipping Method:</strong> Select your preferred shipping method. Review the
            shipping
            cost and estimated delivery date.</li>
          <li><strong>Payment Information:</strong> Enter your payment information securely. We accept various
            payment methods, including credit cards and online payment services.</li>
          <li><strong>Review Your Order:</strong> Double-check your order details, shipping address, and
            payment
            information. Make any necessary adjustments.</li>
          <li><strong>Place Your Order:</strong> Click the "Place Order" or "Complete Purchase" button to
            finalize
            your order. You will receive an order confirmation email shortly.</li>
        </ol>

        <p>If you encounter any issues during the checkout process or have questions about your order, please
          don't hesitate to <a href="{{ route('contact') }}">contact us</a>. Our customer support team is
          here to assist
          you.</p>
      </section>
      <!-- Flowbite Table -->
      <section class="mt-5">
        <h2>Frequently Asked Questions (FAQ)</h2>
        <!-- <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth"> -->
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead>
            <tr>
              <th>Question</th>
              <th>Answer</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>How can I track my order?</td>
              <td>You can track your order by logging into your account and navigating to the "Order History" section. There, you'll find detailed information about the status and tracking number of your order.</td>
            </tr>
            <tr>
              <td>What payment methods do you accept?</td>
              <td>We accept various payment methods, including credit cards (Visa, Mastercard, American Express), PayPal, and bank transfers. You can select your preferred payment method during the checkout process.</td>
            </tr>
            <tr>
              <td>Do you offer international shipping?</td>
              <td>Yes, we offer international shipping to many countries worldwide. Shipping rates and delivery times may vary depending on your location. During checkout, you can enter your address to see available shipping options.</td>
            </tr>
            <tr>
              <td>What is your return policy?</td>
              <td>We have a hassle-free return policy. If you're not satisfied with your purchase for any reason, you can return it within 30 days for a full refund or exchange. Please make sure the item is unused and in its original packaging.</td>
            </tr>
            <tr>
              <td>How can I contact customer support?</td>
              <td>You can contact our customer support team by filling out the contact form on our website or by emailing us at support@example.com. We strive to respond to all inquiries within 24 hours.</td>
            </tr>
          </tbody>
        </table>
      </section>

    </div>
  </div>

  <div class="copyright text-center text-white font-weight-bold bg-warning p-2">
    <h3 class="d-inline-block mr-2"> DEVELOP BY: MrBeans Teams </h3><i class="far fa-copyright"></i>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('#carouselExampleControls').carousel();
    });
  </script>

</body>

</html>