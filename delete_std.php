<?php
$servername="localhost";
$username="root";
$password="12345678";
$dbname="students";
$connection = @new mysqli($servername, $username, $password, $dbname);

$id = $_GET["id"];
$sql = "DELETE FROM `std_info` WHERE `id` = '$id'";
$query = mysqli_query($connection, $sql);
mysqli_close($connection);
if(!$query){
    die('<script> Swal.fire("การแสดงข้อมูลล้มเหลว") </script>');
}else{
    header("Location: ./student.php? status=1");
    exit();
}
?>