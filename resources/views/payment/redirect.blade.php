<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting...</title>
</head>
<body>
    <p>We are redirecting you to the payment page. PLEASE WAIT...</p>
    <form id="payu_form" action="{{ $url }}" method="POST" target="_blank">
        @foreach($parameters as $key => $value)
            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
        @endforeach
    </form>
    <script type="text/javascript">
        document.getElementById('payu_form').submit();
    </script>
</body>
</html>
