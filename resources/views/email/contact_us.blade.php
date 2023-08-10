<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>

<body style="background: #eee;font-family:Arial, Helvetica, sans-serif">
    <div style="width: 600px; margin:40px auto 80px; border:1px solid #aaa;padding:20px ;background:#fff">
        <h3>Dear Admin,</h3>
        <p>Hope this email find you will</p>
        <br>
        <p>There is new contact us information as bellow:</p>
        <p><b>Name:</b> {{ $data['name'] }}</p>
        <p><b>Email:</b> {{ $data['email'] }}</p>
        <p><b>Message:</b> {{ $data['message'] }}</p>
        <br>
        <p>Best Regards</p>
    </div>
</body>

</html>
