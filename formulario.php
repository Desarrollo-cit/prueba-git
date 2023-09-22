<!DOCTYPE html>
<html>
<head>
    <title>Formulario de ejemplo</title>
</head>
<body>
    <h1>Formulario de ejemplo</h1>
    <form action="procesar_formulario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
        <br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
