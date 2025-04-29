
<?php 
    $order = array();
    $opt1 = 0;
    if (isset($_GET["submit"])) {
        if (isset($_GET["Chicken"])) {
            array_push($order, $_GET["Chicken"] . " 500");
        }
        if (isset($_GET["Shawarma"])) {
            array_push($order, $_GET["Shawarma"] ." 500"); 
        }
        if (isset($_GET["FrenchFries"])) {
            array_push($order, $_GET["FrenchFries"] ." 2131122");
        }
        if (isset($_GET["MashedSoup"])) {
            array_push($order, $_GET["MashedSoup"] ." 50000");
        }
        if (isset($_GET["Sisig"])) {
            array_push($order, $_GET["Sisig"] ." 242");
        }
        foreach ($order as $k => $v) 
        {
            echo " {$k} . {$v} <br>";
        }
        
    }
   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action = "index.php" method = "get">
        <input type = "checkbox" name="Chicken" value = "Chicken" > Chicken <p><?php echo $opt1; ?></p><br>
        <input type = "checkbox" name = "Shawarma" value = "Shawarma"> Shawarma <br>
        <input type = "checkbox" name = "FrenchFries" value = "French Fries">French Fries<br>
        <input type = "checkbox" name = "MashedSoup" value = "Mashed Soup"> Mashed Soup<br>
        <input type = "checkbox" name = "Sisig" value = "Sisig">Sisig<br>
        <input type = "submit" name="submit">
    </form>
</body>
</html>


