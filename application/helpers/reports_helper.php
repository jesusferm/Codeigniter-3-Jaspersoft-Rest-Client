<?php
require_once "vendor/autoload.php";
use Jaspersoft\Client\Client; 

function reporte($idRegistro, $name, $params, $type = 'pdf')
{
	$ci = &get_instance();
    try {
		$client = new Client('http://localhost:8080/jasperserver', 'jasperadmin', 'jasperadmin');
        $report = $client->reportService()->runReport('/reports/'.$name, $type, null, null, $params);
        $nombre_temporal = str_replace('/', '_', $name).'_'.$idRegistro.'.'.$type;
		$config['upload_path'] 		= './files/reports/';
		/* $config['max_size']     	= '1000000';
		$config['max_width'] 		= '10240000000';
		$config['max_height'] 		= '76889';
		$config['encrypt_name'] 	= true;
		$config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf';
		$config['file_name'] 		= $nombre_temporal; */
		write_file($config['upload_path'].$nombre_temporal, $report);
        return 'files/reports/'.$nombre_temporal;
    } catch (Throwable $error) {
        return 'error '.$error;
    }
}
