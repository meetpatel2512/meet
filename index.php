<?php
if(isset($_POST['name'])){
$server = "localhost"
$username = "root"
$password = ""

$con = mysqli_connect($server,$username,$password);
if(!$con){
    die("Connection to this database faild due to" . mysqli_connect_error());
}
$fname = $_POST['fname']
$email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']


$sql = INSERT INTO `meetdb.meetdb` (`fname`, `email`, `subject`, `message`, `time`) VALUES ('$fname', '$email', '$subject','$message', current_timestamp());

if($con->query($sql)==true){
    echo "Insert SuccessFully"
}
else{
    echo "Error: $sql <br> $con->error";
}

$con->close();

}?>