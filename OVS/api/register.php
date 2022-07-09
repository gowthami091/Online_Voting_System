<?php
    include("connect.php");

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $adhaar = $_POST['adhaar'];
    $cadhaar = $_POST['cadhaar'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $role = $_POST['role'];

    move_uploaded_file($tmp_name, "../uploads/$image");
    $insert = mysqli_query($connect, "INSERT INTO user (name,mobile,address,adhaar,password,photo,role,status,votes) VALUES ('$name','$mobile','$address','$adhaar','$password','$image','$role',0,0)");
    
    if($insert){
        echo '
        <script>
            alert("Registration successfull!");
            window.location = "../";
        </script>
    ';       
    }
    else{
        echo '
        <script>
            alert("Registration not possible!");
            window.location = "../routes/register.html";
        </script>
    ';       
    }   

?>
