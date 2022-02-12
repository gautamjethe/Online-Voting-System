<?php
    include("connection.php");

    $name = $_POST['name'];
    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $add = $_POST['add'];
    $image = $_FILES['image']['name'];
    //$tmp_name = $_FILES['image']['tmp_name'];
    $file_name = str_replace(" ", "", $_FILES['image']['name']);
    $role = 1;
    $post = $_POST['post'];
    
    $connect2 = mysqli_connect("localhost", "root", "", "media");
    $sql=mysqli_query($connect2,"select * from user where mobile='$mobile'");
    if(mysqli_num_rows($sql)>0){
    while($app=mysqli_fetch_assoc($sql)){
       $email=$app['mobile']; 


    }
}
if($email==$mobile){
    echo '<script>
    alert("Account already exists !");
    window.location = "/media/register.php";
</script>';
if($cpass!=$pass){
    echo '<script>
            alert("Passwords do not match!");
            window.location = "/media/register.php";
        </script>';
}

}
else{
    move_uploaded_file($file_name,"../uploads/$image");
    $insert1 = mysqli_query($connect1, "insert into user (name, mobile, password, address, photo, status, votes, role, post) values('$name', '$mobile', '$pass', '$add', '$image', 0, 0, '$role', '$post') ");
    $insert2 = mysqli_query($connect2, "insert into user (name, mobile, password, address, photo, status, votes, role, post) values('$name', '$mobile', '$pass', '$add', '$image', 0, 0, '$role', '$post') ");
    $insert3 = mysqli_query($connect3, "insert into user (name, mobile, password, address, photo, status, votes, role, post) values('$name', '$mobile', '$pass', '$add', '$image', 0, 0, '$role', '$post') ");
    $insert4 = mysqli_query($connect4, "insert into user (name, mobile, password, address, photo, status, votes, role, post) values('$name', '$mobile', '$pass', '$add', '$image', 0, 0, '$role', '$post') ");
    $insert5 = mysqli_query($connect5, "insert into user (name, mobile, password, address, photo, status, votes, role, post) values('$name', '$mobile', '$pass', '$add', '$image', 0, 0, '$role', '$post') ");
    $insert6 = mysqli_query($connect6, "insert into user (name, mobile, password, address, photo, status, votes, role, post) values('$name', '$mobile', '$pass', '$add', '$image', 0, 0, '$role', '$post') ");
    

    if($insert1&$insert2&$insert3&$insert4&$insert5&$insert6){
        echo '<script>
                alert("Registration successfull!");
                window.location = "/media/index.php";
            </script>';
    }
}
//$re=$app['reason'];

    
    
    
?>