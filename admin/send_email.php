<?php			                             
$to      = $email;
$subject = 'Bayt Study Signup Verification';
$message = '
                            
Hello '.$name.' .. Thanks for signing up with Blink Market !
Your account has been created, you can login with the following link.                             
------------------------
Email : '.$email.'
Password: '.$password.'
------------------------
                             
Please click this link to activate your account:
https://www.=localhost/project2/sinIn.php';
                                                 
$headers = 'From:noreply@blinck.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email
                            
?>