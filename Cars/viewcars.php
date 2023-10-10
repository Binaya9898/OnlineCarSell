<?php
include '../DatabaseConnection/db.php';
include '../Partials/siteurl.php';

session_start();
if (!isset($_SESSION["username"]) || !isset($_SESSION["password"])){
    header("Location:../LoginPage.php");
}
else{
  $seller_id=$_SESSION['id'];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search=$_POST["sbox"];
  

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
      
        img{
            display:inherit;
            width:400px;
            height: 400px;
        }
        h1{
            text-align: center;
            margin-bottom: 50px;
            margin-top: 50px;
            color:blue;

        }
        
    </style>

</head>

<body>
<?php 
include '../Navigation/navbar.php';
?>
<div class="container-fluid col-md-12">
<h1>Search Result for  <?php  echo $search ?> </h1>

    <div class="row col-md-12">
    <?php
$sql = "SELECT * FROM Car_Registration as cr inner join Seller_Registration as sr on cr.SellerId=sr.Id WHERE Make LIKE '%$search%' OR Model LIKE '%$search%'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Extract car details from the row
        $make = $row['Make'];
        $model = $row['Model'];
        $milage = $row['Milage'];
        $price = $row['Price'];
        $description = "";
        $imageURL = '../images/car.png';
        $sellerName = $row['Name'];
        $sellerEmail = $row['Email'];
        echo '<div class="col-md-2">';
        echo '</div>';



        // Generate HTML for each car
        echo '<div class="col-md-5">';
        echo '<h2> Make:' . $make. '</h2>';
        echo '<h2> Model:' . $model . '</h2>';
        echo '<h2> Milage:' . $milage. '</h2>';
        echo '<h2> Price:' . $price . '</h2>';
        echo '<h2> Seller Name: ' . $sellerName . '</h2>';
        echo '<h4> Seller Email: ' . $sellerEmail . '</h4>';

        echo '<p>' . $description . '</p>';
        echo '</div>';
        echo '<div class="col-md-5">';

        echo '<img src="' . $imageURL . '" >';
        echo '</div>';

        echo '</div>';
        break;
    }
} else {
    echo '<p>No cars found for the search term: ' . $search . '</p>';
}
?>
    
</div>
    </div>

      

    
</body>
</html>