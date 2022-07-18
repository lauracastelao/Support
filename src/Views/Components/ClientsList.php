<html>

<?php 
    require_once("./Layout.php"); 
    require_once("./Nav.php");
?>

<body id="page-top" class="body-index" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg')">

    <main>
        <div id="wrapper">
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <div class="container-fluid">
                        <div class="card shadow mb-4 mt-2 border-warning border border-3">
                            
                        <div class="card-body">
                            <div class="table-responsive">
                                    
                                <table class="table table-bordered" id="dataTable" cellspacing="0">
                                 <thead>
                                        <tr>
                                            <th>Date / time</th>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Issue</th>
                                            <th>Detail</th>
                                            <th><a href="?action=create">
                                            <button type="button" class="btn btn-outline-dark go-add-task float-end btn-mg">completed</button>
                                        </a>
                                        </th>
                                            
                                        </thead>
                                    
<tbody>
                <?php
                foreach ($data["client"] as $client) {
                    echo "
                    <tr>
                        <td>{$client->getDate_Time()}</td>
                        <td>{$client->getclient()}</td>
                        <td>{$client->getissue()}</td>
                        <td>{$client->getdetail()}</td>
                        <td>{$client->getId()}</td>
                        <td>               
                        <a href='?action=edit&id={$client->getId()}'><i class='lnr lnr-pencil'></i></a>
                            <a href='?action=delete&id={$client->getId()}'><i class='lnr lnr-trash'></i></a>
                        </td>
                    </tr>
                    ";
                } ?>

            </tbody>
        </table>
    </main>
    <?php 
    require_once("./Footer.php");
    ?>
</body>

</html>