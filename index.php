
 <?php 


/*Questão 1: Crie um programa para cadastrar 10 registros (em uma matriz), conforme abaixo:

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
    */
// Vamos ver todos os erros

$veiculos = [
    'carro1' => [
        'num_registro' => 0,
        'modelo' => "Uno",
        'fabricante'=> "Fiat",
        'cor'=> "prata",
        'portas'=> "4",
        'ano'=> "2018"
    ],
    'carro2' => [
        'num_registro' => 1,
        'modelo' => "Fiesta",
        'fabricante'=> "Ford",
        'cor'=> "preto",
        'portas'=> "2",
        'ano'=> "2016"
    ],
    'carro3' => [
        'num_registro' => 2,
        'modelo' => "Doblo",
        'fabricante'=> "Fiat",
        'cor'=> "verde",
        'portas'=> "4",
        'ano'=> "2013"
    ],
    'carro4' => [
        'num_registro' => 3,
        'modelo' => "Celta",
        'fabricante'=> "GM",
        'cor'=> "preto",
        'portas'=> "2",
        'ano'=> "2012"
    ],
    'carro5' => [
        'num_registro' => 4,
        'modelo' => "March",
        'fabricante'=> "Nissan",
        'cor'=> "prata",
        'portas'=> "2",
        'ano'=> "2016"
    ],
    'carro6' => [
        'num_registro' => 5,
        'modelo' => "Cobalt",
        'fabricante'=> "GM",
        'cor'=> "Branco",
        'portas'=> "2",
        'ano'=> "2012"
    ],
    'carro7' => [
        'num_registro' => 6,
        'modelo' => "Ranger",
        'fabricante'=> "Ford",
        'cor'=> "prata",
        'portas'=> "4",
        'ano'=> "2018"
    ],
    'carro8' => [
        'num_registro' => 7,
        'modelo' => "Trail Blazer",
        'fabricante'=> "GM",
        'cor'=> "branco",
        'portas'=> "4",
        'ano'=> "2020"
    ],
    'carro9' => [
        'num_registro' => 8,
        'modelo' => "Ecosport",
        'fabricante'=> "Ford",
        'cor'=> "preto",
        'portas'=> "4",
        'ano'=> "2018"
    ],
    'carro10' => [
        'num_registro' => 9,
        'modelo' => "Tucson",
        'fabricante'=> "Hyundai",
        'cor'=> "vinho",
        'portas'=> "4",
        'ano'=> "2020"
    ]
    ];

    $time = $_POST['time'];
  
    switch($time){

     case '1':
        
        echo "<li>"."O modelo dos carros é: " .$veiculo['carro1']['modelo']."<br/>"." O ano do carro é: ".$veiculo['carro1']['ano']."<br/>";
        echo "<li>"."O modelo dos carros é: " .$veiculo['carro2']['modelo']."<br/>"." O ano do carro é: ".$veiculo['carro2']['ano']."<br/>";
        echo "<li>"."O modelo dos carros é: " .$veiculo['carro3']['modelo']."<br/>"." O ano do carro é: ".$veiculo['carro3']['ano']."<br/>";
        echo "<li>"."O modelo dos carros é: " .$veiculo['carro4']['modelo']."<br/>"." O ano do carro é: ".$veiculo['carro4']['ano']."<br/>";
        echo "<li>"."O modelo dos carros é: " .$veiculo['carro5']['modelo']."<br/>"." O ano do carro é: ".$veiculo['carro5']['ano']."<br/>";
        echo "<li>"."O modelo dos carros é: " .$veiculo['carro6']['modelo']."<br/>"." O ano do carro é: ".$veiculo['carro6']['ano']."<br/>";
        echo "<li>"."O modelo dos carros é: " .$veiculo['carro7']['modelo']."<br/>"." O ano do carro é: ".$veiculo['carro7']['ano']."<br/>";
        echo "<li>"."O modelo dos carros é: " .$veiculo['carro8']['modelo']."<br/>"." O ano do carro é: ".$veiculo['carro8']['ano']."<br/>";
        echo "<li>"."O modelo dos carros é: " .$veiculo['carro9']['modelo']."<br/>"." O ano do carro é: ".$veiculo['carro9']['ano']."<br/>";
        echo "<li>"."O modelo dos carros é: " .$veiculo['carro10']['modelo']."<br/>"." O ano do carro é: ".$veiculo['carro10']['ano']."<br/>";

      break;
      case '2':
        foreach($veiculos as $veiculo){
            if($veiculo["cor"] == 'prata'){
        
             echo "Modelo: {$veiculo['modelo']} \n<br/>";
            };
        };
        break;
     case '3':
      echo "Bambiiis";
      break;
     case '4':
      echo "Huum...aflético";
      break;
     default:
      echo "Não conheço time pequeno";
    }


?>
 