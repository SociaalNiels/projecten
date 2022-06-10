<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://fonts.googleapis.com/css?family=Baloo+Bhai"
      rel="stylesheet"/>
    <link rel="stylesheet" href="style.css" />
    
    <title>Document</title>
</head>
<body>
    <h1 class="heading">PHP Contact Form</h1>
<!-- Need to set method to post to send data -->
    <form method="post" action="index.php"> 
      <label for="name">Name</label>
      <input type="text" placeholder="Name" name="name"/>
      <label for="email">Email Address</label>
      <input type="text" placeholder="Email Address" name="emailAddress"/>
      <label for="subject">Subject</label>
      <input type="text" placeholder="land" name="subject"/>
      <label for="message">Message</label>
      <input type="text" placeholder="stad" name="subject"/>
      <label for="submit">Submit Form</label>
      <button class="submit-button" name="submit" type="submit">Submit</button>
    </form>
</body>
</html>
<?php


if (isset($_POST['submit'])) {


  $name = $_POST['name'];
  $email = $_POST['emailAddress'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $recipient = "john-smith@gmail.com";


  if (empty($name) || empty($email) || empty($subject) || empty($message)) {

    echo "Please fill in any missing fields!";
      } 

      else {



if(!filter_var($email, FILTER_VALIDATE_EMAIL ))  {

  echo "Please enter a valid email address.";
}

      else {


mail($recipient, $subject, $message);


header("Location: index.php?mailsend");
      }
    }



}

?>

