<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
    <?php 
$dayname="funday";

switch($dayname)
{
    case "monday":
    echo "first day of week";
    break;
    case "tuesday":
    echo "second day of week";
    break;

    case "wednessday":
    echo "third day of week";
    break;
    case "thursday":
    echo "fourth day of week";
    break;
    case "friday":
    echo "fifth day of week";
    break;
    case "saturday":
    echo "Sixth day of week";
    break;
    case "sunday":
    echo "Seventh day of week";
    break;
    default:
    echo"invalid";
    break; 

}






 ?>

</body>
</html>