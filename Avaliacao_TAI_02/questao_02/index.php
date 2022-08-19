<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset='UTF-8'/>
    <title>Pagina convertida</title>
    <meta http-equiv="X-UA-Compatible" name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
 <body>

<?php
$vogais = array(
   "a","e","i","o","u",
    "A","E","I","O","U",
    "á","é","í","ó","ú",
    "Á","É","Í","Ó","Ú",
    "à","è","ì","ò","ù",
    "À","È","Ì","Ò","Ù",
    "ã","õ",
    "Ã","Õ",
);
$palavra = $_POST['palavra'];

$novafrase = str_replace($vogais, '#', $palavra);

?>
<div class="card text-white bg-success mb-3" style=" max-width: 18rem; align-items: center;">
  <div class="card-header">Conversão da frase!!</div>
  <div class="card-body">
    <h5 class="card-title">Success✌✌🎉👏 
        <br> Aww yeah, frase convertida com sucesso!!!😎</h5>
    <?php
    echo "Essa é a sua frase: ".$novafrase;
    ?>
  </div>
</div>
<a href="../index.html"><button type="button" class="btn btn-secondary">Voltar</button></a>

 </body>
</html>