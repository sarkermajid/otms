<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <style>
        .div-one{
            height: auto;
            width: 100%;
            background-color: yellow;
            color: black;
            font-size: 12px;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="div-one">
        <h4>Congratulation {{ $value['name'] }}, your enroll submit successfully. your may see your enroll status
        aftar login
        </h4>
        <h5>Your login credential is given below:</h5>
        <p>login url: <a href="{{ $value['login_url'] }}" target="_blank">Click here for login</a></p>
        <p>Email: {{ $value['email'] }}</p>
        <p>Password: {{ $value['password'] }}</p>
        <hr>
        <p>Thank You.</p>
    </div>
</body>
</html>
