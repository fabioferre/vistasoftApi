<?php
include "Config/Env.php";
include "App/Imoveis.php";

$imovel = new App\Imoveis;



///

$dados = $imovel->filter(['CodigoCorretor', [4,5]])->get();


print_r($imovel);