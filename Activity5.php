<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="activity5.css">
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1><br>

<form action="Activity5-preview.php" method="post">
  Name:<input type="text" name="name"><br>
  Username:<input type="text" name="username"><br>
  Password:<input type="password" name="password"><br>
  Address:<input type="text" name="address"><br>
  Country:<select name="country" >
        <option value="(Please select a country)" selected>(Please select a country)</option>
        <option value="USA">USA</option>
        <option value="France">France</option>
        <option value="Germany">Germany</option>
        </select><br>
  ZIP Code:<input type="text" name="zipcode"><br>
  Email:<input type="email" name="email"><br>
  Sex: <input type="radio" name="sex" value="Male">Male
       <input type="radio" name="sex" value="Female">Female<br>
  Language: <input type="checkbox" name="language[]" value="English">English
            <input type="checkbox" name="language[]" value="French">French
            <input type="checkbox" name="language[]" value="Germany">Germany <br>
  About: <textarea name="about"cols="20" rows="5"></textarea><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>


<?php




?>