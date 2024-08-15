<!php
$server = "localhost";
$database = "administrador";
$user = "root";
$password = "";

try {
    $conn = new PDO ("mysql:host=$server; dbname=$database", $user, $password)
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script>alert('conexion exitosa.');</script>";


}
?>


