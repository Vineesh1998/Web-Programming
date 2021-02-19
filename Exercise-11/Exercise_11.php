<html>
<head>
    <title>Form Design</title>
    <style>
        .form
        {
            background-color:purple;
            width:450px;
            margin:0 auto;
            padding:100px 50px;
        }
        input
        {
            width:300px;
            border:none;
            border-radius:50px;
            padding:10px 20px;
            margin-bottom:15px;
        }
        table
        {
            background:purple;
        }
        p
        {
            text-align:center;
            color:orange;
        }
        h1
        {
            color:yellow;
        }
        </style>
</head>
<body>
    <div class="form">
    <form action="result.php" method="POST">
<table align="center">
<tr><th><h1><u>MY FORM</u></h1></th></tr>
<tr><td><input placeholder="Username" type="text" name="user_name" value="<?php echo htmlspecialchars($name) ?>"><br>
<?php if(isset($name_error)){ ?>
    <p><?php echo $name_error ?></p>
<?php } ?>
</td></tr>
<tr><td><input placeholder="Email" type="email" name="user_email" value="<?php echo htmlspecialchars($email) ?>"><br>
<?php if(isset($email_error)){ ?>
    <p><?php echo $email_error ?></p>
<?php } ?>
</td></tr>
<tr><td><input placeholder="Password" type="password" name="password" value="<?php echo htmlspecialchars($password) ?>">
<?php if(isset($password_error)){ ?>
    <p><?php echo $password_error ?></p>
<?php } ?>
</td></tr>
<tr><td><input placeholder="PH" type="text" name="phone" value="<?php echo htmlspecialchars($phone) ?>">
<?php if(isset($ph_error)){ ?>
    <p><?php echo $ph_error ?></p>
<?php } ?>
</td></tr>
<tr><td><input type="submit" name="submit"></td></tr>
</div>
</table>
</form>
</body>
</html>
