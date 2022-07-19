<?php

namespace App\Models;


use App\Repositories\MysqlRepositories\MysqlConnection;

class Client {
    private ?int $id;
    private string $client;
    private ?string $date_time;
    private string $issue;
    private $mySqlConnection;
    private $table = "appointments";
    
    public function __construct( int $id = null, string $client = '', string $issue = '',string $detail='', string $date_time = '')
    {
        $this->date_time = $date_time;
        $this->client = $client;
        $this->issue = $issue;
        $this->detail = $detail;
        $this->id = $id;

        if (!$this->mySqlConnection) {
            $this->mySqlConnection = new MysqlConnection;
            
        }
    }

    public function getdate_time()
    {
        return $this->date_time;
    }

    public function getissue()
    {
        return $this->issue;
    }
    public function getdetail()
    {
        return $this->detail;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getclient()
    {
        return $this->client;
    }

    public function rename($client,$issue)
    {
        $this->client = $client;
        $this->issue = $issue;
        
    }

    public function save(): void
    {
        $this->database->mysql->query("INSERT INTO `{$this->table}` (`client`, `issue`) VALUES ('$this->client','$this->issue');");
    }

    public function all()
    {
        $query = $this->database->mysql->query("select * FROM {$this->table}");
        $clientArray = $query->fetchAll();
                
        $clientList = [];
        
        foreach ($clientArray as $client) {
            $clientItem = new Client ($client["id"], $client["client"], $client["issue"], $client["date_time"]);
            
            array_push($clientList, $clientItem);
        }
        
        return $clientList;
    }


    public function delete()
    {
        
        $query = $this->database->mysql->query("DELETE FROM `{$this->table}` WHERE `{$this->table}`.`id` = {$this->id}");
    }

    public function findById($id)
    {
        $query = $this->database->mysql->query("SELECT * FROM `{$this->table}` WHERE `id` = {$id}");
        $result = $query->fetchAll();

        return new Client($result[0]["id"], $result[0]["client"], $result[0]["issue"] , $result[0]["date_time"]);
    }


    public function Update()
    {
        $this->database->mysql->query("UPDATE `{$this->table}` SET `client` =  '{$this->client}', `issue` =  '{$this->issue}' WHERE `id` = {$this->id}");
    }
}