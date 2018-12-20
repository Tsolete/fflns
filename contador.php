<?php 
//include_once('classes/UserInfo.php');

//$info = new UserInfo;

$url_descarga="https://mega.nz/#!NEgmTCxb!o1icfGgNStKkZDdPOMb7wmibTxHRXRw8hx3AzkkU8RQ";
//$navegador = $info->browser()['browser'];
//$version_operativo = $info->osVersion();
//$sistema_operativo = $info->operatingSystem();
//$version_navegador = $info->browserVersion();
//$ip = $info->ip();

/*if ($info->isMobile() == 1){
//    $movil = "Si";
//}
//else {
//    $movil = "No";
}

$pais = geoip_record_by_name($ip);

unset($pais['dma_code']);
unset($pais['area_code']);

date_default_timezone_set('UTC');
$fecha = date('d-m-Y H:i:s T');
*/
$archivo = "temp/contador.txt";
$abre = fopen($archivo, "r");
$total = fread($abre, filesize($archivo));
fclose($abre);
$abre = fopen($archivo, "w");
$total = $total + 1;
fwrite($abre, $total);
fclose($abre);
/*
$fichero = 'temp/log.txt';
$fp = fopen($fichero, 'a');

fwrite($fp, "Fecha: $fecha\n");
fwrite($fp, "Sistema Operativo: $sistema_operativo\n");
fwrite($fp, "Version Sistema Operativo: $version_operativo\n");
fwrite($fp, "Navegador: $navegador\n");
fwrite($fp, "Version Navegador: $version_navegador\n");
fwrite($fp, "Movil: $movil\n");
fwrite($fp, "IP: $ip\n");
fwrite($fp, "Veces descargado: $total\n");
foreach ($pais as $clave => $valor) {
    fwrite($fp, "$clave: $valor\n");
}
fwrite($fp, "<----------------------->\n");

fclose($fp);
*/
header("location:$url_descarga");
?>