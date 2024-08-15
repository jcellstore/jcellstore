<?php
require_once "conexion.php";
require_once "layouts/MainLayout.php";

$stmt = $conn->prepare("SELECT * FROM servicios WHERE id_servicio = :idservicio;");
$stmt->bindParam("idservicio", $idservicio, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch();

$stmt2 = $conn->prepare("SELECT * FROM productos WHERE id_producto = :idproducto;");
$stmt2->bindParam("idproducto", $idproducto, PDO::PARAM_INT);

$head = function () {
?>
<title>Producto</title>
<?php
};
$bodyHeader = function () {};
$bodyCardContainer = function () {};

$body = function () {
?>

<?php
};

renderMainLayout($head, $bodyHeader, $bodyCardContainer, 2, $body);
?>