<?php

$url = "81670070";
$cep = file_get_contents("https://viacep.com.br/ws/{$url}/json/");
$data = json_decode($cep);

// Acessar os valores individuais
$cep = $data->cep;
$logradouro = $data->logradouro;
$complemento = $data->complemento;
$bairro = $data->bairro;
$localidade = $data->localidade;
$uf = $data->uf;
$ibge = $data->ibge;
$gia = $data->gia;
$ddd = $data->ddd;
$siafi = $data->siafi;

// Exibir os valores
echo "CEP: $cep<br>";
echo "Logradouro: $logradouro<br>";
echo "Complemento: $complemento<br>";
echo "Bairro: $bairro<br>";
echo "Localidade: $localidade<br>";
echo "UF: $uf<br>";
echo "IBGE: $ibge<br>";
echo "GIA: $gia<br>";
echo "DDD: $ddd<br>";
echo "SIAFI: $siafi<br>";
