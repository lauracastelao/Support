<?php

use App\Models\Client;

    require_once("./Layout.php");
    require_once("./Nav.php");
    // require_once("./Client.php");
    // $data["client"]= new Client(100);
?>
<body class="d-flex flex-column mb-3  bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            height: 100vh"> 

<div class="edit row justify-content-center">
        <main class="card border border-warning border border-3 mt-3" style="width: 80%; height:27rem; display:flex; justify-content:center; ">

        <h2 class="text-center" style="margin-bottom: 3rem; margin-top: 1rem;">Edit Issue</h2>
        
        <form class="justify-content-center"  method="post">
            <div class="input-group" style=" margin-bottom: 2rem; width: 90%; margin-left: 5%;">
                <span class="input-group-text">client</span>
                <input class="form-control" type="text" name="client" required value='<?php echo $data["client"]->getClient() ?>'>
            </div>

            <div class="input-group" style="width: 90%; margin-left: 5%;">
                <span class="input-group-text">detail description</span>
                <input class="form-control" area-label="With textarea" type="text" name="issue">
            </div>
            
            <div class="botones" style="margin: 2rem;display:flex; justify-content:space-evenly">
                <input class="btn-mg btn-outline-success go-add-task float"type="submit" value="Edit">
                <input class="btn-mg btn-outline-warning go-add-task float"type="reset" value="Reset">
                <a href="./index.php"><button type="button" id="button-cancel" class="btn-mg btn-outline-danger button-cancel">Cancelar</button></a>
            </div>

        </form>
    </main>
</div>

    <?php 
    require_once("./Footer.php");
    ?>

</body>