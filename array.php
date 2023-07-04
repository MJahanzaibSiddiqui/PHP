<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Practice</title>
</head>
<body>
    <?php
    $myarray = array("Pakistan","England","Austrailia","India",);
    echo $myarray[0]."".$myarray[1]."".$myarray[2]."".$myarray[3];
    echo"<br/>";
    //indexed array example 2//
    $myarray[0]=11;
    $myarray[1]=22;
    $myarray[2]=33;
    $myarray[3]=44;
    echo $myarray[0]."".$myarray[1]."".$myarray[2]."".$myarray[3];
    echo"<br/>";
    // indexed array with foreach loop
    $countryarray= array("Pakistan","England","Austrailia","India",);
    foreach ($countryarray as $item ){
        echo $item ."<br>";
    }
    //array lenght 
    $countryarray= array("Pakistan","England","Austrailia","India",);
    $arraylength = count ( $countryarray);
    echo  $arraylength;
    echo "</br>";
    //associative array
    //one approach to create anassociative array.
    $age= array("john"=>20,"roger"=>10,"susan"=>60);
    echo "age of john is ". $age['john']."<br/>";
    echo "age of john is ". $age['roger']."<br/>";
    echo "age of john is ". $age['susan']."<br/>";
    //another approach to create an associative array.
    $age['john']="adult";
    $age['roger']="child";
    $age['susan']="senior citizen";
    echo "john is ". $age['john']."<br/>";
    echo "roger is ". $age['roger']."<br/>";
    echo "susan is ". $age['susan']."<br/>";
    ?>
    
</body>
</html>