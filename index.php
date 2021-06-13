<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css">
 <title>Contact Form</title>
</head>
<body>
 <div>
 <h1>Get in touch</h1>
 <p>Please fill in the fields</p>
 <form action="contactphp.php" method="POST">
<input type="text" name="name" placeholder="Full Name" required>
<input type="text" name="email" placeholder="E-mail" required>
<input type="text" name="subject" placeholder="Subject">
<textarea name="message" placeholder="Enter message" required></textarea>
<button type="submit" name="submit">SEND E-MAIL</button>
 </form>
 </div>
</body>
</html>