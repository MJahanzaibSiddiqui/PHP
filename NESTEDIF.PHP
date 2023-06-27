<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested If</title>
</head>
<body>
    <?php 
    $username="yumna";
    if(!(empty($username))){
        if($username=="yumna"){
            echo"welcome jazzy";
        }
         else{
         echo "you are not yumna";}}
     else {
     echo "username empty";} echo "<br>";
    
    
    ?>
</body>
</html>