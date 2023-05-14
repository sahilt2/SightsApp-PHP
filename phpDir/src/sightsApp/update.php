<?php
include 'db.php';


if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $sql="select * from sights where id=$id";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $name = $row['place_name'];
    $location = $row['place_location'];
    $description = $row['place_description'];
    $img = $row['img'];
   
} 



if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit'])){
        $name = htmlspecialchars($_POST['sight']);
        $location = htmlspecialchars($_POST['location']);
        $img = htmlspecialchars($_POST['image']);
        $description = htmlspecialchars($_POST['description']);

        $stmt = $conn->prepare("update sights set place_name=?,place_location=?,place_description=?,img=? where id=?");
        $stmt->bind_param("ssssi", $name,$location,$description,$img,$id);

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
        <input type="text" name="sight" value="<?= $name ?>" required>
        <label for="location">Location</label>
        <input type="text" name="location" value="<?= $location ?>" required>
        <label for="image">Image URL</label>
        <input type="url" name="image" value="<?= $img ?>" required>
        <label for="description">Description</label>
        <textarea name="description" cols="30" rows="10"><?= $description ?></textarea>
      <button class = "add" type="submit" name="submit">Submit</button>
    </form>
    </div>
</body>
</html>