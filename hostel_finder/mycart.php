<?php include("navbar2.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <title>cart</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-15 text-center border rounded bg-light my-4">
        <h1>MY BOOKINGS<H1>
    </div>

    <div class="col-lg-15">
      <table class="table caption-top">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Hostel Name</th>
      <th scope="col">Hostel Price</th>
      <th scope="col">Member</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
    </div>
  <tbody class="text-center">
    <?php 
    if(isset($_SESSION['cart']))
    {
    foreach($_SESSION['cart']as $key=>$value)
      {
        $sr=$key+1;
        echo"
    <tr>
      <td>$sr</td>
      <td>$value[Item_name]</td>
      <td>$value[price] <input type='hidden' class='iprice' value='$value[price]'></td>
      <td>
      <form action='manage_cart.php' method='post'>
      <input class='text-center iquantity' onchange='this.form.submit();' name='Mod_Quantity' type='number' value='$value[Quantity]' min='1' max='10'>
      <input type='hidden' name='Item_name' value='$value[Item_name]'>
      </form>
      </td>
      <td class='itotal'></td>
      <td>
      <form action='manage_cart.php' method='post'>
      <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
      <input type='hidden' name='Item_name' value='$value[Item_name]'>
      </form>
      </td>
    </tr>
      ";
      }
    }
    ?>
  </tbody>
</table>
<div class="col-lg-4">
      <div class="border bg-light rounded p-1">
      <h4>Grand Total:</h4>
<h5 class="text-right" id="gtotal"></h5>
<?php 
if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
  {
?>
<form action="purchase.php" method="POST">
    <div class="form-group row">
    <label>Full Name</label>
    <div class="col-sm-10">
      <input type="text" name="full_name" class="form-control" required>
    </div>
    <div class="form-group row">
    <label>Phone Number</label>
    <div class="col-sm-11">
      <input type="text" class="form-control" id="phone" name="phone" pattern="9[5-8][0-9]{8}" title="Enter a valid phone number (e.g., 98XXXXXXXX)" required>
    </div>
    <div class="form-group row">
    <label for="address">Address</label>
    <div class="col-sm-12">
        <input type="text" id="address" name="address" class="form-control" required>
        <small>Please provide a valid address.</small>
    </div>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Cash On delivery<br>
  <button id="payment-button" class="btn btn-outline-sucess">
  <img src="images/khalti.png">Pay with khalti</button>
  </label>
  <br>
  <br>
<form action="purchase.php" method="POST">
  <button class="btn btn-primary btn-block p-1" name="purchase" >Make Booking</button>
</div>
  </form>
  <?php
  } 
  ?>
</div>
      </div>
  </div>
  <script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');

    function subTotal()
    {
      gt=0;
      for(i=0;i<iprice.length;i++)
      {
        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
        gt=gt+(iprice[i].value)*(iquantity[i].value);
      }
      gtotal.innerText=gt;
    }
    subTotal();
  </script>
    <!-- Place this where you need payment button -->
    <!-- Place this where you need payment button -->
    <!-- Paste this code anywhere in you body tag -->
    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_8e325171ca734907a85c27f7a5813ade",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                                  $.ajax({
                  type: 'POST',
                  url: "{{ route('khalti.verifypayment') }}",
                  data: {
                      token: payload.token,
                      amount: payload.amount,
                      "_token": "{{ csrf_token() }}"
                  },
                  success: function (res) {
                    if(res.success==1){
                      window.location = response.redirecto;
                    }else{
                      checkout.hide();
                    }
                      console.log(res);
                     
                  }
              });

                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: 1000});
        }
    </script>
</body>
</html>