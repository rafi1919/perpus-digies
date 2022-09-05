<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Perpusku</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.ICO">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <!-- css -->
    <link rel='stylesheet' type='text/css' media='screen' href='./css/login.css'>
</head>
<body>
    <?php
        include 'koneksi.php';
    ?>
    <div class="form-group">
        <h2>Login</h2>
        <div class="form">
          <label>username</label>
          <input type="text"  id="username" name="user"/>
          <label>password</label>
          <input type="password" id="password" name="pass" />
        </div>
        <p>dont'have password? <a href="register.php">Register</a></p>
        <button type='submit' name='submit' class='btn btn-success' onClick="login()">submit</button>
    </div>
    <script src="login.js"></script>
</body>
</html>