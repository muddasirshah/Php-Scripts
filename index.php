
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Php Captcha by Muddasir Shah</title>
</head>
<body>
<img alt="captcha" src="captcha.php">
<form method="POST" action="#">
<input type="text" name="usr_captcha">
<button name="submit">Submit</button>
</form>
<?php
//Use this captcha as server validation, this captcha uses a session variable.
session_start();
$captcha_code = $_SESSION['captcha_code']; // Captcha Code as a string obtained through php session

$user_code = $_POST['usr_captcha']; // Submitted by User in Form
if(isset($_POST['submit'])){
    if($captcha_code===$user_code){
        echo "<script>alert('Correct');</script>";
    }
    else{
        echo "<script>alert('Incorrect');</script>";
    }
}
?>
<p>&copy; <?php echo date('Y'); ?> Muddasir Shah - All Rights Reserved.</p>
</body>
</html>
