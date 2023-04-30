<!DOCTYPE html>
<html lang="en">
<head>
      <title>Data</title>
      <link rel="stylesheet" href="style2.css">
</head>
<body>
    <?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$website = $_POST["website"];
$message = $_POST["message"];

     // Send email notification
     $to = "christopherthedeveloper@gmail.com";
     $subject = "Test PHP email " . $name;
     $body = "Name: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nWebsite: " . $website . "\nMessage: " . $message;
     mail($to, $subject, $body);
 
     // Output success message
     echo "<div class='success-message'>Thank you for your submission. We will be in touch soon!</div>";
     ?>
     <script>
     setTimeout(function(){
         document.querySelector('.success-message').style.display = 'none';
     }, 8000);
 </script>
</body>
</html>
