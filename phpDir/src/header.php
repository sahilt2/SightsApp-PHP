<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<header>
   <h1>Sights</h1>

   <?php if($_SERVER['PHP_SELF']=='/index.php'){

            
echo '
<nav>
<ul>
<li><a href="/sightsApp/home.php">Attractions</a> </li>

</ul>
</nav>
';
}
else if($_SERVER['PHP_SELF']=='/sightsApp/home.php'){
    echo '
    <nav>
    <ul>
    <li><a href="/">Home</a> </li>
    <li><a href="/sightsApp/add.php">Add Attraction</a> </li>
     </ul>
    </nav>
    ';

}
else if($_SERVER['PHP_SELF']=='/sightsApp/update.php'){
    echo '
    <nav>
    <ul>
    <li><a href="/">Home</a> </li>
    <li><a href="/sightsApp/home.php">Attractions</a> </li>
    <li><a href="/sightsApp/add.php">Add Attraction</a> </li>
     </ul>
    </nav>
    ';
}
else if($_SERVER['PHP_SELF']=='/sightsApp/add.php'){
    echo '
    <nav>
    <ul>
    <li><a href="/">Home</a> </li>
    <li><a href="/sightsApp/home.php">Attractions</a> </li>
     </ul>
    </nav>
    ';
}

?>

</header>
</body>
</html>
