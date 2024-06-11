<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> <?php include 'stylee.css';?></style>
</head>
<body>
    
<div class="container">
  <div class="title">
      <h2>Product Order Form</h2>
  </div>
  <div class="d-flex">
    <form action="" method="">
      <label>
        <span class="fname">First Name <span class="required">*</span></span>
        <input type="text" name="fname" required>
      </label>
      <label>
        <span class="lname">Last Name <span class="required">*</span></span>
        <input type="text" name="lname" required>
      </label>
      <label>
        <span>Company Name (Optional)</span>
        <input type="text" name="cn">
      </label>
      <label>
        <span>Country <span class="required">*</span></span>
        <select id="country-select" name="selection" required>
          <option value="">Select a country...</option>
        </select>
      </label>
      <label>
        <span>Street Address <span class="required">*</span></span>
        <input type="text" name="houseadd" placeholder="House number and street name" required>
      </label>
      <label>
        <span>&nbsp;</span>
        <input type="text" name="apartment" placeholder="Apartment, suite, unit etc. (optional)">
      </label>
      <label>
        <span>Town / City <span class="required">*</span></span>
        <input type="text" name="city" required> 
      </label>
      <label>
        <span>State / County <span class="required">*</span></span>
        <input type="text" name="state" required> 
      </label>
      <label>
        <span>Postcode / ZIP <span class="required">*</span></span>
        <input type="text" name="postcode" required> 
      </label>
      <label>
        <span>Phone <span class="required">*</span></span>
        <input type="tel" name="phone" required> 
      </label>
      <label>
        <span>Email Address <span class="required">*</span></span>
        <input type="email" name="email" required> 
      </label>
    </form>
    <div class="Yorder">
      <table>
        <tr>
          <th colspan="2">Your order</th>
        </tr>
        <tr>
          <td>Product Name x 2(Qty)</td>
          <td>$88.00</td>
        </tr>
        <tr>
          <td>Subtotal</td>
          <td>$88.00</td>
        </tr>
        <tr>
          <td>Shipping</td>
          <td>Free shipping</td>
        </tr>
      </table><br>
      <div>
        <input type="radio" name="dbt" value="dbt" checked> Direct Bank Transfer
      </div>
      <p>
        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
      </p>
      <div>
        <input type="radio" name="dbt" value="cd"> Cash on Delivery
      </div>
      <div>
        <input type="radio" name="dbt" value="paypal"> Paypal <span>
        <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg" alt="PayPal" width="50">
        </span>
      </div>
      <button type="button">Place Order</button>
    </div><!-- Yorder -->
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
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
