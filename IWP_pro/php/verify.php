<?php
session_start();
function generateNumericOTP($n) {
    $generator = "1357902468";
    $result = "";
    for ($i = 1; $i <= $n; $i++) { 
        $result .= substr($generator, (rand()%(strlen($generator))), 1); 
    } 
    return $result;
}
$otp=generateNumericOTP(6);
$_SESSION["otp"]=$otp;
$to_email = $_SESSION['email'];
$subject = "One time password";
$body = $otp;
$headers = "From: sender email";
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>

<form action="otpcheck.php" method="POST">
	<input type="number" name="otp">
	<button type="submit">check</button>
</form>

