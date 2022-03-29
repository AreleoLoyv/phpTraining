<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>
    Hola, bienvenido a una pagina de zorritos
    
</h1>
<p>Imagenes de Zorritos propiedad de : https://randomfox.ca/</p>
<?php for ($i=1; $i <= 3 ; $i++) { ?>
    <img src="https://randomfox.ca/images/<?php echo rand(0,120) ?>.jpg">
<?php } ?>

</body>
</html>