<?php
include '../Partials/siteurl.php';
include '../DatabaseConnection/db.php';
session_start();
if (!isset($_SESSION["username"]) || !isset($_SESSION["password"])){
    header("Location:../LoginPage.php");
}
else{
  $seller_id=$_SESSION['id'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $make=$_POST["make"];
  $model=$_POST["model"];
  $year=$_POST["year"];
  $milage=$_POST["milage"];
  $location=$_POST["location"];
  $price=$_POST["price"];

  $sql = "INSERT INTO Car_Registration (SellerID, Make, Model, Year, Milage, Location, Price) VALUES ('$seller_id', '$make', '$model', '$year', '$milage', '$location', '$price')";
  $result=mysqli_query($conn,$sql);
  if($result){
      $message="Car Added Succesfully";
      $encmessage=base64_encode($message);
      header("location:../Success/success.php?message=$encmessage");
  }
  else{
      echo mysqli_error($conn);
  }
  

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../style.css" />
  </head>
  <body>
    <section class="container">
      <header>Add your Car</header>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method ="POST" class="form">
        <div class="input-box">
          <label>Make</label>
          <input type="text" placeholder="Enter Make" name="make" required />
        </div>
        <div class="column">
        <div class="input-box">
          <label>Model</label>
          <input type="text" placeholder="Enter Model" name="model" required />
        </div>

        
          <div class="input-box">
            <label>Year</label>
            <input type="date" name="year" required />
          </div>
          <div class="input-box">
            <label>Milage</label>
            <input type="text" placeholder="Enter milage" name="milage" required />
          </div>
          </div>

          <div class="input-box">
          <label>Location</label>
          <input type="text" placeholder="Enter email address" name="location" required />
       
        </div>
       
          </div>
        </div>
     
       <div class="input-box">
        <label for="">Price</label>
        <input type="number" placeholder="Enter price" name="price" required />
       </div>
        <button>Submit</button>
      </form>
      <div class="back-button">
        <a href="../index.php" class="label">back</a> 
      </div>
    </section>
  </body>
</html>