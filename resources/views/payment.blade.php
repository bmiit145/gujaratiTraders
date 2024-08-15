<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>
    <form action="/payment/process" method="POST">
        @csrf

        <input type="hidden" name="tid" value="{{ uniqid() }}">
        <input type="hidden" name="order_id" value="{{ 'ORDER'.uniqid() }}">
        <input type="hidden" name="amount" value="100">
        <input type="hidden" name="currency" value="INR">
        <button type="submit">Pay ₹100</button>
    </form>
</body>
</html>
