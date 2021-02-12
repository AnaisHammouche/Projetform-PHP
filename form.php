<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $options = ['inputs' => [ ['type' => 'text', 'name' => 'username'], ['type' => 'password', 'name' => 'password'] ], 'method' => 'post', 'action' => 'action.php' ];
    
    function generate_form($options){

        echo ('<form method="'.$options['method'].'" action="'.$options['action'].'">');
        echo PHP_EOL;
        for ($i=0;$i<sizeof($options['inputs']);$i++){
            echo ('<input name="'.$options['inputs'][$i]['name'].'" type="'.$options['inputs'][$i]['type'].'">');
            echo PHP_EOL;
        }
        echo ('</form>');
        
    }
 
    generate_form($options);
    ?>
                      
</body>
</html>
