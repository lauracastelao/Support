<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base MVC with PHP</title>
</head>
<body>
    

    <?php 
        var_dump($data);

        foreach ($data as $key => $value) {
            $html = <<<HTML
                <div>
                    $key . ':' . $value
                </div>
            HTML;

            echo $html;
        }

        echo "home sweet home. Hello {$data['name']}." 
    ?>

</body>
</html>