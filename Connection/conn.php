<?php 

$con = mysqli_connect('localhost' , 'root' , '' , 'Healix');

if($con != false)
{
    header('form.html');
}
else {
    echo "FAlied!";
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $code = $_POST['code'];

    $query = "INSERT INTO `data` (`name` , `email` , `mobile` , `code`) VALUES ('$name' , '$email' , '$mobile' , '$code');";
    mysqli_query($con , $query);
    echo "successfully !!";
}