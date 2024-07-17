<?php 



#cvariaveis de conecao para banco de dados
$server_name="localhost";
$user_name="cefas";
$password="linux0101";
$data_base_name="Mavgest_site";



$connection=new mysqli($server_name,$user_name,$password,$data_base_name);


if ($connection->connect_error){

    die("teve falha na conecao com o banco de dados");
}
else{

    echo(".");
}