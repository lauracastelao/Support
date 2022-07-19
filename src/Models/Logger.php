<?php
namespace App\Models;

use App\Models\Clients;

class Logger {
    
    private $dirOpenLog = "./src/logs/log.txt";

    public function logCreate ($newClient){
        $logFile = fopen("{$this->dirOpenLog}", 'a') or die("Error creando archivo");
        fwrite($logFile, "\n".date("d/m/Y H:i:s")." se ha creado una solicitud con Nombre del Cliente: "."{$newClient->getclient()}"." con Issue: "."{$newClient->getissue()}") or 
            die("Error escribiendo en el archivo");fclose($logFile);
    }

    public function logUpdate ($newClient){
        $logFile = fopen("{$this->dirOpenLog}", 'a') or die("Error creando archivo");
        fwrite($logFile, "\n".date("d/m/Y H:i:s")." se ha actualizado ID: "."{$newClient->getId()}"." con Nombre del Cliente: "."{$newClient->getclient()}"." con Issue: "."{$newClient->getissue()}") or 
            die("Error escribiendo en el archivo");fclose($logFile);
    }

    public function logDelete ($newClient){

        $logFile = fopen("{$this->dirOpenLog}", 'a') or die("Error creando archivo");

        fwrite($logFile, "\n".date("d/m/Y H:i:s")." se ha eliminado ID: "."{$newClient->getId()}"." con Nombre del client: "."{$newClient->getclient()}"." con Issue: "."{$newClient->getissue()}") or 
            die("Error escribiendo en el archivo");fclose($logFile);

    }

}

?>