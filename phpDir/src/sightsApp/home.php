<?php include 'db.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>Home</title>
</head>
<body>
<?php include '../header.php' ?>
<div class="heading">
<h2>Top Attractions in Finland</h2>
</div>

<?php 
$sql = "select * from sights";
$result = mysqli_query($conn, $sql);

if ($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['place_name'];
        $location = $row['place_location'];
        $description = $row['place_description'];
        $img = $row['img'];

        echo '
        <div class = "cards">
        <div class = "card">
        <img src="'.$img.'">
        <h3>'.$name.'</h3>
        <p><span class="material-symbols-outlined">
        location_on
        </span> <span>' .$location. '</span></p>
        <p>' .$description.'</p>
        <button><a href="update.php?updateid=' .$id. '"><span class="material-symbols-outlined">
        edit
        </span></a></button>
        <button class = "delete" onclick="confirmDelete('.$id.')"><span class="material-symbols-outlined">
        delete
        </span></button>
        </div>
        </div>';
      
        
    }
}
?>

    <div id="confirmation-dialog" class="confirmation-dialog">
    <div class="dialog-content">
        <h2>Confirmation</h2>
        <p>Are you sure you want to delete this record?</p>
        <div class="dialog-buttons">
            <button id="confirm-btn" class="btn-confirm">Confirm</button>
            <button id="cancel-btn" class="btn-cancel">Cancel</button>
        </div>
    </div>
</div>
<script>
function confirmDelete(id) {
    const confirmationDialog = document.getElementById('confirmation-dialog');
   confirmationDialog.style.display = 'block';
    
    
   

    const confirmButton = document.getElementById('confirm-btn');
    const cancelButton = document.getElementById('cancel-btn');

    confirmButton.addEventListener('click', function() {
        window.location.href = 'delete.php?deleteid=' + id;
    });

    cancelButton.addEventListener('click', function() {
        confirmationDialog.style.display = 'none';
    });
}
</script>
</body>
</html>
