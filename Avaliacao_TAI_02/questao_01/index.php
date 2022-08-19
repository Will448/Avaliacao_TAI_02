<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ListaCarros</title>
</head>

<body>
<div class="table-responsive">
<table class="table table-hover table-bordered table-light ">
  <thead class="thead-dark">
        <tr>
      <th scope="col">Nº de registro</th>
      <th scope="col">Modelo</th>
      <th scope="col">Fabricante</th>
      <th scope="col">Cor</th>
      <th scope="col">Ano</th>
      <th scope="col">Qtd-Portas</th>
        </tr>
    </thead>
</div>
<!--
    \\\\ Aluno: Willian Bongiovanni \\\\
    
Questão 1: Crie um programa para cadastrar 10 registros (em uma matriz), conforme abaixo:

    nº registro, modelo, fabricante, cor, portas, ano
    
    0. Uno, Fiat, prata, 4, 2018
    1. Fiesta, Ford, preto, 2, 2016 
    2. Doblo, Fiat, verde, 4, 2013
    3. Celta, GM, preto, 2, 2012
    4. March, Nissan, prata, 2, 2016
    5. Cobalt, GM, branco, 2, 2012
    6. Ranger, Ford, prata, 4, 2018
    7. Trail Blazer, branco, GM, 4, 2020
    8. Ecosport, Ford, preto, 4, 2018
    9. Tucson, Hyundai, vinho, 4, 2020
    
    Listar:
    a) todos os modelos e os anos dos veículos
    b) todos os veículos cor prata
    c) todos os veículos, cor e quantidade de portas
    d) todos os veículos da Ford
    e) todos os veículos com ano de fabricação igual ou superior a 2015
    -->
 <?php 


$veiculos = [
     [
        'num_registro' => 0,
        'modelo' => "Uno",
        'fabricante'=> "Fiat",
        'cor'=> "Prata",
        'qtd_portas'=> "4",
        'ano'=> "2018",
     ],
     [
        'num_registro' => 1,
        'modelo' => "Fiesta",
        'fabricante'=> "Ford",
        'cor'=> "Preto",
        'qtd_portas'=> "2",
        'ano'=> "2016",
    ],
    [
        'num_registro' => 2,
        'modelo' => "Doblo",
        'fabricante'=> "Fiat",
        'cor'=> "Verde",
        'qtd_portas'=> "4",
        'ano'=> "2013",
    ],
    [
        'num_registro' => 3,
        'modelo' => "Celta",
        'fabricante'=> "GM",
        'cor'=> "Preto",
        'qtd_portas'=> "2",
        'ano'=> "2012",
    ],
    [
        'num_registro' => 4,
        'modelo' => "March",
        'fabricante'=> "Nissan",
        'cor'=> "Prata",
        'qtd_portas'=> "2",
        'ano'=> "2016",
    ],
    [
        'num_registro' => 5, 
        'modelo' => "Cobalt",
        'fabricante'=> "GM",
        'cor'=> "Branco",
        'qtd_portas'=> "2",
        'ano'=> "2012",
    ],
     [
        'num_registro' => 6,
        'modelo' => "Ranger",
        'fabricante'=> "Ford",
        'cor'=> "Prata",
        'qtd_portas'=> "4",
        'ano'=> "2018",
     ],
     [
        'num_registro' => 7,
        'modelo' => "Trail Blazer",
        'fabricante'=> "GM",
        'cor'=> "Branco",
        'qtd_portas'=> "4",
        'ano'=> "2020",
     ],
     [
        'num_registro' => 8,
        'modelo' => "Ecosport",
        'fabricante'=> "Ford",
        'cor'=> "Preto",
        'qtd_portas'=> "4",
        'ano'=> "2018",
     ],
     [
        'num_registro' => 9,
        'modelo' => "Tucson",
        'fabricante'=> "Hyundai",
        'cor'=> "Vinho",
        'qtd_portas'=> "4",
        'ano'=> "2020"
     ]
    ];


    $opcao = $_POST['opcao'];
  
    switch($opcao){

     case '1':
        
        foreach($veiculos as $veiculo){
            echo "
                <tr>
                    <td>" . $veiculo['num_registro'] . "</td>
                    <td>" . $veiculo['modelo'] . "</td>
                    <td>" . $veiculo['fabricante'] . "</td>
                    <td>" . $veiculo['cor'] . "</td>
                    <td>" . $veiculo['ano'] . "</td>
                    <td>" . $veiculo['qtd_portas'] . "</td>
                          
               </tr>";  
            
        };
        echo "</table>";
      break;
      case '2':
        foreach($veiculos as $veiculo){
            if (in_array("Prata", $veiculo)) { 
                echo "
                <tr>
                    <td>" . $veiculo['num_registro'] . "</td>
                    <td>" . $veiculo['modelo'] . "</td>
                    <td>" . "</td>
                    <td>" . $veiculo['cor'] . "</td>
                    <td>" ."</td>
                    <td>" . "</td>
                          
               </tr>";  
            };
        };
    echo "</table>";
     break;
     case '3':
        foreach($veiculos as $veiculo){
            echo "
            <tr>
                <td>" . $veiculo['num_registro'] . "</td>
                <td>" . $veiculo['modelo'] . "</td>
                <td>"."</td>
                <td>" . $veiculo['cor'] . "</td>
                <td>" . "</td>
                <td>" . $veiculo['qtd_portas'] . "</td>
    
           </tr>";  

          /*  echo "Nº registro: {$veiculo['num_registro']} \n<br/>";
            echo "Modelo: {$veiculo['modelo']} \n<br/>";
            echo "Cor: {$veiculo['cor']} \n<br/>";
            echo "Quantidade de portas: {$veiculo['qtd_portas']} \n<br/>";
            echo "<br/>";  */
        }
    echo "</table>";

      break;
     case '4':
        foreach($veiculos as $veiculo){
            if ($veiculo['fabricante'] == 'Ford') {
                echo "
             <tr>
                 <td>" . $veiculo['num_registro'] . "</td>
                 <td>" . $veiculo['modelo'] . "</td>
                 <td>" . $veiculo['fabricante'] . "</td>
                 <td>" . $veiculo['cor'] . "</td>
                 <td>" . $veiculo['ano'] . "</td>
                 <td>" . $veiculo['qtd_portas'] . "</td>
                       
            </tr>";
        };
    };
    echo "</table>";
      break;
      case'5':
        foreach($veiculos as $veiculo){
            if ($veiculo['ano'] >= 2015) { 
                echo "
             <tr>
                 <td>" . $veiculo['num_registro'] . "</td>
                 <td>" . $veiculo['modelo'] . "</td>
                 <td>" . $veiculo['fabricante'] . "</td>
                 <td>" . $veiculo['cor'] . "</td>
                 <td>" . $veiculo['ano'] . "</td>
                 <td>" . "</td>
                       
            </tr>";
               /* Uma maneira de realizar a impressão-Serve para todos, só mudar o valor do índice
                echo "Nº registro: {$veiculo['num_registro']} \n<br/>";
                echo "Modelo: {$veiculo['modelo']} \n<br/>";
                echo "Fabricante: {$veiculo['fabricante']} \n<br/>";
                echo "Cor: {$veiculo['cor']} \n<br/>";
                echo "<br/>";*/
            };
        };
    echo "</table>";
     break;
     default:
      echo "Desculpe está opção não está cadastrada no sistema ☹";
      
    }

?>
 <a href="form.html"><button type="button" class="btn btn-warning">Voltar</button></a>
 </body>
</html>