<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/save-order-and-pay" method="POST"> 
        <input type="hidden" name="user_email" value="<?php echo $email; ?>"> 
        <input type="hidden" name="amount" value="<?php echo $amount; ?>"> 
        <input type="hidden" name="cartid" value="<?php echo $cartid; ?>"> 
        <button type="submit" name="pay_now" id="pay-now" title="Pay now">Pay now</button>
    </form>
</body>
</html>