<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

<?php 
//variabile
$text ='General Kenobi'
?>
    <h1>Hello THERE!!! <?php echo $text;?> </h1>


 <?php
 
 $lunghezza_stringa = 'Illimitato Potere';
$lunghezza = strlen($lunghezza_stringa);
 ?>   
   
<h2> La lunghezza della stringa <?php echo $lunghezza_stringa?> 
 è: <?php echo $lunghezza;?>  </h2>  


 <?php 
//badword
$badword = $_GET['badword'];
$replaced = str_replace('forza','***', $badword)
?>
<h3>Che la <?php echo $badword?> sia con te!</h3>
<h3>Che la <?php echo $replaced?> sia con te! </h3>


    
</body>
</html>