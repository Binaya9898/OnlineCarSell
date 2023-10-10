<?php
session_start();
include '../DatabaseConnection/db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['contact'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql = "INSERT INTO Seller_Registration (Name, Address, Phone, Email, Username, Password) VALUES ('$name', '$address', '$phone', '$email', '$username', '$password')";
    $result=mysqli_query($conn,$sql);
    if ($result){
        echo "added successfully";
        $sql2="SELECT * FROM Seller_Registration WHERE username = '$username' AND password = '$password'";
         $result2=mysqli_query($conn,$sql2);
        if ($result2){
        if(mysqli_num_rows($result2)>0){
            while($row=mysqli_fetch_assoc($result2)){
            $_SESSION['username']=$row['Username'];
            $_SESSION['password']=$row['Password'];
            $_SESSION['id']=$row['Id'];
            }
        }
        $message="Seller Added Succesfully";
        $encmessage=base64_encode($message);
        header("location:../Success/success.php?message=$encmessage");


    }else{
        echo mysqli_error($conn);
    }
    // header("location:../index.php");


}else{
    echo mysqli_error($conn);
}
}
?>