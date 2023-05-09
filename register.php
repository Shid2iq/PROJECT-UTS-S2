<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
     <!--Logo-->
     <link rel="icon" type="image/x-icon" href="img/img/paw-solid.png" />
     <link rel="stylesheet" href="css/style.css">
      <!-- Customized Bootstrap Stylesheet -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
body {
  background-color: #ffb413;
}
.form {
  background-color : #fff389;
}
form {
  background-color : #fff389;
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  border-radius: 5px;
}

h2 {
  text-align: center;
}

label {
  display: block;
  margin-top: 10px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

a {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
}

a:hover {
  background-color: #45a049;
}

    </style>
</head>
<body>
<h2 style="padding-top: 20px; padding-bottom: 10px;">Registration Form</h2>
<form class="form">
  <div class="text-center" >
  <img src="img/img/paw-solid.png" style="margin-bottom: 20px; width: 150px; height: 150px;"  alt="profile">
  </div> 
  <label for="username">Username:</label>
  <input type="text" id="username" name="username">

  <label for="email">Email:</label>
  <input type="email" id="email" name="email">

  <label for="password">Password:</label>
  <input type="password" id="password" name="password">

  <a href="login.php">Register</a>
  <a href="login.html">Back</a>
</form>

</body>
</html>