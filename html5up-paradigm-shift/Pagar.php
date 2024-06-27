<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Pagar.css">
</head>
<body>
    <?php
    $name=$_POST['name'];
    $correo=$_POST['email'];
    $plan=$_POST['plan'];
    ?>
<h2>Ticket de Pago</h2>
<table>
    <tr>
        <th>Nombre del suscriptor</th>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <th>Cantidad:</th>
        <td><?php echo $plan; ?></td>
    </tr>
    <tr>
        <th>Correo de el suscriptor:</th>
        <td>$ <?php echo $correo; ?></td>
    </tr>
    <tr>
        <th>Total a Pagar</th>
        <td><?php echo $plan; ?></td>
    </tr>
</table> 
<br>
<img src="CodigodeBarras.png" alt="">
</body>
</html>