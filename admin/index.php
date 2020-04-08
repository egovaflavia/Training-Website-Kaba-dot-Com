<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Kaba.com</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <div class="container">
        <div class="info">
        </div>
    </div>
    <div class="form">
        <div><img width="200px" src="Avatar_5.png" /></div><br><br>
        <form class="login-form" action="proses_login.php" method="POST">
            <input type="text" name="username" placeholder="username" />
            <input type="password" name="password" placeholder="password" />
            <input type="submit" name="login" value="Login" style="color: black; background-color: green">
        </form>
    </div>
    <video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
        <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4" />
    </video>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>

</html>