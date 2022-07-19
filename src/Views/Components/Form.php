<?php 

require_once("./Layout.php");
require_once("./Nav.php"); 
// require_once("./Logger.php"); 

?>
<body class="d-flex flex-column mb-3  bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            height: 100vh"> 
        <div class="container d-flex justify-content-center">


        <form method="post" class="bg-light text-dark border border-warning border border-3 text-dark p-5 m-5 d-flex justify-content-evenly w-100"' >


        <div class="name_theme d-flex flex-column">
        <div class="mb-2">

            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="name" class="form-control"  id="Input1" placeholder="nombre">

        </div>

        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Theme</label>
            <input type="theme" class="form-control  id="Input1" placeholder="Theme" required>

        </div>
        </div>

        <div class="description_buttons d-flex flex-column">
        <div class="mb-4">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="Textarea1" rows="8"></textarea required>
            
        </div>
        <div class="botones" style="margin-bottom:2rem">
        <input class="btn-mg btn-outline-success go-add-task float"type="submit" name="cancel" value="Cancel">
                <input class="btn-mg btn-outline-warning go-add-task float"type="reset" name="reset" value="Reset">
                <input class="btn-mg btn-outline-success go-add-task float"type="submit" name="send" value="Send">  
        </div>
        </form>


        </div>
        </div>
    </body>
 

<?php 
    require_once("./Footer.php");
    ?>
</html>