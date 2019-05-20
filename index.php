<html>
<div id="form-container">

<head>
  <div id="sq-walletbox">
    <div id="sq-apple-pay-label" class="wallet-not-enabled">Apple Pay for Web not enabled.</div>
    <!-- Placeholder for Apple Pay for Web button -->
    <button id="sq-apple-pay"></button>

  <!-- link to the SqPaymentForm library -->
  <script type="text/javascript" src="https://js.squareup.com/v2/paymentform">
  </script>
    <div id="sq-masterpass-label" class="wallet-not-enabled">Masterpass not enabled.</div>
    <!-- Placeholder for Masterpass button -->
    <button id="sq-masterpass"></button>

  <!-- link to the local SqPaymentForm initialization -->
  <script type="text/javascript" src="js/sq-payment-form.js">
  </script>

  <!-- link to the custom styles for SqPaymentForm -->
  <link rel="stylesheet" type="text/css" href="css/sq-payment-form.css">

</head>

<body>

  <div id="form-container">

    <div id="sq-walletbox">
      <div id="sq-apple-pay-label" class="wallet-not-enabled">Apple Pay for Web not enabled.</div>
      <!-- Placeholder for Apple Pay for Web button -->
      <button id="sq-apple-pay"></button>

      <div id="sq-masterpass-label" class="wallet-not-enabled">Masterpass not enabled.</div>
      <!-- Placeholder for Masterpass button -->
      <button id="sq-masterpass"></button>

      <div id="sq-walletbox-divider">
        <span id="sq-walletbox-divider-label">Or</span>
        <hr />
      </div>
    <div id="sq-walletbox-divider">
      <span id="sq-walletbox-divider-label">Or</span>
      <hr />
    </div>
  </div>

  <div id="sq-ccbox">
    <!--
      Be sure to replace the action attribute of the form with the path of
      the Transaction API charge endpoint URL you want to POST the nonce to
      (for example, "/process-card")
    -->
    <form id="nonce-form" novalidate action="PATH/TO/PAYMENT/PROCESSING/PAGE" method="post">
      <fieldset>
        <span class="label">Card Number</span>
        <div id="sq-card-number"></div>

        <div class="third">
          <span class="label">Expiration</span>
          <div id="sq-expiration-date"></div>
        </div>

        <div class="third">
          <span class="label">CVV</span>
          <div id="sq-cvv"></div>
        </div>

        <div class="third">
          <span class="label">Postal</span>
          <div id="sq-postal-code"></div>
        </div>
      </fieldset>

      <button id="sq-creditcard" class="button-credit-card" onclick="requestCardNonce(event)">Pay $1.00</button>

      <div id="error"></div>

    <div id="sq-ccbox">
      <!--
        Be sure to replace the action attribute of the form with the path of
        the Transaction API charge endpoint URL you want to POST the nonce to
        (for example, "/process-card")
        After a nonce is generated it will be assigned to this hidden input field.
      -->
      <form id="nonce-form" novalidate action="PATH/TO/PAYMENT/PROCESSING/PAGE" method="post">
        <fieldset>
          <span class="label">Card Number</span>
          <div id="sq-card-number"></div>

          <div class="third">
            <span class="label">Expiration</span>
            <div id="sq-expiration-date"></div>
          </div>

          <div class="third">
            <span class="label">CVV</span>
            <div id="sq-cvv"></div>
          </div>

          <div class="third">
            <span class="label">Postal</span>
            <div id="sq-postal-code"></div>
          </div>
        </fieldset>

        <button id="sq-creditcard" class="button-credit-card" onclick="requestCardNonce(event)">Pay $1.00</button>

        <div id="error"></div>

        <!--
          After a nonce is generated it will be assigned to this hidden input field.
        -->
        <input type="hidden" id="card-nonce" name="nonce">
      </form>
    </div> <!-- end #sq-ccbox -->
      <input type="hidden" id="card-nonce" name="nonce">
    </form>
  </div> <!-- end #sq-ccbox -->

  </div> <!-- end #form-container -->
</body>
</html>