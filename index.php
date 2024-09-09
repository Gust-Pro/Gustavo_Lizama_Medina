<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Agencia de Viajes - Búsqueda de Vuelos y Paquetes Turísticos</title>
</head>
<body>
    <h1>Busca tu próximo destino</h1>
    <form action="resultados.php" method="GET">
        <label for="destino">Destino:</label>
        <input type="text" id="destino" name="destino" required>
        <br>
        <label for="fecha">Fecha de viaje:</label>
        <input type="date" id="fecha" name="fecha" required>
        <br>
        <button type="submit">Buscar</button>
    </form>
</body>
</html>
