<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Not Allowed</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .code {
            font-size: 100px;
            font-weight: bold;
            color: #34a853;
            margin-bottom: 20px;
        }

        .code .lock {
            position: relative;
            top: -10px;
            font-size: 50px;
            color: #6c757d;
            margin-left: -10px;
        }

        .message {
            font-size: 20px;
            color: #6c757d;
        }

        button {
            background-color: #34a853;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        button:hover {
            background-color: #34a853;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="code">
            <span>4</span>
            <span class="lock">🔒</span>
            <span>3</span>
        </div>
        <div class="message">Access denied...</div>
        <div class="message">You do not have permission to view this resource.</div>
        <button class="return">Go to homepage</button>
    </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {

    $('.return').click(function() {
        window.location.href = "{{ route('student.dashboard')}}";
    });

    function checkIpStatus() {
        $.ajax({
            url: '{{ route('check-ip') }}',
            type: 'GET',
            success: function(response) {
                console.log(response.allowed); // Log response for debugging
                if (response.allowed) {
                    // back to previous url 
                    window.history.back();
                }
            },
            error: function(xhr, status, error) {
                console.error('Error checking IP status:', error);
            }
        });
    }

    // checkIpStatus();

    setInterval(checkIpStatus, 50000);
});

</script>

</body>
</html>