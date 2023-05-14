<?php
include 'db.php';


if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit'])){
        $name = htmlspecialchars($_POST['sight']);
        $location = htmlspecialchars($_POST['location']);
        $img = htmlspecialchars($_POST['image']);
        $description = htmlspecialchars($_POST['description']);

        $stmt = $conn->prepare("insert into sights(place_name,place_location,place_description,img) values(?,?,?,?)");
        $stmt->bind_param("ssss", $name,$location,$description,$img);

        $stmt->execute();

        $stmt->close();
        $conn->close();

        header("Location:home.php");
        exit();


    }
}

?>
<?php include '../header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Add Sights</title>
</head>
<body>
    <div class="form-container">
    <form action="" method="post">
        <label for="name">Sight Name</label>
        <input type="text" name="sight" required>
        <label for="location">Location</label>
        <input type="text" name="location" required>
        <label for="image">Image URL</label>
        <input type="url" name="image" required>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
      <button type="submit" name="submit">Submit</button>
    </form>
    </div>
</body>
</html>