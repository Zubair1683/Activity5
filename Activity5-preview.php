<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="activity5.css">
    <title>Preview</title>
</head>
<body>
    <h1>Preview</h1>
    <?php
    
    if(empty($_POST['name'])){
        echo "Name: "."Not provided"."<br>";
    }
    else{
        echo $_POST['name']."<br>";
    }

    if(empty($_POST['username'])){
        echo "Username: "."Not provided"."<br>";
    }
    else{
        echo $_POST['username']."<br>";
    }

    if(empty($_POST['password'])){
        echo "Password: "."Not provided"."<br>";
    }
    else{
        echo $_POST['password']."<br>";
    }

    if(empty($_POST['address'])){
        echo "Address: "."Not provided"."<br>";
    }
    else{
        echo $_POST['address']."<br>";
    }

    if(empty($_POST['country'])){
        echo "Country: "."Not provided"."<br>";
    }
    else{
        echo $_POST['country']."<br>";
    }

    if(empty($_POST['zipcode'])){
        echo "Zip Code: "."Not provided"."<br>";
    }
    else{
        echo $_POST['zipcode']."<br>";
    }

    if(empty($_POST['email'])){
        echo "Email: "."Not provided"."<br>";
    }
    else{
        echo $_POST['email']."<br>";
    }

    if(empty($_POST['sex'])){
        echo "Sex: "."Not provided"."<br>";
    }
    else{
        echo $_POST['sex']."<br>";
    }

    if(empty($_POST['language'])){
        echo "Language: "."Not provided"."<br>";
    }
    else{
        
        for($i=0;$i<sizeof($_POST['language']);$i++){
            echo $_POST['language'][$i]."<br>";
        }
    }
    
    if(empty($_POST['about'])){
        echo "About: "."Not provided"."<br>";
    }
    else{
        echo $_POST['about']."<br>";
    }


    ?>
</body>
</html>