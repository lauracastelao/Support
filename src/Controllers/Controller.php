<?php

namespace App\ClientControllers;

use App\Core\View;
use App\Models\Client;
use App\Models\Logger;

class Controller {

    private Logger $logger;

    public function __construct(Logger $logger)
    {

         $this->logger = $logger;

        if (isset($_GET["action"]) && ($_GET["action"] == "create")) {
            $this->create();
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "store")) {
            $this->store($_POST);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "edit")) {
            $this->edit($_GET["id"]);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "update")) {
            $this->update($_POST, $_GET["id"]);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "delete")) {

            $this->delete($_GET["id"]);
            return;
        }

        $this->index();
    }

    public function index(): void
    {

        $client = new Client();
        $Client = $client->all();
        
        new View("ClientList", ["client" => $Client]);
    }

    public function create(): void
    {
        /*echo 'Aqui tendremos el Formulario para crear';*/
        new View("CreateClient");
        
    }

    public function store(array $request): void
    {
       
        $newClient = new Client(Null,$request["client"],$request["issue"]);

        $newClient->save();

        $this-> logger->logCreate($newClient);


        $this->index();
    }

    public function delete($id)
    {
        $clientHelper = new Client();
        $client = $clientHelper->findById($id);
        $client->delete();


        $this-> logger->logDelete($client);

        $this->index();
    }

    public function edit($id)
    {
        //Find Client By Id
        $clientHelper = new Client();
        $client = $clientHelper->findById($id);
        //Execute view with student atributes
        new View("EditClient", ["client" => $client]);
    }
    
    public function update(array $request, $id)
    {
        // Update Client By ID
        $clientHelper = new Client();
        $client = $clientHelper->findById($id);
        $client->rename($request["client"],$request["issue"]);
        $client->update();
        
        $this-> logger->logUpdate($client);

        // Return to View List
        $this->index();
    }
}